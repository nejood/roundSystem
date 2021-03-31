<!-- Nadia Ali Bahatheg 25/7/2018
nadiabahatheg@gmail.com

this page delete a building by its name from the database building table 
-->




<?php


/*excute once the user hits submit button in deleteBuilding page*/
if(isset($_POST['submit'])){ 

//call the connection file
 require_once('../../connection/connection.php');

//store the data from the deleteBuilding page's form
 $building_name =$_POST['building_name'];
 $class_num =$_POST['class_num'];
 

//excute delelte query
$sql="DELETE from class where class_num='".$class_num."' AND building_name='".$building_name."'";



$check=mysqli_query($conn,$sql);

//if the query excuted successfully
if (isset($check)) {
    echo "<script type='text/javascript'>alert('Class: $class_num was deleted from Building $building_name')</script>";
} 

//when it fails
else {
   echo "<script type='text/javascript'>alert('ERROR: Could not able to execute $sql.')</script>". mysqli_error($conn);
}

//close the connection with the server
mysqli_close($conn);
echo ("<script> window.location.href = 'deleteClass.php'</script>");//direct the user to deleteClass.php to allow deleting more buildings
}
?>