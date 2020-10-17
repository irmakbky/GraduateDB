<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: #393E46;
}

h1 {
  position: absolute;
  top: 12%;
  left: 33%;
  font-size: 90px;
  color: #B55400;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

 #search {
  position: absolute;
  top: 47%;
  left: 29%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 15px;
  font-size: 16px;
  background-color: #F2F7FF;
  background-image: url('searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  width: 42%;
  height: 6%;
  visibility: visible;
  color: #222831;
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

#adse {
  position: absolute;
  top: 40%;
  left: 38%;
  width: 24%;
  visibility: hidden;
  background-color: #EBF0F6;
  border: 2px solid #222831;
}
#adse input{
  position: relative;
  color: #222831;
  font-size: 16px;
  text-align: center;
  left: 0;
  height: 35px;
  width: 98.5%;
}



</style>

  </head>
  <body>
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "15%";
    }

    function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    }

    function advancedSearchFuntion() {
    document.getElementById("adse").style.visibility = "visible";
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("adsebutton").style.visibility = "hidden";
    }



    </script>

<h1>WELCOME!</h1>

    <form action= "page2.php" method="post">
      <input id="search" type="text" name="search" placeholder="Search..">
    </form>
  </body>



  <div id="myNav" class="overlay">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="overlay-content">
  <a href="addnewuser.php">Add New User</a><br>
  <a href="changeinfo.php">Change User Info</a><br>
  <a href="mysite.php">Search User</a>
</div>
</div>

<div id="adse" >
  <form action="mysite.php" method="post">
    <input type="text" name="advfname" placeholder= "First Name"/><br>
    <input type="text" name="advlname" placeholder= "Last Name"/><br>
    <input type="text" name="advcountry" placeholder= "Country"/>
  </form>
</div>

<button id="adsebutton" type="button" name="advancedsearch" onclick="advancedSearchFuntion()">Advanced Search</button>

<span style="position: absolute; top: 3%;font-size:35px;cursor:pointer;color: white; right: 3%;" onclick="openNav()">&#9776;</span>

<?php



 ?>
</html>
