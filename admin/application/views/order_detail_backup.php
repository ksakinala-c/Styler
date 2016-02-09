<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletecategory(){
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<script>
	function validate()
	{
		var title = $("#trackadd").val();
		if(title == '')
		{
			alert('Please enter track details');
			return false;
		}
		
		$('#track').submit();
	}
</script>
<script type="text/javascript">
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'product/order_detail'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#cname").val();
				
				if(name=='')
				{
					alert("Please Enter atleast one search condition.");
					return false;
				}
				else
				{
					return true;
				}
		});


		$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>product/ajaxlist_category',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#cname" ).autocomplete({
					source: c
				});
			}
		});
		});
});
</script>
<script>
function deletes()
{
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Order Management</strong></li>
	
  </ol>
 <form class="form-horizontal form-groups-bordered" role="track" id="track"  method="post" action="<?php echo $base_url;?>product/trackadd" enctype="multipart/form-data">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
			<INPUT TYPE="hidden" NAME="action" VALUE="trackadd">
			<INPUT TYPE="hidden" NAME="id" VALUE="<?php echo $this->uri->segment(3); ?>">
				<div class="form-group">
					<label class="col-sm-1 control-label">Order Track </label>
						<div class="col-sm-3">
							<textarea id="trackadd" name="trackadd" class="form-control"></textarea>
						</div>
						<div class="col-sm-3">
							<select name="status" id="status" class="form-control">
							<?php if($allstatus != '' && count($allstatus) > 0)
								{
									 $i = 0;
									foreach($allstatus as $nstatus) { ?>
								<option value="<?php echo $nstatus->id; ?>" <?php if($i =="0"){ echo "Selected"; } ?>><?php echo $nstatus->status; ?></option>
								<?php $i++; }} ?>
							</select>
						</div>
				
				 <div class="col-5 col-sm-3 col-lg-1 firm">
                    <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                  </div>
				</div>	  
				
			</form>	
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<?php if($this->session->flashdata('L_strErrorMessage')) 
  { ?>
		  <div class="success">
		  <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
		  </div>
  <?php }else { ?>

		<div class="warning">
		<?php echo $this->session->flashdata('flashError'); ?>
		</div>
<?php }  ?>
<div class="row">

<div class="col-xs-12 col-sm-12"><h6 class="main-title">Order Details<a style="float:right; color:#000;"href="<?php echo $base_url; ?>product/invoice/<?php echo $this->uri->segment(3); ?>">INVOICE</a></h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      
    </div>
  </div>
 <br>
<div class="col-xs-12 col-sm-12"> <a href="<?php echo $base_url; ?>product/shipment/<?php echo $this->uri->segment(3); ?>">Shipment</a></div>
  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."category/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order No:</th>
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Name:</th>
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Mobile No:</th>
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Status:</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Address</th>
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">

			  
                <?php
				 
				if($shippingdetails != '' && count($shippingdetails) > 0) {  
				//print_r($shippingdetails);
    			$k = '0'; 
				?>  
          
		  <tr class="odd">
            
            <td class=" "><?php echo $shippingdetails->order_id; ?></td>
			<td class=" "><?php echo $this->product_model->getusername($shippingdetails->userid); ?></td>
			<td class=" "><?php echo $shippingdetails->smobno; ?></td>
			<td class=" "><?php echo $orderdetails->order_status; ?></td>
			<td class=" "><?php echo $shippingdetails->address; ?></td>
           </tr>
		    
        </tbody>
		
      </table>
	  </br>	  </br>

	  <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Billing Address:</th>
            
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Shipping Address</th>
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
 	 <tr class="odd">
            
           <td class=" "><?php echo $shippingdetails->address.",".$shippingdetails->address1.", <br/> ".$shippingdetails->city.", <br/> ".$shippingdetails->county.", <br/>".$shippingdetails->postcode; ?></td>
		<td class=" "><?php echo $shippingdetails->saddress.",".$shippingdetails->saddress1.", <br/>".$shippingdetails->scity.", <br/>".$shippingdetails->scounty.", <br/>".$shippingdetails->spostcode; ?></td>
			
           </tr>
              
          
        </tbody>
		
      </table>
	  </br>
	   	  </br>

	  <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Product Name:</th>
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Quantity</th>
			
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Height:</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Weight:</th> 
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Posture:</th> 
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Shoulder Type:</th> 
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Shoulder Angle:</th> 
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Fit:</th> 
  			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Measurements:</th>
 				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Price:</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Return:</th>
           
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
 
			<?php if($orderitems != '' && count($orderitems) > 0)
				{ foreach($orderitems as $orderitems) { 
				 
			?>
		  <tr class="odd">
			<td class=" ">Style Name: <?php echo $this->product_model->stylename($orderitems->product_id);?> <br /> 
			Product Name: <?php echo $this->product_model->fabricname($orderitems->fabricid);?>
			</td>
			
			<td class=""><?php echo $orderitems->product_quantity; 
			$measurement =  $this->product_model->getmeasurement($orderitems->measureid);
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
						$serdata = $measurement->serializedata;
						$uns = unserialize($serdata);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 echo $this->product_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
								}
								
				  ?> </td>

			  <!-- td class=" "><?php $post = $this->product_model->getgesture($orderitems->measureid);
					if($post == "1") { echo "Slim"; }
					if($post == "2") { echo "Regular"; }
					if($post == "3") { echo "Comfort"; }
			 ?></td>
				<td class=""><?php if($orderitems->monotext !="") { echo $orderitems->monotext; } else { "Not Available"; } ?></td>
				   <td class=""><?php $imp1 = $this->product_model->getmetricfit($orderitems->measureid); if($imp1 !=""){ echo $imp1; } else { echo "Not Available"; } ?></td>

				<td class=""> 
					Metric Weight : <?php $imp2 = $this->product_model->getmetricweight($orderitems->measureid); if($imp2 !=""){ echo $imp2; } else { echo "Not Available"; } ?> <br />

					Metric inch : <?php $imp3 = $this->product_model->getmetricinch($orderitems->measureid); if($imp3 !=""){ echo $imp3; } else { echo "Not Available"; } ?>  <br />

					Imp Height: <?php $imp4 = $this->product_model->getimpheight($orderitems->measureid); if($imp4 !=""){ echo $imp4; } else { echo "Not Available"; } ?> <br />

					Imp Weight: <?php $imp5 =  $this->product_model->getimpweight($orderitems->measureid); if($imp5 !=""){ echo $imp5; } else { echo "Not Available"; } ?>
				</td>
 
				 <td class=" "><?php 
			$attrib = $this->attribute_model->getsize($orderitems->sizeid);
			if($attrib !="") { echo $attrib->size; } else { echo "Not avilable"; } ?>
			</td>
				<td class=""><?php $serdata = $this->product_model->getserdata($orderitems->measureid);
								$uns = unserialize($serdata);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 echo $this->product_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
								}
							?>
								
								</td -->
					  
			   
			  <td class=""><?php echo number_format($orderitems->product_item_price,'2','.',''); ?></td>
			  
			  	<td class="">
					<?php if($orderitems->order_status =='R'){?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit Return Product" href="<?php echo $base_url; ?>return_product/editreturnproducts/<?php echo $orderitems->order_id; ?>"> <i class="entypo-pencil"></i>Edit Return Product
					</a>
					<?php }else{ ?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Product Return" href="<?php echo $base_url; ?>return_product/returnproducts/<?php echo $orderitems->order_id; ?>"> <i class="">Product Return</i>
					<?php } ?>
				</td>
			
		</tr>
			<?php }} ?>
			
		<?php /*	
		 <tr>
		 <td colspan="10">Additional Charge:</td>
			<td><?php echo $orderdetails->additionalcharge; ?>.00</td>
		 </tr>
		 */ ?>
		 <tr>
			<td colspan="10">Shipping Cost:</td>
			<td><?php echo $this->product_model->getshipcost($orderdetails->order_id); ?>.00</td>
			
		 </tr>	
		<tr>
			<td colspan="10">Total</td>
			<td><?php echo $orderdetails->order_total; ?></td>
			
		 </tr>
		 
		 
		 
        <?php
			 $k++;}
			 ?>
          
		
          
             
          
        </tbody>
		
      </table>
    </form>
  </div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>
