<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Supply extends Base_Controller{

		function __construct(){
			parent::__construct();
			$this->objectName = "Stok";
			$this->loadModel('ItemM',true);
		}

		function index(){
			$this->model->getAllItemStock();
		}

	}
?>