<?php

class Affiliate_model extends Model

{

	

	function login($arrContent)

	{

		$this->db->select('*');

		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password'],'enable' => '1','affiliate' => '1'));		

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



	function adduser($data,$vcode)
	{
		//	echo "<pre>"; print_r($data);die;
		$content['username'] = $data['reg_username'];
		$content['email']    = $data['reg_email'];
		$content['password'] = $data['reg_password'];
		$number= $data['ccode'].'-'.$data['reg_mobileno'];
		$content['phone']    = $number;
		$content['ref_id']   = $data['ref_id'];
		//$content['dob'] = $data['dob'];
 		$content['joindate'] = date('Y-m-d');
		$content['lastlogin'] = '';
		$content['dob']    = $data['dob'];
		$content['gender'] = $data['gender'];
		$content['enable']  = '0';
		$content['affiliate'] = '1';
		 $content['company']  = $data['company'];
		$content['website']	  = $data['website'];
		$content['cid']  = $data['cid'];
		$content['city'] = $data['city'];
		$content['state'] = $data['state'];
		$content['address'] = $data['address'];
		$content['aff_code'] = $vcode;
		
		$content['paymentmethod'] = $data['paymentmethod'];
		$content['chq_payee_name'] = $data['chq_payee_name'];
		$content['paypal_payee_name'] = $data['paypal_payee_name'];
		$content['bank_name'] = $data['bank_name'];
		$content['abs_bsb_number'] = $data['abs_bsb_number'];
		$content['swift_code'] = $data['swift_code'];
		$content['account_name'] = $data['account_name'];
		$content['account_number'] = $data['account_number'];
		/*if(isset($data['affiliate'])){
			 
			$content['affiliate'] = $data['affiliate'];
			$content['enable']  = '0';
		} else {
			 
			$content['enable']  = '0';
		}*/
	 
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
		//echo $topicid;die;
		//print_r($content);die;
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
	function newgetcode() {
//echo "hi";die;
		$chars = array(
				'1','2','3','2','6','7','8','5','4'
			);

			shuffle($chars);

			$num_chars = count($chars) - 1;
			$token = '';

			for ($i = 0; $i < $num_chars; $i++){ // <-- $num_chars instead of $len
				$token .= $chars[mt_rand(0, $num_chars)];
			}

			return $token;
		}
	  	function getccode(){
		$sql = "SELECT * from country"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}	
	}
		function allafftheme(){
		$sql = "SELECT * from affliliate_theme"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
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
	 function is_active_login($arrContent)
	{
		$this->db->select('*');
		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password'],'affiliate' => '1'));		
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
		function gettrackid($id)
	{
		$sql = "SELECT p.* FROM users p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->aff_code;
			return $result;
		}
	}
		function mytransaction($id){
		$sql = "SELECT * from  transaction_history where reff_id = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}	
	}
		function getuname($id)
	{
		$sql = "SELECT p.* FROM users p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->username;
			return $result;
		}
	}
	

}