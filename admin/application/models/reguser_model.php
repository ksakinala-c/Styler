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
		$data['joindate']  = date('Y-m-d');
		
	
		
		$this->_data = $data;
		if ($this->db->insert('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	
	function edit($id, $content) {
		//echo $id."<pre>";print_r($content);die;
		//echo $content['gender'];die;
		$data['email']  = $content['email'];
		$data['username']  = $content['username'];
		$data['password']  = $content['password'];
		$number= $content['ccode'].'-'.$content['phone'];
		$data['phone']  = $number;
		$data['gender']  = $content['gender'];
		$data['dob']  = $content['dob'];
		$data['insider']  = $content['insider'];
		$data['affiliate']  = $content['affiliate'];
		
		$data['company']  = $content['company'];
		$data['website']  = $content['website'];
		$data['cid']  = $content['cid'];
		$data['city']  = $content['city'];
		$data['state']  = $content['state'];
		 
		$data['address']  = $content['address'];
		$data['paymentmethod']  = $content['paymentmethod'];
		$data['chq_payee_name']  = $content['chq_payee_name'];
		$data['paypal_payee_name']  = $content['paypal_payee_name'];
		$data['bank_name']  = $content['bank_name'];		
		
		$data['abs_bsb_number']  = $content['abs_bsb_number'];
		$data['swift_code']  = $content['swift_code'];
		$data['account_name']  = $content['account_name'];
		$data['account_number']  = $content['account_number'];
					 
						
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
		$this->db->where('email',$product);
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

		$sql = "SELECT * FROM users  WHERE  id <> 0 ";
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' OR username like '%".$content['email']."%'  ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id desc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from `users` where id <> 0 ";
		
		 if($content['email'] != '') 
		{
			$sql_couint .=	" AND  (email like '".$content['email']."%' OR username like '%".$content['email']."%' ) "; 
		}
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
 
	 function listsaddress($id){
 		$this->db->where('userid = ',$id);
		$query = $this->db->get('billship');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
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
	   function getuser()
	{
 		$query = $this->db->get('users');
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
		
		function getproname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->pname;
		} else {
			return false;
		}	}
		
		function getstylename($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('fabrics');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->fabricsname;
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
		
		function getmeasuredata($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
		function edit_measurement($id, $content) {
		//$data['style_id']  = $content['style_id'];
		//$data['pid']  = $content['pid'];
		$data['metricft']  = $content['metricft'];
		$data['metricweight']  = $content['metricweight'];
		$data['metricweight']  = $content['metricweight'];
		
		$data['metricinch']  = $content['metricinch'];
		$data['impheight']  = $content['impheight'];
		$data['impweight']  = $content['impweight'];
		$data['posture']  = $content['posture'];
		$data['fit']  = $content['fit'];
		
		$data['serializedata']  = $content['sernewdata'];
		$data['orderid']  = $content['orderid'];
		$data['userprofilename']  = $content['userprofilename'];
		$data['shouldertype']  = $content['shouldertype'];
		$data['shoulderangle']  = $content['shoulderangle'];
		$this->_data = $data;
		$this->db->where('id',$id);
		if ($this->db->update('measurement',$this->_data)) {
			return true;
		} else {
			return false;
		}
	}
	   function allcountry()
	{
 		$query = $this->db->get('country');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	

}

?>