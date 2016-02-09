<?php
class Topics extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('topics_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'topicname'      => '',
				'userid'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_topics') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['topicname']       = "trim|required";
			

			$this->validation->set_rules($rules);
			$fields['topicname']       = "Topic Name";
			

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if(!$this->topics_model->is_colour_already_exist_add($this->input->post('topicname')))
					{
						if($response = $this->topics_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Topic Added Successfully!!!');
							redirect($this->config->item('base_url').'topics/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Topic already exist!';
					}
			}
		}
		$data['topic_user'] = $this->topics_model->topic_user();
 		$this->load->view('add_insider',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'topics/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['topicname'] = $this->input->post('topicname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->topics_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_topics',$data);
	}
	function list_message($id)
	{
		if($this->input->post('action')=="insertmessage") {
			$data['adminmessage']=$this->input->post('adminmessage');
			$data['userid']=$this->input->post('userid');
			if($response = $this->topics_model->addmessage($data)) {
			
				$this->session->set_flashdata('new','Message Added Successfully!!!');
				redirect($this->config->item('base_url').'topics/list_message/'.$this->session->userdata('topicid'));
			}
		}
		$this->load->library('pagination');
		$this->load->library('session');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'topics/list_message/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['topicname'] = $this->input->post('topicname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->topics_model->list_message($config['per_page'],$this->uri->segment(3), $data,$id);
		$data['topicmessagelist'] = $return['result'];
		//print_r($data['topicmessagelist']);
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->session->set_userdata('topicid',$id);
		$this->session->userdata('topicid');
		$this->load->view('list_topicsmessage',$data);
	}
	
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->topics_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'topicname' => $result[0]->topicname,
						'userid' => $result[0]->userid,
					);

			if($this->input->post('action') == 'edit_colour') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['topicname']       = "trim|required";
				
				$this->validation->set_rules($rules);
				$fields['topicname']       = "Topic Name";
			

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
					if(!$this->topics_model->is_colour_already_exist($this->input->post('topicname'),$ccid))
					{
								if($response = $this->topics_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Topic Updated Successfully!!!!');
								  redirect($this->config->item('base_url').'topics/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Topic already exist!';
					  }
				}
			}
			
			$this->load->view('edit_colour',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Topic !!!!');
			redirect($this->config->item('base_url').'topics/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->topics_model->deletes($selCheck)) {
					$this->session->set_flashdata('L_strErrorMessage','Topic Deleted Successfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'topics/lists');
  
	}
	
	function mdeletes($id)
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->topics_model->mdeletes($selCheck)) {
					$this->session->set_flashdata('msg','Message Deleted Successfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'topics/list_message/'.$id);
  
	}
 


	function ajaxlist_colour()
	{
		//echo 11;exit;
		$topics = "";
		$result = $this->topics_model->colour_list($this->input->post('topicname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$topics .= $result[$i]->topicname.",";
		}
		echo $topics = substr($topics, 0, -1);
	}

	


}
