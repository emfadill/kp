<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_user extends CI_Model{
	public function check_auth($user,$password,&$data_user)
	{
		$data = array('username' => $user, 'password' => $password);
		$data_user = $this->db->get_where('m_user',$data)->result_array();
	}
}
?>