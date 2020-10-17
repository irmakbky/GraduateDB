<style>



input {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
div {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>



<form action="search.php" method="post">
  <input type="text" name="search"/>
  <input type="submit" name="submit" value="SEARCH">
</form>



<?php

if (isset($_POST['submit'])) {

  $mysqli = NEW PDO ('mysql:host=localhost;dbname=plus;charset=utf8mb4', 'root', '');

  $search = $_POST['search'];
  $resultSet = $mysqli->query("SELECT users.firstname AS fname, users.lastname AS lname, users.country AS country FROM users
  WHERE (users.firstname LIKE '%$search%' or users.lastname LIKE '%$search%' or users.country LIKE '%$search%')");

  if ($resultSet->rowCount() == 0) {
    echo "No results";
  } else {
    while ($rows = $resultSet->fetch(PDO::FETCH_ASSOC)) {
      $fname = $rows['fname'];
      $lname = $rows['lname'];
      $country = $rows['country'];

      echo "<br><div>First Name: $fname<br>Last Name: $lname<br>Country: $country</div><br>";
    }
  }


}


 ?>
