<?php
	require 'dbconfig/config.php';
	session_start();
	?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
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
            height: 300px;
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

          .bt{

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

          .bt:hover{

                color: black;
                  border:solid #fff 3px;
          }

        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Login</title> 
      </head>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <body>
          <div class="top">
          <div class="image">
            <img src="https://png.icons8.com/user/office/80" alt="login" style="border:0;width:60px;height:60px;">
          </div>
            <div class="pk">
              <h4>Login<h4>
                <form id="loginForm" action="index.php" method="post">
                  <input type="text" name="username" placeholder="Username" style="color:black" required/><br><br>
                  <input type="password" name="password" placeholder="Password" style="color:black" required/><br><br>
                  <input name="login" type="submit" id="login_btn" class="btn btn-lg btn-primary btn-block" value="Login">
                  <h4>Not a member yet?</h4>
                  
                  <a class="bt" href="register.php">REGISTER</a>
                </form>
				
				<?php
				if(isset($_POST['login']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					$query="select * from users WHERE username='$username' AND password='$password'";
					$query1="select id from users WHERE username='$username'";
					$query_run1=mysqli_query($con,$query1);
					$row=mysqli_fetch_row($query_run1);
					
					$query_run=mysqli_query($con,$query);
					

					if(mysqli_num_rows($query_run)>0)
					{
						$_SESSION['username']=$username;
						$_SESSION['id']=$row[0];
						header('location:homepage.php');
					}	
					else
					{
						echo '<script type="text/javascript"> swal("Invalid credentials!","","error")</script>';
					}
					
				
				
				}
			?>
				
				
				
				
				
				
            </div>
			

  </body>
</html>


