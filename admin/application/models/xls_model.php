<?php
	class Xls_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}	

     
    function get_addressbook() {
	    $query = $this->db->get('addressbook');
	    if ($query->num_rows() > 0) {
	    return $query->result_array();
	    } else {
	    return FALSE;
	    }
    }
     
    function insert_csv($data) {
   	 $this->db->insert('addressbook', $data);
    	}
		
		
	function getdata($id) 
	{
		$this->db->where('code = ',$id);
		$query = $this->db->get('price');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
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
		
		$sql = "SELECT * FROM addessdata where id <> 0 ";
		if($content['city'] != '') 
		{
			$sql .=	" AND  (city like '".$content['city']."%' ) "; 
		}
		
		if($content['pincode'] != '') 
		{
			$sql .=	" AND  (pincode  like '".$content['pincode']."%' ) "; 
		}
	 
		
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM  addessdata  WHERE id <> 0";

		if($content['city'] != '') 
		{
			$sql_count .=	" AND  (city like '".$content['city']."%' ) "; 
		}
		if($content['pincode'] != '') 
		{
			$sql_count .=	" AND  (pincode like '".$content['pincode']."%' ) "; 
		}
		 
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	 function product_list()
	  {
			$sql   = "select * from  addessdata where id <> 0"; 
			$query = $this->db->query($sql);
			return $query->result();
	  }
  	function deletes($id) 
	{
		//echo $id;die;
 		$this->db->where('id = ',$id);
		if ($this->db->delete('addessdata'))	{
			return true;
		} else {
			return false;
		}
	}
 	
    }
 ?>