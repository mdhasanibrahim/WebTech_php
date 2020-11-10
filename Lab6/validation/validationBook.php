<?php
    $bname="";
    $err_bname="";
	$description="";
	$err_description="";
	$publisher="";
	$err_publisher="";
	$edition="";
	$err_edition="";
	$isbn="";
	$err_isbn="";
	$pages="";
	$err_pages="";
	$price="";
	$err_price="";
	$hasError=false;
	if(isset($_POST["register"])){
		if(empty($_POST["bname"])){
			$err_bname="Book name Required";
			$hasError =true;	
		}
		else{
			$bname = htmlspecialchars($_POST["bname"]);
		}
		if(empty($_POST["description"])){
			$err_description="description Required";
			$hasError =true;	
		}
		else{
			$description = htmlspecialchars($_POST["description"]);
		}
		if(empty($_POST["publisher"])){
			$err_publisher="publisher Required";
			$hasError =true;	
		}
		else{
			$publisher = htmlspecialchars($_POST["publisher"]);
		}
		if(empty($_POST["edition"])){
			$err_edition="edition Required";
			$hasError =true;	
		}
		else{
			$edition = htmlspecialchars($_POST["edition"]);
		}
		if(empty($_POST["isbn"])){
			$err_isbn="isbn Required";
			$hasError =true;	
		}
		else{
			$isbn = htmlspecialchars($_POST["isbn"]);
		}
		if(empty($_POST["pages"])){
			$err_pages="isbn Required";
			$hasError =true;	
		}
		else{
			$pages = htmlspecialchars($_POST["pages"]);
		}
		if(empty($_POST["price"])){
			$err_price="isbn Required";
			$hasError =true;	
		}
		else{
			$price = htmlspecialchars($_POST["price"]);
		}
		if(!$hasError){
			$books = simplexml_load_file("book.xml");
			
			$books = $books->addChild("books");
			$books->addChild("bname",$bname);
			$books->addChild("description",$description);
			$books->addChild("publisher",$publisher);
			$books->addChild("edition",$edition);
			$books->addChild("isbn",$isbn);
			$books->addChild("pages",$pages);
			$books->addChild("price",$price);
			$books->addChild("books","books");
			echo "<pre>";
			print_r($books);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			$file = fopen("book.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>