<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACI Alumni Project Form</title>
    <style>
    body {
      text-align: center;
      background-color: #004F8E;
    }
    p {
      color: #FFA82E;
    }
    h1 {
      font-size: 3vw;
      color: #FFA82E;
    }
      form {
        color: #FFFAF3;
        font-size: 1vw;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }
      input {
        background-color: #FFF5E9;
      }
      textarea {
        background-color: #FFF5E9;
      }
      select {
        background-color: #FEFEFE;
      }
    </style>
  </head>
  <body>
    <h1>ACI Alumni Project Form</h1>
    <p>The asterisk (*) indicates that an answer is required for that question.</p>
    <form action="itgsia.php" method="post">
      First Name* <br> <input type="text" name="fname"> <br><br>
      Last Name* <br> <input type="text" name="lname"><br><br>
      Year of Graduation from ACI*<br> <input type="text" name="yograd"><br><br>
      Field* <br>
      <input type="radio" name="field" value="technology">Technology<br>
      <input type="radio" name="field" value="science">Science<br>
      <input type="radio" name="field" value="engineering">Engineering<br>
      <br><br>
      Field of Study* <br>


      <select name="fostud">
      <option></option>
      <option>Aerospace Engineering</option>
      <option>Architectural Engineering</option>
      <option>Architecture</option>
      <option>Astronomy and Astrophysics</option>
      <option>Atmospheric Sciences and Meteorology</option>
      <option>Biochemical Sciences</option>
      <option>Biological Engineering</option>
      <option>Biology</option>
      <option>Biomedical Engineering</option>
      <option>Botany</option>
      <option>Chemical Engineering</option>
      <option>Chemistry</option>
      <option>Civil Engineering</option>
      <option>Cognitive Science and Biopsychology</option>
      <option>Communication Technologies</option>
      <option>Computer Administration Management and Security</option>
      <option>Computer and Information Systems</option>
      <option>Computer Engineering</option>
      <option>Computer Networking and Telecommunications</option>
      <option>Computer Programming and Data Processing</option>
      <option>Computer Science</option>
      <option>Ecology</option>
      <option>Electrical Engineering</option>
      <option>Electrical Engineering Technology</option>
      <option>Engineering and Industrial Management</option>
      <option>Engineering Mechanics Physics and Science</option>
      <option>Engineering Technologies</option>
      <option>Environmental Engineering</option>
      <option>Environmental Science</option>
      <option>General Engineering</option>
      <option>Genetics</option>
      <option>Geological and Geophysical Engineering</option>
      <option>Geology and Earth Science</option>
      <option>Geosciences</option>
      <option>Industrial and Manufacturing Engineering</option>
      <option>Industrial Production Technologies</option>
      <option>Information Sciences</option>
      <option>Materials Engineering and Materials Science</option>
      <option>Materials Science</option>
      <option>Mathematics and Computer Science</option>
      <option>Mechanical Engineering</option>
      <option>Mechanical Engineering Related Technologies</option>
      <option>Metallurgical Engineering</option>
      <option>Microbiology</option>
      <option>Mining and Mineral Engineering</option>
      <option>Miscellaneous Biology</option>
      <option>Miscellaneous Engineering</option>
      <option>Miscellaneous Engineering Technologies</option>
      <option>Molecular Biology</option>
      <option>Multi-disciplinary or General Science</option>
      <option>Nano-technology</option>
      <option>Naval Architecture and Marine Engineering</option>
      <option>Neuroscience</option>
      <option>Nuclear Engineering</option>
      <option>Nuclear, Industrial Radiology, and Biological Technologies</option>
      <option>Oceanography</option>
      <option>Petroleum Engineering</option>
      <option>Pharmacology</option>
      <option>Physics</option>
      <option>Physiology</option>
      <option>Zoology</option>
      </select>


      <br><br>

      Profession*<br><input type="text" name="profession"><br><br>
      Job Title (if you are employed)<br><input type="text" name="jobtitle"><br><br>
      Job Description (What do you do in your job on a daily basis?, What area do you specialize in? (your area of expertise, etc.)<br><textarea name="jobdescription" rows="5" cols="50"></textarea><br>
      What company do you work for?<br><input type="text" name="company"><br><br>
      Are you currently involved or have you been involved in any projects regarding your profession that you feel might be important for us to know?<br><textarea name="projects" rows="5" cols="50"></textarea><br>
<br>
      How would you like the school or the students to reach out to you? Please provide your contact information. (email address, phone number, etc.)*<br><input type="text" name="contactinfo"><br>
<br>
      Where do you live?*<br>

      <select name="country">
        <option></option>
      	<option>Afghanistan</option>
      	<option>Åland Islands</option>
      	<option>Albania</option>
      	<option>Algeria</option>
      	<option>American Samoa</option>
      	<option>Andorra</option>
      	<option>Angola</option>
      	<option >Anguilla</option>
      	<option >Antarctica</option>
      	<option>Antigua and Barbuda</option>
      	<option>Argentina</option>
      	<option>Armenia</option>
      	<option>Aruba</option>
      	<option>Australia</option>
      	<option>Austria</option>
      	<option>Azerbaijan</option>
      	<option>Bahamas</option>
      	<option>Bahrain</option>
      	<option>Bangladesh</option>
      	<option>Barbados</option>
      	<option>Belarus</option>
      	<option>Belgium</option>
      	<option>Belize</option>
      	<option >Benin</option>
      	<option >Bermuda</option>
      	<option>Bhutan</option>
      	<option>Bolivia, Plurinational State of</option>
      	<option>Bonaire, Sint Eustatius and Saba</option>
      	<option>Bosnia and Herzegovina</option>
      	<option>Botswana</option>
      	<option>Bouvet Island</option>
      	<option>Brazil</option>
      	<option>British Indian Ocean Territory</option>
      	<option>Brunei Darussalam</option>
      	<option>Bulgaria</option>
      	<option>Burkina Faso</option>
      	<option>Burundi</option>
      	<option>Cambodia</option>
      	<option>Cameroon</option>
      	<option>Canada</option>
      	<option>Cape Verde</option>
      	<option>Cayman Islands</option>
      	<option>Central African Republic</option>
      	<option>Chad</option>
      	<option>Chile</option>
      	<option>China</option>
      	<option>Christmas Island</option>
      	<option>Cocos (Keeling) Islands</option>
      	<option>Colombia</option>
      	<option>Comoros</option>
      	<option>Congo</option>
      	<option>Congo, the Democratic Republic of the</option>
      	<option>Cook Islands</option>
      	<option>Costa Rica</option>
      	<option>Côte d'Ivoire</option>
      	<option>Croatia</option>
      	<option>Cuba</option>
      	<option>Curaçao</option>
      	<option>Cyprus</option>
      	<option>Czech Republic</option>
      	<option>Denmark</option>
      	<option>Djibouti</option>
      	<option>Dominica</option>
      	<option>Dominican Republic</option>
      	<option>Ecuador</option>
      	<option>Egypt</option>
      	<option>El Salvador</option>
      	<option>Equatorial Guinea</option>
      	<option>Eritrea</option>
      	<option>Estonia</option>
      	<option>Ethiopia</option>
      	<option>Falkland Islands (Malvinas)</option>
      	<option>Faroe Islands</option>
      	<option>Fiji</option>
      	<option>Finland</option>
      	<option>France</option>
      	<option>French Guiana</option>
      	<option>French Polynesia</option>
      	<option>French Southern Territories</option>
      	<option>Gabon</option>
      	<option>Gambia</option>
      	<option>Georgia</option>
      	<option>Germany</option>
      	<option>Ghana</option>
      	<option>Gibraltar</option>
      	<option>Greece</option>
      	<option>Greenland</option>
      	<option>Grenada</option>
      	<option>Guadeloupe</option>
      	<option>Guam</option>
      	<option>Guatemala</option>
      	<option>Guernsey</option>
      	<option>Guinea</option>
      	<option>Guinea-Bissau</option>
      	<option>Guyana</option>
      	<option>Haiti</option>
      	<option>Heard Island and McDonald Islands</option>
      	<option>Holy See (Vatican City State)</option>
      	<option>Honduras</option>
      	<option>Hong Kong</option>
      	<option>Hungary</option>
      	<option>Iceland</option>
      	<option>India</option>
      	<option>Indonesia</option>
      	<option>Iran, Islamic Republic of</option>
      	<option>Iraq</option>
      	<option>Ireland</option>
      	<option>Isle of Man</option>
      	<option>Israel</option>
      	<option>Italy</option>
      	<option>Jamaica</option>
      	<option>Japan</option>
      	<option>Jersey</option>
      	<option>Jordan</option>
      	<option>Kazakhstan</option>
      	<option>Kenya</option>
      	<option>Kiribati</option>
      	<option>Korea, Democratic People's Republic of</option>
      	<option>Korea, Republic of</option>
      	<option>Kuwait</option>
      	<option>Kyrgyzstan</option>
      	<option>Lao People's Democratic Republic</option>
      	<option>Latvia</option>
      	<option>Lebanon</option>
      	<option>Lesotho</option>
      	<option>Liberia</option>
      	<option>Libya</option>
      	<option>Liechtenstein</option>
      	<option>Lithuania</option>
      	<option>Luxembourg</option>
      	<option>Macao</option>
      	<option>Macedonia, the former Yugoslav Republic of</option>
      	<option>Madagascar</option>
      	<option>Malawi</option>
      	<option>Malaysia</option>
      	<option>Maldives</option>
      	<option>Mali</option>
      	<option>Malta</option>
      	<option>Marshall Islands</option>
      	<option>Martinique</option>
      	<option>Mauritania</option>
      	<option>Mauritius</option>
      	<option>Mayotte</option>
      	<option>Mexico</option>
      	<option>Micronesia, Federated States of</option>
      	<option>Moldova, Republic of</option>
      	<option>Monaco</option>
      	<option>Mongolia</option>
      	<option>Montenegro</option>
      	<option>Montserrat</option>
      	<option>Morocco</option>
      	<option>Mozambique</option>
      	<option>Myanmar</option>
      	<option>Namibia</option>
      	<option>Nauru</option>
      	<option>Nepal</option>
      	<option>Netherlands</option>
      	<option>New Caledonia</option>
      	<option>New Zealand</option>
      	<option>Nicaragua</option>
      	<option>Niger</option>
      	<option>Nigeria</option>
      	<option>Niue</option>
      	<option>Norfolk Island</option>
      	<option>Northern Mariana Islands</option>
      	<option>Norway</option>
      	<option>Oman</option>
      	<option>Pakistan</option>
      	<option>Palau</option>
      	<option>Palestinian Territory, Occupied</option>
      	<option>Panama</option>
      	<option>Papua New Guinea</option>
      	<option>Paraguay</option>
      	<option>Peru</option>
      	<option>Philippines</option>
      	<option>Pitcairn</option>
      	<option>Poland</option>
      	<option>Portugal</option>
      	<option>Puerto Rico</option>
      	<option>Qatar</option>
      	<option>Réunion</option>
      	<option>Romania</option>
      	<option>Russian Federation</option>
      	<option>Rwanda</option>
      	<option>Saint Barthélemy</option>
      	<option>Saint Helena, Ascension and Tristan da Cunha</option>
      	<option>Saint Kitts and Nevis</option>
      	<option>Saint Lucia</option>
      	<option>Saint Martin (French part)</option>
      	<option>Saint Pierre and Miquelon</option>
      	<option>Saint Vincent and the Grenadines</option>
      	<option>Samoa</option>
      	<option>San Marino</option>
      	<option>Sao Tome and Principe</option>
      	<option>Saudi Arabia</option>
      	<option>Senegal</option>
      	<option>Serbia</option>
      	<option>Seychelles</option>
      	<option>Sierra Leone</option>
      	<option>Singapore</option>
      	<option>Sint Maarten (Dutch part)</option>
      	<option>Slovakia</option>
      	<option>Slovenia</option>
      	<option>Solomon Islands</option>
      	<option>Somalia</option>
      	<option>South Africa</option>
      	<option>South Georgia and the South Sandwich Islands</option>
      	<option>South Sudan</option>
      	<option>Spain</option>
      	<option>Sri Lanka</option>
      	<option>Sudan</option>
      	<option>Suriname</option>
      	<option>Svalbard and Jan Mayen</option>
      	<option>Swaziland</option>
      	<option>Sweden</option>
      	<option>Switzerland</option>
      	<option>Syrian Arab Republic</option>
      	<option>Taiwan, Province of China</option>
      	<option>Tajikistan</option>
      	<option>Tanzania, United Republic of</option>
      	<option>Thailand</option>
      	<option>Timor-Leste</option>
      	<option>Togo</option>
      	<option>Tokelau</option>
      	<option>Tonga</option>
      	<option>Trinidad and Tobago</option>
      	<option>Tunisia</option>
      	<option>Turkey</option>
      	<option>Turkmenistan</option>
      	<option>Turks and Caicos Islands</option>
      	<option>Tuvalu</option>
      	<option >Uganda</option>
      	<option>Ukraine</option>
      	<option>United Arab Emirates</option>
      	<option>United Kingdom</option>
      	<option>United States</option>
      	<option>United States Minor Outlying Islands</option>
      	<option>Uruguay</option>
      	<option>Uzbekistan</option>
      	<option>Vanuatu</option>
      	<option>Venezuela, Bolivarian Republic of</option>
      	<option>Viet Nam</option>
      	<option>Virgin Islands, British</option>
      	<option>Virgin Islands, U.S.</option>
      	<option>Wallis and Futuna</option>
      	<option>Western Sahara</option>
      	<option>Yemen</option>
      	<option>Zambia</option>
      	<option>Zimbabwe</option>
      </select>

      <br><br>

      What city?<br><input type="text" name="city"><br><br>

      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit'])) {
          $mysqli = new PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

          if(empty($_POST['fname'])) {echo "<script>alert('first name is missing');</script>";} else {
            $fname = $_POST['fname'];
            if(empty($_POST['lname'])) {echo "<script>alert('last name');</script>";} else {
              $lname = $_POST['lname'];
              if(empty($_POST['yograd'])) {echo "<script>alert('yograd');</script>";} else {
                $yograd = $_POST['yograd'];
                if(empty($_POST['field'])) {echo "<script>alert('field');</script>";} else {
                  $field = $_POST['field'];
                  if(empty($_POST['fostud'])) {echo "<script>alert('fostud');</script>";} else {
                    $fostud = $_POST['fostud'];
                    if(empty($_POST['profession'])) {echo "<script>alert('profession');</script>";} else {
                      $profession = $_POST['profession'];
                      $jobtitle = $_POST['jobtitle'];
                      $jobdescription = $_POST['jobdescription'];
                      $company = $_POST['company'];
                      $projects = $_POST['projects'];
                      if (empty($_POST['contactinfo'])) {echo "<script>alert('continfo');</script>";} else {
                        $contactinfo = $_POST['contactinfo'];
                        if (empty($_POST['country'])) {echo "<script>alert('country');</script>";} else {
                          $country = $_POST['country'];
                          $city = $_POST['city'];

                          $insertgraduate = "INSERT INTO graduates (fname, lname, yograd) VALUES ('$fname', '$lname', $yograd)";
                          if($mysqli->query($insertgraduate) === 1) {
                              echo "done";
                            }

                          $thefield = $mysqli->query("SELECT fields.id AS fieldsid, fostuds.id AS fostudsid, graduates.id AS graduatesid FROM fields, fostuds, graduates
                          WHERE (field = '$field' AND fostud = '$fostud' AND (fname = '$fname' AND lname = '$lname' AND yograd = $yograd))");

                          if ($thefield->rowCount() == 0 ) {
                          echo "No results";
                          } else {
                          while($rows = $thefield->fetch(PDO::FETCH_ASSOC)) {
                            $fieldsid = $rows['fieldsid'];
                            $graduatesid = $rows['graduatesid'];
                            $fostudsid = $rows['fostudsid'];
                              $matchfield = "INSERT INTO gfields (g_id, field_id, fostud_id) VALUES ($graduatesid, $fieldsid, $fostudsid)";
                              if($mysqli->query($matchfield) === 1) {
                                 echo "done";

                               }

                          }  }

                           $selectid = $mysqli->query("SELECT graduates.id AS graduatesid FROM graduates WHERE (fname = '$fname' AND lname = '$lname' AND yograd = $yograd)");

                           if ($selectid->rowCount() == 0 ) {
                           echo "No results";
                           } else {
                           while($rows = $selectid->fetch(PDO::FETCH_ASSOC)) {
                             $graduatesid = $rows['graduatesid'];
                               $insertjobinfo = "INSERT INTO gjobinformation (g_id, profession, jobtitle, jobdescription, company) VALUES ($graduatesid, '$profession', '$jobtitle', '$jobdescription', '$company')";
                               if($mysqli->query($insertjobinfo) === 1) {
                                  echo "done";
                                }
                              $insertcontactinfo = "INSERT INTO gcontactinfo (g_id, contactinfo) VALUES ($graduatesid, '$contactinfo')";
                              if($mysqli->query($insertcontactinfo) === 1) {
                                 echo "done";
                               }
                              $insertproject = "INSERT INTO gprojects (g_id, project) VALUES ($graduatesid, '$projects')";
                              if($mysqli->query($insertproject) === 1) {
                                 echo "done";
                               }

                           }  }

                           $selectcountry = $mysqli->query("SELECT countries.id AS countriesid, graduates.id AS graduatesid FROM countries, graduates
                           WHERE (country = '$country' AND (fname = '$fname' AND lname = '$lname' AND yograd = $yograd))");

                           if ($selectcountry->rowCount() == 0 ) {
                           echo "No results";
                           } else {
                           while($rows = $selectcountry->fetch(PDO::FETCH_ASSOC)) {
                             $countriesid = $rows['countriesid'];
                             $graduatesid = $rows['graduatesid'];
                               $insertlocation = "INSERT INTO glocation (g_id, country_id, city) VALUES ($graduatesid, $countriesid, '$city')";
                               if($mysqli->query($insertlocation) === 1) {
                                  echo "done";

                                }

                           }  }

                        }}}}}}}}


        }





     ?>


  </body>
</html>
