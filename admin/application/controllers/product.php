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
		$this->load->model('users_model');
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
			$statid = $this->input->post('status');
			$status = $this->product_model->getstatusname($statid);
			 //PRINT_R($status);DIE;
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
				$orderdetail = $this->product_model->orderdetail($id);	//ci_order_item
				//echo "<pre>";print_r($orderdetail);die;
				$uorderdetail = $this->product_model->uorderdetail($id);//	ci_orders
			
				$uaddress = $this->product_model->uaddress($uorderdetail[0]->order_number);//billship
				if($orderdetail[0]->product_id !=""){
				$prorderdetail = $this->product_model->prorderdetail($orderdetail[0]->product_id);//product detail
				}
				$allprocolor = $this->product_model->allprocolor($uorderdetail[0]->order_id);//allcolor detail
				$format = $this->product_model->getusermail();
				if ($status == 'Packed' || $status == 'Dispatched')
				{
				
				$message= $format[0]->order_status;
				if ($status == 'Packed'){
				$message = str_replace('{INVOICESTATUS}','Packed',$message);
				}
				if ($status == 'Dispatched'){	
				$message = str_replace('{INVOICESTATUS}','Dispatched',$message);
				}
				$message = str_replace('{INVOICEORDER}',$orderdetail[0]->order_id,$message);
				$message = str_replace('{INVOICEADDRESS}',$this->input->post('trackadd'),$message);
					if($orderdetail != '' && count($orderdetail) > 0)
					{ 
						foreach($orderdetail as $orderdetails) { 
										 
									$message = str_replace('{INVOICENAME}',$orderdetails->order_item_name,$message);
									$colour = $this->product_model->getcolorname($orderdetails->colorid);
									$message = str_replace('{INVOICECOLOR}',$colour,$message);
									$size = $this->product_model->getsizename($orderdetails->sizeid);
								 
									$message = str_replace('{INVOICESIZE}',$size ,$message);
									$message = str_replace('{INVOICEQUANTITY}',$orderdetails->product_quantity,$message);
									$message = str_replace('{INVOICEPRICE}',number_format($orderdetails->product_item_price,'2','.',''),$message);
									
									 
							}
						}
					$message = str_replace('{INVOICETOTAL}',number_format($uorderdetail[0]->order_total,'2','.',''),$message);
				 
				//echo $message;die;
				
				$data['udata'] = $this->product_model->udata($id);
				$uid=$data['udata']->user_id;
				$data['uemail'] = $this->product_model->uemail($uid);
				$uemail=$data['uemail']->email;
				
				$subject  = 'Order Status from Stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: Stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
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
			//'size' => '',
			'style_id' => '',
			'name' => '',
			'price1' => '',
			'sellingprice1' => '',
			'title'      => '',
			'metadescription'      => '',
			'keyword'      => '',
			'startdate'      => '',
			'enddate'      => '',
			'designid'      => '',
			'fabricid'      => '',
			'weight'      => '',
			'pageurl'      => '',
			'qty'      => '',
			'is_trail_shirt'=>'',
			
		);
		if($this->input->post('action') == 'add_product') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);
								
			}
			//echo "<pre>"; print_r($data);die;
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
		$data['allstyle'] = $this->product_model->allstyle();
		$data['allnewfabric'] = $this->product_model->allnewfabric();
		$data['alldesign'] = $this->product_model->alldesign();
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
		$data['cancel'] = $this->input->post('cancel');
		$data['order_status'] = $this->input->post('order_status');
		$data['startdate'] = $this->input->post('startdate');
		$data['enddate'] = $this->input->post('enddate'); 		
		$return = $this->product_model->order_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$data['allstatus']=$this->product_model->allstatus();
		$this->load->view('order',$data);   
	 	
	}
	function order_pending()
	{
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/order_manage/';
		$config['per_page'] = '15'; 
		$data['username'] = $this->input->post('username');
		$data['status'] = $this->input->post('status');
		$data['cancel'] = $this->input->post('cancel');
		$data['order_status'] = $this->input->post('order_status');
		$data['startdate'] = $this->input->post('startdate');
		$data['enddate'] = $this->input->post('enddate'); 		
		$return = $this->product_model->order_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$data['allstatus']=$this->product_model->allstatus();
		$this->load->view('order_pending',$data);   
	 	
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
				$subject  = 'Order Cancellation from Stylior.com';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: Stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
				//mail('amvisolution@gmail.com', $subject, $message, $headers);
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
		$data['allstatus']=$this->product_model->allstatus();
		$this->load->view('order_detail',$data);
	}

	function invoice($id)  
	{
		$data['orderdetails'] = $this->product_model->order_detail($id); 
		$order_invoice = $data['orderdetails']->order_invoice;
		$data['shippingdetails'] = $this->product_model->shippingdetails($order_invoice);
		$data['orderitems'] = $this->product_model->orderitems($id);
		$this->load->view('invoice',$data);
	}
	
		function ship_invoice($shipid,$ci_itemid)  
	{
		$data['orderdetails'] = $this->product_model->getorder_detail($ci_itemid); 
		//echo "<pre>";print_r($data['orderdetails']);die;
		$orderid= $data['orderdetails']->order_id;
		$data['shippingdetails'] = $this->product_model->shippingdetails($orderid);
		//print_r($data['shippingdetails']);die;
		//$data['orderitems'] = $this->product_model->orderitems($orderid);
		//print_r($data['orderitems']);die;
		$this->load->view('ship_invoice',$data);
	}

	function bookorder($id)  
	{
		$data['orderdetails'] = $this->product_model->order_detail($id); 
		$order_invoice = $data['orderdetails']->order_invoice;
		$data['shippingdetails'] = $this->product_model->shippingdetails($order_invoice);
		$data['orderitems'] = $this->product_model->orderitems($id);
		$this->load->view('bookorder',$data);
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
				
				$height=361;
				$width=235;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = true;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();
 
				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/large/".$logoname; 
				
				$height=714;
				$width=500;
				
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = true;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();


				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/small/".$logoname; 
				
				$height=143;
				$width=100;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = true;
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
	function addimage($style_id,$proid)
	{
	 	
		$data['L_strErrorMessage'] = '';
 
		/*
			
500x714

980x1400

253x361

100x143
		*/
		if ($this->input->post('action') == 'edit' && is_numeric($proid)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."allstyle/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."allstyle/".$logoname;
				$image_thumb= $this->config->item('upload')."allstyle/medium/".$logoname; 
				
				$height=361;
				$width=235;
				
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

				$tmp_path = $this->config->item('upload')."allstyle/".$logoname;
				$image_thumb= $this->config->item('upload')."allstyle/large/".$logoname; 
				
				$height=714;
				$width=500;
				
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


				$tmp_path = $this->config->item('upload')."allstyle/".$logoname;
				$image_thumb= $this->config->item('upload')."allstyle/small/".$logoname; 
				
				$height=143;
				$width=100;
				
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
					'pid'   => $proid,
					'style_id'   => $style_id,
					'image'	=> $logoname,
				);
 
				$id222 = $this->product_model->add_style_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->product_model->presultss($style_id);
		//print_r($data['result']);
		$data['productimages'] = $this->product_model->styleimage($style_id); 
		$this->load->view('neweditimage',$data);
		
		 
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
						//'sellingprice' => $result[0]->sellingprice,
						'colour' => $result[0]->colour,
						//'size' => $result[0]->size,
						'title' => $result[0]->title,
						'metadescription' => $result[0]->metadescription,
						'keyword' => $result[0]->keyword,
						'startdate' => $result[0]->startdate,
						'enddate' => $result[0]->enddate,
						'fabricid' => $result[0]->fabricid,
						'designid' => $result[0]->designid,
						'weight' => $result[0]->weight,
						'pageurl' => $result[0]->pageurl,
						'qty' => $result[0]->qty,
						//'featured_product' => $result[0]->featured_product
						'is_trail_shirt'=> $result[0]->is_trail_shirt,
						
						);  
	/*echo "<pre>";
print_r($data);exit;*/	
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
				
 
					/* echo "<pre>";
					print_r($form_field);exit; */
					
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
			$data['allstyle'] = $this->product_model->allstyle();
			//print_r($data['allstyle']);die;
			$data['allattributes'] = $this->product_model->allattributes();
			$data['productattr'] = $this->product_model->productattr($id);  	
			$data['pro_style'] = $this->product_model->pro_style($id);	
			$data['allnewfabric'] = $this->product_model->allnewfabric();
			$data['alldesign'] = $this->product_model->alldesign();
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
	function remove($id,$pid)
	{
		//echo $id.$orderid; die();
			if($this->product_model->deleteorder($id,$pid)) 
			{
				$this->session->set_flashdata('flashError','Data Remove Succcessfully!!');
				redirect($this->config->item('base_url').'product/edit/'.$pid);
			}  
			else 
			{
				$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
				break;
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
		$config['per_page'] = '15';
		$config['first_url']='0';
		$data['cname'] = $this->input->post('cname');
		$data['catid'] = $this->input->post('catid');
		$data['subcatid'] = $this->input->post('subcatid');
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
		$data['allcategory'] = $this->product_model->allcategory();
		$data['subcategory'] = $this->product_model->allcategory1();
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
	function deletes1()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->product_model->deletes1($selCheck)) {
					$this->product_model->deletes2($selCheck);
					$this->session->set_flashdata('flashError','Order Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'product/order_manage');
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
	/*function ajaxlist_group()
	{
		//echo 11;exit;
		$news = "";
		$result = $this->product_model->product_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$news .= $result[$i]->pname.",";
		}
		echo $news = substr($news, 0, -1);
	}*/
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
	function threedyimg($id,$pid)
	{
 
		$return = $this->product_model->threedyimageset($id,$pid);
		$this->session->set_flashdata('item', '3D Image set Successfully.');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
	}
	
	
	function setbaseimg1($id,$pid,$stid)
	{
		//echo "imageid".$id."proid".$pid."styleid".$stid;die;
		$return = $this->product_model->setbaseimg1($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'product/addimage/'.$stid.'/'.$pid);
	}
	
	function updateorder($val,$id,$pid){
		$return = $this->product_model->updateorder($id,$val);
		$this->session->set_flashdata('item', 'Product Image Updates Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
		
	}
	function updateorder1($val,$id,$pid,$styleid){
		//echo $styleid; die;
		$return = $this->product_model->updateorder1($id,$val);
		$this->session->set_flashdata('item', 'Style Image Updates Successfully');
		redirect($this->config->item('base_url').'product/addimage/'.$styleid.'/'.$pid);
		
	}
	
	function removeimage($id,$pid)
	{
 
		$return = $this->product_model->removeimage($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
	}
		function removeimage1($id,$pid,$style_id)
	{
		//echo $id;die;
		$return = $this->product_model->removeimage1($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'product/addimage/'.$style_id.'/'.$pid);
	}
	 
	
	function download()
	{
	
		//print_r($pla);die;
		$output1 = '';
		$planning1 = $this->product_model->getorder();
		//$planning = $this->planning_model->getplan($id);
		//$output .= 'user-';
		//$output .= ''.$this->session->userdata('username').'';
		//$output .="\n";
		//$output .="\n";
		
 		$output1 .= 'Customer Name, Order Id, Order Number, Order Total, Order Date' ;
		$output1 .="\n";
		// Get Records from the table
		if($planning1 != '' && count($planning1) > 0) {
		foreach($planning1 as $plan) {
		 $uname=$this->product_model->getusername($plan->user_info_id);
		$output1 .= '"'.$uname.'","'.$plan->order_id.'","'.$plan->order_number.'","'.$plan->order_total.'","'.$plan->cdate .'" ';  
		$output1 .="\n";
		}
	}
		$filename = "order_report.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		echo $output1;
		exit;
	
	}
	 function ajaxlist_search()
	{
		//echo 11;exit;
		$news = "";
		$result = $this->product_model->ajaxlist_search();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			$news .= $result[$i]->pname.",";
	
		}
		echo $news = substr($news, 0, -1);	
	}
	function shipment($order_id)
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$config['base_url'] = $url_to_paging.'product/shipment/';
		$config['per_page'] = '15';
		$config['first_url']='0';
		$data['order_id'] = $order_id;
		 
		$data['startdate'] = $this->input->post('startdate');
		$data['enddate'] = $this->input->post('enddate');
		
		$per_page = '1';
		$perpage = '3';
		$return = $this->product_model->shipment_lists($config['per_page'],$page, $data);
		$data['result'] = $return['result'];
		//echo "<pre>";print_r($data['result']);die;
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		//$data['allcategory'] = $this->product_model->allcategory();
		//$data['subcategory'] = $this->product_model->allcategory1();
		$data['allstatus']=$this->product_model->allstatus();
		$data['allcourier']=$this->product_model->allcourier();
		$this->load->view('shipment.php', $data);
	}
	function cust_shipment($order_id)
	{
		$data['message'] = $this->input->post('message');
		$data['status'] = $this->input->post('status');
		$data['courier']= $this->input->post('courier');
		
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
			$newrow ="";
			//foreach($_POST['selected'] as $selCheck) {
				//$newrow = implode(',',$selCheck);
				
			//}
		}
		
		$newone = implode (',',$_POST['selected']);
		if($this->product_model->ship_add($order_id,$newone ,$data)) {
				$this->session->set_flashdata('flashError','Shipment Process Complete Succcessfully!!!!');
			} 
		//print_r($newone);die;
		/*$checkvalue = $this->product_model->getcheckvalue($order_id);
		
		if($checkvalue == ""){
	 
  		} else {
			$newone1=$checkvalue->ci_order_item .','.$newone;
			if($this->product_model->ship_edit($order_id,$newone1 ,$data)) {
					$this->session->set_flashdata('flashError','Shipment Process Complete Succcessfully!!!!');
				}  
			 
		}*/
		
		
					/* mail */
				
				$uorderdetail = $this->product_model->uorderdetail($order_id);
				$uid = $uorderdetail[0]->user_id;
				 
				$format = $this->product_model->getusermail();
				$message= $format[0]->ship_order_status;
				$shipsub= $format[0]->shipmen_sub ;
				
				$message = str_replace('{INVOICEORDER}',$order_id,$message);
				 $statusname = $this->product_model->getstatusname($data['status']);
				$message = str_replace('{INVOICESTATUS}', $statusname ,$message);
				 $couriername = $this->product_model->getcouriername($data['courier']);
				$message = str_replace('{INVOICECORIER}',$couriername,$message);
				
				$ciorderid = explode(',',$newone);
				 
						for($i=0;$i<count($ciorderid);$i++) { 
						$uorderdetailnew[] = $this->product_model->cineworderdetail($ciorderid[$i]);			
						 }
				 
						//echo "<pre>"; print_r($uorderdetailnew);die;
						 
						 for($j=0;$j<count($uorderdetailnew);$j++) { 
									$message = str_replace('{INVOICENAME}',$uorderdetailnew[$j]->order_item_name,$message);
									$colour = $this->product_model->getcolorname($uorderdetailnew[$j]->colorid);
									$message = str_replace('{INVOICECOLOR}',$colour,$message);
									$size = $this->product_model->getsizename($uorderdetailnew[$j]->sizeid);
								 
									$message = str_replace('{INVOICESIZE}',$size ,$message);
									$message = str_replace('{INVOICEQUANTITY}',$uorderdetailnew[$j]->product_quantity,$message);
									$message = str_replace('{INVOICEPRICE}',number_format($uorderdetailnew[$j]->product_item_price,'2','.',''),$message);
					 
							}
					$message = str_replace('{INVOICEMESSAGE}',$data['message'],$message);
					$message = str_replace('{INVOICETOTAL}',number_format($uorderdetail[0]->order_total,'2','.',''),$message);
				 
			 
				 
				$data['uemail'] = $this->product_model->uemail($uid);
				
				$uemail=$data['uemail']->email;
			 
				$subject  = $shipsub;  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: Stylior.com <info@stylior.com>' . "\r\n" .
							'Reply-To: info@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion(); 
				mail($uemail, $subject, $message, $headers);
				
			 
				
					/* mail end */
		redirect($this->config->item('base_url').'product/shipment_list/'.$order_id);
	}
	 
	 	
 	function shipment_list($order_id)
	{
		$page = '100';
		$this->load->library('session');
		$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');
		 
		$config['base_url'] = $url_to_paging.'product/shipment_list/?per_page='.$page.'&name=';
		$config['per_page'] = '10';
		//		$config['first_url']='0';
		$data['startdate'] = $this->input->post('startdate');
		$data['enddate'] = $this->input->post('enddate'); 
		$data['order_id'] = $order_id; 
		$return = $this->product_model->ship_lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		 
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		//$data['allbiketype']=$this->bikeadd_model->allbike();
		$this->load->view('ship_list', $data);
		
	}
	function measurement($orderid)
	{
		$data['order_id'] = $orderid;
		$this->load->view('order_measure.php',$data);   
	}
	
	function ship_label($id)  
	{
 		$data['shipmentdetails'] = $this->product_model->shipmentdetail($id);
 		$data['order__id'] = $data['shipmentdetails']->order_id;
		$data['shippingdetails'] = $this->product_model->shippingdetails($data['order__id']);
		//print_r($data['shipmentdetails']);die();
		$data['orderdetails'] = $this->product_model->order_detail($data['order__id']); 
		//$order_invoice = $data['orderdetails']->order_invoice;
 		//print_r($data['shippingdetails']);die();
		//$data['orderitems'] = $this->product_model->orderitems($id);
		$this->load->view('ship_label',$data);
	}
}
?>