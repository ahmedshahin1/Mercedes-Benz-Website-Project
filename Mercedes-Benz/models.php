<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Styles\style.css">
	<script src="index.js"></script>
    <title>Mercedes Model Showcase</title>
</head>
<body>
    <div class="container">
        <h1>  Mercedes Model Showcase</h1>
		
		<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="aclass.php">A Class</a>
	<a href="bclass.php">B Class</a>
	<a href="cclass.php">C Class</a>
    <a href="eclass.php">E Class</a>
	<a href="sclass.php">S Class</a>
	<a href="gclass.php">G Class</a>
	<a href="gtr.php">GTR</a>
  </div>
</div>
				
			<a href="home.php" class="btn">Back To Home</a>
		
		<div class="model fadeInUp">
            <a href ="aclass.php">
			<img src="images\A1.jpg" alt="Model 1" width="700" height="700"/></a>
            <h2>A Class</h2>
        
        </div>
		
		<div class="model fadeInUp" style="animation-delay: 0.2s;">
            <a href ="bclass.php">
			<img src="images\B1.jpg" alt="Model 2" width="700" height="700"/>
			</a>
            <h2>B Class</h2>
           
        </div>
		
		<div class="model fadeInUp">
            <a href ="cclass.php">
			<img src="images\C1.jpg" alt="Model 3" width="700" height="700"/>
			</a>
            <h2>C Class</h2>
            
        </div>
		
        <div class="model fadeInUp" style="animation-delay: 0.4s;">
            <a href="eclass.php">
			<img src="images\E1.jpg" alt="Model 4" width="700" height="700"/>
			</a>
            <h2>E CLASS</h2>
            
        </div>
		<div class="model fadeInUp" style="animation-delay: 0.4s;">
            <a href ="sclass.php">
			<img src="images\S1.jpg" alt="Model 5" width="700" height="700"/>
			</a>
            <h2>S CLASS</h2>
            
        </div>
		
		
		<div class="model fadeInUp" style="animation-delay: 0.4s;">
            <a href="gclass.php">
			<img src="images\G1.jpg" alt="Model 6" width="700" height="700"/>
			</a>
            <h2>G Class</h2>
            
        </div>
		
		<div class="model fadeInUp" style="animation-delay: 0.4s;">
            <a href="gtr.php">
			<img src="images\GTR1.jpg" alt="Model 7" width="700" height="700"/>
			</a>
            <h2>GTR</h2>
           
        </div>
		
		
		
    </div>
	
</body>
</html>
