<?php
class Size_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
		function add($content, $sid) {
		$data['size']  = $content['size'];
		$data['subcatid']  = $sid;
		$this->_data = $data;
		if ($this->db->insert('size', $this->_data)){
		$sizeid = $this->db->insert_id();
		if(count($_POST['partsvalue']) > 0 && $_POST['partsvalue']!='')
			{ 
				$content['sizeid'] = $sizeid;
				$content['subcatid'] = $sid;
				for($i='0';$i<count($_POST['partsdata']); $i++){
					$content['partdata'] = $_POST['partsdata'][$i];
					$content['partsvalue'] = $_POST['partsvalue'][$i];
 					$this->insert_product($content);
				} 
			}
		} 
		return true;
	}
	function insert_product($content)  
	{
		
		$data['sizeid'] = $content['sizeid']; 
		$data['subcatid'] = $content['subcatid']; 
		$data['partvalue'] = $content['partsvalue']; 
		$data['partid'] = $content['partdata']; 
 		 
		
		$this->_data = $data;
		if ($this->db->insert('part_attribute', $this->_data))	
		{
			//return true;
		} 
		else 
		{
			//return false;
		}
	}
	
	function edit($id, $content) {
 		$data['size']  = $content['size'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('size', $this->_data))	{
			$sizeid = $this->db->insert_id();
			if(count($_POST['partsvalue']) > 0 && $_POST['partsvalue']!='')
			{ 
				$content['sizeid'] = $id;
				for($i='0';$i<count($_POST['partsdata']); $i++)
				{
					if($_POST['partsdata'][$i] != '')
					{ 
						$content['partdata'] = $_POST['partsdata'][$i];
						$content['partsvalue'] = $_POST['partsvalue'][$i];
						$content['attrid'] = $_POST['attrid'][$i];
						$this->update_product($content);
					}
				} 
			}
			return true;
		}  
	}

	function update_product($content)  
	{
		
  		$data2['partvalue'] = $content['partsvalue']; 
  		
 		$this->_data = $data2;
		$this->db->where('id', $content['attrid']);
		if ($this->db->update('part_attribute', $this->_data))	
			 
		{
			//return true;
		} 
		else 
		{
			//return false;
		}
	}
	
	
	
 
	
	function is_size_already_exist($size,$id)
	{
		$sql = mysql_query("SELECT * FROM size WHERE size='".$size."' AND id != '".$id."'");
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

    function is_size_already_exist_add($size)
	{
		$this->db->where('size',$size);
		$query = $this->db->get('size');
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
		$sql = "SELECT * FROM size  WHERE  id <> 0";
		if($content['size'] != '') 
		{
			$sql .=	" AND  (size like '".$content['size']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by size asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by size asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from size where id <> 0";
		if($content['size'] != '') 
		{
			$sql_couint .=	" AND  (size like '".$content['size']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('size');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('size'))	{
			return true;
		} else {
			return false;
		}
	}
	
    function allsize()
	{
 		$query = $this->db->get('size');
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
	function getpartsname($id,$sizeid){
		$this->db->where('sizeid = ',$sizeid);
		$this->db->where('partid = ',$id);
		$query = $this->db->get('part_attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
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
	
	
	function size_list($content)
	{
		$sql   = "select * from size where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>