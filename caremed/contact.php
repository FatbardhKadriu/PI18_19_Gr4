<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>


<?php
require("header.php");
?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> News</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Get in touch</h2></div>
					<div class="contact_text">
						<p>Contact Us Online
Do you have a question about our services or another topic?

Use Patient Online Services to securely contact your medical provider.
Call or Visit Us
We have more than 60 locations across Iowa, Minnesota and Wisconsin.</p>
					</div>
					<ul class="contact_about_list">
						<li><div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
						<li><div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div><span>caremed@gmail.com</span></li>
						<li><div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
					</ul>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-md-6 input_col">
									<div class="input_container input_name"><input type="text" class="contact_input" placeholder="Name" required="required"></div>
								</div>
								<div class="col-md-6 input_col">
									<div class="input_container"><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
								</div>
							</div>
							<div class="input_container"><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
							<div class="input_container"><textarea class="contact_input contact_text_area" placeholder="Message" required="required"></textarea></div>
							<button class="button contact_button"><a href="#">send</a></button>
						</form>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>

						<!-- Working Hours -->
						<div class="box working_hours">
							<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
							<div class="box_title">Working Hours</div>
							<div class="working_hours_list">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday – Friday</div>
										<div class="ml-auto">8.00 – 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 – 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 – 15.00</div>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<?php
require("footer.php");
?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>