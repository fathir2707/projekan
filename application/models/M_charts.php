<?php
class M_charts extends CI_Model {
	function __construct(){
		$this->load->database();
	}
 
	function graph(){
		$data = $this->db->query("SELECT * from account");
		return $data->result();
	}
 
}
?>