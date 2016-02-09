<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');

function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
} 
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
<?php 
	if(isset($_GET['tracking']) !=""){
		$trakingid = $_GET['tracking'];
			if($trakingid !=""){
			$this->session->set_userdata('trackid',$trakingid);
			}
		}
		//echo $this->session->userdata('trackid');
?>
<?php
if($_SERVER['REQUEST_URI'] == "/"){

echo "<title>Stylior Bespoke Fashion Store Online, Mens Shopping, Shirts, Formal Wear, Lookbook</title>
<meta name=\"description\" content=\"The biggest online shopping store for bespoke fashion. Everything comes with 100% fit guarantee. Explore international designer fashion store, exclusive lookbook, check latest collection of finest fabrics and trends in formal wear and shop for customized outfits exclusively available on Stylior.com.\"/>
<meta name=\"keywords\" content=\"Bespoke Fashion, Fashion Online, Fashion Online Shopping, Fashion Shopping Online, Fashion Store Online, Men Formal Wear, Men’s Fashion, Mens Fashion Online, Online Fashion, Online Fashion Shopping, Online Fashion Store, Online Men Fashion, Online Shopping Fashion, Stylior Fashion, Stylior Lookbook\"/>
<meta name=\"robots\" content=\"index, follow\"/>";

} else if($_SERVER['REQUEST_URI'] == "/sign-in"){

echo "<title>Sign In | Stylior Fashion Store Online</title>
<meta name=\"description\" content=\"Sign in now the biggest online store, Stylior.com for bespoke fashion. Check latest collection of finest fabrics and trends in formal wear. Shop Now!!\"/>
<meta name=\"keywords\" content=\"Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion\"/>
<meta name=\"robots\" content=\"index, follow\"/>";

}else if($_SERVER['REQUEST_URI'] == "/category/mens-shirt"){

echo '<title>Buy Tailor Made Mens Shirts, Custom Casual & Formal Shirts Online | Stylior Fashion Store</title>
<meta name="description" content="Buy custom made mens formal shirts online. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="Buy Shirts Online, Buy Shirts Online India, Casual Shirts For Men, Custom Made Shirts, Men Casual Shirts, Men Formal Shirts, Men Shirts, Mens Shirts, Shirts For Men, Shirts Men, Tailor Made Shirts "/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/live-style"){

echo '<title>L!VE Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering L!VE designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com"/>
<meta name="keywords" content="L!VE Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/princely"){

echo '<title>Princely Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering princely designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="Princely Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/presidential"){

echo '<title>Presidential Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering presidential designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="Presidential Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/french"){

echo '<title>French Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering french designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="French Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/london"){

echo '<title>London Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering london designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="London Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/style/work-day"){

echo '<title>Work@Day Fashion Style | Stylior Fashion Store Online</title>
<meta name="description" content="The biggest online fashion store offering Work@Day designer styles in mens shirts. Check latest collection of finest fabrics and trends in bespoke fashion and shop online for customized outfits exclusively available on Stylior.com."/>
<meta name="keywords" content="Work@Day Fashion Style"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/payment-policy"){

echo '<title>Payment Policy | Stylior Fashion Store Online</title>
<meta name="description" content="Stylior offers you multiple payment methods so that you can make a purchase using any of the above options from anywhere in the world."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/privacy-policy"){

echo '<title>Privacy Policy | Stylior Fashion Store Online</title>
<meta name="description" content="For Stylior, our clients privacy is really important, and we are committed to ensuring that their information is secure."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/terms-conditions"){

echo '<title>Terms And Conditions | Stylior Fashion Store Online</title>
<meta name="description" content="These are the Stylior.com Terms and Conditions. The service agreement, reservation policies, cancellations policies, and others are listed here."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/shipment-return-policy"){

echo '<title>Shipment, Return & Cancellations | Stylior Fashion Store Online</title>
<meta name="description" content="Stylior offers FREE shipping, Return & Cancellations service across the globe! For any information contact us now!!"/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/disclaimer"){

echo '<title>Website Disclaimer | Stylior Fashion Store Online</title>
<meta name="description" content="Find out about website disclaimer information. The information contained in this website is for general information purposes only."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/our-story"){

echo '<title>Our story | Stylior Fashion Store Online</title>
<meta name="description" content="The founders of Stylior.com had the chance to interact with the customers of many kinds and analyzed in detail the needs and available solutions for their needs."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/contact-us"){

echo '<title>Contact Us | +91-8055-670-670 | Stylior Fashion Store Online</title>
<meta name="description" content="Contact to Stylior, one of the leading online bespoke fashion store, we provide high quality custom made apparels for all. Join insider program. Win bespoke shirts."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/blog"){

echo '<title>Our Blog | Stylior Fashion Store Online</title>
<meta name="description" content="Visit Stylior blog and read our latest updates about bespoke fashion,custom made apparels online, formal wear, mens shirts and lookbook."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else if($_SERVER['REQUEST_URI'] == "/insider-registration"){

echo '<title>Insider Register Form | Stylior Fashion Store Online</title>
<meta name="description" content="Create an account or Log in to continue. Stylior is one of the leading mens fashion shopping store in India, provides quality custom made apparels online."/>
<meta name="keywords" content="Fashion Shopping Online, Fashion Store Online, Mens Fashion Online, Online Fashion, Online Fashion Store, Online Men Fashion, Stylior Fashion"/>
<meta name="robots" content="index, follow"/>';

} else {

echo "<title>".$title."</title>
<meta name=\"description\" content=\"".$keywords."\"/>
<meta name=\"keywords\" content=\"".$description."\"/>
<meta name=\"robots\" content=\"index, follow\"/>";

}
?>
<link rel="alternate" href="http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" hreflang="en-in" />
<link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/reset.css">
<!-- CSS reset -->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/style.css">
<link href="<?php echo $base_url_views; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $http_host; ?>site/views/assets/css/font-awesome.min.css"  rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/jasny-bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/lightbox.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/bewear-icons.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>assets/css/main.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>heder-css/global.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/style.css">

<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>

<script src="<?php echo $base_url_views; ?>/popup/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/style.css">

<!-- link rel="stylesheet" href="<?php echo $base_url_views; ?>css/typicons.css" -->
<!-- Resource style -->
<style>
#pop{height:420px;}
@media only screen and (max-width : 480px){
#pop{width:100%;float:none;margin-left:0%;height:800px;}
#sub{font-size:10px;}
}
@media only screen and (min-width : 769px){
#cd-primary-nav .desktop-align-left {padding-left:0 !important;}
#cd-primary-nav > li {width:90px !important;}
}
</style>
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
<script src="//load.sumome.com/" data-sumo-site-id="2b5efae1c5cec63dc08c803ce6fb1c21e558d9aa993722e68009ab1f0c885781" async="async"></script>
</head>
<body>
<?php
//echo $_SERVER['REMOTE_ADDR']; 
function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    //$remote  = '94.57.9.50';//@$_SERVER['REMOTE_ADDR']; Dubai
    //$remote  = '110.33.122.75';//@$_SERVER['REMOTE_ADDR']; Australia
    //$remote  = '82.148.97.69';//@$_SERVER['REMOTE_ADDR']; Australia
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
	if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
	//echo "http://api.db-ip.com/addrinfo?addr=".$ip."&api_key=5a299ba8431b4fc2869da6f66753d9c9b6e67c04"; 
    $ip_data = @json_decode(file_get_contents("http://api.db-ip.com/addrinfo?addr=".$ip."&api_key=5a299ba8431b4fc2869da6f66753d9c9b6e67c04"));    
    if($ip_data && $ip_data->country != null){
        $result['country'] = $ip_data->country;
        $result['city'] = $ip_data->city;
    }
	//print_r($result);
    return $result;
}
//$countrydata = getLocationInfoByIp();
//print_r($countrydata);
if($this->session->userdata('currencyvalue') == '')	
{
	$countrydata = getLocationInfoByIp();

		$currencycode = '';
		if($countrydata['country'] == 'IN'){
			$currencycode = 'INR';
		}
		if($countrydata['country'] == 'AE'){
			$currencycode = 'AED';
		}
		if($countrydata['country'] == 'US'){
			$currencycode = 'USD';
		}
		if($countrydata['country'] == 'AU'){
			$currencycode = 'AUD';
		}
		if($countrydata['country'] == 'QA'){
			$currencycode = 'QAR';
		}
		if($countrydata['country'] == 'SA'){
			$currencycode = 'SAR';
		}
		if($countrydata['country'] == 'EU'){
			$currencycode = 'EUR';
		}
		if($currencycode == ''){
			$currencycode = 'USD';
		}

		if($currencycode == 'INR'){
			$this->session->set_userdata('currencyvalue','1');
			$this->session->set_userdata('currencysymbol','Rs');		
			$this->session->set_userdata('currencycode','INR');	
			$_SESSION['currencyvalue'] = '1';
			$_SESSION['currencycode'] = 'INR';
		} else {
					$val = $currencycode;
					$to = 'INR';
					$amount = '1';
					$c = $this->footer->changecurrency($val); //$this->convertCurrency($amount, $from, $to); 
			$cvalue = $c->stylior_roc;
 			$multiplier = $c->multiplier;
			$ceiling = $c->ceiling;		
			$this->session->set_userdata('currencyvalue',$cvalue);
			$this->session->set_userdata('currencycode',$val);
			$this->session->set_userdata('multiplier',$multiplier);
			$this->session->set_userdata('ceiling',$ceiling);

			$_SESSION['currencyvalue'] = $cvalue;
			$_SESSION['currencycode'] = $val;
			$_SESSION['multiplier'] = $multiplier;
			$_SESSION['ceiling'] = $ceiling;
		}		
} 
?>
<?php 
if($this->session->userdata('userid') == '') {
$google_client_id 		= '268142142707-blppmfbga75qrdlv2r706k4tae91oo4h.apps.googleusercontent.com';
$google_client_secret 	= '0RXg84sxNKSPOfriAfXvMZcG';
$google_redirect_url 	= 'http://www.stylior.com/home/gmail/'; //path to your script
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
		// print_r($email);die;
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
 			jQuery("#currencylist").hide();
 			jQuery("#loadingimage").show();
			
			jQuery.ajax({  
			type: 'POST', 
			url: '<?php echo $base_url;?>home/changenewcurrency',  
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
<img src="<?php echo $base_url_views; ?>images/howitwork.png" alt="How it Works" />
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
<img src="<?php echo $base_url_views; ?>images/howitworks.png" title="How it Works" />
</span>

<header class="cd-main-header">
  <ul class="top-links">

	<li class="pull-right"><a href="#" class="toggle-menu menu-right push-body cart-click"><i class="fa fa-shopping-cart fa-lg"></i><span class="hidden-xs"> Bag</span><span class="cart-quantity"><?php echo $this->cart->total_items(); ?></span></a></li>


    <?php if($this->uri->segment('2') != 'makepayment' && $this->uri->segment('2') != 'checkout') { ?>
    <li class="pull-right"><a href="javascript:void(0);" onClick="currencypopup();" class="country"><?php if($this->session->userdata('currencycode') == "EUR") { echo "EUR "; ?> <img src="<?php echo $base_url_views; ?>newheader/img/eur-flag.jpg" /> <?php  }?> 
	<?php if($this->session->userdata('currencycode') == "INR") { echo "INR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-india.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "AED") { echo "AED"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/aed-flag.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "AUD") { echo "AUD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/aud-flag.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "USD") { echo "USD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "BHD") { echo "BHD"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/bhd-flag.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "SAR") { echo "SAR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/sar-flag.jpg" /> <?php }?>
	<?php if($this->session->userdata('currencycode') == "QAR") { echo "QAR"; ?> <img src="<?php echo $base_url_views; ?>newheader/img/qar-flag.jpg" /> <?php }?></a></li>
	<?php } ?>
 
	<?php if($this->session->userdata('userid') == "") { ?>
		<li class="pull-right"><a href="<?php echo $base_url; ?>sign-in" title="Sign in"><i style="position:relative; top:5px;" class="visible-xs fa fa-user fa-lg"></i><span class="hidden-xs">Sign in</span></a></li>
        <li class="pull-left"><a href="<?php echo $base_url; ?>affiliate-registration" title="Affiliate">Affiliate</a></li>
		<li class="pull-left"><a href="<?php echo $base_url; ?>insider-signin" title="Insider">Insider</a></li>
        <li class="pull-left visible-xs"><a href="<?php echo $base_url; ?>home/giftcard" title="Gift Cards">
			<span>Gift Cards</span></a>
		</li>
		<li class="pull-left hidden-xs"><a href="<?php echo $base_url; ?>home/giftcard" title="Gift Cards">
			<i class="fa fa-gift fa-2x"></i> <span style="position:relative; top:-3px;">Gift Cards</span></a>
		</li>
	<?php } else {
		$userdetails = $this->footer->userdetails($this->session->userdata('userid'));	
		if($userdetails->insider == '0' && $userdetails->affiliate == '0') { ?>
			<li class="pull-left"><a href="<?php echo $base_url; ?>user/make" title="Affiliate">Affiliate</a></li>
			<li class="pull-left"><a href="<?php echo $base_url; ?>user/make" title="Insider">Insider</a></li>
		<?php } else {
			if($userdetails->insider == '1'){ ?>
				<li class="pull-left"><a href="<?php echo $base_url; ?>insider/insider_dash" title="Insider">Insider</a></li>
			<?php }
			if($userdetails->affiliate == '1'){ ?>
				<li class="pull-left"><a href="<?php echo $base_url; ?>affiliate/affiliate_dash" title="Affiliate">Affiliate</a></li>
			<?php }
		} ?>
		<li class="pull-left visible-xs"><a href="<?php echo $base_url; ?>home/giftcard" title="Gift Cards">
			<span>Gift Cards</span></a>
		</li>
		<li class="pull-left hidden-xs"><a href="<?php echo $base_url; ?>home/giftcard" title="Gift Cards">
			<i class="fa fa-gift fa-2x"></i> <span style="position:relative; top:-3px;">Gift Cards</span></a>
		</li>
		<li class="pull-right"><a href="<?php echo $base_url;?>account" title="My Account"><i style="position:relative; top:5px;" class="visible-xs fa fa-user fa-lg"></i><span class="hidden-xs">My Account</span></a></li>
		<li class="pull-right"><a href="<?php echo $base_url;?>home/logout" title="Logout"><i style="position:relative; top:5px;" class="visible-xs fa fa-power-off fa-lg"></i><span class="hidden-xs">Logout</span></a></li>	
	<?php } ?>
    
  </ul>
  <div class="line-holder">
    <div class="line left-line"></div>
    <div class="line right-line"></div>
  </div>
  <span class="cd-logo"><a href="<?php echo $base_url; ?>" title="Stylior Fashion Store Online"><img src="<?php echo $base_url_views; ?>newheader/img/foot-logo-img.png" onClick="" alt="Stylior Fashion Store Online"></a>
  </span>
  <a></a>
  <ul class="cd-header-buttons">
    <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
    <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
  </ul>
  <!-- cd-header-buttons --> 
</header>
<main class="cd-main-content"> 
</main>
<div class="cd-overlay"></div>
<nav class="cd-nav">
  <ul id="cd-primary-nav" class="cd-primary-nav is-fixed nav">
   <li><a class="desktop-align-left" href="http://www.stylior.com/3dshirt/" title="Custom Designs">Men's Shirt</a></li>
   <?php
 	/*	$allcategory = $this->footer->allcategory();
		if($allcategory != '' && count($allcategory) > 0) {
		foreach($allcategory as $cat)
		{
		$allsubcategory = $this->footer->allsubcategory($cat->id);
	?>
	 <li><a class="desktop-align-left" href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl ;?>" title="Buy Tailor Made Mens Shirts"><?php echo $cat->cname; ?></a></li>
		<!--li class="has-children"> <a href="<?php echo $base_url; ?>category/<?php echo $cat->pageurl ;?>"><?php echo $cat->cname; ?></a>
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
 	<?php }} */
	 /*  $allstaticpages = $this->footer->allstaticpages();

	  if($allstaticpages != '' && count($allstaticpages) > 0) {
			foreach($allstaticpages as $cats) { ?>
				<li><a href="#"><?php echo $cats->title; ?></a></li>
	  <?php /* } }  */
 	?>
    <!--<li><a href="#" title="More">MORE</a></li>-->
    <li class="dropdown">
      <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle show-dropdown">More <b class="caret"></b></a>
      <ul class="dropdown-menu" style="display:none;">
       <?php $getcmspanel = $this->footer->getcmspanel(); 
             if($getcmspanel != '' && count($getcmspanel) > 0) { 
             foreach($getcmspanel as $cms) {
        ?>
        <li><a href="<?php echo $base_url.'page/'.$cms->pageurl; ?>"><?php echo $cms->title; ?></a></li>
        <?php } } ?>
      </ul>
    </li>
    <li><a href="http://www.stylior.com/blog/" target="_blank" title="Our Blog">BLOG</a></li>
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
				$i = 1; $displayprice1 = '0'; $displayprice1 = '0';
				foreach($this->cart->contents() as $items)  
				{
					//print_r($items);
				$proditem = $proits =  $this->footer->prod($items['id']);
   				?> 
				<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
				  <tr id="product_block" class="product_block_26636">
					
					<?php
					if($items['options']['is_3d'] != '2') {

					if($items['options']['is_3d'] == '0') { ?>
					
						<td><img width="75" height="75" src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $proits->image; ?>" ></td>
						<td class="product_detail"><span class="product-name"><?php echo $items['name']; ?></span><br> </td>

					<?php } else { ?>
						<td><img width="75" height="75" src="<?php echo $http_host;?>/upload/saveprofile/<?php echo $items['options']['imagename']; ?>" ></td>
						<td class="product_detail"><span class="product-name"><?php echo $items['name']; ?></span><br> </td>
					<?php } ?>
		
					<?php } else { ?>
						<td class="product_detail" colspan="2"> <span class="product-name" style="margin-left:5%"><?php echo $items['name']; ?></span> <br> </td>	
 					<?php } ?>
 
					<td class="last_col"><span> <a onClick="removesproduct('<?php echo $items['rowid'];?>');" ><img title="Remove item" src="<?php echo $base_url_views; ?>newheader/img/close.png"></a> <br>
					  <span class="price_block"><span class="price"> <?php
						if($this->session->userdata('currencycode') == 'INR')
						{ ?>
								Rs.<?php echo $displayprice = $items['price']; ?> 
						<?php } else { 
								echo $this->session->userdata('currencycode')." "; 
								 
								echo $displayprice = roundUpToAny(( $items['price'] / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100) ) ));
						} ?>   </span></span> </span></td>
				  </tr>
				<?php $i++; $displayprice1 = $displayprice + $displayprice1; }   } else { ?>
					  <tr id="product_block" class="product_block_26636">
							<td  class="product-name" align="center" style="font-size:12px;">Your Shopping Cart Is Empty.</td>
					   </tr>
				<?php } ?>
         
          
        </tbody>
      </table>
    </form>
  </div>
  
  
  <?php if($displayprice1 == '') { $displayprice1 = '0'; }?>
  <div class="shopping-cart-totals">
    <div style="display: none;" class="mastertooltiplightbox"> <span id="mastertooltiplightboxclose">X</span>
      <p>Shipping charge of Rs.50 will apply for orders below Rs.500</p>
    </div>
    <table id="shopping-cart-totals-table" cellspacing="10px" cellpadding="10px">
      <tbody>
        <tr>
          <td class="co-left">Subtotal :</td>
          <td class="co-right"><span class="price"> <?php
				if($this->session->userdata('currencycode') == 'INR')
				{ ?>
						Rs.<?php echo $displayprice1; ?> 
				<?php } else { 
						echo $this->session->userdata('currencycode')." "; 
						 
						echo $displayprice1;
				} ?>  </span></td>
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
          <td class="co-right"><span class="price"><?php
			if($this->session->userdata('currencycode') == 'INR')
			{ ?>
					Rs.<?php echo $displayprice1; ?> 
			<?php } else { 
					echo $this->session->userdata('currencycode')." "; 
 					echo $displayprice1;
			} ?></span></td>
        </tr>
      </tbody>
    </table>
    <div class="checkout-box" ><a href="<?php echo $base_url;?>cart/viewcart"> <span>CHECKOUT </span></a></div>
  </div>
  </nav>
 <!--popup-->
 	<!-- div class="destination-list" style="display:none;" -->
	<div class='popup'>
		<div class='cnt223' style="min-height:inherit; font-family:Arial, Helvetica, sans-serif;width:30%;">
        <span class='x' id='x'>X</span -->
    	<!-- img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list"-->
		<h2 style="padding:0 10px 10px 10px; font-size:25px; border-bottom:1px solid #ccc;">Select Your Currency</h2>
		<p id="loadingimage" style="display:none;text-align:center;"><img src="http://www.stylior.com/3dshirt/images/loading.gif" /><p>
        <div class="scroll-area" id="currencylist">
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
		<p style="font-size: 14px; line-height: 20px; text-align: left; padding:0 10px;">
		CAN&#39;T FIND YOUR CURRENCY ? <br />
		Shop from our United States store and ship almost anywhere in the world! </p>
		<p style="font-size: 16px; border: 1px solid #666; background-color:#f0f0f0; border-radius:10px; text-align: justify; margin: 0px auto; width: 188px; padding: 12px 0px 0px; line-height: 14px;">
		 &nbsp; <a href="javascript:void(0);" onClick="changecurrency('USD');"><img src="<?php echo $base_url_views; ?>newheader/img/icon-flag-en_US.jpg" /> &nbsp; Ship From the U.S. </a><br /><br /></p>
		<!--p style="text-align:left; font-size:13px; line-height:20px; text-align:justify;">
		This site may store or access information on the device you are using to view it, including by using cookies to make advertising on the site and elsewhere more relevant to you. Please see our Cookie Policy for further details. By continuing to use this site you agree to this policy.
		</p-->
        </div></div>
	</div>

	<div class="destination-list1" style="display:none;">
		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<!--<p style="text-align:center; font-size:18px; line-height:35px; color:#fff;">You can now choose the exclusive desings created by our Stylists. <br />
OR <br />
Be your own designer and customize your shirt !</i></p>
		 h2>Select Your Choice</h2 -->
<div class="shop-btn">
		<a href="javascript:void(0);" onClick="designproducts();"><img src="<?php echo $base_url_views; ?>newheader/img/popupbutton1.png" alt="Buy Tailor Made Mens Shirts" /> </a>		
		<a href="javascript:void(0);" onClick="customizeproducts();" class="resclass"><img src="<?php echo $base_url_views; ?>newheader/img/popupbutton2.png" alt="Buy Tailor Made Mens Shirts" title="Buy Tailor Made Mens Shirts" /> </a>
				
</div>
<div class="shop-btn">
	<img src="<?php echo $base_url_views; ?>newheader/img/popup.png" />
</div>

<input type="hidden" value="" id="typeofproducts" name="typeofproducts" />
</div>





<div class="loginpopup" style="display:none;">
 		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
		<h2>Login With Stylior.com</h2>
		 <p class="inner-intro">
                                Don't have an account?  <a href="<?php echo $base_url; ?>registration" title="Create one">Create one</a>.
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
		<?php if($this->session->userdata('userid') == '') { ?>
 			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $base_url; ?>home/d3login/'+val;
		<?php } else { ?>
			var val = $('#typeofproducts').val();
			window.location.href = '<?php echo $http_host; ?>/3dshirt?id='+val+'&c=<?php echo $this->session->userdata("currencycode");?>';
		<?php } ?>
   }

   function numbersonly(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keycode
		if(charCode > 31 && (charCode < 45 || charCode > 57))
		return false;
 		return true;
	}
</script>
<script type="text/javascript">
function currencypopup(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.footer-text').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
}
</script>
<script type="text/javascript">
$(document).ready (function(){
	$('.show-dropdown').click (function(){
		$('.dropdown-menu').toggle();
	});
});
</script>
<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.css"</script>    