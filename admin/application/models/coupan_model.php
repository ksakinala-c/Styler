<?php
	class Coupan_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_coupan($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_coupan');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	  function getallvoucher($value,$abc)
	{
		
		
		$sql = "SELECT * FROM  gift_voucher where id <> 0 ";
		if($value != 'null' ) 
		{
			$sql .=	" AND  (value like '%".$value."%' ) "; 
		}
		if($abc != 'null' ) 
		{
			$sql .=	" AND  (vouchername like '%".$abc."%' ) "; 
		}
		$sql.="order by id desc";
		
		$query = $this->db->query($sql);
		$result = $query->result();
	    return $result;
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
 
	function allsubcategory(){
		
 		$query = $this->db->get('subcategory');
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
	function getpro($sid)
	{
		 $where = array(
			'subcatid' => $sid,
		); 
		$this->db->where($where);
		$query = $this->db->get('tbl_product');
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
	function getsubsubcat($sid)
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
	function allstyle()
	{	
		$query = $this->db->get('tbl_product');
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

	function addc($content) 
	{
		$L_strErrorMessage='';
		$data['coupanname'] = $content['coupanname'];
		$data['discount'] = $content['discount'];
		$data['price'] = $content['price'];
		$data['percentage'] = $content['percentage'];
		//$data['description'] = $content['description'];
		$data['startdate'] = $content['startdate'];
		$data['enddate'] = $content['enddate'];
		
		
		$this->_data = $data;
		if ($this->db->insert('tbl_coupan', $this->_data))	
		{		
		
				$id = $this->db->insert_id();
				if(count($_POST['attr']) > 0){  
					for($i = '0'; $i<count($_POST['attr']);$i++) {
							$content['productid'] = $id; 
							$content['attributeid'] = $_POST['attr'][$i];
							$content['price'] = $_POST['price'][$i];
							$content['quanity'] = $_POST['quanity'][$i];
							$this->inser_attr_product($content);  
						}
				}
			 
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
	function add($content)
 	{	
		$L_strErrorMessage='';	
		$data['coupanname'] = $content['coupanname'];	
		$data['discount'] = $content['discount'];	
		$data['coupanvalue'] = $content['coupanvalue'];		
		//$data['description'] = $content['description'];	
		$data['startdate'] = $content['startdate'];	
		$data['enddate'] = $content['enddate'];	

		$data['catid'] = $content['catid'];	
		$data['subcatid'] = $content['subcatid'];	
		$data['product_id'] = $content['product_id'];	
		$data['no_of_coupan'] = $content['no_of_coupan'];	
		$data['mini_amount'] = $content['mini_amount'];	
		$data['coupan_per_user'] = $content['coupan_per_user'];	
		$data['promotionname'] = $content['promotionname'];
		
		$this->_data = $data;		
		if ($this->db->insert('tbl_coupan', $this->_data))
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
	 
	function coupanattr($id){
		
			$query = "SELECT * from tbl_coupan where id= '".$id."'";
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
		
		$data['coupanname'] = $content['coupanname'];
		$data['discount'] = $content['discount'];
		$data['coupanvalue'] = $content['coupanvalue'];
		//$data['description'] = $content['description'];		
		$data['startdate'] = $content['startdate'];
		$data['enddate'] = $content['enddate'];			
		$data['catid'] = $content['catid'];	
		$data['subcatid'] = $content['subcatid'];	
		$data['product_id'] = $content['product_id'];	
		$data['no_of_coupan'] = $content['no_of_coupan'];	
		$data['mini_amount'] = $content['mini_amount'];	
		$data['coupan_per_user'] = $content['coupan_per_user'];	
		$data['promotionname'] = $content['promotionname'];
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('tbl_coupan', $this->_data))	{
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
		
		$sql = "SELECT * FROM tbl_coupan where id <> 0 ";
		if($content['coupanname'] != '') 
		{
			$sql .=	" AND  (coupanname like '%".$content['coupanname']."%' ) "; 
		}
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql .= " AND ( `startdate` >= '".$content['startdate']."' AND `enddate` <= '".$content['enddate']."' )";
			}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM tbl_coupan  WHERE id <> 0";

		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql_count .= " AND ( `startdate` >= '".$content['startdate']."' AND `enddate` <= '".$content['enddate']."' )";
			}
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	
	function lists_voucher($num, $offset, $content) 
	{
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM giftid where id <> 0 ";
		if($content['vouchername'] != '') 
		{
			$sql .=	" AND  (giftname like '%".$content['vouchername']."%' ) "; 
		}
		if($content['value'] != '') 
		{
			$sql .=	" AND  (value like '%".$content['value']."%' ) "; 
		} 
		$sql .= " order by id desc";
		$query = $this->db->query($sql);
		$sql_count = "SELECT * FROM giftid  WHERE id <> 0";
		 
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	
	function lists_paid_voucher($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM gift_voucher where value='paid' and id <> 0 ";
		if($content['vouchername'] != '') 
		{
			$sql .=	" AND  (vouchername like '%".$content['vouchername']."%' ) "; 
		}
		if($content['code'] != '') 
		{
			$sql .=	" AND  (code like '%".$content['code']."%' ) "; 
		} 
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count =  "SELECT * FROM gift_voucher where value='paid' and id <> 0 ";

		 
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}
	 function lists_free_voucher($num, $offset, $content) 
	{
		
		if($offset == '')
		{
			$offset = '0';
		}
		
		$sql = "SELECT * FROM gift_voucher where value='free' and id <> 0 ";
		if($content['vouchername'] != '') 
		{
			$sql .=	" AND  (vouchername like '%".$content['vouchername']."%' ) "; 
		}
		if($content['code'] != '') 
		{
			$sql .=	" AND  (code like '%".$content['code']."%' ) "; 
		} 
		
		
		$query = $this->db->query($sql);
		
 		
		$sql_count =  "SELECT * FROM gift_voucher where value='free' and id <> 0 ";

		 
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
		if ($this->db->delete('tbl_coupan'))	{
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
	 function updatestatus($id)
{
	$sql   = " select * from  tbl_coupan where id='".$id."'";
	$query = $this->db->query($sql);
	$ret=$query->row();
	if($ret->enabled == "1")
	{
		$abc= " update tbl_coupan set enabled = '0' where id='".$id."' ";
		$query = $this->db->query($abc);
		return $query;
	}
	else
	{
		$abc= " update tbl_coupan set enabled = '1' where id='".$id."' ";
		$query = $this->db->query($abc);
		return $query;
	}
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
	function voucher_list()
	{
		$sql   = "select * from  gift_voucher where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
	}

	function add_gvoucher($content)
 	{	
		$L_strErrorMessage='';	
		$data['giftname'] = $content['vouchername'];	
		$data['currency'] = $content['currency'];	
 		$data['giftvalue'] = $content['price'];	
 		$data['type'] = $content['value'];	
		$data['added_date'] = date("Y-m-d");		
  		$data['qty'] = $content['qty'];	
 		
		$this->_data = $data;		
		if ($this->db->insert('giftid', $this->_data))
		{					
				return $id = $this->db->insert_id();	;	
		} 
		else 	
		{		
				return false;	
		}
	}

	function add_voucher($content,$vcode,$id)
 	{	
		$L_strErrorMessage='';	
		$data['vouchername'] = $content['vouchername'];	
		$data['code'] = $vcode;	
		$data['value'] = $content['value'];	
		$data['added_date'] = date("Y-m-d");		
		$data['price'] = $content['price'];	
		$data['qty'] = "1";
		$data['giftid'] = $id;
		$data['giftpin'] = mt_rand(10000,99999);
		
		$this->_data = $data;		
		if ($this->db->insert('gift_voucher', $this->_data))
			{					
				return true;	
		 	} 
		else 	
			{		
				return false;	
			}
	}
		
	function edit_voucherdata($id, $content, $vcode) 
	{
		
		$data['vouchername'] = $content['vouchername'];	
		$data['code'] = $vcode;	
		$data['value'] = $content['value'];	
		$data['added_date'] = date("Y-m-d");	
		$data['price'] = $content['price'];	
		$data['qty'] = $content['qty'];			
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('gift_voucher', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
		
	
	function deletes_voucher($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('giftid')){
			$this->db->where('giftid = ',$id);
			$this->db->delete('gift_voucher');
			return true;
		} else {
			return false;
		}
	}
	function getcode() {

		$chars = array(
				'A','P','1','Z','B','Q','2','X','R','3','M','F','O','E','F','G','H'
			);

			shuffle($chars);

			$num_chars = count($chars) - 1;
			$token = '';

			for ($i = 1; $i < 10; $i++){ // <-- $num_chars instead of $len
				$token .= $chars[mt_rand(0, $num_chars)];
			}

			return 'STY'.$token;
		}
		
		function newgetcode() {
//echo "hi";die;
		$chars = array(
				'C','1','Q','2','G','S','Z','D','Q'
			);

			shuffle($chars);

			$num_chars = count($chars) - 1;
			$token = '';

			for ($i = 1; $i < 11; $i++){ // <-- $num_chars instead of $len
				$token .= $chars[mt_rand(0, $num_chars)];
			}

			return 'AA'.$token;
		}
	
	function get_voucher($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('gift_voucher');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function gift_voucher_code($giftid)
	{
		$this->db->where('giftid = ',$giftid);
 		$query = $this->db->get('gift_voucher');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
}
?>
