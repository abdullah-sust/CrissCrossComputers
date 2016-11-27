<?php
	session_start();
	include 'dbconnect.php';
	$error = "";
	if(!isset($_SESSION['role']))
	{
		$conn->close();
		session_unset();
		session_destroy();
		session_write_close();
		header("Location: login.php");
	}
	else
	{
		$curPass =  $_POST['curPass'];
		$newPass =  $_POST['newPass'];
		$conPass =  $_POST['conPass'];
		$_SESSION['error'] = "Password Updated Successfully!";
		if($newPass!=$conPass)
		{
			$_SESSION['error'] = "Woops! Password does not match. Please try again.";
			header("Location: changePassword.php");
		}
		elseif(strlen($newPass)<6 || strlen($conPass)<6)
		{
			$_SESSION['error'] = "Woops! Minimum password length 6. Please try again.";
			header("Location: changePassword.php");
		}
		else
		{
			if($newPass!=$conPass)
			{
				$_SESSION['error'] = "Woops! Password does not match. Please try again.";
				header("Location: changePassword.php");
			}
			else
			{
				$memberID = $_SESSION['memberID'];
				$query = "SELECT password FROM members WHERE memberID='$memberID'";
				$result = $conn->query($query);
				if($result->num_rows>0)
				{
					while ($rows = $result->fetch_assoc())
					{
						$pass1 =  $rows['password'];
						$pass2 =  MD5($curPass);
						//echo $pass1.'<br>';
						//echo $pass2;

						if(strcmp($pass1, $pass2)==0)
						{
							$newPass = md5($newPass);
							//echo $newPass; 
							$query = "UPDATE members SET password='$newPass' WHERE memberID='$memberID'";
							if($conn->query($query)===TRUE)
							{
								$_SESSION['error'] = "Password Updated Successfully!";
								header("Location: changePassword.php");
							}
							else
							{
								$_SESSION['error'] = "Woops! Password does not match. Please try again.";
								header("Location: changePassword.php");
							}
							
						}
						else
						{
							$_SESSION['error'] = "Woops! Password does not match. Please try again.";
							header("Location: changePassword.php");
						}

					}
				}

			}
		}
		//header("Location: changePassword.php");
	}

?>
