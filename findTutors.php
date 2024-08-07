<!-- findTutors.html by Su Yeoun -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/findTutor.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> -->
    <script src="js/findTutor.js" defer></script>

    <style>
        #searchDiv {
            padding-top: 70px;
        }
        #findOption {
            height: 25px;
            width: 80px;
        }
        #searchBox {
            height: 20px;
            width: 170px;
        }
    </style>

    <title>Tutorium</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="input-group mb-3 w-50" class="search" id="searchDiv">
        <select id="findOption" onchange="getSelectValue();">
            <option class="option" value="name">Name</option>
            <option class="option" value="subject">Subject</option>
        </select>

        <input type="text" id="searchBox" placeholder="Search...">
        <!-- <button id="searchButton" class="btn btn-primary btn-md"><i class="bi bi-search"></i></button> -->
    </div>

    <!-- flexboxes with tutor's information (image, name, subjeect) -->
    <div class="flexbox-container-tutor">
        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Suyeon Lee</h3>
            <p class="subject" value="Java">Subject: Java</p>
            <p>Location: Nepean</p>
            <p>Email: lee00824@algonquin.com</p>
        </div>

        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Abul Qasim</h3>
            <p class="subject">Subject: Javascript</p>
            <p>Location: Algonquin</p>
            <p>Email: abulqasim@algonquin.com</p>
        </div>

        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Juho Lee</h3>
            <p class="subject">Subject: PHP</p>
            <p>Location: Barheven</p>
            <p>Email: lee00823@algonquin.com</p>
        </div>

        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Mathunan Vasanthan</h3>
            <p class="subject">Subject: Linux</p>
            <p>Location: Gatineau</p>
            <p>Email: vasa0007@algonquin.com</p>
        </div>

        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Leonardo Villalobos</h3>
            <p class="subject">Subject: Database</p>
            <p>Location: Orleans</p>
            <p>Email: danielcol@algonquin.com</p>
        </div>

        <div class="tutorBox">
            <img src="Photos/essi.jpg">
            <h3>Sandra Hernan</h3>
            <p class="subject">Subject: HTML, CSS</p>
            <p>Location: Kanata</p>
            <p>Email: sandra@algonquin.com</p>
        </div>
    </div>

    <!-- footer with tutorium company information -->
    <footer>
        <div class="footer-content">
            <h3>Tutorium</h3>
            <p>Tutorium | 1385 Woodroffe Ave, Nepean, ON <br>
                CST8285-Web-Programming Group Assignment (Algonquin College) <br>
            </p>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2022 Copyright. design by<span> Juho | Leonardo | Mathunan | Su Yeoun </span><br>
            </p>
        </div>
    </footer>

</body>
</html>