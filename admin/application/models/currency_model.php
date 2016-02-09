<?php
class Currency_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
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
			
			$data1['stylior_roc'] = $data[0];
			$data1['roc_buffer'] = $data[1];
			$data1['multiplier'] = $data[2];
			$data1['ceiling'] = $data[3];
			$id = $data[4];
			
			$this->_data = $data1;
			$this->db->where('id', $id);
			$this->db->update('currency', $this->_data);
		 }
		
		return true;
		
	}
}
?>
