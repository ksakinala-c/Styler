<?php
class Bsize extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('bsize_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'size'      => '',
				'fitid'      => '',
				'brandid'      => '',
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_bsize') {
			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
			$this->load->library('validation');
			$rules['size']       = "trim|required";
			//$rules['colourcode']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['size']       = "Size";
			//$fields['colourcode']       = "colour code";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->bsize_model->is_size_already_exist_add($this->input->post('size'),$this->input->post('fitid'),$this->input->post('brandid')))
					{
						if($response = $this->bsize_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Size Added Successfully!!!');
							redirect($this->config->item('base_url').'bsize/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Size already exist.!';
					}
			}
		}
		$data['allfit']=$this->bsize_model->allfit();
		$data['allbrand']=$this->bsize_model->allbrand();
 		$this->load->view('add_bsize',$data);
 	}
	
 	
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'bsize/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['size'] = $this->input->post('size');
		$per_page = '1';
		$perpage = '3';
		$return = $this->bsize_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_bsize',$data);
	}

		
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->bsize_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'size' => $result[0]->size,
						'fitid' => $result[0]->fitid,
						'brandid' => $result[0]->brandid,
						 
					);

			if($this->input->post('action') == 'edit_bsize') {
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
					if(!$this->bsize_model->is_size_already_exist($this->input->post('size'),$this->input->post('fitid'),$this->input->post('brandid'),$ccid))
					{
								if($response = $this->bsize_model->edit($id, $form_field)) 
								{
								  $this->session->set_flashdata('L_strErrorMessage','Size Updated Succcessfully!!!!');
								  redirect($this->config->item('base_url').'bsize/lists');
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
			$data['allbrand']=$this->bsize_model->allbrand();
			$data['allfit']=$this->bsize_model->allfit();
			$this->load->view('edit_bsize',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Brand !!!!');
			redirect($this->config->item('base_url').'bsize/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->bsize_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Size Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'bsize/lists');
  
	}
	
 


	function ajaxlist_size()
	{
		//echo 11;exit;
		$size = "";
		$result = $this->bsize_model->size_list($this->input->post('size'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$size .= $result[$i]->size.",";
		}
		echo $size = substr($size, 0, -1);
	}
	
	function show_fit()
		{
			$bid = $_POST['bid'];
			$data = $this->bsize_model->show_fit($bid);
			//print_r($data);exit;
			$html = "<select id='fitid'  class='form-control' name='fitid' >";
			$html .= "<option value=''>Select Fit</option>";
			if($data != ''){
			for($i=0;$i<count($data);$i++)
			{
				$html .= "<option value='".$data[$i]->id ."'>".$data[$i]->fitname ."</option>";
			}
			}
			$html .="</select>";
			echo $html;
		}
}