<?php

session_start(); ob_clean();

include('lib/connect.inc.php');

if(isset($_SESSION['user_id'])){}else{ header("location: login.php"); }

$user = $_SESSION['user_id'];

$sql = $db->query("SELECT * FROM users WHERE sn='$user' ")or die('cannot connect');
$data = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<header>
    <!-- Start: Navigation with Button -->
    <nav class="navbar navbar-light navbar-expand navigation-clean-button border-bottom">
        <div class="container">
            <a class="navbar-brand" href=".">
                <?php echo projectName ?>
            </a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><form method="post">
                    	<button name="userLogout" class="btn btn-danger mb-2 float-right" onclick="return confirm('You will be logged out.')">
				  Logout 
				</button>
                    </form>
			</li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navigation with Button -->
</header>



<div class="row justify-content-center pt-5 pt-sm-5 pt-md-5 pt-lg-0">
    <div class="col-md-12 col-lg-6">
      
            <div class="card-body px-md-5 py-5">
            	<div class="row">
            		<div class="col-md-3">
            		</div><?php if(isset($report)){echo Alert(); } ?>
            		<div class="col-md-6">
            			<a data-toggle="modal" data-target="#editPhoto" ><img class="img-fluid img-center rounded-circle mb-3" src="img/<?php echo $data['photo'] ?>"></a>
            		</div>
            		<div class="col-md-12">

            			<h3 class="text-center"> <?php echo ucwords($data['surname'].' '. $data['othernames']); ?> <br>
            				<small class="text-muted text-sm">Fullstack web developer</small></h3>
            		</div>

            		<hr/>

            		<form>        
               			<div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                               <small> Surname:</small>
                                <h6><?php echo ucwords($data['surname']) ?></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                 <small> Other Names:</small>
                                <h6><?php echo ucwords($data['othernames']) ?></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <small> Email:</small>
                                <h6><?php echo $data['email'] ?></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                 <small>Phone Number:</small>
                                <h6><?php echo $data['phone'] ?></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <small> Gender:</small>
                                <h6></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                               <small> Residential Address: </small>
                                <h6><?php echo $data['address'] ?></h6>
                                <hr/>
                            </div>

                            <div class="col-md-6">
                               <small> City: </small>
                                <h6><?php echo ucwords($data['city']) ?></h6>
                                <hr/>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                               <small> State: </small>
                                <h6><?php echo ucwords($data['state']) ?></h6>
                                <hr/>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                               <small> Country: </small>
                                <h6><?php echo ucwords($data['country']) ?></h6>
                                <hr/>
                            </div>
                            
                           
                            
                           
                            <div class="col-lg-6 col-md-6 col-12">
                                <small> Bank Name: </small>
                                <h6></h6>
                                <hr/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <small> Account No: </small>
                                <h6></h6>
                                <hr/>
                            </div>

                        </div>
            		</form>

            		<div class="col-md-12 p-0 m-0">
            			<button type="button" class="btn btn-primary btn-block mb-2" data-toggle="modal" data-target="#editInfo">Click to toggle edit modal
            		</div>
            	</div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editPhoto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Edit Profile Photo</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form method="post" enctype="multipart/form-data">
				<div>
					<div class="col-lg-12 col-md-12 col-12 mb-2">
						<label>Photo (jpg, png, jpeg)<span>*</span></label>
						<input type="file" name="mypicture" class="form-control" required>
					</div>
				</div>
				
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button class="btn-primary btn" name="editPhoto">Submit</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>







    <div class="modal fade" id="editInfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Edit Profile Information</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form method="post" enctype="multipart/form-data">
				<div>
					<div class="col-lg-12 col-md-12 col-12 mb-2">
						  <form  method="post" autocomplete="off" >
                    <div class="form-group row ">
                        <div class="col-md-6 ">
                            <input class="form-control form-control" value="<?php echo ucwords($data['surname']) ?>" id="surname" type="text" required placeholder="surname" name="surname" style="border-color: #CCC;">
                            <span id="surname_err"></span>
                        </div>
                    
                        <div class="col-md-6 ">
                            <input class="form-control form-control" type="text" id="lastname" name="othernames" value="<?php echo ucwords($data['othernames']) ?>" required placeholder="Othernames">
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
                            <input class="form-control form-control" id="phone" type="text" required placeholder="Phone Number" name="phone" value="<?php echo ucwords($data['phone']) ?>">
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
                           <input type="text" value="<?php echo ucwords($data['city']) ?>" name="city" id="city" placeholder="city" class="form-control form-control">

                        </div>
                    
                        
                        <div class="col-md-6 ">
                           <input class="form-control form-control" id="address" type="text" required placeholder="Residential Address" value="<?php echo ucwords($data['address']) ?>" name="address"> 
                        </div>
                    </div>
                </form>
					</div>
				</div>
				
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button class="btn-primary btn" >Save</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>




</body>

	<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>