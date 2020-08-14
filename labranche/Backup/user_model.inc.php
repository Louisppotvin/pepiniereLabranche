<?php
function connexionBD(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=labranche;charset=utf8;port=3308', 'root', '');
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }	
}

class UserModel{
	private $username;

	function UserModel($username){
		return $this->username;
	}
	
	function get_username() {
		return $this->username;
	}

	function set_username($username) {
		$this-> username =$username;
	}
}
?>