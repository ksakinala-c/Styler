<?phpclass chnage_password_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_employee($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_employer');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function add($content) 
	{
		//print_r($content);die;
		$data['cname'] = $content['cname'];
		$data['email'] = $content['email'];
		$data['password'] = $content['password'];
		$data['cid'] = $content['cid'];
		$data['sid'] = $content['sid'];
		$data['city_id']= $content['city_id'];
		$data['location']= $content['location'];
		$data['address']= $content['address'];
		$data['contactperson']= $content['contactperson'];
		$data['mobile']= $content['mobile'];
		$data['phone']= $content['phone'];
		$data['details']= $content['details'];
		
		$this->_data = $data;
	//	print_r($data);die;
		if ($this->db->insert('tbl_employer', $this->_data))	
		{
			//print_r("working");die;	
			return true;
		} 
		else 
		{
			//print_r("Not working");die;
			return false;
		}
	}

	function lists($num, $offset, $content) {
		
		echo "dsfds";	
		
	}
}
?>