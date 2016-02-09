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


<link href="<?php echo $base_url_views;?>css/easy-responsive-tabs.css" rel="stylesheet" />
<!-- link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/dc2143a91c892b975f4882b30d5b0acd.css" media="all" />
<script type="text/javascript" src="<?php echo $base_url_views;?>css/jquery-1.8.3.min.js"></script>
<script src="<?php echo $base_url_views;?>css/easyResponsiveTabs.js" type="text/javascript"></script -->

<script language="javascript">
 function validate()
   { 
   
		var fname = document.getElementById('Name').value;
		if(fname == '')
		{
			alert('Please Enter First Name');
			return false;
		} 
		
		var lname = document.getElementById('Address1').value;
		if(lname == '')
		{
			alert('Please Enter Address1');
			return false;
		} 
		 
		/*var address = document.getElementById('Address2').value;
		if(address == '')
		{
			alert('Please Enter Address for Billing Detail');
			return false;
		} */
		var city = document.getElementById('City').value;
		if(city  == '')
		{
			alert('Please Enter City  ');
			return false;
		} 
		var email1 = document.getElementById('State').value;
		if(email1 == '')
		{
			alert('Please Select State');
			return false;
		} 
		 
		var spostcode = document.getElementById('Zip').value;
		if(spostcode == '')
		{
			alert('Please Enter Zip-Code ');
			return false;
		} 
		 	  
		var spostcode = document.getElementById('Phone').value;
		if(spostcode == '')
		{
			alert('Please Enter Phone No for Billing Detail ');
			return false;
		}
		 var em = document.getElementById('Phone');
			  var filter = /^[0-9]+$/;
			  if (!filter.test(em.value)) {
			   alert('Enter Numeric Value in Phone No.');
			   em.focus;
			   return false;
			  }
		
		/* var conition = document.getElementById('checkbox').checked;
        if(conition == ''){
            alert("Please Set Address As Billing Address.");
            return false;
        } */ 
				
		 
		document.checkout.submit();
	}
	</script>
	<script>
function checkemail(email)
{
	if(document.getElementById('country').value == '1'){
		var url = '<?php echo $base_url ?>/home/checkemail/';
			$.ajax({
			url:url,
			type:'post',
			data:'email='+email,
			success:function(msg)
			{
			 
				if(msg!=""){
					alert(msg);
					$("#Zip").val(''); 
				} else  { 
						return false;
						}	
			}
			});
		}
}
</script>
<style>
.action.submit-button.submit{display:none;}
</style>
<div class="panel panel-dark">
  <div id="discovery-container">
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
      
      <div class="inner-page-content">
                      		<h1 class="page-title">Address</h1>
                          	
                            <div class="checkout-wrapper">
                            
                            
                            	<div class="checkout-wrapper-contents">
                            	<!--responsive tabs to accordion-->
                                <div class="step-chunk">
                                   <div class="cart-table">
                            		<div class="cart-row headings" style="background-color:#ccc;">
                                    	<div class="cart-column"><strong>PRODUCT</strong></div>
										<div class="cart-column"><strong>PRICE</strong></div>
										<div class="cart-column"><strong>QUANTITY</strong></div>
										<div class="cart-column"><strong>TOTAL</strong></div>
									</div>
                            		<!--cart-row ends-->
									<link rel="stylesheet" href="<?php echo $base_url_views?>css/new1.css">
									<script src="<?php echo $base_url_views?>js/new2.js"></script>
									<script src="<?php echo $base_url_views?>js/new3.js"></script>
                                      <?php 
									if($this->cart->total_items() > 0) { 
									$i = 1;
									$cart_subtotal=''; $displayprice1 = '0';
									foreach($this->cart->contents() as $items)  
									{
										$proditem =  $this->cart_model->productdetails($items['id']);
									//echo "<pre>";print_r($items);
									?>  
									<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
                                        <div class="cart-row">
                                    	<div class="cart-column">
										 		 
                                       	  <div class="cart-pro-label-value-wrap"> 
                                                <div class="cart-pro-label">
                                                    Product                                            
                                                </div>
 												 <?php if($items['options']['is_3d'] != '2') {  
												if($items['options']['is_3d'] == '0') { ?>	  
												<div class="cart-pro-value pro-name">
                                                          <a href="<?php echo $base_url;?>home/details/<?php echo $proditem->id; ?>/<?php echo $items['options']['prodid']; ?>"><img src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $proditem->image; ?>" width="80" height="60"></a>
														  <a href="<?php echo $base_url;?>home/details/<?php echo $proditem->id; ?>/<?php echo $items['options']['prodid']; ?>"><?php echo $items['name']; ?></a>
 												</div>
												<?php } else { ?> 
												<div class="cart-pro-value pro-name">
                                                          <a href="#"><img src="<?php echo $http_host;?>/upload/saveprofile/<?php echo $items['options']['imagename']; ?>" width="80" height="60"></a>
														  <a href="#"><?php echo $items['name']; ?></a>
 												</div>
												
												<?php } } else { ?> 
													<div class="cart-pro-value pro-name">
                                                          <a href="#"><?php echo $items['name']." - ".$items['options']['email']; ?></a>
 													</div>
												<?php } ?>
                                                <!--"cart-pro-label ends-->
                                          </div>
                                            <!--cart-pro-label-value-wrap ends-->
                                        </div>
										
										
                                        <!--col1 ends-->
										
                                        <div class="cart-column rate">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Price                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                               <div class="cart-pro-value price">
											   
											    
															<?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php
																		$price = $items['price'];
																		$newqty = $items['qty'];
																		 echo $newtotal = $price/$newqty;
																		?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		 
																		echo roundUpToAny(( $items['price'] / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) ));
																} ?>													 
				  
                                                                                           
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                 
                                         </div>
                                         <!--col 2 ends-->
                                        
                                         <!--col 3 ends-->
                                        <div class="cart-column quantity">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Quantity                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                 <div class="cart-pro-value" >
                                                     	<?php echo $items['qty']; ?>  
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                     
                                    </div>
                                    <!--col4 ends-->
                                        <div class="cart-column rate">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Total                                          
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value price total">
                                                      
															
															<?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $displayprice = $items['price'];?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																	 	echo $displayprice = roundUpToAny(( $items['price'] / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) ));
																} ?>														 

														                               
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                         
                                         </div>
                                         <!--col 5 ends-->
                                                                                                                     
                                         
                                         <div class="goto-update-cart">
                                         	<a href="#update-cart-continue-row">Go to update cart &rarr;</a>
                                         </div>
                                         
                                  </div>
								  <?php if($items['options']['is_3d'] != '2') {  ?>
                            		   <!-- a type="" href="#" class="" data-toggle="collapse" data-target="#demo<?php echo $items['rowid'];?>">REVIEW FULL SUMMARY</a><br-->
								  <?php } ?>
                                   <?php //$cart_subtotal = $cart_subtotal + $items['price']; 
										$i++;
										//$cart_subtotal = $displayprice + $cart_subtotal;
								  } } ?> 
								 
                           		</div>
                                </div>
                                <!--step-chunk ends-->
                                
                                <div class="step-chunk">
                                    <h3>Confirm Shipping Address</h3>
                                    <p>You can also change your billing address via 'My Account' by <a href="#">clicking here</a></p>
									<?php if($this->session->flashdata('update')!='') { ?>
										<p style="color:green;"><?php echo $this->session->flashdata('update'); ?></p>
									<?php } ?>
                                </div>
                                <!--step-chunk ends-->
                                
               					<div class="horizontalTab">
            <ul class="resp-tabs-list">
                <li id="hide_address">Select Existing Address</li>
                <li id="hide_address2">Add New Shipping Address</li>
				<li  id="show_edit" style="display:none;">Edit Address</li>
            </ul>
            <!--resp-tabs-list ends-->
            
			<div class="resp-tabs-container">
                <div class="static-page-data">
                  	<div class="generic-form-wrapper">

                    	<?php $address = "0"; if($deafaultadd != "") { $address = "1";?>
						<form name="form1" method="post" action="<?php echo $base_url; ?>home/review_order" id="checkoutform" name="checkoutform">
									<input type="hidden" value="1" id="paymentmethod" name="paymentmethod" />
                        			<div class="form-row">
										
                                    	<div class="defaultadd-choose-another-col">
											<p style="text-decoration:underline;">Billing Address</p>
                                        	<p class="name"><?php echo $deafaultadd->Name;?></p>
                                            <p><?php echo $deafaultadd->Address1;?>, </p>
                                            <?php if($deafaultadd->Address2 != ''){ ?>
												<p><?php echo $deafaultadd->Address2;?>, </p>
											<?php } ?>
                                            <p><?php echo $deafaultadd->City;?>, </p>
                                            <p><?php echo $deafaultadd->State;?> - <?php echo $deafaultadd->Zip;?></p>
                                         <a onclick="showedit();" id="addressshow" >Edit</a>
                                        </div>
                                        <!--defaultadd-choose-another-col ends-->
                                        
                                      <div class="defaultadd-choose-another-col">
									    <p style="text-decoration:underline;">Shipping Address</p>
										<?php if($all_address != "" && count($all_address) >= 0) {
										$j = '0';
										foreach($all_address as $add) {  ?>
										<p>
											<input type="radio" value="<?php echo $add->id; ?>" name="shippaddress" <?php if($j == '0'){ ?> checked = 'checked' <?php } ?> /> <?php echo $add->Name; ?> <br/> <?php echo $add->Address1; ?> <?php if($add->Address2 != ''){ ?>
											 <?php echo $add->Address2;?>, 
											<?php } ?> <br/><?php echo $add->City;?>,  
                                            <?php echo $add->State;?> - <?php echo $add->Zip;?>
 										</p>
										<?PHP $j++; }} ?>
										<!-- p>
                                              <select name="shippaddress" id="shippaddress" class="select-box">									
                                             	<?php // if($all_address != "" && count($all_address) >= 0) {

										//foreach($all_address as $add) { ?>
                                                <option value="<?php echo $add->id; ?>" <?php //if($add->Address1 == $add->id) {?>  selected = 'selected' <?php // }?>><?php //echo $add->Address1; ?></option>
                                                
												<?PHP // }}?>
                                              </select>
										</p-->
                                          
                                          <!--p>
                                          	<a href="<?php echo $base_url;?>account/account_address_book">View All Addresses</a>
                                          </p-->
                                        
                                      </div>
                                    	<!--defaultadd-choose-another-col ends-->
                                    </div>
                                    
                                    <!-- div class="form-row">
                                        <input name="" type="submit" value="Continue" class="submit-button">
									</div -->
                        
                        
                        </form>
                    <?php } else { 
					$address = "0";
					?>
						Please Add your Address
                    <?php } ?>
                    </div>
                    <!--generic-form-wrapper ends-->
                
                
              </div>
  <!--tab 1 ends-->
                <div class="static-page-data">
               	 	<div class="generic-form-wrapper">
      
<form name="checkout" id="checkout" class="form" method="post" action="<?php echo $base_url;?>bilship/addaddress">
 <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">  
 <INPUT TYPE="hidden" NAME="action" VALUE="addaddress"> 
 
 										
                                        <div class="form-row">
                                       	  <label for="Email">Name *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="Name" id="Name" value="<?php echo $this->session->userdata('username'); ?>" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->
                                        
                                <div class="form-row">
                                       	  <label for="Email">Address Line 1 *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="Address1" id="Address1" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->  
                                        
                                 <div class="form-row">
                                       	  <label for="Email">Address Line 2 </label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="Address2" id="Address2" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->    
                                        
                                        
                                 <div class="form-row">
                                       	  <label for="Email">City *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="City" id="City" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->  
                                        
                                   
                                        <!--form-row ends--> 
										
										 <div class="form-row">
                                <label for="Email">Country *</label>
                                <select class="select-box" name="country" id="country">
                                    
									<option value="">Select Country</option>
									<?php 
									if($allcountry !="" && count($allcountry)>0){
									foreach ($allcountry as $country) 
									{
									?>
									<option value="<?php echo $country->cid; ?>"><?php echo $country->cname; ?></option>
									<?php } } ?>
								 
									 
								</select>
                            </div>
							 <div class="form-row">
                                       	  <label for="Email">State *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="State" id="State" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        
                                        <div class="form-row">
                                       	  <label for="Zip">Zip *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="Zip" id="Zip" class="text-field" >
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->   
                                        
                                        <div class="form-row">
                                       	  <label for="Zip">Phone *</label>
                                          	<div class="text-field-wrap">
												<select class="select-box" name="code" id="code" style="width:15%;float:left;margin-right:5px;">
                                    
									<option value="">Select Code</option>
									<?php 
									if($allcountry !="" && count($allcountry)>0){
									foreach ($allcountry as $country) 
									{
									?>
									<option value="<?php echo $country->code; ?>"><?php echo $country->code; ?></option>
									<?php } } ?>
								 
									 
								</select><input style="width:70%;float:left;" type="text" name="Phone" id="Phone" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends-->    
										 <div class="form-row">
                                       	  <label for="Zip"><input type="checkbox" name="checkbox" id="checkbox" value="1" > &nbsp; Set as Billing</label>
                                            
                                        </div>
                                        <!--form-row ends-->    
                                    
									  <?php
							if($this->session->userdata('logged_in') == "1")
							{ ?>
                                    <div class="form-row">
										<input name="" type="submit" value="Continue" class="submit-button" onClick="javascript:validate(); return false;">
                                    </div>
							<?php } else { ?>     
                                     <div class="form-row">
										 
                                    
									<input name="" type="submit" value="Continue" class="submit-button" onclick="alert('Please Login First To Add Details.'); return false;">
									</div>
							<?php } ?>
                                    
                                    </form>
                                
                                
                                </div>
                        		<!--generic-form-wrapper ends-->
                    
			</div>
               
<!--Existing Customers tab ends-->
			<div class="static-page-data" id="showedit_address">
				<div class="generic-form-wrapper">
      
				<form name="checkout" id="checkout" class="form" method="post" action="<?php echo $base_url;?>account/edit_shipping_address/<?php echo $deafaultadd->id; ?>">
				<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
				<INPUT TYPE="hidden" NAME="action" VALUE="edit_shipping_address">
				<INPUT TYPE="hidden" NAME="id"  value="<?php echo $deafaultadd->id; ?>">
					
					<input type="hidden" id="checkbox" name="Status" value="1">
					
					<div class="form-row">
						<label for="Email">Name *<?php print_r($deafaultadd->Name); ?> </label>
						<div class="text-field-wrap">
							<input type="text" name="Name" id="Name" value="<?php echo $deafaultadd->Name;?>" class="text-field">
						</div>
						<!--text-field-wrap ends-->  
					</div>
					<!--form-row ends-->
                                        
					<div class="form-row">
						<label for="Email">Address Line 1 *</label>
						<div class="text-field-wrap">
							<input type="text" name="Address1" id="Address1" class="text-field" value="<?php echo $deafaultadd->Address1;?>">
						</div>
						<!--text-field-wrap ends-->    
					</div>
					<!--form-row ends-->  
                                        
					<div class="form-row">
						<label for="Email">Address Line 2 </label>
						<div class="text-field-wrap">
							<input type="text" name="Address2" id="Address2" class="text-field" value="<?php echo $deafaultadd->Address2; ?>">
						</div>
						<!--text-field-wrap ends-->      
					</div>
					<!--form-row ends-->    
                                            
					<div class="form-row">
						<label for="Email">City *</label>
						<div class="text-field-wrap">
							<input type="text" name="City" id="City" class="text-field" value="<?php echo $deafaultadd->City;?>">
						</div>
						<!--text-field-wrap ends--> 	   
					</div>
					<!--form-row ends-->  
                                        
                                   
					<!--form-row ends--> 
										
					<div class="form-row">
						<label for="Email">Country *</label>
						<select class="select-box" name="country" id="country" value="<?php echo $deafaultadd->State;?>">
							<option value="">Select Country</option>
							<?php 
							if($allcountry !="" && count($allcountry)>0){
							foreach ($allcountry as $country)  { ?>
							<option value="<?php echo $country->cid; ?>" <?php if($country->cid==$deafaultadd->country){ echo "Selected"; } ?>><?php echo $country->cname; ?></option>
							<?php } } ?>
						</select>
					</div>
					<div class="form-row">
						<label for="Email">State *</label>
						<div class="text-field-wrap">
							<input type="text" name="State" id="State" class="text-field" value="<?php echo $deafaultadd->State;?>" />
						</div>
						<!--text-field-wrap ends-->   
					</div>         
					<div class="form-row">
						<label for="Zip">Zip *</label>
						<div class="text-field-wrap">
							<input type="text" name="Zip" id="Zip" class="text-field"  value="<?php echo $deafaultadd->Zip;?>" />
						</div>
						<!--text-field-wrap ends--> 
					</div>
								<!--form-row ends-->    
					<div class="form-row">
						<label for="Zip">Phone *</label>
						<div class="text-field-wrap">
							<input type="text" name="Phone" id="Phone" class="text-field" value="<?php echo $deafaultadd->Phone;?>" />
						</div>
						<!--text-field-wrap ends-->
					</div>
					
					<!--form-row ends-->    	
					<div class="form-row">
						<input name="" type="submit" value="Save Changes" class="submit-button" >
					</div>   
				</form>       
			</div>
			<!--generic-form-wrapper ends-->
			</div>
            </div>
            <!--resp-tabs-container ends-->
        </div>
      <!--horizontalTab ends-->
            
            
            			
                            	<!--responsive tabs to accordion ends-->
                            </div>
                            <!--checkout-wrapper-contents ends-->
                            <div class="order-summary">
								 
                                	<div class="order-summary-content">
										<h3>Order Summary</h3>
                                    	<div class="cart-calculation-container">
                                        
                                        <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Items 
											
											</div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
                                       			(<?php echo $this->cart->total_items();?> ITEM)
                    
                                        </div>                                       <!--cart-calculation-col-->
                                
                                	</div>
									
									
									  <?php if($this->session->userdata('couponcode') !="") { ?>
                                        <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Coupan Discount
											</div>
											<div class="cart-calculation-col">
												<?php if($this->session->userdata('couponcode')=='1'){ ?>
												 <?php if($this->session->userdata('currencycode') == 'INR') {
													echo "Rs."; } else { echo $this->session->userdata('currencycode'); }
												 }
												 ?>
												 <?php echo $this->session->userdata('couponprice'); ?> 
												 <?php if($this->session->userdata('couponcode')=='0'){
												echo "%";
												}
												?>
											</div>                               
										</div>
										<?php } ?>
										
										 <?php if($this->session->userdata('vouchercode') !="") { ?>
										<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Gift Voucher Discount
											</div>
											<div class="cart-calculation-col">
												 
												 <?php if($this->session->userdata('currencycode') == 'INR') {
													echo "Rs."; } else { echo $this->session->userdata('currencycode'); }
												 
												 ?>
												 <?php echo $this->session->userdata('voucherprice'); ?> 
												  
												
											</div>                               
										</div>
										 <?php } ?>
										 
										 
										  <?php if($this->session->userdata('mywalletdata') !="") { ?>
										<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Wallet Amount 
											</div>
											<div class="cart-calculation-col">
												 
												 <?php if($this->session->userdata('currencycode') == 'INR') {
													echo "Rs."; } else { echo $this->session->userdata('currencycode'); }
												 
												 ?>
												 <?php echo $this->session->userdata('mywalletdata'); ?> 
												  
												
											</div>                               
										</div>
										 <?php } ?>
                                    <!--cart-calculation-row ends-->
                                 
                                	<div class="cart-calculation-row total">
                                    	<div class="cart-calculation-col labels">
                                        	Total 
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                       
                                        <div class="cart-calculation-col total-rate">
											 <?php
												if($this->session->userdata('currencycode') == 'INR')
												{ echo $this->session->userdata('currencycode')." ";  ?> <?php echo $this->session->userdata('total_amount');?> 
												<?php } else { 
														echo $this->session->userdata('currencycode')." "; 
														//echo $this->session->userdata('total_amount'); 
														echo $this->session->userdata('total_amount');
												} ?>													 
                                         </div>  
                                        <!--cart-calculation-col-->
								 
                                 	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row total-excludes">
                                    	Total excludes shipping
                                    
                                    </div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <!-- div class="cart-calculation-row">
                                    	<a href="<?php echo $base_url; ?>cart/viewcart" class="view-cart">View Cart</a>
                                    </div-->
									<?php if($address == '0') { ?>
										<div class="cart-calculation-row">
											<a href="javascript:void(0);" onclick="alert('Please Enter Your Address');" class="view-cart" style="background-color:#ccc;">Pay With Debit/Credit Card</a>
										
										</div>
										<?php if($this->session->userdata('currencycode') != 'INR' && $this->session->userdata('currencycode') != 'SAR' && $this->session->userdata('currencycode') != 'BHD' && $this->session->userdata('currencycode') != 'QAR' && $this->session->userdata('currencycode') != 'AED'){ ?>
											<div class="cart-calculation-row">
												<a href="javascript:void(0);" onclick="alert('Please Enter Your Address');" class="view-cart">Pay With Paypal</a>
											</div>
										<?php } ?>
									<?php } else { 
											
											if($this->session->userdata('total_amount') == '0') { ?>
													<div class="cart-calculation-row">
                                    		<a href="javascript:void(0);" onclick="$('#paymentmethod').val('3'); $('#checkoutform').submit();" class="view-cart" style="background-color:#ccc;">Confirm Order</a>
 										</div>
											<?php } else { 

											?>
										<div class="cart-calculation-row">
                                    		<a href="javascript:void(0);" onclick="$('#paymentmethod').val('1'); $('#checkoutform').submit();" class="view-cart" style="background-color:#ccc;">Pay With Debit/Credit Card</a>
 										</div>
										<?php if($this->session->userdata('currencycode') != 'INR'){ ?>
										<div class="cart-calculation-row">
											<a href="javascript:void(0);" onclick="$('#paymentmethod').val('2'); $('#checkoutform').submit();" class="view-cart">Pay With Paypal</a>
										</div>	
										<?php } } ?>
									<?php } ?>
						                
                                    </div>
                                    <!--cart-calculation-container ends-->
                                    
                                    
                                    </div>
                                    <!--order-summary-content ends-->
                                    
                              
                                </div>
                                <!--order-summary ends-->


								<!-- div class="order-summary" style="margin-top:2%;">
								 
                                	<div class="order-summary-content">
										<h3>Order Summary</h3>
                                    	<div class="cart-calculation-container">
                                        
                                        <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Items 
											
											</div>
                                         
                                        <div class="cart-calculation-col">
                                       			(1<?php echo $this->cart->total_items();?> ITEM)
                    
                                        </div>                                     
                                
                                	</div>

									<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Sub Total
											
											</div>
                                         
                                        <div class="cart-calculation-col">
                                       			<?php echo $this->cart->total_items();?>
                    
                                        </div>                                      
                                
                                	</div>

									<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Shipping 
											
											</div>
                                         
                                        <div class="cart-calculation-col">
                                       			<?php echo $this->cart->total_items();?>
                    
                                        </div>                                      
                                
                                	</div>

									<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Discount 
											
											</div>
                                         
                                        <div class="cart-calculation-col">
                                       			<?php echo $this->cart->total_items();?>
                    
                                        </div>                                       
                                
                                	</div>
                                  
                                	<div class="cart-calculation-row total">
                                    	<div class="cart-calculation-col labels">
                                        	Total 
                                        
                                        </div>
                                        
                                        <div class="cart-calculation-col total-rate">
										 
													 <?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.000<?php echo $this->session->userdata('total_amount');?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $this->session->userdata('total_amount') / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>													 
				  
                                     
                                        
                                        
                                        </div>  
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                   
                                    
                                    </div>
                                    <!--cart-calculation-container ends-->
                                    
                                    
                                    </div>
                                    <!--order-summary-content ends-->
                                    
                              
                                </div>
                                <!--order-summary ends-->
                            
                            </div>
                            
                            </div>
                            <!--checkout-wrapper ends-->
                            
                            
                        </div>
      
    </div>
  </div>
</div>
 

<div class="trust hide-sm">
</div>


    <?php include ('includes/footer.php'); ?>
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
<!--script>
$("#addressshow").click(function(){
    $("#showedit_address").show();
});
</script-->

<script type="text/javascript">
function showedit(){
	$("#show_edit" ).show();
	$("#show_edit" ).trigger( "click" );
}
 
$("#hide_address").click(function(){
    $("#show_edit").hide();
});
$("#hide_address2").click(function(){
    $("#show_edit").hide();
});
</script>
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->