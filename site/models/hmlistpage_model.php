<?php
class hmlistpage_model extends Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}
	function checkoutmodel()
	{
		parent::model();
	}
	
	function getData($id){
		if($id){
				$this->db->where('id = ',$id);
		}
 		
		$query = $this->db->get('list_view_products');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
 
 
  

}
?>
