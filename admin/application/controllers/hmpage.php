<?php
class hmpage extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('hmpage_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
			'caption'         => '',
			'image'     => '',
			'slider_header'     => '',
			'slider_content'     => '',
			'button_label'     => '',
			'button_bgcolor'     => '',
			'url'     => '',
			'homepage'     => '',
			'first_row'     => '',
			'second_row'     => '',
			'third_row'     => '',
			'order'     => ''
			
  		);
		if(!isPageRefresh() || $this->input->post('action') == 'add_banner') {
			foreach($form_field as $key => $value)	{
				$data[$key]=$this->input->post($key);	
			
			}

			$this->load->library('validation');
			$rules['caption']  = "trim|required";
			

			$this->validation->set_rules($rules);
			$fields['caption']  = "Caption";
			

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."banner/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."banner/".$logoname;
							$image_thumb= $this->config->item('upload')."/banner/small/".$logoname; 
				
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
							$tmp_path = $this->config->item('upload')."banner/".$logoname;
							$image_thumb= $this->config->item('upload')."/banner/medium/".$logoname; 
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
					
					
					if($response = $this->banner_model->add($data)) {
						$this->session->set_flashdata('L_strErrorMessage','Image Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'banner/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		
 		$this->load->view('add_banner',$data);
	}
	
	 

	 
	 function settings()
	 {
	 
		if($this->input->post('hidPgRefRan')) {
			$data_list=array();
			$i=1;
			//echo "<pre>";
			//print_r($_POST);
			//print_r($_FILES);
		
			
			
			foreach($_POST as $key=>$val)
			{
				if($key!="hidPgRefRan")
				{	
					$tmp=array();
					$tmp['value']=$val;				
					if($key=="category")
					{					
						foreach($_FILES['category']['tmp_name'] as $fileKey=>$file)
						{
							if($file['cate_img'])
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename = $_FILES['category']['name'][$fileKey]['cate_img'];
								move_uploaded_file($file['cate_img'], $file_path.$filename );
								$val[$fileKey]['cate_prev_img']=$filename;
							
							}
					
						}
							
						$tmp['value']=serialize($val);						
					}
					if($key=="appointment")
					{					
						foreach($_FILES['appointment']['tmp_name'] as $fileKey=>$file)
						{
							if($file)
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename = $_FILES['appointment']['name']["image_file"];
								move_uploaded_file($file, $file_path.$filename );
								$val['imagefile']=$filename;
							
							}
					
						}
						$tmp['value']=serialize($val);						
					}	
					if($key=="block3")
					{					
						foreach($_FILES['block3']['tmp_name'] as $fileKey=>$file)
						{
							if($file)
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename = $_FILES['block3']['name'][$fileKey];
								move_uploaded_file($file, $file_path.$filename );
								$val[$fileKey]=$filename;
							
							}
					
						}					
						$tmp['value']=serialize($val);						
					}
					if($key=="online_process_right")
					{					
						foreach($_FILES['online_process_right']['tmp_name'] as $fileKey=>$file)
						{
							if($file["bg"])
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename = $_FILES['online_process_right']['name'][$fileKey]["bg"];
								move_uploaded_file($file["bg"], $file_path.$filename );
								$val[$fileKey]["bg"]=$filename;
							
							}
					
						}				
						$tmp['value']=serialize($val);						
					}
					if($key=="blog_list")
					{					
						foreach($_FILES['blog_list']['tmp_name'] as $fileKey=>$file)
						{
							if($file)
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename = $_FILES['blog_list']['name']["image_file"];
								move_uploaded_file($file, $file_path.$filename );
								$val['imagefile']=$filename;
							
							}
					
						}
						//print_r($val);die;
						$tmp['value']=serialize($val);						
					}
					if($key=="news_block")
					{					
						foreach($_FILES['news_block']['tmp_name']["image"] as $fileKey=>$file)
						{
							if($file)
							{
								$file_path = $this->config->item('upload')."hm_category_images/";
							 	$filename =$_FILES['news_block']['name']["image"][$fileKey];
								move_uploaded_file($file, $file_path.$filename );
								$val["image"][$fileKey]=$filename;
							
							}
					
						}	
						$val['image']=	array_filter($val['image']);
						$val['image_content']=	array_filter($val['image_content']);			
						$tmp['value']=serialize($val);						
					}
					if($key=="online_process")
					{					
						$tmp['value']=serialize($val);		
					}
					$tmp['setting_key']=$key;
					$tmp['status']=1;
					$tmp['id']=$i;
					$i++;
					$data_list[]=$tmp;
				}
							
			}
				//die;
			if($response = $this->hmpage_model->saveContents($data_list)) {
						$this->session->set_flashdata('L_strErrorMessage','Content Saved Succcessfully!!!!');
						redirect($this->config->item('base_url').'hmpage/settings');

			} else 
			{
				$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
			}
		}
	 
		$data["content"]=$this->hmpage_model->get_settings();
		$this->load->view('change_settings',$data);
	 }
	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'banner/lists/';
		$config['per_page'] = '15';
		$return = $this->banner_model->lists($config['per_page'],$this->uri->segment(3), $this->input->post('searchTxtName'));
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_banner', $data);
	}


	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->banner_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'image' => $result[0]->image,
						'caption' => $result[0]->caption,	
						'slider_header' => $result[0]->slider_header,
						'slider_content' => $result[0]->slider_content,
						'button_label' => $result[0]->button_label,
						'button_bgcolor' => $result[0]->button_bgcolor,
						'url' => $result[0]->links,
						'homepage' => $result[0]->homepage,
						'first_row' => $result[0]->first_row,
						'second_row' => $result[0]->second_row,
						'third_row' => $result[0]->third_row,
						'order' => $result[0]->order
					);

			if($this->input->post('action') == 'edit_banner') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
			
				$rules['caption']  = "trim|required";

				$this->validation->set_rules($rules);
				
				$fields['caption']    = "Caption";
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} else {
					
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload')."banner/";
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."banner/".$logoname;
							$image_thumb= $this->config->item('upload')."banner/small/".$logoname; 
				
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

							$tmp_path = $this->config->item('upload')."banner/".$logoname;
							$image_thumb= $this->config->item('upload')."banner/medium/".$logoname; 
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
					
					 
 					 
					if($response = $this->banner_model->edit($id, $form_field)) {
						$this->session->set_flashdata('L_strErrorMessage','Image Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'banner/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
			
 			$this->load->view('edit_banner',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'banner/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->banner_model->deletes($selCheck)) {
				$this->session->set_flashdata('L_strErrorMessage','Image Deleted Succcessfully!!!!');
			} else {
				$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'banner/lists');
  
	}

	
 
}
