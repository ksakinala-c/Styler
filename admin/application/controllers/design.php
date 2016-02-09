<?php
class Design extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('design_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'designname'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_design') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['designname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['designname']       = "Design Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->design_model->is_design_already_exist_add($this->input->post('designname')))
					{
						if($response = $this->design_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Design Added Successfully!!!');
							redirect($this->config->item('base_url').'design/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Design already exist.!!';
					}
			}
		}
 		$this->load->view('add_design',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'design/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['designname'] = $this->input->post('designname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->design_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_design',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->design_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'designname' => $result[0]->designname,
					);

			if($this->input->post('action') == 'edit_design') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['designname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['designname']       = "Design Name";

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
					if(!$this->design_model->is_design_already_exist($this->input->post('designname')))
					{
								if($response = $this->design_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Design Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'design/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Design already exist.!!';
					  }
				}
			}
			
			$this->load->view('edit_design',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'design/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->design_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Design Deleted Succcessfully.!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'design/lists');
  
	}
	
 


	function ajaxlist_design()
	{
		//echo 11;exit;
		$designname = "";
		$result = $this->design_model->design_list($this->input->post('designname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$designname .= $result[$i]->designname.",";
		}
		echo $designname = substr($designname, 0, -1);
	}

	


}
?>