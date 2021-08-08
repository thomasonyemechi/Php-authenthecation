var surname = document.querySelector("#surname");
var othername = document.querySelector("#othername");
var phone = document.querySelector("#phone");
var gender = document.querySelector("#gender");
var email = document.querySelector("#email");
var password = document.querySelector("#password");
var password2 = document.querySelector("#password2");
var address = document.querySelector("#address");
var city = document.querySelector("#city");
var country = document.querySelector("#country");
var state = document.querySelector("#state");
var button = document.querySelector("#button");

console.log(phone.id);

const setError = (param, message) => {
	let input = document.getElementById(param+"_err");
	input.style = "color: red;";
	input.innerHTML = message;
}


const clearError = (param) => {
	let input = document.getElementById(param+"_err");
	input.innerHTML = "";
}


surname.addEventListener('keyup', (event) => {
	//getting the input value
	let val = surname.value;

	if(val.length < 3){
		button.setAttribute('disabled', 'disabled');
		surname.className = "form-control is-invalid";
		setError(surname.id, 'Surname is required');
	}else{
		button.removeAttribute('disabled');
		surname.className = "form-control is-valid";
		clearError(surname.id)
	}
});


phone.addEventListener('keyup', (event) => {
	//getting the input value
	let val = phone.value;

	if(val.length < 12){
		button.setAttribute('disabled', 'disabled');
		phone.className = "form-control is-invalid";
		setError(phone.id, 'Phone number is too short ');
	}else{
		button.removeAttribute('disabled');
		phone.className = "form-control is-valid";
		clearError(phone.id)
	}
});


gender.addEventListener('change', () => {
	//getting the input value
	let val = gender.value;

	if(val.length < 4){
		button.setAttribute('disabled', 'disabled');
		gender.className = "form-control is-invalid";
		setError(gender.id, );
	}else{
		button.removeAttribute('disabled');
		gender.className = "form-control is-valid";
		clearError(gender.id)
	}
});


email.addEventListener('keyup', () => {
	let val = email.value;
	var search = val.search("@");
	if(search < 3){
		button.setAttribute('disabled', 'disabled');
		email.className = "form-control is-invalid";
		setError(email.id, "please enter a valid email address");	
	}else{
		button.removeAttribute('disabled');
		email.className = "form-control is-valid";
		clearError(email.id)
	}
});



password.addEventListener('keyup', () => {
	let val = password.value;
	console.log(val);
	if(val.length < 6){
		button.setAttribute('disabled', 'disabled');
		password.className = "form-control is-invalid";
		setError(password.id, "Passwors is too short");	
	}else{
		button.removeAttribute('disabled');
		password.className = "form-control is-valid";
		clearError(password.id)
	}


	if(password2.value !== ''){
		if(val !== password2.value){
			button.setAttribute('disabled', 'disabled');
			password2.className = "form-control is-invalid";
			setError(password2.id, "Password does not match");	
		}else{
			button.removeAttribute('disabled');
			password2.className = "form-control is-valid";
			clearError(password2.id)
		}
	}

});

password2.addEventListener('keyup', () => {
	let pass = password.value; let pass2 = password2.value;
	if(pass !== pass2){
		button.setAttribute('disabled', 'disabled');
		password2.className = "form-control is-invalid";
		setError(password2.id, "Password does not match");	
	}else{
		button.removeAttribute('disabled');
		password2.className = "form-control is-valid";
		clearError(password2.id)
	}
});


// const checker = () => {
// 	if( surname.value == ""){
// 	button.setAttribute('disabled', 'disabled');
// 	}else if(email.value == '' ){ button.setAttribute('disabled', 'disabled'); }
// 	else if(gender.value == '' ){ button.setAttribute('disabled', 'disabled'); }
// 	else{ button.removeAttribute('disabled');}
//}




