<?php
class User extends Controller 
{
	function login()
	{
 		$this->load->model('user_model');
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
			$productid = $this->session->userdata('cstyleid'); 
			$content['email'] = $data['email'];
			$content['password'] = $data['password'];
			
			if($this->input->post("action")=="login")
			{	
					
					$data['email'] = $this->input->post('email');
					$data['login'] = $this->user_model->login($content); 
					if($data['login'] == '')
					{	
						$data['err_msg'] = "";
						$data['is_activate'] = $this->user_model->is_active_login($content); 
						if($data['is_activate'] != ''){
							$data['L_strErrorMessage'] = "Your account is not activated. Please activate your account from activation mail sent to you. <a onclick='mailsentactivate(".$data['is_activate']->id.");' href='javascript:void(0); '>Resend Activation Mail</a>";
						} else { 
							$data['L_strErrorMessage'] = "Your password is wrong.!!";
						}
						if($data['uexisting'] !=""){
						$uexisting = $data['uexisting'];
						} else {
							$uexisting="";
						}
						if($uexisting == '1'){
							//$this->session->set_flashdata('newmsg', "Invalid E-mail or password");
							//redirect($this->config->item('base_url').'home/measurement/'.$productid,'location');
							//$data['listsubcategory']= $this->home_model->listsubcategory($this->input->get('cat')); 
							$data['productid'] = $productid;
							$this->load->view('loginmeasure',$data);
						} else {
						//$data['allcategory'] = $this->home_model->allcategory();
						//$data['listsubcategory']= $this->home_model->listsubcategory($this->input->get('cat')); 
						$data['title'] = 'Stylior.com';
						$data['keywords'] = '';
						$data['description'] = '';
						$this->load->view('login',$data);
						}
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
						$_SESSION['username'] = $userdata->username;
						$_SESSION['userid'] = $userdata->id;
						$_SESSION['email'] = $userdata->email;
						$_SESSION['insider'] = $userdata->insider;
						$_SESSION['logged_in'] = true; 
						
						$customize = $this->session->userdata('customize');
						
						$cartdata = $this->user_model->cartdata($_SESSION['userid']);
						if($cartdata != '' && count($cartdata) > 0) {
							foreach($cartdata as $cd){

								$optionarr = json_decode($cd->options);
								foreach($optionarr as $key=>$value) {
								    $optionarr1[$key] = $value;
								}
 
								$data['cartprod'] = array(
								   'id'      => $cd->pid,
								   'qty'     => $cd->qty,
								   'price'   => $cd->price, 
								   'name'    => $cd->pname,
								   'options' =>  $optionarr1
								);
								$this->cart->insert($data); 
							}
						}
						// redirecting to add cart function based on 3d data selection  -- MSYS009
						if(isset($_SESSION['selected3dInfo']) && !empty($_SESSION['selected3dInfo']))
						{// echo "hihi".$this->config->item('base_url');exit;
							redirect($this->config->item('base_url').'cart/addcart3d', 'location');
						}
						/*echo "<pre>";
						print_r($_SESSION['save3dInfo']);exit;*/
						// redirecting to save cart function based on 3d data selection  -- MSYS009
						if(isset($_SESSION['save3dInfo']) && !empty($_SESSION['save3dInfo']))
						{ //echo "hihi".$this->config->item('base_url');exit;
							redirect($this->config->item('base_url').'cart/save3d/', 'location');
						}
						if($customize != '' && $_SESSION['cust_fab_id']=='') {
							redirect($this->config->item('http_host').'/3dshirt?id='.$customize,'location');
						}
						if($_SESSION['customize'] == '1' && $_SESSION['cust_fab_id']!=''){
							redirect($this->config->item('http_host').'3dshirt/index.php?fab_id='.$_SESSION['cust_fab_id'],'location');
						}
						if($_SESSION['customize'] == '1'){
							redirect($this->config->item('http_host').'/3dshirt','location');
						}
   
						 if( $this->session->userdata('cstyleid') != '') {
							$cstyleid = $this->session->userdata('cstyleid');
							$prodid = $this->session->userdata('prodid');
							$subcat = $this->session->userdata('subcategory');

							redirect($this->config->item('base_url').'home/measurement/'.$cstyleid.'/'.$prodid.'/'.$subcat,'location');
							} else {
							
							if($this->cart->total_items() > 0){
								redirect($this->config->item('base_url').'cart/viewcart', 'location');
							} else {
								redirect($this->config->item('base_url').'', 'location');
							}
						 }
 
					}

				 }
			}
	}


	function ajaxlogin(){
	
		$this->load->model('user_model');
		$this->load->model('home_model');

		$content['email'] = $this->input->post('newemail');
		$content['password'] = $this->input->post('newpassword');
		$data['login'] = $this->user_model->ajaxlogin($content); 
		if($data['login'] == '')
		{
			echo "0";
			die;
		} else {
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

			$_SESSION['username'] = $userdata->username;
			$_SESSION['userid'] = $userdata->id;
			$_SESSION['email'] = $userdata->email;
			$_SESSION['insider'] = $userdata->insider;
			$_SESSION['logged_in'] = true;
			
			echo "1"; die;
		}
		exit();
	}

	function ajaxlogin_3d(){
	
		$this->load->model('user_model');
		$this->load->model('home_model');

		$content['email'] = $this->input->post('newemail');
		$content['password'] = $this->input->post('newpassword');
		$data['login'] = $this->user_model->ajaxlogin($content); 
		if($data['login'] == '')
		{
			echo "0";
			die;
		} else {
			$userdata = $data['login'];
			/*$this->load->library('session');
			
			$newuserdata = array(
			   'username'  => $userdata->username,
			   'userid'    => $userdata->id,
			   'email'     => $userdata->email,
			   'insider'     => $userdata->insider,
			   'logged_in' => true
			);
			
			$check = $this->session->set_userdata($newuserdata);*/
			$_SESSION['username'] =  $userdata->username;
			$_SESSION['userid'] =  $userdata->id;
			$_SESSION['email'] =  $userdata->email;
			$_SESSION['insider'] =  $userdata->insider;
			$_SESSION['logged_in'] =  true;
			echo "1"; die;
		}
		exit();
	}
	

	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect($this->config->item('base_url'), 'location');
	}
	function checkemail()
	{
		$this->load->model('user_model');
		$email = $this->input->post('email');
		//echo $email;
		$data = $this->user_model->checkemail($email);
		print_r ($data);
	 
		
	}
	

	function registration()
	{
		$base_url = $this->config->item('base_url');
		$data['L_strErrorMessage'] = '';
		$data['L_ErrorMessage'] = '';
 		$this->load->model('user_model');
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
		
		$content['dob'] = $data['year'].'-'.$data['month'].'-'.$data['day'];
		$content['gender'] = $data['gender'];
		if(isset($data['insider']) !=""){
		$content['insider'] = $data['insider'];
		} else {
				$content['insider'] = "0";
		}
		$content['ccode'] = $data['ccode'];

		/* if($data['productid'] == ''){
		if($data['ref_id'] !=""){
			$content['ref_id'] = $data['ref_id'];
		} else {
			$content['ref_id']  = "0";
		}
		} else {
			$content['ref_id']  = "0";
		} */
		if($data['productid'] != ''){
	 
			 
			$content['ref_id']  = $data['productid'] ;
		} else {
			$content['ref_id']  = "0";
		}
		
		
		//echo $content['ref_id'];die;
		//$content['gender'] = $data['gender'];
		//$content['dob'] = $data['dob'];

		$alreadyexists = $this->user_model->checkvalidemail($content);
		if($alreadyexists != ''){
			//$data['allcategory'] = $this->home_model->allcategory();
			//$data['allproducts'] = $this->home_model->allproducts();
			 
			$data['L_strErrorMessage'] = "Email Id already Exists.!!";
			$data['countrycode'] = $this->user_model->getccode();
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$this->load->view('registration',$data);
		}
		else
		{
			if($this->input->post("action")=="registration")
			{
				$id = $this->user_model->adduser($content);
				
				if($content['ref_id'] !=""){
					$refbonus = $this->user_model->getprebonus($content['ref_id']);
					$refamount = $this->user_model->getrefamount();
					$bonus = $refbonus + $refamount ;
					$this->user_model->updatebonus($bonus,$content['ref_id']);
					$this->user_model->add_transaction($refamount,$content['ref_id'],$id);
					
				}
				$userdata = $this->user_model->userdata($id);
				$this->load->library('session');
				/*$newuserdata = array(
					   'username'  => $userdata->username,
					   'userid'    => $userdata->id,
					   'email'     => $userdata->email,
					   'insider'     => '0',
					   'logged_in' => true
				);*/
				//print_r($newuserdata);die;
				$email = $this->input->post('reg_email');
				//$check = $this->session->set_userdata($newuserdata);
				$format = $this->user_model->getusermail();
				
				if(isset($data['insider']) == '1'){
					$message = $format[0]->insreg;
					$mysub = $format[0]->insregsub;
					$sub = str_replace('{FirstName}',$this->input->post('reg_username'),$mysub);  
				} else {
					$message = $format[0]->regemail;
					$mysub = $format[0]->regemailsub;
					$sub = str_replace('{FirstName}',$this->input->post('reg_username'),$mysub);  
				 
				} 
				$message = str_replace('/ckfinder','http://www.stylior.com/ckfinder',$message);
				$message = str_replace('{Name}',$this->input->post('reg_username'),$message);
				$message = str_replace('{Email}',$this->input->post('reg_email'),$message);
				$message = str_replace('{passsword}',$this->input->post('reg_password'),$message);
				
				if(isset($data['insider']) == '1'){
					$url = $base_url.'user/activateac/'.$id.'/'.$this->session->userdata('cstyleid');
					$message = str_replace('{userlink}','<a href="'.$url.'">ACTIVATE</a>',$message);
				}

				 
				//$to = $this->input->post('txtemail'); 
				$subject  =	$sub;  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				 
 			 	mail('patelnikul321@gmail.com', $subject, $message, $headers);   
				mail($this->input->post('reg_email'), $subject, $message, $headers);
				
				if($this->cart->total_items() > 0) {
					redirect($this->config->item('base_url').'home/checkout', 'location');
				} else {
					if($data['insider'] == '1'){
						$this->session->set_flashdata('item1','Thank you for registering with Stylior.com. Verification mail has been sent to your email id to activate your registered email address.');
						redirect($this->config->item('base_url').'home/registration');
					} else {
 						
						$newuserdata = array(
						   'username'  => $userdata->username,
						   'userid'    => $userdata->id,
						   'email'     => $userdata->email,
						   'insider'     => $userdata->insider,
						   'logged_in' => true
						);
 					
						$check = $this->session->set_userdata($newuserdata);
						$_SESSION['username'] = $userdata->username;
						$_SESSION['userid'] = $userdata->id;
						$_SESSION['email'] = $userdata->email;
						$_SESSION['insider'] = $userdata->insider;
						$_SESSION['logged_in'] = true; 

						redirect($this->config->item('base_url').'account/', 'location');
					}
					//redirect($this->config->item('base_url').'account');
				}


			}
		}
	}

	function mailsentactivate($id){
				$base_url = $this->config->item('base_url');
				$this->load->model('user_model');
			    $userdetails = $this->user_model->userdetails($id);
				$email = $userdetails->email;
				//$check = $this->session->set_userdata($newuserdata);
				$format = $this->user_model->getusermail();
				$message= $format[0]->regemail;
				 
				$message = str_replace('{Name}',$userdetails->username,$message);
				$message = str_replace('{Email}',$userdetails->email,$message);
				$message = str_replace('{passsword}',$userdetails->password,$message);
				$url = $base_url.'user/activateac/'.$id.'/'.$this->session->userdata('cstyleid');
				$message = str_replace('{userlink}','<a href="'.$url.'">ACTIVATE</a>',$message);
				 
				//echo $message;die;
				//$to = $this->input->post('txtemail'); 
				$subject  = 'Resend Activation Mail';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				 
 			 	mail($email, $subject, $message, $headers);   
				mail('patelnikul321@gmail.com', $subject, $message, $headers);
				echo "1";
	}
	
	function activateac($id , $styleid = ''){
	 
		$this->load->model('user_model');
		$this->load->model('home_model');
		$userstatust = $this->user_model->checkuserstatus($id);
		//print_r($userstatust);die;
		if($userstatust->enable == "1"){  
				$this->session->set_flashdata('accountitem','Your Account Already Activated.!!');
				redirect($this->config->item('base_url').'account');
		} else {

		if($id!="") 
		{
			if($newuserdata=$this->user_model->activateac($id)) 
			{
				$response = $this->user_model->get_check_login($id); 
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
				if($styleid != '') {
					redirect($this->config->item('base_url').'home/measurement/'.$styleid, 'location');
				} else {
					redirect($this->config->item('base_url').'account/', 'location');
				}
			} else {
					$this->session->set_flashdata('L_strErrorMessage','Some Errors prevented from activating account!!!!');
					break;
			}
		}
		}
	}
	function make()
	{
		$this->load->model('user_model');
		$this->load->model('home_model');
		$data = array(); 
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		
		//$data['allbanner'] = $this->home_model->allbanner();
		$this->load->view('make_in_or_aff.php',$data);
	}
	
	function own()
	{
		$this->load->model('user_model');
		if($this->input->post("action")=="login_own")
			{	
				$mystaus = $this->input->post('ownmake');
				$response = $this->user_model->updateuserstatusdata($mystaus); 
			}
		redirect($this->config->item('base_url').'account/', 'location');
 	}
	
	function thanks()
	{
		$this->load->view('registerthanks');
	}
}
