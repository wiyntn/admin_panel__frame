<?php
class Users extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}
  
  
	public function all(){
		$data['title'] = 'All Users';
		$data['result'] = $this->user_model->getallusers();
		$this->load->template('allusers',$data);
	}
	
	
}
?>