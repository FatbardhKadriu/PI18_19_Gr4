<!DOCTYPE html>
<html lang="en">
<head>
<title>CareMed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<?php
include("header.php");
?>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										
											<style>
												
													#mySidenav a {
													  position: absolute;
													  left: 0px;
													  transition: 0.3s;
													  padding: 12px;
													  width: 250px;
													  height: 52px;
													  text-decoration: none;
													  font-size: 18px;
													  color: white;
													  border-radius: 50%;
													  text-align: center;
													}
													
													#mySidenav a:hover {
													  left: 7px;
													  border-radius: 60%;
													}
													
													#about {
													  top: 20px;
													  background-color: #283290;
													}

													
													</style>
													
													<div id="mySidenav" class="sidenav">
													  <a href="PHP/Login.php" id="about">Login</a>
													  
													</div>
													
													
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Medicine made with care</h1></div>
										<div class="home_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu.</p>
										</div>
										<div class="button home_button">
											<a href="#">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Medicine made with care</h1></div>
										<div class="home_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu.</p>
										</div>
										<div class="button home_button">
											<a href="#">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
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

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Appointments</div>
						<div class="box_text">All appointments are prioritized on the basis of medical need, and the team members who will care for you or your family have the expertise and skills to provide the best care possible.</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_emergency">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/bell.svg" alt=""></div></div>
						<div class="box_title">Emergency Cases</div>
						<div class="box_phone">+56 273 45678 235</div>
						<div class="box_emergency_text">For any emergencies please call the number up above.</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>A great medical team to help your needs</h2></div>
						<div class="about_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet tortor aliquam bibendum. Nulla ut molestie augue, scelerisque consectetur quam. Dolor sit amet, consectetur adipiscing elit. Cura bitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellentesque in luctus ex.</p>
						</div>
						<div class="button about_button">
							<a href="#">read more</a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="images/about.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" data-image-src="images/departments.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light"><h2>Our Medical Departments</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">
				
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">plastic surgery</div>
							<div class="dept_subtitle">Dr. James Smith</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">gastroenterology</div>
							<div class="dept_subtitle">Dr. Gunter Roscoe</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">dentistry</div>
							<div class="dept_subtitle">Dr. Maria Williams</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_text">
						</div>
						<div class="button dept_button"><a href="#">read more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Our Featured Services</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">Free Checkups</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_2.svg" alt=""></div>
							<div class="service_title trans_200">Screening Exams</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_3.svg" alt=""></div>
							<div class="service_title trans_200">RMI Services</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_4.svg" alt=""></div>
							<div class="service_title trans_200">Dentistry</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_5.svg" alt=""></div>
							<div class="service_title trans_200">Neonatology</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_6.svg" alt=""></div>
							<div class="service_title trans_200">Biochemistry</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Need a personal health plan?</h2>
				
						<div class="button cta_button"><a href="#">request a plan</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

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