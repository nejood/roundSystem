<?php
require('../../connection/connection.php'); //index.php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	$statusnowA=$_GET["statusnow"];

	$stateoldA=$_GET["stateold"];

	$bnameA=$_GET["bname"];
	$unameA=$_GET["uname"];
	$cnameA=$_GET["cname"];
	$mdateA=$_GET["mdate"];
	$dvnameA=$_GET["dvname"]; 

	$ndateA=$_GET["ndate"];
	$index = $_GET["index"];
	$cdateA = $_GET["cdate"];
}


$stateold = explode(',', $stateoldA);
$statusnow = explode(',', $statusnowA);
$bname = explode(',', $bnameA);
$uname = explode(',', $unameA);
$cname = explode(',', $cnameA);
$mdate = explode(',', $mdateA);
$dvname = explode(',', $dvnameA);
$cdate = explode(',', $cdateA);
$ndate = explode(',', $ndateA);
for ($i=0; $i <$index ; $i++) { 
	# code...
	if ($stateold[$i]!=$statusnow[$i] && $ndate[$i] != ''&& $ndate[$i] !=$cdate[$i]) {
		# code...
		
		$sql ="UPDATE malfunction SET date_of_maintenance='".$ndate[$i]."', status_of_malfunction='".$statusnow[$i]."' WHERE building_name='".$bname[$i]."' and class_num ='".$cname[$i]."' and device_type = '".$dvname[$i]."' and user_name = '".$uname[$i]."' and malfunction_date = '".$mdate[$i]."' ";
		mysqli_query($conn,$sql);
	}elseif ($stateold[$i]!=$statusnow[$i]) {
		# code...
		
		$sql ="UPDATE malfunction SET status_of_malfunction='".$statusnow[$i]."' WHERE building_name='".$bname[$i]."' and class_num ='".$cname[$i]."' and device_type = '".$dvname[$i]."' and user_name = '".$uname[$i]."' and malfunction_date = '".$mdate[$i]."' ";
		mysqli_query($conn,$sql);
	}
	elseif ($ndate[$i] != '' && $ndate[$i] !=$cdate[$i] ) {
		# code...
		
		$sql ="UPDATE malfunction SET date_of_maintenance='".$ndate[$i]."'WHERE building_name='".$bname[$i]."' and class_num ='".$cname[$i]."' and device_type = '".$dvname[$i]."' and user_name = '".$uname[$i]."' and malfunction_date = '".$mdate[$i]."' ";
		mysqli_query($conn,$sql);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.a{
			text-decoration: none;
            color: white;
        }
	</style>
	<title>Malfunction</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	
	<!--end of meta tag-->
<!--the start of the link to tag to link the page with the style file-->	
<?php
 include("../../Admin_header/header_Admin.php"); 
?>
</head>
<body onload="setActiveFunction(6)">
<h1 class="titles" id="title1" align="center" >Malfunction<br>_____________________________</h1>
    <br/><br/>

			<p style="color: green; font-size: medium; text-align: center;"> Malfunction Table Are Updated <br> Press Back to Return Malfunction Page</p> 
			<br>
			<center> 
			<button class="buttons" name="back"><a class="a" href="malfunction.php">Back</a></button>
			</center> 
 
</body>
</html>