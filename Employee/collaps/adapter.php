 <?php
 /*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if adapter working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */

    $adcw ='';
    $adcm ='';
    $adcs='';
    $adce='';
    //query about malfunction for current device
    $adcsql ="SELECT * FROM malfunctiontypes WHERE device_type = 'adapter'";
    $check=mysqli_query($conn,$adcsql);
    if(mysqli_num_rows($check)>0){
      while ( $row=mysqli_fetch_assoc($check)) {
      # code...
        $adcw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
        
      }

     
    }
    //query about maintenance for current device
    $adcsql1 ="SELECT * FROM maintenance_type WHERE device_type = ('adapter')";

    $check1=mysqli_query($conn,$adcsql1);
    if(mysqli_num_rows($check1)>0){
      while ( $row=mysqli_fetch_assoc($check1)) {
      # code...
        $adcm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
        
      }
     
    }
    {
        //executed by options
       $adce.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status options
        $adcs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

   
?>
<!--Start div tag-->
<div>
        <!--Start div adapter tag(button)-->
        <div id="adapter" title="Adepter" class="collapsible">
            <!--Start img tag-->
            <img class="pic" src="../img/plug.png" alt="Adapter" />
            <!--End img tag-->
        </div>
        <!--End div adapter tag(button)-->
        <div class="content">
               <!--Start lable tag -->
                <label class="radios"><img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <!--Start img tag -->
                    <img src="../img/wrong.png" alt="Not working" title="Not Working"></label><!--End img tag--><br>
                    <!--Start label tag-->
                <label class="labels">Adepter</label><!--End label tag-->
                  <!--Start label tag-->
                <label class="radios">
                    <!--Start input radio tag-->
                    <input name="adapter" type="radio" value="working" onclick="vist_button(6)" checked>&nbsp&nbsp&nbsp&nbsp
                    <!--End input radio tag-->
                    <!--Start input radio tag-->
                    <input name="adapter" type="radio" value="not working" onclick="hide_button(6)">
                    <!--End input radio tag-->
                    <!--Start center tag-->
                    <center>
                        <!--Start div tag-->
                        <div id="6" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <div>
                                <!--Start malfunction table for adapter-->
                                <table class="table">

                                    <!--------------------Start row #1------------------------------->
                                    <tr class="tr">
                                        <!----------------Name of colms-------------------------------------------->
                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>


                                    </tr>
                                    <!------------------------End row #1-------------------------------------------->
                                    <!-----------------------------Start row #2-------------------------------->
                                    <!----------------------Many selection to fill the table------------------------------->
                                    <td>
                                        <select name="adcw">
                                            <?php echo $adcw;?>
                                        </select>
                                    </td>


                                    <td>
                                          <select name="adcs">
                                            <?php echo $adcs;?>
                                        </select>
                                        
                                    </td>
                                    <td>
                                      <select name="adcm">
                                            <?php echo $adcm;?>
                                        </select>
                                        <td>
                                            <select name="adce">
                                                <?php echo $adce;?>
                                            </select>
                                        </td>
                                        <!-------------------------------End row #2-------------------------------->
                                </table>
                                   <!--End malfunction table for adapter-->
                                <br>
                                <!--Start input button Ok-->
                                <input class="buttons" type="button" name="" onclick="vist_button(6)" value="ok">
                                <!--End input button Ok-->

                                <!--End div tag-->
                            </div>
                            <!--End div tag-->
                        </div>
                        <!--End center tag-->
                    </center>
                    <!--End label tag-->
                </label>

                <br>
                <br>
                <!--Start label notes tag-->
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (note)-->
                    <textarea name="adnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag (note)-->
                    <!--End center-->
                </center>
            <!--End div tag-->
        </div>
        <!--End div tag-->
    </div>
    <!--End div adapter tag-->
        <div>
        <!--Start button collap tag-->
        <div title="Note" class="collapsible"><img class="pic" src="../img/note.png" alt="Note" />
        </div>
        <!--End button collap tag-->
        <!--Start div tag -->
        <div class="content">
            <br>
            <br>
            <!--Start label tag (notes)-->
            <label class="labels">Notes:- </label>
            <!--end label tag (notes)-->
            <!-- Start center tag -->
            <center>
                <!--Start textarea tag (notes)-->
                <textarea name="note" rows="8" cols="25"></textarea>
                <!--End textarea tag (notes)-->

            </center>
            <!-- End center tag-->
        </div>
        <!--End div tag-->
    </div>
    <!--End div tag (adapter) -->