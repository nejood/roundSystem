<!DOCTYPE html>
<html>

<head>
    <title>Malfunction</title>
    <!--end title tag-->

    <!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--the end of the meta to tag to make the page adaptable to the device sizewith the style file-->

 <?php
 include("../../Admin_header/header_Admin.php"); 
?>
<?php
include("../../Admin_sidemenue/sideMenuMalfunction.php"); 
?>
</head>

<body onload="setActiveFunction(6)">
<?php
//first query run when page load to show building name
require_once('../../connection/connection.php'); //index.php
//select building info
$sql = "SELECT * FROM `building` ORDER BY `building`.`index_B` ASC";
//----------------------------
$option = '';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    //--------------------
    // output data of each row
    $option .= '<option value = ""> All</option>';
    while ($row = mysqli_fetch_assoc($result))
    {

        $option .= '<option value = "' . $row['building_name'] . '">' . $row['building_name'] . '</option>';

    }
}
else
{
    $option .= '<option value = "no">"no building"</option>';
}
mysqli_close($conn);

?>

    <!---------------------------------------------------->
    <!------------------select building--------------------->
    <form action="malf_DB.php" method="POST">
        <!-------------- start building label -------------->
        <center>
            <h1 class="titles" id="title1">Malfunction<br>_____________________________</h1>

            <label class="labels">Building:</label>
            <select class="dropdown" onchange="showDetails(this.value,this.id)" id="Building" name="building_name" required>
                <option value="">Select a Building:</option>
                <?php echo $option;?>
            </select>

            <!------------------select room--------------------->
            <br>
            <br>

            <label class="labels">Class:</label>
            <select class="dropdown" onchange="showDetails(this.value,this.id)" id="Room" name="class_num" >
            </select>
            <br>
            <br>


            <!-- start of the select tag for choose a device type -->
            <lable class="labels" > Device</lable>
            <select class="dropdown" id="select3" name="deviceType">

                <!-- start of the option tag for the first option of device type -->
                <option  value="">All
                </option>
                <option  value="pc">PC
                </option>
                <option  value="monitor">Monitor
                </option>
                <option  value="mouse">Mouse
                </option>
                <option  value="keyboard">Keyboard
                </option>
                <option  value="network">Network
                </option>
                <option  value="antiviru">Antiviruse
                </option>
                <!-- end of the option tag for the first option of device type -->
                <option  value="video spliter">Video Spliter
                </option>
                <!-- start of the option tag for the second option of device type -->
                <option  value="Projector control app">Projector control app
                </option>
                <option  value="VGA cable">VGA cable
                </option>
                <option  value="VGA port">VGA port
                </option>
                <option  value="Lamp">Lamp
                </option>
                <option  value="Filter">Filter
                </option>
                <!-- end of the option tag for the second option of device type -->

                <!-- start of the option tag for the third option of device type -->
                <option  value="Electronic screen">Electronic Screen
                </option>
                <!-- end of the option tag for the third option of device type -->

                <!-- start of the option tag for the fourth option of device type -->
                <option  value="Smart Board">Smart Board
                </option>
                <!-- end of the option tag for the fourth option of device type -->
                <!-- start of the option tag for the fourth option of device type -->
                <option  value="TV">T.V
                </option>
                <!-- end of the option tag for the fourth option of device type -->
                <!-- start of the option tag for the fourth option of device type -->
                <option  value="Adapter">Adapter
                </option>
                <!-- end of the option tag for the fourth option of device type -->

            </select>
            <!-- end of the select tag for choose a device type -->
            </label>
            <!-- end of the label tag for choose a device type -->
            <br>
            <br>

            <!-- start of input tag from type button for go to the next page -->
            <input type="submit" name="submit" value="Next" class="buttons" id="button1">
            <!-- end of input tag from type button for go to the next page -->
        </center>
    </form>
    <!------------------javaScript--------------------->
    <script type="text/javascript">
        //get the value cames from option tag and id of select tag
        function showDetails(str, idd) {
            //-----------------------------------
            var PHP_V; //for link of sql query code
            //---------------------------------------
            //---------------------check id of tag ----------------
            if (idd == "Building") {
                //check if user do not select option
                if (str == "") {
                    document.getElementById("Room").innerHTML = "";
                    return;
                }
            } //end if

            //-------------------------------------------
            //--------------XMLHttpRequest-----------------
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            //-------------- just change cod below ------------
            //--------------if in building select--------------
            if (idd == "Building") {
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("Room").innerHTML = this.responseText; //show result of query in this tage
                    } //end if

                } // end onreadystatechange
                PHP_V = "room.php?B=" + str; //send link of select room query
            } //end if for building
            //----------------end code can change-------------------
            //-------------------------------------------------------
            xmlhttp.open("GET", PHP_V, true);
            // xmlhttp.open("GET","table of info.php?B="+str,true);
            xmlhttp.send();
            //---------------------------------------------------  
        } //end function
    </script>
</body>

</html>