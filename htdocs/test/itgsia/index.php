<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for Graduate</title>
    <style>
      body {
        background-color: #F8F9FA;
      }
      img {
        position: absolute;
        width: 21vw;
        height: auto;
        left: 39.5vw;
        top: 4.5vw;
      }
      p {
        position: relative;
        color: #20519D;
        margin-top: 18vw;
        font-size: 4vw;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }
      #form1 #search {
        position: absolute;
        top: 25vw;
        left: 29vw;
        box-sizing: border-box;
        border: 2px solid #E5E5E5;
        border-radius: 25px;
        font-size: 1.2vw;
        background-color: #FAFBFC;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        width: 42vw;
        height: 3.2vw;
        visibility: visible;
        color: #222831;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }
      #form1 #search:hover {
        border: 2px solid #D1D1D1;
      }
      #advsearch {
        position: absolute;
        top: 30vw;
        width: 11vw;
        height: 2.3vw;
        left: 44.5vw;
        background-color: #FF0000;
        border: 0.3vw solid #FF0000;
        border-radius: 1vw;
        color: #FEFCFA;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        font-size: 1vw;

      }

       #goback {
         position: absolute;
         top: 18vw;
         width: 13vw;
         height: 2.3vw;
         left: 43.5vw;
         background-color: #FF0000;
         border: 0.3vw solid #FF0000;
         border-radius: 1vw;
         color: #FEFCFA;
         font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         font-size: 1vw;
         visibility: hidden;
      }

      #goback span {
        font-size: 1.2vw;
      }


     #searchforgraduate {
        position: absolute;
        top: 23vw;
        left: 30vw;
        width: 40vw;
        height: 3vw;
        border: 0.3vw solid #E5E5E5;
        border-bottom: none;
        visibility: hidden;
        background-color: #004F8E;
        color: #FEFCFA;
        font-size: 1.2vw;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }
      #searchforgraduate:hover {
        background-color: #5989BA;
        cursor: pointer;
        color: #FFA030;
      }
      #searchforfield{
         position: absolute;
         top: 26vw;
         left: 30vw;
         width: 40vw;
         height: 3vw;
         border: 0.3vw solid #E5E5E5;
         border-bottom: none;
         visibility: hidden;
         background-color: #004F8E;
         color: #FEFCFA;
         font-size: 1.2vw;
         font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
       }
       #searchforfield:hover {
         background-color: #5989BA;
         cursor: pointer;
         color: #FFA030;
       }
       #searchforjob {
          position: absolute;
          top: 29vw;
          left: 30vw;
          width: 40vw;
          height: 3vw;
          border: 0.3vw solid #E5E5E5;
          border-bottom: none;
          visibility: hidden;
          background-color: #004F8E;
          color: #FEFCFA;
          font-size: 1.2vw;
          font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        #searchforjob:hover {
          background-color: #5989BA;
          cursor: pointer;
          color: #FFA030;
        }
        #searchforlocation {
           position: absolute;
           top: 32vw;
           left: 30vw;
           width: 40vw;
           height: 3vw;
           border: 0.3vw solid #E5E5E5;
           visibility: hidden;
           background-color: #004F8E;
           color: #FEFCFA;
           font-size: 1.2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         }
         #searchforlocation:hover {
           background-color: #5989BA;
           cursor: pointer;
           color: #FFA030;
         }
         #graduatesearch {
           visibility: hidden;
         }
         #fieldsearch {
           visibility: hidden;
         }
         #jobsearch {
           visibility: hidden;
         }
         #locationsearch {
           visibility: hidden;
         }
         #graduatesearch #fname {
           position: absolute;
           top: 25vw;
           left: 34vw;
           height: 1.8vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #graduatesearch #fname:hover {
           border-color: #FF0000;
         }
         #graduatesearch #lname {
           position: absolute;
           top: 25vw;
           left: 52vw;
           height: 1.8vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #graduatesearch #lname:hover {
           border-color: #FF0000;
         }
         #graduatesearch #submit {
           position: absolute;
           top: 30vw;
           left: 46vw;
           width: 8vw;
           height: 1.8vw;
           background: #8C8C8C;;
           border: 0.3vw solid #8C8C8C;;
           border-radius: 0.5vw;
           color: #FEFCFA;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         }
         #graduatesearch #submit:hover {
           background-color: #D1D1D1;
           border-color: #D1D1D1;
           cursor: pointer;
         }
         #fieldsearch #field {
           position: absolute;
           top: 26vw;
           left: 34vw;
           height: 2.2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #fieldsearch #field:hover {
           border-color: #FF0000;
         }
         #fieldsearch #fostud {
           position: absolute;
           top: 26vw;
           left: 52vw;
           height: 2.2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #fieldsearch #fostud:hover {
           border-color: #FF0000;
         }
         #choosefield {
           position: absolute;
           top: 24vw;
           left: 34vw;
           font-size: 1.2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           color: #222831;
         }
         #choosefostud {
           position: absolute;
           top: 24vw;
           left: 52vw;
           font-size: 1.2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           color: #222831;
         }
         #fieldsearch #submit {
           position: absolute;
           top: 31vw;
           left: 46vw;
           width: 8vw;
           height: 1.8vw;
           background: #8C8C8C;;
           border: 0.3vw solid #8C8C8C;;
           border-radius: 0.5vw;
           color: #FEFCFA;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         }
         #fieldsearch #submit:hover {
           background-color: #D1D1D1;
           border-color: #D1D1D1;
           cursor: pointer;
         }
         #jobsearch #profession {
           position: absolute;
           top: 25vw;
           left: 25vw;
           height: 2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #jobsearch #profession:hover {
           border-color: #FF0000;
         }
         #jobsearch #jobtitle {
           position: absolute;
           top: 25vw;
           left: 43vw;
           height: 2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #jobsearch #jobtitle:hover {
           border-color: #FF0000;
         }
         #jobsearch #company {
           position: absolute;
           top: 25vw;
           left: 61vw;
           height: 2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #jobsearch #company:hover {
           border-color: #FF0000;
         }
         #jobsearch #submit {
           position: absolute;
           top: 30vw;
           left: 46vw;
           width: 8vw;
           height: 1.8vw;
           background: #8C8C8C;;
           border: 0.3vw solid #8C8C8C;;
           border-radius: 0.5vw;
           color: #FEFCFA;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         }
         #jobsearch #submit:hover {
           background-color: #D1D1D1;
           border-color: #D1D1D1;
           cursor: pointer;
         }
         #locationsearch #city {
           position: absolute;
           top: 26vw;
           left: 34vw;
           height: 2vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #locationsearch #city:hover {
           border-color: #FF0000;
         }
         #locationsearch #country {
           position: absolute;
           top: 26vw;
           left: 52vw;
           height: 2.3vw;
           width: 14vw;
           border-radius: 1.8vw;
           border: 0.25vw solid #004F8E;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           background-color:  #FAFBFC;
           color: #222831;
           text-align: center;
         }
         #locationsearch #country:hover {
           border-color: #FF0000;
         }
        #locationsearch #submit {
           position: absolute;
           top: 30vw;
           left: 46vw;
           width: 8vw;
           height: 1.8vw;
           background: #8C8C8C;;
           border: 0.3vw solid #8C8C8C;;
           border-radius: 0.5vw;
           color: #FEFCFA;
           font-size: 1vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         }
         #locationsearch #submit:hover {
           background-color: #D1D1D1;
           border-color: #D1D1D1;
           cursor: pointer;
         }
         #typecity {
           position: absolute;
           top: 24vw;
           left: 34vw;
           font-size: 1.2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           color: #222831;
         }
         #choosecountry {
           position: absolute;
           top: 24vw;
           left: 52vw;
           font-size: 1.2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           color: #222831;
         }
         p1 {
           position: absolute;
           font-size: 2vw;
           font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
           color: #222831;
         }
    </style>
  </head>
  <body>

    <script>
    function advancedSearchFuntion() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "visible";
    document.getElementById("searchforgraduate").style.visibility = "visible";
    document.getElementById("searchforfield").style.visibility = "visible";
    document.getElementById("searchforjob").style.visibility = "visible";
    document.getElementById("searchforlocation").style.visibility = "visible";
    }

    function gobackFunction() {
    document.getElementById("search").style.visibility = "visible";
    document.getElementById("advsearch").style.visibility = "visible";
    document.getElementById("paragraph").style.visibility = "visible";
    document.getElementById("goback").style.visibility = "hidden";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("graduatesearch").style.visibility = "hidden";
    document.getElementById("fieldsearch").style.visibility = "hidden";
    document.getElementById("jobsearch").style.visibility = "hidden";
    document.getElementById("locationsearch").style.visibility = "hidden";

    }
    function graduateSearchFunction() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "visible";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("graduatesearch").style.visibility = "visible";
    }
    function fieldSearchFunction() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "visible";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("fieldsearch").style.visibility = "visible";
    }
    function jobSearchFunction() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "visible";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("jobsearch").style.visibility = "visible";
    }
    function locationSearchFunction() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "visible";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("locationsearch").style.visibility = "visible";
    }
    function newFunction() {
    document.getElementById("search").style.visibility = "hidden";
    document.getElementById("advsearch").style.visibility = "hidden";
    document.getElementById("paragraph").style.visibility = "hidden";
    document.getElementById("goback").style.visibility = "hidden";
    document.getElementById("searchforgraduate").style.visibility = "hidden";
    document.getElementById("searchforfield").style.visibility = "hidden";
    document.getElementById("searchforjob").style.visibility = "hidden";
    document.getElementById("searchforlocation").style.visibility = "hidden";
    document.getElementById("graduatesearch").style.visibility = "hidden";
    document.getElementById("resultsdisplay").style.visibility = "visible";

    }

    </script>

    <img src="acilogotrnsp.png"/>
    <center><p id="paragraph"><b>Search for Graduate</b></p></center>

    <form id="form1" action="index.php" method="post">
      <input id="search" type="text" name="search" placeholder="Search..."/>
    </form>

    <form action="index.php" method="post">
      <button id="advsearch" type="button" name="advsearch" onclick="advancedSearchFuntion()">Advanced Search</button>
    </form>


      <form action="index.php" method="post">
        <button type="button" id="goback" onclick="gobackFunction()"> <span>&larr;</span> Go back to Search</button>
      </form>


        <div id="graduate">
          <button type="button" id="searchforgraduate" onclick="graduateSearchFunction()">Search for Graduates</button>
        </div>

        <div id="field">
            <button type="button" id="searchforfield" onclick="fieldSearchFunction()">Search for Fields</button>
        </div>

        <div id="job">
            <button type="button" id="searchforjob" onclick="jobSearchFunction()">Search for Jobs</button>
        </div>

        <div id="location">
            <button type="button" id="searchforlocation" onclick="locationSearchFunction()">Search for Locations</button>
        </div>

      <div id="graduatesearch">
        <form action="index.php" method="post">
          <input id="fname" type="text" name="firstname" placeholder="First name...">
          <input id="lname" type="text" name="lastname" placeholder="Last name...">
          <input id="submit" type="submit" name="submitgraduate">
        </form>
      </div>

      <div id="fieldsearch">
        <form action="index.php" method="post">
          <span id="choosefield">Field:</span>
          <select id="field" name="field">
            <option></option>
            <option>Technology</option>
            <option>Science</option>
            <option>Engineering</option>
          </select> <br>
          <span id="choosefostud">Field of study:</span>
          <select id="fostud" name="fostud">
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
          <input id="submit" type="submit" name="submitfield">
        </form>
      </div>

      <div id="jobsearch">
        <form action="index.php" method="post">
          <input id="profession" type="text" name="profession" placeholder="Profession...">
          <input id="jobtitle" type="text" name="jobtitle" placeholder="Job title...">
          <input id="company" type="text" name="company" placeholder="Company...">
          <input id="submit" type="submit" name="submitjob">
        </form>
      </div>

      <div id="locationsearch">
        <form action="index.php" method="post">
          <span id="typecity">City:</span>
          <input id="city" type="text" name="city">
          <span id="choosecountry">Country:</span>
          <select id="country" name="country">
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
          	<option>Benin</option>
          	<option>Bermuda</option>
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
          	<option>Uganda</option>
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
          <input id="submit" type="submit" name="submitlocation">
        </form>
      </div>

    <?php

    if (isset($_POST['search'])) {

      echo "<script>newFunction();</script>";

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $search = $_POST['search'];
      $resultSet = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city
        FROM graduateview WHERE (fname LIKE '%$search%' or lname LIKE '%$search%')");

      if ($search == null or $resultSet->rowCount() == 0) {
        echo "<p1>No results</p1>";
      } else {
        while ($rows = $resultSet->fetch(PDO::FETCH_ASSOC)) {
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


          echo "<br><div id=\"resultsdisplay\">
          <table style=\"text-align: left; border: 2px solid #004F8E; padding: 1vw; margin: auto;\">
            <tr>
              <th>First Name:</th>
              <td>$fname</td>
            </tr>
            <tr>
              <th>Last Name:</th>
              <td>$lname</td>
            </tr>
            <tr>
              <th>Year of Graduation:</th>
              <td>$yograd</td>
            </tr>
            <tr>
              <th>Field:</th>
              <td>$field</td>
            </tr>
            <tr>
              <th>Field of Study:</th>
              <td>$fostud</td>
            </tr>
            <tr>
              <th>Profession:</th>
              <td>$profession</td>
            </tr>
            <tr>
              <th>Job Title:</th>
              <td>$jobtitle</td>
            </tr>
            <tr>
              <th>Job Description:</th>
              <td>$jobdescription</td>
            </tr>
            <tr>
              <th>Company:</th>
              <td>$company</td>
            </tr>
            <tr>
              <th>Projects:</th>
              <td>$project</td>
            </tr>
            <tr>
              <th>Location:</th>
              <td>$city, $country</td>
            </tr>

          </table>
          </div><br>";
        }
      }
        echo "<script>newFunction();</script>";

    }

    if (isset($_POST['submitgraduate'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $searchresults = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city
        FROM graduateview WHERE (fname LIKE '%$firstname%' and lname LIKE '%$lastname%')");
      if (($firstname == null and $lastname == null) or $searchresults->rowCount() == 0) {
        echo "<p1>No results</p1>";
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


          echo "<br><div id=\"resultsdisplay\">

          <table style=\"text-align: left; border: 2px solid #004F8E; padding: 1vw;  margin: auto;\">
            <tr>
              <th>First Name:</th>
              <td>$fname</td>
            </tr>
            <tr>
              <th>Last Name:</th>
              <td>$lname</td>
            </tr>
            <tr>
              <th>Year of Graduation:</th>
              <td>$yograd</td>
            </tr>
            <tr>
              <th>Field:</th>
              <td>$field</td>
            </tr>
            <tr>
              <th>Field of Study:</th>
              <td>$fostud</td>
            </tr>
            <tr>
              <th>Profession:</th>
              <td>$profession</td>
            </tr>
            <tr>
              <th>Job Title:</th>
              <td>$jobtitle</td>
            </tr>
            <tr>
              <th>Job Description:</th>
              <td>$jobdescription</td>
            </tr>
            <tr>
              <th>Company:</th>
              <td>$company</td>
            </tr>
            <tr>
              <th>Projects:</th>
              <td>$project</td>
            </tr>
            <tr>
              <th>Location:</th>
              <td>$city, $country</td>
            </tr>

          </table>


          </div><br>";
        }
      }
echo "<script>newFunction();</script>";

    }
    if (isset($_POST['submitfield'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $field = $_POST['field'];
      $fostud =  $_POST['fostud'];
      $searchresults = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city
        FROM graduateview WHERE (field LIKE '%$field%' and fostud LIKE '%$fostud%')");
      if (($field == null and $fostud == null ) or $searchresults->rowCount() == 0) {
        echo "<p1>No results</p1>";
      }
      else {
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


          echo "<br><div id=\"resultsdisplay\">

          <table style=\"text-align: left; border: 2px solid #004F8E; padding: 1vw;  margin: auto;\">
            <tr>
              <th>First Name:</th>
              <td>$fname</td>
            </tr>
            <tr>
              <th>Last Name:</th>
              <td>$lname</td>
            </tr>
            <tr>
              <th>Year of Graduation:</th>
              <td>$yograd</td>
            </tr>
            <tr>
              <th>Field:</th>
              <td>$field</td>
            </tr>
            <tr>
              <th>Field of Study:</th>
              <td>$fostud</td>
            </tr>
            <tr>
              <th>Profession:</th>
              <td>$profession</td>
            </tr>
            <tr>
              <th>Job Title:</th>
              <td>$jobtitle</td>
            </tr>
            <tr>
              <th>Job Description:</th>
              <td>$jobdescription</td>
            </tr>
            <tr>
              <th>Company:</th>
              <td>$company</td>
            </tr>
            <tr>
              <th>Projects:</th>
              <td>$project</td>
            </tr>
            <tr>
              <th>Location:</th>
              <td>$city, $country</td>
            </tr>

          </table>


          </div><br>";
        }
      }
    echo "<script>newFunction();</script>";

    }
    if (isset($_POST['submitjob'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $profession = $_POST['profession'];
      $jobtitle = $_POST['jobtitle'];
      $company = $_POST['company'];
      $searchresults = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city
        FROM graduateview WHERE (profession LIKE '%$profession%' and jobtitle LIKE '%$jobtitle%' and company LIKE '%$company%')");
      if (($profession == null and $jobtitle== null and $company == null) or $searchresults->rowCount() == 0) {
        echo "<p1>No results</p1>";
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


          echo "<br><div id=\"resultsdisplay\">

          <table style=\"text-align: left; border: 2px solid #004F8E; padding: 1vw;  margin: auto;\">
            <tr>
              <th>First Name:</th>
              <td>$fname</td>
            </tr>
            <tr>
              <th>Last Name:</th>
              <td>$lname</td>
            </tr>
            <tr>
              <th>Year of Graduation:</th>
              <td>$yograd</td>
            </tr>
            <tr>
              <th>Field:</th>
              <td>$field</td>
            </tr>
            <tr>
              <th>Field of Study:</th>
              <td>$fostud</td>
            </tr>
            <tr>
              <th>Profession:</th>
              <td>$profession</td>
            </tr>
            <tr>
              <th>Job Title:</th>
              <td>$jobtitle</td>
            </tr>
            <tr>
              <th>Job Description:</th>
              <td>$jobdescription</td>
            </tr>
            <tr>
              <th>Company:</th>
              <td>$company</td>
            </tr>
            <tr>
              <th>Projects:</th>
              <td>$project</td>
            </tr>
            <tr>
              <th>Location:</th>
              <td>$city, $country</td>
            </tr>

          </table>


          </div><br>";
        }
      }
    echo "<script>newFunction();</script>";

    }
    if (isset($_POST['submitlocation'])) {

      $mysqli = NEW PDO ('mysql:host=localhost;dbname=itgsia;charset=utf8mb4', 'root', '');

      $city = $_POST['city'];
      $country = $_POST['country'];
      $searchresults = $mysqli->query("SELECT fname AS fname, lname AS lname, yograd AS yograd, field AS field, fostud AS fostud,
        profession AS profession, jobtitle AS jobtitle, jobdescription AS jobdescription, company AS company, project AS project,
        country AS country, city AS city
        FROM graduateview WHERE (city LIKE '%$city%' and country LIKE '%$country%')");
      if (($city == null and $country == null) or $searchresults->rowCount() == 0) {
        echo "<p1>No results</p1>";
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


          echo "<br><div id=\"resultsdisplay\">

          <table style=\"text-align: left; border: 2px solid #004F8E; padding: 1vw;  margin: auto;\">
            <tr>
              <th>First Name:</th>
              <td>$fname</td>
            </tr>
            <tr>
              <th>Last Name:</th>
              <td>$lname</td>
            </tr>
            <tr>
              <th>Year of Graduation:</th>
              <td>$yograd</td>
            </tr>
            <tr>
              <th>Field:</th>
              <td>$field</td>
            </tr>
            <tr>
              <th>Field of Study:</th>
              <td>$fostud</td>
            </tr>
            <tr>
              <th>Profession:</th>
              <td>$profession</td>
            </tr>
            <tr>
              <th>Job Title:</th>
              <td>$jobtitle</td>
            </tr>
            <tr>
              <th>Job Description:</th>
              <td>$jobdescription</td>
            </tr>
            <tr>
              <th>Company:</th>
              <td>$company</td>
            </tr>
            <tr>
              <th>Projects:</th>
              <td>$project</td>
            </tr>
            <tr>
              <th>Location:</th>
              <td>$city, $country</td>
            </tr>

          </table>


          </div><br>";
        }
      }
    echo "<script>newFunction();</script>";

    }
     ?>



  </body>
</html>
