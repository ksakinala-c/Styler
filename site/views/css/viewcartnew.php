<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- script type="text/javascript">
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
</script -->
<script language="javascript">
	function removeproduct(id,pid)
	{
		var t = confirm('Are you sure you want to remove product from cart?');
		if(t)
				{
					window.location.href= '<?php echo $base_url;?>cart/removeproduct/'+id+'/'+pid;
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
/*.submenu {
  display: none;
  border:#666666 solid 1px;
  padding:10px 20px;
  font-size: 14px;
}*/

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
.cart-calculation-col:first-child {
	margin-right:0 !important;
}
hr {
	border-color: #333 -moz-use-text-color -moz-use-text-color !important;
    border-style: dashed none none !important;
    border-width: 1px 0 0 !important;
    margin: 5px 0 !important;
}
@media only screen and (max-width:768px){
	.review-summary-responsive {width:100% !important;}
}
@media only screen and (min-width:769px){
	.review-summary-responsive {width:50% !important;}
}
.modal-dialog {
    margin: 175px auto 30px !important;
    width: 662px !important;
}

.cart-calculation-col {
    float: left;
    text-align: left;
    width: 48%;
}
.cart-calculation-col .redeem-button {
    font-size:20px;
    margin: 0 60px;    
    width: 30%;
}
.cart-calculation-col .text-field-wrap {    
    margin: 0 30px;
    width: 40%;
}
.cart-calculation-row.buttons {		
    
    float: left;
    padding-right: 10px;
}
.cart-calculation-row.buttons a {
    background: #c0c0c0 none repeat scroll 0 0;    
    height: 40px;	
    padding: 10px;
	font-size:14px;
	font-weight:900px;
    text-align: center;
	width:200px;	
}	
.cart-calculation-row.buttons a.checkout {
    background: #ff6500 none repeat scroll 0 0;
}	
.cart-calculation-row-amnt
{
	padding:10px 30px;
	background:#c0c0c0;
	height:40px;
	margin:10px;	
}
.cart-calculation-col-amount {
    float: right;
    text-align: right;
    width: 40%;
}
.cart-page-title
{
	background:#333333;	
	border-radius:3px 3px 0px 0px;
	padding:0.6% 1% 0.6% 1%;
	margin:3% 0 0 2%;
	color:#ffffff;
	
}
.cart-cal-label
{
	display:inline;
}
.cart-column
{
	font-size:14px;
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
	  <?php //echo "<pre>";print_r($this->cart->_cart_contents); die;?>
							
                      		<div class="cart-page-title" style="float:left">CART (<?php echo $this->cart->total_items(); ?>) <!--<span class="cart-items">(3 items)</span>--></div>
                            
                        <form name="cart" id="cart" action="<?php echo $this->config->item('base_url');?>cart/updateproduct" method="post">
                        
                        	<div class="cart-wrapper">
                            	<div class="cart-table">
                            		<div class="cart-row headings" style="background-color:#EDEDED;">
                                    	<div class="cart-column">ITEM</div>
										<div class="cart-column">QUANTITY</div>
										<div class="cart-column">PRICE</div>
										<div class="cart-column">DELIVERY DETAILS</div>
										<div class="cart-column">SUBTOTAL</div>										
										<div class="cart-column">Edit Measurement</div>
									</div>
                            		<!--cart-row ends-->
									<link rel="stylesheet" href="<?php echo $base_url_views?>css/new1.css">
									<script src="<?php echo $base_url_views?>js/new2.js"></script>
									<script src="<?php echo $base_url_views?>js/new3.js"></script>
                                      <?php 
									if($this->cart->total_items() > 0) { 
									$i = 1;
									$cart_subtotal=''; $displayprice1 = '0';
									$emptymeasurement = '1';

									foreach($this->cart->contents() as $items)  
									{
									
										$proditem =  $this->cart_model->productdetails($items['id']);
					
									?>  
									<input type="hidden" name="<?php echo $i?>[rowid]" id="<?php echo $i?>[rowid]" value="<?php echo $items['rowid'];?>" />
                                        <div class="cart-row">
                                    	<div class="cart-column">
										 		 
                                       	  <div class="cart-pro-label-value-wrap"> 
                                                <div class="cart-pro-label">
                                                    ITEM                                            
                                                </div>
 												 <?php if($items['options']['is_3d'] != '2') {  
												if($items['options']['is_3d'] == '0') { ?>	  
												<div class="cart-pro-value pro-name">
                                                          <a href="<?php echo $base_url;?>home/details/<?php echo $proditem->id; ?>/<?php echo $items['options']['prodid']; ?>"><img src="<?php echo $http_host;?>/upload/allstyle/small/<?php echo $proditem->image; ?>" width="80" height="60"></a>
														  <a href="<?php echo $base_url;?>home/details/<?php echo $proditem->id; ?>/<?php echo $items['options']['prodid']; ?>"><?php echo $items['name']; ?></a>
 												</div>
												<?php } else { ?> 
												<div class="cart-pro-value pro-name">
                                                          <a href="javascript:void(0);"><img src="<?php echo $http_host;?>/upload/saveprofile/<?php echo $items['options']['imagename']; ?>" width="80" height="60"></a>
														  <a href="javascript:void(0);"><?php echo $items['name']; ?></a>
 												</div>
												
												<?php } } else { ?> 
													<div class="cart-pro-value pro-name">
                                                          <a href="javascript:void(0);"><?php echo $items['name']." - ".$items['options']['email']; ?></a>
 													</div>
												<?php } ?>
                                                <!--"cart-pro-label ends-->
                                          </div>
                                            <!--cart-pro-label-value-wrap ends-->
                                        </div>
										
										
                                        <!--col1 ends-->
										
                                        
                                         <!--col 2 ends-->
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
																		 
																		echo roundUpToAny(( $items['price'] / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100) ) ));
																} ?>													 
				  
                                                                                           
                                                </div>
                                            </div>
                                            <!--cart-pro-label-value-wrap ends-->                                 
                                         </div>
                                         <!--col 3 ends-->
										 
										 <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Unit                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
													
													<div class="cart-pro-value">
													<?php 
													//echo date("Y-m-d");
														$date = new DateTime(date("Y-m-d"));
														$date->modify('+10 day');
														$tomorrowDATE = $date->format('d M Y');
													?>
                                                        <span style="color:green">FREE</span><br>     standard delivery by <?php echo $tomorrowDATE; ?>                  </div>
														
                                                <!---<div class="cart-pro-value">
                                                        <a onClick="removeproduct('<?php echo $items['rowid'];?>', '<?php echo $items['id'];?>' );" ><img src="<?php echo $base_url_views; ?>assets/images/x-img.png" border="0"></a>                                                </div>--->


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
                                         
                                         <?php /* <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                    Unit                                            
                                                </div>
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value">
                                                        <a onClick="removeproduct('<?php echo $items['rowid'];?>', '<?php echo $items['id'];?>' );" ><img src="<?php echo $base_url_views; ?>assets/images/x-img.png" border="0"></a>                                                </div>


                                           </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div>
										 */ ?>
                                          <div class="cart-column unit">
                                        	<div class="cart-pro-label-value-wrap"> 
                                                    
                                                                                 
                                                <div class="cart-pro-label">
                                                     <?php if($items['options']['newmid'] == '') {
															$emptymeasurement = '0';
													 }?>                               
                                                </div>												
                                                    <!--"cart-pro-label ends-->
                                                <div class="cart-pro-value" style="width:100px;float:right;">
                                                       <?php if($items['options']['newmid'] == '') { 
													    $cartDetails =  $this->cart_model->getcartDetails($items['id']);													  
													   ?> 
													   
													   
													   
													   
													   <a href="<?php echo $base_url;?>cart/custommesurements/saved3d/<?php echo $items['options']['saveid']; ?>/<?php echo $cartDetails->id; ?>/">Add Your Measurement</a> <?php } else { ?> 
													  
													   <?php echo $getprofilename =  $this->cart_model->getprofilename($items['options']['newmid']); ?><br/>
													   <!---<a style="float:right;width:100px;" href="<?php echo $base_url;?>cart/mapping/<?php echo $items['id']; ?>/<?php echo $items['options']['newmid']; ?>"> Edit </a>--->
													   <?php } ?> 
												 </div>
                                               </div>
                                            <!--cart-pro-label-value-wrap ends-->                                   
                                         </div>
                                         
                                         <div class="goto-update-cart">
                                         	<a href="#update-cart-continue-row">Go to update cart &rarr;</a>
                                         </div>
                                         
                                  </div>
								  <div>FIT GUARANTEE <span title="help">?</span></div>
								  <a style="float:right;width:100px;" onClick="removeproduct('<?php echo $items['rowid'];?>', '<?php echo $items['id'];?>' );" >REMOVE</a>									   
								  <?php if($items['options']['is_3d'] != '2') {  ?>
                            		   <a type="" href="javascript:void(0)" class="" data-toggle="collapse" data-target="#demo<?php echo $items['rowid'];?>">REVIEW SUMMARY    </a> 
<?php if($items['options']['newmid'] != '') { ?>									   
									   <a href="<?php echo $base_url;?>cart/mapping/<?php echo $items['id']; ?>/<?php echo $items['options']['newmid']; ?>"> Edit </a>
<?php } ?>										
								  <?php } ?>
                                   <?php //$cart_subtotal = $cart_subtotal + $items['price']; 
										$i++;
										$cart_subtotal = $displayprice + $cart_subtotal;
								  } ?> 
								 
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
<div id="demo<?php echo $items['rowid'];?>" class="modal fade close-model-cls" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-target="demo<?php echo $items['rowid'];?>" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $items['name']; ?></h4>
      </div>
      <div class="modal-body">									
								
                                      <table class="review-summary-responsive table-bordered table-bordred" border="1">
                                          <tr>
                                            <td colspan="2" height="40" align="left" valign="middle"><strong>&nbsp;<?php echo $items['name']; ?></strong></td>
                                          </tr>
                                          <!--tr>
                                          	<td colspan="2">
                                                <hr />
                                            </td>
                                          </tr-->
                                          <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" width="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">Height</strong></td>
											<td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center">
												<?php echo $mdetail->metricft; ?> feet <?php echo $mdetail->metricinch; ?> Inches
                                            </td>
                                          </tr>
                                          <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" height="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">Weight</strong></td>
                                            <td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center"><?php echo $mdetail->metricweight; ?> IN</td>
                                          </tr>
                                          <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" height="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">Posture</strong></td>
                                            <td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center">
											<?php 
												$post=$mdetail->posture; 
												if($post == "1") { echo "Average"; }
												if($post == "2") { echo "Forward Learning"; }
												if($post == "3") { echo "Straight"; }
											?>
                                            </td>
                                          </tr>
										  <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" height="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">Shoulder Type</strong></td>
											<td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center"><?php echo ucfirst($mdetail->shouldertype);  ?></td>
                                          </tr>
										  <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" height="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">Shoulder Angle</strong></td>
											<td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center">
											<?php echo ucfirst($mdetail->shoulderangle);  ?>
                                            </td>
                                          </tr>
                                          <tr style="border-bottom:1px dotted #ccc;">
                                            <td bgcolor="#333333" height="50%" height="40" valign="middle" align="center"><strong style="color:#fff;">fit</strong></td>
											<td bgcolor="#f1f1f1" width="50%" height="40" valign="middle" align="center">
                                            	<?php 
												$post = $mdetail->fit; 
												if($post == "1") { echo "Regular"; }
												if($post == "2") { echo "Tailored"; }
												if($post == "3") { echo "Slim"; }	
												 ?>
											</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" height="40" align="left" valign="middle"><strong>&nbsp;
											 

											<?php if($mdetail->type == '1') { echo "Standard Sizes"; } ?>
											<?php if($mdetail->type == '2') { echo "Shirt Measurement"; } ?>
											<?php if($mdetail->type == '3') { echo "Body Measurement"; } ?>
											<?php if($mdetail->type == '4') { echo "Brand Sizes"; } ?>
											</strong>  
											<?php 
										if($mdetail->type == '4') { ?>
												Brand - <?php echo $this->home_model->mbrandname($mdetail->brandid); ?><br />	
												Fit - <?php echo $this->home_model->mfitname($mdetail->fitid); ?><br />	
												Size - <?php echo $this->home_model->msizename($mdetail->sizeid); ?><br />	
										<?php } else {

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
										}
											?>
											</td>
                                          </tr>  
                                        </table>
                                     
                                   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close" data-target="demo<?php echo $items['rowid'];?>" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
                            <?php  } else { ?>
							
							<?php $arr3d = json_decode($items['options']['details']); 
									 // print_r($arr3d);die;
									  
									  ?>
									<div id="demo<?php echo $items['rowid'];?>" class="modal fade close-model-cls" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-target="demo<?php echo $items['rowid'];?>" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $this->cart_model->fabricname($arr3d->base_fabric); ?></h4>
      </div>
      <div class="modal-body">
	  
									
                                      <table class="table table-bordred table-striped" width="50%" border="1">
										
										    <tr>
                                            <td height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            	<td height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td>
                                            </tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td>
                                            </tr>
											<?php } ?>

 											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td>
                                            </tr>
 											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td>
                                            </tr>
                                            <tr>
                                            	<td height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td>
                                            </tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->collar_fabric); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->cuffs_fabric); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_buttons_fabric); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_collar_fabric); ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_cuffs_fabric); ?></td>
                                            </tr>

											<?php } ?> 

											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Placket</strong></td> <td><?php echo $arr3d->placket; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo $arr3d->hem; ?></td>
                                            </tr>
											<tr>
                                            	<td height="20" align="left" valign="middle"><strong>Back Style</strong></td> <td><?php echo $arr3d->pleat; ?></td>
                                            </tr>
                                          </tr>
                                        </table>
                                      
							</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close" data-target="demo<?php echo $items['rowid'];?>" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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
		alert("Please Enter Dicount Code.");
	}
	else
	{	
		 jQuery.ajax(
		 {
			 type: 'POST',
			 url: '<?php echo $base_url; ?>cart/voucherchecknew',
			 data: "voucher="+jQuery("#voucher").val(),
			 success: function(result)
				{

				   if(result == '0'){ //Invalid						 
						 $("#errorcart").html('Invalid Discount code.');
						 return false;
					 }else if(result == '1'){//free one time used
						  $("#errorcart").html('Your Discount code is Alread Used.');						 
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

$('.close').on('click',function(){
  trCls=$(this).attr('data-target');
  $('#'+trCls).removeClass("collapse");
  $('#'+trCls).removeClass("in");
 
});
</script>
										<p id="errorcart" style="color:red;"></p>
                                    	<!--- <div class="cart-calculation-col">
												  <div class="text-field-wrap">
														<input type="text" class="text-field" placeholder="Enter Discount Code" title="Enter Discount Code" name="coupon" id="coupon" >
												  </div>
											 </div>--->
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <!---<div class="cart-calculation-col">
												  <input name="button" type="button" class="redeem-button" value="Redeem Discount" onClick="couponcode();">
											  </div>--->
                                 
                                	</div>
                                    <!--cart-calculation-row ends-->
                                 
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
 																		echo $cart_subtotal;
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
																		echo roundUpToAny(( $shipping * ( $this->session->userdata('currencyvalue')) )); 
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
										
                                    
                                    
                                    
                                </div>
                            	<!--cart-calculation-container ends-->
                                
                                <?php /* ?> <div class="about-cart">
                                	<h4>About the Cart</h4>
                                    <ul>
                                    	
                                        <li>Items in your shopping bag always reflect the most recent price displayed on their product pages.</li>
                                        <li>Shipping rates to be calculated at checkout</li>
                                
                                	</ul>
                                </div>
								<?php */ ?>
                            	<!--about-cart ends-->
                            
                            </div>
                          	<!--cart-calculation ends-->  
                            <div class="cart-calculation-row discount-col-cls">
									
									<div class="cart-calculation-row-amnt">
									<div class="cart-calculation-col" style="float:left"><h3 class="cart-cal-label">Have a Discount Code ?</h3></div>
                                    	<!--<div class="cart-calculation-col labels">
                                        	Amount Payable
                                        
                                        </div>-->
                                        <!--cart-calculation-col labels ends-->
                                        
										
										<div class="cart-calculation-col-amount" style="float:right;"><h3 class="cart-cal-label">Amount Payable: </h3>
											
											 <?php 

																 if($this->session->userdata('couponcode')=="1"){
																	$discount = $this->session->userdata('couponprice');
																	$voucherprice = $this->session->userdata('voucherprice');
																	$total = $cart_subtotal - $voucherprice - $discount; 
																	if($total<0){
																		$total=0;
																	}
																	if($this->session->userdata('mywalletdata')!=""){
																	$total =	$total - $this->session->userdata('mywalletdata');
																	}
																} else {
																	$discount = $this->session->userdata('couponprice');
																	$voucherprice = $this->session->userdata('voucherprice');
																	$total = $cart_subtotal ; 
																	$total = $total - $total*$discount/100 - $voucherprice;
																	if($total<0){
																		$total=0;
																	}
																	if($this->session->userdata('mywalletdata') != ""){
																	$total =	$total - $this->session->userdata('mywalletdata');
																	}	
																}
										 ?>
													<?php
																if($this->session->userdata('currencycode') == 'INR')
																{ ?>
																		Rs.<?php echo $total1 = $total;?> 
																<?php } else { 
																		echo $this->session->userdata('currencycode')." "; 
																		//$total = roundUpToAny(( $total * ( $this->session->userdata('currencyvalue')) ));
																		//echo $total1 = roundUpToAny(( $total / ( $this->session->userdata('currencyvalue') * 0.9) ));

																		echo $total1 = $total;
																} ?>	 
										 
											<?php
											//echo $total;
											$this->session->set_userdata('total_amount',$total1); ?>
											
											
											</div>
											  
                                        
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                   
									
									
											<div class="cart-calculation-col " style="float:left">
												  <div class="text-field-wrap">
														<input type="text" class="text-field" placeholder="Have A Discount Code" title="Enter Discount Code" name="voucher" id="voucher" >
												  </div>
											 </div>
										
										<div class="cart-calculation-row buttons">
                                    	<a href="<?php echo $base_url; ?>3dshirt">CONTINUE SHOPPING</a>                              
                                    
                                    </div>
                                    <!--checkout button  row ends-->
                                    
                                    <div class="cart-calculation-row buttons">
                                    	<?php if($emptymeasurement == '1') { ?>
											<a href="javascript:void('0');" class="checkout" onClick="checkout();">CHECKOUT</a>                       
										<?php } else { ?>
											<a href="javascript:void('0');" class="checkout" onClick="alert('Measurement for a design is not completed, please add the measurement.');">CHECKOUT</a>  
										<?php } ?>
                                    </div>
									
                                    <!--checkout button  row ends-->
                                        <!--cart-calculation-col labels ends-->
                                        <br/><br/><br/>
												<div class="cart-calculation-col" style="float:left">
													<input name="button" type="button" class="redeem-button" value="Apply" onClick="vouchercode();">
												</div>
												<!---<br /><br /><br />
												<a style="float:right;margin-right:5%" href="<?php echo $base_url; ?>terms-conditions" target="_blank">T & C Apply</a>--->
                                
                                </div>
                                </div>
                            
                            
                            
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