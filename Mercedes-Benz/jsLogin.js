

// Login Validation
function validation(){
	var valid = true;
	error=document.getElementById("error");

	
	formLabels = document.getElementsByTagName("input");

	
	
	var email = document.regForm.email.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email==""){
		error.innerHTML+="Email: [Required]<br>";
		formLabels[0].style.backgroundColor="red";
		valid = false;
	}
	else if(!re.test(email)){
		error.innerHTML+="Email: [Incorrect Email]<br>";
		formLabels[0].style.backgroundColor="red";
		valid = false;
	}
	else {
		error.innerHTML="";
		formLabels[0].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var password = document.regForm.password.value;
	if(password == ""){
		error.innerHTML+="Password: [Required]<br>";
		formLabels[1].style.backgroundColor="red";
		valid = false;
	}
	else if(password.length < 8){
		error.innerHTML+="Password: [Must be > 8]<br>";
		formLabels[1].style.backgroundColor="red";
		valid = false;
	}
	else {
		error.innerHTML="";
		formLabels[1].style="color: black";
		valid = (valid) ? true : false;
	}
	

	
	return valid;
}

function clear2(){
	/*var myArray = new Array();
	myArray[0] = "Username: *";
	myArray[1] = "Email: *";
	myArray[2] = "Password: *";
	myArray[3] = "Password confirm: *";*/
	for(var i=0 ; i < formLabels.length ; i++){
		formLabels[i].style = "color: black";
		
	}
	error.innerHTML = "";
}