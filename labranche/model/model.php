<?php
require_once('model/productModel.php');
require_once("model/model.php");


function connexionBD(){
    try
    {
        $bdd = mysqli_connect("localhost","root","","labranche","3308");
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }	
}

class Contact {
	
	public function sendMessage($name, $email, $object, $texte)
	{
			$db = new PDO('mysql:host=localhost;dbname=labranche;port=3308;charset=utf8', 'root', '');
			
			$requete= $db->prepare('INSERT INTO contact(nom, courriel, objetmessage, message) VALUES(?, ?, ?, ?)');
			$affectedLines = $requete->execute(array($name, $email, $object, $texte));

        return $affectedLines;
		
			
	}
	
}

class Login {
	
	public function getlogin()
	{
		if(isset($_POST["username"]) && isset($_POST["password"])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			//Protection from injection
			$username = stripcslashes($username);
			$password = stripcslashes($password);

			$conn = mysqli_connect("localhost","root","","labranche","3308");
			$res= mysqli_query($conn,"SELECT username, password FROM usager WHERE username = '".$username."' AND  password = '".$password."'");
			$count  = mysqli_num_rows($res);
				if($count > 0 )
				{ 
					session_start();
					$_SESSION["user"] = $username;
					return "login";
				}else{
					return "Utilisateur invalide";
					}
		}
	}
	
	public function register()
	{
		if(isset($_POST["username"]) && isset($_POST["regpassword"])){
			
			$username = $_POST['username'];
			$password = $_POST['regpassword'];
			
			//Protection from injection
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			
			$conn = connexionBD();
			$res= mysqli_query($conn,"SELECT username FROM usager WHERE username = '".$username."'");
			$count  = mysqli_num_rows($res);
			if($count > 0 )
			{ 
				return "Nom d'utilisateur existe déjà";
				
			}else{

				$query = "INSERT INTO usager (username, password) VALUES('$username', '$password')";
				$res= mysqli_query($conn,$query);
				return "Registered";
				}
			}
	}
	
	public function logout() {
		session_start();
		session_destroy();
	}
}

?>