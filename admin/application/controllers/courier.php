<?php
class Courier extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('courier_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'cname'      => '',
				'curl'    =>'',
 		);
		
		//print_r($_POST);

		if(!isPageRefresh() || $this->input->post('action') == 'add_state')
		{
			foreach($form_field as $key => $value)	
			{	
				$data[$key]=$this->input->post($key);	
			}
			
			$this->load->library('validation');
			$rules['cname']       = "trim|required";

			$this->validation->set_rules($rules);
			$fields['cname']       = "Courier Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if(!$this->courier_model->is_courier_already_exist_add($this->input->post('cname')))
					{
						if($response = $this->courier_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Courier Added Successfully!!!!');
							redirect($this->config->item('base_url').'courier/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Courier already exist!';
					}
			}
		}
		
 		$this->load->view('add_courier',$data);
 	}
 	 
	 	
 	function lists()
	{
		$page=$this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination'); 	

		
		$url_to_paging = $this->config->item('base_url');
		$data['cname'] = $search =  $this->input->get('cname'); 
		$config['base_url'] = $url_to_paging.'courier/lists/?per_page='.$page.'&cname=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		
	 
		$return = $this->courier_model->lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;


		$this->pagination->initialize($config);
		$this->load->view('list_courier', $data);
		
	}

	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->courier_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'cname' => $result[0]->cname,
						'curl'   => $result[0]->curl,
			
 					);

			if($this->input->post('action') == 'edit_state') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['cname']       = "trim|required";
				$this->validation->set_rules($rules);
				$fields['cname']       = "courier Name";

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{

					
					if(!$this->courier_model->is_courier_already_exist($this->input->post('sname'),$id))
					{
								if($response = $this->courier_model->edit($id, $form_field)) 
								{
									$this->session->set_flashdata('L_strErrorMessage','Courier Updated Successfully!!!!');
									redirect($this->config->item('base_url').'courier/lists');

								}
								else 
								{
									$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
								}
					}
					else
					{
						$data['L_strErrorMessage'] = 'Courier already exist!';
					}

				}
			}
			
			$this->load->view('edit_courier',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'courier/lists');
		}
	}

	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
		foreach($_POST['selected'] as $selCheck) {
			if($this->courier_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Courier Deleted Successfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'courier/lists');
  
	}
	
	function show_state()
	{
		$cid = $_POST['cid'];
		$data = $this->courier_model->show_state($cid);
		$html = "<select id='sid' name='sid'>";
		$html .= "<option value=''>Select courier</option>";
		for($i=0;$i<count($data);$i++)
		{
			$html .= "<option value='".$data[$i]->sid ."'>".$data[$i]->sname ."</option>";
		}
		$html .="</select>";
		echo $html;
	}

	function ajaxlist_state()
	{
		$courier = "";
		$result = $this->courier_model->state_list();
		for($i=0;$i<count($result);$i++)
		{
			$courier .= $result[$i]->sname.",";
		}
		echo $courier = substr($courier, 0, -1);
	}
 
}
?>