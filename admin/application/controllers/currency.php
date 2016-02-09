<?php
	class Currency extends CI_Controller {	
		private $_data = array();	function __construct()	{		
		parent::__construct();		
		if($this->session->userdata('adminId') == ''){			
			redirect($this->config->item('base_url'));        
			}		
			$this->load->model('currency_model');	
		}
 
    
	   function insider()
	{	 
			 $data['result'] = $this->currency_model->get_wallet();  
				
				if($this->input->post('action')  == 'edit_insider') 
				{
						$data = $this->input->post();
							
						$this->currency_model->edit_insider($data);
						$this->session->set_flashdata('msg','Insider Data Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'currency/insider');
					
				}
				
				
				$this->load->view('edit_currency_converter',$data);
		
			 
	}

 
  
}
?>