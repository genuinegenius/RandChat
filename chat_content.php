<?php
	include("db_connection.php");

	$username = $_POST['username'];
	$room = $_POST['room'];
	$output = "";

	$sql = "SELECT * FROM msg WHERE room = '$room'";
	$query = mysqli_query($db, $sql); 

	$last_msg = "";
	$last_username = "";

	while($row = mysqli_fetch_assoc($query)){
		if($row['username'] == $username){
			$output .= '<div class="msg_container_right">';
			$output .= '<div class="right">';
			$output .= $row['message'];
			$output .= '</div>';
			$output .= '</div>';
		}
		else{
			$output .= '<div class="msg_container_left">';
			$output .= '<div class="left">';
			$output .= $row['message'];
			$output .= '</div>';
			$output .= '</div>';
		}
	}

	echo $output;
?>