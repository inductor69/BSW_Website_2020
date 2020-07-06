<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Delhi Darshan | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>


<style type="text/css">
	html{
		scroll-behavior: smooth !important;
	}
	body{
		background-color: #a4e7f055;
		scroll-behavior: smooth !important;
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
	#about-us{
        margin-top:0px;
        background-image: linear-gradient(180deg, #C02425 0%, #F0CB35 100%);	
		}
    .convergenz-logo{
        margin-top:60px;
        height:auto;
        width:100%;
        padding-bottom:40px;
        padding-top:20px;
    }
    .convergenz-event{
        width:100%;
        height:auto;
        display: inline-block;
    }
	.dd-text{
		font-size:1.1rem;
	}
	.arrow-up {
	 height: 40px;
	 width: 42px;
	 display: block;
	 border: 1px solid #fff;
	 position: relative;
	 cursor: pointer;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 overflow: hidden;
}
 .arrow-slide {
	 left: 0;
	 top: -100%;
	 width: 100%;
	 height: 100%;
	 background: #fff;
	 position: absolute;
	 display: block;
	 z-index: 0;
}
 .left-arm {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 19px;
	 left: 3px;
	 width: 20px;
	 display: block;
	 transform: rotate(-45deg);
}
 .left-arm:after {
	 content: "";
	 background-color: #fff;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: right center;
	 z-index: -1;
}
 .right-arm {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 19px;
	 left: 17px;
	 width: 20px;
	 display: block;
	 transform: rotate(45deg);
	 border-radius: 2px;
}
 .right-arm:after {
	 content: "";
	 background-color: #fff;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: left center;
	 z-index: -1;
}
 .arrow-up:hover {
	 transition: all 0.1s;
}
 .arrow-up:hover .left-arm:after {
	 transform: rotate(-10deg);
}
 .arrow-up:hover .right-arm:after {
	 transform: rotate(10deg);
}
 .arrow-up:hover .arrow-slide {
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}

.arrow-up:active {
	 transition: all 0.1s;
}
 .arrow-up:active .left-arm:after {
	 transform: rotate(-10deg);
}
 .arrow-up:active .right-arm:after {
	 transform: rotate(10deg);
}
 .arrow-up:active .arrow-slide {
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}

.arrow-box{
	transform: rotate(180deg);
}
 
 

	
</style>
<link href="css/touchTouch.css" rel="stylesheet" type="text/css"/>
</head>

<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>
<body >
<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center ">

            <div class="col-12">
            <img src="images/delhidarshan.svg" class="convergenz-logo">
            </div>

        </div>

        <div class="row justify-content-center ">

            <div class="col-12 about-us-text" style="text-align: center;">
            <p class="dd-text">Delhi Darshan 2019 was organized on the 3rd & 4th of August. It was a tour across Delhi, relishing the beauty of the city involving indelible bus-rides, exciting ice- breakers for freshers and memories they will cherish forever. We visited the Qutub Minar, the Lotus Temple and finally spent some quality time at Lodhi Gardens. A couple of buses even visited the Gurudwara.</p>
			
			<div class="row arrow-box justify-content-center" style="text-align: center;">
			<a class="arrow-up" href="#gallery">
				<span class="left-arm"></span>
				<span class="right-arm"></span>
				<span class="arrow-slide"></span>
			</a>
			</div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid mt-4" id="gallery">
	<style>
		.thumbnail{
			object-fit: cover !important;
			display: block;
			margin-bottom:10px;
			width:95%;
			height:auto;
			border-radius: 10px;
		}
		.img-link{
			margin-bottom:10px;
		}

	</style>


	<div class="row justify-content-center your-class">
	<?php
		for($i=1; $i<10; $i=$i+1){
			echo '<div>';
			echo '<a class=" img-link col-12 col-md-4 col-lg-3" href="images/op_delhidarshan/'.$i.'.JPG" >';
			echo '<img class="thumbnail" src="images/op_delhidarshan/'.$i.'.JPG" alt="BSW Delhi Darshan" />';
			echo '</a>';
			echo '</div>';
		}
		?>
			
	</div>

	<div class="row arrow-box justify-content-center" style="text-align: center;">
			<a class="arrow-up" href="#journey">
				<span class="left-arm"></span>
				<span class="right-arm"></span>
				<span class="arrow-slide"></span>
			</a>
	</div>

	<div id="journey"></div>

</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script>
	$(document).ready(function(){
		$('.your-class').slick({
			centerMode: true,
			centerPadding: '60px',
			slidesToShow: 3,
			responsive: [
				{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
				},
				{
				breakpoint: 480,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
				}
			]
		});
	});
</script>



</body>

</html>