<?php
	session_start();
	$message="";
	if(!isset($_SESSION['role']))
	{
		session_unset();
		session_destroy();
		session_write_close();
		header("Location: login.php");
	}
	if(isset($_SESSION['error']))
	{
		$message = $_SESSION['error'];
		unset($_SESSION['error']);
	}
	else
	{
		$message = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Criss Cross Computers</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
    <script type="text/javascript" src="javaScript.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form id="register" role="form" method="post" action="changePasswordAuth.php" autocomplete="off" name="register">
				<h3>Criss Cross Payments : <?php echo $_SESSION['memberID'];?></h3>
				 <p> <a href='memberpage.php'>Home</a> | <a href='memberTransaction.php'>Transactions</a> | <a href='logout.php'>Logout</a></p>
				 <p style="color: red;"><?php echo $message; ?></p>
				<hr>
				
				<div class="form-group">
					<label for="ex1">Enter Current Password:</label>
					<input type="password" name="curPass" id="companyName" class="form-control input-lg" placeholder="Enter Current Password" value="" tabindex="1">
				</div>
				<div class="form-group">
					<label for="ex1">Enter New Password:</label>
					<input type="password" name="newPass" id="companyName" class="form-control input-lg" placeholder="Enter New Password" value="" tabindex="1">
				</div>

				<div class="form-group">
					<label for="ex1">Confirm New Password:</label>
					<input type="password" name="conPass" id="companyAddress" class="form-control input-lg" placeholder="Confirm New Password" value="" tabindex="3">
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="14"></div>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
