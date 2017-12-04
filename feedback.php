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
		<style type="text/css">
		html,body{
	margin:0;
	padding:0;
	height:100%;
	width:100%;
}
		.top{
			height:100%;
	width:100%;
	margin:auto;
	background:
		linear-gradient(
		rgba(129, 169, 232,0.7),
		rgba(240, 247, 144,0.7)
		),
		url('images/12.jpg') no-repeat 50% 50% ;
	background-size: cover;
	display: table;
	top:0;
	z-index: -1;
	padding-top:0px;
		}
		.end{
			padding-bottom:90px;
		}
		.info{
			padding-bottom:5px;
		}
		.mytext{
			width:300px;
			height:100px;
		}
		
		</style>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Feedback</title> 
    </head>
        <body>
        	<form id="mainForm1" method="post" action="feedback.php">
			<div class="top">
				<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
				<div class="center">
					<h1>Please provide your feedback.</h1><br>
					
				</div>
				<div class="info">
				<h3>Your Rating</h3>
					<input type="radio" class="radiobtns" name="rating" value="5" checked required>5
					<input type="radio" class="radiobtns" name="rating" value="4"  required>4
					<input type="radio" class="radiobtns" name="rating" value="3"  required>3
					<input type="radio" class="radiobtns" name="rating" value="2"  required>2
					<input type="radio" class="radiobtns" name="rating" value="1"  required>1
				<h3>Your feedback is important to us....</h3>
        <input name="feedback" id="comment_text" rows="5" cols="100" placeholder="Enter your comment here..." class="mytext" required/>
        <br/>
		<div class="end">
			<input type="submit" name="sub_btn" id="butn" class ="btn btn-success" value="Submit" />
				
				</div>
					
					
				</div>
			</div>
			
		</form>
		
		<?php
					if(isset($_POST["sub_btn"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						$rating=$_POST['rating'];
						$feedback=$_POST['feedback'];
						
						$id=$_SESSION['id'];
						
						
							$query="select * from feedback1 WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Feedback already accepted!","","error")</script>';
							}
							else
							{
								$query="insert into feedback1 values('','$rating','$feedback','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Thankyou for your valuable feedback....","","success")</script>';
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error in accepting feedback!","","error")</script>';
								}
							}
							
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
				?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

        </body>
</html>