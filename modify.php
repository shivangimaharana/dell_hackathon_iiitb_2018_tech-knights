<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<?php include('Update.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Modify MBOM</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>modify existing mbom</h2>
  </div>
	
  <form action="modify.php" method="post">
  	<?php include('errors.php'); ?>
	
	<div class="input-group">
  	  <label>Enter Attribute name</label>
  	  <input type="text" name="aid" value="<?php echo $aid; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>Serial_no</label>
  	  <input type="text" name="Serial_no" value="<?php echo $Serial_no; ?>">
  	</div>
	<div class="input-group">
  	  <label>Enter attribute value</label>
  	  <input type="text" name="atid" value="<?php echo $atid; ?>">
  	</div>
	<div>
  	<button type="submit" class="btn btn-danger" name="reg_user">Submit</button>
	<button type="button"   class="btn btn-success" onclick="location.href = 'Choice.php'">back</button><br><br>
	<button type="button"   class="btn btn-warning" onclick="location.href = 'view_mbom.html'">View MBOM </button><br><br>
	</div>
	
  </form>
</body>

</html>


