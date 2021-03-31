
<!DOCTYPE html>

<!-- @author @Nadia Bahatheg  3/7/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to add a class to the database by letting him select the required building's name from a drop down list then write the class name and click on "add" button--> 

<!--start of html tag-->
<html>
<!--start of head tag-->
<head>



	<!-- title of the page -->
	<title>Add Class</title>
</head><!--end of head tag-->
<body onload="setActiveFunction(3)"><!--start of body tag-->



	<!--link with header to avoid repeation of header code-->
	<?php include("../../Admin_header/header_Admin.php");?>
	
	<!--link with side menu to avoid repeation of side menu code-->
	<div><?php include("../../Admin_sidemenue/sideMenuBuilding.php");?></div>

	<!-- form for let the admin add a class by choosing its  building and write its name -->

<!-- start of the center tag for centering the contents -->
<center>

	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title1">Add Class<br>________________
	</h1>
	<!-- end of h1 tag for the page title -->

	<br>




<!-- start of the label tag for choose a building -->
	<label class="labels" id="label1">choose building*</label>

	<br>

	<?php
/*22/7/2018 Nadia Ali Bahatheg*/

//call the connection file
require_once('../../connection/connection.php');

$sql= "select building_name from building";//sql query to retrieve all building names from the building table

//For other successful queries it will return TRUE. FALSE on failure 
//parameters: connection variable and sql query
$check=mysqli_query($conn,$sql);

//if the building are more than zero which means there are some buildings in the database
if(mysqli_num_rows($check)>0){

$option='';//intialize option

//Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
while ($row=mysqli_fetch_assoc($check)) {

	//store the value of building_name column of the current row in option 
	$option.='<option value="'.$row['building_name'].'">'.$row['building_name'].'</option>';
}


}
//if there is not any building in the database print error message
else
{
	echo "<p>There is not any building in the system</p>";
}

?>


	

<!-- start of the form tag for add a class -->
<form id="form1"  name="form1" action="#"   method="post">


	<!-- start of the select tag for choose a building -->
	<select class="dropdown" id="select1" name="buildingName" required>

	<!--print the value of option variable in a loop(the above while loop)-->
	<?php echo"$option;"?>
	</select>
	<!-- end of the select tag for choose a building -->

	</label>
	<!-- end of the label tag for choose a building -->

	<br>
	<br>

	<!-- start of the label tag for choose a class name-->
	<label class="labels" id="label1">choose room type


	<br>
	<!-- start of the select tag for choose a room type -->
	<select class="dropdown" id="roomType" name="roomType">

	<!-- start of the option tag for the first option of room type -->
	<option name="Class">class
	</option>
    <!-- end of the option tag for the first option of room type -->

    <!-- start of the option tag for the second option of room type -->
	<option name="Class">auditorium
	</option>
	<!-- end of the option tag for the second option of room type -->

	<!-- start of the option tag for the third option of room type -->
	<option name="Class">workshop
	</option>
	<!-- end of the option tag for the third option of room type -->

		<!-- start of the option tag for the third option of room type -->
	<option name="Class">workshop Active Learning
	</option>
	<!-- end of the option tag for the third option of room type -->

    
	</select>
	<!-- end of the select tag for choose a room type -->
	</label>
	<!-- end of the label tag for choose a room type-->
	<br>
<br>

	<!-- start of the label tag for choose the floor-->
	<label class="labels" id="label1" >choose floor


	<br>
	<!-- start of the select tag for choose the floor -->
	<select class="dropdown" id="floor" name="floor">

	<!-- start of the option tag for the first option of floor -->
	<option name="Class">ground
	</option>
    <!-- end of the option tag for the first option of floor -->

    <!-- start of the option tag for the second option of floor -->
	<option name="Class">first
	</option>
	<!-- end of the option tag for the second option of floor -->

	<!-- start of the option tag for the third option of floor -->
	<option name="Class">second
	</option>
	<!-- end of the option tag for the third option of floor -->

    
	</select>
	<!-- end of the select tag for choose the floor -->
	</label>
	<!-- start of the label tag for choose the floor-->
<br>
	<br>

	<!-- start of the label tag for wrie a class name-->
	<label class="labels" id="label1">write class name*
	
	<br>
	

	<!-- start of input tag from type textbox for entering the class name -->
	<input type="text" name="classNum" class="textbox" id="textbox1" placeholder="          class name" required>
	<!-- end of input tag from type textbox for entering the class name -->
	</label>
	<!-- end of the label tag for wrie a class name-->


 	<br>
 	<br>

	<!-- start of input tag from type button for add -->
	<input type="submit" name="submit" value="Add" class="buttons" id="button1">
	<!-- end of input tag from type button for add -->




	</form>
	<!-- end of the form tag for add a class -->

	<!--24/7/2018 Nadia Ali Bahatheg-->
<?php
/*excute only when the user hits submit button */
if(isset($_POST['submit']))
{
$buildingName=$_POST['buildingName'];//store the building name from the form which is coming from input type:text by post method with the name buildingName
$classNum=$_POST['classNum'];//store the class number from the form which is coming from input type:text by post method with the name classNum
$room_type=$_POST['roomType'];//store the room type from the form which is coming from input type:text by post method with the name roomType
$floor=$_POST['floor'];//store the floor from the form which is coming from input type:text by post method with the name floor


//call the connection file
require_once('../../connection/connection.php');

//query for retrieving the classes from the database by classnum,building name,floor
$sql="select class_pk from class where class_num='$classNum' AND building_name='$buildingName' AND floor='$floor'";

//here first check the query and the connection- by mysqli_query($conn,$sql)- if the connection is occur the query result -by mysql_fetch_array - insert in $check variable
$check=mysqli_fetch_array(mysqli_query($conn,$sql));


// if $check variable has value(class_pk) print message by alert which tells the user that the building is already in the system(it is in the database)
		if(isset($check)){
		
			echo "<script type='text/javascript'>alert('Class: $classNum is already registered in building $buildingName!!')</script>";
		}

		//if  the building is not in the database insert the value enterd from the Form($building_name,$class_num,$roomType,&floor) to database table(class)
		else{
		
		//excute the insert query to insert the mentioned above data
$sql = "INSERT INTO class (building_name, class_num,room_type,floor)
VALUES ('$buildingName', '$classNum', '$room_type','$floor')";


				//if the query excuted succefully and the connection done correctly 
				if(mysqli_query($conn,$sql)){

                    echo "<script type='text/javascript'>alert('The class: $classNum is registered successfully in building $buildingName .')</script>";
				}
				//if there is error in query
				else{
					echo "<script type='text/javascript'>alert(oops! Please try again!')</script>";
				}
					
					}

							
				
  //close the connection with the server
				mysqli_close($conn);				 
		
	}
?>





	</center>
	<!-- end of the center tag for centering the contents -->
</body><!--end of body tag-->
</html><!--end of html-->