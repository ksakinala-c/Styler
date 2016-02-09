<?php
class hmlistpage extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('hmlistpage_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',			
			'image'     => '',
			'fabric_id'     => '',
			'fabric_name'     => '',
			'price'     => '',
  		);
		
		if(!isPageRefresh() || $this->input->post('action') == 'add_hmlistpage') {
			foreach($form_field as $key => $value)	{
				$data[$key]=$this->input->post($key);	
			
			}

			$this->load->library('validation');
			$rules['fabric_id']  = "trim|required";
			$rules['fabric_name']  = "trim|required";
			$rules['price']  = "trim|required";
			

			$this->validation->set_rules($rules);
			$fields['fabric_id']  = "Fabric Id";
			$fields['fabric_name']  = "Fabric Name";
			$fields['price']  = "Price";
			

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."hmlistpage/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."hmlistpage/".$logoname;
							$image_thumb= $this->config->item('upload')."/hmlistpage/small/".$logoname; 
				
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
							$tmp_path = $this->config->item('upload')."hmlistpage/".$logoname;
							$image_thumb= $this->config->item('upload')."/hmlistpage/medium/".$logoname; 
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
					
					if($response = $this->hmlistpage_model->add($data)) {
						$this->session->set_flashdata('L_strErrorMessage','Record Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'hmlistpage/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		
 		$this->load->view('add_list_product',$data);
	}
	
	 

	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'hmlistpage/lists/';
		$config['per_page'] = '15';
		$return = $this->hmlistpage_model->lists($config['per_page'],$this->uri->segment(3), $this->input->post('searchTxtName'));
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_view_product', $data);
	}


	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->hmlistpage_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'image' => $result[0]->image,
						'fabric_id' => $result[0]->fabric_id,
						'fabric_name' => $result[0]->fabric_name,
						'price' => $result[0]->price,
					);

			if($this->input->post('action') == 'edit_hmlistpage') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
			
				$this->load->library('validation');
				$rules['fabric_id']  = "trim|required";
				$rules['fabric_name']  = "trim|required";
				$rules['price']  = "trim|required";
				

				$this->validation->set_rules($rules);
				$fields['fabric_id']  = "Fabric Id";
				$fields['fabric_name']  = "Fabric Name";
				$fields['price']  = "Price";
			
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} else {
					
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."hmlistpage/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."hmlistpage/".$logoname;
							$image_thumb= $this->config->item('upload')."hmlistpage/small/".$logoname; 
				
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

							$tmp_path = $this->config->item('upload')."hmlistpage/".$logoname;
							$image_thumb= $this->config->item('upload')."hmlistpage/medium/".$logoname; 
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
					
					 
 					 
					if($response = $this->hmlistpage_model->edit($id, $form_field)) {
						$this->session->set_flashdata('L_strErrorMessage','Record Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'hmlistpage/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
			
 			$this->load->view('edit_list_product',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'hmlistpage/lists');
		}
	}

	function deletes()
	{
		//echo "test";exit;
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->hmlistpage_model->deletes($selCheck)) {
				$this->session->set_flashdata('L_strErrorMessage','Record Deleted Succcessfully!!!!');
			} else {
				$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'hmlistpage/lists');
  
	}

	
 
}
