<?php
class Fonts extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('fonts_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'fontname'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_fonts') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['fontname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['fontname']       = "Font Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->fonts_model->is_fonts_already_exist_add($this->input->post('fontname')))
					{
						if($response = $this->fonts_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Font Added Successfully!!!');
							redirect($this->config->item('base_url').'fonts/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Font already exist.!!';
					}
			}
		}
 		$this->load->view('add_fonts',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'fonts/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['fontname'] = $this->input->post('fontname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->fonts_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_fonts',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->fonts_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'fontname' => $result[0]->fontname,
					);

			if($this->input->post('action') == 'edit_fonts') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['fontname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['fontname']       = "Font Name";

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
					if(!$this->fonts_model->is_fonts_already_exist($this->input->post('fontname')))
					{
								if($response = $this->fonts_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Font Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'fonts/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					 }
					 else
					 {
						$data['L_strErrorMessage'] = 'Font already exist.!!';
					  }
				}
			}
			
			$this->load->view('edit_fonts',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'fonts/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->fonts_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Font Deleted Succcessfully.!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'fonts/lists');
  
	}
	
 


	function ajaxlist_fonts()
	{
		//echo 11;exit;
		$fontname = "";
		$result = $this->fonts_model->fonts_list($this->input->post('fontname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$fontname .= $result[$i]->fontname.",";
		}
		echo $fontname = substr($fontname, 0, -1);
	}

	


}
?>