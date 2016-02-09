<?php
class Affiliate extends Controller 
{
	function login()
	{
	 
		$this->load->model('affiliate_model');
		$this->load->model('home_model');
		$this->load->model('user_model');
		
		
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
					$data['login'] = $this->affiliate_model->login($content); 
					if($data['login'] == '')
					{	
					  
						$data['err_msg'] = "";
						$data['is_activate'] = $this->affiliate_model->is_active_login($content); 
						if($data['is_activate'] != ''){
							$data['L_strErrorMessage'] = "Your account is not activated. Please activate your account from activation mail sent to you. <a onclick='mailsentactivate(".$data['is_activate']->id.");' href='javascript:void(0); '>Resend Activation Mail</a>";
						} else { 
							$data['L_strErrorMessage'] = "Your password is wrong.!!";
						}
						//$data['allcategory'] = $this->home_model->allcategory();
						$data['listsubcategory']= $this->home_model->listsubcategory($this->input->get('cat')); 
						$data['title'] = 'Stylior.com';
						$data['keywords'] = '';
						$data['description'] = '';
						$this->load->view('alogin',$data);
						
					} else 
					{
						
						$userdata = $data['login'];
						$this->load->library('session');
						
						$newuserdata = array(
						   'username'  => $userdata->username,
						   'userid'    => $userdata->id,
						   'email'     => $userdata->email,
						   'affiliate'     => $userdata->affiliate,
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
 		
		$this->load->model('affiliate_model');
		$this->load->model('home_model');
		
		foreach($_POST as $key => $value)  
		{	
			$data[$key]=$this->input->post($key);
		}

		$content['reg_username']  = $data['reg_username'];
		$content['reg_email']	  = $data['reg_email'];
		$content['reg_password']  = $data['reg_password'];
		$content['reg_password2'] = $data['reg_password2'];
		$content['reg_mobileno'] = $data['reg_mobileno'];
		$content['affliate'] = '1';
		if($data['ref_id'] !=""){
			$content['ref_id'] = $data['ref_id'];
		} else {
			$content['ref_id']  = "0";
		}
		$content['dob'] = $data['year'].'-'.$data['month'].'-'.$data['day'];
		$content['gender'] = $data['gender'];
		$content['ccode'] = $data['ccode'];
		 
		$content['company']  = $data['company'];
		$content['website']	  = $data['website'];
		$content['cid']  = $data['cid'];
		$content['city'] = $data['city'];
		$content['state'] = $data['state'];
		$content['address'] = $data['address'];
		
		$content['paymentmethod'] = $data['paymentmethod'];
		$content['chq_payee_name'] = $data['chq_payee_name'];
		$content['paypal_payee_name'] = $data['paypal_payee_name'];
		$content['bank_name'] = $data['bank_name'];
		$content['abs_bsb_number'] = $data['abs_bsb_number'];
		$content['swift_code'] = $data['swift_code'];
		$content['account_name'] = $data['account_name'];
		$content['account_number'] = $data['account_number'];

		$alreadyexists = $this->affiliate_model->checkvalidemail($content);
		if($alreadyexists != ''){
			$data['countrycode'] = $this->affiliate_model->getccode(); 
			$data['L_strErrorMessage'] = "Email Id already Exists.!!";
			$this->load->view('aregistration',$data);
		}
		else
		{
			if($this->input->post("action")=="registration")
			{
				$vcode = $this->affiliate_model->newgetcode();
				$id = $this->affiliate_model->adduser($content,$vcode);
				//$userdata = $this->affiliate_model->userdata($id);
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
				$format = $this->affiliate_model->getusermail();
				$message = $format[0]->affreg;
				$mysub = $format[0]->affregsub;
				$sub = str_replace('{FirstName}',$this->input->post('reg_username'),$mysub);  
				 
				$message = str_replace('{Name}',$this->input->post('reg_username'),$message);
				$message = str_replace('{Email}',$this->input->post('reg_email'),$message);
				$message = str_replace('{passsword}',$this->input->post('reg_password'),$message);
					$url = $base_url.'affiliate/activateac/'.$id;
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
				$subject  = $sub ;  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				 
 			//	mail($email, $subject, $message, $headers);   
				mail('info@stylior.com,'.$this->input->post('reg_email'), $subject, $message, $headers);
			//	mail('amvisolution@gmail.com,'.$this->input->post('reg_email'), $subject, $message, $headers);
				
				if($this->cart->total_items() > 0) {
					redirect($this->config->item('base_url').'home/checkout', 'location');
				} else {
					$this->session->set_flashdata('item1','Thanks for Affiliate register with Stylior.com .Verification mail has been sent to your email id to activate your account.');
					redirect($this->config->item('base_url').'home/aregistration');
					//redirect($this->config->item('base_url').'account');
				}


			}
		}
	}
	
	
	
	function activateac($id){
		//echo $id;die;
		$this->load->model('affiliate_model');
		$this->load->model('home_model');
		$userstatust = $this->affiliate_model->checkuserstatus($id);
		//print_r($userstatust);die;
		if($userstatust->enable == "1"){  
				$this->session->set_flashdata('accountitem','Your Account Already Activated.!!');
				redirect($this->config->item('base_url').'account');
		} else {
		if($id!="") 
		{
			if($newuserdata=$this->affiliate_model->activateac($id)) 
			{
				$response = $this->affiliate_model->get_check_login($id); 
				$newuserdata = array( 
							    'username'  => $response->username,
							   'userid'    => $response->id,
							   'email'     => $response->email,
							   'affiliate'     => $response->affiliate,
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

	function affiliate_dash(){
		$this->load->model('account_model');
		$this->load->model('home_model');
		$data['err_msg']='';
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("affiliate_dashboard.php",$data);
	}
	
	function tracking(){
		$this->load->model('account_model');
		$this->load->model('home_model');
		$this->load->model('affiliate_model');
		
		$data['err_msg']='';
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		//$data['allafftheme'] = $this->affiliate_model->allafftheme();
		$data['giftcardtheme'] = $this->home_model->giftcard_theme();
		$data['affliatethemes'] = $this->home_model->affliate_themes();
		$this->load->view("affiliate_tracking.php",$data);
	}

	function referrals(){
		$this->load->model('affiliate_model');
		$data['err_msg']='';
		$id=$this->session->userdata('userid');
		$trackid = $this->affiliate_model->gettrackid($id);
		$data['allinviters'] = $this->affiliate_model->mytransaction($trackid);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("affiliate_referrals.php",$data);
	} 
	function mailsentactivate($id){
				$base_url = $this->config->item('base_url');
				$this->load->model('affiliate_model');
			    $userdetails = $this->affiliate_model->userdetails($id);
				$email = $userdetails->email;
				//$check = $this->session->set_userdata($newuserdata);
				$format = $this->affiliate_model->getusermail();
				$message= $format[0]->affreg;
				$mysub= $format[0]->affregsub;
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
