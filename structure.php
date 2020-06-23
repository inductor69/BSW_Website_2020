<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Structure | BSW</title>
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
    #softwares-list{
        margin-top:40px;
        margin-bottom:40px;
    }
    #softwares-list.media{
        margin: 20px !important;
        background-color:#000 !important;
    }
    #softwares-list .software-logo{
        border-radius: 20px !important;
    }
    .card-img-top{
        object-fit: cover;
        height: 120px !important;
        width:120px !important;
        border-radius: 20px !important;
        display: block !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-top:10px !important;
    }
    .card{
        border-radius: 20px !important;
        text-align: center !important;
        font-size: 16px !important;
    }

    .btn-primary, .btn-success, .btn-info{
        width:100% !important;
    }

	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center">
            <h1 class="about-us-title">BSW Structure</h1>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid justify-content-center mx-auto" id="softwares-list">

    <div class="row justify-content-center mx-auto">

        <div class="col-12 col-md-6 justify-content-center mx-auto">

                <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                    <img class="card-img-top" src="team2019/members/president.jpg" alt="Card image cap">
                    <div class="card-header">Prof. Angelie Multani
                    <br>
                    <em>President</em>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary "><span class="fa fa-envelope"></span> angelie@hss.iitd.ac.in</button><br>
                        <button class="btn btn-success my-1"><span class="fa fa-phone"></span> 011-26596524 </button><br>
                        <button class="btn btn-info"><span class="fa fa-home"></span> HUSS Department, MS638</button>
                    </div>
                </div>

        </div>
        
        <div class="col-12 col-md-6 justify-content-center mx-auto">

            <div class="card bg-dark my-2 text-white mx-auto mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Vice President</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary"><span class="fa fa-envelope"></span> sudip@chemical.iitd.ac.in</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 11 26591018</button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Block-II, 283 (Office)</button>
                </div>
            </div>

        </div>

    </div>

    <div class="row justify-content-center my-4">

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/yogi.jpeg" alt="Card image cap">
                <div class="card-header">Yogendra Singh
                <br>
                <em>General Seceratry</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary"><span class="fa fa-envelope"></span> yks11209111@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9711155131 </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Vindhyachal</button>
                </div>
            </div>

        </div>
        

    </div>


    <div class="row justify-content-center my-4">

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/aashiagrawal.jpeg" alt="Card image cap">
                <div class="card-header">Aashi Agarwal
                <br>
                <em>Deputy General Secretary (Operations)</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary"><span class="fa fa-envelope"></span> aashiagarwal06@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9690107820   </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>
                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Umesh Shahdadpuri
                <br>
                <em>Deputy General Secretary (Mentorship)</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary"><span class="fa fa-envelope"></span> umeshspuri14@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9811839060  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Girnar</button>

                </div>
            </div>

        </div>
        

    </div>

    <div class="row justify-content-center my-4">

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

                </div>
            </div>

        </div>
        

    </div>


    <div class="row justify-content-center my-4">

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
        <div class="card-header">Prof. Sudip Pattnayek 
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
        <div class="card-header">Prof. Sudip Pattnayek 
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
        <div class="card-header">Prof. Sudip Pattnayek 
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card bg-dark my-2 text-white mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
        <div class="card-header">Prof. Sudip Pattnayek 
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

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