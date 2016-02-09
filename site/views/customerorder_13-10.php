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
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Size:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Quantity</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Posture:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Fitting:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Mono Text:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Metric Fit:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Metric Weight:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Metric inch:</th> 
			
			 
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Imp Height:</th> 
            
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Imp Weight:</th>
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Serializedata:</th>
			
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">price:</th>
			<th style="width: auto; color:black; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Return:</th>
			
			
        </tr>
         
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">
		<?php if($orderitems != '' && count($orderitems) > 0)
				{ foreach($orderitems as $orderitems) { 
			//print_r($orderitems);
			?>
		<tr class="odd">
			<td class=" "><?php echo $orderitems->order_item_name;?></td>
			<td class=" "><?php 
			$attrib = $this->account_model->getsize($orderitems->sizeid);
			if($attrib !="") { echo $attrib->size; } else { echo "Not avilable"; } ?>
			<?php /*
			$attrib = $this->attribute_model->getcolor($orderitems->colorid);
			echo $attrib->colourname; */ ?></td>
			<td class=""><?php echo $orderitems->product_quantity; ?></td>
			
			 <td class=""><?php $post = $this->account_model->getposture($orderitems->order_id);
									if($post == "1") { echo "average"; }
									if($post == "2") { echo "Forward Learning"; }
									if($post == "3") { echo "Straight"; }
							?>
							</td>
			  <td class=" "><?php $post = $this->account_model->getgesture($orderitems->order_id);
					if($post == "1") { echo "Slim"; }
					if($post == "2") { echo "Regular"; }
					if($post == "3") { echo "Comfort"; }
			 ?></td>
				<td class=""><?php if($orderitems->monotext !="") { echo $orderitems->monotext; } else { "Not Available"; } ?></td>
			    <td class=""><?php $imp1 = $this->account_model->getmetricfit($orderitems->order_id); if($imp1 !=""){ echo $imp1; } else { echo "Not Available"; } ?></td>
			    <td class=""><?php $imp2 = $this->account_model->getmetricweight($orderitems->order_id); if($imp2 !=""){ echo $imp2; } else { echo "Not Available"; } ?></td>
				<td class=""><?php $imp3 = $this->account_model->getmetricinch($orderitems->order_id); if($imp3 !=""){ echo $imp3; } else { echo "Not Available"; } ?></td>
				<td class=""><?php $imp4 = $this->account_model->getimpheight($orderitems->order_id); if($imp4 !=""){ echo $imp4; } else { echo "Not Available"; } ?></td> 
				<td class=""><?php $imp5 =  $this->account_model->getimpweight($orderitems->order_id); if($imp5 !=""){ echo $imp5; } else { echo "Not Available"; } ?></td>
				 
				<td class=""><?php $serdata = $this->account_model->getserdata($orderitems->order_id);
								$uns = unserialize($serdata);
								//print_r($uns);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								//print_r($array1);
								$array2 = explode(',', $uns[1]);  
								//print_r($array2);
								for($k='0';$k<count($array1);$k++){
									 echo $this->account_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
								} else {
									
									echo "Not available";
								}
									?>
								
								</td>
					  
			   
			  <td class=""><?php echo number_format($orderitems->product_item_price,'2','.',''); ?></td>
			  
			  <td class="">
					<?php if($orderitems->order_status =='R'){?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit Return Product" href="<?php echo $base_url; ?>account/editreturnproducts/<?php echo $orderitems->order_item_id; ?>"> <i class="entypo-pencil"></i>Edit Return Product
					</a>
					<?php }else{ ?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Product Return" href="<?php echo $base_url; ?>account/returnproducts/<?php echo $orderitems->order_item_id; ?>"> <i class="">Product Return</i>
					<?php } ?>
				</td>
		</tr>
		<?php }} ?>
		
		<?php if($orderdetails->additionalcharge !="" && $orderdetails->additionalcharge>0) { ?>
			<tr>
			<td colspan="13">Additional Charge:</td>
			<td><?php echo $orderdetails->additionalcharge; ?></td>
		 </tr>
		 <?php } ?>
		 <?php if($orderdetails->shippingcost !="" && $orderdetails->shippingcost>0) { ?>
			<tr>
			<td colspan="13">Shipping Cost</td>
			<td><?php echo $orderdetails->shippingcost ; ?></td>
		 </tr>
		 <?php } ?>
			<tr>
			<td colspan="13">Total</td>
			<td><?php echo $orderdetails->order_total; ?></td>
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
