<!-- location.html by Juho -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/location.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>location</title>
</head>

<body>
    <?php include("header.php"); ?>

    <!-- location section with google map-->
    <div id="background">
        <h1>Location</h1>
        <hr>
        <div id="ottawa">
            <p id="head">Ottawa Campus</p>
            <div id="para">
                <p>1385 Woodroffe Avenue
                    <br>
                    Ottawa, Ontario
                    <br>
                    Canada
                    <br>
                    K2G 1V8
                    <br>
                    Phone number:(613) 727-4723 ext 5482
                </p>
            </div>
        </div>
        <div>
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1401.995761264739!2d-75.75836344182947!3d45.348983394774926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0718cc4a6ad7%3A0xc6cc467725843e2b!2sAlgonquin%20College%20Ottawa%20Campus!5e0!3m2!1sen!2sca!4v1669494055648!5m2!1sen!2sca" width="550" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- footer with tutorium company information -->
    <?php include("footer.php"); ?>