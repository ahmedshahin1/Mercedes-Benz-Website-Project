<!DOCTYPE HTML5>
<HTML>
<HEAD>
	<title>Mercedes-Benz</title>
	<meta charset="UTF-8">
	<script src="Js.js"></script>
	<link rel="stylesheet" href="myStyle1.css">
</head>
<body>
	<header id="header">
		<h1>Mercedes-Benz Cars</h1>
	</header>
	
<div align="center">
 <div class="Registrationform">
    <h2>Registration</h2>
	<form onsubmit="return validation()" method="post" name="regForm" action="reg_handler.php">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="username" >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="passwordd" >
      </div>
	  <div id="error" ></div>
      <div class="policy">
        <input type="checkbox" >
        <h3>I Accept All Terms & Condition</h3>
      </div>
      <div>
        <input type="Submit" value="Register Now" class="btn">
  
        <input type="reset"  value="Clear" class="btn" onclick="clear2();">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</div>


</body>

</html>


