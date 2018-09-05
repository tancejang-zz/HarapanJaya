<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Item extends Base_Controller{

		function __construct(){
			parent::__construct();
			$this->objectName = "Barang";
			$this->loadModel('ItemM',true);
		}

	}
?>