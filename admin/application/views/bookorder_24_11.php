<?php
$front_base_url = $this->config->item('front_base_url');
$base_url 		= $this->config->item('base_url');
$http_host 		= $this->config->item('http_host');
$base_url_views = $this->config->item('base_url_views');
$base_upload = $this->config->item('upload');
$live_base_url = $this->config->item('live_base_url');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Book Order</title>
    <link rel="stylesheet" href="<?php echo $base_url_views; ?>css/myorderbootstrap.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
	<script>
function myFunction()
{
    window.print();
}
</script> 
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1 style="color:#428bca;"><img src="<?php echo $base_url_views; ?>images/logo.png"/></h1>
        </div>
		<button style="background: none repeat scroll 0 0 #000;    border: medium none;    color: 
#fff;    float: right;    font-size: 13px;       line-height: 20px;    margin: 0px 0 0;    padding: 7px;}" onclick="myFunction()">Print Book Order</button>   
        <div class="col-xs-6 text-right">
          <h1>ORDER BOOK</h1>
          
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 style="color:#428bca;">Stylior.com</h4>
            </div>
            <div class="panel-body">
              <p style="font-size:16px;">
                201, Akshar Blue Chip IT Park,
				<br>	Navi Mumbai-400705 <br>
                Email:  support@stylior.com <br>
                Customer Care: +91 8055-670-670<br>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Invoice : <b style="font-weight:normal; color:#428bca;"><?php echo $orderdetails->order_id; ?></b></h4>
               <h4>Date : <b style="font-weight:normal; color:#428bca;"><?php echo $orderdetails->cdate; ?></b></h4>
			    <h4>Order Status : <b style="font-weight:normal; color:#428bca;"><?php if($orderdetails->order_status == 'C') { echo "Confirmed"; } else { echo "Pending"; } ?></b></h4>
            </div>
            <div class="panel-body" style="min-height:125px;">
              <p style="font-size:16px;">
                Payment Method: - Online <br>
                </p>
            </div>
          </div>
        </div>
        <div style="clear:both;"></div>
        
        
         <div class="col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><b style="color:#428bca; font-weight:normal;">Bill To:</b></h4>
            </div>
            <div class="panel-body">
              <p style="font-size:16px;">
              <?php echo $shippingdetails->address.",<br/>".$shippingdetails->address1.",<br/>".$shippingdetails->city.",".$shippingdetails->county.",<br/>".$shippingdetails->postcode; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><b style="font-weight:normal; color:#428bca;">Ship To:</b></h4>
               
            </div>
            <div class="panel-body" style="min-height:154px;">
              <p style="font-size:16px;">
               <?php echo $shippingdetails->saddress.",<br/>".$shippingdetails->saddress1.",<br/>".$shippingdetails->scity.",<br/>".$shippingdetails->scounty.",<br/>".$shippingdetails->spostcode; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Item</h4>
            </th>
			 
            <th>
              <h4>Price (INR)</h4>
            </th>
            <th>
              <h4>Unit</h4>
            </th>
            <th>
              <h4>Qty</h4>
            </th>
			            <th>
              <h4>Source</h4>
            </th>
            <th>
              <h4>Total </h4>
            </th>

          </tr>
        </thead>
        <tbody>
      
     <?php if($orderitems != '' && count($orderitems) > 0)
		  {
			  foreach($orderitems as $orderitems1) { 
			 // print_r($orderitems);
 
		  ?>
          <tr>
				<?php if($orderitems1->save3d == '1') { ?>
					<td class=" "> 
						Product Name: <?php echo $orderitems1->order_item_name;?>
				</td>
			<?php } else { ?>
				<td class=" ">Style Name: <?php echo $this->product_model->stylename($orderitems1->product_id);?> <br /> 
					Product Name: <?php echo $this->product_model->fabricname($orderitems1->fabricid);?>
				</td>
			<?php } ?>
				 
				<td><?php echo number_format($orderitems1->product_item_price,'2','.','');?></td>
				<td><?php echo $orderdetails1->order_currency; ?></td>
				<td><?php echo $orderitems1->product_quantity; ?></td>
					<td><?php if($orderitems1->save3d == "0") { echo "Designer Store"; } 
					if($orderitems1->save3d == "1") { echo "3D Designer"; } 
					?></td>
				<td><?php echo number_format( ( $orderitems1->product_item_price * $orderitems1->product_quantity ),'2','.','');?></td>
			
          </tr>
		
		  <?php }} ?>
		  
		    <tr>
			<td>
				 Total 
            </td>
			<td colspan="5" ><?php echo $orderdetails->order_total ; ?> (<?php echo $orderdetails->order_currency; ?>)</td>
		  </tr>
        </tbody>
      </table>


	   <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Item</h4>
            </th>
			 
            <th>
              <h4>Height/Weight</h4>
            </th>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Fit</h4>
            </th>
			            <th>
              <h4>Measurements</h4>
            </th>
            <th>
              <h4>3d Parameters</h4>
            </th>

          </tr>
        </thead>
        <tbody>
      
     <?php if($orderitems != '' && count($orderitems) > 0)
		  {
			  foreach($orderitems as $ord1) { 

				  $measurement =  $this->product_model->getmeasurement($ord1->measureid);
 		  ?>
          <tr>
		  <?php if($ord1->save3d == '1') { ?>
					<td class=" "> 
						Product Name: <?php echo $ord1->order_item_name;?>
				</td>
			<?php } else { ?>
				<td class=" ">Style Name: <?php echo $this->product_model->stylename($ord1->product_id);?> <br /> 
					Product Name: <?php echo $this->product_model->fabricname($ord1->fabricid);?>
				</td>
			<?php } ?>

				 <td>Height: <?php echo $measurement->metricft; ?> feet <?php echo $measurement->metricinch; ?> Inches <br/>
				 Weight: <?php echo $measurement->metricweight; ?></td>
				 
				<td>Body Type: <?php 
								$post = $measurement->posture; 
								if($post == "1") { echo "Broad"; }
								if($post == "2") { echo "Column"; }
								if($post == "3") { echo "Oval"; }
							?><br />
							Shoulder Type:  <?php 
									echo ucfirst($measurement->shouldertype); 
 								?> <br /> Shoulder Angle: <?php 
									echo ucfirst($measurement->shoulderangle); 
								?></td>
				<td> <?php 
								 $post = $measurement->fit; 
								if($post == "1") { echo "Regular"; }
								if($post == "2") { echo "Tailored"; }
								if($post == "3") { echo "Slim"; }	
								?></td>
				<td><?php 
						if($measurement->type == '1') { echo "Standard Sizes"; }
						if($measurement->type == '2') { echo "Shirt Measurement"; }
						if($measurement->type == '3') { echo "Body Measurement"; } ?> <br/> <?php
 						$serdata = $measurement->serializedata;
						$uns = unserialize($serdata);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 echo $this->product_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
						}
			 ?></td>
					<td><?php if($ord1->save3d == '1') {
 					?>
					 
					<p>3D Parameter:<table   border="0">
										<?php
  					$arr3d = json_decode($ord1->details3d);   ?>
										    <tr>
                                            <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td></tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr>
											<?php } ?>

 											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td></tr>
 											<tr> <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td></tr>
                                            <tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td></tr>
										
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
										 
                                          </tr>
                                        
                                        </table>
                                    </p>
                                   
						 
					 
				<?php } ?></td>
 			
          </tr>
		
		  <?php }} ?>
		  
		    <tr>
			<td>
				 Total 
            </td>
			<td colspan="5" ><?php echo $orderdetails->order_total ; ?></td>
		  </tr>
        </tbody>
      </table>
       
      <div style="clear:both;"></div>
      <p style="background:#428bca; text-align:center; color:#fff; padding:10px 0 10px 0; font-size:25px;">** Thank you for shopping with stylior.com **</p>
    </div>
	
	
  </body>
</html>
