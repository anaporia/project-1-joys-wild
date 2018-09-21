<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Delmas, Steven Antal, Arlensiú Celis">
    <title>Wild Code School</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<?php require('header.php'); ?>

<section id="index-banner">
    <div class="container-fluid">
        <div class="row">
            <img class="d-block w-100 pb-3" src="assets/img/welcome.png" alt="Wild Code School">
        </div>
    </div>
</section>

<section id="anchors" class="my-5">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="students.php"><img src="assets/img/our_students1.jpg" alt="Students"></a>
                <p class="text_icon">Students</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="trainers.php"><img src="assets/img/our_trainers.jpg" alt="Trainers"></a>
                <p class="text_icon">Trainers</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="joys.php"><img src="assets/img/our_joy.jpg" alt="Joys of the Wild"></a>
                <p class="text_icon">Joys of the Wild</p>
            </div>
            <div class="col flex-column d-flex justify-content-center text-center ml-1 mr-1 mt-1 mb-1">
                <a href="euratech.php"><img src="assets/img/euratech_icon.jpg" alt="Euratechnologies"></a>
                <p class="text_icon">Euratechnologies</p>
            </div>
        </div>
    </div>
</section>


<div class="container my-5">
    <section id="guestbook">
        <h2 class="text-center mt-5 pt-5 pb-5">Wild Guestbook</h2>
        <div class="row">
            <div class="col d-flex flex-column">
                <form class="guestbook-request d-flex justify-content-center">
                        <p>
                            <label for="comment">Please leave us your comment: </label><br />
                            <textarea name="comment" id="comment" placeholder="Your comment here" rows="5" cols="60"></textarea>
                            <br>
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

<section id="contact" class="my-5">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form" method="post" action="contact.php" enctype="multipart/form-data">
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
                    <p class="orange"><strong>* We need information...</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn button1" value="Send">
                </div>
            </div>
        </form>
    </div>
</section>

<?php require('footer.php'); ?>


<script src="assets/js/jquery-3.3.1.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/guestbook.js"></script>
</body>
</html>