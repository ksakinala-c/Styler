<script>
	function newvalidate()
	{
 		var newemail = $("#newemail").val();
		if(newemail == '')
		{
			//alert('Please Enter E-mail.');
			document.getElementById('error').innerHTML = ('Please Enter Email');
			return false;
		}
        var ema = document.getElementById('newemail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(ema.value)) {
             
			document.getElementById('error').innerHTML = ('Please Enter Valid Email Address');
            ema.focus;
            return false;
        }
		var url = '<?php echo $base_url ?>home/subscribe/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'newemail='+newemail,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('error').innerHTML = msg;
			//$('#error').innerHTML = msg;
			return false
		} 
		});
 }	
</script>
<div class="all-design-patch margin-top30">All latest Design in stylior.com</div>
<footer>
	<div class="footer-list foot">
        <div class="footer-list-padding">
        <h3>JOIN NOW</h3>
        <article class="boxNewsletter">
            <p>Be the first to find out about exclusive deals, the latest Lookbooks, and top trends.</p>
  				<input type="hidden" name="action" value="subscribe">
				<p id="error" style="color:red;font-weight:bold;padding:0px;"></p>
                <div class="input-group input-group-lg">
                    <input type="text" name="newemail" id="newemail" class="form-control lg" placeholder="Enter your email">
                    <span class="input-group-btn">
                        <button type="button" onclick="javascript:newvalidate();" class="btn btn-sm">JOIN</button>
				    </span>
				</div>
 			<div class="social_holder">
				<a href="https://www.facebook.com/styliorfashion" title="Follow us on Facebook" target="_blank"><img src="<?php echo $base_url_views; ?>images/fb-icon.png" width="40" height="40" alt="Follow us on Facebook"></a>&nbsp;
				<a href="https://www.youtube.com/channel/UC3e1AfYrCZuhlzYcuPGKk-g" title="Watch us on Youtube" target="_blank"><img src="<?php echo $base_url_views; ?>images/you-tube-icon.png" width="40" height="40" alt="Watch us on Youtube"></a>&nbsp;
				<a href="https://twitter.com/Stylior" title="Follow us on Twitter" target="_blank"><img src="<?php echo $base_url_views; ?>images/twitter-icon.png" width="40" height="40" alt="Follow us on Twitter"></a>&nbsp;
				<a href="https://www.linkedin.com/in/stylior" title="Follow us on Linkedin" target="_blank"><img src="<?php echo $base_url_views; ?>images/linkdin-icon.png" width="40" height="40" alt="Follow us on Linkedin"></a>&nbsp;
				<a href="https://www.pinterest.com/styliorfashion/" title="Follow us Pinterest" target="_blank"><img src="<?php echo $base_url_views; ?>images/pin-icon.png" width="40" height="40" alt="Follow us Pinterest"></a>&nbsp;
				<a href="https://instagram.com/styliorfashion/" title="Follow us on Instagram" target="_blank"><img src="<?php echo $base_url_views; ?>images/instagram-icon.png" width="40" height="40" alt="Follow us on Instagram"></a>
			</div>
			<p>&copy; 2015 Stylior Private Limited. All Rights Reserved.</p>
        </article>
        </div>							
    </div>
	 <div class="footer-list">
    	<div class="footer-list-padding">
        <h3>CUSTOMER FAVOURITES</h3>
        <ul>
			<?php $allstyles = $this->footer->allstyles(); ?>
			
			<?php if($allstyles != '' && count($allstyles) > 0) {
			
			foreach($allstyles as $styls) {
			?>
        	<li><a href="<?php echo $base_url; ?>style/<?php echo $styls->pageurl; ?>" title="<?php echo $styls->fabricsname; ?>"><?php echo $styls->fabricsname; ?></a></li>
			<?php } } ?>
			
			</ul>
        </div>
    </div>
	<div class="footer-list">
    	<div class="footer-list-padding">
        <h3>INFORMATION</h3>
        <ul>
        	<li><a href="<?php echo $base_url; ?>payment-policy" title="Payment Policy">Payment Policy</a></li>
            <li><a href="<?php echo $base_url; ?>privacy-policy" title="Payment Policy">Privacy Policy</a></li>
            <li><a href="<?php echo $base_url; ?>terms-conditions" title="Payment Policy">Terms and Conditions</a></li>
            <li><a href="<?php echo $base_url; ?>shipment-return-policy" title="Shipment, Return & Cancellations">Cancellation Policy</a></li>
			<li><a href="<?php echo $base_url; ?>disclaimer" title="Website Disclaimer">Disclaimer</a></li>
			<li><a href="<?php echo $base_url; ?>home/sitemap" title="Sitemap">Sitemap</a></li>
        </ul>
        </div>
    </div>
    <div class="footer-list">
    	<div class="footer-list-padding">
        <h3>GET TO KNOW US</h3>
        <ul>
        	<li><a href="<?php echo $base_url; ?>our-story" title="Our Story">Our Story</a></li>
            <li><a href="<?php echo $base_url; ?>contact-us" title="Contact Stylior">Contact Us</a></li>
            <li><a href="<?php echo $base_url; ?>page/careers" title="Your Account">Careers</a></li>
			<li><a href="http://www.stylior.com/blog/" title="Your Account">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>corporate-orders" title="Corporate Orders">Corporate Orders</a></li>
         </ul>
        </div>
    </div>

	<div class="footer-list">
    	<div class="footer-list-padding">
        <h3>LET US HELP YOU</h3>
        <ul>
			
        	<li><a href="<?php echo $base_url; ?>account" title="Your Account">Your Account</a></li>
            <li><a href="<?php echo $base_url; ?>account/account_my_orders" title="Return Center">Return Center</a></li>
            <li><a href="<?php echo $base_url; ?>page/delivery-fulfilment" title="Orders Fulfilment & Delivery Speeds">Orders Fulfilment & Delivery Speeds </a></li>
            <li><a href="<?php echo $base_url; ?>page/fit-gurantee" title="100% Fit Guarantee">100% Fit Guarantee</a></li>
            <li><a href="<?php echo $base_url; ?>page/why-stylior" title="Why Stylior">Why Stylior</a></li>
         </ul>
        </div>
    </div>
    
<!--footer popup starts-->    
<div id="mc-signup-sh" style="display: block;" class="hidden-xs">
    <a href="javascript:void(0)" class="close-mail"><img src="<?php echo $base_url_views; ?>images/mail-arrow.jpg"></a> 
    <h3 style="font-size:15px; color:#384180;">Facing Issues ? Sorry about that!</h3>
</div>
<div id="mc_embed_signup" style="display: none;" class="hidden-xs">
    <a href="javascript:void(0)" class="close-mail"><img src="<?php echo $base_url_views; ?>images/mail-arrow.jpg"></a>    
	<h3 style="font-size:15px; color:#384180;">Facing Issues ? Sorry about that!</h3>
    <h4 style="line-height: 20px; font-size: 14px; color:#7f7f7f;">We are in the process of upgrading our website, if you are facing any issues accessing some of our features kindly <a href="http://www.stylior.com/contact-us">ContactUs</a> and we'd be happy to help!</h4>
</div>    
<!--footer popup ends-->

</footer>
<?php if($this->uri->segment(2) != 'checkout' && $this->uri->segment(2) != 'viewcart' && $this->uri->segment(2) != 'makepayment') { ?>
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
@media only screen and (max-width : 480px){
.scrollToTop{background-size:70%;
right:-20px;
}
}
/*Footer popup CSS starts*/
#mc_embed_signup, #mc-signup-sh {
    font-family: 'Telex-Regular' !important;
    width: 340px;
    padding: 10px 15px 0px 15px;
    background:#F5F4F4;
    clear: left;
    font: 14px Helvetica,Arial,sans-serif;
    -webkit-box-shadow: 0px -3px 30px rgba(50, 50, 50, 0.7);
    -moz-box-shadow: 0px -3px 30px rgba(50, 50, 50, 0.7);
    box-shadow: 0px -3px 30px rgba(50, 50, 50, 0.7);
    position: fixed;
    bottom: 0;
    right: 40px;
    z-index: 995;
}

#mc-signup-sh {
    padding: 5px 15px 10px 15px;
}

#mc_embed_signup h3, #mc-signup-sh h3 {
    margin-top: 5px;
    font-size: 16px;
    text-transform: uppercase;
    color: #081d5f;
}

#mc-signup-sh h3 {
    margin: 0;
    top: 5px;
    position: relative;
}

#mc-signup-sh a img, #mc_embed_signup a img {
    vertical-align: -webkit-baseline-middle;
}

#mc_embed_signup h4 {
    margin-top: 5px;
    margin-bottom: 15px;
    font-size: 13px;
    font-weight: normal;
}

#mc_embed_signup .close-mail {
    z-index: 996;
    position: absolute;
    top: 5px;
    right: 5px;
    display: block;
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    transform: rotate(90deg);
}

#mc-signup-sh .close-mail {
    z-index: 996;
    position: absolute;
    /*top: 5px;*/
    right: 5px;
    display: block;
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    transform: rotate(-90deg);
}

.mc-field-group {
    min-height: 0px !important;
}

.mc-field-group input[type="email"] {
    border: 2px solid #081d5f !important;
    font-size: 16px;
    height: 18px;
}

.mc-field-group .button {
    position: absolute;
    top: 5px;
    right: 0px;
    width: 28px !important;
    height: 28px !important;
    background-image: url('/images/mail-arrow.jpg');
    background-position: top left;
    background-repeat: no-repeat;
    color: transparent !important;
    background-color: #fff !important;
}

#mce-error-response {
    color: red;
    font-size: 14px;
    margin: 0px !important;
    padding: 0px !important;
}
/*Footer popup CSS ends*/
</style>
<?php } ?>

<script src="<?php echo $base_url_views; ?>newheader/js/jquery-2.1.1.js"></script> 
<script src="<?php echo $base_url_views; ?>newheader/js/jquery.mobile.custom.min.js"></script> 
<script src="<?php echo $base_url_views; ?>newheader/js/main.js"></script> <!-- Resource jQuery --> 

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

<script type="text/javascript">//<![CDATA[

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".cd-main-header").addClass("sticky-header");
		$(".cd-main-content").addClass("sticky-content");
    }else {
        $(".cd-main-header").removeClass("sticky-header");
		$(".cd-main-content").removeClass("sticky-content");
    }
});
//]]> 
</script>
<?php if($this->session->userdata('popup') != 'on' || $_SERVER['REMOTE_ADDR'] == '182.168.1.6') { 
	if($homepage->active == '1') {
	?>
<script>
		$(document).ready(function($){
			 $('.homepagepopup').animate({top:'20%'}, 'slow').show();
			 $('#cd-shadow-layer').toggle();	
        });
</script>
<?php } } ?>
<?php $this->session->set_userdata('popup','on');?>
<script src="<?php echo $base_url_views; ?>newheader/js/jPushMenu.js"></script> 
<!--call jPushMenu, required--> 
<script>
jQuery(document).ready(function($) {
	$('.toggle-menu').jPushMenu();
});
</script>

<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>


 
<!-- script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3GEN2SShCeWCch4n28FuaCrneMO1i03e";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script -->

<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script type="text/javascript">
$(function() {
	$.ajax({
		url:'<?php echo $base_url; ?>home/ajaxlist_search',
		type:'POST',
		data:'',
		success:function(msg)
		{
			//alert(msg);
			var  c = msg.split(",");
			var availableTags = [msg];	
			$("#search").autocomplete({
				source: c
			});
		}
	});
});

//Footer popup JS starts
jQuery(document).ready(function(){
    if (document.cookie.indexOf('mc=true') == -1) {
	$('#mc_embed_signup').slideDown('slow');
    } else {
	$('#mc-signup-sh').slideDown('slow');
    }
    
    $('#mc_embed_signup .close-mail').click(function(){
        $('#mc_embed_signup').slideUp('fast', function() {
	    complete : $('#mc-signup-sh').slideDown('slow');
	});
	document.cookie = "mc=true";
    });
    
    $('#mc-signup-sh .close-mail').click(function(){
        $('#mc_embed_signup').slideDown('slow');
	$('#mc-signup-sh').slideUp('slow');
    });
    
    $('#mc-embedded-subscribe-form').submit(function(e){
        if(!emVal($('.mc-field-group input[name=EMAIL]').val()) || $('.mc-field-group input[name=EMAIL]').val()=='' ) {
	    e.preventDefault();
	    $('#mce-error-response').show();
	}
    })
    
    $('.mc-field-group input[name=EMAIL]').change(function(){
	$('#mce-error-response').hide();
    })    
});
//Footer popup JS ends
</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3GEN2SShCeWCch4n28FuaCrneMO1i03e";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->