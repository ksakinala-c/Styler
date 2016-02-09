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

<!-- /header -->
<main class="cd-main-content">

<style>
.titalbarmainuss{ left: 50%;
    margin-right: -50%;
    position: absolute;
    text-align: center;
    top: 50%;
    transform: translate(-50%, -50%);}
	
.titalbarmainuss h1	{ color: #000;
    font-size: 48px;
    font-weight: 400;
    letter-spacing: 0.01em;
    line-height: 48px;
    margin-bottom: 0;}
	
	
.titalbarmainuss span{color: #999;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    letter-spacing: 0.025em;
    line-height: 37px;}	
	
</style>
<section class="category-header">
		<div class="titalbarmainuss">
				<!-- h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span-->
		</div>
	</section>
<!-- /header --><main>
	 
    
    <div class="category-content" style="margin-top:0px;">
         <div class="category-grid-view" style="padding-top:0px;">
 	      <div class="container">
             <ul class="breadcrumb pull-left">
				<li style="font-size:25px;">Contact Us</li>
			</ul><br>
 			<h4 style="color:#333; font-weight:bold; font-size:1.4rem; margin-bottom:0px; margin-top:15px;">Luminor Fashion PVT LTD</h4>
<p style="margin:0 0 20px 0px;">201, Akshar Blue Chip IT Park,
Navi Mumbai - 400 705
Maharashtra, IN</p>

<h4 style="color:#333; font-weight:bold; font-size:1.4rem; margin-bottom:0px;">Luminor FZE</h4>
<p style="margin-top:0px;">Q1-06, SAIF ZONE,
PO Box - 124747
Sharjah, United Arab Emirates</p>
 
			<p>
				Customer Care: +91 8055-670-670<br>
				Email : support@stylior.com
			</p>
			<br>
            <span class="section-subtitle">What can we help you with? Please use the form below</span>
            <br>
			   <div id="errorlogincheckout" style="color:green;margin-bottom:5px;"><?php echo $this->session->flashdata('item');?> </div>
           
            <section class="container contact-form contact-form-2 wow fadeIn">
	<form class="row" action="<?php echo $base_url; ?>home/contact" method="post" id="newsletter-validate-detail" onSubmit="return validate()">	
						<input type="hidden" name="action" value="subscribe">  
		<div class="col-md-6">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" id="name">
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control" name="subject" id="subject">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="message">Message</label>
				<textarea rows="10" cols="10" class="form-control" id="message" name="message"></textarea>
			</div>
			<div class="form-actions">
				<button type="submit" class="linkified" onclick="javascript:validate(); return false;">Send your message</button>	
			</div>
		</div>
	</form>
</section>
	      </div>
	      <!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->
    
    <!--section class="map contact-2 wow fadeIn">
	<address class="text-center light-bg">
		<span class="address-title">Stylior Co.</span>
		Lorem Ipsum, Lorem, Lorem Ipsum, Lorem,<br>
        Lorem Ipsum, Lorem, Lorem Ipsum, Lorem,<br>
		Phone: +1234567890
	</address>
</section-->

</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
<script>
	function validate()
	{
		 
		var name = $("#name").val();
		if(name == '')
		{
			alert('Please Enter Your Name.');
			return false;
		}
		
		var email = $("#email").val();
		if(email == '')
		{
			alert('Please Enter E-mail.');
			return false;
		}
		
		 
        var em = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
            alert('Please Enter Valid Email Address.');
            em.focus;
            return false;
        }
		
		var subject = $("#subject").val();
		if(subject == '')
		{
			alert('Please Enter Your Subject.');
			return false;
		}
		
		var message = $("#message").val();
		if(message == ''){
			alert('Please Enter Your Message.');
			return false;
		}
	 
		$('#newsletter-validate-detail').submit();
	}	
	
	 </script>
</body>
</html>
