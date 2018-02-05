<?php


class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->view('footer');
		$this->load->view('header');

	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function aksi_login()
	{
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->m_user->check_auth($username, $password,$data_user);
		if(!empty($data_user)) {
			if($data_user[0]['role']=="kalab"){
				redirect('dashboard_kalab');
			} 
			else if ($data_user[0]['role']=="mhs") {
				redirect('dashboard_mhs');
			}
			 
			else if ($data_user[0]['role']=="dosen") {
				redirect('dashboard_dosen');
			}
			else {
			echo "login salah";
			}	
	}
}
}