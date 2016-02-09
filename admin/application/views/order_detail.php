<?php
include('include/header.php');
function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
} 
?>
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
					<label class="col-sm-1 control-label">Message :</label>
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
 
     <div class="col-6 col-sm-12 col-lg-12 action">
      
    </div>
  </div>
 

  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div class="demo tabelformatesss">       
<div id="verticalTab">
<ul class="resp-tabs-list">
<li>Information</li>
<a style=" background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>product/shipment_list/<?php echo $this->uri->segment(3); ?>">Shipments</a>
<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>product/invoice/<?php echo $this->uri->segment(3); ?>">Invoice</a>
	<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>product/bookorder/<?php echo $this->uri->segment(3); ?>">Order Book</a>
	<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>product/measurement/<?php echo $this->uri->segment(3); ?>">Measurement</a>
<li style="display:none;">Credit Memos</li>

</ul>
<div class="resp-tabs-container">
<div>
		<style>
		.tbtformatstylesss{width:49%; border:solid 1px #ccc; font-size:13px; float:left;}
		.tbtformatstylesss td{padding:3px;}
		.tbtformatstylesss th{background:#00a7e8; color:#fff; padding:3px;}

		.tbtformatstylesssto{width:49%; border:solid 1px #ccc; font-size:13px; float:right;}
		.tbtformatstylesssto td{padding:3px;}
		.tbtformatstylesssto th{background:#00a7e8; color:#fff; padding:3px;}
		.fullpartssss td{border-right:solid 1px #ccc;}
		</style>
<div class="joshi_informationmain">

		<?php	if($shippingdetails != '' && count($shippingdetails) > 0) {  
				 
				?>  
		<table class="tbtformatstylesss">
		 
			<thead>
				<tr>
					<th colspan="2">Order # <?php echo $shippingdetails->order_id; ?> (The order confirmation email was sent.)</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>Order Date</td>
					<td><b><?php echo $orderdetails->cdate; ?></b></td>
				</tr>
				
				<tr>
					<td>Order Status</td>
					<td><b><?php if($orderdetails->order_status == 'C') { echo "Confirmed"; } else { echo "Pending"; } ?></b></td>
				</tr>
				
				 

			</tbody>
		</table>

		<table class="tbtformatstylesssto">
			<thead>
				<tr>
					<th colspan="2">Account Information</th>
				</tr>
			</thead>
			<tbody>
			<?php $userinfo = $this->product_model->getuserinfo($orderdetails->user_info_id); ?>
				<tr>
					<td>Customer Name</td>
					<td><b> <?php echo $userinfo->username;?> </b></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><b><?php echo $userinfo->email;?></b></td>
				</tr>
				
				<tr>
					<td>Phone Number</td>
					<td><b><?php echo $userinfo->phone;?></b></td>
				</tr>

				<!-- tr>
					<td>Join Date</td>
					<td><b><?php echo $userinfo->joindate;?></b></td>
				</tr-->

			</tbody>
		</table>

		<div style="clear:both; margin-top:15px; width:100%; float:left;"></div>

			<table class="tbtformatstylesss">
				<thead>
					<tr>
						<th>Billing Address</th>
						<th style="text-align:right;"><!--a style="color:#fff; text-decoration:underline;" href="#">Edit</a--></th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
					<td colspan="2">
						<?php //print_r($shippingdetails); ?>
 						 <?php echo $shippingdetails->address.",</br>".$shippingdetails->address1.", <br/> ".$shippingdetails->city.", <br/> ".$shippingdetails->county.", <br/>".$shippingdetails->postcode; ?>
						 <br />
						 Mobile: <?php echo $shippingdetails->mobno; ?></td>
					</tr>
				</tbody>
			</table>

			<table class="tbtformatstylesssto">
					<thead>
						<tr>
							<th>Shipping Address</th>
							<th style="text-align:right;"><!--a style="color:#fff; text-decoration:underline;" href="#">Edit</a--></th>
						</tr>
					</thead>
				
				<tbody>
					<tr>
						<td class="" colspane="2"><?php echo $shippingdetails->saddress.",</br>".$shippingdetails->saddress1.", <br/>".$shippingdetails->scity.", <br/>".$shippingdetails->scounty.", <br/>".$shippingdetails->spostcode; ?></td>
					</tr>
				</tbody>
			</table>
		<?php } ?>
			<div style="clear:both; margin-top:15px; width:100%; float:left;"></div>
		<table class="tbtformatstylesss fullpartssss" style="width:100%;">
					<thead>
						<tr>
						<th colspan="10">Items Ordered</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>Product Name</b></td>
							<td><b>Quantity</b></td>
							<!-- td><b>Height</b></td>
							<td><b>Weight</b></td>
							<td><b>Type</b></td>
							<td><b>Fit</b></td>
							<td><b>Measurements</b></td>
							<td><b>3d Parameters</b></td -->
							<td><b>Price</b></td>
							<td><b>Return</b></td>
						</tr>
						<?php
						 $c = $this->product_model->currencydetails($orderdetails->order_currency);
						 $cvalue = $c->stylior_roc;
						 $multiplier = $c->multiplier;
						 $ceiling = $c->ceiling;
						
						if($orderitems != '' && count($orderitems) > 0)
				{ foreach($orderitems as $orderitems) { 
				 
			?>
			<tr>
			<?php if($orderitems->save3d == '1') { ?>
					<td class=" "> 
						Product Name: <?php echo $orderitems->order_item_name;?>
					</td>
			<?php } else { ?>
				<td class=" ">Style Name: <?php echo $this->product_model->stylename($orderitems->product_id);?> <br /> 
					Product Name: <?php echo $this->product_model->getfabricname1($orderitems->fabricid);?>
				</td>
			<?php } ?>
			
			<td class=""><?php echo $orderitems->product_quantity; 
			$measurement =  $this->product_model->getmeasurement($orderitems->measureid);
			?></td>
			 <!-- td><?php echo $measurement->metricft; ?> feet <?php echo $measurement->metricinch; ?> Inches  </td>
			 <td><?php echo $measurement->metricweight; ?> </td>
			 <td class="">Body Type: <?php 
								$post = $measurement->posture; 
								if($post == "1") { echo "Broad"; }
								if($post == "2") { echo "Column"; }
								if($post == "3") { echo "Oval"; }
							?><br />
							Shoulder Type:  <?php 
									echo ucfirst($measurement->shouldertype); 
 								?> <br /> Shoulder Angle: <?php 
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
			 ?> </td>
			  <td >
			   <?php if($orderitems->save3d == '1') {
 					?>
					 
					<p>3D Parameter:<table   border="0">
										<?php
  					$arr3d = json_decode($orderitems->details3d);   ?>
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
                                   
						 
					 
				<?php } ?> </td --> 
			  <td class=""> 
			  
			  <?php
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
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit Return Product" href="<?php echo $base_url; ?>return_product/editreturnproducts/<?php echo $orderitems->order_id; ?>"> <i class="entypo-pencil"></i>Edit Return Product
					</a>
					<?php }else{ ?>
					<a class="btn btn-default btn-sm btn-icon icon-left" title="Product Return" href="<?php echo $base_url; ?>return_product/returnproducts/<?php echo $orderitems->order_id; ?>"> <i class="">Product Return</i>
					<?php } ?>
				</td>
						</tr>
					

								<?php }} ?>
					</tbody>
			</table>
			<div style="clear:both; margin-top:15px; width:100%; float:left;"></div>

				<table class="tbtformatstylesss">
					<thead>
						<tr>
						<th colspan="2">Payment Information</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Payment Gateway : &nbsp; <?php echo $orderdetails->payment_gateway; ?></td>
							<td>Order was placed using <?php echo $orderdetails->order_currency; ?></td>
						</tr>
					</tbody>
				</table>

				<table class="tbtformatstylesssto">
				<thead>
					<tr>
						<th colspan="4">Shipping & Handling Information</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					 
					 
					 					 <?php if($orderdetails->coupondiscount !="" && $orderdetails->coupondiscount>0){?>
							<td>Coupon Discount</td>
						<td><b><?php echo $orderdetails->coupondiscount; ?>%</b></td>
				 
		  <?php } ?>
						<td>Total </td>
						<td><b><?php echo $orderdetails->order_currency; ?><?php echo $orderdetails->order_total; ?></b></td>
						
						
	
		  
		  
					</tr>
				</tbody>
				</table>


</div>

</div>
  
<div class="spesalartival">

<table class="tbtformatstylesss">
<thead>
<tr>
<th colspan="2">Shipping & Handling Information</th>
</tr>
</thead>
<tbody>
<tr>
<td>Flat Rate - Fixed</td>
<td><b>$0.00</b></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<br />
<div style="height: 30px; clear: both"></div>
</div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>


<!--tav css start-->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>left-tab-css/responsive-tab.css" type="text/css" media="screen" />
<script charset="utf-8" class="lazyload" src="<?php echo $base_url_views; ?>left-tab-js/jquery-1.js"></script>
<script src="<?php echo $base_url_views; ?>left-tab-js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
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
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
 
<!--Tab css done-->
</body>
</html>