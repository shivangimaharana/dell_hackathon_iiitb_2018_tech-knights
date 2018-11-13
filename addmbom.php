<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<?php include('packaging.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add mbom</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add packging attributes to existing mbom</h2>
  </div>
	
  <form action="addmbom.php" method="post">
  	
	
	
	<input type="checkbox" name="silicone_keyboard_guard" value="silicone_keyboard_guard"> silicone keyboard guard<br>
	<input type="checkbox" name="laptop_bag" value="laptop_bag" > laptop bag<br>
	<input type="checkbox" name="charger_provided" value="charger_provided" >charger provided<br>
	<input type="checkbox" name="user_manual" value="user_manual" > user manual<br>
	<input type="checkbox" name="qty" value="qty"> qty<br>
	<!--<input type="checkbox" name="description" value="description" > description<br>-->
	
	
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

