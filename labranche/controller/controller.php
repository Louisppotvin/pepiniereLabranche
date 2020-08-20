<?php
require_once("model/model.php");
require_once('model/productModel.php');

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
		else if ($result == "existe"){
			include "view/registerview.php";
			echo '<script type="text/javascript">',
				'userExiste();', 
				'</script>';			
		}
}

function contactMessage($name, $email,  $object, $texte){
	$contact = new Contact();
	$affectedLines = $contact-> sendMessage($name, $email, $object, $texte);
	
		
		if ($affectedLines === true){
			include "view/contactview2.php";	
		}
		else {
			include "view/contactview.php";	
		}
}

function showProduits(){
	$produits = new Produit();
	$result = $produits->getproduits();
	
	if (!isset($_GET['action'])){
	include "view/productview.php";
	}
}
function showProduit(){
	$produit = new Produit();
	$result = $produit->getProduit($_GET['id']);
	
	require "view/descriptionview.php";	
}

function logout(){
	$logins = new Login();
	$logins->logout();
	
	
}


?>