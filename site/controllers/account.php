<?php
class Account extends Controller
 {
	function __construct()
	{
		parent::Controller();
	 	$this->load->model('account_model');
		$this->load->model('home_model');
		$this->load->library('session');
		$this->load->library('validation');
		if($this->session->userdata('logged_in') != 1)
		{
			redirect($this->config->item('base_url')."home/login");
		}
	}
	
	function index(){
		$data['err_msg'] = '';
		$id = $this->session->userdata('userid');
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['result'] = $this->account_model->userget($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('account_dashboard',$data);
	}
	 
	function measure(){ 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$data['allusermeasure'] = $this->account_model->allusermeasure();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("usermeasure.php",$data);
	}
 	
	function edit_users()
	{
		$id = $this->session->userdata('userid');
		if(is_numeric($id)) {
			$result = $this->account_model->userget($id);
 			$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result->id,
						'username' =>  $result->username,
						'password' => $result->password,
						'repassword'=>'',
						'email' => $result->email,
						'phone' => $result->phone
			);
			
			if($this->input->post('action') == 'edit_users') {
				foreach($data as $key => $value) {  
					$form_field[$key] = $this->input->post($key);	
				}

				$rules['username']   = "trim|required";
				$rules['email']      = "trim|required";
				$rules['password']   = "password|Password|trim|required|matches[repassword]";
				$rules['repassword']   = "password|Password Confirmation|required";
				
				$this->validation->set_rules($rules);
				$fields['username']       = "Username";
				$fields['email']      = "Email";
				$fields['password']   = "Password";
				$fields['repassword']   = "Password Confirmation";
				
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
 				} 
				else 
				{
					if($response = $this->account_model->edit($id, $form_field)) {
							$this->session->set_flashdata('msg_name', 'User Profile Updated Successfully.!!');
							$data['allcategory'] = $this->account_model->allcategory();
							$data['userget'] = $this->account_model->userget($id);
						redirect($this->config->item('base_url').'account/edit_users',$data);
						
					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
 
				$data['err_msg'] = '';
				$data['allcategory'] = $this->account_model->allcategory();
				$data['userget'] = $this->account_model->userget($id);
				$data['title'] = 'Stylior.com';
				$data['keywords'] = '';
				$data['description'] = '';
				$this->load->view('myaccount',$data);
	
			} else {
			
				$data['err_msg'] = '';
				$data['allcategory'] = $this->account_model->allcategory();
				$data['userget'] = $this->account_model->userget($id);
				$data['title'] = 'Stylior.com';
				$data['keywords'] = '';
				$data['description'] = '';
				$this->load->view('myaccount',$data);
			}
	}
	function add_shipping_address(){
				$form_field = $data = array(
				'L_strErrorMessage' => '',
					'Name' => '',
					'Address1' => '',
					'Address2' => '',
					'Landmark' => ' ',
					'City' => '',
					'State'=>'',
					'Zip'=>'',
					'Phone'=>'',
					'Status'=>'',
					'country'=>'',
				);
				if($this->input->post('action') == 'add_shipping_address') {
				foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}
					

					$rules['Name']       = "trim|required";
					$rules['Address1']      = "trim|required";
					$rules['City']      = "trim|required";
					$rules['Zip']   = "trim|required";
					$rules['Phone']      = "trim|required";
					$rules['country']      = "trim|required";
					
					$this->validation->set_rules($rules);
					$fields['Name']       = "Name";
					$fields['Address1']      = "Address 1";
					$fields['Address2']   = "Address 2";
					$fields['Landmark']   = "Address 2";
					$fields['City']      = "City";
					$fields['Zip']   = "Zip";
					$fields['Phone']      = "Phone";
					$fields['country']      = "Country";
					$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {
					if($response = $this->account_model->add_shipping_address($data))
					{
						$this->session->set_flashdata('L_strErrorMessage','Address Added Successfully!!!!');
						$data['allcountry'] = $this->home_model->allcountry();
						redirect($this->config->item('base_url').'account/account_address_book');
					}
					else 
					{
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
			}
		}
		$data['err_msg'] = '';
		$data['allcountry'] = $this->home_model->allcountry();
		$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('add_shipping_address',$data);
	}
	function account_address_book(){
		
		//$this->session->set_flashdata('L_strErrorMessage',' ');
		$userid = $this->session->userdata('userid');
		
		$data['one_address'] = $this->account_model->one_address($userid);
		$data['all_address'] = $this->account_model->all_address($userid);
		$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('account_address_book',$data);
	}
	function message($orderid){
		
		//$this->session->set_flashdata('L_strErrorMessage',' ');
		$data = array(); 
		$data['allmessage'] = $this->account_model->allmessage($orderid);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('mymessage.php',$data);
	}
	function add_message($id)
	{
	if($this->input->post('action')=="insertmessage") {
			$data['adminmessage']=$this->input->post('adminmessage');
			$data['userid']=$this->input->post('userid');
			if($response = $this->account_model->addmessage($data,$id)) {
			
				$this->session->set_flashdata('msg','Message Added Successfully!!!');
				redirect($this->config->item('base_url').'account/message/'.$id);
			}
		}
	}	
	
		function checkemail()
	{
		$email = $_POST['email'];
		//echo $email;die;
		$data = $this->home_model->checkemail($email);
		if($data ==""){
			echo "Sory, Order Shipping Not Available In These Area.";
		}
	}
	function edit_shipping_address($id)
	{
		if(is_numeric($id)) {
			$result = $this->account_model->addressget($id);

			$form_field = $data = array(
					'L_strErrorMessage' => '',
					'id' =>$result->id,
					'Name' => $result->Name,
					'Address1' => $result->Address1,
					'Address2' => $result->Address2,
					'Landmark' => $result->Landmark,
					'City' => $result->City,
					'State'=>$result->State,
					'Zip'=>$result->Zip,
					'Phone'=>$result->Phone,
					'Status'=>$result->Status,
					'country'=>$result->country,
					);
			if($this->input->post('action') == 'edit_shipping_address') {
				foreach($data as $key => $value) {
					$form_field[$key] = $this->input->post($key);	
				}

					$rules['Name']       = "trim|required";
					$rules['Address1']      = "trim|required";
					$rules['City']      = "trim|required";
					$rules['Zip']   = "trim|required";
					$rules['Phone']      = "trim|required";
					$rules['country']      = "trim|required";
				
				$this->validation->set_rules($rules);
					$fields['Name']       = "Name";
					$fields['Address1']      = "Address 1";
					$fields['Address2']   = "Address 2";
					$fields['Landmark']   = "Address 2";
					$fields['City']      = "City";
					$fields['Zip']   = "Zip";
					$fields['Phone']      = "Phone";
					$fields['country']      = "Country";
				
				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;

				} 
				else 
				{
					if($response = $this->account_model->edit_address($id, $form_field)) {
							if($this->cart->total_items() > 0){
								$this->session->set_flashdata('update ', 'Address Updated Successfully!!!!');
								redirect($this->config->item('base_url').'home/checkout',$data);
								//redirect($this->config->item('base_url').'cart/checkout', 'location');
							}else{
								$this->session->set_flashdata('update ', 'Address Updated Successfully!!!!');
								$data['allcountry'] = $this->home_model->allcountry();
								$data['allcategory'] = $this->account_model->allcategory();
								redirect($this->config->item('base_url').'account/account_address_book',$data);
							}
					} else {
						$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
					}
				}
			}
 
		$data['err_msg'] = '';
		$data['allcountry'] = $this->home_model->allcountry();
		$data['allcategory'] = $this->account_model->allcategory();
		$data['addressget'] = $this->account_model->addressget($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('edit_shipping_address',$data);

		} else {
		$data['err_msg'] = '';
		$data['allcategory'] = $this->account_model->allcategory();
		$data['addressget'] = $this->account_model->addressget($id);
		$data['allcountry'] = $this->home_model->allcountry();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('edit_shipping_address',$data);
		}
	}

	function account_my_orders(){
		$data['err_msg']='';
		$id=$this->session->userdata('userid');
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['userorder'] = $this->account_model->userorder($this->session->userdata('userid'));
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("account_my_orders",$data);
	}
	function return_center(){
		$data['err_msg']='';
		$id=$this->session->userdata('userid');
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['returnproduct'] = $this->account_model->proreturn($this->session->userdata('userid'));
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("return_center",$data);
	}
	
	
	function savedata(){
		$this->load->model('cart_model');
		$data['err_msg']='';
		$id=$this->session->userdata('userid');
		//$data['allcategory'] = $this->account_model->allcategory();
		$data['savedstyle'] = $this->account_model->savedstyle($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("save3dstyle.php",$data);
	}
	
	function order_detail($id)  
	{
		//echo $id;die();	
		$data['orderdetails'] = $this->account_model->order_detail($id); 
		//print_r($data['orderdetails']);die();
		$order_invoice = $data['orderdetails']->order_invoice;
		//print_r($order_invoice);die();
		$data['shippingdetails'] = $this->account_model->shippingdetails($order_invoice);
		//print_r($data['shippingdetails']);
		$data['orderitems'] = $this->account_model->orderitems($id);
		//print_r($data['orderitems']	);
		$data['allcategory'] = $this->account_model->allcategory();
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('customerorder',$data);
	}
	
	
	function mywishlist(){ 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$id=$this->session->userdata('userid');
		$data['allcategory'] = $this->account_model->allcategory();
		$data['wishlist'] = $this->account_model->wishlist($id);
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view("wishlisht",$data);
	}
	
	function delete_wishlist($deleteid){ 	
	$data['L_strErrorMessage'] = "";
	$data['err_msg'] = ""; 
	
		if($this->account_model->delete_wishlist($deleteid)) 
		{
			$this->session->set_flashdata('message_name', 'Product removed in Wishlist Successfully!!!!');
		}
		redirect($this->config->item('base_url').'account/mywishlist');
	}
	
	function deletesaveditems(){ 	
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		
		 if($_POST['deletesavestyle'] != '' && count($_POST['deletesavestyle'] > 0)){

			 for($j ='0'; $j< count($_POST['deletesavestyle']); $j++) {
				if($this->account_model->delete_saveditem($_POST['deletesavestyle'][$j])) 
				{
					$this->session->set_flashdata('message', 'Saved Style deleted Successfully!');			
				}
			 }
		 }
		 redirect($this->config->item('base_url').'account/savedata');
	}

	function deletedata($id)
	{
		  if($_POST['deletesavestyle'] != '' && count($_POST['deletesavestyle'] > 0)){
 			 for($j ='0'; $j< count($_POST['deletesavestyle']); $j++) {
				$this->account_model->deletes($_POST['deletesavestyle'][$j]); 
				{
					$this->session->set_flashdata('flashError','Measurement Data Deleted Successfully!');
				}  
			 }
		 }
		redirect($this->config->item('base_url').'account/measure');
	}

	function cancelord($id)
		{
				//echo $id;
				$canorderdet = $this->account_model->canorderdet($id);
				//print_r($canorderdet); 
				
				$canorde = $this->account_model->canorde($canorderdet->order_id);
				$canordetail = $this->account_model->canorddetail($canorderdet->order_id);
				//echo "<pre>";	print_r($canordetail);
				
				
				$userinfo = $this->account_model->userinfo($canorderdet->user_id);
				//print_r($userinfo); 
				
				{
				$message = '<div style="width:700px; height:auto; margin:0 auto;"> 
				<p>Hello, </p>
			    <p>Below Order has been cancelled by customer.</p>
				 
				
				</br></br>
				
				<table style="width: 100%;">	
						<th>-: Order Detail :-</th>
					 </tr>
					<tr><td>Order Id:</td><td>'.$canorderdet->order_id.'</td>
					</tr>
					
					<tr><td>Order Total:</td><td>'.$canorderdet->order_total.'</td>
					</tr>
					
					</tr>
					<tr><td>Order Date:</td><td>'.$canorderdet->cdate.'</td>
		
					</tr>
					</tr>';
					if($canordetail!="" && count($canordetail)>=0){
					foreach( $canordetail as $orders){
						
					$message .= '<tr><td>Product Name:</td><td>'.$orders->order_item_name.'</td>
					</tr>';
					}
				}
					
				$message .= '</table></br> 
				
				<table style="width: 100%;">	
						<th>-: Customer Detail :-</th></br></br>
					<tr>
					<td>Name</td><td>'.$userinfo->username.'</td>
					
					</tr>
					<tr><td>Email:</td><td>'.$userinfo->email.'</td>
					</tr>
					
					</tr>
					<tr><td>Phone No:</td><td>'.$userinfo->phone.'</td>
					</tr>
				</table>
				';
				
				$message1 = '<div style="width:700px; height:auto; margin:0 auto;"> 
				<p>Hello, </p>
			    <p>Below Order has been cancelled.</p>
				 
				
				</br></br>
				
				<table style="width: 100%;">	
						<th>-: Order Detail :-</th>
					 </tr>
					<tr><td>Order Id:</td><td>'.$canorderdet->order_id.'</td>
					</tr>
					
					<tr><td>Order Total:</td><td>'.$canorderdet->order_total.'</td>
					</tr>
					
					</tr>
					<tr><td>Order Date:</td><td>'.$canorderdet->cdate.'</td>
		
					</tr>
					</tr>';
					if($canordetail!="" && count($canordetail)>=0){
					foreach( $canordetail as $orders){
						
					$message1 .= '<tr><td>Product Name:</td><td>'.$orders->order_item_name.'</td>
					</tr>';
					}
				}
					
				$message1 .= '</table></br> 
				
				<table style="width: 100%;">	
						<th>-: Customer Detail :-</th></br></br>
					<tr>
					<td>Name</td><td>'.$userinfo->username.'</td>
					
					</tr>
					<tr><td>Email:</td><td>'.$userinfo->email.'</td>
					</tr>
					
					</tr>
					<tr><td>Phone No:</td><td>'.$userinfo->phone.'</td>
					</tr>
				</table>
				';
				
				$to=$userinfo->email;
				//echo $to;die();
				$subject  = 'Order Cancellation from  Chickkadee private limited.';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: chickkadee.com <info@fiveonlineclient.in>' . "\r\n" .
							'Reply-To: chickkadee@gmail.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				//mail('amvisolution@gmail.com', $subject, $message, $headers);
				mail($to, $subject, $message1, $headers);
				 
			
				}
				
				$this->session->set_flashdata('message','Order has been cancelled Successfully. Our Admin person will revert the transaction.');
				redirect($this->config->item('base_url').'account/account_my_orders');
			 
	}
	function editreturnproducts($id)
	{
		//echo $id;die;
		if(is_numeric($id)) {
			$rerurnid =$this->account_model->getreturnid($id);
			//echo $rerurnid;die;
			$result = $this->account_model->getreturndata($rerurnid);
			//print_r($result);die;
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'return_id' => $result[0]->return_id,
						'order_id'	=> $result[0]->order_id,
						'user_id' => $result[0]->user_id,
						'cdate' => $result[0]->cdate,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'phone' => $result[0]->phone, 
						'order_item_name' => $result[0]->product_name,
						'product_quantity' => $result[0]->product_quantity,
						'product_id' => $result[0]->product_id,
						'opened' => $result[0]->opened,
						'comment' => $result[0]->comment,
						'returnaction' => $result[0]->returnaction,
						'returnstatus' => $result[0]->returnstatus,
						'returnreason' => $result[0]->returnreason,
					);
			if($this->input->post('action') == 'edit_category') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				//print_r($form_field);die;
				if($response = $this->account_model->edits($id, $form_field)) {
					$this->session->set_flashdata('L_strErrorMessage','Product Return Successfully!!!!');
					redirect($this->config->item('base_url').'account/order_detail/'.$id);
				} 
				else 
				{
					$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
				} 
			}
			$data['umdata'] = $this->account_model->getusermessage($result[0]->user_id);
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			$data['allreturnprostatus'] = $this->account_model->allreturnprostatus();
			$data['allreturnaction'] = $this->account_model->allreturnaction();
			$data['allreturnstatus'] = $this->account_model->allstatus();
			$this->load->view('edit_returnproducts',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'account/account_my_orders');
		}
	}
	
	function returnproducts($id)
	{
		//echo $id;die;
		if(is_numeric($id)) {
			$result = $this->account_model->get($id);
			//echo "<pre>";print_r($result);die;
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						
						'order_item_id'	=> $result[0]->order_item_id,
						'order_id'	=> $result[0]->order_id,
						'user_id' => $result[0]->user_id,
						'cdate' => $result[0]->cdate,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'phone' => $result[0]->phone,
						'user_info_id' => $result[0]->user_info_id,
						'order_item_name' => $result[0]->order_item_name,
						'product_quantity' => $result[0]->product_quantity,
						'product_id' => $result[0]->product_id,
					);
			if($this->input->post('action') == 'edit_category') {
				foreach($form_field as $key => $value) {  $data[$key]=$this->input->post($key);	}
				
				$form_field['opened'] = $this->input->post('opened');
				$form_field['comment'] = $this->input->post('comment');
				$form_field['returnaction'] = $this->input->post('returnaction');
				$form_field['returnstatus'] = $this->input->post('returnstatus');
				$form_field['returnreason'] = $this->input->post('returnreason');
				//print_r($form_field);die;
				if($response = $this->account_model->add($id, $form_field)) {
					//echo $form_field['order_id'];die;
					$this->account_model->updateorderstatus($form_field['order_id']);
					$this->session->set_flashdata('msg','Product Return Request Is Successfully Submitted, Our Team Will Contact You Shortly For Resolution.!!');
					redirect($this->config->item('base_url').'account/returnproducts/'.$id);
				} 
				else 
				{
					$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
				} 
			}
			//$data['umdata'] = $this->returnproduct_model->getusermessage($result[0]->user_id);
			//print_r($data['umdata']);die;
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
			
			$data['allreturnprostatus'] = $this->account_model->allreturnprostatus();
			$data['allreturnaction'] = $this->account_model->allreturnaction();
			$data['allreturnstatus'] = $this->account_model->allstatus();
		 
			$this->load->view('returnproduct',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'account/account_my_orders');
		}
	}
		function mywallet(){
		
		//$this->session->set_flashdata('L_strErrorMessage',' ');
		$userid = $this->session->userdata('userid');
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('my_wallet',$data);
	}
	
		function myvoucher(){
		
		//$this->session->set_flashdata('L_strErrorMessage',' ');
		$userid = $this->session->userdata('userid');
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';
		$data['vocuher'] = $this->account_model->getallvoucher($userid);
		//print_r($data['vocuher']);die;
		$this->load->view('my_voucher',$data);
	}
}
?>