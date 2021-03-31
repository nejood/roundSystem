
<!--  author: Nejood Abdulaziz Alfashka
	      ID: 1505971
	    date: 2/7/2018
-->

<!--
     summary of page:

 this page is for the admin to delete an employee.
 it contains a list of name for all employee they are in the database 
 so the admin does not need to write the name, she just selects the employee.
-->

<!-- 
	************************************************
-->

 <!--                 *START PHP CODE -->
<?php
/* this query will get the user name from database*/

require_once('../../connection/connection.php');//index.php

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
<title>Delete Employee</title>  <!-- the name of tab -->
 
    <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
 <style type="text/css">
 	/*decorate dates in the interface:*/
   .dates{
    background-color:#cff0da ;
    border:groove;
    border-radius: 5px;
    border-color: #CAEED4;   
     
}
.calendar{
display:inline; 
width:100%;
top: 5%;
}
img{
height:2%;
width:2%;


}
 </style>
        <!-- --------------------------------------------END STYLE---------------------------------------------------- -->
</head> <!-- end Head-->
<body onload="setActiveFunction(4)"> <!-- start Body-->

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
<h1 class="titles" id="title1">Delete Employee <br> _____________________________</h1>        <!-- the page title -->


<br> <!-- this tag to insert a single line break -->

<!----------------------------------- START FORM: to take input from user and do action ----------------------------------->

 <form onsubmit="return confirm('Are you sure that you want to delete the employee: '+document.getElementById('dropdown1').value+'?!')" action="" method="post">
 <!-- start form to take input from user and do action -->

  <label class="labels" id="label1"> Select the employee: </label>  <!-- the label of text box to help user to now what the requierd -->
<br> <!-- this tag to insert a single line break -->

 <select class="dropdown" id="dropdown1" name="userName" required> <!-- start Select --> 
     <option value="" class="options">employee name</option> 
    <?php echo $option; ?> <!-- the options contain all user name from the database -->
 </select> <!-- end Select -->

 <br> <!-- this tag to insert a single line break -->
 <br> <!-- this tag to insert a single line break -->

 <div class="calendar">
 <img src="../../Admin_img/calendar.png" alt="calendar" title="calendar" > <!-- this tag for calendar icon -->
 </div>
 <label class="labels" id="label2"> The Date: </label> <!-- the label of text box to help user to now what the requierd -->
 <input class="dates" type="date" name="end_date" required> <!-- this tag to take date from user: -->


 <br> <!-- this tag to insert a single line break -->
 <br> <!-- this tag to insert a single line break -->

<input class="buttons" id="button1" type="submit" value="delete" required > <!-- this button will do the action(delete employee) -->

  </form> 
  <!------------------------------------------------------- END FORM ----------------------------------------------------->
</center> <!-- end Center -->

<!--                 *START PHP CODE: to conned the interface with the Database -->
<?php
/* this query is to delete employee from database */

if($_POST){ //start post

///variables have values from fields:
  $user_name=$_POST['userName'];
  $end_date = $_POST['end_date'];

$sql="SELECT * FROM user"; //select everything from user table 
$result= mysqli_query($conn,$sql);

//check if the number of rows or than 0
 if (mysqli_num_rows($result) > 0) { 

  $sql="SELECT id from user WHERE user_name = '$user_name' "; //get user id
  $records = mysqli_query($conn,$sql);


while ($id = mysqli_fetch_array($records)) {
     $row="DELETE FROM user WHERE id = '$id[0]'" ; //delete user
      $result = mysqli_query($conn,$row);

      $sql= "UPDATE userandbuilding SET end_date ='$end_date'  WHERE id = '$id[0]' "; //change the end date 
      $query = mysqli_query($conn,$sql);      
} //end while

//if the query is done correctly:
echo "<script>
alert('the employee $user_name was deleted it');
</script>";
}//end if

//if the database is empty:
else {
  echo "<script>
alert('there is no employee in database');
</script>";
     
}//end else   

    mysqli_close($conn); //close connion
}// end post
       
?>
  <!--                 *END PHP CODE     -->
</body> <!-- end Body -->
</html> <!-- end HTML-->