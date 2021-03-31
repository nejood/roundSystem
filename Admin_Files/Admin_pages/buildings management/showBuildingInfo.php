<!DOCTYPE html>
<!-- author @Nadia Bahatheg  17/7/2018

this page allow the user with type:"Admin" to show the device by letting him choose the required building's name from a drop down list then select the required Class's name from a drop down list and choose the device type then go to the next page to show the device information -->

<html>
<head>

	<title>Show Building Info</title>

<style type="text/css">
	
	.table {
		margin-top: 2%;
    border-collapse: collapse;
    width: 50%;
     border: 2px solid #55967e;
     
}
.th,.td {
    text-align: center;
   width: 25%;
   height: 10%;
    border: 2px solid #55967e;

}

.tr:nth-child(even) {background-color: #f2f2f2;}
</style>

</head>

<body onload="setActiveFunction(3)">

  <!--No need for reapeat code use this and save the repeated code in seperate file-->	

 <?php include("../../Admin_header/header_Admin.php");?>
 <div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

	

	

<!-- start of the center tag for centering the contents -->
<center>
	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Show Building Info<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

    

<!-- start of the form tag for add a device -->
<form action="" method="post">
	
	<!-- start of the label tag for choose a building -->
	<label class="labels" id="label1">choose building*
<br>

	<?php
/*22/7/2018 Nadia Ali Bahatheg*/
require_once('../../connection/connection.php');

$sql= "select building_name from building ";
$check=mysqli_query($conn,$sql);

if(mysqli_num_rows($check)>0){
$option='';
while ($row=mysqli_fetch_assoc($check)) {
	$option.='<option value="'.$row['building_name'].'">'.$row['building_name'].'</option>';
}


}
else
{
	echo "<p>There is not any building in the system</p>";
}

?>
<!-- start of the select tag for choose a building -->
	<select class="dropdown" id="select1" name="buildingName" required>

	
	<?php echo"$option;"?>
	</select>
	<!-- end of the select tag for choose a building -->
	<br>
    <br>


	<!-- start of input tag from type button for go to the next page -->
	<input type="submit" name="submit" value="Show" class="buttons" id="button1">
	<!-- end of input tag from type button for go to the next page -->
</form>
<!-- end of the form tag for add a device -->

<br>
<table class="table" id="table">
	
<?php

$user_name=' ';
$numclass=' ';
$building_name=' &nbsp';
if(isset($_POST['submit'])){
echo '<tr class="tr"><td class="td th">Building Name</td><td class="td th">Employee Name</td><td class="td th">Number of Classes</td></tr>';

	
$building_name=$_POST['buildingName'];

echo '<tr class="tr"><td class="td">'.$building_name.'</td>';

$sql_class="SELECT count(class_pk) As num from class where building_name='$building_name'";//num of class
$sql_user="SELECT user_name from user,userandbuilding where id=user_id AND building_name='$building_name' AND end_date >= CURDATE()";//employee
$check=mysqli_query($conn,$sql_user);

if(mysqli_num_rows($check)>0){

while ($row=mysqli_fetch_assoc($check)) {
	$user_name.='<td class="td">'.$row['user_name'].'</td>';
	
}


}

else{
	echo '<td class="td">No employee is assigned currently</td>';
	
}

$check=mysqli_query($conn,$sql_class);
if(mysqli_num_rows($check)>0){

$row=mysqli_fetch_assoc($check);
	echo '<td class="td">'.$row['num'].'</td></tr>';
}



else{
echo '<td class="td">0</td></tr>';
}
mysqli_close($conn);
}

?>


	


</table>


</center>
<!-- end of the center tag for centering the contents -->


</body>
</html>