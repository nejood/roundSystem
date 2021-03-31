
<!--  author: Nejood Abdulaziz Alfashka
	      ID: 1505971
	    date: 10/7/2018
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
    padding: 6px 7px;
    display: inline;
    border-radius: 4px;
   position: 	absolute;
     margin: 22px;
     left:46%;
}

.buttons{
	 margin: 40px; 
}

</style>


<head> <!-- start Head-->
<title>Computer Information</title>  <!-- the name of tab -->
 
</head> <!-- end Head-->
<body>  <!-- start Body-->
	<!-- to connect between header page and this document -->
   <?php include("../../Admin_header/header_Admin.php");?>
 <div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

<center>
<h1 class="titles" id="title1" >Computer Information</h1>        <!-- the page title -->
<h1 class="titles" id="title1">_____________________________</h1>

<form action="" method="post">
<!-- start form to take input from user and do action -->

<label class="labels" id="label1">PC Name: </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox1" type="text" name="pc_name"required>  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label2">Windows : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox2" type="text" name="Windows"required>  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label3">System Type : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox3" type="text" name="System_Type"required>  <!-- this text box just acsept the input from email type -->


<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label4">RAM : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox4" type="text" name="RAM"required>  <!-- this text box just acsept the input from email type -->


<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label5">MAC address : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox5" type="text" name="MAC_address"required>  <!-- this text box just acsept the input from email type -->


<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label6">Serial Number : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox6" type="text" name="Serial_Number"required>  <!-- this text box just acsept the input from email type -->



<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label7">PC Company : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox7" type="text" name="PC_Company"required>  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<label class="labels" id="label8">PC Model : </label> <!-- the label of text box to help user to now what the requierd -->

 <input class="textbox" id="textbox8" type="text" name="PC_Model"required>  <!-- this text box just acsept the input from email type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<input class="buttons" id="button1" type="submit" name="submit" value="Add" required> <!-- this button will do the action(add employee) -->

</form> <!-- end Form -->
</center>
<?php

/*excute only when the user hits submit button */
if(isset($_POST['submit'])){

//call the connection file
require_once('../../connection/connection.php');


/*store the data from the form*/
$pc_name=$_POST['pc_name'];
$Windows=$_POST['Windows'];
$System_Type=$_POST['System_Type'];
$RAM=$_POST['RAM'];
$MAC_address=$_POST['MAC_address'];
$Serial_Number=$_POST['Serial_Number'];
$PC_Company=$_POST['PC_Company'];
$PC_Model=$_POST['PC_Model'];

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
$up="UPDATE deviceinclass SET pc_name ='$pc_name',windows='$Windows',system_type='$System_Type' , ram='$RAM' , mac_address='$MAC_address',serial_num='$Serial_Number', pc_company='$PC_Company' , pc_model='$PC_Model' 
    where device_pk='$row[0]' ";
$check=mysqli_query($conn,$up);

//when the upadate query done successfully 
if(isset($check)){
     echo "<script>
alert('The Computer was added successfully .');
</script>";
echo ("<script> window.location.href = 'addDevice.php'</script>");//direct the user to add device page if he want to add more
}
else
{
   echo '<script language="javascript">';
echo 'alert("ERROR: Could not able to execute "+$up)';
echo '</script>';
}

} //end if row
else{ //there is no device in class

  //query to insert the class into the deviceinclass table and the entered device info
$in="INSERT INTO deviceinclass (class_pk,pc_name,windows,system_type, ram, mac_address,serial_num, pc_company, pc_model)
VALUES ('$class_pk','$pc_name','$Windows','$System_Type','$RAM','$MAC_address','$Serial_Number','$PC_Company','$PC_Model')";
$check=mysqli_query($conn,$in);

//when the insert query done successfully 
if(isset($check)){
     echo "<script>
alert('The Computer was added successfully .');
</script>";
echo ("<script> window.location.href = 'addDevice.php'</script>");//direct the user to add device page if he want to add more
}

else
{ echo '<script language="javascript">';
echo 'alert("ERROR: Could not able to execute "+$up)';
echo '</script>';}
}//else


//close the connection with the server
mysqli_close($conn);}
 
?>




</body> <!-- end Body -->
</html> <!-- end HTML-->