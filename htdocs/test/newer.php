<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Participation Form</title>
  </head>
  <body>
    <form action="newer.php" method="post">
      <input type="number" name="pstudentnum">
      <input type="number" name="addspeech">
      <input type="number" name="addpoi">
      <input type="submit" name="submit">
    </form>


    <?php if(isset($_POST['submit'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=acumun;charset=utf8mb4', 'root', '');
      $pstudentnum = $_POST['pstudentnum'];
      $incrementspeech = $_POST['addspeech'];
      $incrementpoi = $_POST['addpoi'];

      $resultSet = $mysqli->query("SELECT speech AS speech, poi AS poi FROM participation WHERE pstudentnum = $pstudentnum");

      while ($rows = $resultSet->fetch(PDO::FETCH_ASSOC)) {

        $speech = $rows['speech'];
        $poi = $rows['poi'];


        $changespeech = "UPDATE participation SET speech = ($incrementspeech + $speech) WHERE pstudentnum = $pstudentnum";
        if($mysqli->query($changespeech) === 1) {

            $resultspeech = $mysqli->query("SELECT speech AS finalspeech FROM participation");
            while ($rows = $resultspeech->fetch(PDO::FETCH_ASSOC)){

              $finalspeech = $rows['finalspeech'];

              echo "$pstudentnum $finalspeech <br>";
            }
          }

          $changepoi = "UPDATE participation SET poi = ($incrementpoi + $poi) WHERE pstudentnum = $pstudentnum";
          if($mysqli->query($changepoi) === 1) {

              $resultpoi = $mysqli->query("SELECT poi AS finalpoi FROM participation");
              while ($rows = $resultpoi->fetch(PDO::FETCH_ASSOC)){

                $finalpoi = $rows['finalpoi'];

                echo "$pstudentnum $finalpoi <br>";
              }
            }



      }}


 ?>





  </body>
</html>
