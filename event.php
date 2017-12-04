<?php
	require 'dbconfig/config.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<title>Event</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
  

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">GREENDAY</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">Green Day is an American punk rock band formed in 1986 by lead vocalist and guitarist Billie Joe Armstrong and bassist Mike Dirnt. For much of the band's career, they have been a trio with drummer Tré Cool, who replaced John Kiffmeyer in 1990 prior to the recording of the band's second studio album, Kerplunk (1991). Guitarist Jason White, who has been a touring member since 1999, was a member from 2012 to 2016.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Billie Joe Armstrong</p>
        <img src="images/w.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Tre Cool</p>
        <img src="images/y.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Mike Dirnt</p>
        <img src="images/z.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TOUR DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to Register!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>
	<form id="reg" action="event.php" method="post"> 
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="http://mgnhappystays.com/application/imgs/cities/MGNC5178597/Banglore.jpg" alt="Bangalore" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Bangalore</b></p>
            <p class="w3-opacity">Fri 27 Nov 2017</p>
            <p>Performing live in the city of gardens</p>
            <button name="bangalore" class="w3-button w3-black w3-section w3-right" type="submit">Register</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="http://www.bhmpics.com/thumbs/best_graf_of_india_gate_delhi-t3.jpg" alt="New Delhi" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b> New Delhi</b></p>
            <p class="w3-opacity">Sat 28 Nov 2017</p>
            <p>Come and enjoy in the country captial</p>
<button name="delhi" class="w3-button w3-black w3-section w3-right" type="submit">Register</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://wallpaperhdimages.com/wp-content/uploads/2017/08/Mumbai-Wallpaper-HD-Images.jpg" alt="Mumbai" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Mumbai</b></p>
            <p class="w3-opacity">Sun 29 Nov 2017</p>
            <p>Get a chance to enjoy in the cultural capital of india</p>
            <button name="mumbai" class="w3-button w3-black w3-section w3-right" type="submit">Register</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Bangalore, IN<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +917019370842<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: pmishra2702@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form id="contact" action="event.php" method="post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name"  name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" name="email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">
          <button name="send" class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  

</div>
<?php
					if(isset($_POST["bangalore"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						
						$id=$_SESSION['id'];
						
							$query="select * from bangalore WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Already Registered!","","error")</script>';
							}
							else
							{
						
							
							
								$query="insert into bangalore values('','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Thankyou for Registering.","We will mail you the payment link soon!","success")</script>';
									
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error registering!","","error")</script>';
								}
							
							}
						}
						if(isset($_POST["mumbai"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						
						$id=$_SESSION['id'];
						
							$query="select * from mumbai WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Already Registered!","","error")</script>';
							}
							else
							{
						
							
							
								$query="insert into mumbai values('','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Thankyou for Registering.","We will mail you the payment link soon!","success")</script>';
									
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error registering!","","error")</script>';
								}
							
							}
						}
						if(isset($_POST["delhi"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						
						$id=$_SESSION['id'];
						
							$query="select * from delhi WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Already Registered!","","error")</script>';
							}
							else
							{
						
							
							
								$query="insert into delhi values('','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Thankyou for Registering.","We will mail you the payment link soon!","success")</script>';
									
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error registering!","","error")</script>';
								}
							
							}
						}
						if(isset($_POST["send"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						$name=$_POST['name'];
						$email=$_POST['email'];
						$message=$_POST['message'];
						$id=$_SESSION['id'];
						
							$query="select * from contact WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Please be patient!","We will contact you soon","error")</script>';
							}
							else
							{
						
							
							
								$query="insert into contact values('','$name','$email','$message','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("We will contact you soon.","","success")</script>';
									
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error!","","error")</script>';
								}
							
							}
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
				?>





</body>
</html>
