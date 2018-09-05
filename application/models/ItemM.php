<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class ItemM extends Base_Model{

		function __construct(){
			parent::__construct();
			$this->table = "items";
		}
		
		function getAllItemStock(){
			$sql = "select i.name as item,IFNULL(s.supply,0) as supply,IFNULL(st.name,0) as store from items i left join item_store_supply s on i.id = s.item_id left join store st on st.id = s.store_id";
			return $this->db->query($sql)->result;
		}
	}

?>