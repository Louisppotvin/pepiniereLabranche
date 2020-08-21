<?php
	class UserController{
		
		function UserControllers()
		{
			
		}
		
		function register ($username, $password)
		{
			
		}
		
		function login ($username, $password)
		{
			if($this->authenticate($username, $password)) {
				session_start();
				$user = new UserModel($username);
				$_session['user'] = $user;
				return true;
			} else {
				return false;
			
			}
		}
		
		static function authenticate ($user, $pass) {
			$authentic =false;
			if($user == "test" && $pass == "1234") $authentic = true;
			return $authentic;
		}
		
		function logout()
		{
			session_start();
			session_destroy();
		}
	}
	

?>