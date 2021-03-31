
<!--  author: Nejood Abdulaziz Alfashka
          ID: 1505971
        date: 3/7/2018
-->

<!--
     summary of page:

 this page it is for the admin to delete a building from an employee.
It contains lists of the name for all employee they are in database and buildings number 
so the admin does not need to write a name or number 
she just selects the employee and building to delete them from each other.
  
-->

<!-- 
  ************************************************
-->

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
     echo "0 results";
}//end else   
//----------------------------
$sql_b = " SELECT * FROM building ";
 $result_b= mysqli_query($conn,$sql_b);
      //check if the number of rows or than 0
   
?>
  <!--                 *END PHP CODE     -->

<!DOCTYPE html><!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->
<title>Delete Building From Employee</title>  <!-- the name of tab -->

            <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
 <style type="text/css">
/*decorate multiselect in the interface*/
.multiselect {
   width: 10%;
}

.selectBox {
  position: relative;
z-index: 2;
}

.selectBox select {
  width: 100%;
  text-align: left;
    border-radius: 5px; /*make the dropdown rounded*/
border-color: #307672; /*coloring the border of the dropdown*/
border-style:solid; /* the style border*/
font-style: bold; /*the style of the options font*/
font-size: 20px; /*the size of the options font*/
font-family: "Times New Roman", Times, serif; /* the font type*/

}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
   border-radius: 1%;
  display: none;
  border: 1px #dadada solid;
text-align: left;
}

#checkboxes label {
  display: block;

}

#checkboxes label:hover {
  background-color: #1e90ff;
}

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
<h1 class="titles" id="title1">Delete Building From Employee <br> _____________________________</h1>        <!-- the page title -->

<br> <!-- this tag to insert a single line break -->

<!----------------------------------- START FORM: to take input from user and do action ----------------------------------->
<form action="" method="post" onsubmit="return confirm('Are you sure that you want to delete building '+document.getElementById('building').value+' from employee: '+document.getElementById('dropdown1').value+'?!')">
  <label class="labels" id="label1"> Select the employee: </label> <!-- the label of text box to help user to now what the requierd -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<select class="dropdown" id="dropdown1" name="user_name" required> <!-- start Select 1 -->
  <option value="" class="options">employee name</option> 
 <?php echo $option; ?> <!-- the options contain all user name from the database -->

 </select> <!-- end Select 1 -->

 <br> <!-- this tag to insert a single line break -->
 <br> <!-- this tag to insert a single line break -->


<label class="labels" id="label2"> Select the building: </label>  <!-- the label of text box to help user to now what the requierd -->

<br> <!-- this tag to insert a single line break -->

<!------------------ START multiselect list-------------------->
 <div class="multiselect">
 <div class="selectBox" onclick="showCheckboxes()">
  <select >
     <option class="dropdown">buildings</option> 
   <option></option>
  </select>
   <div class="overSelect"></div>
   </div>
   <div id="checkboxes" >

 <!--                 *START PHP CODE -->
         <?php
  /*this query will get the building from database*/

   //check if the number of rows or than 0
   if (mysqli_num_rows($result_b) > 0) {

     //variable to get the value from database 
     $option_b = '';

     // output data of each row
 while($row_b = mysqli_fetch_assoc($result_b)){
        
  //set the value from database in variable option as option tage in html
  echo'<input type="checkbox" id="building" name="building[]" value="'.$row_b['building_name'].'" id="'.$row_b['building_name'].'"/> '.$row_b['building_name'].'<br>';
 
} //end loop
}//end if
else {
     echo "0 results";
}//end else   
   ?>
   <!--                 *END PHP CODE     -->
 </div>
 </div>
<!------------------ END multiselect list-------------------->

 <br> <!-- this tag to insert a single line break -->
 <br> <!-- this tag to insert a single line break -->

 <div class="calendar">
 <img src="../../Admin_img/calendar.png" alt="calendar" title="calendar" > <!-- this tag for calendar icon -->
 </div>
 <label class="labels" id="label5"> The Date: </label>  <!-- the label of text box to help user to now what the requierd -->
    <input class="dates" type="date" name="end_date" required> <!-- this tag to take date from user: -->

 <br> <!-- this tag to insert a single line break -->
 <br> <!-- this tag to insert a single line break -->

<input class="buttons" id="button1" type="submit" name="submit" value="delete" required> <!-- this button will do the action(delete the building from the employee) -->
</form>
<!------------------------------------------------------- END FORM ----------------------------------------------------->
</center> <!-- end Center -->

<!------------------------------------------------------- START SCRIPT ----------------------------------------------------->
<script type="text/javascript">
  /* this script will control in display of options*/
  var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
<!------------------------------------------------------- END SCRIPT ----------------------------------------------------->

<!--                 *START PHP CODE: to conned the interface with the Database -->
<?php
/* this query is for delete building from employee and saved the changed in database  */

if($_POST){ //start post

///variables have values from fields:   
$user_name=$_POST['user_name'];
$end_date = $_POST['end_date'];
$building= $_POST['building'];


$sql="SELECT * FROM user"; //select everything from user table 
$result= mysqli_query($conn,$sql);

//check if the number of rows or than 0
 if (mysqli_num_rows($result) > 0) { 

//get id from user name
$sql_u="SELECT id from user WHERE user_name = '$user_name' ";
$records = mysqli_query($conn,$sql_u);
$id = mysqli_fetch_array($records);
 
if(isset($_POST['submit']))
{ //if user click submit button 

    for ($i=0; $i<sizeof($building); $i++)
        {  //take each building that was selected 

          $sql="SELECT * FROM userandbuilding"; //select everything from userandbuilding table 
          $result= mysqli_query($conn,$sql);

          //select every building that user have:
          $check= "SELECT * FROM userandbuilding WHERE user_id ='$id[0]' AND 
          building_name = '$building[$i]' AND '$end_date'<= end_date ";
          $records = mysqli_query($conn,$check);

//check if the number of rows or than 0
if(mysqli_num_rows($records) > 0){

//change the end date to remove the building from employee:
$sql_b= "UPDATE userandbuilding SET end_date = '$end_date'
        WHERE user_id ='$id[0]' AND building_name = '$building[$i]'  ";

//if the query is done correctly:
 if(mysqli_query($conn,$sql_b)){
      echo "<script>
      alert('the building $building[$i] was delete from $user_name in $end_date');
      </script>";
      } //end if
//if the query is not done correctly:
 else{
     echo "<script> alert('oops! Please try again!');</script>";
     } //end else
} //end if 
else{ 
 echo "<script> alert('the building $building[$i] is not assigned to the employee $user_name');</script>";
} //end else

}//end for loop


} //end if submit

}//end if num of row >0

//if the database is empty:
else {
   echo "<script>
   alert('there is no employee in database');
   </script>";
}//end else   
} //end post

    mysqli_close($conn);//close connion
    ?> 
      <!--                 *END PHP CODE     -->
</body> <!-- end Body -->
</html> <!-- end HTML-->