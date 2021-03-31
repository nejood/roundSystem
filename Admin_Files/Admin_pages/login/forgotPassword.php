
<!DOCTYPE html>
<!--
@author @Nadia Bahatheg  1/8/2018

nadia.bahatheg@gmail.com

this page allow the user to request a reset password link if he forgot his password
-->
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

  <!-- title of the page -->
	<title>Forgot Password</title>

	<style type="text/css">

/*style of the container*/
		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 7%;
  padding: 3%;
  padding-top: 3%;
  border-radius: 6px;
  box-shadow: 3px;
  background-color: #cff0da;
  overflow: hidden;}

  /*set the body background to white*/
body
{
	background-color: white;
}
	</style>

</head><!--end of head tag-->
<body><!--start of body tag-->
<center><!--start of center-->
	<div class="card">
    <!--start of the forgot password form-->
		<form action="#" method="GET">
   
   <!--  h2 tag for the page title -->
        <h2 class="titles">Forgot Password<br>________________</h2>
       
   <br>
   <br>
   <!-- label for type email -->
<label class="labels">type your email</label><br>

<!-- textbox for typing the email -->
<input type="text" name="email" class="textbox" placeholder="            your email">
<br>
<br>
<br>
<br>
<br>
<br>

<!-- submit button to submit the form -->
<input type="submit" name="submit" class="buttons" value=" Submit ">


<!-- end of the form -->
</form>

<?php

/*excuted only when user submit the form*/
 if(isset($_GET['submit'])){ 

  //get the email from the form
    $email = $_GET['email'];
 
 //call the connection file
require_once('../../connection/connection.php');

//retrieve all user informiation
$sql = "select * from  user where email='$email'";

      
    $check = mysqli_fetch_array(mysqli_query($conn,$sql));

    //function gnerate random code for verification
function randomCode() {

  //the range of the random code
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#!*&';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}



$pass =randomCode();//call random function

//if the email is exists
if(isset($check)){

$user=$check['user_name'];

//insert the random code in the database
$query3 = mysqli_query($conn,"update user set RPass='$pass' where email='$email'")
or die(mysqli_error($conn)); 

//the sender of the resetPass mail
$headers = 'From: RoundSystem@DonotRplay.com' . "\r\n";

//call mail function to send the resetPass mail
//paramaeters: to,subject,body,sender
  mail ( $email, "Reset password", "Dear ".$user.", \n You forget your password and round system create a random code \n The random code is:  $pass \n Please click on the link below to reset your password using random code  if you need to change your password \n https://app-1523115742.000webhostapp.com/pages/resetPassword.php?Email=$email \n If there is any problem check your account \n  \n  \n Thenk you \n ----------------------- \n website Admin",$headers );

echo '<script language="javascript">';
echo 'alert("link has been sent to your email to reset the password \n If you could not find the message please check the spam/junk mail")';
echo '</script>';
}

//the mail not exists
else
{
echo '<script language="javascript">';
echo 'alert("This email is not registered in the system")';
echo '</script>';
}
}

?>
	</div>
  </center>
  <!-- end of the center tag for centering the contents -->
</body><!--end of body tag-->
</html><!--end of html-->
