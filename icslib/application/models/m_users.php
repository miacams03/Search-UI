<?php
	
	class M_users extends CI_Model{
		public function can_log_in(){
			$this->db->where("username", $this->input->post("username"));
			$this->db->where("password", $this->input->post("password"));
			$query = $this->db->get("user");
			
			if($query->num_rows() == 1){
				return true;
			}
			else{
				return false;
			}
		}
	}
?>