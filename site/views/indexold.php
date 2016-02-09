<?php include('includes/header.php'); ?>
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
	<noscript>
	<!-- /header -->
<main class="cd-main-content">
        <div class="global-site-notice noscript">
						<div class="notice-inner">
							<p>
								<strong>JavaScript seems to be disabled in your browser.</strong><br />
								You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
						</div>
					</div>
				</noscript>
	<section class="main-container col1-layout">
		<div class="container">
			<div class="mt-widget-slider row">
				<div class="mt-preface">
				<div class="" id="widget-807245c59e5dba3a8cb41b0752b40bcc">
				
				<!-- Banner Start -->
					<div class="owl-carousel ">
					 <?php if($allbanner != '' && count($allbanner) > 0) {
						foreach($allbanner as $banner) {
						?>
						<div class="col-lg-12  col-md-12  col-sm-12  col-xs-12  ">
							<div class="item widget-slide">
								<a title="" href="#" class="fade-on-slideshow-hover">
									<img class="img-responsive" src="<?php echo $http_host;?>/upload/<?php echo $banner->image; ?>" alt="Chickkadee" />
								</a>
							</div>
						</div>
					 <?php }} ?>	
					</div>
				<!-- Banner End -->	
				<script type="text/javascript" src="<?php echo $base_url_views;?>js/frontend.js"></script>
				<script type="text/javascript">
					new MT.Widget('widget-807245c59e5dba3a8cb41b0752b40bcc', {
						animation: {"enable":false,"animationName":null,"animationDelay":300,"itemSelector":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/wow\/wow.js"},
						parallax: {"enable":false,"type":null,"overlay":null,"video":{"src":null,"volume":false},"image":{"src":null,"fit":null,"repeat":null},"file":{"poster":null,"mp4":null,"webm":null,"volume":false}},
						carousel: {"enable":true,"pagination":true,"autoPlay":false,"items":1,"singleItem":true,"lazyLoad":true,"lazyEffect":false,"addClassActive":true,"navigation":true,"navigationText":["<i class=\"fa fa-angle-left\"><\/i>","<i class=\"fa fa-angle-left\"><\/i>"],"transitionStyle":"fade","engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/owl-carousel\/owl.carousel.js"},
						carouselConfig: null,
						kenburns: {"enable":false,"images":[],"overlay":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/kenburns.js"}        });
				</script>
				</div>
				</div>
			</div>
		</div>

			<div class="main-breadcrumbs">
				<div class="container">
					 <div class="main_content">
						 <div class="row">
							<div class="col-lg-12"></div>
						</div>
					 </div>
				</div>
			</div>
			<div class="main-top">
				<div class="container">
					<div class="main">
						<div class="row">
							<div class="clearfix">
								<div class="" id="widget-065f4db9f7cc7c03890dedaf72555680">
									<div class="">
											<?php  	
													if($homepro != '' && count($homepro) > 0) {   
													foreach($homepro as $homeprod) {
												?> 

											<div class="col-lg-6  col-md-6  col-sm-6  col-xs-12  ">
												<div class="block-banner-bottom">
													<a href="<?php echo $base_url;?>home/lists/?cat=<?php echo $homeprod->id; ?>">																					
													<div class="project custom-block-top1">
														<div class="overlay">&nbsp;</div>
														<div class="opacity"><h2><?php echo $homeprod->cname; ?></h2></div>
														<a href="#"> <img class="" src="<?php echo $http_host;?>/upload/<?php echo $homeprod->image; ?>" alt="" height="300px" width="450px" /> </a>
													</div>
													</a>
													
												</div>           
											</div>
													<?php }} ?> 
									</div>
										<script type="text/javascript" src="<?php echo $base_url_views;?>images/frontend.js"></script>
										<script type="text/javascript">
											new MT.Widget('widget-065f4db9f7cc7c03890dedaf72555680', {
												animation: {"enable":false,"animationName":null,"animationDelay":300,"itemSelector":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/wow\/wow.js"},
												parallax: {"enable":false,"type":null,"overlay":null,"video":{"src":null,"volume":false},"image":{"src":null,"fit":null,"repeat":null},"file":{"poster":null,"mp4":null,"webm":null,"volume":false}},
												carousel: {"enable":false,"pagination":false,"autoPlay":false,"items":4,"singleItem":false,"lazyLoad":true,"lazyEffect":false,"addClassActive":true,"navigation":false,"navigationText":[null,null],"transitionStyle":false,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/owl-carousel\/owl.carousel.js"},
												carouselConfig: null,
												kenburns: {"enable":false,"images":[],"overlay":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/kenburns.js"}        });
										</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-main">
			     <div class="main-content container">
				     <div class="row">
                        <div class="col-main">
                            <div class="std"><p>MT Aries Responsive magento themes</p></div><div class="" id="widget-c5fd1ca39cdef99f920e601b2c745ea9">
								<div class="col-lg-12">
								   <div class="wapper-tab row">
									   <div class="col-lg-12">
											<div class="container-title">
												<div class="bg-title-inner"><h2>Latest Products</h2></div>
											</div>
									   </div>
									</div>
								</div>
        <div class="category-products">
			<ul class="products-grid  owl-carousel ">
				<?php  	
					if($allproductshome != '' && count($allproductshome) > 0) {   
					foreach($allproductshome as $product) {
				?>   
		<li class="item">
            <div class="catpanel">
                <div class="content">
                    <div class="product-hover">
					<?php 
					$date1 = $product->added_date;
					$date2 = date('Y-m-d');
					$diff = abs(strtotime($date2) - strtotime($date1));
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					$size = $product->size;
					$color = $product->colour;
					$quantity = $this->footer->procountinventry($size,$color,$product->id); 
					if($quantity!="" && count($quantity)>=0){
						$qty=$quantity->qty;
					} else {
						$qty='0';
					} ?>
					
                        <a href="#" title="Slim-fit casual shirt" class="product-image">
                            <span class="custom-feature">
							 <?php if($days < 8){ ?>
							<span class="product-new-label">New</span>
							<?php } ?>
							 <?php if($product->discount != '' && $product->discount != '0') { ?>
							<span class="product-sale-label">Sale</span>
							 <?php } ?>
							</span>
                                <span class="front margin-image">
                                    <img class="img-responsive lazyOwl" data-src="<?php echo $http_host;?>/upload/products/<?php echo $product->image; ?>" src="<?php echo $base_url_views;?>images/loader.gif" alt="Slim-fit casual shirt" />
                                </span>
                        </a>
                        
						<div class="product-intification-box"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                        <div class="top-actions-inner top-actions-hide custom-top-actions-hide">
                            <div class="product-wap-right">
                                <div class="addtocart br">
                                    <p> <span><span><a class="button btn-cart borderss" href="<?php echo $base_url; ?>home/details/<?php echo $product->id ?>">View Details</a></span></span> </p>
									
									 
                                 </div>
                            </div>
                           
                            <div class="top-inner"><div class="table"></div></div>      
						</div>
                    </div>
					<h3 class="product-name">
					<a href="<?php echo $base_url; ?>home/details/<?php echo $product->id ?>" title="<?php ?>"> <?php echo $product->pname; ?>  </a></h3>
               
				<div class="price-box">
					 
					<?php if($product->discount != "0" && $product->discount!="") { ?>		
					<p class="old-price">
					<span class="price">Regular Price:</span>
					<span class="price" id="old-price-42">Rs./-<?php echo $product->price ;	?></span>
					</p>
					
                    <p class="special-price">
                    <span class="price">Special Price</span>
					<span class="price" id="product-price-42">Rs/-<?php  $price = $product->price - ( $product->price * ($product->discount/100)) ; echo $price; ?></span>
					</p>
					<?php } else {?>
					
					<p class="special-price">
                    <span class="price">Regular Price</span>
					<span class="price" id="product-price-42">Rs/-<?php echo $product->price ;	?></span>
					</p>
					
					 <?php } ?>
				</div>

                </div>
            </div>
		<?php }} ?>
        </li>
</ul>
</div>
</div>
<script type="text/javascript" src="<?php echo $base_url_views;?>js/frontend.js"></script>
<script type="text/javascript">
    new MT.Widget('widget-c5fd1ca39cdef99f920e601b2c745ea9', {
        animation: {"enable":false,"animationName":null,"animationDelay":300,"itemSelector":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/wow\/wow.js"},
        parallax: {"enable":false,"type":null,"overlay":null,"video":{"src":null,"volume":false},"image":{"src":null,"fit":null,"repeat":null},"file":{"poster":null,"mp4":null,"webm":null,"volume":false}},
        carousel: {"enable":true,"pagination":false,"autoPlay":false,"items":4,"singleItem":false,"lazyLoad":true,"lazyEffect":false,"addClassActive":true,"navigation":false,"navigationText":[null,null],"transitionStyle":false,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/owl-carousel\/owl.carousel.js"},
        carouselConfig: null,
        kenburns: {"enable":false,"images":[],"overlay":null,"engineSrc":"http:\/\/mt-beshop.magentheme.com\/js\/mt\/extensions\/jquery\/plugins\/kenburns.js"}    });
</script>
</div>
</div>
</div>
</div>
    
	<div class="parallax">
        <div class="main">
            <div class="row">
                <div class="mt-parallax"></div>
            </div>
        </div>
    </div>
            
</section>
 <?php include('includes/footer.php'); ?>