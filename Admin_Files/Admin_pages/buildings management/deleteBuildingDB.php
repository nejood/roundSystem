<!-- Nadia Ali Bahatheg 22/7/2018
	nadia.bahatheg@gmail.com

	this page delete specific building from the database building table
-->




<?php

/*excute when the user hits submit button*/
if(isset($_POST['button1'])){ 

	//call the connection file
	require_once('../../connection/connection.php');

	//store the building name from deleteBuilding page
 $building =$_POST['buildingName'];

// query for deleting the building
$sql = "DELETE from building WHERE building_name='$building'";


$check=mysqli_query($conn,$sql);

//if the query excuted successfully
if (isset($check)) {
    echo "<script type='text/javascript'>alert(' $building was deleted successfully ')</script>";
} 

//if it fails
else {
   echo "<script type='text/javascript'>alert('ERROR: Could not able to execute $sql.')</script>". mysqli_error($conn);
}

//close the connection with the server
mysqli_close($conn);
echo ("<script> window.location.href = 'deleteBuilding.php'</script>");//direct the user to deleteBuilding page to delete more buildings
}
?>