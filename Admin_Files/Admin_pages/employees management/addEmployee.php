
<!--  author: Nejood Abdulaziz Alfashka
        ID: 1505971
      date: 2/7/2018
-->
<!-- 
   *Update on 
    date: 11/7/2018
    By: Nejood Abdulaziz Alfashka

    *Update on 
    date: 16/7/2018
    By: Nejood Abdulaziz Alfashka
       
-->

<!--
     summary of page:

 This page is for the admin to add an employee.
 it contains a text box to allow for admin to enter an email of employee 
 and automatically will be checked if the input was an email or not 
 also, it checks if the email is correct (KAU email) and did not added before. 
 if all these conditions are satisfied the employee will enroll in the system.

  
-->

<!-- 
  ************************************************
-->

<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->
<title>Add Employee</title>  <!-- the name of tab -->

 <script type="text/javascript" src="validation.js"></script> <!-- to conned this page with validation function -->
     <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
  <style type="text/css">
   input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
   input[type=number]::-webkit-inner-spin-button {
   opacity: 1;
}
  </style>
    <!-- --------------------------------------------END STYLE---------------------------------------------------- -->
</head> <!-- end Head-->
<body onload="setActiveFunction(4)">  <!-- start Body-->

<!--        START INCLUDE     -->

<?php
include("../../Admin_header/header_Admin.php");
?>
<div>
<?php
include("../../Admin_sidemenue/sideMenuEployee.php");  
?>
</div>
<!--       END INCLUDE      -->



<center> <!-- start Center: to put all fields in center of page -->
<h1 class="titles" id="title1" >Add Employee <br> _____________________________</h1>        <!-- the page title -->

<br> <!-- this tag to insert a single line break -->

<!----------------------------------- START FORM: to take input from user and do action ----------------------------------->

<form onsubmit="return(validate());" name="forms" id="form1" action="" method="post"> <!-- if user submit the form the function validate() will check it if is it valid or NOT?-->

<label class="labels" id="label1" for="name"> Enter the name: </label> <!-- the label of text box to help user to now what the requierd --> 
<br> <!-- this tag to insert a single line break -->

<!-- this tag to take input from user: -->
<input class="textbox" id="textbox1" type="text" name="User_name" placeholder="           employee name  " required>
 
<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label2" for="type"> Enter ID: </label> <!-- the label of text box to help user to now what the requierd -->
<br> <!-- this tag to insert a single line break -->

<!-- this tag to take input from user: -->
<input class="textbox" id="KAU_ID" type="number" name="IDkau" placeholder="               KAU ID  " required>

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label3" for="type"> Enter Phone Number: </label> <!-- the label of text box to help user to now what the requierd -->
<br> <!-- this tag to insert a single line break -->

<!-- this tag to take input from user: -->
<input class="textbox" id="textbox3" type="number" name="Phone_Number" placeholder="           Phone Number  " required>
 
<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->


<label class="labels" id="label4" >Enter the email: </label> <!-- the label of text box to help user to now what the requierd -->

<br> <!-- this tag to insert a single line break -->

<!-- this tag to take input from user: -->
 <input class="textbox" id="E_email" type="email" name="emaill" placeholder="              KAU-Email  " required>  <!-- this text box just acsept the input from email type -->



<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label3" for="type"> Select the type: </label> <!-- the label of text box to help user to now what the requierd -->
<br> <!-- this tag to insert a single line break -->

<select class="dropdown" id="dropdown1" name="userType" required> <!-- start Select 1 -->
 <!-- the options: -->
 <option value="" class="options" is="option0">employee type</option>
  <option value="viewr" class="options" is="option1">viewr</option>
 <option value="Tech. Assistant" class="options" is="option2">Tech. Assistant</option>
 <option value="Technician" class="options" is="option3">Technician</option>
  <option value="Administrator" class="options" is="option3">Administrator</option>

 </select> <!-- end Select 1 -->


<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->



<input  class="buttons" id="button1" type="submit" value="add" required> <!-- this button will do the action(add employee) -->

</form>
<!------------------------------------------------------- END FORM ----------------------------------------------------->


<!--                 *START PHP CODE: to conned the interface with the Database -->

<?php
/* this query is to add employee in database */
if($_POST){ //start post

///variables have values from fields:
$id=$_POST['IDkau'];
$email=$_POST['emaill'];
$user_name=$_POST['User_name'];
$phone_no=$_POST['Phone_Number'];
$user_type=$_POST['userType'];

require_once('../../connection/connection.php');//index.php

$sql="SELECT id from user where id='$id' "; //get id
$check=mysqli_fetch_array(mysqli_query($conn,$sql));

if(isset($check)){ //if the id is exist
  echo "<script>alert('This ID already registered');</script>";
     
    } //end if
    
    else{  //if the id is not exist
    
    //insert user information in the database
$sql = "INSERT INTO user(id,email,user_name,phone_no,user_type,password) 
        VALUES('$id', '$email','$user_name','$phone_no','$user_type','$id')"; 

      //if the query is done correctly:
       if(mysqli_query($conn,$sql)){
           echo "<script>
           alert('The employee $user_name wae added successfully .');
           </script>";
        } //end if
        
        //if the query is not done correctly:
        else{
          echo "<script>alert('oops! Please try again!');</script>";
        }  //end else  
      } //end else
              
 mysqli_close($conn);  //close connion
  } //if post  
?>
<!--                 *END PHP CODE     -->

</center> <!-- end Center -->
</body> <!-- end Body -->
</html> <!-- end HTML-->