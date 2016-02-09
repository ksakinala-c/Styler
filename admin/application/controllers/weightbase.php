<?php
class Weightbase extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('weightbase_model');	
	}

 


	function edit()
	{
		//echo "hello";die;
		$allcountry1=$this->weightbase_model->allcountry();
		if($this->input->post('action') == 'edit_weightbase')
			{
				
			foreach($allcountry1 as $country){
				 
					$weightbasedata = array(
							'zero_five' 		         => $this->input->post($country->cid.'zero_five'),
							'six_ten' 		 		     => $this->input->post($country->cid.'six_ten'),
							'eleven_fifteen'   	  		 => $this->input->post($country->cid.'eleven_fifteen'),
							'sixteen_twenty'   	  		 => $this->input->post($country->cid.'sixteen_twenty'),
							'twentyone_twentyfive' 		 => $this->input->post($country->cid.'twentyone_twentyfive'),
						    'twentysix_threethousand'    => $this->input->post($country->cid.'twentysix_threethousand')
						);
						//print_r($weightbasedata);die;
				$response = $this->weightbase_model->edit($country->cid,$weightbasedata);
			}
			$this->session->set_flashdata('msg','Weightbase Updated Succesfully.!!');
			redirect($this->config->item('base_url').'weightbase/edit');
			}
		$data['allcountry']=$this->weightbase_model->allcountry();
		$this->load->view('edit_weightbase',$data);
	}   
	
}
?>