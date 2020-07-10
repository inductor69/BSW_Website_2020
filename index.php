<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar,0dega menu examples" />
<meta name="description" content="Board of Student Welfare, IIT Delhi" />  

<title>Home | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" i0degrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.min.js"></script>

<style type="text/css">

	

	#carouselExampleIndicators img {
		height: 600px;
	}

	.main-text {
		position: absolute;
		top: 50px;
		width: 100%;
		color: #FFF;
		text-align: center;
		font-family: NeueMontreal-Bold;

	}
	@media (max-width:988px){
		.intro-text {
		padding-top: 40px;
		font-weight: 600;
		font-size: 30px;
		padding-left: 20px;
	}
}
	@media (min-width:987px){
		.intro-text {
		padding-top: 30px;
		font-weight: 600;
		font-size: 40px;
	}}
	
	.intro-text-subtitle {
		font-weight: 400;
		font-size: 4vw;
		text-shadow: 2px 2px 2px #000000;
	}

	.btn-lg {
		background-color: #00695c;
		border-color: #00695c;
	}

	.btn-primary{
		border-radius: 100px;
	}

	.about-us-title{
		font-size: 4rem;
		opacity: 0.6;
	}
	.about-us-text{
		color: #fff;
		font-weight: medium;
		font-size:1rem;
		margin-bottom: 20px;
	}
	.line-break{
		width:80%;
		border: 0;
		height: 10px;
		background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	}
	#about-us{
		background-image: linear-gradient(90deg, #67B26F 0%, rgba(76,162,205,0.61) 100%);
	}

	#right-drop-arrow{
		font-size:10px !important;
		line-height:12px !important;
	}

	.home-quick-links{
		border-radius: 10px;
		padding:10px;
		margin:18px;
		font-size: 30px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align:center;
		font-weight: bold;
		line-height:60px !important;
		cursor:pointer;
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.1);
		transition: all 0.4s ease-out;
	}
	.home-quick-links:hover{
		scale:1.1;
		transition: all 0.4s ease-out;
		cursor:pointer;
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.3);
	}
	#yourDost{
		background: #FFE487;
		border-radius: 10px;
		font-family: 'neue_montrealmedium' !important;
	}
	#almaConnect{
		background: #9FE5E3;
		border-radius: 10px;
		font-family: 'neue_montrealmedium' !important;
	}
	#bswLoans{
		background: #7CAAE4;
		border-radius: 10px;
		font-family: 'neue_montrealmedium' !important;
	}
	#careerCounselling{
		background: #EF949A;
		border-radius: 10px;
		font-size: 24px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align: center;
		font-family: 'neue_montrealmedium' !important;
	}
	#qPapers{
		background: #FFE487;
		border-radius: 10px;
		font-size: 24px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align: center;
		font-family: 'neue_montrealmedium' !important;
	}

	.notice-inner:nth-child(even){
		background:#ffc;
		border-radius: 10px;
		padding: 10px;
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.1);
		transition: all 0.15s ease-out;
	}

	.notice-inner:nth-child(odd){
		background:#ffc;
		border-radius: 10px;
		padding: 10px;
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.1);
		transition: all 0.15s ease-out;
	}

	.notice-inner:hover{
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.3);
		transition:all 0.15s ease-out;
	}


	.notice-ol{text-align:center;}
	.notice-ol .notice-li{display:inline;padding-right:1em;}
	.notice-ol .notice-li .notice-a{color:#fff;}
	.quote-container {
  margin-top: 20px;
  position: relative;
}

.note {
  color: #333;
  position: relative;
  width: 100%;
  margin: 0 auto;
  padding: 10px;
  box-shadow: 0 10px 10px 2px rgba(0,0,0,0.1);
  border-radius:10px;
  transition: all 0.15s ease-out;
}

.note:hover{
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.3);
		transition:0.2s ease-out;
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
		transition: all 0.15s ease-out;
	}

.note .author {
  display: block;
  margin: 40px 0 0 0;
  text-align: right;
}

.pinned-note2 {
  background: #ffc;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  transform: rotate(2deg);
}

.pinned-note1 {
  background: #d0fed0a6;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}

.pin {
  background-color: #aaa;
  display: block;
  height: 32px;
  width: 2px;
  position: absolute;
  left: 50%;
  top: -16px;
  z-index: 1;
}
.pin:after {
  background-color: #A31;
  background-image: radial-gradient(25% 25%, circle, hsla(0,0%,100%,.3), hsla(0,0%,0%,.3));
  border-radius: 50%;
  box-shadow: inset 0 0 0 1px hsla(0,0%,0%,.1),
              inset 3px 3px 3px hsla(0,0%,100%,.2),
              inset -3px -3px 3px hsla(0,0%,0%,.2),
              23px 20px 3px hsla(0,0%,0%,.15);
  content: '';
  height: 12px;
  left: -5px;
  position: absolute;
  top: -10px;
  width: 12px;
}
.pin:before {
  background-color: hsla(0,0%,0%,0.1);
  box-shadow: 0 0 .25em hsla(0,0%,0%,.1);
  content: '';

  height: 24px;
  width: 2px;
  left: 0;
  position: absolute;
  top: 8px;

  transform: rotate(57.5deg);
  -moz-transform: rotate(57.5deg);
  -webkit-transform: rotate(57.5deg);
  -o-transform: rotate(57.5deg);
  -ms-transform: rotate(57.5deg);

  transform-origin: 50% 100%;
  -moz-transform-origin: 50% 100%;
  -webkit-transform-origin: 50% 100%;
  -ms-transform-origin: 50% 100%;
  -o-transform-origin: 50% 100%;
}



	@media (max-width: 992px){
		.home-quick-links:hover{
		scale:1.1;
		transition:0.15s ease-out;
		cursor:pointer;
		}
	}
	.photostack figcaption h2{
		margin: -20px !important;
		z-index: 2000 !important;
	}
	.photostack-img{
		height: 300px !important;
		width: 300px !important;
	}
	.gallery-img{
		margin-bottom: -20px !important;
		padding: 0px !important;
		height: 300px !important;
		width: 300px !important;
	}
	.photostack figure{
		width: 360px !important;
		height: 360px !important;
		padding: 32px !important;
		padding-top: 20px !important;
		padding-bottom: 50px !important;
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.2) !important;
		transition: all 0.4s ease-in-out !important;
	}
	.photostack figure:hover{
		box-shadow: 0 10px 10px 2px rgba(0,0,0,0.4) !important;
		transition: all 0.4s ease-in-out !important;

	}
	.photostack figcaption h2{
		z-index:20000 !important;
		position: relative !important;
		padding: 30px !important;
	}

	#photostack-1
	{
		background-image: #000 !important;
	}
	.photostack{
		background: #ECE9E6;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to bottom, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to bottom, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>

<div id="carousel-section">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img class="d-block w-100 imagic" src="images/carousel1.JPG" alt="First slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">   
                  <!-- <h1 class="main-text">Board of Student Welfare</h1> -->
                </div>
            </div>

            <div class="carousel-item ">
                <img class="d-block w-100 imagic" src="images/carousel2.jpg" alt="Second slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">
                  <!-- <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a> -->
                </div>
           </div>

            <div class="carousel-item">
                <img class="d-block w-100 imagic" src="images/carousel3.png" alt="Second slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">
                  <!-- <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a> -->
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 imagic" src="images/carousel4.jpeg" alt="Second slide" style="object-fit: cover;">
             
                <div class="carousel-caption " style="padding-bottom: 40px">
                   
    
             <!-- <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a> -->
            </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>


            </a>
        </div>

        <div class="main-text ">
            <div class="col-12 " >
                <h1 class="intro-text">Board for Student Welfare</h1>
                
            </div>
        </div>
    </div>

</div>

<div id="about-us">
  <br />

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-12 col-lg-4 justify-content-center">
          <h1 class="about-us-title">About Us</h1>
        </div>

        <div class="col-12 col-lg-8">
          <p class="about-us-text">BSW “Board for Student Welfare” consists of student
            representatives from each hostel and a few faculty members. This
            board has been constituted to help the students in the hour of need.
            BSW gives financial help, informative sessions, counselling and looks after other modes of
            student welfare.
          </p>
        </div>

      </div>

    </div>

</div>

<div id="home-quick-links-notices">
	<div class="container-fluid my-4">

		<div class="row flex-lg-row-reverse">

			<div class="col-12 col-lg-8 notices  my-auto">
					<div class="row justify-content-center">
					
					<div class="notice col-6 my-2">
						<div class="quote-container">
						<i class="pin"></i>
						<blockquote class="note pinned-note1">
						<h3>Blanket Camp</h3>
						<h5>31 Oct 2019</h5>
						<p>BSW is organising a blanket camp, for notice regarding quotations and other information, <a href="http://bsw.iitd.ac.in/notices/camp-converted.pdf" target="_blank">click here</a></p>
						<p>BSW is organising a blanket camp, for notice regarding quotations and other information, <a href="http://bsw.iitd.ac.in/notices/camp-converted.pdf" target="_blank">click here</a></p>
						</blockquote>
						</div>
					</div>

					<div class="notice   col-6">
						<div class="quote-container">
						<i class="pin"></i>
						<blockquote class="note pinned-note2">
						<h3>Cycle Camp</h3>
						<h5>18 - 21 July 2019</h5>
						<p>BSW is organising a cycle camp, for notice regarding quotations and other information, <a href="http://bsw.iitd.ac.in/notices/camp-converted.pdf" target="_blank">click here</a></p>
						<p>BSW is organising a cycle camp, for notice regarding quotations and other information, <a href="http://bsw.iitd.ac.in/notices/camp-converted.pdf" target="_blank">click here</a></p>
						</blockquote>
						</div>
					</div>

					<!-- <div class="notice    col-5 col-md-3 col-lg-3 my-2">
						<div class="quote-container">
						<i class="pin"></i>
						<blockquote class="note yellow">
						<h3>Blanket Camp</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</blockquote>
						</div>
					</div>
					<div class="notice   col-5 col-md-3 col-lg-3 my-2">
						<div class="quote-container">
						<i class="pin"></i>
						<blockquote class="note yellow">
						<h3>Blanket Camp</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</blockquote>
						</div>
					</div> -->

					<div class="notice   col-5 col-md-3 col-lg-3 my-4">
						<div class="notice-inner">
						<h3>Sample Notice</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</div>
					</div>
					<div class="notice   col-5 col-md-3 col-lg-3 my-4">
					<div class="notice-inner">
						<h3>Sample Notice</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</div>
					</div>
					<div class="notice col-5 col-md-3 col-lg-3 my-4">
					<div class="notice-inner">
						<h3>Sample Notice</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</div>
					</div>
					<div class="notice   col-5 col-md-3 col-lg-3 my-4">
					<div class="notice-inner">
						<h3>Sample Notice</h3>
						<h5>31 Oct 2019</h5>
						<p>Sample text sample sample sample sample sample sample</p>
						</div>
					</div>


					</div>
	
			</div>

				<div class="col-12 col-lg-4">
				<a href="" style="text-decoration: none">
				<div id="yourDost" class="home-quick-links">
				<img src="images/yourDost.svg" width="60" height="60" alt="">
				Counselling
				</div>
				</a>
				<a href="https://iitd.almaconnect.com/" style="text-decoration: none" >
				<div id="almaConnect" class="home-quick-links">
				<img src="images/almaConnect.svg" width="60" height="60" alt="">
				AlmaConnect
				</div>
				</a>
				<a href="bsw_loans.php" style="text-decoration: none" >
				<div id="bswLoans" class="home-quick-links">
				<img src="images/bswLoans.svg" width="60" height="60" alt="">
				BSW Loans
				</div>
				</a>
				<a href="index.php" style="text-decoration: none" >
				<div  id="careerCounselling" class="home-quick-links">
				<img src="images/careerCounselling.svg" width="60" height="60" alt="">
				Career Counselling
				</div>
				</a>
				<a href="question_papers.php" style="text-decoration: none" >
				<div  id="qPapers" class="home-quick-links">
				<img src="images/qPapers.svg" width="60" height="60" alt="">
				Question Papers
				</div>
				</a>
				</div>

		</div>

	</div>
</div>

<div id="events-gallery">
<div class="container-fluid mt-4" style="padding-right: 0px;padding-left: 0px; margin-bottom:0px;">


			<div id="photostack-1" class="photostack col-12">
				<div>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/comedynight.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Comedy Night ft. Nishant Tanwar</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/bandnight.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Band Night ft. Zikrr</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_delhidarshan/5.JPG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Delhi Darshan</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/promnight.jpg" alt="Prom Night" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Prom Night</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_sticd/5.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">STIC Dinner</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/jeopardy.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Jeopardy</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_delhidarshan/1.JPG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Delhi Darshan</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_delhidarshan/6.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Delhi Darshan</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_delhidarshan/2.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Delhi Darshan</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_delhidarshan/8.JPG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Delhi Darshan</h2>
						</figcaption>
					</figure>
					<figure >
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/op_orientation/1.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Orientation</h2>
						</figcaption>
					</figure>
					<figure >
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/enigma_poster.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Enigma: The Magic Show</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/enigma.PNG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Enigma: The Magic Show</h2>
						</figcaption>
					</figure>
					<figure >
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/freshersmrmrs.jpg" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Mr & Ms Freshers</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/bandnight_poster.JPG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Band Night ft. Zikrr</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img class="gallery-img" src="images/comedynight_poster.JPG" alt="Comedy Night ft. Nishant Tanwar" style="height:240px; width:240px; object-fit:cover;"/></a>
						<figcaption>
							<h2 class="photostack-title">Comedy Night ft. Nishant Tanwar</h2>
						</figcaption>
					</figure>
					
					
				</div>
			</div>
			
</div>


		<script src="js/classie.js"></script>
		<script src="js/photostack.js"></script>
		<script>
			// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
			
			new Photostack( document.getElementById( 'photostack-1' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
		</script>
</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" i0degrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" i0degrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<script type="text/javascript">

	var myNav = document.getElementById('myNav');

	$(function (){
		if ($(window).width() > 992) {
      "use strict";
      if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
          myNav.classList.add("nav-colored");
          myNav.classList.remove("nav-transparent");
          console.log("Nav is now colored on scroll")
      } 
      else {
          myNav.classList.add("nav-transparent");
          myNav.classList.remove("nav-colored");
          console.log("Nav transparent initally")
      }
    }
	})
	
    window.onscroll = function () { 
      if ($(window).width() > 992) {
      "use strict";
      if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
          myNav.classList.add("nav-colored");
          myNav.classList.remove("nav-transparent");
          console.log("Nav is now colored on scroll")
      } 
      else {
          myNav.classList.add("nav-transparent");
          myNav.classList.remove("nav-colored");
          console.log("Nav transparent initally")
      }
    }
	};


	
	
	if($(window).width() < 992){
		myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
		console.log("Nav is colored")
		}

 


</script>
</body>
</html>