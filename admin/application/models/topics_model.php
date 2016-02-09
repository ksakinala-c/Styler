<?php
class topics_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) 
	{
 		$data['topicname']  = $content['topicname'];
		$data['userid']  = $content['userid'];
		$data['added_date']  = date('Y-m-d');
		$this->_data = $data;
		if ($this->db->insert('topics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}	
	function addmessage($content) 
	{
 		$data['topicid']  = $this->session->userdata('topicid');
		$data['userid']  = $content['userid'];
		$data['is_adminreply']  = '1';
		$data['message']  = $content['adminmessage'];
		$data['addeddate']  = date('Y-m-d');
		$this->_data = $data;
		if ($this->db->insert('message', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['topicname']  = $content['topicname'];
		$data['userid']  = $content['userid'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('topics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function is_colour_already_exist($topics,$id)
	{
		$sql = mysql_query("SELECT * FROM `topics` WHERE topicname='".$topics."' AND id != '".$id."'");
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

    function is_colour_already_exist_add($topics)
	{
		$this->db->where('topicname',$topics);
		$query = $this->db->get('topics');
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

		$sql = "SELECT * FROM topics  WHERE  id <> 0";
		if($content['topicname'] != '') 
		{
			$sql .=	" AND  (topicname like '".$content['topicname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by topicname asc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by topicname asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from `topics` where id <> 0";
		if($content['topicname'] != '') 
		{
			$sql_couint .=	" AND  (topicname like '".$content['topicname']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	function list_message($num, $offset, $content,$id) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM message  WHERE  id <> 0  and topicid = '".$id."' ";
		/*if($content['topicname'] != '') 
		{
			$sql .=	" AND  (topicname like '".$content['topicname']."%' ) "; 
		}*/ 
		$sql .=	" order by id desc "; 
	//echo $sql;
		$query = $this->db->query($sql);
 
		$sql_couint = "Select * from `message` where id <> 0 and topicid = '".$id."' ";
		/*if($content['topicname'] != '') 
		{
			$sql_couint .=	" AND  (topicname like '".$content['topicname']."%' ) "; 
		}*/ 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('topics');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function getusername($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->username;
			return $result;
		} else {
			return false;
		}
	}
	function gettopicname($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->username;
			return $result;
		} else {
			return false;
		}
	}
	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('topics'))	{
			return true;
		} else {
			return false;
		}
	}
	function mdeletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('message'))	{
			return true;
		} else {
			return false;
		}
	}
	
	
 
    function topic_user()
	{
		$this->db->where('insider = ','1');
 		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function colour_list($content)
	{
		$sql   = "select * from topics where id <> 0"; 
		
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>