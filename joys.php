<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <title>WCS-Les Joies de la Wild</title>
</head>

<body>
<?php require('header.php'); ?>

<section>
    <div class="container-fluid">
        <div id="joysCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000" data-wrap="true">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="first slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#joysCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#joysCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h5>Joyces of the Wild</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid d-flex justify-content-around">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/10DjIRoAfylalG/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Quand un wilder réussit une quête.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/9kKlRx7qpUGze/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Quand je supprime une ligne de code que je pensais inutile et que tout plante.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/HZpCCbcWc0a3u/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">PHP VERSUS JS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid d-flex justify-content-around">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/orNv7BpL7Y2iI/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Quand une équipe de wilder attaque un projet.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/h41bl4ZNk276w/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Quand il faut finir ses quêtes à temps (et qu'il en reste la moitié bien évidemment).</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/1Xn0wUBoeOtRC/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Le dojo du mardi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('footer.php'); ?>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Old script (popper) that did not appear in the new documentation that I just put here between-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>