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
<!-- link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" /-->

<!-- /header -->
<main class="cd-main-content">

<style>
.action.submit-button.submit{display:none;}
#day{margin-left:15px;}
#year{margin-left:15px;}
#mobile{width:85%;}


@media only screen and (max-width : 853px){

#day{margin-left:-5%;}
#year{margin-left:-5.2%;margin-top:-3.5%;}

#mobile{width:75%; margin-top:0.9%; float:left; background-color:#edebe3; padding:5.3px 0px;}

}


@media only screen and (max-width : 480px){
#day{margin-left:0%;}
#year{margin-left:0px;margin-top:0.5%;}

#mobile{width:70%; margin-top:-13%; float:left; background-color:#edebe3; padding:6px 0px;}

}



</style>
<div class="panel panel-dark">
<div id="discovery-container">
    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
      <div class="sign-in-register">
                                <h1 class="page-title">Affiliate Register Form</h1>
								<?php if($this->session->flashdata('item1')!="") { ?>
									<p style="margin-bottom:0px;color:green;" class="inner-intro"><?php echo $this->session->flashdata('item1'); ?></p>
                                <?php } ?>
								<?php if($L_strErrorMessage !="") { ?>
								 <p style="margin-bottom:0px;color:red;size:15px;" class="inner-intro"><?php echo $L_strErrorMessage;?></p>
                                <?php } ?>

								<div><?php echo $this->home_model->affcontent(); ?></div>

                                <p style="margin-bottom:0px;" class="inner-intro"> 
                                Create an account or <a href="<?php echo $base_url; ?>affiliate-signin" class="trademark-style">Log in</a> to continue
                                </p>
								
								 
									 
                                <div class="generic-form-wrapper">
                                	<form method="post" class="register" id="form" action="<?php echo $base_url;?>affiliate/registration">
										<input type="hidden" name="action" value="registration"/>
										<input type="hidden" name="ref_id" value="<?php echo $this->uri->segment(3); ?>"/>
                                      
										<div class="form-row">
                                       	  <label for="Name">Name *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="reg_username" id="reg_username" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="reg_email" id="reg_email" onblur="javascript:emailvalidate(); return false;" class="validate[required,custom[email]] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="reg_password" id="reg_password" class="validate[required] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Confirm Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="reg_password2" id="reg_password2"  class="validate[required,equals[reg_password]] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                         <div class="form-row">
                                       	  <label for="Name">Company *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="company" id="company" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
										<div class="form-row">
                                       	  <label for="Name">Website *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="website" id="website" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Country">Country </label>
                                          	<div class="text-field-wrap" style="border:none;">
                                        	<select style="float: left; border-color: rgb(170, 170, 170); height: 32px;" name="cid" id="cid"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												<option value="">Select Country</option>											  
                                               <!-- <option value="">Choose Another Address</option>-->
												<?php if($countrycode != "" && count($countrycode) >= 0) {

												foreach($countrycode as $add) { ?>
                                               <!-- <option>Default</option>-->
                                                <option value="<?php echo $add->cid; ?>"><?php echo $add->cname; ?></option>
                                                
												<?PHP }}?>
                                              </select> 
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Name">State *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="state" id="state" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
											<div class="form-row">
                                       	  <label for="Name">City *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="city" id="city" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Name">Address *</label>
                                       	  <div class="text-field-wrap">
                                        	<input type="text" name="address" id="address" class="validate[required] text-field" data-prompt-position="topRight:20" >
											<span id="username_error" style="color:red;"></span>
										  </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
										
									    
                                        <div class="form-row">
                                       	  <label for="phone">Country Code* Mobile Number.</label>
                                          	<div class="text-field-wrap" style="border:none;">
                                        	<select style="width: 74px; float: left; border-color: rgb(170, 170, 170); height: 32px;" name="ccode" id="ccode"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												<option value="">Select</option>											  
                                               <!-- <option value="">Choose Another Address</option>-->
												<?php if($countrycode != "" && count($countrycode) >= 0) {

												foreach($countrycode as $add) { ?>
                                               <!-- <option>Default</option>-->
                                                <option value="<?php echo $add->code; ?>"><?php echo $add->code; ?></option>
                                                
												<?PHP }}?>
                                              </select><input style="float:right; border-color:#aaa;" id="mobile" type="text" onkeypress="return numbersonly(event)" name="reg_mobileno" id="reg_mobileno"  class="validate[required] select-box" data-prompt-position="topRight:5" id="selectbox" >
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="phone">Date Of Birth</label>
                                          	<div class=" ">
                                        	<select style="width: 159px; float: left; border-color: rgb(170, 170, 170); height: 32px;" name="month" id="month"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												 <option value="">Select Month</option>											  
 												 <option value='01'>Janaury</option>
													<option value='02'>February</option>
													<option value='03'>March</option>
													<option value='04'>April</option>
													<option value='05'>May</option>
													<option value='06'>June</option>
													<option value='07'>July</option>
													<option value='08'>August</option>
													<option value='09'>September</option>
													<option value='10'>October</option>
													<option value='11'>November</option>
													<option value='12'>December</option>
                                              </select>&nbsp;&nbsp;
											  <select style="width: 159px; float: left; border-color: rgb(170, 170, 170); height: 32px;" name="day" id="day"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												  <option value="">Select Day</option>											  
 												  <?php for($i='1';$i<32;$i++) { ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>				
												  <?php } ?>
                                              </select>&nbsp;&nbsp;
											  <select style="width: 159px; float: left; border-color: rgb(170, 170, 170); height: 32px;" name="year" id="year"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												 <option value="">Select Year</option>											  
 												  <?php for($i=date('Y');$i>=('1930');$i--) { ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>				
												  <?php } ?>
                                              </select>

                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
										<div class="form-row">
                                       	  <label for="phone">Gender</label>
                                          	<div  >
                                        		<p style="float:left;"> 
												<span style="float:left;"> <input type="radio" name="gender" id="gender" value="male"  class="validate[required] radio text-field" style="width:25px;"></span> <span style="float:left;"> Male </span>  
												<span style="float:left;"> <input type="radio" name="gender" id="gender" value="female" class="validate[required] radio text-field"  style="width:25px;"> </span> <span style="float:left;"> Female </span> </p>
                                            </div>
                                         </div>

										<div class="form-row">
										<label for="phone">Payment Method</label>
                                          	<div  >
                                        		<p style="float:left;"> 
												<span style="float:left;"> <input checked type="radio" name="paymentmethod" id="paymentmethod" onclick="pro_styles_check(this.value)"  value="Cheque"  class="validate[required] radio text-field" style="width:25px;"></span> <span style="float:left;"> Cheque </span>  
												<span style="float:left;"> <input type="radio" name="paymentmethod" id="paymentmethod" value="PayPal" onclick="pro_styles_check(this.value)"  class="validate[required] radio text-field"  style="width:25px;"> </span> <span style="float:left;"> PayPal </span> 
												<span style="float:left;"> <input type="radio" name="paymentmethod" id="paymentmethod"  onclick="pro_styles_check(this.value)"  value="Bank Transfer" class="validate[required] radio text-field"  style="width:25px;"> </span> <span style="float:left;"> Bank Transfer </span> 
												</p>
                                            </div>
										</div>
										 
										<div class="form-row" id="cheque_div">
											<label for="phone">Cheque Payee Name</label> 
											<div class="text-field-wrap">
												<input type="text" name="chq_payee_name" id="chq_payee_name" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chq_payee_error" style="color:red;"></span>
                                            </div>
										</div>
										<div class="form-row" id="PayPal_div" style="display:none;">
											<label for="phone">PayPal Payee Name</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="paypal_payee_name" id="paypal_payee_name" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="paypal_payee_error" style="color:red;"></span>
                                            </div>
										</div>
										<div class="form-row" id="Bank_Transfer_div" style="display:none;">
											<label for="phone">Bank Name</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="bank_name" id="bank_name" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chequename_error" style="color:red;"></span>
                                            </div>
											<label for="phone">ABA/BSB number (Branch Number)</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="abs_bsb_number" id="abs_bsb_number" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chequename_error" style="color:red;"></span>
                                            </div>
											<label for="phone">SWIFT Code</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="swift_code" id="swift_code" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chequename_error" style="color:red;"></span>
                                            </div>
											<label for="phone">Account Name</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="account_name" id="account_name" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chequename_error" style="color:red;"></span>
                                            </div>
											<label for="phone">Account Number</label>
                                          	<div class="text-field-wrap">
												<input type="text" name="account_number" id="account_number" class="validate[required] text-field" data-prompt-position="topRight:20" >
												<span id="chequename_error" style="color:red;"></span>
                                            </div>
										</div>
										
                                    	<!--form row ends-->
                                         <!--div class="form-row I-agree-checkbox">
                                          
                                          <input style="float: left; margin: 6px 10px 0px 0px;" type="checkbox" name="insider" id="insider" value="1">
                                          <label for="checkbox" class="check-box-label">Become Insider</label>
                                        </div-->
                                        <div class="form-row I-agree-checkbox">
                                         
                                          <input style="float: left; margin: 6px 10px 0px 0px;" class="validate[required] checkbox" type="checkbox" name="checkbox" id="checkbox">
                                           <label for="checkbox" class="check-box-label">I agree with the <a href="<?php echo $base_url; ?>terms-conditions" target="_blank">Terms of Service</a></label>
                                        </div>
                                    	<!--form row ends-->
                                      <div class="form-row">
                                        <input name="register" type="submit" value="Register" class="submit-button">                                        
                                        </div>
                                   		<!--form-row ends-->
                                    </form>
                                </div>
                        		<!--generic-form-wrapper ends-->
                        	</div>
    </div>
  </div>
</div>
 

<div class="trust hide-sm">
</div>

<script>
	function validate()
	{
		/* var reg_username = $("#reg_username").val();
		if(reg_username == '')
		{
			alert('Please Enter Name.');
			return false;
		}
		
		var reg_email = $("#reg_email").val();
		if(reg_email == '')
		{
			alert('Please Enter Email.');
			return false;
		}
		
		 
        var em = document.getElementById('reg_email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
            alert('Please Enter Valid Email Address.');
            em.focus;
            return false;
        }
		
		var reg_password = $("#reg_password").val();
		if(reg_password == '')
		{
			alert('Please Enter Password.');
			return false;
		}
		
		var pass2 = $("#reg_password2").val();
		if(pass2 == ''){
			alert('Please Enter Confirm Password.');
			return false;
		}
		if(pass2 != '')
		{
			var passcheck = $("#reg_password").val();
			if(pass2 != passcheck)
			{
				alert('Password and Confirm password must be Same.');
				return false;
			}
		}
		
		var reg_mobileno = $("#reg_mobileno").val();
		if(reg_mobileno == '')
		{
			alert('Please Enter Mobile No.');
			return false;
		}
		var em = document.getElementById('reg_mobileno');
		  var filter = /^\d{10}$/;
		  if (!filter.test(em.value)) {
		   alert('Mobile No is not valid');
		   em.focus;
		   return false;
		  }
		
		var conition = document.getElementById('checkbox').checked;
        if(conition == ''){
            alert("Please Accept Our Term And Conditions.");
            return false;
        }  */
				
		$('#form').submit();
	}	
	
	 </script>
	 <script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>

<script>
	function emailvalidate()
	{
		var email = $("#reg_email").val();
		var url = '<?php echo $base_url ?>affiliate/checkemail/';
		$.ajax({
		url:url,
		type:'post',
		data:'email='+email,
		success:function(msg)
		{
			//alert(msg);
			if(msg !=""){
				alert("Email Id Already Exist.!!");
			} else {
				return true;
			}
			$("#reg_email").val('');
			//alert("Thank you for your subscription.!!");
		} 
		});
	}
</script>
<script>
function pro_styles_check(val){
		
	if(val == 'Cheque' ){	
		document.getElementById("cheque_div").style.display = "block";
		document.getElementById("PayPal_div").style.display = "none";
		document.getElementById("Bank_Transfer_div").style.display = "none";
	}else if(val == 'PayPal' ){	
		document.getElementById("PayPal_div").style.display = "block";
		document.getElementById("cheque_div").style.display = "none";
		document.getElementById("Bank_Transfer_div").style.display = "none";
	}else if(val == 'Bank Transfer' ) {		
		document.getElementById("Bank_Transfer_div").style.display = "block";
		document.getElementById("cheque_div").style.display = "none";
		document.getElementById("PayPal_div").style.display = "none";
	}
}
</script>

<?php include ('includes/footer.php'); ?>
 <!-- script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
	jQuery(document).ready(function(){
		jQuery( "#dob" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
	 
	});
</script -->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<!-- link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/ -->
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#form").validationEngine('');
	});
		
</script>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->