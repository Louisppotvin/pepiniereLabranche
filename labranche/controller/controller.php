<?php
require_once("model/model.php");

function login()
{
		$logins = new Login();
		$result = $logins->getlogin();
		
		if ($result == "login"){
			include "view/main.php";	
		}
		else {
			include "view/loginview.php";	
		}
}

function registering(){
	$logins = new Login();
	$result = $logins->register();
		
		if ($result == "login"){
			include "loginview.php";	
		}
		else {
			include "view/registerview.php";	
		}
}

?>