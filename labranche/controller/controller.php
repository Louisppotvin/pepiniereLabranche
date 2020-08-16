<?php
require_once("model/model.php");

function login()
{
		$logins = new Login();
		$result = $logins->getlogin();
		
		if ($result == "login"){
			include "view/contactview.php";	
		}
		else {
			include "view/loginview.php";	
		}
}

function registering(){
	$logins = new Login();
	$result = $logins->register();
		
		if ($result == "Registered"){
			include "view/loginview.php" ;	
		}
		else {
			include "view/registerview.php";	
		}
}

function contactMessage($name, $email,  $object, $texte){
	$contact = new Contact();
	$affectedLines = $contact-> sendMessage($name, $email, $object, $texte);
		
		if ($affectedLines === true){
			require ("view/contactview2.php");	
		}
		else {
			include "view/contactview.php";	
		}
}

?>