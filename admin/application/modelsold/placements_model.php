<?php
class Placements_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['pname']  = $content['pname'];
		$this->_data = $data;
		if ($this->db->insert('placements', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('placements', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['pname']  = $content['pname'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('placements', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_placements_already_exist($placements)
	{
		$sql = mysql_query("SELECT * FROM placements WHERE pname='".$placements."' ");
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

    function is_placements_already_exist_add($placements)
	{
		$this->db->where('pname',$placements);
		$query = $this->db->get('placements');
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
		$sql = "SELECT * FROM placements  WHERE  id <> 0";
		if($content['pname'] != '') 
		{
			$sql .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by pname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by pname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from placements where id <> 0";
		if($content['pname'] != '') 
		{
			$sql_couint .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('placements');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('placements'))	{
			return true;
		} else {
			return false;
		}
	}
 

	function placements_list($content)
	{
		$sql   = "select * from placements where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>