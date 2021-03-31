
<!DOCTYPE html>
<!--
@author: Nadia Ali Bahatheg  1/8/2018

nadia.bahatheg@gmail.com

this page allow the user to reset the password only if he asked for random code from forgot password page
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

  
  <style type="text/css">

  /*style of the container*/
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

/*set the background to white*/
body
{
  background-color: white;
}

/*style of labels*/
.labels{
  font-size: 18px;
}
  </style>
  <!-- title of the page -->
  <title>Reset Password</title>
</head><!--end of head tag-->
<body><!--start of body tag-->

</body><!--end of body tag-->
</html><!--end of html-->
<?php
  //this php code just for email get from link in email message and check if email is correct or not 
    $email = $_GET['email'];

$Rp=null;//to reset the random code

//call the connection file
require_once('../../connection/connection.php');

//check if this email has RPass that means the user forget password
$sql = "select email from  user where email='$email' and RPass!='$Rp'";

      
	$check = mysqli_fetch_array(mysqli_query($conn,$sql));

//if user asked for reset password code
//let him reset his password
if(isset($check)){
echo '<center>
  <div class="card">
<form action="#" method="POST" onsubmit="return(validate());">
   
        <h2 class="titles">Reset Password<br>________________<br></h2>
        <br>
          <label class="labels">your email</label>
        <input type="text" name="email" class="textbox" value="'.$email.'" readonly>
     
        <br>
        <br>
        <br>
    <label class="labels">verification code</label><br>

 <input type="text" name="RPassword" class="textbox" placeholder="     verification code">
<br>
    <br>
    <br>
<label class="labels">new password</label><br>
<input type="password" name="NPassword" id="NP" class="textbox" placeholder="      type new password">
<br>
<br>
<br>
<label class="labels">confirm password<br>
<input type="password" name="CPassword" id="CP" class="textbox" placeholder="   retype the new password">
<br><br><br>
<input type="submit" name="submit" class="buttons"/>



</form>';

/*excute only when the user submit the form*/
 if(isset($_POST['submit'])) {

//store the data from the form
$email = $_POST['email'];//to
$Rpass=$_POST['RPassword'];
$Npass=$_POST['NPassword'];


//call the connection file
require_once('../../connection/connection.php');


//check if code in message equal code entered by user 
$sql = "select * from  user where email='$email' and RPass='$Rpass'";

      
  $check = mysqli_fetch_array(mysqli_query($conn,$sql));

//if the codes matched 
if(isset($check)){
  $user=$check['user_name'];
//query for update info in table (update password)
$query3 = mysqli_query($conn,"update user set Password='$Npass' where email='$email'")
or die(mysqli_error($conn)); 

//from
$headers = 'From: RoundSystem@DonotRplay.com' . "\r\n";

//mail(to,subject,message,from); to notify the user that his email is changed
  mail ( $email,"Update Password", "Dear ".$user.",\nYour password updated successfully \n Thank you \n ----------------------- \n website Admin",$headers );
$query3 = mysqli_query($conn,"update user set RPass='' where email='$email'")
or die(mysqli_error($conn));

echo '<script language="javascript">';
echo 'alert("Your password Updated successfully\nplease check your email")';
echo '</script>';
}

//if codes not matched
else
{
echo '<script language="javascript">';
echo 'alert("Incorrect code. \nPlease copy the code from the message has been sent to you")';
echo '</script>';
}

}




echo '</div>
</center>';

}
//if email not in database or does not forgot his password before
else
{

echo '<script language="javascript">';
echo 'alert("Wrong!!! you did not send a request for changing password or this email is not in system\n please check your account ")';
echo '</script>';
}


?>


<script>
  //function to check the password entring
function validate() {
  //if new and confirm password not match
    if(document.getElementById("NP").value!=document.getElementById("CP").value){
    alert("new password and confirm password not match ");
  document.getElementById("NP").style.background="Yellow";
   document.getElementById("CP").style.background="Yellow";
    document.getElementById("NP").value="";
        document.getElementById("CP").value="";
  return false;
    }
    // if new password null
        if(document.getElementById("NP").value==""){
    alert("please fill new passowrd field ");
  document.getElementById("NP").style.background="Yellow";
    document.getElementById("NP").value="";
        document.getElementById("CP").value="";
  return false;
    }
    //if confirm password null
        if(document.getElementById("CP").value==""){
    alert("please fill confirm password field");
   document.getElementById("CP").style.background="Yellow";

  return false;
    }
    return true//if there is no error sumbit form
    }
</script>