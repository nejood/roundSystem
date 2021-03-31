<?php
 /*authers:Melad Alamri
           Rana Algizani

  in this page one part from the collapse
  the user can choose if every part in the computer working or not working if its not working the user fill the malfunction table aslo there is plase to add notes           
           */
$pce='';$pcs='';
 {
    //executed by options
       $pce.= '<option value="Deanship of Information Technology"> Deanship of Information Technology</option>
                                        <option value="Administration of Academic Services">Administration of Academic Services</option>
                                        <option value="Working"> Workshop</option>
                                        <option value="Technician"> Technician</option>
                                        <option value="Technical Affairs Unit"> Technical Affairs Unit</option>';
    }
    {
        //device status by options
        $pcs.='<option value="Out of Serves"> Out of Serves</option>
                                        <option value="Under Maintenace">Under Maintenace</option>
                                        <option value="Working"> Woring</option>';
    }

$mone=$pce;$moue=$pce;$keye=$pce;$nete=$pce;$ante=$pce;
$mons=$pcs;$mous=$pcs;$keys=$pcs;$nets=$pcs;$ants=$pcs;
$pcw='';
$pcm='';

  //queries about malfunction for  every parts in current device
  //queries about Maintenance for  every parts in current device

  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $pcw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }}

  $sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('computer')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $pcm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

}


$monw='';
$monm='';


    $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);

if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $monw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
    $sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('computer')";

$check1=mysqli_query($conn,$sql1);
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $monm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }
 
}

$mousew='';
$mousem='';

    $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $mousew .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('computer')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $mousem .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

  

 
}



$keyboardw='';
$keyboardm='';

$sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $keyboardw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }

}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('computer')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $keyboardm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }


}

$networkw='';
$networkm='';

  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);
$malfun='';
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $networkw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }

 
 
}
$sql1 ="SELECT * FROM maintenance_type WHERE device_type = ('computer')";

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $networkm .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }


}


$antiw='';
$antim='';

  $sql ="SELECT * FROM malfunctiontypes WHERE device_type = 'computer'";

$check=mysqli_query($conn,$sql);
$malfun='';
if(mysqli_num_rows($check)>0){
  while ( $row=mysqli_fetch_assoc($check)) {
  # code...
    $antiw .= '<option value = "'.$row['malfunction'].'">'.$row['malfunction'].'</option>';
    
  }
 
}

$check1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($check1)>0){
  while ( $row=mysqli_fetch_assoc($check1)) {
  # code...
    $antim .= '<option value = "'.$row['maintenance_type'].'">'.$row['maintenance_type'].'</option>';
    
  }

  
 
}

//--------------------------------
?>
<!--Start div tag-->
<div>
        <!--Start div computer tag (button)-->
        <div id="com" class="collapsible" title="Computer" >
            <!--Start img tag-->
            <img class="pic" src="../img/computer.png" alt="Computer" />
            <!--End img tag-->
            <!--End div computer tag (button)-->
        </div>
        
        <!--Start div tag-->
        <div class="content">
               <!--Start label tag-->
                <label class="radios">
                    <!--Start img tag-->
                    <img src="../img/check.png" alt="Working" title="working">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <!--End img tag-->
                    <!--Start img tag-->
                    <img src="../img/wrong.png" alt="Not working" title="Not Working">
                    <!--End img tag-->
                </label>
                <!--End label tag-->
                <!--Start label tag pc-->
                <br>
                <label class="labels">pc</label><!--End label tag pc-->
                <!--Start label tag-->
                <label class="radios">
                    <!--Start input radio working tag-->
                    <input name="pc" type="radio" value="working"onclick="vist_button(7)">&nbsp&nbsp&nbsp&nbsp
                    <!--End input radio working tag-->
                    <!--Start input radio not working tag-->
                    <input name="pc" type="radio" value="not working"onclick="hide_button(7)"> 
                    <!--end input radio not working tag-->
                    <!--hidden if the pc not-found in the class-->
                    <input type="radio" name="pc" value="-" hidden checked>
                    <!--Start center tag -->
                    <center>
                        <!--start div tag-->
                        <div id="7" class="hid trt" style="/*width: 150px;*/">
                            <br>
                            <div>
                                <!---------------Start malfunction table for pc-------------------->
                                <table class="table">

                                    <!----------------------Start row#1---------------------------------->
                                    <tr class="tr">
                                        <!------------------Name of colmns------------------------------>
                                        <th class="td th ">Malfunction Type</th>
                                        <th class="td th ">Status of Malfunction</th>
                                        <th class="td th ">Maintenace Type</th>
                                        <th class="td th ">Executed by</th>
                                    </tr>
                                    <!----------------------End row#1---------------------------->
                                    <!-------------------------selections to choose and fill the table--------------------------------->
                                    <td>
                                        <select name="pcw">
                                            <?php echo $pcw;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="pcs">
                                            <?php echo $pcs;?>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="pcm">
                                            <?php echo $pcm;?>
                                        </select>
                                    </td>

                                        <td>
                                            <select name="pce">
                                                <?php echo $pce;?>
                                            </select>
                                        </td>
                                </table>
                                <!-----------------------------End table----------------------------------------->
                                <br>
                                <!--Start input bottun ok -->
                                <input class="buttons" type="button" name="" onclick="vist_button(7)" value="ok">
                                <!--End input bottun ok -->
                            </div>
                            <!--End div tag-->
                        </div>
                        <!--end center tag-->
                    </center>
                    <!--End label tag-->
                </label>
                                <!--repeat all the prev. steps with all computer parts-->
                <br>
               
                <label class="labels">monitor</label>
                <label class="radios">
                    <input name="monitor" type="radio" value="working" onclick="vist_button(8)">&nbsp&nbsp&nbsp&nbsp
                    <input name="monitor" type="radio" value="not working" onclick="hide_button(8)">
                    <input type="radio" name="monitor" value="-" hidden checked>
                     <center>
                        <div id="8" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="monw">
                                            <?php echo $monw;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="mons">
                                            <?php echo $mons;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="monm">
                                            <?php echo $monm;?>
                                        </select>
                                    </td>

                                        <td>
                                            <select name="mone">
                                                <?php echo $mone;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(8)" value="ok">
                            </div>
                        </div>
                    </center>
                </label>
                <br>
                <label class="labels">mouse</label>
                <label class="radios">
                    <input name="mouse" type="radio" value="working" onclick="vist_button(9)">&nbsp&nbsp&nbsp&nbsp
                    <input name="mouse" type="radio" value="not working" onclick="hide_button(9)">
                    <input type="radio" name="mouse" value="-" hidden checked>
                    <center>
                        <div id="9" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="mousew">
                                            <?php echo $mousew;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="mous">
                                            <?php echo $mous;?>
                                        </select>
                                        </td>
                                    <td>
                                        <select name="mousem">
                                            <?php echo $mousem;?>
                                        </select>
                                    </td>
                                    <td>
                                            <select name="moue">
                                                <?php echo $moue;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(9)" value="ok">
                            </div>
                        </div>
                    </center>
            </label>

                <br>
                <label class="labels">keyboard</label>
                <label class="radios">
                    <input name="keyboard" type="radio" value="working"onclick="vist_button(10)">&nbsp&nbsp&nbsp&nbsp
                    <input name="keyboard" type="radio" value="not working"onclick="hide_button(10)">
                    <input type="radio" name="keyboard" value="-" hidden checked>
                    <center>
                        <div id="10" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="keyboardw">
                                            <?php echo $keyboardw;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="keys">
                                            <?php echo $keys;?>
                                        </select>
                                        </td>
                                    <td>
                                        <select name="keyboardm">
                                            <?php echo $keyboardm;?>
                                        </select>
                                    </td>
                                    <td>
                                            <select name="keye">
                                                <?php echo $keye;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(10)" value="ok">
                            </div>
                        </div>
                    </center>
                </label>
                <br>

                <label class="labels">network</label>
                <label class="radios">
                    <input name="network" type="radio" value="working"onclick="vist_button(11)">&nbsp&nbsp&nbsp&nbsp
                    <input name="network" type="radio" value="not working"onclick="hide_button(11)">
                    <input type="radio" name="network" value="-" hidden checked>
                    <center>
                        <div id="11" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="networkw">
                                            <?php echo $networkw;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="nets">
                                            <?php echo $nets;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="networkm">
                                            <?php echo $networkm;?>
                                        </select>
                                    </td>

                                        <td>
                                            <select name="nete">
                                                <?php echo $nete;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(11)" value="ok">
                            </div>
                        </div>
                    </center>
                </label>

                <br>
                <label class="labels">antiviruse</label>
                <label class="radios">
                    <input name="antiviruse" type="radio" value="working"onclick="vist_button(12)">&nbsp&nbsp&nbsp&nbsp
                    <input name="antiviruse" type="radio" value="not working"onclick="hide_button(12)">
                    <input type="radio" name="antiviruse" value="-" hidden checked>
                    <center>
                        <div id="12" class="hid trt" style="/*width: 150px;*/">
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
                                        <select name="antiw">
                                            <?php echo $antiw;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="ants">
                                            <?php echo $ants;?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="antim">
                                            <?php echo $antim;?>
                                        </select>
                                    </td>
                                        <td>
                                            <select name="ante">
                                                <?php echo $ante;?>
                                            </select>
                                        </td>
                                </table>
                                <br>
                                <input class="buttons" type="button" name="" onclick="vist_button(12)" value="ok">
                            </div>
                        </div>
                    </center>
            </label>

                <br>
                <br>
                <!--Start label notes-->
                <label class="labels">Notes:- </label>
                <!--Start center tag-->
                <center>
                    <!--Start textarea tag (note)-->
                    <textarea name="cnote" rows="8" cols="25"></textarea>
                    <!--end textarea tag (note)-->
                </center>
                <!--End center-->
                
        </div>
        <!--End div tag-->
    </div>