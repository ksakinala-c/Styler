<?php
class category_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function add($content) 
	{
 		$data['cname']  = $content['cname'];
		$data['image']  = $content['image'];
		//$data['flag']  = $content['flag'];
			$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		$data['pageurl']  = $content['pageurl'];
		$this->_data = $data;
		if ($this->db->insert('category', $this->_data))	{
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
		$data['cname']  = $content['cname'];
		//echo  $content['image'];die;
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$data['pageurl']  = $content['pageurl'];
		//$data['flag']  = $content['flag'];
			$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		//print_r($data['flag']);die();
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('category', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_category_already_exist($category,$id)
	{
		$sql = mysql_query("SELECT * FROM `category` WHERE cname = '".addslashes($category)."' AND id != '".$id."'");
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
	
    function is_category_already_exist_add($category)
	{
		$this->db->where('cname',$category);
		$query = $this->db->get('category');
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
	
		$sql = "SELECT * FROM category  WHERE  id <> 0";
		if($content['cname'] != '') 
		{
			$sql .=	" AND  (cname like '".$content['cname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id desc ";
		}
		$query = $this->db->query($sql);
		$sql_couint = "Select * from `category` where id <> 0";
		if($content['cname'] != '') 
		{
			$sql_couint .=	" AND  (cname like '".$content['cname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('category'))	{
			return true;
		} else {
			return false;
		}
	}
 
    function allcategory()
	{
 		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function category_list($content)
	{
		$sql   = "select * from category where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
}
?>