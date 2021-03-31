

<!DOCTYPE html>
<!-- author @Nadia Bahatheg  5/8/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to show and print the archived device info by letting him choose the required building's name then click show button -->
<html><!--start of html-->
<head><!--start of head-->

	<!--title of the page-->
	<title>Show Archived Device</title>


<style type="text/css">
/*style of the table*/
	.table {
		margin-top: 2%;
    border-collapse: collapse;
    width: 50%;
      border: 2px solid #55967e;
}

/*stayle of column*/
.th, .td {
    text-align: center;
   width: 50%;
   height: 10%;
   border: 2px solid #55967e;

}

/*style of the rows*/
.tr:nth-child(even) {background-color: #f2f2f2;}


/*style of the printer button*/
#printer{
	margin-left: 47.5%;
	position: fixed;
	margin-top: 2%;
	background-color: #cff0da;

}
</style>

</head><!--end of head-->

<body onload="setActiveFunction(3)"><!--start of body-->



	<!--link with header to avoid repeation of header code-->
	<?php include("../../Admin_header/header_Admin.php");?>
	


<!-- start of the center tag for centering the contents -->
<center>

	<!--tag a with img of printer linked with print button-->
	<a href="#print"><img src="../../Admin_img/printer.png" id="printer"></a>
	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Show Archived Device<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->
<!--table for showing archived device-->
<table border="1" cellpadding="3" id="printTable" class="table"> 

	<!--title of the table-->
	 <caption >Archived Device</caption>
	<br>

<!--the title of table columns-->
<tr class="tr">
	
	<td class="td th">PC Name</td>
<td class="td th">Windows</td>
<td class="td th">System Type</td>
<td class="td th">RAM</td>
<td class="td th">MAC Address</td>
<td class="td th">Serial Number</td>
<td class="td th">PC Company</td>
<td class="td th">PC Model</td>
<td class="td th">Projector Company</td>
<td class="td th">Projector Model</td>
<td class="td th">Smart Board Model</td>
<td class="td th">Network Port</td>
<td class="td th">TV</td>
<td class="td th">Escreen</td>
<td class="td th">Othetr</td>
</tr>

<?php
 ///call the connection file
require_once('../../connection/connection.php');

//retrieve all of archived device info
	$sql="SELECT * FROM archived_device";
$check=mysqli_query($conn,$sql);

//when there is any archived device info
if(mysqli_num_rows($check)>0){

//loop to print the info in multiple rows
while ($row=mysqli_fetch_assoc($check)) {
	 echo '<tr class="tr">';
	echo "<td class='td'>" .$row['pc_name']."</td>";
	echo "<td class='td'>" .$row['windows']."</td>";
	echo "<td class='td'>" .$row['system_type']."</td>";
	echo "<td class='td'>" .$row['ram']."</td>";
	echo "<td class='td'>" .$row['mac_address']."</td>";
	echo "<td class='td'>" .$row['serial_num']."</td>";
	echo "<td class='td'>" .$row['pc_company']."</td>";
	echo "<td class='td'>" .$row['pc_model']."</td>";
	echo "<td class='td'>" .$row['projector_company']."</td>";
	echo "<td class='td'>" .$row['projector_model']."</td>";
	echo "<td class='td'>" .$row['smart_board_model']."</td>";
 	echo "<td class='td'>" .$row['network_port']."</td>";
	echo "<td class='td'>" .$row['TV']."</td>";
	echo "<td class='td'>" .$row['Escreen']."</td>";
	echo "<td class='td'>" .$row['other']."</td>";
	 echo '</tr>';
	
}

}




//close the connection with the server
mysqli_close($conn);

?>

</table>
<br>
<!--button to print the table with its title-->
<button onclick="printData()" class="buttons" id="print">Print</button>

</center><!--end of center-->

<!--------------JavaScript--------------->
<script>

//method to print the table by its id
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

</body>
</html>