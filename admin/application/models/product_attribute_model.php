<?php
class Product_attribute_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_product_attribute($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('product_attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
    

	function allproduct_attribute(){
		
 		$query = $this->db->get('product_attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function add($content) 
	{
		$data['price'] = $content['price'];
		$data['quanity'] = $content['quanity'];
		$this->_data = $data;
		if ($this->db->insert('product_attribute', $this->_data))	
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
		$data['price'] = $content['price'];
		$data['quanity'] = $content['quanity'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('product_attribute', $this->_data))	{
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
		
		$sql = "SELECT * FROM product_attribute where id <> 0 ";
		if($content['price'] != '') 
		{
			$sql .=	" AND  (price like '".$content['price']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by price asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM product_attribute  WHERE id <> 0";

		if($content['price'] != '') 
		{
			$sql_count .=	" AND  (price like '".$content['price']."%' ) "; 
		}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	
	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('product_attribute'))	{
			return true;
		} else {
			return false;
		}
	}

  function product_attribute_list()
  {
		$sql   = "select * from product_attribute where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
  }
}
?>