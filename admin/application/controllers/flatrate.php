<?php
class Flatrate extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('flatrate_model');	
	}

 


	function edit()
	{
		$allcountry1=$this->flatrate_model->allcountry();
		if($this->input->post('action') == 'edit_country')
			{
				
			foreach($allcountry1 as $country){
				$response = $this->flatrate_model->edit($country->cid, $_POST[$country->cid.'flatrate']);
			}
			$this->session->set_flashdata('msg','Flatrate Updated Succesfully.!!');
			redirect($this->config->item('base_url').'flatrate/edit');
			}
		$data['allcountry']=$this->flatrate_model->allcountry();
		$this->load->view('edit_flatrate',$data);
	}   
	
}
?>