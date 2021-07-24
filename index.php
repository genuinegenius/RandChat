<html>
<?php include("server.php"); ?>
<style>
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
		width: 350px;
		height: auto;
		background-color: #00FF00;
		border-radius: 10px;
		text-align: center;
		padding: 10px;
	}
	.input_text{
		margin-top: 10px;
		color: #228B22;
		background-color: transparent;
		border: 1px solid #228B22;
		width: 70%;
		padding: 5px;
		text-align: center;
	}
	.input_text:focus{
		outline: 0;
	}
	.input_button{
		margin-top: 10px;
		color: #00FF00;
		background-color: #228B22;
		border: 1px solid #228B22;
		width: 30%;
		padding: 5px;
		text-align: center;
		cursor: pointer;
	}
</style>

<title>Chat with random people</title>
<body bgcolor="#228B22">
	<div class="container">
		<div class="center">
			<p style="color: #228B22;">Connect and chat with randoms</p>
			<form method="POST">
				<input class="input_text" type="text" name="username" placeholder="Username"></input>
				<input class="input_text" type="text" name="room" placeholder="Room"></input>
				<input class="input_button" type="submit" name="connect" value="Connect"></input>
			</form>
		</div>
	</div>
</body>

</html>