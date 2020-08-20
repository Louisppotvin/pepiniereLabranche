<?php
require_once("model/model.php");

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

function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM `usager`');

    return $req;
}

class Login {
	
	public function getlogin()
	{
		if(isset($_REQUEST["username"])&& isset($_REQUEST["password"]))
			{
			
			if($_REQUEST["username"] == "test" && $_REQUEST["password"]== "1234" ){
					return "login";
			}
			else{
					return "invalid user";
			}
			
		}
		
		
	}
}


?>