<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>BSW  Home</title>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<script type="text/javascript">
$(document).ready(function() {
	// jQuery code

	//Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
	});
	
	$('#navbar-toggler').click(function(){
		if ($('#navbar-toggler').children('span').hasClass('fa-bars'))
		{
                $('#navbar-toggler').children('span').removeClass('fa-bars');
                $('#navbar-toggler').children('span').addClass('fa-times');
			}else if ($('#navbar-toggler').children('span').hasClass('fa-times'))
			{
                $('#navbar-toggler').children('span').removeClass('fa-times');
                $('#navbar-toggler').children('span').addClass('fa-bars');
            }
    
	});
	console.log("icon changed");

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
		});

		
	
	}
	
}); // jquery end
</script>

<style type="text/css">

body{
    background-color: #a4e7f055;
}

	.navbar-nav a{
		color:#fff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        font-weight: 700;
        font-size: 1.2rem;
        text-shadow: 0.5px 0.5px 0.5px #2222226b;
	}
	.navbar-toggler{
    color: #fff;
	}

	.nav-colored { 
    background-image: linear-gradient(90deg, #67B26F 0%, rgba(76,162,205,0.61) 100%);
    border: none;
    margin-top: -1px;
	}

	.nav-transparent { 
    background-color:transparent;
    transition: linear;
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
		.dropdown-menu{
			background: transparent !important;
			border: none !important;
		}
		.dropdown-item:active, .dropdown-item:hover, .dropdown-item:focus{
			background-color: #00000023 !important;
			border-radius: 10px !important;
			border: none !important;
			color: #FFFFFF !important;
		}

		.home-quick-links:hover{
		scale:1.1;
		transition:0.15s ease-out;
		cursor:pointer;
	}
	}
	@media (min-width: 992px){
		
		.dropdown-menu .dropdown-toggle:after{
			font-size: 12px !important;
			font-weight:medium !important;
			background: #00000023 !important;
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu {
			margin-left:0; margin-right: 0;
			background: #00000088 !important;
			border:none !important;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}

	
	}
</style>

</head>


<body >
		<div class="container">

		<nav class="navbar navbar-expand-lg mr-auto fixed-top nav-colored">

		<a class="navbar-brand" href="#">
			<img src="images/logo.svg" width="120" height="30" alt="">
		</a>
		<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
			<span class="fa fa-bars fa-lg"></span>
		</button>
		
		<div class="collapse navbar-collapse justify-content-center" id="main_nav">

			<ul class="navbar-nav nav justify-content-center">

				<li class="nav-item active"> 
					<a class="nav-link" href="#">Freshers'20</a>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> 
						Who We Are
					</a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#"> About Us </a></li>
					<li><a class="dropdown-item" href="#"> Diary &amp; Newsletter </a></li>
					<li><a class="dropdown-item" href="#"> BSW Structure </a></li>
					</ul>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						What We Do
					</a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Mentorship <span id="right-drop-arrow">&#9658;</span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="">Academic Mentorship</a></li>
							<li><a class="dropdown-item" href="">Alumni Mentorship</a></li>
							<li><a class="dropdown-item" href="">Language Mentorship </a></li>
							<li><a class="dropdown-item" href="">Mental Health Mentorship &amp; Counselling</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Operations <span id="right-drop-arrow">&#9658;</span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="">Female JEE Counselling</a></li>
							<li><a class="dropdown-item" href="">Orientation</a></li>
							<li><a class="dropdown-item" href="">Delhi Darshan</a></li>
							<li><a class="dropdown-item" href="">STIC Dinner</a></li>
							<li><a class="dropdown-item" href="">Convergenz</a></li>
							<li><a class="dropdown-item" href="">Informative Sessions</a></li>
							<li><a class="dropdown-item" href="">BSW Loans</a></li>
							<li><a class="dropdown-item" href="">SCOOPS</a></li>
							<li><a class="dropdown-item" href="">Workshops</a></li>
						</ul>
					</li>
					</ul>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						Resources
					</a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Academics <span id="right-drop-arrow">&#9658;</span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="">Question Papers</a></li>
							<li><a class="dropdown-item" href="">Booklets</a></li>
							<li><a class="dropdown-item" href="">Equivalent Courses</a></li>
							<li><a class="dropdown-item" href="">Interns &amp; NGOs</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Medical Facilities <span id="right-drop-arrow">&#9658;</span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="">Hospital Insurance Form</a></li>
							<li><a class="dropdown-item" href="">Wheelchair Form</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Internet &amp; Email <span id="right-drop-arrow">&#9658;</span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="">Email Configuration</a></li>
							<li><a class="dropdown-item" href="">Internet Setup</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Softwares</a></li>
					<li><a class="dropdown-item" href="#">Quick Links</a></li>
					<li><a class="dropdown-item" href="#">Forms</a></li>
					<li><a class="dropdown-item" href="#">Emergency Contacts</a></li>
					</ul>
				</li>

				<li class="nav-item mr-4">
					<a class="nav-link" href="#">FAQs</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"><span class="fa fa-facebook-square fa-lg"></span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"><span class="fa fa-paper-plane fa-lg"></span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#"><span class="fa fa-whatsapp fa-lg"></span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#"><span class="fa fa-instagram fa-lg"></span></a>
				</li>

			</ul>


		</div>

		</nav>


		</div>

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
                <h3 class="intro-text-subtitle">BSW-IIT Delhi Welcomes You</h3>
                
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
			</div>

			<div class="col-12 col-lg-8">
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
							<h2 class="notice-h2">Title #2</h2>
							<p class="notice-p">Text Content #2</p>
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
							<h2 class="notice-h2">Title #2</h2>
							<p class="notice-p">Text Content #2</p>
						</a>
						</li>
					</ul>
			</div>

		</div>

	</div>
</div>


</body>
</html>