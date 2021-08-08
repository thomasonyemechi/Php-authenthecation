<?php 
class Profile
{
	function __construct()
	{
		if(array_key_exists('registerUser', $_POST)){ $this->registerUser(); }
		elseif(array_key_exists('userLogin', $_POST)){ $this->userLogin(); }
		if(array_key_exists('userLogin', $_POST)){ $this->userLogin(); }
		elseif(isset($_GET['userId'])){ $this->getUser(); }

	}


	// function __construct(argument){

	// }









	function getUser () {
		$id = $_GET['userId'];
		$sql = $db->query("SELECT * FROM users WHERE sn='$id' ");
		$row = mysqli_fetch_array($sql);
		echo json_encode($row);
	}




	// if(isset($_GET['emailChecker'])){
	// 	$email = $_GET['emailChecker'];
	// 	if(checkEmail($email) == 0){ 
	// 		$sql = $db->query("SELECT * FROM users WHERE email='$email' ");
	// 		$data = [
	// 			"message" => "email already exist",
	// 			"success" => FALSE,
	// 			"data" => $sql->fetch_object()
	// 		];
	// 	}else{
	// 		$data = [
	// 			"message" => "email does not exist",
	// 			"success" => TRUE
	// 		];
	// 	}

	// 	echo json_encode($data);
	// }


	// if(array_key_exists('editPhoto' , $_POST)){
	// 	$user = $_SESSION['user_id'];
	// 	$photo = getUser($user, 'photo');
	// 	if($photo == ''){
	// 		//
	// 	}else {
	// 		unlink('img/'.$photo);
	// 	}
			
	// 	$img = strtolower(explode('.', $_FILES['mypicture']['name'])[1]);

	// 	if(!$img == 'jpg' or $img == 'png' or $img == 'jpeg'){
	// 		$report = 'Your cannot upload a '. $img .' image'; $count;
	// 	}else{
	// 		$newname = $user.time().'.'.$img;
	// 		move_uploaded_file($_FILES['mypicture']['tmp_name'], 'img/'.$newname);
	// 		$sql = $db->query("UPDATE users SET photo='$newname' WHERE sn='$user' ") or die('cannot connect ');
	// 		$report = 'imgae has been uploaded';
	// 	}
	// }



	// if(array_key_exists('userLogout', $_POST)){
	// 	session_destroy();
	// 	//unset($_SESSION['user_id']);
	// 	header('location: login.php');
	// }


	
	function userLogin(){
		global $db, $report, $count;
		//print_r($_POST); 
		$email = valEmpty($_POST['email'], 'Email', 7);
		$password = valEmpty($_POST['password'], 'Password', 4);

		$user = $db->query("SELECT * FROM users  WHERE email='$email' ")or die('Cannot Select');
		$num = mysqli_num_rows($user);
		if($num > 0){
			//check password
			$row = mysqli_fetch_array($user);
			if(password_verify($password, $row['pass'])){
				//crerate login session
				$_SESSION['user_id'] = $row['sn'];
				header('location: index.php');
			}else{ $report = 'incorrect password'; $count = 1; }
		}else{ $report = 'This email does not exist'; $count = 1; }


	}

	//regitser use from dignup.php

	function registerUser(){
		global $db, $report, $count;

		print_r($_POST); //exit('oti ri ooh');
		//declaring variables
		$surname = valEmpty($_POST['surname'], 'Surname', 3 );
		$othernames = valEmpty($_POST['othernames'], 'OtherNames', 3 );

		$email = valEmpty($_POST['email'], 'Email', 3 );
		$password = valEmpty($_POST['password'], 'Password', 3 );

		$password2 = $_POST['password2'];
		$phone = valEmpty($_POST['phone'], 'Phone Number', 11 );

		$sex = valEmpty($_POST['gender'], 'Gender', 4 );
		$address = valEmpty($_POST['address'], 'Address', 4 );

		$city = valEmpty($_POST['city'], 'City', 3 );
		$state = valEmpty($_POST['state'], 'State', 3 );

		$country = valEmpty($_POST['country'], 'Country', 3 );

		if(checkEmail($email) == 0){ $report = 'email already exist'; $count = 1; }

		//time
		$ctime = time();


		if(!isset($count)){
			//comparing password
			if($password == $password2){
				//hasing password
				$pass = password_hash($password, PASSWORD_DEFAULT);
				//inserting into database
				$sql = $db->query("INSERT INTO users(surname, othernames, phone, email, pass, gender, city, state, country, address, ctime) 
					VALUES('$surname', '$othernames', '$phone', '$email', '$pass', '$sex', '$city', '$state', '$country', '$address', '$ctime') ")or die('cannot connect');
				$report = 'User information has been saved you can now login';
			}else
			{ 
				$report = 'Password does not match'; $count = 1; 
			}
		}

	}







	
}


$Profile = new Profile;




