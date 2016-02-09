<?php
class Newfabric extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('newfabric_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        
				 'fname'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_newfabric') {
			foreach($form_field as $key => $value)	
			{
				$data[$key]=$this->input->post($key);
			}
			 
			$this->load->library('validation');
			$rules['fname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['fname']       = "fabric Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->newfabric_model->is_newfabric_already_exist_add($this->input->post('fname')))
					{
						if($response = $this->newfabric_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Fabric Added Successfully!!!');
						 
							redirect($this->config->item('base_url').'newfabric/lists/');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'newfabric already exist!';
					}
			}
		}
		//$data['allparts']=$this->newfabric_model->allparts();
 		$this->load->view('add_newfabric',$data);
 	}
	
 	
 	function lists()
	{
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');
			$data['fname'] = $this->input->post('fname');
		$url_to_paging = $this->config->item('base_url');
		 
		$config['base_url'] = $url_to_paging.'newfabric/lists/?per_page='.$page.'&fname=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		 
	
		$return = $this->newfabric_model->lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		//$data['allbiketype']=$this->bikeadd_model->allbike();
		$this->load->view('list_newfabric', $data);
		
	}

		
	function edit($id)
	{
		 
		if(is_numeric($id)) {
			$result = $this->newfabric_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'fname'	=> $result[0]->fname,
					 
					);

			if($this->input->post('action') == 'edit_newfabric') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['fname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['fname']       = "Fabric Name";

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
					if(!$this->newfabric_model->is_newfabric_already_exist($this->input->post('fname'),$ccid))
					{
								//$subcatid = $this->input->post('subcatid');
								if($response = $this->newfabric_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Fabric Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'newfabric/lists/');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Fabric already exist!';
					  }
				}
			}
			//$data['newfabricid']= $subcat;
			//$data['allparts']=$this->newfabric_model->allparts();
			$this->load->view('edit_newfabric',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such newfabric !!!!');
			redirect($this->config->item('base_url').'newfabric/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->newfabric_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Fabric Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'newfabric/lists/');
  
	}
	
 


	function ajaxlist_newfabric()
	{
		//echo 11;exit;
		$fname = "";
		$result = $this->newfabric_model->newfabric_list($this->input->post('fname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$fname .= $result[$i]->fname.",";
		}
		echo $fname = substr($fname, 0, -1);
	}

	


}
?>