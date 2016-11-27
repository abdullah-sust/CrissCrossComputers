<?php
	session_start();
	if(!isset($_SESSION['role']))
	{
		session_unset();
		session_destroy();
		session_write_close();
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
			<form id="register" role="form" method="post" action="return validateForm()" autocomplete="off" name="register">
				<h3>Merchant Registration at Criss Cross Computers</h3>
				<p >Already a member?<a href='login.php'>Login</a></p>
				<hr>
				
				<div class="form-group">
					<input type="text" name="companyName" id="companyName" class="form-control input-lg" placeholder="Company Name" value="" tabindex="1">
				</div>
		
				<div class="form-group">
					<select name="companyType" id="companyType" class="form-control input-lg" tabindex="2">
						<option value="select">Company Type</option>
						<option value="Information Technology" >Information Technology</option>
						<option value="Online Shopping" >Online Shopping</option>
						<option value="Educational Institution" >Educational Institution</option>
						<option value="Non-Profit Organization" >Non-Profit Organization</option>
						<option value="Others" >Others</option>
					</select>
				</div>

				<div class="form-group">
					<input type="text" name="companyAddress" id="companyAddress" class="form-control input-lg" placeholder="Company Address" value="" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="contactPerson" id="contactPerson" class="form-control input-lg" placeholder="Contact Person" value="" tabindex="4">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="contactDesignation" id="contactDesignation" class="form-control input-lg" placeholder="Designation" value="" tabindex="5">
						</div>
					</div>
				</div>				

				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="mobile" id="mobile" class="form-control input-lg" placeholder="Mobile" value="" tabindex="6">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="" tabindex="7">
						</div>
					</div>
				</div>				
				
				<div class="form-group">
					<input type="text" name="bankAccountTitle" id="bankAccountTitle" class="form-control input-lg" placeholder="Bank Account Name/Title" value="" tabindex="8">
				</div>

				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="form-group">
							<input type="text" name="bankAccountNumber" id="bankAccountNumber" class="form-control input-lg" placeholder="Account#" value="" tabindex="9">
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="form-group">
							<input type="text" name="bankName" id="bankName" class="form-control input-lg" placeholder="Bank Name" value="" tabindex="10">
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="form-group">
							<input type="text" name="branch" id="branch" class="form-control input-lg" placeholder="Branch" value="" tabindex="11">
						</div>
					</div>					
				</div>				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="12">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="13">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" onclick="register()" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="14"></div>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
