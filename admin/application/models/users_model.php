<?php
class Users_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_user($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('super_admin');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function add($content) 
	{
		$data['name']  = $content['name'];
		$data['login']  = $content['login'];
		$data['login']  = $content['login'];
		$data['password'] = $content['password'];
		$data['email'] = $content['email'];
		$data['enabled'] = $content['enabled'];
		$data['created_by'] = $this->session->userdata('username') ;
		$data['ucategory'] = $content['ucategory'];


		$this->_data = $data;
		if ($this->db->insert('super_admin', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function utype_list()
		{
			$sql   = " select * from  usercategory";
			$query = $this->db->query($sql);
			return $query->result();
		}
	function edit($id, $content) {
		$data['name']  = $content['name'];
		$data['login']  = $content['login'];
		$data['email'] = $content['email'];
		$data['enabled'] = $content['enabled'];
		$data['ucategory'] = $content['ucategory'];
	
	    $this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('super_admin', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function is_users_already_exist_add($users,$email)
	{
		
		$sql = mysql_query("SELECT * FROM super_admin WHERE (login='".$users."' OR email='".$email."') ");
		$fsql = mysql_num_rows($sql);
		if($fsql > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	function measuredata($id)
	{
		$sql = "SELECT * FROM  measurement WHERE userid ='".$id."' order by id asc";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function fabricname($id){
		$sql = "SELECT * FROM tbl_product
  				WHERE foldername = '".$id."'";  
 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->pname;
			return $result;
		}
	}

	function allstyles($id)
	{
		$sql = "SELECT * FROM  save3d WHERE userid ='".$id."' order by id asc";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}

	function is_users_already_exist($users,$email,$id)
	{

		$sql = mysql_query("SELECT * FROM super_admin WHERE ( login='".$users."' OR email ='".$email."')  AND id != '".$id."'");
		$fsql = mysql_num_rows($sql);
		if($fsql > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}



	function allusers(){
		
 		$query = $this->db->get('super_admin');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function admin_user($id){
		
 		$this->db->where('id',$id);
		$query = $this->db->get('super_admin');
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
	

	function list_user($num, $offset, $content) {
		
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM super_admin WHERE id <> 0";
		if($content['name'] != '') 
		{
			$sql .=	" AND  (name like '".$content['name']."%' ) "; 
		}
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		
		if($content['ucategory'] != '') 
		{
			$sql .=	" AND  (ucategory like '".$content['ucategory']."%' ) "; 
		}
		
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by id desc";
		}

		$query = $this->db->query($sql);
		
		$ret['result'] = $query->result_array();
		
		$sql_count = "SELECT * FROM super_admin  WHERE id <> 0";
		if($content['name'] != '') 
		{
			$sql_count .=	" AND  (name like '".$content['name']."%' ) "; 
		}
		if($content['email'] != '') 
		{
			$sql_count .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		if($content['ucategory'] != '') 
		{
			$sql_count .=	" AND  (ucategory like '".$content['ucategory']."%' ) "; 
		}
		
		$query1 = $this->db->query($sql_count);
		
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}/*
	function list_user($num, $offset, $content) 
	{
		print_r($content);exit;
		if($offset == ''){
			$offset = '0';
		}
		$sql = "SELECT * FROM `tbl_register`";
		if($content['fname'] != '') 
		{
			$sql .=	" AND  (fname like '%".$content['fname']."%' ) "; 
		}
		if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '%".$content['email']."%' ) "; 
		}
		else
		{
			$sql .=	" order by id desc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "Select * from tbl_register";
		if($content['fname'] != '') 
		{
			$sql_couint .=	" AND  (fname like '%".$content['fname']."%' ) "; 
		}
		if($content['email'] != '') 
		{
			$sql_couint .=	" AND  (email like '%".$content['email']."%' ) "; 
		}
		
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}*/

	function deletes($id) 
	{
		$adid=$this->session->userdata('adminId');
		$sql = "Delete from super_admin where id=".$id;
		if ($this->db->query($sql))	
		{
			return true;
		} else {
			return false;
		}
	}


	function total_jobseeker()
	{
		$sql_count = "Select * from tbl_jobseeker where user_type = 0 ";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	function total_employer()
	{
		$sql_count = "Select * from tbl_jobseeker where user_type = 1 ";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}


function users_list()
{
		$sql   = " select * from super_admin";
		$query = $this->db->query($sql);
		return $query->result();
}
function getstylename($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('pro_style');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->name;
		} else {
			return false;
		}	}
		function getproname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->pname;
		} else {
			return false;
		}	}
		
		function getbname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('brand');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->bname;
		} else {
			return false;
		}	}
		
}
?>