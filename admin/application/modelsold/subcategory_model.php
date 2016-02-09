<?php
class subcategory_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{		//print_r($content);die();
		$data['scname']  = $content['scname'];
		$data['catid']  = $content['catid'];	
		$data['image']  = $content['image'];
			$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		$this->_data = $data;
		if ($this->db->insert('subcategory', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function show_subcategory($sid)
	{
		 $where = array(
			'catid' => $sid,
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

	function edit($id, $content) {
		$data['scname']  = $content['scname'];
		$data['catid']  = $content['catid'];	
		if($content['image'] != '') {	
		$data['image']  = $content['image'];	
		}
			$data['title']  = $content['title'];
		$data['description']  = $content['description'];
		$data['keyword']  = $content['keyword'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('subcategory', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_subcategory_already_exist_add($subcategory)
	{
		$this->db->where('scname',$subcategory);
		$query = $this->db->get('subcategory');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function is_subcategory_already_exist($subcategory,$catgegory,$id)
	{
		
		$sql = mysql_query("SELECT * FROM subcategory WHERE scname='".$subcategory."' AND catid = '".$catgegory."' AND  id != '".$id."'"); 
		 
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
	
		$sql = "SELECT * FROM `subcategory` WHERE id <> 0";
		if($content['scname'] != '') 
		{
			$sql .=	" AND  (scname like '".$content['scname']."%' ) "; 
		}
		if($content['cname'] != '')
		{
			$sql .= " AND catid='".$content['cname']."'";
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


		$sql_couint = "Select * from `subcategory` where id <> 0";
		if($content['scname'] != '') 
		{
			$sql_couint .=	" AND  (scname like '".$content['scname']."%' ) "; 
		}
		if($content['cname'] != '')
		{
			$sql_couint .= " AND catid='".$content['cname']."'";
		}
	
 		$query1 = $this->db->query($sql_couint);

 

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('subcategory');
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
		if ($this->db->delete('subcategory'))	{
			return true;
		} else {
			return false;
		}
	}
 
    function allsubcategory(){
		
 		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function allwings($id){
		$sql = "Select * from category where `id`='".$id."'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
	}
	
	function getallrooms($id,$catid,$subcatid)
	{
	
		//get wingid
		$wquery = mysql_query("select * from category where `id`='".$id."' AND `cname`='".$cname."'");
		$wrow = mysql_fetch_array($wquery);
		$wid = $wrow['id'];
	
		$sql = "Select * from subcategory where `id`='".$id."' AND `catid`='".$catid."' AND subcatid='".$subcatid."' AND `status`!=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
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
function subcategory_list()
{
		$sql   = " select * from subcategory where id <> 0";
		$query = $this->db->query($sql);
		return $query->result();
}

}
?>
