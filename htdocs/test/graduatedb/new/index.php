<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="index.php" method="post">
      <input type="text" name="name" >
      <input type="radio" name="field" value="tech">tech
      <input type="radio" name="field" value="sci">sci
      <input type="radio" name="field" value="eng">eng
      <input type="submit" name="submit" value="Submit">
    </form>


    <?php




    if(isset($_POST['submit'])) {
      $mysqli = new PDO ('mysql:host=localhost;dbname=gdb;charset=utf8mb4', 'root', '');


      $name = $_POST['name'];
      $field = $_POST['field'];
      $thegraduate = "INSERT INTO person (name) VALUES ('$name') ";
                        if($mysqli->query($thegraduate) === 1) {
                          echo "done";
                        }
  /*the field*/         $selectid = $mysqli->query("SELECT person.id AS personid FROM person WHERE (name = '$name') ");
                          if ($selectid->rowCount() == 0 ) {
                            echo "No results";
                          } else {
                            while($rows = $selectid->fetch(PDO::FETCH_ASSOC)) {
                              $personid = $rows['personid'];


                              }

                              $thefield = $mysqli->query("SELECT field.id AS fieldid, person.id AS personid FROM field, person
                                   WHERE ('$field' = field AND '$name' = name)" );
                              if($thefield->rowCount() == 0 ){
                                  echo "No results";
                              }else{
                                while($rows = $thefield->fetch(PDO::FETCH_ASSOC)){
                                  $fieldid = $rows['fieldsid'];
                                  $matchfield = "INSERT INTO personfield (personid, fieldid) VALUES ($personid, $fieldid)";
                                  if($mysqli->query($matchfield) === 1) {
                                     echo "done";

                                   }
                                }


    }}}




    ?>
  </body>
</html>
