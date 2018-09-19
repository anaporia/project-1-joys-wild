<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/templatetrial.css">
    <title>Document</title>
</head>

<body>

	<div class="container">
		<section id="guestbook">
	      	<h2 class="text-center">Wild Guestbook</h2>
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

			<div class="row justify-content-center my-5" id="book">
				<!--Here is where the reviews go-->
			</div>
		</section>
	</div>

    <script src="guestbooktrial.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>