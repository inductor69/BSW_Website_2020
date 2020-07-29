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
		background-color: #a4e7f080;
	}
    .{
       
    }
    .text-dark{
        color:#000 !important;
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
    padding-top:60px;
        margin-top:0px;
		background-image: linear-gradient(90deg, #67B26F 0%, #4CA2CD 100%);
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
        margin-top:20px !important;
        margin-bottom: 20px !important;
    }
    .card{
        border-radius: 10px !important;
        text-align: center !important;
        font-size: 16px !important;
        background-color: #fff !important;
        box-shadow: 6px 6px 12px #bbb;
    }
    .card:hover{
        box-shadow: 6px 6px 12px #999;
    }

    .btn-primary, .btn-success, .btn-info{
        width:100% !important;
    }
    @media (max-width:769px){
        #hostel_button{
            max-width:200px;
        }
    }
    @media (min-width:769px){
        #hostel_button{
            max-width:300px;
        }
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
            <h1 class="about-us-title">BSW Structure</h1>
            <p> To go directly to Hostel Representatives, <a href="#hostel_reps">Click Here</a></p>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid justify-content-center mx-auto" id="softwares-list">

    <div class="row justify-content-center mx-auto">

        <div class="col-12 col-md-6 justify-content-center mx-auto">

                <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
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

            <div class="card  my-2 text-dark mx-auto mx-auto" style="max-width:300px;">
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

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
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

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
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

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/33.jpg" alt="Card image cap">
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

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/27.jpg" alt="Card image cap">
                <div class="card-header">Aayush Sharma 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> sharmaaayushcoolaa@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 8005875834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Girnar</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/26.jpg" alt="Card image cap">
                <div class="card-header">Harshit Khanna
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> harshitkhanna1010@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9406559834  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Aravali</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/23.jpg" alt="Card image cap">
                <div class="card-header">Kartikayan Sharma
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> kartikayansharma@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9968431431  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Karakoram</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/34.jpg" alt="Card image cap">
                <div class="card-header">Siddharth Singh
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                                        <button class="btn btn-primary"><span class="fa fa-envelope"></span> siddharth1606@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9468841810  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Zanskar</button>

                </div>
            </div>

        </div>
        

    </div>


    <div class="row justify-content-center my-4">

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/35.jpg" alt="Card image cap">
        <div class="card-header">Neharika Singhal
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> neharika98singhal@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 9611519628  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Kailash</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/29.jpg" alt="Card image cap">
        <div class="card-header">Nishtha Gupta
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> nishtha.gupta97@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 09958230079  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Himadri</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/25.jpg" alt="Card image cap">
        <div class="card-header">Bilv Patel
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary"><span class="fa fa-envelope"></span> bilvpatel1758@gmail.com</button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 8826077497  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Nilgiri</button>

        </div>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">

    <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/28.jpg" alt="Card image cap">
        <div class="card-header">Muskan Choudhary
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                    <button class="btn btn-primary"><span class="fa fa-envelope"></span> muskan.choudhary06@gmail.com </button><br>
                    <button class="btn btn-success my-1"><span class="fa fa-phone"></span> +91 7999676445  </button><br>
                    <button class="btn btn-info"><span class="fa fa-home"></span> Himadri </button>

        </div>
    </div>

</div>


</div>

    
</div>
<div id="hostel_reps"></div>
<div id="about-us">
    
    <br />

    <div class="container" >

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center" style="margin-bottom:40px;"">
            <h3 class="about-us-title" style="font-size:50px;">Hostel Representatives</h3>
            </div>

        </div>

    </div>

</div>


<div class="container-fluid justify-content-center mx-auto" >


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Aravali</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/6.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Dipanshu Patidar</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> dkdk5122000@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 7424905782   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/21.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Prakhar Sharma</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> prakharsharma1999@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 7055051155   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Girnar</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/12.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Gaurav Chauhan</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> gauravseema1411@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 6239961770   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/7.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Prabhpreet Singh</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> yash.prabhpreet@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9915438685   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Himadri</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/11.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Ichha Rathod</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> ichharathod@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9664114447   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/24.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Ishita Chawla</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> chawlaishita13@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8375883773   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Jwalamukhi</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/20.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Franklin Gari </h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> franklin02082001@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8248563561   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/13.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Abhimanyu Singh</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> abhimanyu1867@gmail.com</button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9588354698   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Kailash</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/22.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Ruchika kumari</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> kumariruchika885@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8271812751   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/10.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Sakshi Bhandari</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> bsak2222@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9586597182   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Karakoram</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Aashish Choudary</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> ...</button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span>...  </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/15.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Piyush Gupta</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> piyush37gupta@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9425707560   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Kumaon</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/32.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Hardik Tanwar</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> tmkoc2000@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9530368472   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/3.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Mihir Kedia</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> mihirkedia1208@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8800908227   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Nilgiri</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/2.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Jatin Goel</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> goel.jatin2001@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9716338929   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/8.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Puru Arora</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> puruarora1@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8448555978   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Satpura</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/19.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Arvin Goyal </h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> arving1908@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9517649345   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/31.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Raghav Ajitsaria</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> ajitsaria.raghavr1@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 7595868183   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Shivalik</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/17.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Ayush Kanodia</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> akanodia11@gmail.com</button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9451422334   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/4.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Siddhant Choudhary</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> sid2001.iitd@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9935029433   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Udaigiri</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/9.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Chirag Maheshwari</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> chiragmahheshwari@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 8233957000   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/16.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Shikhar Anand</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> anandshikhar99@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 7000680741   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Vindhyachal</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/5.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Gaurav Pande</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> gaurav24061999@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 7219584694   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/18.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Yash Jain</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> yash.jain.guwahati@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 9706099045   </button><br>            </div>
            </li>
            </ul>
        </div>
    </div>

    </div>

</div>

<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Zanskar</h3></div>
        <div class="card-body">
            <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3 media-image" src="team2019/members/30.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Bhupender Dhaka </h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> bhupenderdhaka226@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 6377593404   </button><br>            </div>
            </li>
            <li class="media my-4">
            <img class="mr-3 media-image" src="team2019/members/1.jpg" alt="Generic placeholder image" style="border-radius:10px;">
                <div class="media-body">
                <h5 class="mt-1 mb-2">Sanidhya Jain</h5>
                <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"><span class="fa fa-facebook"></span> sanidhyaleo10@gmail.com </button><br>
                <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span> +91 6264363313   </button><br>            </div>
            </li>
            </ul>
        </div>
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