<?php
class reguser extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		 
		$this->load->model('reguser_model');	
		//$this->load->model('category_model');
	}
	
		
 function add_reguser()
	{
		$form_field = $data = array
		
		(
			'L_strErrorMessage' => '',
		        'firstname'      => '',
				'lastname'      => '',
				'email'      => '',
				'username'      =>'',
				'password'      =>''
				
				 
			
 		);

		if(!isPageRefresh() || $this->input->post('action') == 'add_reguser')
			{
			foreach($form_field as $key => $value)
				{
				$data[$key]=$this->input->post($key);
				}
					$this->load->library('validation');
					$rules['firstname']  = "trim|required";
					$this->validation->set_rules($rules);
					$fields['firstname']  = "Firstname Name";
					$this->validation->set_fields($fields);
 
						if ($this->validation->run() == FALSE)
							{
							$data['L_strErrorMessage'] = $this->validation->error_string;
							}
							else
								 {
								 
								if(!$this->reguser_model->is_product_already_exist_add($this->input->post('email')))
									{
									if($response = $this->reguser_model->add($data))
										{
											$this->session->set_flashdata('L_strErrorMessage','User Added Successfully!!!');
											redirect($this->config->item('base_url').'reguser/lists');
 										 }
										else 
										{
										$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
										}
									}	
								else
									{
										$data['L_strErrorMessage'] = 'Email Id already exist.!!';
									}
			 }
		}
		
		//$data['allsubcategory'] = $this->product_model->show_category('1'); 
 
 		$this->load->view('add_reguser',$data);
 	}
	
	function download()
	{
	
		//print_r($pla);die;
		$output = '';
		$planning = $this->reguser_model->getuser();
		//$planning = $this->planning_model->getplan($id);
		//$output .= 'user-';
		//$output .= ''.$this->session->userdata('username').'';
		//$output .="\n";
		//$output .="\n";
		
 		$output .= 'First name, Last name, Email, Phone, Username, Password, Join date ';
		$output .="\n";
		// Get Records from the table
		if($planning != '' && count($planning) > 0) {
		foreach($planning as $planning) {
		 
		$output .= '"'.$planning->firstname.'","'.$planning->lastname.'","'.$planning->email.'","'.$planning->phone.'","'.$planning->username .'","'.$planning->password.'","'.$planning->joindate .'" ';  
		$output .="\n";
		}
	}

			// Download the file

		$filename = "User_reports.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		echo $output;
		exit;
		//print_r($data['planning']);die;
		//$this->load->view('download',$data);
	}
 	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'reguser/lists';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['email'] = $this->input->post('email');
		$per_page = '1';
		$perpage = '3';
		$return = $this->reguser_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		 
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_reguser',$data);
	}



	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->reguser_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Users Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'reguser/lists');
  
	}
	
 
function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->reguser_model->get($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'firstname'	=> $result[0]->firstname,
						'lastname'	=> $result[0]->lastname,
						'email'	=> $result[0]->email,
						'username'	=> $result[0]->username,
						'password'	=> $result[0]->password
						
						 
					);
					
			if($this->input->post('action') == 'edit_reguser') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
			
				$rules['firstname']       = "trim|required";

				$this->validation->set_rules($rules);
				
				$fields['firstname']    = "User Name";
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} else { 
				
					if($response = $this->reguser_model->edit($id, $form_field)) {
					 
						$this->session->set_flashdata('L_strErrorMessage','User Updated Succcessfully!!!!');
						redirect($this->config->item('base_url').'reguser/lists');

					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
			$this->load->view('edit_reguser',$data);
			//$data['allhotel']= $this->hotel_model->allhotel();
 			//$this->load->view('hotel_gallery',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'reguser/lists');
		}
	}


	function ajaxlist_product()
	{
		//echo 11;exit;
		$product = "";
		$result = $this->product_model->product_list($this->input->post('name'));
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$product .= $result[$i]->pname.",";
		}
		echo $product = substr($product, 0, -1);
	}

    function show_category()
		{
			$sid = $_POST['subcatid'];
			$data = $this->product_model->show_category($sid);
			
 			$html = "<select id='subcatid' name='subcatid' class='form-control jobtext'>";
			$html .= "<option value=''>Select Subcategory</option>";

			if($data != ''){
			for($i=0;$i<count($data);$i++)
			{
				$html .= "<option value='".$data[$i]->id ."'>".$data[$i]->scname ."</option>";
			}
			}
			$html .="</select>";
			echo $html;  
		}
	}
