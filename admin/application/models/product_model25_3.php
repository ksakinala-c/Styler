<?php
class Product_model extends CI_Model {
	private $_data = array();
	function __construct() {
		parent::__construct();
	}

	function get_product($id){

		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function trackadd($id,$content)  
	{
		
		$data['trackadd'] = $content['trackadd'];
		$data['deliver'] = $content['status'];  
		//print_r($data['deliver']);die();
		$this->_data = $data;
		$this->db->where('order_id',$id);
		if ($this->db->update('ci_orders', $this->_data))	
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
			
	function searchproducts($content){
	    $sql = "Select * from tbl_product where pname like '%".$content['product']."%' ";
		$query1 = $this->db->query($sql);
		return $query1->result();
	}
	
	function udpategroup($pid,$toupdatid){
		$sql = "Update tbl_product set groupedprod = '".$toupdatid."' where id = '".$pid."' ";
		$query1 = $this->db->query($sql);
		return true;
	}
	
	function getsizename($id){
	    $this->db->where('id',$id);
		$query = $this->db->get('attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->attribute;
			return $result;
		} else {
			return false;
		}
	}
	
	function stockvalue($color,$size,$pid){
	     $this->db->where('sizeid',$size);
	     $this->db->where('colorid',$color);
		 $this->db->where('pid',$pid);
		$query = $this->db->get('inventory');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->qty;
			return $result;
		} else {
			return false;
		}
	}
	
	function updatedata($color,$size,$pid,$value){
		
		echo $sql_count = "SELECT * FROM inventory  WHERE pid = ".$pid." AND colorid = ". $color." AND sizeid = ".$size;
		$query1 = $this->db->query($sql_count);
		if($query1->num_rows())
		{
			$data['qty'] =  $value;
			$this->_data = $data;
			
			$this->db->where('pid',$pid);
			$this->db->where('colorid',$color);
			$this->db->where('sizeid',$size);
			//print_r($this->db);break;
			$this->db->update('inventory', $this->_data);
		}
		else
		{
			$data_['colorid'] =  $color;
			$data_['sizeid'] =  $size;
			$data_['pid'] =  $pid;
			$data_['qty'] =  $value;
			$this->__data = $data_;
			
			$this->db->insert('inventory', $this->__data);
		} 

	//	sirf abhi yaha update and insert query kar do.. ok?? ok..and merge all admin code in one ok
	}
	
	function getcolorname($id){
	    $this->db->where('id',$id);
		$query = $this->db->get('colour');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->colourname;
			return $result;
		} else {
			return false;
		}
	}
	
	function cancelorder($id,$cancel_resone)
	{

 	  $sql = "SELECT * FROM ci_orders where order_id = '".$id."'";
	  $query = $this->db->query($sql);	 
	  $cancelorder = $query->row();
	   
	 $sql1 = "update ci_orders set order_status='CA',cancel_reson='".$cancel_resone."' where order_id =".$id;
	  $query1 = $this->db->query($sql1);

	  $sql = "SELECT * FROM userwallet where user_id = '".$cancelorder->user_id."'";
	  $query = $this->db->query($sql);	 
	  $cancelorderrow = $query->num_rows();

	  if($cancelorderrow == '0')
		{
			$content['user_id']  = $cancelorder->user_id; 
			$content['userwallet']  = $cancelorder->order_total; 
			  
			$this->_data = $content;
			if ($this->db->insert('userwallet',$this->_data))
			{
				return true;
			}
		}
		else
		{
	 		$sql = "Update userwallet set userwallet  = userwallet  + ".$cancelorder->order_total."  where user_id = '".$cancelorder->user_id."'";
			$query = $this->db->query($sql);	
		}
		
	}

	function allproduct(){
		
 		$query = $this->db->get('tbl_product');
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
		$sql = "Select group_concat(scname) as scname from subcategory where id IN (".$id.")";
		$query = $this->db->query($sql);
		
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
	function allcolour()
	{
		
		$query = $this->db->get('colour');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function countryname($id){
		$this->db->where('order_id = ',$id);
		$query = $this->db->get('billship');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->county;
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
		 
		$data['categoryid'] = $content['categoryid'];
	 	$data['subcatid'] = implode(',',$content['subcatid']); 
	 	$data['pname'] = $content['pname'];
		$data['itemcode'] = $content['itemcode'];
		$data['shortcode'] = $content['shortcode'];
		$data['description'] = $content['description'];
		$data['discount'] = $content['discount'];
		$data['cup'] = $content['cup'];
		$data['price'] = $content['price'];
		$data['colour'] = implode(',',$content['colour']);
		$data['size'] = implode(',',$content['size']);
		$data['added_date'] = date('Y-m-d');
		 
		$this->_data = $data;
		if ($this->db->insert('tbl_product', $this->_data))	
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
//		$data['price'] = $content['price'];
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
		//$data['price'] = $content['price'];
		$data['quanity'] = $content['quanity'];
		$data['productid'] = $content['productid'];
		$data['attributeid'] = $content['attributeid'];
		$this->_data = $data;
		$this->db->where('id',$content['attrid']);
		if ($this->db->update('product_attribute', $this->_data))	{
			
		}
	}
	 
	function productattr($id){
		
			$query = "SELECT * from product_attribute where productid = '".$id."'";
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
 
	function shippingdetails($order_invoice){
 		$this->db->where('order_id = ',$order_invoice);
		$query = $this->db->get('billship');
		//echo $this->db->last_query();
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			//echo $result;die;
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
	 
		$data['categoryid'] = $content['categoryid'];	
		$data['subcatid'] = implode(',',$content['subcatid']);
		$data['pname'] = $content['pname'];		
		$data['itemcode'] = $content['itemcode'];		
		$data['shortcode'] = $content['shortcode'];		
		$data['discount'] = $content['discount'];
		$data['description'] = $content['description'];	
		$data['featured_product'] = $content['featured_product'];	
		$data['cup'] = $content['cupid'];  
		$data['price'] = $content['price'];	
		$data['size'] = implode(',',$content['size']);	
		$data['colour'] = implode(',',$content['colour']);			
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('tbl_product', $this->_data))	{
			 
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
		
		$sql = "SELECT * FROM tbl_product where id <> 0 ";
		if($content['pname'] != '') 
		{
			$sql .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by pname asc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM tbl_product  WHERE id <> 0";

		if($content['pname'] != '') 
		{
			$sql_count .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
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

	
		$sql = "SELECT o.*,u.* FROM product_attribute o left join  tbl_product u ON u.id = o.id  WHERE  o.id <> 0";
		 
		if($num!='' || $offset!='')
		{
			$sql .=	" order by o.id desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by o.id asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "SELECT * FROM product_attribute o left join  tbl_product u ON u.id = o.id  where o.id <> 0";
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result(); // limit marke data pass kya
		$ret['count']  = $query1->num_rows; // total rows pass kkya
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_product'))	{
			return true;
		} else {
			return false;
		}
	}
	
	function deleteimage($id) 
	{
  		 $sql = "Delete from tbl_product_images where id = '".$id."'";
		 $this->db->query($sql);
	}
	
	 
	
		 
	
  function product_list()
  {
		$sql   = "select * from tbl_product where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
  }
 	
	function udata($id)
	{
	 
		$sql   = "select * from ci_orders where order_id = '".$id."'";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			 
			return $result;
		}
	}
	function uemail($uid)
	{
	 
		$sql   = "select * from users where id = '".$uid."'";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			 
			return $result;
		}
	}
	
  function order_manage($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id  WHERE  o.order_id <> 0";
		if($content['username'] != '') 
		{
			$sql .=	" AND (u.username like '".$content['username']."%' ) "; 
		}
		if($content['status'] != '') 
		{
			$sql .=	" AND (o.order_status like '".$content['status']."%' ) "; 
		}
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
		if ($this->db->delete('tbl_product_image'))	{
			return true;
		} else {
			return false;
		}
	}
	function productimages($id)
	{
		$query = "SELECT * from tbl_product_image where pid = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->result();
			return $result;
		}
	}
	
	function updateorder($id,$val){
		$query2 = "update tbl_product_image set image_index = '".$val."'  where id = '".$id."'";
		$result2 = $this->db->query($query2);
	}
	
	function setbaseimg($id,$pid)
	{
		$query2 = "update tbl_product_image set baseimage = '0'  where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_product_image set baseimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
	function add_product_image($content)  /// Add Pincode  
	{
		$data['pid']           = $content['pid'];
		$data['image']         = $content['image'];
		
		$this->_data = $data;

		if ($this->db->insert('tbl_product_image', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function presult($id)
	{
		$query = "SELECT * from tbl_product where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}
	
	function pname($id){
		$query = "SELECT * from tbl_product where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row()->pname;
			return $result;
		}
	}

}
?>