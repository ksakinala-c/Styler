<?php
class Returnpro extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('returnpro_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        
				 'status'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_status') {
			foreach($form_field as $key => $value)	
			{
				$data[$key]=$this->input->post($key);
			}
			 
			$this->load->library('validation');
			$rules['status']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['status']       = "Status Type";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->returnpro_model->is_returnpro_already_exist_add($this->input->post('status')))
					{
						if($response = $this->returnpro_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Status Added Successfully!!!');
						 
							redirect($this->config->item('base_url').'returnpro/lists/');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Status already exist!';
					}
			}
		}
		//$data['allparts']=$this->returnpro_model->allparts();
 		$this->load->view('add_returnpro',$data);
 	}
	
 	
 	function lists()
	{
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');
			$data['status'] = $this->input->post('status');
		$url_to_paging = $this->config->item('base_url');
		 
		$config['base_url'] = $url_to_paging.'returnpro/lists/?per_page='.$page.'&fname=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		 
	
		$return = $this->returnpro_model->lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		//$data['allbiketype']=$this->bikeadd_model->allbike();
		$this->load->view('list_returnpro', $data);
		
	}

		
	function edit($id)
	{
		 
		if(is_numeric($id)) {
			$result = $this->returnpro_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'status'	=> $result[0]->status,
					 
					);

			if($this->input->post('action') == 'edit_status') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['status']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['status']       = "Status Type";

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
					if(!$this->returnpro_model->is_returnpro_already_exist($this->input->post('status'),$ccid))
					{
								//$subcatid = $this->input->post('subcatid');
								if($response = $this->returnpro_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Status Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'returnpro/lists/');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Status already exist!';
					  }
				}
			}
			//$data['newfabricid']= $subcat;
			//$data['allparts']=$this->returnpro_model->allparts();
			$this->load->view('edit_returnpro',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such status !!!!');
			redirect($this->config->item('base_url').'returnpro/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->returnpro_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Status Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'returnpro/lists/');
  
	}
	
 


	function ajaxlist_status()
	{
		//echo 11;exit;
		$status = "";
		$result = $this->returnpro_model->status_list($this->input->post('status'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$status .= $result[$i]->status.",";
		}
		echo $status = substr($status, 0, -1);
	}

	


}
?>