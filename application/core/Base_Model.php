<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Base_Model extends CI_Model{
		
		protected $table;

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function fetch($filter=array(),$sort="",$filterType="where",$select=""){
			if($filterType == "where"){
				$this->db->where($filter);
			}
			else if($filterType == "whereIn"){
				$this->db->whereIn($filter);
			}
			else if($filterType == "like"){
				$this->db->like($filter);
			}
			if($select !== ""){
				foreach(explode(',',$select) as $field){
					$this->db->select($field);
				}
			}
			return $this->db->get($this->table)->result();
		}

		function findById($id){
			return $this->db->get_where($this->table,array('id' => $id))->result()[0];
		}

		function insert($data){
			$data = $this->genDefaultRow($data);
			$this->db->insert($this->table,$data);
			$maxId = $this->getMaxId();
			$this->db->reset_query();
			$this->db->where(array('id' => $maxId));
			$insertedData = $this->db->get($this->table)->result()[0];
			return $insertedData;
		}

		function update($id,$data){
			$data['modified_at'] = date("Y-m-d H:i:s");
			$data['id'] = $id;
			$this->db->where('id',$id);
			$this->db->update($this->table,$data);
			return json_decode(json_encode($data));
		}
		function delete($id){
			$data = $this->db->get_where($this->table,array('id'=>$id))->result()[0];
			$this->db->reset_query();
			$this->db->delete($this->table,array('id'=>$id));
			return $data;
		}

		function getMaxId(){
			$this->db->reset_query();
			$this->db->select_max('id');
			return $this->db->get($this->table)->result()[0]->id;
		}
		function loadModel($models){
			foreach(explode(',',$models) as $model){
				$this->load->model($model,'_'.$model);
			}
		}

		function genDefaultRow($array){
			$now = date("Y-m-d H:i:s");
			return array_merge($array,array(
				'created_at' => $now,
				'is_active' => 1
			));
		}


	}
?>