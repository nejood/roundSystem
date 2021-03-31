
<!DOCTYPE html>
<!-- Nadia Ali Bahatheg  25/7/2018

nadia.bahatheg@gmail.com

this page show class dynamically according to chosen building
-->

<html><!--start of html tag-->

<!--start of head tag-->
	<head>

<!--end of head tag-->		
	</head>
<body><!--start of body-->
<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$building_name  = $_GET['building_name'];//get the building name from deleteClass page
		

		//call the connection file
		require_once('../../connection/connection.php');


				//retreive all classes of the chosen building
				 $sql = "SELECT * FROM  class where building_name IN ('".$building_name ."')";


		 $result= mysqli_query($conn,$sql);


            if (mysqli_num_rows($result) > 0) {
     
     $option = '';
     // output data of each row
 while($row = mysqli_fetch_assoc($result)){

         $option .= '<option value = "'.$row['class_num'].'">'.$row['class_num'].'</option>';     
} 
}else {
     $option.='<option value = "no">"there is no classes"</option>';
}	

//close the connection with the server	
mysqli_close($conn);
		
	}
	?>
	<!--label for dropdown list-->
	<label>Class Number</label>
	<br>

	<form >
		<!--drop down menu for choosing class num linked with showDetails function by onchange event-->
 <select name="class_num" onchange="showID(this.value)" style="max-height:20px;overflow:scroll;">

<!--option with no value to clarify to the user-->
 <option value="">Select a class:</option> 

 <!--print the value of option variable in a loop(the above while loop)-->
<?php echo $option; ?>
</select>
<!--end of class drop down list-->
  
  <!-------------- start button (delete) input tag -------------->
    
  <input type="submit" name="submit" value="Delete" class="buttons" id="button1">
  <!-------------- end button (delete) input tag -------------->

</form><!--end of form-->
<br>
</body><!--end of body-->
</html><!--end of html-->