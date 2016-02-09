<?php
class appointment_time extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('appointment_time_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',			
			'time_of_day'     => '',
			'start_time'     => '',
			'end_time'     => '',
			'status'     => '',
  		);
		$data['hoursRange']=$this->appointment_time_model->hoursRange();
		$data['dayTimes']=$this->appointment_time_model->getDayTimes();
		if(!isPageRefresh() || $this->input->post('action') == 'add_appointmentTime') {
			foreach($form_field as $key => $value)	{
				$data[$key]=$this->input->post($key);	
			
			}

			$this->load->library('validation');
			$rules['time_of_day']  = "trim|required";
			$rules['start_time']  = "trim|required";

			$this->validation->set_rules($rules);
			$fields['time_of_day']  = "Time of Day";
			$fields['start_time']  = "Time";
			//$fields['price']  = "Price";
			

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					if($response = $this->appointment_time_model->add($data)) {
						$this->session->set_flashdata('L_strErrorMessage','Record Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'appointment_time/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		
 		$this->load->view('add_appointment_time',$data);
	}
	
	 

	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'appointment_time/lists/';
		$config['per_page'] = '15';
		$return = $this->appointment_time_model->lists($config['per_page'],$this->uri->segment(3), $this->input->post('searchTxtName'));
		$data['result'] = $return['result'];
		$data['hoursRange']=$this->appointment_time_model->hoursRange();
		$data['dayTimes']=$this->appointment_time_model->getDayTimes();
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('appointment_time_view', $data);
	}


	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->appointment_time_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'time_of_day' => $result[0]->time_of_day,
						'start_time' => $result[0]->start_time,						
					);
			$data['hoursRange']=$this->appointment_time_model->hoursRange();
			$data['dayTimes']=$this->appointment_time_model->getDayTimes();
			if($this->input->post('action') == 'edit_appointment_time') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
			
				$this->load->library('validation');
				$rules['time_of_day']  = "trim|required";
				$rules['start_time']  = "trim|required";
				

				$this->validation->set_rules($rules);
				$fields['time_of_day']  = "Time of Day";
				$fields['start_time']  = "Time";
			
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} else {
					 
					if($response = $this->appointment_time_model->edit($id, $form_field)) {
						$this->session->set_flashdata('L_strErrorMessage','Record Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'appointment_time/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
			
 			$this->load->view('edit_appointment_time',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'appointment_time/lists');
		}
	}

	function deletes()
	{
		//echo "test";exit;
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			if($this->appointment_time_model->deletes($selCheck)) {
				$this->session->set_flashdata('L_strErrorMessage','Record Deleted Succcessfully!!!!');
			} else {
				$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from Deleting!!!!');
				break;
			}
		}
		}
		redirect($this->config->item('base_url').'appointment_time/lists');
  
	}

	
 
}
