<?php
class Fonts_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['fontname']  = $content['fontname'];
		$this->_data = $data;
		if ($this->db->insert('fonts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('fonts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['fontname']  = $content['fontname'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('fonts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_fonts_already_exist($fonts)
	{
		$sql = mysql_query("SELECT * FROM fonts WHERE fontname='".$fonts."' ");
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

    function is_fonts_already_exist_add($fonts)
	{
		$this->db->where('fontname',$fonts);
		$query = $this->db->get('fonts');
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
		$sql = "SELECT * FROM fonts  WHERE  id <> 0";
		if($content['fontname'] != '') 
		{
			$sql .=	" AND  (fontname like '".$content['fontname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by fontname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by fontname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from fonts where id <> 0";
		if($content['fontname'] != '') 
		{
			$sql_couint .=	" AND  (fontname like '".$content['fontname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('fonts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('fonts'))	{
			return true;
		} else {
			return false;
		}
	}
 

	function fonts_list($content)
	{
		$sql   = "select * from fonts where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>