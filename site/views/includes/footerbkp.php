<script>
	function newvalidate()
	{
	  
		var newemail = $("#newemail").val();
		if(newemail == '')
		{
			alert('Please Enter E-mail.');
			return false;
		}
		
		 
        var ema = document.getElementById('newemail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(ema.value)) {
            alert('Please Enter Valid Email Address.');
            ema.focus;
            return false;
        }
		 
	 
		$('#newvalidate').submit();
	}	
	
	 </script>
     
    <style>
	@media only screen and (max-width: 767px) {
.joinusbtns{margin-top:96% !important;}
}
	
	</style> 
      <ul id="accessibility-nav" class="accessibility">
	<li>
		<a title="Skip to main product navigation" href="#primary-nav">Skip to main product navigation</a>
	</li>
	<li>
		<a title="Skip to utility navigation (account sign up and login, wish list, store locator)" href="#utility-nav">Skip to utility navigation (account sign up and login, wish list, store locator)</a>
	</li>
	<li>
		<a title="Skip to shopping bag summary" href="#mini-cart">Skip to shopping bag summary</a>
	</li>
	<li>
		<a title="Skip to primary content" href="#primary-content">Skip to primary content</a>
	</li>
	<li>
		<a title="Skip to site information and tools (order tracking, careers, privacy policy)" href="#footer">Skip to site information and tools (order tracking, careers, privacy policy)</a>
	</li>
</ul>
<div class="header-spacer"></div>
<div id="kids-prompt" class="accessibility">
		<p data-property="GLB_WEBSITESREQUIRESEPARATECHECKOUTPROMPT">
			Please keep in mind Abercrombie &amp; Fitch and abercrombie kids maintain separate websites and require separate checkouts.
		</p>
		<p class="button">
			<a class="button" href="http://www.abercrombiekids.com/" title="Continue" data-property="GLB_CONTINUE">Continue</a>
		</p>
	</div>
<div class="content-wrap">
		
<div class="anf__footer footer-logo"><?php echo $systemsvaribale->giftwarpamt; ?></div>

<div id="footer-marketing-wrap">
	

    <div class="genericESpot genericESpot--empty" data-espotname="FooterWrapEMS">
    
</div>

</div>

	<div id="footer-sub-marketing-wrap">
		

    <div class="genericESpot genericESpot--empty" data-espotname="anf-FooterSubWrapEMS">
    
</div>

	</div>


<footer class="anf__footer group has-social-terms">

	<div class="footer__email--social">
	
	  		 
			  <form action="<?php echo $base_url; ?>home/subscribe" method="post" id="newvalidate" novalidate onSubmit="return newvalidate()">
				<input type="hidden" name="action" value="subscribe">  
				<span class="data">
					<ul>
						<li class="input email text required">
							<input name="newemail" id="newemail" value="ENTER YOUR EMAIL" placeholder="ENTER YOUR EMAIL" required type="email">
					  		<label for="banner-email-field" class="accessibility">Get emailed insider exclusives!</label>
					  	</li>
					</ul>
				</span>
				<button class="joinusbtns" style="float: right; margin-top: -6px; margin-right: 29px;" class="linkified" type="submit" name="submit" onclick="javascript:newvalidate(); return false;">
					Join
				</button>
			</form>
	  	

			<p style="text-align:left;" data-property="GLB_EMAILPROMO">Be the first to find out about exclusive deals, the latest Lookbooks, and top trends.</p>
		
		
		<div class="social_holder">
			<a href="#" class="social facebook-share" title="facebook-share" target="_blank"><i class="fa fa-facebook" style="color:#3576c6;"></i></a>
            <a href="#" class="social you-tube" title="you-tube" target="_blank"><i class="fa fa-youtube-play" style="color:#f02c3a;"></i></a>
			<a href="#" class="social twitter" title="twitter" target="_blank"><i class="fa fa-twitter" style="color:#175cb2;"></i></a>
			<a href="#" class="social pinterest" title="pinterest" target="_blank"><i class="fa fa-pinterest-p" style="color:#ca0816;"></i></a>
		</div>
		
			<p class="social-legal-text" data-property="GLB_ENDORSEMENTS_SOCIAL">
				&copy; 2015 Stylior Private Limited. All Rights Reserved.
			</p>
		
	</div>

	<div class="footer__links group">
		<div>

			
		</div>

		<div class="accordion">
			<ul>
				<li>
					<h4 data-property="GLB_HELP">
						<a data-property="GLB_HELP" class="omniture-faq-link" title="Help">About Store</a>
					</h4>
				</li>
				<li>
					<a data-property="GLB_HOLLISTER" href="<?php echo $base_url; ?>home/page/1" title="About" class="omniture-hollister-link" target="">Our Story</a>
				</li>
                <li>
					<a data-property="GLB_HOLLISTER" href="<?php echo $base_url; ?>home/contactus" title="Contact-us" class="omniture-hollister-link" target="">Contact Us</a>
				</li>
			</ul>
			<ul>
				<li>
					<h4 data-property="GLB_ABOUTUS" class="omniture-aboutus-link">
						
								<a title="About Us">Information</a>
							
					</h4>
				</li>
				<li>
					<a href="<?php echo $base_url; ?>home/page/2" class="omniture-brandprotection-link" title="Payment Policy" data-property="GLB_BRANDPROTECTION">Payment Policy</a>
				</li>
				
				<li>
					<a href="<?php echo $base_url; ?>home/page/3" data-property="GLB_CASTING" title="Privacy Plolicy" target="">Privacy Policy</a>
				</li>
				<li>
					<a href="<?php echo $base_url; ?>home/page/5" class="" title="Terms & Conditions" data-property="GLB_CAREERS" target="">Terms And Conditions</a>
				</li>
				
					<li>
						<a href="<?php echo $base_url; ?>home/page/10" class="omniture-anfcares-link" title="Website Disclaimer" data-property="GLB_ANFCARES" target="">Website Disclaimer</a>
					</li>
				
				<li>
					<a href="<?php echo $base_url; ?>home/page/4" class="omniture-diversity-link" title="Shipment Return Policy" data-property="GLB_DIVERSITY" target="">Shipment, Returns & Cancellations</a>
				</li>
				
					
			</ul>

			<?php /*?><ul>
				<li>
					<h4 data-property="GLB_SITEINFO" class="omniture-site-info-link">
						<a title="Privacy &amp; Terms">Category</a>
					</h4>
				</li>
				<?php $allsubcat=$this->home_model->allsubcategory(); 
					if($allsubcat !="" && count($allsubcat)>0){
						foreach($allsubcat as $subcat)
						{
				?>
				<li>
					<a href="<?php echo $base_url; ?>home/lists/?sub_cat=<?php echo $subcat->id; ?>" class="privacy-policy-link" title="<?php echo $subcat->scname;?>" data-property="GLB_PRIVACY">
					<?php echo $subcat->scname;?></a>
				</li>
					<?php }} ?>
			</ul>
			<ul>
				<li>
					<h4 data-property="GLB_SITEINFO" class="omniture-site-info-link">
						<a title="Privacy &amp; Terms">Other Links</a>
					</h4>
				</li>               
				 
                <li>
					<a data-property="GLB_HOLLISTER" href="#" title="Hollister" class="omniture-hollister-link" target="_blank">More</a>
				</li>
                <li>
					<a data-property="GLB_HOLLISTER" href="<?php echo $base_url; ?>home/page/1" title="About" class="omniture-hollister-link" target="">About</a>
				</li>
                <li>
					<a data-property="GLB_HOLLISTER" href="<?php echo $base_url; ?>home/contactus" title="Contact-us" class="omniture-hollister-link" target="">Contactus</a>
				</li>
			</ul>
			<?php */?>
		</div>
	</div>
</footer>
<a href="#" class="scrollToTop">&nbsp;</a>
<style>
 .scrollToTop{
	width:100px; 
	height:113px;
	padding:10px; 
	text-align:center; 
	background: whiteSmoke;
	font-weight: bold;
	color: #444;
	text-decoration: none;
	position:fixed;
	bottom:75px;
	right:25px;
	display:none;
	background: url('<?php echo $base_url_views;?>images/SCROLL BUTTON.png') no-repeat 0px 20px;
}
.scrollToTop:hover{
	text-decoration:none;
}
</style>

<!-- div id="cookies-wrap" class="cookies-on-site">
	
	<div id="cookie-banner" class="cookies-on-site legal duty">
		<a class="cookies-close" title="Close"></a>
		<h2>About</h2>
		<p>
			??????
		</p>
	</div>
</div -->

	</div>

<!-- div id="lpchat" style="z-index: 20; visibility: visible;"><a title="" href="#" id="lpDynamicButtonHref-749" style="cursor: pointer;"><img src="Mens_files/zoom-placeholder.gif" alt="" id="lpDynamicButtonImg-749" name="lpDynamicButtonImg-749" style="border: 0px none" border="0"></a></div -->
	
    
    <!--[if lt IE 9]>
      <script src="https://a2.muscache.com/airbnb/static/libs_jquery_1x-dbc0f8220d5959e6f60761575698539f.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?php echo $base_url_views; ?>js/libs_jquery_2x-c6b78c127c3fbea030c90e8ca62fee8d.js" type="text/javascript"></script>
    <!--<![endif]-->
    <script src="<?php echo $base_url_views; ?>js/o2.1-5665e017264db8d8de046a23efab8a60.js" type="text/javascript"></script>
    <!-- script src="<?php echo $base_url_views; ?>js/core-e0fd55ea87dbba413773a31e0a462a03.js" type="text/javascript"></script -->

    <script>

     // Airbnb.init();
</script>

    
    <script src="<?php echo $base_url_views; ?>js/homepage-eb57f026b02d6866989f2780bd959bc3.js" type="text/javascript"></script>
    
	<script src="<?php echo $base_url_views; ?>js/homepage-eb57f026b02d6866989f2780bd959bc3.js" type="text/javascript"></script>
    
    <script src="<?php echo $base_url_views; ?>js/easyResponsiveTabs.js" type="text/javascript"></script>

 <script type="text/javascript">
    $(document).ready(function () {
        $('.horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

       
    });
</script>
<script>
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>
<!-- script type="text/javascript" src="<?php echo $base_url_views; ?>js/clear_text_field.js"></script -->
<!-- script type="text/javascript" src="<?php echo $base_url_views; ?>js/anchor_top.js"></script>

<script>            
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
</script -->
		<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3GEN2SShCeWCch4n28FuaCrneMO1i03e";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
 