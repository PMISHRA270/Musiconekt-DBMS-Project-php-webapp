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
		rgba(129, 169, 232,0.5),
		rgba(240, 247, 144,0.5)
		),
		url('images/.jpg') no-repeat 50% 50% ;
	background-size: cover;
	display: table;
	top:0;
	z-index: -1;
	padding-top:0px;
		}
		.center{
			font-size:80%;
			text-align:center;
			background-size:cover;
			padding-bottom:20px;
			
			
		}
		.center h1{
			text-align: center;
	color: black;
	font-family: verdana;
	padding-top: 20px;
	padding-left: 25px;
	padding-right: 25px;
		}
		.jinfo{
			padding-left:40px;
			padding-bottom:473px;
			
		}
		</style>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <title>Find</title> 
    </head>
        <body>
        	<form id="find" method="post" action="find.php">
			<div class="top">
				<a href="homepage.php"><img src="https://png.icons8.com/home/win8/64" alt="Home" style="padding-top:10px;padding-left:10px;border:0;width:60px;height:60px;"></a>
				<div class="center">
					<h1>Profile</h1>
				</div>
				<div class="jinfo">
				<?php
				
						$id=$_SESSION['id'];
						$query1="select ur_req from info1 where id='$id'";
						$result1=mysqli_query($con,$query1);
						$result_check1=mysqli_num_rows($result1);
						$row1=mysqli_fetch_row($result1);
						$query2="select p.name,p.email,p.mob_no,p.music_back,i.address,i.will_pay,r.jam_room,r.musi_ins,r.amp from profile1 p,info1 i,resources1 r where p.music_back='$row1[0]' GROUP BY p.name";
						$result2=mysqli_query($con,$query2);
						$result_check2=mysqli_num_rows($result2);
						$row2=mysqli_fetch_row($result2);
						$row3=mysqli_fetch_array($result2,MYSQLI_NUM);
						

				 
				 if($result_check2>0)
				 {
					 echo("<b>");
					 
					 
					 printf("NAME");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("EMAIL");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("MOBILE NO");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("MUSICAL BACKGROUND");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("ADDRESS");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("WILLING TO PAY");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("JAM ROOM");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("MUSICAL INSTRUMENTS");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 printf("AMPLIFIERS");
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo("</b>");
					 echo("<br/>");
					 echo("<hr>");
					 foreach($result2 as $row4){
						 foreach($row4 as $field){
							 echo("<b>".$field." "."</b>");
							 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
					 echo "&nbsp;&nbsp;&nbsp;&nbsp";
						 }
						 
						 echo("<br/>");
					 }
					 
					 
				 }
				 else
				 {
					 echo 'NO MATCHES FOUND';
				 }
				 
				
				
				 ?>
					
					
					
				</div>
			</div>
			
				
		</form>
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    	

        </body>
</html>






