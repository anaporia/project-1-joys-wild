<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Delmas, Steven Antal, Arlensiú Celis">
    <title>WCS-Euratechnologie</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="shortcut icon" type="image/png" href="assets/img/faviconwild.png">
</head>

<body>
<?php require('header.php'); ?>

<section>
    <div class="container-fluid ml-0 mr-0 pl-0 pr-0">
        <!-- carousel images -->
        <div class="row">
            <div id="euratechCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#euratechCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#euratechCarousel" data-slide-to="1"></li>
                    <li data-target="#euratechCarousel" data-slide-to="2"></li>
                </ol>
                <!-- The slideshow -->
                <div class="carousel-inner text-center" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid img-responsive" src="assets/img/euratech_banner.jpg" alt="first slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img-responsive" src="assets/img/euratech_futur.jpg" alt="second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img-responsive" src="assets/img/euratech_futur2.jpg" alt="third slide">
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
        </div>
    </div>
    <!-- carousel chiffres clé-->
    <div id="keyFiguresSlider" class="container mt-5">
        <div class="slider">
            <h3 class="keyFigures">wow really?!</h3>
            <h3 class="keyFigures">I didn't know that!</h3>
            <h3 class="keyFigures">you learn something new every day</h3>
            <h3 class="keyFigures">this is the best key figure yet</h3>
            <h3 class="keyFigures">unbelievable!</h3>
            <h3 class="keyFigures">good one. I wonder what's next</h3>
            <h3 class="keyFigures">crazy figures !</h3>
            <h3 class="keyFigures">who's keeping track of all this ?</h3>
            <h3 class="keyFigures">I couldn't have said it better myself</h3>
            <h3 class="keyFigures">much intelligent. very computer</h3>
        </div>
    </div>
</section>

<section id="euratech-text" class="my-5">
    <div class="container">
        <div class="row">
            <div class="media col mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6789855330467!2d3.017742615659556!3d50.63307997950099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d55c764ab439%3A0x2e9bfd5c48d283b!2sEuraTechnologies!5e0!3m2!1sfr!2sfr!4v1537468324492"
                        allowfullscreen></iframe>
            </div>
            <div class="media-body col">
                <h3 class="mt-0">Euratechnologies</h3>
                <p>The Blan-Lafont building, the heart of the EuraTechnologies cluster, is the result of the exemplary
                    rehabilitation of two former Lafont and Le Blan textile factories built respectively in 1896 and 1900.
                    In 1989, following the general crisis in the cotton industry, and after having been one of the 7 largest
                    cotton mills in France with nearly 2500 employees, the factory Blan-Lafont filed for bankruptcy. In 1996,
                    the Urban Community of Lille opted for a conversion project: EuraTechnologies, economic center of
                    excellence dedicated to ICT, inaugurated on March 26, 2009.
                </p>
                <p>EuraTechnologies has become the leading incubator and accelerator in France, the center of excellence
                    and innovation located in Lille on 80,000 m². EuraTechnologies supports the development of all digital
                    entrepreneurs through unique methodology and know-how in business support, from seed to international deployment.
                    Born in 2009, EuraTechnologies is ranked in the top 3 accelerators in Europe. Precursor of French Tech and spearhead
                    of the digital economy in France.
                </p>
            </div>
        </div>
    </div>
</section>

<?php require('footer.php'); ?>


<script src="assets/js/jquery-3.3.1.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/slick-1.8.1/slick/slick.min.js"></script>
<script src="assets/js/slider.js"></script>
</body>
</html>
