<?php
class Fabric_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function add($content) 
	{
 		$data['fabricsname']  = $content['fabricsname'];
		$data['catid']  = $content['catid'];
		$data['subcatid'] = implode(',',$content['subcatid']); 
		//$data['colourid']  = $content['colourid'];
		//$data['designid']  = $content['designid'];
		$data['pid']  = $content['pid'];
		//$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		$data['metadescription']  = $content['metadescription'];
		$data['metatitle']  = $content['metatitle'];
		$data['pageurl']  = $content['pageurl'];
		$data['order']  = $content['order'];
	 
		$this->_data = $data;
		if ($this->db->insert('fabrics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
 
	function edit($id, $content) {
		$data['fabricsname']  = $content['fabricsname'];
		$data['catid']  = $content['catid'];
			$data['subcatid'] = implode(',',$content['subcatid']); 
		//$data['colourid']  = $content['colourid'];
		//$data['designid']  = $content['designid'];
		$data['pid']  = $content['pid'];
		//$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		$data['pageurl']  = $content['pageurl'];
		$data['metadescription']  = $content['metadescription'];
		$data['metatitle']  = $content['metatitle'];
		$data['order']  = $content['order'];
		//print_r($data['flag']);die();
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('fabrics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function is_fabric_already_exist($category,$id)
	{
		$sql = mysql_query("SELECT * FROM `fabrics` WHERE fabricsname='".$category."' AND id != '".$id."'");
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
    function is_fabric_already_exist_add($category)
	{
		$this->db->where('fabricsname',$category);
		$query = $this->db->get('fabrics');
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
	
		$sql = "SELECT * FROM fabrics WHERE  id <> 0";
		if($content['fabricsname'] != '') 
		{
			$sql .=	" AND  (fabricsname like '".$content['fabricsname']."%' ) "; 
		}
		
		if($content['catid'] != '') 
		{
			$sql .=	" AND  (catid like '".$content['catid']."%' ) "; 
		}
		
		if($content['subcatid'] != '') 
		{
			$sql .=	" AND  (subcatid like '".$content['subcatid']."%' ) "; 
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
		$sql_couint = "Select * from `fabrics` where id <> 0";
		if($content['fabricsname'] != '') 
		{
			$sql_couint .=	" AND  (fabricsname like '".$content['fabricsname']."%' ) "; 
		}
		if($content['catid'] != '') 
		{
			$sql_couint .=	" AND  (catid like '".$content['catid']."%' ) "; 
		}
		
		if($content['subcatid'] != '') 
		{
			$sql_couint .=	" AND  (subcatid like '".$content['subcatid']."%' ) "; 
		}

		
 		$query1 = $this->db->query($sql_couint);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('fabrics');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('fabrics'))	{
			return true;
		} else {
			return false;
		}
	}
 
 
	function fabric_list($content)
	{
		$sql   = "select * from fabrics where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	function add_product_image($content)  /// Add Pincode  
	{
		$data['fid']           = $content['pid'];
		$data['image']         = $content['image'];
		
		$this->_data = $data;

		if ($this->db->insert('add_fabric_image', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function presult($id)
	{
		$query = "SELECT * from add_fabric_image where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}
	function productimages($id)
	{
		$query = "SELECT * from add_fabric_image where fid = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	function updateorder($id,$val){
		$query2 = "update add_fabric_image set image_index = '".$val."'  where id = '".$id."'";
		$result2 = $this->db->query($query2);
	}
	function removeimage($id)
	{
		$this->db->where('id = ',$id);
		if ($this->db->delete('add_fabric_image'))	{
			return true;
		} else {
			return false;
		}
	}
	function setbaseimg($id,$pid)
	{
		$query2 = "update  add_fabric_image set baseimage = '0'  where fid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update  add_fabric_image set baseimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
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
	 function allsubcategory()
	{
 		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
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
	 function allproduct()
	{
 		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function alldesign()
	{
 		$query = $this->db->get('design');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function show_subcategory($catid)
	{
	//echo $cid;
		 $where = array(
			'catid' => $catid,
		); 
		$this->db->where($where);
		$query = $this->db->get('subcategory');
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
	function getcatname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->cname;
		} else {
			return false;
		}
	}
		function getsubcatname($id){
		if($id !=""){
		$sql = "Select group_concat(scname) as scname from subcategory where id IN (".$id.")";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		} } else {
			return false;
		}
	}
}
?>