<?php
	require_once 'db_connect.php';
 
	if(ISSET($_POST['save'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		$time_from = date("Y-m-d", strtotime("+6 HOURS"));
 		$time_to =  date("Y-m-d", strtotime("+6 HOURS"));
		$conn->query("INSERT INTO `product` VALUES('', '$title', '$description', '$location', '$time_from', '$time_to')") or die(mysqli_errno());
 
		header('location: index.php');
	}
?>