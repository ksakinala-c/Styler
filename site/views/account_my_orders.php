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

<link href="<?php echo $base_url_views; ?>css/common_o2.1-b1479bb5c5303159d1392e5538a68644.css" media="all" rel="stylesheet" type="text/css">
<style>
.titalbarmainuss{ left: 50%;
    margin-right: -50%;
    position: absolute;
    text-align: center;
    top: 50%;
    transform: translate(-50%, -50%);}
	
.titalbarmainuss h1	{ color: #000;
    font-size: 48px;
    font-weight: 400;
    letter-spacing: 0.01em;
    line-height: 48px;
    margin-bottom: 0;}
	
	
.titalbarmainuss span{color: #999;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    letter-spacing: 0.025em;
    line-height: 37px;}	
.form-actions a{display:none !important;}	
td{font-size:15px !important;}
th{font-size:15px !important;}
.action.submit-button.submit{display:none;}
@media only screen and (max-width:768px){
#resm{width:100%;}
}
@media only screen and (max-width:320px){
	.category-header {height:80px !important;}
}
@media only screen and (min-width:321px) and (max-width:360px){
	.category-header {height:90px !important;}
}
@media only screen and (min-width:361px) and (max-width:480px){
	.category-header {height:120px !important;}
}
@media only screen and (min-width:481px) and (max-width:768px){
	.category-header {height:192px !important;}
	td {padding-left:10px !important;}
}	
</style>
<!-- a href="<?php echo $http_host;?>3dshirt/"><section class="category-header">
		<div class="titalbarmainuss">
			 
		</div>
</section></a -->
<div class="panel panel-dark">
    <div id="discovery-container">
     <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
    <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
       
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content"  style="margin-top:0px;margin-bottom:-50px;">
		<h1 class="page-title">My Orders</h1>
			<div class="account-dashboad-intro">Track and view your orders. Click on an order number in the below table to view the order details and track that particular order. Click on 'Copy order' to copy the details of the selected order into your cart, for convenient booking.</div>
			 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						<th>No.</th>
						<th>Date</th>
						<th>Track Address</th>
						<th>Total Price</th>
						<th>Cancel Order</th>
						<th>Status</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($userorder != "" && count($userorder) >= 0){					
							foreach($userorder as $order)
							{	
 
 						?>
						<tr>
							<td><p><a href="<?php echo $base_url; ?>account/order_detail/<?php echo $order->order_id; ?>"><?php echo $order->order_number; ?></a></p>
							<p><a href="<?php echo $base_url; ?>account/order_detail/<?php echo $order->order_id; ?>"  class="btn btn-info" style="color:white">View Detail</a></p></td>
							<td><p><?php echo $order->cdate; ?></p></td>
							<td><p>
							
							<?php
							if($order->trackadd !=""){
							echo $order->trackadd; 
							} else {
								echo "Not Updated";
							}
							?>
							</p></td>
							<td><p><span class=""><?php echo $order->order_currency; ?> </span><?php echo $order->order_total; ?></p></td>
							
											<td>
											<?php if($order->is_cancelled == "1"){	?>
												<p><span class="WebRupee"></span><a>Cancelled</a></p>												
											<?php	} else {
											?>
											<p><span class="WebRupee"></span><a class="btn btn-info" style="color:white" href="javascript:void(0);" onclick="cancelorder(<?php echo $order->order_number; ?>); ">Cancel Order</a></p>
											<script>
												function cancelorder(id){
													var t = confirm('Are you sure you want to cancel the order? ');
													if(t){
														window.location.href = '<?php echo $base_url; ?>account/cancelord/'+id;
													}
											    }
											</script>
											<?php } ?>
											</td>
											
											<td>
											<?php
											if($order->order_status=="C"){	?>
												<p style="color:green">Confirmed.</p>
											<?php	} else{ 
												if($order->deliver == "1") { ?>
												<p class="pending-delivery">Packed</p> 
											<?php }	
												if($order->deliver == "2") { ?>
												<p class="pending-delivery">Dispatched</p> 
											<?php }
												if($order->deliver == "0") { ?>
												<p class="pending-delivery">Pending Deliverey</p> 
											<?php }											
												
											}  ?>
											</td>
						</tr>						
						<?php }} else { ?>
						<tr><td colspan="6"><p align="center">You have not placed any orders yet</p></td></tr>
					<?php } ?>
					</tbody>
				</table>
			</div>  
		 <!--my-orders-table-wrap ends-->             
							<!--responsive table ends-->
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