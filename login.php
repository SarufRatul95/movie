<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
    
<head>
	<?php include_once("templates/headers.php");?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  background-color: #9B2E16;
}
</style>

	<div class="header">
		<h2>Movie World</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder= "Please Enter Emeil">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder= "Please Enter Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
		
		</p>
	</form>


</body>

</html>