<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" 
       href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     <link rel="stylesheet"  href="C:\Users\COMP\Desktop\web_dev\templates\style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	#my-container{
		max-width: 600px;
		height: 600px;
		box-shadow: 1px 1px 6px 2px #ccc;
		padding:20px;
		margin: auto;
	}
</style>

</head>
<body>
	<div id="my-container">
		<?php
		if(isset($_GET['message'])){
		$message = $_GET['message'];
		?>
		<div class="alert alert-danger">
			<?php echo $message;?>

		</div>
		<?php
	}
		?>
	
		<form action="verify.php" method="post">
			
			<div class="form-group">
				<label for="email">email</label>
				<input type="email" class="form-control"name="email" id="email" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<!-- <textarea class="form-control" name="address" id="address" placeholder="Enter your address"></textarea> -->
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
			</div>
			<!-- <div class="form-group">
				<label for="branch">Branch</label>
				<select name="branch" class="form-control">
					<option>Select your branch</option>
					<option>CSE</option>
					<option>ISE</option>
					<option>ECE</option>
					<option>EEE</option>
					<option>ME</option>
				</select>
				
			</div> -->
			<input type="submit" name="submit" class="btn btn-primary" value="Register">
		</form>
	</div>

</body>
</html>