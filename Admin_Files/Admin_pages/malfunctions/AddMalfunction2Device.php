
<!--  author: Nejood Abdulaziz Alfashka
        ID: 1505971
      date: 31/7/2018
-->
<!--
     summary of page:

 This page is for the admin to add malfunction and maintenance to device.
 
-->

<!-- 
  ************************************************
-->

<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->

	<title>Add Malfunction to Device</title> <!-- the name of tab -->
	
</head> <!-- end Head-->
<body onload="setActiveFunction(6)"> <!-- start Body-->

  <!--        START INCLUDE     -->

<!-- to conn between header page and this document -->
<?php
include("../../Admin_header/header_Admin.php"); 
?>
<?php
include("../../Admin_sidemenue/sideMenuMalfunction.php"); 
?>
<!--       END INCLUDE      -->

<!-- start of the center tag for centering the contents -->
<center>
	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Add Malfunction to Device<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

<br> <!-- this tag to insert a single line break -->

<!---------------------------------START FORM: to take input from user and do action ----------------------------------->
<form action="" method="post">
	
	<!-- start of the label tag for choose a device type -->
	<label class="labels" id="label3">
		choose the device type*
		<br> <!-- this tag to insert a single line break -->
		
		<!-- start of the select tag for choose a device type -->
		<select class="dropdown" id="select3" name="deviceType"  required> 

		<!-- start of the option tag for the first option of device type -->
			<option  value="Computer">Computer
			</option>
			<!-- end of the option tag for the first option of device type -->

			<!-- start of the option tag for the second option of device type -->
			<option value="Projector">Projector
			</option>
			<!-- end of the option tag for the second option of device type -->

			<!-- start of the option tag for the third option of device type -->
			<option value="Electronic Screen">Electronic Screen
			</option>
			<!-- end of the option tag for the third option of device type -->

			<!-- start of the option tag for the fourth option of device type -->
			<option  value="Smart Board">Smart Board
			</option>
			<!-- end of the option tag for the fourth option of device type -->

			<!-- start of the option tag for the fourth option of device type -->
			<option  value="TV">TV
			</option>
			<!-- end of the option tag for the fourth option of device type -->
	         <option  value="adapter">Adapter
			</option>
		
			<!-- end of the option tag for the fourth option of device type -->

		</select>
		<!-- end of the select tag for choose a device type -->
	</label>
	<!-- end of the label tag for choose a device type -->
	<br> <!-- this tag to insert a single line break -->
	<br> <!-- this tag to insert a single line break -->

	<label class="labels" id="label4"> enter the malfunction type: </label>
      <br> <!-- this tag to insert a single line break -->
     <input class="textbox" id="textbox1" type="text" name="malfunction_type"><br>

    <br> <!-- this tag to insert a single line break -->
	<br> <!-- this tag to insert a single line break -->
	<label class="labels" id="label4"> enter the maintenance type: </label>
      <br> <!-- this tag to insert a single line break -->
     <input class="textbox" id="textbox1" type="text" name="maintenance_type"><br>

    <br> <!-- this tag to insert a single line break -->
	<br> <!-- this tag to insert a single line break -->

	<!-- start of input tag from type button for go to the next page -->
	<input type="submit" name="submit" value="add" class="buttons" id="button1" required>
	<!-- end of input tag from type button for go to the next page -->
</form>
<!------------------------------------------------------- END FORM ----------------------------------------------------->

</center>
<!-- end of the center tag for centering the contents -->


<!--                 *START PHP CODE: to conned the interface with the Database -->
<?php
/* this query is to add malfunction and maintenance to device in database */
if($_POST){ //start post

require_once('../../connection/connection.php'); //index.php

if(isset($_POST['submit'])){ 

///variables have values from fields:
$deviceType=$_POST['deviceType'];
$malfunction_type=$_POST['malfunction_type'];
$maintenance_type=$_POST['maintenance_type'];

//------------------------------------------------------------------------
//              **malfunctin query:

if(strlen($malfunction_type)>0){
$check="SELECT * from malfunctiontypes";
mysqli_query($conn,$check);

$row= "SELECT malfunctionType_pk from malfunctiontypes where device_type = '$deviceType' AND malfunction = '$malfunction_type'"; //get malfunctionType_pk
$results = mysqli_query($conn,$row);

if(mysqli_num_rows($results) == 0 && strlen($malfunction_type)!=0) { //if there is no this type of malfunction with device

$sql = "INSERT INTO malfunctiontypes(device_type,malfunction) VALUES('$deviceType', '$malfunction_type')"; 
//insert malfunctiont
      if(mysqli_query($conn,$sql)){
      	  //if the query is done correctly:
      	     echo "<script> 
     alert('The malfunction $malfunction_type wae added to $deviceType successfully.');
     </script>";
      }

else{  //if the malfunction is exist
echo "<script>alert('Try Agin !');</script>";
} //end else
} //end malfunction
else{  //if the malfunction is exist
echo "<script>alert('The malfunction $malfunction_type already existing with the $deviceType !');</script>";
} //end else
}//end if
//-------------------------------------------------------------------------
//                 **maintenance query:
if(strlen($maintenance_type)>0){
$check="SELECT * from maintenance_type";
mysqli_query($conn,$check);

$row= "SELECT maintenace_pk from maintenance_type where device_type = '$deviceType' AND maintenance_type = '$maintenance_type' "; //get malfunctionType_pk
$results = mysqli_query($conn,$row);

if(mysqli_num_rows($results) == 0) { //if there is no this type of maintenance with device

$sql = "INSERT INTO maintenance_type(device_type,maintenance_type) VALUES('$deviceType', '$maintenance_type')"; 
        //insert maintenance
       if(mysqli_query($conn,$sql)) {
       	   //if the query is done correctly:
     echo "<script>
     alert('The maintenance $maintenance_type wae added to $deviceType successfully .');
     </script>";} //end if
else{
	echo "<script>alert('Try Agin !');</script>";
	} //end else
	 
} //end maintenance
else{
echo "<script>alert('The maintenance $maintenance_type already existing with the $deviceType !');</script>";
	} //end else

} //end if
//-------------------------------------------------------------------------
  }   //if submit         
  mysqli_close($conn);  //close connion
  } //if post  
  
?>
<!--                 *END PHP CODE     -->
</body> <!-- end Body -->
</html> <!-- end HTML-->