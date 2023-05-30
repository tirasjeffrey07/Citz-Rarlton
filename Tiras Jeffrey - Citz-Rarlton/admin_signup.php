<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
</head>
<style>
	
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');

	div {
		width: 70%;
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
		font-size: 30px;
		
		border: 4px solid #6e1475;
		border-radius: 30px;
		font-family: 'Raleway', sans-serif;
	}
	body  {
	  	background-color: whitesmoke;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: #ee84f5;
		border: 1px solid #90EE90;
		border-radius: 5px;
		font-family: 'Raleway', sans-serif;
		color: black;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
		font-family: 'Raleway', sans-serif;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	input:hover, input:active 
	{
		background-color: #90EE90;
		
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #90EE90;
		text-decoration: none;  
		font-size: 25px;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #E6F2F8;">
		<form action="admin_signup.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; color: #9900a3;"><b>Admin Sign-Up</b></p></td>
				</tr>
				<tr>
					<td>User ID</td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td>Employee ID</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter E-ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input class="button" style="font-size: 24px;background-color: #ee84f5;border: 1px solid #90EE90;border-radius: 5px;font-family: 'Raleway', sans-serif;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>