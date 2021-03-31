<!DOCTYPE html>
<!--Authers:Melad Alamri
	        Rana Algizani-->
<!--Start html tag-->	        
<html>
<!--Start body tag-->
<body>
<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$B  = $_GET['B'];
		//connection
		require_once('../../connection/connection.php'); //index.php
		//select calss info in spicefic building
				 $sql = "SELECT * FROM class where class_pk in (SELECT class_pk FROM  deviceinclass where class_pk in (SELECT class_pk from class where building_name IN ('".$B."')))";


		 $result= mysqli_query($conn,$sql);

            if (mysqli_num_rows($result) > 0) {
     
     $option = '';

 while($row = mysqli_fetch_assoc($result)){

         $option .= '<option value = "'.$row['class_num'].'">'.$row['class_num'].'</option>';     
} 
}else {
     $option.='<option value = "no">"there is no device in this building"</option>';
}		
mysqli_close($conn);
		
	}
	?>
	<!--Start label class number-->
	<label>Class Number</label><!--End label class number tag-->
<!--Start select tag-->
 <select name="class" onchange="showID(this.value)">
 	<!--Start option tag-->
 <option value="">Select a room:</option><!--End option tag-->
 <!--Print the options--> 
<?php echo $option; ?>
<!--End select tag-->
</select>

<br>
<!--end body tag-->
</body>
<!--end html tag-->
</html>