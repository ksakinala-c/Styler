<?php
class user_appointments_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function saveContents($batch_data)
	{
		$this->db->where('id IS NOT NULL');
		$this->db->delete('list_view_products');
		if ($this->db->insert_batch('list_view_products',$batch_data))	{
			return true;
		} else 
		{
			return false;
		}
	
	}
		
	function add($content) {
		//print_r($content);die;
		$data['fabric_id']  = $content['fabric_id'];
 		$data['image']  = $content['image'];
		$data['fabric_name']  = $content['fabric_name'];
		$data['price']  = $content['price'];
		
		$this->_data = $data;
		if ($this->db->insert('list_view_products', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		//$data['id']  = $content['id'];
		//echo $content['image']; die;
	 	
		if($content['image'] != '') {
			$data['image']  = $content['image'];
		}
		$data['fabric_id']  = $content['fabric_id']; 		
		$data['fabric_name']  = $content['fabric_name'];
		$data['price']  = $content['price'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('list_view_products', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "desc"); 
		if($searchTerm != '') {
			$this->db->like('user_appointment_time_mas', $searchTerm);
			$count = $this->db->count_all_results('user_appointment_time_mas');
			$query = $this->db->get_where('user_appointment_time_mas', '( title LIKE "%'.$searchTerm.'%" OR id="'.$searchTerm.'" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('user_appointment_time_mas', $num, $offset);
			$count = $this->db->count_all('user_appointment_time_mas');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('list_view_products');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('list_view_products'))	{
			return true;
		} else {
			return false;
		}
	}
	
	function get_posts($appointment_date){         
		/*$this->db->where('appointment_date = ',$appointment_date);
		$this->db->where('status = 1');
		$query = $this->db->get('user_appointment_time_mas');  */
		$query = $this->db->query("SELECT first_name FROM user_appointment_time_mas WHERE appointment_date = '".$appointment_date."' AND status = 1");
		return $query; 
	}
 
  

}
?>
