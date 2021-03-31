<?php
/*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if electronic screen working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */
    $escw ='';
    $escm ='';
    $escs='';
    $esce='';
     //query about malfunction for current device
    $escsql ="SELECT * FROM malfunctiontypes WHERE device_type = 'electronic screen'";

    $check=mysqli_query($conn,$escsql);
    if(mysqli_num_rows($check)>0){
      while ( $row=mysqli_fetch_assoc($check)) {
      # code...
        $escw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
        
      }

     
    }
     //query about maintenance for current device
    $escsql1 ="SELECT * FROM maintenance_type WHERE device_type = ('electronic screen')";

    $check1=mysqli_query($conn,$escsql1);
    if(mysqli_num_rows($check1)>0){
      while ( $row=mysqli_fetch_assoc($check1)) {
      # code...
        $escm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
        
      }
     
    }
    { 
       //executed by options
       $esce.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status options
        $escs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

   
?>
<div>
        <!--Start div e-screen button tag-->
        <div id="escreen" title="Electronic screen" class="collapsible"><img class="pic" src="../img/boord.png" alt="Electronic screen" />
        </div>
        <!--End button collap tag-->
        <div class="content">
            <!--Start form tag-->
               
                <label class="radios"><img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <img src="../img/wrong.png" alt="Not working" title="Not Working"></label><br>
                <label class="labels">E-screen</label>
                <label class="radios">
                    <!--input type radio (working - not working)-->
                    <input name="Electronicscreen" type="radio" value="working" onclick="vist_button(3)">&nbsp&nbsp&nbsp&nbsp
                    <input name="Electronicscreen" type="radio" value="not working" onclick="hide_button(3)">
                    <!--hidden if the e screen not found in the class-->
                    <input type="radio" name="Electronicscreen" value="-" hidden checked>
                    <!--Start center tag-->
                    <center>
                        <!--Start div tag-->
                        <div id="3" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <!--Start div tag-->
                            <div>
                                <!-----------------------------Start malfuction table---------------------------------------->
                                <table class="table">

                                    <!------------------------------Start row #1---------------------------------->
                                    <tr class="tr">
                                        <!-----------------------Nmae of colmns------------------------------>
                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>

                                        <!--------------------End row #1--------------------------->
                                    </tr>
                                    <!--fill the table with many selections-->
                                    <td>
                                        <select name="escw">
                                            <?php echo $escw;?>
                                        </select>
                                    </td>

                                     <td>
                                        <select name="escs">
                                            <?php echo $escs;?>
                                        </select>
                                        <td>
                                    <td>
                                        <select name="escm">
                                            <?php echo $escm;?>
                                        </select>
                                    </td>
                                   
                                            <select name="esce">
                                                <?php echo $esce;?>
                                            </select>
                                        </td>
                                </table>
                                <!--End table-->
                                <br>
                                <!--Start input button Ok tagS-->
                                <input class="buttons" type="button" name="" onclick="vist_button(3)" value="ok">
                            </div>
                        </div>
                    </center>
                    <!--end center tag-->
                </label>
                <!--end label tag-->
                <br>
                <br>
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (note)-->
                    <textarea name="esnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag (note)-->
                </center>
                <!--End center-->
                
        </div>
        <!--End div tag-->
    </div>
    <!--End div E-screen tag-->