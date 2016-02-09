<?php
class Parts_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content,$pid) 
	{		
		//print_r($content);die();
 
		 
		$data['subcatid']  = $pid;
		$data['pname']  = $content['pname'];	
		$data['desc']  = $content['desc'];
		$data['youtubeurl']  = $content['youtubeurl'];
		$data['order']  = $content['order'];
		$data['hide_in_size']  = $content['hide_in_size'];
		
		$this->_data = $data;
		if ($this->db->insert('add_parts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		function get_parts($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function show_parts($sid)
	{
		 $where = array(
			'id' => $sid,
		); 
		$this->db->where($where);
		$query = $this->db->get('add_parts');
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
	
		function add_product_image($content)  /// Add Pincode  
	{
		$data['pid']           = $content['pid'];
		$data['image']         = $content['image'];
		
		$this->_data = $data;

		if ($this->db->insert('tbl_parts_image', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function presult($id)
	{
		$query = "SELECT * from add_parts where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}
		function productimages($id)
	{
		$query = "SELECT * from tbl_parts_image where pid = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	function updateorder($id,$val){
		$query2 = "update tbl_parts_image set image_index = '".$val."'  where id = '".$id."'";
		$result2 = $this->db->query($query2);
	}
	function setbaseimg($id,$pid)
	{
		$query2 = "update tbl_parts_image set baseimage = '0'  where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_parts_image set baseimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
	function removeimage($id)
	{
		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_parts_image'))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		 
		$data['subcatid']  = $content['subcatid'];
		$data['pname']  = $content['pname'];	
		$data['desc']  = $content['desc'];
		$data['youtubeurl']  = $content['youtubeurl'];
		$data['order']  = $content['order'];
		$data['hide_in_size']  = $content['hide_in_size'];
	 
		$this->_data = $data;
		$this->db->where('id', $id);
		 
		if ($this->db->update('add_parts', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_parts_already_exist_add($subcategory , $pid)
	{
		$this->db->where('pname',$subcategory);
		$this->db->where('body_measure','0');
		$this->db->where('subcatid',$pid);
		$query = $this->db->get('add_parts');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function is_parts_already_exist($name,$id)
	{
		
		$sql = mysql_query("SELECT * FROM add_parts WHERE pname='".$name."' AND id = '".$id."' "); 
		 
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
		
	 
		if($offset == ''){
			$offset = '0';
		}
		//print_r($offset); die;
		 
		$sql = "SELECT * FROM `add_parts` WHERE subcatid = '".$content['partid']."' AND id <> 0 ";
		if($content['pname'] != '') 
		{
			$sql .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		 
	
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	"order by id desc ";
		}
		//echo $sql;
		$query = $this->db->query($sql);



		$sql_couint = "Select * from `add_parts` where subcatid = '".$content['partid']."' AND id <> 0 ";
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
		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
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


	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('add_parts'))	{
			return true;
		} else {
			return false;
		}
	}
 
 
	
	 
function parts_list()
{
		$sql   = " select * from add_parts where id <> 0";
		$query = $this->db->query($sql);
		return $query->result();
}

}
?>
