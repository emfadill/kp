<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_dosen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->view('footer');
		$this->load->view('header');

	}
	public function index()
	{
		$this->load->view('dashboard_dosen');
	}
}
