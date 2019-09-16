<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Tab browser details -->
	<title>rbcc v1</title>
    <link rel="shortcut icon" href="images/logoRocketV1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- ICON LINK at fontawesome.com -->

    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark shadow">
			<a class="navbar-brand shadow " href="index.html">
				<img src="images/logoWhiteV2.png" width="150" height="70" class="rbcc-logo d-inline-block align-top " alt="RBCC Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdownProgram" role="button" aria-haspopup="true" aria-expanded="false">Programs</a>
						<div class="dropdown-menu" arial-labelledby="navbarDropdownProgram">					
							<a class="dropdown-item" href="program.html">&#10023; Free Play</a>
							<a class="dropdown-item" href="program.html#gap">&#10023; GAP Inc.</a>
							<a class="dropdown-item" href="program.html#speak_cree">&#10023; Speak Cree Class</a>
							<a class="dropdown-item" href="program.html#zumba">&#10023; Zumba Dance</a>
							<a class="dropdown-item" href="program.html#bike_camp">&#10023; Bike Camp</a>
							<a class="dropdown-item" href="program.html#Skating">&#10023; Skating</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="program.html#calendar_program">Calendar &amp; Events</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="rental.html">Rentals</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link active dropdown-toggle" data-toggle="dropdown" id="navbarDropdownContact" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
						<div class="dropdown-menu" arial-labelledby="navbarDropdownContact">
							<a class="dropdown-item" href="contact.html">&#10023; Direction/Location</a>
							<a class="dropdown-item" href="#contact_message">&#10023; Message Us</a>
							<a class="dropdown-item" href="opportunity.html">&#10023; Opportunity</a>
							<a class="dropdown-item" href="donate.html">&#10023; Donation</a>
							<div class="dropdown-divider"></div>
							<a class="text-secondary" href="https://www.facebook.com/RalphBrownCC/"><i class="fab fa-facebook-square fa-2x nav-icon"></i></a>
							<a class="text-secondary" href="https://www.youtube.com/channel/UCsHaOJZ_HgLPu70jaIMXGxQ"><i class="fab fa-youtube fa-2x nav-icon "></i></a>
							<a class="text-secondary" href="https://www.instagram.com/ralphbrowncc/"><i class="fab fa-instagram fa-2x nav-icon"></i></a>
							<a class="text-secondary" href="https://twitter.com/RalphBrownCC/"><i class="fab fa-twitter fa-2x nav-icon"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<?php 
        
            if(isset($_POST['submit'])){
                
                
                $to = "chaylacara@gmail.com";
                $subject = preventSQLInject(wordwrap($_POST['subject'], 100));
                $body = preventSQLInject($_POST['body']);
                $header = "From: " .preventSQLInject($_POST['email']);
                
                if(!empty($subject) && !empty($body) && !empty($header)){
                    mail($to, $subject, $body, $header);
//                    $message ="Your Message has been sent";
                    header("Location: contact.php"); exit;
                }else{
//                    $message "Field can not be empty";
                }
                
            }
        
        ?>

	</header>

	<main role="main">

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1>Contact Us</h1>
			</div>
		</div>

		<h2 class="mini-headings">Location</h2>

		<section class="container">
			<div class="row margin-top">
				<div class="col-md-6 contact-div margin-top">
					<h5>Contact Information</h5>
					<h6>&#x1F680; Ralph Brown Community Centre Inc.</h6>
					<ul class="footer-add">
						<li>&#128205; 460 Andrews Street</li>
						<li>&#128506; Winnipeg, MB</li>
						<li>&#127758; R2W 4Y1, Canada</li>
						<li>&phone; +1(204)586-3149</li>
						<li>&#9993; manager.rbcc@gmail.com</li>
					</ul>
				</div>
				<div class="col-md-6 margin-top">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.519065461361!2d-97.14085608434353!3d49.92660093285228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea719c15b5e8f7%3A0xb45b608600aaa15f!2sRalph+Brown+Community+Centre!5e0!3m2!1sen!2sca!4v1555915325870!5m2!1sen!2sca" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<hr class="feature-divider" id="contact_message">

		<h2 class="mini-headings">Message Us</h2>

		<section class="container">
			<div class="margin-top">
				<form class="contact-form" role="form" action="" method="post" autocomplete="off">
					<ul>
						<li>
							<input class="contact-input" type="text" placeholder="Enter Name" name="subject">
						</li>
						<li>
							<input class="contact-input" type="text" placeholder="Enter Email" name="email">
						</li>
						<li>
							<textarea class="contact-textarea" name="body" rows="4" cols="100%" placeholder="Message"></textarea>
						</li>
						<li>
							<button class="btn btn-danger contact-button">Cancel</button>
							<input type="submit" name="submit" class="btn btn-danger contact-button" value="submit">
						</li>
					</ul>					
				</form>
			</div>

		</section>
	</main>

	<footer>
		<div class="footer-social">
			<h4 class="margin-bot">Follow Us</h4>

				<span>
					<a href="https://www.facebook.com/RalphBrownCC/"><i class="fab fa-facebook-square fa-3x"></i></a>
					<a href="https://www.youtube.com/channel/UCsHaOJZ_HgLPu70jaIMXGxQ"><i class="fab fa-youtube fa-3x"></i></a>
					<a href="https://www.instagram.com/ralphbrowncc/"><i class="fab fa-instagram fa-3x"></i></a>
					<a href="https://twitter.com/RalphBrownCC/"><i class="fab fa-twitter fa-3x"></i></a>
				</span>			
		</div>
		

		<section class=" row">
			<div class="col-md-3 margin-top footer-logo">
				<img src="images/rbcc_logo.jpg" width="auto" height="190" class="border border-dark shadow rbcc-logo1 margin-top">
			</div>

			<div class="col-md-3 footer-contact">
				<h5>Contact Information</h5>
				<h6>&#x1F680; Ralph Brown Community Centre Inc.</h6>
				<ul class="footer-add">
					<li>&#128205; 460 Andrews Street</li>
					<li>&#128506; Winnipeg, MB</li>
					<li>&#127758; R2W 4Y1, Canada</li>
					<li>&phone; +1(204)586-3149</li>
					<li>&#9993; manager.rbcc@gmail.com</li>
				</ul>
				
			</div>
			<div class="col-md-3 footer-sites">
				<h5>Links</h5>
				<ul class="footer-links">
					<li>&#128204;<a href="index.html"> Home</a></li>
					<li>&#128204;<a href="program.html"> Programs</a></li>	
					<li>&#128204;<a href="rental.html"> Rentals</a></li>
					<li>&#128204;<a href="about.html"> About Us</a></li>
					<li>&#128204;<a href="contact.html"> Contact Us</a></li>
					<li>&#128204;<a href="program.html#calendar_program"> News &amp; Events</a></li>
					<li>&#128204;<a href="donate.html"> Donation</a></li>
					<li>&#128204;<a href="opportunity.html"> Opportunity</a></li>
					<li>&#128204;<a href="#"> Site Map</a></li>
				</ul>
	
			</div>
			<div class="col-md-3">
				<h5>Message Us</h5>
				<form class="footer-form">
					<input class="footer-input" type="text" placeholder="Enter Name" name="name">
					<input class="footer-input" type="text" placeholder="Enter Email" name="email">
					<textarea class="footer-textarea" rows="4" cols="100%" placeholder="Message"></textarea>
					<button class="btn btn-danger footer-button">Cancel</button>
					<button class="btn btn-danger footer-button">Send</button>
				</form>
			</div>

		</section>

		<section>
			
			<hr/>
			<div class="cRight">
				Copyright &copy; 2019 by <a href="index.html">RalphBrownCC</a> All right reserved.
			</div>
		</section>
		
	</footer>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>