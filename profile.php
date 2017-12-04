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
		
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <title>Profile</title> 
    </head>
        <body>
        	<form id="profile" method="post" action="profile.php">
			<div class="top">
				<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
				<div class="center">
					<h1>Profile</h1>
				</div>
				<div class="info">
				<?php
				
				
										$id=$_SESSION['id'];

				 $query1="select * from profile1 where id='$id'";
				 $result1=mysqli_query($con,$query1);
				 $result_check1=mysqli_num_rows($result1);
				 $row1=mysqli_fetch_row($result1);
				 
				 $query2="select * from info1 where id='$id'";
				 $result2=mysqli_query($con,$query2);
				 $result_check2=mysqli_num_rows($result2);
				 $row2=mysqli_fetch_row($result2);
				 
				 $query3="select * from resources1 where id='$id'";
				 $result3=mysqli_query($con,$query3);
				 $result_check3=mysqli_num_rows($result3);
				 $row3=mysqli_fetch_row($result3);
				 
				 if($result_check1>0)
				 {
					 $_SESSION['name']=$row1[1];
					 $_SESSION['email']=$row1[2];
					 $_SESSION['music_back']=$row1[3];
					 $_SESSION['mob_no']=$row1[4];
				 }
				 
				if($result_check2>0)
				 {
					 $_SESSION['address']=$row2[1];
					 $_SESSION['ur_req']=$row2[2];
					 $_SESSION['sp_req']=$row2[3];
					 $_SESSION['purp_find']=$row2[4];
					 $_SESSION['will_pay']=$row2[5];
				 }
				 if($result_check3>0)
				 {
					 $_SESSION['jam_room']=$row3[1];
					 $_SESSION['musi_ins']=$row3[2];
					 $_SESSION['amp']=$row3[3];
					 $_SESSION['other_res']=$row3[4];
				 }
				
				 ?>
					<h3>Name</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from profile1 where id='$id'")))
					{
						echo $_SESSION['name'];
					}
					else
					{
						echo 'not updated';
					}?></b>
					
					<h3>Email</h3>
					<b><?php
					if(mysqli_num_rows(mysqli_query($con,"select * from profile1 where id='$id'")))
					{
						echo $_SESSION['email'];
					}
					else
					{
						echo 'not updated';
					}?></b>
					<h3>Your musical background</h3>
					
					<b><?php
					if(mysqli_num_rows(mysqli_query($con,"select * from profile1 where id='$id'")))
					{
						echo $_SESSION['music_back'];
					}
					else
					{
						echo 'not updated';
					}?></b>
					<h3>Phone no.</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from profile1 where id='$id'")))
					{
						echo $_SESSION['mob_no'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
				</div>
			</div>
			<div class="med">
			<div class="center">
				<h1>Info</h1>
				</div>
				<div class="info">

					<h3>Address</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from info1 where id='$id'")))
					{
						echo $_SESSION['address'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					<h3>Special requirement</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from info1 where id='$id'")))
					{
						echo $_SESSION['sp_req'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					<h3>Purpose of find</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from info1 where id='$id'")))
					{
						echo $_SESSION['purp_find'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					<h3>Willing to pay your partner</h3>
					<b><?php 
					if(mysqli_num_rows(mysqli_query($con,"select * from info1 where id='$id'")))
					{
						echo $_SESSION['will_pay'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
				</div>
				<div class="end">
				<div class="center">
					<h1>Resources</h1>
					</div>
					 <div class="info">
					 <h3>Jam Room</h3>
					 <b><?php 
					 if(mysqli_num_rows(mysqli_query($con,"select * from resources1 where id='$id'")))
					{
						echo $_SESSION['jam_room'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					 <h3>Musical instruments</h3>
					 <b><?php 
					 if(mysqli_num_rows(mysqli_query($con,"select * from resources1 where id='$id'")))
					{
						echo $_SESSION['musi_ins'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					 <h3>Amplifiers</h3>
					 <b><?php 
					 if(mysqli_num_rows(mysqli_query($con,"select * from resources1 where id='$id'")))
					{
						echo $_SESSION['amp'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
					 <h3>Other resources</h3>
					 <b><?php 
					 if(mysqli_num_rows(mysqli_query($con,"select * from resources1 where id='$id'")))
					{
						echo $_SESSION['other_res'];
					}
					else
					{
						echo 'not updated';
					} ?></b>
				</div>
			</div>
		</form>
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    	

        </body>
</html>