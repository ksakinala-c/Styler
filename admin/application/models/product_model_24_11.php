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
		function ajaxlist_search()
  {
		$sql   = "select * from  tbl_product where id <> 0"; 
		$query = $this->db->query($sql);
		return $query->result();
  }

	function bodypartname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('add_parts');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}	
	}
		function getstatusname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('status');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->status;
			return $result;
		} else {
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
	function giftget(){
		$query = $this->db->query('select * from systems limit 0,1');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
		function allstatus(){
		$query = $this->db->query('select * from status');
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

	function getdeliverstatus($id){
		 $this->db->where('id',$id);
		$query = $this->db->get('status');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->status;
			return $result;
		} else {
			return false;
		}
	}
	
	function getmeasurement($order_id){
	     $this->db->where('id',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	
	function getposture($order_id){
	     $this->db->where('id',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->posture;
			return $result;
		} else {
			return false;
		}
	}
	
	function getmetricfit($order_id){
	     $this->db->where('id',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricft;
			return $result;
		} else {
			return false;
		}
	}
	function getmetricweight($order_id){
	     $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricweight;
			return $result;
		} else {
			return false;
		}
	}
	function getmetricinch($order_id){
	     $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->metricinch;
			return $result;
		} else {
			return false;
		}
	}
		function getimpheight($order_id){
	     $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->impheight;
			return $result;
		} else {
			return false;
		}
	}
	function getimpweight($order_id){
	     $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->impweight;
			return $result;
		} else {
			return false;
		}
	}
		function getserdata($order_id){
	     $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->serializedata;
			return $result;
		} else {
			return false;
		}
	}
	
	
	
	
		function getshipcost($id){
	     $this->db->where('order_id',$id);
		$query = $this->db->get('ci_orders');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->shippingcost;
			return $result;
		} else {
			return false;
		}
	}
	
		function getgesture($order_id){
	    $this->db->where('id ',$order_id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->fit;
			return $result;
		} else {
			return false;
		}
	}
	
	
	function updatedata($color,$size,$pid,$value){
		
		$sql_count = "SELECT * FROM inventory  WHERE pid = ".$pid." AND colorid = ". $color." AND sizeid = ".$size;
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
			$result= $query->row();
			return $result->colourname;
		} else {
			return false;
		}
	}
	function getusername($id){
	    $this->db->where('id',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result= $query->row();
			return $result->username;
		} else {
			return false;
		}
	}
	function getsizename($id){
	    $this->db->where('id',$id);
		$query = $this->db->get('attribute');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->attribute;
		} else {
			return false;
		}
	}
	function allprocolor($id){
	    $this->db->where('order_id',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	function getorder()
	{
 		$query = $this->db->get('ci_orders');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function cancelorder($id,$cancel_resone)
	{
	//echo $cancel_resone;die;
 	  $sql = "SELECT * FROM ci_orders where order_id = '".$id."'";
	  $query = $this->db->query($sql);	 
	  $cancelorder = $query->row();
	   
	 $sql1 = "update ci_orders set order_status='CA',cancel_reson='".$cancel_resone."',is_cancelled = '1' where order_id =".$id;
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
function canorderdet($id)
   	{
		//echo $id;die();	
		$this->db->where('order_id = ',$id);
    	$query = $this->db->get('ci_orders');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	
	function getuserinfo($id)
   	{
		//echo $id;die();	
		$this->db->where('id = ',$id);
    	$query = $this->db->get('users');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
		function userinfo($id)
   	{
		$this->db->where('id = ',$id);
    	$query = $this->db->get('users');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	function canorddetail($id)
   	{
		//echo $id;die();	
		$this->db->where('order_id = ',$id);
    	$query = $this->db->get('ci_order_item');
   		if ($query->num_rows() > 0)	{
   			$result = $query->result();
   			return $result;
   		} else {
   			return false;
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
	 
	function orderdetail($id){
 		$this->db->where('order_id = ',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function uorderdetail($id){
 		$this->db->where('order_id = ',$id);
		$query = $this->db->get('ci_orders');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function uaddress($id){
 		$this->db->where('order_id = ',$id);
		$query = $this->db->get('billship');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function prorderdetail($id){
 		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	function subcatname($id){
		if($id !=""){
		$sql = "Select group_concat(scname) as scname from subcategory where id IN (".$id.")";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result->scname;
		} else {
			return false;
		} } else {
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
	function allstyle()
	{
		
		$query = $this->db->get('fabrics');
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
	
		function allnewfabric(){
		
		$query = $this->db->get('newfabric');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
		
	}
	
	function alldesign(){
		
		$query = $this->db->get('design');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
		
	}
	
	function stylename($id){
 		$sql = "select p.*,f.fabricsname from pro_style p
		left join fabrics f ON p.style_id = f.id
		where p.id = '".$id."'"; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)	{
			 
			$result = $query->row()->fabricsname;
			return $result;
		} else {
			return false;
		}	
	}

	function fabricname($id){
		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}	
	}

	/*function add($content) 
	{
		$L_strErrorMessage='';
		 
		$data['categoryid'] = $content['categoryid'];
	 	$data['subcatid'] = implode(',',$content['subcatid']); 
	 	//print_r($data['subcatid']);die();
		$data['pname'] = $content['pname'];
		$data['itemcode'] = $content['itemcode'];
		$data['shortcode'] = $content['shortcode'];
		$data['description'] = $content['description'];
		$data['discount'] = $content['discount'];
		//$data['cup'] = $content['cup'];
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
	} */
	function add($content) 
	{
		$L_strErrorMessage='';
		 
		$data['categoryid'] = $content['categoryid'];
	 	$data['subcatid'] = implode(',',$content['subcatid']); 
	 	//print_r($data['subcatid']);die();
		$data['pname'] = $content['pname'];
		$data['itemcode'] = $content['itemcode'];
		$data['shortcode'] = $content['shortcode'];
		$data['description'] = $content['description'];
		$data['discount'] = $content['discount'];
		$data['weight'] = $content['weight'];
		$data['pageurl'] = $content['pageurl'];
		$data['price'] = $content['price'];
		
		$data['colour'] = implode(',',$content['colour']);
		/*if($content['size'] !=""){
		  $data['size'] = implode(',',$content['size']);
		}*/
		$data['added_date'] = date('Y-m-d');
		$data['title']  = $content['title'];
		$data['metadescription']  = $content['metadescription'];
		$data['keyword']  = $content['keyword'];
		$data['startdate']  = $content['startdate'];
		$data['enddate']  = $content['enddate'];
		$data['fabricid']  = $content['fabricid'];
		$data['designid']  = $content['designid'];
		$data['qty']  = $content['qty'];
 
		$this->_data = $data;
		if ($this->db->insert('tbl_product', $this->_data)){
			$proid = $this->db->insert_id();
			mkdir($this->config->item('3d').'3dshirt/images/fabric/STY'.$proid);
			mkdir($this->config->item('3d').'3dshirt/images/high/STY'.$proid);
			mkdir($this->config->item('3d').'3dshirt/images/low/STY'.$proid);
			
			$data1['foldername'] = 'STY'.$proid;
			$this->_data1 = $data1;
			$this->db->where('id',$proid);
			if ($this->db->update('tbl_product', $this->_data1))	{
				
			}
		
		} 
	
		if( isset($_POST['style_id']) && count($_POST['style_id']) > 0 && $_POST['style_id']!='')
		{ 
					for($i=0;$i<count($_POST['style_id']);$i++) {
							$content['style_id']   = $_POST['style_id'][$i]; 
							$content['name'] = $_POST['name'][$i];
							$content['price'] = $_POST['price1'][$i];
							$content['sellingprice'] = $_POST['sellingprice'][$i];
							//$content['qty'] = $_POST['qty'][$i];
							$content['pid'] = $proid;
							$this->insert_product($content);
					}	
		}
		return true;
	}
	function insert_product($content)  
	{
		
		$data['style_id'] = $content['style_id'];
		$data['name'] = $content['name'];
	 
		$data['price'] = $content['price'];
		$data['sellingprice'] = $content['sellingprice'];
		//$data['qty'] = $content['qty'];
		 
		$data['pid'] = $content['pid'];
		
		$this->_data = $data;
		if ($this->db->insert('pro_style', $this->_data))	
		{
			return true;
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
	function pro_style($id){
		$sql = "SELECT * from pro_style  
			    where pid = '".$id."'
				"; 
	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function deleteorder($id,$pid)
	 {
 		$this->db->where('id = ',$id);
		$this->db->where('pid = ',$pid);
		if ($this->db->delete('pro_style'))	{
			return true;
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
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	/*
	function edit($id, $content) 
	{
	 
		$data['categoryid'] = $content['categoryid'];	
		$data['subcatid'] = implode(',',$content['subcatid']);
		//print_r($data['subcatid']);die();
		$data['pname'] = $content['pname'];		
		$data['itemcode'] = $content['itemcode'];		
		$data['shortcode'] = $content['shortcode'];		
		$data['discount'] = $content['discount'];
		$data['description'] = $content['description'];	
		//$data['featured_product'] = $content['featured_product'];	
		//$data['cup'] = $content['cupid'];  
		$data['price'] = $content['price'];	
		$data['size'] = implode(',',$content['size']);	
		$data['colour'] = implode(',',$content['colour']);			
		
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('tbl_product', $this->_data))	{
			 
		} else {
			return false;
		}
		
	} */
	function edit($id,$content) 
	{	
		$data['categoryid'] = $content['categoryid'];	
		$data['subcatid'] = implode(',',$content['subcatid']);
		//print_r($data['subcatid']);die();
		$data['pname'] = $content['pname'];		
		$data['itemcode'] = $content['itemcode'];		
		$data['shortcode'] = $content['shortcode'];		
		$data['discount'] = $content['discount'];
		$data['description'] = $content['description'];	
		$data['weight'] = $content['weight']; 
		$data['price'] = $content['price'];	
		$data['pageurl'] = $content['pageurl'];
		if($content['size'] !=""){
			$data['size'] = implode(',',$content['size']);
		}
		
		$data['colour'] = implode(',',$content['colour']);
		$data['title']  = $content['title'];
		$data['metadescription']  = $content['metadescription'];
		$data['keyword']  = $content['keyword'];
		$data['startdate']  = $content['startdate'];
		$data['enddate']  = $content['enddate'];
		$data['fabricid']  = $content['fabricid'];
		$data['designid']  = $content['designid'];
		$data['qty']  = $content['qty'];
		$this->_data = $data;
		$this->db->where('id', $id);
		if ($this->db->update('tbl_product', $this->_data)){
		$pid = $id;
 
			if(isset($_POST['style_id']))
			{
				if( count($_POST['style_id']) > 0 && $_POST['style_id']!='')
				{  
					for($i=0; $i<count($_POST['style_id']);$i++) 
					{
					 	if($_POST['style_id'][$i] != '')
						{ 
					
							$content['style_id']   = $_POST['style_id'][$i]; 
							$content['name'] = $_POST['name'][$i];
							$content['price'] = $_POST['price1'][$i];
							$content['sellingprice'] = $_POST['sellingprice'][$i];
							//$content['qty'] = $_POST['qty1'][$i];
							$content['pid'] = $pid; 
							$this->insert_product($content);
						}
					}
				} 
			}
			
			if( isset($_POST['style_id1']) && count($_POST['style_id1']) > 0 && $_POST['style_id1']!='' )
			{  
				//echo "hi";die;
					for($i=0;$i<count($_POST['style_id1']);$i++) 
					{ 
			
							$content['pid']   = $pid; 
							$content['style_id']   = $_POST['style_id1'][$i]; 
							$content['name'] = $_POST['name1'][$i];
							//echo $_POST['price1'][$i]; die;
							$content['price'] = $_POST['price1'][$i];
							$content['sellingprice'] = $_POST['sellingprice1'][$i];
								$content['pro_detail'] = $_POST['pro_detail1'][$i];
							//$content['qty1'] = $_POST['qty1'][$i];
							$content['updateid']   = $_POST['updateid'][$i];
							
							 
							$this->update_product($content);
					} 
						//echo "hi";die;
			}
					
					
			}
		return true;
	}
		
	function update_product($content)  
	{
		$data['pid'] = $content['pid']; 
		$data['style_id'] =$content['style_id'];
		$data['name'] = $content['name'];
		//echo $content['price'];die;
		$data['price'] = $content['price'];
		$data['sellingprice'] = $content['sellingprice'];
		$data['pro_detail'] = $content['pro_detail'];
		//$data['qty'] = $content['qty1'];
		 
		 
		$this->_data = $data;
		$this->db->where('id =',$content['updateid']);
		if ($this->db->update('pro_style', $this->_data))	
		{
			return true;
		} 
		else 
		{
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
		
		if($content['catid'] != '') 
		{
			$sql .=	" AND  (categoryid like '".$content['catid']."%' ) "; 
		}
		if($content['subcatid'] != '') 
		{
			$sql .=	" AND  (subcatid like '".$content['subcatid']."%' ) "; 
		}
		
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id desc limit ".$offset.",".$num."";
		}
		
		$query = $this->db->query($sql);
		
		
		
		$sql_count = "SELECT * FROM tbl_product  WHERE id <> 0";

		if($content['pname'] != '') 
		{
			$sql_count .=	" AND  (pname like '".$content['pname']."%' ) "; 
		}
		if($content['catid'] != '') 
		{
			$sql_count .=	" AND  (categoryid like '".$content['catid']."%' ) "; 
		}
		if($content['subcatid'] != '') 
		{
			$sql_count .=	" AND  (subcatid like '".$content['subcatid']."%' ) "; 
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
 	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id WHERE  o.order_id <> 0";
		if($content['username'] != '') 
		{
			$sql .=	" AND (u.username like '".$content['username']."%' ) "; 
		}
		if($content['status'] != '') 
		{
			$sql .=	" AND (o.order_status = '".$content['status']."' ) "; 
		}
 	 
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql .= " AND ( o.cdate >= ".$content['startdate']." AND o.cdate <= ".$content['enddate']." )";
			}
		if($content['cancel'] != '') 
		{
			$sql .=	" AND (o.is_cancelled like '".$content['cancel']."%' ) "; 
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


		$sql_couint = "SELECT * FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.order_id <> 0";
		 
		if($content['startdate']!='' && $content['enddate']!='')
		{
			$sql_couint .= " AND ( o.cdate >= ".$content['startdate']." AND o.cdate <= ".$content['enddate']." )";
		}
			
				if($content['cancel'] != '') 
		{
			$sql_couint .=	" AND (o.is_cancelled like '".$content['cancel']."%' ) "; 
		}	
			
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();  
		$ret['count']  = $query1->num_rows(); 
		
		//print_r($ret);die;
	    return $ret;
	}
	 function cancelorder_manage1($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.is_cancelled = '1' and  o.order_id <> 0";
		if($content['username'] != '') 
		{
			$sql .=	" AND (u.username like '".$content['username']."%' ) "; 
		}
	 
		
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql .= " AND ( o.cdate >= ".$content['startdate']." AND o.cdate <= ".$content['enddate']." )";
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


		$sql_couint = "SELECT * FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.is_cancelled = '1' and  o.order_id <> 0";
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();  
		$ret['count']  = $query1->num_rows(); 
		
		//print_r($ret);die;
	    return $ret;
	}
	
	 function cancelorder_manage2($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.order_status = 'P' and  o.order_id <> 0";
		if($content['username'] != '') 
		{
			$sql .=	" AND (u.username like '".$content['username']."%' ) "; 
		}
	 
		
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql .= " AND ( o.cdate >= ".$content['startdate']." AND o.cdate <= ".$content['enddate']." )";
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


		$sql_couint = "SELECT * FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.order_status = 'P' and  o.order_id <> 0";
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();  
		$ret['count']  = $query1->num_rows(); 
		
		//print_r($ret);die;
	    return $ret;
	}
	 function cancelorder_manage($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

	
		$sql = "SELECT o.*,u.* FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.is_cancelled = '1' and  o.order_id <> 0";
		if($content['username'] != '') 
		{
			$sql .=	" AND (u.username like '".$content['username']."%' ) "; 
		}
		if($content['status'] != '') 
		{
			$sql .=	" AND (o.order_status = '".$content['status']."%' ) "; 
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


		$sql_couint = "SELECT * FROM ci_orders o left join users u ON u.id = o.user_id WHERE o.is_cancelled = '1' and  o.order_id <> 0";
		 
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
	function removeimage1($id)
	{
		$this->db->where('id = ',$id);
		if ($this->db->delete('tbl_style_image'))	{
			return true;
		} else {
			return false;
		}
	}
	function orderdlt($id)
	{
		$this->db->where('order_id =',$id);
		if ($this->db->delete('ci_orders'))	{
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
		function styleimage($id)
	{
		$query = "SELECT * from tbl_style_image where style_id = '".$id."'";
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
	function updateorder1($id,$val){
		$query2 = "update tbl_style_image set image_index = '".$val."'  where id = '".$id."'";
		$result2 = $this->db->query($query2);
	}
	
	function threedyimageset($id,$pid)
	{
		$query2 = "update tbl_product_image set threedyimage = '0'  where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_product_image set threedyimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
	
	function setbaseimg($id,$pid)
	{
		$query2 = "update tbl_product_image set baseimage = '0'  where pid = '".$pid."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_product_image set baseimage = '1'  where id = '".$id."'";
		$result = $this->db->query($query);
		return true;
	}
		function setbaseimg1($id,$pid)
	{
		$query2 = "update tbl_style_image set baseimage = '0'  where pid = '".$pid."' AND id = '".$id."'";
		$result2 = $this->db->query($query2);
		
		$query = "update tbl_style_image set baseimage = '1'  where id = '".$id."'  AND id = '".$id."' ";
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
	
	function add_style_image($content)   
	{
		$data['pid']           = $content['pid'];
		$data['image']         = $content['image'];
		$data['style_id']         = $content['style_id'];
		
		$this->_data = $data;

		if ($this->db->insert('tbl_style_image', $this->_data))	{
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
	function presultss($id)
	{
		//echo $id;die;
		$query = "SELECT * from  pro_style where id = '".$id."'";
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
	function getusermail(){
		$id = '1';
		$sql = "SELECT * from etemplate where id = '".$id."' "; 
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function shipment_lists($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM ci_order_item  WHERE  order_item_id   <> 0 and order_id   = '".$content['order_id']."'"; 
		/*if($content['email'] != '') 
		{
			$sql .=	" AND  (email like '".$content['email']."%' ) "; 
		}*/
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql .= " AND ( cdate >= ".$content['startdate']." AND cdate <= ".$content['enddate']." )";
			}
		if($num!='' || $offset!='')
		{
			$sql .=	" order by order_item_id  desc limit ".$offset.",".$num."";
		}
		else
		{
			$sql .=	" order by order_item_id  asc";
		}

		$query = $this->db->query($sql);


		$sql_couint = "SELECT * FROM ci_order_item  WHERE  order_item_id   <> 0 and order_id   = '".$content['order_id']."'"; 
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql_couint .= " AND ( cdate >= ".$content['startdate']." AND cdate <= ".$content['enddate']." )";
			}
		
		/* if($content['email'] != '') 
		{
			$sql_couint .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		 */
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
	function gettotal($id){
		$query = "SELECT * from ci_orders where order_id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row()->order_total ;
			return $result;
		}
	}
		function allcourier(){
		$query = $this->db->query('select * from  courier');
		if ($query->num_rows() > 0)	{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	 
		function ship_add($id,$item_id,$content)  
	{
 		//print_r($content);
		$data['order_id'] = $id;
		$data['ci_order_item'] =$item_id;  
		$data['message'] = $content['message'];
		$data['courier'] = $content['courier'];  
		$data['status'] = $content['status'];
		$data['date'] =  date('Y-m-d');
		//print_r($data);die;
		$this->_data = $data;
		if ($this->db->insert('shipment', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function ship_edit($id,$item_id,$content)  
	{
	 
		//$data['order_id'] = $id;
		$data['ci_order_item'] =$item_id;  
		$data['message'] = $content['message'];
		$data['courier'] = $content['courier'];  
		$data['status'] = $content['status'];
		$data['date'] =  date('Y-m-d');
		$this->_data = $data;
		$this->db->where('order_id', $id);
		if ($this->db->update('shipment', $this->_data))	{
			 return true;
		} else {
			return false;
		}
		
	}
	 function getcheckvalue($id)
	{
		//echo $id;die;
		$query = "SELECT * from   shipment where order_id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row();
			return $result;
		}
	}
		function cineworderdetail($id){
 		$this->db->where('order_item_id = ',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
 
		function getcouriername($id){
		$query = "SELECT * from  courier where id = '".$id."'";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
		{
			$result = $result->row()->cname ;
			return $result;
		}
	}
	  function ship_lists($num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}

		$sql = "SELECT * FROM  shipment  WHERE  id   <> 0 "; 
		if($content['order_id'] != '') 
		{
			$sql .=	" AND  (order_id = '".$content['order_id']."' ) "; 
		}
		if($content['startdate']!='' && $content['enddate']!='')
		{
				$sql .= " AND ( date >= ".$content['startdate']." AND date <= ".$content['enddate']." )";
		}
		
		if($num!='' || $offset!='')
		{
			$sql .=	" order by id  desc ";
		}
		else
		{
			$sql .=	" order by id  asc";
		}
  
		$query = $this->db->query($sql);


		$sql_couint = "SELECT * FROM  shipment  WHERE  id   <> 0 "; 
		if($content['order_id'] != '') 
		{
			$sql .=	" AND  (order_id = '".$content['order_id']."' ) "; 
		}
		if($content['startdate']!='' && $content['enddate']!='')
			{
				$sql_couint .= " AND ( date >= ".$content['startdate']." AND date <= ".$content['enddate']." )";
			}
		
		/* if($content['email'] != '') 
		{
			$sql_couint .=	" AND  (email like '".$content['email']."%' ) "; 
		}
		 */
		 
 		$query1 = $this->db->query($sql_couint);

		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}
		function getfabricid($id){
	     $this->db->where('order_item_id',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->fabricid;
			return $result;
		} else {
			return false;
		}
	}

	function getfabricname($id){ 
	     $this->db->where('id',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}
	}

	function getfabricname1($id){ 
	     $this->db->where('foldername',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->pname;
			return $result;
		} else {
			return false;
		}
	}

	function getmdetail($id)
	{
		$sql = "SELECT * FROM   ci_order_item WHERE order_id ='".$id."'";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
		function getmeasuredetail($id){
	     $this->db->where('id',$id);
		$query = $this->db->get('measurement');
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function shipmentdetail($id) 
	{
		$this->db->where('id  = ',$id);
		$query = $this->db->get('shipment');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	function getproductdetail($id){
	     $this->db->where('order_item_id',$id);
		$query = $this->db->get('ci_order_item');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	function getaffname($id){
	    $this->db->where('aff_code',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)	{
			$result= $query->row();
			return $result->username;
		} else {
			return false;
		}
	}
	
	
}
?>