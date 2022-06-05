<?php
class Login extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('login_model');
	}
  
  
	public function index(){
		$data['title'] = 'Login - SEO Portal';
		if($this->session->userdata('admin_loggedin') == 1){
			redirect('dashboard');
		}else{
			if($this->input->post('btn_submit') == 1){
				$data_i = $this->input->post();
				$result = $this->login_model->checkLogin($data_i['email'],md5($data_i['password']));
				if($result){
					$this->session->set_userdata('admin_loggedin',1);
					$this->session->set_userdata('admin_userdata',$result[0]);
					redirect('dashboard/');
				}else{
					$this->session->set_flashdata('error','Please check email and password.');
					redirect('login');
				}
			}else{
				$this->load->view('login',$data);
			}
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('admin_loggedin');
		$this->session->unset_userdata('admin_userdata');
		redirect('login/');
	}
}
?>