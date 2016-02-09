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
										<div class="cart-column"><strong>Edit Msr.</strong></div>
									</div>
                            		<!--cart-row ends-->
									<link rel="stylesheet" href="<?php echo $base_url_views?>css/new1.css">
									<script src="<?php echo $base_url_views?>js/new2.js"></script>
									<script src="<?php echo $base_url_views?>js/new3.js"></script>
                                      <?php 
									if($this->cart->total_items() > 0) { 
									$i = 1;
									$cart_subtotal='';
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
																		echo roundUpToAny(( $newtotal / ( $this->session->userdata('currencyvalue') * 0.9) )); 
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
                                          <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                                                    
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
                                                     <a href="<?php echo $base_url;?>cart/mapping/<?php echo $items['options']['prodid']; ?>/<?php echo $items['options']['newmid']; ?>">Edit</a>                                             </div>
                                           </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div>
                                         
                                         <div class="goto-update-cart">
                                         	<a href="#update-cart-continue-row">Go to update cart &rarr;</a>
                                         </div>
                                         
                                  </div>
								  <?php if($items['options']['is_3d'] != '2') {  ?>
                            		   <a type="" href="#" class="" data-toggle="collapse" data-target="#demo<?php echo $items['rowid'];?>">REVIEW FULL SUMMARY</a><br>
								  <?php } ?>
                                   <?php $cart_subtotal = $cart_subtotal + $items['price']; $i++; } ?> 
								 
                           		</div>
                                <!--cart table ends-->        
                                
                                
                            </div>
                            <!--cart-wrapper ends-->
							
								   <?php 
									if($this->cart->total_items() > 0) { 
									$i = 1;
									//$cart_subtotal='';
									foreach($this->cart->contents() as $items)  
									{

								 if($items['options']['is_3d'] == '0') { 

										$proditem =  $this->cart_model->productdetails($items['id']);
										$mdetail =  $this->cart_model->measurementdetail($items['options']['newmid']);
										
									 
									?>  
								<ul class="submenu" id="demo<?php echo $items['rowid'];?>">
                                      <li>
                                      <table width="50%" border="1">
								
                                          <tr>
                                            <td height="20" align="left" valign="middle"><strong><?php echo $items['name']; ?></strong></td>
                                          </tr>
                                      
                                          <tr>
                                            <td width="30" height="30" align="left" valign="middle"><strong>Height :</strong>  </td>
											<td width="20" height="30" align="left" valign="middle"><?php echo $mdetail->metricft; ?> feet <?php echo $mdetail->metricinch; ?> Inches </td>
                                          </tr>
                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong>Weight :</strong><?php echo $mdetail->metricweight; ?> IN</td>
                                          </tr>
                                          <!-- tr>
                                            <td height="30" align="left" valign="middle"><strong>metricinch :</strong><?php echo $mdetail->metricinch; ?> IN</td>
                                          </tr>
                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong>impheight :</strong>  <?php echo $mdetail->impheight; ?></td>
                                          </tr>                                          
                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong>impweight :</strong> 	 <?php echo $mdetail->impweight; ?></td>
                                          </tr -->

                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong>Posture :</strong><?php 
												$post=$mdetail->posture; 
												if($post == "1") { echo "Average"; }
												if($post == "2") { echo "Forward Learning"; }
												if($post == "3") { echo "Straight"; }
											?></td>
                                          </tr>
										  <tr>
                                            <td height="30" align="left" valign="middle"><strong>Shoulder Type :</strong><?php echo ucfirst($mdetail->shouldertype);  ?></td>
                                          </tr>
										  <tr>
                                            <td height="30" align="left" valign="middle"><strong>Shoulder Angle :</strong><?php echo ucfirst($mdetail->shoulderangle);  ?></td>
                                          </tr>
                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong>fit :</strong> <?php 
												$post = $mdetail->fit; 
												if($post == "1") { echo "Regular"; }
												if($post == "2") { echo "Tailored"; }
												if($post == "3") { echo "Slim"; }	
												 ?>
											</td>
                                          </tr>
                                          <tr>
                                            <td height="30" align="left" valign="middle"><strong><?php if($mdetail->type == '1') { echo "Standard Sizes"; } ?>
											<?php if($mdetail->type == '2') { echo "Shirt Measurement"; } ?>
											<?php if($mdetail->type == '3') { echo "Body Measurement"; } ?></strong> <?php
											//$this->load->account_model();
											$uns = unserialize($mdetail->serializedata);
											if($uns != '') {
												$array1 = explode(',', $uns[0]);
												$array2 = explode(',', $uns[1]);  
												for($k='0';$k<count($array1);$k++){
													 echo $this->account_model->bodypartname($array1[$k])." - ".$array2[$k]." <br/>";  
												}
												} else {
													
													echo "Not available";
												}
											?>
											</td>
                                          </tr>
                                           
                                        </table>

                                      </li>
                                    </ul>
                            <?php  } else { ?>
									<ul class="submenu" id="demo<?php echo $items['rowid'];?>">
                                      <li>
                                      <table width="50%" border="1">
										<?php $arr3d = json_decode($items['options']['details']); 
									 // print_r($arr3d);die;
									  
									  ?>
										    <tr>
                                            <td height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            <td height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td></tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr>
											<?php } ?>

 											<tr><td height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td></tr>
 											<tr> <td height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td></tr>
										
											<tr><td height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr><td height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
											
											<!-- tr> <td height="20" align="left" valign="middle"><strong>pocket_right</strong></td> <td><?php echo $arr3d->pocket_right; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>pocket_fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr-->
											<!-- tr>  <td height="20" align="left" valign="middle"><strong>Fit</strong></td> <td><?php echo $arr3d->fit; ?></td></tr -->
                                            <!-- tr> <td height="20" align="left" valign="middle"><strong>monogram</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>monogram_text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>monogram_location</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>monogram_color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>base_fabric</strong></td> <td><?php echo $arr3d->base_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>inner_buttons_fabric</strong></td> <td><?php echo $arr3d->inner_buttons_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>collar_fabric</strong></td> <td><?php echo $arr3d->collar_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>inner_collar_fabric</strong></td> <td><?php echo $arr3d->inner_collar_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>cuffs_fabric</strong></td> <td><?php echo $arr3d->cuffs_fabric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>inner_cuffs_fabric</strong></td> <td><?php echo $arr3d->inner_cuffs_fabric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>cleric</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>resolution</strong></td> <td><?php echo $arr3d->resolution; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>position</strong></td> <td><?php echo $arr3d->position; ?></td></tr-->
                                          </tr>
                                        
                                        </table>

                                      </li>
                                    </ul>
							
							<?php } }    }  ?> 
                            
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


function removewallet(){ 
var t = confirm('Are you sure you want to remove wallet amount.?');
if(t){
 jQuery.ajax(
 {
	 type: 'POST',
	 url: '<?php echo $base_url; ?>cart/removewallet',
	 data: "wallet=c",
	 success: function(result)
		{
			
			document.getElementById("walletamount").checked = false;
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
 		$("#errorcart").html('Please Enter Coupon');
		return false;
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
						 //alert('Invalid Coupon Code');
						 $("#errorcart").html('Invalid Coupon Code');
						 return false;
					 } else {
					window.location.reload();
					 }
				}
		});
	}
} 



function vouchercode() 
{
	if (jQuery("#voucher").val() == '')
	{
		alert("Please Enter Gift Voucher Code.");
	}
	else
	{	
		 jQuery.ajax(
		 {
			 type: 'POST',
			 url: '<?php echo $base_url; ?>cart/vouchercheck',
			 data: "voucher="+jQuery("#voucher").val(),
			 success: function(result)
				{

				   if(result == '0')
					 {
						 alert('Invalid Gift Voucher Code.');
						 return false;
					 } else {
					window.location.reload();
					 }
				}
		});
	}
} 

function walletcode(myval) 
{
 
	 
		if(myval != '') {
			 
		 jQuery.ajax(
		 {
			 
			 url: '<?php echo $base_url; ?>cart/mywallet',
			  
			 success: function(result)
				{
					window.location.reload();
					 
				}
		});
		
		
		}  
	 
}
function removevoucher(){ 
var t = confirm('Are you sure you want to remove gift voucher.');
if(t){
 jQuery.ajax(
 {
	 type: 'POST',
	 url: '<?php echo $base_url; ?>cart/removecheckvoucher',
	 data: "voucher=c",
	 success: function(result)
		{
			window.location.reload();
		    
		}
  });
} else {
return false;
}
}
</script>
										<p id="errorcart" style="color:red;"></p>
                                    	 <div class="cart-calculation-col">
												  <div class="text-field-wrap">
														<input type="text" class="text-field" placeholder="Enter Discount Code" title="Enter Discount Code" name="coupon" id="coupon" >
												  </div>
											 </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
												  <input name="button" type="button" class="redeem-button" value="Redeem Discount" onClick="couponcode();">
											  </div>
											  
											 
                                       
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                 <div class="cart-calculation-row">
											<div class="cart-calculation-col">
												  <div class="text-field-wrap">
														<input type="text" class="text-field" placeholder="Enter Gift Voucher Code" title="Enter Gift Voucher Code" name="voucher" id="voucher" >
												  </div>
											 </div>
                                        <!--cart-calculation-col labels ends-->
                                        
												<div class="cart-calculation-col">
													<input name="button" type="button" class="redeem-button" value="Redeem Discount" onClick="vouchercode();">
												</div>
                                
                                </div>
								<?php if($this->session->userdata('mywalletdata') !="" && $this->session->userdata('mywalletdata')>0){ ?>
								 <div class="cart-calculation-row">
											<div class="cart-calculation-col">
												  <div class="" style="">
														Pay From Wallet : 
												  </div>
											 </div>
                                        <!--cart-calculation-col labels ends-->
                                        
												<div class="">
													<input type="checkbox" <?php if($this->session->userdata('mywalletdata') !="" && $this->session->userdata('mywalletdata')>0){  ?>checked disabled <?php }  ?> name="walletamount" value="1" id="walletamount" onClick="walletcode(this.value);">
												 
												</div>
                                
                                </div>
								<?php } ?>
								
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
                                    
                                     <?php /* $shipping = '0'; 
											if($cart_subtotal < 500) {
													$shipping = '50';
											} 
										<div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Shipping
											
											</div>
											<!--cart-calculation-col labels ends-->
											
											<div class="cart-calculation-col">
													<?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $shipping;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $shipping / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>
												 
											
											
											</div>
											
											<!--cart-calculation-col-->
									
										</div>
										*/
										 ?>
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
										
										
										 <?php if($this->session->userdata('mywalletdata') != '' && $this->session->userdata('mywalletdata')>0) { ?>
										 <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Wallet Amount
											</div>
											<div class="cart-calculation-col">
													<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span> 
													 <?php } else { ?>  
													 <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); ?></span>  
													   <?php } ?>
												
												<?php echo $this->session->userdata('mywalletdata'); ?> 
												 
												 
												( <a title="Remove Wallet Amount" onclick="removewallet();">X</a> )
											</div>
										</div> 
										<?php } ?>
										
                                    <!--cart-calculation-row ends-->
                                  
								  <?php if($this->session->userdata('vouchercode') != '') { ?>
										 <div class="cart-calculation-row">
											<div class="cart-calculation-col labels">
												Voucher Discount
											</div>
											<div class="cart-calculation-col">
												
													<?php if($this->session->userdata('currencycode') == 'INR') { ?>
													 <span class="WebRupee">Rs</span> 
													 <?php } else { ?>  
													 <span class="WebRupee"> <?php echo $this->session->userdata('currencycode'); } ?></span>  
													  
												
												<?php echo $this->session->userdata('voucherprice'); ?> 
												 
												 
												( <a title="Remove Coupon" onclick="removevoucher();">X</a> )
											</div>
										</div> 
										<?php } ?>
										
                                    <div class="cart-calculation-row total">
                                    	<div class="cart-calculation-col labels">
                                        	Total
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
										
										<div class="cart-calculation-col">
											
											 <?php 

																 if($this->session->userdata('couponcode')=="1"){
																	$discount = $this->session->userdata('couponprice');
																	$voucherprice = $this->session->userdata('voucherprice');
																	$total = $cart_subtotal - $voucherprice - $discount; 
																	if($this->session->userdata('mywalletdata')!=""){
																	$total =	$total - $this->session->userdata('mywalletdata');
																	}
																} else {
																	$discount = $this->session->userdata('couponprice');
																	$voucherprice = $this->session->userdata('voucherprice');
																	$total = $cart_subtotal ; 
																	$total=$total - $total*$discount/100 - $voucherprice;
																	if($this->session->userdata('mywalletdata')!=""){
																	$total =	$total - $this->session->userdata('mywalletdata');
																	}	
																}
										 ?>
													<?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $total;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		echo roundUpToAny(( $total / ( $this->session->userdata('currencyvalue') * 0.9) )); 
																} ?>	 
										 
											<?php $this->session->set_userdata('total_amount',$total); ?>
											
											
											</div>
											  
                                        
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row buttons">
                                    	<a href="<?php echo $base_url; ?>">CONTINUE SHOPPING</a>                              
                                    
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
 </main>

     <?php include ('includes/footer.php'); ?>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->