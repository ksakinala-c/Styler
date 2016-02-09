<?php
class Size extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('size_model');	
	}

	function add($sid)
	{
		 
		 $data = array(
			'L_strErrorMessage' => '',
		        'subcatid'      => '',
				 'size'      => '',
				 'partsvalue'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_size') {
			foreach($data as $key => $value)	
			{
				$data[$key]=$this->input->post($key);
			}
		 
			$this->load->library('validation');
			$rules['size']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['size']       = "Size";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->size_model->is_size_already_exist_add($this->input->post('size'),$sid))
					{
						if($response = $this->size_model->add($data,$sid))
						{
							$this->session->set_flashdata('L_strErrorMessage','Size Added Successfully!!!');
						 
							redirect($this->config->item('base_url').'size/lists/'.$sid.' ');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Size already exist!';
					}
			}
		}
		$data['allparts']=$this->size_model->allparts();
 		$this->load->view('add_size',$data);
 	}
	
 	
 	function lists($id)
	{
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');
		 
		$config['base_url'] = $url_to_paging.'size/lists/?per_page='.$page.'&name=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['sizeid'] = $id;
		$data['size'] = $this->input->post('size');
		$return = $this->size_model->lists($config['per_page'],$page,$data,$id);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		//$data['allbiketype']=$this->bikeadd_model->allbike();
		$this->load->view('list_size', $data);
		
	}

		
	function edit($id, $subcat)
	{
		 
		 
		if(is_numeric($id)) {
			$result = $this->size_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'subcatid'	=> $result[0]->subcatid,
						'size' => $result[0]->size,
						'partsvalue'      => '',
					);

			if($this->input->post('action') == 'edit_size') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['size']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['size']       = "Size";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) 
				{
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
					 
					if(!$this->size_model->is_size_already_exist($this->input->post('size'),$id, $subcat))
					{
								$subcatid = $this->input->post('subcatid');
								if($response = $this->size_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Size Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'size/lists/'.$subcat);
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Size already exist!';
					  }
				}
			}
			$data['sizeid']= $subcat;
			$data['allparts']=$this->size_model->allparts();
			$this->load->view('edit_size',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such size !!!!');
			redirect($this->config->item('base_url').'size/lists');
		}
	}

	function deletes($id)
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->size_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Size Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'size/lists/'.$id);
  
	}
	
 


	function ajaxlist_size()
	{
		//echo 11;exit;
		$size = "";
		$result = $this->size_model->size_list($this->input->post('size'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$size .= $result[$i]->size.",";
		}
		echo $size = substr($size, 0, -1);
	}
	function editimage($id)
	{
	 	
		$data['L_strErrorMessage'] = '';
 

		if ($this->input->post('action') == 'edit' && is_numeric($id)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."size/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."size/".$logoname;
				$image_thumb= $this->config->item('upload')."size/medium/".$logoname; 
				
				$height=400;
				$width=400;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

				$tmp_path = $this->config->item('upload')."size/".$logoname;
				$image_thumb= $this->config->item('upload')."size/large/".$logoname; 
				
				$height=500;
				$width=500;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();


				$tmp_path = $this->config->item('upload')."size/".$logoname;
				$image_thumb= $this->config->item('upload')."size/small/".$logoname; 
				
				$height=100;
				$width=150;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

			
				$newdata1 = array(
					'pid'   => $id,
					'image'	=> $logoname,
				);
 
				$id222 = $this->size_model->add_product_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->size_model->presult($id);
		$data['productimages'] = $this->size_model->productimages($id); 
		$this->load->view('sizeeditimage',$data);
		
		 
	}
	function updateorder($val,$id,$pid){
		$return = $this->size_model->updateorder($id,$val);
		$this->session->set_flashdata('item', 'Size Image Updates Successfully');
		redirect($this->config->item('base_url').'size/editimage/'.$pid);
		
	}
	function setbaseimg($id,$pid)
	{
 
		$return = $this->size_model->setbaseimg($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'size/editimage/'.$pid);
	}
	function removeimage($id,$pid)
	{
 
		$return = $this->size_model->removeimage($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'size/editimage/'.$pid);
	}

	


}
?>