<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>


    <form action="search.php" method="post">
      <input type="text" name="search"/>
    </form>

    <?php

      if (isset($_POST['searchforgraduate'])) {
        $mysqli = NEW PDO ('mysql:host=localhost;dbname=graduatedb;charset=utf8mb4', 'root', '');
        $search = $_POST['search'];


        }
    ?>

  </body>
</html>
