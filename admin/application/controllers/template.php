<?php
class Template extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('template_model');	
	}
 

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->template_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'regemail' => $result[0]->regemail,
						'ordermail' => $result[0]->ordermail,
						'canemail' => $result[0]->canemail,
						'affreg' => $result[0]->affreg,
						'insreg' => $result[0]->insreg,
						'subscriber' => $result[0]->subscriber,
						'order_status' => $result[0]->order_status,
						'abandoned_cart' => $result[0]->abandoned_cart,
						'save_style' => $result[0]->save_style,
						
						
						'regemailsub'	=> $result[0]->regemailsub,
						'ordermailsub' => $result[0]->ordermailsub,
						'canemailsub' => $result[0]->canemailsub,
						'affregsub' => $result[0]->affregsub,
						'insregsub' => $result[0]->insregsub,
						'subscribersub' => $result[0]->subscribersub,
						'order_statussub' => $result[0]->order_statussub,
						'abandoned_cartsub' => $result[0]->abandoned_cartsub,
						'save_stylesub' => $result[0]->save_stylesub,
						
						'ship_order_status' => $result[0]->ship_order_status,
						'shipmen_sub' => $result[0]->shipmen_sub,
					 
						
					);

			if($this->input->post('action') == 'edit_template') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['regemail']       = "trim|required";
				//$rules['colourcode']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['regemail']       = "Register Email";
				//$fields['colourcode']       = "Colour Code";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) 
				{
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
					$ccid=$id;
					 
								if($response = $this->template_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('msg','Email Template Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'template/edit/'.$id);
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 
				}
			}
			
			$this->load->view('etemplate.php',$data);
			} else {
			 
			redirect($this->config->item('base_url').'template/edit/'.$id);
		}
	}

}
