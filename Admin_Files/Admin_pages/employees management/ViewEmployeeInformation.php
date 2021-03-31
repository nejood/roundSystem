
<!--  author: Nejood Abdulaziz Alfashka
          ID: 1505971
        date: 3/7/2018
-->

<!--
     summary of page:

 this page is for the admin to see an employee information.
 it contains a list of the name for all employee they are in the database
 so the admin does not need to write a name,
 she just selects the employee and her information will appear.
  
-->

<!-- 
  ************************************************
-->

<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->
<title>View the Employee information</title>  <!-- the name of tab -->

        <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
 <style type="text/css">
/* table style*/
.infoTable{
    margin-top: 2%;
    border-collapse: collapse;
    width: 50%;
      border: 2px solid #55967e;
    
}
.tr, .td {
    text-align: center;
   width: 25%;
   height: 10%;
    border: 2px solid #55967e;

}

.tr:nth-child(even) {background-color: #f2f2f2;}

</style>
      <!-- --------------------------------------------END STYLE---------------------------------------------------- -->
</head> <!-- end Head -->
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
<h1 class="titles" id="title1"> View the Employee Information <br> _____________________________</h1>        <!-- the page title -->


<br> <!-- this tag to insert a single line break -->

 <!----------------------------------- START FORM: to take input from user and do action ----------------------------------->
  <form action="" method="post"> 
  <label class="labels" id="label1"> Select the employee: </label>  <!-- the label of text box to help user to now what the requierd -->

  <!--                 *START PHP CODE -->
<?php
/* this query will get the user name from database*/

require_once('../../connection/connection.php');//index.php

 $sql = " SELECT * FROM user ";//select everything from user table
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
     echo "there is no results";
}//end else   
 
?>
  <!--                 *END PHP CODE     -->


 <br> <!-- this tag to insert a single line break -->
 <select class="dropdown" id="dropdown1" value ="nameOfuser" name="user_name" required> <!-- start Select 1 -->
 <option value="" class="options">employee name</option> 
 <?php echo $option; ?> <!-- the options contain all user name from the database -->
 </select> <!-- end Select 1 -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<input name="submit" class="buttons" id="button1" type="submit" value="show" required> <!-- this button will do the action(show the employee information ) -->

  </form> 
  <!------------------------------------------------------- END FORM ----------------------------------------------------->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

  <table class="infoTable" id="infoT"> <!-- start Table -->

   <!--                 *START PHP CODE: to conned the interface with the Database -->
<?php
/* this query will get the user information from database*/

if($_POST){//start post

///variables have values from fields: 
$user_name = $_POST['user_name'];

$sql="SELECT * FROM user";//select everything from user table 
$result= mysqli_query($conn,$sql);

//check if the number of rows or than 0
 if (mysqli_num_rows($result) > 0) { 

//get id from user name
$sql_u="SELECT id from user WHERE user_name ='$user_name'";
$records = mysqli_query($conn,$sql_u);
$id = mysqli_fetch_array($records);

if(isset($_POST['submit']))
{ //if user click submit button 

$sql="SELECT * FROM userandbuilding"; //select everything from userandbuilding table
$result= mysqli_query($conn,$sql);

//check if the number of rows or than 0
 if (mysqli_num_rows($result) > 0) {

//get the buildings that user have
$sql_building="SELECT building_name from userandbuilding WHERE user_id = '$id[0]' AND end_date >= CURDATE()";
$b=mysqli_query($conn,$sql_building);

  //variable to get the value from database
  $op=' ';

//check if the number of rows or than 0
if(mysqli_num_rows($b)>0){

 // output data of each row
  while ($row=mysqli_fetch_assoc($b)) {
  $op.='<option value="'.$row['building_name'].'">'.$row['building_name'].'</option>';

}//end loop
}//end if
 else{
    $op.= "she has not any building";
  }//end else
 
} //end if num of row >0
}//end if
else {
     echo "there is no employee in database";
}//end else   
//---------------------------------------------------------
}

} //end if post

mysqli_close($conn); //close connion
              
?>
  <!--                 *END PHP CODE     -->

  <!--                 *START PHP CODE    -->
<?php
/* this query will get the user information from database and print it in table*/

if(isset($_POST['submit'])){ //if user click submit button 

  //the columns name:
echo "<tr class=tr>";
      echo "<td class=td> Employee Name </td>";
      echo "<td class=td> Building Name </td>";
echo "</tr>";

  //the variables that have values:
echo"<tr class=tr>";
      echo" <td class=td> $user_name </td>";
      echo" <td class=td> $op </td>";
echo"</tr>";
}

?>
  <!--                 *END PHP CODE     -->

</table> <!-- end Table -->
</center> <!-- end Center -->
</body> <!-- end Body -->
</html> <!-- end HTML-->