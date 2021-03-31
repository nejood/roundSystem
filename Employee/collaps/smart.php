<?php
    $smcw ='';
    $smcm ='';
    $smcs='';
    $smce='';
    $smcsql ="SELECT * FROM malfunctiontypes WHERE device_type = 'smrat board'";

    $check=mysqli_query($conn,$smcsql);
    if(mysqli_num_rows($check)>0){
      while ( $row=mysqli_fetch_assoc($check)) {
      # code...
        $smcw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
        
      }

     
    }
    $smcsql1 ="SELECT * FROM maintenance_type WHERE device_type = ('smrat board')";

    $check1=mysqli_query($conn,$smcsql1);
    if(mysqli_num_rows($check1)>0){
      while ( $row=mysqli_fetch_assoc($check1)) {
      # code...
        $smcm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
        
      }
     
    }
    {
       $smce.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        $smcs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

   
?>
<div>
        <!--Start button collap tag-->
        <div id="escreen" title="Smrat Board" class="collapsible"><img class="pic" src="../img/smart.png" alt="Electronic screen" />
        </div>
        <!--End button collap tag-->
        <div class="content">
            <!--Start form tag-->
               
                <label class="radios"><img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <img src="../img/wrong.png" alt="Not working" title="Not Working"></label><br>
                <label class="labels">iQ-Board</label>
                <label class="radios">
                    <input name="SmartBoard" type="radio" value="working" onclick="vist_button(4)">&nbsp&nbsp&nbsp&nbsp
                    <input name="SmartBoard" type="radio" value="not working" onclick="hide_button(4)">
                    <input type="radio" name="SmartBoard" value="-" hidden checked>
                    <center>
                        <div id="4" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <div>
                                <table class="table">


                                    <tr class="tr">

                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>


                                    </tr>

                                    <td>
                                        <select name="smcw">
                                            <?php echo $smcw;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="smcs">
                                            <?php echo $smcs;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="smcm">
                                            <?php echo $smcm;?>
                                        </select>
                                        <td>
                                            <select name="smce">
                                                <?php echo $smce;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(4)" value="ok">
                            </div>
                        </div>
                    </center>
                </label>

                <br>
                <br>
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (note)-->
                    <textarea name="sbnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag (note)-->
                </center>
                <!--End center-->
                
            <!--End form tag-->
        </div>
        <!--End div tag-->
    </div>
    <!--End div smart board tag-->