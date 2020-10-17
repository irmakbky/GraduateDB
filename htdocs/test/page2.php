<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #222831;
  overflow-x: hidden;
  transition: 0.3s;
}

.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  left: 5%;
  margin-top: 30px;
  color: #EBF0F6;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 20px;
  color: #EBF0F6;
  display: block;
  transition: 0.1s;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.overlay a:hover, .overlay a:focus {
  color: #B55400;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

button {
  position: absolute;
  top: 70%;
  left: 44%;
  width: 12%;
  height: 5%;
  font-family:  "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 13px;
  border-radius: 15px;
  background-color: #222831;
  color: #ededed;
  border: 1px solid #222831;
}
</style>


<script>
function openNav() {
document.getElementById("myNav").style.width = "15%";
}

function closeNav() {
document.getElementById("myNav").style.width = "0%";
}
</script>

<form action= "page2.php" method="post">
  <input id="search" type="text" name="search" placeholder="Search..">
</form>

<div id="myNav" class="overlay">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="overlay-content">
<a href="addnewuser.php">Add New User</a><br>
<a href="changeinfo.php">Change User Info</a><br>
<a href="mysite.php">Search User</a>
</div>
</div>

<span style="position: absolute; top: 3%;font-size:35px;cursor:pointer;color: black; right: 3%;" onclick="openNav()">&#9776;</span>
<?php

$var_value = $_POST['search'];

if (isset($_POST['search'])) {



  $mysqli = NEW PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

  $search = $_POST['search'];
  $resultSet = $mysqli->query("SELECT users.firstname AS fname, users.lastname AS lname, users.country AS country FROM users
  WHERE (users.firstname LIKE '%$search%' or users.lastname LIKE '%$search%' or users.country LIKE '%$search%')");

  if ($resultSet->rowCount() == 0) {
    echo "<span1>No results</span1>";
  } else {
    while ($rows = $resultSet->fetch(PDO::FETCH_ASSOC)) {


       $fname = $rows['fname'];
       $lname = $rows['lname'];
       $country = $rows['country'];

       echo "<br><span1>First Name: $fname<br>Last Name: $lname<br>Country: $country</span1><br>";


    }
  }}

?>
