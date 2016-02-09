<?php
 
class colour_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['colourname']  = $content['colourname'];
		$data['colourcode']  = $content['colourcode'];
		$this->_data = $data;
		if ($this->db->insert('colour', $this->_data))	{
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
		$data['colourname']  = $content['colourname'];
		$data['colourcode']  = $content['colourcode'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('colour', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_colour_already_exist($colour,$id)
	{
		$sql = mysql_query("SELECT * FROM `colour` WHERE colourname='".$colour."' AND id != '".$id."'");
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

    function is_colour_already_exist_add($colour)
	{
		$this->db->where('colourname',$colour);
		$query = $this->db->get('colour');
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

	
		$sql = "SELECT * FROM colour  WHERE  id <> 0";
		if($content['colourname'] != '') 
		{
			$sql .=	" AND  (colourname like '".$content['colourname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by colourname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by colourname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from `colour` where id <> 0";
		if($content['colourname'] != '') 
		{
			$sql_couint .=	" AND  (colourname like '".$content['colourname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('colour');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('colour'))	{
			return true;
		} else {
			return false;
		}
	}
 
    function allcolour()
	{
 		$query = $this->db->get('colour');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function colour_list($content)
	{
		$sql   = "select * from colour where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>