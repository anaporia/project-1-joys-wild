<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Dulmas, Steven Antal, Arlensiú Celis">
    <title>WCS-Euratechnologie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
</head>

<body>
<?php require('header.php'); ?>

<section id="euratechCarousel">
    <div class="container-fluid ml-0 mr-0 pl-0 pr-0">
        <!-- carousel images -->
        <div  class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#euratechCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#euratechCarousel" data-slide-to="1"></li>
                <li data-target="#euratechCarousel" data-slide-to="2"></li>
            </ol>
            <!-- The slideshow -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid img-responsive" src="img/euratech_banner.jpg" alt="first slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="img/euratech_futur.jpg" alt="second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="img/euratech_futur2.jpg" alt="third slide">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#euratechCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#euratechCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- carousel chiffres clé-->
        <div id="keyFiguresSlider" class="container mt-5">
            <div class="slider">
                <h3 class="keyFigures">wow really?!</h3>
                <h3 class="keyFigures">I didn't know that!</h3>
                <h3 class="keyFigures">You learn something new every day</h3>
                <h3 class="keyFigures">This is the best key figure yet</h3>
                <h3 class="keyFigures">good one. I wonder what's next</h3>
                <h3 class="keyFigures">crazy figures !</h3>
            </div>
        </div>
    </div>
</section>

<!--section plan+texte-->
<hr>

<section id="euratech-text" class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-11">
                <div class="media">
                    <img class="align-self-start mr-5" src="https://via.placeholder.com/350x150" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Euratechnologies</h3>
                        <p>The Blan-Lafont building, the heart of the EuraTechnologies cluster, is the result of the exemplary rehabilitation of two former Lafont and Le Blan textile factories built respectively in 1896 and 1900. In 1989, following the general crisis in the cotton industry, and after having been one of the 7 largest cotton mills in France with nearly 2500 employees, the factory Blan-Lafont filed for bankruptcy. In 1996, the Urban Community of Lille opted for a conversion project: EuraTechnologies, economic center of excellence dedicated to ICT, inaugurated on March 26, 2009.</p>
                        <p>EuraTechnologies has become the leading incubator and accelerator in France, the center of excellence and innovation located in Lille on 80,000 m². EuraTechnologies supports the development of all digital entrepreneurs through unique methodology and know-how in business support, from seed to international deployment. Born in 2009, EuraTechnologies is ranked in the top 3 accelerators in Europe. Precursor of French Tech and spearhead of the digital economy in France.</p>
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
<script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
<script src="js/slider.js"></script>
</body>
</html>