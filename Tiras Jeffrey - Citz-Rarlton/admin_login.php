<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: black;
		border: 4px solid #6e1475;
		border-radius: 20px;
		font-family: 'Raleway', sans-serif;
	}
	body  {
		margin-right: auto;
		margin-left: auto;
		margin-top: auto;
		margin-bottom: auto
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size:cover;
	  	font-family: 'Raleway', sans-serif;
	}
	button, .button {
		background-color: #ee84f5;
		border: 1px solid #90EE90;
		border-radius: 5px;
		font-family: 'Raleway', sans-serif;
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
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
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

	button{
		color:white;
	}
	input:hover, input:active 
	{
		background-color: #90EE90;
		
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #E6F2F8;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #9900a3;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter User ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter Password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size:1.75rem; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #9900a3;"><b>New here?</b></td>
				<td style="color: #9900a3;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button style="font-size:1.75rem;color:white;" type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_signup.php" >Sign-Up</a></button ></td>
				<td><button style="font-size:1.75rem;color:white;" type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php" >Forgot Password</a></button ></td>
			</tr>
		</table>
</div>
</body>
</html>