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
	
	
		$sql = "CREATE TABLE mbom (serial_no INT NOT NULL, FOREIGN KEY (serial_no) REFERENCES newebom(serial_no))";
		mysqli_query($db, $sql);
		$query_2= "SELECT * FROM newebom";
		$results_2 = mysqli_query($db, $query_2);
		$num_rows_2= mysqli_num_rows($results_2);
		//echo '$num_rows_2';
		for($x=1;$x<=$num_rows_2;$x++)
		{$sql="INSERT INTO mbom (serial_no) VALUES('$x')";
			mysqli_query($db,$sql);
		}	
			if (isset($_POST['Company'])) {
			$sql="ALTER TABLE mbom ADD Company TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Company')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Company=(SELECT Company FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['Product'])) {
			$sql="ALTER TABLE mbom ADD Product TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Product')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Product=(SELECT Product FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['TypeName'])) {
			$sql="ALTER TABLE mbom ADD TypeName TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('TypeName')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET TypeName=(SELECT TypeName FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['Inches'])) {
			$sql="ALTER TABLE mbom ADD Inches TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Inches')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Inches=(SELECT Inches FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['ScreenResolution'])) {
			$sql="ALTER TABLE mbom ADD ScreenResolution TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('ScreenResolution')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET ScreenResolution=(SELECT ScreenResolution FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['Ram'])) {
			$sql="ALTER TABLE mbom ADD Ram TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Ram')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Ram=(SELECT Ram FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			
			} 
			if (isset($_POST['Cpu'])) {
			$sql="ALTER TABLE mbom ADD Cpu TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Cpu')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Cpu=(SELECT Cpu FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			
			} 
			if (isset($_POST['Memory'])) {
			$sql="ALTER TABLE mbom ADD Memory TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Memory')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Memory=(SELECT Memory FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			
			} 
			if (isset($_POST['Gpu'])) {
			$sql="ALTER TABLE mbom ADD Gpu TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Gpu')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Gpu=(SELECT Gpu FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			
			} 
			if (isset($_POST['OpSys'])) {
			$sql="ALTER TABLE mbom ADD OpSys TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('OpSys')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET OpSys=(SELECT OpSys FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			
			} 
			
			if (isset($_POST['Weight'])) {
			$sql="ALTER TABLE mbom ADD Weight TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Weight')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Weight=(SELECT Weight FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			if (isset($_POST['Price_euros'])) {
			$sql="ALTER TABLE mbom ADD Price_euros TEXT";
			mysqli_query($db,$sql);
			$sql="INSERT INTO mbominfo (mbom_name)VALUES ('Price_euros')";
			mysqli_query($db,$sql);
			$sql="update mbom as T1 SET Price_euros=(SELECT Price_euros FROM newebom AS T2 WHERE T1.serial_no=T2.serial_no)";
			mysqli_query($db,$sql);
			} 
			
			
			header('location: addmbom.php');
		
}

?>

