<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stylior </title>
    <!-- Bootstrap -->
    <link href="<?php echo $base_url_views; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/lightbox.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/bewear-icons.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $base_url_views; ?>assets/css/main.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href="<?php echo $base_url_views; ?>css/main-pretzel-4ab1c9299beb86cb6b946aef4a0c6056.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="<?php echo $base_url_views; ?>assets/images/favicon.png">-->
    
<!--Add heders css Starts -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet"-->
<!-- link href="heder-css/css.css" rel="stylesheet" type="text/css" -->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/global.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/site.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/accountsection.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/globalV2.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/style.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/typicons.css">
<!--Add heders css Close -->
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
</script>
<style>
.scroll-to-top.show{display:none !important;}
@media only screen and (max-width: 767px) {
.hedeerlogo{width: 102px !important; margin: 9px 0px 0px 36px !important;}
}



</style>    
<ul id="accessibility-nav" class="accessibility">
	<li>
		<a title="Skip to main product navigation" href="#primary-nav">Skip to main product navigation</a>
	</li>
	<li>
		<a title="Skip to utility navigation (account sign up and login, wish list, store locator)" href="#utility-nav">Skip to utility navigation (account sign up and login, wish list, store locator)</a>
	</li>
	<li>
		<a title="Skip to shopping bag summary" href="#mini-cart">Skip to shopping bag summary</a>
	</li>
	<li>
		<a title="Skip to primary content" href="#primary-content">Skip to primary content</a>
	</li>
	<li>
		<a title="Skip to site information and tools (order tracking, careers, privacy policy)" href="#footer">Skip to site information and tools (order tracking, careers, privacy policy)</a>
	</li>
</ul>
<div class="genericESpot" data-espotname="anf-HomepageTopBannerEMS">

<?php $systemsvaribale = $this->footer->systemsvaribale(); ?>

<div class="header__gms-wrapper default" style="line-height:39px;">
	 <?php echo $systemsvaribale->one_rs_reward; ?> 
<a class="offer__close"></a></div>

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
<header class="store-11203 group test" style="padding:0 0 2rem;">
	<div class="line-holder">
		<div class="line left-line"></div>
		<div class="line right-line"></div>
	</div>
	<div class="header__nav">
		<ul class="nav__utility left">
		 	<li><a title="Lookbook" data-property="GLB_LOOKBOOK" href="#">Lookbook</a></li>
			<li>
						<a title="Jeans" href="#" data-property="GLB_AFKIDS">Jeans</a>
			</li>
 		</ul>
		<a itemprop="url" href="<?php echo $base_url; ?>" title="Go to home page" class="logo white"><img class="hedeerlogo" src="<?php echo $base_url_views; ?>images/foot-logo-img.png"></a>
		<div id="utility-nav" class="nav__utility right">
			<ul class="nav__utility--links">
				<li class="nav__utility--search">
					
					<form id="search-input-form" class="search__form" name="search-input" action="<?php echo $base_url; ?>home/lists/" method="get" novalidate>
						 
						<div class="data">
							<label class="accessibility" for="site-search-field">Search Input Field</label>
							<input style="background:none;" value="Search" autocomplete="off" maxlength="50" id="search" name="search" class="text" placeholder="Search" required pattern="^\u0020*([^\u0020]\u0020*)+$" type="text">
							<div id="autocomplete"><div class="autocomplete-suggestions" style="position: absolute; display: none; width: 143px; max-height: 800px; z-index: 9999;"></div></div>
						</div>
						<div class="search__form--actions">
							<ul class="search__form-action">
								<li data-property="GLB_SEARCH" class="search__form--submit"><a id="site-search-submit" class="action search__form--button submit" href="#"><span class="one"><span class="two"><span class="three"><span class="four"></span></span></span></span></a>
									<label class="accessibility" for="site-search-submit">Search Submit Button</label>
									<button type="submit" class="search__form--button linkified"><i class="fa fa-search"></i></button>
								</li>
							</ul>
						</div>
					</form>
					
					<noscript>
						<a class="search_form--search-link" data-property="GLB_SEARCH" href="#">Search</a>
					</noscript>
				</li>
 
				 <?php if($this->session->userdata('logged_in') == "1") { ?>		
						<li style="display: inline-block;" id="util-account" class="nav__utility--account util-main guest loaded">
							<a class="util-main"><?php echo 'Welcome, '.$this->session->userdata('username'); ?> </a> </li>
							<li style="display: inline-block;" id="util-account" class="nav__utility--account util-main guest loaded">
							<a class="util-main" title="My Account" href="<?php echo $base_url;?>account">My Account</a> </li>
								<li style="display: inline-block;" id="util-account" class="nav__utility--account util-main guest loaded">
							<a class="util-main" title="Log Out" href="<?php echo $base_url;?>home/logout">Logout</a> </a> </li>
							 
					 
						<?php } else { ?>
						<li style="display: inline-block;" id="util-account" class="nav__utility--account util-main guest loaded">
							<a class="util-main" title="Sign In">Sign In</a>
							<div class="util-actions-wrap">
								<div id="util-account-container" class=" util-account-container">
								<div id="util-account-header">
								</div>
									<div id="util-account-nav">
										
												<ul class="util-actions">
														<li class="util-account__item">
															<a class="util-account__link" title="Sign In" data-property="GLB_SIGNIN" href="<?php echo $base_url; ?>home/login">
																Sign In
															</a>
														</li>
														
															<li class="util-account__item">
																<a class="util-account__link" title="Create An Account" data-property="GLB_CREATEANACCOUNT" href="<?php echo $base_url; ?>home/registration">
																	Create An Account
																</a>
															</li>
														
															<li class="util-account__item last">
																<a class="util-account__link" title="Track My Order" data-property="GLB_TRACKMYORDER" href="#">
																	Track My Order
																</a>
															</li>
												</ul>
									</div>
									
									 

								</div>
							</div>
						</li>
						
						
						<li style="display: inline-block;" id="util-account" class="nav__utility--account util-main guest loaded">
							<a class="util-main" title="Sign In">Insider</a>
							<div class="util-actions-wrap">
								<div id="util-account-container" class=" util-account-container">
								<div id="util-account-header">
								</div>
									<div id="util-account-nav">
										
												<ul class="util-actions">
														<li class="util-account__item">
															<a class="util-account__link" title="Sign In" data-property="GLB_SIGNIN" href="<?php echo $base_url; ?>home/ilogin">
																Sign In
															</a>
														</li>
														
															<li class="util-account__item">
																<a class="util-account__link" title="Create An Account" data-property="GLB_CREATEANACCOUNT" href="<?php echo $base_url; ?>home/iregistration">
																	Create An Account
																</a>
															</li>
														
												</ul>
									</div>
									
									 

								</div>
							</div>
						</li>
						
						<?php } ?>
					 

						<li id="util-minicart" class="nav__utility--minicart util-main loaded">
							<a class="util-main" data-property="GLB_BAG" title="BAG" href="#">
								<span>
									BAG
								</span>
								<span class="">(<?php echo $this->cart->total_items(); ?>)</span>
							</a>
							<div class="util-actions-wrap">



<div id="minicart-container">
	<div id="minicart-header">
		<h2 data-property="GLB_SHOPPINGBAG"><a href="#">Shopping Bag</a></h2>
		<div style="display: none;" class="pagination">
			<div class="index">
				<span class="first">0</span>
				<span data-property="GLB_OF">
					Of 
				</span>
				<span class="last">0</span>
			</div>
			<div class="prev-next">
				<a class="prev disabled" href="#">Previous</a>
				<a class="next" href="#">Next</a>
			</div>
		</div>
	</div>
	 

<div id="minicart-contents-wrap" class="empty">
	<div id="minicart-contents" class="minicart">
		
		<div class="cart-details">
			
					<div class="totals-wrap">
						<p class="subtotal-info">
							<span class="subtotal" data-property="GLB_SUBTOTAL">
								Subtotal: 
								<span class="amount">
 											&nbsp;<?php echo $this->cart->total(); ?>							
 								</span>
							</span>
						</p>
						<a href="<?php echo $base_url; ?>cart/viewcart"><span class="checkout-link-disabled button" data-property="CHK_CHECKOUT">
							Checkout
						</span></a>
					</div>
 		</div>
 	</div>
</div>
</div>
</div>
						</li>
						<li style="display: inline-block;" >
								<a id="kids" class="kids"   href="#">
									<?php if($this->session->userdata('currencycode') == "EUR") { echo "EUR"; }?> 
									<?php if($this->session->userdata('currencycode') == "INR") { echo "INR"; }?>
									<?php if($this->session->userdata('currencycode') == "AED") { echo "AED"; }?>
									<?php if($this->session->userdata('currencycode') == "AUD") { echo "AUD"; }?>
									<?php if($this->session->userdata('currencycode') == "USD") { echo "USD"; }?>
									<?php if($this->session->userdata('currencycode') == "BHD") { echo "BHD"; }?>
									<?php if($this->session->userdata('currencycode') == "SAR") { echo "SAR"; }?>
									<?php if($this->session->userdata('currencycode') == "QAR") { echo "QAR"; }?>
								</a>
							 
    <div class="genericESpot" data-espotname="LanguageSelectorEMS">
			<ul class="util-language">      
			 
				
		 
			</ul>
	</div>

 
										 
								 
							</li>
							
						
			</ul>
			
				<div class="flyout-wrapper">
		            <div id="savesMsg" class="utility-item__contents utility-item__contents--saves tooltip">
		                <div class="utility-nav-saves__save-confirmed-msg" data-property="GLB_SAVEDEX">
							<div class="tooltip-arrow-top"></div>
							<span class="savedMsg">
		                    	Saved!
		                    </span>
		                </div>
		                <div class="utility-nav-saves__msg-wrap">
							<div class="tooltip-arrow-top"></div>
							
		                    <div class="utility-nav-saves__sign-in-msg" data-property="GLB_SIGNIN_HEARTS">
		                        Want your saves to last forever? <a href="#">Sign in</a>!
		                        <p class="utility-nav-saves__create-account-msg" data-property="GLB_CREATEACCOUNTLINK">
		                            <a href="#">Create an Account</a>
		                        </p>
		                    </div>
		                </div>
		            </div>
		        </div>
			
		</div>
	</div>
	<div class="condensed">
		
        <a style="font-size:23px;" href="<?php echo $base_url; ?>">Stylior</a>
	</div>
    
	<nav id="primary-nav" class="nav__primary">
		

<ul class="main">
				 <?php
					$allcategory = $this->footer->allcategory();
					if($allcategory != '' && count($allcategory) > 0) {
					foreach($allcategory as $cat)
					{
					?>
				<li id="cat-12202" class="cat-12202 first current 168206">
 					<a id="division_12202" class="" title="Mens" href="<?php echo $base_url; ?>category/<?php echo $cat->cname;?>"><?php echo $cat->cname; ?></a>
 				</li>
					<?php }} ?>
			
				<li id="cat-12203" class="cat-12203 168206">
					<a id="division_12203" class="" title="Lookbook" href="#">Lookbook</a>
				</li>
			
				<li id="cat-130706" class="cat-130706 168206">
					<a id="division_130706" class="" title="More" href="#">More</a>
				</li>

</ul>


	</nav>
</header>


<div id="kids-prompt" class="accessibility">
	<li <?php if($this->session->userdata('currencycode') == "USD") { echo "Selected"; } ?>>
					<a mpdisurl="" data-prefix="en" class="notranslate" translate="no" name="val" id="val" value="USD" onClick="changecurrency('USD');">
					USD<!-- img src="<?php echo $base_url_views; ?>images/usd-flag-img.png" width="65" height="20"--></a>
	</li>
	<li <?php if($this->session->userdata('currencycode') == "BHD") { echo "Selected"; } ?>>
					<a mpdisurl="" data-prefix="en" class="notranslate" translate="no" name="val" id="val" value="BHD" onClick="changecurrency('BHD');">
					BHD<!-- img src="<?php echo $base_url_views; ?>images/bhd-flag-img.png" width="65" height="20"--></a>
	</li>
	<li <?php if($this->session->userdata('currencycode') == "SAR") { echo "Selected"; } ?>>
					<a mpdisurl="" data-prefix="en" class="notranslate" translate="no" name="val" id="val" value="SAR" onClick="changecurrency('SAR');">
					SAR<!-- img src="<?php echo $base_url_views; ?>images/sar-flag-img.png" width="65" height="20"--></a>
	</li>
	 
	<li <?php if($this->session->userdata('currencycode') == "QAR") { echo "Selected"; } ?>>
					<a mpdisurl="" data-prefix="en" class="notranslate" translate="no" name="val" id="val" value="QAR" onClick="changecurrency('QAR');">
					QAR<!-- img src="<?php echo $base_url_views; ?>images/qar-flag-img.png" width="65" height="20"--></a>
	</li>
 	<li <?php if($this->session->userdata('currencycode') == "EUR") { echo "Selected"; } ?>>
					<a mpdisurl="" data-prefix="en" class="notranslate" translate="no" name="val" id="val" value="EUR" onClick="changecurrency('EUR');">
					EUR<!-- img src="<?php echo $base_url_views; ?>images/eur-flag-img.png" width="65" height="20"--></a>
	</li>
	<li>
		<a mpdisurl="" data-prefix="es" class="notranslate" translate="no" onClick="changecurrency('INR');"><img src="<?php echo $base_url_views; ?>images/inr-flag-img.png" width="65" height="20"></a>                                                          
	</li> 
	<li>
		<a mpdisurl="" data-prefix="es" class="notranslate" translate="no" onClick="changecurrency('AED');"><img src="<?php echo $base_url_views; ?>images/aed-flag-img.png" width="65" height="20"></a>                                                          
	</li>
	<li>
		<a mpdisurl="" data-prefix="es" class="notranslate" translate="no" onClick="changecurrency('AUD');"><img src="<?php echo $base_url_views; ?>images/aud-flag-img.png" width="65" height="20"></a>                                                          
	</li>   
</div>


<div class="content-wrap">
	<div id="cookies-wrap" class="cookies-on-site">
	<div id="cookie-banner" class="cookies-on-site legal duty">
			<a class="cookies-close" title="Close"></a>
			<h2>About</h2>
		</div>
	</div>
</div>
 
<script src="<?php echo $base_url_views; ?>heder-js/ConstantsJS"></script>
<script type="text/javascript">
	ANF.catalog.data = {
		"catalogId"			: "10901",
		"storeId"			: "11203",
		"categoryHierarchy"	: [12202,12204],
		"categoryHierarchyObj" : [{"id":"12202","name":"Mens"},{"id":"12204","name":"Clearance"}],
		"topCategoryId"		: "12202",
		"parentCategoryId"	: "12204",
		"categoryId"		: "12204",
		"productId"			: "4670577"
	};
</script>
<script src="<?php echo $base_url_views; ?>heder-js/global.js"></script>  


<div id="autopopup" class="accessibility">
	 auto popup 
</div>