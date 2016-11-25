<?php
 include 'dbconnect.php';
 session_start();
 session_destroy();
 $conn->close();
 header("Location: login.php");

 ?>
