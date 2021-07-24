<?php
	session_start();
	include("db_connection.php");

	$username = $_POST['username'];
	$room = $_POST['room'];
	$message = $_POST['message'];
	$output = "";

	if($message){
		$sql = "INSERT INTO msg (username, message, room) VALUES ('$username','$message','$room')";
	}
	if(mysqli_query($db, $sql)){
		$output = "";
	}
	else{
		$output = "Error. Please try again.";
	}

	echo $output;

?>