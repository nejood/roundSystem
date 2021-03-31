<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
$class_num='';
$print='';
$building_name='';
$device='';

if (isset($_POST['submit'])) {
	# code...
	$building_name=$_POST['building_name'];
	$class_num=$_POST['class_num'];
	$device=$_POST["deviceType"];
}
$previous = "javascript:history.go(-1)";
require_once('../../connection/connection.php'); //index.php
$index=0;
$stateold = '';
$bname = '';
$uname = '';
$cname = '';
$mdate = '';
$cdate = '';
$dvname = '';
if ($building_name!='' and $class_num!=''and $device!='') {
	# code...

 $sql = "SELECT * FROM malfunction where  building_name = ('$building_name') and class_num = ('$class_num') and `device_type`='$device' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     					
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
 							$select='';
 							$sel = array('Out of Serves','Working','Under Maintenace' );
 								for ($i=0; $i <3 ; $i++) { 
 									# code...
 								
 									if ($sel[$i]!=$row['status_of_malfunction']) {
 										$select.= '<option value="'.$sel[$i].'">'.$sel[$i].'</option>';
 									}
 								}
 							$stateold.=$row['status_of_malfunction'].',';
 							$bname .= $row['building_name'].',';
							$uname .= $row['user_name'].',';
							$cname.= $row['class_num'].',';
							$mdate.= $row['malfunction_date'].',';
							$cdate.= $row['date_of_maintenance'].',';
							$dvname.= $row['device_type'].',';
          
		                	$print .='<tr class="tr">
		                	 <td class="td th ">' .$row['user_name'].'</td> 
		                	<td class="td th ">'.$row['building_name'].'</td> 
		                	<td class="td th ">'.$row['class_num'].'</td> 
		                	<td class="td th ">'.$row['device_type'].'</td>
		                	<td class="td th ">' .$row['malfunctionType'].'</td>
		                	<td class="td th ">' .$row['malfunction_date'].' </td>
		                	<td class="td th ">' .$row['status_of_malfunction'].'
		                	<select id="status'.$index.'">
		                	<option selected>' .$row['status_of_malfunction'].'</option>
                                       '.$select.'
		                	</select>
		                	</td>
		                	<td class="td th ">' .$row['maintenace_type'].' </td>
		                	<td class="td th ">' .$row['executing_agency'].'</td> 
		    				<td class="td th ">' .$row['date_of_maintenance'].'
		    				<input class="dates" type="date" name="date" id="'.$index.'date" >
		    				</td> </tr>';
		    				$index++;
		                }
		            }
}elseif ($building_name!='' and $class_num!='') {
	# code..
	 $sql = "SELECT * FROM malfunction where  building_name = ('$building_name') and class_num = ('$class_num')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
 							$select='';
 							$sel = array('Out of Serves','Working','Under Maintenace' );
 								for ($i=0; $i <3 ; $i++) { 
 									# code...
 								
 									if ($sel[$i]!=$row['status_of_malfunction']) {
 										$select.= '<option value="'.$sel[$i].'">'.$sel[$i].'</option>';
 									}
 								}
 							
          
		                	$print .='<tr class="tr">
		                	 <td class="td th ">' .$row['user_name'].'</td> 
		                	<td class="td th ">'.$row['building_name'].'</td> 
		                	<td class="td th ">'.$row['class_num'].'</td> 
		                	<td class="td th ">'.$row['device_type'].'</td>
		                	<td class="td th ">' .$row['malfunctionType'].'</td>
		                	<td class="td th ">' .$row['malfunction_date'].' </td>
		                	<td class="td th ">' .$row['status_of_malfunction'].'
		                	<select id="status'.$i++.'">
		                	<option selected>' .$row['status_of_malfunction'].'</option>
                                       '.$select.'
		                	</select>
		                	</td>
		                	<td class="td th ">' .$row['maintenace_type'].' </td>
		                	<td class="td th ">' .$row['executing_agency'].'</td> 
		    				<td class="td th ">' .$row['date_of_maintenance'].'
		    				<input class="dates" type="date" name="date" >
		    				</td> </tr>';
		                }
		            }
}elseif ($building_name!='') {
	# code...
	 $sql = "SELECT * FROM malfunction where  building_name = ('$building_name')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     					
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
 							$select='';
 							$sel = array('Out of Serves','Working','Under Maintenace' );
 								for ($i=0; $i <3 ; $i++) { 
 									# code...
 								
 									if ($sel[$i]!=$row['status_of_malfunction']) {
 										$select.= '<option value="'.$sel[$i].'">'.$sel[$i].'</option>';
 									}
 								}
 							$stateold.=$row['status_of_malfunction'].',';
 							$bname .= $row['building_name'].',';
							$uname .= $row['user_name'].',';
							$cname.= $row['class_num'].',';
							$mdate.= $row['malfunction_date'].',';
							$cdate.= $row['date_of_maintenance'].',';
							$dvname.= $row['device_type'].',';
          
		                	$print .='<tr class="tr">
		                	 <td class="td th ">' .$row['user_name'].'</td> 
		                	<td class="td th ">'.$row['building_name'].'</td> 
		                	<td class="td th ">'.$row['class_num'].'</td> 
		                	<td class="td th ">'.$row['device_type'].'</td>
		                	<td class="td th ">' .$row['malfunctionType'].'</td>
		                	<td class="td th ">' .$row['malfunction_date'].' </td>
		                	<td class="td th ">' .$row['status_of_malfunction'].'
		                	<select id="status'.$index.'">
		                	<option selected>' .$row['status_of_malfunction'].'</option>
                                       '.$select.'
		                	</select>
		                	</td>
		                	<td class="td th ">' .$row['maintenace_type'].' </td>
		                	<td class="td th ">' .$row['executing_agency'].'</td> 
		    				<td class="td th ">' .$row['date_of_maintenance'].'
		    				<input class="dates" type="date" name="date" id="'.$index.'date" >
		    				</td> </tr>';
		    				$index++;
		                }
		            }
}elseif ($building_name=='') {
	# code...
	 $sql = "SELECT * FROM malfunction";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     					
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
 							$select='';
 							$sel = array('Out of Serves','Working','Under Maintenace' );
 								for ($i=0; $i <3 ; $i++) { 
 									# code...
 								
 									if ($sel[$i]!=$row['status_of_malfunction']) {
 										$select.= '<option value="'.$sel[$i].'">'.$sel[$i].'</option>';
 									}
 								}
 							$stateold.=$row['status_of_malfunction'].',';
 							$bname .= $row['building_name'].',';
							$uname .= $row['user_name'].',';
							$cname.= $row['class_num'].',';
							$mdate.= $row['malfunction_date'].',';
							$cdate.= $row['date_of_maintenance'].',';
							$dvname.= $row['device_type'].',';
          
		                	$print .='<tr class="tr">
		                	 <td class="td th ">' .$row['user_name'].'</td> 
		                	<td class="td th ">'.$row['building_name'].'</td> 
		                	<td class="td th ">'.$row['class_num'].'</td> 
		                	<td class="td th ">'.$row['device_type'].'</td>
		                	<td class="td th ">' .$row['malfunctionType'].'</td>
		                	<td class="td th ">' .$row['malfunction_date'].' </td>
		                	<td class="td th ">' .$row['status_of_malfunction'].'
		                	<select id="status'.$index.'">
		                	<option selected>' .$row['status_of_malfunction'].'</option>
                                       '.$select.'
		                	</select>
		                	</td>
		                	<td class="td th ">' .$row['maintenace_type'].' </td>
		                	<td class="td th ">' .$row['executing_agency'].'</td> 
		    				<td class="td th ">' .$row['date_of_maintenance'].'
		    				<input class="dates" type="date" name="date" id="'.$index.'date" value="'.$row['date_of_maintenance'].'" >
		    				</td> </tr>';
		    				$index++;
		                }
		            }
}elseif ($building_name!=''and $device!='') {
	# code...

 $sql = "SELECT * FROM malfunction where  building_name = ('$building_name') and `device_type`='$device' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     					
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
 							$select='';
 							$sel = array('Out of Serves','Working','Under Maintenace' );
 								for ($i=0; $i <3 ; $i++) { 
 									# code...
 								
 									if ($sel[$i]!=$row['status_of_malfunction']) {
 										$select.= '<option value="'.$sel[$i].'">'.$sel[$i].'</option>';
 									}
 								}
 							$stateold.=$row['status_of_malfunction'].',';
 							$bname .= $row['building_name'].',';
							$uname .= $row['user_name'].',';
							$cname.= $row['class_num'].',';
							$mdate.= $row['malfunction_date'].',';
							$cdate.= $row['date_of_maintenance'].',';
							$dvname.= $row['device_type'].',';
          
		                	$print .='<tr class="tr">
		                	 <td class="td th ">' .$row['user_name'].'</td> 
		                	<td class="td th ">'.$row['building_name'].'</td> 
		                	<td class="td th ">'.$row['class_num'].'</td> 
		                	<td class="td th ">'.$row['device_type'].'</td>
		                	<td class="td th ">' .$row['malfunctionType'].'</td>
		                	<td class="td th ">' .$row['malfunction_date'].' </td>
		                	<td class="td th ">' .$row['status_of_malfunction'].'
		                	<select id="status'.$index.'">
		                	<option selected>' .$row['status_of_malfunction'].'</option>
                                       '.$select.'
		                	</select>
		                	</td>
		                	<td class="td th ">' .$row['maintenace_type'].' </td>
		                	<td class="td th ">' .$row['executing_agency'].'</td> 
		    				<td class="td th ">' .$row['date_of_maintenance'].'
		    				<input class="dates" type="date" name="date" id="'.$index.'date" >
		    				</td> </tr>';
		    				$index++;
		                }
		            }
}
		 

?>
<!DOCTYPE html>
<html>
<head>

	<title>Malfunction</title>
	<!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->

	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	
	<!--end of meta tag-->
<!--the start of the link to tag to link the page with the style file-->	

<!--the end of the link to tag -->
<style type="text/css">
	
	.table {
		margin-top: 2%;
    border-collapse: collapse;
    width: 50%;
     border: 2px solid #55967e;
}
.ar {
            text-decoration: none;
            color: white;

        }
.th,.td {
    text-align: center;
   width: 25%;
   height: 100%;
    border: 2px solid #55967e;
    font-size: small;

}

.tras{
	transform: rotate(90deg);
	
}

.tr:nth-child(even) {background-color: #f2f2f2;}
.headerMalfunction{
	margin-top: 2%;
}
</style>

</head>

<body onload="setActiveFunction(6)">

 <!--        START INCLUDE     -->

<!-- to conn between header page and this document -->
<div class="headerMalfunction"><?php
 include("../../Admin_header/header_Admin.php"); 
?></div>

<!--       END INCLUDE      -->
<!--No need for reapeat code use this and save the repeated code in seperate file-->
	


<!-- start of the center tag for centering the contents -->
<h1 class="titles" id="title1" align="center" >Malfunction<br>_____________________________</h1>
    <br/><br/>
<center>
	<br>
<button class="buttons" name="back" style="float:left; margin-left: 10%; "><a class="ar" href="<?=$previous?>">Back</a>
</button>
<button class="buttons" onclick="edit()" style="float:right; margin-right: 10%;" >Edit</button>	
 
<br>

<table class="table">
	

<tr class="tr">


	<th class="td th " >Employee name</th>
	<th class="td th " >Building</th>
	<th class="td th " >Class</th>
	<th class="td th " >Device</th>	
    <th class="td th " >Malfunction Type</th>
    <th class="td th " >Date of Malfuntion</th>
    <th class="td th " >Status of Malfunction</th>
    <th class="td th " >Maintenace Type</th>
    <th class="td th " >Executed by</th>
    <th class="td th " >Date of Maintenance</th>

</tr>

<?php echo $print;?>


	
</table>
	<br>


</center>
<!-- end of the center tag for centering the contents -->

</body>
<script type="text/javascript">
	function edit() {

		var stateold ="<?php echo $stateold;?>";
		var bname = "<?php echo $bname;?>";
		var uname = "<?php echo $uname;?>";
		var cname = "<?php echo $cname;?>";
		var mdate = "<?php echo $mdate;?>";
		var cdate = "<?php echo $cdate;?>";
		var dvname = "<?php echo $dvname;?>";
		var index = "<?php echo $index;?>";
		var statusnow = '';
		var ndate = '';

		for (var i =0; i <index; i++) {
			var x ='status'+i;
			var y = i+"date";
			statusnow+= document.getElementById(x).value+',';
			ndate += document.getElementById(y).value+',';

		}

		 window.location.href = "malf_UP.php?statusnow=" + statusnow+"&stateold="+stateold+"&bname="+bname+"&uname="+uname+"&cname="+cname+"&mdate="+mdate+"&cdate="+cdate+"&ndate="+ndate+"&dvname="+dvname+"&index="+index;
	}
</script>
</html>