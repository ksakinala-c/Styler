<?php
class Giftcard extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('giftcard_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
			'themename'         => '',
			'image'     => '',
			'order'     => ''
			
  		);
		if(!isPageRefresh() || $this->input->post('action') == 'add_giftcardtheme') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['themename']  = "trim|required";
			

			$this->validation->set_rules($rules);
			$fields['themename']  = "Theme Name";
			

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."theme/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."theme/".$logoname;
							$image_thumb= $this->config->item('upload')."/theme/small/".$logoname; 
				
							$height=50;
							$width=50;
				
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
							$tmp_path = $this->config->item('upload')."theme/".$logoname;
							$image_thumb= $this->config->item('upload')."/theme/medium/".$logoname; 
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
							 
							$data['image'] = $logoname;
						} else {
							$data['image'] = '';
						}

					/*if( $this->input->post('subcategory') != '' ) {
				 		$data['subcategory'] = implode(',', $_POST['subcategory']);
					} else {
						$data['subcategory'] = "";
					}*/
					if($response = $this->giftcard_model->add($data)) {
						$this->session->set_flashdata('L_strErrorMessage','Giiftcard Theme Added Succcessfully.!!');
						redirect($this->config->item('base_url').'giftcard/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		
 		$this->load->view('add_giftcardtheme',$data);
	}
	
	 

	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'giftcard/lists/';
		$config['per_page'] = '15';
		$data['themename']='';
		$return = $this->giftcard_model->lists($config['per_page'],$this->uri->segment(3), $this->input->post('themename'));		
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_giftcardtheme', $data);
	}


	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->giftcard_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'image' => $result[0]->image,
						'themename' => $result[0]->themename,
						'order' => $result[0]->order
					);

			if($this->input->post('action') == 'edit_giftcardtheme') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
			
				$rules['themename']  = "trim|required";

				$this->validation->set_rules($rules);
				
				$fields['themename']    = "Theme Name";
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} else {
					
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."theme/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."theme/".$logoname;
							$image_thumb= $this->config->item('upload')."theme/small/".$logoname; 
				
							$height=50;
							$width=50;
				
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

							$tmp_path = $this->config->item('upload')."theme/".$logoname;
							$image_thumb= $this->config->item('upload')."theme/medium/".$logoname; 
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
					
					 
 					 
					if($response = $this->giftcard_model->edit($id, $form_field)) {
						$this->session->set_flashdata('L_strErrorMessage','Gift Card Theme Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'giftcard/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
			
 			$this->load->view('edit_giftcardtheme',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'giftcard/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->giftcard_model->deletes($selCheck)) {
				$this->session->set_flashdata('L_strErrorMessage','Giftcard Theme Deleted Succcessfully!!!!');
			} else {
				$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'giftcard/lists');
  
	}
	function currency()
	{	 
			 $data['result'] = $this->giftcard_model->get_wallet();  
				
				if($this->input->post('action')  == 'edit_insider') 
				{
						$data = $this->input->post();
							
						$this->giftcard_model->edit_insider($data);
						$this->session->set_flashdata('msg','Insider Data Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'giftcard/currency');
					
				}
				
				
				$this->load->view('edit_currency_giftcard',$data);
		
			 
	}
	
 
}
