<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
    $this->load->model('m_data');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
    $data['instansi'] = $this->m_data->read()->result();
		$this->load->view('v_admin', $data);
	}
}