
<!DOCTYPE html>
<!-- author @Nadia Bahatheg  3/7/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to delete a class by letting him select the required building's name from a drop down list then select the required Class's name from a drop down list and click on "delete" button-->

<html><!--start of html-->
<head><!--start of head-->


	<!-- title of the page -->
	<title>Delete Class</title>
</head><!--end of head-->
<body onload="setActiveFunction(3)"><!--start of body-->


<!--link with header to avoid repeation of header code-->
  <?php include("../../Admin_header/header_Admin.php");?>

<!--link with side menu to avoid repeation of side menu code-->
      <div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

		
	<!-- form for let the admin delete a class by choosing its  building and its name -->

<!-- start of the center tag for centering the contents -->
<center>
	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Delete Class<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

    <br>

	<br>




<?php 
/*25/7/2018 */
//first query run when page load to show building name
     require_once('../../connection/connection.php');
    //select building info
         $sql = "SELECT * FROM  building  ";
//----------------------------
     $result= mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
//--------------------
     $option = '';
     // output data of each row
 while($row = mysqli_fetch_assoc($result)){
          
         $option .= '<option value = "'.$row['building_name'].'">'.$row['building_name'].'</option>';
   
} 
}else {
    $option.='<option value = "no">"there is no building"</option>';
}  

//close the connection with the server
 mysqli_close($conn);  

  ?>
<!------------------select building--------------------->

<!--form to select class to delete and show confirmation msg-->
<form action="deleteClassDB.php" method="post" onsubmit="return confirm('Are you sure that you want to delete class '+document.getElementById('class').value+'?!')">
  <!-------------- start building label -------------->

  
  	<!--label for choose building from drop down menu-->
	<label class="labels">choose building*</label>
	<br>

	<!--drop down menu for choosing building name linked with showDetails function by onchange event-->
	<select class="dropdown" onchange="showDetails(this.value,this.id)" id="building_name" name="building_name" required>

		<!--first option with no value to clarify to the user-->
		<option  value="">Select a Building:</option>

		<!--print the value of option variable in a loop(the above while loop)-->
<?php echo $option; ?>
	</select>
<!--end of building drop down menu-->

<!------------------select class--------------------->
<br>
<br>
	
	<!--label for choose class from drop down menu-->
	<label class="labels">choose class*</label>
	<br>

	<!--drop down menu for choosing class num linked with showDetails function by onchange event-->
	<select class="dropdown" onchange="showDetails(this.value,this.id)" id="class" name="class_num" required>
	</select>
	<!--end of class drop down menu-->
<br>
<br>

  <!-------------- start button (delete) input tag -------------->
    
  <input type="submit" name="submit" value="Delete" class="buttons" id="button1" >
  <!-------------- end button (delete) input tag -------------->
</form><!--end form-->



</center>
<!-- end of the center tag for centering the contents -->

<!------------------javaScript--------------------->
<script type="text/javascript">
	//get the value cames from option tag and id of select tag
function showDetails(str,idd) {
  //-----------------------------------
	var PHP_V;//for link of sql query code
//---------------------------------------
//---------------------check id of tag ----------------
if(idd=="building_name"){
  //check if user do not select option
  if (str=="") {
    document.getElementById("class").innerHTML="";
    return;
  } 
}//end if

//-------------------------------------------
//--------------XMLHttpRequest-----------------
/*The XMLHttpRequest object can be used to exchange data with a server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.*/
  if (window.XMLHttpRequest) {
    // create XMLHttpRequest object
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");//enables and returns a reference to an automation object for Microsoft
  }
  //-------------- just change cod below ------------
  //--------------if in building select--------------
  if(idd=="building_name"){
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("class").innerHTML=this.responseText;//show result of query in this tage
    }//end if
    
  }// end onreadystatechange
  PHP_V="class.php?building_name="+str;//send link of select room query
}//end if for building
//----------------end code can change-------------------
//-------------------------------------------------------
xmlhttp.open("GET",PHP_V,true);//initializes a newly-created request, or re-initializes an existing one.

  xmlhttp.send();//sends the request to the server
//---------------------------------------------------  
}//end function

</script>


  
</script>
</body><!--end body-->
</html><!--end html-->