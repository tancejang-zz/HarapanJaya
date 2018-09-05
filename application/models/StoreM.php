<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class StoreM extends Base_Model{

		function __construct(){
			parent::__construct();
			$this->table = "store";
		}
		
	}

?>