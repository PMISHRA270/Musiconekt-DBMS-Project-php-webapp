<?php
	require 'dbconfig/config.php';
?>



<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style type="text/css" >

          body{
            background-image: url('public/images/9.jpg');
            background-size: cover;
          }

          .image{

            text-align: center;
            margin-top: 80px;
          }

          .pk{

            width: 300px;
            height: 320px;
            text-align: center;
            background-color: rgba(0,0,0,0.4);
            margin: 0 auto;
            margin-top: 15px;
            padding-top: 10px;
            border-radius: 15px;
            -webkit-border-radius:15px;
            -o-border-radius:15px;
            -moz-border-radius:15px;
            
            font-weight: bolder;
            box-shadow: inset -4px -4px rgba(0,0,0,0.5);
            font-size: 18px;

          }

          .pk input[type="text"]{

            width:200px;
            height: 35px;
            border: 0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
            padding-left: 5px;
            font-family: verdana;

          }

          .pk h4{
            color: white;
            padding-bottom: 10px;
            
          }

              .pk input[type="password"]{

            width:200px;
            height: 35px;
            border: 0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
            padding-left: 5px;
            font-family: verdana;

          }

          .pk input[type="button"]{

            border-radius:2px;
            font-family: 'Oswald',sans-serif;
            color:#fff;
            font-size: 80%;
            padding: 4px 30px;
            border:solid #0ed6d8 3px;
            text-transform: uppercase;
            background: #0ed6d8;
            text-align: center;
          }

          .pk input[type="button"]:hover{
            
                  color: black;
                  border:solid #fff 3px;


          }

        </style>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Signup</title> 
      </head>
        <body>
          <div class="top">
          <div class="image">
            <img src="https://png.icons8.com/user/office/80" alt="login" style="border:0;width:60px;height:60px;">
          </div>
            <div class="pk">
              <h4>Register<h4>
                <form class="signupForm" action="register.php" method="post">
                  <input name="username" type="text" class="inputvalues" placeholder="Username" style="color:black" required/><br><br>
                  
                  <input name="email" type="text" class="inputvalues" placeholder="Email id" style="color:black" required/><br><br>
                  <input name="password" type="password" class="inputvalues" placeholder="Password" style="color:black" required/><br><br>
				  

                  <input name="submit_btn" type="submit" id="register_btn" class="btn btn-lg btn-success" value="SIGNUP"/>
                  
                    <a class="btn btn-info btn-block pull-right" href="index.php">Back to Login</a>
                </form>
				
				<?php
					if(isset($_POST["submit_btn"]))
					{
						//echo '<script type="text/javascript"> alert("clicked")</script>';
						$username=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
					
						
						
						
							$query="select * from users WHERE email='$email'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> swal("Email already registered!","Please login","error")</script>';
							}
							else
							{
								$query="insert into users values('','$username','$email','$password')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> swal("User successfuly registered!","Please proceed to login","success")</script>';
								}
								else
								{
									echo '<script type="text/javascript"> alert("Error registering user!")</script>';
								}
							}
							
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
				?>
            </div>


</body>
</html>