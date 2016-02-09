<?php
class Category extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('category_model');	
	}
	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'cname'      => '',
				 'image'      => '',
				 'flag'      => '',
				 'title'      => '',
				'description'      => '',
				'keyword'      => '',
 		);
		if(!isPageRefresh() || $this->input->post('action') == 'add_category') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['cname']       = "trim|required";
			$this->validation->set_rules($rules);
			$fields['cname']       = "Category Name";
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload');
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."small/".$logoname; 
				
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
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."medium/".$logoname; 
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
							 
							$data['image'] = $logoname;
						} else {
							$data['image'] = '';
						}
					
					if(!$this->category_model->is_category_already_exist_add($this->input->post('cname')))
					{
						if($response = $this->category_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Category Added Successfully!!!');
							redirect($this->config->item('base_url').'category/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Category already exist!';
					}
			}
		}
 		$this->load->view('add_category',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'category/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['cname'] = $this->input->post('cname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->category_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_category',$data);
	}
		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->category_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'cname' => $result[0]->cname,
						'image' => $result[0]->image,
						'flag' => $result[0]->flag,
						'title' => $result[0]->title,
						'description' => $result[0]->description,
						'keyword' => $result[0]->keyword,
					);
			if($this->input->post('action') == 'edit_category') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['cname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['cname']       = "Category Name";
				$this->validation->set_fields($fields);
				if ($this->validation->run() == FALSE) 
				{
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload');
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."small/".$logoname; 
				
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
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."medium/".$logoname; 
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
							 
							$form_field['image'] = $logoname;
						} else {
							$form_field['image'] = '';
						}
					$ccid=$id;
					if(!$this->category_model->is_category_already_exist($this->input->post('cname'),$ccid))
					{
								if($response = $this->category_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Category Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'category/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Category already exist!';
					  }
				}
			}
			
			$this->load->view('edit_category',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'category/lists');
		}
	}
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->category_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Category Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'category/lists');
  
	}
	
 
	function ajaxlist_category()
	{
		//echo 11;exit;
		$category = "";
		$result = $this->category_model->category_list($this->input->post('cname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$category .= $result[$i]->cname.",";
		}
		echo $category = substr($category, 0, -1);
	}	
}