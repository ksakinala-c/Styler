<?php include ('includes/header.php'); ?>
   <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
<link href="<?php echo $base_url_views; ?>css/common_o2.1-b1479bb5c5303159d1392e5538a68644.css" media="all" rel="stylesheet" type="text/css">
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
	
</style>
<a href="http://www.stylior.com/3dshirt/">
	<section class="category-header">
		<div class="titalbarmainuss">
		 <!--<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>-->
		</div>
	</section>
</a>
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
      
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content" style="margin-top:0px;margin-bottom:-50px;">
	 
		<h1 class="page-title">My Wishlist</h1>
	
					 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message_name')!=""){ echo $this->session->flashdata('message_name'); } ?></b></span>
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						<th>No.</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Image:</th>
						<th>Action</th>
						
						
						
					</tr>
					</thead>
					<tbody>
						
						<?php 
						//print_r($userorder);				
						if($wishlist != "" && count($wishlist) >= 0){
							$i=1;
							foreach($wishlist as $pro)
							{
								$details = $this->home_model->prodetailsall($pro->pid);
						?>
						<tr>
							<td><p><?php echo $i; ?></p></td>
							<td><p><a href="<?php echo $base_url; ?>home/details/<?php echo $pro->style_id; ?>/<?php echo $pro->pid; ?>"><?php echo $pro->pname; ?></a></p></td>
							<td><p>Rs.<?php echo $details->price; ?></p></td>
							<td><p><img src="<?php echo $http_host;?>/upload/products/small/<?php echo $pro->image; ?>" width="50px" /></p></td>
							<td><p class="pending-delivery">
							 
							<a class="" title="Delete" onclick="disapprove('<?php echo $base_url."account/delete_wishlist/"; ?><?php echo $pro->id; ?>');" href="javascript:void(0)" style="color:red" >Delete</a>
							</p></td>
											 
						</tr>						
					 
						
						<?php 	
							$i++;
							} } else { ?>
						<tr><td colspan="5"><p>There is no product in your wishlist.</p></td></tr>
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