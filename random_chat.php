<html>
<?php session_start(); ?>
<style>
	::-webkit-scrollbar {
	width: 11px;
	}
	::-webkit-scrollbar-track {
		background: transparent; 
	}
	::-webkit-scrollbar-thumb {
		background: #228B22;
		border-radius: 10px;
	}
	::-webkit-scrollbar-thumb:hover {
		cursor:auto;
		background: #228B22;
	}
	.container{
		display:flex;
		justify-content: center;
		align-items: center;
		text-align: center;
		width: 100%;
		height: 100%;
	}
	.center{
		margin: 0 auto;
		width: 500px;
		height: auto;
		background-color: #00FF00;
		border-radius: 10px;
		text-align: center;
		padding: 10 20 20 20;
	}
	.input_text{
		margin: 0;
		margin-top: 10px;
		color: #228B22;
		background-color: transparent;
		border: 1px solid #228B22;
		width: 85%;
		border-top-left-radius: 5px;
		border-bottom-left-radius: 5px;
		padding: 5px;
		text-align: center;
	}
	.input_text:focus{
		outline: 0;
	}
	.input_button{
		margin: 0;
		margin-top: 10px;
		color: #00FF00;
		background-color: #228B22;
		border: 1px solid #228B22;
		width: 10%;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		padding: 5px;
		text-align: center;
		cursor: pointer;
	}
	.chat_text{
		width: 100%;
		height: 350px;
		margin-top: 20px;
		border-radius: 10px;
		overflow-y: auto;
		overflow-x: hidden;
		background-color: #ADFF2F;
	}
	.submit_text{
		width: 100%;
		height: 50px;
		margin-top: 10px;
		border-radius: 10px;
		overflow-y: hidden;
		overflow-x: hidden;
		background-color: #ADFF2F;
	}
	.msg_container_right{
		position:relative;
		float:right;
		width:100%;
		height:auto;
		margin:0;
		margin-top:5px;
		margin-bottom:5px;
		margin-right:30px;
		padding:0;
	}

	.right_next {
		position: relative;
		background: #00FF00;
		text-align: left;
		color:#228B22;
		max-width: 60%;
		min-width: 40px;
		height:auto;
		padding:5px 15px 5px 15px;
		border-radius: 10px;
		border: 1px solid #00FF00;
		float: right;
		right: 20px;
	}

	.right {
		position: relative;
		background: #00FF00;
		text-align: left;
		color:#228B22;
		max-width: 60%;
		min-width: 40px;
		height:auto;
		padding:5px 15px 5px 15px;
		border-radius: 10px;
		border: 1px solid #00FF00;
		float: right;
		right: 20px;
	}

	.right::before {
		content: '';
		position: absolute;
		visibility: visible;
		top: -1px;
		right: -10px;
		border: 10px solid transparent;
		border-top: 12px solid #00FF00;
	}

	.right::after {
		content: '';
		position: absolute;
		visibility: visible;
		top: 0px;
		right: -8px;
		border: 10px solid transparent;
		border-top: 12px solid #00FF00;
		clear: both;
	}
	div.right,
	div.right_next{
		clear: right;
	}

	.right .right_next {
		display: block;
		height: auto;
		max-width: 100%;
	}

	.name_right, 
	.time_right {
		font-size: 12.5px;
		text-align:right;
	}

	.name_right {
		top: 5px;
		color: #ddb0a0;
	}

	.right .right_next .name_right {
		right: 15px;
	}

	.time_right {
		margin-top:5px;
		color: #ddb0a0;
	}

	.right .right_next {
		left: 15px;
	}

	.msg_container_left{
		position:relative;
		float:left;
		width:100%;
		height:auto;
		margin:0;
		margin-top:5px;
		margin-bottom:5px;
		margin-left:30px;
		padding:0;
	}

	.left_next {
		position: relative;
		background: #00FF00;
		text-align: left;
		color:#228B22;
		max-width: 60%;
		min-width: 40px;
		height:auto;
		padding: 5px 15px 5px 15px;
		border-radius: 10px;
		border: 1px solid #00FF00;
		float: left;
		left: 20px;
	}

	.left {
		position: relative;
		background: #00FF00;
		text-align: left;
		color:#228B22;
		max-width: 60%;
		min-width: 40px;
		height:auto;
		padding: 5px 15px 5px 15px;
		border-radius: 10px;
		border: 1px solid #00FF00;
		float: left;
		left: 20px;
	}

	.left::before {
		content: '';
		position: absolute;
		visibility: visible;
		top: -1px;
		left: -10px;
		border: 10px solid transparent;
		border-top: 12px solid #00FF00;
	}

	.left::after {
		content: '';
		position: absolute;
		visibility: visible;
		top: 0px;
		left: -8px;
		border: 10px solid transparent;
		border-top: 12px solid #00FF00;
		clear: both;
	}

	div.left,
	div.left_next{
		clear: left;
	}

	.left .left_next{
		display: block;
		height: auto;
		max-width: 100%;
	}

	.name_left, 
	.time_left {
		font-size: 12.5px;
	}

	.name_left {
		top: 5px;
		color: #e1ceb1;
	}

	.left_left .name_left {
		left: 15px;
	}

	.time_left {
		margin-top:5px;
		color: #e1ceb1;
	}

	.left_left {
		right: 15px;
	}
</style>
<head>
	<title>Chat with random people</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body bgcolor="#228B22">
	<div class="container">
		<div class="center">
			<p style="color: #228B22;">Welcome: <?php echo $_SESSION['username']; ?></p>
			<p style="color: #228B22;">You have connected to room: <?php echo $_SESSION['room']; ?></p>
			<?php
				echo '<input type="text" value="'. $_SESSION['username'] .'" id="username" hidden></input>';
				echo '<input type="text" value="'. $_SESSION['room'] .'" id="room" hidden></input>';
			?>		
			<div class="chat_text" id="chat_text">
				
			</div>
			<div class="submit_text">
				<input class="input_text" type="text" name="input_text" id="message" placeholder="Send message..."></input>
				<button type="submit" class="input_button" name="submit_text" id="send_msg">Send</button>
			</div>
		</div>
	</div>
</body>
<script>

	function scrollBottom(){
		$("#chat_text").scrollTop(function() { return this.scrollHeight; });
	}
	setTimeout(function () {
		scrollBottom();
    }, 1200);

	$(document).ready(function(){
		$('#send_msg').on("click",function(){
			$.ajax({
				url:"submit_content.php",
				method:"POST",
				data:{
					username: $('#username').val(),
					room: $('#room').val(),
					message: $('#message').val()
				},
				dataType:"text",
				headers: {
				    'Cache-Control': 'no-cache' 
				},
				success:function(data){
					$('#message').val("");
					setTimeout(function () {
						scrollBottom();
					}, 1200);
				}
			});
		});

		$('#send_msg').on("click",function(){
			setTimeout(function () {
				scrollBottom();
			}, 1200);
		});

		setInterval(function(){
			$.ajax({
				url:"chat_content.php",
				method:"POST",
				data:{
					username: $('#username').val(),
					room: $('#room').val()
				},
				dataType:"text",
				headers: {
				    'Cache-Control': 'no-cache' 
				},
				success:function(data){
					$("#chat_text").html(data)
				}
			});
		}, 1000);
	});
</script>
</html>