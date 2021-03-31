
<!DOCTYPE html>
<!-- author @Nadia Bahatheg  18/7/2018

nadia.bahatheg@gmail.com

page to allow the user to change his passsword
-->
<html><!--start of html-->
<head><!--start of head-->


<!--title of the page-->
	<title>Change Password</title>

</head><!--end of head-->
<body onload="setActiveFunction(2)"><!--start of body-->


<!--link with header_logo to avoid repeation of header code-->
<?php include("../../Admin_header/header_Admin.php");?>

	
 
<!--start of center-->
<center>

	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title">
	Change Password<br>________________
</h1>
<br>

<!--start of form-->
<form action="#" method="post" onsubmit="checkPass()">

<!-- label for type old password -->
<label class="labels" id="label1">type the old password
	<br>

	<!--textbox for entering the old password-->
<input type="password" name="oldPassword" class="textbox" id="textbox1" placeholder="          old password">

<br>
<br>
</label>	

<!-- label for type new password -->
<label class="labels" id="label2">type the new password
	<br>
	<!--textbox for entering the new password-->
<input type="password" name="newPassword1" class="textbox" id="textbox2" placeholder="          New password">

<br>
<br>
</label>

<!-- label for retype new password -->
<label class="labels" id="label3">Retype the new password
	<br>

	<!--textbox for re-entering the new password-->
<input type="password" name="newPassword2" class="textbox" id="textbox3" placeholder="     Retype new password">

<br>
<br>
</label>
<!--submit button to submit the form-->
<input type="submit" name="submit" value="Change" class="buttons" id="button1">


</form><!--end of the form-->


</center>
<script type="text/javascript">
	/*@author:Nadia Ali Bahathe 30/7/2018
function to check that the two entered password are identical
*/
	function checkPass()
	{
		var new1=document.getElementById("textbox2");
		var new2=document.getElementById("textbox3");
		if(new1.value==new2.value)
{
	return true;
}


else
{
	
	window.alert("the two numbers should be identical");

	return false;
}

	}


	
</script>
<?php
/*Nadia Bahatheg 31/7/2018
*/

/*excute only when the user hits submit*/
if(isset($_POST['submit'])){ 

//store the data from the form	
$password=$_POST['oldPassword'];
$new=$_POST['newPassword1'];

//call the connection file
require_once('../../connection/connection.php');


//query to check that the old password is matched with the logged in user's id
$sql="select * from user where password=$password AND id=".$_SESSION["id"] ;
$check=mysqli_query($conn,$sql);

//if the password is matched
if(mysqli_num_rows($check)>0)
{
	//update the password of the user
	$sql_up="update user set password='$new' where password=$password AND id=".$_SESSION["id"] ;
	
	$check=mysqli_query($conn,$sql_up);

	//if the password is updated sucessfully
	if(isset($check))
	{
	echo "<script type='text/javascript'>alert('The Password was changed successfully')</script>";
	}
	//if there is error in query
				else{
					 echo "<script type='text/javascript'>alert('ERROR: Could not able to execute $sql.')</script>". mysqli_error($conn);
				}
}

else
{
  echo "<center><p style='color:red;font-size:18px;'><br>Invalid Password!<p></center>";
}
 //close the connection with the server
mysqli_close($conn);

}



?>
</body>
</html>