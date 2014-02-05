<?php 

class c_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}
	public function index()
	{
		/*if(($this->session->userdata('username')!=""))	//user is logged in
		{
			$this->welcome();
		}
		else*/
		//{
			$data['title'] = 'Home';
			$this->load->view('v_header', $data);
			$this->load->view('v_success', $data);
			$this->load->view('v_footer', $data);
		//}
		
	}

	public function welcome()
	{
		$data['title']='Welcome';
		$data['title'] = 'Home';
		$this->load->view('v_header',$data);
		$this->load->view('v_registration.php',$data);
		$this->load->view('v_footer',$data);
	}

	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
/*
		$this->form_validation->set_rules('username','username_help','required');
		$this->form_validation->set_rules('password','password_help','required');
		$this->form_validation->set_rules('con_password','con_password_help','required|matches[password]');
		$this->form_validation->set_rules('name','name_help','required');
		$this->form_validation->set_rules('email','email_help','required|valid_email');
		$this->form_validation->set_rules('mobile_no','mobile_help','required');
		$this->form_validation->set_rules('college','college_help','required');
		$this->form_validation->set_rules('user_student','student_help','required');
		$this->form_validation->set_rules('user_employee','employee_help','required');
		$this->form_validation->set_rules('employee_no','employeeno_help','required');
		$this->form_validation->set_rules('student_year','studentyear_help','required');
		$this->form_validation->set_rules('student_no','studentno_help','required');
*/
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('v_header',$data);
			$this->load->view('v_registration');
			$this->load->view('v_footer',$data);

		}
		else
		{
			$this->m_user->add_user();
			$this->load->view('v_success');
		}
	}

	public function success()
	{
		$data['title'] = 'Registration successful.';
		$this->load->view('v_header',$data);
		$this->load->view('v_success.php',$data);
		$this->load->view('v_footer',$data);
	}
	

}
