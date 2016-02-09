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
function corporate_recruit(){
	var first_name = $("#first_name").val();
	var last_name = $("#last_name").val();
	var mobile = $("#mobile").val();
	var email = $("#email").val();
	var esitimated = $("#esitimated").val();
	var location = $("#location").val();
	var purpose = $("#purpose").val();
	var company = $("#company").val();
	if(first_name == '')
	{
		$("#err-container3").html('<span>Please Enter First Name.</span>');
		return false;
	}
		if(last_name == '')
	{
		$("#err-container3").html('<span>Please Enter Last Name.</span>');
		return false;
	}
		if(mobile == '')
	{
		$("#err-container3").html('<span>Please Enter Mobile Number.</span>');
		return false;
	}
		if(email == '')
	{
		$("#err-container3").html('<span>Please Enter Email.</span>');
		return false;
	}
		var em = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
           $("#err-container3").html('<span>Please Enter Valid Email Address.</span>');
		   em.focus;
            return false;
        }
		if(esitimated == '')
	{
		$("#err-container3").html('<span>Please Enter Estimated Order Value.</span>');
		return false;
	}
	if(location == '')
	{
		$("#err-container3").html('<span>Please Enter Location.</span>');
		return false;
	}
	if(purpose == '')
	{
		$("#err-container3").html('<span>Please Enter Purpose of Purchase.</span>');
		return false;
	}
	if(company == '')
	{
		$("#err-container3").html('<span>Please Enter Company.</span>');
		return false;
	}
	if(first_name != '' && email != ''){
			var url = '<?php echo $base_url ?>home/corporate_recruit/';
			$.ajax({
			url:url,
			type:'post',
			data:{'first_name':first_name, 'last_name':last_name, 'mobile':mobile, 'email':email, 'esitimated':esitimated, 'location':location, 'purpose':purpose, 'company':company},
			success:function(msg)
				{
					document.getElementById('err-container3').innerHTML = "<span style='color:green'>mail sent Successfully</span>" ;
				}
			});
			
		}
}
function checkgiftdetails(cardnum,pin){
	
		if(cardnum == '')
		{
			$("#err-container2").html('<span>Please Enter voucher-number.</span>');
			return false;
		}else
		if(pin == '')
		{
			$("#err-container2").html('<span>Please Enter voucher-pin.</span>');
			return false;
		}
		if(cardnum != '' && pin != ''){
			var url = '<?php echo $base_url ?>home/checkgiftdetails/';
			$.ajax({
			url:url,
			type:'post',
			data:{'cardnum':cardnum, 'pin':pin},
			success:function(msg)
				{
					document.getElementById('giftcontents').innerHTML = msg ;
				}
			});
			
		}
}
	function validate()
	{
		var recipientemail = $("#recipientemail").val();
		if(recipientemail == '')
		{
			$("#err-container1").html('<span>Please Enter Receiver`s Email.</span>');
			return false;
		}
		
		 
        var em = document.getElementById('recipientemail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
           $("#err-container1").html('<span>Please Enter Valid Receiver`s Email.</span>');
		   em.focus;
            return false;
        }
		
		var confrimemail = $("#confrimemail").val();
		if(confrimemail == '')
		{
			$("#err-container1").html('<span>Please Enter Re-type Email.</span>');
			return false;
		}
		
		if(confrimemail != recipientemail)
		{
			$("#err-container1").html('<span>do not match Receiver`s Email.</span>');			
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

    
<div class="category-content">
	<div class="category-grid-view">
	      <div class="container">
		  <div class="generic-form-wrapper">
					<div id="egv-content">
						<h1 class="fk-gv-header">Gift Card</h1>
						<p class="fk-gv-desc line">Send Gift Cards to multiple recipients instantly. Last minute gifting is now a few clicks away!
</p>
			<div id="product-simple-tab">
				<div class="tabs">
					<ul class="nav nav-tabs nav-tab-cells" id="egv-actions"> 
						<li class="active fk-inline-block"><a data-toggle="tab" href="#buygiftcard">Buy a Stylior Gift Card</a></li>
						<li class="fk-inline-block"><a data-toggle="tab" href="#checkbal">Check Balance</a></li>
						<li class="fk-inline-block"><a data-toggle="tab" href="#freqaskque">Frequently Asked Questions</a></li>
						<li class="fk-inline-block"><a data-toggle="tab" href="#corporatereq">Corporate Requirements</a></li>
					</ul>
                    <div class="col-lg-12" style="background-color:#124969; padding:3% 0 0 0; border-top:2px dashed #fff;">
                        <div id="egv-banner">
                        	<img title="Stylior Gift Card" alt="Stylior Gift Card" src="http://www.stylior.com/site/views/images/egv-ribbon-22da7f99.png" id="egv-ribbon">
                        </div>
                    </div>
					<div class="col-lg-12">
						<h1 class="fk-gv-sub-header">Enter Gift Card Details</h1>
						<p class="fk-smallfont">
						 Gift Cards can be used for purchases from Sellers listed on Stylior.com. Card value can range from between
						 Rs 25 and Rs 10000.
						 </p>
                     </div>
			
						
					<div class="tab-content bewear-tab-content col-lg-12">
						<div id="buygiftcard" class="tab-pane in active">
								<form method="post" action="<?php echo $base_url;?>cart/addgifttocart" onSubmit="return validate()">				
                
						<!--<ul id="egv-actions"> <li class="fk-inline-block selected"><a href="javascript:void(0);">Buy a Stylior Gift Card</a></li> <li class="fk-inline-block"><a href="#">Check Balance</a></li> <li class="fk-inline-block"><a href="#">Frequently Asked Questions</a></li> <li class="fk-inline-block"><a href="#">Corporate Requirements</a></li> </ul>-->
						
						
						<ul id="egift-voucher-list" style="margin:0 auto;">
						<li>
							<div class="line"> 
								<div style="color:red"  id="err-container1" class="fk-hidden fk-err-all unit size1of2"></div>
							</div> 
							<div class="row"> 
								<div class="unit col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
									<div class="line row"> 
										<div class="unit col-lg-4 col-md-5 col-sm-4 col-xs-12">
											<label for="recipient-email1">Receiver's Email </label><span class="required">*</span>
										</div> 
										<div class="lastUnit col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                        	<input type="text" name="recipientemail[]" id="recipientemail" placeholder="example123@mail.com" class="fk-input">
										</div> 
									</div>
									
									<div class="line row">
										<div class="unit col-lg-4 col-md-5 col-sm-4 col-xs-12">
                                        	<label for="confirm-recipient-email1">Re-type Email </label><span class="required">*</span>
                                        </div>
                                        <div class="lastUnit col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                        	<input type="text" id="confrimemail" autocomplete="off" placeholder="Confirm Email" class="fk-input">
                                        </div>
									</div> 
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                                	<div class="line row">
										<div class="unit col-lg-4 col-md-5 col-sm-4 col-xs-12">
                                        	<label for="voucher-value1">Value of Gift Card(Rs) </label><span class="required">*</span>
                                        </div>
										<div class="lastUnit col-lg-8 col-md-9 col-sm-8 col-xs-12">
											<input type="text" name="value[]" id="value" onblur="getval();" value="500" autocomplete="off" maxlength="5" class="fk-input egv-value">
											<input type="hidden" id="statictotal" name="totalpayable[]" value="500">
                                            <select id="currency" name="currency[]" style="height:30px;" class="currency-mobile-align">
                                                <option value="">Select Currency</option>
                                                <?php foreach($allcurrency as $currency){ ?>
                                                <option value="<?php echo $currency->id; ?>"><?php echo $currency->currency_code; ?></option>
                                                <?php } ?>
                                            </select>
										</div>
									</div>
                                     
									<div class="line row"> 
                                        <div class="unit col-lg-4 col-md-5 col-sm-4 col-xs-12">
                                        	<label for="quantity1">Number of Gift Cards</label> 
                                        </div>
                                        <div class="lastUnit col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                        	<input type="text" onblur="getval();" name="qty[]" id="qty" value="1" autocomplete="off" maxlength="3" class="fk-input egv-quantity">
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
											//alert(divid);
											var value1 = document.getElementById('value1'+id).value;
											 //alert(value1);
											if(!value1.match(/^\d+/))
												{
												alert("Please Enter Only Numeric Characters.")
												$("#value1").val("");
												}
											
											var newqty = document.getElementById('qty1'+id).value;
											//alert(newqty);
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
								<div class="line egv-msg-content" style="padding:15px 0;">
                                
									<div class="unit col-lg-12">
										<div class="line col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
											<div class="unit col-xs-12"><label for="recipient-name1">To (Name) </label><span class="required">*</span></div>
											<div class="lastUnit col-xs-12"> <input type="text" maxlength="100" name="recipientname[]" id="recipientname" placeholder="Receiver's Name" class="fk-input">
											</div> 
										</div> 
                                        
										<div class="line col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="unit col-xs-12"><label for="sender-name1">From (Name) </label><span class="required">*</span></div> 
											<div class="lastUnit col-xs-12">
											<input type="text" maxlength="100" name="sendername[]" id="sendername" placeholder="Sender's Name " class="fk-input">
											</div> 
										</div> 
									</div>
                                    
								</div>
                                
								<!--div class="row">				                                
                                    <div class="col-lg-12" style="border-bottom: 1px solid #727272; margin-bottom:10px;"><br>
                                        ADD THEME
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                    	<img src="http://www.stylior.com//upload/theme/medium/stylior-gift-voucher2.png" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    	<span style="width:100%;">Add Personal Message</span>
                                    	 <textarea style="height:100px;" id="message" name="message[]" class="fk-input" maxlength="140" placeholder="Add a personalized message (in English) - Limit of 140 characters" for="chr-left"></textarea>
                                    </div>
                                </div-->
                                
								<div style="float: left; width: 100%; border-bottom: 1px solid #727272;"><br>
								<!--input type="hidden" value="'+x+'" class="myxvalue"/-->
                                    <div class="row">
                                    	<div class="col-lg-12" style="border-bottom: 1px solid #727272; margin-bottom:10px;"><br>
                                            ADD THEME
                                        </div>
                                        <div class="col-lg-12" style="border-bottom: 1px dotted #ccc; margin-bottom:10px;">CHOOSE YOUR GIFT CARD DESIGN.</div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:15px;">
                                            <div id="selecttheme" class="col-lg-7 col-md-7 col-sm-6 col-xs-12">&nbsp;</div>
                                                <!--div style="width:30%;float:left;">
                                                <textarea style="width: 100%;" placeholder="Add a message" maxlength="140" class="fk-input" name="message[]" id="message"></textarea>
                                                </div-->
                                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                                <span style="width:100%;">Add Personal Message</span>
                                                 <textarea style="height:100px;" id="message" name="message[]" class="fk-input" maxlength="140" placeholder="Add a personalized message (in English) - Limit of 140 characters" for="chr-left"></textarea>
                                            </div>
                                        </div>
                                        
                                        <?php foreach($giftcardtheme as $pro){?>
                                            <label>
                                            <input onchange="gift_theme_view1('<?php echo $pro->image;?>','<?php echo $pro->id;?>')" type="radio" name="gift_theme_radio_[]" id="gift_theme_radio_" value="<?php echo $pro->id;?>"/>
                                            <img width="200" height="100" src="<?php echo $front_base_url.'/upload/theme/medium/'.$pro->image?>"/>
                                            </label>
                                        <?php }?>
                                    </div>
								</div>
                                
							</div>
							<div style="float: left; width: 100%; border-bottom: 1px solid #727272;"></div>
							<br>
							<div style="padding:0px;" class="input_fields_wrap1"></div><br/>
							
							<div style="padding:0px;" class="input_fields_wrap"></div><br/>
										
										<!--div class="lastUnit size1of2">
                                      	<input style="" type="button" id="add_field_button1"  value="[+]  Add Theme"  name="add_field_button1" class="">
                                        </div><br/-->
                                    	<!--form row ends--> 
										
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
					
                                	
									<div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Buy Gift Card" class="submit-button"> 
                                      </div>
                                   	 
              
				</form>
       			
						</div>								
						<div id="checkbal" class="tab-pane">
							<div class="unit size1of2">
							<div class="line"> 
								<div style="color:red"  id="err-container2" class="fk-hidden fk-err-all unit size1of2"></div>
							</div> 
					<h1 class="fk-gv-sub-header">View your Gift Card Details</h1>
					<p class="fk-smallfont" style="margin-bottom: 27px;">Check your gift card balance and validity.</p>
					<form action="#" method="post" id="get-voucher-details-form"> 
					<div class="line rw"> <div class="unit size1of2 lf"><label for="voucher-number">Gift Card Number </label><span class="required">*</span></div> <div class="lastUnit size1of2 rt">
					
					<input type="text" name="gc_num" id="voucher-number" class="fk-input"></div> </div> <div class="line rw"> <div class="unit size1of2 lf"><label for="voucher-pin">Gift Card PIN </label><span class="required">*</span></div> <div class="lastUnit size1of2 rt">
					<input type="password" name="gc_pin" id="voucher-pin" class="fk-input"></div> </div> <div class="line tpadding10"> <div class="lastUnit size1of2"><input type="button" onclick="checkgiftdetails(gc_num.value,gc_pin.value);" value="Get Details" class="btn btn-blue submit-button"></div> </div> </form>
					</div>
					<div id="giftcontents"></div>
						</div>
						<div id="freqaskque" class="tab-pane">
							<?php echo $affliliatecontent;?>
						</div>
						<div id="corporatereq" class="tab-pane">
						<div class="line"> 
								<div style="color:red"  id="err-container3" class="fk-hidden fk-err-all unit size1of2"></div>
							</div> 
							<form method="POST" id="corp-requirements-form">  <div class="line"> <div class="unit size1of2"> <div class="line rw"> <div class="unit size1of3"> <label for="first_name">First Name</label><span class="required">*</span> </div> <div class="lastUnit rt"> <input type="text" size="20" name="first_name" maxlength="40" class="fk-input" id="first_name"> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="last_name">Last Name</label> </div> <div class="lastUnit rt"> <input type="text" size="20" name="last_name" maxlength="80" class="fk-input" id="last_name"> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="mobile">Mobile</label><span class="required">*</span> </div> <div class="lastUnit rt"> <input type="text" size="20" name="mobile" maxlength="40" class="fk-input" id="mobile"> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="email">Email</label><span class="required">*</span> </div> <div class="lastUnit rt"> <input type="text" size="20" name="email" placeholder="example123@mail.com" maxlength="40" class="fk-input" id="email"> </div> </div> </div> <div class="lastUnit"> <div class="line rw"> <div class="unit size1of3"> <label for="estimated_value">Estimated Order Value:</label> </div> <div class="lastUnit rt"> <select id="esitimated" title="Estimated Order Value" name="00N90000009wIgs"> <option value="">--None--</option> <option value="0 - 5 Lakh">0 - 5 Lakh</option> <option value="5 - 20 Lakh">5 - 20 Lakh</option> <option value="20 - 50 Lakh">20 - 50 Lakh</option> <option value="50 lakh - 1 Cr">50 lakh - 1 Cr</option> <option value="1 Cr +">1 Cr +</option> </select> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="location">Location</label><span class="required">*</span> </div> <div class="lastUnit rt"> <select title="Location" name="00N9000000ANKVy" id="location"> <option value="">--None--</option> <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option> <option value="Andhra Pradesh">Andhra Pradesh</option> <option value="Arunachal Pradesh">Arunachal Pradesh</option> <option value="Assam">Assam</option> <option value="Bihar">Bihar</option> <option value="Chandigarh">Chandigarh</option> <option value="Chhattisgarh">Chhattisgarh</option> <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option> <option value="Daman and Diu">Daman and Diu</option> <option value="Delhi">Delhi</option> <option value="Goa">Goa</option> <option value="Gujarat">Gujarat</option> <option value="Haryana">Haryana</option> <option value="Himachal Pradesh">Himachal Pradesh</option> <option value="Jammu and Kashmir">Jammu and Kashmir</option> <option value="Jharkhand">Jharkhand</option> <option value="Karnataka">Karnataka</option> <option value="Kerala">Kerala</option> <option value="Lakshadweep">Lakshadweep</option> <option value="Madhya Pradesh">Madhya Pradesh</option> <option value="Maharashtra">Maharashtra</option> <option value="Manipur">Manipur</option> <option value="Meghalaya">Meghalaya</option> <option value="Mizoram">Mizoram</option> <option value="Nagaland">Nagaland</option> <option value="Odisha">Odisha</option> <option value="Puducherry">Puducherry</option> <option value="Punjab">Punjab</option> <option value="Rajasthan">Rajasthan</option> <option value="Sikkim">Sikkim</option> <option value="Tamil Nadu">Tamil Nadu</option> <option value="Telangana">Telangana</option> <option value="Tripura">Tripura</option> <option value="Uttar Pradesh">Uttar Pradesh</option> <option value="Uttarakhand">Uttarakhand</option> <option value="West Bengal">West Bengal</option> </select> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="purpose_of_purpose">Purpose of Purchase</label> </div> <div class="lastUnit rt"> <select id="purpose" title="Purpose of Purchase" name="00N90000009Thbk"> <option value="">--None--</option> <option value="Channel RNR Program">Channel RNR Program</option> <option value="Employee RNR Program">Employee RNR Program</option> <option value="Seasonal Corporate Gifting">Seasonal Corporate Gifting</option> <option value="Corporate Consumption">Corporate Consumption</option> <option value="Sales Promotion Campaign">Sales Promotion Campaign</option> <option value="Personal">Personal</option> <option value="Reselling Purpose">Reselling Purpose</option> <option value="Other">Other</option> </select> </div> </div> <div class="line rw"> <div class="unit size1of3"> <label for="company">Company</label><span class="required">*</span> </div> <div class="lastUnit rt"> <input type="text" size="20" name="company" maxlength="40" class="fk-input" id="company"> </div> </div> </div> </div> <div class="line"> <div class="unit size1of2">&nbsp;</div> <div class="lastUnit"> <button class="btn btn-orange submit-button btn-large" onclick="corporate_recruit()" type="button">Submit Details</button> </div> </div> </form>
						</div>
					</div>
				</div>	
			</div>					
	      </div><!--container-->
	</div><!--category-grid-view-->
</div><!--category-content-->

	
	
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
		float:left;
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
			padding: 0 6px;
			resize: none;
			height:30px;
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
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color:#124969 !important;
  text-decoration:none
  border-image: none;
  border-style: solid;
  border-width: 1px;
  color: #555;
  cursor: default;
}
#egv-actions li{margin-right:4px;width:19%;float:left;*margin-right:8px}
#egv-actions li a{color:#fff;font-size:14px;background-color:#50b5e2;border-radius:10px 10px 0 0;-moz-border-radius:10px 10px 0 0;padding:15px 10px !important;display:block; text-align:center; height:50px;}
#egv-actions li a:hover, #egv-actions li a:active, #egv-actions li.selected a{background-color:#124969 !important;text-decoration:none}
#egv-banner{background:url('http://www.stylior.com/site/views/images/egv-banner-bg-636430db.png') repeat-x;width:100%;height:140px;position:relative;}
#egv-ribbon{position:absolute;top:-142px;right:0}#egv-content{background-color:#f2f2f2;padding:15px 30px}
#add_field_button,#add_field_button1{width:30%;font-size:11px}


@media only screen and (max-width : 480px){
label{font-size:8px;}
#egift-voucher-list li{padding:0px 5px 0px 5px;}
#add_field_button,#add_field_button1{width:100%;font-size:11px}

}
@media only screen and (max-width : 768px){
#egv-actions li{margin-right:0px;width:100%;float:none;*margin-right:8px}
#egv-actions li a{color:#fff;font-size:14px;background-color:#50b5e2;border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;padding:12px 10px;display:block}
#egv-actions li a:hover,#egv-actions li.selected a{background-color:#124969;text-decoration:none;}
#egv-banner{background:url('http://img6a.flixcart.com/www/prod/images/egv-banner-bg-636430db.png') repeat-x;width:100%;height:127px;position:relative;margin-top:5%;display:none;}
#egv-ribbon{position:absolute;top:-142px;right:0;display:none;}
#egv-content{background-color:#f2f2f2;padding:15px 30px;}
.currency-mobile-align {margin:0 !important;}
}
	  </style>
		<div class="sign-in-register">
				 </div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>
<input type="hidden" id="myaddcount" />

<?php include ('includes/cartdetail.php'); ?>
<?php include ('includes/footer.php'); ?>

<script src="<?php echo $base_url_views; ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
	
    var max_fields      = 4; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	var wrapper1        = $(".input_fields_wrap1"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
	var add_button1     = $("#add_field_button1"); //Add button ID
	 
	
    var x = 0; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
	$("#myaddcount").val(x+1);
        e.preventDefault();
		if(x < max_fields){ 
            x++;  
            $(wrapper).append('<div class="fk-hidden fk-err-all unit size1of2" id="err-container_'+x+'" style="color:red"></div><div style="float: left; width: 100%; border-bottom: 1px solid #727272;"><br><input type="hidden" value="'+x+'" class="myxvalue"/><ul id="egift-voucher-list" style="float: left; width: 100%;"><li><div class="line"><div class="unit size1of2"><div class="line rw"><div class="unit size1of3"><label for="recipient-email1">Receivers Email </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" name="recipientemail[]" id="recipientemail1'+x+'" placeholder="example123@mail.com" class="fk-input"></div></div><div class="line rw"><div class="unit size1of3"><label for="confirm-recipient-email1">Re-type Email </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" id="confrimemail1'+x+'" autocomplete="off" placeholder="Confirm Email" class="fk-input"></div></div></div><div class="lastUnit"><div class="line rw"><div class="unit size2of5"><label for="voucher-value1">Value of Gift Card(Rs) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" name="value[]" id="value1'+x+'" onblur="getval1('+x+',this.id);" value="500" autocomplete="off" maxlength="5" class="fk-input egv-value"></div></div><div class="line rw"><div class="unit size2of5"><label for="quantity1">Number of Gift Cards</label> </div><div class="lastUnit rt"><input type="text" onblur="getval1('+x+',this.id);" name="qty[]" id="qty1'+x+'" value="1" autocomplete="off" maxlength="3" class="fk-input egv-quantity"></div></div><div class="line rw"><div class="unit size2of5"><label for="quantity1">Currency</label></div><div class="lastUnit rt"><select id="currency'+x+'" name="currency[]"><option value="">Select Currency</option><?php if($allcurrency !=""){ foreach($allcurrency as $currency){ ?><option value="<?php echo $currency->id; ?>"><?php echo $currency->currency_code; ?></option><?php } } ?></select></div></div></div></div><div class="line rw"><div class="unit size1of2"><input type="checkbox" value="0" onclick="mydivshow('+x+');" id="powermail_field_doruovaciaadresa2_11'+x+'" class="js-add-gift-msg"> <label for="add-msg-checkbox1">&nbsp;Personalize your Gift Card</label></div><div class="lastUnit size1of2"><strong>Total Amount (Rs): <span id="total1'+x+'">500</span></strong><input type="hidden" value="500" name="totalpayable[]" id="totalpayable_'+x+'"/></div></div><div class="line egv-msg-popup fk-hidden" id="powermail_fieldwrap_'+x+'" ><div class="line egv-msg-content"><div class="unit size1of2"><div class="line rw"><div class="unit col-label"><label for="recipient-name1">To (Name) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" maxlength="100" name="recipientname[]" id="recipientname'+x+'" placeholder="Receivers Name" class="fk-input"></div></div><div class="line rw"><div class="unit col-label"><label for="sender-name1">From (Name) </label><span class="required">*</span></div><div class="lastUnit rt"><input type="text" maxlength="100" name="sendername[]" id="sendername1'+x+'" placeholder="Senders Name" class="fk-input"></div></div></div><div class="lastUnit size1of2"><div style="margin-top: 12px;" class="line"><div class="unit size1of5 tmargin5"><label for="egv-message1">Message: </label></div><div class="lastUnit"><textarea id="message1'+x+'" name="message[]" class="fk-input" maxlength="140" placeholder="Add a personalized message (in English) - Limit of 140 characters" for="chr-left"></textarea><span id="chr-left"></span></div></div></div></div></div></li></ul><div class="fk-hidden fk-err-all unit size1of2" id="err-container_'+x+'" style="color:red"></div><br><input type="hidden" value="'+x+'" class="myxvalue"/><div><div style="float: left; width: 100%;">CHOOSE YOUR GIFT CARD DESIGN.</div><div style="width:100%;float:left;"><div id="selecttheme_'+x+'" style="width:70%;float:left;">&nbsp</div></div><?php foreach($giftcardtheme as $pro){?><label><input onchange="gift_theme_view(this.value,'+x+');" type="radio" name="gift_theme_radio_'+x+'" id="gift_theme_radio_'+x+'" value="<?php echo $pro->image;?>"/> <img width="200" height="100" src="<?php echo $front_base_url.'/upload/theme/medium/'.$pro->image?>"/></label><?php }?></div><a class="remove_field" style="float: right; top: 0px;" href="#" ><img width="20" src="<?php echo $base_url_views; ?>images/closebutton.png"/></a></div>');
        } else {
			alert ("You Have Reached Maximum Limit of 5 Vouchers.");
		}
    });
     $(wrapper).on("click",".remove_field", function(e){
		var add = $("#myaddcount").val();
		$("#myaddcount").val(add-1);
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
	
	/*----Add Theme---*/
		/*	$(add_button1).click(function(e){ //on add input button click
			$("#myaddcount").val(x+1);
				e.preventDefault();
				/*if(x < max_fields){ 
					x++;  
					$(wrapper1).append('<div class="fk-hidden fk-err-all unit size1of2" id="err-container_'+x+'" style="color:red"></div><div style="float: left; width: 100%; border-bottom: 1px solid #727272;"><br><input type="hidden" value="'+x+'" class="myxvalue"/><div><div>CHOOSE YOUR GIFT CARD DESIGN.</div><div style="width:100%;float:left;"><div id="selecttheme_'+x+'" style="width:70%;float:left;">&nbsp</div><div style="width:30%;float:left;"><textarea style="width: 100%;" placeholder="Add a message" maxlength="140" class="fk-input" name="gifttheme_message[]" id="gifttheme_message"></textarea></div></div><?php foreach($giftcardtheme as $pro){?><label><input onchange="gift_theme_view(this.value,'+x+');" type="radio" name="gift_theme_radio_'+x+'" value="<?php echo $pro->image;?>"/> <img width="200" height="100" src="<?php echo $front_base_url.'/upload/theme/medium/'.$pro->image?>"/></label><?php }?></div><a class="remove_field" style="float: right; top: 0px;" href="#" ><img width="20" src="<?php echo $base_url_views; ?>images/closebutton.png"/></a></div>');
				} else {
					alert ("You Have Reached Maximum Limit of 5 Vouchers.");
				}
			});*/
	$(wrapper1).on("click",".remove_field", function(e){
		var add = $("#myaddcount").val();
		$("#myaddcount").val(add-1);
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
	
});
function gift_theme_view(image, id){	
	var url = "<?php echo $front_base_url;?>/upload/theme/medium/"+image;
	var imagetag = "<img src="+url+">";
	$("#selecttheme_"+id).html(imagetag);
}
function gift_theme_view1(image, id){	
	//alert(id);
	var url = "<?php echo $front_base_url;?>/upload/theme/medium/"+image;
	var imagetag = "<img src="+url+">";
	$("#selecttheme").html(imagetag);
}
</script>