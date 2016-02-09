<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/reset.css">
<!-- CSS reset -->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/style.css">
<link href="<?php echo $base_url_views; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/jasny-bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/lightbox.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/bewear-icons.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/main.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/global.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/style.css">
<!-- link rel="stylesheet" href="<?php echo $base_url_views; ?>css/typicons.css" -->
<!-- Resource style -->
<script src="<?php echo $base_url_views; ?>newheader/js/modernizr.js"></script><!-- Modernizr -->
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>newheader/css/jPushMenu.css" />
<title>Stylior</title>
</head>
<body>
<?php
if($this->session->userdata('currencyvalue') == '')	
{
		$this->session->set_userdata('currencyvalue','1');
		$this->session->set_userdata('currencysymbol','Rs');		
		$this->session->set_userdata('currencycode','INR');		
} 
?>
<script>
		function changecurrency(val){
			//alert(val);
			jQuery.ajax({  
			type: 'POST', 
			url: '<?php echo $base_url;?>home/changecurrency',  
			data: "val="+val,  
			success:
				function(result)
				{	
					window.location.reload();  
				}    
			}); 
		}
		
	function removesproduct(id)
	{
		 
		var t = confirm('Are you sure you want to remove product from cart?');
		if(t)
				{
					window.location.href= '<?php echo $base_url;?>cart/removeproduct/'+id;
					return true; 
				}
			else {
			return false;
		}
	}
</script>
<?php $systemsvaribale = $this->footer->systemsvaribale(); ?>
<span id="howitworks" style="display:none;    text-align: center;
    background-color: rgb(33, 171, 246);
    width: 100%;">
<p><span onClick="$('#howitworks').slideUp();$('.highlight-content').show();" style="color: #007a87;
    position: absolute;
    right: 25px;
    top: 25px;
    opacity: 0.6;">X</span></p>
<img src="<?php echo $base_url_views; ?>images/howitworks.png" />
</span>

<div class="highlight-content">
	<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-high">
<span> <?php echo $systemsvaribale->one_rs_reward; ?> </span>
</div>

<span id="howitworks" style="display:none;    text-align: center;
    background-color: rgb(33, 171, 246);
    width: 100%;">
<p><span onClick="$('#howitworks').slideUp();" style="    color: #007a87;
    position: absolute;
    right: 25px;
    top: 25px;
    opacity: 0.6;">X</span></p>
<img src="<?php echo $base_url_views; ?>images/howitworks.png" />
</span>

<header class="cd-main-header">
  <ul class="top-links">

	<?php if($this->session->userdata('userid') == "") { ?>
		<li><a href="<?php echo $base_url; ?>sign-in">Sign in</a></li>
		<li><a href="<?php echo $base_url; ?>insider-signin">Insider</a></li>
	<?php } else { ?>
		<li><a href="<?php echo $base_url;?>account">My Account</a></li>
		<li><a href="<?php echo $base_url;?>home/logout">Logout</a></li>	
	<?php } ?>

    <li><a href="#" class="country"><?php if($this->session->userdata('currencycode') == "EUR") { echo "EUR "; ?> <img src="<?php echo $base_url_views; ?>newheader/img/eur-flag.jpg" /> <?php  }?> 
									<?php if($this->session->userdata('currencycode') == "INR") { echo "INR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-india.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "AED") { echo "AED"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/aed-flag.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "AUD") { echo "AUD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/aud-flag.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "USD") { echo "USD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "BHD") { echo "BHD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/bhd-flag.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "SAR") { echo "SAR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/sar-flag.jpg" /> <?php }?>
									<?php if($this->session->userdata('currencycode') == "QAR") { echo "QAR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/qar-flag.jpg" /> <?php }?></a></li>
    <li><a href="#" class="toggle-menu menu-right push-body cart-icon cart-click"><span>Bag</span><span class="cart-quantity"><?php echo $this->cart->total_items(); ?></span></a></li>
  </ul>
  <div class="line-holder">
    <div class="line left-line"></div>
    <div class="line right-line"></div>
  </div>
  <a class="cd-logo" href="<?php echo $base_url; ?>"><img src="<?php echo $base_url_views; ?>newheader/img/foot-logo-img.png" alt="Logo"></a>
  <ul class="cd-header-buttons">
    <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
    <li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
  </ul>
  <!-- cd-header-buttons --> 
</header>
<!-- main class="cd-main-content"> 
</main -->
<div class="cd-overlay"></div>
<nav class="cd-nav">
  <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
 <?php
					$allcategory = $this->footer->allcategory();
					if($allcategory != '' && count($allcategory) > 0) {
					foreach($allcategory as $cat)
					{
					$allsubcategory = $this->footer->allsubcategory($cat->id);
	?>
    <li class="has-children"> <a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl ;?>"><?php echo $cat->cname; ?></a>
      <ul class="cd-secondary-nav is-hidden">
        <!-- li class="go-back"><a href="#0">Menu</a></li>
        <li class="see-all"><a href="#">All Clothing</a></li -->
        <li class="has-children"> <a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl;?>"><?php echo $cat->cname; ?></a>
          <ul class="is-hidden">
			  <?php if($allsubcategory != '' && count($allsubcategory) > 0) {
					foreach($allsubcategory as $cats) { ?>
						<li><a onclick="callpopup('<?php echo $cats->id; ?>');" href="javascript:void(0);"><?php echo $cats->scname; ?></a></li>
			  <?php } } ?>	
		  </ul>
        </li>
        <!-- li class="has-children"> <a href="#">Bottoms</a>
          <ul class="is-hidden">
            <li class="go-back"><a href="#0">Clothing</a></li>
            <li class="see-all"><a href="#">All Bottoms</a></li>
            <li><a href="#">Casual Trousers</a></li>
            <li class="has-children"> <a href="#0">Jeans</a>
              <ul class="is-hidden">
                <li class="go-back"><a href="#0">Bottoms</a></li>
                <li class="see-all"><a href="#">All Jeans</a></li>
                <li><a href="#">Ripped</a></li>
                <li><a href="#">Skinny</a></li>
                <li><a href="#">Slim</a></li>
                <li><a href="#">Straight</a></li>
              </ul>
            </li>
            <li><a href="#0">Leggings</a></li>
            <li><a href="#0">Shorts</a></li>
          </ul>
        </li>
        <li class="has-children"> <a href="#">Jackets</a>
          <ul class="is-hidden">
            <li class="go-back"><a href="#0">Clothing</a></li>
            <li class="see-all"><a href="#">All Jackets</a></li>
            <li><a href="#">Blazers</a></li>
            <li><a href="#">Bomber jackets</a></li>
            <li><a href="#">Denim Jackets</a></li>
            <li><a href="#">Duffle Coats</a></li>
            <li><a href="#">Leather Jackets</a></li>
            <li><a href="#">Parkas</a></li>
          </ul>
        </li>
        <li class="has-children"> <a href="#">Tops</a>
          <ul class="is-hidden">
            <li class="go-back"><a href="#0">Clothing</a></li>
            <li class="see-all"><a href="#">All Tops</a></li>
            <li><a href="#">Cardigans</a></li>
            <li><a href="#">Coats</a></li>
            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
            <li><a href="#">Jumpers</a></li>
            <li><a href="#">Polo Shirts</a></li>
            <li><a href="#">Shirts</a></li>
            <li class="has-children"> <a href="#0">T-Shirts</a>
              <ul class="is-hidden">
                <li class="go-back"><a href="#0">Tops</a></li>
                <li class="see-all"><a href="#">All T-shirts</a></li>
                <li><a href="#">Plain</a></li>
                <li><a href="#">Print</a></li>
                <li><a href="#">Striped</a></li>
                <li><a href="#">Long sleeved</a></li>
              </ul>
            </li>
            <li><a href="#">Vests</a></li>
          </ul>
        </li -->
      </ul>
    </li>

	<?php }} ?>
    <!-- li class="has-children"> <a href="#">Gallery</a>
      <ul class="cd-nav-gallery is-hidden">
        <li class="go-back"><a href="#0">Menu</a></li>
        <li class="see-all"><a href="#">Browse Gallery</a></li>
        <li> <a class="cd-nav-item" href="#"> <img src="<?php echo $base_url_views; ?>newheader/img/img.jpg" alt="Product Image">
          <h3>Product #1</h3>
          </a> </li>
        <li> <a class="cd-nav-item" href="#"> <img src="<?php echo $base_url_views; ?>newheader/img/img.jpg" alt="Product Image">
          <h3>Product #2</h3>
          </a> </li>
        <li> <a class="cd-nav-item" href="#"> <img src="<?php echo $base_url_views; ?>newheader/img/img.jpg" alt="Product Image">
          <h3>Product #3</h3>
          </a> </li>
        <li> <a class="cd-nav-item" href="#"> <img src="<?php echo $base_url_views; ?>newheader/img/img.jpg" alt="Product Image">
          <h3>Product #4</h3>
          </a> </li>
      </ul>
    </li -->
    <!-- li class="has-children"> <a href="#">Services</a>
      <ul class="cd-nav-icons is-hidden">
        <li class="go-back"><a href="#0">Menu</a></li>
        <li class="see-all"><a href="#">Browse Services</a></li>
        <li> <a class="cd-nav-item item-1" href="#">
          <h3>Service #1</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-2" href="#">
          <h3>Service #2</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-3" href="#">
          <h3>Service #3</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-4" href="#">
          <h3>Service #4</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-5" href="#">
          <h3>Service #5</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-6" href="#">
          <h3>Service #6</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-7" href="#">
          <h3>Service #7</h3>
          <p>This is the item description</p>
          </a> </li>
        <li> <a class="cd-nav-item item-8" href="#">
          <h3>Service #8</h3>
          <p>This is the item description</p>
          </a> </li>
      </ul>
    </li-->
    <li><a href="#">Lookbook</a></li>
  </ul>
  <!-- primary-nav --> 
</nav>
<!-- cd-nav -->

<div id="cd-search" class="cd-search">
  <form action="<?php echo $base_url; ?>home/lists/" method="get" >
    <input type="search" id="search" name="search"  placeholder="Search...">
  </form>
</div>
<div id="cd-shadow-layer"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
  <h3><a href="#" class="continue-shop">CONTINUE SHOPPING</a></h3>
  <div class="cart-product">
    <form method="post" action="/checkout/cart/updatePost" id="sliding-cart-form">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
		      <?php 
				if($this->cart->total_items() > 0) { 
				 $i = 1;
				foreach($this->cart->contents() as $items)  
				{
					//print_r($items);
					$proits =  $this->footer->prod($items['id']);
					//print_r($proits);
					//echo $proits->image;
				 
				?> 
				<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
          <tr id="product_block" class="product_block_26636">
            <td><a href="<?php echo $base_url;?>home/details/<?php echo $proits->id; ?>" title="" class="product-image"><img width="75" height="75" src="<?php echo $http_host;?>/upload/allstyle/<?php echo $proits->image; ?>" ></a></td>
            <td class="product_detail"><a href="<?php echo $base_url;?>home/details/<?php echo $proits->id; ?>"><span class="product-name"><?php echo $items['name']; ?></span></a><br>
             
			 </td>
            <td class="last_col"><span> <a onClick="removesproduct('<?php echo $items['rowid'];?>');" ><img title="Remove item" src="<?php echo $base_url_views; ?>newheader/img/close.png"></a> <br>
              <span class="price_block"><span class="price">Rs. <?php echo $items['price']; ?></span></span> </span></td>
          </tr>
				<?php $i++; }   } else { ?>
					  <tr id="product_block" class="product_block_26636">
							<td  class="product-name" align="center" style="font-size:12px;">Your Shopping Cart Is Empty.</td>
					   </tr>
				<?php } ?>
         
          
        </tbody>
      </table>
    </form>
  </div>
  
  
  
  <div class="shopping-cart-totals">
    <div style="display: none;" class="mastertooltiplightbox"> <span id="mastertooltiplightboxclose">X</span>
      <p>Shipping charge of Rs.50 will apply for orders below Rs.500</p>
    </div>
    <table id="shopping-cart-totals-table" cellspacing="10px" cellpadding="10px">
      <tbody>
        <tr>
          <td class="co-left">Subtotal :</td>
          <td class="co-right"><span class="price">Rs.<?php echo $this->cart->total(); ?></span></td>
        </tr>
        <tr>
          <td class="co-left">Shipping <span style="cursor: pointer;" id="showShippingMessage">	</span>:</td>
          <td class="co-right"> Free </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr class="total">
          <td class="co-left">Order Total :</td>
          <td class="co-right"><span class="price">Rs. <?php echo $this->cart->total();?> </span></td>
        </tr>
      </tbody>
    </table>
    <div class="checkout-box" ><a href="<?php echo $base_url;?>cart/viewcart"> <span>CHECKOUT </span></a></div>
  </div>
  
  
</nav>

<!--popup-->

	<div class="destination-list">
		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<h2>Select Your Currency</h2>
        <div class="scroll-area">
		<div class="destination-list-group">
             <ul>
            	<li><a href="javascript:void(0);" onClick="changecurrency('USD');"><img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> USD</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('BHD');"><img src="<?php echo $base_url_views; ?>newheader/img/bhd-flag.jpg" />  BHD</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('SAR');"><img src="<?php echo $base_url_views; ?>newheader/img/sar-flag.jpg" />  SAR</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('QAR');"><img src="<?php echo $base_url_views; ?>newheader/img/qar-flag.jpg" />  QAR</a></li>
             </ul>
        </div>
        <div class="destination-list-group">
             <ul>
            	<li><a href="javascript:void(0);" onClick="changecurrency('EUR');"><img src="<?php echo $base_url_views; ?>newheader/img/eur-flag.jpg" /> EUR</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('INR');"><img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-india.jpg" /> INR</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('AED');"><img src="<?php echo $base_url_views; ?>newheader/img/aed-flag.jpg" /> AED</a></li>
                <li><a href="javascript:void(0);" onClick="changecurrency('AUD');"><img src="<?php echo $base_url_views; ?>newheader/img/aud-flag.jpg" /> AUD</a></li>
             </ul>
        </div>
		<p style="text-align:left; font-size:16px; line-height:20px;">
		CAN&#39;T FIND YOUR SHIPPING DESTINATION ? <br />
		Shop our United States store and ship almost anywhere in the world. </p>
		<p style="text-align:left; font-size:16px; line-height:20px; border:#333 solid 1px; width:180px; padding-top:5px; text-align:justify;">
		 &nbsp; <a href="#" onClick="#"><img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> &nbsp; Ship From the U.S. </a><br /><br /></p>
		<p style="text-align:left; font-size:13px; line-height:20px; text-align:justify;">
		This site may store or access information on the device you are using to view it, including by using cookies to make advertising on the site and elsewhere more relevant to you. Please see our Cookie Policy for further details. By continuing to use this site you agree to this policy.
		</p>
        </div>
	</div>

	<div class="destination-list1" style="display:none;">
		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<p style="text-align:center; font-size:18px; line-height:35px; color:#fff;">You can now choose the exclusive desings created by our Stylists. <br />
OR <br />
Be your own designer and customize your shirt !</i></p>
		<!-- h2>Select Your Choice</h2 -->
<div class="shop-btn">
		<a href="javascript:void(0);" onclick="designproducts();"><img src="<?php echo $base_url_views; ?>newheader/img/DESIGNSTORE_BUTTON.png" /> </a>
		<a href="javascript:void(0);" onclick="customizeproducts();"><img src="<?php echo $base_url_views; ?>newheader/img/CUSTOMIZE_BUTTON.png" /> </a>
				
</div>
<div class="shop-btn">
	<img src="<?php echo $base_url_views; ?>newheader/img/CUSTOM & READY MADE.png" />
</div>

<input type="hidden" value="" id="typeofproducts" name="typeofproducts" />
</div>

	<?php $homepage = $this->footer->homepagepopup(); 
	if($homepage->active == '1') {
	?>
	<div class="homepagepopup">
 		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
 		<?php echo $homepage->text; ?>
		<p><img src="<?php echo $http_host; ?>/upload/<?php echo $homepage->image; ?>" height="400" width="550" ></p>
		<form action="" method="post"> 
                                       	<!--view-account-details ends-->                                		
                                    	<div class="form-row">
                                       	  <label for="Name">Name *</label>
                                       	  <div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="Name" value="Lorem Ipsum">
                                          </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="Email" value="test@test.com ">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        
                              <div class="form-row">
                                        <input type="submit" value="Submit" class="submit-button">
                                        
                                        
                                      </div>
                                   		<!--form-row ends-->
                                    
                                    
                                    </form>
	</div>
	<?php 
	} ?>

<!--popup ends-->
<script>
	function callpopup(id){
		 $('.destination-list1').animate({top:'15%'}, 'slow').show();
		 $('#cd-shadow-layer').toggle();
		 $('#typeofproducts').val(id);
	}

 	function designproducts(){
		var val = $('#typeofproducts').val();
		window.location.href = '<?php echo $base_url; ?>home/lists/?sub_cat='+val;
	}

	function customizeproducts(){
		<?php if($this->session->userdata('userid') == '') { ?>
			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $base_url; ?>home/d3login/'+val;
		<?php } else { ?>
			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $http_host; ?>/3dshirt?id='+val;
		<?php } ?>
	}
</script>
