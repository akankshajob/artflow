<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<style type="text/css">
		body {
			background-color: silver; 
			font-family: Arial, sans-serif;
			font-size: 16px;
		}

		.container {
			max-width: 600px;
			margin: 56px auto;
			background-color: #fff;
			border-radius: 10px;
			padding: 50px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.container .form {
			flex: 1;
			margin-right: 30px;
		}

		.container h2 {
			color: #333;
			font-size: 32px;
			margin-bottom: 40px;
			text-align: center;
		}

		.form label {
			display: block;
			margin-bottom: 10px;
			color: #555;
			font-weight: bold;
		}

		.form input[type=text],
		.form input[type=password] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
		}

		.form button[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}

		.form button[type=submit]:hover {
			background-color: blue;
		}

		.form .error {
			color: red;
			margin-bottom: 10px;
			font-size: 14px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6">
		<div class="form">
			<h2>Login</h2>
			<form action="validation.php" method="post">
                <div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
    </div>
    <div class="form-group">
    
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				<button type="submit">Login</button>
			</form>
			
		</div>
        <div class="col-md-6">
		<div class="form">
			<h2>Register</h2>
			<form action="registration.php" method="post">
            <div class="form-group">
                <label>Username</label>
				<input type="text" name="user" class="form-control" required>
				<div class="form-group">
                    <label>Password</label>
				<input type="password" name="password" class="form-control" required>
				
				<button type="submit">Register</button>
			</form>
			
            </div>
		</div>
	</div>
</body>
</html>
