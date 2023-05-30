<!DOCTYPE html>
<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
	div {
		width: 70%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: auto;
		margin-top: 25%;
		margin-left: auto;
		margin-top: auto;
		margin-bottom: 25%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #6e1475;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
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
	<div style="background-color: #E6F2F8;">
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
		<a href="admin_login.php">Redirect to Admin Login</a>
	</div>
</body>
</html>