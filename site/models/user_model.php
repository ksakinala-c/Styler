<?php
class User_model extends Model
{
	function login($arrContent)
	{
		$this->db->select('*');
		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password']));		
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

	function cartdata($id){		
		$sql = "SELECT * from mycart where userid = '".$id."' "; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}

	function facebooklogin($email)
	{
		$this->db->select('*');
		$this->db->where(array('email' => $email));		
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

	function userfacebook($data)
	{
		$content['username'] = $data['name'];
		$content['email']    = $data['email'];
		$content['enable']   = '1';
		$content['password'] = time();
	
		$this->db->insert('users',$content);
		return $this->db->insert_id();
	}

	function ajaxlogin($arrContent)
	{
		$this->db->select('*');
		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password']));		
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
		$this->db->where(array('email' => $arrContent['email'],'password' => $arrContent['password']));		
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
		$number= $data['ccode'].'-'.$data['reg_mobileno'];
		$content['phone']    = $number;
		$content['ref_id']   = $data['ref_id'];
		//$content['dob'] = $data['dob'];
 		$content['joindate'] = date('Y-m-d H:i:s');
		$content['lastlogin'] = '';
		 
		$content['dob']    = $data['dob'];
		$content['gender'] = $data['gender'];
		if(isset($data['insider'])){
			$content['insider'] = $data['insider'];
			$content['enable']  = '0';
		} else {
			$content['enable']  = '1';
		}
	 
		$this->db->insert('users',$content);
		return $this->db->insert_id();
	}
	

	function updateuser($data)

	{

		$content['pass'] = $data['password'];

		$this->db->where('id', $this->session->userdata('id'));

		return $this->db->update('users',$content);

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
			$data['insider'] = 1;
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
			'insider' => '1',
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
			  
			function checkemail($email)
			{
				//echo $email;die;
				$this->db->where('email = ',$email);
				$query = $this->db->get('users');
		 
			  if ($query->num_rows() > 0) {
				
			  $result = $query->row();
			  return $result;
			  } else {
			  return false;
			  }
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
	
	
	function getprebonus($id)
	{
		 
		$sql = "SELECT p.* FROM  users p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->bonus;
			return $result;
		}
	}
	
	function getrefamount()
	{
		 $id = '1';
		$sql = "SELECT p.* FROM  systems p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->referral_amount;
			return $result;
		}
	}
	function updatebonus($bonus, $uid)
		{
			$data['bonus '] = $bonus;
			$this->_data = $data;
			$this->db->where('id', $uid);
			if ($this->db->update('users', $this->_data)){
			return true;
			} else {
			return false;
			}
		}
		
		function add_transaction($amt,$refid,$uid) 
	{
		
 		$content['amount']  = $amt;
		$content['reff_id']  = $refid;
		$content['userid']  = $uid;
	 
		$content['pay_type']  = "Insider Gift"; 	
		$content['tran_date']  = date('Y-m-d');
	 
		  
		$this->_data = $content;
		if ($this->db->insert('transaction_history',$this->_data))
		{
			return true;
		}
		 else
		 {
		   return false;
		  } 
		   
	}
	
	function updateuserstatusdata($status) {
		//$mid = $this->session->userdata('userid');
		if($status == "1"){
			$data['insider']  = "1";
		} 
		if($status == "2"){
			$data['affiliate']  = "1";
		}
		//$data['fit']  = $fit;
		//print_r($data);die;
		$this->_data = $data;
		$this->db->where('id', $this->session->userdata('userid'));
		//$this->db->where('id', $mid);
		if ($this->db->update('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
 
	}
?>