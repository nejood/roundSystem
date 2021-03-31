
<!DOCTYPE html>

<!-- author @Nadia Bahatheg 2/7/2018

nadia.bahatheg@gmail.com

this page allow the user with type:"Admin" to add a building to the database by letting him entering the building's name and click on "add" button--> 

<!--start of html tag-->
<html>
<!--start of head tag-->
<head>


	

	<!-- the title of the page -->
	<title>Add Building</title>

</head><!--end of head tag-->

<!--start of body tag-->
<body onload="setActiveFunction(3)">

	

	    <!--link with header to avoid repeation of header code-->
	    <?php include("../../Admin_header/header_Admin.php");?>
		<!--link with side menu to avoid repeation of side menu code-->
 		<?php include("../../Admin_sidemenue/sideMenuBuilding.php");?>
	
<!-- form for let the admin add a building by entering its name -->

<!-- start of the center tag for centering the contents -->
<center>
<!-- start of h1 tag for the page title -->
<h1 class="titles" id="title1">Add Building<br>________________ 
</h1>
<!-- end of h1 tag for the page title -->


<!-- start of the form tag for add a building -->

<form id="form1"  name="form1" action="#"   method="post">

	<br>
	
	<!-- start of the label tag for wrie a building name-->
	<label for="buildingName" class="labels" id="label1">Write the Building Name *
	
	<br>
	


	<!-- start of input tag from type textbox for entering the building name -->
	<input type="text" name="buildingName" class="textbox" id="textbox1" placeholder="          Building name" required> 
	<!-- end of input tag from type textbox for entering the building name --></label>
	<!-- end of the label tag for wrie a building name-->



    <br>
 	<br>
	

	<!-- start of input tag from type button for add -->
	<input type="submit" name="submit" value="Add" class="buttons" id="button1" >
	<!-- end of input tag from type button for add -->


	
</form>
<!-- end of the form tag for delete a building -->


<?php
//11/7/2018
/*excute only when the user hits submit button */
if(isset($_POST['submit'])){ 
$buildingName=$_POST['buildingName'];//store the building name from the form which is coming from input type:text by post method with the name buildingName


//call the connection file
require_once('../../connection/connection.php');

/*use sql variable to store mysql qury*/
$sql="select building_name from building where building_name='$buildingName'";

//here first check the query and the connection- by mysqli_query($conn,$sql)- if the connection is occur the query result -by mysql_fetch_array - insert in $check variable
$check=mysqli_fetch_array(mysqli_query($conn,$sql));

// if $check variable has value(building_name) print message by alert which tells the user that the building is already in the system(it is in the database)
		if(isset($check)){
			echo "<script type='text/javascript'>alert('This Building: $buildingName is already registered !!')</script>";
		}

		//if  the building is not in the database insert the value enterd from the Form($building_name) to database table(building)
		else{
		
		//excute the insert query to insert the mentioned above data
        $sql = "insert INTO building(building_name) VALUES('$buildingName')";

//if connection is valid and the query is done print this message(Thank you for register in website We will get back to you as soon as possible.) -by echo-
				if(mysqli_query($conn,$sql)){

                    echo "<script type='text/javascript'>alert('The Building: $buildingName is registered successfully.')</script>";
				}
				//if there is an error in the query
				else{
					echo "<script type='text/javascript'>alert('oops! Please try again!')</script>";
				}
					
					}

							
				
             //close the connection with the server
				mysqli_close($conn);				 
		
	
				}				 
		
	
?>
</center>
<!-- end of the center tag for centering the contents -->




</body>
<!--end of body tag-->
</html>
<!--end of html tag-->