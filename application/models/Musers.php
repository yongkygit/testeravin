<?php
class Musers extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function tampil_data($table){
		$this->db->order_by("ID", "asc");
		return $this->db->get($table);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function kodecustomer($where,$table){	
		$this->db->like($table,$where);
	return $this->db->get('t_users');
	}
	
	function edit_data($where,$table){		
	$this->db->like($where,$table);
	return $this->db->get('t_users');
	}
	

}