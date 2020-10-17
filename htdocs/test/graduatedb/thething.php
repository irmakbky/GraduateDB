<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<form action="thething.php" method="post">
  First name:<input type="text" name="firstname">
  Last name:<input type="text" name="lastname">
  Field: <br>
  <input type="radio" name="field" value="tech">Technology
  <input type="radio" name="field" value="sci">Science
  <input type="radio" name="field" value="eng">Engineering

  fieldofstudy: <br>
  <select name="fostud">
    <option>thefirst</option>
    <option>thesecond</option>
    <option>thethird</option>
    </optgroup>
  </select>
  <input type="submit" name="submit" value="submit">
</form>


<?php

if (isset($_POST['submit'])) {

     $mysqli = new PDO ('mysql:host=localhost;dbname=thething;charset=utf8mb4', 'root', '');

     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $field = $_POST['field'];
     $fostud = $_POST['fostud'];

     $insertgraduate = "INSERT INTO graduates (firstname, lastname) VALUES ('$firstname', '$lastname')";
     if($mysqli->query($insertgraduate) === 1) {
         echo "done";
       }

     $thefield = $mysqli->query("SELECT fieldslist.id AS fieldslistid, fostudlist.id AS fostudlistid, graduates.id AS graduatesid FROM fieldslist, fostudlist, graduates
     WHERE (fieldslist.field = '$field' AND fostudlist.fostud = '$fostud' AND (firstname = '$firstname' AND lastname = '$lastname'))");

     if ($thefield->rowCount() == 0 ) {
     echo "No results";
     } else {
     while($rows = $thefield->fetch(PDO::FETCH_ASSOC)) {
       $fieldslistid = $rows['fieldslistid'];
       $graduatesid = $rows['graduatesid'];
       $fostudlistid = $rows['fostudlistid'];
         $matchfield = "INSERT INTO gfields (g_id ,field_id, fostud_id) VALUES ($graduatesid, $fieldslistid, $fostudlistid)";
         if($mysqli->query($matchfield) === 1) {
            echo "done";

          }

     }  }


   }


 ?>

  </body>
</html>
