<?php
class Product extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }

		$this->load->model('product_model');
		$this->load->model('subcategory_model');
		$this->load->model('attribute_model');
	}
	
	function trackadd()
		{
		$form_field = $data = array(
			'trackadd' => '',
			'status'=>'',
			 
		);
		 

		if($this->input->post('action') == 'trackadd') 
		{
			 
			$id = $this->input->post('id');
			$status = $this->input->post('status');
			
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
				$orderdetail = $this->product_model->orderdetail($id);	//ci_order_item
				$uorderdetail = $this->product_model->uorderdetail($id);//	ci_orders
				//print_r($uorderdetail);die();
				$uaddress = $this->product_model->uaddress($uorderdetail[0]->order_number);//billship
				$prorderdetail = $this->product_model->prorderdetail($orderdetail[0]->product_id);//product detail
				$allprocolor = $this->product_model->allprocolor($uorderdetail[0]->order_id);//allcolor detail
				//print_r($allprocolor);die();
				if ($this->input->post('status') == '1' || $this->input->post('status') == '2')
				{
				if ($this->input->post('status') == '1'){	
				$message = '<div style="width:700px; height:auto; margin:0 auto;"> 
				<p>Dear Customer, </p>
			    <p>We would like to inform you that part of your chickkadee.com order has been Packed from our warehouse. You will receive this part of your order Shortly . </p>
				 
				
				<p>Shipping Detail:</p></br></br>
				
				<table>						
					<tr>
					<td>Order Id:</td><td>'.$orderdetail[0]->order_id.'</td>
					</tr>
					
					<tr>
					<td>Track Detail:</td><td>'.$this->input->post('trackadd').'</td>
					</tr>
					
				</table></br>
				
				<h3>Items in this Shipment:</h3></br>
				
				<table cellpadding="5" style="border-top:2px solid #000;width: 700px;text-align: center;">
			
					 ';
								if($orderdetail != '' && count($orderdetail) > 0)
								{ 
								//print_r($orderdetail);die();
								$message .= '<tr>
						<td style="border-bottom: 2px dotted #000;">Name</td>
						<td style="border-bottom: 2px dotted #000;">Colour</td>
						<td style="border-bottom: 2px dotted #000;">Size</td>
						<td style="border-bottom: 2px dotted #000;">Quantity</td>
						<td style="border-bottom: 2px dotted #000;">Price</td> 
					</tr>
					
					';
								 
								
								foreach($orderdetail as $orderdetails) { 
								$message .= '<tr> <td >
								'.$orderdetails->order_item_name.'</td> 	 ';
			   
					 
							
							$colour = $this->product_model->getcolorname($orderdetails->colorid);
							$size = $this->product_model->getsizename($orderdetails->sizeid);
							//echo($size);die();
							$message .=' <td>'.$colour.'</td>
							<td>'.$size.'</td>';
							$message .='<td>'.$orderdetails->product_quantity.'</td>
						<td>'.number_format($orderdetails->product_item_price,'2','.','').'</td></tr>';
					}
				}

 

					//$message .='';
					 
			$message .= '	</table>
			</br></br>
			
			<table align="right">		
				
					<tr>
					<td>Order Id:</td><td>'.$orderdetail[0]->order_id.'</td>
					</tr>';
					
				 
					
					
					
					if($uorderdetail[0]->shippingcost != "" && $uorderdetail[0]->shippingcost>0 ) {  
					//print_r($uorderdetail);die();
					$message .='<tr>
					<td>Shipping Charges:</td>
					<td>'.$uorderdetail[0]->shippingcost.'</td>
					</tr>' ;
					}
					
					if($uorderdetail[0]->is_gift == "1") {  
					$message .='<tr>
					<td>Gift Wrap:</td>
					<td>';
					$gift = $this->product_model->giftget();
					$message .=$gift[0]->giftwarpamt;
					$message .='</td>
					</tr>' ;
					}
					
				  if($uorderdetail[0]->additionalcharge != "") {  
					$message .='<tr>
					<td>COD Charges:</td><td>'.$uorderdetail[0]->additionalcharge.'</td>
					</tr>' ;
					}
					
					
					if($uorderdetail[0]->coupondiscount != "" && $uorderdetail[0]->coupondiscount !="0") { 
					$message .='<tr>
					<td>Coupon Discounts:</td><td>'.$uorderdetail[0]->coupondiscount.'</td>
					</tr>' ;
					}
					$message .='<tr><td>Total Amount:</td><td>'.number_format($uorderdetail[0]->order_total,'2','.','').'</td></tr>';
					
					$message .=' 
					
					</table></br></br></br></br></br></br></br></br>
			
					<p align="left">We will send you another email when the remaining items are Packed from our warehouse.</p>
					<p align="left"> If you need any assistance or have any questions, feel free to contact us by using the web form at http://www.chickkadee.com/.</p>
				
				</div>
				';
				
				 
				}
				if ($this->input->post('status') == '2'){	
				$message = '<div style="width:700px; height:auto; margin:0 auto;"> 
				<p>Dear Customer, </p>
			    <p>We would like to inform you that part of your chickkadee.com order has been Dispached  from our warehouse. You will receive this part of your order Shortly . </p>
				 
				
				<p>Shipping Detail:</p></br></br>
				
				<table>						
					<tr>
					<td>Order Id:</td><td>'.$orderdetail[0]->order_id.'</td>
					</tr>
					
					<tr>
					<td>Track Detail:</td><td>'.$this->input->post('trackadd').'</td>
					</tr>
					
				</table></br>
				
				<h3>Items in this Shipment:</h3></br>
				
				<table cellpadding="5" style="border-top:2px solid #000;width: 700px;text-align: center;">
			
					 ';
								if($orderdetail != '' && count($orderdetail) > 0)
								{ 
								
								$message .= '<tr>
						<td style="border-bottom: 2px dotted #000;">Name</td>
						<td style="border-bottom: 2px dotted #000;">Colour</td>
						<td style="border-bottom: 2px dotted #000;">Size</td>
						<td style="border-bottom: 2px dotted #000;">Quantity</td>
						<td style="border-bottom: 2px dotted #000;">Price</td> 
					</tr>
					
					';
								 
								
								foreach($orderdetail as $orderdetails) { 
								$message .= '<tr> <td >
								'.$orderdetails->order_item_name.'</td> 	 ';
			   
					 
						//print_r($roe);
							$colour = $this->product_model->getcolorname($orderdetails->colorid);
							$size = $this->product_model->getsizename($orderdetails->sizeid);
							//echo($size);die();
							$message .=' <td>'.$colour.'</td>
							<td>'.$size.'</td>';
							$message .='<td>'.$orderdetails->product_quantity.'</td>
						<td>'.number_format($orderdetails->product_item_price,'2','.','').'</td></tr>';
					}
				}

			$message .= '	</table>
			</br></br>
			
 
			
			<table align="right">		
				
					<tr>
					<td>Order Id:</td><td>'.$orderdetail[0]->order_id.'</td>
					</tr>';
					
				 
					
					
					
					if($uorderdetail[0]->shippingcost != "" && $uorderdetail[0]->shippingcost>0 ) {  
					//print_r($uorderdetail);die();
					$message .='<tr>
					<td>Shipping Charges:</td>
					<td>'.$uorderdetail[0]->shippingcost.'</td>
					</tr>' ;
					}
					
					if($uorderdetail[0]->is_gift == "1") {  
					$message .='<tr>
					<td>Gift Wrap:</td>
					<td>';
					$gift = $this->product_model->giftget();
					$message .=$gift[0]->giftwarpamt;
					$message .='</td>
					</tr>' ;
					}
					
				  if($uorderdetail[0]->additionalcharge != "") {  
					$message .='<tr>
					<td>COD charges:</td><td>'.$uorderdetail[0]->additionalcharge.'</td>
					</tr>' ;
					}
					
					
					if($uorderdetail[0]->coupondiscount != "" && $uorderdetail[0]->coupondiscount !="0") { 
					$message .='<tr>
					<td>Coupon Discounts:</td><td>'.$uorderdetail[0]->coupondiscount.'</td>
					</tr>' ;
					}
					$message .=' <tr><td>Total Amount:</td><td>'.number_format($uorderdetail[0]->order_total,'2','.','').'</td></tr>';
					
					$message .=' 
					
					</table></br></br></br></br></br></br></br></br>
			
					<p align="left">We will send you another email when the remaining items are Dispatched from our warehouse.</p>
					<p align="left"> If you need any assistance or have any questions, feel free to contact us by using the web form at http://www.chickkadee.com/.</p>
				
				</div>
				';
				}
				//echo $message;die();
				
				$data['udata'] = $this->product_model->udata($id);
				$uid=$data['udata']->user_id;
				$data['uemail'] = $this->product_model->uemail($uid);
				$uemail=$data['uemail']->email;
				
				$subject  = 'Order Status from chickkadee.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: chickkadee.com <info@fiveonlineclient.in>' . "\r\n" .
							'Reply-To: chickkadee@gmail.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion(); 
				mail($uemail, $subject, $message, $headers);
				
				}
				
				
			if($response = $this->product_model->trackadd($id,$data))
			{	
				$this->session->set_flashdata('L_strErrorMessage','Order Tracking Address Succcessfully!!!!');
				redirect($this->config->item('base_url').'product/order_manage');
			}
			else 
			{
				echo "<script>alert('Order Tracking Address is not added')</sctipt>";
				$data['L_strErrorMessage'] = 'Some Errors prevented from adding track address,please try later.';
				redirect($this->config->item('base_url').'product/order_manage');
			}
		}
		 
		
		$this->load->view('product/order_manage');
	}
	
	function add()
	{
		$L_strErrorMessage='';
		$form_field = $data = array(  
			'cname' => '',
			'categoryid' => '',
			'subcatid' => '', 
			'attributeid' => '',
			'pname' => '',
			'itemcode' => '',
			'shortcode' => '',
			'description' => '',
			'discount' => '',
			//'cup' => '',
			'price' => '',
			'colour' => '',
			'size' => '',
			
		);
		if($this->input->post('action') == 'add_product') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['cname'] = "trim|required";
			$rules['categoryid'] = "trim|required";
			$rules['subcatid'] = "trim|required";
			 
			$rules['attributeid'] = "trim|required";
			$rules['pname'] = "trim|required";
			$rules['itemcode'] = "trim|required";
			$rules['shortcode'] = "trim|required";
			$rules['description'] = "trim|required";
			$rules['discount'] = "trim|required";
			
			
			$this->validation->set_rules($rules);
			$fields['cname'] = "cname";
			$fields['categoryid'] = "categoryid";
			$fields['subcatid'] = "subcatid";
			 
			$fields['attributeid'] = "attributeid";
			$fields['pname'] = "pname";
			$fields['itemcode'] = "itemcode";
			$fields['shortcode'] = "shortcode";
			$fields['description'] = "description";
			$fields['discount'] = "discount";
			$this->validation->set_fields($fields);
				/*if($response =)
					{*/
						 $this->product_model->add($data);
						$this->session->set_flashdata('L_strErrorMessage','Product Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'product/lists');

						
					/*}
					else 
					{
						echo "<script>alert('Product is not successfull')</sctipt>";
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						redirect($this->config->item('base_url'));
					}*/
					
					if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} else {

					
					if(!$this->product_model->is_category_already_exist_add($this->input->post('cname')))
					{
						if($response = $this->product_model->add($data))
						{
							$this->session->set_flashdata('L_strErrorMessage','Category Added Successfully!!!');
							redirect($this->config->item('base_url').'product/lists');
 						}
						else 
						{
							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						}
					}	
					else
					{
						$data['L_strErrorMessage'] = 'Category already exist!';
					}
			}
		}
		 
		$data['allcategory'] = $this->product_model->allcategory();
		$data['allcategory1'] = $this->product_model->allcategory1();
		$data['allcolour'] = $this->product_model->allcolour();
	
		$data['allattributes'] = $this->product_model->allattributes();
		$this->load->view('add_product',$data);
	}
	
	function inventory($id)  
	{
  		$data['result'] = $this->product_model->get_product($id);
		$this->load->view('show_inventory', $data);
	}
	
	function updatedata($color,$size,$pid,$val=''){
		
		if($val == ''){
			$val = '0';
		}
		 

		$this->product_model->updatedata($color,$size,$pid,$val);
	    $this->session->set_flashdata('item', 'Stock Updated Successfully');
		redirect($this->config->item('base_url').'product/inventory/'.$pid);
	}
	
	
	function order_manage()
	{
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/order_manage/';
		$config['per_page'] = '15'; 
		$data['username'] = $this->input->post('username');
		$data['status'] = $this->input->post('status');
		$return = $this->product_model->order_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$this->load->view('order',$data);   
	 	
	}
	
	function cancelor()
	{
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/cancelor/';
		$config['per_page'] = '15'; 
		$data['username'] = $this->input->post('username');
		$data['status'] = $this->input->post('status');
		$return = $this->product_model->cancelorder_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$this->load->view('cancelorder',$data);   
	 	
	}
	
	function cancelorder($user_id)
	{
			//echo $user_id;die(); order id
			if($this->input->post("action")=="cancelorder"){
			$cancel_resone = $this->input->post("cancel_resone");
			$cancelorder = $this->product_model->cancelorder($user_id,$cancel_resone);
			
			//my function
				$canorderdet = $this->product_model->canorderdet($user_id);
				//print_r($canorderdet);die();
				$canordetail = $this->product_model->canorddetail($canorderdet->order_id);
				//echo "<pre>";	print_r($canordetail);
				$userinfo = $this->product_model->userinfo($canorderdet->user_id);
				//print_r($userinfo); die();
			
			$message = '<div style="width:700px; height:auto; margin:0 auto;"> 
				<p>Hello, </p>
			    <p>Below Order has been cancelled by Admin.</p>
				<p>Cancel reason as below,</p>
				<p>'.$this->input->post("cancel_resone").'</p>
				
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
				
				 
				';
				 
				$useremail=$userinfo->email;
				//echo $message ; die();
				$subject  = 'Order Cancellation from chickkadee.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: chickkadee.com <info@fiveonlineclient.in>' . "\r\n" .
							'Reply-To: chickkadee@gmail.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				mail('amvisolution@gmail.com', $subject, $message, $headers);
				mail($useremail, $subject, $message, $headers);
			
			
			
			$this->session->set_flashdata('L_strErrorMessage','Order Cancelled Succcessfully!!!!');
			redirect($this->config->item('base_url').'product/order_manage');
		}
	}
	
	function order_detail($id)  
	{
		$data['orderdetails'] = $this->product_model->order_detail($id); 
		$order_invoice = $data['orderdetails']->order_invoice;
		$data['shippingdetails'] = $this->product_model->shippingdetails($order_invoice);
		//print_r($data['shippingdetails']);die();
		$data['orderitems'] = $this->product_model->orderitems($id);
		$this->load->view('order_detail',$data);
	}
	
	function deleteorder($id)  
	{	
	
		{
		$this->product_model->orderdlt($id); 
		}	
		$this->session->set_flashdata('L_strErrorMessage','Cancel Order Deleted Succcessfully!!!!');
		redirect($this->config->item('base_url').'product/cancelor');
	}
 
	function editimage($id)
	{
	 	
		$data['L_strErrorMessage'] = '';
 

		if ($this->input->post('action') == 'edit' && is_numeric($id)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."products/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/medium/".$logoname; 
				
				$height=380;
				$width=300;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/large/".$logoname; 
				
				$height=495;
				$width=430;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();


				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/small/".$logoname; 
				
				$height=185;
				$width=132;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

			
				$newdata1 = array(
					'pid'   => $id,
					'image'	=> $logoname,
				);
 
				$id222 = $this->product_model->add_product_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->product_model->presult($id);
		$data['productimages'] = $this->product_model->productimages($id); 
		$this->load->view('editimage',$data);
		
		 
	}
	function getsubsubcat(){
		$id = $this->input->post('id');
		$result = $this->product_model->getsubsubcat($id);
		$html =' <select id="subcatid" name="subcatid[]" class="form-control" onchange="newaddcat(this.value);" multiple="multiple">
								<option value="" selected="selected">Select Sub Category</option>';
				if($result != '' && count($result)){
					foreach($result as $res){
						$html .= "<option value='".$res->id."'>".$res->scname."</option>";
					}
				
				}				
		$html .= '</select>';						
		
		echo $html;
	}
    function edit($id)
	{		
			if(is_numeric($id)){
			$result = $this->product_model->get_product($id);  
			$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'pname' =>  $result[0]->pname,
						'categoryid' =>  $result[0]->categoryid,
						'subcatid' =>  $result[0]->subcatid, 
  					    'itemcode' => $result[0]->itemcode,
						'shortcode' =>  $result[0]->shortcode,
					    'description' => $result[0]->description,
						'discount' => $result[0]->discount,
						//'cupid' => $result[0]->cup,
						'price' => $result[0]->price,
						'colour' => $result[0]->colour,
						'size' => $result[0]->size,
						//'featured_product' => $result[0]->featured_product
						
						);  
				
			if($this->input->post('action') == 'edit_product') {
			
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['pname'] = "trim|required";
			 
			//$rules['discount']       = "trim|required";
			
			$this->validation->set_rules($rules);
			$fields['pname']   = "pname";
		    
			//$fields['discount']       = "discount";
		     
		
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
			} else {
					/*if($response =) { */
					$this->product_model->edit($id, $form_field);
					$this->session->set_flashdata('L_strErrorMessage','Product Updated Succcessfully!!!!');
					redirect($this->config->item('base_url').'product/lists');
						/*} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}*/
						
				}
			}
			$data['allcategory'] = $this->product_model->allcategory();
			$data['allcategory1'] = $this->product_model->allcategory1();
			$data['allcolour'] = $this->product_model->allcolour();
		 
			$data['allattributes'] = $this->product_model->allattributes();
			$data['productattr'] = $this->product_model->productattr($id);  			
 			$this->load->view('edit_product',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'product/lists');
		}
	}

	function groupproduct($id)
	{		
			$data = array();
			if(is_numeric($id)){
			$data['result'] = $this->product_model->get_product($id); 
			$data['searchproducts'] = ''; 
			if($this->input->post('action') == 'add_product') { 
					$data['searchproducts'] = $this->product_model->searchproducts($_POST);
			}
			$data['groupid'] = $id;	
			$this->load->view('groupprodut',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'product/lists');
		}
	}
	
	function addtogroup($addid,$pid){
		$productid = $this->product_model->get_product($pid); 
		$grpid = $productid[0]->groupedprod;
		
		if($grpid == ''){
			$toupdatid = $addid;
		} else {
			$toupdatid = $grpid.",".$addid;
		}
		
		$this->product_model->udpategroup($pid,$toupdatid);
		$this->session->set_flashdata('L_strErrorMessage','Group Product has been added successfully');
		redirect($this->config->item('base_url').'product/groupproduct/'.$pid);
		
	}
	
	function array_delete(&$array, $value, $strict = TRUE) {
		$count = 0;
		if ($strict) {
			foreach ($array as $key => $item) {
				if ($item === $value) {
					$count++;
					unset($array[$key]);
				}
			}
		} else {
			foreach ($array as $key => $item) {
				if ($item == $value) {
					$count++;
					unset($array[$key]);
				}
			}
		}
		return $count;
	}
	
	function removeproducttogroup($addid,$pid){
		$productid = $this->product_model->get_product($pid); 
		$grpid = $productid[0]->groupedprod;
		$grouparray = explode(',',$grpid);
		
		$this->array_delete($grouparray,$addid,$strict = TRUE); 
		//print_r($grouparray);die;
		
		if($grouparray != '' && count($grouparray) > 0){
			$toupdatid = implode(',',$grouparray);
		} else {
			$toupdatid = '';
		}
		$this->product_model->udpategroup($pid,$toupdatid);
		$this->session->set_flashdata('L_strErrorMessage','Group Product has been added successfully');
		redirect($this->config->item('base_url').'product/groupproduct/'.$pid);
		
	}
	

	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/lists/';
		$config['per_page'] = '30';
		$config['first_url']='0';
		$data['cname'] = $this->input->post('cname');
		$data['pname'] = $this->input->post('pname');
		$data['itemcode'] = $this->input->post('itemcode');
		$data['shortcode'] = $this->input->post('shortcode');
		$data['description'] = $this->input->post('description');
		$data['discount'] = $this->input->post('discount');
		$per_page = '1';
		$perpage = '3';
		$return = $this->product_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('product', $data);
	}
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->product_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Product Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'product/lists');
	}

	function ajaxlist_product()
	{
		//echo 11;exit;
		$news = "";
		$result = $this->product_model->product_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$news .= $result[$i]->title.",";
		}
		echo $news = substr($news, 0, -1);
	}
	
	function product_murge()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/product_murge'; 
		$config['per_page'] = '10'; 
		$config['first_url']='0';
		$data['title'] = $this->input->post('title');
		$per_page = '1';
		$perpage = '3';
		$return = $this->product_model->product_murge($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('product',$data);
		
	}
	
	 


function newadcatselect(){
		$id = $this->input->post('id');
		$result = $this->product_model->getsubcatlist($id);
		$html =' <select id="subsubid" name="subsubid" class="form-control" >
								<option value="">Select Subsub Category</option>';
				if($result != '' && count($result)){
					foreach($result as $res){
						$html .= "<option value='".$res->id."'>".$res->subname."</option>";
					}
				
				}				
		$html .= '</select>';						
		
		echo $html;
	}

	function setbaseimg($id,$pid)
	{
 
		$return = $this->product_model->setbaseimg($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
	}
	
	function updateorder($val,$id,$pid){
		$return = $this->product_model->updateorder($id,$val);
		$this->session->set_flashdata('item', 'Product Image Updates Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
		
	}
	
	function removeimage($id,$pid)
	{
 
		$return = $this->product_model->removeimage($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
	}

	

	
}
?>