
<!DOCTYPE html>

<!-- author @Nadia Bahatheg  2/7/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to delete a building by letting him select the required building's name from a drop down list and click on "delete" button then a confirmation message to insure that the selected building is what the use want--> 

<html><!--start of html-->
<head><!--start of head-->

	
		



	<!-- titel of the page -->
	<title>Delete Building</title>
</head><!--end of head-->

<body onload="setActiveFunction(3)"><!--start of body-->

	
	<!--link with header to avoid repeation of header code-->
	<?php include("../../Admin_header/header_Admin.php");?>


	<!--link with side menu to avoid repeation of side menu code-->
		<div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

<!-- form for let the admin delete a building by choosing its name -->
<!-- start of the center tag for centering the contents -->
<center>

<!-- start of h1 tag for the page title -->
<h1 class="titles" id="title1">Delete Building<br>________________
</h1>
<!-- end of h1 tag for the page title -->


<!-- start of the form tag for delete a building -->
<form onsubmit="return confirm('Are you sure that you want to delete building '+document.getElementById('select1').value+'?!')" method="post" action="deleteBuildingDB.php" >

    
	<br>
	<!-- start of the label tag for choose a building -->
	<label class="labels" id="label1">choose building*

	<br>

	<?php
/*22/7/2018*/

//call the connection file
require_once('../../connection/connection.php');


//select all building from building table
$sql= "select building_name from building ";
$check=mysqli_query($conn,$sql);

//if there are buildings in the system
if(mysqli_num_rows($check)>0){

$option='';//intilaize option


while ($row=mysqli_fetch_assoc($check)) {

	//stroe building name of each row in option
	$option.='<option value="'.$row['building_name'].'">'.$row['building_name'].'</option>';
}


}//end if
else
{
	echo "<p>There is not any building in the system</p>";
}

//close the connection with the server
mysqli_close($conn);
?>

	<!-- start of the select tag for choose a building -->
	<select class="dropdown" id="select1" name="buildingName" required>

	<!--print option from the above while loop-->
	<?php echo"$option;"?>
	</select>
	<!-- end of the select tag for choose a building -->

	</label>
	<!-- end of the label tag for choose a building -->

<br>
 	<br>

	<!-- start of input tag from type input button for delete -->

	<input type="submit"  value="Delete" class="buttons" id="button1" name="button1" >
	
<!-- end of input tag from type button for delete -->




</form>
<!-- end of the form tag for delete a building -->



</center>
<!-- end of the center tag for centering the contents -->


	

</body><!--end of body-->

</html><!--end of html-->