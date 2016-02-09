<?php
class Permission extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('permission_model');
		 
	}
		

	function list_permission()
	{
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');
		$data['cname'] = $search =  $this->input->post('cname');
		//echo $data['cname'];die()
		$config['base_url'] = $url_to_paging.'permission/list_permission/?per_page='.$page.'&cname=';
		$config['per_page'] = '10';
		$config['first_url']='0';
	
		$return = $this->permission_model->list_permission($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		$this->load->view('list_permission', $data);
	}
	
	function add()
	{
 		$form_field = $data = array(
			'L_strErrorMessage' => '',
		    'cname'      => '',        
			'permission'    =>''
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_location')   
		{
			foreach($form_field as $key => $value)	
			{	
				$data[$key]=$this->input->post($key);	
			}
			
			$this->load->library('validation');
			$rules['cname']       = "trim|required"; 

			$this->validation->set_rules($rules);
			$fields['cname']       = "Name";
			 
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE)
			{
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} 
			else 
			{
				
				 if(!$this->permission_model->is_location_already_exist_add($this->input->post('cname')))
					 {
							
					   if($response = $this->permission_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','User Permission Added Succcessfully!!!!');
							redirect($this->config->item('base_url').'permission/list_permission');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Permission already exist!';
					}
			}
		}
		 
		 
		$data['allpermission'] = $this->permission_model->allpermission();
		$this->load->view('add_permission',$data);
		
		}
		
		
		 
		
	function deletes()
	{
//	print_r($_POST['selected']);
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		 foreach($_POST['selected'] as $selCheck) 
		 {
			    if($this->permission_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Usertype Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'permission/list_permission'); 
		
	}	
	
	function deletevalue($id)
	{
		 
			    if($this->permission_model->deletesvalue($id))
				{
					$this->session->set_flashdata('flashError','User type Deleted Succcessfully!!!!');
					redirect($this->config->item('base_url').'permission/list_permission');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		 
	
		
  
	}	
		
		function edit($id)
		{
		
		if(is_numeric($id)) {
			$result = $this->permission_model->get($id);
			//print_r($result);die();
			
					 $form_field = $data = array(
						'L_strErrorMessage' => '',
 						'cname'   => $result[0]->cname,
						'permission'   => $result[0]->permission,
  					);
					//print_r($form_field);

					
			if($this->input->post('action') == 'edit_permission') 
			{
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['cname']       = "trim|required";
				 
				$this->validation->set_rules($rules);
				 
			    $fields['cname']       = "Name";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) 
				{
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
					
					if(!$this->permission_model->is_permission_already_exist($this->input->post('cname'),$id))
					{
					
							if($response = $this->permission_model->edit($id, $form_field)) 
							{
								$this->session->set_flashdata('L_strErrorMessage','Permission Updated Succcessfully!!!!');
								redirect($this->config->item('base_url').'permission/list_permission');

							} else {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
							}
					 }
					else
					{
						$data['L_strErrorMessage'] = 'Permission already exist!';
					}
				}
				
			}
			$data['allpermission'] = $this->permission_model->allpermission(); 
			  
			$this->load->view('edit_permission',$data);
		
			
			
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'permission/list_permission');
		}
		}
		
		
		
	function ajaxlist_permission()
	{
		$permission = "";
		$result = $this->permission_model->permission_list();
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->cname;die();	
			$permission .= $result[$i]->cname.",";
		}
		echo $permission = substr($permission, 0, -1);
	}
		
		
}