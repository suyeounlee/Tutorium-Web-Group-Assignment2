<!-- subject.html by Mathunan -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subjects</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/subject.css">
    <script src="js/subject.js" defer></script>
</head>

<body>
    <?php include("header.php"); ?>

    <h2>Courses</h2>

    <!-- buttons for filter -->
    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('language')"> Language</button>
        <button class="btn" onclick="filterSelection('appilication')"> Appilication</button>
        <button class="btn" onclick="filterSelection('software')"> Software</button>
    </div>


    <!-- 15 courses information for filter -->
    <div class="container">

        <div class="box language">
            <div class="imgbox gridItem3">
                <img src="Photos/php.jpg" alt="PhP"><br>
            </div>
            <div class="content c3">
                <div>
                    <h4>PhP full course</h4>
                    <p>CST8101</p>
                    <p>Basics of PhP</p>
                </div>
            </div>
        </div>

        <div class="box language">
            <div class="imgbox gridItem5">
                <img src="/Photos/java.jpg" alt="Java"><br>
            </div>
            <div class="content c5">
                <div>
                    <h4>Java full course</h4>
                    <p>ENL1813T </p>
                    <p>Basic Java skills</p>
                </div>
            </div>
        </div>
        <div class="box appilication">
            <div class="imgbox gridItem1">
                <img src="/Photos/oracle.jpg" alt="Oracle"><br>
            </div>
            <div class="content c1">
                <div>
                    <h4>Oracle database full course</h4>
                    <p>CST8116 </p>
                    <p>Database Course</p>
                </div>
            </div>
        </div>

        <div class="box language">
            <div class="imgbox gridItem3">
                <img src="/Photos/sql.jpg" alt="SQL"><br>
            </div>
            <div class="content c3">
                <div>
                    <h4>SQL full course</h4>
                    <p>CST8101 </p>
                    <p>Basics of SQL</p>
                </div>
            </div>
        </div>

        <div class="box language">
            <div class="imgbox gridItem5">
                <img src="/Photos/python.jpg" alt="Python"><br>
            </div>
            <div class="content c5">
                <div>
                    <h4>Python full course</h4>
                    <p>ENL1813T </p>
                    <p>Basic Python skills</p>
                </div>
            </div>
        </div>
        <div class="box software">
            <div class="imgbox gridItem1">
                <img src="/Photos/linux.jpg" alt="Linux"><br>
            </div>
            <div class="content c1">
                <div>
                    <h4>Linux full course</h4>
                    <p>CST8116 </p>
                    <p>Basic Linux </p>
                </div>
            </div>
        </div>
        <div class="box software">
            <div class="imgbox gridItem2">
                <img src="/Photos/essi.jpg" alt="Essential"><br>
            </div>
            <div class="content c2">
                <div>
                    <h4>Computer Essentials full course</h4>
                    <p>CST8215 </p>
                    <p>Basic Software</p>
                </div>
            </div>
        </div>

        <div class="box appilication">
            <div class="imgbox gridItem5">
                <img src="/Photos/mysql.jpg" alt="MySQL"><br>
            </div>
            <div class="content c5">
                <div>
                    <h4>MySQL full course</h4>
                    <p>ENL1813T </p>
                    <p>DB skills</p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer with tutorium company information -->
    <?php include("footer.php"); ?>