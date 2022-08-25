

<?php include 'menu.php';?>

<?php include_once "../controller/Reg_Check_mod2.php" ;?>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body style='background-image: url("Resources/blu.PNG");  background-size: cover; background-repeat: no-repeat;'>
		<div align="center">
		<form action="" method="post" style="width: 700px;" align="center">
			<fieldset style= "background-color: #87ceeb;">
			
				<form method="POST" action="../controller/regCheck.php">
		<table>
			<tr>
				<td> Name</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email">
				</td>
			</tr>
			<tr>
				<td> Username </td>
				<td>
					<input type="text" name="uname">
				</td>
			</tr>
			<tr>

				<tr>
				<td> Gender </td>
				<td>
					<input type="text" name="gender">
				</td>
			</tr>
			<tr>


				<td>Password</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td>
					<input type="password" name="cpassword">
				</td>
		  </tr>
			
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
				<td><a href="login_mod2.php">Login</a></td>
			</tr>
		</table>
	</form>
</fieldset>
</form>



		</body>
</html>