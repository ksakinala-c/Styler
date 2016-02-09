<?php
class Wallet_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_wallet($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('systems');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}

	function allproduct(){
		
 		$query = $this->db->get('tbl_coupan');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	 function getcategoryname()
		{
		;
		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
		
	}
	
	function catname($id){
		$this->db->where('id = ',$id);
		 $query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->cname;
		} else {
			return false;
		}
		
	}
	
	function subcatname($id){
		$this->db->where('id = ',$id);
		 $query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		}
		
	}
	
	
	function allcategory()
	{	
		$query = $this->db->get('category');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function allcategory1()
	{
		
		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	 
	
	function getSubCatname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('subcategory');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		}	}
	function allattributes(){
		
		$query = $this->db->get('attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
		
	}

	function add($content) 
	{
		$L_strErrorMessage='';
		$data['one_rs_reward'] = $content['one_rs_reward'];
		$data['giftwarpamt'] = $content['giftwarpamt'];
		
		
		$this->_data = $data;
		
		if ($this->db->insert('systems', $this->_data))	
		{		
				$id = $this->db->insert_id();
		} 
		else 
		{
			return false;
		}
	}
	function inser_attr_product($content)  
	{
		$data['price'] = $content['price'];
		$data['quanity'] = $content['quanity'];
		$data['productid'] = $content['productid'];
		$data['attributeid'] = $content['attributeid'];
		$this->_data = $data;
		if ($this->db->insert('product_attribute', $this->_data))	
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
	
	function update_attr_product($content){
		$data['price'] = $content['price'];
		$data['quanity'] = $content['quanity'];
		$data['productid'] = $content['productid'];
		$data['attributeid'] = $content['attributeid'];
		$this->_data = $data;
		$this->db->where('id',$content['attrid']);
		if ($this->db->update('product_attribute', $this->_data))	{
			
		}
	}
	 
	function walletattr($id){
		
			$query = "SELECT * from systems where id= '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	
	function order_detail($id) 
	{
		$this->db->where('order_id = ',$id);
		$query = $this->db->get('ci_orders');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	
	function shippingdetails($id) 
	{
		$this->db->where('order_id = ',$id);
		$query = $this->db->get('billship');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	
	function orderitems($id) 
	{
		$this->db->where('order_id = ',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	
	function edit($id, $content) 
	{
		 
		$data['one_rs_reward'] = $content['one_rs_reward'];
		$data['giftwarpamt'] = $content['giftwarpamt'];		
		$data['minimumorder'] = $content['minimumorder'];	
		$data['shipping_cost'] = $content['shipping_cost'];		
		$data['minium_shipping_amount'] = $content['minium_shipping_amount'];
		$data['cashondelivery'] = $content['cashondelivery'];
		$data['codextra'] = $content['codextra'];
		
		$data['free'] = $content['free'];
		$data['flatrate'] = $content['flatrate'];
		$data['weightbase'] = $content['weightbase'];
		//$data['referral_amount'] = $content['referral_amount'];
		if($content['assist']!=''){
		$data['assist'] = $content['assist'];
		}
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('systems', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		function edit_insider($id, $content) 
	{
		 
	 
		$data['insider'] = $content['insider'];
		$data['referral_amount'] = $content['referral_amount'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('systems', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function updatedata($id) 
	{
	
		$data['assist'] = '';	
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('systems', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
    function lists($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM systems where id <> 0 ";
		if($content['one_rs_reward'] != '') 
		{
			$sql .=	" AND  (one_rs_reward like '%".$content['one_rs_reward']."%' ) "; 
		}
		/*if($num!='' || $offset!='')
		{
			$sql .=	" order by pname asc limit ".$offset.",".$num."";
		}*/
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM systems WHERE id <> 0";

		/*if($content['pname'] != '') 
		{
			$sql_count .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}*/
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	
function product_murge($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM product_attribute o left join  tbl_coupan u ON u.id = o.id  WHERE  o.id <> 0";
		 
		if($num!='' || $offset!='')
		{
			$sql .=	" order by o.id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by o.id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "SELECT * FROM product_attribute o left join  tbl_coupan u ON u.id = o.id  where o.id <> 0";
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result(); // limit marke data pass kya
		$ret['count']  = $query1->num_rows; // total rows pass kkya
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('systems'))	{
			return true;
		} else {
			return false;
		}
	}
	
	function deleteimage($id) 
	{
  		 $sql = "Delete from tbl_coupan_images where id = '".$id."'";
		 $this->db->query($sql);
	}
	
	 
	
		 
	
  function product_list()
  {
		$sql   = "select * from tbl_coupan where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
  }
 	
	
  function order_manage($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id  WHERE  o.order_id <> 0";
		 
		if($num!='' || $offset!='')
		{
			$sql .=	" order by o.order_id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by o.order_id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "SELECT * FROM ci_orders o left join users u ON u.id = o.user_id  where o.order_id <> 0";
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();  
		$ret['count']  = $query1->num_rows(); 
		
		//print_r($ret);die;
	    return $ret;
	}
	function removeimage($id)
	{
		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_coupan_image'))	{
			return true;
		} else {
			return false;
		}
	}
	function productimages($id)
	{
		$query = "SELECT * from tbl_coupan_image where pid = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	function setbaseimg($id,$pid)
	{
		$query2 = "update tbl_coupan_image set baseimage = '0' where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_coupan_image set baseimage = '1' where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
	function add_product_image($content)  /// Add Pincode  
	{
		$data['pid']           = $content['pid'];
		$data['image']         = $content['image'];
		
		$this->_data = $data;

		if ($this->db->insert('tbl_coupan_image', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function presult($id)
	{
		$query = "SELECT * from tbl_coupan where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}

}
?>
