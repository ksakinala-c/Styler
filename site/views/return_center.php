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
td{font-size:20px !important;}
.action.submit-button.submit{display:none;}	
</style>
<a href="<?php echo $http_host;?>3dshirt/"><section class="category-header">
		<div class="titalbarmainuss">
			  <!--<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>-->
		</div>
</section></a>
<div class="panel panel-dark">


  <div id="discovery-container">
   
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
    <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
       
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content"  style="margin-top:0px;margin-bottom:-50px;">
		<h1 class="page-title">Return Center</h1>
		 
			 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						<th>Order Id.</th>
						<th>Date</th>
						<th>Email</th>
						<th>Phone	</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Return Reason</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($returnproduct != "" && count($returnproduct) >= 0){					
							foreach($returnproduct as $order)
							{	
							//echo $this->session->userdata('userid');die;
 						?>
						<tr>
							 
							<td><p><?php echo $order->order_id; ?></p></td>
							<td><p><?php echo $order->cdate; ?></p></td>
							<td><p><?php echo $order->email; ?></p></td>
							<td><p><?php echo $order->phone; ?></p></td>
							<td><p><?php echo $order->product_name; ?></p></td>
							<td><p><?php echo $order->product_quantity; ?></p></td>
							<td><p><?php echo $order->returnreason; ?></p></td>
						 
							
											 
											 
						</tr>						
						<?php }} else { ?>
						<tr><td colspan="6"><p align="center">No Any Return Product Found.</p></td></tr>
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