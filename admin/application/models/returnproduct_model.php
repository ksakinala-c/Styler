<?php
class Returnproduct_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	
	function add($id,$content) 
	{
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
	 function lists($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM  product_return where id <> 0 ";
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM product_return  WHERE id <> 0";

		if($content['email'] != '') 
		{
			$sql_count .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	function edit($id,$content) {
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
	function updateorderstatus($id) {
		$data['order_status']  = 'R';
		
		$this->_data = $data;
		$this->db->where('order_id', $id);
		if ($this->db->update('ci_orders', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function get($id){
		$sql= "SELECT coi.*,co.*,u.* FROM  ci_order_item coi 
		left join users u ON u.id = coi.user_info_id 
		left join ci_orders co ON co.order_id  = coi.order_id  
		WHERE  coi.order_item_id <> 0 and coi.order_id = ".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->result();
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
	
	function getuname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->username;
			return $result;
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
	function addmessage($content,$id) 
	{
 		$data['orderid']  = $id;
		$data['userid']  = $content['userid'];
		$data['adminreply']  = '1';
		$data['message']  = $content['adminmessage'];
		$data['addeddate']  = date('Y-m-d');
		$this->_data = $data;
		if ($this->db->insert('usermessage', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('usermessage'))	{
			return true;
		} else {
			return false;
		}
	}
		function deletes2($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('product_return'))	{
			return true;
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
	function product_list()
	{
		$sql   = " select * from  product_return ";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function returnreason(){
		$query = $this->db->query('select * from   return_pro_status');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function returnaction(){
		$query = $this->db->query('select * from   return_act_status');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function returnstatus(){
		$query = $this->db->query('select * from   return_status');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
}
?>