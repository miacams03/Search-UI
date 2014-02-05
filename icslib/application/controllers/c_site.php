<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_site extends CI_Controller {
	public function index(){
		$this->search();
	}
	
	public function search(){
		$this->load->view("v_header");
		$this->load->view("v_nav");
		$this->load->view("v_search");
		$this->load->view("v_footer");
	}
	
	public function news(){
		$this->load->model("m_get");
		$data["results"] = $this->m_get->getData("news");
		
		$this->load->view("v_header");
		$this->load->view("v_nav");
		$this->load->view("v_news", $data);
		$this->load->view("v_footer");
	}
	
	public function login(){
		$this->load->view("v_header");
		$this->load->view("v_nav");
		$this->load->view("v_login");
		$this->load->view("v_footer");
	}
	
	public function register(){
		$this->load->view("v_header");
		$this->load->view("v_nav");
		$this->load->view("v_register");
		$this->load->view("v_footer");
	}
	
	public function validate(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("username", "Username", "required|callback_validate_credentials");
		$this->form_validation->set_rules("password", "Password", "required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view("v_header");
			$this->load->view("v_nav");
			$this->load->view("v_login");
			$this->load->view("v_footer");
		}
		else{
			$data = array(
				"username" => $this->input->post("username"),
				"is_logged_in" => 1
			);
			
			$this->session->set_userdata($data);
			redirect("c_site/user");
		}
	}
	
	public function user(){
		if($this->session->userdata("is_logged_in")){
			$this->load->view("v_header");
			$this->load->view("v_notif");
			$this->load->view("v_user_nav");
			$this->load->view("v_user_home");
			$this->load->view("v_footer");
		}
		else{
			redirect("c_site/login");
		}
	}
	
	public function user_search(){
		$this->load->view("v_header");
		$this->load->view("v_notif");
		$this->load->view("v_user_nav");
		$this->load->view("v_user_search");
		$this->load->view("v_footer");
	}
	
	public function validate_credentials(){
		$this->load->model('m_users');
		
		if($this->m_users->can_log_in()){
			return true;
		}
		else{
			$this->form_validation->set_message("validate_credentials", "Incorrect username/password");
			return false;
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("c_site/login");
	}
	
	/*public function notification(){
		$this->getNotif();
	}
	
	public function getNotif(){
		$this->load->model("m_notif");
		
		$data["results"] = $this->m_notif->getNotifs();
		$this->load->view("v_header");
		$this->load->view("v_user_nav");
		$this->load->view("v_notification", $data);
		$this->load->view("v_footer");
	}*/
	
	public function reserve(){
		$this->user();
	}
	
	public function notif(){
		$this->load->view("v_notif");
	}
}