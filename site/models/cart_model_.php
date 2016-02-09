<?php
class Cart_model extends Model
{
	function checkoutmodel()
	{
		parent::model();
	}

	function productdetails($id)
	{
	        
		$sql = "SELECT p.*, im.image from pro_style p
				left join  tbl_style_image im ON (im.style_id = p.id AND im.baseimage = '1')
				WHERE p.id = '".$id."'";  
 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}

	function measurementdetail($id)
	{
		$sql = "SELECT p.*  FROM   measurement p
 		         
 				WHERE p.id = '".$id."'";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
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
	 
	
	function sizedata($id , $fit)
	{
		//echo $id;
		$sql = "SELECT p.*  FROM  size p
  				WHERE p.subcatid = '".$id."' and p.fit = '".$fit."' order by id desc";  
			 
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function allparts($id)
	{
		//echo $id;
		$sql = "SELECT p.* FROM add_parts p
 				WHERE p.subcatid = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}

	function getpartimage($id)
	{
 		$sql = "SELECT p.*  FROM  tbl_parts_image p
  				WHERE p.baseimage = '1' AND image_index = '1' AND p.pid  = '".$id."'";  
			 
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			//$result = $query->result();
			$result = $query->row()->image;
			return $result;
		}
	}
	
	
	function getpartvalue($id)
	{
		 
		$sql = "SELECT p.*  FROM   part_attribute p
 				WHERE p.partid = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			//$result = $query->result();
			$result = $query->row()->partvalue;
			return $result;
		}
	}
	
		function getpartname($id)
	{
		 
		$sql = "SELECT p.* FROM add_parts p
 		         
 				WHERE p.id = '".$id."'";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			//$result = $query->result();
			$result = $query->row()->pname;
			return $result;
		}
	}
	
	function insertbodymeasure($content) 
	{
		//echo $content['weight'];die;
		//print_r($content);die;
		//echo $this->session->userdata('measuredid');die;
		if($this->session->userdata('measuredid') !="" && $this->session->userdata('measuredid') != "0"){
			$mid = $this->session->userdata('measuredid');
			$userid=$this->session->userdata('userid');
			$data['metricft']  = $content['foot'];
			$data['metricinch']  = $content['inch'];
			$data['metricweight']  = $content['weight'];
			//echo $data['metricweight'];die;
			$data['impheight']  = $content['impheight'];
			$data['impweight']  = $content['impweight'];
			$data['style_id']  = $content['style_id'];
			$data['pid']  = $content['pid'];
			$data['userid']  = $userid;
			$this->_data = $data;
			$this->db->where('id', $mid);
			if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	
		} else {
			
		$userid=$this->session->userdata('userid');
 		$data['metricft']  = $content['foot'];
		$data['metricinch']  = $content['inch'];
		$data['metricweight']  = $content['weight'];
		$data['impheight']  = $content['impheight'];
		$data['impweight']  = $content['impweight'];
		$data['style_id']  = $content['style_id'];
		$data['pid']  = $content['pid'];
		$data['userid']  = $userid;
	 
		$this->_data = $data;
		if ($this->db->insert('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
		
		}
		
	}

	function addto3dinsert($content){

		//print_r($content); 
		//$userid = $this->session->userdata('userid');
 		$data['details']  = $content['details'];
		$data['price']  = $content['price'];
		$data['productid']  = $content['productid'];
		$data['pname']  = $content['pname'];
		$data['baseimage']  = $content['baseimage'];
		$data['userid']  = $content['userid'];
		$data['added_date']  = date('Y-m-d');
	 
		$this->_data = $data;
		if ($this->db->insert('save3d', $this->_data))	{
			return $this->db->insert_id();
		} else {
			return false;
		}	
	}
	
	function updatebodymeasure($content) {
		//print_r($content);die;
		$mid = $this->session->userdata('measuredid');
 		//echo $mid;die;
		/*$pid  = $content['pid'];
		$style_id  = $content['style_id'];*/
		$data['posture']  = $content['measure'];
		$this->_data = $data;
		$this->db->where('userid', $this->session->userdata('userid'));
		//$this->db->where('pid', $pid);
		$this->db->where('id', $mid);
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function updateshouldertype($content) {
		//print_r($content);die;
		$mid = $this->session->userdata('measuredid');
 		/*$pid  = $content['pid'];
		$style_id  = $content['style_id'];*/
		$data['shouldertype']  = $content['shouldertype'];
		$this->_data = $data;
		$this->db->where('userid', $this->session->userdata('userid'));
		//$this->db->where('pid', $pid);
		$this->db->where('id', $mid);
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function updateshoulderangle($content) {
		$mid = $this->session->userdata('measuredid');
 		/*$pid  = $content['pid'];
		$style_id  = $content['style_id'];*/
		$data['shoulderangle']  = $content['shoulderangle'];
		$this->_data = $data;
		$this->db->where('userid', $this->session->userdata('userid'));
		//$this->db->where('pid', $pid);
		$this->db->where('id', $mid);
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	
	function updatebodymeasure1($content, $profilename,$type) {
		//echo $this->session->userdata('measuredid');die;
		$data['serializedata']  = $content;
		$data['userprofilename']  = $profilename;
		$data['type']  = $type;
		/*echo $this->session->userdata('measuredid');
		print_r($data);
		die;*/
		$this->_data = $data;
		//$this->db->where('userid', $this->session->userdata('userid'));
		$this->db->where('id', $this->session->userdata('measuredid'));
		 
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function newupdatebodymeasure1($content,$profilename) {
		//echo $this->session->userdata('measuredid');die;
		$data['serializedata']  = $content;
		$data['userprofilename']  = $profilename;
		$this->_data = $data;
		$this->db->where('userid', $this->session->userdata('userid'));
		$this->db->where('id', $this->session->userdata('measuredid'));
		 
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function updatefit($content) {
		$mid = $this->session->userdata('measuredid');
		//echo $this->session->userdata('measuredid');
		$fit=$content['fit'];
		//echo $fit; die;
		$data['fit']  = $fit;
		//print_r($data);die;
		$this->_data = $data;
		$this->db->where('userid', $this->session->userdata('userid'));
		$this->db->where('id', $mid);
		if ($this->db->update('measurement', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	
	function proparts($id)
	{
		$sql = "SELECT p.*  FROM  add_parts p
 		         
 				WHERE p.subcatid = '".$id."'";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function selectcoupan($id){
		$sql = "SELECT * FROM tbl_coupan p
 		        WHERE coupanname = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
		function coupen_check($id){
		$sql = "SELECT * FROM  ci_orders p
 		        WHERE tbl_coupan_name = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->num_rows();
			return $result;
		}
	}
	function user_coupen_check($id){
		$sql = "SELECT * FROM  ci_orders p
 		        WHERE tbl_coupan_name = '".$id."' AND  user_id  = '".$this->session->userdata('userid')."' ";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->num_rows();
			return $result;
		}
	}
	
		function getproid($id){
		$sql = "SELECT * FROM  pro_style p
 		        WHERE id = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	/* Gift Voucher Functions */
	
	function selectvoucher($id){
		$sql = "SELECT * FROM  gift_voucher p
 		        WHERE code = '".$id."'";  
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
		function getwalletamount(){
			$id = $this->session->userdata('userid');
		$sql = "SELECT * FROM  users
  				WHERE id = '".$id."'";  
 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->bonus;
			return $result;
		}
	}
	
	
	
	
}