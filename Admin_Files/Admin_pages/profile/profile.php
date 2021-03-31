

<!DOCTYPE html>
<!--Nadia Ali Bahatheg   17/7/2018

Nadia.bahatheg@gmail.com

this page show the user profile and getting his information from the session


-->
<html>

<head>

<style>

/*style of the container*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin: auto;
  text-align: center;
  font-family: arial;

}


/*style of the email part*/
#contact {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  
  width: 100%;
  font-size: 18px;
  height: 20%;
}

/*style of the email icon when mouse over*/
.email:hover {
  opacity: 0.3;
}

/*style of the email icon*/
.email{
  height: 30%;
  width: 30%;
  cursor: pointer;
}

/*/*style of the profile picture*/
.profPic{
width:50%;
height:50%;
padding-right: 0;
margin-left:42px;

}

/*style of the user info*/
.text{
  color:#35477d;
  text-align: left;
  margin-left: 10%;
}

/*style of the change password icon*/
.password{
float: right;
margin-right: 5%;
margin-top: 2%;
padding-left: 0;
}

/*style of the edit icon*/
.phone{
  width: 70%;
height: 80%;

}

/*special style for phone#*/
#phone{
  margin: 0;
float: left;

}
</style>
</head>
<body onload="setActiveFunction(2)">

  <!--to avoid repeation of header's code-->
  <?php include("../../Admin_header/header_Admin.php");?>
  

<!--the title of the page-->
<h2 class="titles" id="title1" style="text-align:center">User Profile<br>________________</h2>
<br>

<!--the profile info's container-->
<div class="card">

  <!--link to change password page-->
 <a href="changePassword.php"> <img class="password" src="../../Admin_img/password.png" alt="change password"  title="change password"></a>
  <br>
  <br>

  <!--profile pic-->
  <img class="profPic" src="../../Admin_img/profile.png" alt="user" />
  
  <!--show the user name from the session-->
  <h1><?php echo$_SESSION["user_name"]?></h1>
  <br>

  <!--show the ID from the session-->
  <p class="text"><b>&nbsp Kau ID:</b><?php echo $_SESSION["id"]?></p>
 
 <!--link to change phone# page-->
  <a id="phone" href="changePhone.php"><img src="../../Admin_img/edit.png" class="phone" alt="change phone" title="change phone"></a>

   <!--show the phone# from the session-->
   <p class="text" ><b>Phone Number:</b><?php echo$_SESSION["phone_no"]?></p>
  <br>
 
 <!--email-->
 <p><button id="contact">Contact<br>
<img class="email" src="../../Admin_img/email.png" alt="send email to the employee" title="send email to the employee" />
 </button></p>
</div>

</body>
</html>
