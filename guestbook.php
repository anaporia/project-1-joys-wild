<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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

    <script src="guestbooktrial.js"></script>

</body>

</html>