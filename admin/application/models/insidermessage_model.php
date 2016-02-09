<?php
class insidermessage_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function lists($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM   message  WHERE  id <> 0 ";
		if($content['username'] != '') 
		{
			$sql .=	" AND  (topicid like '".$content['username']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		} else
		{
			$sql .=	" order by id desc";
		}
		$query = $this->db->query($sql);

		$sql_couint = "Select * from `message` where id <> 0 ";
		if($content['username'] != '') 
		{
			$sql_couint .=	" AND  (topicid like '".$content['username']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
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
		$query = $this->db->get('topics');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->topicname;
			return $result;
		} else {
			return false;
		}
	}
	/*function add($content) 
	{
 		$data['username']  = $content['username'];
		$data['userid']  = $content['userid'];
		$data['added_date']  = date('Y-m-d');
		$this->_data = $data;
		if ($this->db->insert('topics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['username']  = $content['username'];
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
		$sql = mysql_query("SELECT * FROM `topics` WHERE username='".$topics."' AND id != '".$id."'");
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
		$this->db->where('username',$topics);
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
	*/
	function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('topics'))	{
			return true;
		} else {
			return false;
		}
	}
	function deletes1($id) {
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
 		$query = $this->db->get('message');
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