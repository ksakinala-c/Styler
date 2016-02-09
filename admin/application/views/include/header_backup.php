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
			<?php if(in_array('1',$permission1)){ ?>
		<li>
			<a <?php if
			(	$this->uri->segment(1) == 'category' && $this->uri->segment(2) == 'lists' 
			||	$this->uri->segment(1) == 'subcategory' && $this->uri->segment(2) == 'lists' 
			||	$this->uri->segment(1) == 'permission' && $this->uri->segment(2) == 'list_permission' 
 			||	$this->uri->segment(1) == 'newfabric' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'cms' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'attribute' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'colour' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'fonts' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'placements' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'design' && $this->uri->segment(2) == 'lists'
			||	$this->uri->segment(1) == 'banner' && $this->uri->segment(2) == 'lists'
				
			) { ?> class="active" <?php } ?> href="#">Masters</a>
			<ul>
				
				<li >
				<a  href="<?php echo $base_url;?>category/lists">Category</a>
				</li>
				 
				<li >
				<a href="<?php echo $base_url;?>subcategory/lists">SubCategory</a>
				</li>
				
				<li >
				<a href="<?php echo $base_url;?>permission/list_permission">Role Definition</a>
				</li>
				
		
					<li >
					<a href="<?php echo $base_url;?>newfabric/lists">Material</a>
				</li>
				
			
				<li>
				<a href="<?php echo $base_url;?>attribute/lists">Size</a>
				</li>
				<li>
				<a href="<?php echo $base_url;?>colour/lists">Color</a>
				</li>
				
				<li>
				<a href="<?php echo $base_url;?>fonts/lists">Fonts</a>
				</li>
				
				<li>
				<a href="<?php echo $base_url;?>placements/lists">Placements</a>
				</li>
				
				<li>
				<a href="<?php echo $base_url;?>design/lists">Design</a>
				</li>
				
				<li>
				<a href="<?php echo $base_url;?>banner/lists">Banner</a>
				</li>
				
				
			</ul>
		</li>
			<?php } ?>
        <?php /*
		<li>
			<a>Attribut Masters</a>
			<ul>
				<li>
					<a href="<?php echo $base_url;?>attribute/lists">Attribute</a>
				</li>
				<li>
					<a href="<?php echo $base_url;?>product_attribute/lists">Product Attribute</a>
				</li>
			</ul>
		</li> */ ?>
		<?php  ?>
		<li >
			<a <?php if($this->uri->segment(1) == 'fabric') { ?> class="active" <?php } ?> href="<?php echo $base_url;?>fabric/lists">Style Masters</a>
		</li>
		 
		<?php if(in_array('2',$permission1)){ ?>
			<li>
				<a <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(2) == 'list_user' ) {?>class="active"<?php } ?> href="<?php echo $base_url;?>users/list_user">Admin Users</a>
			</li>
		<?php } ?>
		
		<?php if(in_array('3',$permission1)){ ?>
			<li>
			<a <?php if($this->uri->segment(1) == 'product' && $this->uri->segment(2) == 'lists' ){?>class="active"<?php } ?> href="<?php echo $base_url;?>product/lists">Product</a>
			</li>
		<?php } ?>
		 
		<?php if(in_array('4',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'reguser' && $this->uri->segment(2) == 'lists' ){?>class="active"<?php } ?>  href="<?php echo $base_url;?>reguser/lists">Manage User</a>
		</li>
		<?php } ?>
		<?php if(in_array('5',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'product' && $this->uri->segment(2) == 'order_manage' ){?>class="active"<?php } ?>  href="<?php echo $base_url;?>product/order_manage">Order Management</a>
		</li>	
		<?php } ?>
		<?php if(in_array('6',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'coupan' && $this->uri->segment(2) == 'lists' ){?>class="active"<?php } ?> href="<?php echo $base_url;?>coupan/lists">Coupon</a>
		</li> 
		<?php } ?>
		
		<?php if(in_array('7',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'email' && $this->uri->segment(2) == 'sendemail' ){?>class="active"<?php } ?> href="<?php echo $base_url;?>email/sendemail">Emailer</a>
		</li> 
		<?php } ?>
		
		<?php   if(in_array('8',$permission1)){ ?>
		<li>
		<a <?php if($this->uri->segment(1) == 'order' && $this->uri->segment(2) == 'reports' ){?>class="active"<?php } ?> href="<?php echo $base_url;?>order/reports">Sales Report</a>
		</li> 
		
		<?php } ?>
		<?php   if(in_array('9',$permission1)){ ?>
 		<li>
			<a <?php if($this->uri->segment(1) == 'xlsdata' && $this->uri->segment(2) == 'dataupload') {?>class="active"<?php } ?>  href="<?php echo $base_url;?>xlsdata/dataupload">Data Upload</a>
		</li>
		<?php } ?>
		
		<li>
			<a href="<?php echo $base_url;?>cms/lists">CMS</a>
		</li>
       <?php } ?>
	
 
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