<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class SupplierM extends Base_Model{

		function __construct(){
			parent::__construct();
			$this->table = "supplier";
		}
		
	}

?>