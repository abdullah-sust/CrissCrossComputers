<?php
	session_start();
	if(!isset($_SESSION['role']))
	{
		session_unset();
		session_destroy();
		session_write_close();
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Criss Cross Payments : <?php echo $_SESSION['memberID'];?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" >
			<h3>Criss Cross Payments : <?php echo $_SESSION['memberID'];?></h3>
			<p><a href='memberpage.php'>Home</a> | <a href='memberTransaction.php'>Transactions</a> | <a href='changePassword.php'>Change password</a> | <a href='logout.php'>Logout</a></p>
			<hr>
			
			<table>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto; " class="form-control" placeholder="Message">Member ID:</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['memberID'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto; " class="form-control" placeholder="Message">Company Name	: </label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto; " class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['companyName'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Company Type	: </label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['companyType'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Company Address	:</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['companyAddress'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Contact Person	:</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['contactPerson'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Contact Designation :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['contactDesignation'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Mobile :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['mobile'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Email :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['email'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Bank Account Title :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['bankAccountTitle'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Bank Account Number :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['bankAccountNumber'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Bank Name	:</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['bankName'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Branch :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['branch'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">IP :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['ip'];?></label>
	    				</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">Active? :</label>
	    				</div>
					</td>
					<td>
						<div class="form-group">
	    					<label style="height: auto;" class="form-control" placeholder="Message">&nbsp;<?php echo $_SESSION['active'];?></label>
	    				</div>
					</td>
				</tr>
			</table>	
		</div>
	</div>
</div>

</body>
</html>
