<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Dulmas, Steven Antal, Arlensiú Celis">
    <title>Wild Code School</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/faviconwild.png"/>
</head>

<body>
<?php require('header.php'); ?>

<section id="index-banner">
    <div class="container-fluid">
        <div class="row">
            <img class="d-block w-100 pb-3" src="img/welcome.png" alt="Wild Code School">
        </div>
    </div>
</section>

<section id="anchors">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="students.php"><img src="img/our_students1.jpg" alt="Students"></a>
                <p class="text_icon">Students</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="trainers.php"><img src="img/our_trainers.jpg" alt="Trainers"></a>
                <p class="text_icon">Trainers</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="joys.php"><img src="img/our_joy.jpg" alt="Joys of the Wild"></a>
                <p class="text_icon">Joys of the Wild</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="euratech.php"><img src="img/euratech_icon.jpg" alt="Euratechnologies"></a>
                <p class="text_icon">Euratechnologies</p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section id="guestbook">
        <h1 class="text-center mt-5 pt-5 pb-5">Wild Guestbook</h1>
        <div class="row">
            <div class="col d-flex flex-column">
                <form class="guestbook-request d-flex justify-content-center">
                        <p>
                            <label for="comment">Please leave us your comment: </label><br />
                            <textarea name="comment" id="comment" placeholder="Your comment here" rows="5" cols="60"></textarea>
                        
                            <br />
                        </p>
                </form>
                <button id="buttonGuestbook" class="align-self-center">Send</button>
            </div>
        </div>

        <div class="row justify-content-center mb-5 mt-3" id="book">
            <!--Here is where the comments-->
        </div>
    </section>
</div>

<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form" method="post" action="php/contact.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="firstname">Firstname <span class="orange">*</span></label>
                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Your firstname">
                    <p class="comments"></p>
                </div>
                <div class="col">
                    <label for="name">Lastname <span class="orange">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Your Lastname">
                    <p class="comments"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="email">Email <span class="orange">*</span></label>
                    <input id="email" type="text" name="email" class="form-control" placeholder="Your Email">
                    <p class="comments"></p>
                </div>
                <div class="col">
                    <label for="phone">Phone <span class="orange">*</span></label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Your phone">
                    <p class="comments"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="subject">Subject <span class="orange">*</span></label>
                    <input id="subject" type="tel" name="subject" class="form-control" placeholder="Subject">
                    <p class="comments"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="message">Message <span class="orange">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Your message" rows="4"></textarea>
                    <p class="comments"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="orange"><strong>* We need this informations...</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="button1" value="Send">
                </div>
            </div>
        </form>
    </div>
</section>

<?php require('footer.php'); ?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Old script (popper) that did not appear in the new documentation that I just put here between-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="guestbook.js"></script>
</body>
</html>