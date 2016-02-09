<?php
class appointment_time_model extends Model {
	
	function checkoutmodel()
	{
		parent::model();
	}
	function saveContents($batch_data)
	{
		$this->db->where('id IS NOT NULL');
		$this->db->delete('appointment_time_mas');
		if ($this->db->insert_batch('appointment_time_mas',$batch_data))	{
			return true;
		} else 
		{
			return false;
		}
	
	}
		
	function add($content) {
		//print_r($content);die;
		$data['time_of_day']  = $content['time_of_day'];
 		$data['start_time']  = $content['start_time'];

		$this->_data = $data;
		if ($this->db->insert('appointment_time_mas', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}

	function edit($id, $content) {
		//$data['id']  = $content['id'];
		//echo $content['image']; die;
	 	
		$data['time_of_day']  = $content['time_of_day'];
 		$data['start_time']  = $content['start_time'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('appointment_time_mas', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}


	function lists($num, $offset, $searchTerm = '') {
		$this->db->order_by("id", "asc"); 
		if($searchTerm != '') {
			$this->db->like('appointment_time_mas', $searchTerm);
			$count = $this->db->count_all_results('appointment_time_mas');
			$query = $this->db->get_where('appointment_time_mas', '( title LIKE "%'.$searchTerm.'%" OR id="'.$searchTerm.'" ) '  , $num, $offset);
		} else {
			$query = $this->db->get('appointment_time_mas', $num, $offset);
			$count = $this->db->count_all('appointment_time_mas');
		}

		$ret['result'] = $query->result();
		$ret['count']  = $count;
	    return $ret;
	}

	function get($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('appointment_time_mas');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
 
  function deletes($id) {
 		$this->db->where('id = ',$id);
		if ($this->db->delete('appointment_time_mas'))	{
			return true;
		} else {
			return false;
		}
	}
	
	function hoursRange( $lower = 0, $upper = 86400, $step = 3600, $format = '' ) 
	{
		$times = array();

		if ( empty( $format ) ) {
			$format = 'g:i a';
		}

		foreach ( range( $lower, $upper, $step ) as $increment ) {
			$increment = gmdate( 'H:i:s', $increment );

			list( $hour, $minutes, $seconds ) = explode( ':', $increment );

			$date = new DateTime( $hour . ':' . $minutes . ':' . $seconds );

			$times[(string) $increment] = $date->format( $format );
		}

		return $times;
	}
	
	function getDayTimes(){
 		//$this->db->where('id = ',$id);
		$query = $this->db->get('sys_time_of_day_mas');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			foreach($result as $data){
				$resultInfo[$data->id]=$data->description;
			}
			return $resultInfo;
		} else {
			return false;
		}
	}
	
	function getTimeInfo(){
 		//$this->db->where('id = ',$id);
		$query = $this->db->get('appointment_time_mas');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			/*foreach($result as $data){
				$resultInfo[$data->time_of_day]=$data->start_time;
			}*/
			return $result;
		} else {
			return false;
		}
	}
	
	function getUserAppointmentTimes($data)
	{
 		$this->db->where('appointment_date = '.$data['appointment_date']);
		//$where='appointment_date='.$data['appointment_date'];
		//$this->db->where($where);
		$query = $this->db->get('user_appointment_time_mas');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			/*foreach($result as $data){
				$resultInfo[$data->time_of_day]=$data->start_time;
			}*/
			return $result;
		} else {
			return false;
		}	
	}
	
	function addUserAppointment($data) {
		
		$this->_data = $data;
		if ($this->db->insert('user_appointment_time_mas', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
 
  

}
?>
