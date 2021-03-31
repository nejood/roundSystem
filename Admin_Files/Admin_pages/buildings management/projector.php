
<!--  author: Nejood Abdulaziz Alfashka
	      ID: 1505971
	    date: 17/7/2018
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

<style>
.labels{
	display: inline;
	left:30%;
position: absolute;
margin: 2px;
}
input[type=text] {
    width: 25%;
    padding: 4px 5px;
    display: inline;
    border-radius: 4px;
   position: 	absolute;
     margin: 28px;
     left:46%;
}

.buttons{
	 margin: 90px; 
}

</style>


<head> <!-- start Head-->
<title>Projector Information</title>  <!-- the name of tab -->
</head> <!-- end Head-->
<body onload="setActiveFunction(3)"> <!-- start Body-->
	
 <!--No need for reapeat code use this and save the repeated code in seperate file--> 

 <?php include("../../Admin_header/header_Admin.php");?>
 <div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>


<center>
<h1 class="titles" id="title1" >Projector Information</h1>        <!-- the page title -->
<h1 class="titles" id="title1">_____________________________</h1>

<form action="" method="post">
<!-- start form to take input from user and do action -->

<label class="labels" id="label1">projector company: </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox1" type="text" name="projector_company">  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label2">projector model: </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox2" type="text" name="projector_model">  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<input class="buttons" id="button1" type="submit" value="Add" name="submit"> <!-- this button will do the action(add employee) -->

</form> <!-- end Form -->
</center>
<?php
/*excute only when the user hits submit button */
if(isset($_POST['submit'])){

//call the connection file
require_once('../../connection/connection.php');

/*store the data from the form*/
$projector_company=$_POST['projector_company'];
$projector_model=$_POST['projector_model'];
 
 //store the class_pk from the session   
$class_pk=$_SESSION["class_num"];

//sql query to check if the class has devices
  $device_pk = "SELECT device_pk from deviceinclass where class_pk='$class_pk' ";

  //For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query
  $result =mysqli_query($conn,$device_pk);

  //Returns an array of strings that corresponds to the fetched row. NULL if there are no more rows in result-set
  $row=mysqli_fetch_array($result);

  //there is a device  
 if (isset($row[0])) {

//update the chosen device's data from '' to the entered data
$up="UPDATE deviceinclass SET projector_company ='$projector_company', projector_model='$projector_model' 
      where device_pk='$row[0]'";
$check=mysqli_query($conn,$up);

//when the upadate query done successfully 
if(isset($check))
{    echo "<script>
alert('The projector was added successfully .');
</script>";
echo ("<script> window.location.href = 'addDevice.php'</script>");//direct the user to add device page if he want to add more
}
 else
 {
    echo '<script language="javascript">';
echo 'alert("ERROR: Could not able to execute "+$up)';
echo '</script>';
 }

} //end if 
else{ //there is no device in class 

  //query to insert the class into the deviceinclass table and the entered device info
$in="INSERT INTO deviceinclass (class_pk,projector_company,projector_model)
     VALUES ('$class_pk','$projector_company','$projector_model')";
$check=mysqli_query($conn,$in);

//when the insert query done successfully 
   if(isset($check)) 
   {
     echo "<script>alert('The projector was added successfully .')</script>";
     echo ("<script> window.location.href = 'addDevice.php'</script>");//direct the user to add device page if he want to add more

}//else

    } //end if check
   
//close the connection with the server
mysqli_close($conn);}
 
?>

</body> <!-- end Body -->
</html> <!-- end HTML-->