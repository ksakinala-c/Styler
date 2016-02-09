<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');
?>
<!DOCTYPE html>

<html lang="en-IN"
      
      xmlns:fb="http://ogp.me/ns/fb#">

<!--<![endif]-->

  <head>
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//maps.gstatic.com">
    <link rel="dns-prefetch" href="//mts0.googleapis.com">
    <link rel="dns-prefetch" href="//mts1.googleapis.com">
	
    
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>

    <!--[if IE]><![endif]-->
    <meta charset="utf-8">

    
      <link href="<?php echo $base_url_views;?>css/common_o2.1-b1479bb5c5303159d1392e5538a68644.css" media="all" rel="stylesheet" type="text/css" />
	  
	   
    <!--<![endif]-->

      <!--[if lt IE 9]>
        <link href="css/airglyphs-ie8-a5d4c59f29482783e45282b80ec7d6a1.css" media="all" rel="stylesheet" type="text/css" />
      <![endif]-->

    <link href="<?php echo $base_url_views;?>css/main-pretzel-4ab1c9299beb86cb6b946aef4a0c6056.css" media="screen" rel="stylesheet" type="text/css" />
  <!--[if IE 7]>
    <link href="css/p1_ie_7-0ab7be89d3999d751ac0e89c44a0ab50.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->
  <!--[if IE 6]>
    <link href="css/p1_ie_6-7d6a1fd8fe9fdf1ce357f6b864c83979.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->

    <link href="<?php echo $base_url_views;?>css/style.css" rel="stylesheet" type="text/css">

    <meta id="csrf-param-meta-tag" name="csrf-param" content="authenticity_token"/>
    <meta id="csrf-token-meta-tag" name="csrf-token" content=""/>

    <script>

      var sherlock_firstbyte = Number(new Date());
</script>

    <title>Stylior :: Register</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="twitter:widgets:csp" content="on">

	
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="image_src" href="<?php echo $base_url_views;?>images/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Stylior">


    <!--<link rel="shortcut icon" type="image/x-icon" href="images/logotype_favicon-21cc8e6c6a2cca43f061d2dcabdf6e58.ico">-->
  </head>
  <body class="home_view v2 simple-header p1">
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-46MK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


     


    <div id="header" class="airbnb-header">
  <div class="header--sm show-sm">
    <a href="#" data-prevent-default class="link-reset burger--sm">
      <i class="icon icon-reorder icon-rausch"></i>
    </a>
    <div class="title--sm text-center">
      <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url_views;?>images/foot-logo-img.png"></a>
    </div>
    <div class="action--sm"></div>
    <nav class="nav--sm"></nav>
    <div class="search-modal-container"></div>
  </div>
  <div class="regular-header clearfix hide-sm">
    <a href="<?php echo $base_url; ?>" ><img src="<?php echo $base_url_views;?>images/foot-logo-img.png"></a>
    <ul class="nav pull-left hide-sm list-unstyled search-form-container"
        id="search-form-header">
      <li class="browse-container pull-left hide-md">
        <a class="link-reset"
           href="#"
           id="header-browse-trigger">
          Browse
          <i class="icon icon-caret-down icon-light-gray h5"></i>
        </a>
        <ul role="tooltip"
            class="tooltip tooltip-top-left dropdown-menu list-unstyled"
            data-trigger="#header-browse-trigger"
            aria-hidden="true"
            data-sticky="true">
          <li><a href="#" class="link-reset menu-item">Popular</a></li>
          <li><a href="#" class="link-reset menu-item">Friends</a></li>
          <li><a href="#" class="link-reset menu-item">Neighborhoods</a></li>
          <li class="groups hide"><a href="#" rel="nofollow" class="link-reset menu-item">Groups</a></li>
        </ul>
      </li>
    </ul>

    
	<?php if($this->session->userdata('logged_in') == "1") { ?>	
    <ul class="nav pull-right logged-out list-unstyled medium-right-margin">
     <p style="margin:10px 0 10px;"><?php echo 'Welcome, '.$this->session->userdata('username'); ?> 
									|
									<a href="<?php echo $base_url;?>account">My Account</a>
									|
									<a href="<?php echo $base_url;?>home/logout">Logout</a></p>	
    </ul>
	
	<?php } else { ?>
	
		<ul class="nav pull-right logged-out list-unstyled medium-right-margin">
       <li id="sign_up" class="pull-left medium-right-margin">
        <a data-signup-modal
           data-header-view="true"
           href="<?php echo $base_url; ?>home/registration"
           class="link-reset"
           rel="nofollow">
          Sign Up
        </a>
      </li>
      <li id="login" class="pull-left">
        <a data-login-modal href="<?php echo $base_url; ?>home/login" class="link-reset" rel="nofollow">Log In</a>
      </li>
    </ul>
	<?php } ?>

    <ul class="nav pull-right logged-in list-unstyled medium-right-margin">
      <li class="user-item pull-left medium-right-margin">
        <a class="link-reset"
           id="header-avatar-trigger"
           href="#">
          <div class="media-photo media-round user-profile-image"></div>
          <span class="value_name">User</span>
          <i class="icon icon-caret-down icon-light-gray h5"></i>
        </a>
        <ul role="tooltip">
            class="tooltip tooltip-top-right dropdown-menu list-unstyled header-dropdown"
            data-trigger="#header-avatar-trigger"
            aria-hidden="true"
            data-sticky="true">
          <li><a href="#" rel="nofollow" class="link-reset menu-item">Dashboard</a></li>
          <li class="listings">
            <a href="#" rel="nofollow" class="link-reset menu-item">
              <span class="singular" style="display: none;">Your Listing</span>
              <span class="plural">Your Listings</span>
            </a>
          </li>
          <li class="reservations" style="display: none;">
            <a href="#" rel="nofollow" class="link-reset menu-item">Your Reservations</a>
          </li>
          <li><a href="#" rel="nofollow" class="link-reset menu-item">Your Trips</a></li>
          <li><a href="#" id="wishlists" class="link-reset menu-item">Wish Lists</a></li>
          <li class="groups">
            <a href="#" rel="nofollow" class="link-reset menu-item">Groups</a>
          </li>
          <li>
            <a href="#" class="link-reset menu-item">
              Invite Friends
              <span class="label label-pink label-new">New</span>
            </a>
          </li>
          <li><a href="#" rel="nofollow" class="link-reset menu-item">Edit Profile</a></li>
          <li><a href="#" rel="nofollow" class="link-reset menu-item">Account</a></li>
          <li><a href="#" rel="nofollow" class="link-reset menu-item" id="header-logout">Log Out</a></li>
        </ul>
      </li>
      <li id="inbox-item" class="inbox-item pull-left">
        <a href="#" rel="nofollow" class="link-reset inbox-icon">
          <i class="alert-count fade text-center">0</i>
          <i class="icon icon-envelope icon-gray">
            <span class="text-hide hide">Inbox</span>
          </i>
        </a>
      </li>
    </ul>
  </div>
</div>


    <script src="js/header_cookie-ef612d1504fde35476fd3baf189d868b.js"> type="text/javascript"></script>


      <div class='span12 flash-container'>
      </div>

    


<script>

  var AIR = AIR || {};
!function() {
  var xhr,
    callbacks = [],
    loaded = false,
    response = null,
    url = '/discovery/discover_feed';

  AIR.onCustomRecommendedDestinationsLoad = function(callback) {
    if (loaded) {
      // [do not release zalgo]
      // http://blog.izs.me/post/59142742143/designing-apis-for-asynchrony
      setTimeout(function() { callback(response); }, 0);
    } else {
      callbacks.push(callback);
    }
  };

  if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  } else {
    return; // Can't do XHR - Give up
  }

  xhr.onreadystatechange = function() {
    var status;

    if (xhr.readyState != 4)
      return false;

    status = xhr.status;
    if (status !== 200) {
      response = '{"error": "Internal server error"}';
    } else {
      response = xhr.responseText;
    }

    loaded = true;
    while (callbacks.length > 0) {
      callbacks.pop()(response);
    }

    return (status === 200);
  };
  url += window.location.search;
  xhr.open('get', url, true);
  xhr.setRequestHeader('Accept', 'application/json');
  xhr.send();
}();

</script>

<div id="transition_helper" class="shift-with-hiw"></div>
 
<div class="hide show-md show-lg">
  
<div class="how-it-works-section panel-babu-muted panel-contrast page-container-responsive overlay">

  <a href="#" class="panel-close"></a>
  <div class="page-container-responsive">
    <div class="row row-space-top-2">
      <div class="col-sm-12 col-md-4 text-center text-contrast">
        <div class="panel-body">
          <div class="responsive-hiw-step-wrapper">
            <div class="responsive-hiw-step step1"></div>
          </div>
          <h3>
            Discover Amazing Places
          </h3>
          <p>
            Find hosts with extra rooms, entire homes, and unique accommodations like castles and igloos.
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 text-center text-contrast">
        <div class="panel-body">
          <div class="responsive-hiw-step-wrapper">
            <div class="responsive-hiw-step step2"></div>
          </div>
          <h3>
            Book a Stay
          </h3>
          <p>
            Connect with hosts, confirm travel dates, and pay &mdash; all through Airbnb's trusted services.
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 text-center text-contrast">
        <div class="panel-body">
          <div class="responsive-hiw-step-wrapper">
            <div class="responsive-hiw-step step3"></div>
          </div>
          <h3>
            Suits
          </h3>
          <p>
            Feel at home, anywhere you go in the world. <a href='#'>Learn more</a> about to Stylior.
          </p>
        </div>
      </div>
    </div>
    <div class="row row-space-top-4 row-space-4 text-center text-contrast">
      <div class="col-12">
        <p ><a href='#'>Learn more</a> about hosting on Stylior and show your guests they're right where they belong.
        </p>
      </div>
    </div>
  </div>
</div>

</div>
<br>
<br>
<br>
<br>
<div class="row-space-8">
    <div class="media-photo media-photo-block discovery-hero">
      <div class="media-cover media-cover-dark discovery-hero-image"
           style="background-image:url(<?php echo $base_url_views;?>images/banner-image-6383f5c776f3794e320c967a547d946f.jpg)">
      </div>
      <div class="row row-table row-full-height">
        <div class="col-12 col-middle text-center text-contrast panel-body">
          <div class="h1 row-space-1">
            Fashion Defined
          </div>
          <div class="text-lead row-space-2">
            Explore our collections.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>