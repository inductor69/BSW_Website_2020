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


<style type="text/css">

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

	
</style>
<link href="css/touchTouch.css" rel="stylesheet" type="text/css"/>
</head>

<?php require 'components/header.php'; ?>
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

            <div class="col-12 about-us-text">
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.

</p>
            </div>

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

	<div class="row justify-content-center">
	<?php
		for($i=1; $i<10; $i=$i+1){
			echo '<a class="thumbs img-link col-12 col-md-4 col-lg-3" href="images/op_delhidarshan/'.$i.'.JPG" >';
			echo '<img class="thumbnail" src="images/op_delhidarshan/'.$i.'.JPG" alt="BSW Delhi Darshan" />';
			echo '</a>';
		}
		?>
			
	</div>

</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="js/touchTouch.jquery.js"></script>
<script>
	$(document).ready(function(){
	$('.thumbs').touchTouch();
	});
</script>



</body>

</html>