<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
	div {
		width: 70%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: auto;
		margin-top: 18%;
		margin-left: auto;
		margin-top: auto;
		margin-bottom: 25%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #6e1475;
		padding-top: 10px;
		padding-bottom: 50px;
		border-radius: 20px;
		font-family: 'Raleway', sans-serif;
	}
	body  {
		margin-right: auto;
		margin-left: auto;
		margin-top: auto;
		margin-bottom: auto;
	  	background-color: #d9d9d9;
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
		font-size: 1.75rem;
	}
	input {
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
		padding-left: 10px;
		padding-right: 10px;
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
		/*color: #90EE90;*/
		text-decoration: none;  
		font-size: 1.75rem;
	}
	button{
		color:black;
	}
	input:hover, input:active 
	{
		background-color: #90EE90;
		
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #E6F2F8">
		<form action="user_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: #9900a3;font-family: 'Raleway', sans-serif;"><b>New User SignUp</b></p></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Name: </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Phone Number: </td>
					<td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Password: </td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Email ID: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">ID Proof: </td>
					<td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Date of birth: </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 1.75rem;font-weight:bold; background-color: #ee84f5; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: BLACK; border-radius: 4px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div> 
</body>
</html>