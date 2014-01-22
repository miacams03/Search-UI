<?php

class m_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_user(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->md5(post('password'))),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile_no' => $this->input->post('mobile_no'),
			'college' => $this->input->post('college'),
			'user_type' => $this->input->post('user_type'),
			'userid_no' => $this->input->post('employee_no')
			);
		$this->db->insert('user', $data);
	}
}