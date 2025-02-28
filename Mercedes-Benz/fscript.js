function validation(){
	
	var valid = true;
	
	var formLabels = document.getElementsByTagName("label");
	
	var firstName = document.regForm.userName.value;
	
	if(userName == ""){
		formLabels[0].innerHTML = "Username: * [Required]";
		formLabels[0].style.color = "red";
		valid = false;
	} else if(!isNaN(userName)){
		formLabels[0].innerHTML = "Username: * [Text Only]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	return valid;
}