<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	function index()
	{
		$this->load->library('session');
		$data	=	array(
						'eamil'=> '',
						'L_strErrorMessage'=> '',
						'success'=> '',
						'password'=>'',
					);
		if($this->session->userdata('adminId') !='') {
			redirect($this->config->item('base_url').'home');
		} else {
			$this->load->view('login', $data);
		}
	}
	
	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect($this->config->item('base_url'));
	}
 
	function login()
	{
 		$this->load->library('session');
		$this->load->library('validation');
		if($this->input->post("action")=="login") 
		{
			$form_field	=	array(
							'txtUserName'=> '',
							'txtPassword'=>''
							);

			$rules['txtUserName'] =	"trim|required";
			$rules['txtPassword'] =	"trim|required";

			$this->validation->set_rules($rules);

			$fields['txtUserName'] = "Email";
			$fields['txtPassword'] = "Password";

			$this->validation->set_fields($fields);

				if($this->validation->run() == FALSE)
				{
					if($this->validation->error_string!='') 
					{
						foreach($form_field as $key => $value)	
						{	
							$data[$key]=$this->input->post($key);	
						}
					}
 					$data['L_strErrorMessage'] = $this->validation->error_string;
					$this->load->view('login',$data);
				} 
				else 
				{
					$this->load->model('admin');
					if($this->input->post("txtUserName")) 
					{
						$newdata = array(
								   'username'  => $this->input->post("txtUserName"),
								   'password'  => $this->input->post("txtPassword")
							   );
						$selUser = $this->input->post("selUser");	
						if($response = $this->admin->check_login($newdata)) 
						{ // for super admin
							$newdata = array(
											   'username' => $this->input->post("txtUserName"),
											   'adminId' => $response->id,
											   'usertype' => 'superadmin'
										   );
							$this->session->set_userdata($newdata);
							redirect($this->config->item('base_url').'home');
						} 
						else 
						{
							foreach($form_field as $key => $value)	
							{	
								$data[$key]=$this->input->post($key);	
							}
							$data['L_strErrorMessage'] = "Invalid UserID or password.";
							$this->load->view('login',$data);
						}
					 
				} 
				else 
				{
					$this->load->view('login',$data);
				}
			}
		 } 
		 else 
	     {
			redirect($this->config->item('base_url'));
		 }
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */