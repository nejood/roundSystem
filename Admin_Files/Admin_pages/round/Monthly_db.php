<?php
$id = '';
$building_name = '';
$datefrom = '';
$dateto = '';
$print ='';
require ('../../connection/connection.php');
//-----------------------------------------------
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	$datefrom = $_GET['datefrom'];
	$dateto = $_GET['dateto'];
    $idArray = $_GET["id"];
    $id = explode(",", $idArray);
    $buildingArray = $_GET["building_name"];
    $building_name = explode(",", $buildingArray);
    $idCount = count($id);
    $buildingCount = count($building_name);

for ($k = 0;$k < $idCount;$k++)
    {

        for ($j = 0;$j < $buildingCount;$j++)
        {


                if ($id[$k] != '' and $building_name[$j] != ''and $datefrom != '' and $dateto != '')
                {
                	$user = "SELECT user_name FROM user where id = '$id[$k]'";

                	$user_name= mysqli_query($conn,$user);
                	if (mysqli_num_rows($user_name) > 0) {

                    	while($r = mysqli_fetch_assoc($user_name)){


                	$sql="SELECT (SELECT COUNT(round_pk) FROM round where(data_of_visit between '$datefrom' and '$dateto')and building_name = '$building_name[$j]'and user_name='".$r["user_name"]."')"."as roundnum".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) AND user_name='".$r['user_name']."' AND building_name = '$building_name[$j]' AND (maintenace_type LIKE '%software%') or( maintenace_type LIKE '%system update%')) "."as softcount".",(SELECT COUNT(malfunction_pk)FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' and maintenace_type LIKE '%change spliter%' and user_name='".$r['user_name']."')"."as change_spliter".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change projector%') "."as change_projector".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE maintenace_type LIKE '%change cable%') "."as change_cable".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change network cable%') "."as change_network_cable".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change pc%') "."as change_pc".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change projector lamp%') "."as change_projector_lamp".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change monitor%') "."as change_monitor"." ,(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%clean projector filter%') "."as clean_projector_filter".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%change computer accessories%') "."as change_computer_accessories".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%fix comoputer inside workshop%') "."as fix_computer_inside_workshop".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%fix electronic screen%') "."as fix_electronic_screen".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%fix network faults%') "."as fix_network_faults".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%spliter/cable maintenance%') "."as spliterORcable_maintenance".",(SELECT COUNT(malfunction_pk) FROM malfunction WHERE (date_of_maintenance between '$datefrom' and '$dateto' ) and building_name = '$building_name[$j]' AND user_name='".$r['user_name']."' AND maintenace_type LIKE '%projector maintenance%') "."as projector_maintenance"." ";

 


 $result= mysqli_query($conn,$sql);

                     

                     if (mysqli_num_rows($result)>0) {
                     
                     while($row = mysqli_fetch_assoc($result)){

                        
                            $print .='<tr class="tr"> 
                            <td class="td th ">'.$r['user_name'].'</td> 
                            <td class="td th ">'.$building_name[$j].'</td>



                            <td class="td th ">'.$row['roundnum'].'</td>



                            <td class="td th ">'.$row['softcount'].'</td>
                             <td class="td th ">'.$row['projector_maintenance'].'</td>
                            <td class="td th ">'.$row['spliterORcable_maintenance'].'</td>




                            <td class="td th ">'.$row['fix_network_faults'].'</td>
                            <td class="td th ">'.$row['fix_electronic_screen'].'</td>
                            <td class="td th ">'.$row['fix_computer_inside_workshop'].'</td>


                            <td class="td th ">'.$row['change_network_cable'].'</td>
                            <td class="td th ">'.$row['change_pc'].'</td>
                            <td class="td th ">'.$row['change_monitor'].'</td>
                            <td class="td th ">'.$row['change_computer_accessories'].'</td>
                            <td class="td th ">'.$row['change_projector_lamp'].'</td>
                            <td class="td th ">'.$row['change_projector'].'</td>
                            <td class="td th ">'.$row['change_spliter'].'</td>
                            <td class="td th ">'.$row['change_cable'].'</td>

                            <td class="td th ">'.$row['clean_projector_filter'].'</td>
                           
                            
                            
                            
                           
                             </tr>';
                     
                            


                    }
                        }

                    	
		        }
		    }
		}
	
               

               
                


    }
}

}
         

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
<?php
include("../../Admin_header/header_Admin.php");
?>
    <title>Monthly Achevment</title>
    <!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

    <!--end of meta tag-->
    <!--the start of the link to tag to link the page with the style file-->
   
    <!--the end of the link to tag -->
    <style type="text/css">
        .table {
            margin-top: 2%;
            border-collapse: collapse;
            width: 50%;
            border: 2px solid #55967e;
        }

        .th,
        .td {
            text-align: center;
            width: 25%;
            height: 100%;
            border: 2px solid #55967e;
            font-size: small;

        }

        .tras {
            transform: rotate(90deg);

        }

        .tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #printer{
            margin-left: 90%;
            position: fixed;
            margin-top: 2%;
            background-color: #cff0da;

    }
    </style>

</head>
<body onload="setActiveFunction(7)">

<h1 class="titles" align="center">Monthly Achievment <br>_____________________________</h1>
    <br /><br />


<a href="#print"><img src="../../Admin_img/printer.png" id="printer"></a>

    <center>
    

    <br><br><br>


<table border="1" cellpadding="3" id="printTable" class="table">
    

<tr class="tr">


    <th class="td th " rowspan="2">Employee Name</th>
    <th class="td th " rowspan="2">Building</th>
    <th class="td th " rowspan="2">Comprehensive Cnspection of Equipment</th>
    


<th class="td th " colspan="3">Maintenance</th>
<th class="td th " colspan="3">Fix</th>
<th class="td th " colspan="8">Change</th>
 
    

<th class="td th " rowspan="2">Clean Projector Filter</th>






</tr>

<tr class="tr">



    <td class="td th " >Computer Software</td>
    <td class="td th " >Projector</td>
    <td class="td th " >Spliter/ Cable</td>

 




    <td class="td th" >Network Faults</td>
    <td class="td th" >E-Screen</td>
    <td class="td th " >Computer Inside Workshop</td>



  
    
    <td class="td th " >Network Cable</td>
    <td class="td th " >Computer</td>
    <td class="td th " >Monitor</td>
    <td class="td th " >Computer Accessories</td>
    <td class="td th " >Projector Lamp</td>
    <td class="td th " >Projector</td>
    <td class="td th " >Spliter</td>
    <td class="td th " >Cables</td>

    


    





</tr>
    
<?php  echo $print; ?>

</table>
<br><br>
 <button class="buttons"  ><a style="text-decoration: none;color: white;" href="Monthly Achievment.php">OK</a></button>
 <button onclick="printData()" class="buttons" id="print" style="margin-left:3%">Print</button>
<br><br>
</center>
<script>
    function printData()
    {
       var divToPrint=document.getElementById("printTable");
       newWin= window.open("");
       newWin.document.write(divToPrint.outerHTML);
       newWin.print();
       newWin.close();
    }
</script>
</body>
</html>