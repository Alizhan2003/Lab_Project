<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="register.css">
     <link rel="icon" href="https://code-live.ru/static/img/logo.svg?v2" type="image/x-icon">
</head>
<body bgcolor="#000" >
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php" >
	<div class="input-group">
		<label for="username">Username</label>
		<input type="text" name="username" value="" required="required">
	</div>
	<div class="input-group">
		<label for="email">Email</label>
		<input type="email" name="email" value="" required="required">
	</div>
	<div class="input-group">
		<label for="password_1">Password</label>
		<input type="password" name="password_1" required="required">
	</div>
	<div class="input-group">
		<label for="password_2">Confirm password</label>
		<input type="password" name="password_2" required="required">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn"><a href="index.php">Register</button>
	</div>
	<p>
		Already a member? <a href="Registration form.html">Sign in</a>
	</p>
</form>
</body>
</html>