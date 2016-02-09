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

<script>
 

	function validate()
	{
		var recipientemail = $("#recipientemail").val();
		if(recipientemail == '')
		{
			$("#err-container1").html('<span>Please Enter recipientemail E-mail.</span>');
			return false;
		}
		
		 
        var em = document.getElementById('recipientemail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
           $("#err-container1").html('<span>Please Enter Valid recipientemail Email Address.</span>');
		   em.focus;
            return false;
        }
		
		var confrimemail = $("#confrimemail").val();
		if(confrimemail == '')
		{
			$("#err-container1").html('<span>Please Enter confrime and recipientemail E-mail.</span>');
			return false;
		}
		
		if(confrimemail != recipientemail)
		{
			$("#err-container1").html('<span>do not match recipientemail E-mail.</span>');			
			return false;
		}	
		
		$('#form').submit();
	}	
	
	
</script>
<!-- /header -->
<main class="cd-main-content">

<style>
.action.submit-button.linkified.submit{display:none;}
.fk-input{background-color:#fff;}
</style>
<div class="panel panel-dark">


  <div id="discovery-container">
    <div class="discovery-section hide page-container-responsive" id="upcoming-trips">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Your Upcoming Trip
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="discovery-saved-searches">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Start Your Next Adventure
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      <style>
	  #egv-content {
		background-color: #f2f2f2;
		padding: 15px 30px;
		}
		.line, .lastUnit {
			overflow: hidden;
		}
		.fk-gv-sub-header {
			font-size: 16px;
			font-weight: bold;
			margin: 12px 0;
		}
		.fk-smallfont, .fk-font-small, .fksd-smalltext {
			font-size: 11px;
		}
		#egift-voucher-list {
			margin: 0 -30px;
		}
		#egift-voucher-list li {
			padding: 15px 30px;
			position: relative;
		}
		.line, .lastUnit {
			overflow: hidden;
		}
		.size1of3 {
			width: 33.3333%;
		}
		.lastUnit {
			float: none;
			width: auto;
		}

		#egv-content .rw .rt input {
			width: 71%;
		}
		.fk-input {
			border: 1px solid #ccc;
			font-family: inherit;
			font-size: 13px;
			padding: 5px 6px;
			resize: none;
		}
		#egv-content .rw .rt input.egv-quantity, #egv-content .rw .rt input.egv-value {
			text-align: center;
			width: 5em;
		}
		.size2of5 {
			width: 40%;
		}
		.size1of3 {
			width: 33.3333%;
		}
		.unit {
			float: left;
		}
		.sign-in-register{max-width:1200px;}
		.size1of2 {
			width: 50%;
		}
		.unit {
			float: left;
		}
		#egv-content .egv-msg-popup .egv-msg-content {
			border: 1px solid #dcdcdc;
			border-radius: 5px;
			line-height: normal;
			padding: 2px 8px 2px 11px;
		}

		#egv-content .egv-msg-popup .col-label {
			width: 31.5%;
		}
		#egv-content .rw {
			height: 32px;
			line-height: 32px;
			margin: 10px 0;
			text-align: left;
		}
		#egv-content .egv-msg-popup textarea {
			height: 58px;
			overflow: auto;
			width: 95.5%;
		}
		.fk-input {
			border: 1px solid #ccc;
			font-family: inherit;
			font-size: 13px;
			padding: 5px 6px;
			resize: none;
		}
	  #egift-voucher-list .deleteItem {
    background: rgba(0, 0, 0, 0) url("../prod/images/remove-roll-67bd9c5b.png") no-repeat scroll 0 0;
    cursor: pointer;
    height: 18px;
    position: absolute;
    right: 15px;
    text-decoration: none;
    top: 10px;
    width: 18px;
}

#egv-actions li{margin-right:4px;width:19%;float:left;*margin-right:8px}
#egv-actions li a{color:#fff;font-size:14px;background-color:#50b5e2;border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;padding:12px 10px;display:block}
#egv-actions li a:hover,#egv-actions li.selected a{background-color:#124969;text-decoration:none}
#egv-banner{background:url('http://www.stylior.com/site/views/images/egv-banner-bg-636430db.png') repeat-x;width:100%;height:140px;position:relative;margin-top:5%;}
#egv-ribbon{position:absolute;top:-142px;right:0}#egv-content{background-color:#f2f2f2;padding:15px 30px}
#add_field_button{width:30%;font-size:11px}


@media only screen and (max-width : 480px){
#egv-actions li{margin-right:0px;width:100%;float:none;*margin-right:8px}
#egv-actions li a{color:#fff;font-size:14px;background-color:#50b5e2;border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;padding:12px 10px;display:block}
#egv-actions li a:hover,#egv-actions li.selected a{background-color:#124969;text-decoration:none;}
#egv-banner{background:url('http://img6a.flixcart.com/www/prod/images/egv-banner-bg-636430db.png') repeat-x;width:100%;height:127px;position:relative;margin-top:5%;display:none;}
#egv-ribbon{position:absolute;top:-142px;right:0;display:none;}
#egv-content{background-color:#f2f2f2;padding:15px 30px;}
label{font-size:8px;}
#egift-voucher-list li{padding:0px 5px 0px 5px;}
#add_field_button{width:100%;font-size:11px}

}


	  </style>
		<div class="sign-in-register">
				<form method="post" action="<?php echo $base_url;?>cart/addgifttocart" onSubmit="return validate()">				
                <div class="generic-form-wrapper">
					<div id="egv-content">
						<h1 class="fk-gv-header">Gift Card</h1>
						<p class="fk-gv-desc line">Send Gift Cards to multiple recipients instantly. Last minute gifting is now a few clicks away!
</p>
						<ul id="egv-actions"> <li class="fk-inline-block selected"><a href="javascript:void(0);">Buy a Stylior Gift Card</a></li> <li class="fk-inline-block"><a href="#">Check Balance</a></li> <li class="fk-inline-block"><a href="#">Frequently Asked Questions</a></li> <li class="fk-inline-block"><a href="#">Corporate Requirements</a></li> </ul>
						<div id="egv-banner"> <img title="Flipkart Gift Card" alt="Flipkart Gift Card" src="http://www.stylior.com/site/views/images/egv-ribbon-22da7f99.png" id="egv-ribbon"> </div>

						<h1 class="fk-gv-sub-header">Enter Gift Card Details</h1>
						<p class="fk-smallfont">
						 Gift Cards can be used for purchases from Sellers listed on Stylior.com. Card value can range from between
						 Rs 25 and Rs 10000.
						 </p>
						<ul id="egift-voucher-list" style="margin:0 auto;">
						<li>
							<div class="line"> 
								<div style="color:red"  id="err-container1" class="fk-hidden fk-err-all unit size1of2"></div>
							</div> 
							<div class="line"> 
								<div class="unit size1of2"> 
									<div class="line rw"> 
										<div class="unit size1of3">
											<label for="recipient-email1">Receiver's Email </label><span class="required">*</span>
										</div> 
										<div class="lastUnit rt"><input type="text" name="recipientemail[]" id="recipientemail" placeholder="example123@mail.com" class="fk-input">
										</div> 
									</div>
									
									<div class="line rw">
										<div class="unit size1of3"><label for="confirm-recipient-email1">Re-type Email </label><span class="required">*</span></div>
											<div class="lastUnit rt"><input type="text" id="confrimemail" autocomplete="off" placeholder="Confirm Email" class="fk-input">
											</div>
									</div> 
								</div>

								<div class="lastUnit"> 
									<div class="line rw">
										<div class="unit size2of5"><label for="voucher-value1">Value of Gift Card(Rs) </label><span class="required">*</span></div>
										<div class="lastUnit rt">
											<input type="text" name="value[]" id="value" onblur="getval();" value="500" autocomplete="off" maxlength="5" class="fk-input egv-value">
											<input type="hidden" id="statictotal" name="totalpayable[]" value="500">
										</div>
									</div> 
									<div class="line rw"> 
											<div class="unit size2of5"><label for="quantity1">Number of Gift Cards</label> </div>
											<div class="lastUnit rt"><input type="text" onblur="getval();" name="qty[]" id="qty" value="1" autocomplete="off" maxlength="3" class="fk-input egv-quantity">
											</div>
									</div> 
								</div>
							</div>
							
							<div class="line rw">
								<div class="unit size1of2">
									<!-- input type="checkbox" id="powermail_field_doruovaciaadresa2_1" class="js-add-gift-msg" --> <label for="add-msg-checkbox1">&nbsp;Personalize your Gift Card</label> 
								</div>
								<div class="lastUnit size1of2"><strong>Total Amount (Rs): <span id="total"></span></strong></div> 
							</div>
							<script>
								document.getElementById('powermail_field_doruovaciaadresa2_1').onchange = function() {
									document.getElementById('powermail_fieldwrap_331').style.display = this.checked ? 'block' : 'none';
								};
							
								var value = document.getElementById('value').value;
								var qty = document.getElementById('qty').value;
								var subtotal = value * qty ;	
								document.getElementById('total').innerHTML = subtotal;
 				
								
								function mydivshow(id)
									{
										var check = document.getElementById('powermail_field_doruovaciaadresa2_11'+id).checked;
										if(check){
											document.getElementById('powermail_fieldwrap_'+id).style.display = 'block';
										}else{
											document.getElementById('powermail_fieldwrap_'+id).style.display = 'none';
										}
										
									}
									
									function getval1(id, divid)
									{
											var value1 = document.getElementById('value1'+id).value;
											   
											if(!value1.match(/^\d+/))
												{
												alert("Please Enter Only Numeric Characters.")
												$("#value1").val("");
												}
											
											var newqty = document.getElementById('qty1'+qty).value;
											var subtotal1 = value1 * newqty ;	
											$("#total1"+id).html(subtotal1);
											$("#totalpayable_"+id).val(subtotal1);
											
											var statictotal1 = $("#statictotal").val();
											var myaddcount1 = $("#myaddcount").val();
											var tval=0;
											for(var i=1;i<=myaddcount1;i++)
												{
													id = "totalpayable_"+i; 
													myid = $("#"+id).val();
													 
													if(myid != ""){
														tval += parseInt(myid,10);
														}
													//alert(tval);  
												}
										//	$("#startvalue").val(  (parseInt(statictotal1) + parseInt(tval)) );
											var totalamt = (parseInt(statictotal1) + parseInt(tval));									
											$("#total_amount_pay").html(totalamt);										
									}
									
								function getval()
									{
										var value = document.getElementById('value').value;
										   
										if(!value.match(/^\d+/))
											{
											alert("Please Enter Only Numeric Characters.")
											$("#value").val("");
											}
										var qty = document.getElementById('qty').value;
										var subtotal = value * qty ;	
										$("#total").html(subtotal);
										$("#statictotal").val(subtotal);
									}
									
							</script>
							<div class="line egv-msg-popup fk-hidden" id="powermail_fieldwrap_331"  >
								<div class="line egv-msg-content">
									<div class="unit size1of2">
										<div class="line rw"> 
											<div class="unit col-label"><label for="recipient-name1">To (Name) </label><span class="required">*</span></div>
											<div class="lastUnit rt"> <input type="text" maxlength="100" name="recipientname[]" id="recipientname" placeholder="Receiver's Name" class="fk-input">
											</div> 
										</div> 
										<div class="line rw">
											<div class="unit col-label"><label for="sender-name1">From (Name) </label><span class="required">*</span></div> 
											<div class="lastUnit rt">
											<input type="text" maxlength="100" name="sendername[]" id="sendername" placeholder="Sender's Name " class="fk-input">
											</div> 
										</div> 
									</div>
									<div class="lastUnit size1of2">
										<div style="margin-top: 12px;" class="line"> 
											<div class="unit size1of5 tmargin5"><label for="egv-message1">Message: </label></div> 
											<div class="lastUnit"> 
												<textarea id="message" name="message[]" class="fk-input" maxlength="140" placeholder="Add a personalized message (in English) - Limit of 140 characters" for="chr-left"></textarea> 
												<span id="chr-left"></span>
											</div> 
										</div>
									</div>
								</div>
							</div>
							<div style="float: left; width: 100%; border-bottom: 1px solid #727272;"></div>
							<br>
							<div style="padding:0px;" class="input_fields_wrap"></div>
							 
										  <div class="lastUnit size1of2">
                                      	<input style="" type="button" id="add_field_button"  value="[+]  Add another Gift Card"  name="add_field_button" class="">
                                    	<!--form row ends--> 
                                        </div>
										
										 
											<div style="" class="line"> 
												<div class="unit size1of5 tmargin5"><label for="egv-message1">Amount Payable: </label></div> 
												<div class="lastUnit"> 
													<span id="total_amount_pay"></span>
												</div> 
											</div>
										 <br>
						</li>
						</ul>
					</div>
                                	
									<div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Buy Gift Card" class="submit-button"> 
                                      </div>
                                   	 
                </div>
				</form>
        </div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>
<input type="hidden" id="myaddcount" />

<?php include ('includes/footer.php'); ?>

<script src="<?php echo $base_url_views; ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
	
    var max_fields      = 4; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
	 
	
    var x = 0; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
	$("#myaddcount").val(x+1);
        e.preventDefault();
		if(x < max_fields){ 
            x++;  
            $(wrapper).append('<div style="float: left; width: 100%; border-bottom: 1px solid #727272;"><br><input type="hidden" value="'+x+'" class="myxvalue"/><ul id="egift-voucher-list" style="float: left; width: 100%;"><li><div class="line"><div class="unit size1of2"><div class="line rw"><div class="unit size1of3"><label for="recipient-email1">Receivers Email </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" name="recipientemail[]" id="recipientemail1'+x+'" placeholder="example123@mail.com" class="fk-input"></div></div><div class="line rw"><div class="unit size1of3"><label for="confirm-recipient-email1">Re-type Email </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" id="confrimemail1'+x+'" autocomplete="off" placeholder="Confirm Email" class="fk-input"></div></div></div><div class="lastUnit"><div class="line rw"><div class="unit size2of5"><label for="voucher-value1">Value of Gift Card(Rs) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" name="value[]" id="value1'+x+'" onblur="getval1('+x+',this.id);" value="500" autocomplete="off" maxlength="5" class="fk-input egv-value"></div></div><div class="line rw"><div class="unit size2of5"><label for="quantity1">Number of Gift Cards</label> </div><div class="lastUnit rt"><input type="text" onblur="getval1('+x+',this.id);" name="qty[]" id="qty1'+x+'" value="1" autocomplete="off" maxlength="3" class="fk-input egv-quantity"></div></div></div></div><div class="line rw"><div class="unit size1of2"><input type="checkbox" value="0" onclick="mydivshow('+x+');" id="powermail_field_doruovaciaadresa2_11'+x+'" class="js-add-gift-msg"> <label for="add-msg-checkbox1">&nbsp;Personalize your Gift Card</label></div><div class="lastUnit size1of2"><strong>Total Amount (Rs): <span id="total1'+x+'">500</span></strong><input type="hidden" value="500" name="totalpayable[]" id="totalpayable_'+x+'"/></div></div><div class="line egv-msg-popup fk-hidden" id="powermail_fieldwrap_'+x+'" ><div class="line egv-msg-content"><div class="unit size1of2"><div class="line rw"><div class="unit col-label"><label for="recipient-name1">To (Name) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" maxlength="100" name="recipientname[]" id="recipientname'+x+'" placeholder="Receivers Name" class="fk-input"></div></div><div class="line rw"><div class="unit col-label"><label for="sender-name1">From (Name) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" maxlength="100" name="sendername[]" id="sendername1'+x+'" placeholder="Senders Name" class="fk-input"></div></div></div><div class="lastUnit size1of2"><div style="margin-top: 12px;" class="line"><div class="unit size1of5 tmargin5"><label for="egv-message1">Message: </label></div><div class="lastUnit"><textarea id="message1'+x+'" name="message[]" class="fk-input" maxlength="140" placeholder="Add a personalized message (in English) - Limit of 140 characters" for="chr-left"></textarea><span id="chr-left"></span></div></div></div></div></div></li></ul><a class="remove_field" style="float: right; top: 0px;" href="#" ><img width="20" src="<?php echo $base_url_views; ?>images/closebutton.png"/></a></div>');
        } else {
			alert ("You Have Reached Maximum Limit of 5 Vouchers.");
		}
    });
     $(wrapper).on("click",".remove_field", function(e){
		var add = $("#myaddcount").val();
		$("#myaddcount").val(add-1);
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>