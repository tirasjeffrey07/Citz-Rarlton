<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<link rel="stlyesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		<meta charset="UTF-8"/>
		<title>
			The Citz-Rarlton
		</title>
		
	</head>
	
	<body style="overflow-x: hidden;" >
		
		<h1><p style="color: #f7b06e; display: inline;">The Citz-Rarlton</p></h1>

		<ul>
			<li class="top"><a href="index.php">HOME</a>
			<li class="top"><a href="admin_login.php">ADMIN</a></li>
			<li class="top"><a href="user_login.php">USER</a></li>
			<li class="top"><a href="#rooms_and_rates">ROOMS</a></li>
			<li class="top"><a href="image_gallery.php">GALLERY</a>
			<li class="top" style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">JOURNEY OF A LIFETIME</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">YOUR NEXT GREAT ESCAPE</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">TOP OF THE LINE EXPERIENCE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>
		<br>
		<h2 class="welcome1" style="font-size:45px;">The Citz-Rarlton inspires life’s most meaningful moments</h2>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

		
		<h2 class="welcome2">Immersive experiences. Bespoke service. Commitment to craft.</h2>
		<h2 class="welcome2" style="padding-left: 2rem;padding-right:2rem;">At The Citz-Rarlton, we believe that travel is an opportunity to create memories that will last a lifetime. Through our legendary service, thoughtful amenities and commitment to craft, we inspire life’s most meaningful moments, each and every day. </h2><br>
		<br>
		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box">
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
		</div>
		

		<div class="footer" >
			<ul style="bottom: 0;
			margin-bottom: 0;
			margin-top: 3rem;
			width: 100vw;">
				<li ><a href="#">About Us</a>
				<li ><a href="3">Our Services</a></li>
				<li ><a href="#">FAQ</a></li>
				<li ><a href="survey.html">Survey</a></li>
				<li ><a href="#">Privacy Policy</a>
				<li ><a href="#">Contact Us</a></li>
			</ul>
		</div>
		
	</body>
</html>