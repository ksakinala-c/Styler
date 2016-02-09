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
	<form method="post" name="customerData" id="customerData" type="submit" action="<?php echo $base_url; ?>bilship/makepayment" onsubmit="javascript:validate();" enctype="multipart/form-data">
	 
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
					<?php $address = $shiaddress->Address1;
					if($shiaddress->Address2 != '') {
							$address .= ', '.$shiaddress->Address2;				
					}
					?>
					<input type="hidden" name="billing_address" value="<?php echo $address; ?>"/>
					<input type="hidden" name="billing_city" value="<?php echo $shiaddress->City; ?>"/>
					<input type="hidden" name="billing_state" value="<?php echo $shiaddress->State; ?>"/>
					<input type="hidden" name="billing_zip" value="<?php echo $shiaddress->Zip; ?>"/>
					<input type="hidden" name="billing_country" value="<?php echo $this->bilship_model->getcountryname($shiaddress->country); ?>"/>
					<input type="hidden" name="billing_tel" value="<?php echo $shiaddress->Phone; ?>"/>
					<?php if( is_numeric($this->session->userdata('email'))) {
						$email = 'info@stylior.com';
					} else {
						$email = $this->session->userdata('email');
					}?>
					<input type="hidden" name="billing_email" value="<?php echo $email; ?>"/>
					<input type="hidden" name="delivery_name" value="<?php echo $shiaddress->Name; ?>"/>

					<input type="hidden" name="delivery_address" value="<?php echo $address; ?>"/>
					<input type="hidden" name="delivery_city" value="<?php echo $shiaddress->City; ?>"/>
					<input type="hidden" name="delivery_state" value="<?php echo $shiaddress->State; ?>"/>
					<input type="hidden" name="delivery_zip" value="<?php echo $shiaddress->Zip; ?>"/>
					<input type="hidden" name="delivery_country" value="<?php echo $this->bilship_model->getcountryname($shiaddress->country); ?>"/>
					<!-- input type="hidden" name="delivery_tel" value="<?php echo $shiaddress->Phone; ?>"/ -->
					<input type="hidden" name="delivery_tel" value="<?php echo $shiaddress->Phone; ?>"/>
					<input type="hidden" name="merchant_param1" value="additional Info."/>
					<input type="hidden" name="merchant_param2" value="additional Info."/>
					<input type="hidden" name="merchant_param3" value="additional Info."/>
					<input type="hidden" name="merchant_param4" value="additional Info."/>
					<input type="hidden" name="merchant_param5" value="additional Info."/>
					<input type="hidden" name="promo_code" value=""/> 
					<input type="hidden" name="customer_identifier" value=""/> 
					<input type="hidden" name="integration_type" value="iframe_normal"/> 
		        
			<?php /* <table width="40%" height="100" border='1' align="center">
				<tr>
					<td>Parameter Name:</td><td>Parameter Value:</td>
				</tr>
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="hidden" name="tid" id="tid" readonly /></td>
				</tr>
				<tr>
					<td>Merchant Id	:</td><td><input type="hidden" name="merchant_id" value=""/></td>
				</tr>
				<tr>
					<td>Order Id	:</td><td><input type="hidden" name="order_id" value="<?php echo $orderno;?>"/></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="hidden" name="amount" value="<?php echo $total; ?>"/></td>
				</tr>
				<tr>
					<td>Currency	:</td><td><input type="hidden" name="currency" value="<?php echo $currencycode; ?>"/></td>
				</tr>
				<tr>
					<td>Redirect URL	:</td><td><input type="hidden" name="redirect_url" value="<?php echo $base_url; ?>home/success"/></td>
				</tr>
			 	<tr>
			 		<td>Cancel URL	:</td><td><input type="hidden" name="cancel_url" value="<?php echo $base_url; ?>home/failure"/></td>
			 	</tr>
			 	<tr>
					<td>Language	:</td><td><input type="hidden" name="language" value="EN"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="hidden" name="billing_name" value="<?php echo $shiaddress->Name; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="hidden" name="billing_address" value="<?php echo $shiaddress->Address1; ?>,<?php echo $shiaddress->Address2; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="hidden" name="billing_city" value="<?php echo $shiaddress->City; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="hidden" name="billing_state" value="<?php echo $shiaddress->State; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="hidden" name="billing_zip" value="<?php echo $shiaddress->Zip; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="hidden" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="hidden" name="billing_tel" value="<?php echo $shiaddress->Zip; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="hidden" name="billing_email" value="<?php echo $this->session->userdata('email')?>"/></td>
		        </tr>
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="hidden" name="delivery_name" value="<?php echo $shiaddress->Name; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="hidden" name="delivery_address" value="<?php echo $shiaddress->Address1; ?>,<?php echo $shiaddress->Address2; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="hidden" name="delivery_city" value="<?php echo $shiaddress->City; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="hidden" name="delivery_state" value="<?php echo $shiaddress->State; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="hidden" name="delivery_zip" value="<?php echo $shiaddress->Zip; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="hidden" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="hidden" name="delivery_tel" value="<?php echo $shiaddress->Phone; ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="hidden" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="hidden" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="hidden" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="hidden" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="hidden" name="merchant_param5" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="hidden" name="promo_code" value=""/></td>
				</tr>
				<tr>
					<td>Vault Info.	:</td><td><input type="hidden" name="customer_identifier" value=""/></td>
				</tr>
		        <tr>
		        	<td>Integration Type	:</td><td><input type="hidden" name="integration_type" value="iframe_normal"/></td>
		        </tr>
		         
	      	</table>
			<?php */ ?>
	      </form>
		  <script>
			var payuForm = document.forms.customerData;
			 payuForm.submit();
			</script>
	</body>
</html>