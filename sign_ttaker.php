<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>  	
<link rel="stylesheet" href="css1/style.css">
</head>
<body style="background-image: url(images.jpg); background-repeat: no-repeat;">
	<div id="main-wrapper">
	<center><h2>Sign Up Form for test taker</h2></center>
		<form action="sign_ttaker.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>email</b></label>
				<input type="text" placeholder="Enter email" name="email" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="login_ttaker.php"><button type="button" class="back_btn"><< Back to Login</button></a>
				
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from taker where email='$email'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Email Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into taker values('$email','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['email'] = $email;
								$_SESSION['password'] = $password;
								header( "Location: login_ttaker.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>