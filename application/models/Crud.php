<?php

class Crud extends CI_Model{

	public function read($table, $from_limit = null, $to_limit = null, $order = null){
		if($from_limit == null){
			return $this->db->get($table);
		}else{
			return $this->db->get($table, $from_limit, $to_limit);
		}
	}

	public function read_where($table, $cond, $order = NULL, $limit = NULL, $offset = NULL){
		if(is_array($order)){
			$array_key = array_keys($order_by);
			$this->db->order_by($array_key[0], $order['by']);
		}
		return $this->db->get_where($table, $cond, $limit, $offset);
	}

	public function query($query){
		return $this->db->query($query);
	}

	public function update($table, $data, $cond = null){
		if($cond == null)
			return $this->db->update($table, $data);
		else
			return $this->db->update($table, $data, $cond);
	}

	public function delete($table, $data){
		return $this->db->delete($table, $data);
	}

	public function insert($table, $data){
		$query = $this->db->insert($table,$data);
		if($query)
			return $this->db->insert_id();
	}

	public function match($table, $field, $match){
		if($this->db->table_exists($table)){
			$this->db->like($field, $match);
			return $this->db->get($table);
		}
	}




}

?>
