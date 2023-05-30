<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
		body {
			overflow-x: hidden;
			margin: 0px;
			background-color: #ffffff;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
			
		}
		ul{
  			list-style-type: none;
			background-color: #330137;
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		.footer {
			
			background-color: #330137;
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			margin-top: 0px;
			padding: 10px,0;
			font-family: 'Raleway', sans-serif;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: center;
			align-items: center;
			margin-bottom: 0px;
			margin-top: 0px;
			font-family: 'Raleway', sans-serif;
			
		}
		li
		{
			display: inline;
			float: left;
		}
		* {box-sizing: border-box;}

		body {font-family: 'Raleway', sans-serif;}

		.mySlides {display: none;}

		h1
		{
			background-color: #330137;
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: 'Raleway', sans-serif;
		}

		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			font-family: 'Raleway', sans-serif;
		}

		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}

		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			
			background-color: #330137;
			width: 500px;
			margin: auto;
			border-radius: 40px;
			font-family: 'Raleway', sans-serif;
		}
	</style>
	<body>
	<h1><p style="color: #f7b06e; display: inline;">The Citz-Rarlton</p></h1>
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN</a></li>
			<li><a href="user_login.php">USER</a></li>
			<li><a href="#rooms_and_rates">ROOMS</a></li>
			<li><a href="image_gallery.php">GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>
		<br>
		<h2 class="r_room">IMAGE GALLERY</h2><br>
		<div class="row">
  			<div class="column">
    			<img src="images/1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br><br><br>
		<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2>
		<div class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/1.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/2.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/3.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Presedential Suite</h3>
  				</div>
  				<div class="column">
    				<h3>Executive Suite</h3>
  				</div>
  				<div class="column">
    				<h3>Standard Suite</h3>
  				</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<br>
			<h2  class="foot-text">Contact</h2><br>
		</div>
		<div id="contact" class="footer">
			<h5  class="foot-text">tj@gmail.com</h4><br>
			<h5  class="foot-text">+91 1234567890</h4><br>
		</div>
	</body>