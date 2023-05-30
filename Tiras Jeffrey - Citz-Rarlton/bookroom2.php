<!DOCTYPE html>
<html>
<head>
	<title>Confirm Room Book</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
	body {
	  margin: 0;
	  background: #f2f2f2;
	  overflow-y: hidden;
	  font-family: 'Raleway', sans-serif;
	}
	table {
		font-size: 22px;
		font-family: 'Raleway', sans-serif;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background-color: #203D70;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #203D70;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
		font-family: 'Raleway', sans-serif;
	}
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li {
		color: white;
		font-family: 'Raleway', sans-serif;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #f7b06e;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #f7b06e;
	  	color: white;
	  	
	}

	a.active {
	  	background-color: #f7b06e;
	  	color: white;
	}
	
	a:hover {
	  	background-color:  #f7b06e;
	  	color: white;
	  	
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">The <p style="color: #f7b06e; font-size: 48px; display: inline;">Citz Rarlton</p></td>
			<td id="td1" style="font-size: 25px; text-align: center;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Room Booking Request is submitted successfully!<br>Now wait for the Admin to confirm the request.</p>
		<P><br>Click Next to get redirected to home page </P>
		<a href="user_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid  #f7b06e;">Next</a>
	</div>
</body>
</html>