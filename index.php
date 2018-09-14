<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <title>Wild Code School</title>
</head>

<body>
<?php require('header.php'); ?>

<section class="container-fluid">
    <img class="d-block w-100 pb-3" src="https://via.placeholder.com/350x150" alt="Wild Code School">
</section>
<section class="container">
    <div class="row d-flex justify-content-between">
        <div class="col d-flex justify-content-center ml-1 mr-1 mt-1 mb-1">
            <a href="students.php"><img src="img/students.png" alt="Students"></a>
        </div>
        <div class="col d-flex justify-content-center ml-1 mr-1 mt-1 mb-1">
            <a href="trainers.php"><img src="img/trainer.jpg" alt="Trainers"></a>
        </div>
        <div class="col d-flex justify-content-center ml-1 mr-1 mt-1 mb-1">
            <a href="joys.php"><img src="img/joy.jpg" alt="Joys of the Wild"></a>
        </div>
        <div class="col d-flex justify-content-center ml-1 mr-1 mt-1 mb-1">
            <a href="euratech.php"><img src="img/euratech.jpg" alt="Euratechnologies"></a>
        </div>
    </div>
</section>

<section id="contact" class="container">
    <h2>Contact</h2>
    <?php require ("contact.php"); ?>
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