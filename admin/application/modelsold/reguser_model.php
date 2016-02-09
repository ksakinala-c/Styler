<?php
class reguser_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['firstname ']  = $content['firstname'];
		$data['lastname']  = $content['lastname'];
		$data['email']  = $content['email'];
		$data['username']  = $content['username'];
		$data['password']  = $content['password'];
	
		
		$this->_data = $data;
		if ($this->db->insert('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	
	function edit($id, $content) {
		$data['firstname']  = $content['firstname'];
		$data['lastname']  = $content['lastname'];
		$data['email']  = $content['email'];
		$data['username']  = $content['username'];
		$data['password']  = $content['password'];
	
		$this->_data = $data;
		$this->db->where('id',$id);
		if ($this->db->update('users',$this->_data)) {
			return true;
		} else {
			return false;
		}
	}
 

	function is_product_already_exist($product,$id)
	{
		$sql = mysql_query("SELECT * FROM `users` WHERE firstname='".$product."' AND id != '".$id."'");
		$fsql = mysql_num_rows($sql);
		
		if($fsql >= 1)
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}

    function is_product_already_exist_add($product)
	{
		$this->db->where('firstname',$product);
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function lists($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM users  WHERE  id <> 0";
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from `users` where id <> 0";
		
		 if($content['email'] != '') 
		{
			$sql_couint .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

   function getuserreward($id){
 		$this->db->where('userid = ',$id);
		$query = $this->db->get('userreward');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->userpoints;
			return $result;
		} else {
			return false;
		}
	}

		function getuserwallet($id){
 		$this->db->where('user_id = ',$id);
		$query = $this->db->get('userwallet');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->userwallet;
			return $result;
		} else {
			return false;
		}
	}




	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('users'))	{
			return true;
		} else {
			return false;
		}
	}
	/*
 function allsubcategory(){
		
 		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
  function allcategory()
	{
 		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	*/
    function allproduct()
	{
 		$query = $this->db->get('product');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function reguser_list($content)
	{
		$sql   = "select * from users where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function show_category($id){
		$this->db->where('catid = ',$id);
		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function getcatname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->cname;
		} else {
			return false;
		}	}
	function getSubCatname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		}	}

}

?>