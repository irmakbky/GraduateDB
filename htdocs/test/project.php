
<form method="post">
  <input type="text" name="search"/>
  <input type="submit" name="submit" value="search"/>
</form>

<form method="post" action="project.php">
  <input type="hidden" name="submitted" value="true">
  <fieldset>
    <legend>New Graduates</legend>
    <label>Name: <input type="text" name="fname"/></label>
    <label>Last Name: <input type="text" name="lname"/></label>
  </fieldset>
  <input style="width: 15%;" id="addnewperson" type="submit" value="add new person"/>
</form>

<form method="post">
  <input type="text" name="newemail">
  <input type="text" name="whoseemail">
  <input type="submit" name="changeinfo" value="change email">
</form>




<style>
input[type=text] {
  width: 130px;
  height: 30px;
  -webkit-transition: width 0.6s ease-in-out;
  transition: width 0.6s ease-in-out;
  font-size: 17px;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  border-radius: 15px;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
  width: 20%;
}

input[type=submit] {
  width: 90px;
  font-size: 50px;
}

 p {
     font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
     font-size: 17px;
 }

 table, th, td {
   border: 1px solid black;
   text-align: center;
 }

 th, td {
   width: 30%;
 }

</style>

<?php
if (isset($_POST['submit'])) {

  $mysqli = NEW PDO ('mysql:host=localhost;dbname=project;charset=utf8mb4', 'root', '');
  $search = $_POST['search'];
  $resultSet = $mysqli->query("SELECT graduates.name AS graduatesName, graduates.lastname AS graduatesLastName, graduates.email AS graduatesEmail, graduates.pnumber
    AS graduatesPnumber, fields.field AS fieldsField, countries.country AS countriesCountry
    FROM graduates, fields, countries
    WHERE (graduates.name LIKE '%$search%' or graduates.lastname LIKE '%$search%' or fields.field LIKE '%$search%' or countries.country LIKE '%$search%') and
    (graduates.id = fields.field_id and graduates.id = countries.count_id)");

    if ($resultSet->rowCount() == 0) {
      echo "No results";
    } else {
      while($rows = $resultSet->fetch(PDO::FETCH_ASSOC)) {

        $name = $rows['graduatesName'];
        $lastname = $rows['graduatesLastName'];
        $email = $rows['graduatesEmail'];
        $pnumber = $rows['graduatesPnumber'];
        $field = $rows['fieldsField'];
        $country = $rows['countriesCountry'];

        echo "<p><table>
           <tr>
             <th>Graduate</th>
             <th>Email</th>
             <th>Field</th>
             <th>Country</th>
           </tr>
           <tr>
               <td>$name $lastname</td>
               <td>$email</td>
               <td>$field</td>
               <td>$country</td>
           </tr>
        </table></p>";
      }

    }}



    if (isset($_POST['submitted'])) {
       $mysqli = NEW PDO ('mysql:host=localhost;dbname=project;charset=utf8mb4', 'root', '');

       $fname = $_POST['fname'];
       $lname= $_POST['lname'];

       $sqlinsert = "INSERT INTO graduates (name, lastname) VALUES ('$fname', '$lname')";

       /*if (!mysqli_query($mysqli, $sqlinsert)) {
          die("there was an error");
       }*/

    if ($mysqli->query($sqlinsert) === 1) {
        echo "New record created successfully";
    }

    }

    if (isset($_POST['changeinfo'])) {
       $mysqli = NEW PDO ('mysql:host=localhost;dbname=project;charset=utf8mb4', 'root', '');

       $email = $_POST['newemail'];
       $whoseemail = $_POST['whoseemail'];

       $changeoldemail = "UPDATE graduates SET email = '$email' WHERE name = '$whoseemail'";

       if ($mysqli->query($changeoldemail) === 1) {
           echo "Email altered successfully";
       }
    }






 ?>
