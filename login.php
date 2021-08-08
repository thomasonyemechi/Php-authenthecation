<?php
session_start(); ob_clean();
include("lib/connect.inc.php");  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>



<div class="row justify-content-center pt-5 pt-sm-5 pt-md-5 pt-lg-0">
    <div class="col-md-12 col-lg-6">
      
            <div class="card-body px-md-5 py-5">
                
                <h4 class="font-medium m-b-10" style="font-weight: bolder">Login<br></h4>
                <!-- Form -->
        <div class="row">

            <div class="col-12">

                <?php if(isset($report)){echo Alert2(); } ?>

                <form  method="post" autocomplete="off"  >

                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <input class="form-control"  id="email" type="email" required placeholder="Email" name="email">
                            <span id="email_err"></span>

                            <input class="form-control mt-4" type="password" id="password" placeholder="Password" name="password" autofill="off" >
                            <span id="password_err"></span>
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <div class="col-xs-12 p-b-20 pt-4">
                            <button class="btn btn-block btn-lg btn-primary" type="submit" id="button" name="userLogin">Login</button>
                        </div>
                    </div>


                    
                    <div class="form-group m-b-0 m-t-10 ">
                        <div class="col-sm-12 text-center ">
                            Don't have an account? <a href="signup.php" class="text-primary m-l-5 "><b>Signup</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>





</body>

<script src="bootstrap/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">

	var email = document.querySelector("#email");
	var password = document.querySelector("#password");


	const setError = (param, message) => {
		let input = document.getElementById(param+"_err");
		input.style = "color: red;";
		input.innerHTML = message;
	}


	const clearError = (param) => {
		let input = document.getElementById(param+"_err");
		input.innerHTML = "";
	}




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

			//checking against our db
			$.ajax({
				url : 'test.php?emailChecker='+val,
				method: 'GET'
			}).done((res) => {
				res = JSON.parse(res);
				console.log(res.success);
				if(res.success){
					button.setAttribute('disabled', 'disabled');
					email.className = "form-control is-invalid";
					setError(email.id, "Email does not exist in out database");
				}else{
					button.removeAttribute('disabled');
					email.className = "form-control is-valid";
					clearError(email.id)
				}
			})
			
		}

		


	});



	password.addEventListener('keyup', () => {
		let val = password.value;
		if(val.length < 6){
			button.setAttribute('disabled', 'disabled');
			password.className = "form-control is-invalid mt-4";
			setError(password.id, "Password is too short");	
		}else{
			button.removeAttribute('disabled');
			password.className = "form-control is-valid mt-4";
			clearError(password.id)
		}
	});



</script>

</html>