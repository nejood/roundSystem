
<!--  author: Nejood Abdulaziz Alfashka
          ID: 1505971
        date: 31/8/2018
-->

<!--
     summary of page:

 this page is to show the malfunctions and maintenances for each device
  
-->

<!-- 
  ************************************************
-->

<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->

<html> <!-- start HTML-->
<head> <!-- start Head-->
<title>View the Device Malfunctions and Maintenances</title>  <!-- the name of tab -->
 

 <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
 <style type="text/css">
  
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
<body onload="setActiveFunction(6)"> <!-- start Body-->

<!-- to conn between header page and this document -->
<?php
include("../../Admin_header/header_Admin.php"); 
?>
<?php
include("../../Admin_sidemenue/sideMenuMalfunction.php"); 
?>
<!--       END INCLUDE      -->


<center> <!-- start Center: to put all fields in center of page -->
    <!-- the page title -->
<h1 class="titles" id="title1"> View the Device Malfunctions and Maintenances<br> _____________________________</h1>      
<br> <!-- this tag to insert a single line break -->


   <!-- start of the form tag for add a device -->
<form action="" method="post">
  
  <!-- start of the label tag for choose a device type -->
  <label class="labels" id="label3">
    choose the device type*

    <br> <!-- this tag to insert a single line break -->
    
    <!-- start of the select tag for choose a device type -->
    <select class="dropdown" id="select3" name="deviceType"  required> 

    <!-- start of the option tag for the first option of device type -->
      <option  value="Computer">Computer
      </option>
      <!-- end of the option tag for the first option of device type -->

      <!-- start of the option tag for the second option of device type -->
      <option value="Projector">Projector
      </option>
      <!-- end of the option tag for the second option of device type -->

      <!-- start of the option tag for the third option of device type -->
      <option value="Electronic Screen">Electronic Screen
      </option>
      <!-- end of the option tag for the third option of device type -->

      <!-- start of the option tag for the fourth option of device type -->
      <option  value="Smart Board">Smart Board
      </option>
      <!-- end of the option tag for the fourth option of device type -->

      <!-- start of the option tag for the fourth option of device type -->
      <option  value="TV">TV
      </option>
      <!-- end of the option tag for the fourth option of device type -->
       <option  value="adapter">Adapter
      </option>
    
      <!-- end of the option tag for the fourth option of device type -->

    </select>
    <!-- end of the select tag for choose a device type -->
  </label>
  <!-- end of the label tag for choose a device type -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

<input name="submit" class="buttons" id="button1" type="submit" value="show"> <!-- this button will do the action(show the employee information ) -->

  </form> <!-- end Form -->

<br> <!-- this tag to insert a single line break -->
<br> <!-- this tag to insert a single line break -->

  <table class="infoTable" id="infoT"> <!-- tstart table-->


<?php

require_once('../../connection/connection.php');

if($_POST){

     $maintenance=' ';
     $malfunction=' ';

  $deviceType=$_POST['deviceType'];

$sql="SELECT * FROM malfunctiontypes";
$result= mysqli_query($conn,$sql);

 if (mysqli_num_rows($result) > 0) { //check if the number of rows or than 0
  if(isset($_POST['submit']))
{
$sql_m="SELECT  malfunction from malfunctiontypes WHERE device_type ='$deviceType'";
$records = mysqli_query($conn,$sql_m);

if(mysqli_num_rows($records)>0){

    while ($row=mysqli_fetch_assoc($records)) {
  $malfunction.='<option value="'.$row['malfunction'].'">'.$row['malfunction'].'</option>';

} //while
$sql_t="SELECT * from maintenance_type";
 $result_t=mysqli_query($conn,$sql_t);

 if (mysqli_num_rows($result_t) > 0) {

  $sql="SELECT  maintenance_type from maintenance_type WHERE  device_type ='$deviceType' ";
$result= mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

 while ($row=mysqli_fetch_assoc($result)) {
  $maintenance.='<option value="'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';

} //while
} //if rows>0
else{

$maintenance.="there is no maintenance on this device";

}//else
}// if num
else{

$maintenance.="there is no maintenance on this device";

}//else
}// num rows of malfunction
else{

$malfunction.="there is no malfunction on this device";
$maintenance.="there is no maintenance on this device";
}//else

} //if submit
}//rows num
mysqli_close($conn);
} //end if post            
?>


<?php
// print info in table
if(isset($_POST['submit'])){
 echo "<tr class=tr>";
  echo "<td class=td> Device Type </td>";
  echo "<td class=td> Malfunction </td>";
   echo "<td class=td> Maintenance </td>";
  echo "</tr>";
  echo"<tr class=tr>";
   echo" <td class=td> $deviceType </td>";
   echo" <td class=td> $malfunction </td>";
  echo" <td class=td> $maintenance </td>";
}
echo"</tr>";

?>

</table> <!-- end table -->

</center> <!-- end center -->

</body> <!-- end Body -->
</html> <!-- end HTML-->