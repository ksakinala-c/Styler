<?php
class Design_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['designname']  = $content['designname'];
		$this->_data = $data;
		if ($this->db->insert('design', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('design', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['designname']  = $content['designname'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('design', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_design_already_exist($design)
	{
		$sql = mysql_query("SELECT * FROM design WHERE designname='".$design."' ");
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

    function is_design_already_exist_add($design)
	{
		$this->db->where('designname',$design);
		$query = $this->db->get('design');
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
		$sql = "SELECT * FROM design  WHERE  id <> 0";
		if($content['designname'] != '') 
		{
			$sql .=	" AND  (designname like '".$content['designname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by designname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by designname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from design where id <> 0";
		if($content['designname'] != '') 
		{
			$sql_couint .=	" AND  (designname like '".$content['designname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('design');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('design'))	{
			return true;
		} else {
			return false;
		}
	}
 

	function design_list($content)
	{
		$sql   = "select * from design where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>