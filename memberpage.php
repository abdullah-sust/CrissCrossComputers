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
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<h3>Criss Cross Payments : <?php echo $_SESSION['memberID'];?></h3>
			<p><a href='logout.php'>Logout</a> | <a href='memberpage.php'>Home</a> | <a href='memberTransaction.php'>Transactions</a></p>
			<hr>
			
			<table width='75%'><tr><td>Member ID</td><td>:&nbsp;<?php echo $_SESSION['memberID'];?></td></tr><tr><td>Company Name</td><td>:&nbsp;<?php echo $_SESSION['companyName'];?></td></tr><tr><td>Company Type</td><td>:&nbsp;<?php echo $_SESSION['companyType'] ;?></td></tr><tr><td>Company Address</td><td>:&nbsp;<?php echo $_SESSION['companyAddress'] ;?></td></tr><tr><td>Contact Person</td><td>:&nbsp;<?php echo $_SESSION['contactPerson'] ;?></td></tr><tr><td>Contact Designation</td><td>:&nbsp;<?php echo $_SESSION['contactDesignation'] ;?></td></tr><tr><td>Mobile</td><td>:&nbsp;<?php echo $_SESSION['mobile'] ;?></td></tr><tr><td>Email</td><td>:&nbsp;<?php echo $_SESSION['email'] ;?></td></tr><tr><td>Bank Account Title</td><td>:&nbsp;<?php echo $_SESSION['bankAccountTitle'] ;?></td></tr><tr><td>Bank Account Number</td><td>:&nbsp;<?php echo $_SESSION['bankAccountNumber'] ;?></td></tr><tr><td>Bank Name</td><td>:&nbsp;<?php echo $_SESSION['bankName'] ;?></td></tr><tr><td>Branch</td><td>:&nbsp;<?php echo $_SESSION['branch'] ;?></td></tr><tr><td>IP</td><td>:&nbsp;<?php echo $_SESSION['ip'] ;?></td></tr><tr><td>Active?</td><td>:&nbsp;<?php echo $_SESSION['active'] ;?></td></tr></table>	
		</div>
	</div>
</div>

</body>
</html>
