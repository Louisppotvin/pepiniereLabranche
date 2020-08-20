<?php
	require_once("model/model.php");
	
	class Controller{
		
		public $logins;
		
		public function __construct()
		{
			$this->logins = new Login();			
		}
		
		public function invoke()
		{
				$result = $this->logins->getlogin();
				
				if ($result == "login"){
					include "view/afterlogin.php";	
				}
				else {
					include "view/loginview.php";	
				}
			
		}
		
	}

?>