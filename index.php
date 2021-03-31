<?php
//start session in all pages we want to use the variable from the database 19/7/2018 NN
ob_start();
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="RoundSystem/Admin_Files/Admin_style/global.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<title>login</title>
	<style type="text/css">

		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 3%;
  padding: 3%;
  padding-top: 3%;
  border-radius: 6px;
  box-shadow: 3px;
  background-color: #cff0da;
  overflow: hidden;

}
.logo_log{
	width: 30%;
	height: 30%;
}
body
{
	background-color: white;
}
	</style>


</head>
<body>
<center>
	<div class="card">
		<a href="https://academic-services.kau.edu.sa/Default.aspx?Site_ID=570&Lng=AR"><img class="logo_log" src="RoundSystem/Admin_Files/Admin_img/logo.png"><a>
	<h2 class="titles" id="title">Login<br>________________</h2>
		<br>
		<br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<label class="labels" id="label1">Kau ID<br></label>
		<input type="id" name="id" class="textbox" id="textbox1" placeholder="                Kau ID"></label>
		<br>
		<br>
		<label class="labels" id="label2">Password<br>
		<input type="password" name="password" class="textbox" id="textbox2" placeholder="            Password"></label>
		<br>
		<br>
		<input type="submit" name="submit" value="Login" class="buttons" id="button">
		<br>
		<br>
		<a href="RoundSystem/Admin_Files/Admin_pages/login/forgotPassword.php" >Forgot password?</a>
		<br>
		<br>
		<br>
	</form>


	<?php
if(isset($_POST["submit"])){
$id=$_POST['id'];
$password=$_POST['password'];

require_once('RoundSystem/Admin_Files/connection/connection.php');


$sql="select * from user where id='$id' and password='$password'";


$check=mysqli_fetch_array(mysqli_query($conn,$sql));



if(isset($check))
{


$_SESSION["id"]=$check['id']; 
$_SESSION["email"]=$check['email'];
$_SESSION["user_name"]=$check['user_name']; 
$_SESSION["phone_no"]=$check['phone_no']; 
$_SESSION["user_type"]=$check['user_type']; //variable id not defined

//session for intialize building and class for add device
$_SESSION["building_name"]='';
$_SESSION["class_num"]='';
$_SESSION["deviceType"]='';

if($_SESSION["user_type"]=="Administrator") 
{
	header("location:RoundSystem/Admin_Files/Admin_pages/home/home.php");
} 
//else go to the user
else{
header("location:https://roundsystem2018.000webhostapp.com/RoundSystem/Employee/include/home.php") ;//employee home page
}
}

else
{
	echo"<p style='color:red;font-size:18px;'>Invalid ID or password! please try again</p>";
}

mysqli_close($conn);
}
?>
	</center>
	</div>
</body>
</html>