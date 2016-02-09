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
<script language="javascript">
		 
	function removeproduct(id)
	{
		 
		var t = confirm('Are you sure you want to remove product from cart?');
		if(t)
				{
					window.location.href= '<?php echo $base_url;?>cart/removeproduct/'+id;
					return true; 
				}
			else {
			return false;
		}
	}

	function checkout() 
	{
			<?php if($this->session->userdata('userid') == '') { ?>
				window.location.href = "<?php echo $base_url;?>home/login";	 
			<?php } else { ?>
			     window.location.href = "<?php echo $base_url;?>home/checkout";  
			<?php } ?>
	} 
		
	function updateqty(pid,val)
	{
		var t = confirm('Are you sure you want to update the quantity?');
		if(t)
		{
			document.cart.submit();
		} 
		else
		 {
			return false;
		 }
	}
	
</script>
<!-- /header -->
<main class="cd-main-content">
    <style>
	h1 {
  color: #FFF;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
}

h1 a {
  color: #c12c42;
  font-size: 16px;
}

.accordion {
  width: 100%;
  margin: 10px auto 10px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #333;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #b63b4d; }

.accordion li.open i { color: #b63b4d; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
.submenu {
  display: none;
  border:#666666 solid 1px;
  padding:10px 20px;
  font-size: 14px;
}

/*.submenu li { border-bottom: 1px solid #4b4a5e; }
*/
.submenu a {
  display: block;
  text-decoration: none;
  color: #d9d9d9;
  padding: 12px;
  padding-left: 42px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.submenu a:hover {
  background: #b63b4d;
  color: #FFF;
}
	</style>
 
<?php 
//print_r($this->cart->contents());
?>

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
                      		<h1 class="page-title">YOU HAVE <?php echo $this->cart->total_items(); ?> ITEMS IN THE CART <!--<span class="cart-items">(3 items)</span>--></h1>
                            
                        <form name="cart" id="cart" action="<?php echo $this->config->item('base_url');?>cart/updateproduct" method="post">
                        
                        	<div class="cart-wrapper">
                            	<div class="cart-table">
                            		<div class="cart-row headings" style="background-color:#ccc;">
                                    	<div class="cart-column"><strong>PRODUCT</strong></div>
										<div class="cart-column"><strong>PRICE</strong></div>
										<div class="cart-column"><strong>QUANTITY</strong></div>
										<div class="cart-column"><strong>TOTAL</strong></div>
										<div class="cart-column"><strong>ACTION</strong></div>
									</div>
                            		<!--cart-row ends-->
                                      <?php 
									if($this->cart->total_items() > 0) { 
									$i = 1;
									$cart_subtotal='';
									foreach($this->cart->contents() as $items)  
									{
										$proditem =  $this->cart_model->productdetails($items['id']);
									 
									?>  
									<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
                                  <div class="cart-row">
                                    	<div class="cart-column">
                                       	  <div class="cart-pro-label-value-wrap"> 
                                                <div class="cart-pro-label">
                                                    Product                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                 <div class="cart-pro-value pro-name">
                                                      <a href="<?php echo $base_url;?>home/details/<?php echo $proditem->id; ?>"><?php echo $items['name']; ?></a>                                         
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
											   
											     <?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span>   <?php } else { ?>   <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													 <?php  echo ($this->session->userdata('currencyvalue') * $items['price']); ?>   
				  
                                                                                           
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
                                                 <div class="cart-pro-value">
                                                     	<input type="text" class="text-field" name="<?php echo $i; ?>[qty]" value="<?php echo $items['qty']; ?>">                                 
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
                                                       <?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span>   <?php } else { ?>   <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													 <?php  echo ($this->session->userdata('currencyvalue') * $items['subtotal']); ?>   

														                               
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->  
                                            
                                            
                                                                                 
                                         </div>
                                         <!--col 5 ends-->
                                         
                                          <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Unit                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
                                                        <a onClick="removeproduct('<?php echo $items['rowid'];?>');" ><img src="<?php echo $base_url_views; ?>assets/images/x-img.png" border="0"></a>                                                </div>
                                           </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div>
                                         
                                         <div class="goto-update-cart">
                                         	<a href="#update-cart-continue-row">Go to update cart &rarr;</a>
                                         </div>
                                         
                                  </div>
                            		 
                                   <?php $cart_subtotal = $cart_subtotal + $items['subtotal']; $i++; } ?> 
                           		</div>
                                <!--cart table ends-->        
                                
                                
                            </div>
                            <!--cart-wrapper ends-->
                            
                            <!--ul id="accordion" class="accordion">
                                  <li>
                                    <div class="link"><i class="fa fa-database"></i>Review Full Summary<i class="fa fa-chevron-down"></i></div>
                                     
                                  </li>                                                                    
                                </ul--> 
                            
                            <div class="update-cart-continue-wrap">
                            
                            
                                <ul class="update-cart-continue-row" id="update-cart-continue-row">
									<li>
									<!--input type="button" class="button" value="Remove Checked Items" onClick="removeproduct('<?php echo $items['rowid'];?>');">
                                    </li>
                                    <li><input type="submit" class="button" value="Update Cart">
                                    </li-->
                                
                                
                                </ul>
                                <!--update-cart-continue-row ends-->
                            
                            </div>
                            <!--update-cart-continue-wrap ends-->
                            
                            </form>
                            
                            <div class="cart-calculation">
                            	<div class="cart-calculation-container">
                                
                                <div class="cart-calculation-row">
								<script language="javascript">
function removecoupon(){ 
var t = confirm('Are you sure you want to remove coupons');
if(t){
 jQuery.ajax(
 {
	 type: 'POST',
	 url: '<?php echo $base_url; ?>cart/removecheck',
	 data: "coupon=c",
	 success: function(result)
		{
			window.location.reload();
		    
		}
  });
} else {
return false;
}
}

function applygiftwrap(val){ 
var t = confirm('Are you sure you want to Add Gift Wrap');
if(t){
   

if(jQuery("#giftwrap").is(':checked')){
   val = '1';    
} else {
   val = '0';
}
 
jQuery.ajax(
 {
 	 type: 'POST',
	  url: '<?php echo $base_url; ?>cart/giftwrap',
	 data: "giftval="+val,
	 success: function(result)
		{

			window.location.reload();
		    
		}
  });
} else {
return false;
}
}
                                                                           


function couponcode() 
{
	if (jQuery("#coupon").val() == '')
	{
		alert("Please Enter Coupon");
	}
	else
	{	
		 jQuery.ajax(
		 {
			 type: 'POST',
			 url: '<?php echo $base_url; ?>cart/couponcheck',
			 data: "coupon="+jQuery("#coupon").val(),
			 success: function(result)
				{

				   if(result == '0')
					 {
						 alert('Invalid Coupon Code');
						 return false;
					 } else {
					window.location.reload();
					 }
				}
		});
	}
} 
</script>
                                    	 <div class="cart-calculation-col">
												  <div class="text-field-wrap">
														<input type="text" class="text-field" placeholder="Enter Discount Code" title="Enter Discount Code" name="coupon" id="coupon" >
												  </div>
											 </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
												  <input name="button" type="button" class="redeem-button" value="Redeem Discount" onClick="couponcode();">
											  </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                
                                
                                
                                
                                	<div class="cart-calculation-row">
                                    	<div class="cart-calculation-col labels">
                                        	Subtotal
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
										<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span>   <?php } else { ?>   <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													 <?php  echo ($this->session->userdata('currencyvalue') * number_format($cart_subtotal,2)); ?>  
                                       
                                        
                                        
                                        </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <!--div class="cart-calculation-row">
                                    	<div class="cart-calculation-col labels">
                                        	Discount
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <!--div class="cart-calculation-col">
                                        	<span class="WebRupee">Rs </span> 44
                                        
                                        
                                        </div-->
                                        <!--cart-calculation-col-->
                                
                                	<!--/div-->
                                    <!--cart-calculation-row ends-->
                                    
                                     <?php  $shipping = '0'; 
											if($cart_subtotal < 500) {
													$shipping = '50';
											}
										 ?>
										<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Shipping
											
											</div>
											<!--cart-calculation-col labels ends-->
											
											<div class="cart-calculation-col">
											<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span> 
													 <?php } else { ?>  
													 <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													 <?php  echo ($this->session->userdata('currencyvalue') *  number_format($shipping,'2','.','')); ?>  
												 
											
											
											</div>
											<!--cart-calculation-col-->
									
										</div>
										<?php  $discount = '0'; ?>
                                        <?php if($this->session->userdata('couponcode') != '') { ?>
										 <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Coupon Discount
											</div>
											<div class="cart-calculation-col">
												
											 
													<?php if($this->session->userdata('couponcode')=='1'){ ?>
													
												 
												
													<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span> 
													 <?php } else { ?>  
													 <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													   <?php } ?>
												
												<?php echo $this->session->userdata('couponprice'); ?> 
												<?php if($this->session->userdata('couponcode')=='0'){
												echo "%";
												}
												?>
												( <a title="Remove Coupon" onclick="removecoupon();">X</a> )
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

																 if($this->session->userdata('couponcode')=="1"){
																	$discount = $this->session->userdata('couponprice');
																	$total = $cart_subtotal + $shipping - $discount; 
																} else {
																	$discount = $this->session->userdata('couponprice');
																	$total = $cart_subtotal + $shipping ; 
																	$total=$total - $total*$discount/100;
																	//echo $total;die();	
																}
										 ?>
													<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span> 
													 <?php } else { ?>  
													 <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													 <?php  echo ($this->session->userdata('currencyvalue') *  number_format($total,2)); ?>  
										 
											<?php $this->session->set_userdata('total_amount',$total); ?>
											
											
											</div>
											  
                                        
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row buttons">
                                    	<a href="<?php echo $base_url; ?>home/category">CONTINUE SHOPPING</a>                              
                                    
                                    </div>
                                    <!--checkout button  row ends-->
                                    
                                    <div class="cart-calculation-row buttons">
                                    	<a href="javascript:void('0');" class="checkout" onClick="checkout();">Checkout</a>                       
                                    
                                    </div>
                                    <!--checkout button  row ends-->
                                    
                                    
                                </div>
                            	<!--cart-calculation-container ends-->
                                
                                <div class="about-cart">
                                	<h4>About the Cart</h4>
                                    <ul>
                                    	
                                        <li>Items in your shopping bag always reflect the most recent price displayed on their product pages.</li>
                                        <li>Shipping rates to be calculated at checkout</li>
                                
                                	</ul>
                                </div>
                            	<!--about-cart ends-->
                            
                            </div>
                          	<!--cart-calculation ends-->  
                            
                            
                      </div>
					  <?php }  else { ?> 
				<p style="width:200px;">There is no product in your cart.</p>
<?php  } ?> 
      
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


     <?php include ('includes/footer.php'); ?>
 
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->