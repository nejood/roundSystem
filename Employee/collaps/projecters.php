<?php
 /*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if every part in the projector working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */
$pre='';$prs='';
 {
    //execited by options
       $pre.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status optins
        $prs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

$ce=$pre;$poe=$pre;$le=$pre;$fe=$pre;
$cs=$prs;$pos=$prs;$ls=$prs;$fs=$prs;
$pr_appw='';
$pr_appm='';

//queries about malfunction for  every parts in current device
//queries about Maintenance for  every parts in current device
$sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'projector'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $pr_appw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
 
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('projector')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $pr_appm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }
}

$cablew='';
$cablem='';
  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'projector'";

$check=mysqli_query($conn,$sql);
$malfun='';
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $cablew .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('projector')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $cablem .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

}

$portw='';
$portm='';
  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'projector'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $portw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
 
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('projector')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $portm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

 
}
 $lampw='';
 $lampm='';

  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'projector'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $lampw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
 
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('projector')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $lampm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

}
 
 $filterw='';
 $filterm='';

  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'projector'";

$check=mysqli_query($conn,$sql);

if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $filterw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
 
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('projector')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $filterm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }
 
}
 
?>

<!--Group Projecter-->
    <!--Start projector div tag-->
    <div>
        <!--Start  div button tag-->
        <div id="pr" title="Projecter" class="collapsible"><img class="pic" src="../img/projecters.png" alt="Projecter" />
        </div>
        <!--End div button tag-->
        <div class="content">
               <!--Start label input tag-->
                <label class="radios">
                    <!--input img tag (worng-check)-->
                    <img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <img src="../img/wrong.png" alt="Not working" title="Not Working">
                    <!--End label input tag-->
                </label><br>
                <!--Start label tag-->
                <label class="labels">Pr-control app</label><!--End label tag-->
                <!--Start label tag-->
                <label class="radios">
                    <!--Start input radio tag (working - not working )-->
                    <input name="Projectorcontrolapp" type="radio" value="working"onclick="vist_button(13)">&nbsp&nbsp&nbsp&nbsp
                    <input name="Projectorcontrolapp" type="radio" value="not working" onclick="hide_button(13)">
                    <!--hidden if the e screen not-found in the class-->
                    <input type="radio" name="Projectorcontrolapp" value="-" hidden checked>
                    <!--Start cnter tag-->
                    <center>
                        <!--Start div tag -->
                        <div id="13" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <!--Start div tag-->
                            <div>
                                <!-------------------------Start control app malfunction Table------------------------------>
                                <table class="table">

                                    <!--------------------------Start row #1------------------------------>
                                    <tr class="tr">
                                        <!-----------------------Name of colmns----------------------------------->

                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>
                                    </tr>
                                    <!---------------------------End row #1----------------------------------------->
                                        <!--Fill the table with many selection options -->
                                    <td>
                                        <select name="pr_appw">
                                            <?php echo $pr_appw;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="prs">
                                            <?php echo $prs;?>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <select name="pr_appm">
                                            <?php echo $pr_appm;?>
                                        </select>
                                        <td>
                                            <select name="pre">
                                                <?php echo $pre;?>
                                            </select>
                                        </td>
                                </table>
                                <!--End control app malfunctions table tag-->
                                <br>
                                <!--Start input button Ok tag-->
                                <input class="buttons" type="button" name="" onclick="vist_button(13)" value="ok">
                                <!--End input button Ok tag-->
                              <!--End div tag-->
                            </div>
                            <!--End div tag--->
                        </div>
                        <!--End center tag-->
                    </center>
                <!--End label tag-->
                </label>
                                    <!--repeat all the prev. steps with all projector parts-->
                <br>
                <label class="labels">VGA cabel</label>
                <label class="radios">
                    <input name="VGAcable" type="radio" value="working"onclick="vist_button(14)">&nbsp&nbsp&nbsp&nbsp
                    <input name="VGAcable" type="radio" value="not working"onclick="hide_button(14)"></label>
                    <input type="radio" name="VGAcable" value="-" hidden checked>
                    <center>
                        <div id="14" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="cablew">
                                            <?php echo $cablew;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="cs">
                                            <?php echo $cs;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cablem">
                                            <?php echo $cablem;?>
                                        </select>
                                        <td>
                                            <select name="ce">
                                                <?php echo $ce;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(14)" value="ok">
                            </div>
                        </div>
                    </center>
                <br>
                <label class="labels">VGA port</label>
                <label class="radios">
                    <input name="VGAport" type="radio" value="working"onclick="vist_button(15)">&nbsp&nbsp&nbsp&nbsp
                    <input name="VGAport" type="radio" value="not working"onclick="hide_button(15)"></label>
                    <input type="radio" name="VGAport" value="-" hidden checked>
                    <center>
                        <div id="15" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="portw">
                                            <?php echo $portw;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="pos">
                                            <?php echo $pos;?>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <select name="portm">
                                            <?php echo $portm;?>
                                        </select>
                                        <td>
                                            <select name="poe">
                                                <?php echo $poe;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(15)" value="ok">
                            </div>
                        </div>
                    </center>
                <br>
                <label class="labels">Lamp</label>
                <label class="radios">
                    <input name="Lamp" type="radio" value="working"onclick="vist_button(16)">&nbsp&nbsp&nbsp&nbsp
                    <input name="Lamp" type="radio" value="not working"onclick="hide_button(16)"></label>
                    <input type="radio" name="Lamp" value="-" hidden checked>
                    <center>
                        <div id="16" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="lampw">
                                            <?php echo $lampw;?>
                                        </select>
                                    </td>


                                    <td>
                                        <select name="ls">
                                            <?php echo $ls;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="lampm">
                                            <?php echo $lampm;?>
                                        </select>
                                        <td>
                                            <select name="le">
                                                <?php echo $le;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(16)" value="ok">
                            </div>
                        </div>
                    </center>
                <br>
                <label class="labels">Filter</label>
                <label class="radios">
                    <input name="Filter" type="radio" value="working"onclick="vist_button(17)">&nbsp&nbsp&nbsp&nbsp
                    <input name="Filter" type="radio" value="not working"onclick="hide_button(17)"></label>
                    <input type="radio" name="Filter" value="-" hidden checked>
                    <center>
                        <div id="17" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="filterw">
                                            <?php echo $filterw;?>
                                        </select>
                                    </td>


                                    <td>
                                         <select name="fs">
                                            <?php echo $fs;?>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <select name="filterm">
                                            <?php echo $filterm;?>
                                        </select>
                                        <td>
                                            <select name="fe">
                                                <?php echo $fe;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(17)" value="ok">
                            </div>
                        </div>
                    </center>
                <br>
                <br>
                <!--Start label tag (notes)-->
                <label class="labels">Notes:- </label><!--End label tag (notes)-->
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (notes)-->
                    <textarea name="pnote" rows="8" cols="25"></textarea>
                    <!--End textarea tag (notes)-->
                </center>
                <!--End center tag-->
                
        </div>
        <!--End div tag-->
    </div>
    <!--End projector div tag-->