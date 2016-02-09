<?php
class Cms extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('cms_model');
	}

	function add()
	{
		$L_strErrorMessage='';
		$form_field = $data = array(
			'title' => '',
			'content' => '',
			
		);

		if($this->input->post('action') == 'add_cms') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['title'] = "trim|required";
			$rules['content'] = "trim|required";
			
			
			$this->validation->set_rules($rules);
			$fields['title'] = "Title";
			$fields['content'] = "content";
			
		
			$this->validation->set_fields($fields);
			
			if(!$this->cms_model->is_cms_already_exist_add($this->input->post('title')))
			{
					if($response = $this->cms_model->add($data))
					{
						$this->session->set_flashdata('L_strErrorMessage','Cms Added Succcessfully!!!!');
									redirect($this->config->item('base_url').'cms/lists');

					
					}
					else 
					{
						echo "<script>alert('Cms is not successfull')</sctipt>";
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						redirect($this->config->item('base_url'));
					}
			}
			else
			{	
					$data['L_strErrorMessage'] = 'Cms already exist!';
			}
		}
		 
		
		$this->load->view('add_cms',$data);
	}


    function edit($id)
	{	


if(is_numeric($id)) {
			$result = $this->cms_model->get_cms($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'title' => $result[0]->title,
						'content'   => $result[0]->content,
			
 					);

			if($this->input->post('action') == 'edit_content') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['title']       = "trim|required";
				$rules['content']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['title']       = "Title";
				$fields['content']       = "Title";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{

					
					if(!$this->cms_model->is_cms_already_exist($this->input->post('title'),$id))
					{
								if($response = $this->cms_model->edit($id, $form_field)) 
								{
									$this->session->set_flashdata('L_strErrorMessage','Cms Updated Succcessfully!!!!');
									redirect($this->config->item('base_url').'cms/lists');

								}
								else 
								{
									$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
								}
					}
					else
					{
						$data['L_strErrorMessage'] = 'Cms already exist!';
					}

				}
			}
			$data['allcms'] = $this->cms_model->allcms();
			$this->load->view('edit_cms',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'cms/lists');
		}


		/*if(is_numeric($id)){
			$result = $this->cms_model->get_cms($id);
			$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'title' =>  $result[0]->title,
					    'content' => $result[0]->content,
						);
				
			if($this->input->post('action') == 'edit_content') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['title']       = "trim|required";
			$rules['content'] = "trim|required";
			
			
			$this->validation->set_rules($rules);
			$fields['title']       = "Title Name";
		     $fields['content'] = "Description";
		
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;

				} else {
					
						if($response = $this->cms_model->edit($id, $form_field)) {
						
				
							$this->session->set_flashdata('L_strErrorMessage','Cms Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'cms/lists');
						} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}
				}
			}
 
			$data['allcms'] = $this->cms_model->allcms();
			$this->load->view('edit_cms',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'cms/lists');
		}*/
	}



	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'cms/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['title'] = $this->input->post('title');
		$per_page = '1';
		$perpage = '3';
		$return = $this->cms_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('cms', $data);
	}
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->cms_model->deletes($selCheck)) 
				{
					$this->session->set_flashdata('flashError','Cms Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'cms/lists');
	}

	function ajaxlist_cms()
	{
		//echo 11;die;
		$cms = "";
		$result = $this->cms_model->cms_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$cms .= $result[$i]->title.",";
		}
		echo $cms = substr($cms, 0, -1);
	}
}