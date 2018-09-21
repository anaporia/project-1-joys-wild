<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Delmas, Steven Antal, Arlensiú Celis">
    <title>WCS-Trainers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php require('header.php'); ?>

<section id="bannerfluid">
    <div class="container-fluid pl-0 pr-0">
        <img class="d-block w-100 pb-3" src="assets/img/high_table.png" alt="Trainers">
    </div>
</section>

<section id="trainers" class="my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 my-3">
                <div class="media flex-column flex-md-row">
                    <img class="backform align-self-center" src="assets/img/hobbit_feet.jpg" alt="formateur1">
                    <img class="frontform align-self-center" src="assets/img/loic.png" alt="egoformateur1">
                    <div class="media-body align-self-center py-3 ml-4 px-8 text-justify">
                        <h5 class="mt-0 mb-3">Loïc Brassart -  Javascript React Trainer </h5>
                        <p> Trainer at the Wild, since September 2018, he trains wilders in Javascript language.<br>
                            With its appearance of Viking or Hard Rock Singer, he has something in common with Frodon...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-10 my-3">
                <div class="media flex-column flex-md-row">
                    <div class="media-body align-self-center py-3 mr-4 px-8 text-justify">
                        <h5 class="mt-0 mb-3">Olivier Trentesaux - Campus Manager </h5>
                        <p>He develops and manages the campus of Lille Wild Code School<br>
                            His missions:<br>
                            Creation and development of business partnerships.<br>
                            Relationship Management with School Customers.<br>
                            Recruitment, coaching and coaching of students towards employment.<br>
                            As you can see,all these responsibilities lead to some drifts ....
                        </p>
                    </div>
                    <img class="backform align-self-center" src="assets/img/olivier_cover.jpg" alt="formateur1">
                    <img class="frontform align-self-center" src="assets/img/olivier.png" alt="egoformateur1">
                </div>
            </div>
            <div class="col-10 my-3">
                <div class="media flex-column flex-md-row">
                    <img class="backform align-self-center" src="assets/img/gaetan_cover.jpg" alt="formateur1">
                    <img class="frontform align-self-center" src="assets/img/gaetan.png" alt="egoformateur1">
                    <div class="media-body align-self-center py-3 ml-4 px-8 text-justify">
                        <h5 class="mt-0 mb-3">Gaëtan Rolé-Dubruille as Mister <i>Many to one</i>  - Php Trainer</h5>
                        <p> He trains wilders to new technologies and their operations.<br>
                            He joined the WildCodeSchool as LeadDev Full Stack for the purpose of leading client projects while training young web developers.<br>
                            Gaetan is always ready for new challenges........
                        </p>
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
