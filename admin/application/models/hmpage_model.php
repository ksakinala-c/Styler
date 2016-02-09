<?php
class hmpage_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function saveContents($batch_data)
	{
		$this->db->where('id IS NOT NULL');
		$this->db->delete('hmpage_settings');
		if ($this->db->insert_batch('hmpage_settings',$batch_data))	{
			return true;
		} else 
		{
			return false;
		}
	
	}
	function get_settings()
	{
		$query = $this->db->get('hmpage_settings');
		$data=array();
		foreach ($query->result() as $row)
		{
			$data[$row->setting_key]= $row->value;
		}
		
		return $data;
	
	}
	
	function add($content) {
		//print_r($content);die;
		$data['caption']  = $content['caption'];
 		$data['image']  = $content['image'];
		$data['homepage']  = $content['homepage'];
		$data['first_row']  = $content['first_row'];
		$data['second_row']  = $content['second_row'];
		$data['slider_header']  = $content['slider_header'];
		$data['slider_content']  = $content['slider_content'];
		$data['button_label']  = $content['button_label'];
		$data['button_bgcolor']  = $content['button_bgcolor'];
		$data['third_row']  = $content['third_row'];
		$data['links']  = $content['url'];

		$this->_data = $data;
		if ($this->db->insert('banner', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		$data['caption']  = $content['caption'];
		//echo $content['image']; die;
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$data['homepage']  = $content['homepage'];
		$data['first_row']  = $content['first_row'];
		$data['second_row']  = $content['second_row'];
		$data['slider_header']  = $content['slider_header'];
		$data['slider_content']  = $content['slider_content'];
		$data['button_label']  = $content['button_label'];
		$data['button_bgcolor']  = $content['button_bgcolor'];
		$data['third_row']  = $content['third_row'];
		$data['links']  = $content['url'];
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
