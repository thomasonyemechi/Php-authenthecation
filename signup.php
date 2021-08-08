<?php include("lib/connect.inc.php");  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>



<div class="row justify-content-center pt-5 pt-sm-5 pt-md-5 pt-lg-0">
    <div class="col-md-12 col-lg-8">
      
            <div class="card-body px-md-5 py-5">
                
                <h4 class="font-medium m-b-10" style="font-weight: bolder">Create Your  Account<br></h4>
                <!-- Form -->
        <div class="row">

            <div class="col-12">

                 <?php if(isset($report)){echo Alert2(); } ?>

                <form  method="post" autocomplete="off" >
                    <div class="form-group row ">
                        <div class="col-md-6 ">
                            <input class="form-control form-control" id="surname" type="text" required placeholder="surname" name="surname" style="border-color: #CCC;">
                            <span id="surname_err"></span>
                        </div>
                    
                        <div class="col-md-6 ">
                            <input class="form-control form-control" type="text" id="lastname" name="othernames" required placeholder="Othernames">
                            <span id="lastname_err"></span>
                        </div>
                    </div>
                   <div class="form-group row"> 
                          <div class="col-md-6 ">
                            <select class="form-control form-control"required id="gender" name="gender">
                                <option value="">Select Gender...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span id="gender_err"></span>
                        </div>
                        <div class="col-md-6 ">
                            <input class="form-control form-control" id="phone" type="text" required placeholder="Phone Number" name="phone">
                            <span id="phone_err"></span>
                        </div> 
                       
                    </div>
                    
                    <div class="form-group row">                                   
                        <div class="col-md-6 ">
                             <select id="country" name="country" class="form-control has-value" data-minimum-results-for-search="Infinity"
                                tabindex="-1" aria-hidden="true" required>
                            <option data-display="Domain Registrations">Select Country</option>
                        </select>
                        </div>
                                                    
                        <div class="col-md-6 ">
                            <select id="state" name="state" class="form-control has-value" data-minimum-results-for-search="Infinity"
                                tabindex="-1" aria-hidden="true">
                            <option data-display="Domain Registrations">Select State</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row"> 
                         <div class="col-md-6 ">
                           <input type="text" name="city" id="city" placeholder="city" class="form-control form-control">

                        </div>
                    
                        
                        <div class="col-md-6 ">
                           <input class="form-control form-control" id="address" type="text" required placeholder="Residential Address" name="address"> 
                        </div>
                    </div>

                    <b>Login Information</b><hr>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <input class="form-control form-control"  id="email" type="email" required placeholder="Email" name="email">
                            <span id="email_err"></span>
                            <div id="output2"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ">
                            <input class="form-control" type="password" id="password" placeholder="Password" name="password" autofill="off" >
                            <span id="password_err"></span>
                        </div>
                   
                        <div class="col-md-6 ">
                            <input class="form-control" type="password" required  id="password2" placeholder="Confirm Password" name="password2" >
                            <span id="password2_err"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 ">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                <label class="custom-control-label" for="customCheck1">I agree to the <a href="terms.php" target="blank">Terms & Condition</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <div class="col-xs-12 p-b-20 pt-4">
                            <button class="btn btn-block btn-lg btn-primary" type="submit" id="button" name="registerUser">Join Livepetal</button>
                        </div>
                    </div>


                    
                    <div class="form-group m-b-0 m-t-10 ">
                        <div class="col-sm-12 text-center ">
                            Already have an account? <a href="login.php" class="text-primary m-l-5 "><b>Login</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>





</body>



<script type="text/javascript" src="signup.js">

</script>

</html>