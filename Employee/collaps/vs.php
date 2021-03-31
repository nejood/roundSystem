<?php
/*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if vedio spliter working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */
    $vsw ='';
    $vsm ='';
    $vss='';
    $vse='';
    //query about malfunction current device
    $vssql ="SELECT * FROM malfunctiontypes WHERE device_type = 'video spliter'";

    $check=mysqli_query($conn,$vssql);
    if(mysqli_num_rows($check)>0){
      while ( $row=mysqli_fetch_assoc($check)) {
      # code...
        $vsw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
        
      }

     
    }
    //query about maintenance for current device
    $vssql1 ="SELECT * FROM maintenance_type WHERE device_type = ('video spliter')";

    $check1=mysqli_query($conn,$vssql1);
    if(mysqli_num_rows($check1)>0){
      while ( $row=mysqli_fetch_assoc($check1)) {
      # code...
        $vsm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
        
      }
     
    }
    {
        //executed by options 
       $vse.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status options
        $vss.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

   
?>
<!DOCTYPE html>
<!--Start html tag-->
<html>
<!--Start head tag-->
<head>
    <title></title>

    <!--End head tag-->
</head>
<!--Start body tag-->
<body>
    <!-- Group Vedio Spliter-->
    <!--Start vedio spliter div tag-->
    <div>
        <!--Start div button tag-->
        <div id="vs" class="collapsible" title="Video Spliter">
            <!--Input img tag-->
            <img class="pic" src="../img/vidue.png" alt="Video Spliter" />
            <!--End div tag-->
        </div>
        <!--Strat div tag-->
        <div class="content" id="e">
                <!--Start label tag-->
                <label class="radios">
                    <!--input img tag (wrong - check)-->
                    <img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <img src="../img/wrong.png" alt="Not working" title="Not Working">
                </label><!--End label tag--><br>
                    <!--Start label tag-->
                <label class="labels">Vedio Spliter</label><!--End label tag-->
                <!--Start label tag-->
                <label class="radios">
                    <!--input type radio (working - not working)-->
                    <input name="VedioSpliter" type="radio" value="working" onclick="vist_button(0)">&nbsp&nbsp&nbsp&nbsp
                    <input name="VedioSpliter" type="radio" value="not working" onclick="hide_button(0)">
                    <!--hidden if the e screen not found in the class-->
                    <input name="VedioSpliter" type="radio" value="-" hidden checked>
                    <!--Start center tag-->
                    <center>
                        <!--Start div tag-->
                        <div id="0" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <!--Start div tag-->
                            <div>
                                <!--------------------Start vedio spliter Malfunctions table----------------------------------->
                                <table class="table">

                                    <!----------------------Start row #1------------------------------------>
                                    <tr class="tr">
                                        <!--Name of colmns-->
                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>


                                    </tr>
                                    <!----------------------------End row #1------------------------------>
                                    <!--Fiil the table with option selection -->
                                    <td>
                                        <select name="vsw">
                                            <?php echo $vsw;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="vss">
                                            <?php echo $vss;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="vsm">
                                            <?php echo $vsm;?>
                                        </select>
                                        <td>
                                            <select name="vse">
                                                <?php echo $vse;?>
                                            </select>
                                        </td>
                                </table>
                                <!------------------------End vedio spliter malfunctions table------------------------------------->
                                <br>
                                <!--Input button tag Ok-->
                                <input class="buttons" type="button" name="" onclick="vist_button(0)" value="ok">
                                <!--End div tag-->
                            </div>
                            <!--End div tag-->
                        </div>
                        <!--End center tag-->
                    </center>
                    <!--end label Tag -->
                </label>

                <br>
                <br>
                <!--Start label tag (notes)-->
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag(note)-->
                    <textarea name="vsnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag(note)-->
                </center>
                <!--End center-->

        </div>
        <!--End div tag-->
    </div>
    <!--End vedio spliter div tag-->


</body>
<!-- End body tag-->
</html>
<!--End Html tag-->