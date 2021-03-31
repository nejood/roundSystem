<?php include("../header/header_e.php");?>
<?php
/*authers: Melad Alamri
           Rana Algizani
           this page will take all the device data from the collapse
           and put it in the database and show the add round info on table*/
//-------------INFO-------------------
if (isset($_POST['submit'])) {
  # code...

$building_name = $_POST["building_name"];
$class_num = $_POST["class_num"];

}
//---------------------------------
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER']))
{
    $previous = $_SERVER['HTTP_REFERER'];
}
//-----------------date-------------
$date = $_POST['date'];


//---------------computer-----------
require_once ('../include/connection.php');

$pce = '';
$pcw = '';
$pcm = '';
$pcs = '';
$pcprint = '';
if (($pc = $_POST['pc']) == "not working")
{
    $pcw = $_POST['pcw'];
    $pcm = $_POST['pcm'];
    $pcs = $_POST['pcs'];
    $pce = $_POST['pce'];
    $pcprint = '<tr class="tr">
  <td class="td th ">PC</td>
  <td class="td th ">' . $pcw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $pce . '</td>
  <td class="td th ">' . $pcm . '</td>
  <td class="td th ">' . $pcs . '</td>
  
</tr>';

}
$monw = '';
$monm = '';
$mone = '';
$mons = '';
$monprint = '';
if (($mon = $_POST['monitor']) == "not working")
{
    $monw = $_POST['monw'];
    $monm = $_POST['monm'];
    $mone = $_POST['mone'];
    $mons = $_POST['mons'];
    $monprint = '<tr class="tr">
  <td class="td th ">Monitor</td>
  <td class="td th ">' . $monw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $mone . '</td>
  <td class="td th ">' . $monm . '</td>
  <td class="td th ">' . $mons . '</td>
  
</tr>';
}
$mousew = '';
$mousem = '';
$moue = '';
$mous = '';
$mouprint = '';
if (($mouse = $_POST['mouse']) == "not working")
{
    $mousew = $_POST['mousew'];
    $mousem = $_POST['mousem'];
    $moue = $_POST['moue'];
    $mous = $_POST['mous'];
    $mouprint = '<tr class="tr">
  <td class="td th ">Mouse</td>
  <td class="td th ">' . $mousew . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $mousem . '</td>
  <td class="td th ">' . $moue . '</td>
  <td class="td th ">' . $mous . '</td>
  
</tr>';

}

$keyboardw = '';
$keyboardm = '';
$keye = '';
$keys = '';
$keyprint = '';
if (($keyboard = $_POST['keyboard']) == "not working")
{
    $keyboardw = $_POST['keyboardw'];
    $keyboardm = $_POST['keyboardm'];
    $keye = $_POST['keye'];
    $keys = $_POST['keys'];
    $keyprint = '<tr class="tr">
  <td class="td th ">Keyboard</td>
  <td class="td th ">' . $keyboardw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $keye . '</td>
  <td class="td th ">' . $keyboardm . '</td>
  <td class="td th ">' . $keys . '</td>
  
</tr>';

}

$networkw = '';
$networkm = '';
$nete = '';
$nets = '';
$netprint = '';
if (($network = $_POST['network']) == "not working")
{
    $networkw = $_POST['networkw'];
    $networkm = $_POST['networkm'];
    $nete = $_POST['nete'];
    $nets = $_POST['nets'];
    $netprint = '<tr class="tr">
  <td class="td th ">Network</td>
  <td class="td th ">' . $networkw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $nete . '</td>
  <td class="td th ">' . $networkm . '</td>
  <td class="td th ">' . $nets . '</td>
  
</tr>';
}
$antiw = '';
$antim = '';
$ante = '';
$ants = '';
$antprint = '';
if (($anti = $_POST['antiviruse']) == "not working")
{
    $antiw = $_POST['antiw'];
    $antim = $_POST['antim'];
    $ante = $_POST['ante'];
    $ants = $_POST['ants'];
    $antprint = '<tr class="tr">
  <td class="td th ">Antiviruse</td>
  <td class="td th ">' . $antiw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $ante . '</td>
  <td class="td th ">' . $antim . '</td>
  <td class="td th ">' . $ants . '</td>
  
</tr>';
}
$cnote = $_POST['cnote'];

//--------------------------------
//-----------vedio spliter--------
$vsw = '';
$vsm = '';
$vss = '';
$vse = '';
$vsprint = '';
if (($vedio = $_POST['VedioSpliter']) == "not working")
{
    $vsw = $_POST['vsw'];
    $vsm = $_POST['vsm'];
    $vss = $_POST['vss'];
    $vse = $_POST['vse'];
    $vsprint = '<tr class="tr">
  <td class="td th ">Vedio Spliter</td>
  <td class="td th ">' . $vsw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $vse . '</td>
  <td class="td th ">' . $vsm . '</td>
  <td class="td th ">' . $vss . '</td>
  
</tr>';
}
$vsnote = $_POST['vsnote'];

//-------------------------------
//--------projector------------
$pr_appw = '';
$pr_appm = '';
$pre = '';
$prs = '';
$prprint = '';
if (($pr_app = $_POST['Projectorcontrolapp']) == "not working")
{
    $pr_appw = $_POST['pr_appw'];
    $pr_appm = $_POST['pr_appm'];
    $pre = $_POST['pre'];
    $prs = $_POST['prs'];
    $prprint = '<tr class="tr">
  <td class="td th ">Projector Control App</td>
  <td class="td th ">' . $pr_appw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $pre . '</td>
  <td class="td th ">' . $pr_appm . '</td>
  <td class="td th ">' . $prs . '</td>
  
</tr>';
}
$cablew = '';
$cablem = '';
$ce = '';
$cs = '';
$cprint = '';
if (($cable = $_POST['VGAcable']) == "not working")
{
    $cablew = $_POST['cablew'];
    $cablem = $_POST['cablem'];
    $ce = $_POST['ce'];
    $cs = $_POST['cs'];
    $cprint = '<tr class="tr">
  <td class="td th ">VGA Cable</td>
  <td class="td th ">' . $cablew . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $ce . '</td>
  <td class="td th ">' . $cablem . '</td>
  <td class="td th ">' . $cs . '</td>
  
</tr>';
}

$portw = '';
$portm = '';
$poe = '';
$pos = '';
$poprint = '';
if (($port = $_POST['VGAport']) == "not working")
{
    $portw = $_POST['portw'];
    $portm = $_POST['portm'];
    $poe = $_POST['poe'];
    $pos = $_POST['pos'];
    $poprint = '<tr class="tr">
  <td class="td th ">VGA Port</td>
  <td class="td th ">' . $portw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $poe . '</td>
  <td class="td th ">' . $portm . '</td>
  <td class="td th ">' . $pos . '</td>
  
</tr>';
}
$lampw = '';
$lampm = '';
$le = '';
$ls = '';
$lprint = '';
if (($lamp = $_POST['Lamp']) == "not working")
{
    $lampw = $_POST['lampw'];
    $lampm = $_POST['lampm'];
    $le = $_POST['le'];
    $ls = $_POST['ls'];
    $lprint = '<tr class="tr">
  <td class="td th ">Lamp</td>
  <td class="td th ">' . $lampw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $le . '</td>
  <td class="td th ">' . $lampm . '</td>
  <td class="td th ">' . $ls . '</td>
  
</tr>';
}
$filterw = '';
$filterm = '';
$fe = '';
$fs = '';
$fprint = '';
if (($filter = $_POST['Filter']) == "not working")
{
    $filterw = $_POST['filterw'];
    $filterm = $_POST['filterm'];
    $fe = $_POST['fe'];
    $fs = $_POST['fs'];
    $fprint = '<tr class="tr">
  <td class="td th ">Filter</td>
  <td class="td th ">' . $filterw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $fe . '</td>
  <td class="td th ">' . $filterm . '</td>
  <td class="td th ">' . $fs . '</td>
  
</tr>';

}
$pnote = $_POST['pnote'];

//---------------------------
//--------E-screen-------------
$escw = '';
$escm = '';
$escs = '';
$esce = '';
$escprint = '';
if (($escreen = $_POST['Electronicscreen']) == "not working")
{
    $escw = $_POST['escw'];
    $escm = $_POST['escm'];
    $escs = $_POST['escs'];
    $esce = $_POST['esce'];
    $escprint = '<tr class="tr">
  <td class="td th ">Electronic Screen</td>
  <td class="td th ">' . $escw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $esce . '</td>
  <td class="td th ">' . $escm . '</td>
  <td class="td th ">' . $escs . '</td>
  
</tr>';
}
$esnote = $_POST['esnote'];

//---------------------------
//-------Smart Board--------
$smcw = '';
$smcm = '';
$smcs = '';
$smce = '';
$smprint = '';
if (($smart = $_POST['SmartBoard']) == "not working")
{
    $smcw = $_POST['smcw'];
    $smcm = $_POST['smcm'];
    $smcs = $_POST['smcs'];
    $smce = $_POST['smce'];
    $smprint = '<tr class="tr">
  <td class="td th ">Smart Board</td>
  <td class="td th ">' . $smcw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $smce . '</td>
  <td class="td th ">' . $smcm . '</td>
  <td class="td th ">' . $smcs . '</td>
  
</tr>';
}
$sbnote = $_POST['sbnote'];

//-------------------
//--------T.v-----------
$tvw = '';
$tvm = '';
$tvs = '';
$tve = '';
if (($tv = $_POST['TV']) == "not working")
{
    $tvw = $_POST['tvw'];
    $tvm = $_POST['tvm'];
    $tvs = $_POST['tvs'];
    $tve = $_POST['tve'];
    $tvprint = '<tr class="tr">
  <td class="td th ">TV</td>
  <td class="td th ">' . $tvw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $tve . '</td>
  <td class="td th ">' . $tvm . '</td>
  <td class="td th ">' . $tvs . '</td>
  
</tr>';
}
$tvnote = $_POST['tvnote'];

//--------------------
//--------adapter-----
$adcw = '';
$adcm = '';
$adcs = '';
$adce = '';
$adprint = '';
if (($adapter = $_POST['adapter']) == "not working")
{
    $adcw = $_POST['adcw'];
    $adcm = $_POST['adcm'];
    $adcs = $_POST['adcs'];
    $adce = $_POST['adce'];
    $adprint = '<tr class="tr">
  <td class="td th ">Adapter</td>
  <td class="td th ">' . $adcw . '</td>
  <td class="td th ">' . $date . '</td>
  <td class="td th ">' . $adce . '</td>
  <td class="td th ">' . $adcm . '</td>
  <td class="td th ">' . $adcs . '</td>
  
</tr>';
}
$adnote = $_POST['adnote'];

//-----------------------
//------------Note-------
$note = $_POST['note'];

//------------------------
$deviceName = array('pc','monitor','mouse','keyboard','network','antiviru','video spliter','projector control app','VGA cable','VGA port','Lamp','Filter','Electronic screen','Smart Board','TV','Adapter');

$deviceW = array($pcw,$monw,$mousew,$keyboardw,$networkw,$antiw,$vsw,$pr_appw,$cablew,$portw,$lampw,$filterw,$escw,$smcw,$tvw,$adcw);

$deviceM = array($pcm,$monm,$mousem,$keyboardm,$networkm,$antim,$vsm,$pr_appm,$cablem,$portm,$lampm,$filterm,$escm,$smcm,$tvm,$adcm);

$deviceE = array( $pce,$mone,$moue,$keye,$nete,$ante,$vse,$pre,$ce,$poe,$le,$fe,$esce,$smce,$tve,$adce);

$deviceS = array($pcs,$mons,$mous,$keys,$nets,$ants,$vss,$prs,$cs,$pos,$ls,$fs,$escs,$smcs,$tvs,$adcs);
$device = count($deviceS);
//---------------------------insert into round table------------------
# code...
$sql1 = "DELETE FROM round WHERE user_name='".$_SESSION["user_name"]."'and building_name='$building_name' and class_num = '".$class_num."' and data_of_visit ='" . $date . "'";
mysqli_query($conn, $sql1);

$sql = "INSERT INTO round (building_name,class_num,user_name,computer,monitor,muse,keyboard,network,antivirus,computer_note,video_spliter,video_spliter_note,projector_control_app,vga_cable,vga_port,lamp,filter,projector_note,electronic_screen,electronic_screen_note,smart_board,smart_board_note,tv,tvnote,adapter,adnote,note,data_of_visit) VALUES ('$building_name','$class_num','".$_SESSION["user_name"]."','" . $pc . "', '" . $mon . "','" . $mouse . "' ,'" . $keyboard . "','" . $network . "','" . $anti . "','" . $cnote . "','" . $vedio . "','" . $vsnote . "','" . $pr_app . "','" . $cable . "','" . $port . "','" . $lamp . "','" . $filter . "','" . $pnote . "','" . $escreen . "','" . $esnote . "','" . $smart . "','" . $sbnote . "','" . $tv . "','" . $tvnote . "','" . $adapter . "','" . $adnote . "','" . $note . "','" . $date . "')";

mysqli_query($conn, $sql);
$sql1 = "DELETE FROM malfunction WHERE user_name='".$_SESSION["user_name"]."'and building_name='$building_name' and class_num = '$class_num' and malfunction_date ='" . $date . "'";
mysqli_query($conn, $sql1);
for ($i = 0;$i < $device;$i++)
{
    if ($deviceE[$i] != '')
    {
        # code...
        $sql1 = "INSERT INTO malfunction (device_type,maintenace_type,malfunctionType,building_name,class_num,user_name,executing_agency,status_of_malfunction,malfunction_date) VALUES ('" . $deviceName[$i] . "','" . $deviceM[$i] . "','" . $deviceW[$i] . "','$building_name','$class_num','".$_SESSION["user_name"]."','" . $deviceE[$i] . "','" . $deviceS[$i] . "','$date')";
        mysqli_query($conn, $sql1);
    }

}

//--------------------------------------------------------------------
mysqli_close($conn);

?>
<!----------------------------------------------------------------------->
<!DOCTYPE html>
<!-- author @Rana Algizani
            @Melad Alamri
  -->

<html>

<head>

    <title>Show Round Info</title>
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

        

        .a {
            text-decoration: none;
            color: white;

        }

        .buttons {
            background-color: #55967e;
            /*coloring the button*/
            border-color: #307672;
            /*coloring the border of the button*/
            border-radius: 5px;
            /*make the button rounded*/
            color: white;
            /*the color of the button name*/
            border-style: outset;
            /* the style border*/
            border-width: 2px;
            /* the size of border*/
            font-size: 24px;
            /*the size of the button name*/
            margin-left: 2%;
        }

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



        .a {
            text-decoration: none;
            color: white;

        }
    </style>

</head>

<body onload="setActiveFunction(3)">



    <!--No need for reapeat code use this and save the repeated code in seperate file-->

  <h1 class="titles" id="title1"  align="center">Show Round Info<br>  _____________________________</h1>
            <br/><br/>

    <!-- start of the center tag for centering the contents -->
    <form action="../select/Add round.php" method="post" onsubmit=" return confirm('Are You Sure?\n You Will Go to Add Round Page  ') ">

        <center>

            

            <table class="table">


                <tr class="tr">


                    <th class="td th" colspan="6">Computer</th>
                    <th class="td th " rowspan="2">Vedio Spliter</th>
                    <th class="td th" colspan="5">Projector</th>
                    <th class="td th " rowspan="2">Electronic screen</th>
                    <th class="td th " rowspan="2">Smart Board</th>
                    <th class="td th " rowspan="2">Adapter</th>
                    <th class="td th " rowspan="2">TV</th>
                    <th class="td th " rowspan="2">Date of Visit</th>





                </tr>

                <tr class="tr">


                    <td class="td th ">PC</td>
                    <td class="td th ">Monitor</td>
                    <td class="td th ">Mouse</td>
                    <td class="td th ">Key board</td>
                    <td class="td th ">Net work</td>
                    <td class="td th ">Anti viruse</td>



                    <td class="td th ">projector control app</td>
                    <td class="td th ">VGA Cabel</td>
                    <td class="td th ">VGA Port</td>
                    <td class="td th ">Lamp</td>
                    <td class="td th ">Filter</td>

                </tr>



                <tr class="tr">

                    <td class="td th ">
                        <?php echo $pc; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $mon; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $mouse; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $keyboard; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $network; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $anti; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $vedio; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $pr_app; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $cable; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $port; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $lamp; ?>
                    </td>
                    <td class="td th ">
                        <?php echo $filter; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $escreen; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $smart; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $adapter; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $tv; ?>
                    </td>

                    <td class="td th ">
                        <?php echo $date; ?>
                    </td>


                </tr>

                <tr class="tr">
                    <td class="td th " colspan="6">-
                        <?php echo $cnote ?>
                    </td>
                    <td class="td th ">-
                        <?php echo $vsnote ?>
                    </td>
                    <td class="td th " colspan="5">-
                        <?php echo $pnote ?>
                    </td>
                    <td class="td th ">-
                        <?php echo $esnote ?>
                    </td>
                    <td class="td th ">-
                        <?php echo $sbnote ?>
                    </td>
                    <td class="td th ">-
                        <?php echo $adnote ?>
                    </td>
                    <td class="td th ">-
                        <?php echo $tvnote ?>
                    </td>

                </tr>

                <tr class="tr">
                    <td class="td th " colspan="16">-
                        <?php echo $note ?>
                    </td>
                </tr>




            </table>



            <br>
            <br>
            <br>
            <br>

            <table class="table">


                <tr class="tr">


                    <th class="td th ">Device Name</th>
                    <th class="td th ">Malfunction Type</th>
                    <th class="td th ">Date of Malfuntion</th>
                    <th class="td th ">Status of Malfunction</th>
                    <th class="td th ">Maintenace Type</th>
                    <th class="td th ">Executed by</th>


                </tr>

                <?php
                  echo ($pcprint.$monprint.$mouprint.$keyprint.$netprint.$antprint.$vsprint.$prprint.$cprint.$poprint.$lprint.$fprint.$escprint.$smprint.$adprint);
                ?>

            </table>

            <br>
            <button onclick="alert('You will need to fill all the information agian')" class="buttons" name="edit" style="float:left; margin-left: 10%; "><a class="a" href="<?=$previous?>">Back</a></button>
            <input class="buttons" type="submit" name="ok" value=" Ok " style="float:right; margin-right: 10%; margin-bottom:5%">
            <br><br>
            
        </center>
        <!-- end of the center tag for centering the contents -->
    </form>


</body>

</html>
