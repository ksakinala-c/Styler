<?php
class Users extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
 
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('users_model');	
	}

	function add()
	{
		$form_field = $data = array(
			'L_strErrorMessage' => '',
		        'name' => '',
			    'login' => '',
				'password' => '',
				'email' => ' ',
				'enabled' => '',
				'category'      => '',
		);

			if(!isPageRefresh() || $this->input->post('action') == 'add_users') {
				foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					$this->load->library('validation');
					$rules['name']       = "trim|required";
					$rules['login']      = "trim|required";
					$rules['password']   = "trim|required";
					$rules['email']      = "trim|required";
					$rules['enabled']    = "trim|required";
					$this->validation->set_rules($rules);
					$fields['name']       = "Name";
					$fields['login']      = "Login";
					$fields['password']   = "Password";
					$fields['email']      = "Email";
					$fields['enabled']    = "Enable";
					$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
				
					if(!$this->users_model->is_users_already_exist_add($this->input->post('login'),$this->input->post('email')))
					{
						if($response = $this->users_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Users Added Succcessfully!!!!');
							redirect($this->config->item('base_url').'users/list_user');

						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'User already exist!';
					}
			}
		}
		$data['utype_list'] = $this->users_model->utype_list();
		
		$data['allusers'] = $this->users_model->allusers();
		$this->load->view('add_users',$data);
	}
	function edit($id)
	{
		if(is_numeric($id)) {
			$result = $this->users_model->get_user($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'name' =>  $result[0]->name,
						'login' =>  $result[0]->login,
						'password' => $result[0]->password,
						'email' => $result[0]->email,
						'enabled' => $result[0]->enabled,
						'category' => $result[0]->category,
						
					);

			if($this->input->post('action') == 'edit_users') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['name']       = "trim|required";
				$rules['email']      = "trim|required";
				$rules['password']   = "trim|required";
				$rules['enabled']    = "trim|required";
				$this->validation->set_rules($rules);
				$fields['name']       = "Name";
				$fields['email']      = "Email";
				$fields['password']   = "Password";
				$fields['enabled']    = "Enable";
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;

				} 
				else 
				{
					
					if(!$this->users_model->is_users_already_exist($this->input->post('login'),$this->input->post('email'),$id))
					{
						if($response = $this->users_model->edit($id, $form_field)) {
							$this->session->set_flashdata('L_strErrorMessage','User Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'users/list_user');

						} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}
					}
					else
					{
						$data['L_strErrorMessage'] = 'Username or Email already exist!';
					}
				}
			}
				$data['utype_list'] = $this->users_model->utype_list();
			$data['allusers'] = $this->users_model->allusers();
			$this->load->view('edit_users',$data);

		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'users/list_user');
		}
	}


	function list_user()
	{
       	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'users/list_user/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');

		$per_page = '1';
		$perpage = '3';
		$return = $this->users_model->list_user($config['per_page'],$this->uri->segment(3),$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);	
		$this->load->view('users', $data);
	}


	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) 
		{
	
			foreach($_POST['selected'] as $selCheck) 
			{
				//$this->users_model->admin_user($selCheck);
				///$adid=$this->session->userdata('username');
				//$rr=$data['created_by'];
				///echo $rr;die;
				

							if($this->users_model->deletes($selCheck)) {
								$this->session->set_flashdata('flashError','User Deleted Succcessfully!!!!');
							}  
							else 
							{
									$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
									break;
							}
			}
		}
		redirect($this->config->item('base_url').'users/list_user');
	}

function ajaxlist_users()
{
		//echo 11;die;
		$users = "";
		$result = $this->users_model->users_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$users .= $result[$i]->name.",";
		}
		echo $users = substr($users, 0, -1);
}

function ajaxlist_email()
{
		//echo 11;die;
		$users = "";
		$result = $this->users_model->users_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$users .= $result[$i]->email.",";
		}
		echo $users = substr($users, 0, -1);
}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */