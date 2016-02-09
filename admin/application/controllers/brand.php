<?php
class Brand extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('brand_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		         
				'bname'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_brand') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['bname']       = "trim|required";
			//$rules['colourcode']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['bname']       = "Brand Name";
			//$fields['colourcode']       = "colour code";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->brand_model->is_brand_already_exist_add($this->input->post('bname')))
					{
						if($response = $this->brand_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Brand Added Successfully!!!');
							redirect($this->config->item('base_url').'brand/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Brand already exist!';
					}
			}
		}
 		$this->load->view('add_brand',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'brand/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['bname'] = $this->input->post('bname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->brand_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_brand',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->brand_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'bname' => $result[0]->bname,
						 
					);

			if($this->input->post('action') == 'edit_brand') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['bname']       = "trim|required";
				 
				$this->validation->set_rules($rules);
				$fields['bname']       = "Brand Name";
				 

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
					if(!$this->brand_model->is_brand_already_exist($this->input->post('bname'),$ccid))
					{
								if($response = $this->brand_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Brand Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'brand/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Brand already exist!';
					  }
				}
			}
			
			$this->load->view('edit_brand',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Brand !!!!');
			redirect($this->config->item('base_url').'brand/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->brand_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Brand Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'brand/lists');
  
	}
	
 


	function ajaxlist_brand()
	{
		//echo 11;exit;
		$bname = "";
		$result = $this->brand_model->brand_list($this->input->post('bname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$bname .= $result[$i]->bname.",";
		}
		echo $bname = substr($bname, 0, -1);
	}
}