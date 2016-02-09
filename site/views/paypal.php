<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');
?>
<html>
<head>
<script type="text/javascript" src="<?php echo $base_url_views; ?>js/jquery-1.11.0.min"></script>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>

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
 
</head>
<body>
<?php 
			//$orderno=$this->bilship_model->getOrderNumber(); 
			$currencycode=$this->session->userdata('currencycode');
			$total = $this->session->userdata('total_amount');
			$shiaddress = $this->bilship_model->shippingaddress_active();
			//print_r($shiaddress);
?>
	<!-- form method="post" name="customerData" id="customerData" type="submit" action="<?php echo $base_url; ?>bilship/makepayment" onsubmit="javascript:validate();" enctype="multipart/form-data">
	 
		<table width="40%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Wait you are redirected to payment gateway..</b></font></caption>
		
		</table>
		 <div align="center"><img src="<?php echo $base_url_views; ?>images/url.gif"></div>
		 
					<input type="hidden" name="tid" id="tid" readonly value="<?php echo time(); ?>"/>
					<input type="hidden" name="merchant_id" value="69428"/>
					<input type="hidden" name="order_id" value="<?php echo $this->session->userdata('order_number'); ?>"/>
					<input type="hidden" name="amount" value="<?php echo $total; ?>"/>
					<input type="hidden" name="currency" value="<?php echo $currencycode; ?>"/>
					<input type="hidden" name="redirect_url" value="<?php echo $base_url; ?>home/success"/>
					<input type="hidden" name="cancel_url" value="<?php echo $base_url; ?>home/failure"/>
					<input type="hidden" name="language" value="EN"/>
					<input type="hidden" name="billing_name" value="<?php echo $shiaddress->Name; ?>"/>
					<input type="hidden" name="billing_address" value="<?php echo $shiaddress->Address1; ?>,<?php echo $shiaddress->Address2; ?>"/>
					<input type="hidden" name="billing_city" value="<?php echo $shiaddress->City; ?>"/>
					<input type="hidden" name="billing_state" value="<?php echo $shiaddress->State; ?>"/>
					<input type="hidden" name="billing_zip" value="<?php echo $shiaddress->Zip; ?>"/>
					<input type="hidden" name="billing_country" value="<?php echo $currencycode; ?>"/>
					<input type="hidden" name="billing_tel" value="<?php echo $shiaddress->Zip; ?>"/>
					<input type="hidden" name="billing_email" value="<?php echo $this->session->userdata('email')?>"/>
					<input type="hidden" name="delivery_name" value="<?php echo $shiaddress->Name; ?>"/>
					<input type="hidden" name="delivery_address" value="<?php echo $shiaddress->Address1; ?>,<?php echo $shiaddress->Address2; ?>"/>
					<input type="hidden" name="delivery_city" value="<?php echo $shiaddress->City; ?>"/>
					<input type="hidden" name="delivery_state" value="<?php echo $shiaddress->State; ?>"/>
					<input type="hidden" name="delivery_zip" value="<?php echo $shiaddress->Zip; ?>"/>
					<input type="hidden" name="delivery_country" value="India"/>
 					<input type="hidden" name="delivery_tel" value="<?php echo $shiaddress->Phone; ?>"/>
					<input type="hidden" name="merchant_param1" value="additional Info."/>
					<input type="hidden" name="merchant_param2" value="additional Info."/>
					<input type="hidden" name="merchant_param3" value="additional Info."/>
					<input type="hidden" name="merchant_param4" value="additional Info."/>
					<input type="hidden" name="merchant_param5" value="additional Info."/>
					<input type="hidden" name="promo_code" value=""/> 
					<input type="hidden" name="customer_identifier" value=""/> 
					<input type="hidden" name="integration_type" value="iframe_normal"/> 
		        
			 
	      </form -->

		  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="customerData" id="customerData" type="submit">
 				<input type="hidden" name="business" value="orders@stylior.com"> 
					 <input type="hidden" name="cmd" value="_xclick">
					 <!-- Instant Payment Notification & Return Page Details -->
					 <input type="hidden" name="notify_url" value="<?php echo $base_url; ?>">
					 <input type="hidden" name="cancel_return" value="<?php echo $base_url; ?>home/cancel">
					 <input type="hidden" name="return" value="<?php echo $base_url; ?>home/psuccess/" >
					 <input type="hidden" name="rm" value="2">
					 <!-- Configures All Of The Checkout Fields -->
					 <input type="hidden" name="no_shipping" value="1">
					 <input type="hidden" name="no_note" value="1">
					 <input type="hidden" name="custom" value="<?php echo $base_url; ?>">
					 <input type="hidden" name="currency_code" value="<?php echo $currencycode; ?>">
					 <input type="hidden" name="page_style" value="paypal">
					 <input type="hidden" name="item_name" value="Stylior.com">
					 <input type="hidden" name="item_number" value="<?php echo $this->session->userdata('order_number'); ?>">
					 <!-- Identifies/Updates An Existing Member After Checkout -->
					 <input type="hidden" name="on0" value="Stylior Payment">
					 <input type="hidden" name="modify" value="0">
					 <input type="hidden" name="amount" id="amount" value="<?php echo $total; ?>">
				 
		 </form>

		  <script>
			var payuForm = document.forms.customerData;
			payuForm.submit();
			</script>
	</body>
</html>