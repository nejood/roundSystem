<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

/*coloring the page background*/
body{
      background-color: #cff0da;
}
/* Fixed sidenav, full height */
.sidenav {
    height:45%;
    width: 23%;
    position: fixed;
    z-index: 1;
    top: 33%;
    left: 0;
    overflow-x: hidden;
background-color: #cff0da;
    position:fixed;
  
    
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
   padding: 6px 15px 6px 16px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    font-family: "Times New Roman", Times, serif; /* the font type*/
    border: 2px solid black;
     background-color: #55967e;
}

/* On mouse-over */

.dropdown-btn:hover {
    color: white;
      background-color: #003333;
   
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
 
<form method="post" action="malfunction.php">
  <button class="dropdown-btn">Show Mmalfunctions</button>
</form>
<!------------------------------------ END FORM --------------------------------------------->

<!----------------------------------- START FORM ----------------------------------->
<form method="post" action="showMalfunction_Maintenance.php">
  <button class="dropdown-btn">Mmalfunctions Type</button>
</form>
<!------------------------------------ END FORM --------------------------------------------->

<!----------------------------------- START FORM ----------------------------------->
<form method="post" action="AddMalfunction2Device.php">
  <button class="dropdown-btn">Add Malfunction</button>
 </form>
<!------------------------------------ END FORM --------------------------------------------->

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
