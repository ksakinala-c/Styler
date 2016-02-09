<?php
class Fit extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('fit_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		         
				'fitname'      => '',
				'brandid'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_fit') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['fitname']       = "trim|required";
			//$rules['colourcode']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['fitname']       = "Fit Name";
			//$fields['colourcode']       = "colour code";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->fit_model->is_fit_already_exist_add($this->input->post('fitname'),$this->input->post('brandid')))
					{
						if($response = $this->fit_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Fit Added Successfully!!!');
							redirect($this->config->item('base_url').'fit/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Fit already exist!';
					}
			}
		}
		$data['allbrand']=$this->fit_model->allbrand();
 		$this->load->view('add_fit',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'fit/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['fitname'] = $this->input->post('fitname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->fit_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_fit',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->fit_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'fitname' => $result[0]->fitname,
						'brandid' => $result[0]->brandid,
						 
					);

			if($this->input->post('action') == 'edit_fit') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['fitname']       = "trim|required";
				 
				$this->validation->set_rules($rules);
				$fields['fitname']       = "Fit Name";
				 

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
					if(!$this->fit_model->is_fit_already_exist($this->input->post('fitname'),$this->input->post('brandid'),$ccid))
					{
								if($response = $this->fit_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Fit Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'fit/lists');
								} 
							    else 
					            {
								$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					            }
					}
					 else
					 {
						$data['L_strErrorMessage'] = 'Fit already exist!';
					  }
				}
			}
			$data['allbrand']=$this->fit_model->allbrand();
			$this->load->view('edit_fit',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Brand !!!!');
			redirect($this->config->item('base_url').'fit/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->fit_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Fit Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'fit/lists');
  
	}
	
 


	function ajaxlist_fit()
	{
		//echo 11;exit;
		$fitname = "";
		$result = $this->fit_model->fit_list($this->input->post('fitname'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$fitname .= $result[$i]->fitname.",";
		}
		echo $fitname = substr($fitname, 0, -1);
	}
}