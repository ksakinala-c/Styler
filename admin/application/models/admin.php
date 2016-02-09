<?php
class Admin extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function check_login($data) {
		$where_array = array(
						'login' => $data['username'],
						'password' => $data['password'],
						'enabled' => '1',
				);
		$query = $this->db->get_where('super_admin', $where_array);
		if ($query->num_rows() > 0)	{
			$row = $query->row();
			return $row;
		} else {
			return false;
		}
	}
	 function getuser()
	{
 		$query = $this->db->get('subscriber');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function followupdate(){
		$sql = "select * from followup where `added_date` = '".date('Y-m-d')."'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
	function currentuser($id){
		$sql = "select * from users limit 0,5";
			$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function todayorders($date){
		$sql_count = "Select * from ci_orders where cdate like '".$date."%'";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}


	function todayenquiry(){
		$sql = "select * from enquiry where added_date = '".date('Y-m-d')."'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
	function list_totaluser()
	{
		$sql_count = "Select * from users";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	
	
	function list_totalorder()
	{
		$sql_count = "Select * from ci_orders";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	
	
	function list_totalproducts()
	{
		$sql_count = "Select * from tbl_product";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	function lists($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM subscriber where id <> 0 ";
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM subscriber  WHERE id <> 0";

		 if($content['email'] != '') 
		{
			$sql_count .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('subscriber'))	{
			return true;
		} else {
			return false;
		}
	}
}
?>