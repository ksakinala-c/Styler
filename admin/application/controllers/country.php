<?php
class Country extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('country_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'cname'      => '',
				'code'      => '',
 		);
		
		//print_r($_POST);

		if(!isPageRefresh() || $this->input->post('action') == 'add_country')
		{
			foreach($form_field as $key => $value)	
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['cname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['cname']       = "country Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if(!$this->country_model->is_country_already_exist_add($this->input->post('cname')))
					{
						
						
					
						if($response = $this->country_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Country Added Succcessfully!!!!');
							redirect($this->config->item('base_url').'country/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Country already exist!';
					}
			}
		}
 		$this->load->view('add_country',$data);
 	}
 	 
 	function lists()
	{
 		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');
		$data['cname'] = $search =  $this->input->get('cname'); 
		$config['base_url'] = $url_to_paging.'country/lists/?per_page='.$page.'&cname=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		
		$return = $this->country_model->lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		$this->load->view('list_country', $data);
		
	}


	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->country_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->cid,
						'cname' => $result[0]->cname,
						'code' => $result[0]->code	,
						

 					);

			if($this->input->post('action') == 'edit_country')
			{
				foreach($data as $key => $value)
				{  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['cname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['cname']       = "country Name";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{
						 $ccid=$id;
						if(!$this->country_model->is_country_already_exist($this->input->post('cname'),$ccid))
						{
					 	
								if($response = $this->country_model->edit($id, $form_field)) 
								{
									$this->session->set_flashdata('L_strErrorMessage','Country Updated Succcessfully!!!!');
									redirect($this->config->item('base_url').'country/lists');

								} 
								else 
								{
									$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
								}
						}
						else
						{
							$data['L_strErrorMessage'] = 'Country already exist!';
						}
				}
			}
			
			$this->load->view('edit_country',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'country/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0)
 {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->country_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Country Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'country/lists');
  
	}

	function ajaxlist_country()
	{
		$country = "";
		$result = $this->country_model->country_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$country .= $result[$i]->cname.",";
		}
		echo $country = substr($country, 0, -1);
	}
 
}
?>