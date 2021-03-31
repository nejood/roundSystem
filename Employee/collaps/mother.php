<?php include("../header/collapheader.php");?>
<!DOCTYPE html>
<!--
Authers: Melad Alamri
         Rana Algizani

this page gathering all collapse part          


-->
<?php 
// take data form prev. pages
if (isset($_POST['ok'])) {
    $building_name=$_POST['building_name'];
   $class_num=$_POST['class_num'];
   

}
?>

<html>
<!--Start head tag-->
<head>
    
    <!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--the end of the meta to tag to make the page adaptable to the device sizewith the style file-->
     <!--the start of the link to tag to link the page with the style file-->
    <link rel="stylesheet" type="text/css" href="../style/style.css">
     <!--the end of the link to tag to link the page with the style file-->
	<title></title>
</head>
<!--End head tag-->
<body onload="hide()">
    <!--Start form tag to make send data easy-->
	<form action="collaps_DB.php" method="POST">
        <!--Start center tag -->
		    <center>
                <!--Start head1 tag (add round)-->
        <h1 class="t" id="title1">Add Round<br>_____________________________</h1>
        <!--End head1 tag (add round)-->
        <!--Start label tag-->
        <label>
            <p style="color: red;">*some devices will not be shown because they are not exeist</p>
            <!--Input img tag-->
            <img id="calender" src="../img/calendar1.png" alt="calendar" title="calendar">
            <!-- Start input type date tag-->
            <input class="dates" type="date" name="date" required>
            <!-- End input type date tag-->
            <!--End label tag-->
            </lable>
            <!--End center tag-->
    </center>
<?php
//connection
require_once ('../include/connection.php');
//if click button ok the do
if (isset($_POST['ok']))
{
    //for all queries check the class number then check if the device is found our not 
    $class_num = $_POST['class_num'];
    $sql = "SELECT class_pk from class where class_num ='$class_num'";
    $class_pk = mysqli_query($conn, $sql);

    if (mysqli_num_rows($class_pk) > 0)
    {

        $option = '';
        
        $id = mysqli_fetch_array($class_pk);

        $pcq = "SELECT pc_name from deviceinclass where class_pk='$id[0]'";
        $class_pk1 = mysqli_query($conn, $pcq);
        if (mysqli_num_rows($class_pk1) > 0)
        {
            $id1 = mysqli_fetch_array($class_pk1);

            $pc = 0;
            if ('' == $id1[0])
            {

                $pc = 1;
            }

        }

        $prq = "SELECT projector_model,projector_company from deviceinclass where class_pk='$id[0]'";
        $class_pk1 = mysqli_query($conn, $prq);
        if (mysqli_num_rows($class_pk1) > 0)
        {
            $id1 = mysqli_fetch_array($class_pk1);

            $pr = 0;
            if ('' == $id1[0])
            {

                $pr = 1;
            }

        }

        $smq = "SELECT smart_board_model from deviceinclass where class_pk='$id[0]'";
        $class_pk1 = mysqli_query($conn, $smq);
        if (mysqli_num_rows($class_pk1) > 0)
        {
            $id1 = mysqli_fetch_array($class_pk1);

            $sm = 0;
            if ('' == $id1[0] or '0' == $id1[0])
            {

                $sm = 1;
            }

        }

        $tvq = "SELECT TV from deviceinclass where class_pk='$id[0]'";
        $class_pk1 = mysqli_query($conn, $tvq);
        if (mysqli_num_rows($class_pk1) > 0)
        {
            $id1 = mysqli_fetch_array($class_pk1);

            $tv = 0;
            if (1 != $id1[0])
            {

                $tv = 1;
            }

        }

        $escreenq = "SELECT Escreen from deviceinclass where class_pk='$id[0]'";
        $class_pk1 = mysqli_query($conn, $escreenq);
        if (mysqli_num_rows($class_pk1) > 0)
        {
            $id1 = mysqli_fetch_array($class_pk1);

            $escreen = 0;
            if (1 != $id1[0])
            {

                $escreen = 1;
            }

        }

    }


}
//include all collapse part
		include('computer.php');
		include('vs.php');
		include('projecters.php');	
		include('escren.php');
		include('smart.php');
		include('tv.php');
		include('adapter.php');
		 mysqli_close($conn);
?>
<br>
<center>
    <input type="hidden" name="building_name" value="<?php echo $building_name?>">
    <input type="hidden" name="class_num" value="<?php echo $class_num?>">
    <!--input submit button-->
	<input  class="buttons"type="submit" name="submit" value="submit">
	<br><br>
</center>
</form>


            <script>
                var collap = document.getElementsByClassName("collapsible"); //TO get all tages the class name is cllapsible and put it in collap
                var i;

                for (i = 0; i < collap.length; i++) {
                    collap[i].addEventListener("click", myfunction); // add event to the cllapsible that click and send it to function(send the event and the collap clicked"this")
                }

                function myfunction() {
                    for (var i = 0; i < collap.length; i++) {
                        //if collap not the collap clicked
                        if (collap[i] != this) {
                            /*remove the active class from the other collap*/
                            collap[i].classList.remove("activeC");
                            //means get the content of the  next tage (next to collap[i] tage)
                            var content = collap[i].nextElementSibling;
                            //hide the content of other collap
                            content.style.display = "none";
                        } //end  if
                        //else if the collap is the collap clicked
                        else {
                            /** this means this tage and classList return classname for the tage -toggle means if the tage exist it will remove it and vice versa and chage the add class active to this tage **/
                            this.classList.toggle("activeC");

                            var content = this.nextElementSibling;
                            //means get the content of the  next tage (next to current tage)

                            //if content of tage is Sibling of this tage(the tage below the collaps tage) is shown so hide content
                            if (content.style.display === "block") {
                                content.style.display = "none"; //to hide the content
                            } //end if
                            else {
                                //if the content hide shown
                                content.style.display = "block";
                            } //end else 
                        } //end else
                    } //end for loop
                } //end function
            </script>
            <script>
                function hide_button(id) {
                    // body...

                    var linklist=document.getElementsByClassName("trt");//get all links
                     var i;
                     for(i=0; i<linklist.length;i++){
                    /*if the link id equle the value send to the function then 
                         add class active to it*/
                        if(linklist[i].id==id){
                                linklist[i].classList.remove("hid");
                                
                                return;
                            }
                        }     
                             
                    }
                    function vist_button(id) {
                    // body...

                    var linklist=document.getElementsByClassName("trt");//get all links
                     var i;
                     for(i=0; i<linklist.length;i++){
                    /*if the link id equle the value send to the function then 
                         add class hid to it*/
                        if(linklist[i].id==id){
                                linklist[i].classList.add("hid");
                                return;
                            }
                        }     
                             
                    }
             </script>
             <script>
		        function hide() {
		            // body...
		            var pc = '<?php echo $pc;?>';
		            var pr = '<?php echo $pr;?>';
		            var sm = '<?php echo $sm;?>';
		            var escreen = '<?php echo $escreen;?>';
		            var tv = '<?php echo $tv;?>';
		            var array = [pc,pr,pr,escreen,sm,tv];

		            var linklist=document.getElementsByClassName("collapsible");//get all links
		            var i;
		            for(i=0; i<array.length;i++){
		                /*if the link id equle the value send to the function then 
		                 add class hid to it*/
		                    if(array[i]==1){
		                      linklist[i].classList.add("hid");
		                     
		                        }
		                    }
		                }
    </script>
    </body>
</html>