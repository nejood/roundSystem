
<!DOCTYPE html>
<!--author @Nadia Bahatheg  2/8/2018

nadia.bahatheg@gmail.com

this page is linked with delete device to allow the device to change dynamically according to the user's choice of building and class 
Also to show only the devices that exist in the class
-->
<html><!--start of html-->
	<head><!--start of head-->
	<style type="text/css">
		body{
			background-color: #cff0da;
		}
	</style>	
	</head><!--end of head-->
<body><!--star of body-->
<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$class_pk  = $_GET['B'];//store the class_pk coming from addDevice PHP_V
		
		//call the connection file
		require_once('../../connection/connection.php');

		//retrieve all devices from database the belongs to the chosen building and class
				 $sql = "SELECT * FROM  deviceinclass where class_pk='$class_pk'";

				 //retrieve the class num  
				 $sql2="SELECT class_num from class where classpk='$class_pk'";

				 $class_num=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
				  
		 $result= mysqli_query($conn,$sql);

		 //if the number of rows more than zero which mean there are some devices in the class
            if (mysqli_num_rows($result) > 0) {
     
  $pc_name='';
 $projector_company='';
$projector_model='';
$smart_board_model='';
$network_port='';
$TV='';
$Escreen='';
$other='';
     // output data of each row
 while($row = mysqli_fetch_assoc($result)){

  $pc_name=$row['pc_name'];
 $projector_company=$row['projector_company'];
 $projector_model=$row['projector_model'];
 $smart_board_model=$row['smart_board_model'];
 $TV=$row['TV'];
 $Escreen=$row['Escreen'];
 $other=$row['other'];

 //while the class has no devices print msg
echo "<option value=''>Select a device:</option>" ;
if($pc_name==''  and $projector_company=='' and $projector_model=='' and $smart_board_model=='' and $TV!=1 and $Escreen!=1 and $other==''){
	echo "<option >There is no devices</option>";
}

//or show the exist device
else{
 		if($pc_name!='')
 		{
        echo "<option value ='Computer'>Computer</option>";     
 		}

 		if($projector_company!='' or $projector_model!='')
 		{
         echo "<option value ='Projector'>projector</option>";     
 		}
 		if($smart_board_model!='')
 		{
 		echo "<option value ='Smart Board'>Smart Board</option>";   	
 		}
 		if($TV==1)
 		{
 		echo "<option value = 'TV'>TV</option>";   	
 		}
 		if($Escreen==1)
 		{
 		echo "<option value = 'Electronic Screen'>Electronic Screen</option>";   	
 		}
 			if($other!='')
 		{
 		echo "<option value = '$other'>$other</option>";  	
 		}
 	
}
}
}else {
    	
 			echo "<option value=''>There is no devices</option>";
}		
mysqli_close($conn);
		
	}
	?>
	<label class="labels">Device Type</label>
 <select name="deviceType" onchange="showID(this.value)" class="dropdown">
 
</select>


<br>
</body>
</html>