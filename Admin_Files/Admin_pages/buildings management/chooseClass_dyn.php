
<!DOCTYPE html>
<!--author @Nadia Bahatheg  2/8/2018

nadia.bahatheg@gmail.com

this page is linked with add device and delete device to allow the class to change dynamically according to the user's choice of building
-->
<html><!--start of html tag-->

<!--start of head tag-->
	<head>

<!--end of head tag-->		
	</head>
<body><!--start of body-->
<?php 

$option = '';//intialize option


	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$building_name  = $_GET['B'];//store the building name coming from addDevice/deleteDevice PHP_V
		
		//call connection file
		require_once('../../connection/connection.php');


		//retrieve all classes from database the belongs to the chosen building
				 $sql = "SELECT * FROM  class where building_name='$building_name'";  

		//For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query
		 $result= mysqli_query($conn,$sql);


		 //if the classes in the building are more than zero which means there are some classes in the building in the database
            if (mysqli_num_rows($result) > 0) {
//first option with no value to clarify to the user  
 echo "<option value=''>Select a class:</option>" ;    
  
  //Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
 while($row = mysqli_fetch_assoc($result)){

 	//store the value of class_pk column of the current row in option and display its num to the user in the dropdown list
         $option .= '<option value = "'.$row['class_pk'].'">'.$row['class_num'].'</option>';  
         

} 
}
//if there is not any class print error message
else {
     $option .= '<option value = "">There is no classes</option>'; 
}

//close the connection with the server		
mysqli_close($conn);
		
	}
	?>

	<!--label for dropdown list-->
	<label>Class Number</label>

	 <!--drop down menu for choosing class num linked with showDetails function by onchange event-->
 <select name="class" onchange="showID(this.value)">

<!--print the value of option variable in a loop(the above while loop)-->
<?php echo $option; ?>
</select>
<!--end of class drop down list-->

<br>
</body><!--end of body-->
</html><!--end of html-->