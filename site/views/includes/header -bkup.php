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
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66956406-1', 'auto');
  ga('send', 'pageview');
</script>
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

<?php 
if($this->session->userdata('userid') == '') {

$google_client_id 		= '897653550490-ta8u5385suefep9r6jo2tgu76m1ok23k.apps.googleusercontent.com';
$google_client_secret 	= 'YN_CH-qwcxQ17FKk9pEMVzDn';
$google_redirect_url 	= 'http://www.stylior.com/'; //path to your script
$google_developer_key 	= '';
 
//include google api files
require_once 'site/views/src/Google_Client.php';
require_once 'site/views/src/contrib/Google_Oauth2Service.php';
$this->load->library('session');
 
$gClient = new Google_Client();
$gClient->setApplicationName('Login to stylior.com');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
  unset($_SESSION['token']);
  $gClient->revokeToken();
  header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
}
 
if (isset($_REQUEST['code'])) 
{ 
	$gClient->authenticate($_REQUEST['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
} 
if (isset($_SESSION['token'])) 
{
 	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) 
{
	 
	  //For logged in user, get details from google using access token
	  $user 				= $google_oauthV2->userinfo->get();
 	  $user_id 				= $user['id'];
	  $user_name 			= filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	  $email 				= filter_var($user['email'], FILTER_SANITIZE_EMAIL);
	  $profile_url 			= filter_var($user['link'], FILTER_VALIDATE_URL);
	  $profile_image_url 	= filter_var($user['picture'], FILTER_VALIDATE_URL);
	  $personMarkup 		= "$email<div><img src='$profile_image_url?sz=50'></div>";
	  $_SESSION['token'] 	= $gClient->getAccessToken();
}
else 
{
	//For Guest user, get google login url
	$authUrl = $gClient->createAuthUrl();
}
 
if(isset($authUrl)) //user is not logged in, show login button
{
	//echo '<a class="login" href="'.$authUrl.'"><img src="images/google-login-button.png" /></a>';
} 
else // user logged in 
{
		//	 print_r($email);die;

						  $userdata = $this->user_model->facebooklogin($email);
								 if($userdata != ''){
										$newuserdata = array(
										   'username'  => $userdata->username,
										   'userid'    => $userdata->id,
										   'email'     => $userdata->email,
										   'insider'     => $userdata->insider,
										   'logged_in' => true
										);
										$check = $this->session->set_userdata($newuserdata);

										$_SESSION['username'] = $userdata->username;
										$_SESSION['userid'] = $userdata->id;
										$_SESSION['email'] = $userdata->email;
										$_SESSION['insider'] = $userdata->insider;
										$_SESSION['logged_in'] = true;

										if($this->session->userdata('cstyleid') != '' && $this->session->userdata('prodid') != ''){
											redirect($this->config->item('base_url').'home/measurement/'.$this->session->userdata('cstyleid').'/'.$this->session->userdata('prodid').'', 'location');
										} else {
											redirect($this->config->item('base_url').'', 'location');
										}
								 } else {
									
									$content['email'] = $email;
									$content['name'] = $user_name;
									//$content['mobile'] = $user->mobile;
									$this->user_model->userfacebook($content); 
									$userdata = $this->user_model->facebooklogin($email);
									$newuserdata = array(
										   'username'  => $userdata->username,
										   'userid'    => $userdata->id,
										   'email'     => $userdata->email,
										   'insider'     => $userdata->insider,
										   'logged_in' => true
										);
										$check = $this->session->set_userdata($newuserdata);

										$_SESSION['username'] = $userdata->username;
										$_SESSION['userid'] = $userdata->id;
										$_SESSION['email'] = $userdata->email;
										$_SESSION['insider'] = $userdata->insider;
										$_SESSION['logged_in'] = true;
										if($this->session->userdata('cstyleid') != '' && $this->session->userdata('prodid') != ''){
											redirect($this->config->item('base_url').'home/measurement/'.$this->session->userdata('cstyleid').'/'.$this->session->userdata('prodid').'', 'location');
										} else {
											redirect($this->config->item('base_url').'', 'location');
										}
								}
}
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
<p><span onClick="$('#howitworks').slideUp();$('.highlight-content').show();" style="color: #fff;
    position: absolute;
    right: 15px;
    top: 5px;
    cursor:pointer;">X</span></p>
<img src="<?php echo $base_url_views; ?>images/howitwork.png" />
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
  <span class="cd-logo"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url_views; ?>newheader/img/foot-logo-img.png" onClick="" alt="Logo"></a>
  </span>
  <a></a>
  <ul class="cd-header-buttons">
    <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
    <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
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
	 <li><a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl ;?>"><?php echo $cat->cname; ?></a></li>
		<!-- li class="has-children"> <a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl ;?>"><?php echo $cat->cname; ?></a>
		  <ul class="cd-secondary-nav is-hidden">
			<li class="has-children"> <a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl;?>"><?php echo $cat->cname; ?></a>
			  <ul class="is-hidden">
				  <?php if($allsubcategory != '' && count($allsubcategory) > 0) {
						foreach($allsubcategory as $cats) { ?>
							<li><a onClick="callpopup('<?php echo $cats->id; ?>');" href="javascript:void(0);"><?php echo $cats->scname; ?></a></li>
				  <?php } } ?>	
			  </ul>
			</li>
 		  </ul>
		</li -->
 	<?php }} ?>
    <li><a href="#">Lookbook</a></li>
  </ul>
  <!-- primary-nav --> 
</nav>
<!-- cd-nav -->
<style>
.ui-autocomplete.ui-front.ui-menu.ui-widget.ui-widget-content{position:absolute !important; border:none !important; font-size:13px;}
.ui-widget-content{border:none !important;}
.ui-menu-item{border:none !important; padding:0 5px  0 5px !important;}
</style>
<div id="cd-search" class="cd-search">
  <form action="<?php echo $base_url; ?>home/lists/" method="get" >
    <input type="search" id="search" name="search"  placeholder="Search..." autocomplete="on">
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
  				?> 
				<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
				  <tr id="product_block" class="product_block_26636">
					
					<?php if($items['options']['is_3d'] == '0') { ?>
					
						<td><a href="<?php echo $base_url;?>home/details/<?php echo $proits->id; ?>/<?php echo $items['options']['prodid']; ?>" title="" class="product-image"><img width="75" height="75" src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $proits->image; ?>" ></a></td>
					<?php } else { ?>
						<td><a href="#" title="" class="product-image"><img width="75" height="75" src="<?php echo $http_host;?>/upload/saveprofile/<?php echo $items['options']['imagename']; ?>" ></a></td>
					<?php } ?>

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
		<p style="font-size: 14px; line-height: 20px; text-align: left; padding-top: 170px;">
		CAN&#39;T FIND YOUR CURRENCY ? <br />
		Shop from our United States store and ship almost anywhere in the world! </p>
		<p style="font-size: 16px; border: 1px solid rgb(51, 51, 51); text-align: justify; margin: 0px auto; width: 188px; padding: 12px 0px 0px; line-height: 14px;">
		 &nbsp; <a href="javascript:void(0);" onClick="changecurrency('USD');"><img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> &nbsp; Ship From the U.S. </a><br /><br /></p>
		<!--p style="text-align:left; font-size:13px; line-height:20px; text-align:justify;">
		This site may store or access information on the device you are using to view it, including by using cookies to make advertising on the site and elsewhere more relevant to you. Please see our Cookie Policy for further details. By continuing to use this site you agree to this policy.
		</p-->
        </div>
	</div>

	<div class="destination-list1" style="display:none;">
		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<!--<p style="text-align:center; font-size:18px; line-height:35px; color:#fff;">You can now choose the exclusive desings created by our Stylists. <br />
OR <br />
Be your own designer and customize your shirt !</i></p>
		 h2>Select Your Choice</h2 -->
<div class="shop-btn">
		<a href="javascript:void(0);" onClick="designproducts();"><img src="<?php echo $base_url_views; ?>newheader/img/popupbutton1.png" /> </a>		
		<a href="javascript:void(0);" onClick="customizeproducts();" class="resclass"><img src="<?php echo $base_url_views; ?>newheader/img/popupbutton2.png" /> </a>
				
</div>
<div class="shop-btn">
	<img src="<?php echo $base_url_views; ?>newheader/img/popup.png" />
</div>

<input type="hidden" value="" id="typeofproducts" name="typeofproducts" />
</div>

	<?php $homepage = $this->footer->homepagepopup(); 
	 
	if($homepage->active == '1') {
	?>
	<script>
	function validatesub()
	{
		var fname = $("#fname").val();
		if(fname == '')
		{
			//alert('Please Enter Name.');
			$("#suberror").html('Please Enter Name.');
			return false;
		}
		
 		var newemail = $("#emailsub").val();
		if(newemail == '')
		{
			//alert('Please Enter E-mail.');
			$("#suberror").html('Please Enter E-mail.');
			return false;
		}
        var ema = document.getElementById('emailsub');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(ema.value)) {
            //alert('Please Enter Valid Email Address.');
			$("#suberror").html('Please Enter Valid Email Address.');
            ema.focus;
            return false;
        }
		var url = '<?php echo $base_url ?>home/esubscribe/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'newemail='+newemail+'&name='+fname,
		success:function(msg)
		{
			alert(msg);
			$("#fname").val('');
			$("#emailsub").val('');
			return false
		} 
		});
	}	
</script>
	<div class="homepagepopup" style="display:none;">
 		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
 		<?php echo $homepage->text; ?>
		<?php if($homepage->display == '1') { ?>
			<p>
			<span id="suberror" style="color:red;"></span>
			<form action="#" method="post"> 
                                       	<!--view-account-details ends-->                                		
                                    	<div class="form-row">
                                       	  <label for="Name">Name *</label>
                                       	  <div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="fname" value="">
                                          </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="emailsub" value="">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        
                              <div class="form-row">
                                        <input type="button" onClick="validatesub();" value="Subscribe to Stylior.com" class="submit-button">
                                        
                                        
                                      </div>
                                   		<!--form-row ends-->
                                    
                                    
                                    </form>
		</p>
		<?php } else { ?>
			<p><img src="<?php echo $http_host; ?>/upload/<?php echo $homepage->image; ?>" height="400" width="550" ></p>
		<?php } ?>
 	</div>
	<?php 
	} ?>


<div class="loginpopup" style="display:none;">
 		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<h2>Login With Stylior.com</h2>
		 <p class="inner-intro">
                                Don't have an account?  <a href="<?php echo $base_url; ?>registration">Create one</a>.
                                </p>
  <script>
	function loginvalidate()
	{
		 
		
 		var newemail = $("#loginemail").val();
		if(newemail == '')
		{
			//alert('Please Enter E-mail.');
			$("#suberror1").html('Please Enter E-mail.');
			return false;
		}
        var ema = document.getElementById('loginemail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(ema.value)) {
            //alert('Please Enter Valid Email Address.');
			$("#suberror1").html('Please Enter Valid Email Address.');
            ema.focus;
            return false;
        }

		var newpassword = $("#loginpassword").val();
		if(newpassword == '')
		{
			//alert('Please Enter E-mail.');
			$("#suberror1").html('Please Enter Password.');
			return false;
		}

		var url = '<?php echo $base_url ?>user/ajaxlogin/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'newemail='+newemail+'&newpassword='+newpassword,
		success:function(msg)
		{
			if(msg == '0'){
				$("#suberror1").html('Invalid Email Or Password.');
				return false;	 
			} else {
				window.location.reload();
			}	
			
		} 
		});
	}	
</script>			
			
			<p>
			<span id="suberror1" style="color:red;"></span>
			<form action="#" method="post"> 
			
                                       	<!--view-account-details ends-->                                		
                                    	<div class="form-row">
                                       	  <label for="Name">Email *</label>
                                       	  <div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="loginemail" value="">
                                          </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="loginpassword" value="">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                       <div class="form-row">
                                        	<a href="<?php echo $base_url; ?>reset-password">Forgot Password?</a>
                                        </div>   
                              <div class="form-row">
                                        <input type="button" onClick="loginvalidate();" value="Submit" class="submit-button">
                                       </div>
                                   		<!--form-row ends-->
                                     </form>
		</p>
	 
 	</div>



<!--popup ends-->
<script>
	function callpopup(id){
		 $('.destination-list1').animate({top:'15%'}, 'slow').show();
		 $('#cd-shadow-layer').toggle();
		 $('#typeofproducts').val(id);
	}

	function loginpopup(){
		 $('.loginpopup').animate({top:'15%'}, 'slow').show();
		 $('#cd-shadow-layer').toggle();
	}

 	function designproducts(){
		var val = $('#typeofproducts').val();
		window.location.href = '<?php echo $base_url; ?>home/lists/?sub_cat='+val;
	}
   /*
	function customizeproducts(){
		<?php if($this->session->userdata('userid') == '') { ?>
			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $base_url; ?>home/d3login/'+val;
		<?php } else { ?>
			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $http_host; ?>/3dshirt?id='+val;
		<?php } ?>
	}
   */	
   function customizeproducts(){
 			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $http_host; ?>/3dshirt?id='+val;
   }

   function numbersonly(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keycode
		if(charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
		
		return true;
	}
</script>