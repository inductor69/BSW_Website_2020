<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

<title>Female JEE Counselling | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/touchTouch.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">

html {
overflow-y: scroll
}
.justifiedGallery {
width: 100%;
margin-bottom: 10px
}
.justifiedGallery .jg-image {
position: absolute;
display: inline-block;
vertical-align: top;
margin-left: 0
}
.justifiedGallery .jg-image img {
border: none;
display: none
}
.justifiedGallery .jg-image a {
text-decoration: none
}
.justifiedGallery .jg-image-label {
white-space: normal;
font: normal 12px arial;
background: #000;
color: #fff;
position: absolute;
left: 0;
right: 0;
padding: 5px 5px 10px 8px;
text-align: left;
opacity: 0;
filter: alpha(opacity=0)
}
.justifiedGallery .jg-loading-img {
margin: auto;
width: 50px;
height: 50px;
background: url(../img/loading.gif) no-repeat center center
}
.justifiedGallery .jg-loading {
margin: auto;
width: 50px;
height: 50px;
background-color: white;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px
}
.justifiedGallery .jg-row {
position: relative;
white-space: nowrap;
overflow: hidden;
margin-bottom: 4px
}

	body{
		background-color: #a4e7f055;
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
    padding-top:60px;
        margin-top:0px;
		background-image: linear-gradient(90deg, #67B26F 0%, #4CA2CD 100%);
	}
	.orientation-image{
		object-fit: cover !important;
		display: block;
		margin-bottom:10px;
		width:100%;
		height:100%;
	}

	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center">
            <h1 class="about-us-title mx-2">Female JEE Counselling</h1>
            </div>

			<p class="about-us-text mx-2">
			A female counselling session was organised by BSW in collaboration with IGES (Initiative for Gender Equity and Sensitization) on the 23rd June 2019 to increase awareness among female IIT aspirants who had cleared JEE Advanced. 
			This session was conducted in a view to help the female students who have cleared JEE Advanced 2019 to wisely fill their choices and solve their doubts.        </p>

		</div>
		

	</div>
	

</div>

<div class="container" id="female-jee">

	<div class="row justify-content-center">

	<div class="col-12 my-4" style="text-align : justify;">
            <p>
			
			The session was conducted in two slots and a total of 170 girls registered for the counselling session and 130 of them attended the session. Many student volunteers and faculty members were present to help the girls and to give them a clear idea. <br> 
			Counters consisting of faculty members,3rd year and 4th year students of all branches were there to provide help.
			Professor Narayanan Kurur, Shalini Gupta, Ravinder Kaur, Sumeet Agarwal, Sangeeta Kohli among others were present to grace the occasion.            </p>
    </div>


		</div>
	</div>

	<div class="container-fluid mt-4" id="softwares-list">
	<style>
		.thumbnail{
			object-fit: cover !important;
			display: block;
			margin-bottom:10px;
			width:100%;
			height:100%;
		}
		.img-link{
			margin-bottom:10px;
		}

	</style>

	<div class="row justify-content-center thumbs">
	<?php
		for($i=1; $i<7; $i=$i+1){
			echo '<a class=" img-link col-12 col-md-4 col-lg-3" href="images/op_fjc/'.$i.'.jpg" target="_blank" >';
			echo '<img class="thumbnail " src="images/op_fjc/'.$i.'.jpg" alt="BSW Female JEE Counselling" />';
			echo '</a>';
		}
		?>
			
	</div>

</div>


<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
$(document).ready(function(){
	$('.thumbs a').touchTouch();
	});
</script>
</body>
</html>