<?php

//index.php

include('database_connection.php');


$query = " SELECT * FROM user ";


$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';


foreach ($result as $row)
{

    $output .= '<option value="' . $row["id"] . '">' . $row["user_name"] . '</option>';
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Monthly Achievment</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 <?php
include("../../Admin_header/header_Admin.php");
?>
<style>
    .calendar{
 
height:6%;
width:6%;


}

</style>
 </head>
 <body onload="setActiveFunction(7)">
     <h1 class="titles" align="center">Monthly Achievment <br>_____________________________</h1>
   <br /><br />
     <center>
  <br />
  <div class="container">

   <div style="width: 500px; margin:0 auto">
    <div class="form-group">
     <label class="labels">Employee</label><br />
     <select  id="first_level" name="first_level" required>
       <?php
            echo($output);
        ?>
     </select>
    </div>
    <div class="form-group">
     <label class="labels">Building</label><br />
     <select id="second_level" name="second_level[]" multiple class="form-control dropdown" required>

     </select>
    </div>
 
   </div>
  </div>
            
              
            <!----------star lable from---------------->
            <label class="labels" id="label3">From
              <!----------star input type date for from----------->
              <img class="calendar"  src="../../Admin_img/calendar.png" alt="calendar" title="calendar" >
                <input class="dates" id="date1" type="date" value="" required>
                <!----------end input type date for from----------->
            </label>
            <!----------end lable from---------------->
              
            <br>
            <!----------star lable to---------------->
            <label class="labels" id="label4">To&nbsp&nbsp&nbsp&nbsp&nbsp
            <img class="calendar" src="../../Admin_img/calendar.png" alt="calendar" title="calendar" >
             <!----------star input type date for to----------->
                <input class="dates" id="date2" type="date" value="" required>
                <!----------end input type date for to----------->
               
            </label>
           
            <!----------end lable to---------------->
            <br>
            <!----------star input type button for show--------->
            <input class="buttons" id="button1" type="button" name="" value="show" onclick="return mache()">
            <!----------end input type button for show--------->
            </center>
            <br><br>
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
                var selected = document.getElementById('first_level').value;
                //document.write(selected);
                id = selected;
                if (selected.length > 0) {
                    $.ajax({
                        url: "fetch_second_level_category.php",
                        method: "POST",
                        data: {selected},
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
                $('#fourth_level').html('');
                $('#fourth_level').multiselect('rebuild');
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
        if(d1==""||d2==""||id==""||building==""){
          alert("please fill all the field");
          ok=false;
        }
        else{
          window.location.href = "Monthly_db.php?id=" + id + "&building_name=" + building + "&datefrom="+d1 + "&dateto="+d2;
        }
        return ok;
      }
</script>