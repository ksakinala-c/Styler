<?php
class Bodymeasure_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
function get_bodymeasure($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function allbodymeasure(){
		
 		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}


	function add($content) 
	{
		$L_strErrorMessage='';
		$data['pname'] = $content['pname'];
		$data['desc'] = $content['desc'];
		$data['youtubeurl'] = $content['youtubeurl'];
		$data['body_measure'] = '1';
		
	
		$this->_data = $data;
		if ($this->db->insert('add_parts', $this->_data))	
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}


	function edit($id, $content) 
	{
		$data['pname'] = $content['pname'];
		$data['desc'] = $content['desc'];
		$data['youtubeurl'] = $content['youtubeurl'];
		$data['order'] = $content['displayorder'];
		$data['body_measure'] = '1';
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('add_parts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		
	function is_bodymeasure_already_exist_add($cms)
	{
		
		$sql = mysql_query("SELECT * FROM add_parts WHERE pname='".$cms."'");
		$fsql = mysql_num_rows($sql);
		if($fsql > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function is_bodymeasure_already_exist($cms,$id)
	{
		$sql = mysql_query("SELECT * FROM add_parts WHERE pname='".$cms."'  AND  id != '".$id."' ");
		
		$fsql = mysql_num_rows($sql);
		if($fsql > 0)
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
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM add_parts where body_measure = '1' AND id <> 0 ";
		if($content['pname'] != '') 
		{
			$sql .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM add_parts where body_measure = '1' AND id <> 0 ";

		if($content['pname'] != '') 
		{
			$sql_count .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('add_parts'))	{
			return true;
		} else {
			return false;
		}
	}

	function bodymeasure_list()
	{
		$sql   = " select * from add_parts ";
		$query = $this->db->query($sql);
		return $query->result();
	}

}
?>