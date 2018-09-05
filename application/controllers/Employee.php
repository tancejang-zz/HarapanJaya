<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Employee extends Base_Controller{

		function __construct(){
			parent::__construct();
			$this->objectName = "Pegawai";
			$this->loadModel('User',true);
		}

		function insert(){
			unset($_POST['cpassword']);
			$_POST['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT);
			parent::insert();
		}

	}
?>