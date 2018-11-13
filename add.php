<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<?php include('serveradd.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create mbom from existing ebom</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Create mbom from existing ebom</h2>
  </div>
	
  <form action="add.php" method="post">
  	
	
	
	<input type="checkbox" name="Company" value="Company"> Company<br>
	<input type="checkbox" name="Product" value="Product" > Product<br>
	<input type="checkbox" name="TypeName" value="TypeName" >TypeName<br>
	<input type="checkbox" name="Inches" value="Inches" > Inches<br>
	<input type="checkbox" name="ScreenResolution" value="ScreenResolution"> ScreenResolution<br>
	<input type="checkbox" name="Ram" value="Ram" > Ram<br>
	<input type="checkbox" name="Cpu" value="Cpu" >Cpu<br>
	<input type="checkbox" name="Memory" value="Memory" > Memory<br>
	<input type="checkbox" name="Gpu" value="Gpu"> Gpu<br>
	<input type="checkbox" name="OpSys" value="OpSys" > OpSys<br>
	<input type="checkbox" name="Weight" value="Weight" >Weight<br>
	<input type="checkbox" name="Price_euros" value="Price_euros" > Price_euros<br>
	
	<div class="input-group">
  	 <!-- <label>Enter EBOM table name</label>
  	  <input type="text" name="name" value="<//?php echo $name; ?>">
  	</div>-->
	
  	
  	
  	<div class="input-group">
	<div>
  	  <button type="submit" class="btn btn-danger" name="reg_user">Submit</button>
	  <button type="button"   class="btn btn-warning" onclick="location.href = 'choice.php'">back</button><br><br>
	  <button type="button"   class="btn btn-success" onclick="location.href = 'view_mbom.html'">View MBOM </button><br><br>
	  </div>
	  
  	</div>
	
  </form>
</body>

</html>

