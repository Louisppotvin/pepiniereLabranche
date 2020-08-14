<?php
require_once('controller/controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'loginform') {
		login();
    } elseif ($_GET['action'] == 'register') {
        include "view/registerview.php";
	} elseif ($_GET['action'] == 'registerform') {
	   registering();
	}	
}else {
	include "view/loginview.php";
}


?>
