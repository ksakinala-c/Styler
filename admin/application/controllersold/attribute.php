<?php
class attribute extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('attribute_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'attribute'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_attribute') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['attribute']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['attribute']       = "attribute Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->attribute_model->is_attribute_already_exist_add($this->input->post('attribute')))
					{
						if($response = $this->attribute_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Size Added Successfully!!!');
							redirect($this->config->item('base_url').'attribute/lists');
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
 		$this->load->view('add_attribute',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'attribute/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['attribute'] = $this->input->post('attribute');
		$per_page = '1';
		$perpage = '3';
		$return = $this->attribute_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_attribute',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->attribute_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'attribute' => $result[0]->attribute,
					);

			if($this->input->post('action') == 'edit_attribute') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['attribute']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['attribute']       = "attribute Name";

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
					if(!$this->attribute_model->is_attribute_already_exist($this->input->post('cname'),$ccid))
					{
								if($response = $this->attribute_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Size Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'attribute/lists');
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
			
			$this->load->view('edit_attribute',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'attribute/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->attribute_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Size Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'attribute/lists');
  
	}
	
 


	function ajaxlist_attribute()
	{
		//echo 11;exit;
		$attribute = "";
		$result = $this->attribute_model->attribute_list($this->input->post('cname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$attribute .= $result[$i]->cname.",";
		}
		echo $attribute = substr($attribute, 0, -1);
	}

	


}
?>