<?php
class Account_Model extends Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function allcategory()
	{
		$sql = "SELECT * FROM category";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allmessage($orderid)
	{
		//$uid=$this->session->userdata('userid');
		$sql = "SELECT * FROM  usermessage where userid = '".$this->session->userdata('userid')."' AND orderid = '".$orderid."' ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function addmessage($content,$id) 
	{
 		$data['orderid']  = $id;
		$data['userid']  = $content['userid'];
		$data['adminreply']  = '0';
		$data['message']  = $content['adminmessage'];
		$data['addeddate']  = date('Y-m-d');
		$this->_data = $data;
		if ($this->db->insert('usermessage', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function allusermeasure()
	{
		$sql = "SELECT * FROM measurement where userid = '".$this->session->userdata('userid')."' order by id desc ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function userget($id)
   	{
		$this->db->where('id = ',$id);
    	$query = $this->db->get('users');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
		

	function totalreview($id)

	{

		$sql_count = "Select * from  product_review where product_id='".$id."'";

		$query = $this->db->query($sql_count);

		$ret = $query->num_rows();

	    return $ret;	

	}
		function add_review($product_id,$content) 
	{
		 	
		$data['userid'] = $this->session->userdata('userid');
		$data['product_id']  = $product_id;
		$data['title']  = $content['title'];
		$data['review'] = $content['review'];
		$data['ratings'] = $content['ratings'];
		$data['date'] = date('Y-m-d');

		$this->_data = $data;
		if ($this->db->insert('product_review', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function one_address($userid)
   	{
//		$this->db->where('Status = ',1);
	//	$this->db->where('user_id = ',$user_id);
		$array = array('Status' => 1, 'user_id' => $userid);

		$this->db->where($array);
    	$query = $this->db->get('shipping_address');
		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	function all_address($user_id)
   	{
		$sql = "SELECT * FROM shipping_address where user_id =".$user_id." order by id DESC limit 0,3";
   		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
   			return $query->result();
   		} else {
   			return false;
   		}
   	}
	
	function edit($id, $content) {
		$data['username']  = $content['username'];
		$data['password']  = $content['password'];
		$data['email'] = $content['email'];
		$data['phone'] = $content['phone'];
		
	    $this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function add_shipping_address($content) 
	{
		$data['Name']  = $content['Name'];
		$data['Address1']  = $content['Address1'];
		$data['Address2'] = $content['Address2'];
		$data['Landmark'] = $content['Landmark'];
		$data['City'] = $content['City'];
		$data['State'] = $content['State'];
		$data['Zip'] = $content['Zip'];
		$data['Phone'] = $content['Phone'];
		$data['Status'] = $content['Status'];
		$data['country'] = $content['country'];
		$data['user_id'] = $this->session->userdata('userid');

		$this->_data = $data;
		if ($this->db->insert('shipping_address', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	
	function addressget($id)
   	{
		$this->db->where('id = ',$id);
    	$query = $this->db->get('shipping_address');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	function userinfo($id)
   	{
		$this->db->where('id = ',$id);
    	$query = $this->db->get('users');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	function canorddetail($id)
   	{
		$this->db->where('order_id = ',$id);
    	$query = $this->db->get('ci_order_item');
   		if ($query->num_rows() > 0)	{
   			$result = $query->result();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	function canorde($id)
   	{
		$sql1 = "update ci_orders set order_status='CA',is_cancelled='1' where order_id =".$id;
		$query1 = $this->db->query($sql1);
		//print_r($query1);
		if ($query1== 1){
   			return true;
   		} else {
   			return false;
   		}
   	}
function canorderdet($id)
   	{
		$this->db->where('order_number = ',$id);
    	$query = $this->db->get('ci_orders');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	
	function edit_address($id, $content) {
		$data['user_id'] = $this->session->userdata('userid');
		$data['Name']  = $content['Name'];
		$data['Address1']  = $content['Address1'];
		$data['Address2'] = $content['Address2'];
		$data['Landmark'] = $content['Landmark'];
		$data['City']  = $content['City'];
		$data['State'] = $content['State'];
		$data['Zip'] = $content['Zip'];
		$data['Phone']  = $content['Phone'];
		$data['Status'] = $content['Status'];
		$data['country'] = $content['country'];
	
	    $this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('shipping_address', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}	
	function userorder($id)	{
			$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id WHERE  o.user_id = '".$id."' and o.order_status = 'C' order by o.order_id desc";	
			$query = $this->db->query($sql);		
			if ($query->num_rows() > 0)	{
				return $query->result();  
				} else {   
				return false;   		
			}
	}
	function proreturn($id)	{
			$sql = "SELECT * FROM  product_return WHERE user_id = '".$id."'";	
			$query = $this->db->query($sql);		
			if ($query->num_rows() > 0)	{
				return $query->result();  
				} else {   
				return false;   		
			}
	}
	 

	function savedstyle($id)	{
		$sql = "SELECT * from save3d WHERE userid = '".$id."' order by id desc"; 		
			$query = $this->db->query($sql);		
			if ($query->num_rows() > 0)	{
				return $query->result();  
				} else {   
				return false;   		
			}
	}

	function wishlist($id)	{
		$sql = "SELECT c.pname,tp.image, o.* FROM wishlist o
				left join tbl_product c ON c.id = o.pid
				left join tbl_style_image tp ON tp.pid = o.pid and tp.style_id = o.style_id 
				WHERE o.userid = '".$id."' and tp.baseimage = '1'";		
			$query = $this->db->query($sql);		
			if ($query->num_rows() > 0)	{
				return $query->result();   		} else {   
				return false;   		
			}
	}
	function order_detail($id) 
	{
		$this->db->where('order_id = ',$id);
		$query = $this->db->get('ci_orders');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
		function shippingdetails($order_invoice){
 		$this->db->where('order_id = ',$order_invoice);
		$query = $this->db->get('billship');
		//echo $this->db->last_query();
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			//echo $result;die;
			return $result;
		} else {
			return false;
		}
	}
	 
	
	function orderitems($id)
	{
		$sql = "SELECT ci.*,m.* from ci_order_item ci
			    left join   measurement m ON m.	orderid = ci.order_id
				WHERE ci.order_id = '".$id."' "; 		
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function delete_wishlist($deleteid) {
 		$this->db->where('id = ',$deleteid);
		if ($this->db->delete('wishlist'))	{
			return true;
		} else {
			return false;
		}
	}
	function delete_saveditem($deleteid) {
 		$this->db->where('id = ',$deleteid);
		if ($this->db->delete('save3d'))	{
			return true;
		} else {
			return false;
		}
	}
	function review($id)
   	{
		$query = "select * from product_review where product_id = '".$id."' ORDER BY id DESC limit 0,5 ";
			$query = $this->db->query($query);		
			if ($query->num_rows() > 0)	{
				return $query->result();   		
				} else {   
				return false;   		
		}
   	}
	function user_review($id)
   	{
		$query = "SELECT u.username, w.* FROM wishlist w
		left join users u ON u.id = w.userid
		WHERE w.userid = ".$id;
   		$query = $this->db->query($query);		
			if ($query->num_rows() > 0)	{
				return $query->result();   		} else {   
				return false;   		
		}
   	}
	function getsize($id)
	{	
	$query = "SELECT * from size where id = '".$id."'";	
	$result = $this->db->query($query);	
	if ($result->num_rows() > 0)
		{		
	$result = $result->row();		
	return $result;	
	}	
	}
	function getposture($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->posture;
			return $result;
		} else {
			return false;
		}
	}
	function bodypartname($id){
		
		//echo $id;
		$this->db->where('id = ',$id);
		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}	
	}
	
		function getstylename($id)
	{
		 
		$sql = "SELECT p.*  FROM   pro_style p
 		         
 				WHERE p.id = '".$id."'";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			//$result = $query->result();
			$result = $query->row()->name;
			return $result;
		}
	}
	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('measurement'))	{
			return true;
		} else {
			return false;
		}
	}
	
	function getproname($id)
	{
		 
		$sql = "SELECT p.*  FROM   tbl_product p
 		         
 				WHERE p.id = '".$id."'";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			//$result = $query->result();
			$result = $query->row()->pname;
			return $result;
		}
	}
		function getgesture($order_id){
	    $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->fit;
			return $result;
		} else {
			return false;
		}
	}
	
	function getmetricfit($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricft;
			return $result;
		} else {
			return false;
		}
	}
	function getmetricweight($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricweight;
			return $result;
		} else {
			return false;
		}
	}
	function getmetricinch($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricinch;
			return $result;
		} else {
			return false;
		}
	}
		function getimpheight($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->impheight;
			return $result;
		} else {
			return false;
		}
	}
	function getimpweight($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->impweight;
			return $result;
		} else {
			return false;
		}
	}
		function getserdata($order_id){
	     $this->db->where('orderid ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->serializedata;
			return $result;
		} else {
			return false;
		}
	}
	function getreturnid($id){
		$sql= "SELECT * FROM product_return  WHERE  id <> 0 and order_id = ".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->row()->id;
			return $result;
		} else {
			return false;
		}
	}
	function getreturndata($id){
		$sql= "SELECT pr.*,u.*,pr.id as return_id FROM product_return pr  left join users u ON u.id = pr.user_id   WHERE  pr.id <> 0 and pr.id = ".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function edits($id,$content) {
		$data['order_id']  = $content['order_id'];
		$data['user_id']  = $content['user_id'];
		$data['cdate']  = $content['cdate'];
		$data['email']  = $content['email'];
		$data['phone']  = $content['phone'];
		$data['product_id']  = $content['product_id'];
		$data['product_quantity']  = $content['product_quantity'];
		$data['product_name']  = $content['order_item_name'];
		$data['returnreason']  = $content['returnreason'];
		$data['opened']  = $content['opened'];
		$data['comment']  = $content['comment'];
		$data['returnaction']  = $content['returnaction'];
		$data['returnstatus']  = $content['returnstatus'];
		//print_r($content);die;
		$this->_data = $data;
		$this->db->where('id',  $content['return_id']);
		if ($this->db->update('product_return', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function getusermessage($id){
		$sql= "SELECT * FROM usermessage  WHERE userid = ".$id." order by id desc limit 0,15";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function get($id){
		$sql= "SELECT coi.*,co.*,u.* FROM  ci_order_item coi 
		left join users u ON u.id = coi.user_info_id 
		left join ci_orders co ON co.order_id  = coi.order_id  
		WHERE  coi.order_item_id <> 0 and coi.order_item_id = ".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function add($id,$content) 
	{
		//echo "<pre>";print_r($content);die;
 		$data['order_id']  = $content['order_id'];
		$data['user_id']  = $content['user_id'];
		$data['cdate']  = $content['cdate'];
		$data['email']  = $content['email'];
		$data['phone']  = $content['phone'];
		$data['product_id']  = $content['product_id'];
		$data['product_quantity']  = $content['product_quantity'];
		$data['product_name']  = $content['order_item_name'];
		$data['returnreason']  = $content['returnreason'];
		$data['opened']  = $content['opened'];
		$data['comment']  = $content['comment'];
		$data['returnaction']  = $content['returnaction'];
		$data['returnstatus']  = $content['returnstatus'];
		//print_r($data);die;
		$this->_data = $data;
		if ($this->db->insert('product_return', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function updateorderstatus($id) {
		//echo "hi".$id;die;
		$data['order_status']  = 'R';
		
		$this->_data = $data;
		$this->db->where('order_id', $id);
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	 function stylename($id){
 		$sql = "select p.*,f.fabricsname from pro_style p
		left join fabrics f ON p.style_id = f.id
		where p.id = '".$id."'"; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			 
			$result = $query->row()->fabricsname;
			return $result;
		} else {
			return false;
		}	
	}
	function fabricname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}	
	}
	function getmeasurement($order_id){
	     $this->db->where('id',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	function getwalletamount($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->bonus;
			return $result;
		} else {
			return false;
		}	
	}
	function getallvoucher($uid)
	{
		//$uid=$this->session->userdata('userid');
		$sql = "SELECT * FROM  ci_order_item where user_info_id  = '".$uid."' AND save3d = '2' ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allreturnaction()
	{
		$sql = "SELECT * FROM  return_act_status";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allreturnprostatus()
	{
		$sql = "SELECT * FROM  return_pro_status";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
		function allstatus()
	{
		$sql = "SELECT * FROM   return_status";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
}
?>
