<?php
class order extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }
 
		$this->load->model('order_model');
		$this->load->model('product_model');
	}
	
	function reports()
	{
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/order_manage/';
		$config['per_page'] = '15'; 
		$data['username'] = $this->input->post('username');
		$data['groupby'] = $this->input->post('groupby');
		$data['startdate'] = $this->input->post('startdate');
		$data['enddate'] = $this->input->post('enddate');
		$return = $this->order_model->order_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$this->load->view('report',$data);   
	 	
	}
	function download()
	{
	
		//print_r($pla);die;
		$output1 = '';
		$planning1 = $this->order_model->getorder();
		//$planning = $this->planning_model->getplan($id);
		//$output .= 'user-';
		//$output .= ''.$this->session->userdata('username').'';
		//$output .="\n";
		//$output .="\n";
		
 		$output1 .= 'Date, Order Number, User Name, Order Total' ;
		$output1 .="\n";
		// Get Records from the table
		if($planning1 != '' && count($planning1) > 0) {
		foreach($planning1 as $plan) {
			//echo "<pre>";print_r($plan);die;
		 $uname=$this->order_model->getusername($plan->user_info_id);
		$output1 .= '"'.$plan->cdate.'","'.$plan->order_id.'","'.$uname.'","'.$plan->order_total.'" ';  
		$output1 .="\n";
		}
	}
		$filename = "order_report.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		echo $output1;
		exit;
	
	}

	

	
}
?>