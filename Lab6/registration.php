<?php include_once "validation/validationRegistration.php" ;?>
<html>
	<head></head>
	<body>
		<fieldset align="center">
		<h1>Welcome to Registration.</h1>
			<form action="" method="post">
				<table align="center">
				    <tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fname?>" name="fname"></td>
						<td><?php echo $err_fname;?></span>
						</td>
					</tr>
					<tr>
						<td>User name:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" value="<?php echo $Cpass?>" name="Cpass"></td>
						<td><?php echo $err_Cpass;?></span>
						</td>
					</tr>
					<tr>
						<td>
							Gender:
						</td>
						<td>
							<input type="radio" name="gender"> Male
							<input type="radio" name="gender"> Female
						</td>
					</tr>
					<tr>
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><?php echo $err_email;?></span>
						</td>
					</tr>
					<tr>
						<td>Contact No.:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><?php echo $err_contact;?></span>
						</td>
					</tr>
					<tr>
						<td>
							City:
						</td>
						<td>
							<select name = "city">
								<option> Dhaka </option>
								<option> Khulna </option>
								<option> Sylhet </option>
							</select>
						</td>
					</tr>
						<td colspan="2" align="center">
							<input type="submit" name="register" value="OK">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>