<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
	body {
	  margin: 0;
	  background: #f2f2f2;

	}
	table {
		font-size: 22px;
		font-family: 'Raleway', sans-serif;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		font-family: 'Raleway', sans-serif;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
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
			<td id="td1" style="padding: 10px; font-size: 48px;">The <p style="color: #f7b06e; display: inline;">Citz Rarlton</p></td>
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
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Room Details</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Number of beds</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Single Bedded</td>
					<td>1</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>Double Bedded</td>
					<td>2</td>
					<td>1800</td>
				</tr>
				<tr>
					<td>Four Bedded</td>
					<td>4</td>
					<td>3000</td>
				</tr>
			</table><br><br>
			<form class="basic_box" action="bookroom1.php" method="post">
				<table>
					<br><br>
					<tr>
						<td style="text-align: left;">Select room type:</td>
						<td style="text-align: left;">
							<select style="font-family: 'Raleway', sans-serif;" name="rooms" required>
								<option style="font-family: 'Raleway', sans-serif;" value="">Select</option>
								<option style="font-family: 'Raleway', sans-serif;" value="Single bed">Single bedded</option>
								<option style="font-family: 'Raleway', sans-serif;" value="Double bed">Double bedded</option>
								<option style="font-family: 'Raleway', sans-serif;" value="Four bed">Four bedded</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-in date:</td>
						<td style="text-align: left;">
							<input style="font-family: 'Raleway', sans-serif;font-weight:bold;" type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-out date:</td>
						<td style="text-align: left;">
							<input style="font-family: 'Raleway', sans-serif;font-weight:bold;" type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table>
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">AC</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input style="font-family: 'Raleway', sans-serif;font-weight:bold;" type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>