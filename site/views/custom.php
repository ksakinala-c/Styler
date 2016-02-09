<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');

 ?>

	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>:: Stylior ::</title>

		<!-- Bootstrap -->
		<link href="<?php echo  $base_url_views; ?>css/bootstrap.css" rel="stylesheet">
		
		<!-- Custom Style -->
		<link href="<?php echo  $base_url_views; ?>css/style_custom.css" rel="stylesheet">
		
		<!-- Font Awesome -->
		<link href="<?php echo  $base_url_views; ?>css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<div class="banner">
			<img src="<?php echo  $base_url_views; ?>/images/banner.png" alt="" />
		</div>
		
		<div class="container">
			<div class="trail-dress">
				<h3>Trail Custom Dress Shirts</h3>
				<p>Apart from exaggerated prices, the problem with ready-made shirts is that these shirts won't fit properly and once they are bought, it is non refundable. Ready made shirts are prepared are prepared to fit everybody's build, whether some fashion conscious businessman or ordinary person. But you are not everybody and need a dress shirt that can give exclusive appearance with made to fit your body.</p>
				<ul class="list">
					<li>On the other hand, <a href="#">Fit Custom Shirts</a> is always on the move to bring value to its clients by offering various deals, discounted offers and free trail shirts</li>
					<li>our utmost priority is customer's satisfaction, to make your dealing smooth and risk free we can also send you one try-on shirt before stitching the whole order (on customer's demand)</li>
					<li>This makes us 100 percent certain that our customers happy and totally satisfied with our produce style, fitting and quality</li>
					<li>If the customer is unsatisfied with the fitting, we make the desire adjustments and again send the trail shirt free of cost</li>
					<li>Upon the final confirmation and approval of customer, we complete the rest of the order</li>
				</ul>
				<p>If you are also one of the men who are tired of wearing ill fitted and old fashioned dress shirts, then <a href="#">Fit Custom Shirts</a> is the only resort for your redemption.</p>
				<a href="#">Make Your Own Shirt <i class="fa fa-sign-out"></i></a>
			</div>
			
			<div class="classic">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="classic-left">
							<h1><?php echo $productInfo['pname']; ?></h1>
							<p class="price">$95</p>
							<div class="fit-test">
								<h3><?php echo $productInfo['title']; ?></h3>
								<p>Price - <b>$<?php echo $productInfo['price']; ?></b></p>
								<p><?php echo $productInfo['description']; ?></p>
								<p class="rating"><img src="<?php echo  $base_url_views; ?>images/rating.png" alt="" /> <a href="#">13 Reviews</a></p>
								<p><img src="<?php echo  $base_url_views; ?>images/facebook-like.png" alt="" /></p>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 classic-right">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" align="center">
								<div class="mag">
									<img data-toggle="magnify" src="<?php echo $http_host;?>upload/products/medium/<?php echo $images[$productInfo['id']][0]; ?>" alt="">
								</div>
								<img src="<?php echo  $base_url_views; ?>images/zoom-icon.jpg" class="pull-right">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" align="center">
								<div class="mag">
									<img data-toggle="magnify" src="<?php echo $http_host;?>upload/products/medium/<?php echo $images[$productInfo['id']][1]; ?>" alt="">
								</div>
									<img src="<?php echo  $base_url_views; ?>images/zoom-icon.jpg" class="pull-right">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" align="center">
								<div class="mag">
									<img data-toggle="magnify" src="<?php echo $http_host;?>upload/products/medium/<?php echo $images[$productInfo['id']][2]; ?>" alt="">
								</div>
									<img src="<?php echo  $base_url_views; ?>images/zoom-icon.jpg" class="pull-right">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" align="center">
								<div class="mag">
									<img data-toggle="magnify" src="<?php echo $http_host;?>upload/products/medium/<?php echo $images[$productInfo['id']][3]; ?>" alt="">
								</div>
									<img src="<?php echo  $base_url_views; ?>/images/zoom-icon.jpg" class="pull-right">
							</div>
						</div>
						<p><div id="addtocart"><a href="javascript:;" class="addtocart" >Add to Cart</a></div></p>			
						<div id="dialog" style="display:none;">you are being redirected to add measurements
    
</div>
					<script>
					
$(document).ready(function() {
	$("#addtocart a").click(function() {
		//showDailogue();
		<?php $_SESSION['trail-shirt']=$productInfo['id']; ?>
		document.write("You will be redirected to a new page in few seconds"); 
		setTimeout(function(){window.location.href="http://www.stylior.com/cart/fitNew/"}, 3000); 
	});
});
function showDailogue()
{
	  
			//alert('cart');
			$('#dialog').dialog({
				autoOpen: true,
				show: "blind",
				hide: "explode",
				modal: true,
				open: function(event, ui) {
					//$('#dialog').delay(5000).dialog('close');
					setTimeout('Redirect()', 5000);
					
				}
			});
		
}

					//$('#dialog').html('some message');
					/* function which will display the dailogue box */
			
					</script>
				
					</div>
				</div>
			</div>
			
			<div class="overview">
				<div class="title" align="center">
					<i class="fa fa-info"></i>
					<p>Overview</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 overview-left">
						<div class="box">
							<h4>Spread Collar</h4>
							<p>The most versatile collar you can have. With or without a tie, this collar will not let you down:Our collar of choice.</p>
							<a href="#">Customize Collar <i class="fa fa-angle-double-right"></i></a>
						</div>
						<div class="box">
							<h4>Rounded Single Cuffs(1 Button)</h4>
							<p>Rounded single barrel cuffs with one button. Button them up at work, roll them up for the weekend.</p>
							<a href="#">Customize Cuffs <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" align="center">
						<img src="<?php echo $http_host;?>upload/products/medium/<?php echo $baseImage[$productInfo['id']]; ?>" alt="" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="box">
							<h4>Slim Fit</h4>
							<p>Your shirt will be cut close to the chest and waist, with minimum excess fabric. This shows how all shirts should look.</p>
							<a href="#">Customize Cut <i class="fa fa-angle-double-right"></i></a>
						</div>
						<div class="box">
							<h4>Monogram</h4>
							<p>Include a shirt monogram on your cuff, inside the collar band or in the Classically Italian location at the left waist, between the 4th and 5th button.</p>
							<a href="#">Customize Monogram <i class="fa fa-angle-double-right"></i></a>
						</div>
						<div class="box">
							<h4>Upgrades</h4>
							<p>Choose a clean, Uncluttered shirt front without a pocket or add a pocket to the left-hand side of the shirt.</p>
							<a href="#">Customize Upgrades</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="confidence" align="center">
			<div class="container">
				<h2>Confidence that's tailor-made</h2>
				<p>At Knot Standards, our cloths are crafted and worn with pride. It's because every piece we make is <br/>custom-measured and fitted to your exact specifications, so you can be sure you'll look your best any<br/> time you wear it.</p>
				<p><a href="#">Learn More</a></p>
				<div class="row c-box">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<img src="<?php echo  $base_url_views; ?>/images/bottom-round-img-01.png" alt="" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<p>A man should wear his suit, not the other way around. So we use your measurements to generate a 3D model of your body before we being tailoring.</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<img src="<?php echo  $base_url_views; ?>/images/bottom-round-img-01.png" alt="" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<p>Your pattern is then laser-cut, hand-tailored, and lady-admired. Actually, that last step happens after you put it on.</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<img src="<?php echo  $base_url_views; ?>/images/bottom-round-img-01.png" alt="" />
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo  $base_url_views; ?>js/bootstrap.min.js"></script>
		<script type="text/javascript">
			!function ($) {

				"use strict"; // jshint ;_;


				/* MAGNIFY PUBLIC CLASS DEFINITION
				 * =============================== */

				var Magnify = function (element, options) {
					this.init('magnify', element, options)
				}

				Magnify.prototype = {

					constructor: Magnify

					, init: function (type, element, options) {
						var event = 'mousemove'
							, eventOut = 'mouseleave';

						this.type = type
						this.$element = $(element)
						this.options = this.getOptions(options)
						this.nativeWidth = 0
						this.nativeHeight = 0

						this.$element.wrap('<div class="magnify" \>');
						this.$element.parent('.magnify').append('<div class="magnify-large" \>');
						this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

						this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
						this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
					}

					, getOptions: function (options) {
						options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

						if (options.delay && typeof options.delay == 'number') {
							options.delay = {
								show: options.delay
								, hide: options.delay
							}
						}

						return options
					}

					, check: function (e) {
						var container = $(e.currentTarget);
						var self = container.children('img');
						var mag = container.children(".magnify-large");

						// Get the native dimensions of the image
						if(!this.nativeWidth && !this.nativeHeight) {
							var image = new Image();
							image.src = self.attr("src");

							this.nativeWidth = image.width;
							this.nativeHeight = image.height;

						} else {

							var magnifyOffset = container.offset();
							var mx = e.pageX - magnifyOffset.left;
							var my = e.pageY - magnifyOffset.top;

							if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
								mag.fadeIn(100);
							} else {
								mag.fadeOut(100);
							}

							if(mag.is(":visible"))
							{
								var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
								var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
								var bgp = rx + "px " + ry + "px";

								var px = mx - mag.width()/2;
								var py = my - mag.height()/2;

								mag.css({left: px, top: py, backgroundPosition: bgp});
							}
						}

					}
				}


				/* MAGNIFY PLUGIN DEFINITION
				 * ========================= */

				$.fn.magnify = function ( option ) {
					return this.each(function () {
						var $this = $(this)
							, data = $this.data('magnify')
							, options = typeof option == 'object' && option
						if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
						if (typeof option == 'string') data[option]()
					})
				}

				$.fn.magnify.Constructor = Magnify

				$.fn.magnify.defaults = {
					delay: 0
				}


				/* MAGNIFY DATA-API
				 * ================ */

				$(window).on('load', function () {
					$('[data-toggle="magnify"]').each(function () {
						var $mag = $(this);
						$mag.magnify()
					})
				})

			} ( window.jQuery );
		</script>
		<script>
		
		/*
		var shirtObj = {"sleeves":"long","fit":"slim_pattern","collar":"regular","cuffs":"round","pocket_left":0,"pocket_right":0,"pocket_fabric":"","pleat":"","placket":"box","hem":"mid","buttons":"white","monogram":"none","monogram_type":"","monogram_text":"","monogram_location":"","monogram_color":"","base_fabric":"STY2015010","inner_buttons_fabric":"STY2015010","collar_fabric":"STY2015010","inner_collar_fabric":"","cuffs_fabric":"STY2015010","inner_cuffs_fabric":"","cleric":"none","resolution":"low","position":"front","zoom_shirt_part":"","inner_fabric":""};
		
function addToCart() {
   
  
	delete shirtObj.zoom_shirt_part;
	removeShirtPropertiesContrastParttent();
	if (!validMonogram()) {
		return;
	}
	
	
	$(".se-pre-con1").fadeIn("slow");
	html2canvas($(".resolution-low"), {
            onrendered: function(canvas) {
               theCanvas = canvas;
              
               var result = canvas.toDataURL("image/png");
               var exact_price = $(".exact_shirt_price").val();
			   var product_id = $("#summary_fabric").val();
			   var fabric_name = $("#"+product_id).val();//$(".fab_name_val").val();
			   var loginUser="<?php echo $_SESSION['userid']; ?>";
				if(loginUser){
					$.ajax({
							url: 'http://www.stylior.com/cart/addcart3d/',
							type: 'POST',
							dataType: 'json',
							data: {
								details : $.toJSON(shirtObj) , price : exact_price, productid : product_id ,  subcatid : '10' , pname : fabric_name , imagedata : result
						   },
							success: function(response) {
							$(".se-pre-con1").fadeOut("slow");				
								window.location.href= 'http://www.stylior.com/home/savemeasurement';
							
							}
						});
				}
				else{
					$.ajax({
						url: 'http://www.stylior.com/cart/saveSelectionData/',
						type: 'POST',
						dataType: 'json',
						data: {
							details : $.toJSON(shirtObj) , price : exact_price, productid : product_id ,  subcatid : '10' , pname : fabric_name , imagedata : result
					   },
						success: function(response) {
							var url='/home/login';
							window.location = url;
						}
					});
					return false;
				}
			   

            },
        });
	   
	   }
	   */
	   
		</script>
	<?php include ('includes/footer.php'); ?>
 </body>
</html>