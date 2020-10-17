<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="searchgraduate.php" method="post">
      <input type="text" name="search"/>
      <!--<input type="submit" name="submit" value="SEARCH">-->
    </form>

    <?php

    if (isset($_POST['search'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $search = $_POST['search'];
      $searchresults = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city, contactinfo AS contactinfo
        FROM graduateview WHERE (fname LIKE '%$search%' or lname LIKE '%$search%')");
      if ($searchresults->rowCount() == 0) {
        echo "No results";
      } else {
        while ($rows = $searchresults->fetch(PDO::FETCH_ASSOC)) {
          $fname = $rows['fname'];
          $lname = $rows['lname'];
          $yograd = $rows['yograd'];
          $field = $rows['field'];
          $fostud = $rows['fostud'];
          $profession = $rows['profession'];
          $jobtitle = $rows['jobtitle'];
          $jobdescription = $rows['jobdescription'];
          $company = $rows['company'];
          $project = $rows['project'];
          $country = $rows['country'];
          $city = $rows['city'];
          $contactinfo = $rows['contactinfo'];

          echo "<br><div>
          First Name: $fname
          <br>Last Name: $lname
          <br>Year of Graduation: $yograd
          <br>Field: $field
          <br>Field of Study: $fostud
          <br>Profession: $profession
          <br>Job Title: $jobtitle
          <br>Job Description: $jobdescription
          <br>Company: $company
          <br>Projects: $project
          <br>Location: $city, $country
          <br>Contact Info: $contactinfo


          </div><br>";
        }
      }


    }


  ?>

  </body>
</html>
