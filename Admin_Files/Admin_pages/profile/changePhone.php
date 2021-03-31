
<!DOCTYPE html>
<!-- author @Nadia Bahatheg  19/7/2018

nadia.bahatheg@gmail.com

page to allow the user to change his phone number
-->
<html><!--start of html-->
<head><!--start of head-->
		

<!--title of the page-->
	<title>Change Phone#</title>
</head><!--end of head-->
<body onload="setActiveFunction(2)"><!--start of body-->



	<!--link with header to avoid repeation of header code-->
  <?php include("../../Admin_header/header_Admin.php");?>
  
 <!--start of center-->
<center>

	<!-- start of h1 tag for the page title -->
	<h1 class="titles" id="title">
	Change Phone#<br>________________
</h1>
<!-- end of h1 tag for the page title -->
<br>
<!--start of form-->
	<form action="#" onsubmit="checkPhone()" method="post">


<!-- label for type new number -->

<label class="labels" id="label5">type the new number
	<br>

	<!--textbox for entering the new number-->
<input type="text" name="newNumber1" class="textbox" id="textbox1" placeholder="          New number">

<br>
<br>
</label>

<!-- label for retype new number -->
<label class="labels" id="label6">Retype the new number
	<br>
	<!--textbox for re-entering the new number-->
<input type="text" name="newNumber2" class="textbox" id="textbox2" placeholder="       Retype new number" >

<br>
<br>
</label>

<!--submit button to submit the form-->
<input type="submit" name="submit" value="Change" class="buttons" id="button2">

</form><!--end of the form-->

<?php
//29/7/2018

/*excute only when the user hits submit*/
if(isset($_POST['submit'])){ 

//store the data from the form	
$phone_no=$_POST['newNumber1'];


//call the connection file
require_once('../../connection/connection.php');


//update the phone number of logged in user
$sql = "update user set phone_no=$phone_no where id=".$_SESSION["id"];

//if the update done successfully
$check=mysqli_query($conn,$sql);

//if the update done successfully
				if(isset($check)){

                    echo "<script type='text/javascript'>alert('The phone number was changed successfully to ($phone_no)')</script>";
				}
				//if there is error in query
				else{
					 echo "<script type='text/javascript'>alert('ERROR: Could not able to execute $sql.')</script>". mysqli_error($conn);
				}
					
					

							
				
//close the  connection with the server
				mysqli_close($conn);				 
		
	
				}
				?>
<!-------------JavaScript---------------->
<script type="text/javascript">
/*@author:Nadia Ali Bahathe 30/7/2018
function to check that the two entered phone# are identical
*/					
	function checkPhone(){
var num=document.getElementById("textbox1");
var renum=document.getElementById("textbox2");
if(num.value==renum.value)
{
	return true;
}
window.alert("the two numbers should be identical");
return false;

	}

</script>				 

</center>
</body>



</html>