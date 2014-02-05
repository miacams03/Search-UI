<?php
	class M_notif extends CI_Model{
		function getNotifs(){
			//$userid_no = $this->db->userid_no;
			$query = $this->db->query("SELECT notification FROM user where userid_no=200867242");
			return $query->result();
		}
	}
?>