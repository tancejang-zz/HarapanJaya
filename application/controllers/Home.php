<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends Base_Controller{
		public function index(){
			$this->renderAdminView('home');
		}
		public function logout(){
			$this->session->unset_userdata('user');
			redirect(base_url());
		}
	}
?>