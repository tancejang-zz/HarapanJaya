<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends Base_Controller{
		public function index(){
			if(!empty($this->input->post('username')) and !empty($this->input->post('password'))){
				$this->loadModel('Auth');
				$user = $this->_Auth->login($this->input->post('username'),$this->input->post('password'));
				if(!$user){

					$this->setNotification("Pemberitahuan","Password Salah","error");
					redirect('login');
				}
				else{
					$this->session->set_userdata('user',$user);
					redirect('home');
				}
			}
			else{
				$this->load->view('admin/login');

			}
			if($this->session->has_userdata('notif')){
				$this->renderPartialView('toast');
			}	
		}
	}
?>