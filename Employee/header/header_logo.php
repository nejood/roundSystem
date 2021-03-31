
<?php
//start session in all pages we want to use the variable from the database 19/7/2018 NN
session_start();


?>
<?php if(!isset($_SESSION['id']))
{
    // not logged in
    header('Location:https://roundsystem2018.000webhostapp.com/index.php');
    exit();
}
?>
<!DOCTYPE html>
<!--
	17/7/2018
-->
<html>
<head>

<!--<link rel="stylesheet" type="text/css" href="global.css">-->

<!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->	
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" >
	<title></title>
</head>
<body>
<center>
	<div class="tableLogo">
	<table >
	

	<tr><td id="user"><label class="user" id="label1"> <?php echo $_SESSION["user_name"];?></td>
		<td id="logoPic"><img class="logo" src="../img/logo-w.png" alt="Administration of Academic service log"/></td>
		<td id="logoutPic"><a href="https://roundsystem2018.000webhostapp.com/RoundSystem/Admin_Files/Admin_pages/logout/logout.php"><img class="logout" src="../img/logout.png" alt="log out" title="logout"></a></label></td></tr>

</table>

</div>
</center>



</body>
</html>