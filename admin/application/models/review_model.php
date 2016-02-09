<?php
	class Review_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	
	
	function lists($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM  product_review where id <> 0 ";
		/*if($content['title'] != '') 
		{
			$sql .=	" AND  (title like '".$content['title']."%' ) "; 
		}*/
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id DESC limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM  product_review WHERE id <> 0  ";

		/*if($content['title'] != '') 
		{
			$sql_count .=	" AND  (title like '".$content['title']."%' ) "; 
		}*/
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	function getproduct_name($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}
	}
	function getuser_name($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->username;
			return $result;
		} else {
			return false;
		}
	}
	
	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('product_review'))	{
			return true;
		} else {
			return false;
		}
	}
	function updatestatus($id)
	{
		$sql   = " select * from  product_review where id='".$id."'";
		$query = $this->db->query($sql);
		$ret=$query->row();
		if($ret->enable == "1")
		{
			$abc= " update product_review set enable = '0' where id='".$id."' ";
			$query = $this->db->query($abc);
			return $query;
		}
		else
		{
			$abc= " update product_review set enable = '1' where id='".$id."' ";
			$query = $this->db->query($abc);
			return $query;
		}
	}
		function get($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('product_review');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function getproname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
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
	function add($content) 
	{
		$data['userid']  = '0';
		$data['product_id']  = $content['product_id'];
		$data['title']  = $content['title'];
		$data['review'] = $content['review'];
		$data['ratings'] = $content['ratings'];		
		//$data['enable'] = '1';
		
		$this->_data = $data;
		if ($this->db->insert('product_review', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function edit($id,$content) 
	{
		//$data['userid'] = $content['userid'];
		//$data['product_id'] = $content['product_id'];
		$data['title'] = $content['title'];
		$data['review'] = $content['review'];
		$data['ratings'] = $content['ratings'];
		$data['date'] = $content['date'];
		$data['enable'] = $content['enable'];
		 
		 
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('product_review', $this->_data))	{
			 
			return true;
		} else {
			return false;
		}
	}
 
	function product_list(){
		$query = $this->db->query('select * from tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	 
}
?>