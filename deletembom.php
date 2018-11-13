<?php


// initializing variables
//$name= "";
//$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dell');

if (isset($_POST['reg_user'])) {
	
	//$name =  $_POST['name'];
	//if (empty($name)) { array_push($errors, "enter table name"); }
	//print $name;
	
	
		
		
		
			if (isset($_POST['Company'])) {
				$sql="ALTER TABLE mbom DROP Company ";
				mysqli_query($db,$sql);
				
			} 
			if (isset($_POST['Product'])) {
				$sql="ALTER TABLE mbom DROP  Product ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['TypeName'])) {
				$sql="ALTER TABLE mbom DROP  TypeName ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['Inches'])) {
				$sql="ALTER TABLE mbom DROP  Inches ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['ScreenResolution'])) {
				$sql="ALTER TABLE mbom DROP  ScreenResolution ";
				mysqli_query($db,$sql);
			} 
			//if (isset($_POST['Ram'])) {
				//$sql="ALTER TABLE mbom DROP  Ram ";
				//mysqli_query($db,$sql);
			//} 
			//if (isset($_POST['Cpu'])) {
				//$sql="ALTER TABLE mbom DROP  Cpu ";
				//mysqli_query($db,$sql);
			//} 
			//if (isset($_POST['Memory'])) {
				//$sql="ALTER TABLE mbom DROP  Memory ";
				//mysqli_query($db,$sql);
			//} 
			//if (isset($_POST['Gpu'])) {
				//$sql="ALTER TABLE mbom DROP  Gpu ";
				//mysqli_query($db,$sql);
			//} 
			if (isset($_POST['OpSys'])) {
				$sql="ALTER TABLE mbom DROP  OpSys ";
				mysqli_query($db,$sql);
			} 
			
			if (isset($_POST['Weight'])) {
				$sql="ALTER TABLE mbom DROP  Weight ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['Price_euros'])) {
				$sql="ALTER TABLE mbom DROP  Price_euros ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['silicone_keyboard_guard'])) {
				$sql="ALTER TABLE mbom DROP  silicone_keyboard_guard ";
				mysqli_query($db,$sql);
			} 
			if (isset($_POST['laptop_bag'])) {
				$sql="ALTER TABLE mbom DROP  laptop_bag ";
				mysqli_query($db,$sql);
			}
			if (isset($_POST['charger_provided'])) {
				$sql="ALTER TABLE mbom DROP  charger_provided ";
				mysqli_query($db,$sql);
			}
			if (isset($_POST['user_manual'])) {
				$sql="ALTER TABLE mbom DROP  user_manual ";
				mysqli_query($db,$sql);
			}
			if (isset($_POST['qty'])) {
				$sql="ALTER TABLE mbom DROP  qty ";
				mysqli_query($db,$sql);
			}
			
			
			header('location: choice.php');
		
}

?>

