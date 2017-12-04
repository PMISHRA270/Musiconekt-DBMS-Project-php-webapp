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
		.top{
			height:100%;
	width:100%;
	margin:auto;
	background:
		linear-gradient(
		rgba(129, 169, 232,0.5),
		rgba(240, 247, 144,0.5)
		),
		url('images/21.jpg') no-repeat 50% 50% ;
	background-size: cover;
	display: table;
	top:0;
	z-index: -1;
	padding-top:0px;
		}
		.end{
			padding-bottom:10px;
		}
		.info{
			padding-bottom:5px;
		}
		</style>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Form</title> 
    </head>
        <body>
        	<form id="mainForm1" method="post" action="form3.php">
			<div class="top">
				<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
				<div class="center">
					<h1>Please fill in the following details to find yourself a right music partner</h1>
					<h1>Step 3/3</h1>
				</div>
				<div class="info">
					<h3>Jam Room/Studio</h3>
					<input name="jam_room" type="text" placeholder="Do you have jam room/studio? " required/>
					<h3>Musical Instruments</h3>
					<input name="musi_ins" type="text" placeholder="List the instruments you have..." required/>
					<h3>Amplifiers</h3>
					<input name="amp" type="text" placeholder="Do you have amplifiers?" required/>
					<h3>Additional Resources</h3>
					<input name="other_res" type="text" placeholder="Additional resources that you have..." required/>
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
						$jam_room=$_POST['jam_room'];
						$musi_ins=$_POST['musi_ins'];
						$amp=$_POST['amp'];
						
						$other_res=$_POST['other_res'];
						$id=$_SESSION['id'];
						
							$query="select * from resources1 WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Profile already updated!","","error")</script>';
							}
							else
							{
						
							
							
								$query="insert into resources1 values('','$jam_room','$musi_ins','$amp','$other_res','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Thankyou for sharing your details.","We will inform you once we find your music partner!","success")</script>';
									header('location:thanks.php');
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error in step 2!","","error")</script>';
								}
							
							}
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
				?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

        </body>
</html>