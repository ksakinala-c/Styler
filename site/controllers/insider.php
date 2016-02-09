<?php
class Insider extends Controller 
{
	function login()
	{
	 
		$this->load->model('insider_model');
		$this->load->model('home_model');
		
		
		if($this->session->userdata('userid') != "")
		{
			redirect($this->config->item('base_url'));
		}
		else
			{	
			$data = array();
			foreach($_POST as $key => $value)  
			{	
					$data[$key]=$this->input->post($key);
			}
			$content['email'] = $data['email'];
			$content['password'] = $data['password'];
	  
			if($this->input->post("action")=="login")
				{
					$data['email'] = $this->input->post('email');
					$data['login'] = $this->insider_model->login($content); 
					if($data['login'] == '')
					{	
 						$data['err_msg'] = "";
						$data['is_activate'] = $this->insider_model->is_active_login($content); 
						if($data['is_activate'] != ''){
							$data['L_strErrorMessage'] = "Your account is not activated. Please activate your account from activation mail sent to you. <a onclick='mailsentactivate(".$data['is_activate']->id.");' href='javascript:void(0); '>Resend Activation Mail</a>";
						} else { 
							$data['L_strErrorMessage'] = "Your password is wrong.!!";
						}
						//$data['allcategory'] = $this->home_model->allcategory();
						//$data['listsubcategory']= $this->home_model->listsubcategory($this->input->get('cat')); 
						$data['title'] = 'Stylior.com';
						$data['keywords'] = '';
						$data['description'] = '';
						$this->load->view('ilogin',$data);
						
					} else 
					{
						
						$userdata = $data['login'];
						$this->load->library('session');
						
						$newuserdata = array(
						   'username'  => $userdata->username,
						   'userid'    => $userdata->id,
						   'email'     => $userdata->email,
						   'insider'     => $userdata->insider,
						   'logged_in' => true
						);
						 
 						
 						$check = $this->session->set_userdata($newuserdata);
						 
						
						if($this->cart->total_items() > 0) {
							redirect($this->config->item('base_url').'home/checkout', 'location');
						} else {
							 //redirect($this->config->item('base_url').'account');
							 $url = $this->input->post('returnurl');
						     if( $url == '') {
								redirect($url,'location');
							 } else {
								redirect($this->config->item('base_url').'account', 'location');
							 }
						}
					}

				 }
			}
	}
	

	function logout()
	    {
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect($this->config->item('base_url'), 'location');
	    }

	function registration()
	{
		$base_url = $this->config->item('base_url');
		$data['L_strErrorMessage'] = '';
 		
		$this->load->model('insider_model');
		$this->load->model('home_model');
		
		foreach($_POST as $key => $value)  
		{	
			$data[$key]=$this->input->post($key);
		}

		$content['reg_username']  = $data['reg_username'];
		$content['reg_email']	  = $data['reg_email'];
		$content['reg_password']  = $data['reg_password'];
		$content['reg_password2'] = $data['reg_password2'];
		$content['reg_mobileno']  = $data['reg_mobileno'];
		$content['dob'] = $data['year'].'-'.$data['month'].'-'.$data['day'];
		$content['gender'] = $data['gender'];
		$content['insider'] = '1';
		if($data['ref_id'] !=""){
			$content['ref_id'] = $data['ref_id'];
		} else {
			$content['ref_id']  = "0";
		}
		//$content['dob'] = $data['dob'];

		$alreadyexists = $this->insider_model->checkvalidemail($content);
		if($alreadyexists != ''){
			//$data['allcategory'] = $this->home_model->allcategory();
			//$data['allproducts'] = $this->home_model->allproducts();
			$data['L_strErrorMessage'] = "Email Id already Exists !";
			$this->load->view('iregistration',$data);
		}
		else
		{
			if($this->input->post("action")=="registration")
			{
				$id = $this->insider_model->adduser($content);
				//$userdata = $this->insider_model->userdata($id);
				$this->load->library('session');
				/* $newuserdata = array(
					   'username'  => $userdata->username,
					   'userid'    => $userdata->id,
					   'email'     => $userdata->email,
					    'insider'     => '1',
					   'logged_in' => true
				); */
				//print_r($newuserdata);die;
				$email = $this->input->post('reg_email');
				//$check = $this->session->set_userdata($newuserdata);
				$format = $this->insider_model->getusermail();
				$message= $format[0]->insreg;
				$mysub = $format[0]->insregsub;
				$sub = str_replace('{FirstName}',$this->input->post('reg_username'),$mysub);  
				 
				$message = str_replace('{Name}',$this->input->post('reg_username'),$message);
				$message = str_replace('{Email}',$this->input->post('reg_email'),$message);
				$message = str_replace('{passsword}',$this->input->post('reg_password'),$message);
					$url = $base_url.'insider/activateac/'.$id;
				$message = str_replace('{userlink}','<a href="'.$url.'">ACTIVATE</a>',$message); 
			
			
				/*$message = '<div style="width:700px; height:auto; margin:0 auto;">
				 
				<p>Dear '.$this->input->post('reg_username').' </p>
			    <p>Congratulations! You have successfully created your Insider account with stylior private limited .</p>
			    <p>Your Login Details as below: </p>

				<table><tr>
				<td>Name:</td><td>'.$this->input->post('reg_username').'</td></tr>
				<tr><td>Email:</td><td>'.$this->input->post('reg_email').'</td></tr>
				<tr><td>Passoword:</td><td>'.$this->input->post('reg_password').'</td>
			    </tr></table>
				 
				<p>Now you are a registered user of stylior private limited . As a registered user you can now enjoy a personalized shopping experience, including great discounts and faster checkout process. As you are our valued customer you will be informed about good discounts and new arrival products time to time.</p>

				<p>If you have any question get in touch with customer care team:</p>
				<div background:#1a76b9; border-radius:7px; font-size:16px; text-align:center; width:250px; padding:20px; margin:40px auto 0; border:1px solid #000000;>
				stylior private limited.
				</div>
				 
				</div>
				';
				*/
				//echo $message;die;
				//$to = $this->input->post('txtemail'); 
				$subject  = $sub;  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				 
 				mail($email, $subject, $message, $headers);   
				//mail('patelnikul321@gmail.com,'.$this->input->post('reg_email'), $subject, $message, $headers);
				
				if($this->cart->total_items() > 0) {
					redirect($this->config->item('base_url').'home/checkout', 'location');
				} else {
					$this->session->set_flashdata('item1','Thanks for register with Stylior.com. Verification mail has been sent to your email id to activate your account.');
					redirect($this->config->item('base_url').'home/iregistration');
					//redirect($this->config->item('base_url').'account');
				}


			}
		}
	}
	
	function invite(){

		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}

		$this->load->model('account_model');
		$data['err_msg']='';
		$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("invite.php",$data);
	}
	function insider_dash(){
		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}

		$this->load->model('account_model');
		$this->load->model('home_model');
		$data['err_msg']='';
		$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("insiderdashboard.php",$data);
	}

	function invites()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = ''; 
		$url=$this->config->item('base_url').'home/registration/'.$this->session->userdata('userid');
		 
		if($this->input->post('action') == 'inviters') 
		{
			$email = $this->input->post('email');
			 $email1=explode (',',$email);
			 //print_r($email1);die;
				if($email1 != '' && count($email1) > 0) {
				foreach($email1 as $sendmail)
				{ 
				//print_r($sendmail);die;
				$message = '<div style="width:600px; height:auto; margin:0 auto;text-algin:center;">										 
					<p style="text-align:center;">Dear, User</p>
					<p style="text-align:center;">Please complete the registration process by clicking on the link below.</p>
					<p>&nbsp;</p>
					<p style="text-align:center;"><a style="padding:10px; border:1px solid #000;" href='.$url.' target="_blank">Click Here to Register</a></p><p>&nbsp;</p>
					
					</div>
					';
					//echo $message;die;
				$to = $sendmail;
				$subject  = 'Invitation From Stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.in>' . "\r\n" .
							'Reply-To: stylior@gmail.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				//$headers .= 'Cc: info@ollobra.com' . "\r\n";
				mail($to, $subject, $message, $headers);
				//mail('amvisolution@gmail.com', $subject, $message, $headers);	
				}
				}
		}
		
			$this->session->set_flashdata('msg_name', 'Invitation Send Successfully.');
			redirect($this->config->item('base_url').'insider/invite', 'location');
	}

	function topic(){
		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}

				$this->load->library('session');
				$this->load->library('validation');
				$this->load->model('account_model');
				$this->load->model('insider_model');
				 
				  $data = array(
				'L_strErrorMessage' => '',
					'topicname' => '',
					 
				);
				if($this->input->post('action') == 'add_topic') {
				foreach($data as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					

					$rules['topicname']       = "trim|required";
					 
					
					$this->validation->set_rules($rules);
					$fields['topicname']       = "Topic Name";
					 
					$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($response = $this->insider_model->add_newtopic($data))
					{
						$this->session->set_flashdata('msg_name','Topic Added Succcessfully!!!!');
						$data['alltopic'] = $this->insider_model->alltopic();
						redirect($this->config->item('base_url').'insider/topic');
					}
					else 
					{
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		$data['err_msg'] = '';
		$data['allcategory'] = $this->account_model->allcategory();
		$data['alltopic'] = $this->insider_model->alltopic();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('topic.php',$data);
	}

	function referrals(){
		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}

		$this->load->model('insider_model');
		$data['err_msg']='';
		$id=$this->session->userdata('userid');
		//echo$id;die;
		//$data['allcategory'] = $this->account_model->allcategory();
		//$data['userorder'] = $this->account_model->userorder($this->session->userdata('userid'));
		$data['allinviters'] = $this->insider_model->allinviters($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("referrals.php",$data);
	} 

	function message($topicid){
		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}
		//echo $topicid;die;
				$this->load->library('session');
				$this->load->library('validation');
				$this->load->model('account_model');
				$this->load->model('insider_model');
				 
				  $data = array(
				'L_strErrorMessage' => '',
					'message' => '',
					 
				);
				if($this->input->post('action') == 'add_message') {
				foreach($data as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					

					$rules['message']       = "trim|required";
					 
					
					$this->validation->set_rules($rules);
					$fields['message']       = "Message";
					 
					$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($response = $this->insider_model->add_message($data,$topicid))
					{
						$this->session->set_flashdata('msg_name','Message Send Succcessfully.!!');
						redirect($this->config->item('base_url').'insider/message/'.$topicid.'');
					}
					else 
					{
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		$data['err_msg'] = '';
		$data['allcategory'] = $this->account_model->allcategory();
		$data['allmessage'] = $this->insider_model->allmessage($topicid);
		$this->load->view('message.php',$data);
	}
	
	function activateac($id){
	 
		$this->load->model('insider_model');
		$this->load->model('home_model');
		$userstatust = $this->insider_model->checkuserstatus($id);
		//print_r($userstatust);die;
		if($userstatust->enable == "1"){  
				$this->session->set_flashdata('accountitem','Your Account Already Activated.!!');
				redirect($this->config->item('base_url').'account');
		} else {
		if($id!="") 
		{
			if($newuserdata=$this->insider_model->activateac($id)) 
			{
				$response = $this->insider_model->get_check_login($id); 
				$newuserdata = array( 
							    'username'  => $response->username,
							   'userid'    => $response->id,
							   'email'     => $response->email,
							   'insider'     => $response->insider,
							   'logged_in' => true
								   
							);
							$this->session->set_userdata($newuserdata);
							//$adminId = $this->session->userdata("adminId");
							
				$this->session->set_flashdata('msg1','your Account activated Successfully!!!!');
				redirect($this->config->item('base_url').'account/', 'location');

			} else {
					$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from activating account!!!!');
					break;
			}
		}
		}
	}
	
	function mailsentactivate($id){
				$base_url = $this->config->item('base_url');
				$this->load->model('insider_model');
			    $userdetails = $this->insider_model->userdetails($id);
				$email = $userdetails->email;
				//$check = $this->session->set_userdata($newuserdata);
				$format = $this->insider_model->getusermail();
				$message= $format[0]->insreg;
				$mysub= $format[0]->insregsub;
				$sub = str_replace('{FirstName}', $userdetails->username,$mysub);  
					
				 
				$message = str_replace('{Name}',$userdetails->username,$message);
				$message = str_replace('{Email}',$userdetails->email,$message);
				$message = str_replace('{passsword}',$userdetails->password,$message);
				$url = $base_url.'insider/activateac/'.$id;
				$message = str_replace('{userlink}','<a href="'.$url.'">ACTIVATE</a>',$message);
				 
				//echo $message;die;
				//$to = $this->input->post('txtemail'); 
				$subject  = $sub;  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				 
 			 	mail($email, $subject, $message, $headers);   
				//mail('patelnikul321@gmail.com', $subject, $message, $headers);
				echo "1";
	}
	

	
}
