<?php 
class Services_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function add_update($data, $id = ""){
		if($id == ''){
			$this->db->insert('services',$data);
		}else{
			$this->db->where('service_id',$id);
			$this->db->update('services',$data);
		}
		return;
	}
	
	public function getData($id = ''){
		$this->db->select('*');
		$this->db->from('services');
		if($id != ''){
			$this->db->where('service_id',$id);
		}
		return $this->db->get()->result_array();
	}
	
	public function delete($id){
		$this->db->where('service_id',$id);
		$this->db->delete('services');
		return;
	}
	
	
}
?>