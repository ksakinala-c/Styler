<?php
class attribute_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['attribute']  = $content['attribute'];
		$this->_data = $data;
		if ($this->db->insert('attribute', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('attribute', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['attribute']  = $content['attribute'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('attribute', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_attribute_already_exist($attribute,$id)
	{
		$sql = mysql_query("SELECT * FROM attribute WHERE attribute='".$attribute."' AND id != '".$id."'");
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

    function is_attribute_already_exist_add($attribute)
	{
		$this->db->where('attribute',$attribute);
		$query = $this->db->get('attribute');
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
		$sql = "SELECT * FROM attribute  WHERE  id <> 0";
		if($content['attribute'] != '') 
		{
			$sql .=	" AND  (attribute like '".$content['attribute']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by attribute asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by attribute asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from attribute where id <> 0";
		if($content['attribute'] != '') 
		{
			$sql_couint .=	" AND  (attribute like '".$content['attribute']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('attribute'))	{
			return true;
		} else {
			return false;
		}
	}
	 
    function allattribute()
	{
 		$query = $this->db->get('attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
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
	function getcolor($id)
	{	
	$query = "SELECT * from colour where id = '".$id."'";	
	$result = $this->db->query($query);	
	if ($result->num_rows() > 0)	
		{		
	$result = $result->row();	
	return $result;		
	}	
	}	

	function attribute_list($content)
	{
		$sql   = "select * from attribute where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>