<?php
class Newfabric_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
		function add($content) 
	{
 		$data['fname']  = $content['fname'];
		 
		$this->_data = $data;
		if ($this->db->insert('newfabric', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function edit($id, $content) {
	 
		$data['fname']  = $content['fname'];
		//print_r($data['flag']);die();
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('newfabric', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
 
	
	function is_newfabric_already_exist($newfabric,$id)
	{
		$sql = mysql_query("SELECT * FROM newfabric WHERE fname='".$newfabric."' AND id != '".$id."'");
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

    function is_newfabric_already_exist_add($newfabric)
	{
		$this->db->where('fname',$newfabric);
		$query = $this->db->get('newfabric');
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
		$sql = "SELECT * FROM newfabric  WHERE  id <> 0";
		if($content['fname'] != '') 
		{
			$sql .=	" AND  (fname like '".$content['fname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by fname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by fname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from newfabric where id <> 0";
		if($content['fname'] != '') 
		{
			$sql_couint .=	" AND  (fname like '".$content['fname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('newfabric');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('newfabric'))	{
			return true;
		} else {
			return false;
		}
	}
	
    function allnewfabric()
	{
 		$query = $this->db->get('newfabric');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	  function allparts()
	{
 		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function getnewfabric($id)
	{		
		$query = "SELECT * from newfabric where id = '".$id."'";		
		$result = $this->db->query($query);		
		if ($result->num_rows() > 0)		
			{	
				$result = $result->row();		
				return $result;	
			}
	}
	function getcatname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		}
	}
 
	
 
	
	function newfabric_list($content)
	{
		$sql   = "select * from newfabric where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>