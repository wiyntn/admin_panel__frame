<?php 
class Login_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
	}
	
		
	public function checkLogin($email,$password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get()->result_array();
	}
	
	
}
?>