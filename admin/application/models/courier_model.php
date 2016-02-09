<?php
class courier_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['cname']  = $content['cname'];
		$data['curl']  =  $content['curl'];
 		
		$this->_data = $data;
		if ($this->db->insert('courier', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	
	function edit($id, $content) 
	{
		$data['cname']  = $content['cname'];
		$data['curl']  =  $content['curl'];
	
	 
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('courier', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_courier_already_exist_add($state) {
		$this->db->where('cname',$state);
		$query = $this->db->get('courier');
		if($query->num_rows() > 0)
		{
			return true;
		} else{
			return false;
		}
	}

	function is_courier_already_exist($state,$id) {
		
		$sql = mysql_query("SELECT * FROM courier WHERE cname ='".$state."' AND  id != '".$id."'");
		$fsql = mysql_num_rows($sql);
		if($fsql > 0) {
			return true;
		} else {
			return false;
		}
		
	}

	function lists($num,$offset,$content) 
	{
		
				

			$sql = "SELECT * FROM courier WHERE id <> 0";
			if($content['cname'] != '')	
			{
				$sql .= " AND cname like '".$content['cname']."' ";
			}
			if($num!='' || $offset!='')
			{
				$sql .=	"  order by  id limit ".$offset." , ".$num." ";
			}
			//echo $sql;	
			$query=$this->db->query($sql);

			$sql_count = "select * from `courier` where id<>0";
			if($content['cname'] !='') {
				$sql_count .= " AND cname like '".$content['cname']."'";
			}
			$query1 = $this->db->query($sql_count);
			$ret['result']=$query->result();
			$ret['count']=$query1->num_rows;
			return $ret;
	}

	function get($id) {
 		$this->db->where('id = ',$id);
		$query = $this->db->get('courier');
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
			return false;
		}
	}

	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('courier'))	{
			return true;
		} else {
			return false;
		}
	}
 

	function state_list(){
			$sql   = " select * from state ";
			$query = $this->db->query($sql);
			return $query->result();
	}
}
?>
