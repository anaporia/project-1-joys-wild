<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Delmas, Steven Antal, Arlensiú Celis">
    <title>WCS - Students</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/faviconwild.png">
</head>

<body>
<?php require('header.php'); ?>

<section id="students" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Students</h1>
                <p>You want to become a future Wilders? Look the différents qualities that you must have!!</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-sm-6 col-9">
                <div class="card my-4">
                    <img class="card-img-top back" src="assets/img/ready2.jpg" alt="characteristic1">
                    <div class="card-img-overlay">
                        <img class="card-img-top front" src="assets/img/ready.png" alt="characteristic1top">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-9">
                <div class="card my-4">
                    <img class="card-img-top back" src="assets/img/autonomous2.jpg" alt="characteristic1">
                    <div class="card-img-overlay">
                        <img class="card-img-top front" src="assets/img/autonomous.png" alt="characteristic1top">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-9">
                <div class="card my-4">
                    <img class="card-img-top back" src="assets/img/resourceful2.jpeg" alt="characteristic1">
                    <div class="card-img-overlay">
                        <img class="card-img-top front" src="assets/img/resourceful.png" alt="characteristic1top">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-9">
                <div class="card my-4">
                    <img class="card-img-top back" src="assets/img/team2.jpg" alt="characteristic1">
                    <div class="card-img-overlay">
                        <img class="card-img-top front" src="assets/img/team.png" alt="characteristic1top">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-9">
                <div class="card my-4">
                    <img class="card-img-top back" src="assets/img/enthusiastic2.jpg" alt="characteristic1">
                    <div class="card-img-overlay">
                        <img class="card-img-top front" src="assets/img/enthusiastic.png" alt="characteristic1top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require('footer.php'); ?>

<script src="assets/js/jquery-3.3.1.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>