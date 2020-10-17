
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

a {
  text-decoration: none;
  color: black;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

a:hover {
  text-decoration: underline;
}

input {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

p {
  font-family:  "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>

<div class="navbar">

  <div class="dropdown">
    <button class="dropbtn"><p>First Name   <i class="fa fa-caret-down"></i></p>
    </button>
    <div class="dropdown-content">
      <form action="changeinfo.php" method="post">
        <input type="text" name="prevfname" placeholder="First Name"/>
        <input type="text" name="firstname" placeholder="New First Name"/>
        <input type="submit" name="submitfname" value="submit"/>
      </form>
    </div>
        </div>

    <div class="dropdown">
    <button class="dropbtn"><p>Last Name   <i class="fa fa-caret-down"></i></p>

    </button>
    <div class="dropdown-content">
      <form action="changeinfo.php" method="post">
        <input type="text" name="prevlname" placeholder="Last Name"/>
        <input type="text" name="lastname" placeholder="New Last Name"/>
        <input type="submit" name="submitlname" value="submit"/>
      </form>
    </div>    </div>

    <div class="dropdown">
    <button class="dropbtn"><p>Country   <i class="fa fa-caret-down"></i></p>
    </button>
    <div class="dropdown-content">
      <form action="changeinfo.php" method="post">
        <input type="text" name="prevcountry" placeholder="Country"/>
        <input type="text" name="country" placeholder="New Country"/>
        <input type="submit" name="submitcountry" value="submit"/>
      </form>
    </div>
  </div>
</div>

<br>
<a href="mysite.php">Home page</a><br><br>
<a href="addnewuser.php">Add new user</a><br><br>
<a href="mysite.php">Search for a user</a><br>





<?php


if (isset($_POST['submitfname'])) {

  $mysqli = new PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

  $prevfname = $_POST['prevfname'];
  $fname = $_POST['firstname'];

  $changefname = "UPDATE users SET firstname = '$fname' WHERE firstname = '$prevfname'";

  if ($mysqli->query($changefname) === TRUE) {
  	echo "submitted";
  }

}


if (isset($_POST['submitlname'])) {

  $mysqli = new PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

  $prevlname = $_POST['prevlname'];
  $lname = $_POST['lastname'];

  $changelname = "UPDATE users SET lastname = '$lname' WHERE lastname = '$prevlname'";

  if ($mysqli->query($changelname) === TRUE) {
  	echo "submitted";
  }

}


if (isset($_POST['submitcountry'])) {

  $mysqli = new PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

  $prevcountry = $_POST['prevcountry'];
  $country = $_POST['country'];

  $changecount = "UPDATE users SET country = '$country' WHERE country = '$prevcountry'";

  if ($mysqli->query($changecount) === TRUE) {
  	echo "submitted";
  }

}

 ?>
