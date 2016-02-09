<?php
class banner_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) {
		$data['caption']  = $content['caption'];
 		$data['image']  = $content['image'];

		$this->_data = $data;
		if ($this->db->insert('banner', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['caption']  = $content['caption'];
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('banner', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('banner', $searchTerm);
			$count = $this->db->count_all_results('banner');
			$query = $this->db->get_where('banner', '( title LIKE "%'.$searchTerm.'%" OR id="'.$searchTerm.'" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('banner', $num, $offset);
			$count = $this->db->count_all('banner');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('banner');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('banner'))	{
			return true;
		} else {
			return false;
		}
	}
 
  

}
?>
