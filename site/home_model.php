<?php
class Home_Model extends Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function changecurrency($id){
		$sql = "SELECT * from currency where currency_code = '".$id."'"; 
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row(); //stylior_roc;
			return $result;
		}
	}

    function page_url($id) {
        $sql = "SELECT * from cms where pageurl = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->id;
			return $result;
		}
    }

	function mbrandname($id) {
        $sql = "SELECT * from brand where id = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->bname;
			return $result;
		}
    }
	function mfitname($id) {
        $sql = "SELECT * from brand_fit where id = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->fitname;
			return $result;
		}
    }
	function msizename($id) {
        $sql = "SELECT * from brand_size where id = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->size;
			return $result;
		}
    }

	function currencydetails($id){
 		$sql = "SELECT * from currency where currency_code = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
 
	function catid($id){
		$sql = "SELECT * from category where pageurl = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->id;
			return $result;
		}
	}

	function insidercontent()
	{
		$id = '1';
		$sql = "SELECT p.* FROM  systems p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->insider ;
			return $result;
		}
	}

	function affcontent()
	{
		$id = '1';
		$sql = "SELECT p.* FROM  systems p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->affliliatecontent;
 			return $result;
		}
	}

    function getstylename($id)
	{
		//echo $id;die;
		$sql = "SELECT * FROM fabrics where id='".$id."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->fabricsname;
			return $result;
		}
	
	}

	function getstyledesc($id)
	{
		//echo $id;die;
		$sql = "SELECT * FROM fabrics where id='".$id."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->description;
			return $result;
		}
	
	}
	
	function prodid($id){
		$sql = "SELECT * from tbl_product where pname = '".str_replace('-',' ',$id)."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->id;
			return $result;
		}	
	}
	
	function allusermeasurements($id){
		$sql = "SELECT * from measurement where userid = '".$id."' order by id desc limit 0,6 "; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}	
	}
	function allcountry(){
		$sql = "SELECT * from country"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}	
	}
	function getmdata($id){
		$uid = $this->session->userdata('userid');
		$sql = "SELECT * from  measurement where userid = '".$uid."' AND id = '".$id."' "; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
 
	
	function newallparts()
	{
		//echo $id;
		$sql = "SELECT p.*  FROM  add_parts p where p.body_measure = '1' order by `order` asc ";  
			 
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function homepro($id){
		$sql = "SELECT * from subcategory where catid = ".$id."  order by id desc limit 0,12"; 
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}

	function checkemail($email)
	{
		//echo($email);die();
		$this->db->where('pincode = ',$email);
		$query = $this->db->get('addessdata');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}

	function prodetailsall($id)
	{
 		$this->db->where('id = ',$id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0)	{
			$result = $query->row();
			return $result;
		} else {
			return false;
		}
	}
	
	function style_id($id){
		$this->db->where('pageurl = ',$id);
		$query = $this->db->get('fabrics');
		if ($query->num_rows() > 0)	{
			$result = $query->row()->id;
			return $result;
		} else {
			return false;
		}
	}

	/*function allproducts($pg_num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}
 	
		$sql = "SELECT p.* , im.image from  tbl_product p
			left join   tbl_product_image im ON im.pid = p.id AND im.image_index = '1'
			inner join pro_style s ON s.pid = p.id
			where p.id <> 0";
				
		if($content['cat'] != ''){
			$sql .= " AND  p.categoryid = '".$content['cat']."' "; 
		}
		
		if($content['subcat'] != ''){
			$sql .= " AND find_in_set('".$content['subcat']."',p.subcatid) <> 0"; 
		}	
		 
		if($content['search'] != ''){
			$sql .= " AND ( p.pname like '%".$content['search']."%' OR  p.foldername like '%".$content['search']."%'  ) "; 
		}
			
		if($content['size'] != '' && count($content['size']) > 0){
			$sql .=	"  AND  (p.size IN (".implode(',',$content['size']).") )  ";  
		}
		if($content['color'] != ''){
			$sql .= " AND p.colour = '".$content['color']."'";
		}
		
        if($content['discount'] != ''){
			$sql .= " AND p.discount > '".$content['discount']."'"; 
		}
		if($content['fabricid'] != ''){
			$sql .= " AND  p.fabricid = '".$content['fabricid']."' "; 
		}
		
		if($content['designid'] != ''){
			$sql .= " AND  p.designid = '".$content['designid']."' "; 
		}
		
		if($content['price'] != ''){
			if($content['price'] == '500'){
					$sql .= " AND p.price <= 500 "; 
			}
			if($content['price'] == '700'){
					$sql .= " AND ( p.price > 500 AND p.price <= 700 ) "; 
			}
			if($content['price'] == '1000'){
					$sql .= " AND ( p.price > 700 AND p.price <= 1000 ) "; 
			}
			
		}
		 
		 
		if($pg_num!=0 || $pg_num!="")
		{
 
		 	if($content['sortby'] == '') {
				$sql .= " ORDER BY p.id ASC LIMIT ".$offset.",".$pg_num;
			} else {
				$sql .=  " ORDER BY ".$content['sortby']." ASC LIMIT ".$offset.",".$pg_num;
			}
		} 
		//echo $sql;
 		$query = $this->db->query($sql);

		$sql_couint = "SELECT p.* , im.image from  tbl_product p
			inner join pro_style s ON s.pid = p.id
			left join   tbl_product_image im ON im.pid = p.id AND im.image_index = '1' where p.id <> 0";
		
		if($content['cat'] != ''){
			$sql_couint .= " AND  p.categoryid = '".$content['cat']."' ";  
		}
		
		if($content['subcat'] != ''){
			$sql_couint .= " AND find_in_set('".$content['subcat']."',p.subcatid) <> 0"; 
		}
		
		if($content['cup'] != ''){
			$sql_couint .= " AND p.cup = '".$content['cup']."'";
		}
		
		
		if($content['size'] != '' && count($content['size']) > 0){
			$sql_couint .=	"  AND  (p.size IN (".implode(',',$content['size']).") )  ";  
		}
		
		if($content['fabricid'] != ''){
			$sql_couint .= " AND  p.fabricid = '".$content['fabricid']."' "; 
		}
		
		if($content['designid'] != ''){
			$sql_couint .= " AND  p.designid = '".$content['designid']."' "; 
		}
		
		
		if($content['color'] != ''){
			$sql_couint .= " AND p.colour = '".$content['color']."'";
		}
		
		if($content['search'] != ''){
			//$sql_couint .= " AND p.pname like '%".$content['search']."%'"; 
			$sql_couint .= " AND ( p.pname like '%".$content['search']."%' OR  p.foldername like '%".$content['search']."%'  ) "; 
		}
        
		if($content['discount'] != ''){
			$sql_couint .= " AND p.discount > '".$content['discount']."'"; 
		}
		
		if($content['price'] != ''){
			if($content['price'] == '500'){
					$sql_couint .= " AND p.price <= 500 "; 
			}
			if($content['price'] == '1000'){
					$sql_couint .= " AND ( p.price > 500 AND p.price <= 1000 ) "; 
			}
			if($content['price'] == '1500'){
					$sql_couint .= " AND ( p.price > 1000 AND p.price <= 1500 ) "; 
			}
			
		}
		
 		$query1 = $this->db->query($sql_couint);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	} */

	function allproducts($pg_num, $offset, $content) 
	{
		if($offset == ''){
			$offset = '0';
		}
 		/* $sql = "select ps.* , p.* , im.image ,ps.id as proid from pro_style ps 
		inner join tbl_product p ON p.id = ps.pid
		left join tbl_style_image im ON im.style_id = ps.id AND im.baseimage = '1'
		where ps.style_id = '".$id."' group by im.pid"; */
		/*$sql = "SELECT p.* , im.image from  tbl_product p
			left join   tbl_product_image im ON im.pid = p.id AND im.image_index = '1'
			inner join pro_style s ON s.pid = p.id
			where p.id <> 0";*/

		$sql = "select ps.* , p.* , im.image ,ps.id as proid from pro_style ps 
		inner join tbl_product p ON p.id = ps.pid
		left join tbl_style_image im ON im.style_id = ps.id AND im.baseimage = '1' where p.id <> 0";
 
				
		if($content['cat'] != ''){
			$sql .= " AND  p.categoryid = '".$content['cat']."' "; 
		}
		
		if($content['subcat'] != ''){
			$sql .= " AND find_in_set('".$content['subcat']."',p.subcatid) <> 0"; 
		}	
		 
		if($content['search'] != ''){
			$sql .= " AND ( p.pname like '%".$content['search']."%' OR  p.foldername like '%".$content['search']."%'  ) "; 
		}
			
		if($content['size'] != '' && count($content['size']) > 0){
			$sql .=	"  AND  (p.size IN (".implode(',',$content['size']).") )  ";  
		}
		if($content['color'] != ''){
			$sql .= " AND p.colour = '".$content['color']."'";
		}
		
        if($content['discount'] != ''){
			$sql .= " AND p.discount > '".$content['discount']."'"; 
		}
		if($content['fabricid'] != ''){
			$sql .= " AND  p.fabricid = '".$content['fabricid']."' "; 
		}
		
		if($content['designid'] != ''){
			$sql .= " AND  p.designid = '".$content['designid']."' "; 
		}
		
		if($content['price'] != ''){
			if($content['price'] == '2500'){
					$sql_couint .= " AND ps.sellingprice <= 2500 "; 
			}
			if($content['price'] == '3000'){
					$sql_couint .= " AND ( ps.sellingprice > 2500 AND ps.sellingprice <= 3000 ) "; 
			}
			if($content['price'] == '3500'){
					$sql_couint .= " AND ( ps.sellingprice > 3000 AND ps.sellingprice <= 3500 ) "; 
			}
			
		}
 
		if($pg_num!=0 || $pg_num!="")
		{
 
		 	if($content['sortby'] == '') {
				$sql .= " group by p.id ORDER BY p.id ASC  LIMIT ".$offset.",".$pg_num;
			} else {
				$sql .=  " group by p.id ORDER BY ".$content['sortby']." ASC  LIMIT ".$offset.",".$pg_num;
			}
		} 
	    
		 
 		$query = $this->db->query($sql);

		$sql_couint = "select ps.* , p.* , im.image ,ps.id as proid from pro_style ps 
		inner join tbl_product p ON p.id = ps.pid
		left join tbl_style_image im ON im.style_id = ps.id AND im.baseimage = '1' where p.id <> 0";
		
		if($content['cat'] != ''){
			$sql_couint .= " AND  p.categoryid = '".$content['cat']."' ";  
		}
		
		if($content['subcat'] != ''){
			$sql_couint .= " AND find_in_set('".$content['subcat']."',p.subcatid) <> 0"; 
		}
		
		if($content['cup'] != ''){
			$sql_couint .= " AND p.cup = '".$content['cup']."'";
		}
		
		
		if($content['size'] != '' && count($content['size']) > 0){
			$sql_couint .=	"  AND  (p.size IN (".implode(',',$content['size']).") )  ";  
		}
		
		if($content['fabricid'] != ''){
			$sql_couint .= " AND  p.fabricid = '".$content['fabricid']."' "; 
		}
		
		if($content['designid'] != ''){
			$sql_couint .= " AND  p.designid = '".$content['designid']."' "; 
		}
		
		
		if($content['color'] != ''){
			$sql_couint .= " AND p.colour = '".$content['color']."'";
		}
		
		if($content['search'] != ''){
			//$sql_couint .= " AND p.pname like '%".$content['search']."%'"; 
			$sql_couint .= " AND ( p.pname like '%".$content['search']."%' OR  p.foldername like '%".$content['search']."%'  ) "; 
		}
        
		if($content['discount'] != ''){
			$sql_couint .= " AND p.discount > '".$content['discount']."'"; 
		}
		
		if($content['price'] != ''){
			if($content['price'] == '2500'){
					$sql_couint .= " AND ps.sellingprice <= 2500 "; 
			}
			if($content['price'] == '3000'){
					$sql_couint .= " AND ( ps.sellingprice > 2500 AND ps.sellingprice <= 3000 ) "; 
			}
			if($content['price'] == '3500'){
					$sql_couint .= " AND ( ps.sellingprice > 3000 AND ps.sellingprice <= 3500 ) "; 
			}
			
		}
		$sql_couint .= " group by p.id ";
 		$query1 = $this->db->query($sql_couint);
		$ret['result'] = $query->result();
		$ret['count']  = $query1->num_rows;
	    return $ret;
	}

	function minpricestyleproduct($id){
		 $sql = "select * from pro_style where pid = '".$id."' order by sellingprice asc limit 1";
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	
	function prodetails($id)
	{ 
	    $sql = "SELECT p.*, im.image from  pro_style p 
			    left join  tbl_style_image im ON im.style_id = p.id
 				AND im.baseimage = '1' where p.pid = ".$id;
 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function style_detail($id)
	{ 
	    
		$sql = "select ps.*, p.* , im.image ,ps.id as proid from pro_style ps 
		inner join tbl_product p ON p.id = ps.pid
		left join tbl_style_image im ON im.style_id = ps.id AND im.baseimage = '1'
		where ps.style_id = '".$id."' group by im.pid";

 		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
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

	function productdetail($id)
	{ 
	    $sql = "SELECT p.*, fb.fabricsname as name, im.image from  pro_style p 
		        left join  fabrics fb ON fb.id = p.style_id
 			    left join  tbl_style_image im ON im.style_id = p.id
 				AND im.baseimage = '1' where p.id = ".$id;
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}

	function styleimages($id,$prodid)
	{ 
	    $sql = "SELECT * from tbl_style_image where pid = '".$prodid."'
 				AND style_id = '".$id."'"; 
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}

	function catdata($id){
		$sql = "Select * from category where id = '".$id."'";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}

	function subcatimage1($id){
		$sql = "Select * from subcategory where id = '".$id."'";
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}


	function getsaveditems()
	{ 
		$id= $this->session->userdata('userid');
		/*$sql = "SELECT ci.*,ps.*, im.image from ci_order_item ci 
				left join pro_style ps ON ps.id = ci.product_id
				left join tbl_style_image im ON im.style_id = ci.product_id
 				AND im.baseimage = '1' where ci.user_info_id = ".$id;*/
				//echo $sql ;die;
		$sql = "SELECT * from save3d WHERE userid = '".$id."' "; 
 		$query = $this->db->query($sql);
		//echo $query ;die;
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function allcolour()
	{
		$sql = "SELECT * FROM colour ORDER BY id ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function allfonts()
	{
		$sql = "SELECT * FROM fonts ORDER BY id ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function allplacement()
	{
		$sql = "SELECT * FROM placements ORDER BY id ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function wishlistinfo($uid,$pid){
		 
		$sql = "select * from wishlist where userid ='".$uid."' and pid ='".$pid."' ";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)	{
			return $query->result();
			//return $result;
		} else {
			return false;
		}

	}
	
	/* stylor function end*/
	
	function productinfo($id){
		$sql = "select * from tbl_product where id ='".$id."' ";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)	{
			return $query->row();
			//return $result;
		} else {
			return false;
		}

	}

	
	function allproductshome(){
		$sql = "SELECT p.*, im.image from tbl_product p
			    left join  tbl_product_image im ON (im.pid = p.id AND im.baseimage = '1') order by p.id desc limit 0,4"; 
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}
	 
	function procountinventry($size,$color,$pid)
	{
		$sql = "SELECT * FROM inventory where pid='".$pid."' and sizeid='".$size."' and colorid = '".$color."'";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->qty;
			return $result;
		}
	
	}
	function getflatrate($cid)
	{
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->flatrate;
			return $result;
		}
	}
	
	
	function weightrate($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->zero_five;
			return $result;
		}
	}
		function weightrate1($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->six_ten;
			return $result;
		}
	}
		function weightrate2($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->eleven_fifteen;
			return $result;
		}
	}
		function weightrate3($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->sixteen_twenty;
			return $result;
		}
	}
		function weightrate4($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->twentyone_twentyfive;
			return $result;
		}
	}
		function weightrate5($cid)
	{
		//$weight=500
		$sql = "SELECT * FROM country where cid='".$cid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->twentysix_threethousand;
			return $result;
		}
	}
	
		function getimage($pid)
	{
		$sql = "SELECT * FROM  tbl_product_image where pid='".$pid."' and image_index='2'";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->image;
			return $result;
		}
	
	}
	
	
	function getsubcatid($pid)
	{
		$sql = "SELECT * FROM tbl_product where id='".$pid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->subcatid;
			return $result;
		}
	
	}
 
	function groupproduct($pid)
	{ 
		//echo $pid;die;
	  $sql = "SELECT p.* , im.image from tbl_product p 
			    left join  tbl_product_image im ON im.pid = p.id
 				 AND im.baseimage = '1' where p.id = ".$pid;
 		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}
	 
	
	function getgroupro($pid)
	{
		$sql = "SELECT * FROM tbl_product where id='".$pid."' ";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->groupedprod;
			return $result;
		}
	
	}
	
	function prodparts($id){
		//$sql = "SELECT * from   part_attribute where sizeid	 ='".$id."' "; 
		$sql = "SELECT p.* , ap.order , ap.id  from part_attribute p 
			    left join add_parts ap ON p.partid = ap.id
 				where p.sizeid = '".$id."' and ap.hide_in_size = '0' order by ap.order asc";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}

	function prodparts_hide($id){
		//$sql = "SELECT * from   part_attribute where sizeid	 ='".$id."' "; 
		$sql = "SELECT p.* , ap.order , ap.id  from part_attribute p 
			    left join add_parts ap ON p.partid = ap.id
 				where p.sizeid = '".$id."' order by ap.order asc";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}
	  
	
	function getcatimage($id){
		$sql = "SELECT * from category where id='".$id."' "; 
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	function subcatimage($id){
		$sql = "SELECT * from subcategory where id ='".$id."' order by id desc limit 0,1"; 
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
		
	}

	function catname($id){
		$sql = "SELECT * from category where id ='".$id."' limit 0,1"; 
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->cname;
			return $result;
		}
			
	}
	
	function catdetails($id){
		$sql = "SELECT * from category where id ='".$id."' limit 0,1"; 
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
			
	}
	
	
	
	function totalrate($id)
	{	
		//echo $id;die();
		$sql_count = "Select * from product_review where product_id='".$id."'";
		$query = $this->db->query($sql_count);
		$ret = $query->num_rows();
	    return $ret;	
	}
	
	function bestproducts()
	{
		 
		$sql = "SELECT p.*, im.image from tbl_product p
			    left join  tbl_product_image im ON (im.pid = p.id AND im.baseimage = '1') ORDER BY id DESC limit 0,5";		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function getvalue($id){ 
	
	
	  	$sql = "SELECT * FROM systems
			WHERE id = ".$id." ";
 
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->giftwarpamt;
			return $result;
		}
	
	}
	
	function getsize($id){ 
	
		//echo $id;die;
	  	$sql = "SELECT * FROM size
			WHERE id = ".$id." ";
 
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->size;
			return $result;
		}
	
	}
	
	function rewards($id){ 
	
	
	  	$sql = "SELECT * FROM userreward
			WHERE id = ".$userid." ";
 
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->userpoints;
			return $result;
		}
	
	}

	function aboutus()
	{
		$sql = "SELECT * from cms";
		
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	
	
	function allbanner()
	{
		$sql = "SELECT * FROM banner ORDER BY id DESC limit 0,3";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function allattribute()
	{
		$sql = "SELECT * FROM attribute ORDER BY id ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}

	function getpwd($id)
	{
		$query = "SELECT * from users where id='".$id."'";
			
		$result = $this->db->query($query);
		if($result->num_rows()>0)
		{
			 $res=$result->result(); 				
			return $res;
		}
	}
	
	
	function relatedproduct($cat_id)
	
	{
		//echo($cat_id);die();
		$sql = "SELECT id from tbl_product where categoryid =".$cat_id ;
		
		$query = $this->db->query($sql);
		//print_r($result);die();	
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
			
			
		}
	}

	
	
	
	function relatedproductimg($pid1)
	{
		$sql = "SELECT image,pid from tbl_product_image where pid =".$pid1." AND image_index = '1' ";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function listsubcategory($id)
	{
	 
		if($id != '') {
		$sql = "SELECT * FROM subcategory WHERE catid = '".$id."' ";
		} else {
		$sql = "SELECT * FROM subcategory  ";
		}
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function listsubsubcategory($id)
	{
		$sql = "SELECT * FROM subsubcategory WHERE subcatid = '".$id."' "; 
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
		function allsubcategory()
	{
		$sql = "SELECT * FROM subcategory order by id desc limit 0,6"; 
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	
	function proattribute() 
	{
		$sql = "SELECT * FROM attribute" ;
	
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	
	function proattributeprice($id)
	{
		$sql = "SELECT p.*, a.* FROM product_attribute p 
		INNER join attribute a ON a.id = p.attributeid
		where p.productid = '".$id."'";  
	
	//echo $sql;die();
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	
	function getcat($id)
	{
		$sql = "SELECT * FROM category where id = '".$id."'";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}

	function getsubcat($id)
	{
		$sql = "SELECT * FROM subcategory  
				WHERE id = '".$id."'";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}

	function listcat()
	{
		$sql = "SELECT * FROM  tbl_product
				WHERE categoryid = '".$id."'";;
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	
	function catproduct($id)
	{
		$sql = "SELECT p.*, im.image from tbl_product p
			    left join  tbl_product_image im ON (im.pid = p.id AND im.baseimage = '1')
				WHERE categoryid = '".$id."'
				order by p.id desc limit 0,4"; 		
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	
	function listcategory()
	{
	
		$query = " SELECT * FROM  tbl_product";
 		$result = $this->db->query($query);
		if($result->num_rows()>0)
		{
			 $res=$result->result(); 				
			return $res;
		}
	}
	
	function product_details($id)
	{
		$sql = "SELECT * FROM  tbl_product  
				WHERE id = '".$id."'";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
	}
	function change()  
	{
 	$this->load->database();
	$this->load->library('form_validation');
	$this->load->library('session');
	if($this->session->userdata('logged_in') == "1")
		{
		$id = $this->session->userdata('userid');
	    $query=$this->db->query("select * from users where id='$id'");

     foreach ($query->result() as $my_info)
	 {
	 $db_password = $my_info->password;
	 $db_id = $my_info->id;
	 }

     if (($this->input->post('coldpwd',$db_password) == $db_password) && ($this->input->post('cnewpwd') != '') && ($this->input->post('cconfpwd')!=''))
	 {
	 $fixed_pw = $this->input->post('cnewpwd');

     $update = $this->db->query("Update users SET password='$fixed_pw' WHERE id='$db_id'")or die(mysql_error());

     $this->form_validation->set_message('change','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Password Updated!</strong></div>');
return false;
     }
   else  
   {
$this->form_validation->set_message('change','<div class="alert alert-error"><a href="#" class="close" data-dismiss="alert">&times;</a>
  <strong>Wrong Old Password!</strong> </div>');

return false;
	}
	}
	} 
	function allrelatedproducts($id){
		$sql = "SELECT * FROM  tbl_product where categoryid = '".$id."' ORDER BY id DESC LIMIT 0,3";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	function page($id)
   	{
		$this->db->where('id = ',$id);
    	$query = $this->db->get('cms');
   		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
   	}
	
	function allproductimg($id)
	{
		
		$sql = "SELECT image from tbl_product_image where  pid = ".$id." order by image_index asc  ";
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	}
	


function getcolorname($id){ 

    $sql = "SELECT * FROM colour WHERE id = ".$id." ";
    $query = $this->db->query($sql);
    if($query->num_rows() > 0)
    {
     $result = $query->row()->colourname;
     return $result;
    }
}

function getproname($id){ 
    $sql = "SELECT * FROM tbl_product WHERE id = ".$id." ";
    $query = $this->db->query($sql);
    if($query->num_rows() > 0)
    {
     $result = $query->row()->pname;
     return $result;
    }
} 

function getusername($id){ 
    $sql = "SELECT * FROM users WHERE id = ".$id." ";
    $query = $this->db->query($sql);
    if($query->num_rows() > 0)
    {
     $result = $query->row()->username;
     return $result;
    }
} 

function allimagenew($id)
{
		$sql = "SELECT * FROM tbl_style_image where style_id = '".$id."' ";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
} 
function productimages($id)
{
		$sql = "SELECT * FROM tbl_product_image where pid = '".$id."' ";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
} 
 
function allimage($id)
	{
		$sql = "SELECT * FROM tbl_product_image where pid = '".$id."' ";
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}
	} 
	
	function add_wishlist($data) 
	{

		$contant['userid']  = $data['userid'];
		$contant['pid']  = $data['pid'];
		$contant['added_date'] = $data['added_date'];
		$contant['style_id'] = $data['style_id'];
		
		$this->_data = $data;
		if ($this->db->insert('wishlist', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	function all_address()
     {
 
  $sql = "SELECT * FROM shipping_address where user_id = '".$this->session->userdata('userid')."' order by id DESC limit 0,3";

     $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->result();

     } else {

      return false;

     }

    }
	
	function allcurrency()
     {
 
  $sql = "SELECT * FROM  currency order by id DESC";

     $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->result();

     } else {

      return false;

     }

    }
	
	
	function currency_inc_default_val()
     {
 
  $sql = "SELECT * FROM  currency where `currency_code` = '".$this->session->userdata('currencycode')."' order by id DESC ";

     $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->row();

     } else {

      return false;

     }

    }
	
function getadd($user_id)
     {
 
	  $sql = "SELECT * FROM shipping_address where id = '".$user_id."'";
      $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->row(); 

     } else {

      return false;

     }

    }

  function deafaultadd()
     {
 
  $sql = "SELECT * FROM shipping_address where user_id = '".$this->session->userdata('userid')."'  AND Status = '1' order by id desc";

     $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->row();

     } else {

      return false;

     }
    }
	function thisproductreview()
     {
	$sql = "SELECT * FROM product_review order by id DESC limit 0,10";
     $query = $this->db->query($sql);
	if ($query->num_rows() > 0) {
      return $query->result();
     } else {
      return false;
     }
    }
	function user_mail_exist($content)
	{
		$mail = $content['email'];
	    
		$this->db->where('email = ',$mail);
    	$query = $this->db->get('users');
   		
		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
	}
	function user_mail_exist1($uid)
	{
		 
	    
		$this->db->where('id = ',$uid);
    	$query = $this->db->get('users');
   		
		if ($query->num_rows() > 0)	{
   			$result = $query->row();
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


  function addsubsciber($email,$name = '') 
	{
		$L_strErrorMessage='';
		$data['email'] = $email;
		$data['name'] = $name;
	
		$this->_data = $data;
		if ($this->db->insert('subscriber', $this->_data))	
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}

	function checksubscriber($email)
     {
 
	  $sql = "SELECT * FROM subscriber where email = '".$email."'";
      $query = $this->db->query($sql);

  if ($query->num_rows() > 0) {

      return $query->row(); 

     } else {

      return false;

     }

    }
	 function affiliatecontent()
	{
		$id = '1';
		$sql = "SELECT p.* FROM  systems p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->affliliatecontent ;
			return $result;
		}
	}
	 function getaffiliatecode()
	{
		$id = $this->session->userdata('userid');
		$sql = "SELECT p.* FROM  users p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row()->aff_code ;
			return $result;
		}
	}
	
	function affiliate_content(){
		$sql = "SELECT * from cms where id = '11'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->content;
			return $result;
		}	
	}
	 function checkgiftdetails($cardnum,$pin){
		 $sql = "SELECT gv.*,g.currency from gift_voucher gv 
		 inner join giftid g ON g.id = gv.giftid
		 WHERE gv.code= '$cardnum' and gv.giftpin = '$pin'"; 
 		 $query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}else{
			return false;
		}	
	 }
	function giftcard_theme(){
		$sql = "SELECT * from giftcard_theme"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}	
	}
	
	function getcurrencyname($id){
		$sql = "SELECT * from  currency where id = '".$id."'"; 
 		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			$result = $query->row()->currency_code;
			return $result;
		}	
	}
	function allbrand()
     {
		$sql = "SELECT * FROM  brand order by id DESC";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
		return $query->result();
			} else {
		return false;
		}
	}
	
	function allfit()
     {
		$sql = "SELECT * FROM  brand_fit order by id DESC";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
		return $query->result();
			} else {
		return false;
		}
	}
	
	function allsize()
     {
		$sql = "SELECT * FROM  brand_size order by id DESC";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
		return $query->result();
			} else {
		return false;
		}
	}
		function makeincont()
	{
		$id = '17';
		$sql = "SELECT p.* FROM  cms p        
 				WHERE p.id = '".$id."'";  
			 				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
 			return $result;
		}
	}
	function passwordupdate($pwd,$uid) {
		 
		$data['password']  = $pwd;
		 
		$this->_data = $data;
		$this->db->where('id',$uid);
		//$this->db->where('email', $email);
		if ($this->db->update('users', $this->_data))	{
			return true;
		} else {
			return false;
		}
	}
	
	function giftcarddefaultvalchg($cuurencyid) {
		 
		$this->db->where('id = ',$cuurencyid);
    	$query = $this->db->get('currency');
   		
		if ($query->num_rows() > 0)	{
   			$result = $query->row();
   			return $result;
   		} else {
   			return false;
   		}
		
	}

	
}
?>