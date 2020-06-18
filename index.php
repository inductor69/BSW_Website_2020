<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Home | BSW</title>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">

	body{
		background-color: #a4e7f055;
	}

	

	#carouselExampleIndicators img {
		height: 600px;
	}

	.main-text {
		position: absolute;
		top: 50px;
		width: 100%;
		color: #FFF;

	}
	.intro-text {
		padding-top: 60px;
		font-weight: 700;
		font-size: 6vw;
		text-shadow: 2px 2px 2px #000000;
	}
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
		font-family: sans-serif !important;
		font-size: 30px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align:center;
		font-weight: bold;
		line-height:60px !important;
		cursor:pointer;
	}
	.home-quick-links:hover{
		scale:1.2;
		transition:0.15s ease-out;
		cursor:pointer;
	}
	#yourDost{
		background: #FFE487;
		border-radius: 10px;
	}
	#almaConnect{
		background: #9FE5E3;
		border-radius: 10px;
	}
	#bswLoans{
		background: #7CAAE4;
		border-radius: 10px;
	}
	#careerCounselling{
		background: #EF949A;
		border-radius: 10px;
		font-family: AirbnbCerealApp-ExtraBold;
		font-size: 24px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align: center;
	}
	#qPapers{
		background: #FFE487;
		border-radius: 10px;
		font-family: AirbnbCerealApp-ExtraBold;
		font-size: 24px;
		color: rgba(0,0,0,0.46);
		letter-spacing: 0;
		text-align: center;
	}

	.notices{
		background-color: #00000023;
		border-radius: 10px;
		padding: 10px;
		margin-top:20px;
		margin-bottom: 20px;

	}

	
	.notice-h2,.notice-p{
	font-size:100%;
	font-weight:normal;
	}
	.notice-ul,.notice-li{
	list-style:none;
	}
	.notice-ul{
	overflow:hidden;
	padding:3em;
	}
	.notice-ul .notice-li .notice-a{
	text-decoration:none;
	color:#000;
	background:#ffc;
	display:block;
	height:11em;
	width:11em;
	-moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
	-webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
	box-shadow: 5px 5px 7px rgba(33,33,33,.7);
	-moz-transition:-moz-transform .15s linear;
	-o-transition:-o-transform .15s linear;
	-webkit-transition:-webkit-transform .15s linear;
	}
	.notice-ul .notice-li{
	margin:1em;
	float:left;
	}
	.notice-ul .notice-li .notice-h2{
	font-size:140%;
	font-weight:bold;
	padding-bottom:10px;
	}
	.notice-ul .notice-li .notice-p{
	font-family:"Reenie Beanie",arial,sans-serif;
	font-size:180%;
	}
	.notice-ul .notice-li .notice-a{
	-webkit-transform: rotate(-6deg);
	-o-transform: rotate(-6deg);
	-moz-transform:rotate(-6deg);
	}
	.notice-ul .notice-li:nth-child(even) .notice-a{
	-o-transform:rotate(4deg);
	-webkit-transform:rotate(4deg);
	-moz-transform:rotate(4deg);
	position:relative;
	top:5px;
	background:#cfc;
	}
	.notice-ul .notice-li:nth-child(3n) .notice-a{
	-o-transform:rotate(-3deg);
	-webkit-transform:rotate(-3deg);
	-moz-transform:rotate(-3deg);
	position:relative;
	top:-5px;
	background:#ccf;
	}
	.notice-ul .notice-li:nth-child(5n) .notice-a{
	-o-transform:rotate(5deg);
	-webkit-transform:rotate(5deg);
	-moz-transform:rotate(5deg);
	position:relative;
	top:-10px;
	}
	.notice-ul .notice-li .notice-a:hover,.notice-ul .notice-li .notice-a:focus{
	box-shadow:10px 10px 7px rgba(0,0,0,.7);
	-moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
	-webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
	-o-transform: scale(1.2);
	position:relative;
	z-index:5;
	}
	.notice-ol{text-align:center;}
	.notice-ol .notice-li{display:inline;padding-right:1em;}
	.notice-ol .notice-li .notice-a{color:#fff;}



	@media (max-width: 992px){
		.home-quick-links:hover{
		scale:1.1;
		transition:0.15s ease-out;
		cursor:pointer;
		}
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
                <img class="d-block w-100 imagic" src="images/iitpyramid4.jpg" alt="First slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">   
                  <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 imagic" src="images/iitpyramid2.jpg" alt="Second slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">
                  <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a>
                </div>
           </div>

            <div class="carousel-item">
                <img class="d-block w-100 imagic" src="images/team_pic.jpg" alt="Second slide" style="object-fit: cover;">
                <div class="carousel-caption " style="padding-bottom: 40px">
                  <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 imagic" src="images/carousel-svg.svg" alt="Second slide" style="object-fit: cover;">
             
                <div class="carousel-caption " style="padding-bottom: 40px">
                   
    
             <a href="#about-us"> <button class="btn btn-primary text-uppercase btn-lg">start exploring</button></a>
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

        <div class="main-text text-center">
            <div class="col-md-12 text-center " >
                <h1 class="intro-text">Board for Student Welfare</h1>
                <!-- <h3 class="intro-text-subtitle">BSW-IIT Delhi Welcomes You</h3> --> 
                
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
	<div class="container">

		<div class="row">
			<div class="col-12 col-lg-4">
			<div id="yourDost" class="home-quick-links">
			<img src="images/yourDost.svg" width="60" height="60" alt="">
			Counselling
			</div>
			<div id="almaConnect" class="home-quick-links">
			<img src="images/almaConnect.svg" width="60" height="60" alt="">
			AlmaConnect
			</div>
			<div id="bswLoans" class="home-quick-links">
			<img src="images/bswLoans.svg" width="60" height="60" alt="">
			BSW Loans
			</div>
			<div  id="careerCounselling" class="home-quick-links">
			<img src="images/careerCounselling.svg" width="60" height="60" alt="">
			Career Counselling
			</div>
			<div  id="qPapers" class="home-quick-links">
			<img src="images/qPapers.svg" width="60" height="60" alt="">
			Question Papers
			</div>
			<div  id="qPapers" class="home-quick-links">
			<img src="images/qPapers.svg" width="60" height="60" alt="">
			Filler Link
			</div>
			</div>

			<div class="col-12 col-lg-8 notices">
					<ul class="notice-ul">
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #1</h2>
							<p class="notice-p">Text Content #1</p>
						</a>
						</li>
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #2</h2>
							<p class="notice-p">Text Content #2</p>
						</a>
						</li>
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #3</h2>
							<p class="notice-p">Text Content #3</p>
						</a>
						</li>
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #4</h2>
							<p class="notice-p">Text Content #4</p>
						</a>
						</li>
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #5</h2>
							<p class="notice-p">Text Content #5</p>
						</a>
						</li>
						<li class="notice-li">
						<a class="notice-a" href="#">
							<h2 class="notice-h2">Title #6</h2>
							<p class="notice-p">Text Content #6</p>
						</a>
						</li>
					</ul>
			</div>

		</div>

	</div>
</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



</body>
</html>