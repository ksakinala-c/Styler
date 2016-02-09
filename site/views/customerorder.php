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
    
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/styles.css" media="all"/>	  	
        <!-- Main Container -->
		   <?php include("includes/dashbord_header.php"); ?>
        <div class="main-container col1-layout">
            <div class="row">
                <div class="main">
                   <div class="col-main">
                   
                   <div class="inner-page-content">
                      		<div class="item small-12" style="font-size:14px;">
                               
                                
                              
   <div class="container">
      <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
          <tr class="bg" role="row">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Order No:</th>
            <th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Name:</th>
            <th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Mobile No:</th>
             
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Address</th>
          </tr>
            
          
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">

			  
               <?php
				 
				if($shippingdetails != '' && count($shippingdetails) > 0) {  
				//print_r($shippingdetails);
    			$k = '0'; 
				?>      
          
		  <tr class="odd">
            
            <td class=" "><?php echo $shippingdetails->order_id; ?></td>
			<td class=" "><?php echo $this->session->userdata('username')?></td>
			<td class=" "><?php echo $shippingdetails->smobno; ?></td>
			 
			<td class=" "><?php echo $shippingdetails->address; ?></td>
           </tr>
		 
          
        </tbody>
		
      </table>
	  <br>
	  <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
          <tr class="bg" role="row">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Billing Address:</th>
            
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Shipping Address</th>
          </tr>
            
          
        </thead>
		 
 
		 <tr class="odd">
            
            <td class=" "><?php echo $shippingdetails->address.",".$shippingdetails->address1.",".$shippingdetails->city.",".$shippingdetails->county.",".$shippingdetails->postcode; ?></td>
		<td class=" "><?php echo $shippingdetails->saddress.",".$shippingdetails->saddress1.",".$shippingdetails->scity.",".$shippingdetails->scounty.",".$shippingdetails->spostcode; ?></td>
			
           </tr>
     
           
          
        </tbody>
		
           
      </table>
	   <a href="<?php echo $base_url; ?>account/message/<?php echo $this->uri->segment(3); ?>" style="width: auto; color:red; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">View Message</a>
	  <br>
	  <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
        <tr class="bg" role="row">
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Product Name:</th>
			
 
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Quantity</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Height:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Weight:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Posture:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Shoulder Type:</th>
				<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Shoulder Angle:</th>
		 
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Fit:</th> 
			
			 
			
		 
            
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Measurements:</th>
		 
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">price:</th>
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Return:</th>
			
			
        </tr>
         
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">
		<?php if($orderitems != '' && count($orderitems) > 0)
				{ foreach($orderitems as $orderitems) { 
				//print_r($orderdetails);
			?>
		<tr class="odd">
 			<?php if($orderitems->save3d == '1') { ?>
					<td class=" "> 
						Product Name: <?php echo $orderitems->order_item_name;?>
					</td>
			<?php } else { ?>
				<td class=" ">	Style Name: <?php echo $this->account_model->stylename($orderitems->product_id);?> <br /> 
			Product Name: <?php echo $this->account_model->fabricname($orderitems->fabricid);?>
				</td>
			<?php } ?>
 		
			</td>
			<td class=""><?php echo $orderitems->product_quantity; 
			$measurement =  $this->account_model->getmeasurement($orderitems->measureid);
			?></td>
			
			 <td><?php echo $measurement->metricft; ?> feet <?php echo $measurement->metricinch; ?> Inches  </td>
			 <td><?php echo $measurement->metricweight; ?> </td>
			 <td class=""><?php 
								$post = $measurement->posture; 
								if($post == "1") { echo "Average"; }
								if($post == "2") { echo "Forward Learning"; }
								if($post == "3") { echo "Straight"; }
							?>
			 </td>
			  <td> <?php 
									echo ucfirst($measurement->shouldertype); 
 								?> </td>
			 <td><?php 
									echo ucfirst($measurement->shoulderangle); 
								?> </td>
			 <td> <?php 
								 $post = $measurement->fit; 
								if($post == "1") { echo "Regular"; }
								if($post == "2") { echo "Tailored"; }
								if($post == "3") { echo "Slim"; }	
								?> </td>
			 <td> <?php 
						if($measurement->type == '1') { echo "Standard Sizes"; }
						if($measurement->type == '2') { echo "Shirt Measurement"; }
						if($measurement->type == '3') { echo "Body Measurement"; } ?>
						<?php if($measurement->type == '4') { echo "Brand Sizes"; } ?>
						<br/> <?php 
								if($measurement->type == '4') { ?>
										Brand - <?php echo $this->home_model->mbrandname($measurement->brandid); ?><br />	
										Fit - <?php echo $this->home_model->mfitname($measurement->fitid); ?><br />	
										Size - <?php echo $this->home_model->msizename($measurement->sizeid); ?><br />	
							    <?php } else {
 						$serdata = $measurement->serializedata;
						$uns = unserialize($serdata);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 echo $this->account_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
						}
						}
			 ?> </td>
			 <td class="">
			 <?php 
				 
			 $c = $this->home_model->currencydetails($orderdetails->order_currency);
	 $cvalue = $c->stylior_roc;
 	 $multiplier = $c->multiplier;
	 $ceiling = $c->ceiling;
			 
			 
				if($orderdetails->order_currency == 'INR')
				{ ?>
						INR <?php echo number_format($orderitems->product_item_price,'2','.','');?> 
				<?php } else { 
 						echo $orderdetails->order_currency." "; 
						echo roundUpToAny(( $orderitems->product_item_price / ( $cvalue * ($multiplier/100)) )); 
				} ?>
			</td>
			
			 
			  
			  <td class="">
					<?php if($orderdetails->order_status =='R'){?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Return Status" href="<?php echo $base_url; ?>account/editreturnproducts/<?php echo $orderitems->order_item_id; ?>"> <i class="entypo-pencil"></i>Return Status
					</a>
					<?php }else{ ?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Product Return" href="<?php echo $base_url; ?>account/returnproducts/<?php echo $orderitems->order_item_id; ?>"> <i class="">Product Return</i>
					<?php } ?>
				</td>
		</tr>
		<?php }} ?>
		  <?php if($orderdetails->coupondiscount !="" && $orderdetails->coupondiscount>0){?>
							<tr><td colspan="10">Coupon Discount</td>
						<td><b><?php echo $orderdetails->coupondiscount; ?>%</b></td>
				 </tr>
		  <?php } ?>
		<?php if($orderdetails->additionalcharge !="" && $orderdetails->additionalcharge>0) { ?>
			<tr>
			<td colspan="10">Additional Charge:</td>
			<td><?php echo $orderdetails->additionalcharge; ?></td>
		 </tr>
		 <?php } ?>
		 <?php if($orderdetails->shippingcost !="" && $orderdetails->shippingcost>0) { ?>
			<tr>
			<td colspan="10">Shipping Cost</td>
			<td><?php echo $orderdetails->shippingcost ; ?></td>
		 </tr>
		 <?php } ?>
			<tr>
			<td colspan="10">Total</td>
			<td><?php echo $orderdetails->order_currency." ".$orderdetails->order_total; ?></td>
		 </tr>
		  <?php
			 $k++;}
			 ?>
          
		
	    </tbody>
		
      </table>
  </div>
                         
                                
                            
                                
                        		<!--generic-form-wrapper ends-->
                        	</div>
                          	<!--sign-in-register ends-->  
                        </div>
                   
                   </div>
                </div>
            </div>
              </div>
              
<?php include ('includes/footer.php'); ?>
