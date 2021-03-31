
<!--  author: Nejood Abdulaziz Alfashka
          ID: 1505971
        date: 6/8/2018
-->

<!--
     summary of page:

 this page is for show the information of query.
 it will display the data in table
  
-->

<!-- 
  ************************************************
-->



<?php
$id = '';
$building_name = '';
$class_num = '';
$datefrom = '';
$dateto = '';
$print ='';

include ('../../connection/connection.php');
//-----------------------------------------
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	$datefrom = $_GET['datefrom'];
	$dateto = $_GET['dateto'];
    $idArray = $_GET["id"];
    $id = explode(",", $idArray);
    $buildingArray = $_GET["building_name"];
    $building_name = explode(",", $buildingArray);
    $classArray = $_GET["class_num"];
    $class_num = explode(",", $classArray);
    $idCount = count($id);
    $buildingCount = count($building_name);
    $classCount = count($class_num);
  
    for ($k = 0;$k < $idCount;$k++)
    {
        # code...
        for ($j = 0;$j < $buildingCount;$j++)
        {
            # code...
            for ($i = 0;$i < $classCount;$i++)
            {
                # code...

                if ($id[$k] != '' and $id[$k]!='all' and $building_name[$j] != '' and $class_num[$i] != '' and $datefrom != '' and $dateto != '')
                {

                    $sql ="SELECT * FROM round where (data_of_visit between '$datefrom' and '$dateto') and user_name = (SELECT user_name FROM user where id = '$id[$k]') and building_name = '$building_name[$j]' and class_num = (SELECT class_num FROM class where class_pk = '$class_num[$i]')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ($id[$k] != ''  and $id[$k]!='all' and $datefrom != '' and $dateto != '')
                {

                    $sql = "SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]') and `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';

		                }
		            }

                }
                elseif ($building_name[$j] != '' and $class_num[$i] != '' and $datefrom != '' and $dateto != '')
                {

                    $sql = "SELECT * FROM round where building_name = ('$building_name[$j]') and class_num =(SELECT class_num FROM class where class_pk = '$class_num[$i]') and `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ( $building_name[$j] != '' and $datefrom != '' and $dateto != '')
                {

                    $sql = "SELECT * FROM round where building_name = ('$building_name[$j]') and `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ($id[$k] != '' and $id[$k]!='all' and $building_name[$j] != '' and $class_num[$i] != '')
                {
                    $sql = " SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]') and building_name = '$building_name[$j]' and class_num = (SELECT class_num FROM class where class_pk = '$class_num[$i]')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }
                }
                elseif ($building_name[$j] != '' and $class_num[$i] != '')
                {
                    $sql = " SELECT * FROM round where building_name = ('$building_name[$j]') and class_num = (SELECT class_num FROM class where class_pk = '$class_num[$i]')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }
                }
                elseif ($id[$k] != ''and $id[$k]!='all' and $datefrom != '' and $dateto != '')
                {

                    $sql = "SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]') `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }
                }
                elseif ($datefrom != '' and $dateto != '')
                {
                    $sql = " SELECT * FROM round where `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ($id[$k] != '' and $id[$k]!='all'and $building_name[$j] != '')
                {
                    # code...
                    $sql = " SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]') and building_name = ('$building_name[$j]')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ($building_name[$j] != '')
                {
                    # code...
                    $sql = " SELECT * FROM round where building_name = ('$building_name[$j]')";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }

                }
                elseif ($id[$k] != '' and $id[$k]!='all' and $building_name[$j] != '' and $datefrom != '' and $dateto != '')
                {
                    # code...
                    $sql = "SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]') and building_name = ('$building_name[$j]') and `data_of_visit` between '$datefrom' and '$dateto' ";
                    $result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
		                }
		            }


                }
                elseif ($id[$k]!='' and $id[$k]!='all') 
                {
                	# code...
                	$sql = "SELECT * FROM round where user_name = (SELECT user_name FROM user where id = '$id[$k]')";
                	$result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
						}
					}

                }
                else{
                	# code...
                	$sql = "SELECT * FROM round ";
                	$result= mysqli_query($conn,$sql);
            		if (mysqli_num_rows($result) > 0) {
					//--------------------
     
     				// output data of each result
 						while($row = mysqli_fetch_assoc($result)){
          
		                	    //-----------------------------------------------device----------------------      
		                	$print .='<tr class="tr"> <td class="td th ">'.$row['building_name'].
		                	'</td> <td class="td th ">'.$row['class_num'].
		                	'</td> <td class="td th ">'.$row['computer'].
		                	'</td> <td class="td th ">'.$row['monitor'].
		                	'</td> <td class="td th ">'.$row['muse'].
		                	'</td> <td class="td th ">' .$row['keyboard'].
		                	'</td> <td class="td th ">' .$row['network'].
		                	'</td> <td class="td th ">' . $row['antivirus'].
		                	'</td> <td class="td th ">'.$row['video_spliter'].
		                	'</td> <td class="td th ">' .$row['projector_control_app'].
		                	'</td> <td class="td th ">'.$row['vga_cable'].
		                	'</td> <td class="td th ">'.$row['vga_port'].
		                	'</td> <td class="td th ">' .$row['lamp'].
		                	'</td> <td class="td th ">' .$row['filter'].
		                	'</td> <td class="td th ">' .$row['electronic_screen'].
		                	'</td> <td class="td th ">' .$row['smart_board'].
		                	'</td> <td class="td th ">' .$row['adapter'].
		                	'</td> <td class="td th ">' .$row['tv'].
		                	'</td> <td class="td th ">' .$row['data_of_visit'].
		                	'</td> <td class="td th ">' .$row['user_name'].
		                	'</td> </tr>';
		                	
	//-----------------------note------------------------------------------------
							$print.='<tr class="tr">
            	    <td class="td th"  colspan="2">Notes</td>	
                    <td class="td th " colspan="6">
                        '.$row['computer_note'].'
                    </td>
                    <td class="td th ">'.$row['video_spliter_note'] .'
                    </td>
                    <td class="td th " colspan="5">'.$row['projector_note'].'
                    </td>
                    <td class="td th ">'.$row['electronic_screen_note'].'
                    </td>
                    <td class="td th ">'.$row['smart_board_note'] .'
                    </td>
                    <td class="td th ">'.$row['adnote'] .'
                    </td>
                    <td class="td th ">'.$row['tvnote'] .'
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="18"> '.$row['note']. '
                    </td>
                </tr>';
						}
					}

                }
            }
        }
    }
}
?>



<!DOCTYPE html>
<!-- author @Nadia Bahatheg  17/7/2018

this page allow the user with type:"Admin" to show the device by letting him choose the required building's name from a drop down list then select the required Class's name from a drop down list and choose the device type then go to the next page to show the device information -->
<html>
	<!--        START INCLUDE     -->

<?php
include("../../Admin_header/header_Admin.php");
?>
<!--       END INCLUDE      -->
<head>
	
    <title>Query About Round</title>
    <!--the start of the meta to tag to make the page adaptable to the device sizewith the style file-->

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
        .title_round{
    color:#35477d;/*coloring the title*/
    margin-top:10%;/*left margin(distance from the page top border to the title) */
    font-size: 30px;/*the size of the title*/
    font-family: "Times New Roman", Times, serif;
}
.img
{
  padding-top: 2%;
 width:15px;
 height:10px;
 float: right;
}
#printer{
	margin-left: 90%;
	position: fixed;
	margin-top: 2%;
	background-color: #cff0da;

}
    </style>

</head>

<body onload="setActiveFunction(5)"> 


    <h1 class="title_round" align="center">Query About Round <br>_____________________________</h1>
    <br /><br />

    <a href="#print"><img src="../../Admin_img/printer.png" id="printer"></a>

    <!--No need for reapeat code use this and save the repeated code in seperate file-->



    <!-- start of the center tag for centering the contents -->
    <center>



        <table border="1" cellpadding="3" id="printTable" class="table">
        

             <tr class="tr">

                <th class="td th" rowspan="2">Building</th>
                <th class="th td" rowspan="2">Class</th>
                <th class="td th" colspan="6">Computer</th>
                <th class="td th" rowspan="2">Vedio Spliter</th>
                <th class="td th" colspan="5">Projector</th>
                <th class="td th" rowspan="2">Electronic screen</th>
                <th class="td th" rowspan="2">Smart Board</th>
                <th class="td th" rowspan="2">Adapter</th>
                <th class="td th" rowspan="2">TV</th>
                <th class="td th" rowspan="2">Dateof Visit</th>
                <th class="td th" rowspan="2">Visit by</th>




            </tr>

            <tr class="tr">

                
                <td class="td th">PC</td>
                <td class="td th">Monitor</td>
                <td class="td th">Mouse</td>
                <td class="td th">Key board</td>
                <td class="td th">Net work</td>
                <td class="td th">Anti viruse</td>



                <td class="td th ">projector control app</td>
                <td class="td th ">VGA Cabel</td>
                <td class="td th ">VGA Port</td>
                <td class="td th ">Lamp</td>
                <td class="td th ">Filter</td>





            </tr>



            
            	<?php echo($print); ?>
             



        </table>

        <br>
        <br>
	<button class="buttons"  ><a style="text-decoration: none;color: white;" href="round.php">OK</a></button>
        <button onclick="printData()" class="buttons" id="print" style="margin-left:3%;">Print</button>

    </center>
    <!-- end of the center tag for centering the contents -->
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