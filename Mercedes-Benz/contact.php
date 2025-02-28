 <!DOCTYPE>
 <html>
	 <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Styles\style.css">
		<title>Mercedes-Benz  Cars</title>
		<script>
			function validateForm() {
			  let x = document.forms["myForm"]["fname"].value;
			  if (x == "") {
				alert("Name must be filled out");
				return false;
			  }
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
	 <section id="contact">
			<div class="container">
				<h2>Contact Us</h2>
				<p>If you have any questions or inquiries about missing models, feel free to contact us.</p>
	</head>
	<body>
	<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
	  Name: <input type="text" name="fname">
	  <br></br>
	<form email="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
	Email: <input type="text"><br></br>

	<form message="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
	Message: <textarea input type="text"></textarea><br></br>
	
	<input type="submit" value="Submit" class="cbtn">
	<input type="reset" value="Clear" class="cbtn">
	
	</form>

	</body>
			</div>
		</section>
	</html>