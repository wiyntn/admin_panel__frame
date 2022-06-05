<?php
class Services extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('services_model');
	}
  
  
	public function viewall(){
		$data['title'] = 'All Services';
		$data['result'] = $this->services_model->getData();
		$this->load->template('services/list',$data);
	}
	
	public function add($id = ''){
		$data['title'] = 'Add Service';
		if($this->input->post('btn_submit') == 1){
			$data_i = $this->input->post();
			unset($data_i['btn_submit']);
			$this->services_model->add_update($data_i, $id);
			if($id == ''){
				$this->session->set_flashdata('success','Service Added Successfully.');
			}else{
				$this->session->set_flashdata('success','Service Updated Successfully.');
			}
			redirect('services/viewall');
		}
		if($id != ''){
			$data['title'] = 'Edit Service';
			$result = $this->services_model->getData($id)[0];
			$data['service_id'] = $result['service_id'];
			$data['type_of_service'] = $result['type_of_service'];
			$data['updated_at'] = $result['updated_at'];
		}
		$this->load->template('services/add',$data);
	}
	
	public function delete($id){
		$this->services_model->delete($id);
		$this->session->set_flashdata('success','Service Deleted Successfully.');
		redirect('services/viewall');
	}
	
	
}
?>