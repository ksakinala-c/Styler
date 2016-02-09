<?php
class country_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['cname']  = $content['cname'];
		$data['code']  = $content['code'];
		
 		
		$this->_data = $data;
		if ($this->db->insert('country', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	/*function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('country', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/
	function edit($id, $content) {
		$data['cname']  = $content['cname'];
		$data['code']  = $content['code'];
	
	 
		
		$this->_data = $data;
		$this->db->where('cid', $id);
		if ($this->db->update('country', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_country_already_exist($country,$id)
	{
		$sql = mysql_query("SELECT * FROM `country` WHERE cname='".$country."' AND cid != '".$id."'");
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

	function is_country_already_exist_add($country)
	{
		$this->db->where('cname',$country);
		$query = $this->db->get('country');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function lists($num,$offset,$content) 
	{
		 
			$sql = "SELECT * FROM `country` WHERE cid <> 0";
			if($content['cname']!='')
			{
				$sql .= " AND `cname` like '".$content['cname']."%' ";
			}

			if($num!='' || $offset!='')
			{
				$sql .=	"  order by cid desc limit ".$offset." , ".$num." ";
			}
			else
			{
			$sql .=	" order by cid desc";
			}

			$query=$this->db->query($sql);

			$sql_count = "select * from `country` where cid<>0";
			if($content['cname'] != '')
			{
				$sql_count .= " AND `cname` like '".$content['cname']."%'";
			}

			//echo $sql_count;
			$query1 = $this->db->query($sql_count);
			$ret['result']=$query->result();
			$ret['count']=$query1->num_rows;
			return $ret;
	}

	function get($id){
 		$this->db->where('cid = ',$id);
		$query = $this->db->get('country');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('cid = ',$id);
		if ($this->db->delete('country'))	{
			return true;
		} else {
			return false;
		}
	}


   function country_list()
	{
		$sql   = " select * from country";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>