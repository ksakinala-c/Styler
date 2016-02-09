<?php
 
class Brand_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['bname']  = $content['bname'];
		 
		$this->_data = $data;
		if ($this->db->insert('brand', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('category', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['bname']  = $content['bname'];
		 
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('brand', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_brand_already_exist($colour,$id)
	{
		$sql = mysql_query("SELECT * FROM `brand` WHERE bname='".$colour."' AND id != '".$id."'");
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

    function is_brand_already_exist_add($colour)
	{
		$this->db->where('bname',$colour);
		$query = $this->db->get('brand');
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

	
		$sql = "SELECT * FROM brand  WHERE  id <> 0";
		if($content['bname'] != '') 
		{
			$sql .=	" AND  (bname like '".$content['bname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from `brand` where id <> 0";
		if($content['bname'] != '') 
		{
			$sql_couint .=	" AND  (bname like '".$content['bname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('brand');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('brand'))	{
			return true;
		} else {
			return false;
		}
	}
 
	function brand_list($content)
	{
		$sql   = "select * from brand where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>