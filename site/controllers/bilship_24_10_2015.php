<?php
class bilship extends Controller 
{
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		$this->load->model('bilship_model');	
		$this->load->model('home_model');	
	}
		
	function payu($id)
	{		
	 
		//echo $this->session->userdata('total_amount');die;
		if($this->session->userdata('sizeid') !="") {
			$sizeid=$this->session->userdata('sizeid');
		} else {
			$sizeid="0";
		}
		 
		$intOrderNumber=$this->bilship_model->getOrderNumber(); 
		$order_number = array('order_number'  => $intOrderNumber);
		$this->session->set_userdata($order_number);
	 
		//if($id == '1'){
				//$systemsvaribale = $this->footer->systemsvaribale();
				$order_status = 'P';
				$paymentmode = 'Online Payment';
				$additionalamt = '0';
				//$additionalamt = $systemsvaribale->codextra;
		/* } else if ($id == '2'){
				$order_status = 'C';
				$paymentmode = 'Online Payment';
				$additionalamt = '0';
		}*/
		
		$content=array(
			'user_id'=> $this->session->userdata('userid'),
			'order_number'=> $intOrderNumber,
			'order_invoice'=> $intOrderNumber,
			'user_info_id'=> $this->session->userdata('userid'),
			'order_total'=> $this->session->userdata('total_amount')+$additionalamt, 
			'order_currency'=> $this->session->userdata('currencycode'),
			'order_status'=> $order_status,
			'paymentmode'=> $paymentmode,
			'additionalcharge' => $additionalamt,
			'cdate'=> date('Y-m-d H:i:s'),
			'shippingcost' => $this->session->userdata('shipping_cost'), 
			'is_gift' => $this->session->userdata('giftwrap'),
			'coupondiscount' => $this->session->userdata('couponprice'), 
			'couponname' => $this->session->userdata('couponcode'),
			'tbl_coupan_name' => $this->session->userdata('coupanname'),
			
			'voucherdisc' => $this->session->userdata('voucherprice'), 
			'vouchercode' => $this->session->userdata('vouchercode'),
			'vouchervalue' => $this->session->userdata('vouchervalue'),
			'wallet_amount' => $this->session->userdata('mywalletdata'),
			
 			'ip_address'=>$_SERVER['REMOTE_ADDR']);
 			//echo "<pre>";print_r($content);die();
			 $productdetailmail = '';
  		     $arrOrderId=$this->bilship_model->saveOrderInDatabase($content,$this->session->userdata('order_number'));  
			 //$this->bilship_model->updatemeasure($arrOrderId);  

						$i=1;
						$productdetailmail .= "<table cellpadding='5' style='border-top:2px solid #000;width: 600px;text-align: center;'>";
						$pvalue = '0';
						foreach( $this->cart->contents() as $arrRowDeailts )  
						{
							//print_r($arrRowDeailts);die;
							$arrProddetails=$this->bilship_model->getproddetails($arrRowDeailts['id']);
							$selingprice = $arrRowDeailts['price'];
							$userid =  $this->session->userdata('userid');
						  	$threedy = $arrRowDeailts['options']['is_3d'];
							//echo $threedy;die;
							if($arrRowDeailts['options']['monotext'] !=""){
								$monotext=$arrRowDeailts['options']['monotext'];
							} else {
								$monotext ="";
							}
							
							if($arrRowDeailts['options']['monovalue'] !=""){
								$monovalue=$arrRowDeailts['options']['monovalue'];
							} else {
								$monovalue ="";
							}
							
							if($arrRowDeailts['options']['newmid'] !=""){
								$newmid=$arrRowDeailts['options']['newmid'];
							} else {
								$newmid=$arrRowDeailts['id'];
							}
							
							if(isset($arrRowDeailts['options']['details'])){
								$details=$arrRowDeailts['options']['details'];
							} else {
								$details="";
							}

							if( $arrRowDeailts['options']['prodid'] !="" ){
								$fabricid = $arrRowDeailts['options']['prodid'];
							} else {
								$fabricid = "";
							}
							
							 
							if(isset($arrRowDeailts['options']['toname'])){
								$toname = $arrRowDeailts['options']['toname'];
							} else {
								$toname = "";
							}

							if(isset($arrRowDeailts['options']['fromname'])){
								$fromname = $arrRowDeailts['options']['fromname'];
							} else {
								$fromname = "";
							}

							if(isset($arrRowDeailts['options']['email'])){
								$email = $arrRowDeailts['options']['email'];
							} else {
								$email = "";
							}

							if(isset($arrRowDeailts['options']['message'])){
								$message = $arrRowDeailts['options']['message'];
							} else {
								$message = "";
							}

							if(isset($arrRowDeailts['options']['theme'])){
								$theme = $arrRowDeailts['options']['theme'];
							} else {
								$theme = "";
							}
							
							$arrData=array(
									'order_id'=> $arrOrderId,
									'user_info_id'=> $userid,
									'product_id'=> $arrProddetails->id,
									'order_item_code'=> $arrProddetails->id,
									'order_item_code'=> $arrProddetails->id,
									'order_item_name'=> $arrRowDeailts['name'],
									'product_quantity'=> $arrRowDeailts['qty'],
									'product_item_price'=> number_format($selingprice,'2','.',''),
									'order_item_currency'=> $this->session->userdata('currencycode'),
									'order_status'=> $order_status,
									'sizeid'=> $sizeid,
									'save3d'=> $arrRowDeailts['options']['is_3d'],
									'cdate'=> date('Y-m-d H:i:s'),
									'monotext' => $monotext,
									'monovalue' => $monovalue,
									'measureid' => $newmid,
									'details3d'=> $details,
									'fabricid'=> $fabricid,
									'toname'=> $toname,
									'fromname'=> $fromname,
									'email'=> $email,
									'message'=> $message,
									'theme'=> $theme,
  							);
							//echo "<pre>";print_r($arrData);die();
							$this->bilship_model->saveOrderFromCart($arrData);  
							//$id=$arrRowDeailts['options']['colorid'];
							//$data['result'] =$this->home_model->getcolorname($id);
							
							
							//$id=$this->session->userdata('sizeid');
							//echo($id);die();
							$dataa['result'] = $this->home_model->getsize($sizeid);
							//print_r($dataa['result']);die();
							
							/*if($this->session->userdata('giftwrap') != "")   
							$id=$this->session->userdata('giftwrap');
							$gift['result'] =$this->home_model->getvalue($id);*/
							//print_r($gift['result']);die();
							
							/*$productdetailmail .= "<tr><td colspan='4'><h2 style='margin-bottom: 0 !important;text-align: left;'>".$i." . ".$arrProddetails->name."</h2></td></tr>";
							$productdetailmail .= "<tr>";
									 if($dataa['result'] !="") {
								$productdetailmail .="<td style='border-bottom: 2px dotted #000;'>Size</td>";
								}
									$productdetailmail .="<td style='border-bottom: 2px dotted #000;'>Quantity</td>
									<td style='border-bottom: 2px dotted #000;'>Price</td> 
								</tr>
							 ";
							$productdetailmail .= " 
								 
								<tr>";
								 if($dataa['result'] !=""){
									$productdetailmail .="<td>".$dataa['result']."</td>";
									}
									$productdetailmail .="<td>".$arrRowDeailts['qty']."</td>";
									$productdetailmail .='<td>'.$selingprice.'/-</td>';
									
								$productdetailmail .= "</tr>
							";	*/
						$i++;
						$pvalue = ($pvalue +  ($arrProddetails->price * $arrRowDeailts['qty']));
						}  
						
							 
					/*	$productdetailmail .= "</table></br></br>";
						 		  
					    $message = '<div style="width:600px; height:auto; margin:0 auto;">
				
							<p>Hello '.$this->session->userdata('username').',</p>
							<p>Your Order No '.$this->session->userdata('order_number').' is being processed.</p>
							<p> Order ID: '.$arrOrderId.'</p>
							';
							 
						    $data['result'] = $this->bilship_model->shippingaddress_active($arrRowDeailts['id']);
							//print_r($data['result']);die;
							$data['result']->id;
							
							 
						$message .= $productdetailmail; 
						$message .= "  
						
				</br></br>
												
			<table align='right'> 		 	 
				<tr><td>Shipment Value: </td><td>".($selingprice)."</td></tr>";				
				if($this->session->userdata('shipping_cost') != "" && $this->session->userdata('shipping_cost')>0) { $message .= '<tr><td>Shipping Cost :</td><td> '.$this->session->userdata('shipping_cost').'</td></tr>'; }  	
				//if($gift['result'] != "") { $message .= '<tr><td>Gift Wrap :</td><td> '.$gift['result'].'</td></tr>'; }  
				
				
				if($additionalamt != "0") { $message .= '<tr><td>COD Charge: </td><td> '.$additionalamt.'</td></tr>'; } 
				if($this->session->userdata('couponprice') != "")  { $message .= '<tr><td>Coupon Discount :</td><td> '.$this->session->userdata('couponprice').'</td></tr>'; }  
				
				if($this->session->userdata('couponcode') != "") { $message .= '<tr><td>Coupon Name :</td><td> '.$this->session->userdata('couponcode').'</td></tr>'; } 
				
				//if($arrProddetails->discount != "" && $arrProddetails->discount>0) { $message .= '<tr><td>Discounts :</td><td> '.$arrProddetails->discount.'%</td></tr>'; } 
				
				$message .= '<tr><td style="border-top: 2px solid #000;">Total Amount :</td><td style="border-top: 2px solid #000;">'.($this->session->userdata('total_amount')+$additionalamt).'</td></tr>
				
			</table>
									 ';
										 
						$message .= "<table> 
						

				<tr>
					</br></br></br></br></br></br></br></br></br>
												
						<table> 
								<th align='left'>Delivery Address: </th>
								<tr><td>".$data["result"]->Name.",</td></tr>
								<tr><td>".$data["result"]->Address1.",</td></tr>
								<tr><td>".$data["result"]->City.",</td></tr>
								<tr><td>".$data["result"]->State.",</td></tr>
								<tr><td>India.</td></tr>
								<tr><td>".$data["result"]->Zip.",</td></tr>
								<tr><td>".$data["result"]->Phone."</td></tr>

						</table>
										</td>
				</tr>
								</table>";
										$message .='<p align="left"> 
										We hope you enjoyed shopping at Stylior.com</p>
				</div>
										 
										</div>
										'; 
										//echo $message;die();
										$to = $this->session->userdata('email'); 
										$subject  = 'Thank you for shopping with Stylior.com';  
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: stylior.com <info@stylior.in>' . "\r\n" .
													'Reply-To: stylior@gmail.com' . "\r\n" .
													'X-Mailer: PHP/' . phpversion();
										//$headers .= 'Cc: info@ollobra.com' . "\r\n";
										mail($to, $subject, $message, $headers);
										mail('amvisolution@gmail.com', $subject, $message, $headers);	
 						*/				
							   						
						 $response = $this->bilship_model->addbillship();

		if($id =='1'){ 
			redirect($this->config->item('base_url').'bilship/makepay');
		} else {
			redirect($this->config->item('base_url').'bilship/paypal');
		}	
	}
	
	function makepay(){
		 
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('payment.php',$data);
	}

	function paypal(){
		echo "paypal"; die;
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('paypal.php',$data);
	}

	function makepayment()
	{		
		//echo "makepayment"; die;
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('paymentway.php',$data);
	}
	
 function checkout($id)
 {
	 echo "checkout"; die;
		//echo $this->session->userdata('measuredid');die;
		if($this->session->userdata('sizeid') !=""){
			$sizeid=$this->session->userdata('sizeid');
		} else {
			$sizeid="0";
		}
		 
		$intOrderNumber=$this->bilship_model->getOrderNumber(); 
		//echo $intOrderNumber;die;			
		//echo $this->session->userdata('total_amount');die;
		$order_number = array('order_number'  => $intOrderNumber);
		$this->session->set_userdata($order_number);
	 
			if($id == '1'){
				$systemsvaribale = $this->footer->systemsvaribale();
				$order_status = 'P';
				$paymentmode = '';
				$additionalamt = $systemsvaribale->codextra;
			} else if ($id == '2'){
				$order_status = 'C';
				$paymentmode = 'Online Payment';
				$additionalamt = '0';
			}	 
		$content=array(
			'user_id'=> $this->session->userdata('userid'),
			'order_number'=> $intOrderNumber,
			'order_invoice'=> $intOrderNumber,
			'user_info_id'=> $this->session->userdata('userid'),
			'order_total'=> $this->session->userdata('total_amount')+$additionalamt, 
			'order_currency'=> $this->session->userdata('currencycode'),
			'order_status'=> $order_status,
			'paymentmode'=> $id,
			'additionalcharge' => $additionalamt,
			'cdate'=> date('Y-m-d H:i:s'),
			'shippingcost' => $this->session->userdata('shipping_cost'), 
			'is_gift' => $this->session->userdata('giftwrap'),
			'coupondiscount' => $this->session->userdata('couponprice'), 
			'couponname' => $this->session->userdata('couponcode'),
			'tbl_coupan_name' => $this->session->userdata('coupanname'),
			'voucherdisc' => $this->session->userdata('voucherprice'), 
			'vouchercode' => $this->session->userdata('vouchercode'),
			'vouchervalue' => $this->session->userdata('vouchervalue'),
			'wallet_amount' => $this->session->userdata('mywalletdata'),
			'ip_address'=>$_SERVER['REMOTE_ADDR']);
			
			// echo "<pre>";print_r($content);die();
						$productdetailmail = '';
						
				
 		$arrOrderId=$this->bilship_model->saveOrderInDatabase($content,$this->session->userdata('order_number'));  
		//$this->bilship_model->updatemeasure($arrOrderId);  
		
						$i=1;
						$productdetailmail .= "<table cellpadding='5' style='border-top:2px solid #000;width: 600px;text-align: center;'>";
						$pvalue = '0';
						foreach($this->cart->contents() as $arrRowDeailts )  
						{
							 
							$arrProddetails=$this->bilship_model->getproddetails($arrRowDeailts['id']);
							$selingprice = $arrProddetails->sellingprice;
							$userid =  $this->session->userdata('userid');
							
							$arrData=array(
									'order_id'=> $arrOrderId,
									'user_info_id'=> $userid,
									'product_id'=> $arrProddetails->id,
									'order_item_code'=> $arrProddetails->id,
									'order_item_name'=> $arrProddetails->name,
									'product_quantity'=> $arrRowDeailts['qty'],
									'product_item_price'=> $selingprice,
									'sizeid'=> $sizeid,
									'cdate'=> date('Y-m-d H:i:s'),
									'monotext' => $arrRowDeailts['options']['monotext'],
									'monovalue' => $arrRowDeailts['options']['monovalue'],
									'measureid' => $arrRowDeailts['options']['newmid'],
									
									//'colorid'=> $arrRowDeailts['options']['colorid'],
									 
									 
 							);
							//echo "<pre>";print_r($arrData);die();
							$this->bilship_model->saveOrderFromCart($arrData);  
							//$id=$arrRowDeailts['options']['colorid'];
							//$data['result'] =$this->home_model->getcolorname($id);
							
							
							//$id=$this->session->userdata('sizeid');
							//echo($id);die();
							$dataa['result'] =$this->home_model->getsize($sizeid);
							//print_r($dataa['result']);die();
							
							/*if($this->session->userdata('giftwrap') != "")   
							$id=$this->session->userdata('giftwrap');
							$gift['result'] =$this->home_model->getvalue($id);*/
							//print_r($gift['result']);die();
							
							$productdetailmail .= "<tr><td colspan='4'><h2 style='margin-bottom: 0 !important;text-align: left;'>".$i." . ".$arrProddetails->name."</h2></td></tr>";
							$productdetailmail .= "<tr>";
									 if($dataa['result'] !="") {
								$productdetailmail .="<td style='border-bottom: 2px dotted #000;'>Size</td>";
								}
									$productdetailmail .="<td style='border-bottom: 2px dotted #000;'>Quantity</td>
									<td style='border-bottom: 2px dotted #000;'>Price</td> 
								</tr>
							 ";
							$productdetailmail .= " 
								 
								<tr>";
								 if($dataa['result'] !=""){
									$productdetailmail .="<td>".$dataa['result']."</td>";
									}
									$productdetailmail .="<td>".$arrRowDeailts['qty']."</td>";
									/*if($arrProddetails->discount != "0" && $arrProddetails->discount!="") {
										 $price = $arrProddetails->price - ( $arrProddetails->price * ($arrProddetails->discount/100)) ;
									$productdetailmail .='<td>'.$price.'/-</td>'; } else
									{*/
											//$price=$arrProddetails->price;
											//echo $price;die;
											$productdetailmail .='<td>'.$selingprice.'/-</td>';
											// }
									
									
								$productdetailmail .= "</tr>
							";	
						$i++;
						$pvalue = ($pvalue +  ($arrProddetails->price * $arrRowDeailts['qty']));
						}  
						
							 
					/*	$productdetailmail .= "</table></br></br>";
						 		  
					    $message = '<div style="width:600px; height:auto; margin:0 auto;">
				
							<p>Hello '.$this->session->userdata('username').',</p>
							<p>Your Order No '.$this->session->userdata('order_number').' is being processed.</p>
							<p> Order ID: '.$arrOrderId.'</p>
							';
							 
						    $data['result'] = $this->bilship_model->shippingaddress_active($arrRowDeailts['id']);
							//print_r($data['result']);die;
							$data['result']->id;
							
							 
						$message .= $productdetailmail; 
						$message .= "  
						
				</br></br>
												
			<table align='right'> 		 	 
				<tr><td>Shipment Value: </td><td>".($selingprice)."</td></tr>";				
				if($this->session->userdata('shipping_cost') != "" && $this->session->userdata('shipping_cost')>0) { $message .= '<tr><td>Shipping Cost :</td><td> '.$this->session->userdata('shipping_cost').'</td></tr>'; }  	
				//if($gift['result'] != "") { $message .= '<tr><td>Gift Wrap :</td><td> '.$gift['result'].'</td></tr>'; }  
				
				
				if($additionalamt != "0") { $message .= '<tr><td>COD Charge: </td><td> '.$additionalamt.'</td></tr>'; } 
				if($this->session->userdata('couponprice') != "")  { $message .= '<tr><td>Coupon Discount :</td><td> '.$this->session->userdata('couponprice').'</td></tr>'; }  
				
				if($this->session->userdata('couponcode') != "") { $message .= '<tr><td>Coupon Name :</td><td> '.$this->session->userdata('couponcode').'</td></tr>'; } 
				
				//if($arrProddetails->discount != "" && $arrProddetails->discount>0) { $message .= '<tr><td>Discounts :</td><td> '.$arrProddetails->discount.'%</td></tr>'; } 
				
				$message .= '<tr><td style="border-top: 2px solid #000;">Total Amount :</td><td style="border-top: 2px solid #000;">'.($this->session->userdata('total_amount')+$additionalamt).'</td></tr>
				
			</table>
									 ';
										 
						$message .= "<table> 
						

				<tr>
					</br></br></br></br></br></br></br></br></br>
												
						<table> 
								<th align='left'>Delivery Address: </th>
								<tr><td>".$data["result"]->Name.",</td></tr>
								<tr><td>".$data["result"]->Address1.",</td></tr>
								<tr><td>".$data["result"]->City.",</td></tr>
								<tr><td>".$data["result"]->State.",</td></tr>
								<tr><td>India.</td></tr>
								<tr><td>".$data["result"]->Zip.",</td></tr>
								<tr><td>".$data["result"]->Phone."</td></tr>

						</table>
										</td>
				</tr>
								</table>";
										$message .='<p align="left"> 
										We hope you enjoyed shopping at Stylior.com</p>
				</div>
										 
										</div>
										'; 
										//echo $message;die();
										$to = $this->session->userdata('email'); 
										$subject  = 'Thank you for shopping with Stylior.com';  
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: stylior.com <info@stylior.in>' . "\r\n" .
													'Reply-To: stylior@gmail.com' . "\r\n" .
													'X-Mailer: PHP/' . phpversion();
										//$headers .= 'Cc: info@ollobra.com' . "\r\n";
										mail($to, $subject, $message, $headers);
										mail('amvisolution@gmail.com', $subject, $message, $headers);	
 						*/				
							   						
						 $response = $this->bilship_model->addbillship();
						// $rewards = $this->bilship_model->userrewards();
						 
						$this->session->unset_userdata('couponprice');
						 
						 //$this->session->unset_userdata('giftwrap');
						 
						$this->session->unset_userdata('couponcode');
						$this->session->unset_userdata('coupanname');
						$this->session->unset_userdata('shipping_cost');
						$this->session->unset_userdata('monotext');
						$this->session->unset_userdata('monovalue');
						$this->session->unset_userdata('voucherprice'); 
						$this->session->unset_userdata('vouchercode');
						$this->session->unset_userdata('vouchervalue');
						 	
						 $this->cart->destroy();
						 
						 redirect($this->config->item('base_url').'home/thanks');
 		 
	}
	
	function addaddress()
	{	
		$L_strErrorMessage='';
			$form_field = $data = array
			(
				'L_strErrorMessage' => '',
				
					'Name'      => '',
					'Address1'      => '',
					'Address2'      => '',
					'City'      => '',
					'State'      => '',
					'Zip'      => '',
					'Status'      => '',
					'country'      => '',
					'Phone'      => ''
				 
			);
	
	if($this->input->post('action') == 'addaddress') 
	{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
				  
						 $this->bilship_model->addaddress($data);
						$this->session->set_flashdata('L_strErrorMessage','Address Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'home/checkout');
 
					if ($this->validation->run() == FALSE)
					{
					$data['L_strErrorMessage'] = $this->validation->error_string;
					}
				else 
				{
 
					//$data['allcategory'] = $this->product_model->allcategory();
					$this->load->view('checkout',$data);
				}
	}
}
}