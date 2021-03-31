<?php
/*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if T.V working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */
    $tvw ='';
    $tvm ='';
    $tvs='';
    $tve='';
    //query about malfunction for current device
    $tvsql ="SELECT * FROM malfunctiontypes WHERE device_type = 'tv'";

    $check=mysqli_query($conn,$tvsql);
    if(mysqli_num_rows($check)>0){
      while ( $row=mysqli_fetch_assoc($check)) {
      # code...
        $tvw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
        
      }

     
    }
    //query about maintenance for current device
    $tvsql1 ="SELECT * FROM maintenance_type WHERE device_type = ('tv')";

    $check1=mysqli_query($conn,$tvsql1);
    if(mysqli_num_rows($check1)>0){
      while ( $row=mysqli_fetch_assoc($check1)) {
      # code...
        $tvm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
        
      }
     
    }
    {
        //executed by options
       $tve.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status options  
        $tvs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

   
?>
<!--Start div tag-->
<div>
        <!--Start div button tag-->
        <div id="tv" title="TV" class="collapsible"><img class="pic" src="../img/tv.png" alt="T.V" />
        </div>
        <!--End div button tag-->
        <div class="content">
               <!--Start label tag -->
                <label class="radios">
                    <!--input img tag (workig -not working)-->
                    <img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <img src="../img/wrong.png" alt="Not working" title="Not Working">
                </label><!--End label tag--><br>
                <!--Start label tag-->
                <label class="labels">T.V</label><!--end label tag-->
                <!--Start label tag -->
                <label class="radios">
                    <!--input radio tag (working - not working)-- >
                    <input name="TV" type="radio" value="working" onclick="vist_button(5)">&nbsp&nbsp&nbsp&nbsp
                    <input name="TV" type="radio" value="not working" onclick="hide_button(5)">
                    <!--hidden if the e screen not found in the class-->
                    <input type="radio" name="TV" value="-" hidden checked>
                    <!--Start center tag-->
                    <center>
                        <!-- Start div tag-->
                        <div id="5" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <!--Start div tag -->
                            <div>
                                <!----------------Start TV malfunction table----------------------->
                                <table class="table">

                                    <!------------------------------Start row #1----------------------------->
                                    <tr class="tr">
                                        <!----------------------------Name of colmns----------------------------------------------->
                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>


                                    </tr>
                                    <!--------------------------End row #1--------------------------------------->
                                    <!--Fill the table with selection optins-->
                                    <td>
                                        <select name="tvw">
                                            <?php echo $tvw;?>
                                        </select>
                                    </td>


                                    <td>
                                       <select name="tvs">
                                            <?php echo $tvs;?>
                                        </select>
                                        <td>
                                    <td>
                                         <select name="tvm">
                                            <?php echo $tvm;?>
                                        </select>
                                    </td>
                                        
                                            <select name="tve">
                                                <?php echo $tve;?>
                                            </select>
                                        </td>
                                </table>
                                <!-----------------------------end tv malfuction table------------------------------------------>
                                <br>
                                <!--input button tag Ok-->
                                <input class="buttons" type="button" name="" onclick="vist_button(5)" value="ok">
                            <!--End div tag-->
                            </div>
                            <!--End div tag-->
                        </div>
                        <!-- End center-->
                    </center>
                <!--End label tag-->
                </label>

                <br>
                <br>
                <!-- Start label tag (notes)-->
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (note)-->
                    <textarea name="tvnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag (note)-->
                </center>
                <!--End center-->
                
        </div>
        <!--End div tag-->
    </div>
    <!--End div smart board tag-->