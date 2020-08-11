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
		if(isset($_POST["username"]) && isset($_POST["password"]))
			{
			$username = $_POST['username'];
			$password = $_POST['password'];

			//Protection from injection
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			


			$db= connexionBD();
			$conn = mysqli_connect("localhost","root","","labranche","3308");
			$res= mysqli_query($conn,"SELECT username, password FROM usager WHERE username = '".$username."' AND  password = '".$password."'");
			$count  = mysqli_num_rows($res);
			if($count > 0 )
			{ 
				return "login";
			}else{
				return "invalid user";
				}
			}
	}
}

?>