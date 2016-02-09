<?php
//session_start();
$front_base_url = $this->config->item('front_base_url');
$base_url 		= $this->config->item('base_url');
$http_host 		= $this->config->item('http_host');
$base_url_views = $this->config->item('base_url_views');
$base_upload = $this->config->item('upload');
$live_base_url = $this->config->item('live_base_url');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stylior</title>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>css/style1.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>css/font-icons/entypo/css/entypo.css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.7.2.min.js"></script>
<script src="<?php echo $base_url_views; ?>js/bootstrap.js"></script>	

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script>
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keycode
		if(charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
		
		return true;
	}
</script>
</head>
<body>

<header class="Menu">
<?php $admin = $this->session->userdata('username');?>
<div class="row">
 <div class="col-6 col-sm-6 col-lg-9">
        <div class="logo"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url_views; ?>images/logo.png" alt=""/></a></div>
      </div>
     <div class="col-6 col-sm-6 col-lg-3">
      <div class="right-menu">
      <div class="welcome"><a title="" href="<?php echo $base_url;?>home"><img alt="" src="<?php echo $base_url_views; ?>images/userPic.png"><span><?php echo ucfirst($admin); ?>!</span>
    </a>
      </div>
       <div class="welcome">
      <a title="" href="<?php echo $base_url;?>welcome/logout"><img alt="" src="<?php echo $base_url_views; ?>images/logout.png" ><span>Log Out</span></a>
      </div>
       </div>
      </div>
    </div>
 
<?php $menu = $this->uri->segment(1); ?>
<div style="width:auto;" >	
<a class="toggleMenu" href="#">
<img src="<?php echo $base_url_views; ?>images/menu-button.png" alt=""/>
</a>
<ul class="nav">

		<li class="none">
			<a href="<?php echo $base_url;?>home"  <?php if($menu == 'home') {?>class="active"<?php } ?>>Dashboard</a>
		</li>
		
		<?php
			if($this->session->userdata('adminId') !='')
			{
			$uid = $this->session->userdata('adminId');
			$getuser['data'] = $this->footer->getuser($uid);
			$category = $getuser['data'][0]->ucategory;
			$usercategory = $this->footer->usercategory($category);
			$permission1=$usercategory[0]->permission;
			$permission1 = explode(',',$permission1);
		//print_r($permission1);die;
		?>
			
		<li>
			<a <?php if
			(	$this->uri->segment(1) == 'category' && $this->uri->segment(2) == 'lists' 
			||	$this->uri->segment(1) == 'subcategory' && $this->uri->segment(2) == 'lists' 
			 
			 
			||	$this->uri->segment(1) == 'newfabric' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'cms' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'attribute' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'colour' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'fonts' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'placements' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'design' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'banner' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'bodymeasure' && $this->uri->segment(2) == 'lists'
				
			) { ?> class="active" <?php } ?> href="#">Masters</a>
			<ul>
			 	<?php if(in_array('10',$permission1)){ ?>
				<li>
					<a  href="<?php echo $base_url;?>category/lists">Category</a>
				</li>
				<?php } ?>
				 
				 <?php if(in_array('11',$permission1)){ ?>
				<li >
				<a href="<?php echo $base_url;?>subcategory/lists">SubCategory</a>
				</li>
				<?php } ?>
				
				<?php if(in_array('14',$permission1)){ ?>
					<li >
					<a href="<?php echo $base_url;?>newfabric/lists">Fabrics</a>
				</li>
				<?php } ?>
				<?php if(in_array('22',$permission1)){ ?>
				<li >
					<a href="<?php echo $base_url;?>bodymeasure/lists">Body Measures</a>
				</li>
				<?php } ?>
				
				<!-- <?php if(in_array('16',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>attribute/lists">Size</a>
				</li>
				 <?php } ?> -->

				<?php if(in_array('17',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>colour/lists">Color</a>
				</li>
				 <?php } ?>
				<?php if(in_array('18',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>fonts/lists">Fonts</a>
				</li>
				 <?php } ?>
				<?php if(in_array('19',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>placements/lists">Placements</a>
				</li>
				 <?php } ?>
				<?php if(in_array('20',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>design/lists">Patterns</a>
				</li>
				<?php } ?>
			</ul>
		</li>
		 
		<?php if(in_array('2',$permission1)){ ?>
			<li>
				<a <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(2) == 'list_user' || $this->uri->segment(1) == 'permission' && $this->uri->segment(2) == 'list_permission') {?>class="active"<?php } ?>href="#">Admin</a>
				<ul>	
					<?php if(in_array('12',$permission1)){ ?>
					<li>
						<a href="<?php echo $base_url;?>permission/list_permission">User Permissions</a>
					</li>
					<?php } ?>
						<?php if(in_array('25',$permission1)){ ?>
					<li>
						<a href="<?php echo $base_url;?>users/list_user">Admin Users</a>
					</li>
					<?php } ?>
					
				</ul>
 			</li>
		<?php } ?>
		
		<?php if(in_array('3',$permission1)){ ?>
			<li>
				<a <?php if($this->uri->segment(1) == 'product' && $this->uri->segment(2) == 'lists' || $this->uri->segment(1) == 'fabric' && $this->uri->segment(2) == 'lists'){?>class="active"<?php } ?> href="#">Products
 				</a>
				<ul>
					<?php if(in_array('13',$permission1)){ ?>
					<li >
						<a href="<?php echo $base_url;?>fabric/lists">Style Masters</a>
					</li>
					<?php } ?>

					<?php if(in_array('3',$permission1)){ ?>
					<li>
						<a href="<?php echo $base_url;?>product/lists">Product Masters</a>
					</li>
					<?php } ?>
					
				</ul>
			</li>
		<?php } ?>
		 
		<?php if(in_array('4',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'reguser' && $this->uri->segment(2) == 'lists' ){?>class="active"<?php } ?>  href="<?php echo $base_url;?>reguser/lists">Customers</a>
		</li>
		<?php } ?>
		
		 
		
		
			<?php if(in_array('5',$permission1)){ ?>
			<li>
				<a <?php 
				if($this->uri->segment(1) == 'status' && $this->uri->segment(2) == 'lists' || 
				$this->uri->segment(1) == 'return_product' && $this->uri->segment(2) == 'lists'
				|| 
				$this->uri->segment(1) == 'product' && $this->uri->segment(2) == 'order_manage'
				){?>class="active"<?php } ?> href="#">Order Master
 				</a>
				<ul>
				
				<?php if(in_array('5',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'product' && $this->uri->segment(2) == 'order_manage' ){?>class="active"<?php } ?>  href="<?php echo $base_url;?>product/order_manage">Order Management</a>
		</li>	
		<?php } ?>
		
					<?php if(in_array('37',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>status/lists">Staus master</a>
				</li>
				<?php } ?>
				
				<?php if(in_array('38',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>return_product/lists">Return Product</a>
				</li>
				<?php } ?>
					
				</ul>
			</li>
		<?php } ?>
		
		
		<?php if(in_array('6',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'coupan' && $this->uri->segment(2) == 'lists' ){?>class="active"<?php } ?> href="<?php echo $base_url;?>coupan/lists">Coupon</a>
		</li> 
		<?php } ?>
		
		
		
		<?php   if(in_array('8',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'order' && $this->uri->segment(2) == 'reports' || $this->uri->segment(1) == 'order' && $this->uri->segment(2) == 'users' ){?> class="active" <?php } ?> href="<?php echo $base_url;?>order/reports" class="parent">Reports</a>
			<ul>	
				<li>
					<a href="<?php echo $base_url;?>order/reports">Order Reports</a>
				</li>
				<li>
					<a href="<?php echo $base_url;?>order/users">Customers</a>
				</li>
				<li>
					<a href="<?php echo $base_url;?>order/can_order_reports">Cancel Order Reports</a>
				</li>
				<li>
					<a href="<?php echo $base_url;?>order/pen_order_reports">Pending Order Reports</a>
				</li>
			</ul>
 		</li> 
		<?php } ?>
	
		<li>
		<a <?php if($this->uri->segment(1) == 'cms' && $this->uri->segment(2) == 'lists' || $this->uri->segment(1) == 'banner' && $this->uri->segment(2)=='lists'|| $this->uri->segment(1) == 'popup' && $this->uri->segment(2)=='edit' ){?>class="active"<?php } ?> href="#" class="parent"> CMS
			</a> <ul>
				<?php if(in_array('15',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>cms/lists">Static Pages</a>
				</li>
                <?php } ?>
				<?php if(in_array('21',$permission1)){ ?>
					<li>
					<a href="<?php echo $base_url;?>banner/lists">Home Banner</a>
					</li>
				<?php } ?>
				<?php if(in_array('26',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>popup/edit/1">Home Popup</a>
				</li>
				<?php } ?>
			</ul>
		
		</li> 
		
		<li>
		<a <?php 
		if($this->uri->segment(1) == 'xlsdata' && $this->uri->segment(2) == 'lists'
		|| $this->uri->segment(1) == 'template' && $this->uri->segment(2) == 'edit'
		|| $this->uri->segment(1) == 'email' && $this->uri->segment(2) == 'sendemail'
		|| $this->uri->segment(1) == 'courier' && $this->uri->segment(2) == 'lists'
		|| $this->uri->segment(1) == 'wallet' && $this->uri->segment(2) == 'edit'
		|| $this->uri->segment(1) == 'review' && $this->uri->segment(2) == 'lists'
		|| $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'subscriber'
		|| $this->uri->segment(1) == 'coupan' && $this->uri->segment(2) == 'lists_voucher'
		 
		 
		)
		
		{?> class="active" <?php } ?> href="#">Systems</a>
			<ul>	
				<?php   if(in_array('9',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>xlsdata/lists">Zip Upload</a>
				</li>
				<?php } ?>

				<?php   if(in_array('23',$permission1)){ ?>
				<li>
					<a  href="<?php echo $base_url;?>template/edit/1">Email Template</a>
				</li>
				<?php } ?>
				<?php if(in_array('7',$permission1)){ ?>
				<li>
				<a   href="<?php echo $base_url;?>email/sendemail">Emailer</a>
				</li> 
				<?php } ?>
				
				<?php if(in_array('27',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>wallet/edit/1">Systems Variables</a>
				</li>
				<?php } ?> 
				
			
				
				<?php if(in_array('35',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>review/lists">Review</a>
				</li>
				<?php } ?>
				<?php if(in_array('36',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>home/subscriber">Subscriber</a>
				</li>
				<?php } ?>
				
				
				
				<?php if(in_array('39',$permission1)){ ?>
				<li>
				<a href="<?php echo $base_url;?>coupan/lists_voucher">Gift Voucher</a>
				<?php } ?>
				</li>
			</ul>
		
		</li> 
		
		<li>
			<a  href="#" <?php 	if($this->uri->segment(1) == 'topics' && $this->uri->segment(2) == 'lists'
				|| $this->uri->segment(1) == 'insider_user' && $this->uri->segment(2) == 'edit'
				|| $this->uri->segment(1) == 'insider_message' && $this->uri->segment(2) == 'edit'
				|| $this->uri->segment(1) == 'wallet' && $this->uri->segment(2) == 'insider')
			{?> class="active" <?php } ?> >Insider Program</a>
			<ul>
				<li>
				<?php if(in_array('31',$permission1)){ ?>
					<a  href="<?php echo $base_url;?>topics/lists">Topics</a>
					<?php } ?> 
				<?php if(in_array('33',$permission1)){ ?>
					<a  href="<?php echo $base_url;?>insider_user/lists">User</a>
					<?php } ?> 
				<?php if(in_array('34',$permission1)){ ?>
					<a  href="<?php echo $base_url;?>insider_message/lists">Message</a>
					<?php } ?> 
				 
				</li>
					<?php if(in_array('40',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>wallet/insider/1">Insider Cont.</a>
				</li>
				<?php } ?> 
			</ul>
		</li>

		<li>
			<a  href="#">Shipping</a>
			<ul>
 				<?php if(in_array('28',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>country/lists">Country</a>
				</li>
				<?php } ?> 
				<?php if(in_array('24',$permission1)){ ?>
					<li><a href="<?php echo $base_url;?>courier/lists"> Courier</a> </li>	
				<?php } ?> 

				<?php if(in_array('29',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>flatrate/edit">Flat Rate</a>
				</li>
				<?php } ?> 
				
				<?php if(in_array('30',$permission1)){ ?>
				<li>
					<a href="<?php echo $base_url;?>weightbase/edit">Weight Base</a>
				</li>
				<?php } ?>
			</ul>
		</li>
		
		
		<?php } ?>
 
		<!--li>
		<a href="<?php echo $base_url;?>product/cancelor">Cancel Order</a>
		</li-->

		<!--<li>
		<a href="<?php echo $base_url;?>Rewards/lists">Rewards</a>
		</li>--> 
		 <!--<li>
			<a href="<?php echo $base_url;?>product/inventory">Inventory</a>
	  </li>-->
		
	   <li 
	   <?php if($menu == 'lists') {?>
			class="active"
	  <?php }
	  else
	  {?>
	       class="thes">
	  <?php } ?>
	</ul>
	
</div>

</header>