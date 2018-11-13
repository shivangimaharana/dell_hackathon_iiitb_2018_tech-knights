<?php
//session_start();
$mid = "";
$password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dell');
if (isset($_POST['login_user'])) {
  
	$mid=$_POST['mid'];
	$password=$_POST['password'];
  if (empty($mid)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
	
		
  if (count($errors) == 0) {
	 
  	$query = "SELECT * FROM login WHERE mid='$mid' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['mid'] = $mid;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: choice.php');
  	}else {
  		//array_push($errors, "Wrong username/password combination");
		echo "<script>alert('Incorrect credentials')</script>";
  	}
  }
}

?>

