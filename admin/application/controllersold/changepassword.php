<?php
class changepassword extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
 
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('change_password_model');
		$this->load->model('country_model');
		$this->load->model('state_model');
		$this->load->model('city_model');
		
	}

	function lists()
	{
       	
       	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'chnagepassword/lists/';
		/*$config['per_page'] = '15';
		$content['cname'] = $this->input->post('cname');
		$content['email'] = $this->input->post('email');
		$content['cid'] = $this->input->post('cid');
		$content['sid']= $this->input->post('sid');
		$content['city_id']=$this->input->post('city_id');
		$return = $this->employee_model->lists($config['per_page'],$this->uri->segment(3),$content);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);	
		$data['country_list'] = $this->employee_model->allcountry();
		$data['state_list'] = $this->employee_model->allstate();
		$data['city_list'] = $this->employee_model->allcity(); */
		$this->load->view('chnagepassword', $data);

		
	}
	
	
} 

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */