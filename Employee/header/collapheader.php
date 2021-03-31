
     <style type="text/css">
         /**Authers: Rana Algizani
                     Melad Alamri
 style for the header tabs
**/

/**
style of the bar 
**/
ul {
    list-style-type: none; /**unordered List without Bullets**/
    margin: 0;/**the space from the page borders**/
    padding: 0;/**the space from the list items**/
    overflow: hidden;/**The overflow is clipped, and the rest of the content will be invisible**/
    background-color: #2d4059;/**coloring the background of the header tabs**/
   /**the space from the top border of the page**/
   margin-top: 1%;
    border-radius: 5px;/**make the border Rounded**/
    position: fixed;
    width: 100%;
    z-index:3;

}

/**style of each item in the bar**/
li {
    float: left;/**the element floats to the left of its container(ul)**/
    border-radius: 5px;/**make the border Rounded**/
}

/**the style of the normal unvisited and unselected**/
li a {
    display: block;/**A display property with a value of "block" results in a line break between the two elements.**/
    color: white;/**coloring the tabs which are links**/
    text-align: center;/**make the center text alignment**/
    padding: 14px 16px;/**set the space from the text**/
    text-decoration: none;/**the text (link) without line under or through it**/
}

/**style mouse over link and not selected**/
li a:hover:not(.active) {
    background-color: #3e4e88;/**change the hovered item**/
    border-radius: 5px;/**make the border Rounded**/
}

/**style of the selected link**/
.active {
    background-color: #339966;/**change the active item(current pressed item)**/
    border-radius: 5px;/**make the border Rounded**/
}
.user{
      
  color:#307672;/*coloring the label*/
  
    font-size: 20px;/*the size of the label*/
    font-style: bold;/*the style of the label*/
    }

    .logout{
      height:33%; 
      width:33%;
      margin-left:3%;
    
    
    }

    .logo{
            
      margin-left: 45%;
      height:8%; 
      width:8%;
      float: left;
    }
  .tableLogo{
    width: 100%;
    height: 10%;
    background-color: #aad5be;
    position:fixed;
    z-index: 3;
    top:0;
    
  }



     </style>

<?php include('header_logo.php')?>
    <!--heaer bars-->
  <ul class =ul>
  <li class="li"><a id="1" class="header" href="../include/home.php">Home</a></li> <!--heaer first item link to home-->
    <li class="li"><a id="2" class="header" href="../profile/profile.php">Profile</a></li><!--heaer second item link to profile-->
    <li class="li active"><a id="3" class="header" href="../select/Add round.php">Add Round</a></li><!--heaer third item link to Add Round-->
    <li class="li "><a id="4" class="header" href="../multiselect/Query.php">Query About Round</a></li><!--heaer fourth item link to Query About Round-->
    <li class="li"><a id="5" class="header" href="../multiselect/Monthly Achievment.php">Monthly Ahievment</a></li><!--heaer fifth item link to Monthly Ahievment-->
    <li class="li"><a id="6" class="header"  href="../select/malfunction.php">Malfunctions</a></li><!--heaer sixth item link to malfunction-->
  </ul>


 
