
<!DOCTYPE html>
<!--author @Nadia Bahatheg  2/8/2018

nadia.bahatheg@gmail.com

this page is linked with add device to allow the device to change dynamically according to the user's choice of building and class 
Also to show only the devices that not exist in the class
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

				 //Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
				 $class_num=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
			
			//For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query	  
		 $result= mysqli_query($conn,$sql);

		 //if the number of rows more than zero which mean there are some devices in the class
            if (mysqli_num_rows($result) > 0) {
     
 $pc_name='';//intilize pc name
 $projector_company='';//intilize projector company
$projector_model='';//intilize projector model
$smart_board_model='';//intilize smart_board_model
$network_port='';//intilize network port
$TV='';//intilize TV
$Escreen='';//intilize  Escreen
$other='';//intilize other


 //Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set 
 while($row = mysqli_fetch_assoc($result)){

  $pc_name=$row['pc_name'];//store the value of pc_name column into $pc_name
 $projector_company=$row['projector_company'];//store the value of projector_company column into $projector_company
 $projector_model=$row['projector_model'];//store the value of projector_model column into $projector_model
 $smart_board_model=$row['smart_board_model'];//store the value of smart_board_model column into smart_board_model
 $network_port=$row['network_port'];//store the value of network_port column into $network_port
 $TV=$row['TV'];//store the value of TV column into $TV
 $Escreen=$row['Escreen'];//store the value of Escreen column into $Escreen
 $other=$row['other'];//store the value of other column into $other

//first option with no value to clarify to the user  
echo "<option value=''>Select a device:</option>" ;

//while the class has all devices print msg
if($pc_name!=''  and ($projector_company!='' or $projector_model!='') and $smart_board_model!='' and $network_port and $TV==1 and $Escreen==1 and $other!=''){
	echo "<option >All devices already added to this class</option>";
}
else{
		//while the class has no pc allow the user to choose computer to add it
 		if($pc_name=='')
 		{
        echo "<option value ='Computer'>Computer</option>";     
 		}

 		//while the class has no projector allow the user to choose projector to add it
 		if($projector_company=='' and $projector_model=='')
 		{
         echo "<option value ='Projector'>projector</option>";     
 		}

 		//while the class has no smart board allow the user to choose smart board to add it
 		if($smart_board_model=='')
 		{
 		echo "<option value ='Smart Board'>Smart Board</option>";   	
 		}

 		//while the class has no TV allow the user to choose TV to add it
 		if($TV==0)
 		{
 		echo "<option value = 'TV'>TV</option>";   	
 		}

 		//while the class has no Electronic screen allow the user to choose Electronic screen to add it
 		if($Escreen==0)
 		{
 		echo "<option value = 'Electronic Screen'>Electronic Screen</option>";   	
 		}

 		//while the class has no network port allow the user to choose network port to add it
 		 if($network_port=='')
 		{
 			echo "<option value='Network Port'>Network Port</option>";
 		}

 		//while the class has no other device allow the user to choose other to add it
 			if($other=='')
 		{
 		echo "<option value = 'Other'>Other</option>";  	
 		}

 	
}
}
}
//while the class has no devices allow the user to choose any device to add it
else {
    	echo "<option value ='Computer'>Computer</option>";  
 echo "<option value ='Projector'>projector</option>";   
echo "<option value ='Smart Board'>Smart Board</option>";
echo "<option value = 'TV'>TV</option>";
echo "<option value = 'Electronic Screen'>Electronic Screen</option>";
echo "<option value='Network Port'>Network Port</option>";
echo "<option value = 'Other'>Other</option>"; 

}

//close the connection with the server		
mysqli_close($conn);
		
	}
	?>
	<!--label for dropdown list-->
	<label class="labels">Device Type</label>

	 <!--drop down menu for choosing device type linked with showDetails function by onchange event-->
 <select name="deviceType" onchange="showID(this.value)" class="dropdown">
 
</select>
<!--end of drop down list-->

<br>
</body><!--end of body-->
</html><!--end of html-->