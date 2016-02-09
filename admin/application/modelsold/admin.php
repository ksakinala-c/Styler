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
	
	function followupdate(){
		$sql = "select * from followup where `added_date` = '".date('Y-m-d')."'";
		$query = $this->db->query($sql);
		return $query->num_rows();
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
}
?>