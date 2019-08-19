<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Additional CSS -->
		<link rel="stylesheet" href="css/styles.css" type="text/css"/>

		<!-- jQuery, then Popper.js, then Bootstrap JS-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
				  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
				  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
				  crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
				  crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script
			src="https://code.jquery.com/jquery-3.4.1.js"
			integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- My JavaScript -->
		<script src="js/script.js"></script>

		<!-- Font Awesome CDN  -->
		<script src="https://kit.fontawesome.com/cf2edcd587.js"></script>


		<title>Erica Tollefson's Portfolio</title>
	</head>

	<body>
		<div class="clearfix">
			<nav class="navbar navbar-collapse-xs navbar-dark float-right mr-3 mb-md-n5 mb-n2 mt-3">
				<div class="container d-inline text-right">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
							  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ml-auto">
							<a class="nav-item nav-link" href="#header">Home</a>
							<a class="nav-item nav-link" href="#about">About</a>
							<a class="nav-item nav-link" href="#portfolio">Portfolio</a>
							<a class="nav-item nav-link" href="#contact">Contact</a>
						</div>
					</div>
				</div>
			</nav>
		</div>

		<div class="container-fluid header" id="header">
			<!--parent must be full height-->
			<div class="row min-vh-100">
					<div class="p-0 my-auto mx-auto mr-lg-5 mr-xl-4 col-md-1 d-block" style="width:auto;"><img class="placeholder-img" src="images/placeholder.jpg" alt="a blurry image"></div>
				<div class="p-0 mt-0 mb-5 my-md-auto mx-auto ml-lg-5 ml-xl-4 col-md-5 d-block"><h1 class="text-center text-light" >Erica Tollefson</h1><h3 class="text-center text-light">Web Developer</h3></div>
				</div>
			</div>

			<div class="container-fluid about section" id="about">
				<div class="row min-vh-100 clearfix">
					<div class="col-sm-5 col-4">

					</div>
					<div class="col-sm-7 col-8 my-auto d-block float-right pr-4" style="width:auto;">
						<h1 class="text-right text-light pb-3">About Me</h1>
						<p class="text-justify text-light ml-sm-3">A bit of my background: I am a recent graduate of Santa Fe Community College (with degrees in Web Design and Photography), as well as CNM Ingenuity's Full Stack Web Development Bootcamp. While working as an intern at Deep Dive Coding, I was part of a team that created the Signs on 66 web application that helps users find and photograph historic Route 66 neon signs in Albuquerque.</p>
						<p class="text-justify text-light ml-sm-3">I am currently a freelance web developer who loves to design websites from the ground up, as well as increase the beauty and performance of existing sites. I have a passion for helping business owners reach their goals by overcoming technology obstacles. I can assist businesses with technology needs from HTML, CSS, JavaScript and database needs, to WordPress design and maintenance. Please connect with me on <a href="https://www.linkedin.com/in/erica-tollefson-nm/" class="text-warning" target="_blank">LinkedIn </a>or <a href="#contact" class="text-warning" target="_blank">contact me.</a></p>
					</div>
				</div>
			</div>

			<div class="container-fluid portfolio section" id="portfolio">
				<div class="row min-vh-100 clearfix my-md-auto mb-4">
					<div class="col-md-4 col-7 my-auto d-block float-left pl-3 pl-sm-4 pt-5 pb-1 py-md-0" style="width:auto;">
						<h1 class="text-left text-light pb-3">Portfolio</h1>
						<p class="text-left text-light mr-sm-3">The Signs on 66 web application was designed with two other developers during the Deep Dive Coding bootcamp. This interactive web application allows users to locate historic Route 66 neon signs in Albuquerque and upload their own images of the signs to the site.</p>
						<p class="text-left text-light mr-sm-3">Signs on 66 was developed utilizing a combination of HTML5, CSS3, Bootstrap, JavaScript, and jQuery for the frontend, and PHP7.3, and MySQL were used in the backend development. Geolocation capabilities were integrated using the Google Maps API.</p>
					</div>
					<div class="col-md-5 col-7 my-auto pl-3 pl-sm-4 pb-4 pb-md-0">
						<img class="placeholder-img" src="images/Monterey_placeholder.jpg" alt="image of Monterey Motel Sign">
						<div class="container d-grid mt-3 mx-5"><a class="btn btn-outline-light" href="#header" role="button">Visit Signs on 66</a></div>
					</div>
				</div>
			</div>

		<div class="container-fluid contact section" id="contact">
			<div class="row min-vh-100 clearfix">
				<div class="col-md-6 col-sm-5 col-4">

				</div>
				<div class="col-md-6 col-sm-7 col-8 my-auto d-block float-right pr-4" style="width:auto;">
					<h1 class="text-right text-light pb-3">Find Me</h1>
					<form id="erica-form" action="../php/" method="post">
						<div class="form-group">
								<label class="text-white" for="exampleFormInputName">Name</label>
								<input type="text" class="form-control" id="inlineFormInputName" name="name" placeholder="Jane Doe">
							</div>

						<div class="form-group">
							<label class="text-white" for="exampleFormControlInput1">Email address</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
						</div>

						<div class="form-group pb-2">
							<label class="text-white" for="exampleFormControlTextarea1">Message</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Leave a message" rows="3"></textarea>
						</div>
						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LdBCrMUAAAAABvnoyaoeXifmWTTwLdEMWMLnw9o"></div>
						<button class="my-4 rounded py-2 px-3 btn btn-light" type="submit">Submit</button>
						<button class="my-4 ml-2 rounded py-2 px-3 btn btn-light" type="reset">Reset</button>
					</form>
					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="clearfix">
			<nav class="navbar navbar-collapse-xs navbar-expand-md navbar-dark bottom-nav">
				<div class="container d-inline ml-0 mw-100">

					<a class="navbar-brand float-md-right ml-1 ml-md-3 my-md-0" href="./images/Erica-Tollefson-Resume.pdf" target="_blank"><i class="far fa-file fa-2x"></i></a>
					<a class="navbar-brand float-md-right mr-md-0 my-md-0" href="https://github.com/EricaTollefson" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
					<a class="navbar-brand float-md-right mr-md-3 my-md-0" href="https://www.linkedin.com/in/erica-tollefson-nm/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
					<button class="navbar-toggler float-left mt-1 mr-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse bottom" id="navbarNavAltMarkup">
						<div class="navbar-nav ml-auto mx-md-0 mt-md-1">
							<a class="nav-item nav-link text-light bottom-nav" href="#header">Home</a>
							<a class="nav-item nav-link text-light bottom-nav" href="#about">About</a>
							<a class="nav-item nav-link text-light bottom-nav" href="#portfolio">Portfolio</a>
							<a class="nav-item nav-link text-light bottom-nav" href="#contact">Contact</a>
						</div>
					</div>
				</div>
			</nav>
		</div>

	</body>
</html>