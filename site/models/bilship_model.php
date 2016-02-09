<?php
	class bilship_model extends Model {
	private $_data = array();
	function __construct() {
	 parent::__construct();
	}

	
	function addbillship() 
	{
		 //echo $this->session->userdata('shippaddress');die;
	     $sql = "SELECT * FROM shipping_address where id = '".$this->session->userdata('shippaddress')."'";
         $query = $this->db->query($sql);
	     $shippaddress = $query->row(); 
		// echo $this->session->userdata('userid');die;
		 //print_r($shippaddress) ;die;
	     $sql1 = "SELECT * FROM shipping_address where user_id = '".$this->session->userdata('userid')."'  AND Status = '1'";
	     $query1 = $this->db->query($sql1);
         $billaddress = $query1->row(); 
		 
 		//$data['fname ']  = $shippaddress->Name;
		$data['address']  = $shippaddress->Address1;
		$data['address1']  = $shippaddress->Address2;
		$data['city']  = $shippaddress->City;
		$data['county']  = $shippaddress->State;
		$data['postcode']  = $shippaddress->Zip;
		$data['mobno']  = $shippaddress->Phone;
		$data['sname ']  = $billaddress->Name;
		$data['saddress']  = $billaddress->Address1;
		$data['saddress1']  = $billaddress->Address2;
		$data['scity']  = $billaddress->City;
		$data['scounty']  = $billaddress->State;
		$data['spostcode']  = $billaddress->Zip;
		$data['smobno']  = $billaddress->Phone;
		$data['order_id']  = $this->session->userdata('order_number');
		$data['userid']  = $this->session->userdata('userid');
		
		$this->_data = $data;
		if ($this->db->insert('billship',$this->_data))
		{
			return true;
		}
		 else
		 {
		   return false;
		  } 
	} 
	
	 
	function userrewards()
	{
	  $sql = "SELECT * FROM userreward where userid = '".$this->session->userdata('userid')."'";
      $query = $this->db->query($sql);	 
	  $userreward = $query->num_rows(); 		
      if($userreward == '0')
		{
			$content['userid']  = $this->session->userdata('userid'); 
			$content['userpoints']  = $this->session->userdata('total_amount'); 
			  
			$this->_data = $content;
			if ($this->db->insert('userreward',$this->_data))
			{
				return true;
			}
		}
		else
		{
			$sql = "Update userreward set userpoints = userpoints + ".$this->session->userdata('total_amount')."  where userid = '".$this->session->userdata('userid')."'";
			$query = $this->db->query($sql);	
		}
		
	}
	function addaddress($data) 
	{
		
 		$content['Name']  = $data['Name'];
		$content['Address1']  = $data['Address1'];
		$content['Address2']  = $data['Address2'];
		$content['City']  = $data['City'];
		$content['State']  = $data['State'];
		$content['Zip']  = $data['Zip'];
		$content['Phone']  = $data['Phone']; 	
		$content['country']  = $data['country']; 
		$content['Status']  = '1';
		$content['user_id']  = $this->session->userdata('userid'); 
		  
		$this->_data = $content;
		if ($this->db->insert('shipping_address',$this->_data))
		{
			return true;
		}
		 else
		 {
		   return false;
		  } 
		   
	}
 
	 

   function getOrderNumber()
	{
		$strQuery="SELECT MAX(order_id) AS lastOrderNumber FROM ci_orders";
		$result = $this->db->query($strQuery);
		if($result->num_rows()>0)
		{
			$arrRes=$result->result_array(); 
			return $arrRes[0]['lastOrderNumber']+1;
		}
	}
	
	function saveOrderInDatabase($arrData,$intOrderID)
	{
		
		$this->db->insert('ci_orders',$arrData);
		$intOrderID=$this->db->insert_id();
		return $intOrderID;
	}

	function saveOrderFromCart($arrData)
	{
		if($this->db->insert('ci_order_item',$arrData))
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	
	function getproddetails($arrProddetails)
	 {
		// echo $arrProddetails;die;
		$strQuery="SELECT * from  pro_style where id = '".$arrProddetails."'";
		$result = $this->db->query($strQuery);
		if($result->num_rows()>0)
		{
			 $arrRes=$result->row(); 
			return  $arrRes;
		}
	}
	
	function allshipbilldetails()
	{
		$last_data = $this->session->userdata('userid');   
		$sql = "select * from billship where id = '".$last_data."' order by order_id desc limit 0,1";
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
	function shippingaddress_active()
	{
		$last_data = $this->session->userdata('userid');   
		$sql = "select * from  shipping_address where user_id = '".$last_data."' AND Status = '1' limit 0,1";
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
	function updatemeasure($orderno) {
		//echo $this->session->userdata('measuredid');die;
		$data['orderid']  = $orderno;
		$this->_data = $data;
	 
		$this->db->where('id', $this->session->userdata('measuredid'));
		 
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function updateorderstatus($content){
		$data['transactionid']  = $content['tracking_id'];
	 
		$this->_data = $data;
	 
		$this->db->where('order_id', $content['order_id']);
		 
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function updatesuccessstatus($content){
		$data['transactionid']  = $content['tracking_id'];
		$data['order_status']  = 'C';
		$data['payment_gateway']  = 'CCAVENUE';
		
		$this->_data = $data;
	 
		$this->db->where('order_id', $content['order_id']);
		 
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function psuccess($content){
		$data['transactionid']  = $content['tracking_id'];
		$data['order_status']  = 'C';
		$data['payment_gateway']  = 'Pay-Pal';
		
		$this->_data = $data;
	 
		$this->db->where('order_id', $content['order_id']);
		 
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
		function updatebonus($content){
			$id = $this->session->userdata('userid');
		$data['bonus']  = $content; 
	 
		$this->_data = $data;
	 
		$this->db->where('id', $id);
		 
		if ($this->db->update('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	 function getorderdetai($id)
	{
	 
		$sql = "SELECT * from  ci_orders where order_id=".$id;
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
	 function getcountryname($id)
	{
	 
		$sql = "SELECT * from  country where cid='".$id."'";
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->cname;
			return $result;
		}
	}
	function getciorderitemdetail($id){
		$sql = "select * from  ci_order_item where order_id ='".$id."' ";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)	{
			return $query->result();
			//return $result;
		} else {
			return false;
		}

	}
		function getprebonus()
	{
		 $id= $this->session->userdata('userid');
		$sql = "SELECT p.* FROM  users p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->bonus;
			return $result;
		}
	}
	 function getpercent()
	{
		$id = '1';
		$sql = "SELECT * from  systems where id=".$id;
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->affliatepercent;
			return $result;
		}
	}
	
	function updataffbonus($content,$trackid){
			$id = $this->session->userdata('userid');
		$data['bonus']  = $content; 
	 
		$this->_data = $data;
	 
		$this->db->where('aff_code', $trackid);
		 
		if ($this->db->update('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
		function updateordertracking($orderid, $trackid){
		//	$id = $this->session->userdata('userid');
		$data['tracking_id']  = $trackid; 
	 
		$this->_data = $data;
	 
		$this->db->where('order_id', $orderid);
		 
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function add_transaction($amount,$trackid) 
	{
		
 		$content['pay_type ']  = "Affiliate Gift";
		$content['amount']  = $amount;
		$content['tran_date']  = date('Y-m-d');
		$content['reff_id']  =	$trackid;
		$content['userid']  = $this->session->userdata('userid'); 
		  
		$this->_data = $content;
		if ($this->db->insert('transaction_history',$this->_data))
		{
			return true;
		}
		 else
		 {
		   return false;
		  } 
		   
	}
		 function getpreviousbonus($id)
	{
		 
		$sql = "SELECT * from users where aff_code =".$id;
		 	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->bonus;
			return $result;
		}
	}
	
}

?>