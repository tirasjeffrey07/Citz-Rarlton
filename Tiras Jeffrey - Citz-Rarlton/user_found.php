<!DOCTYPE html>
<html>
<head>
	<title>User Found</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
		div {
		width: 60%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: auto;
		margin-left: auto;
		margin-top: auto;
		margin-bottom: 18%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: black;
		border: 4px solid #6e1475;
		border-radius: 30px;
		font-family: 'Raleway', sans-serif;
	}
	body  {
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	
</style>
<body>
	<br>
	<br>
	<br>
	<br>
	<div style="background-color: #f2f2f2;">
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<a href="user_login.php">Redirect to User Login</a>
	</div>
</body>
</html>