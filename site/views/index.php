<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
</style>


<main class="cd-main-content" id="head"> 
<div class="banner" id="ban">
	<?php
	 $homeadd = $this->footer->homeadd();
	 if($homeadd != '' && count($homeadd) > 0) {
	 foreach($homeadd as $homeimage)
	 {
     ?>
		<a href="<?php echo $homeimage->links; ?>"><img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" style="width:100%;" alt="Stylior Fashion Store Online"></a>
	<?php break; }} ?>
</div>
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
		<div><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>"></a></div>
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
 		
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>"></a></div>
<?php } ?>
<?php  $i++; } } ?>
</div>
<div class="shop-btn">
	<a href="<?php echo $base_url; ?>3dshirt" id="shop" style="background:none;" title="Buy Tailor Made Mens Shirts"><img src="<?php echo $base_url_views; ?>images/Shop-Now-button.png" alt="Buy Tailor Made Mens Shirts" /></a>
</div>
<div class="columns-grp">
<?php
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
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>" title="<?php echo $firstrowimg->image; ?>" ><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>" alt="<?php echo $firstrowimg->image; ?>" ></a></div>
<?php  $i++; } } ?>
</div>
<div class="columns-grp" id="col">
<?php
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
<div class="<?php echo $classapply; ?>"><a href="<?php echo $firstrowimg->links; ?>"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>"  style="" ></a></div>
<?php  $i++; } } ?>
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