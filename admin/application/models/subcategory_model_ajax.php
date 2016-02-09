<?php

	/*	 
		Created By : Darshan, Date - 9 th Sep 2014.
		Reasone    : Select Category and subcategory . 
	 */
class Subcategory_model_ajax extends CI_Model 
{
	private $_data = array();
	function __construct() 
	{
		parent::__construct();
	}
	/*	 
		Created By : Darshan, Date - 9 th Sep 2014.
		Reasone    : Select Category and subcategory at time load data . 
	 */

	function show_subcategory($sid)
	{
		 $where = array(
			'catid' => $sid,
		); 
		$this->db->where($where);
		$query = $this->db->get('subcategory');
		if($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
			return false;
		} 
	}
	
	
}
?>
