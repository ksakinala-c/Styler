<?php
class Placements extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('placements_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'pname'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_placements') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['pname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['pname']       = "Placement Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->placements_model->is_placements_already_exist_add($this->input->post('pname')))
					{
						if($response = $this->placements_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Placement Added Successfully!!!');
							redirect($this->config->item('base_url').'placements/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Placements already exist.!!';
					}
			}
		}
 		$this->load->view('add_placements',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'placements/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['pname'] = $this->input->post('pname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->placements_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_placements',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->placements_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'pname' => $result[0]->pname,
					);

			if($this->input->post('action') == 'edit_placements') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['pname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['pname']       = "Placements Name";

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
					if(!$this->placements_model->is_placements_already_exist($this->input->post('pname')))
					{
								if($response = $this->placements_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Placements Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'placements/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Placements already exist.!!';
					  }
				}
			}
			
			$this->load->view('edit_placements',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'placements/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->placements_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Placements Deleted Succcessfully.!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'placements/lists');
  
	}
	
 


	function ajaxlist_placements()
	{
		//echo 11;exit;
		$pname = "";
		$result = $this->placements_model->placements_list($this->input->post('pname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$pname .= $result[$i]->pname.",";
		}
		echo $pname = substr($pname, 0, -1);
	}

	


}
?>