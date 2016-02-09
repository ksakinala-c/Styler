<?php include ('includes/header.php'); 
function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
}
?>
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
<br><br><br><br>
<main class="single-page productextended-page cd-main-content">
	<div class="breadcrumb-holder">
		<div class="container">
			<ul class="breadcrumb pull-left">
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="#"><?php echo $this->home_model->catname($productinfo->categoryid); ?></a></li>
				<li class='active'><a href="#"><?php echo $productinfo->pname; ?></a></li>
			</ul>
 		</div><!--container-->
	</div><!--breadcrumb-holder-->
	<!--<div id="single-product" class="inner-top-50 wow fadeIn">
	<div class="container">
		&nbsp;
	</div>
</div>
<div class="single-product-tab">
</div> /.single-product-tab -->

<div class="lookbook-slider" style="margin:0 auto;">
 	  <?php
		if($prodetails != '' && count($prodetails) > 0) {  
		foreach($prodetails as $product)
		{
			//print_r($product);
 		?>
	<div class="item">
		<a href="<?php echo $base_url; ?>home/details/<?php echo $product->id; ?>/<?php echo $thirdid; ?>" class="single-look">
			<span class="shop-this-look"><?php echo $product->name; ?></span>
			<?php if($product->image != '') { ?> 
				<img src="<?php echo $http_host;?>/upload/allstyle/<?php echo $product->image; ?>" alt="" title="Select This Style">
            <?php } else { ?>
				<img src="<?php echo $http_host;?>/upload/noimage.png" alt="" title="Select This Style">
			<?php } ?>
		   <span class="shop-this-look">
		     	<?php if($this->session->userdata('currencycode') == 'INR') { ?>
						Rs.<?php echo $product->sellingprice ;?> 
				<?php } else { 
						echo $this->session->userdata('currencycode')." "; 
 						echo roundUpToAny(( $product->sellingprice / ( $this->session->userdata('currencyvalue') * 0.9) )); 
				} ?>
	 
		   </span>
		</a> 
	</div>
		<?php }} else { ?>
			<div class="item" align="center" style="color:blue"> NO STYLE FOUND.!!</div>
		<?php } ?>
	<!-- .item -->
</div>
 
<div class="container">
		<div class="row single-product-row">			
			<div class="col-sm-6 col-lg-5 body-holder body-holder-style-2">
				<div class="product-info">
					<?php //print_r($productinfo); ?>
					<div class="excerpt inner-vs">
						<h3 style="color:#ee5e33;">Not Happy? Make your own design</h3>
					</div>
                    <div class="add-to-bag-holder1">
					<?php if($this->session->userdata('userid') == '') { ?>
						<a target="_blank" href="<?php echo $http_host; ?>/home/d3login/?id=<?php echo $productinfo->foldername; ?>" class="add-bag-button btn btn-block"><img src="<?php echo $base_url_views; ?>assets/images/cart-img.png">Customize Now</a>
					<?php } else { ?>
						<a target="_blank" href="<?php echo $http_host; ?>/3dshirt?id=<?php echo $productinfo->foldername; ?>" class="add-bag-button btn btn-block"><img src="<?php echo $base_url_views; ?>assets/images/cart-img.png">Customize Now</a>
					<?php } ?>
					</div>

				</div>
			</div>
            <div class="col-sm-6 col-lg-6 gallery-holder">
                 <div id="product-simple-tab">
						<div class="tabs">
							<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								<li><a data-toggle="tab" href="#reviews">Reviews (<?php echo $this->account_model->totalreview($this->uri->segment(3)); ?>)</a></li>
							</ul>

							<div class="tab-content bewear-tab-content">
								<div id="description" class="tab-pane in active">
									<p class="text" style="text-align:justify;">
										<?php echo $productinfo->description; ?></p>
										 
								</div>								
								<div id="reviews" class="tab-pane">
									 <?php $user_review=$this->account_model->review($this->uri->segment(3)); 
										if($user_review != '' && count($user_review) > 0) {
										foreach($user_review as $userreview)
										{ 
 								     ?>
									<article class="review">
										<div class="header">
											<div class="" title="Rated 5.00 out of 5">
											<?php
												$rat=$userreview->ratings;
												for($j=1;$j<6;$j++)
												{
													if($rat>=$j){
												?>
												 <img src="<?php echo $http_host;?>/upload/ratting/star1.jpg" alt="" />
												 <?php } else {  ?>
												  <img src="<?php echo $http_host;?>/upload/ratting/star2.png" alt="" />
											<?php }} ?>
											</div>
											<h4 class="author"><?php echo $this->home_model->getusername($userreview->userid); ?>,</h4>
											<span class="date"><?php echo $userreview->date; ?></span>
										</div>
										<p class="text">
											<?php echo $userreview->review; ?>
										</p>
									</article>
										<?php }} else { ?>
									<!-- article class="review">No Review Found.!!</article -->
									<?php } ?>
 
									<!-- form class="review-form">
										<label class="raty-label">
											Your rating for this item
										</label>
										<div class="star-rating gray" title="Rated 5.00 out of 5">
											<span style="width:80%">
												<strong class="rating">5.00</strong>
												out of 5
											</span>
										</div>
										
										<div class="form-group">
											<label for="review">Your review</label>
											<textarea rows="6" name="review" id="review" class="form-control"></textarea>
										</div>
										<button class="btn btn-primary" type="submit">Submit review</button>
									</form -->
								</div>
							</div>
						</div>
					</div>
                
			</div>
			<!--<div class="col-md-1 col-lg-1 hidden-xs hidden-sm hidden-md related-products-holder">
				<h5 class="related-title">Related</h5>
				<ul class="related-products">
					<li><a href="#"><img src="assets/images/blank.gif" data-echo="assets/images/products/relate.jpg" alt="" ></a></li>
					<li><a href="#"><img src="assets/images/blank.gif" data-echo="assets/images/products/relate1.jpg" alt="" ></a></li>
					<li><a href="#"><img src="assets/images/blank.gif" data-echo="assets/images/products/relate2.jpg" alt="" ></a></li>
				</ul>
			</div>-->
		</div-->
	</div>


</main>


 <?php include('includes/footer.php'); ?> 
 <!--iframe width="" height="" scrolling="no"><?php /* include('includes/footer.php'); */ ?></iframe-->

     <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
</body>
</html>
