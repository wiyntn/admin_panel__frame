<?php 
class User_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
	}
	
		
	public function getallusers(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('type !=','admin');
		return $this->db->get()->result_array();
	}
	
	
}
?>