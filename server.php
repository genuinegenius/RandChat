<?php
	session_start();

	if(isset($_POST['connect'])){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['room'] = $_POST['room'];
		header("location:random_chat.php");
	}

?>