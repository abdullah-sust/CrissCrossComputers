<?php
	include 'dbconnect.php';
	$companyName="";
	$password="";
	session_start();
	if(empty($_SESSION['role']))
	{
		$conn->close();
		session_destroy();
		header("Location: index.php");
	}
	else
	{
		if(isset($_SESSION['companyName']))
		{
			$companyName=trim($_SESSION['companyName']);
			$companyName=strip_tags($companyName);
			$companyName=htmlspecialchars($companyName);
		}
		if(isset($_SESSION['password']))
		{
			$password=trim($_SESSION['password']);
			$password=strip_tags($password);
			$password=htmlspecialchars($password);
		}
		if($companyName!='' && $password!='')
		{
			

			$password=MD5($password);
			
			$query="SELECT * FROM members WHERE ( memberID='$companyName' ) AND password='$password'";   //   OR companyName='$companyName' OR email='$companyName'
			$result=$conn->query($query);

				if($result->num_rows >0)
				{
					while($row = $result->fetch_assoc())
					{
						session_start();
						$_SESSION['memberID']=$row['memberID'];
						$_SESSION['companyName']=$row['companyName'];
						$_SESSION['companyType']=$row['companyType'];
						$_SESSION['companyAddress']=$row['companyAddress'];
						$_SESSION['contactPerson']=$row['contactPerson'];
						$_SESSION['contactDesignation']=$row['contactDesignation'];
						$_SESSION['mobile']=$row['mobile'];
						$_SESSION['email']=$row['email'];
						$_SESSION['bankAccountTitle']=$row['bankAccountTitle'];
						$_SESSION['bankAccountNumber']=$row['bankAccountNumber'];
						$_SESSION['bankName']=$row['bankName'];
						$_SESSION['branch']=$row['branch'];
						$_SESSION['password']=$row['password'];
						$_SESSION['ip']=$row['ip'];
						$_SESSION['active']=$row['active'];
						$_SESSION['resetToken']=$row['resetToken'];
						$_SESSION['resetComplete']=$row['resetComplete'];
						$_SESSION['role']='user';
						header("Location: memberpage.php");
					}
				}
				else
				{
					header("Location: index.php");
				}
				$conn->close();
		}
	}
?>