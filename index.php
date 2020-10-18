<?php
$ip=$_SERVER['REMOTE_ADDR'];

$fpr=fopen("data.csv","r");

$flag=0;

while($data=fgetcsv($fpr)){
	foreach($data as $column){
			if($column==$ip){
				$flag=1;
			}
	}
}

if($flag==0){
	$fp=fopen("data.csv","a");
	fputcsv($fp,array($ip)); 
	fclose($fp);
}

fclose($fpr);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
-->
<title>Yuken India | Application</title>
    <!--
    Favicons
    =============================================
-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

-->
<style>

* {
	box-sizing: border-box;
}

.row > .column {
	padding: 0 8px;
}

.row:after {
	content: "";
	display: table;
	clear: both;
}

.column {
	float: left;
	width: 25%;
}

/* The Modal (background) */
.modal {
	display: none;
	position: fixed;
	z-index: 1;
	padding-top: 100px;
	left: 0;
	top: 0;
	overflow: auto;
	background-color: black;
}

/* Modal Content */
.modal-content {
	position: relative;
	background-color: #fefefe;
	margin: auto;
	padding: 0;
	width: 40%;
	max-width: 40%;
}

/* The Close Button */
.close {
	color: white;
	position: absolute;
	top: 10px;
	right: 25px;
	font-size: 35px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: #999;
	text-decoration: none;
	cursor: pointer;
}

.mySlides_1 {
	display: none;
}

.mySlides_2 {
	display: none;
}

.mySlides_3 {
	display: none;
}

.mySlides_4 {
	display: none;
}

.mySlides_5 {
	display: none;
}

.mySlides_6 {
	display: none;
}


.cursor {
	cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	padding: 16px;
	margin-top: -50px;
	color: white;
	font-weight: bold;
	font-size: 20px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
	user-select: none;
	-webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
	right: 0;
	border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
	background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}

img {
	margin-bottom: -4px;
}

.caption-container {
	text-align: center;
	background-color: black;
	padding: 2px 16px;
	color: white;
}

.demo {
	opacity: 0.6;
}

.active,
.demo:hover {
	opacity: 1;
}

img.hover-shadow {
	transition: 0.3s;
}

.hover-shadow:hover {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

* {margin: 0; padding: 0;}
.magnify {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large {
	width: 100px; height: 100px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small { display: block; }

.magnify1 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large1 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small1 { display: block; }

.magnify2 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large2 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small2 { display: block; }

.magnify3 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large3 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small3 { display: block; }

.magnify4 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large4 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small4 { display: block; }

.magnify5 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large5 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small5 { display: block; }

.magnify6 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large6 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small6 { display: block; }

.magnify7 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large7 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small7 { display: block; }

.magnify8 {width: 200px; margin: 50px auto; position: relative; cursor: none}

.large8 {
	width: 50px; height: 50px;
	position: absolute;
	border-radius: 100%;
	
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
}

.small8 { display: block; }
/*.modal-dialog
    {
        width:60% !important;
    }
    .modal img
    {
        width:100%;
        height:auto;
    }
    
    .modal button
    {
        color:white;
        }*/

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">

    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
	<main>
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-left" href="index.php"><img style="padding-left:10px; padding-bottom: 2px; padding-top: 2px;" src="assets/images/logo-1.jpg"></img></a>
				</div>
				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="section-scroll" href="about.php">About us</a></li>
						<li><a class="section-scroll" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main">
			<section style="padding: 350px 0px;" class="module bg-dark-60 service-page-header" data-background="assets/images/landing/app.jpg">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<h2 class="module-title font-alt">Applications</h2>
							<div class="module-subtitle1 font-serif">
								
							</div>
						</div>
					</div>
				</div>
			</section>

			<section style="padding-bottom: 20px; padding-top: 20px;" class="module" id="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<h2 class="module-title font-alt"></h2>
							<div class="module-subtitle font-serif">
								We offer  complete system solution for a range of mobile applications like Construction, Agricultural, Material handling,  Rail equipment  etc. Our technical team  carefully studies the application needs and provides  tailor-made solutions to meet your needs. We provide Concept to Commissioning of Prototype and further training and Service Management to our Clients
							</div>
						</div>
					</div>
					<div class="row multi-columns-row">
						<div class="container">

							<div class="service-right">
								<div class="row">
									<div class="col-md-6">
										<h2>SKID STEER LOADER</h2>
										<br>
										<div class="hr1"></div>
										<div class="module-subtitle p-left">
											<p>Kolben’s packaged solution for Skid Steer Loader consists of an efficient pump system for drive  and  auxiliary functions available with various option of controls. Added to this, efficient, compact  drive hydro motors with customer-specific options can be designed. Ergonomically designed Joystick with various features can also be offered. System specific valve blocks, designed and supplied based on your needs. The system is equipped  with special accessories installed for an overall better performance.</p>
										</div>
									</div>
									<div class="col-md-6">

										<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/Loader_2.png" alt="snow" data-toggle="modal" data-target="#skid_steer">
									</div>
								</div>
							</div>

							<hr class="divider-w">

							<!--Feature2-->

							<div class="service-left">
								<div class="row">
									<div class="col-md-6">
										<div class="service2">
											<a title="Walkh Behind Roller" href="#">
												<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/walk_behind_roller_1.png" alt="snow" data-toggle="modal" data-target="#walk_behing">
											</a>
										</div>
									</div>

									<div class="col-md-6">
										<h2>WALK BEHIND ROLLER</h2>
										<br>
										<div class="hr1"></div>
										<div class="module-subtitle p-right">
											<p>Compact Hydrostatic transmission along with  simplified auxiliary  drive  solution. The system is protected with a special filter against contamination.</p>
										</div>
									</div>
								</div>
							</div>

							<hr class="divider-w">

							<!--Service 3-->
							<div class="service-right">
								<div class="row">
									<div class="col-md-6">
										<div>
											<h2>SELF LOADING TRANSIT MIXER</h2>
											<br>
											<div class="hr1"></div>
											<div class="module-subtitle p-left">
												<p>Options of  proven products available for main drive and drum rotation, with variety of control based on client needs are available. System-specific valve blocks can be designed and supplied based on needs and equipped with special accessories installed for better performance.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service1">
											<a title="Self Loading Transit Mixer" href="#">
												<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/mixer.png" alt="snow" data-toggle="modal" data-target="#self_loading">
											</a>
										</div>
									</div>

								</div>
							</div>


							<hr class="divider-w">

							<div class="service-left">
								<div class="row">
									<div class="col-md-6">
										<div class="service2">
											<a title="Sweeping Machine" href="#">
												<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/sweeping_machine.png" alt="snow" data-toggle="modal" data-target="#sweeping_machine">
											</a>
										</div>
									</div>

									<div class="col-md-6">
										<h2>SWEEPING MACHINE</h2>
										<br>
										<div class="hr1"></div>
										<div class="module-subtitle p-right">
											<p>A Complete and proven System solution to cater to the needs of the machine is being continuously engineered by our Applications Team. Options of efficient drive solution with customer specific auxiliary circuits having a wide range of features can also be created.</p>
										</div>
									</div>
								</div>
							</div>

							<hr class="divider-w">

							<!--Service 3-->
							<div class="service-right">
								<div class="row">
									<div class="col-md-6">
										<div>
											<h2>TRACTOR AND AGRICUTURAL APPLICATIONS</h2>
											<br>
											<div class="hr1"></div>
											<div class="module-subtitle p-left">
												<p>Our Team is providing Efficient, Reliable and Compact integrated Hydrostatic Transmission (HST) drive unit for limited space applications. Additional auxiliary system as per application can also be designed and supplied.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service1">
											<a title="Tractor And Agricultural Applications" href="#">
												<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/tractor.png" alt="snow" data-toggle="modal" data-target="#tractor">
											</a>
										</div>
									</div>

								</div>
							</div>

							<hr class="divider-w">

							<div class="service-left">
								<div class="row">
									<div class="col-md-6">
										<div class="service2">
											<a title="Sugarcane Harvester" href="#">
												<img class="gallery-image img-responsive small" id="myImg" title="Skid Steer View 1" src="assets/images/Applications/sugarcane_harvester.png" alt="snow" data-toggle="modal" data-target="#sugarcane_harvester">
											</a>
										</div>
									</div>

									<div class="col-md-6">
										<h2>SUGARCANE HARVESTOR</h2>
										<br>
										<div class="hr1"></div>
										<div class="module-subtitle p-right">
											<p>Our team is continuously engineering System Solutions for drive and auxiliary application in various harvesters. Ergonomically designed Joystick with various features can be offered. System specific actuating circuits can be designed and supplied based on specific needs.</p>
										</div>
									</div>
								</div>
							</div>

							<hr class="divider-w">

						</div>
					</div>


					<!-- <div class="hidden" id="img-repo">

						
						<div class="item" id="image-1">
                            <div class="zoom-area" style="margin:0px !important;width:100%">
                                <div class="large"></div>
							<img class="gallery-image img-responsive small" id="ig1" title="Skid Steer View 1" src="assets/images/gallery/Application/Skid Steer/roller1.png">
                                </div>
						</div>
						<div class="item" id="image-1">
							<img class="gallery-image img-responsive" title="Skid Steer View 2" src="assets/images/gallery/Application/Skid Steer/roller2.png">
						</div>
						<div class="item" id="image-1">
							<img class="gallery-image img-responsive " title="Skid Steer View 3" src="assets/images/gallery/Application/Skid Steer/final_loader_mmm4_1.jpg">
						</div>

						
						<div class="item" id="image-2">
							<img class="gallery-image img-responsive" title="Application 2 View 1" src="assets/images/gallery/thumbnail/full_3/48.jpg">
						</div>
						<div class="item" id="image-2">
							<img class="gallery-image img-responsive" title="Application 2 View 2" src="assets/images/gallery/thumbnail/full_3/33.jpg">
						</div>
						<div class="item" id="image-2">
							<img class="gallery-image img-responsive" title="Application 2 View 3" src="assets/images/gallery/thumbnail/full_3/13.jpg">
						</div>

						
						<div class="item" id="image-3">
							<img class="gallery-image img-responsive" title="Application 3 View 1" src="assets/images/gallery/thumbnail/full_3/19.jpg">
						</div>
						<div class="item" id="image-3">
							<img class="gallery-image img-responsive" title="Application 3 View 2" src="assets/images/gallery/thumbnail/full_3/37.jpg">
						</div>
						<div class="item" id="image-3">
							<img class="gallery-image img-responsive" title="Application 3 View 3" src="assets/images/gallery/thumbnail/full_3/46.jpg">
						</div>

					</div>


				</div> -->
			</section>

			<div class="module-small bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget">
								<h5 class="widget-title font-alt">Yuken</h5>
								<p>No. 16/C, Doddanekundi Industrial Area,
									Mahadevapura Post,
									Bangalore- 560 048,
									Karnataka, India.</p>
								<p>Phone:<a href="tel:+91-80-41163217"> +91-80-41163217</a></p>
								<p>Email:<a href="mailto: marketing@yukenindia.com">marketing@yukenindia.com</a></p>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="widget">
								<h5 class="widget-title font-alt">Quick Links</h5>
								<ul class="icon-list">
									<div class="container">
										<li><a href="about.php">About Us </a></li>
										<li><a href="contact.php">Contact </a></li>
									</div>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="widget">
								<h5 class="widget-title font-alt">Our Partner</h5>
								<a href="http://www.kolbenhydraulics.com/">
									<img src="assets/images/logo-1.png">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr class="divider-d">

		</div>

		<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
	</main>

	<div id="skid_steer" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_1">
				<div class="numbertext">1 / 3</div>
				<div class="magnify1" style="margin:0px !important;width:100% !important">
					<div class="large1"></div>
					<img class="small1" src="assets/images/Applications/Loader_2.png" style="width:100%">
				</div>
			</div>

			<!-- <div class="mySlides_1">
				<div class="numbertext">2 / 3</div>
				<div class="magnify1" style="margin:0px !important;width:100% !important">
					<div class="large1"></div>
					<img class="small1" src="assets/images/Applications/walk_behind_roller_2.png" style="width:100%">
				</div>
			</div> -->

			<a class="prev" onclick="plusSlides_1(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_1(1)">&#10095;</a>
		</div>
	</div>

	<div id="walk_behing" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_2">
				<div class="numbertext">1 / 3</div>
				<div class="magnify2" style="margin:0px !important;width:100% !important">
					<div class="large2"></div>
					<img class="small2" src="assets/images/Applications/walk_behind_roller_1.png" style="width:100%">
				</div>
			</div>

			<div class="mySlides_2">
				<div class="numbertext">2 / 3</div>
				<div class="magnify3" style="margin:0px !important;width:100% !important">
					<div class="large3"></div>
					<img class="small3" src="assets/images/Applications/walk_behind_roller_2.png" style="width:100%">
				</div>
			</div>

			<a class="prev" onclick="plusSlides_2(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_2(1)">&#10095;</a>
		</div>
	</div>>

	<div id="self_loading" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_3">
				<div class="numbertext">1 / 3</div>
				<div class="magnify4" style="margin:0px !important;width:100% !important">
					<div class="large4"></div>
					<img class="small4" src="assets/images/Applications/mixer.png" style="width:100%">
				</div>
			</div>

			<!-- <div class="mySlides_3">
				<div class="numbertext">2 / 3</div>
				<div class="magnify5" style="margin:0px !important;width:100% !important">
					<div class="large5"></div>
					<img class="small5" src="assets/images/Applications/Loader_2.jpg" style="width:100%">
				</div>
			</div> -->

			<a class="prev" onclick="plusSlides_3(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_3(1)">&#10095;</a>
		</div>
	</div>

	<div id="sweeping_machine" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_4">
				<div class="numbertext">1 / 3</div>
				<div class="magnify6" style="margin:0px !important;width:100% !important">
					<div class="large6"></div>
					<img class="small6" src="assets/images/Applications/sweeping_machine.png" style="width:100%">
				</div>
			</div>

			<a class="prev" onclick="plusSlides_4(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_4(1)">&#10095;</a>
		</div>
	</div>

	<div id="tractor" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_5">
				<div class="numbertext">1 / 3</div>
				<div class="magnify7" style="margin:0px !important;width:100% !important">
					<div class="large7"></div>
					<img class="small7" src="assets/images/Applications/tractor.png" style="width:100%">
				</div>
			</div>

			<a class="prev" onclick="plusSlides_5(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_5(1)">&#10095;</a>
		</div>
	</div>

	<div id="sugarcane_harvester" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides_6">
				<div class="numbertext">1 / 3</div>
				<div class="magnify8" style="margin:0px !important;width:100% !important">
					<div class="large8"></div>
					<img class="small8" src="assets/images/Applications/sugarcane_harvester.png" style="width:100%">
				</div>
			</div>

			<a class="prev" onclick="plusSlides_6(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides_6(1)">&#10095;</a>
		</div>
	</div>


    <!--
    JavaScripts
    =============================================
-->
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<!-- <script src="assets/lib/smoothscroll.js"></script> -->
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<!-- Slider script -->
<script src="assets/js/slider.js" type="text/javascript"></script>

<script>

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large").css("background","url('" + $(".small").attr("src") + "') no-repeat");

		$(".magnify").mousemove(function(e){
			if(!native_width && !native_height)
			{
				var image_object = new Image();
				image_object.src = $(".small").attr("src");

				native_width = image_object.width;
				native_height = image_object.height;
			}
			else
			{
				var magnify_offset = $(this).offset();
				var mx = e.pageX - magnify_offset.left;
				var my = e.pageY - magnify_offset.top;
				if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
				{
					$(".large").fadeIn(100);
				}
				else
				{
					$(".large").fadeOut(100);
				}
				if($(".large").is(":visible"))
				{
					var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
					var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
					var bgp = rx + "px " + ry + "px";

					var px = mx - $(".large").width()/2;
					var py = my - $(".large").height()/2;
					$(".large").css({left: px, top: py, backgroundPosition: bgp});
				}
			}
		})
	})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large1").css("background","url('" + $(".small1").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify1").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small1").attr("src");
			
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large1").fadeIn(100);
			}
			else
			{
				$(".large1").fadeOut(100);
			}
			if($(".large1").is(":visible"))
			{
				var rx = Math.round(mx/$(".small1").width()*native_width - $(".large1").width()/2)*-1;
				var ry = Math.round(my/$(".small1").height()*native_height - $(".large1").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large1").width()/2;
				var py = my - $(".large1").height()/2;
				$(".large1").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large2").css("background","url('" + $(".small2").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify2").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small2").attr("src");
			
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large2").fadeIn(100);
			}
			else
			{
				$(".large2").fadeOut(100);
			}
			if($(".large2").is(":visible"))
			{
				var rx = Math.round(mx/$(".small2").width()*native_width - $(".large2").width()/2)*-1;
				var ry = Math.round(my/$(".small2").height()*native_height - $(".large2").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large2").width()/2;
				var py = my - $(".large2").height()/2;
				$(".large2").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large3").css("background","url('" + $(".small3").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify3").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small3").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large3").fadeIn(100);
			}
			else
			{
				$(".large3").fadeOut(100);
			}
			if($(".large3").is(":visible"))
			{
				var rx = Math.round(mx/$(".small3").width()*native_width - $(".large3").width()/2)*-1;
				var ry = Math.round(my/$(".small3").height()*native_height - $(".large3").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large3").width()/2;
				var py = my - $(".large3").height()/2;
				$(".large3").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large4").css("background","url('" + $(".small4").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify4").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small4").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large4").fadeIn(100);
			}
			else
			{
				$(".large4").fadeOut(100);
			}
			if($(".large4").is(":visible"))
			{
				var rx = Math.round(mx/$(".small4").width()*native_width - $(".large4").width()/2)*-1;
				var ry = Math.round(my/$(".small4").height()*native_height - $(".large4").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large4").width()/2;
				var py = my - $(".large4").height()/2;
				$(".large4").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large5").css("background","url('" + $(".small5").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify5").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small5").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large5").fadeIn(100);
			}
			else
			{
				$(".large5").fadeOut(100);
			}
			if($(".large5").is(":visible"))
			{
				var rx = Math.round(mx/$(".small5").width()*native_width - $(".large5").width()/2)*-1;
				var ry = Math.round(my/$(".small5").height()*native_height - $(".large5").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large5").width()/2;
				var py = my - $(".large5").height()/2;
				$(".large5").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large6").css("background","url('" + $(".small6").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify6").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small6").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large6").fadeIn(100);
			}
			else
			{
				$(".large6").fadeOut(100);
			}
			if($(".large6").is(":visible"))
			{
				var rx = Math.round(mx/$(".small6").width()*native_width - $(".large6").width()/2)*-1;
				var ry = Math.round(my/$(".small6").height()*native_height - $(".large6").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large6").width()/2;
				var py = my - $(".large6").height()/2;
				$(".large6").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large7").css("background","url('" + $(".small7").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify7").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small7").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large7").fadeIn(100);
			}
			else
			{
				$(".large7").fadeOut(100);
			}
			if($(".large7").is(":visible"))
			{
				var rx = Math.round(mx/$(".small7").width()*native_width - $(".large7").width()/2)*-1;
				var ry = Math.round(my/$(".small7").height()*native_height - $(".large7").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large7").width()/2;
				var py = my - $(".large7").height()/2;
				$(".large7").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

	$(document).ready(function(){

		var native_width = 0;
		var native_height = 0;
		$(".large8").css("background","url('" + $(".small8").attr("src") + "') no-repeat");

	//Now the mousemove function
	$(".magnify8").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small8").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large8").fadeIn(100);
			}
			else
			{
				$(".large8").fadeOut(100);
			}
			if($(".large8").is(":visible"))
			{
				var rx = Math.round(mx/$(".small8").width()*native_width - $(".large8").width()/2)*-1;
				var ry = Math.round(my/$(".small8").height()*native_height - $(".large8").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large8").width()/2;
				var py = my - $(".large8").height()/2;
				$(".large8").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})

</script>

<script>
	function openModal() {
		document.getElementsByClassName('modal').style.display = "block";
	}

	function closeModal() {
		document.getElementById('modal').style.display = "none";
	}

	var slideIndex_1 = 1;
	var slideIndex_2 = 1;
	var slideIndex_3 = 1;
	var slideIndex_4 = 1;
	var slideIndex_5 = 1;
	var slideIndex_6 = 1;
	showSlides_1(slideIndex_1);
	showSlides_2(slideIndex_2);
	showSlides_3(slideIndex_3);
	showSlides_4(slideIndex_4);
	showSlides_5(slideIndex_5);
	showSlides_6(slideIndex_6);

	function plusSlides_1(n) {
		showSlides_1(slideIndex_1 += n);
	}

	function plusSlides_2(n) {
		showSlides_2(slideIndex_2 += n);
	}

	function plusSlides_3(n) {
		showSlides_3(slideIndex_3 += n);
	}

	function plusSlides_4(n) {
		showSlides_4(slideIndex_4 += n);
	}

	function plusSlides_5(n) {
		showSlides_5(slideIndex_5 += n);
	}

	function plusSlides_6(n) {
		showSlides_6(slideIndex_6 += n);
	}

	/*function currentSlide(n) {
		showSlides(slideIndex = n);
	}*/

	function showSlides_1(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides_1");
		var captionText = document.getElementById("caption_1");
		if (n > slides.length) {slideIndex_1 = 1}
			if (n < 1) {slideIndex_1 = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slides[slideIndex_1-1].style.display = "block";
			}
			function showSlides_2(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides_2");
				var captionText = document.getElementById("caption_2");
				if (n > slides.length) {slideIndex_2 = 1}
					if (n < 1) {slideIndex_2 = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
						}
						slides[slideIndex_2-1].style.display = "block";
					}
					function showSlides_3(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides_3");
						var captionText = document.getElementById("caption_3");
						if (n > slides.length) {slideIndex_3 = 1}
							if (n < 1) {slideIndex_3 = slides.length}
								for (i = 0; i < slides.length; i++) {
									slides[i].style.display = "none";
								}
								slides[slideIndex_3-1].style.display = "block";
							}
							function showSlides_4(n) {
								var i;
								var slides = document.getElementsByClassName("mySlides_4");
								var captionText = document.getElementById("caption_4");
								if (n > slides.length) {slideIndex_4 = 1}
									if (n < 1) {slideIndex_4 = slides.length}
										for (i = 0; i < slides.length; i++) {
											slides[i].style.display = "none";
										}
										slides[slideIndex_4-1].style.display = "block";
									}
									function showSlides_5(n) {
										var i;
										var slides = document.getElementsByClassName("mySlides_5");
										var captionText = document.getElementById("caption_5");
										if (n > slides.length) {slideIndex_5 = 1}
											if (n < 1) {slideIndex_5 = slides.length}
												for (i = 0; i < slides.length; i++) {
													slides[i].style.display = "none";
												}
												slides[slideIndex_5-1].style.display = "block";
											}
											function showSlides_6(n) {
												var i;
												var slides = document.getElementsByClassName("mySlides_6");
												var captionText = document.getElementById("caption_6");
												if (n > slides.length) {slideIndex_6 = 1}
													if (n < 1) {slideIndex_6 = slides.length}
														for (i = 0; i < slides.length; i++) {
															slides[i].style.display = "none";
														}
														slides[slideIndex_6-1].style.display = "block";
													}
												</script>

											</body>


<!-- <div class="modal" id="modal-gallery" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: black;
    color: white;">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<h3 class="modal-title"></h3>
			</div>
			<div class="modal-body" id="car">
				<div id="modal-carousel" class="carousel">

					<div class="carousel-inner" >
					</div>

					<a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
					<a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-b btn-circle" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div> -->


</html>