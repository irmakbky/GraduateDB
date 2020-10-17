<!DOCTYPE html>
<html>
  <head>
    <title></title>
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
  </head>
  <body>
    <form action="graduates.php" method="post">
      <input type="text" name="search"/>
    </form>



    <?php

      if (isset($_POST['search'])) {
        $mysqli = NEW PDO ('mysql:host=localhost;dbname=graduatedb;charset=utf8mb4', 'root', '');
        $search = $_POST['search'];
        $query = $mysqli->query("SELECT graduate.firstname AS fname, graduate.lastname AS lname, graduate.yograd AS yograd, graduate.contactinfo AS contactinfo,
          fields.field AS field, fields.fieldofstudy AS fieldofstudy, location.country AS country, location.city AS city, professions.profession AS profession,
          professions.jobtitle AS jobtitle, otherinfo.jobdescription AS jobdescription, otherinfo.projects AS projects, otherinfo.company AS company
          FROM graduate, fields, location, otherinfo, professions
          WHERE (graduate.firstname LIKE '%$search%' or graduate.lastname LIKE '%$search%' or graduate.yograd LIKE '%$search%' or graduate.contactinfo LIKE '%$search%' or fields.field LIKE '%$search%'
            or fields.fieldofstudy LIKE '%$search%'  or location.country LIKE '%$search%' or location.city LIKE '%$search%' or professions.profession LIKE '%$search%'
            or professions.jobtitle LIKE '%$search%' or otherinfo.jobdescription LIKE '%$search%' or otherinfo.projects LIKE '%$search%' or otherinfo.company LIKE '%$search%') and
          (graduate.id = fields.field_id and graduate.id = location.location_id and graduate.id = otherinfo.otherinfo_id and graduate.id = professions.profession_id)");



          if ($query->rowCount() == 0) {
            echo "No results";
          } else {
            while($rows = $query->fetch(PDO::FETCH_ASSOC)) {

              $fname = $rows['fname'];
              $lname = $rows['lname'];
              $yograd = $rows['yograd'];
              $contactinfo = $rows['contactinfo'];
              $field = $rows['field'];
              $fieldofstudy = $rows['fieldofstudy'];
              $country = $rows['country'];
              $city = $rows['city'];
              $profession = $rows['profession'];
              $jobtitle = $rows['jobtitle'];
              $jobdescription = $rows['jobdescription'];
              $projects = $rows['projects'];
              $company = $rows['company'];


              echo "<p><table>
                 <tr>
                   <th>Graduate</th>
                   <th>Year of Graduation</th>
                   <th>Field</th>
                   <th>Field of Study</th>
                   <th>Profession</th>
                   <th>Job Title</th>
                   <th>Company</th>
                   <th>Location</th>
                   <th>Other Info</th>
                   <th>Contact Info</th>
                 </tr>
                 <tr>
                     <td>$fname $lname</td>
                     <td>$yograd</td>
                     <td>$field</td>
                     <td>$fieldofstudy</td>
                     <td>$profession</td>
                     <td>$jobtitle</td>
                     <td>$company</td>
                     <td>$city $country</td>
                     <td>Job Description: $jobdescription<br>Project: $projects</td>
                     <td>$contactinfo</td>
                 </tr>
              </table></p>";
            }

          }}





     ?>

  </body>
</html>
