<!--
Nadia Ali Bahatheg 1/8/2018

nadia.bahatheg@gmail.com
-->
<!--------------------------------------------->
<!--this page direct the user to other page to fill device information according to its type-->
<?php
/*start session to send recieved data to another pages*/
session_start();


/*excute only when the user hits submit button */
if(isset($_POST['submit']))
{

/*store the data in the session to allow the other pages to use it*/
$_SESSION["building_name"]=$_POST['building_name'];
$_SESSION["class_num"]=$_POST['class_num'];
$_SESSION["deviceType"]=$_POST['deviceType'];


//direct the user to the page by its link according to his choice of deviceType to fill device information 
if($_SESSION["deviceType"] == "Computer"){

       echo ("<script> window.location.href = 'computer.php'</script>");
    }
	elseif($_SESSION["deviceType"] == "Projector"){
       echo ("<script>window.location.href = 'projector.php'</script>");
    }
  	elseif($_SESSION["deviceType"] == "Electronic Screen"){
     //insert database
      echo ("<script>window.location.href = 'insertEScreen.php'</script>");
    }

    elseif($_SESSION["deviceType"] == "Network Port"){
        echo ("<script>window.location.href = 'network.php'</script>");
    }

    elseif($_SESSION["deviceType"] == "Smart Board"){
        echo ("<script>window.location.href = 'SmartBoard.php'</script>");
    }
    elseif($_SESSION["deviceType"] == "TV"){
    	 //insert database
        echo ("<script> window.location.href = 'insertTV.php'</script>");
    }
    else{
        echo ("<script> window.location.href = 'other.php'</script>");
    }
}
?>

