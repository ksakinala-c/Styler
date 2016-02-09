<?php
class affliliate_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) {
		//print_r($content);die;
		$data['themename']  = $content['themename'];
		$data['url']  = $content['url'];
 		$data['image']  = $content['image'];
		$data['order']  = $content['order'];
		
		$this->_data = $data;
		if ($this->db->insert('affliliate_theme', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['themename']  = $content['themename'];
		$data['url']  = $content['url'];
		//echo $content['image']; die;
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$data['order']  = $content['order'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('affliliate_theme', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('themename', $searchTerm);
			$count = $this->db->count_all_results('affliliate_theme');
			$query = $this->db->get_where('affliliate_theme', '( themename LIKE "%'.$searchTerm.'%" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('affliliate_theme', $num, $offset);
			$count = $this->db->count_all('affliliate_theme');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('affliliate_theme');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('affliliate_theme'))	{
			return true;
		} else {
			return false;
		}
	}
 
function get_wallet($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('systems');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
  function edit_insider($id, $content) 
	{
		
		$data['affliliatecontent'] = $content['affliliatecontent'];
		$data['affliatepercent'] = $content['affliatepercent'];
		//print_r($data);die;
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('systems', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function walletattr($id){
		
			$query = "SELECT * from systems where id= '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	function userlists($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM   users  WHERE  id <> 0 and affiliate = 1 ";
		if($content['username'] != '') 
		{
			$sql .=	" AND  (username like '".$content['username']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by username asc limit ".$offset.",".$num."";
		} else
		{
			$sql .=	" order by username asc";
		}
		 
		$query = $this->db->query($sql);

		$sql_couint = "Select * from `users` where id <> 0 and affiliate = 1 ";
		if($content['username'] != '') 
		{
			$sql_couint .=	" AND  (username like '".$content['username']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	
	function transaction_history($num, $offset, $code) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM transaction_history  WHERE  id <> 0 and reff_id = '".$code."' ";
		 
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id asc limit ".$offset.",".$num."";
		} else
		{
			$sql .=	" order by id asc";
		}
		// echo $sql;
		$query = $this->db->query($sql);

		$sql_couint = "SELECT * FROM transaction_history  WHERE  id <> 0 and reff_id = '".$code."' ";
		 
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	
	
function refcount($id)
	{
		$sql_count = "Select * from users where  ref_id ='".$id."' ";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	function gettrackid($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->aff_code;
			return $result;
		} else {
			return false;
		}	
	}
	function getrefamount(){
 		 
		$query = $this->db->get('systems');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->affliatepercent ;
			return $result;
		} else {
			return false;
		}
	}
	function getuname($id){
 		 
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->username ;
			return $result;
		} else {
			return false;
		}
	}
}
?>
