<?php
class Charts extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_charts');
	}
 
	function index(){
		$data['graph'] = $this->m_charts->graph();
		$this->load->view('admin/v_charts', $data);
	}
 
}
?>