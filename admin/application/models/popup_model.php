<?php
	class Popup_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}	

	/*function add($content) {
		$data['caption']  = $content['caption'];
 		$data['image']  = $content['image'];

		$this->_data = $data;
		if ($this->db->insert('banner', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}*/

	function edit($id, $content) {
		$data['active']  = $content['active'];
	 	$data['text']  = $content['text'];
			$data['display']  = $content['display'];
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		//print_r($data);die;
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('popup', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function get($id){
		//echo $id;die;
 		$this->db->where('id = ',$id);
		$query = $this->db->get('popup');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}


	/*function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('caption', $searchTerm);
			$count = $this->db->count_all_results('banner');
			$query = $this->db->get_where('banner', '( caption LIKE "%'.$searchTerm.'%" OR id="'.$searchTerm.'" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('banner', $num, $offset);
			$count = $this->db->count_all('banner');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}*/

 
 /* function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('banner'))	{
			return true;
		} else {
			return false;
		}
	}*/
 
  

}
?>
