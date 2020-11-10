<?php
    $fname="";
    $err_fname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$Cpass="";
	$err_Cpass="";
	$email="";
	$err_email="";
	$contact="";
	$err_contact="";
	$hasError=false;
	if(isset($_POST["register"])){
		if(empty($_POST["fname"])){
			$err_fname="Full name Required";
			$hasError =true;	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if($_POST["pass"]!=$_POST["Cpass"]){
			$err_pass="Password & confirm password have to be same";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(empty($_POST["email"])){
			$err_email="email Required";
			$hasError =true;	
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["contact"])){
			$err_contact="Contact no. Required";
			$hasError =true;	
		}
		else{
			$contact = htmlspecialchars($_POST["contact"]);
		}
		if(!$hasError){
			$users = simplexml_load_file("data.xml");
			
			$user = $users->addChild("user");
			$user->addChild("fullname",$fname);
			$user->addChild("username",$uname);
			$user->addChild("password",$pass);
			$user->addChild("email",$email);
			$user->addChild("contact",$contact);
			$user->addChild("type","user");
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>