<!DOCTYPE html>
<!--this is the side menu shown only in buildings management pages-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>

/*coloring the page background*/
body{
      background-color: #cff0da;
}
/* Fixed sidenav, full height */
.sidenav {
    height:66%;
    width: 250px;
    z-index: 1;
    top: 14.7%;
    left: 0;
    background-color: #55967e;
    overflow-x: hidden;
    padding-top: 20px;
    border-bottom: 2px soild black;
    position: fixed;
    margin-top: 0%;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 18px;
    color: #003333;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    font-family: "Times New Roman", Times, serif; /* the font type*/
}

/* On mouse-over */
.sidenav a:hover  {
    color: #55967e;
}
.dropdown-btn:hover {
    color: #d1d1e0;
}


/* Add an active class to the active dropdown button */
.dropdown-btn.active{
    background-color: #003333;
    color: #f1f1f1;

}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #cccccc;
    padding-left: 8px;
       font-family: "Times New Roman", Times, serif; /* the font type*/
    font-size: 5px;
}

/**/
.arrow
{
  padding-top: 2%;
 width:15px;
 height:10px;
 float: right;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 5px;}
}



</style>
</head>
<body>

<div class="sidenav">
 

  <button class="dropdown-btn">Building Management 
     <img class="arrow" src="../../Admin_img/arrow.png">
  </button>
  <div class="dropdown-container">
    <a href="addBuilding.php">Add Building</a>
    <a href="deleteBuilding.php">Delete Building</a>
    <a href="showBuildingInfo.php">Show Building Info</a>
  </div>

  <button class="dropdown-btn">Class Management
  <img class="arrow" src="../../Admin_img/arrow.png">
  </button>
  <div class="dropdown-container">
    <a href="addClass.php">Add Class</a>
    <a href="deleteClass.php">Delete Class</a>
    <a href="showClassInfo.php">Show Class Info</a>
  </div>


  <button class="dropdown-btn">Device Management
   <img class="arrow" src="../../Admin_img/arrow.png"> 
  
  </button>
  <div class="dropdown-container">
    <a href="addDevice.php">Add Device</a>
    <a href="deleteDevice.php">Delete Device</a>
    <a href="showDeviceInfo.php">Show Device Info</a>
    <a href="archivedDevice.php">Show Archived Device</a>
  </div>
 
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
