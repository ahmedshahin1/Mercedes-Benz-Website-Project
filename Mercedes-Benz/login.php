<!DOCTYPE HTML5>
<html>
<head>
	<title>Mercedes-Benz</title>
	<meta charset="UTF-8">
	<script src="jsLogin.js"></script>
	<link rel="stylesheet" href="myStyle1.css">
</head>
<body>
	<header id="header">
		<h1>Mercedes-Benz Cars</h1>
	</header>
		<div class="login-wrapper">
      <form action="login_handler.php" method="post" class="form">
        <h2>Login</h2>
        <div class="inputgrp">
          <input type="text" name="email" id="email" placeholder="Enter Your Email"required />
          
        </div>
        <div class="inputgrp">
          <input type="password"  name="password" id="password" placeholder="Enter your password"required />
        </div>
        <input type="submit" value="Login" class="btn"/>
		
      </form>
    </div>
</html>
