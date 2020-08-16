<?php
require_once('controller/controller.php');

if (isset($_GET['action'])) {
	switch (($_GET['action'])) {
		case 'login':
			include "view/loginview.php";
			break;
		case 'loginform':
			login();
			break;
		case 'register':
			include "view/registerview.php";
			break;
		case 'registerform':
			registering();
			break;
		case 'contactform':
			if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["object"]) && isset ($_POST["contactTexte"])){
				contactMessage($_POST["name"], $_POST["email"], $_POST["object"],$_POST["contactTexte"]);
			}else{ echo "Erreur: tous les champs ne sont pas remplis!";
			}
			break;
		case 'contact':
			include "view/contactview.php";
			break;
		default:
			include "view/loginview.php";
	}
}else {
	include "view/loginview.php";
}
?>
