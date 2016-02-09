<?php
 
class Fit_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['fitname']  = $content['fitname'];
		$data['brandid']  = $content['brandid'];
		 
		$this->_data = $data;
		if ($this->db->insert('brand_fit', $this->_data))	{
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
		$data['fitname']  = $content['fitname'];
		$data['brandid']  = $content['brandid'];
		 
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('brand_fit', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_fit_already_exist($colour,$bid,$id)
	{
		$sql = mysql_query("SELECT * FROM `brand_fit` WHERE fitname='".$colour."' AND brandid='".$bid."' AND id != '".$id."'");
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

    function is_fit_already_exist_add($colour,$bid)
	{
		$this->db->where('fitname',$colour);
		$this->db->where('brandid',$bid);
		$query = $this->db->get('brand_fit');
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

	
		$sql = "SELECT * FROM brand_fit  WHERE  id <> 0";
		if($content['fitname'] != '') 
		{
			$sql .=	" AND  (fitname like '".$content['fitname']."%' ) "; 
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


		$sql_couint = "Select * from `brand_fit` where id <> 0";
		if($content['fitname'] != '') 
		{
			$sql_couint .=	" AND  (fitname like '".$content['fitname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('brand_fit');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('brand_fit'))	{
			return true;
		} else {
			return false;
		}
	}
 
	function fit_list($content)
	{
		$sql   = "select * from brand_fit where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	   function allbrand()
	{
 		$query = $this->db->get('brand');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
 
	function getbrandname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('brand');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->bname;
			return $result;
		} else {
			return false;
		}	
	}
	
	
}
?>