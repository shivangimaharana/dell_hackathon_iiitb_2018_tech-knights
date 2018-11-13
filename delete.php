<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<?php include('deletembom.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete attributes from mbom</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Delete attributes from mbom</h2>
  </div>
	
  <form action="delete.php" method="post">
  	
	
	
	<input type="checkbox" name="silicone_keyboard_guard" value="silicone_keyboard_guard"> silicone keyboard guard<br>
	<input type="checkbox" name="laptop_bag" value="laptop_bag" > laptop bag<br>
	<input type="checkbox" name="charger_provided" value="charger_provided" >charger provided<br>
	<input type="checkbox" name="user_manual" value="user_manual" > user manual<br>
	<input type="checkbox" name="qty" value="qty"> quantity<br>
	<input type="checkbox" name="Company" value="Company"> Company<br>
	<input type="checkbox" name="Product" value="Product" > Product<br>
	<input type="checkbox" name="TypeName" value="TypeName" >Type_Name<br>
	<input type="checkbox" name="Inches" value="Inches" > Inches<br>
	<input type="checkbox" name="ScreenResolution" value="ScreenResolution"> ScreenResolution<br>
	<!--<input type="checkbox" name="Ram" value="Ram" > RAM<br>
	<input type="checkbox" name="Cpu" value="Cpu" >CPU<br>
	<input type="checkbox" name="Memory" value="Memory" > Memory<br>
	<input type="checkbox" name="Gpu" value="Gpu"> GPU<br>-->
	<input type="checkbox" name="OpSys" value="OpSys" > Operating-Sysytem<br>
	<input type="checkbox" name="Weight" value="Weight" >Weight<br>
	<input type="checkbox" name="Price_euros" value="Price_euros">Price_euros<br>
	
	
  	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn btn-danger" name="reg_user">Submit</button>
	  
	  
	 </div>
	 <button type="button"   class="btn btn-success" onclick="location.href = 'Choice.php'">back</button><br><br>
	 <button type="button"   class="btn btn-warning" onclick="location.href = 'view_mbom.html'">View MBOM </button><br><br>
	 
	
  </form>
</body>

</html>

