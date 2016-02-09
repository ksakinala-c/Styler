<?php include ('includes/header.php'); 
function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
}
?>
<meta property="og:title" content="<?php echo $title;  ?>" />
<meta content="<?php echo $http_host;?>/upload/allstyle/large/<?php echo $prodetails->image; ?>" property="og:image">


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

<script>
	function validate()
	{
		var title = $("#title").val();
		if(title == '')
		{
			alert('Please Enter Title.');
			return false;
		}
		var review = $("#review").val();
		if(review == '')
		{
			alert('Please Enter Your Review.');
			return false;
		}
		
		var ratings = $("#ratings").val();
		if(ratings == '')
		{
			alert('Please Select Your Ratings.');
			return false;
		}
				
		$('#review-form').submit();
	}	
  </script>
<script type="text/javascript" src="<?php echo $base_url_views; ?>js/jquery-1.11.0.min.js"></script>
<script>
			$(document).ready(function() {
			$('.ratings').rating();
				$(".ratings .stars .star").click(function(){
				var count_elements = $('.ratings .stars .fullStar').length;
				$("#ratings").val(count_elements);
			});
});
</script> 

<!-- /header -->
<main class="cd-main-content">
<style>
#shirt{width:500px; height:650px;}
@media only screen and (max-width : 480px){
#pro1{margin-top:-7%;}
#tabp{margin-top:50%;}
#shirt{width:300px; height:auto;}

#monogram{display:block;padding:5px;border-radius:15px;background-color:#ccc;}


}
</style>
<br><br><br><br>
<!-- /header -->
<main class="single-page productextended-page">
	<div class="breadcrumb-holder">
		<div class="container">
			<ul class="breadcrumb pull-left">
			<?php $catdetails = $this->home_model->catdetails($productinfo->categoryid); ?>
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="<?php echo $base_url; ?>category/<?php echo $catdetails->pageurl; ?>"><?php echo $catdetails->cname; ?></a></li>
				<li><a href="#"><?php echo $productinfo->pname; ?></a></li>
				<li class='active'><?php echo $this->home_model->getstylename($prodetails->style_id); ?></li>
			</ul><!--breadcrumb-->
 			<!--<div class="nav-links clearfix">
				<a href="product-simple.html" class="prev"><i class="icon icon-pagination-left icon-prev"></i>Previous</a>
				<a href="product-simple.html" class="next">Next<i class="icon icon-pagination-right icon-next"></i></a>
			</div>-->
		</div><!--container-->
	</div><!--breadcrumb-holder-->
	<div id="single-product" class="inner-top-50 fadeIn">
	<div class="container">
		<div class="row single-product-row">
			<div class="col-sm-5 col-lg-5 gallery-holder">
 <article>
   <div class="demopahess">
	<div class="zoom-section">    	  
		<div class="zoom-small-image">
		<?php if($prodetails->image !="") { ?>
			<a href='<?php echo $http_host;?>/upload/allstyle/<?php echo $prodetails->image; ?>' class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4"><img src="<?php echo $http_host;?>/upload/allstyle/large/<?php echo $prodetails->image; ?>" alt='' title="" /></a></div>
        <?php } ?>	     
         <div style="clear:both;"></div>   
		<div class="zoom-desc">
 			<p>
			<?php $styleimages = $this->home_model->styleimages($prodetails->id,$productinfo->id); 
			if($styleimages != '' && count($styleimages) > 0) {
				foreach($styleimages as $styleimg) {
			?>
			<a href='<?php echo $http_host;?>/upload/allstyle/<?php echo $styleimg->image; ?>' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $http_host;?>/upload/allstyle/large/<?php echo $styleimg->image; ?>' "><img class="zoom-tiny-image" src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $styleimg->image; ?>" alt = "Thumbnail 1"/></a>
			 <?php } } 

			$productimages = $this->home_model->productimages($productinfo->id);

			if($productimages != '' && count($productimages) > 0) {
				foreach($productimages as $styleimg) {
			?>
			 <a href='<?php echo $http_host;?>upload/products/<?php echo $styleimg->image; ?>' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $http_host;?>upload/products/<?php echo $styleimg->image; ?>' "><img class="zoom-tiny-image" src="<?php echo $http_host;?>upload/products/small/<?php echo $styleimg->image; ?>" alt = "Thumbnail 1"/></a>
			<?php } } 
			?>
			</p>
 	</div>
	</div>
 <div style="clear:both;"></div>
</div>
</article>
                
			<div style="clear:both;"></div>
            </div>

			<div class="col-sm-6 col-lg-5 body-holder body-holder-style-2 pro" id="pro1"">
				
				<div class="product-info">
					 <p id="errorlogincheckout" style="color: green; text-align: center; font-weight: bold; border: 1px; padding: 5px;"><?php echo $this->session->flashdata('item');?> </p>
					<div class="product-rating-holder">
						<!-- a href="#" class="product-rating">
							<div class="star-rating gray" title="Rated 5.00 out of 5">
								<span style="width:80%">
									<strong class="rating">5.00</strong>
									out of 5
								</span>
							</div>
						</a -->
						<?php $totalreview = $this->account_model->totalreview($this->uri->segment(3));
						if($totalreview > '0') { ?>
							<a href="#reviews" class="review-link">(<?php echo $totalreview; ?> reviews)</a>
						<?php } ?>
					</div>

					<h1 class="single-product-title"><?php echo $productinfo->pname; ?> : <?php echo $this->home_model->getstylename($prodetails->style_id); ?></h1>
  					<!--div class="product-brand">Product Code : <?php /* echo $products->itemcode; */ ?></div-->
                    <div class="product-brand" style="color:#3cb5fa; font-size:25px;">
					    
					<?php if($this->session->userdata('currencycode') == 'INR') { ?>
						Rs.<?php echo $prodetails->sellingprice ;?> 
					<?php } else { 
 						echo $this->session->userdata('currencycode')." "; 
 						echo roundUpToAny(( $prodetails->sellingprice / ( $this->session->userdata('currencyvalue') * 0.9) )); 
					} ?>
 					</div>
					
					<?php $shareurl = $base_url."home/details/".$prodetails->id.'/'.$productinfo->id; ?>
					<?php $image =  $http_host."/upload/allstyle/large/".$prodetails->image; ?>
                    <div class="social-icons-holder">
						<ul class="social-icon-list clearfix">
							<li><a title="Facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $shareurl; ?>&t=<?php echo $productinfo->pname; ?>-<?php echo $prodetails->name; ?>&image=<?php echo $image; ?>;">
							 <img src="<?php echo $http_host;?>/site/views/images/fb-img.jpg" alt="" /></a></li>
															 
							<li><a title="Twitter" target="_blank"  href="http://twitter.com/home?status=<?php echo $productinfo->pname; ?>:<?php echo $prodetails->name; ?>-<?php echo $shareurl; ?>">
							<img src="<?php echo $http_host;?>/site/views/images/twit-img.jpg" alt="" /></a></li>

							<!-- li><a class="icon icon-linkedin11" title="Pinterest" href="#"></a></li -->
							<li><a title="Google +" target="_blank"  href="https://plus.google.com/share?url=<?php echo $shareurl; ?>">
							<img src="<?php echo $http_host;?>/site/views/images/g+-img.jpg" alt="" /></a></li>
 						</ul>
					</div>
                    <br>
					<div class="product-attributes">
						<div class="color-holder clearfix">
                        	<!--<span class="key" style="font-size:17px;">THE DETAILS</span>-->
                        <script>
						function formsubmitcart(){
							 /*
							var fonttype = document.getElementById('fonttype').value; // $("#sizeid").val();
							 
							var colour = document.getElementById('colour').value; //$("#colorid").val();
							var placement = document.getElementById('placement').value;
							 
								if(fonttype == ''){
									alert('Please Select font'); return false;
							}
							if(colour == ''){
									alert('Please Select Color'); return false;
							}
							
							if(placement == ''){
									alert('Please Select Placement'); return false;
							} */
							
							$("#product_addtocart_form").submit();	
							
						}
						function checkemail()
							{
									var monotext = document.getElementById('monotext').value;
									//var fonttype = document.getElementById('fonttype').value;
									//var colour = document.getElementById('colour').value;
									$("#finaltext").val(monotext);
									
							}
						function monogramactive(val){
							if(val == '0'){
								$("#dismonogram").hide();
							} else {
								$("#dismonogram").show();
							}
						}
					</script>
					 
						  <!-- form class="cart" action="<?php echo $base_url;?>cart/addtocart/<?php echo $prodetails->id; ?>" method="post" id="product_addtocart_form" name="product_addtocart_form" -->
						  <form class="cart" action="<?php echo $base_url;?>home/measurement/<?php echo $prodetails->id; ?>/<?php echo $productinfo->id; ?>/<?php echo $productinfo->subcatid; ?>" method="post" id="product_addtocart_form" name="product_addtocart_form" >
						  <input type="hidden" name="product_id" value="<?php echo $prodetails->pid; ?>">
						   
                            <div class="quantity-holder">
							  <span class="key" style="font-size:17px;">Want a monogram?</span>&nbsp;
							  <label>
								<input type="radio" name="monogram" id="monogram" value="1" onclick="javascript:monogramactive('1');">
							  </label>                              
							  
							  Yes 
							  <label>
							  
							  <input name="monogram" type="radio" id="monogram" value="0" onclick="javascript:monogramactive('0');" checked>
							  </label>
                           	  No   </div>
							  
							<div id="dismonogram" style="display:none;">	
							 <label>Your Text &nbsp;&nbsp;&nbsp;</label>
							 <label>
							  <input type="text" name="monotext" id="monotext" onblur="checkemail(this.value);" placeholder="Your Text" onFocus="this.placeholder=''" style="padding-left:5px;">
							  </label>
							<div class="quantity-holder">
							  <span class="key">Fonts</span>
							  <label style="margin-left:40px;">
							  <select name="fonttype" id="fonttype" onchange="checkemail(this.value);">
							    <option value="">Select Fonts</option>
							   <?php
								if($allfonts != '' && count($allfonts) > 0) {  
								foreach($allfonts as $font)
								{
								?>
                                <option value="<?php echo $font->id;?>"><?php echo $font->fontname;?></option>
								<?php }} ?>
                              </select>
							  </label>
                               
							</div>
                            <div class="quantity-holder">
							  <span class="key">Color</span>
                              <label style="margin-left:40px; margin-bottom:7px;">
							  
							 <select name="colour" id="colour" onchange="checkemail(this.value);">
                                <option value="">Select Color</option>
								<?php
								if($allcolour != '' && count($allcolour) > 0) {  
								foreach($allcolour as $color)
								{
								?>
                                <option value="<?php echo $color->id;?>"><?php echo $color->colourname;?></option>
                                
								<?php }} ?>
                              </select>
							  
							</label>
                            </div>
                            <div class="quantity-holder">
							  <span class="key">Placement</span>
							  <label style="margin-left:13px;">
							  <select name="placement" id="placement">
							    <option value="">Select Placement</option>
							    <?php
								if($allplacement != '' && count($allplacement) > 0) {  
								foreach($allplacement as $placement)
								{
								?>
                                <option value="<?php echo $placement->id;?>"><?php echo $placement->pname;?></option>
                                
								<?php }} ?>
						      </select>
							  </label>
                            </div>
							<label>Look Alike &nbsp;&nbsp;&nbsp;</label>
							 <label>
							  <input type="text" name="finaltext" id="finaltext" placeholder="Look Alike Text" onFocus="this.placeholder=''" onBlur="this.placeholder='Look Alike Text'" style="padding-left:5px; font-family:Verdana;color:red;">
							  </label>
							  
							</div>

                            <div class="qnt-holder">
					 
							<div class="quantity-holder">
								<span class="key">Qty:</span>
								<input type="number" class="txt txt-qty" title="Qty" value="1" name="qty" id="qty" min="1" step="1">
							</div>

							<?php if($this->session->userdata('userid')) { ?>
							<?php 
								$wishlistinfo = $this->home_model->wishlistinfo($this->session->userdata('userid'),$prodetails->id);
								if ($wishlistinfo == ''){
							?>
								<a href="<?php echo $base_url; ?>cart/wishlist/<?php echo $prodetails->id; ?>/<?php echo $productinfo->id; ?>" title="Wishlist" class="btn add-to-wishlist">add to wishlist</a>
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="alert('Product Already Added to your wishlist');" title="Wishlist" class="btn add-to-wishlist">add to wishlist</a>
							<?php } ?>
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="loginpopup();" title="Wishlist" class="btn add-to-wishlist">add to wishlist</a>
							<?php } ?>
 							<div class="add-to-bag-holder1" style="border:none;">
 
								<?php if($productinfo->qty > '0') { ?>
									<input name="" type="button" value="Measure Now" title="Measure and add to cart" class="add-bag-button btn btn-block" style=""  onclick ="formsubmitcart();">
								<?php } else { ?>
									<p id="stockout" style="color:red;text-align:center;font-weight:bold;font-size:20px;">Out Of Stock</p>
									<input name="" type="button" value="Measure Now" title="Measure and add to cart" class="add-bag-button btn btn-block" style=""  onclick ="$('#stockout').html('Sorry, Fabric is out of stock');return false;">
								<?php } ?>
							</div>
							  
							</div>
						</form>
					  
						</div>
					</div>
                     
                    <div id="product-simple-tab" style="border-bottom:#999999 solid 1px;">
						<div class="tabs">
							<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								<li><a data-toggle="tab" href="#reviews">Reviews (<?php echo $totalreview; ?>)</a></li>
							</ul>
 							<div class="tab-content bewear-tab-content">
								<div id="description" class="tab-pane in active">
									<p class="text">
										<?php 
										echo $productinfo->description; 
										echo $prodetails->description; ?></p>
										<!--ul>
											<li>- 98% Cotton, 2% Elastane</li>
											<li>- Zip fly and button fastening</li>
											<li>- Five pocket model</li>
											<li>- Belt loops</li>
											<li>- Leather badge at back</li>
										</ul-->
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
											<article class="review">Be the first to review this product!</article>
										<?php } ?>
									
									<form action="<?php echo $base_url; ?>home/add_review/<?php echo $this->uri->segment(3); ?>" method="post" id="review-form" name="review" onSubmit="return validate()" >
										<INPUT TYPE="hidden" NAME="action" VALUE="add_review"> 
										<div class="form-row">
										<label  style="float:left;" for="review_field" class="form-row">Your rating for this item *</label>
										<p>
										<div class="ratings input-box"  style="float:left;margin:-2% 0% 0% 2%;">
											<input type="radio" name="ratings" class="" value="1" />
											<input type="radio" name="ratings" class="" value="2" />
											<input type="radio" name="ratings" class="" value="3" />
											<input type="radio" name="ratings" class="" value="4" />
											<input type="radio" name="ratings" class="" value="5" />
										</div>
										</p>
										<input type="hidden" name="ratings" id="ratings" class="required-entry">
									</div>
											<div class="form-group">
											<label for="review">Title</label>
											<input type="text" rows="6" name="title" id="title" class="form-control">
										</div>
										
										<div class="form-group">
											<label for="review">Your review</label>
											<textarea rows="6" name="review" id="review" class="form-control"></textarea>
										</div>
										 <input name="button" type="submit" value="Submit" class="submit-button" onclick="javascript:validate(); return false;">
									</form>
									
									
								</div>
							</div>
						</div>
					</div>
                    
                    <br>
                    <span class="key" style="font-size:17px;">Care Instructions</span><br>
                    <img src="<?php echo $base_url_views; ?>assets/images/care_Wash Max 40.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care2.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care4.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care_Do Not Wring.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care_donotdryclean.jpg">
				</div>
			</div>
 
		</div>
	</div>
</div>

<div class="single-product-tab">

</div>

<div class="container inner-top-sm" id="tabp">
	<div role="tabpanel">
		<div style="" class="tab-nav-holder single-product-tab inner-bottom-50">
			<ul id="single-product-tabs" class="nav nav-tabs uppercase" role="tablist">
				<li role="presentation" ><a href="#wear-with" data-transition-type="backSlide" role="tab" data-toggle="tab">wear with it</a></li>
				<li role="presentation" class="active"><a href="#related-products" data-transition-type="backSlide" role="tab" data-toggle="tab">saved designs</a></li>
			</ul>
		</div>
		<div class="tab-content">
			
			<div role="tabpanel" class="tab-pane" id="wear-with">
			
				<div class="single-product-wear-it  fadeInUp">
				<?php  	
					if($grouppro !=""){
					$gid = explode(',',$grouppro);
					} else {
						$gid = "0";
					}
					if($gid !="" && $gid !="0"){
					foreach($gid as $grpid) { 
					//echo $grpid;
				?>
				<?php	
				$groupprodetail = $this->home_model->groupproduct($grpid);
				if($groupprodetail != '' && count($groupprodetail) > 0) {
				foreach($groupprodetail as $grpproducts) { 
 				?>
					<div class="item wear-products">
						<div class='product-holder'>
							<div class="product">
								<div class="image">
									<a href="<?php echo $base_url; ?>home/product/<?php echo $grpproducts->id; ?>"><img class="img-responsive" width="252" src="<?php echo $http_host;?>/upload/products/<?php echo $grpproducts->image; ?>" data-echo="<?php echo $http_host;?>/upload/products/<?php echo $grpproducts->image; ?>" alt=""></a>
								</div><!-- .image -->

								<div class="product-info m-t-20 text-center">
									 
									<h5 class="name uppercase"><a href="<?php echo $base_url; ?>home/product/<?php echo $grpproducts->id; ?>"><?php echo $grpproducts->pname; ?></a></h5>
									<!--div class="product-price">
										<ins><span class="amount">Rs.<?php /* echo $grpproducts->price; */ ?></span></ins>
									</div--><!-- .product-price -->
									<div class="buttons-holder m-t-20">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }} ?>
					<?php } } else { ?> 
					<p>Sorry, No Related Product Found.!!</p>
					<?php } ?> 
				</div>
				
			</div>
			<?php if($this->session->userdata('userid') !="") { ?>
			<div role="tabpanel" class="tab-pane active" id="related-products">
				<div class="single-product-related-products fadeInUp">
						<?php 
								if($saveditems != '' && count($saveditems) > 0) {
								foreach($saveditems as $saveditm) { 
								//print_r($saveditm);
							?>
						<div class="item wear-products">
							<div class="product-holder">
								<div class="product">
									<div class="image">
										<a href="#"><img class="img-responsive" width="252" src="<?php echo $http_host;?>/upload/saveprofile/<?php echo $saveditm->baseimage; ?>" data-echo="<?php echo $http_host;?>/upload/saveprofile/<?php echo $saveditm->baseimage; ?>" alt=""></a>
									</div><!-- .image -->
									<div class="product-info m-t-20 text-center">
										 
										<h5 class="name uppercase"><a href="#"><?php echo $saveditm->pname; ?></a></h5>
										<div class="product-price">
											<ins>
											<!--span class="amount">Rs.<?php /* echo $saveditm->sellingprice; */ ?></span-->
											<span class="shop-this-look">
											<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													Rs.<?php echo  $saveditm->price ;?> 
											<?php } else { 
													echo $this->session->userdata('currencycode')." "; 
													echo roundUpToAny((  $saveditm->price / ( $this->session->userdata('currencyvalue') * 0.9) )); 
											} ?>												  
										   </span>
										   </ins>
										   <br/>
										   <span class="shop-this-look">
												<form action="<?php echo $http_host;?>3dshirt" method="post" id="<?php echo $saveditm->id; ?>">
													<input type="hidden" name="details" value="<?php echo $saveditm->details; ?>" />
													<a onclick="$('#<?php echo $saveditm->id; ?>').submit();">Reorder</a>
												</form>
										   </span>
										</div><!-- .product-price -->
										<div class="buttons-holder m-t-20">
											 
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }} else { ?>
								<div> No Saved Designs Found.!! <div>
								<?php } ?>
					</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
			<div role="tabpanel" class="tab-pane active" id="related-products">Please Log In To See Your Saved Designs.!!</div>
			<?php } ?>
</div>


<!-- /.containers --></main>
<?php include ('includes/footer.php'); ?>
<?php include ('includes/cartdetail.php'); ?>

<script type="text/javascript" src="<?php echo $base_url_views; ?>js/rating.js"></script>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/rating.css" type="text/css" media="screen" title="Rating CSS">

<script type="text/javascript" src="<?php echo $base_url_views; ?>zoom-slider-css-js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $base_url_views; ?>zoom-slider-css-js/cloud-zoom.1.0.2.min.js"></script>
<link href="<?php echo $base_url_views; ?>zoom-slider-css-js/cloud-zoom.css" rel="stylesheet" type="text/css" />

<!-- script type="text/javascript" src="<?php echo $base_url_views; ?>zoompart-js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="<?php echo $base_url_views; ?>zoompart-js/jquery.simpleLens.js"></script>
<script>
    $(document).ready(function(){
        $('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
            loading_image: '<?php echo $base_url_views; ?>/images/loading.gif'
        });
        $('#demo-1 .simpleLens-big-image').simpleLens({
            loading_image: '<?php echo $base_url_views; ?>/images/loading.gif'
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>zoompart-css/jquery.simpleLens.css" -->
</body>
</html>