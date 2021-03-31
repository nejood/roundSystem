<!--Nadia Bahatheg 2/8/2018 

nadia.bahatheg@gmail.com-->
<!--this page show greeting msg to the user with definition of the system-->
<!DOCTYPE html>
<!--start of html tag-->
<html>
<!--start of head tag-->
<head>
	<!-- title of the page -->
	<title>Home</title>
	

</head><!--end of head tag-->
<body onload="setActiveFunction(1)"><!--start of body tag-->
	<!--start of center-->
	<center>
		
		<!--link with header_logo to avoid repeation of header code-->
<?php include("../../Admin_header/header_Admin.php");?>


	

<?php

//print hello with logged in user name
echo '<h2 class="titles" id="hello"><br/><br/><br/>Hello '.$_SESSION["user_name"].',<br>___________________________</h2><br>';

//print the definition of the system
echo '<p class="labels">Welcome to round management system,<br>which records maintance rounds<br>in King Abdulaziz university';
?>
	
</center>
	<!-- end of the center tag for centering the contents -->
</body><!--end of body tag-->
</html><!--end of html-->