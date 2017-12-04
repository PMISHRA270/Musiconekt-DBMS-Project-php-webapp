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
		url('images/12.jpg') no-repeat 50% 50% ;
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
        	<form id="mainForm1" method="post" action="form1.php">
			<div class="top">
				<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
				<div class="center">
					<h1>Please fill in the following details to find yourself a right music partner</h1><br>
					<h1>Step 1/3</h1>
				</div>
				<div class="info">
					<h3>Name</h3>
					<input name="name" type="text" placeholder="your name" required/>
					<h3>Email</h3>
					<input name="email" type="text" placeholder="your email" required/>
					<h3>Your musical background</h3>
					<select class="music_back" name="music_back">
						<option value="Percussions:Drums">Percussions:Drums</option>
						<option value="Percussions:Tabla">Percussions:Tabla</option>
						<option value="Percussions:Others">Percussions:Others</option>
						<option value="Strings:Guitars">Strings:Guitars</option>
						<option value="Strings:Base Guitars">Strings:Base Guitars</option>
						<option value="Keys:Keyboards">Keys:Keyboards</option>
						<option value="Keys:Synthesisers">Keys:Synthesisers</option>
						<option value="Vocals">Vocals</option>
						<option value="Beat Boxing">Beat Boxing</option>
						<option value="DJ:Turntables">DJ:Turntables</option>
					</select>	
					<h3>Phone no.</h3>
					<input name="mob_no" type="text" placeholder="ph. no." required/>
					<div class="end">
					 <input type="submit" name="sub_btn" id="butn" class ="btn btn-success" value="Submit" /> 
					<a id="butn" class ="btn btn-success" href="form2.php"> Next </a>
				</div>
					
					
				</div>
			</div>
			
		</form>
		
		<?php
					if(isset($_POST["sub_btn"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						$name=$_POST['name'];
						$email=$_POST['email'];
						$music_back=$_POST['music_back'];
						
						$mob_no=$_POST['mob_no'];
						$id=$_SESSION['id'];
						
						
							$query="select * from profile1 WHERE id='$id'";
							$query_run=mysqli_query($con,$query);
							
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Profile already updated!","","error")</script>';
							}
							else
							{
								$query="insert into profile1 values('','$name','$email','$music_back','$mob_no','$id')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("Step 1 complete!","You may proceed to the next step....","success")</script>';
								}
								else
								{
									echo '<script type="text/javascript"> swal("Error in step 1!","","error")</script>';
								}
							}
							
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
				?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

        </body>
</html>