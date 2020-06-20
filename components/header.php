
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<style type="text/css">

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
	margin-top:0;
	}

	.nav-transparent { 
    background-color:transparent;
    transition: linear;
	}

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

<html>
<body>

		<div class="container">

		<nav class="navbar navbar-expand-lg mr-auto fixed-top nav-colored " id="myNav">

		<a class="navbar-brand" href="index.php">
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
					<li><a class="dropdown-item" href="diary_newsletter.php">Diary &amp; Newsletter </a></li>
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
							<li><a class="dropdown-item" href="https://iitd.almaconnect.com/">Alumni Mentorship</a></li>
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
							<li><a class="dropdown-item" href="convergenz.php">Convergenz</a></li>
							<li><a class="dropdown-item" href="">Informative Sessions</a></li>
							<li><a class="dropdown-item" href="bsw_loans.php">BSW Loans</a></li>
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

						<li>
							<a class="dropdown-item" href="#">Academics <span id="right-drop-arrow">&#9658;</span></a>
							<ul class="submenu dropdown-menu">
								<li><a class="dropdown-item" href="">Question Papers</a></li>
								<li><a class="dropdown-item" href="booklets.php">Booklets</a></li>
								<li><a class="dropdown-item" href="">Equivalent Courses</a></li>
								<li><a class="dropdown-item" href="intern.php">Interns &amp; NGOs</a></li>
							</ul>
						</li>

						<li>
							<a class="dropdown-item" href="#">Medical Facilities <span id="right-drop-arrow">&#9658;</span></a>
							<ul class="submenu dropdown-menu">
								<li><a class="dropdown-item" href="health_insurance.php">Health Insurance</a></li>
								<li><a class="dropdown-item" target="_blank" href="forms/wheelchair.pdf">Wheelchair Form</a></li>
							</ul>
						</li>

						<li>
							<a class="dropdown-item" href="#">Internet &amp; Email <span id="right-drop-arrow">&#9658;</span></a>
							<ul class="submenu dropdown-menu">
								<li><a class="dropdown-item" href="email_config.php">Email Configuration</a></li>
								<li><a class="dropdown-item" href="wifi_config.php">Internet Setup</a></li>
							</ul>
						</li>

						<li>
							<a class="dropdown-item" href="softwares.php">Softwares</a>
						</li>

						<li>
							<a class="dropdown-item" href="links.php">Quick Links</a>
						</li>

						<li>
							<a class="dropdown-item" href="forms.php">Forms</a>
						</li>

						<li>
							<a class="dropdown-item" href="emergency_contacts.php">Emergency Contacts</a>
						</li>

					</ul>
				</li>

				<li class="nav-item mr-4">
					<a class="nav-link" href="faq.php">FAQs</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="https://www.facebook.com/boardforstudentwelfare"><span class="fa fa-facebook-square fa-lg"></span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="https://www.instagram.com/bsw_iitd/"><span class="fa fa-instagram fa-lg"></span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="mailto:info.bsw.iitdelhi@gmail.com"><span class="fa fa-paper-plane fa-lg"></span></a>
				</li>
				
				

			</ul>


		</div>

		</nav>


		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<script type="text/javascript">


	$(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
	});
	
	

$(document).ready(function() {

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

}); 


</script>

</body>
</html>

		




