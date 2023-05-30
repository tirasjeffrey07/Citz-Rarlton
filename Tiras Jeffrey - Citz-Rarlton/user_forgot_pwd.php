<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
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
	button{
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
	button:link, button:visited,  
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, 
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		/*color: #90EE90;*/
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #90EE90;
		
	}
</style>
<body>
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 2.4rem; font-family: 'Raleway', sans-serif; color: #ee84f5;"><b>User Forgot Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Enter User Email address </td>
				<td><input class="input" type="email" name="email" placeholder="Enter email address" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Enter Date Of Birth</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-family: 'Raleway', sans-serif; font-size: 25px; background-color:#ee84f5;  border: 1px solid #ee84f5; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 4px;" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>