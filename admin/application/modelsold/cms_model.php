<?php
class Cms_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
function get_cms($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('cms');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function allcms(){
		
 		$query = $this->db->get('cms');
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
		$data['title'] = $content['title'];
		$data['content'] = $content['content'];
	
		$this->_data = $data;
		if ($this->db->insert('cms', $this->_data))	
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
		$data['title'] = $content['title'];
		$data['content'] = $content['content'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('cms', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		
	function is_cms_already_exist_add($cms)
	{
		
		$sql = mysql_query("SELECT * FROM cms WHERE title='".$cms."'");
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

	function is_cms_already_exist($cms,$id)
	{
		$sql = mysql_query("SELECT * FROM cms WHERE title='".$cms."'  AND  id != '".$id."' ");
		
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
		
		$sql = "SELECT * FROM cms where id <> 0 ";
		if($content['title'] != '') 
		{
			$sql .=	" AND  (title like '".$content['title']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by title asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM cms  WHERE id <> 0";

		if($content['title'] != '') 
		{
			$sql_count .=	" AND  (title like '".$content['title']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('cms'))	{
			return true;
		} else {
			return false;
		}
	}

	function cms_list()
	{
		$sql   = " select * from cms ";
		$query = $this->db->query($sql);
		return $query->result();
	}

}
?>