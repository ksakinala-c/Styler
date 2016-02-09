<?php
	class Wallet extends CI_Controller {	
		private $_data = array();	function __construct()	{		
		parent::__construct();		
		if($this->session->userdata('adminId') == ''){			
			redirect($this->config->item('base_url'));        
			}		
			$this->load->model('wallet_model');	
		}
 
    function edit($id)
	{	 
			if(is_numeric($id))
			{ 
				 $result = $this->wallet_model->get_wallet($id);  
				
				$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'one_rs_reward' =>  $result[0]->one_rs_reward,
						'giftwarpamt' =>  $result[0]->giftwarpamt,
						'minimumorder' =>  $result[0]->minimumorder,
						'shipping_cost' =>  $result[0]->shipping_cost,
						'minium_shipping_amount' =>  $result[0]->minium_shipping_amount,
						'cashondelivery' =>  $result[0]->cashondelivery,
						'codextra' =>  $result[0]->codextra,
						);  
				if($this->input->post('action')  == 'edit_wallet') 
				{
					foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
					$this->load->library('validation');
					$rules['one_rs_reward'] = "trim|required";
					$rules['giftwarpamt'] = "trim|required";

					$this->validation->set_rules($rules);
					$fields['one_rs_reward']   = "one_rs_reward";
					$fields['giftwarpamt'] = "giftwarpamt";

					
					$this->validation->set_fields($fields);
					if ($this->validation->run() == FALSE) 
					{
							$data = $form_field;
							$data['L_strErrorMessage'] = $this->validation->error_string;
							$data['id'] = $id;
					} 
					else 
					{
							$this->wallet_model->edit($id, $form_field);
							$this->session->set_flashdata('L_strErrorMessage','Wallet Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'wallet/edit/1');
					}
				}
				
				
				$data['walletattr'] = $this->wallet_model->walletattr($id); 
						
				$this->load->view('edit_wallet',$data);
			} 
			else 
			{
				$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
				redirect($this->config->item('base_url').'wallet/lists');
			}
	}
	

 
  
}
?>