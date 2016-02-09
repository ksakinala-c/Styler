<?php include ('includes/header.php'); 
function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
}
?>
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
      
      <div class="inner-page-content">
                      		<h1 class="page-title">Review Order <span class="cart-items">(3 items)</span></h1>
                            
                          <form name="form1" method="post" action="">
                        	<div class="cart-wrapper review">
                            	<div class="cart-table">
                            		<div class="cart-row headings">
                                    	<div class="cart-column"><strong>Product</strong></div>
                                        <div class="cart-column rate"><strong>Price</strong></div>
                                        <!--div class="cart-column unit">Colour</div-->	
                                        <div class="cart-column unit">Size</div>
                                        <div class="cart-column quantity"><strong>Quantity</strong></div>
                                        <div class="cart-column rate"><strong>Total</strong></div>
                                    </div>
                            		<!--cart-row ends-->
                                     <?php 
										if($this->cart->total_items() > 0) { 
										$i = 1;
										$cart_subtotal='';
										foreach($this->cart->contents() as $items)  
											{
												//print_r($items);
												$proditem =  $this->cart_model->productdetails($items['id']);
												$prodata = $this->home_model->prodetailsall($proditem->pid);
												$systemsvaribale = $this->footer->systemsvaribale();
												$shipadd = $this->home_model->getadd($this->session->userdata('shippaddress'));
												$country = $shipadd->country;
												$weight = $prodata->weight;
												$free = $systemsvaribale->free;
												$flatrate = $systemsvaribale->flatrate;
												$weightbase = $systemsvaribale->weightbase;
												//echo $weight;
												//print_r($shipadd);die;
												if($free == '1'){
													$extrars = "0";
												}
												if($flatrate == '1'){
													$flatrate = $this->home_model->getflatrate($country);
													$extrars = $flatrate ;
												}
												
												if($weightbase == '1'){
													if($weight>=0 && $weight<=500){
													$weightrate = $this->home_model->weightrate($country);
													$extrars = $weightrate ;
													}
													if($weight>=501 && $weight<=1000){
													$weightrate = $this->home_model->weightrate1($country);
													$extrars = $weightrate ;
													}
													if($weight>=1001 && $weight<=1500){
													$weightrate = $this->home_model->weightrate2($country);
													$extrars = $weightrate ;
													}
													if($weight>=1501 && $weight<=2000){
													$weightrate = $this->home_model->weightrate3($country);
													$extrars = $weightrate ;
													}
													if($weight>=2001 && $weight<=2500){
													$weightrate = $this->home_model->weightrate4($country);
													$extrars = $weightrate ;
													}
													if($weight>=2501 && $weight<=3000){
													$weightrate = $this->home_model->weightrate5($country);
													$extrars = $weightrate ;
													}
													//echo $extrars;
												}
												if($extrars !=""){
												$newshipping = $extrars;
												} else{
													$newshipping = "0";
												}
											?>
								
                                <div class="cart-row">
									<div class="cart-column">
                                        <div class="cart-pro-label-value-wrap"> 
                                            <div class="cart-pro-label">
                                                    Product                                            
                                            </div>
                                                    <!--"cart-pro-label ends-->
                                            <div class="cart-pro-value pro-name">
													<a href="#"><?php echo $items['name']; ?></a>
											</div>
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
																		Rs.<?php echo $items['price'];?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $items['price'] / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>	
                                                        
												</div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                 
                                         </div>
                                         <!--col 2 ends-->
                                        <?php /* if($items['options']['color'] !="") {?>
                                        <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap">
												<div class="cart-pro-label">
                                                  Colour                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
												<?php echo $items['options']['color']; ?>
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div>
										 <?php } */?>
										 
										  
										 <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                <div class="cart-pro-label">
                                                  Size                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
                                                       <?php echo $this->session->userdata('sizeid'); ?>
												</div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div> 
										 
                                         <!--col 3 ends-->
                                        <div class="cart-column quantity">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                <div class="cart-pro-label">
                                                    Quantity                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
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
																		Rs.<?php echo $items['subtotal'];?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $items['subtotal'] / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>  														
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->  
                                            
                                            
                                                                                 
                                         </div> </div>
                                         <!--col 5 ends-->
                                         
                                          <?php   $cart_subtotal = $cart_subtotal + $items['subtotal']; }  } ?>
                                 
										<div class="goto-update-cart">
                                         	<a href="<?php echo $base_url; ?>cart/viewcart">Go to Modify Order, Shipping , Confirm order </a>
                                        </div>
                                </div>
                            		<!--cart-row ends-->
                                    
                                     
                            		<!--cart-row ends-->
                            </div>
                                <!--cart table ends-->        
                </div>
                            <!--cart-wrapper ends--> 
                            
                            <ul class="update-cart-continue-row" id="review-order-modify">
                            	<li>Need to modify your order? You can do this by updating your shopping cart</li>
                            	<li><a href="<?php echo $base_url; ?>cart/viewcart" class="button">Modify order</a>
                            	</li>
                            </ul>
                            <!--update-cart-continue-row ends-->
                            
                            <div class="review-address-wrap">
                            	<div class="review-address-col">
									<h4>Billing Address</h4>
											<p class="name"><?php echo $deafaultadd->Name;?></p>
                                            <p><?php echo $deafaultadd->Address1;?>, </p>
                                            <p><?php echo $deafaultadd->Address2;?>, </p>
                                            <p><?php echo $deafaultadd->City;?>, </p>
                                            <p><?php echo $deafaultadd->State;?> - <?php echo $deafaultadd->Zip;?></p>
                                    <p><a href="<?php echo $base_url;?>account/account_address_book">Edit Address</a></p>
                               
                                </div>
                                <!--col1 ends-->
                                
                                <div class="review-address-col">
								   
                                	<h4>Shipping Address</h4>
                                   <?php  if($shipadd != "") {	  ?>
									<p class="name"><?php echo $shipadd->Name;?></p>
                                            <p><?php echo $shipadd->Address1;?>, </p>
                                            <p><?php echo $shipadd->Address2;?>, </p>
                                            <p><?php echo $shipadd->City;?>, </p>
                                            <p><?php echo $shipadd->State;?> - <?php echo $shipadd->Zip;?></p>
                                    <p><a href="<?php echo $base_url;?>account/account_address_book">Edit Address</a></p>
										<?php } else {
											echo "<b>Please Select Shipping Address</b>";
										} ?>
                                </div>
                                <!--col2 ends-->
                            
                          
                            </div>
                            <!--review-address-wrap ends-->
							
                            
                            <div class="cart-calculation review">
                            	<script>
									function cashondel(id){
										value = '<?php echo $systemsvaribale->codextra ; ?>';
										if(id == 'cash'){ 
											alert('Additional amount of Rs.'+value+' will be added to your total amount.');
											return false;
										}
									}
								</script>
                                
                                <div class="about-cart" id="review-shipping-method">
								<input type="hidden" name="payment_type" id="payment_type" value="pay" />
                                	<!-- h4>Payment Method</h4>
                                    <p>Select Payment Method</p -- >
                                    <p>
                                    <!-- select name="payment_type" id="payment_type" class="select-box" onchange="cashondel(this.value);">
                                      <option value="pay">Payment Gateway</option>  
									  <?php if($systemsvaribale->cashondelivery == '1') { ?>
									  <option value="cash">Cash on Delivery</option>
									  <?php } ?>
                                    </select -->
                                    </p>
                                </div>
                            	<!--about-cart ends-->
                                
                                <div class="cart-calculation-container">
                                	<div class="cart-calculation-row">
                                    	<div class="cart-calculation-col labels">
                                        	Subtotal
                                         </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
 
													 
													  <?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $cart_subtotal;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $cart_subtotal / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>  
                                                        
                                        
                                        </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                  
                                     <?php  $discount = '0'; ?>
                                                                                <?php if($this->session->userdata('couponcode') != '') { ?>
										 <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Coupon Discount
											</div>
											<div class="cart-calculation-col">
												<span class="WebRupee">Rs </span><?php echo $this->session->userdata('couponprice'); ?> 
											</div>
										</div> 
                                                                                <?php $discount = $this->session->userdata('couponprice'); } ?>


                                                                                <?php  $giftwrapcost = '0'; ?>
                                                                                <?php if($this->session->userdata('giftwrap') != '') { ?>
										 <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Gift Wrap Cost
											</div>
											<div class="cart-calculation-col">
												<span class="WebRupee">Rs </span> <?php echo number_format($systemsvaribale->giftwarpamt,'2','.',''); ?>
											</div>
										</div> 
                                                                                <?php $giftwrapcost = $systemsvaribale->giftwarpamt; } ?>
                                    <!--cart-calculation-row ends-->
                                     
                                    <div class="cart-calculation-row">
                                    	<div class="cart-calculation-col labels">
                                        	Shipping
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                     
                                        <div class="cart-calculation-col">
										 
                                        	  
													 
													  <?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $shipping =  $newshipping;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo $shipping = roundUpToAny(( $newshipping / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>  
                                        
                                        </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                  <!-- My Calculation -->
								   
								  <!--My Calculation Ends -->
                                    <div class="cart-calculation-row total">
                                    	<div class="cart-calculation-col labels">
                                        	Total 
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col total-rate">
                                     	<?php 
											$total = ($cart_subtotal + $shipping - $discount + $giftwrapcost); ?>
											
											
											  <?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $total;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $total / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?> 
											
											
											
											<?php $this->session->set_userdata('total_amount',$total);
												$this->session->set_userdata('shipping_cost',$shipping);			 
											?>
              
			                              </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row buttons">
                                    	<!--<input name="" type="submit" class="confirm-button" value="Confirm Order">                  -->          
										<a onclick="passtopayment();" class="confirm-button">Confirm Order</a>

													 <script>
													 function passtopayment(){
														 var payment_type = $("#payment_type").val();
														 if(payment_type == 'pay'){
															 window.location.href = '<?php echo $base_url;?>bilship/payu';
														 } else {
															 window.location.href = '<?php echo $base_url;?>bilship/checkout/1';  
														 }
													 }
										</script>			 
									</div>
                                    <!--checkout button  row ends-->
                                    
                                    
                                    
                                  
                                    
                                </div>
                            	<!--cart-calculation-container ends-->
                            
                            </div>
                          	<!--cart-calculation ends-->  
                            
                        </form>
                      </div>
      
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


      <?php include ('includes/footer.php'); ?>
	
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->