<?php include ('includes/header.php'); 

$base_url_views = $this->config->item('base_url_views');
?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script type="text/javascript" src="<?php echo  $base_url_views; ?>js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="<?php echo  $base_url_views; ?>js/jssor_4.js"></script>

<script type="text/javascript">
(function(doc) {

    var addEvent = 'addEventListener',
        type = 'gesturestart',
        qsa = 'querySelectorAll',
        scales = [1, 1],
        meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

    function fix() {
        meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
        doc.removeEventListener(type, fix, true);
    }

    if ((meta = meta[meta.length - 1]) && addEvent in doc) {
        fix();
        scales = [.25, 1.6];
        doc[addEvent](type, fix, true);
    }

}(document));
</script>
 <style>
        
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('<?php echo  $base_url_views; ?>img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
    </style>

<script type="text/javascript">
(function(doc) {

	var addEvent = 'addEventListener',
	    type = 'gesturestart',
	    qsa = 'querySelectorAll',
	    scales = [1, 1],
	    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

	function fix() {
		meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
		doc.removeEventListener(type, fix, true);
	}

	if ((meta = meta[meta.length - 1]) && addEvent in doc) {
		fix();
		scales = [.25, 1.6];
		doc[addEvent](type, fix, true);
	}

}(document));
</script>
<!-- !doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/reset.css">
 <link rel="stylesheet" href="<?php echo $base_url_views; ?>newheader/css/style.css">
 <script src="<?php echo $base_url_views; ?>newheader/js/modernizr.js"></script> 
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>newheader/css/jPushMenu.css" />
<title>Stylior</title>
</head>
<body>

<div class="highlight-content">
<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-high">
<span>50% off on all products CODE50</span>
</div>

<header class="cd-main-header">
  <ul class="top-links">
    <li><a href="#">Sign in</a></li>
    <li><a href="#">Insider</a></li>
    <li><a href="#" class="country">Ship to</a></li>
    <li><a href="#" class="toggle-menu menu-right push-body cart-icon cart-click"><span>Bag</span><span class="cart-quantity">1</span></a></li>
  </ul>
  <div class="line-holder">
    <div class="line left-line"></div>
    <div class="line right-line"></div>
  </div>
  <a class="cd-logo" href="#0"><img src="<?php echo $base_url_views; ?>newheader/img/foot-logo-img.png" alt="Logo"></a>
  <ul class="cd-header-buttons">
    <li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>
    <li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
  </ul>
 </header -->

<!-- your content here -->

<!-- /header -->
<main class="cd-main-content">

<style>

#ban{margin-top:7%;}

@media only screen and (max-width : 853px){

#ban{margin-top:18%;}
#how{margin-top:25%;}

}

@media only screen and (max-width : 480px){
#ban{margin-top:35%;}

#how{margin-top:30%;}


}

.r_caption > h2 {
    color: #73bba1;
    font-family: monospace;
    line-height: 31px;
    text-shadow: 0 0 5px #00bbff;
}
.r_caption > p {
    color: #fff;
    font-size: 16px;
}


.r_caption {
    color: #fff;
    left: 50%;
    margin-left: -30%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px 4px #000;
    top: 50%;
    width: 60%;
}
a.button.center-fill.hollow, button.button.center-fill.hollow {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
    border-color: #fff;
    color: #fff;
    margin: 0;
    min-width: 116px;
    padding: 5px;
    width: auto;
	border-radius: 5px;
}
a.button.center-fill:active::before, a.button.center-fill:focus::before, a.button.center-fill:hover::before, button.button.center-fill:active::before, button.button.center-fill:focus::before, button.button.center-fill:hover::before
{
transform:scale(1)
}

a.button.center-fill::before, button.button.center-fill::before {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scale(0);
    transition-duration: 0.2s;
    transition-property: transform;
    transition-timing-function: ease-out;
    z-index: -1;
}
a.button.center-fill, button.button.center-fill {
    backface-visibility: hidden;
    background: #fff none repeat scroll 0 0;
    border: 2px solid #000;
    box-shadow: 0 0 1px transparent;
    color: #000;
    display: inline-block;
    font-family: "Gotham A","Gotham B";
    font-size: 1.3rem;
    font-style: normal;
    font-weight: 500;
    padding: 20px 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    transform: translateZ(0px);
    transition-duration: 0.2s;
    transition-property: color;
    vertical-align: middle;
    width: 200px;
}

.main-slider{
margin-top:116px;
width:100%;
}
</style>


<main class="cd-main-content" id="head"> 



<div class="main-slider">
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
       
		<!-- <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php //echo $base_url_views; ?>img/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="<?php //echo $base_url_views; ?>img/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="<?php //echo $base_url_views; ?>img/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="<?php //echo $base_url_views; ?>img/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="<?php //echo $base_url_views; ?>img/c-slide-3.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="<?php //echo $base_url_views; ?>img/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div>
            </div>           
        </div>-->

			
		
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<?php
		 $homeadd = $this->footer->homeadd1();		 
		
		 if($homeadd != '' && count($homeadd) > 0) {
			 foreach($homeadd as $homeimage)
			 {
			
			 ?>
			 
				<div data-p="225.00" style="display: none;">
					<img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" data-u="image" style="width:100%;" alt="Stylior Fashion Store Online"> 
					<!-- <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;background-color: rgba(235, 81, 0, 0.5);"><?php echo $homeimage->slider_content; ?> </div>-->
					
					<div style="font-size: 25px; margin-top: -101px;" class="r_caption">
					<h2><?php echo $homeimage->slider_header; ?></h2>
					<p><?php echo $homeimage->slider_content; ?></p>
					<a class="button center-fill medium hollow ember-view<?php echo $homeimage->id; ?>" title="<?php echo $homeimage->button_label; ?>" href="<?php echo $homeimage->links; ?>" id="ember861"><?php echo $homeimage->button_label; ?></a>
				  </div>
					<style>
					a.ember-view<?php echo $homeimage->id; ?>.button.center-fill::before{
						background:#<?php echo ($homeimage->button_bgcolor)?$homeimage->button_bgcolor:000; ?> none repeat scroll 0 0;
						border-radius:5px;
					}
					</style>
				</div>
				
			<?php 
			}
			
		} ?>
                    
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>

    </div>

</div>
<style>
.tab {
    background: rgba(255, 255, 255, 0.5) none repeat scroll 0 0;
    border: 1px solid #00bbff;
    border-radius: 5px;
    box-shadow: 0 0 10px #00bbff;
    margin-top: -80px;
}
.dates {
    font-size: 17px;
    padding: 10px;
    text-shadow: 10px 1px 10px #00bbff;
}
.tab-inner {
    padding: 0 10px;
}
.slide {
    float: left;
	padding-top:75px;
	padding-bottom: 35px;

}
.item 
{
	 text-align: center;
}
.item a .img-responsive
{
	margin: 5px auto;
}
</style>
<?php

	 $homecontent = $this->footer->getHomepageContent();	
?>
<section class="callout">
	<div class="container">
		<div class="row">		 
			<div class="col-xs-6 col-md-3">
				<div class="tab">
					<div class="tab-inner">
						<div class="dates">
						<?php echo  $homecontent["content_title"] ?>
						</div>
						<h2 class="heading"><?php  echo $homecontent["content_header"] ?></h2>
						<p class="details"><?php  echo $homecontent["content_text"] ?></p>
					</div>
					<a href="<?php  echo $homecontent["content_link_url"] ?>" class="cta btn"><?php  echo $homecontent["content_link_label"] ?></a>
				</div>
			</div>
			<div class="col-xs-6 col-md-9">
<div class=" flexslider-container">
 
 

<div class="row flexslider">
<ul class="slides">
<li class="slide">
 
<div class="item">
<a href="/suits/"><img src="<?php echo $base_url_views; ?>img/suit_madison_baltic_blue.jpg" class="img-responsive"></a>
<p class="title">CUSTOM SUITS</p>
<p class="description">Madison Baltic Blue Nailshead Suit</p>
 
<a href="/suits/" class="start">
See All Suits
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjhweCIgdmlld0JveD0iMCAwIDE1IDgiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDgiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGZpbGw9IiNDMzFBMjEiIGQ9Ik0xLjg1NSwxLjkzMWMwLTAuMTUzLDAuMDUxLTAuMzA2LDAuMTU3LTAuNDMyYzAuMjM5LTAuMjg3LDAuNjY0LTAuMzI1LDAuOTUyLTAuMDg2TDcuNSw1LjE5bDQuNTM3LTMuNzc4CgkJYzAuMjg3LTAuMjM5LDAuNzEyLTAuMjAxLDAuOTUzLDAuMDg2YzAuMjM3LDAuMjg2LDAuMTk4LDAuNzEyLTAuMDg3LDAuOTUyTDcuOTMyLDYuNTg4Yy0wLjI1LDAuMjA5LTAuNjE0LDAuMjA5LTAuODY0LDAKCQlsLTQuOTctNC4xMzdDMS45MzgsMi4zMTYsMS44NTUsMi4xMjQsMS44NTUsMS45MzF6Ii8+CjwvZz4KPC9zdmc+" class="arrow red">
</a>
</div>
</li>

<li class="slide">
 
<div class="item">
<a href="/blazers/"><img src="<?php echo $base_url_views; ?>img/coat-hudson-camel-overcoat.jpg" class="img-responsive"></a>
<p class="title">CUSTOM OVERCOATS</p>
<p class="description">Hudson Camel Overcoat</p>
 
<a href="/blazers/" class="start">
See All Blazers &amp; Coats
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjhweCIgdmlld0JveD0iMCAwIDE1IDgiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDgiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGZpbGw9IiNDMzFBMjEiIGQ9Ik0xLjg1NSwxLjkzMWMwLTAuMTUzLDAuMDUxLTAuMzA2LDAuMTU3LTAuNDMyYzAuMjM5LTAuMjg3LDAuNjY0LTAuMzI1LDAuOTUyLTAuMDg2TDcuNSw1LjE5bDQuNTM3LTMuNzc4CgkJYzAuMjg3LTAuMjM5LDAuNzEyLTAuMjAxLDAuOTUzLDAuMDg2YzAuMjM3LDAuMjg2LDAuMTk4LDAuNzEyLTAuMDg3LDAuOTUyTDcuOTMyLDYuNTg4Yy0wLjI1LDAuMjA5LTAuNjE0LDAuMjA5LTAuODY0LDAKCQlsLTQuOTctNC4xMzdDMS45MzgsMi4zMTYsMS44NTUsMi4xMjQsMS44NTUsMS45MzF6Ii8+CjwvZz4KPC9zdmc+" class="arrow red">
</a>
</div>
</li>

<li class="slide">
 
<div class="item">
<a href="/ties/accessory-traveler-case-in-black-canvas/"><img style="max-height:227px;" src="<?php echo $base_url_views; ?>img/shirt.jpg" class="img-responsive"></a>
<p class="title">Custom Shirts</p>
<p class="description">Classic Flannel Burgundy Gingham</p>
 
<a href="/ties/accessory-traveler-case-in-black-canvas/" class="start">
Learn More
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjhweCIgdmlld0JveD0iMCAwIDE1IDgiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDgiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGZpbGw9IiNDMzFBMjEiIGQ9Ik0xLjg1NSwxLjkzMWMwLTAuMTUzLDAuMDUxLTAuMzA2LDAuMTU3LTAuNDMyYzAuMjM5LTAuMjg3LDAuNjY0LTAuMzI1LDAuOTUyLTAuMDg2TDcuNSw1LjE5bDQuNTM3LTMuNzc4CgkJYzAuMjg3LTAuMjM5LDAuNzEyLTAuMjAxLDAuOTUzLDAuMDg2YzAuMjM3LDAuMjg2LDAuMTk4LDAuNzEyLTAuMDg3LDAuOTUyTDcuOTMyLDYuNTg4Yy0wLjI1LDAuMjA5LTAuNjE0LDAuMjA5LTAuODY0LDAKCQlsLTQuOTctNC4xMzdDMS45MzgsMi4zMTYsMS44NTUsMi4xMjQsMS44NTUsMS45MzF6Ii8+CjwvZz4KPC9zdmc+" class="arrow red">
</a>
</div>
 
 
<div class="item">
<a href="/accessories/"><img src="<?php echo $base_url_views; ?>img/bag_navy_garment_bag.jpg" class="img-responsive"></a>
<p class="title">ACCESSORIES</p>
<p class="description">Convertible Garment Weekendy Bag</p>
 
<a href="/accessories/" class="start">
See How It Works
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjhweCIgdmlld0JveD0iMCAwIDE1IDgiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDgiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGZpbGw9IiNDMzFBMjEiIGQ9Ik0xLjg1NSwxLjkzMWMwLTAuMTUzLDAuMDUxLTAuMzA2LDAuMTU3LTAuNDMyYzAuMjM5LTAuMjg3LDAuNjY0LTAuMzI1LDAuOTUyLTAuMDg2TDcuNSw1LjE5bDQuNTM3LTMuNzc4CgkJYzAuMjg3LTAuMjM5LDAuNzEyLTAuMjAxLDAuOTUzLDAuMDg2YzAuMjM3LDAuMjg2LDAuMTk4LDAuNzEyLTAuMDg3LDAuOTUyTDcuOTMyLDYuNTg4Yy0wLjI1LDAuMjA5LTAuNjE0LDAuMjA5LTAuODY0LDAKCQlsLTQuOTctNC4xMzdDMS45MzgsMi4zMTYsMS44NTUsMi4xMjQsMS44NTUsMS45MzF6Ii8+CjwvZz4KPC9zdmc+" class="arrow red">
</a>
</div>
</li>
 

 
 
</ul>
</div></div>
</div>
		</div>
	</div>
</section>
<div style="height:350px;background-color:#000000;background-image: url('<?php echo $base_url_views; ?>img/black_block_background.jpg')">

<div style="float:right;padding-right:10%;color:#ffffff;">
<div style="text-align:center;width:100%;padding-top:5%;">

<h4>STEP INSIDE THE</h4>

<h1>PRIVATE COLLECTION</h1>

Available only in our global mens stores, our Private Collection represents the <br>
pinnacle of personal style and attention to detail.
<br>
<a href="/accessories/" class="start">
See How It Works
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjhweCIgdmlld0JveD0iMCAwIDE1IDgiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDgiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGZpbGw9IiNDMzFBMjEiIGQ9Ik0xLjg1NSwxLjkzMWMwLTAuMTUzLDAuMDUxLTAuMzA2LDAuMTU3LTAuNDMyYzAuMjM5LTAuMjg3LDAuNjY0LTAuMzI1LDAuOTUyLTAuMDg2TDcuNSw1LjE5bDQuNTM3LTMuNzc4CgkJYzAuMjg3LTAuMjM5LDAuNzEyLTAuMjAxLDAuOTUzLDAuMDg2YzAuMjM3LDAuMjg2LDAuMTk4LDAuNzEyLTAuMDg3LDAuOTUyTDcuOTMyLDYuNTg4Yy0wLjI1LDAuMjA5LTAuNjE0LDAuMjA5LTAuODY0LDAKCQlsLTQuOTctNC4xMzdDMS45MzgsMi4zMTYsMS44NTUsMi4xMjQsMS44NTUsMS45MzF6Ii8+CjwvZz4KPC9zdmc+" class="arrow red">
</a>
</div>
</div>
</div>
<div align="center">
<div>
<h1>HOW BLACK LAPEL WORKS</h1>
<h4>Create a custom wardrobe that fits your lifestyle in 3 simple steps.</h4>
</div>
<div align="center">
	<div class="col-xs-12 col-md-4">
	<img src="<?php echo $base_url_views; ?>img/left_how.jpg" width="70%">
	<br>
	Select a Fabric
	</div>
	<div class="col-xs-12 col-md-4">
	<img src="<?php echo $base_url_views; ?>img/middle_how.jpg" width="70%">
	<br>
	Design Your Garment
	</div>
	<div class="col-xs-12 col-md-4">
	<img src="<?php echo $base_url_views; ?>img/right_how.jpg" width="70%">
	<br>
	Take Your Measurements
	</div>
</div>
</div>



<?php /* ?>


<div class="banner" id="ban">
	<?php
	 $homeadd = $this->footer->homeadd();
	 
	
	 if($homeadd != '' && count($homeadd) > 0) {
	 foreach($homeadd as $homeimage)
	 {
     ?>
		<a href="<?php echo $homeimage->links; ?>"><img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" style="width:100%;" alt="Stylior Fashion Store Online"></a>
	<?php break; 
	}
	} ?>
</div>
<?php */?>
<!-- div class="banner-text" id="how"><a href="javascript:void(0);" onclick="$('#howitworks').slideDown();$('.highlight-content').hide();" title="How it Works">HOW IT WORKS</a></div -->

<!-- div class="columns-grp">
	<div class="column-sect4">
				<!-- iframe id="fitvid0" src="https://player.vimeo.com/video/136938084" width="100%" height="669" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe 

				<video width="100%" controls>
				  <source src="http://www.stylior.com/Bespoke-Design-by-Stylior.mp4" type="video/mp4">
				  <source src="http://www.stylior.com/Bespoke-Design-by-Stylior.mp4" type="video/ogg">
				  Your browser does not support HTML5 video.
				</video>
 	 </div>
</div-->
<div class="columns-grp">

<?php /*
<!-- script src="http://prelaunch.stylior.com/js/jquery.fitvids.js"></script -->
<!-- script>
        // Basic FitVids Test
     $(".container").fitVids();
        // Custom selector and No-Double-Wrapping Prevention Test
     $(".container").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
</script -->
<?php 

		$firstrow = $this->footer->firstrow();
		
		if($firstrow != '' && count($firstrow) > 0) {
		if(count($firstrow) == '4'){
			$classapply = 'column-sect';
		}
		if(count($firstrow) == '2'){
			$classapply = 'column-sect2';
		}
		if(count($firstrow) == '3'){
			$classapply = 'column-sect3';
		}
		if(count($firstrow) == '1'){
			$classapply = 'column-sect4';
		}
		$i=0;	
		foreach($firstrow as $firstrowimg)
		{
			if($i == '0') {
		?>
		<div class="<?php echo $classapply; ?>">
		<div><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>">
		 <div style="position: absolute;  width: 480px; height: 120px; font-size: 50px; color: #ffffff; background-color: rgba(235, 81, 0, 0.5);margin:10px auto"><?php echo $firstrowimg->slider_content; ?> </div>
		</a>
		
		
		
		</div>
		
		
		<!--<video width="100%" height="100%" controls="controls" muted="muted" autoplay="autoplay" loop="" preload="auto" poster="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>">
				  <source src="http://www.stylior.com/Bespoke-Design-by-Stylior.mp4" type="video/mp4">
				  <source src="http://www.stylior.com/Bespoke-Design-by-Stylior.mp4" type="video/ogg">
				  Your browser does not support HTML5 video.
				</video> -->
		</div> 
			<!-- div class="<?php echo $classapply; ?>">
				<iframe id="fitvid0" src="https://player.vimeo.com/video/136938084" width="100%" height="669" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 			</div -->
		<?php		
			} else { ?> 
 		
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>">

 <div style="position: absolute;  width: 480px; height: 120px; font-size: 50px; color: #ffffff; background-color: rgba(235, 81, 0, 0.5);margin:10px auto"><?php echo $firstrowimg->slider_content; ?> </div>


</a></div>
<?php }  ?>
<?php  $i++; } } */ ?>
</div>
<?php /*
<div class="shop-btn">
	<a href="<?php echo $base_url; ?>3dshirt" id="shop" style="background:none;" title="Buy Tailor Made Mens Shirts"><img src="<?php echo $base_url_views; ?>images/Shop-Now-button.png" alt="Buy Tailor Made Mens Shirts" /></a>
</div> */ ?>
<div class="columns-grp">
<?php /*
		$secondrow = $this->footer->secondrow();
		
		if($secondrow != '' && count($secondrow) > 0) {
		if(count($secondrow) == '4'){
			$classapply = 'column-sect';
		}
		if(count($secondrow) == '2'){
			$classapply = 'column-sect2';
		}
		if(count($secondrow) == '3'){
			$classapply = 'column-sect3';
		}
		if(count($secondrow) == '1'){
			$classapply = 'column-sect4';
		}
		$i=0;	
		foreach($secondrow as $firstrowimg)
		{
 		?>
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>" title="<?php echo $firstrowimg->image; ?>" ><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>" alt="<?php echo $firstrowimg->image; ?>" >

 <div style="position: absolute;  width: 480px; height: 120px; font-size: 50px; color: #ffffff; background-color: rgba(235, 81, 0, 0.5);margin:10px auto"><?php echo $firstrowimg->slider_content; ?> </div>


</a></div>
<?php  $i++; } } */ ?>
</div>
<div class="columns-grp" id="col">
<?php /*



		$thirdrow = $this->footer->thirdrow();
		
		if($thirdrow != '' && count($thirdrow) > 0) {
		if(count($thirdrow) == '4'){
			$classapply = 'column-sect';
		}
		if(count($thirdrow) == '2'){
			$classapply = 'column-sect2';
		}
		if(count($thirdrow) == '3'){
			$classapply = 'column-sect3';
		}
		if(count($thirdrow) == '1'){
			$classapply = 'column-sect4';
		}
 		$i=0;	
		foreach($thirdrow as $firstrowimg)
		{
 		?>
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>"  style="" >

 <div style="position: absolute;  width: 480px; height: 120px; font-size: 50px; color: #ffffff; background-color: rgba(235, 81, 0, 0.5);margin:10px auto"><?php echo $firstrowimg->slider_content; ?> </div>


</a></div>
<?php  $i++; } } */ ?>
</div>

</main>
<?php include ('includes/footer.php'); ?>
<!-- script src="<?php echo $base_url_views; ?>js/jquery.fitvids.js"></script>
 <script>
        // Basic FitVids Test
        $(".column-sect2").fitVids();
        // Custom selector and No-Double-Wrapping Prevention Test
        $(".column-sect2").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
</script-->
<!-- your content ends -->
  
<!--popup-->

	<!-- div class="destination-list">
        <img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list" onclick="jQuery('#destination-list').hide(); ">
        <h2>Select Your Shipping Destination</h2>
        <div class="scroll-area"><div class="destination-list-group">
            <h3>Middle East</h3>
            <ul>
            	<li><a href="#">Bahrian</a></li>
                <li><a href="#">Egypt</a></li>
                <li><a href="#">Jordan</a></li>
                <li><a href="#">Kuwait</a></li>
                <li><a href="#">Qatar</a></li>
            </ul>
        </div>
        <div class="destination-list-group">
            <h3>Asia</h3>
            <ul>
            	<li><a href="#">China</a></li>
                <li><a href="#">Hong Kong</a></li>
                <li><a href="#">India</a></li>
                <li><a href="#">Korea, Republic of</a></li>
                <li><a href="#">Philippines</a></li>
                <li><a href="#">Singapore</a></li>
            </ul>
        </div>
        <div class="destination-list-group">
            <h3>Asia</h3>
            <ul>
            	<li><a href="#">China</a></li>
                <li><a href="#">Hong Kong</a></li>
                <li><a href="#">India</a></li>
                <li><a href="#">Korea, Republic of</a></li>
                <li><a href="#">Philippines</a></li>
                <li><a href="#">Singapore</a></li>
            </ul>
        </div>
        <div class="destination-list-group">
            <h3>Asia</h3>
            <ul>
            	<li><a href="#">China</a></li>
                <li><a href="#">Hong Kong</a></li>
                <li><a href="#">India</a></li>
                <li><a href="#">Korea, Republic of</a></li>
                <li><a href="#">Philippines</a></li>
                <li><a href="#">Singapore</a></li>
            </ul>
        </div>
		<p class="help-text">More information about shipping in the US and Internationally is available in our <a href="/on/demandware.store/Sites-brooksbrothers-Site/default/Help-Show?cid=help-shipping" class="help-link">help section</a>.</p>
		</div>
	</div -->
 </body>
</html>