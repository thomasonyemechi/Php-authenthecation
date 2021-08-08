<?php

//defining project name
define("projectName", "Bigger Thomas Profile Maker"); 


define("DB_NAME", "biggerthomas");
define("DB_PASS", "");
define("DB_USER", "root");
define("DB_HOST", "localhost");


$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// $users = $db->query("SELECT * FROM users WHERE status=1 ") or die('Cannot Select');
// $num = mysqli_num_rows($users);


// // while($row = mysqli_fetch_array($users)){
// // 	
	
// // }

// print_r($num);

