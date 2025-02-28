<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="Styles\style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mercedes-Benz</title>
		<script>
		slideindex=0;
		let slideIndex = 1;
		showSlides(slideIndex);

		
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		}
		

		</script>

		</head>
		<body>
			<header>
				<h1>Mercedes-Benz Cars</h1>
			</header>
			<nav>
				<a href="home.php" class="btn">Home</a>
			    <a href="models.php" class="btn">Models</a>
				<a href="about.php" class="btn">About</a>
				<a href="contact.php" class="btn">Contact Support</a>
			</nav>
			<div class="container">
				<h2>Welcome to Mercedes Cars Website</h2>
				<p>Explore our latest models, services, and learn more about Mercedes-Benz.</p>
			</div>
			<div class="slideshow-container">

		  <div class="mySlides fade">
			<div class="numbertext">1 / 5</div>
			<img src="images\img1.jpg" style="width:100%">
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">2 / 5</div>
			<img src="images\img2.jpg" style="width:100%">
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">3 / 5</div>
			<img src="images\img3.jpg" style="width:100%">
		  </div>
		  
		   <div class="mySlides fade">
			<div class="numbertext">4 / 5</div>
			<img src="images\img4.jpg" style="width:100%">
		  </div>
		  
		   <div class="mySlides fade">
			<div class="numbertext">5 / 5</div>
			<img src="images\img5.jpg" style="width:100%">
		  </div>

		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		  <span class="dot" onclick="currentSlide(4)"></span>
		  <span class="dot" onclick="currentSlide(5)"></span>
		</div>

		</body>
</html>
