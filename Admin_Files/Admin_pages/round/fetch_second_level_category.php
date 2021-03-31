<?php

//fetch_second_level_category.php

include('database_connection.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 if ($id!='all' and $id!='') {
 	# code...
 $query = " SELECT DISTINCT  building_name FROM userandbuilding where user_id IN ('".$id."') ";
}
else{
	$query = " SELECT DISTINCT  building_name FROM userandbuilding ";
}
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["building_name"].'">'.$row["building_name"].'</option>';
 }
 echo $output;
}

?>