<?php
class Popup extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('popup_model');	
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		//echo $id;die;
		if(is_numeric($id)) {
		$result = $this->popup_model->get($id);
			//print_r($result);die;
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'image' => $result[0]->image,
						'text' => $result[0]->text,
						'footertext' => $result[0]->footertext,
						'active' => $result[0]->active,
						'display' => $result[0]->display
					);
				//print_r($form_field);die;
			if($this->input->post('action') == 'edit_popup') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				 
					
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload');
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload').$logoname; 
				
							$height=800;
							$width=800;
				
							$this->load->library('image_lib');

							// CONFIGURE IMAGE LIBRARY
							$config['image_library']    = 'gd2';
							$config['source_image']     = $tmp_path;
							$config['new_image']        = $image_thumb;
							$config['maintain_ratio']   = true;
							$config['height']           = $height;
							$config['width']            = $width;
				
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear();

							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload').$logoname; 
							$height=800;
							$width=800;
				
							$this->load->library('image_lib');
							// CONFIGURE IMAGE LIBRARY
							$config['image_library']    = 'gd2';
							$config['source_image']     = $tmp_path;
							$config['new_image']        = $image_thumb;
							$config['maintain_ratio']   = true;
							$config['height']           = $height;
							$config['width']            = $width;
				
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear();
							 
							$form_field['image'] = $logoname;
						} else {
							$form_field['image'] = '';
						}

 					// print_r($form_field);die;
					if($response = $this->popup_model->edit($id, $form_field)) {
						$this->session->set_flashdata('L_strErrorMessage','Popup Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'popup/edit/1');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				//}
			}
			
 			$this->load->view('edit_popup',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'popup/edit/1');
		}
	}
 

	
 
}
