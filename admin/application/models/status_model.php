<?php
class Status_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
		function add($content) 
	{
 		$data['status']  = $content['status'];
		 
		$this->_data = $data;
		if ($this->db->insert('status', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function edit($id, $content) {
	 
		$data['status']  = $content['status'];
		//print_r($data['flag']);die();
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('status', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
 
	
	function is_status_already_exist($newfabric,$id)
	{
		$sql = mysql_query("SELECT * FROM status WHERE status='".$newfabric."' AND id != '".$id."'");
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

    function is_status_already_exist_add($newfabric)
	{
		$this->db->where('status',$newfabric);
		$query = $this->db->get('status');
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
		$sql = "SELECT * FROM status  WHERE  id <> 0";
		if($content['status'] != '') 
		{
			$sql .=	" AND  (status like '".$content['status']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from status where id <> 0";
		if($content['status'] != '') 
		{
			$sql_couint .=	" AND  (status like '".$content['status']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('status');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('status'))	{
			return true;
		} else {
			return false;
		}
	}
	 
	
 
	
	function status_list($content)
	{
		$sql   = "select * from status where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>