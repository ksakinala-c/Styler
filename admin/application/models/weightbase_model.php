<?php
class Weightbase_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
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
		//print_r($content);die;
		$data['zero_five']	  = $content['zero_five'][0];
		$data['six_ten']	  = $content['six_ten'][0];
		$data['eleven_fifteen']	  = $content['eleven_fifteen'][0];
		$data['sixteen_twenty']	  = $content['sixteen_twenty'][0];
		$data['twentyone_twentyfive']	  = $content['twentyone_twentyfive'][0];
		$data['twentysix_threethousand']	  = $content['twentysix_threethousand'][0];
		 
		
	
		
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

	   


   function allcountry()
	{
		$sql   = " select * from country";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>