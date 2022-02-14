<?php include('functions.php'); ?>

<?php 
if (!isAdmin()) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Create user</title>
	<meta name="viewport" content="width=device-width">
	<style>
		:root {
			--primary-color: #002E5D;
			--secondary-color: #002f5dc7;
		}
        * { 
	        margin: 0px; 
	        padding: 0px; 
            box-sizing: border-box;
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        } 
		.header {
			background: var(--primary-color);
			width: 40%;
			margin: 50px auto 0px;
			color: white;
			text-align: center;
			border: 1px solid var(--primary-color);
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background-color: var(--secondary-color);
			border: none;
			border-radius: 5px;
			cursor: pointer;
			text-decoration: none;
		}
		form, .content {
			width: 40%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		.input-group {
			margin: 10px 0px 10px 0px;
		}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		#user_type {
			height: 40px;
			width: 98%;
			padding: 5px 10px;
			background: white;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.error {
			width: 92%; 
			margin: 0px auto; 
			padding: 10px; 
			border: 1px solid #a94442; 
			color: #a94442; 
			background: #f2dede; 
			border-radius: 5px; 
			text-align: left;
		}
		.success {
			color: #3c763d; 
			background: #dff0d8; 
			border: 1px solid #3c763d;
			margin-bottom: 20px;
		}
		/* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
          .header {
            width: 350px;
          }
          .nav-header {
            width: 350px;
            height: 100px;
          }
		  form, .content {
			width: 84%;
		}
          .column {
            width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {        
          .column {
            width: 100%;
            margin-left: -15px;
          }
        }
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="btn">Create user</button>
			<a href="javascript:history.back()" name="btn" class="btn">Back</a>
		</div>
	</form>
</body>
</html>