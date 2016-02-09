<?php
	class bsize_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['size']  = $content['size'];
		$data['fitid']  = $content['fitid'];
		$data['brandid']  = $content['brandid'];
		 
		$this->_data = $data;
		if ($this->db->insert('brand_size', $this->_data))	{
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
		$data['size']  = $content['size'];
		$data['fitid']  = $content['fitid'];
		$data['brandid']  = $content['brandid'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('brand_size', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_size_already_exist($size,$fit,$brand,$id)
	{
		$sql = mysql_query("SELECT * FROM `brand_size` WHERE size='".$size."' AND fitid='".$fit."' AND brandid='".$brand."' AND id != '".$id."'");
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

    function is_size_already_exist_add($size,$fitid,$brandid)
	{
		$this->db->where('size',$size);
		$this->db->where('fitid',$fitid);
		$this->db->where('brandid',$brandid);
		$query = $this->db->get('brand_size');
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

	
		$sql = "SELECT * FROM brand_size  WHERE  id <> 0";
		if($content['size'] != '') 
		{
			$sql .=	" AND  (size like '".$content['size']."%' ) "; 
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


		$sql_couint = "Select * from `brand_size` where id <> 0";
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
		$query = $this->db->get('brand_size');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('brand_size'))	{
			return true;
		} else {
			return false;
		}
	}
 
	function size_list($content)
	{
		$sql   = "select * from brand_size where id <> 0"; 
		
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
	
		   function allfit()
	{
 		$query = $this->db->get('brand_fit');
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
		function getfitname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('brand_fit');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->fitname;
			return $result;
		} else {
			return false;
		}	
	}
	function show_fit($bid)
	{
	//echo $cid;
		 $where = array(
			'brandid' => $bid,
		); 
		$this->db->where($where);
		$query = $this->db->get('brand_fit');
		if($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
			return false;
		} 
	}
	
	
}
?>