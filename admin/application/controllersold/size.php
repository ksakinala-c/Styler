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
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'subcatid'      => '',
				 'size'      => '',
				 'partsvalue'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_size') {
			foreach($form_field as $key => $value)	
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

					
					if(!$this->size_model->is_size_already_exist_add($this->input->post('size')))
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
		$return = $this->size_model->lists($config['per_page'],$page,$data);
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
					$ccid=$id;
					if(!$this->size_model->is_size_already_exist($this->input->post('size'),$ccid))
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

	


}
?>