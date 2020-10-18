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
  <title>Yuken India | Contact</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
						<li><a class="section-scroll" href="about.php">About us</a></li>
						<li><a class="section-scroll active" href="contact.php">Contact</a></li>
					</ul>
        </div>
      </div>
    </nav>
    <div class="main">
      <section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Sales and Services|Dealers</h2>
              <div class="module-subtitle font-serif">Some text here to be added later based on input given by kolben Hydraulics for this section. This has to be noted that it's a draft an everthing can and will be changed based on input given.</div>
            </div>
          </div>
        </div>
      </section>
      <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h2 class="module-title font-alt mg0">Sales & Service</h2><br/>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h4 class="font-alt main-font">NORTH ZONE</h4>
            </div>
          </div>
          <div class="row flexbox">
            <div class="col-sm- 6 col-md-6 col-lg-6 col-12 border-rt">
              
              <p class="font-alt p-font" >  <br/>  26A, Community Center
                Phase 1, Mayapuri Indl. Area,
                New Delhi- 110 064, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Rajesh Dixit – Zonal Incharge</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9599044862">+91-9599044862</a></p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:011-28115545">011-28115545</a> / <a href="tel:011-28113263">011-28113263</a> / <a href="tel:011-28113976">011-28113976</a></p>
                <p class="font-alt p-font"><span class="span-font">Fax: </span>011-28115452</p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: rajesh.dixit@yukenindia.com">rajesh.dixit@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/26A,+Community+Center+Phase+1,+Mayapuri+Indl.+Area,+New+Delhi-+110+064,+India/@28.5962185,77.1242338,14.2z" target="_blank">View on Map</a>
            </div>
           <!--  <div class="col-sm-4 col-md-4 col-lg-4 col-12 border-rt"> -->
              <!-- <h2 class="sub-font font-alt">FACTORY ADDRESS</h2>
              <p class="font-alt p-font">6/13, Industrial Area, Kirti Nagar,
                New Delhi- 110 015, India
                Ph: 011-45065008</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Vinod Rathore</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9871893319">+91-9871893319</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: vinod_rathore@yukenindia.com">vinod_rathore@yukenindia.com,
                  <a href="mailto: biswaranjan_swain@yukenindia.com">biswaranjan_swain@yukenindia.com</a></a></p>
                  <a class="map-btn" href="https://www.google.com/maps/search/6%2F13,+Industrial+Area,+Kirti+Nagar,+New+Delhi-+110+015,+India++Ph:+011-45065008/@28.6544741,77.1456739,17z" target="_blank">View on Map</a>
            </div> -->
            <div class="col-sm-6 col-md-6 col-lg-6 col-12">
              <h2 class="sub-font font-alt">Mobile Segment Engineer</h2>
              <p class="font-alt p-font">FLAT NO. 803,TOWER-F,
                ERA REDWOOD RESIDENCY,
                SECTOR -78,
                GREATER FARIDABAD ,HARYANA-121004</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Vivek Dubey</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9871893319">+91-9871893318</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: vivek.dubey@yukenindia.com">vivek.dubey@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/FLAT+NO.+803,TOWER-F,+ERA+REDWOOD+RESIDENCY,+SECTOR+-78,+GREATER+FARIDABAD+,HARYANA-121004/@28.4057749,77.3413678,17z/data=!3m1!4b1" target="_blank">View on Map</a>
            </div>
          </div>
          <div class="row mg-top">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h4 class="font-alt main-font">EAST ZONE</h4>
            </div>
          </div>
          <div class="row flexbox">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h2 class="sub-font font-alt"> </h2>
              <p class="font-alt p-font">Indraprastha, 46A,
                Madan Mohan Malaviya Sarani,
                (Formerly Chakraberia Road- North)
                Kolkata- 700 020
                West Bengal, India
                </p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Debasis Dey– Zonal Incharge</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9831398328">+91-9831398328</a></p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:033-24544345">033-24544345</a> / <a href="tel:033-24544346">033-24544346</a></p>
                <p class="font-alt p-font"><span class="span-font">Fax: </span>033-24544348</p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: debasis.dey@yukenindia.com">debasis.dey@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/Indraprastha,+46A,+Madan+Mohan+Malaviya+Sarani,+(Formerly+Chakraberia+Road-+North)+Kolkata-+700+020+West+Bengal,+India/@22.5328919,88.3482893,17z/data=!3m1!4b1" target="_blank">View on Map</a>
            </div>
          </div>

          <div class="row mg-top">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h4 class="font-alt main-font">WEST ZONE</h4>
            </div>
          </div>

          <div class="row flexbox">
            <div class="col-sm-4 col-md-4 col-lg-4 col-12 border-rt">
              <h2 class="sub-font font-alt"></h2>
              <p class="font-alt p-font">H-4, Ansa Industrial Premises,
                Sakivihar Road, Sakinaka,
                Andheri(E), Mumbai- 400 072
                Maharashtra, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. M. Anand- Zonal Incharge</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9869066713">+91-9869066713</a></p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:022-28472013">022-28472013</a>/<a href="tel:022-28472014">022-28472014</a>/<a href="tel:022-28472015">022-28472015</a></p>
                <p class="font-alt p-font"><span class="span-font">Fax: </span>022-28472012</p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: anand.m@yukenindia.com">anand.m@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/place/Yuken+India+Limited/@19.1089381,72.8865693,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c8397b13ee17:0x837ea72100d6ec4!8m2!3d19.108933!4d72.888758" target="_blank">View on Map</a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-12 border-rt">
              <h2 class="sub-font font-alt"></h2>
              <p class="font-alt p-font">111/20, Near Gharda nu ghar,
                Near Gandhinagar society,
                Maninagar(E), Ahmedabad- 380 008
                Gujarat, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. H.C. Uday Kumar</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-9879031582">+91-9879031582</a></p>
                <p class="font-alt p-font"><span class="span-font">Telefax: </span>079-25450006</p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: udaykumar.hc@yukenindia.com">udaykumar.hc@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/111%2F20,+Near+Gharda+nu+ghar,+Near+Gandhinagar+society,+Maninagar(E),+Ahmedabad-+380+008+Gujarat,+India/@22.9956529,72.6153933,17z/data=!3m1!4b1" target="_blank">View on Map</a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-12">
              <h2 class="sub-font font-alt"></h2>
              <p class="font-alt p-font">Flat-02, Bhagirathi housing
                complex, Near Kakadepark,
                Chinchwad Gaon, Pune- 411 033
                Maharashtra, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Nikhil Chandorkar</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91-8805427579">+91-8805427579</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: nikhil.c@yukenindia.com">nikhil.c@yukenindia.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/Flat-02,+Bhagirathi+housing+complex,+Near+Kakadepark,+Chinchwad+Gaon,+Pune-+411+033+Maharashtra,+India/@18.6137239,73.7801186,14z/data=!3m1!4b1" target="_blank">View on Map</a>
            </div>
          </div>

          <div class="row mg-top">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h4 class="font-alt main-font">SOUTH ZONE</h4>
            </div>
          </div>

          <div class="row flexbox">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12 ">
              <h2 class="sub-font font-alt"></h2>
              <p class="font-alt p-font">B-80, 2nd Cross, 1st Phase
                Peenya Industrial Area,
                Bangalore- 560 058
                Karnataka, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Vijayasimha HK – Zonal Incharge</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91- 9845391033">+91- 9845391033</a></p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:080-28390225">080-28390225</a>, <a href="tel:080-28390227">080-28390227</a></p>
                <p class="font-alt p-font"><span class="span-font">Fax: </span>080-28390224</p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: vijayasimha_hk@YUKENINDIA.com">vijayasimha_hk@YUKENINDIA.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/place/Yuken+India+Limited/@13.0342642,77.5220343,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae3d17125686c7:0x18d6ead46ee3441f!8m2!3d13.034259!4d77.524223" target="_blank">View on Map</a>
            </div>
                      </div>

          <div class="row mg-top">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h4 class="font-alt main-font">UAE</h4>
            </div>
          </div>

          <div class="row flexbox">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12 ">
              <h2 class="sub-font font-alt">OFFICE</h2>
              <p class="font-alt p-font">Alkhoor Pumps & Hydraulic Machines TR L.L.C,
                P.O. Box 4726, Sharjah, U.A.E.</p>
                <p class="font-alt p-font"><span class="span-font">Contact: </span>Mr. Vijayasimha HK – Zonal Incharge</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+971 50 5532678">+971 50 5532678</a>/ <a href="tel:+971 50 5532678">+971 50 5532678</a>/ <a href="tel:+971 52 8641550">+971 52 8641550</a></p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:+971 6 5302678">+971 6 5302678</a>/ <a href="tel:+971 6 5302678">+971 6 5302678</a></p>
                <p class="font-alt p-font"><span class="span-font">Fax: </span>+971 6 5302679</p>
                <p class="font-alt p-font"><span class="span-font">Website: </span><a href="www.alkhoorhydraulics.com">www.alkhoorhydraulics.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/place/Al+Khoor+Pumps+and+Hydraulic+Machines+Trading+LLC/@25.3036532,55.4313801,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f5f803ff1ff09:0xa74866cb1b134b2d!8m2!3d25.3036484!4d55.4335688" target="_blank">View on Map</a>
            </div>
          </div>

          <div class="row mg-top">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <h2 class="module-title font-alt mg0">Authorized Service Centers</h2><br/>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12">
              <h4 class="font-alt main-font">SOUTH ZONE</h4>
            </div>
            <div class="col-sm-6 col-md-6 col-lg- col-12">
              <h4 class="font-alt main-font">NORTH ZONE</h4>
            </div>

          </div>

          <div class="row flexbox">
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 border-rt mg20">
              <p class="font-alt p-font">Kolben Hydraulics Ltd
                SB-54, 2nd Cross Road,
                Peenya 1st Stage,
                Bangalore – 560 058,
                Karnataka, India</p>
                <p class="font-alt p-font"><span class="span-font">Ph: </span><a href="tel:+91-9591147170">+9591147170</a></p>
                
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91 9611102261">+91 9611102261</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: servicehead@kolbenhydraulics.com ">servicehead@kolbenhydraulics.com </a>,
                  <a href="mailto: kiran.kolben@gmail.com">kiran.kolben@gmail.com</a></p>
                <p class="font-alt p-font"><span class="span-font">Website: </span><a href="http://kolbenhydraulics.com/">kolbenhydraulics.com</a></p>
                
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91 9611102410">+91 9611102410</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: service1@kolbenhydraulics.com">service1@kolbenhydraulics.com</a>,
                  <a href="mailto: service1@kolbenhydraulics.com">service1@kolbenhydraulics.com</a></p>
                  <a class="map-btn" href="https://www.google.com/maps/place/KOLBEN+HYDRAULICS+LTD./@13.0352956,77.5178821,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae3d2114086b17:0xa05f454a20dbee3f!8m2!3d13.0352904!4d77.5200708" target="_blank">View on Map</a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
              <p class="font-alt p-font">Kolben Hydraulics Limited
                No.6/13,Kirti Nagar Industrial Area,
                New Delhi – 110015, India</p>
                <p class="font-alt p-font"><span class="span-font">Contact Person 1: </span>Mr. Himanshu Pandey – Application Engineer</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91 9599044832">+91 9599044832</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: himanshu.kolben@gmail.com">himanshu.kolben@gmail.com</a></p>
                <p class="font-alt p-font"><span class="span-font">Contact Person 2: </span>Mr. Shashi</p>
                <p class="font-alt p-font"><span class="span-font">Mobile: </span><a href="tel:+91 9582438899">+91 9582438899</a></p>
                <p class="font-alt p-font"><span class="span-font">Email: </span><a href="mailto: shashikanth.kolben@gmail.com">shashikanth.kolben@gmail.com</a></p>
                <a class="map-btn" href="https://www.google.com/maps/search/Kolben+Hydraulics+Limited+No.6%2F13,Kirti+Nagar+Industrial+Area,+New+Delhi+%E2%80%93+110015,+India/@28.6544741,77.1456739,17z/data=!3m1!4b1" target="_blank">View on Map</a>
            </div>
          </div>

          <div class="row mg-top1">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <h4 class="module-title font-alt mg0">Get in touch</h4><br/>
                <form method="post" action="./contact1.php">
  
                  <div class="messages"></div>
  
                  <div class="controls">
  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name" class="footer-list-link">Name *</label>
                          <input id="form_name" type="text" name="name" class="form-control footer-input margin-b-20" placeholder="Please enter your name" required="required" data-error="Firstname is required.">
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email" class="footer-list-link">Email *</label>
                          <input id="form_email" type="email" name="email" class="form-control footer-input margin-b-20" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_company" class="footer-list-link">Company Name *</label>
                          <input id="form_company" type="text" name="company" class="form-control footer-input margin-b-20" placeholder="Please enter the company name" required="required" data-error="Valid company name is required.">
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_suject" class="footer-list-link">Subject *</label>
                          <input id="form_subject" type="tel" name="subject" class="form-control footer-input margin-b-20" required="required" placeholder="Please enter your Subject" data-error="Valid subject is required.">
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-12">
                        <div class="form-group">
                          <label for="form_phone" class="footer-list-link">Phone</label>
                          <input id="form_phone" type="tel" name="phone" class="form-control footer-input margin-b-20" placeholder="Please enter your phone">
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-12">
                        <div class="form-group">
                          <label for="form_zone" class="footer-list-link">Zone Name</label> <br>
                          <select name="zone" id="form_zone">
                            <option value="delhi">
                              Delhi(NORTH ZONE)
                            </option>
                            <option value="faridabad">
                              Faridabad(NORTH ZONE)
                            </option>
                            <option value="Kolkata">
                              Kolkata(EAST ZONE)
                            </option>
                            <option value="mumbai">
                              Mumbai(WEST ZONE)
                            </option>
                            <option value="Ahmedabad">
                              Ahmedabad(WEST ZONE)
                            </option>
                            <option value="pune">
                              Pune(WEST ZONE)
                            </option>
                            <option value="bangalore">
                              Bangalore(SOUTH ZONE)
                            </option>
                            <option value="Sharjah">
                              Sharjah(UAE)
                            </option>
                          </select>
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form_message" class="footer-list-link">Message *</label>
                          <textarea id="form_message" name="message" class="form-control footer-input margin-b-20" placeholder="Type Your message here" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                          <div class="help-block with-errors" id="error-contact"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-b btn-circle text-uppercase" name="submit">Send message</button>
                      </div>
                    </div>
                  </div>
  
                </form>
            </div>
          </div>

        </div>

      </section>

      <hr class="divider-w">

      



      

  <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
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
  <script src="assets/lib/smoothscroll.js"></script>
  <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
  <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
  <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

  <script src="assets/js/validator.js"></script>
  <script src="assets/js/contact.js"></script>
</body>
</html>
