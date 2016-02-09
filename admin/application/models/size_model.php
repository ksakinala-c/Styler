<?php
class Size_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
		function add($content, $sid) {
		
		$data['size']  = $content['size'];
		$data['fit']  = $content['fit'];
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
	
	function edit($id,$subcat, $content) {
 		$data['size']  = $content['size'];
		$data['fit']  = $content['fit'];
		$this->_data = $data;
			$this->db->where('id', $id);
		if ($this->db->update('size', $this->_data))	{
			$sizeid = $this->db->insert_id();
			if(count($_POST['partsvalue']) > 0 && $_POST['partsvalue']!='')
			{ 
				$content['sizeid'] = $id;
				for($i='0';$i<count($_POST['partsdata']); $i++)
				{
					$dexts = $this->attributedata($_POST['attrid'][$i]);
					if($dexts == '1') {
						if($_POST['partsdata'][$i] != '')
						{ 
							$content['partdata'] = $_POST['partsdata'][$i];
							$content['partsvalue'] = $_POST['partsvalue'][$i];
							$content['attrid'] = $_POST['attrid'][$i];
							
							$this->update_product($content);
						}
					} else {
						if($_POST['partsdata'][$i] != '')
						{ 
							$content['partdata'] = $_POST['partsdata'][$i];
							$content['partsvalue'] = $_POST['partsvalue'][$i];
							$content['subcatid'] = $subcat;
							$content['sizeid'] = $id;
							$this->insert_product($content);
						}
 					}
				} 
			}
			return true;
		}  
	}

	function attributedata($size)
	{
		//echo $id;die;
		$sql = mysql_query("SELECT * FROM part_attribute WHERE id ='".$size."'");
		$fsql = mysql_num_rows($sql);
		if($fsql > 0){
			return '1';
		} else {
			return '0';
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
	
	function is_size_already_exist($size,$id,$sid)
	{
		//echo $id;die;
		$sql = mysql_query("SELECT * FROM size WHERE size='".$size."' AND subcatid = '".$id."' AND id != '".$id."' ");
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

    function is_size_already_exist_add($size,$sid,$fit)
	
	{
	 
		//echo $size;die;
		$this->db->where('size',$size);
		$this->db->where('fit',$fit);
		$this->db->where('subcatid',$sid);
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

	function lists($num, $offset, $content, $id) 
	{
		if($offset == ''){
			$offset = '0';
		}
		$sql = "SELECT * FROM size  WHERE  subcatid = '".$id."' AND id <> 0";
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


		$sql_couint = "SELECT * FROM size  WHERE  subcatid = '".$id."' AND id <> 0";
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
 
	function allparts($id)
	{
		$query = "SELECT * from add_parts where subcatid = '".$id."' AND hide_in_size='0' ";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
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
	function presult($id)
	{
		$query = "SELECT * from  size where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}
		function productimages($id)
	{
		$query = "SELECT * from tbl_size_image where pid = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	function updateorder($id,$val){
		$query2 = "update tbl_size_image set image_index = '".$val."'  where id = '".$id."'";
		$result2 = $this->db->query($query2);
	}
	function setbaseimg($id,$pid)
	{
		$query2 = "update tbl_size_image set baseimage = '0'  where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_size_image set baseimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
	function removeimage($id)
	{
		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_size_image'))	{
			return true;
		} else {
			return false;
		}
	}
	function add_product_image($content)  /// Add Pincode  
	{
		$data['pid']           = $content['pid'];
		$data['image']         = $content['image'];
		
		$this->_data = $data;

		if ($this->db->insert('tbl_size_image', $this->_data))	{
			return true;
		} else {
			return false;
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