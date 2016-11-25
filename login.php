<?php
	include 'dbconnect.php';
	if(isset($_POST['submit']) && !empty($_POST['companyName']) && !empty($_POST['password']))
	{
		session_start();
		$_SESSION['role']='user';
		$_SESSION['companyName']=$_POST['companyName'];
		$_SESSION['password']=$_POST['password'];
		header('Location: loginAuth.php');
	}
	else
	{
		session_start();
		$conn->close();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="login.php" autocomplete="off">
				<h3>Merchant Login at Criss Cross Computers</h3>
				<p><a href='./'>Back to home page</a></p>
				<hr>

				
				<div class="form-group">
					<input type="text" name="companyName" id="companyName" class="form-control input-lg" placeholder="Email or Member ID or Company Name" value="" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset.php'>Forgot your Password?</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>