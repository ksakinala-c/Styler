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
	function subscriber()
	{
		$this->load->model('admin');
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'home/subscriber/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['email'] = $this->input->post('email');
		$per_page = '1';
		$perpage = '3';
		$return = $this->admin->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('subscriber', $data);
	}
	function deletes()
	{
		$this->load->model('admin');
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->admin->deletes($selCheck)) 
				{
					$this->session->set_flashdata('flashError','Subscriber Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'home/subscriber');
	}
	function download()
	{
	$this->load->model('admin');
		//print_r($pla);die;
		$output = '';
		$planning = $this->admin->getuser();
		//$planning = $this->planning_model->getplan($id);
		//$output .= 'user-';
		//$output .= ''.$this->session->userdata('username').'';
		//$output .="\n";
		//$output .="\n";
		
 		$output .= 'Name, Email';
		$output .="\n";
		// Get Records from the table
		if($planning != '' && count($planning) > 0) {
		foreach($planning as $planning) {
		// print_r($planning);die;
		$output .= '"'.$planning->name.'","'.$planning->email.'" ';  
		$output .="\n";
		}
	}
	$filename = "subscriber_reports.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		echo $output;
		exit;
	}

}