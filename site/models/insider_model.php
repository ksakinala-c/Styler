<?php

class Insider_model extends Model

{

	

	function login($arrContent)
 	{
 		$this->db->select('*');
 		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password'],'enable' => '1','insider' => '1'));		
 		$query = $this->db->get('users');
 		// print_r($query);break;
 		if($query->num_rows() > 0)
 		{
 				$result = $query->row();
 				return $result;
 		}
 		else
 		{
 				return false;
 		}
 	}
 
	function checkvalidemail($arrContent)
 	{
 		$this->db->select(' users.id,users.email ');
 		$this->db->where(array('email' => $arrContent['reg_email']));
 
		$query = $this->db->get('users');

		if($query->num_rows() > 0)

		{

			return $query->row(); 

		}

		else

		{

			return false;

		}

	}

	

	function userdata($id){

		$this->db->select(' users.id,users.email,users.firstname,users.username ');

		$this->db->where(array('id' => $id));

		$query = $this->db->get('users');

		if($query->num_rows() > 0)

		{

				$result = $query->row();

				return $result;

		}

		else

		{

				return false;

		}

	}



	function adduser($data)
	{
		$content['username'] = $data['reg_username'];
		$content['email']    = $data['reg_email'];
		$content['password'] = $data['reg_password'];
		$content['phone'] = $data['reg_mobileno'];
		$content['insider'] = "1";
		$content['ref_id'] = $data['ref_id'];
		//$content['dob'] = $data['dob'];
 		$content['joindate'] = date('Y-m-d H:i:s');
		$content['lastlogin']= '';
		$content['dob']    = $data['dob'];
		$content['gender'] = $data['gender'];

		$this->db->insert('users',$content);
 		return $this->db->insert_id();
 	}

	function updateuser($data)
 	{
 		$content['pass'] = $data['password'];
 		$this->db->where('id', $this->session->userdata('id'));
 		return $this->db->update('users',$content);
 	}

	function add_newtopic($content) 
	{
		//print_r($content);die;
		$data['topicname']  = $content['topicname'];
		$data['added_date']  =  date('Y-m-d H:i:s');
		$data['userid'] = $this->session->userdata('userid');
 		$this->_data = $data;
		if ($this->db->insert('topics', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function add_message($content,$topicid) 
	{
 
		$data['userid'] = $this->session->userdata('userid');
		$data['topicid']  = $topicid;
		$data['message']  = $content['message'];
		$data['addeddate']  =  date('Y-m-d H:i:s');
		 
		$this->_data = $data;
		if ($this->db->insert('message', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	
	function alltopic(){
		$sql = "SELECT * from topics where userid = '".$this->session->userdata('userid')."' order by id desc limit 0,15"; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allmessage($topicid){
		$sql = "SELECT * from message where userid = '".$this->session->userdata('userid')."' AND  	topicid = '".$topicid."' order by id desc limit 0,15"; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allinviters($uid){
		$sql = "SELECT * from users where ref_id = '".$uid."' order by id desc limit 0,15"; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function gettopic($id)
	{
		$sql = "SELECT p.* FROM topics p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->topicname;
			return $result;
		}
	}

	
	function getusermail(){
		$id = '1';
		$sql = "SELECT * from etemplate where id = '".$id."' "; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function activateac($id)
		{
			$data['enable'] = 1;
			$this->_data = $data;
			$this->db->where('id', $id);
			if ($this->db->update('users', $this->_data)){
			return true;
			} else {
			return false;
			}
		}
		function get_check_login($id) {
			$where_array = array(
			'id' => $id,
			'enable' => '1',
			);
			$query = $this->db->get_where('users', $where_array);
			if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row;
			} else {
			return false;
			}
		}
		
		 function checkuserstatus($id)
			  {
			$this->db->where('id = ',$id);
				$query = $this->db->get('users');
		 
			  if ($query->num_rows() > 0) {
				
			  $result = $query->row();
			  return $result;
			  } else {
			  return false;
			  }
			  }
	function is_active_login($arrContent)
	{
		$this->db->select('*');
		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password'],'insider' => '1'));		
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
				$result = $query->row();
				return $result;
		}
		else
		{
				return false;
		}
	}
	
	function userdetails($id){
		$this->db->select('*');
		$this->db->where(array( 'id' => $id ));		
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
				$result = $query->row();
				return $result;
		}
		else
		{
				return false;
		}
	}
	
}

