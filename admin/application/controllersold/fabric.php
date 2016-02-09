<?php
class Fabric extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('fabric_model');	
	}
	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'fabricsname'      => '',
				'catid'      => '',
				'subcatid'      => '',
				'colourid'      => '',
				'designid'      => '',
				'pid'      => '',
				'name'      => '',
				'image'      => '',
				'price'      => '',
				'title'      => '',
				'description'      => '',
				'keyword'      => '',
				 
 		);
		if(!isPageRefresh() || $this->input->post('action') == 'add_fabric') {
			foreach($form_field as $key => $value)	{
			$data[$key]=$this->input->post($key);	}
			//PRINT_R($data);DIE;
			$this->load->library('validation');
			$rules['fabricsname']       = "trim|required";
			$this->validation->set_rules($rules);
			$fields['fabricsname']       = "Style Name";
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					 if(!$this->fabric_model->is_fabric_already_exist_add($this->input->post('fabricsname')))
					{
							
						if($response = $this->fabric_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Style Added Successfully!!!');
							redirect($this->config->item('base_url').'fabric/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Style already exist!';
					}
			}
		}
		$data['allcategory'] = $this->fabric_model->allcategory();
		$data['allsubcategory'] = $this->fabric_model->allsubcategory();
		$data['allcolour'] = $this->fabric_model->allcolour();
		$data['allproduct'] = $this->fabric_model->allproduct();
		$data['alldesign'] = $this->fabric_model->alldesign();
		$this->load->view('add_fabric',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'fabric/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['fabricsname'] = $this->input->post('fabricsname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->fabric_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_fabric',$data);
	}
		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->fabric_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'fabricsname' => $result[0]->fabricsname,
						'catid' => $result[0]->catid,
						'subcatid' => $result[0]->subcatid,
						'colourid' => $result[0]->colourid,
						'designid' => $result[0]->designid,
						'pid' => $result[0]->pid,
						'title' => $result[0]->title,
						'description' => $result[0]->description,
						'keyword' => $result[0]->keyword,
						 
					);
			if($this->input->post('action') == 'edit_fabric') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['fabricsname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['fabricsname']       = "Style Name";
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
					if(!$this->fabric_model->is_fabric_already_exist($this->input->post('fabricsname'),$ccid))
					{
								if($response = $this->fabric_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Style Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'fabric/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Style already exist!';
					  }
				}
			}
			$data['allcategory'] = $this->fabric_model->allcategory();
			$data['allsubcategory'] = $this->fabric_model->allsubcategory();
			$data['allcolour'] = $this->fabric_model->allcolour();
			$data['alldesign'] = $this->fabric_model->alldesign();
			$data['allproduct'] = $this->fabric_model->allproduct();
			$this->load->view('edit_fabric',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'fabric/lists');
		}
	}
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->fabric_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Style Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'fabric/lists');
  
	}
	
 
	function ajaxlist_fabric()
	{
		//echo 11;exit;
		$fabric = "";
		$result = $this->fabric_model->fabric_list($this->input->post('fabricsname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$fabric .= $result[$i]->fabricsname.",";
		}
		echo $fabric = substr($fabric, 0, -1);
	}	
	function editimage($id)
	{
	 	
		$data['L_strErrorMessage'] = '';
 

		if ($this->input->post('action') == 'edit' && is_numeric($id)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."fabric/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."fabric/".$logoname;
				$image_thumb= $this->config->item('upload')."fabric/medium/".$logoname; 
				
				$height=380;
				$width=300;
				
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

				$tmp_path = $this->config->item('upload')."fabric/".$logoname;
				$image_thumb= $this->config->item('upload')."fabric/large/".$logoname; 
				
				$height=495;
				$width=430;
				
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


				$tmp_path = $this->config->item('upload')."fabric/".$logoname;
				$image_thumb= $this->config->item('upload')."fabric/small/".$logoname; 
				
				$height=185;
				$width=132;
				
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
 
				$id222 = $this->fabric_model->add_product_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->fabric_model->presult($id);
		$data['productimages'] = $this->fabric_model->productimages($id); 
		$this->load->view('edit_fabric_image',$data);
	}
	function updateorder($val,$id,$pid)
	{
		$return = $this->fabric_model->updateorder($id,$val);
		$this->session->set_flashdata('item', 'Fabric Image Updates Successfully');
		redirect($this->config->item('base_url').'fabric/editimage/'.$pid);
	}
	function removeimage($id,$pid)
	{
 
		$return = $this->fabric_model->removeimage($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'fabric/editimage/'.$pid);
	}
	function setbaseimg($id,$pid)
	{
 
		$return = $this->fabric_model->setbaseimg($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'fabric/editimage/'.$pid);
	}
	function show_category()
	{
		$catid = $_POST['catid'];
		$data = $this->fabric_model->show_subcategory($catid);
		//exit;
		$html = "<select id='subcatid' name='subcatid' class='form-control jobtext'>";
		$html .= "<option value=''>Select Sub category</option>";
		if($data != '')
		{

		for($i=0;$i<count($data);$i++)
		{
			$html .= "<option value='".$data[$i]->id ."'>".$data[$i]->scname ."</option>";
		}
		}
		$html .="</select>";
		echo $html;
 
	}
	
}