<?php include ('includes/header.php'); 
 
?>
<meta property="og:title" content="<?php echo $title;  ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--
<meta content="<?php echo $http_host;?>/upload/allstyle/large/<?php echo $prodetails->image; ?>" property="og:image">
-->

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



    $(document).ready(function(){
        $("#left-arrow").click(function(){

            $(".test_view").fadeIn();
            $(".test_view2").fadeOut();
        });

        $("#right-arrow").click(function(){
            $(".test_view").fadeOut();
            $(".test_view2").fadeIn(1000);
        });
      
         
         
        });




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

$.noConflict();
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
@media (max-width: 480px) { 
    .title{text-align:center;}
    .title h1{margin-bottom:0px;}
    .title h1 .subtitle{font-size:16px;text-align:left;}
    #right-col .title-price-con .price{float:none !important;text-align:left;font-size:22px !important;}
    .nav > li > a{padding:5px !important;}
    .add-to-bag-holder1 .submit-button{margin:0% 12%;}
    
    #tab-3 .shipping-smll-txt{text-align:justify;word-spacing:-2px;}
    #tabp{margin-top:0% !important;padding-top:0% !important;}
    #pro1{margin-bottom:-10% !important;}
    
    .carousel-control.right{background-image:none !important;}
    .carousel-control.left{background-image:none !important;}
    .glyphicon-chevron-right::before{
        color:black;
        content:">" !important;;
    }
    .glyphicon-chevron-left::before{
        color:black;
        content:"<" !important;;
    }
    
    
#visible-phone{
display:show;
}

#visible-desktop{
display:none;
}
.test_view
{
	width:80%;
	height:320px;
	margin-left: 10%;
	margin-right: 10%;
}
.test_view2
{
	width:80%;
	height:320px;
	margin-left: 10%;
	margin-right: 10%;
}

}
   @media screen and (min-width: 481px) and (max-width: 576px) { 
    .title{text-align:center;}
    .title h1{margin-bottom:0px;}
    .title h1 .subtitle{font-size:16px;text-align:left;}
    #right-col .title-price-con .price{float:none !important;text-align:left;font-size:22px !important;}
    .nav > li > a{padding:5px !important;}
    .add-to-bag-holder1 .submit-button{margin:0% 12%;}
    
    #tab-3 .shipping-smll-txt{text-align:justify;word-spacing:-2px;}
    #tabp{margin-top:0% !important;padding-top:0% !important;}
    #pro1{margin-bottom:-10% !important;}
       
       .carousel-control.right{background-image:none !important;}
    .carousel-control.left{background-image:none !important;}
    .glyphicon-chevron-right::before{
        color:black;
        content:">" !important;;
    }
    .glyphicon-chevron-left::before{
        color:black;
        content:"<" !important;;
    }
       
#visible-phone{
display:show;
}

#visible-desktop{
display:none;
}
.test_view
{
	width:80%;
	height:320px;
	margin-left: 10%;
	margin-right: 10%;
}
.test_view2
{
	width:80%;
	height:320px;
	margin-left: 10%;
	margin-right: 10%;
}

}

@media (min-width: 577px) { 
#visible-phone{
display:none;
}
#visible-desktop{
display:show;
}
}


</style>
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  .carousel-indicators {
	  display: none;
	  }
  
 
  </style>
<br><br><br><br>
<!-- /header -->
<main class="single-page productextended-page">
<?php /*	<div class="breadcrumb-holder">
		<div class="container">
			<ul class="breadcrumb pull-left">
			<?php $catdetails = $this->home_model->catdetails($productinfo->categoryid); ?>
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="<?php echo $base_url; ?>category/<?php echo $catdetails->pageurl; ?>"><?php echo $catdetails->cname; ?></a></li>
				<li><a href="#"><?php echo $productinfo->pname; ?></a></li>
				<li class='active'><?php echo $this->home_model->getstylename($productinfo->id); ?></li>
			</ul><!--breadcrumb-->
 			<!--<div class="nav-links clearfix">
				<a href="product-simple.html" class="prev"><i class="icon icon-pagination-left icon-prev"></i>Previous</a>
				<a href="product-simple.html" class="next">Next<i class="icon icon-pagination-right icon-next"></i></a>
			</div>-->
		</div><!--container-->
	</div><!--breadcrumb-holder--> */?>
	<div id="single-product" class="inner-top-50 fadeIn">
	<div class="container">
		<div class="row single-product-row">
		 <div id="visible-phone" >
			 
		
 <?php 
		$productimages = $this->home_model->productimages($productinfo->id);
		
		if($productimages[0]->image !="") {
?>
<!--<div class="arrow">
          <a href="#" id="left-arrow" style="float: left;display: none">&lt;-</a> 
          
          <a href="#" id="right-arrow" style="float: right;display: none">-></a> 
        </div> -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="test_view" style="width:70%;height:auto;" src="<?php echo $http_host;?>upload/products/<?php echo $productimages[0]->image; ?>" alt='' title="" />
      </div>

      <div class="item">
        <img class="test_view" style="width:70%;height:auto;" src="<?php echo $http_host;?>upload/products/<?php echo $productimages[1]->image; ?>" alt='' title="" />
      </div>
    
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
             
             
             
             



 	
<?php } ?>


</div>
			<div class="col-sm-5 col-lg-5 gallery-holder" id="visible-desktop">
 <article>

   <div class="demopahess">
	<div class="zoom-section">    	  
		<div class="zoom-small-image">
		<?php 
		$productimages = $this->home_model->productimages($productinfo->id);
		
		if($productimages[0]->image !="") {



		?>
			<a href='<?php echo $http_host;?>upload/products/<?php echo $productimages[0]->image; ?>' class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4"><img src="<?php echo $http_host;?>upload/products/<?php echo $productimages[0]->image; ?>" alt='' title="" /></a></div>
        <?php } ?>	     
         <div style="clear:both;"></div>   
		<div class="zoom-desc">
 			<p>
			<?php /*$styleimages = $this->home_model->styleimages($prodetails->id,$productinfo->id); 
			
			if($styleimages != '' && count($styleimages) > 0) {
				foreach($styleimages as $styleimg) {
			?>
			<a href='<?php echo $http_host;?>/upload/allstyle/<?php echo $styleimg->image; ?>' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $http_host;?>/upload/allstyle/large/<?php echo $styleimg->image; ?>' "><img class="zoom-tiny-image" src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $styleimg->image; ?>" alt = "Thumbnail 1"/></a>
			 <?php } }
*/			 

			

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

			<div class="col-sm-6 col-lg-7 body-holder body-holder-style-2 pro" id="pro1">
				
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
					
					<!-- 
============================================================================================================
					-->
					<div id="right-col">
					
						<div class="title-price-con">
							<div class="title">
								<h1 ><?php echo $productinfo->pname; ?><span class="subtitle"><?php echo $productinfo->title; ?></span>
								</h1>
								<h1></h1>
							</div>
								
							<div class="price">
								<?php if($this->session->userdata('currencycode') == 'INR') { ?>
									Rs.<?php echo $productinfo->price ;?> 
								<?php } else { 
									echo $this->session->userdata('currencycode')." "; 
									echo roundUpToAny(( $productinfo->price / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); 
								} ?>	
								
							</div>
							
						
						</div>
						
						<div class="clear"></div>
						<div class="delivered">Delivered by <?php  echo date('l,dS F Y',strtotime("+10 day")); ?> </div>
						<?php //print_r($productinfo->description);exit; ?>
						<p ><?php echo $productinfo->description; ?></p>
						
						<div id="fab-style">
						<div id="tabs">
							<ul class="nav nav-tabs nav-tab-cells fabric-tabs">
								<li class="active"><a data-toggle="tab" href="#tab-1">Details</a></li>
								<li ><a data-toggle="tab" href="#tab-3">Shipping and Returns</a></li>								
								<li><a data-toggle="tab" href="#tab-2">Reviews (<?php echo $totalreview; ?>)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab-1" class="tab-pane in active">
								<meta content="Yellow solid shirt
				" itemprop="color"><table cellspacing="0" cellpadding="3" border="0" width="100%">
									<tbody>
									<!--
									<tr>
									<td align="left" width="95" valign="top">Composition:</td>
									<td align="left" height="40" width="455" valign="top">
										Made from Egyptian Giza Cotton, known as the world's finest long staple quality cotton. 
									</td>
									</tr>
									-->
									<tr>
									<td align="left" height="19" width="60" valign="top">Fabric:</td>
									<td align="left" valign="top"><?php echo $productinfo->fname; ?></td>
									</tr>
									<tr>
									<td align="left" height="19" valign="top">Pattern:</td>
									<td align="left" valign="top"><?php echo $productinfo->designname; ?></td>
									</tr>
									<tr>
									<td align="left" height="19" valign="top">Colour:</td>
									<td align="left" valign="top"><?php echo $productinfo->colourname; ?>
									</tr>
									<tr>
									<td align="left" height="19" valign="top">Thread Count:</td>
									<td align="left" valign="top"><?php echo  $productinfo->threadcount; ?></td>
											 
									
									</tr>
									<tr>
									<td align="left" height="19" valign="top">ID:</td>
									<td align="left" valign="top"><?php echo $productinfo->id; ?>
									</tr>
								</tbody></table>
								</div>			
								
								<div id="tab-2" class="tab-pane">
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
											<div class="ratings input-box">
															<fieldset class="rating">
    <input type="radio" id="star5" name="ratings" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="ratings" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="ratings" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="ratings" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="ratings" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="ratings" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="ratings" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="ratings" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="ratings" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="ratings" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>
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
									<div id="tab-3" class="tab-pane">
										<h4 class="shipping-txt-title">
										Free Shipping				</h4>
										<p class="shipping-smll-txt">
											We provide free shipping globally.</p>
										<h4 class="shipping-txt-title">Alterations &amp; Returns</h4>
										<p style="padding-bottom:0px;" class="shipping-smll-txt">
											Stylior promises perfect fit guaranty. If it doesn't fit we provide free alteration, or remake for the outfits we produce.
										</p>
									</div>
									
									
									
									
									
									
								</div>
							</div>
						</div>
						
							<div style='float: right;width:100%; '>
								<div class="add-to-bag-holder1" style="border:none;">
									<?php if($productinfo->qty > '0') { ?>
										<input name="" type="button" value=" Customize My Style" title="Measure and add to cart" class="submit-button btn btn-primary" style='font-family: "Fenix";  z-index: 1024;    font-weight: 400;'  onclick ="formsubmitcart();">
									<?php } else { ?>
										<p id="stockout" style="color:red;text-align:center;font-weight:bold;font-size:20px;">Out Of Stock</p>
										<input name="" type="button" value="Measure Now" title="Measure and add to cart" class="add-bag-button btn btn-block" style=""  onclick ="$('#stockout').html('Sorry, Fabric is out of stock');return false;">
									<?php } ?>
								</div>
							</div>
						
						</div>

		    
		    	<?php $shareurl = $base_url."home/details/".$productinfo->id; ?>
					<?php $image =  $http_host."/upload/allstyle/large/".$prodetails->image; ?>
                    <div class="social-icons-holder">
						<ul class="social-icon-list clearfix">
							<li><a title="Facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $shareurl; ?>&t=<?php echo $productinfo->pname; ?>-<?php echo $prodetails->name; ?>&image=<?php echo $image; ?>;">
							<i class="fa fa-facebook-square fa-2x"></i></a></li>
							<li><a title="Twitter" target="_blank"  href="http://twitter.com/home?status=<?php echo $productinfo->pname; ?>:<?php echo $prodetails->name; ?>-<?php echo $shareurl; ?>">
							<i class="fa fa-twitter-square fa-2x"></i></a></li>

							<!-- li><a class="icon icon-linkedin11" title="Pinterest" href="#"></a></li -->
							<li><a title="Google +" target="_blank"  href="https://plus.google.com/share?url=<?php echo $shareurl; ?>">
							<i class="fa fa-google-plus-square fa-2x"></i></a></li>
 						</ul>
					</div>	    
		

		     <div style="clear:both;"></div>
                    <span class="key" style="font-size:17px;">Care Instructions</span><br>
                    <img src="<?php echo $base_url_views; ?>assets/images/care_Wash Max 40.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care2.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care4.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care_Do Not Wring.jpg"><img src="<?php echo $base_url_views; ?>assets/images/care_donotdryclean.jpg">
		</div>
					
					
					 <br>
					
					
					
					<!-- 
============================================================================================================
					
		
					
				
					<div class="product-attributes">
						<div class="color-holder clearfix">-->
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
					 
						  <!-- form class="cart" action="<?php echo $base_url;?>cart/addtocart/<?php echo $prodetails->id; ?>" method="post" id="product_addtocart_form" name="product_addtocart_form" 
						  <?php echo $base_url;?>home/measurement/<?php echo $prodetails->id; ?>/<?php echo $productinfo->id; ?>/<?php echo $productinfo->subcatid; ?>
						   http://www.stylior.com/3dshirt/index.php?fab_id=STY2015005
						  -->
						 
						  <form class="cart" action="<?php echo $base_url;?>3dshirt/index.php?fab_id=STY<?php echo $productinfo->id; ?>" method="post" id="product_addtocart_form" name="product_addtocart_form" >
						  <input type="hidden" name="product_id" value="<?php echo $productinfo->id; ?>">
						   
                            <div class="quantity-holder" style="display:none;">
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
                            <div class="quantity-holder" style="display:none;">
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
                            <div class="quantity-holder" style="display:none;">
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

                            <div class="qnt-holder" style="display:none;">
					 
							<div class="quantity-holder">
								<span class="key">Qty:</span>
								<input type="number" class="txt txt-qty" title="Qty" value="1" name="qty" id="qty" min="1" step="1">
							</div>

							<?php if($this->session->userdata('userid')) { ?>
							<?php 
								$wishlistinfo = $this->home_model->wishlistinfo($this->session->userdata('userid'),$productinfo->id);
								//echo $productinfo->id;
								//echo $this->session->userdata('userid');die;
								if ($wishlistinfo == ''){
							?>
								<a href="<?php echo $base_url; ?>cart/wishlist/<?php echo $prodetails->id; ?>/<?php echo $productinfo->id; ?>" title="Wishlist" class="btn add-to-wishlist"><i class="fa fa-heart"></i> add to wishlist</a>
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="alert('Product Already Added to your wishlist');" title="Wishlist" class="btn add-to-wishlist"><i class="fa fa-heart"></i> add to wishlist</a>
							<?php } ?>
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="loginpopup();" title="Wishlist" class="btn add-to-wishlist"><i class="fa fa-heart"></i> add to wishlist</a>
							<?php } ?>
 							<div class="add-to-bag-holder1" style="border:none;">
 
								<?php if($productinfo->qty > '0') { ?>
									<input name="" type="button" value="Customize" title="Measure and add to cart" class="add-bag-button btn btn-block" style=""  onclick ="formsubmitcart();">
								<?php } else { ?>
									<p id="stockout" style="color:red;text-align:center;font-weight:bold;font-size:20px;">Out Of Stock</p>
									<input name="" type="button" value="Measure Now" title="Measure and add to cart" class="add-bag-button btn btn-block" style=""  onclick ="$('#stockout').html('Sorry, Fabric is out of stock');return false;">
								<?php } ?>
							</div>
							  
							</div>
						</form>
					  
						</div>
					</div>
                     <!--
                    <div id="product-simple-tab" style="border-bottom:#999999 solid 1px;">
						<div class="tabs">
							<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								<li><a data-toggle="tab" href="#reviews">Reviews (<?php //echo $totalreview; ?>)</a></li>
							</ul>
 							<div class="tab-content bewear-tab-content">
								<div id="description" class="tab-pane in active">
									<p class="text">
										<?php 
										//echo $productinfo->description; 
										//echo $prodetails->description; ?></p>
										<!--ul>
											<li>- 98% Cotton, 2% Elastane</li>
											<li>- Zip fly and button fastening</li>
											<li>- Five pocket model</li>
											<li>- Belt loops</li>
											<li>- Leather badge at back</li>
										</ul>
								</div>
								
								
							</div>
						</div>
					</div>-->
                    
                    <br>
                  
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
				<li role="presentation" ><a href="#wear-with" data-transition-type="backSlide" role="tab" data-toggle="tab">You may also like</a></li>
				<li role="presentation" class="active"><a href="#related-products" data-transition-type="backSlide" role="tab" data-toggle="tab">Saved designs</a></li>
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
													echo roundUpToAny((  $saveditm->price / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); 
											} ?>												  
										   </span>
										   </ins>
										   <br/>
										   <span class="shop-this-look">
												<form action="<?php echo $http_host;?>3dshirt" method="post" id="<?php echo $saveditm->id; ?>">
													<input type="hidden" name="details" value="<?php echo $saveditm->details; ?>" />
													<a class="btn btn-info" onclick="$('#<?php echo $saveditm->id; ?>').submit();">Reorder</a>
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
<style>
.single-product-row .gallery-holder{
width:41.6667%;

}
.demopahess {
    text-align: center;
    width: 100% !important;
}
.nav > li > a:hover, .nav > li > a:focus{

background-color: #337ab7 !important;
color:#fff !important;
}

#right-col .title-price-con .price {
    color: #66bac4;
    float: right;
    font-family: "Ubuntu-Bold";
    font-size: 25px;
}

#right-col .title-price-con .title h1 {
    color: #1c2053;
    float: left;
    font-family: "Fenix";
    font-size: 24px;
    font-weight: 400;
}

.subtitle {
    display: block;
    font-size: 18px;
    line-height: 30px;
}
.clear {
    clear: both;
}
</style>

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