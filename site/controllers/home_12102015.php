<?php
	class Home extends Controller
	{

	function Home()
	{
		parent::Controller();
	 	$this->load->model('home_model');
		$this->load->model('cart_model');
		$this->load->model('account_model');
		$this->load->model('user_model');
	}

	function index()
	{
		$data = array(); 
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		
		$data['allbanner'] = $this->home_model->allbanner();
		$this->load->view('index.php',$data);
	}
	
	function facebook(){
			require 'site/views/config.php';
			require 'site/views/facebook.php';


		if(isset($_GET['fbTrue']))
							{
							 
								$token_url = "https://graph.facebook.com/oauth/access_token?"
								   . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
								   . "&client_secret=".$config['App_Secret']."&code=" . $_GET['code']; 

								 $response = file_get_contents($token_url);
								 $params = null;
								 parse_str($response, $params);
								 $graph_url = "https://graph.facebook.com/me?access_token=". $params['access_token'];
								 $user = json_decode(file_get_contents($graph_url));
								 print_r($user);
 
 								 $userdata = $this->home_model->userlogin($user->email);
								 if($userdata != ''){
									$newuserdata = array(
								   'username'  => $userdata->name,
								   'userid'    => $userdata->id,
								   'email'     => $userdata->email,
								   'logged_in' => true

								);
								 
								$check = $this->session->set_userdata($newuserdata);
								redirect($this->config->item('base_url').'', 'location');
								 } else {
									
									$content['email'] = $user->email;
									$content['name'] = $user->name;
									//$content['mobile'] = $user->mobile;
									$this->home_model->userfacebook($content); 
									$userdata = $this->home_model->userlogin($user->email);
									$newuserdata = array(
								   'username'  => $userdata->name,
								   'userid'    => $userdata->id,
								   'email'     => $userdata->email,
								   'logged_in' => true

								);
								//print_r($newuserdata);die();
								$check = $this->session->set_userdata($newuserdata);
								redirect($this->config->item('base_url').'', 'location');
								 }
								 
								 $extra = "<a href='index.php?logout=1&tocken=".$params['access_token']."'>Logout</a><br>";     
								 $content = $user;
							}

	}

	function category($id)
	{
		 
		$data = array(); 
		$id = $this->home_model->catid($id);
		$data['url'] = $id; 
		$data['homepro']= $this->home_model->homepro($id);
		$data['catdata']= $this->home_model->catdata($id);

		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('landing.php',$data);
	}
	
	function login()
	{ 
		
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['email']="";
		$data['title'] = 'Login - Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('login.php',$data);
	}

	/*function loginmeasure($id)
	{ 
		echo $this->input->post('qty');die;
		$cartdata = array(
							'cstyleid'  => $id,
							'cqty'  => $this->input->post('qty'),
							'cmonotext'    => $this->input->post('monotext'),
							'cfonttype'     => $this->input->post('fonttype'),
							'ccolour'     => $this->input->post('colour'),
						    'cplacement'     => $this->input->post('placement'),
						);
						$this->session->set_userdata($cartdata);
		 
		echo "loginmeasure"; echo $this->session->userdata('cmonotext');die;
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['productid'] = $id;
		$this->load->view('loginmeasure.php',$data);
	}*/
	
	function d3login($id){
		$this->session->set_userdata('customize',$id);
		redirect($this->config->item('base_url').'sign-in', 'location');
	}

	function measurement($styleid,$id,$subcat)
	{
		
		//echo $this->input->post('monogram');die;
		if($this->input->post('qty') !=""){
			$cartdata = array(
				'cstyleid'  => $styleid,
				'prodid'    => $id,
				'subcategory' => $subcat,
				'cqty'      => $this->input->post('qty'),
				'cmonotext' => $this->input->post('monotext'),
				'cfonttype' => $this->input->post('fonttype'),
				'ccolour'   => $this->input->post('colour'),
				'cplacement' => $this->input->post('placement'),
				'cmonovalue' => $this->input->post('monogram'),
			);
			$this->session->set_userdata($cartdata);
		}

		if($this->session->userdata('userid') !=""){
			$data['productid'] = $id; 
			$data['usermeasurement'] = $this->home_model->allusermeasurements($id); 
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$this->load->view('usermeasurement.php',$data);
		} else {
			$data = array(); 
			$data['L_strErrorMessage'] = "";
			$data['err_msg'] = "";
			$data['productid'] = $id;
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$this->load->view('loginmeasure.php',$data);
		}		
	}

	function savemeasurement()
	{
		$cartdata = array(
 				'styleid'    => $this->session->userdata('saveid'),
				'cqty'      => '1',
		);

		$this->session->set_userdata($cartdata);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('usermeasurement.php',$data);
		/*
		if($this->session->userdata('userid') !=""){
			//$data['productid'] = $id; 
			//$data['usermeasurement'] = $this->home_model->allusermeasurements($id); 
			
		} else {
			$data = array(); 
			$data['L_strErrorMessage'] = "";
			$data['err_msg'] = "";
			$data['productid'] = $id;
			$this->load->view('loginmeasure.php',$data);
		}*/		
	}

	function page($id)
	{
		$data['err_msg'] = '';
 		$data['allcontent'] = $this->home_model->page($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('page',$data);
	}

	function sitemap()
	{
		$data['err_msg'] = '';
 		//$data['allcontent'] = $this->home_model->page($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('sitemap',$data);
	}
	
	function contactus()
	{ 
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('contactus.php',$data);
	}
	
	function measured($id = '10')
	{ 
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['sizedata']=$this->cart_model->allparts($id);
 		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('bodymeasure.php',$data);
	}
	function bmeasured()
	{ 
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['sizedata']=$this->home_model->newallparts();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		//print_r($data['sizedata']);die;
		$this->load->view('newbodymeasure.php',$data);
	}	
	
	 
	function contact()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = ''; 
		if($this->input->post('action') == 'subscribe') 
		{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');
				$message = '<div style="width:700px; height:auto; margin:0 auto;">
				 
				
			    <p>Greeting from Stylior.com.</p>
				<table>
						<tr><td>Name:</td><td>'.$name.'</td></tr>
						<tr><td>Email:</td><td>'.$email.'</td></tr>
						<tr><td>Subject:</td><td>'.$subject.'</td></tr>
						<tr><td>Message:</td><td>'.$message.'</td></tr>
 				</table>
				 
				<p>Kindly Response For The Customer Query.</p>
				</div>
				';
 
				 //echo $message;die();
				$subject  = 'Thank you for Stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				$headers .= 'Cc: info@stylior.com' . "\r\n";
 				mail('amvisolution@gmail.com,'.$this->input->post('email'), $subject, $message, $headers); 
				 
			    
		}
		$this->session->set_flashdata('item','Thank you for giving us your valuable time.Our team will contact you soon.!!');
		redirect($this->config->item('base_url').'home/contactus', 'location');
	}

	function registration($id= '')
	 {
	
		$this->load->model('user_model');
		if($this->session->userdata('userid') != "")
		{
			redirect($this->config->item('base_url').'home/checkout');
		}
		else
		{	
		
			$data = array();
			$data['L_strErrorMessage'] = "";
			$data['err_msg'] = "";
			$data['productid'] = $id;
			$data['countrycode'] = $this->user_model->getccode();
			$data['title'] = 'Stylior.com';
		    $data['keywords'] = '';
		    $data['description'] = '';
			$this->load->view('registration',$data);
			
		}
		
	 }
	 
	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		session_destroy();
		$this->session->set_flashdata('item','You’ve successfully Logged Out. Hope to see you soon!');
		redirect($this->config->item('base_url'), 'location');
    }
	function checkemail()
	{
		$email = $_POST['email'];
		$data = $this->home_model->checkemail($email);
		//echo $data;die;
		$html = '';
		if($data !=""){
			$html. "Sory, Order Shipping Not Available In These Area.";
			echo $html ;
		}
	}
	
	function lists() 
 	{
		$this->load->model('home_model');
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		
		$sizerange = '';
		if($this->input->get('size') != '')
		{
			$data['size'] = $this->input->get('size');

			if(count($data['size']) > 0){
				for($k='0';$k< count($data['size']); $k++){
					$sizerange .= 'size[]='.$data['size'][$k].'&';
				}
			}
 
		} else {
			$data['size'] = array();
		}
   
		
		$data['cat'] = $this->input->get('cat');
		$data['subcat'] = $this->input->get('sub_cat');  
		$data['search'] = $this->input->get('search');
		$data['discount'] = $this->input->get('discount');
		$data['cup'] = $this->input->get('cup');
		$data['color'] = $this->input->get('color');
		$data['size'] = $this->input->get('size');
		$data['price'] = $this->input->get('price');
		$data['sortby'] = $this->input->get('sortby');
		$data['page'] = $this->input->get('page');
		$data['discount1'] = $this->input->get('discount1');
		$data['designid'] = $this->input->get('designid');
		$data['fabricid'] = $this->input->get('fabricid');
		//echo $data['fabricid'];die;
 		
		if($data['page'] == ''){
			$data['page'] = $config['per_page'] = '9';
		} else {
			$data['page'] = $config['per_page'] = $this->input->get('page');
		}
		
		$config['first_url']='0';
		
		$pageno = $this->input->get('per_page');
		if($pageno == ''){
			$pageno = '0';
		} 

		$perpage = '3';

		$config['base_url'] = $url_to_paging.'home/lists/?per_page='.$page.'&title='.$this->input->get('search').'&sortby='.$this->input->get('sortby').'&page='.$data['page'].'&discount1=&cat='.$this->input->get('cat').'&subcat='.$this->input->get('search').'&search='.$this->input->get('search').'&discount='.$this->input->get('discount').'&color='.$this->input->get('color').'&fabric='.$this->input->get('fabricid').'&design='.$this->input->get('designid').'&'.$sizerange;
		$return = $this->home_model->allproducts($config['per_page'],$pageno, $data);
		$data['allproducts'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$data['allcolour']=$this->home_model->allcolour();
		$data['allnewfabric'] = $this->home_model->allnewfabric();
		$data['alldesign'] = $this->home_model->alldesign();
		$data['subcatimage'] = $this->home_model->subcatimage1($data['subcat']);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('category.php',$data);
	}
	 
	function reset_password()
	{
	$this->load->library('validation');

	$form_field = $data = array(
			'L_strErrorMessage' => '',
			'msg' => '',
				'email' => '',
	);
	if($this->input->post('action') == 'reset_password') {
	foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
		

		$rules['email']       = "trim|required";
		
		$this->validation->set_rules($rules);
		$fields['Email']       = "Name";
		$this->validation->set_fields($fields);
		if ($this->validation->run() == FALSE){
			$data['L_strErrorMessage'] = $this->validation->error_string;
		} else {
				if($response['data'] = $this->home_model->user_mail_exist($data))
				{
					$password = $response['data']->password;
					
				$email = $this->input->post('email');
				$message = '<div style="width:700px; height:auto; margin:0 auto;">
					<p>Password is Below,</p>
					<p>Greeting from stylior.com.</p>
					<table>
							<tr><td>Email:</td><td>'.$email.'</td></tr>
							<tr><td>Password:</td><td>'.$password.'</td></tr>
							
					</table>
					</div>';
					$to = $this->input->post('email'); 
					$subject  = 'Password Reset from stylior.com';  
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: stylior.com <info@fiveonlineclient.in>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
					mail($to, $subject, $message, $headers); 
					//echo $message;die;
					$data['msg'] = 'Your password has been successfully sent to your email id. please check Your Mail.!!';
					$this->load->view("reset_password",$data);
					} else {
					$data['L_strErrorMessage'] = 'Your Email Address is Wrong Please try again.!!';
					$this->load->view("reset_password",$data);
				}
			}
		} else {
				$data['title'] = 'Stylior.com';
				$data['keywords'] = '';
				$data['description'] = '';
				$this->load->view("reset_password",$data);
		}
	}
	
	function product($id)
	{
		//$this->load->model('account_model');
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$id1=$id;
		$data['prodetails'] = $this->home_model->prodetails($id1);
		$data['productinfo'] = $this->home_model->productinfo($id1);
		$data['thirdid'] = $id;
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('productlist.php',$data);
	}
	 
    function style($style_id)
	{
		//echo $style_id; die;
		//$this->load->model('account_model');
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$style_id = $this->home_model->style_id($style_id);
 		$data['prostyle'] = $this->home_model->style_detail($style_id);
		//echo "<pre>"; print_r($data['prostyle']); die;
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('stylelists.php',$data);
	}
	
	function details($id,$prodid)
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$id1=$id;
		//echo $id1;die;
		$data['prodetails'] = $this->home_model->productdetail($id1);
 		$data['productinfo'] = $this->home_model->productinfo($prodid);
 		$data['grouppro'] = $this->home_model->getgroupro($prodid);
		//print_r($data['grouppro']);die;
		$data['allcolour'] = $this->home_model->allcolour(); 
		$data['allfonts'] = $this->home_model->allfonts(); 
		$data['allplacement'] = $this->home_model->allplacement(); 
		if($this->session->userdata('userid') != ""){
		$data['saveditems'] = $this->home_model->getsaveditems(); 
		}
		//print_r($data['saveditems']);die;
		$data['title'] = $data['productinfo']->title;
		$data['keywords'] = $data['productinfo']->keyword;
		$data['description'] = $data['productinfo']->metadescription;
		$this->load->view('details.php',$data);
	}

	
	
	function add_review($product_id){
		if($this->session->userdata('userid') == "")
		{
			redirect($this->config->item('base_url').'home/login');
		}
		else
		{
				$form_field = $data = array(
				'L_strErrorMessage' => '',
					'title' => '',
					'review' => '',
					'ratings' => '',
				);
				$this->load->library('validation');
			 	$this->load->model('account_model');
				if($this->input->post('action') == 'add_review') {
				foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					

					$rules['title']       = "trim|required";
					$rules['review']      = "trim|required";
					 
					$this->validation->set_rules($rules);
					$fields['title']       = "title";
					$fields['review']      = "Review";
					 
					$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($response = $this->account_model->add_review($product_id,$data))
					{
						$this->session->set_flashdata('item','Review Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'home/details/'.$product_id);
					}
					else 
					{
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
	}
	}

	function subscribe()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = ''; 
		 
			$email = $this->input->post('newemail');
			$emailavail = $this->home_model->checksubscriber($email);
			if($emailavail ==""){
			$this->home_model->addsubsciber($email);
			$format = $this->user_model->getusermail();
			$message= $format[0]->subscriber;
			$message = str_replace('{Email}',$email,$message);
				//echo $message;die; 
				$to = "support@stylior.com"; 
				 
				$subject  = 'Thank you for subsribing with Stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
					mail($to, $subject, $message, $headers); 
					mail($email, $subject, $message, $headers); 
				    echo "Thank you for subscribing with stylior.com";
				} else {
					echo "You are already subscribed With stylior.com";
				}
	}

	function esubscribe()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = ''; 
		 
			$email = $this->input->post('newemail');
			$name = $this->input->post('name');
			$emailavail = $this->home_model->checksubscriber($email);
			if($emailavail ==""){
			$this->home_model->addsubsciber($email,$name);
			//echo $email; die;
			  $message = '<div style="width:700px; height:auto; margin:0 auto;">
				 
				<p>Hi '.$fname.',</p>
			    <p>Thank you for subscribing with stylior.com</p>
				<table>
						<tr><td>Name  :</td><td>'.$fname.'</td></tr>
 						<tr><td>Email :</td><td>'.$email.'</td></tr>
						 
				</table>
  				</div>
				';
				 
				$to = "support@stylior.com"; 
				 
				$subject  = 'Thank you for stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: stylior.com<info@stylior.com>' . "\r\n" .
							'Reply-To: stylior@gmail.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
 				mail($to, $subject, $message, $headers); 
				    echo "Thank you for subscribing with stylior.com";
				} else {
					echo "You are already subscribed With stylior.com";
				}
				redirect($this->config->item('base_url').'');
	}



	
	function changecurrency()
	{
		$val = $_POST['val'];
	 	$from = 'INR';
		$to = $val;
		$amount = '1';
		
		
		if($val != "INR") { 
			$from = $val;
			$to = 'INR';
			$amount = '1';
			$cvalue = $this->convertCurrency($amount, $from, $to); 
			$this->session->set_userdata('currencyvalue',$cvalue);
			$this->session->set_userdata('currencycode',$val);
 
		} else {
			$this->session->set_userdata('currencyvalue','1');
			$this->session->set_userdata('currencysymbol','Rs');		
			$this->session->set_userdata('currencycode','INR');		
		}
		 
	}
	
	function convertCurrency($amount, $from, $to){
		$url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
		$data = file_get_contents($url);
		preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
		$converted = preg_replace("/[^0-9.]/", "", $converted[1]);
		return round($converted, 3);
	}
	
	 /* end stylor function */
	
	function viewcart($id)
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$id1=$id;
		$data['prodetails'] = $this->home_model->prodetails($id1);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('viewcart.php',$data);
	}
	
	function review_order()
		{	
			$id = $this->input->post('paymentmethod');
			if($this->session->userdata('userid') == "")
			{
				redirect($this->config->item('base_url').'home/login');
			}
			else
			{
			
			$data = array();
			$data['err_msg'] = '';
			//echo $this->input->post('shippaddress');die;
			$this->session->set_userdata('shippaddress',$this->input->post('shippaddress'));
			$data['deafaultadd'] = $this->home_model->deafaultadd();

			redirect($this->config->item('base_url').'bilship/payu/'.$id);
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$this->load->view('review_order',$data);
	}}

	function checkout()
	{	//echo '<pre>'; print_r($this->session->all_userdata());exit;
		$data = array();
		$data['err_msg'] = '';
		$data['all_address'] = $this->home_model->all_address();
		$data['allcountry'] = $this->home_model->allcountry();
		$data['deafaultadd'] = $this->home_model->deafaultadd();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('checkout',$data);
		 
	}
	
	function thanks()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('thankyou.php',$data);
	}

	function psuccess(){
		$content['order_id'] = $this->session->userdata('order_number');
		$content['tracking_id'] = '';
		$this->bilship_model->updatesuccessstatus($content);
		$this->usersuccessmail();
		$data['thankyou'] = 'Thank you for shopping with us. Your transaction is successful. We will be shipping your order to you soon.';
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('thankyou.php',$data);
	}

	function cancel(){
		$data['thankyou'] = 'You have cancel your transaction.';
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('thankyou.php',$data);
	}
	
	function success()
	{
		$this->load->model('bilship_model');
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		//echo getcwd(); die;
		include('site/views/includes/Crypto.php');

		$workingKey='1ED6260C345165CDC9223B240BD23888';		//Working Key should be provided here.
		$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
		$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
		$order_status="";
		$decryptValues=explode('&', $rcvdString);
		$dataSize=sizeof($decryptValues);
		//echo "<center>";

		for($i = 0; $i < $dataSize; $i++) 
		{
			$information=explode('=',$decryptValues[$i]);
			if($i==3)	$order_status=$information[1];
		}

		if($order_status==="Success")
		{
			//echo "<br>";
			for($i = 0; $i < $dataSize; $i++) 
			{
				$information=explode('=',$decryptValues[$i]);
				if($i==0)	$content['order_id'] = $information[1];
				if($i==1)	$content['tracking_id'] = $information[1];
			}

			$this->bilship_model->updatesuccessstatus($content);
			$this->usersuccessmail();
			
  			$data['thankyou'] = 'Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.';
 		}
		else if($order_status==="Aborted")
		{
			//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
			$data['thankyou'] = 'Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail'; 
		}
		else if($order_status==="Failure")
		{
			//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
			//echo "<pre>";
			//print_r($decryptValues);die;
			for($i = 0; $i < $dataSize; $i++) 
			{
				$information=explode('=',$decryptValues[$i]);
				if($i==0)	$content['order_id'] = $information[1];
				if($i==1)	$content['tracking_id'] = $information[1];
			}

			$this->bilship_model->updateorderstatus($content);
			$this->usersuccessmail();
			$data['thankyou'] = 'Your transaction has been declined.';
		}
		else
		{
			//echo "<br>";
				$data['thankyou'] = 'Security Error. Illegal access detected.';
				 
		}
		
		/*echo "<br><br>";

		echo "<table cellspacing=4 cellpadding=4>";
		for($i = 0; $i < $dataSize; $i++) 
		{
			$information=explode('=',$decryptValues[$i]);
            echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
		}

		echo "</table><br>";
		echo "</center>";*/
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('thankyou.php',$data);
	}
	function failure()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('failure.php',$data);
	}

	function usersuccessmail(){
			$format = $this->user_model->getusermail();
				$message = $format[0]->ordermail;
				$ordersub = $format[0]->ordermailsub;
				
				
					if(count($this->cart->contents())!=0){
						//$pvalue = '0';
						
						foreach($this->cart->contents() as $arrRowDeailts )  
						{
							 
							$arrProddetails=$this->bilship_model->getproddetails($arrRowDeailts['id']);
 							$userid =  $this->session->userdata('userid');
						 
							$id=$arrRowDeailts['options']['colorid'];
							if($id !=""){
							$colorname =$this->home_model->getcolorname($id);
							} else {
								$colorname= "Not Available";
							}
							//print_r($data['result']);die;
							
							$id=$arrRowDeailts['options']['sizeid'];
							//echo($id);die();
							if($id !=""){
							$sizename =$this->home_model->getsize($id);
							} else {
								$sizename = "Not Available";
							}
							//print_r($dataa['result']);die();
							$data['result'] = $this->bilship_model->shippingaddress_active();
							//print_r($data['result']);
							$data['result']->id;
							$orderid = $this->session->userdata('order_number');
							//	echo $orderid;die;
						
							$ci_order_detail = $this->bilship_model->getorderdetai($orderid);
							$ci_order_item = $this->bilship_model->getciorderitemdetail($orderid);
							 	
								$message = str_replace('{FIRSTNAME}',$this->session->userdata('username'),$message);
								$message = str_replace('{INVOICEORDER}',$this->session->userdata('order_number'),$message);
								$message = str_replace('{INVOICEDATE}',$ci_order_detail->cdate,$message);
								$message = str_replace('{PAYMENTMETHOD}','Online Payment',$message);
								$message = str_replace('{SHIPPINGDETIALS}',$data['result']->Address1.'</ br>'.$data['result']->Address2.'</ br>'.$data['result']->City.'</ br>'.$data['result']->State.'</ br>'.$this->bilship_model->getcountryname($data['result']->country).'</ br>'.$data['result']->Zip.'</ br>'.$data['result']->Phone,$message);
								$message = str_replace('{BILLINGDETIALS}',$data['result']->Address1.'</ br>'.$data['result']->Address2.'</ br>'.$data['result']->City.'</ br>'.$data['result']->State.'</ br>'.$this->bilship_model->getcountryname($data['result']->country).'</ br>'.$data['result']->Zip.'</ br>'.$data['result']->Phone,$message);
								
										$orderdetails = '<table cellpacing="20" cellspacing="0" border="1" width="700">';
										$orderdetails .= '<tr>'; 
											$orderdetails .= '<td>ITEM</td>';
											$orderdetails .= '<td>PRICE</td>';
											$orderdetails .= '<td>UNIT</td>';
											$orderdetails .= '<td>QTY</td>';
											$orderdetails .= '<td>SUBTOTAL</td>';
											$orderdetails .= '</tr>';
										if($ci_order_item != '' && count($ci_order_item) > 0) {
										foreach($ci_order_item as $ci_order_items)
										{ 
 											$orderdetails .= '<tr>'; 
											$orderdetails .= '<td>'.$ci_order_items->order_item_name.'</td>';
											$orderdetails .= '<td>'.number_format($ci_order_items->product_item_price,'2','.','').'</td>';
											$orderdetails .= '<td>'.$ci_order_detail->order_currency.'</td>';
											$orderdetails .= '<td>'.$ci_order_items->product_quantity.'</td>';
											$orderdetails .= '<td>'.number_format($ci_order_items->product_item_price,'2','.','').'</td>';
											$orderdetails .= '</tr>';
											/*$message = str_replace('{INVOICENAME}',$ci_order_item->order_item_name,$message);
											$message = str_replace('{INVOICECOLOR}',$colorname,$message);
											$message = str_replace('{INVOICESIZE}',$sizename,$message);
											$message = str_replace('{INVOICEQUANTITY}',$ci_order_item->product_quantity,$message);
											$message = str_replace('{INVOICEPRICE}',$ci_order_item->product_item_price,$message);*/
										}}
										$orderdetails .= '</table>';
			
										$message = str_replace('{ORDERDETAILS}',$orderdetails,$message);
 										$message = str_replace('{INVOICETOTAL}',$ci_order_detail->order_currency.'-'.$ci_order_detail->order_total,$message);
										//echo $message;die();
										$subject  = $ordersub;  
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
													'Reply-To: info@stylior.com' . "\r\n" .
													'X-Mailer: PHP/' . phpversion();
										 
										//echo $message; die;
 										mail('patelnikul321@gmail.com', $subject, $message, $headers);   
										mail($this->session->userdata('email'), $subject, $message, $headers);
										//mail('avonbras@gmail.com', $subject, $message, $headers);																			
							 
						$this->session->unset_userdata('couponprice');
						$this->session->unset_userdata('giftwrap');
						$this->session->unset_userdata('couponcode');
						$this->session->unset_userdata('shipping_cost'); 
						$this->cart->destroy();
						 
					}
				}
	}
	
/*function cancel(){
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$this->load->view('cancel.php',$data);
}	*/
	
function step($tab_id=0,$shipid = '0')
		{	 
			$this->load->model('home_model');
			$this->load->model('user_model');
			if($tab_id == '1'){
				if($this->session->userdata('cust') != '' ){
					redirect('home/checkout');
				}
			}
			
			if($this->cart->total_items() == '0') 
			{ 
				redirect('home/login');
			}
	
			if($tab_id == '3' || $tab_id == '4')
			{
				if($this->session->userdata('order_id') == '')
				{
					redirect('home/login');
				}
			}
		}
	function review($id)
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('review',$data);
	}	
	
	
	function getattvalue(){
		$size=$_POST['size'];
		$color=$_POST['color'];
		$pid=$_POST['productid'];
		$data = $this->home_model->procountinventry($size,$color,$pid);
		$html = $data;
        //alert(html);
        echo $html;
	}
	function ilogin()
	{ 
		$data = array(); 
		$data['email']="";
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('ilogin.php',$data);
	}
	function iregistration()
	 {
	 
		$this->load->model('user_model');
		if($this->session->userdata('userid') != "")
		{
			redirect($this->config->item('base_url').'home/checkout');
		}
		else
		{	
		
			$data = array();
			$data['L_strErrorMessage'] = "";
			$data['err_msg'] = "";
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$data['countrycode'] = $this->user_model->getccode();
			$this->load->view('iregistration',$data);
			
		}
		
	 }
	 function ajaxlist_search()
	{
		//echo 11;exit;
		$news = "";
		$result = $this->home_model->ajaxlist_search();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			$news .= $result[$i]->pname.",";
		}
		for($i=0;$i<count($result);$i++)
		{
			$news .= $result[$i]->foldername.",";
		}
		echo $news = substr($news, 0, -1);	
	}
	function giftcard()
	{ 
		
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['email']="";
		$data['title'] = 'Gift card - Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('giftcard.php',$data);
	}
	
	function alogin()
	{ 
		$data = array(); 
		$data['email']="";
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = "";
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('alogin.php',$data);
	}
	function aregistration()
	 {
	 
		$this->load->model('user_model');
		if($this->session->userdata('userid') != "")
		{
			redirect($this->config->item('base_url').'home/checkout');
		}
		else
		{	
		
			$data = array();
			$data['L_strErrorMessage'] = "";
			$data['err_msg'] = "";
			$data['countrycode'] = $this->user_model->getccode();
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$this->load->view('aregistration',$data);
			
		}
		
	 }
	
}
?>