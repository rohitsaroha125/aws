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
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
  -->
  <title>Yuken India | About</title>
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
  <!-- Default stylesheets-->
  <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template specific stylesheets-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
  <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
  <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
  <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
  <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
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
						<li><a class="section-scroll active" href="about.php">About us</a></li>
						<li><a class="section-scroll" href="contact.php">Contact</a></li>
					</ul>
        </div>
      </div>
    </nav>

    <div class="main">
      <section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">About</h2>
              <div class="module-subtitle font-serif">Yuken India Limited (YIL), a hydraulic equipment manufacturer. The company was
                set-up in 1978 at Whitefield, Bangalore and now operates out of its HO and
                factory, at Malur, Karnataka. Yuken India Limited has a product range consisting
                of the latest technology in Hydraulics - Vane Pump, Piston Pumps, Gear Pumps, all
                types of control valves (pressure, flow and direction), hydraulic actuators and
                accumulators. In addition, YIL designs and manufactures special products to meet
                specific requirements of individual customers and applications – like a hydraulic
                trolley or a far more sophisticated package of hydraulic actuator and power-pack
                to control the tilting of furnace carrying molten metal at the major steel plants.
                The hydraulic power units manufactured by YIL conforms to standards of
                environmental safety, in respect of pollution, noise and workplace hazard. Due
                consideration is given to energy and material conservation. The advanced design
                and performance of YIL products results in high productivity, efficiency and overall
                improvement of the industrial economy.</div>
            </div>
          </div>
        </div>
      </section>

      <section class="module-small bg-light client-sec">
        <div class="container">
          <div style="margin-top: 20px;" class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Our clients / Partners</h2>
              <div class="module-subtitle font-serif">We can either display your clients or your partners based on input given to us . So the heading will either be Our Clients or Our Partners( Just to make it clear ). This has to be noted that it's a draft an everthing can and will be changed based on input given.</div>
            </div>
          </div>
          <div class="row client">
            <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c1.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c2.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c3.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c4.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c5.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c6.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c7.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c8.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c9.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c10.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c11.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c12.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c13.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c14.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c15.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c16.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c17.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c18.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c19.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c20.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c21.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c22.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c23.png" alt="Client Logo"/></div>
                </div>
              </div>
              <div class="owl-item">
                <div class="col-xs-12">
                  <div class="client-logo"><img src="assets/images/c24.png" alt="Client Logo"/></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="module pt-0 pb-0" id="about">
        <div class="row position-relative m-0">
          <div class="col-xs-12 col-md-6 side-image" data-background="assets/images/section-14.jpg"></div>
          <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="module-title font-alt align-left">Brief Outline of Yuken India Limited</h2>
                <p>Established: <b>1976</b></p>
                <p>Prouction: <b>1978</b></p>
                <p>Team: <b>400 Members</b></p>
                <p>Registered Office: <b>Whitefield, Bangalore</b></p>
                <p>Main Plant: <b>Malur, Kolar District</b></p>
                              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="module" id="alt-features">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">We Specialise in / Area of expertise</h2>
              <div class="module-subtitle font-serif">some text here that'll be added here based on input given by kolben hydraulics. This has to be noted that it's a draft an everthing can and will be changed based on input given.</div>
            </div>
          </div>

          <div class="row mg-top">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 align-items-center">
              <h3 class="module-title font-alt lt-align mg0">Construction, Mobile & Material Handling
              </h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture6.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture7.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture8.png" class="full-img">
            </div>
          </div>
          

          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 align-items-center">
             
              <br/>
              <h3 class="module-title font-alt lt-align mg0">Steel Mills</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture1.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture2.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/section-14.jpg" class="full-img">
            </div>
          </div>
          <div class="row mg-top">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 align-items-center">
              <h3 class="module-title font-alt lt-align mg0">Power</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture3.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture4.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture5.png" class="full-img">
            </div>
          </div>
          <div class="row mg-top">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 align-items-center">
              <h3 class="module-title font-alt lt-align mg0">Others
              </h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture9.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture10.png" class="full-img">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-2 col-xs-4 col-12">
              <img src="assets/images/Picture11.png" class="full-img">
            </div>
          </div>
        </div>
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
    <!-- JavaScripts
      ================ -->
      <script src="assets/lib/jquery/dist/jquery.js"></script>
      <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="assets/lib/wow/dist/wow.js"></script>
      <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
      <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
      <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
      <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
      <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
      <script src="assets/lib/smoothscroll.js"></script>
      <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
      <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
    </html>
