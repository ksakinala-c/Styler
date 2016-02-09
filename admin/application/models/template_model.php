<?php
	class Template_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('etemplate');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function edit($id, $content) {
		$data['regemail']  = $content['regemail'];
		$data['ordermail']  = $content['ordermail'];
		$data['canemail']  = $content['canemail'];
		$data['affreg']  = $content['affreg'];
		$data['insreg']  = $content['insreg'];		
		$data['subscriber']  = $content['subscriber'];	
		$data['order_status']  = $content['order_status'];
		$data['abandoned_cart']  = $content['abandoned_cart'];		
		$data['save_style']  = $content['save_style'];		

		$data['regemailsub']  = $content['regemailsub'];
		$data['ordermailsub']  = $content['ordermailsub'];
		$data['ordermailsub']  = $content['ordermailsub'];
		$data['canemailsub']  = $content['canemailsub'];
		$data['affregsub']  = $content['affregsub'];		
		$data['insregsub']  = $content['insregsub'];	
		$data['subscribersub']  = $content['subscribersub'];
		$data['order_statussub']  = $content['order_statussub'];		
		$data['abandoned_cartsub']  = $content['abandoned_cartsub'];	
		$data['ship_order_status']  = $content['ship_order_status'];		
		$data['shipmen_sub']  = $content['shipmen_sub'];			
		
		$data['save_stylesub']  = $content['save_stylesub'];	
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('etemplate', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	 
}
?>