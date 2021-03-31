
<!DOCTYPE html>

<!--
Nadia Ali Bahatheg 31/7/2018

nadia.bahatheg@gmail.com

this page delete device from table deviceinclass in the database and copy the deleted device into archived device table
-->
<html><!--start html-->
<head ><!--start head-->
	<title></title>
<style type="text/css">
		body{
			background-color: #cff0da;
		}
	</style>


</head><!--end head-->
<body><!--start body-->

</body><!--end body-->
</html><!--end html-->

<?php
 /*excute once the user hits submit button*/
if(isset($_POST['submit'])){

//call the connection file
require_once('../../connection/connection.php');

//store the values from the delete device page's form
$buildingName=$_POST['building_name'];
$class_pk=$_POST['class_num'];
$deviceType=$_POST['deviceType'];

//select device_pk of the chosen class
$sql="SELECT device_pk from deviceinclass where class_pk=$class_pk";

$check=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($check);
$device_pk=$row[0];

//if the class is in deviceandclass (has devices)
if(isset($check)){

//check if the class has archived devices
$sql_arch="SELECT * from archived_device where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_arch);

//if the class doesn't have archived devices
//insert the device in archived device and delete(update to '' ,0 when the device is TV or Escreen) its data from deviceinclass table according to its type 
//print a msg in alert box when the query exuted successfully
if(mysqli_num_rows($check)<=0)
{


	if($deviceType=="Computer"){
$sql_ins="INSERT into archived_device(device_pk,pc_name,windows,system_type,mac_address,serial_num,pc_company,pc_model) SELECT device_pk,pc_name,windows,system_type,mac_address,serial_num,pc_company,pc_model from deviceinclass where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set pc_name='',windows='',system_type='',ram='',mac_address='',serial_num='',pc_company='',pc_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){

echo '<script language="javascript">';
echo 'alert("The Computer was deleted successfully.")';
echo '</script>';
}
}
}
elseif ($deviceType=="Projector"){
$sql_ins="INSERT into archived_device(device_pk,projector_company,projector_model) SELECT device_pk,projector_company,projector_model from deviceinclass where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set projector_company='',projector_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Projector was deleted successfully.")';
echo '</script>';
}
}
}
elseif ($deviceType=="Electronic Screen"){

$sql_com="UPDATE deviceinclass set Escreen='0' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Electronic Screen was deleted successfully.")';
echo '</script>';
}

}
elseif ($deviceType=="Smart Board"){
$sql_ins="INSERT into archived_device(device_pk,smart_board_model) SELECT device_pk,smart_board_model from deviceinclass where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set smart_board_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Smart Board was deleted successfully.")';
echo '</script>';
}
}
}
elseif ($deviceType=="TV"){
$sql_com="UPDATE deviceinclass set projector_model='0' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The TV was deleted successfully.")';
echo '</script>';
}
}
else{
	$sql_ins="INSERT into archived_device(device_pk,other) SELECT device_pk,other from deviceinclass where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set other='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The device was deleted successfully.")';
echo '</script>';
}
}
}
}

//if the class has archived devices
//update the device in archived device and delete(update to '' ,0 when the device is TV or Escreen) its data from deviceinclass table according to its type 
//print a msg in alert box when the query exuted successfully
else{
$sql= "SELECT * from deviceinclass where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql);
$pc_name='';
$windows='';
$system_type='';
$ram='';
$mac_address='';
$serial_num='';
$pc_company='';
$pc_model='';
$pc_model='';
$projector_company='';
$projector_model='';
$smart_board_model='';
if(mysqli_num_rows($check)>0){

while($row=mysqli_fetch_assoc($check))
{
	

$pc_name= $row['pc_name'];
$windows= $row['windows'];
$system_type= $row['system_type'];
$ram= $row['ram'];
$mac_address= $row['mac_address'];
$serial_num= $row['serial_num'];
$pc_company= $row['pc_company'];
$pc_model= $row['pc_model'];
$projector_company= $row['projector_company'];
$projector_model= $row['projector_model'];
$smart_board_model= $row['smart_board_model'];
$other= $row['other'];
}

	if($deviceType=="Computer"){
$sql_ins="UPDATE archived_device set pc_name='$pc_name',windows='$windows',system_type='$system_type',ram='$ram',mac_address='$mac_address',serial_num='$serial_num',pc_company='$pc_company',pc_model='$pc_model' where device_pk='$device_pk'";

$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set pc_name='',windows='',system_type='',ram='',mac_address='',serial_num='',pc_company='',pc_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Computer was deleted successfully.")';
echo '</script>';
}
}
}
elseif ($deviceType=="Projector"){
$sql_ins="UPDATE archived_device set projector_company='$projector_company',projector_model='$projector_model' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set projector_company='',projector_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Projector was deleted successfully.")';
echo '</script>';
}
}
}
elseif ($deviceType=="Electronic Screen"){

$sql_com="UPDATE deviceinclass set Escreen='0' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Electronic Screen was deleted successfully.")';
echo '</script>';


}

}
elseif ($deviceType=="Smart Board"){
$sql_ins="UPDATE archived_device set smart_board_model='$smart_board_model' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set smart_board_model='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The Smart Board was deleted successfully.")';
echo '</script>';

}
}
}
elseif ($deviceType=="TV"){
$sql_com="UPDATE deviceinclass set TV='0' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The TV was deleted successfully.")';
echo '</script>';

}
}
else {
$sql_ins="UPDATE archived_device set other='$other' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_ins);
if(isset($check))
{
$sql_com="UPDATE deviceinclass set other='' where device_pk='$device_pk'";
$check=mysqli_query($conn,$sql_com);
if(isset($check)){
echo '<script language="javascript">';
echo 'alert("The "'.$other.'" was deleted successfully.")';
echo '</script>';

}
}
}
}
}


}

//close the connection with the server
mysqli_close($conn);
echo ("<script> window.location.href = 'deleteDevice.php'</script>");//direct the user back to deleteDevice page to delete more device
}
?>