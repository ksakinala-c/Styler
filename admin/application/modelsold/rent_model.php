<?php
class rent_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function add($content) {
		$data['name']  = $content['name'];
 		$data['image']  = $content['image'];

		$this->_data = $data;
		if ($this->db->insert('rent', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['name']  = $content['name'];
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('rent', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('rent', $searchTerm);
			$count = $this->db->count_all_results('rent');
			$query = $this->db->get_where('rent', '( title LIKE "%'.$searchTerm.'%" OR id="'.$searchTerm.'" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('rent', $num, $offset);
			$count = $this->db->count_all('rent');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('rent');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('rent'))	{
			return true;
		} else {
			return false;
		}
	}
 
  

}
?>
