<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Store extends Base_Controller{

		function __construct(){
			parent::__construct();
			$this->objectName = "Toko";
			$this->loadModel('StoreM',true);
		}

	}
?>