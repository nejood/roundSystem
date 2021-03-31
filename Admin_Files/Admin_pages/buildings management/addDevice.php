
<!DOCTYPE html>

<!-- author @Nadia Bahatheg  10/7/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to add a device by letting him choose the required building's name from a drop down list then select the required Class's name from a drop down list and choose the device type then go to the next page to fill the device information -->

<!--start of html tag-->
<html>
<!--start of head tag-->
<head>
  <!-- title of the page -->
  <title>Add Device</title>
  	
     
</head><!--end of head tag-->
<body onload="setActiveFunction(3)"><!--start of body-->
  <?php 
//call the connection file
   require_once('../../connection/connection.php');

    //sql query to retrieve building name from the building table
         $sql = "SELECT * FROM  building  ";
//----------------------------

    //For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query
     $result= mysqli_query($conn,$sql);

     //if the building are more than zero which means there are some buildings in the database
            if (mysqli_num_rows($result) > 0) {
//--------------------
     $option = '';//intialize option

//Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
 while($row = mysqli_fetch_assoc($result)){
          
          //store the value of building_name column of the current row in option 
         $option .= '<option value = "'.$row['building_name'].'">'.$row['building_name'].'</option>';
   
} 
}
//if there is not any building in the database print error message
else {
    echo "<p>There is not any building in the system</p>";
}  

    //close the connection with the server
    mysqli_close($conn);

  ?>
<!------------------select building--------------------->

<!-- start of the center tag for centering the contents -->
<center>



<!--link with header to avoid repeation of header code-->
	<?php include("../../Admin_header/header_Admin.php");?>

<!--link with side menu to avoid repeation of side menu code-->
<div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

			<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Add Device<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

    <br>

    <!-- start of the form tag for add a device -->
<form action="addDeviceDB.php" method="post">

  <!--label for choose building from drop down menu-->
  <label class="labels">Select Building*</label>
  <br>

  <!--drop down menu for choosing building name linked with showDetails function by onchange event-->
  <select onchange="showDetails(this.value,this.id)" id="Building" class="dropdown" name="building_name" required>

    <!--first option with no value to clarify to the user-->
    <option value="">Select a Building:</option>

    <!--print the value of option variable in a loop(the above while loop)-->
<?php echo $option; ?>
  </select>
  <!--end of building drop down menu-->

<!------------------select class--------------------->
<br>
<br>
  <!--label for choose class from drop down menu-->
  <label class="labels">Select Class*</label>
  <br>
  <!--drop down menu for choosing class num linked with showDetails function by onchange event-->
  <select onchange="showDetails(this.value,this.id)" id="class" class="dropdown" name="class_num" required>
  </select>
  <!--end of class drop down menu-->
<br>
<br>
<!------------------select device--------------------->
<!--label for choose device type from drop down menu-->
  <label class="labels">Select Device*</label>
  <br>

  <!--drop down menu for choosing device type -->
 <select name="deviceType" id="device" class="dropdown" name="deviceType" required>
 </select>
  <!--end of device drop down menu-->

	<br>
	<br>

	<!-- start of input tag from type button for add a device -->
	<input type="submit" name="submit" value="Add" class="buttons" id="button1">
	<!-- end of input tag from type button for add a device -->
</form>
<!--end of form-->
</center>
<!--end of center-->
<!------------------javaScript--------------------->
<script type="text/javascript">
  //get the value cames from option tag and id of select tag
function showDetails(str,idd) {
  //-----------------------------------
  var PHP_V;//for link of sql query code
//---------------------------------------
//---------------------check id of tag ----------------
if(idd=="Building"){
  //check if user do not select option
  if (str=="") {
    document.getElementById("class").innerHTML="";
    return;
  } 
}//end if
//---------------------check id of tag ----------------
else if(idd=="class"){
   //check if user do not select option
if (str=="") {
    document.getElementById("device").innerHTML="";
    return;
  }
}//end if
//-------------------------------------------
//--------------XMLHttpRequest-----------------
/*The XMLHttpRequest object can be used to exchange data with a server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.*/
  if (window.XMLHttpRequest) {
    // creating XMLHttpRequest object
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");//enables and returns a reference to an automation object for Microsoft
  }
  //-------------- just change cod below ------------
  //--------------if in building select--------------
  if(idd=="Building"){
    //Defines a function to be called when the readyState property changes
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("class").innerHTML=this.responseText;//show result of query in this tage
    }//end if
    
  }// end onreadystatechange
  PHP_V="chooseClass_dyn.php?B="+str;//send link of select class query
}//end if for building
 //--------------if in class select--------------
else if(idd=="class"){
   //Defines a function to be called when the readyState property changes
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("device").innerHTML=this.responseText;//show result of query in this tage
    }//end if
    
  }//end onreadystatechange
  PHP_V="deviceAdd.php?B="+str;//send link of select device query
    
}//end else if for class
//----------------end code can change-------------------
//-------------------------------------------------------
xmlhttp.open("GET",PHP_V,true);//initializes a newly-created request, or re-initializes an existing one.

  xmlhttp.send();//sends the request to the server
//---------------------------------------------------  
}//end function

</script>


</body><!--end of body-->
</html><!--end of html-->

