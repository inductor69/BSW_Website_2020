<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Diary&Newsletter | BSW</title>
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
	.line-break{
		width:80%;
		border: 0;
		height: 10px;
		background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	}
	#about-us{
        margin-top:60px;
		background-image: linear-gradient(90deg, #67B26F 0%, rgba(76,162,205,0.61) 100%);
	}
    .form-preview{
        height:800px;
    }
    

	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-4 justify-content-center">
            <h1 class="about-us-title">Diary & Newsletter</h1>
            </div>

            <div class="col-12 col-lg-7 ml-auto">
            <p class="about-us-text">
            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.<br />
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br />
           </p>
            </div>

        </div>

    </div>

</div>

<div class="container my-4" id="softwares-list">

<div class="row">
    <div class="col-12 col-lg-6 my-2">
        <h4>BSW Diary</h4><span><a href="misc/bswDiary.pdf" class="btn btn-primary " style={display:inline;}><span class="fa fa-download fa-lg"> Download Diary</span></a>
    </div>
    <div class="col-12 col-lg-6 my-2">
        <h4>BSW Newsletter</h4><span><a href="misc/bswNewsletter.pdf" class="btn btn-primary " style={display:inline;}><span class="fa fa-download fa-lg"> Download Newsletter</span></a>    </div>
    </div>

<div class="row justify-content-center">

<div class="card col-12 col-lg-6 mt-2">
<embed src="misc/bswDiary.pdf" class="form-preview m">
</div>

<div class="card col-12 col-lg-6 mt-2">
<embed src="misc/bswNewsletter.pdf" class="form-preview m">
</div>


</div>
</div>





  

</div>
</div>
<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



</body>
</html>