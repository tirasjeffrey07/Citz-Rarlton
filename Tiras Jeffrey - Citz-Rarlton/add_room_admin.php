<!DOCTYPE html>
<html>
<head>
	<title>Admin Add Rooms</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
	body {
	  margin: 0;
	  background: #f2f2f2;
	  overflow-y: hidden;
	}
	table {
		font-size: 22px;
		font-family: 'Raleway', sans-serif;
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
	td {
		text-align: center;
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
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 10px; font-size: 48px;">The <p style="color: #f7b06e; display: inline;">Citz Rarlton</p></td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
			<div class="basic_box">
		  	<table>
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Add Rooms</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br><br>
			<form action="admin_room_added.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select style="font-family: 'Raleway', sans-serif;font-weight:bold;" name="rooms" required>
							<option style="font-family: 'Raleway', sans-serif;font-weight:bold;" value="">Select</option>
							<option style="font-family: 'Raleway', sans-serif;font-weight:bold;" value="Single bed">Single bedded</option>
							<option style="font-family: 'Raleway', sans-serif;font-weight:bold;" value="Double bed">Double bedded</option>
							<option style="font-family: 'Raleway', sans-serif;font-weight:bold;" value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to add:</td>
					<td style="text-align: left;"><input style="font-family: 'Raleway', sans-serif;" type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input style="font-family: 'Raleway', sans-serif;font-weight:bold;" align="center" type="submit" value="Add Room"></span>
			</form>
			<br><br>
		</div>
	</div>
</body>
</html>