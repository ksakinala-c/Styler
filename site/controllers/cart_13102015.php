<?php
	class Cart extends Controller
	{ 

	function Cart() 
	{
		parent::Controller();
		$this->load->model('cart_model');
		$this->load->model('home_model');
		$this->load->model('user_model');
		$this->load->model('account_model');
	}

	function wishlist($style,$pid){
					if($this->session->userdata('userid') == ''){
						redirect($this->config->item('base_url')."home/login");
					} else {
					$this->load->library('session');
					$data['userid'] = $this->session->userdata('userid');
					$data['pid'] = $pid;
					$data['added_date'] = date('Y-m-d');
					if($response = $this->home_model->add_wishlist($data))
					{
						$this->session->set_flashdata('item', 'Product Added to your wishlist.');
						redirect($this->config->item('base_url')."/home/details/".$style."/".$pid);
						exit();
					}
					else 
					{
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
					}
					}
	}
	/* end stylior function*/
 
 	function checkpincode($id){ 
		$this->load->model('product_model'); 
		$productxml = $this->product_model->checkpincode($id);
			if($productxml == ''){
			echo '0'; die;
		} else {
			echo '1';die;
		}
	}  
 	 
	function checkqty($pid,$attrid,$qty)
	{
		$valid = $this->cart_model->checkqty($pid,$attrid);
 		if($valid != ''){
			$allowedqty = $valid->quantityinstock;
			if($allowedqty >= $qty){
				echo "1";die;
			}
			else
			{
				echo "2";die;
			}
		}
		else
		{
			echo "2";die;
		}

	}

	function addtowishlist($id,$userid){
 		$this->load->model('product_model');
		$data = $this->product_model->checkwishlist($id,$userid);
		if($data == '0'){ 
			$this->product_model->addtowishlist($id,$userid);
			echo '0';die;
		} else {
			echo '1';die;
		}
	}

	function addcart3d(){
 
 		$data      = $_POST['imagedata'];
		$timeimage = time();
  		$details   = $_POST['details'];
		$price     = $_POST['price'];
		$productid = $_POST['productid'];
		$pname     = $_POST['pname'];
		$subcatid  = $_POST['subcatid'];
		$this->session->set_userdata('subcat',$subcatid);

		
		
		$this->load->library('session');
			
			$newuserdata = array(
			   'username'  => $_SESSION['username'],
			   'userid'    => $_SESSION['userid'],
			   'email'     => $_SESSION['email'],
			   'insider'   => $_SESSION['insider'],
			   'logged_in' => true
			);
			
			$check = $this->session->set_userdata($newuserdata);

		$data11['details']  = $details;
		$data11['price']    = $price;
		$data11['productid'] = $productid;
		$data11['pname']    = $pname;
		$data11['userid']    =  $_SESSION['userid'];
		$data11['baseimage'] = $timeimage.".png";

		$saveid = $this->cart_model->addto3dinsert($data11);

		$cartprod = array(
 			   'id'      => $productid,
 			   'qty'     => '1',
			   'price'   => $price, 
			   'name'    => $pname,
			   'options' => array('details'=>$details , 'imagename'=>$timeimage.".png", 'is_3d'=>'1' , 'saveid'=> $saveid) 
 	    );
   
		//print_r($cartprod);die();
 		$this->cart->insert($cartprod);

 		$this->session->set_userdata('saveid',$saveid);
		$file = $this->config->item('upload')."saveprofile/".$timeimage.".png";
 		$uri =  substr($data,strpos($data,",")+1);
 		file_put_contents($file, base64_decode($uri));
		echo "1"; exit();
 	}

	function save3d(){
		$data = $_POST['imagedata'];
		$timeimage = time();
  		$details = $_POST['details'];
		$price   = $_POST['price'];
		$productid = $_POST['productid'];
		$pname     = $_POST['pname'];
 		 
		$data['details'] = $details;
		$data['price'] = $price;
		$data['productid'] = $productid;
		$data['pname'] = $pname;
		$data['userid'] =  $_SESSION['userid'];
		$data['baseimage'] = $timeimage.".png";

		$this->cart_model->addto3dinsert($data);
 		$file = $this->config->item('upload')."saveprofile/".$timeimage.".png";
 		$uri =  substr($data,strpos($data,",")+1);
 		file_put_contents($file, base64_decode($uri));
		echo "1"; exit();
	}

	function share(){
		$data = $_POST['imagedata'];
		$timeimage = time();
  		$details = $_POST['details'];
		$price   = $_POST['price'];
		$productid = $_POST['productid'];
		$pname     = $_POST['pname'];
 		 
		/*$data['details'] = $details;
		$data['price'] = $price;
		$data['productid'] = $productid;
		$data['pname'] = $pname;
		$data['userid'] =  $_SESSION['userid'];
		$data['baseimage'] = $timeimage.".png";

		$this->cart_model->addto3dinsert($data);*/
 		$file = $this->config->item('upload')."saveprofile/".$timeimage.".png";
 		$uri =  substr($data,strpos($data,",")+1);
 		file_put_contents($file, base64_decode($uri));
		echo $timeimage; die;
		//echo "1";die;
	}

	function addtocart($style_id)
	{
		 
		$monovalue     = $this->input->post('monogram');
		if($this->input->post('monotext') !=""){
		$monotext     = $this->input->post('monotext');		
		}else {
			$monotext = "Not Available";
		}
		$pid = $this->input->post('product_id');
		$this->session->set_userdata('proid',$pid);
		//echo ($this->session->userdata('proid'));die;
		$font     = $this->input->post('fonttype');
		$color     = $this->input->post('colour');
		$placement = $this->input->post('placement');
		$qty  = $this->input->post('qty');
		 
		if($qty == ''){
			$qty = '1'; 
		}
		
		$details = $this->cart_model->productdetails($style_id);
		//print_r($details);die;
		$data['err_msg'] = '';
		$price = $details->sellingprice;
		$data['cartprod'] = array(
			   'id'      => $details->id,
 			   'qty'     => $qty,
			   'price'   => $price, 
			   'name'    => $details->name,
			   'options' => array('fonts'=>$font , 'color'=>$color, 'placement'=>$placement, 'monovalue'=>$monovalue, 'monotext'=>$monotext) 
 	        );
   
		//print_r($data['cartprod']);die();
 		$this->cart->insert($data); 
 		redirect($this->config->item('base_url').'cart/mapping/'.$style_id,'refresh',$data);
 	}

	function addgifttocart(){
		
		if($_POST['recipientemail'] != '' && count($_POST['recipientemail']) > 0) {
			for($j='0';$j<count($_POST['recipientemail']);$j++) {

 				$toname   = $_POST['recipientname'][$j];
				$fromname = $_POST['sendername'][$j];
				$email    = $_POST['recipientemail'][$j];
				$message  = $_POST['message'][$j];
				$theme    = $_POST['theme'][$j];

				$data['cartprod'] = array(
					   'id'      => $j,
					   'qty'     => $_POST['qty'][$j],
					   'price'   => $_POST['totalpayable'][$j],
					   'name'    => $_POST['recipientname'][$j],
					   'options' => array('toname'=>$toname, 'fromname'=>$fromname, 'email' => $email, 'message' =>$message, 'theme'=>$theme, 'is_3d'=> '2') 
					);
		   
				$this->cart->insert($data); 
			}
		}

  		redirect($this->config->item('base_url').'cart/viewcart','refresh',$data);
	}

	function addmapping($style_id)
	{
		$details = $this->cart_model->productdetails($style_id);
		$data['err_msg'] = '';
		$price = $details->sellingprice;
		$data['cartprod'] = array(
			   'id'      => $details->id,
 			   'qty'     => $qty,
			   'price'   => $price, 
			   'name'    => $details->name,
			   'options' => array('fonts'=>$font , 'color'=>$color, 'placement'=>$placement, 'monovalue'=>$monovalue, 'monotext'=>$monotext) 
 	        );
   
		//print_r($data['cartprod']);die();
 		$this->cart->insert($data); 
 		redirect($this->config->item('base_url').'cart/mapping/'.$style_id,'refresh',$data);
 	}
 
	function mapping($style_id = '')
	{
		
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		/*if($this->input->post('measureid') !="") {
			$this->session->set_userdata('usermdata',$this->input->post('measureid'));
		}*/
		//echo $this->session->userdata('usermdata');die;
		$data['style_id'] = $style_id;
		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';

		$this->load->view('body_weight_height.php',$data);
	}

	function mapping1($style_id)
	{
		//echo $this->input->post('measureid');die;
		//echo $style_id;die;
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		if($this->input->post('measureid') !="") {
			//echo "hello";die;
			$this->session->set_userdata('measuredid',$this->input->post('measureid'));
		}
		
		$data['style_id']= $style_id;
		//$this->load->view('details.php',$data);
		redirect($this->config->item('base_url').'cart/mapping/'.$style_id,'refresh',$data);
	}

	function mvalue()
	{
 		if($_POST['bodypartid'] != ''){
			$arary1 = implode(',',$_POST['bodypartid']);
		}
		if($_POST['bodypartid'] != ''){
			$arary2 = implode(',',$_POST['bodypartvalue']);
		}
		$arraydata = array('0'=>$arary1, '1'=>$arary2);

		$data = serialize($arraydata);
		$profilename = $_POST['profilename']; 
		$type = $_POST['type']; 
		//echo $profilename;die;
		$this->cart_model->updatebodymeasure1($data,$profilename,$type);
		//$data1=unserialize($data);
		//echo "<pre>"; print_r($data1);die;
		if($this->session->userdata('saveid') != '') {
			redirect($this->config->item('base_url').'cart/viewcart','refresh',$data);
		} else { 
			redirect($this->config->item('base_url').'cart/add','refresh',$data);
		}
	}

	function newmvalue()
	{
		 
		if($_POST['bodypartid'] != ''){
			$arary1 = implode(',',$_POST['bodypartid']);
		}
		if($_POST['bodypartid'] != ''){
			$arary2 = implode(',',$_POST['bodypartvalue']);
		}
		$arraydata = array('0'=>$arary1, '1'=>$arary2);

		$profilename = $_POST['profilename']; 
		$this->cart_model->newupdatebodymeasure1($data, $profilename);
		$data1=unserialize($data);
		//echo "<pre>"; print_r($data1);die;
		redirect($this->config->item('base_url').'cart/add','refresh',$data);
	}
	 	
	function measure()
	{
		if($this->session->userdata('userid') == ''){
				redirect($this->config->item('base_url'),'refresh');
		}

		//echo $this->session->userdata('subcat');die;
		$data = array();
		$data['fit']=$this->input->post('fit');
		//echo $data['fit'];die;
		$data['pid']=$this->input->post('pid');
		$data['bid']=$this->input->post('bid');
		//echo $data['bid'];die;
		$this->cart_model->updatefit($data);
		//echo $this->session->userdata('subcat');
		$data['subcat'] = $this->session->userdata('subcat');//$this->home_model->getsubcatid($data['pid']);
		//echo $data['subcatid '];die;		
		$data['proparts'] = $this->home_model->prodparts_hide($data['subcat']);
		//print_r($data['proparts']);
		//$data['subcat']=$subcatid ;
		//print_r($data['proparts']);die;
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('measurement.php',$data);
	}
 
	
	
	
	function bodymeasure($style_id ='')
	{
		if($this->session->userdata('userid') == ''){
				redirect($this->config->item('base_url'),'refresh');
		}
 
 		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
 		$data['foot']=$this->input->post('foot');
		$data['inch']=$this->input->post('inch');
		$data['weight']=$this->input->post('weight');
		$data['impheight']=$this->input->post('impheight');
		$data['impweight']=$this->input->post('impweight');
		$data['style_id']= $this->session->userdata('style_id');
		/*$allstyle=$this->cart_model->getproid($style_id);
		//print_r($allstyle);die;
		$data['pid']=$allstyle->pid;*/
		$data['pid'] = $this->session->userdata('prodid');
		
		if($this->session->userdata('measuredid') ==""){
			$this->cart_model->insertbodymeasure($data);
			$lastinsertid=$this->db->insert_id();
			$this->session->set_userdata('measuredid',$lastinsertid);
		}

		$data['title'] = 'Stylior.com';
		$data['keywords'] = '';
		$data['description'] = '';

		$this->load->view('body_character.php',$data);
	}
	
	function shouldertype($style_id)
	{
		if($this->session->userdata('userid') == ''){
				redirect($this->config->item('base_url'),'refresh');
		}

		$data = array();
		 
		$data['measure']=$this->input->post('measure');	
		$data['pid']=$this->input->post('product_id');
		$data['style_id']= $style_id;
		//echo $this->session->userdata('measuredid');die;
		$this->cart_model->updatebodymeasure($data);
		/*$subcatid = $this->home_model->getsubcatid($data['pid']); 
		$data['proparts'] = $this->home_model->prodparts($subcatid);
		$data['subcat']=$subcatid ;*/
		//print_r($data['proparts']);die;
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('shouldertype.php',$data);
	}

	function shoulderangle($style_id)
	{
		if($this->session->userdata('userid') == ''){
				redirect($this->config->item('base_url'),'refresh');
		}
	
	    $data = array();
		 
		$data['shouldertype']=$this->input->post('shouldertype');	
		$data['pid']=$this->input->post('product_id');
		$data['style_id']= $style_id;
		$this->cart_model->updateshouldertype($data);
		/*$subcatid = $this->home_model->getsubcatid($data['pid']); 
		//$data['proparts'] = $this->home_model->prodparts($subcatid);
		$data['subcat']=$subcatid ;*/
		//print_r($data['proparts']);die;
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('shoulderangle.php',$data);
	}

	function fit($style_id)
	{
        if($this->session->userdata('userid') == ''){
				redirect($this->config->item('base_url'),'refresh');
		}

		$data = array();
		$data['shoulderangle']=$this->input->post('shoulderangle');	
		$data['pid']=$this->input->post('product_id');
		$data['style_id']= $style_id;
		$this->cart_model->updateshoulderangle($data);
		//echo $data['pid'];die;
		if($this->session->userdata('saveid') == ''){
			$subcatid = $this->home_model->getsubcatid($data['pid']); 
		} else {
			$subcatid = '10';
		}
		//echo $subcatid;die;
		$subcatid1 = $this->session->set_userdata('subcat',$subcatid);
		$data['proparts'] = $this->home_model->prodparts($subcatid1);
		$data['subcat']=$subcatid1 ;
		//print_r($data['proparts']);die;
		$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$this->load->view('fit.php',$data);
	}
 
	function add()
	{
		$this->load->library();
		$this->load->library('session');
		if ($this->session->userdata('measuredid') == ""){
			if($this->input->post('measureid') !=""){
				$this->session->set_userdata('measuredid',$this->input->post('measureid'));
			}
		}
		//echo $this->session->userdata('measuredid');die;
		$data['err_msg'] = '';
		$data['sizeid']=$this->input->post('sizeid');
		$this->session->set_userdata('sizeid',$data['sizeid']);
		/* new cart */
		$font = $this->session->userdata('cfonttype');
		$color = $this->session->userdata('ccolour');
		$placement = $this->session->userdata('cplacement');
		$monovalue = $this->session->userdata('cmonovalue');
		//echo $monovalue;die;
		$monotext = $this->session->userdata('cmonotext');

		$details = $this->cart_model->productdetails($this->session->userdata('cstyleid'));
		//echo $details->style_id;die;
		$stylename = $this->home_model->getstylename($details->style_id);
	    $productinfo = $this->home_model->productinfo($this->session->userdata('prodid'));

		$price = $details->sellingprice;
		$data['cartprod'] = array(
			   'id'      => $details->id,
 			   'qty'     => $this->session->userdata('cqty'),
			   'price'   => $price, 
			   'name'    => $productinfo->pname.":".$stylename,
			   'options' => array('fonts'=>$font , 'color'=>$color, 'newmid'=>$this->session->userdata('measuredid'), 'prodid'=>$this->session->userdata('prodid'), 'placement'=>$placement, 'monovalue'=>$monovalue, 'monotext'=>$monotext, 'is_3d'=> '0') 
 	        );
   
		//print_r($data['cartprod']);die();
 		$this->cart->insert($data); 
		/* new cart end */
 		redirect($this->config->item('base_url').'cart/viewcart','refresh',$data);
 	}

	function saveadd3d(){
		
 				$i = 1;
				foreach( $this->cart->contents() as $items)  
				{
					if( $items['options']['saveid'] == $this->session->userdata('saveid') ){
						 
 						$rowid = $items['rowid'];
						$id    = $items['id'];
						$price = $items['price'];
						$qty   = $items['qty'];
						$name  = $items['name'];

						$details = $items['options']['details'];
						$imagename = $items['options']['imagename'];
						
						$data = array(
						   'rowid' => $rowid,
						   'qty'   => 0
						);

						$this->cart->update($data); 
						$data['cartprod'] = array(
							   'id'      => $id,
							   'qty'     => $qty,
							   'price'   => $price, 
							   'name'    => $name,
							   'options' => array('details'=>$details , 'imagename'=>$imagename, 'newmid'=>$this->session->userdata('measuredid'), 'is_3d'=> '1', 'saveid' => $this->session->userdata('saveid') ) 
							);
				   
						//print_r($data['cartprod']);die();
						$this->cart->insert($data); 

 					}
					$i++;
				}
		 
 		$this->session->unset_userdata('saveid');
 		$this->session->unset_userdata('measuredid');
		redirect($this->config->item('base_url').'cart/viewcart','refresh',$data);
	}
	
	function viewcart()
 	{
		$this->session->unset_userdata('measuredid');
		if($this->session->userdata('userid')==""){
			redirect($this->config->item('base_url').'sign-in');
		}

 		$data = array();
 		$data['err_msg'] = '';
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
 		$this->load->view('viewcart',$data);
 	}
	
 
 	function addtocart_view($pid,$attrid,$qty)
 	{	
 		$details=$this->cart_model->productdetails($pid,$attrid);
 		$data['cartprod'] = array(
 			   'id'      => $details->product_id,
 			   'qty'     => $qty,
 			   'price'   => $details->attr_value,
 			   'name'    => $details->title,
 			   'options' => array('attrid' => $attrid)
 		);
 		$this->cart->insert($data);
 		$this->load->view('viewcartonly');
 	}
 
 	function viewcartonly(){
 		$data['err_msg'] = '';
 		$this->load->view('viewcartonly',$data);
 	}

  	function updateproduct()
 	{
 		//print_r($_POST);die;
 		$this->cart->update($_POST); 
 		/*if(isset($_POST['remove']))
 		{
 			foreach($_POST['remove'] as $remove)
 			{
 				$data = array('rowid'=>$remove,
 							  'qty' => 0);
 				$this->cart->update($data); 
 			}

		}*/
 		redirect($this->config->item('base_url').'cart/viewcart');
  	}

	function removeproduct($remove)
 	{
		$remove = explode(',',$remove);
		for($i=0;$i < count($remove);$i++)
		{
		$data = array('rowid'=>$remove[$i],'qty' => 0);
		$this->cart->update($data); 
 		}
		redirect($this->config->item('base_url').'cart/viewcart');
 	}


	function showdata()
	{
		$sizeid = $_POST['sizeid'];
		//echo 	$sizeid; die;
		$data = $this->home_model->prodparts($sizeid);
	 
			
               $html ="<table width='55%' border='1'>
				 <tr>
                        <td style='font-size:20px;' width='35%' height='50' align='center' valign='middle' bgcolor='#1ab7ea'>
						<span style='color:#fff; font-size:20px;'><strong>Body Parts ( Slim )</strong></span></td>
						<td style='font-size:20px;' width='20%' height='50' align='center' valign='middle' bgcolor='#1ab7ea'>
						<span style='color:#fff;'><strong>M</strong></span></td>
                    </tr>";
					
						if($data != '' && count($data) >0)
							{
								for($i=0;$i<count($data);$i++)
								{
					  
                   $html.="<tr>";
                        $html.="<td style='font-size:20px;' width='35%' height='50' align='center' valign='middle'>".$this->cart_model->getpartname($data[$i]->partid)."</td>";
                      $html .= "<td style='font-weight:20px;'   align='center' valign='middle'>";
                          $html .= "<input style='width:auto;' name='".$data[$i]->partid."' type='text' id='no.' value ='".$data[$i]->partvalue."'  size='20' style='text-align:center;'>";
                    $html .="</td>";
                   	$html .="</tr>";
					 
					  }}   
					 	$html .='<tr style="">
                        <td style="font-size:20px;" width="35%" height="50" align="center" valign="middle">Profile Name</td>
                        <td style="font-weight:20px;"   align="center" valign="middle">
							<input type="text" value="" name="profilename" id="profilename" /> 
                        </td>
                    </tr>';
					
                   $html.="<tr>
                        <td style='font-size:20px;' height='40' colspan='2' align='center' valign='middle'>
                          <div class='form-actions'>
                            <button type='submit' class='btn btn-primary btn-send-message-2' style='margin:5px; 0px 0px 5px;' onclick ='return formsubmitcart();'>Submit</button>	
							
			                </div>
						</td>
                    </tr>";
									
                   $html.="</table>    
							<br>
							<br>";  
							echo $html;
				
                
	}

	
	
 
	 

 	function updateshippingval(){
 		$this->session->set_userdata('states',$_POST['states']);
 		if($_POST['states'] == '0'){
 			$this->session->set_userdata('cities',$_POST['cities']);
 		} else {
 			$this->session->set_userdata('cities','');
 		}
 		$this->session->set_userdata('couriers',$_POST['couriers']);

		redirect($this->config->item('base_url').'cart/viewcart');
 	}
 	
	
		function couponcheck(){
				
				$coupan = $this->input->post("coupon"); 
				//echo $coupan;
				$select_coupan = $this->cart_model->selectcoupan($coupan);
				$coupanname = $select_coupan->coupanname;
				$no_of_coupan = $select_coupan->no_of_coupan;//done
				$coupan_per_user = $select_coupan->coupan_per_user;//done
				$mini_amountt = $select_coupan->mini_amount;		//done		
				$usedcoupanvalue = $this->cart_model->coupen_check($coupanname);//no of rows
				$noofcoupon =  $no_of_coupan - $usedcoupanvalue;// no of coupon
				$noofusedperuser = $this->cart_model->user_coupen_check($coupanname);//no of rows
				$noofcoupancheck = $coupan_per_user - $noofusedperuser;//per user
				//$newtotal = $mini_amountt - $this->session->userdata('total_amount');
				//if($select_coupan != '' && $noofcoupon>0 && $noofcoupancheck>0 && $newtotal>0) {
				if($select_coupan != '' && $noofcoupon>0 && $noofcoupancheck>0) {
					$couponprice = $select_coupan->discount;
					$coupanvalue = $select_coupan->coupanvalue;
					$coupanname = $select_coupan->coupanname;
					//echo   $couponprice.$coupanname;die();
					$this->session->set_userdata('couponprice',$couponprice); 
					$this->session->set_userdata('couponcode',$coupanvalue);
					$this->session->set_userdata('coupanname',$coupanname);
				} else {
					echo "0";
				}
				
			}
			
		function removecheck(){
			 $this->session->unset_userdata('couponprice'); 
			 $this->session->unset_userdata('couponcode'); 
			 echo "0";
		}
	
		function giftwrap(){
			 $giftval = $this->input->post("giftval");
			 if($giftval == '1'){
				 $this->session->set_userdata('giftwrap','1'); 
			 } else {
				$this->session->unset_userdata('giftwrap'); 
			 }
		}	
		
		 function vouchercheck(){
						$voucher = $this->input->post("voucher"); 
						$select_voucher = $this->cart_model->selectvoucher($voucher);
						$value = $select_voucher->value;
						$usedvoucher = $this->cart_model->user_voucher_check($voucher);//no of rows
					 
						if($select_voucher != '' && $usedvoucher == "") {
							$voucherprice = $select_voucher->price;
							$vouchercode = $select_voucher->code;
							$vouchervalue = $select_voucher->value;
							
							$this->session->set_userdata('voucherprice',$voucherprice); 
							$this->session->set_userdata('vouchercode',$vouchercode); 
							$this->session->set_userdata('vouchervalue',$vouchervalue); 
						} else {
							echo "0";
						}
						
					}
		function removecheckvoucher(){
			 $this->session->unset_userdata('voucherprice'); 
			 $this->session->unset_userdata('vouchercode'); 
			 $this->session->unset_userdata('vouchervalue'); 
			 echo "0";
		}
		
		 function mywallet(){
						$walletamount = $this->cart_model->getwalletamount();
						$this->session->set_userdata('mywalletdata',$walletamount); 
					}
			function removewallet(){
			 $this->session->unset_userdata('mywalletdata'); 
			 
			 echo "0";
		}
					 
					
	}
?>