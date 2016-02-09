<?php
class Email_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function ucategory()
	{	
		$query = $this->db->get('usercategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function emaildata($id){

		$this->db->where('ucategory = ',$id);
		$query = $this->db->get('super_admin');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
}
?>