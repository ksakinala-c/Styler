<?php
class Image_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	
	
	function insert_images()
	{
		$insert_data = array(
		'filename' => $image_data['file_name'],
		'fullpath' => $image_data['full_path']
		);
		$this->db->insert('tbl_product_images', $insert_data);
	}
	function get_image($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product_images');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function allimage(){
		
 		$query = $this->db->get('tbl_product_images');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
function add_product_image($content)  /// Add Pincode  
	{
		$data['image']         = $content['image'];
		$this->_data = $data;
		if ($this->db->insert('tbl_product_images', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function edit($id, $content) 
	{	
		$data['pname'] = $content['pname'];		
		$data['itemcode'] = $content['itemcode'];		
		$data['shortcode'] = $content['shortcode'];		
		$data['discount'] = $content['discount'];
		$data['description'] = $content['description'];			
			
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('tbl_product', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		
	
    function lists($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM tbl_product_images where id <> 0 ";
		if($content['imagename'] != '') 
		{
			$sql .=	" AND  (imagename like '".$content['imagename']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by imagename asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM tbl_product_images  WHERE id <> 0";

		if($content['imagename'] != '') 
		{
			$sql_count .=	" AND  (imagename like '".$content['imagename']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_product'))	{
			return true;
		} else {
			return false;
		}
	}

  function image_list()
  {
		$sql   = "select * from tbl_product_images where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
  }
}
?>