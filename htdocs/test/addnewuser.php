<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {
      background-color: #222831;
      }

      #form {
        position: relative;
        margin-top: 3%;
        left: 3%;
      }

      #a {
        position: absolute;
        top: 50%;
      }

      a {
        text-decoration: none;
        color: #eeeeee;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }

      a:hover {
        text-decoration: underline;
      }

      input {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        height: 30px;
        width: 20%;
        color: #222831;
      }

      p {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        color: #eeeeee;
      }

      #adduserbutton {
        position: fixed;
        left: 8.5%;
        top: 43%;
        width: 10%;
        height: 5%;
        font-size: 15px;
        border: 1px solid #B55400;
        border-radius: 10px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        background-color: #B55400;
        color: #393E46;
      }

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
  </head>


  <body>

    <script>localh
    function openNav() {
      document.getElementById("myNav").style.width = "15%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>


    <div id="form">
      <form method="post" action="addnewuser.php">
        <input type="hidden" name="submitted" value="true">
        <p>First Name:</p> <input type="text" name="fname"/>
        <p>Last Name:</p> <input type="text" name="lname"/>
        <p>Country: </p><input type="text" name="count">
        <input id="adduserbutton" type="submit" name="addnewuser" value="ADD USER">
      </form>
    </div>


    <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
    <a href="addnewuser.php">Add New User</a><br>
    <a href="changeinfo.php">Change User Info</a><br>
    <a href="mysite.php">Search User</a>
    </div>
    </div>

    <span style="position: absolute;top: 3%;font-size:35px;cursor:pointer;color: white; right: 3%;" onclick="openNav()">&#9776;</span>

    <?php

    if (isset($_POST['submitted'])) {
     $mysqli = new PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $count = $_POST['count'];

     $insertuser = "INSERT INTO users (firstname, lastname, country) VALUES ('$fname', '$lname', '$count')";

     if($mysqli->query($insertuser) === 1) {
        echo "done";
     }

    }



    ?>
  </body>
</html>
