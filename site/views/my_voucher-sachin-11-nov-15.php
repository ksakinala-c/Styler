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
   <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>css/common_o2.1-b1479bb5c5303159d1392e5538a68644.css" media="all" rel="stylesheet" type="text/css">

<!-- /header -->
<main class="cd-main-content">
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
#resm {
    float: left;
    margin: 0 11px 0 0;
    width: 15%;
}
	
</style>
 
<div class="panel panel-dark">


  <div id="discovery-container">
  

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content" style="margin-top:0px;margin-bottom:-50px;">
	 
		<h1 class="page-title">My Voucher Lists</h1>
	
							 <p>
										<ul id="resm">
								<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>account/edit_users" style="color:#fff;">Profile</a></li>

									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>account/mywallet">My Wallet Balance</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>account/myvoucher">My Gift Vouchers</a></li>
									
								</ul>
							</p>
					 <!--span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message_name')!=""){ echo $this->session->flashdata('message_name'); } ?></b></span-->
			<div class="generic-form-wrapper">
			
<table id="my-orders-table" style="width: 85%; margin: 0px;">
					<thead>
					<tr>
						<th>No.</th>
						<th>Date</th>
						<th>Name</th>
						<th>Qty</th>
						<th>Price</th>
						<th>To Name</th>
						<th>To From Name</th>
						<th>Email</th>
						
						
					</tr>
					</thead>
					<tbody>
						
						<?php 
						//print_r($userorder);				
						if($vocuher != "" && count($vocuher) >= 0){
							$i=1;
							foreach($vocuher as $pro)
							{
							//	echo "<pre>";print_r($pro);
								 
						?>
						<tr>
							<td><p><?php echo $i; ?></p></td>
							<td><p><?php echo $pro->cdate; ?></p></td>
							<td><p><?php echo $pro->order_item_name; ?></p></td>
							<td><p><?php echo $pro->product_quantity; ?></p></td>
							<td><p><?php echo $pro->product_item_price; ?></p></td>
							<td><p><?php echo $pro->toname; ?></p></td>
							<td><p><?php echo $pro->fromname; ?></p></td>
							<td><p><?php echo $pro->email; ?></p></td>		 
						</tr>						
					 
						
						<?php 	
							$i++;
							} } else { ?>
						<tr><td colspan="8"><p>There is no giftcard in your list.</p></td></tr>
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
<script>
function disapprove(url){
 var t = confirm('Are you sure you want to delete?');
 if(t){
  window.location.href = url;
 } else {
  return false; 
 }

}
</script>
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->