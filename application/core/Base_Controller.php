<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Base_Controller extends CI_Controller{
		protected $data;
		public $tempData;
		public $objectName = 'Unknown Object';
		function __construct(){
			parent::__construct();
			$this->checkCredential();
		}

		public function index(){
			$this->data['records'] = $this->model->fetch();
			$this->renderAdminView($this->uri->segments[1].'/list',$this->data);
		}

		function setData($data){
			$this->data = $data;
		} 

		function setNotification($title="",$message="",$type="info"){
			$this->session->set_userdata('notif',array(
				'message' => $message,
				'title' => $title,
				'type' => $type,
				'duration' => 2000
			));
		}

		function renderPartialView($view){
			$this->load->view('partials/'.$view,$this->data);
			$this->clearData();
		}

		function renderAdminView($adminView,$data=null){
			$this->data['view'] = 'admin/'.$adminView;
			if($data !== null){
				$this->data['data'] = $data;
			}
			$this->load->view('admin/wrapper',$this->data);
			if($this->session->has_userdata('notif')){
				$this->renderPartialView('toast');
			}
			$this->clearData();
		}

		function clearData(){
			$this->data = array();
		}

		function loadModel($models,$primaryModel=false){
			if($primaryModel){
				$this->load->model($models,'model');
			}
			else{
				foreach(explode(',',$models) as $model){
					$this->load->model($model,'_'.$model);
				}	
			}
		}

		function checkCredential(){
			
			if($this->router->fetch_class() != "login" and $this->session->has_userdata('user') == false){
				
				
				redirect('login');
			}
			else{
				if($this->router->fetch_class() != "login" and $this->session->userdata('user')->role === "pegawai"){
					$this->setNotification('Gagal Login','Tidak ada hak akses','error');
					redirect('login');
				}
			}
		}

		function insert(){
			$item = $this->model->insert($this->input->post());
			if(isset($item->code)){
				$uniqueId = $item->code;
			}
			else{
				$uniqueId = $item->id;
			}
			$this->tempData = $item;
			$this->setNotification('Sukses Tambah '.$this->objectName,$this->objectName.' dengan Kode #'.$uniqueId.' berhasil ditambah','success');
			redirect($this->uri->segments[1]);
		}

		function update($id){
			$item = $this->model->update($id,$this->input->post());
			if(isset($item->code)){
				$uniqueId = $item->code;
			}
			else{
				$uniqueId = $item->id;
			}
			$this->tempData = $item;
			$this->setNotification('Sukses Update '.$this->objectName,$this->objectName.' dengan Kode #'.$uniqueId.' berhasil diupdate','success');
			redirect($this->uri->segments[1]);
		}

		function delete($id){
			$item = $this->model->delete($id);
			if(isset($item->code)){
				$uniqueId = $item->code;
			}
			else{
				$uniqueId = $item->id;
			}
			$this->setNotification('Sukses Hapus '.$this->objectName,$this->objectName.' dengan Kode #'.$uniqueId.' berhasil dihapus','success');
			redirect($this->uri->segments[1]);
		}


		//show form

		public function add(){
			$this->data['page_title'] = 'Tambah '.$this->objectName;
			$this->data['type'] = "insert";
			$this->renderAdminView($this->uri->segments[1].'/form',$this->data);
		}

		public function edit($id){
			$this->data['page_title'] = 'Edit '.$this->objectName;
			$this->data['type'] = "edit";
			$this->data['record'] = $this->model->findById($id);
			$this->renderAdminView($this->uri->segments[1].'/form',$this->data);
		}
	}
?>