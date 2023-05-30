<!DOCTYPE html>
<html>
<head>
	<title>User Room Status</title>
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
					<td colspan="14"><p style="font-size: 28px; text-align: center; padding-left:17rem;"><b>Room Booking Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th></th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th></th>
					<th>Room Type</th>
					<th></th>
					<th></th>
					<th>Check-in Date</th>
					<th></th>
					<th></th>
					<th>Check-out Date</th>
					<th></th>
					<th></th>
					<th>Room Status</th>
					<th></th>
					<th></th>
					<th>Price</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from user_room_book";
					$sql = "SELECT * from temp_session";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_row($result);
					$phone = $row[0];
					$idproof = $row[4];
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($phone==$row[0] && $idproof==$row[2])
				    		{
				    			?>
				    			<td><?php echo $row[15]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[1]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[3]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[4]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[5]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[13]; ?></td>
								<td></td>
								<td></td>
				    			<td><?php echo $row[14]; ?></td>
								<td></td>
								<td></td>
				    		</tr><?php
				    		}
				    	}
				  		mysqli_free_result($result);
					}
				?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td></td>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="user_cancel_room.php" method="post">
							<input type="number" name="book_id">
					</td>
					<td style="text-align: center;"><button type="submit">Cancel Booking</button></td></form>	
				</tr>
			</table>
	</div>
</body>
</html>