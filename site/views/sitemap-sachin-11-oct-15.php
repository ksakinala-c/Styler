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
<style>
#footl{width:25%;}
#footul{margin:0px;}
#footl ul li {padding-bottom:0px;}


</style>

<!-- /header --><main>

	 <div class="category-content" style="margin-top:3.5%;">
	    <div class="category-grid-view">
		 <div class="con" style="width:1175px;margin:80px auto 0;border:13px solid #eae5df;" >
          <div class="container" style="width:1150px; padding-bottom:5px;border:2px solid #dad5d0;margin-top:-80px;background-color:#fff;">
		  
            <ul class="section-subtitle" id="head">
				<li style="font-size:27px; color:#000; margin-left:0.5%; padding-bottom:15px; border-bottom:solid 1px #333;">Site Map</li>
			</ul>

			<span class="breadcrumb pull-left" id="para">

<footer style="background:none; padding:10px 0 0 10px;">
	
	 <div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>CUSTOMER FAVOURITES</h3>
        <ul id="footul">
			<?php $allstyles = $this->footer->allstyles(); ?>
			
			<?php if($allstyles != '' && count($allstyles) > 0) {
			
			foreach($allstyles as $styls) {
			?>
        	<li><a href="<?php echo $base_url; ?>style/<?php echo $styls->pageurl; ?>" title="<?php echo $styls->fabricsname; ?>"><?php echo $styls->fabricsname; ?></a></li>
			<?php } } ?>
			
			</ul>
        </div>
    </div>
	<div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>INFORMATION</h3>
        <ul id="footul">
        	<li><a href="<?php echo $base_url; ?>payment-policy" title="Payment Policy">Payment Policy</a></li>
            <li><a href="<?php echo $base_url; ?>privacy-policy" title="Payment Policy">Privacy Policy</a></li>
            <li><a href="<?php echo $base_url; ?>terms-conditions" title="Payment Policy">Terms and Conditions</a></li>
            <li><a href="<?php echo $base_url; ?>shipment-return-policy" title="Shipment, Return & Cancellations">Cancellation Policy</a></li>
			<li><a href="<?php echo $base_url; ?>disclaimer" title="Website Disclaimer">Disclaimer</a></li>
			<li><a href="http://www.stylior.com/sitemap.php" title="Sitemap">Sitemap</a></li>
        </ul>
        </div>
    </div>
    <div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>GET TO KNOW US</h3>
        <ul id="footul">
        	<li><a href="<?php echo $base_url; ?>our-story" title="Our Story">Our Story</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Contact Stylior">Contact Us</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Careers with Us">Careers</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Our Blog">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Corporate Orders">Corporate Orders</a></li>
         </ul>
        </div>
    </div>

	<div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>LET US HELP YOU</h3>
        <ul id="footul">
        	<li><a href="#" title="Your Account">Your Account</a></li>
            <li><a href="#" title="Return Center">Return Center</a></li>
            <li><a href="#" title="Orders Fulfilment & Delivery Speeds">Orders Fulfilment & Delivery Speeds </a></li>
            <li><a href="#" title="100% Fit Guarantee">100% Fit Guarantee</a></li>
            <li><a href="<?php echo $base_url; ?>our-story" title="Why Stylior">Why Stylior</a></li>
         </ul>
        </div>
    </div>
    

</footer>

<footer style="background:none; padding:0 0 20px 10px;">
	
	 <div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>CUSTOMER FAVOURITES</h3>
        <ul id="footul">
			<?php $allstyles = $this->footer->allstyles(); ?>
			
			<?php if($allstyles != '' && count($allstyles) > 0) {
			
			foreach($allstyles as $styls) {
			?>
        	<li><a href="<?php echo $base_url; ?>style/<?php echo $styls->pageurl; ?>" title="<?php echo $styls->fabricsname; ?>"><?php echo $styls->fabricsname; ?></a></li>
			<?php } } ?>
			
			</ul>
        </div>
    </div>
	<div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>INFORMATION</h3>
        <ul id="footul">
        	<li><a href="<?php echo $base_url; ?>payment-policy" title="Payment Policy">Payment Policy</a></li>
            <li><a href="<?php echo $base_url; ?>privacy-policy" title="Payment Policy">Privacy Policy</a></li>
            <li><a href="<?php echo $base_url; ?>terms-conditions" title="Payment Policy">Terms and Conditions</a></li>
            <li><a href="<?php echo $base_url; ?>shipment-return-policy" title="Shipment, Return & Cancellations">Cancellation Policy</a></li>
			<li><a href="<?php echo $base_url; ?>disclaimer" title="Website Disclaimer">Disclaimer</a></li>
			<li><a href="http://www.stylior.com/sitemap.php" title="Sitemap">Sitemap</a></li>
        </ul>
        </div>
    </div>
    <div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>GET TO KNOW US</h3>
        <ul id="footul">
        	<li><a href="<?php echo $base_url; ?>our-story" title="Our Story">Our Story</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Contact Stylior">Contact Us</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Careers with Us">Careers</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Our Blog">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Corporate Orders">Corporate Orders</a></li>
         </ul>
        </div>
    </div>

	<div class="footer-list" id="footl">
    	<div class="footer-list-padding">
        <h3>LET US HELP YOU</h3>
        <ul id="footul">
        	<li><a href="#" title="Your Account">Your Account</a></li>
            <li><a href="#" title="Return Center">Return Center</a></li>
            <li><a href="#" title="Orders Fulfilment & Delivery Speeds">Orders Fulfilment & Delivery Speeds </a></li>
            <li><a href="#" title="100% Fit Guarantee">100% Fit Guarantee</a></li>
            <li><a href="<?php echo $base_url; ?>our-story" title="Why Stylior">Why Stylior</a></li>
         </ul>
        </div>
    </div>
    

</footer>
			</span>
			

	      </div>
	      <!--container-->
		  </div>
	   </div><!--category-grid-view-->
    </div><!--category-content-->
 
</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>

</body>
</html>
