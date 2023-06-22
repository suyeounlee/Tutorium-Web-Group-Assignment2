<!-- index.html by Su Yeoun and Mathunan-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Tutorium</title>
</head>

<body>

    <?php include("header.php"); ?>

    <!-- Main page image add -->
    <div class="headerimg">
        <img src="Photos/Ban.jpg" alt="mainImage">
    </div>

    <!-- 3 flexboxes for with images -->
    <div class="flexbox-container">
        <div class="flexbox-item-1">
            <img src="Photos/inperson.jpg">
            <p>In-Person Tutoring</p>
        </div>
        <div class="flexbox-item-2">
            <img src="./Photos/onlinetutoring.jpg">
            <p>Online Tutoring</p>
        </div>
        <div class="flexbox-item-3">
            <img src="./Photos/studygroup.jpg">
            <p>Study Group</p>
        </div>
    </div>

    <!-- SiteMap show/ hide button  -->
    <div id="div_button-hide_Site_Map">
        <input type="button" value="Hide Sitemap" id="site">
    </div>

    <!-- for Sitemap display  -->
    <div class="flexbox-container-siteMap">
        <div class="flexbox-siteMap1">
            <strong><a href=/group/aboutUs.php>About us</a></strong> <br>
            <a href=/group/location.php>Location</a> 
        </div>
        <div class="flexbox-siteMap2">
            <strong><a href=/group/subject.php> Subject </a></strong> <br>
        </div>
        <div class="flexbox-siteMap3">
            <strong> <a href=/group/findTutors.html>Find Tutors </a> </strong> <br>
        </div>
        <div class="flexbox-siteMap4">
            <strong> <a href=/group/contact.html> Contact</a></strong> <br>
            <a href=/group/q&a.php>Q&A</a> 
        </div>
    </div>

    <!-- footer with tutorium company information -->
    <?php include("footer.php"); ?>