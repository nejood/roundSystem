
<!--  author: Nejood Abdulaziz Alfashka
        ID: 1505971
      date: 5/8/2018
-->

<!--
     summary of page:

 This page is for the admin to change an employee type.
the admin will select the employee name from dropdown menu and select the type.
this page will change in the database.
  
-->

<!-- 
  ************************************************
-->


<!--                 *START PHP CODE -->

<?php
/* this query will get the user name from database*/

require_once('../../connection/connection.php'); //index.php

 $sql = " SELECT * FROM user "; //select everything from user table
 $result= mysqli_query($conn,$sql);
      //check if the number of rows or than 0
            if (mysqli_num_rows($result) > 0) {
     //variable to get the value from database 
     $option = '';
     // output data of each row
     while($row = mysqli_fetch_assoc($result)){
  //set the value from database in variable option as option tage in html
   $option .= '<option value = "'.$row['user_name'].'">'.$row['user_name'].'</option>';   
} //end loop
}//end if
else {
     echo "0 results"; 
}//end else   
 
?>
<!--                 *END PHP CODE     -->


<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->
<title>Change Employee Type</title>  <!-- the name of tab -->
 
  <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
  <style type="text/css">
   input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
   input[type=number]::-webkit-inner-spin-button {
   opacity: 1;
}
  </style>
   <!-- ------------------------------------------END STYLE---------------------------------------------------- -->
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
<h1 class="titles" id="title1" >Change Employee Type <br> _____________________________</h1>        <!-- the page title -->

<br> <!-- this tag to insert a single line break -->

<!----------------------------------- START FORM: to take input from user and do action ----------------------------------->

<form  name="forms" id="form1" action="" method="post">
<!-- start form to take input from user and do action -->
 <label class="labels" id="label1"> Select the employee: </label> <!-- the label of text box to help user to now what the requierd -->

<br> <!-- this tag to insert a single line break -->
<select class="dropdown" id="dropdown1" name="userName" required> <!-- start Select -->
 <option value="" class="options">employee name</option> 
    <?php echo $option; ?> <!-- the options contain all user name from the database -->
 </select> <!-- end Select -->

 
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

<input  class="buttons" id="button1" type="submit" value="change" required> <!-- this button will do the action(change employee type) -->

</form> 
<!------------------------------------------------------- END FORM ----------------------------------------------------->

<!--                 *START PHP CODE: to conned the interface with the Database -->

<?php
/* this query is to change the employee type */
if($_POST){ //start post

///variables have values from fields:
$user_name=$_POST['userName']; 
$user_type=$_POST['userType'];

$sql="SELECT * FROM user"; //select everything from user table
$result= mysqli_query($conn,$sql);

   //check if the number of rows or than 0
 if (mysqli_num_rows($result) > 0) { //check if the number of rows or than 0

 $sql="SELECT id from user WHERE user_name = '$user_name' "; //get the id of user
 $records = mysqli_query($conn,$sql);

 // output data of each row
while ($id = mysqli_fetch_array($records)) {
    
 $sql= "UPDATE user SET user_type ='$user_type' WHERE id = '$id[0]' "; //change user type
 $query = mysqli_query($conn,$sql);      
} //end while

//if the query is done correctly:
echo "<script>
alert('the employee $user_name was changed her type to be $user_type ');
</script>";
}//end if

//if the database is empty:
else {
  echo "<script>
alert('there is no employee in database');
</script>";
     
}//end else   

    mysqli_close($conn); //close connion
}// if post
   
?>
  <!--                 *END PHP CODE     -->

</center> <!-- end Center -->
</body> <!-- end Body -->
</html> <!-- end HTML-->