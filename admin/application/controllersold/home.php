<?php
class Home extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
	}
	
	function index()
	{	
		$this->load->model('users_model');
		$this->load->model('admin');
		$data = array();
		$data['L_strErrorMessage']='';
		$this->load->view('home',$data);
	}
	function list_totaluser()
	{
		$this->load->model('admin');
		$data = array();
		$data['L_strErrorMessage']='';
		$this->load->view('home',$data);
	}
	 
	 function list_totalorder()
	{
		$this->load->model('admin');
		$data = array();
		$data['L_strErrorMessage']='';
		$this->load->view('home',$data);
	}
	function list_totalproducts()
	{
		$this->load->model('admin');
		$data = array();
		$data['L_strErrorMessage']='';
		$this->load->view('home',$data);
	}

}