<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Supplier extends Base_Controller{

		function __construct(){
			parent::__construct();
			$this->objectName = "Supplier";
			$this->loadModel('supplierM',true);
		}

	}
?>