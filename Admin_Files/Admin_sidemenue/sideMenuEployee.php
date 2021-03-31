<!--  author: Nejood Abdulaziz Alfashka
        ID: 1505971
      date: 11/7/2018
-->


<!--
     summary of page:

 This page is for the side menu and its style.
 it contains buttons to moving between pages.

-->

<!-- 
  ************************************************
-->

<!DOCTYPE html> <!-- this instruction is to declaration HTML documents, so that the browser knows what type of document to expect -->
<html> <!-- start HTML-->
<head> <!-- start Head-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- this tag gives the browser instructions on how to control the page's dimensions and scaling.-->
 <!-- -------------------------------------------START STYLE-------------------------------------------------- -->
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
    top: 16%;
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
<!-- --------------------------------------------END STYLE---------------------------------------------------- -->

</head> <!-- end Head-->
<body>  <!-- start Body-->

<div class="sidenav"> <!--start div-->
 
 <!----------------------------------- START FORM ----------------------------------->
<form method="post" action="addEmployee.php">
  <button class="dropdown-btn">Add Employee </button>
</form>
<!------------------------------------ END FORM --------------------------------------------->

<!----------------------------------- START FORM ----------------------------------->
<form method="post" action="changeEmployeeType.php">
  <button class="dropdown-btn">Change Employee Type </button>
</form>
<!------------------------------------ END FORM --------------------------------------------->

<!----------------------------------- START FORM ----------------------------------->
<form method="post" action="deleteEmployee.php">
  <button class="dropdown-btn">Delete Employee </button>
 </form>
<!------------------------------------ END FORM --------------------------------------------->


<!----------------------------------- START FORM ----------------------------------->
<form method="post" action="AssignBuilding2 Employee.php">
  <button class="dropdown-btn">Assign Building to Employee </button>
 </form>
 <!------------------------------------ END FORM --------------------------------------------->

<!----------------------------------- START FORM ----------------------------------->
 <form method="post" action="DeleteBuildingFromEmployee.php">
  <button class="dropdown-btn">Delet Building From Employee </button>
</form>
 <!------------------------------------ END FORM --------------------------------------------->


<!----------------------------------- START FORM ----------------------------------->
 <form method="post" action="ViewEmployeeInformation.php">
  <button class="dropdown-btn">Veiw Employee Information </button>
  </form>
<!------------------------------------ END FORM --------------------------------------------->

 </div>   <!--end div-->
 </body>  <!-- end Body-->