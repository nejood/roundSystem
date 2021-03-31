
<!--  author: Nejood Abdulaziz Alfashka
          ID: 1505971
        date: 6/8/2018
-->

<!--
     summary of page:

 this page is for the admin to do query about round
  
-->

<!-- 
  ************************************************
-->

<?php
//index.php
include ('database_connection.php');

$query = " SELECT * FROM user ";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '';
$output .= '<option value="all">All</option>';
foreach ($result as $row)
{

    $output .= '<option value="' . $row["id"] . '">' . $row["user_name"] . '</option>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Query About Round</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <style type="text/css">
        /*style of the page title*/
         *{padding:0;margin:0;}

.title_round{
    color:#35477d;/*coloring the title*/
    margin-top:10%;/*left margin(distance from the page top border to the title) */
    font-size: 190%;/*the size of the title*/
    font-family: "Times New Roman", Times, serif;
}

.label_round{
    color:#307672;/*coloring the label*/
    margin-top:2.5%;/*left margin(distance from the page top border to the title) */
    font-size: 110%;/*the size of the label*/
   font-family: "Times New Roman", Times, serif;
}
.dropdown_round{
border-radius: 30%; /*make the dropdown rounded*/
border-color: #307672; /*coloring the border of the dropdown*/
border-style:solid; /* the style border*/
font-style: bold; /*the style of the options font*/
font-size: 15%; /*the size of the options font*/
font-family: "Times New Roman", Times, serif; /* the font type*/

}
/*decorate dates in the interface*/
   .dates{
    background-color:#cff0da ;
    border:groove;
    border-radius: 5px;
    border-color: #CAEED4;    
}

.calendar{
display:inline; 
width:100%;
top: 5%;

}
.calendarimg{
height:8%;
width:8%;
}

.buttons_round
{
    background-color: #55967e; /*coloring the button*/
     border-color:#307672; /*coloring the border of the button*/
       border-radius: 5px; /*make the button rounded*/
       color:white; /*the color of the button name*/
      border-style:outset; /* the style border*/
      border-width: 2px; /* the size of border*/
      font-size: 17px; /*the size of the button name*/
      padding-left: 0.5%;
      padding-right:0.5% ;
}

 </style>

</head>

<body onload="setActiveFunction(5)">

    <!--        START INCLUDE     -->

<?php
include("../../Admin_header/header_Admin.php");
?>
<!--       END INCLUDE      -->

    <center>
 <h1 class="title_round" ><b>Query About Round <br>_____________________________</b></h1>
        <div class="container ">

            <div style="width: 500px; margin:0 auto">
                <div class="form-group ">
                    <label class="label_round">Employee: </label>
                    <select id="first_level" name="first_level[]" multiple class="form-control dropdown_round" value="id">
                        <?php
                          echo($output);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label_round">Building: </label>
                    <select id="second_level" name="second_level[]" multiple class="form-control dropdown_round">

                    </select>
                </div>
                <div class="form-group">
                    <label class="label_round">Class: </label>
                    <select id="third_level" name="third_level[]" multiple class="form-control dropdown_round">
                    </select>

                </div>
            </div>

            <div>
            <!----------star lable from---------------->
            <label class="label_round" id="label3">From: 
                <!----------star input type date for from----------->
                <img class="calendarimg"src="../../Admin_img/calendar.png" alt="calendar" title="calendar">
                <input class="dates" id="date1" type="date" name="datefrom">
                <!----------end input type date for from----------->
            </label>
            </div>
            <!----------end lable from---------------->

            <!----------star lable to---------------->
           <div>
            <label class="label_round" id="label4">To:&nbsp&nbsp&nbsp&nbsp&nbsp
                <img class="calendarimg" src="../../Admin_img/calendar.png" alt="calendar" title="calendar">
                <!----------star input type date for to----------->
                <input class="dates" id="date2" type="date" name="dateto">
                <!----------end input type date for to----------->
            </label>
             </div>
            <!----------end lable to---------------->
            <br>
            <!----------star input type button for show--------->
            <input class="buttons_round" id="button1" type="submit" name="Show" value="Show" onclick="return mache() ">
            <!----------end input type button for show--------->
    </center>


    <!-------------------------------------------------------------->

</body>

</html>
<script>
    var id = '';
    var building = '';
    var class_num = '';
    $(document).ready(function() {

        $('#first_level').multiselect({
            nonSelectedText: 'Select Employee Name',
            buttonWidth: '400px',
            onChange: function(option, checked) {
                $('#second_level').html('');
                $('#second_level').multiselect('rebuild');
                $('#third_level').html('');
                $('#third_level').multiselect('rebuild');
                $('#fourth_level').html('');
                $('#fourth_level').multiselect('rebuild');
                var selected = this.$select.val();
                id = selected;
                if (selected.length > 0) {
                    $.ajax({
                        url: "fetch_second_level_category.php",
                        method: "POST",
                        data: {
                            selected: selected
                        },
                        success: function(data) {
                            $('#second_level').html(data);
                            $('#second_level').multiselect('rebuild');
                        }
                    })
                }
            }
        });

        $('#second_level').multiselect({
            nonSelectedText: 'Select Building Name',
            buttonWidth: '400px',
            onChange: function(option, checked) {
                $('#third_level').html('');
                $('#third_level').multiselect('rebuild');
                var selected = this.$select.val();
                building = selected;
                if (selected.length > 0) {
                    $.ajax({
                        url: "fetch_third_level_category.php",
                        method: "POST",
                        data: {
                            selected: selected
                        },
                        success: function(data) {
                            $('#third_level').html(data);

                            $('#third_level').multiselect('rebuild');
                        }
                    });
                }
            }
        });

        $('#third_level').multiselect({
            nonSelectedText: 'Select Class Number',
            buttonWidth: '400px',
            onChange: function(option, checked) {
                $('#fourth_level').html('');
                $('#fourth_level').multiselect('rebuild');
                var selected = this.$select.val();
                class_num = selected;
                if (selected.length > 0) {
                    $.ajax({
                        url: "fetch_third_level_category.php",
                        method: "POST",
                        data: {
                            selected: selected
                        },
                        success: function(data) {
                            $('#fourth_level').html(data);

                            $('#fourth_level').multiselect('rebuild');
                        }
                    });
                }
            }
        });


    });

   
</script>
<script type="text/javascript">
   function mache() {
        var ok = true;

        //---------------get value from new user------------------------ 
        var d1 = document.getElementById("date1").value;
        var d2 = document.getElementById("date2").value;
        //---------------------------------------------------------------
        // check if all boxes are fill
        if(d1==""&&d2==""&&id==""&&building==""&&class_num==""){
          alert("Please Chouse at lest one Select");
          ok=false;
        }
        else{
          window.location.href = "round_BD.php?id=" + id + "&building_name=" + building + "&class_num=" + class_num + "&datefrom="+d1 + "&dateto="+d2;
        }
        return ok;
      }
</script>