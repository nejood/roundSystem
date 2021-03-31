<!--
Nadia Ali Bahatheg
2/8/2018

nadia.bahatheg@gmail.com

this page allow to insert TV  in deviceinclass table
-->

<!--start session to retrieve the data from other pages-->
<?php
session_start();
?>

<!DOCTYPE html>
<html><!--start of html-->
<head><!--start of head-->
	<title></title>
	
<style type="text/css">
		body{
			background-color: #cff0da;
		}
	</style>

	
</head><!--end of head-->
<body><!--start of body-->

</body><!--end of body-->
</html><!--end of html-->
<?php

//call the connection file
require_once('../../connection/connection.php');

//store the data from session
$class_pk=$_SESSION["class_num"];

//sql query to check if the class has devices
$sql="SELECT device_pk from deviceinclass where class_pk='$class_pk'";


//For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query
$check=mysqli_query($conn,$sql);


//when the class has devices
if(mysqli_num_rows($check)>0){

//Returns an array of strings that corresponds to the fetched row. NULL if there are no more rows in result-set
$row=mysqli_fetch_row($check);

$device_pk=$row[0];

	//update the chosen device's data from '' to the entered data
	$sql_com="UPDATE deviceinclass set TV='1' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);

//when the upadate query done successfully 
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The TV was added successfully.")';
echo '</script>';

}
else{
echo '<script language="javascript">';
echo 'alert("ERROR: Could not able to execute "+$sql)';
echo '</script>';
}
}

//if the class has no devices
else{

//query to insert the class into the deviceinclass table and the entered device info
	$sql_com="INSERT into deviceinclass(class_pk,TV) VALUES ('$class_pk','1')";
$check=mysqli_query($conn,$sql_com);

//when the insert query done successfully
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The TV was added successfully.")';
echo '</script>';
}
else{
	echo '<script language="javascript">';
echo 'alert("ERROR: Could not able to execute "+$sql)';
echo '</script>';
	
	
}

}
//close the connection with the server
mysqli_close($conn);

echo ("<script> window.location.href = 'addDevice.php'</script>");//direct the user to add device page if he want to add more
?>
