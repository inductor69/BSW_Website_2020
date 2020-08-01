<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style type="text/css">


	#footer{ 
    margin-top:20px;
    padding-top:30px;
    padding-bottom:30px;
    width: 100%;
    background-image: linear-gradient(180deg, #67B26F 0%, rgba(24,86,117,0.62) 100%, rgba(0,0,0,0.95) 100%);        
    border: none;
	}
    #footer.container{
        padding:10px;
        margin-top: 10px;
    }
    #footer h3{
		color:#fff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        font-size: 1.2rem;
        font-family: 'Montserrat', sans-serif ;
        font-weight: bold; font-family: 'Montserrat', sans-serif ;
        
	}
    #footer a{
        font-weight:400;
		color:#fff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        font-size: 1.2rem;
        font-family: 'Montserrat', sans-serif ;
        background-image: linear-gradient(currentColor,white);
		background-position: 0% 100%;
		background-repeat: no-repeat;
		background-size: 0% 2px;
		transition: background-size .3s;
    }
    
    #footer a:hover{ 
		color:#fff;
		background-size: 100% 2px;
        font-family: 'Montserrat', sans-serif ;
	}
    #footer p{
		color:#fff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        font-size: 1.2rem;
        font-family: 'Montserrat', sans-serif ;
        
	}
    #footer li{
        list-style: none;
        font-family: 'Montserrat', sans-serif ;

    }

</style>

<html>
<body>

		<div class="container-fluid" id="footer" style="margin-top: 0px;">

        <div class="container" style>

    <div class="row">

        <div class="col-12 col-md-6 col-lg-4  center-block">
            <h3><strong style="font-weight: bold; font-family: 'Montserrat', sans-serif ;">Useful Links</strong></h3>
            <ul>
                <li><a href="mental_health.php"><span class="fa fa-commenting"></span> YourDOST & SCS</a></li>
                <li><a href="emergency_contacts.php"><span class="fa fa-globe"></span> Emergency Contacts</a></li>
                <li><a href="https://eacademics.iitd.ac.in/sportal/login"><span class="fa fa-bookmark"></span> eAcademics</a></li>
                <li><a href="https://webmail.iitd.ernet.in/roundcube/"><span class="fa fa-envelope"></span> Webmail</a></li>
                <li><a href="https://moodle.iitd.ac.in/login/index.php"><span class="fa fa-book"></span> Moodle</a></li>
                <li><a href="https://ngu.iitd.ac.in/"><span class="fa fa-paperclip"></span> NGU</a></li>
                <li><a href="https://helpline.iitd.ac.in/"><span class="fa fa-phone"></span> IITD Helpline</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 center-block">
            <h3><strong style="font-weight: bold; font-family: 'Montserrat', sans-serif ;">BSW Constitution</strong></h3>

                <p><span class="fa fa-external-link"></span>  <a href="http://bsw.iitd.ac.in/stuff/Constitution.pdf">Read </a>our constitution</p>

            <h3><strong style="font-weight: bold; font-family: 'Montserrat', sans-serif ;">Feedback</strong></h3>
                <p>We learn from you. Please give us your suggestions and feedback.<br /> Constructive criticism is well appreciated.<br /><span class="fa fa-pencil"></span>  <a href="http://bsw.iitd.ac.in/stuff/Constitution.pdf">Click here</a> for the feedback form.</p>
        </div>

        <div class="col-12 col-md-12 col-lg-4 center-block">
                    <p>
					<a href="https://www.facebook.com/boardforstudentwelfare"><span class="fa fa-facebook-square fa-lg"></span></a>

					<a href="https://www.instagram.com/bsw_iitd/"><span class="fa fa-instagram fa-lg mx-2">  </span></a>

					<a  href="mailto:info.bsw.iitdelhi@gmail.com"><span class="fa fa-paper-plane fa-lg">  </span></a>

                    </p>
    
            <h3>&copy; BSW 2020</h3>
                <p>All rights reserved.</p>
                <p><strong style="font-weight: bold; font-family: 'Montserrat', sans-serif ;">Website Created and Maintained by:</strong><br />
                <span class="fa fa-code"></span><a href="">  Japneet Singh</a></br>
                <span class="fa fa-code"></span><a href="">  Prabhpreet Singh</a></br>
                <span class="fa fa-code"></span><a href="http://">  Ayush Shrivastava</a></br>
                <span class="fa fa-code"></span><a href="">  Vishal Singh</a></br>
                </p>

            
        </div>

		</div>
        </div>

<script src="widget.js"></script>
<script>
        var botmanWidget = {
            frameEndpoint: 'chat.html',
            introMessage: `Hi! BSW is here to help you with your concerns. How may I help you? <br>
                            Here are some commands I understand: <br><br>
								<em>!q</em> to submit a query <br><br>
								<em>Hi</em> or <em>Hello</em> to chat with me <br><br>
                                <em>!joke</em> to have a laugh <br><br>
                                <em>!qp [course]</em> to go to course question papers eg. !qp cml100 <br><br>
                                <em>!em</em> for emergency contacts <br><br>
                                <em>!em security</em> for security contacts <br><br>
                                <em>!em hostels</em> for hostel contacts <br><br>
                                <em>!rep [hostel_name]</em> for BSW Rep details
                                `,
            chatServer : 'botman.php', 
			title: 'BSW Chatbot',
            placeholderText: "Hit enter to send a message ...",
            conversation_cache_time: 30,
        }; 
</script>
</body>
</html>


		




