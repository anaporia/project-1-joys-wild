<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Delmas, Steven Antal, Arlensiú Celis">
    <title>WCS-The Joys of the Wild</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/faviconwild.png">
</head>

<body>
<?php require('header.php'); ?>

<section>
    <div class="container justify-content-around">
        <div class="row">
            <div class="offset-1 col-10 mt-4">
                <img class="d-block w-100 img-fluid img-responsive" src="assets/img/group.jpg" alt="group photo">
            </div>
        </div>
    </div>
</section>


<section id="joys-text" class="my-5">
    <div class="container">
        <div class="row">
            <div class="offset-1 col-10 text-center">
                <h2>Joys of the Wild</h2>
                <p> Undertaking training at the Wild Code School is a rewarding time for every wilder where you learn community life, teamwork and help each other.<br>
                    But it is also a period of stress, fight to death during the dojos ....<br>
                    Discover below all the new expressions that you will learn from the beginning of your training:
                </p>
            </div>
        </div>
    </div>
</section>

<!--section gifs-->
<section id="joys-card" class="my-5">
    <div class="container-fluid d-flex justify-content-around">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/10DjIRoAfylalG/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When a wilder succeeds a quest.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/9kKlRx7qpUGze/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When I delete a line of code that I thought was useless and that everything crashes.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/HZpCCbcWc0a3u/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">PHP VERSUS JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-around my-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/orNv7BpL7Y2iI/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When a wilder team attacks a project.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/h41bl4ZNk276w/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When you have to finish your quests in time (and half of it remains of course).</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://media.giphy.com/media/1Xn0wUBoeOtRC/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Tuesday's dojo.</p>
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
