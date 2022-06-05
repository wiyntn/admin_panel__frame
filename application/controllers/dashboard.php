<?php
class Dashboard extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
  
  
	public function index(){
		$data['title'] = 'My Dashboard';
		$this->load->template('dashboard',$data);
	}
	
	
}
?>