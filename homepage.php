<?php
	require 'dbconfig/config.php';
	session_start();
	?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" >
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
		.content{
			padding-top:500px;
		}
		.content h3{
			font-size:155%;
		}
		.content h5{
			font-size:120%;
		}
		.container{
    max-width: 800px;
    margin: 0 auto;
    color: #5a5555;
    font-family: sans-serif;
    padding-left: 20px;
    padding-right: 20px;
    padding-top:60px;
}
.explain h3{
	padding-left:30px;
	padding-right:30px;
}

		</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Musiconekt</title> 
        <body>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             <div class="container-fluid">
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-blog-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MusiConekt</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="bs-blog-navbar-collapse-1">
                        <ul class="nav navbar-nav">
							<li class="link"><a href ="#">Welcome <?php echo $_SESSION['username'] ?> </a></li>
                            <li class="link"><a href="career.php">Careers</a></li>
							<li class="link"><a href="profile.php">My Profile</a></li>
							<li class="link"><a href="find.php">Find</a></li>
							<li class="link"><a href="event.php">Events</a></li>
							<li class="link"><a href="feedback.php">Feedback</a></li>
							<li class="link">
							<form action="homepage.php" method="POST">
							<input name="logout" type="submit" value="Logout">
							</form>
							</li>
							<?php
							if(isset($_POST['logout']))
							{
								session_destroy();
								header('location:index.php');
							}
							?>
							
                    
                        </ul>
                    </div>
                </div>
        </nav> 
            
            <div class="intro">
                <div class="inner">
                    <div class="content">
                        <h3>Connect with an awesome music partner around you in minutes</h3>
                        <h5>We help you find the right music partner with whom you'ld love to jam</h5>
                        
                    </div>
                </div>
                <a class="btn" href="form1.php">Connect Now</a>
            </div>
            
            <div class="detail">
                <div class="center">

                    <h3><b>Love for music and teamwork is all you need to succeed.</b></h3>
                </div>
                <div class="photo">
                    <div class="left"></div>
                    <div class="middle"></div>
                    <div class="right"></div>
                </div>
                <div class="explain">
                    <p><h2>Love for music and teamwork is all you need to succeed</h2></p>
                    <p><h3>Whether you want other musicians to form a band or group with someone to collaborate on songs with,or just meet up and talk to,ther are options out there for you.And as with most things these days,it all starts online.</h3></p>
                    <p><h3>Moreover if you are into a job which you aren't liking and you are passionate about your musical skills.Then you are at the right place,as we help you in deciding a bright musical career ahead.For more info checkout the careers tab above.</h3></p>
                </div>    
            </div>
            <div class="footer">
                <h1><b>MusiConekt</b></h1>
                <h2>In Memory of Chester Bennington</h2>
                <div class="center">

                    <img class="img-medium" style='width:400px' src="images/rip.jpg">
                    <h2>RIP</h2>
                    <h2>March 20, 1976 – July 20, 2017</h2>
                </div>
                <h2>About Us</h2>
                <p><h3>The concept behind MusiConekt is to help musicians connect with fellow musicians within their locality.At times it becomes very difficult to find right artist at the right time.</h3></p>
                <p><h3>So,we are here to help you to find and connect with the right music companian for you.</h3></p>
                <h2>Contact Me</h2>
                <div class="center" id="Social">
               
            <a href="https://www.facebook.com/profile.php?id=100011391008680" target="_blank" style="text-decoration:none;"><img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-facebook-circle-128.png" alt="Facebook" style="border:0;width:32px;height:32px"></a>
            <a href="mailto:pmishra2702@gmail.com" rel="publisher" target="_blank" style="text-decoration:none;"><img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"></a>
            <a href="https://twitter.com/pmishra270" rel="publisher" target="_blank" style="text-decoration:none;"><img src="https://g.twimg.com/dev/documentation/image/Twitter_logo_blue_32.png" alt="Twitter" style="border:0;width:32px;height:32px;"></a>
                <a href="https://in.linkedin.com/in/prashantkumar2702" rel="publisher" target="_blank" style="text-decoration:none;"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/linkedin-128.png" alt="Linkedin" style="border:0;width:32px;height:32px;"></a>
                    <a href="https://github.com/PMISHRA270" rel="publisher" target="_blank" style="text-decoration:none;"><img src="https://png.icons8.com/github/color/96" alt="Github" style="border:0;width:42px;height:42px;"></a>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
            
                
        </body>
    </head>
</html>