<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
  	<meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
  	<meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Dulmas, Steven Antal, Arlensiú Celis">
    <title>WCS - Trainers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php require('header.php'); ?>

<section id="bannerfluid">
	<div class="container-fluid pl-0 pr-0">
    	<img class="d-block w-100 pb-3" src="img/high_table.png" alt="Trainers">
	</div>
</section>

<section id="trainers" class="my-5">
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-10">
	            <div class="media flex-column flex-md-row">
	                <img class="backform align-self-center" src="img/hobbit_feet.jpg" alt="formateur1">
	                <img class="frontform align-self-center" src="img/loic.png" alt="egoformateur1">
	                <div class="media-body align-self-center py-3 ml-4 px-8 text-justify">
	                    <h5 class="mt-0 mb-3">Loïc Brassart -  Javascript React Trainer </h5>
	                    <p> Trainer at the Wild, since September 2018, he trains wilders in Javascript language.<br>
							With its appearance of Viking or Hard Rock Singer, he has something in common with Frodon...</p>
	                </div>
	            </div>
	        </div>

	        <div class="col-10">
	            <div class="media flex-column flex-md-row">
	                <div class="media-body align-self-center py-3 mr-4 px-8 text-justify">
	                    <h5 class="mt-0 mb-3">Olivier Trentesaux - Campus Manager </h5>
	                    <p>He develops and manages the campus of Lille Wild Code School<br>
							His missions:<br>
							Creation and development of business partnerships.<br>
							Relationship Management with School Customers.<br>
							Recruitment, coaching and coaching of students towards employment.<br>
							As you can see,all these responsibilities lead to some drifts .... </p>
	                </div>
	                <img class="backform align-self-center" src="img/olivier_cover.jpg" alt="formateur1">
	                <img class="frontform align-self-center" src="img/olivier.png" alt="egoformateur1">
	            </div>
	        </div>

	        <div class="col-10">
	            <div class="media flex-column flex-md-row">
	                <img class="backform align-self-center" src="img/gaetan_cover.jpg" alt="formateur1">
	                <img class="frontform align-self-center" src="img/gaetan.png" alt="egoformateur1">
	                <div class="media-body align-self-center py-3 ml-4 px-8 text-justify">
	                    <h5 class="mt-0 mb-3">Gaëtan Rolé-Dubruille - Php Trainer </h5>
	                    <p> He trains wilders to new technologies and their operations.<br>
							He joined the WildCodeSchool as LeadDev Full Stack for the purpose of leading client projects while training young web developers.<br>
							Gaetan is always ready for new challenges........</p>
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
