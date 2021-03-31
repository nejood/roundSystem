<!DOCTYPE html>
<!-- author @Nadia Bahatheg  17/7/2018

this page allow the user with type:"Admin" to show the device by letting him choose the required building's name from a drop down list then select the required Class's name from a drop down list and choose the device type then go to the next page to show the device information -->

<html>
<head>

	<title>Show Class Info</title>
	

<style type="text/css">
	
	.table {
		margin-top: 2%;
    border-collapse: collapse;
    width: 50%;
      border: 2px solid #55967e;
}
.th, .td {
    text-align: center;
   width: 25%;
   height: 10%;
   border: 2px solid #55967e;

}

.tr:nth-child(even) {background-color: #f2f2f2;}

</style>
<!--link rel="stylesheet" href="print.css" type="text/css" media="print"/-->



</head>

<body onload="setActiveFunction(3)">
 <!--No need for reapeat code use this and save the repeated code in seperate file-->	

 <?php include("../../Admin_header/header_Admin.php");?>
 <div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

	

<!-- start of the center tag for centering the contents -->
<center>
	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Show Class Info<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

    <br>



<!-- start of the form tag for add a device -->
<form action="" method="post" onsubmit="changeDisplay()">
	<!--include the code for choosing a building to avoid code repeation-->
<!-- start of the label tag for choose a building -->
	<label class="labels" id="label1">choose building*

	<br>

	<?php
/*22/7/2018*/
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
	<input type="submit" name="submit" value="Show" class="buttons" id="button1" >
<br>

	<!-- end of input tag from type button for go to the next page -->
</form>
<!-- end of the form tag for add a device -->

<br>
<table class="table" id="classInfo" >


<?php
/*26/7/2018 Nadia Ali Bahatheg*/

if(isset($_POST['submit'])){
require_once('../../connection/connection.php');
$building_name=$_POST['buildingName'];
echo'<label class="labels" style="text-align: left;">Building: '.$building_name.'</label>';
echo '	<tr class="tr"><th class="td th">Class Number</th><th class="td th">Floor</th><th class="td th">Room Type</th></tr>';
$sql_class="SELECT *  from class where building_name='$building_name'";//num of class

$check=mysqli_query($conn,$sql_class);

if(mysqli_num_rows($check)>0){

while ($row=mysqli_fetch_assoc($check)) {
	echo '<tr class="tr"><td class="td">'.$row['class_num'].'</td><td class="td">'.$row['floor'].'</td><td class="td">'.$row['room_type'].'</td></tr>';
}

}


mysqli_close($conn);
}


?>
<br>
<br>

</table>

</center>
<!-- end of the center tag for centering the contents -->



</body>
</html>