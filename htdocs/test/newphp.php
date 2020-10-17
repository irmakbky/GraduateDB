<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>



    <table>

      <tr>
        <th style="border: 1px solid black;">Name</th>
        <th style="border: 1px solid black;">Number</th>
      </tr>


        <?php



          $mysqli = NEW PDO ('mysql:host=localhost;dbname=acimun;charset=utf8mb4', 'root', '');

          $result = $mysqli->query("SELECT name AS name, studentnum AS studentnum FROM students");


          while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {

            $name = $rows['name'];
            $studentnum = $rows['studentnum'];

            echo " <tr>
                <td style=\"border: 1px solid black;\">$name</td>
                <td style=\"border: 1px solid black;\">$studentnum</td>
              </tr>";


          }


      ?>


    </table>





  </body>
</html>
