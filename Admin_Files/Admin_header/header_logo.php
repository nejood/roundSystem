<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php if(!isset($_SESSION['id']))
{
    // not logged in
    header('Location:https://roundsystem2018.000webhostapp.com/index.php');
    exit();
}
?>
<!DOCTYPE html>

<!--start of html tag-->
<html>
<!--start of head tag-->
<head>

<!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->	
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<!--end of meta tag-->

<!--the start of the link to tag to link the page with the style file-->	
<link rel="stylesheet" type="text/css" href="../../Admin_style/global.css">
<!--the end of the link to tag -->
	<title></title>
</head><!--end of head tag-->
<body><!--start of body tag-->
<center><!--start of center-->
	<div class="tableLogo">
		<!--use table form to show username,logo,and logout button-->
	<table >
	
<!--show loggen in username at the top left-->
	<tr><td id="user"><label class="user" id="label1"> <?php echo $_SESSION["user_name"];?></td>
		<!--show the logo of Administration of Academic service at the top cenetr-->
		<td id="logoPic"><img class="logo" src="../../Admin_img/logo.png" alt="Administration of Academic service log"/></td>

		<!--show the logout button that is linked with the logout page-->
		<td id="logoutPic"><a href="../../Admin_pages/logout/logout.php"><img class="logout" src="../../Admin_img/logout.png" alt="log out" title="logout"></a></label></td></tr>

</table>

</div><!--end of div-->
</center><!--end of center-->


</body><!--end of body tag-->
</html><!--end of html-->
