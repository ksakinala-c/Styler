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
<script src="<?php echo $base_url_views; ?>js/header_cookie-ef612d1504fde35476fd3baf189d868b.js"> type="text/javascript"></script>

<!-- /header -->
<main class="cd-main-content">

<style>
.row-space-4{ /*margin-bottom:30px;*/ }
.btn-large {font-size: 16px; padding: 9px 27px;}
@media only screen and (max-width: 767px) {
.indeximage_responsive{width:100% !important;}
}

.btn-semi-transparent {
    background: rgba(255, 255, 255, 0.5) none repeat scroll 0 0;
    border-style: none;
}
.btn-contrast {
    background-color: #565a5c;
    border-color: #565a5c #565a5c #383b3c;
    color: #fff;
}
.btn {
    background: white none repeat scroll 0 0;
    border-color: #c4c4c4;
    color: #565a5c;
}
.btn-large {
    font-size: 16px;
    padding: 9px 27px;
}
.btn {
    font-size: 14px;
    padding: 7px 21px;
}
.btn {
    -moz-user-select: none;
    border: 1px solid;
    border-radius: 2px;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    line-height: 1.43;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}


}
</style>
<div class='span12 flash-container'></div>
<!-- script>
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
</script -->
<div id="transition_helper" class="shift-with-hiw"></div>

<div class="banner" style="width:100%;">
 <?php
	 $homeadd = $this->footer->homeadd();
	 if($homeadd != '' && count($homeadd) > 0) {
	 foreach($homeadd as $homeimage)
	 {
     ?>
		<img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" alt="" width="100%">
<?php break; }} ?>
</div>
<div class="banner-text"><a href="javascript:void(0);" onclick="$('#howitworks').slideDown();">How its works</a></div>


<!-- div class="p1-hero-wrapper shift-with-hiw">
  <div id="hero" data-native-currency="USD">
    <ul class="list-unstyled" id="slideshow">
 	 <?php
	 $homeadd = $this->footer->homeadd();
	 if($homeadd != '' && count($homeadd) > 0) {
	 foreach($homeadd as $homeimage)
	 {
     ?>
	 <li class="active">
          <img alt="<?php echo $homeimage->image; ?>" src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" width="100%" />
      </li>
	 
	 <?php }} ?>
    </ul>
  </div-->

  <!-- div class="search-area text-center page-container-responsive page-container-no-padding">
    <div class="va-container">
      <div class="intro-area va-middle">
       
          <a style="color:#fff; font-weight:bold; margin-top:204px;" href="javascript:void(0);" onclick="$('#howitworks').slideDown();" class="btn hide-sm btn-contrast btn-large btn-semi-transparent how-it-works">
            How It Works
          </a>
          <a href="#" class="mobile-discovery-arrow hide-md hide-lg hide">
            <i class="icon icon-chevron-down icon-white icon-size-2"></i>
          </a>
      </div>
    </div>
    </div -->
</div>

<div class="panel panel-dark">

  <div id="discovery-container">
    <div class="discovery-section hide page-container-responsive" id="upcoming-trips">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Your Upcoming Trip
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="discovery-saved-searches">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Start Your Next Adventure
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">&nbsp;
          
        </h2>
       
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module">
          
<div class="row" style="width:1200px;margin:0 auto;">

  <div class="col-lg-12 col-md-12 rm-padding-sm" style="padding-right:0px; padding-left: 0px;">

<?php
		$firstrow = $this->footer->firstrow();
		if($firstrow != '' && count($firstrow) > 0) {
		$i=0;	
		foreach($firstrow as $firstrowimg)
		{
 		?>
    <div class="discovery-card rm-padding-sm row-space-4  discovery-card-blank"
      style="float:left; <?php if( count($firstrow) != $i+1 ) { ?> margin-right:5px; <?php } ?>"
      sm-img-url="">
		<div class="text-center text-contrast va-container">
		  <div class="va-middle">
			  <a href="<?php echo $firstrowimg->links; ?>" target="_blank"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $firstrowimg->image; ?>" ></a> </div>
		</div>
	</div>
  	<?php  $i++; } } ?>
  </div>
	<div class="col-12">
           <a href="<?php echo $base_url; ?>category/Men" class=""><img class="indeximage_responsive" src="<?php echo $base_url_views; ?>images/Shop-Now-button.png"  style="margin-left: 37%;margin-bottom: 25px; "> </a>
           <br/>
          </div>

  <div class="col-lg-12 col-md-12 rm-padding-sm" style="padding-right:0px; padding-left: 0px;"> 

 

<?php
		$secondrow = $this->footer->secondrow();
		if($secondrow != '' && count($secondrow) > 0) {
		foreach($secondrow as $second)
		{
			 
		 
		?>
    <div class="discovery-card rm-padding-sm row-space-4  discovery-card-blank"
      style="float:left; <?php if( count($firstrow) != $i+1 ) { ?> margin-right:5px; <?php } ?> "
      sm-img-url="">
		<div class="text-center text-contrast va-container">
		  <div class="va-middle">
			  <a href="<?php echo $second->links; ?>" target="_blank"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $second->image; ?>" ></a> </div>
		</div>
	</div>
  	<?php  $i++; } } ?>
  </div>

   <div class="col-lg-12 col-md-12 rm-padding-sm" style="padding-right:0px; padding-left: 0px;margin-top:15px;float:left; "> 

<?php
		$thirdrow = $this->footer->thirdrow();
		if($thirdrow != '' && count($thirdrow) > 0) {
		$i=0;	
		foreach($thirdrow as $thirdrows)
		{
			 
		 
		?>
    <div class="discovery-card rm-padding-sm row-space-4  discovery-card-blank"
      style="float:left; <?php if( count($firstrow) != $i+1 ) { ?> margin-right:5px; <?php } ?> "
      sm-img-url="">
		<div class="text-center text-contrast va-container">
		  <div class="va-middle">
			  <a href="<?php echo $thirdrows->links; ?>" target="_blank"><img class="indeximage_responsive" src="<?php echo $http_host;?>/upload/banner/<?php echo $thirdrows->image; ?>" ></a> </div>
		</div>
	</div>
  	<?php  $i++; } } ?>
  </div>

 
  <div class="col-sm-12 text-center row-space-4 row-space-top-4 hide-sm">
    <a class="btn btn-large show-more hide">Show More</a>
  </div>
</div>


        </div>

        <!-- div class="hide all-destinations row-space-top-6">
          <h3 class="row-space-4 strong">All Top Destinations</h3>
<div class="row row-space-8">
    <div class="col-2">
        <p><a href="#">Amsterdam</a></p>
        <p><a href="#">Bali</a></p>
        <p><a href="#">Barcelona</a></p>
        <p><a href="#">Berlin</a></p>
    </div>
    <div class="col-2">
        <p><a href="#">Chicago</a></p>
        <p><a href="#">Copenhagen</a></p>
        <p><a href="#">Florence</a></p>
        <p><a href="#">Hong Kong</a></p>
    </div>
    <div class="col-2">
        <p><a href="#">Istanbul</a></p>
        <p><a href="#">Lisbon</a></p>
        <p><a href="#">London</a></p>
        <p><a href="#">Los Angeles</a></p>
    </div>
    <div class="col-2">
        <p><a href="#">Madrid</a></p>
        <p><a href="#">Miami</a></p>
        <p><a href="#">Montreal</a></p>
        <p><a href="#">New York</a></p>
    </div>
    <div class="col-2">
        <p><a href="#">Paris</a></p>
        <p><a href="#">Rio de Janeiro</a></p>
        <p><a href="#">Rome</a></p>
        <p><a href="#">San Francisco</a></p>
    </div>
    <div class="col-2">
        <p><a href="#">Seoul</a></p>
        <p><a href="#">Sydney</a></p>
        <p><a href="#">Tokyo</a></p>
        <p><a href="#">Venice</a></p>
    </div>
</div>

        </div-->


      </div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


  <?php include ('includes/footer.php'); ?>

  </body>
</html>
