<?php

	$gender="";
	$err_gender="";
	$checkvalue="";
	$err_checkvalue="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["checkvalue"])){
			$err_checkvalue = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$checkvalue=$_POST["checkvalue"];
		}
		
		if(!$has_error){
			echo $name;
		}
	}
	
?>
<html>
	<head>
		<title>Club Member Registation Form</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registation</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="right">
							Phone:
						</td>
						<td>
							<input type="text" size="5" placeholder="Code"> - <input type="text" size="7" placeholder="Number">
						</td>
					</tr>
					<tr>
						<td align="right">
							Address:
						</td>
						<td>
							<input type="text" name="address" placeholder="Street Address">
						</td>
					</tr>
					<tr><td></td>
						<td>	
						   <input type="text" name="city" size="7" placeholder="City"> - <input type="text" name="state" size="5" placeholder="State">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" name="zipCode" placeholder="Postal/Zip Code">
						</td>
					</tr>
					<tr>
                                        <td align="right">Birth Date:</td>
                                        <td>
                                            <select name="dobDay">
                                                <?php
                                                    echo "<option disabled selected>Day</option>";
                                                    for($i=1; $i<32; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobMonth">
                                                <?php
                                                    $months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                                    echo "<option disabled selected>Month</option>";
                                                    for($i=0; $i<12; $i++){
                                                        echo "<option>".$months[$i]."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobYear">
                                                <?php
                                                    echo "<option disabled selected>Year</option>";
                                                    for($i=1997; $i<2021; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
				</tr>
					<tr>
						<td align="right">Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear<br> about us?  <?php echo $err_checkvalue;?></td>
						<td>
							<input type="checkbox" name="checkvalue[]" value="A Friend or Colleague"> A Friend or Colleague<br>
							<input type="checkbox" name="checkvalue[]" value="Google"> Google <br>
							<input type="checkbox" name="checkvalue[]" value="Blog Post"> Blog Post<br>
							<input type="checkbox" name="checkvalue[]" value="News Article"> News Article <br>
						</td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="io" ></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>