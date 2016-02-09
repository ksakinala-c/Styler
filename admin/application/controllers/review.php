<?php
class Review extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('review_model');	
	}
	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'exportreview/lists/';
		$config['per_page'] = '15';
		$data['title']=$this->input->post('title');
		$return = $this->review_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_review', $data);
	}
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->review_model->deletes($selCheck)) {
				$this->session->set_flashdata('L_strErrorMessage','Review Deleted Successfully!!!!');
			} else {
				$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'review/lists');
  
	}
		function userstatus($id)
	{
		$result=$this->review_model->updatestatus($id);
		$this->session->set_flashdata('flashError','Review status Updated.!!');
		redirect($this->config->item('base_url').'review/lists');
		//$this->load->view('users/list_user', $data);
	}
	
	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',			
			'product_id' => '',
			'title' => '',
			'review' => '',
			'ratings' => '',
			
		);

			if(!isPageRefresh() || $this->input->post('action') == 'add_review') {
				foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					$this->load->library('validation');
					$rules['product_id']       = "trim|required";
					$rules['title']      = "trim|required";					
					$rules['review']      = "trim|required";
					$rules['ratings']    = "trim|required";
					$this->validation->set_rules($rules);
					$fields['product_id']       = "product_id";
					$fields['title']      = "title";					
					$fields['review']      = "review";
					$fields['ratings']    = "ratings";
					$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
				
					if($response = $this->review_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Review Added Succcessfully!!!!');
							redirect($this->config->item('base_url').'review/lists');

						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					
			}
		}
		$data['product_list'] = $this->review_model->product_list();		
		//print_r($data);die;
		//$data['allusers'] = $this->users_model->allusers();
		$this->load->view('add_review',$data);
	}
	
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->review_model->get($id);
			//echo "<pre>";print_r($result);die;
					 $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'userid' => $result[0]->userid,
						'product_id' => $result[0]->product_id,
						'title' => $result[0]->title,
						'review' => $result[0]->review,
						'ratings' => $result[0]->ratings,
						'date' => $result[0]->date,
						'enable' => $result[0]->enable,
						
						

 					);

			if($this->input->post('action') == 'edit_review')
			{
				foreach($data as $key => $value)
				{  $data[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['userid']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['userid']       = "User Name";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					 
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
						 $ccid=$id;
						 
								if($response = $this->review_model->edit($id, $data)) 
								{
									$this->session->set_flashdata('L_strErrorMessage','Review Updated Succcessfully!!!!');
									redirect($this->config->item('base_url').'review/lists');

								} 
								else 
								{
									$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
								}
						 
				}
			}
			
			$this->load->view('edit_review',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'review/lists');
		}
	}

	/*
	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
			'catid'         => '',
			'bid'     => '',
			'bikeid'     => '',
			'modelid'     => '',
			'style'	=>'',
			'comfort'	=>'',
			'performance'	=>'',
			'fuel_economy'	=>'',
			'tittle'     => '',
			'money'     => '',
			'pros'     => '',
			'cons'     => '',
			'bottomline'     => '',
			'kmdriven'     => '',
			'ddlFamiliar'     => '',
			'purchased_as'     => '',
			'description'     => '',
			'fueleco'     => '',
			'image'     => '',
			'is_featured'     => '',
			'userid'     => '',
		);
		
		if(!isPageRefresh() || $this->input->post('action') == 'add_exportreview') 
		{
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['tittle']  = "trim|required";
			

			$this->validation->set_rules($rules);
			$fields['tittle']  = "Tittle";
			

			$this->validation->set_fields($fields);
			
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
			
						if($_FILES['image']['name'] != '')
							{
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload');
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."review/".$logoname; 
				
							$height=250;
							$width=675;
				
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
						if($response = $this->review_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Review Added Successfully!!!!');
							redirect($this->config->item('base_url').'exportreview/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}
		}
		$data['allcategory']=$this->review_model->allcategory();
		$data['allbrand']=$this->review_model->allbrand();
		$data['allmodel']=$this->review_model->allmodel();
		$data['allbike']=$this->review_model->allbike();
		$data['allexpert']=$this->review_model->allexpert();
 		$this->load->view('add_exportreview',$data);
	}
	

	

	function userlists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'exportreview/userlists/';
		$config['per_page'] = '15';
		$data['modelname']=$this->input->post('modelname');
		$return = $this->review_model->userlists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_userreview', $data);
	}
	
	function show_bike()
	{
		//echo "hello";die;
		 $id = $_POST['brand'];
		$data = $this->review_model->show_bikes($id);
		//print_r($data);die;
		$html = "<select id='bikeid' name='bikeid' onchange='get_model(this.value)'  class='form-control jobtext'>";
		$html .= "<option value=''>Select Bike</option>";
		if($data != '')
		{

		for($i=0;$i<count($data);$i++)
		{
			$html .= "<option value='".$data[$i]->id ."'>".$data[$i]->bname ."</option>";
		}
		}
		$html .="</select>";
		echo $html;
 
	}
	function show_model()
	{
		//echo "hello";die;
		$id = $_POST['bike'];
		$data = $this->review_model->show_models($id);
		//print_r($data);die;
		$html = "<select id='modelid' name='modelid'   class='form-control jobtext'>";
		$html .= "<option value=''>Select Model</option>";
		if($data != '')
		{

		for($i=0;$i<count($data);$i++)
		{
			$html .= "<option value='".$data[$i]->id ."'>".$data[$i]->modelname ."</option>";
		}
		}
		$html .="</select>";
		echo $html;
 
	}

	 
*/
	

	function udeletes(){
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->review_model->deletes($selCheck)) {
				$this->session->set_flashdata('flashError','Review Deleted Successfully!!!!');
			} else {
				$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'exportreview/userlists');
	}
 
	
 
}
