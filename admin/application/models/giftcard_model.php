<?php
class giftcard_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) {
		//print_r($content);die;
		$data['themename']  = $content['themename'];
 		$data['image']  = $content['image'];
		$data['order']  = $content['order'];
		
		$this->_data = $data;
		if ($this->db->insert('giftcard_theme', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['themename']  = $content['themename'];
		//echo $content['image']; die;
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$data['order']  = $content['order'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('giftcard_theme', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('themename', $searchTerm);
			$count = $this->db->count_all_results('giftcard_theme');
			$query = $this->db->get_where('giftcard_theme', '( themename LIKE "%'.$searchTerm.'%" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('giftcard_theme', $num, $offset);
			$count = $this->db->count_all('giftcard_theme');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('giftcard_theme');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('giftcard_theme'))	{
			return true;
		} else {
			return false;
		}
	}
 
  function get_wallet(){
		$query = $this->db->get('currency');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function edit_insider($content) 
	{
		//print_r($content);die;
		 foreach($content as $data){
			$data1['incremental_val'] = $data[0];
			$data1['default_value'] = $data[1];
			$id = $data[2];
			
			$this->_data = $data1;
			$this->db->where('id', $id);
			$this->db->update('currency', $this->_data);
		 }
		
		return true;
		
	}

}
?>
