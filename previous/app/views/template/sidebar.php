<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
  <a href="javascript:void(0)"
  onclick="w3_close()"
  class="w3-closenav w3-large w3-red">Close &times;</a>
  <a href="#" class="w3-hover-blue w3-blue-grey">Welcome&nbsp;<?php echo $_SESSION['username']."!";?>
</a>
  <a href="add_student.php" class="w3-hover-blue-grey">Add new Record</a>
    <a href="searchrecord.php" class="w3-hover-blue-grey">Search</a>
  <a href="setting.php" class="w3-hover-blue-grey">Setting</a>
  <a href="logout.php" class="w3-hover-blue-grey">logout</a>
</nav>

<div id="main">

<header class="w3-container w3-blue">
  <span class="w3-opennav w3-xlarge w3-left bars" onclick="w3_open()" id="openNav">&#9776;</span>
  <h3 class="w3-left">&nbsp;<a href="dashboard.php">Rahat Institute</a></h3>
 
</header>