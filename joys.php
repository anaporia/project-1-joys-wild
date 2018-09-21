<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Dulmas, Steven Antal, Arlensiú Celis">
    <title>WCS - The Joys of the Wild</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php require('header.php'); ?>


<!--<section id="joysCarousel" class="my-3">
    <div class="container-fluid">
         carousel images -->
        <!-- <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000" data-wrap="true">
            The slideshow -->
            <!--<div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img e" src="https://via.placeholder.com/350x100" alt="first slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x100" alt="second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x100" alt="third slide">
                </div>
            </div>
             Left and right controls -->
            <!--<a class="carousel-control-prev" href="#joysCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#joysCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section> -->

<section>
	<div class="container justify-content-around">
		<div class="row">
			<div class="offset-1 col-10 mt-4">
				<img class="d-block w-100 img-fluid img-responsive" src="img/group.jpg" alt="group photo">	
			</div>
		</div>
</section>


<section id="joys-text" class="my-5">
    <div class="container">
        <div class="row">
            <div class="offset-1 col-10 text-center">
                <h5>Joys of the Wild</h5>
                <p> Undertaking training at the Wild Code School is a rewarding time for every wilder where you learn community life, teamwork and help each other.<br>
                    But it is also a period of stress, fight to death during the dojos ....<br>
                    Discover below all the new expressions that you will learn from the beginning of your training: 
                </p>
            </div>
        </div>
    </div>
</section>

<!--section gifs-->
<section id="gifs">
    <div class="container-fluid d-flex justify-content-around">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/140x100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">GIF 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/140x100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">GIF 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/140x100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">GIF 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
