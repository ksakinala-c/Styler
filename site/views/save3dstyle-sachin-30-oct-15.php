<?php include ('includes/header.php'); ?>
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
.action.submit-button.submit{display:none;}	
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






   <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">

 
      
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content">
		<h1 class="page-title">My Saved 3D Style</h1>
		 
			 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						<th>No.</th>
						<th>Date</th>
						<th>Product Name</th>
 						<th>Details</th>
						<th>Image</th>
						<th>Delete</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($savedstyle != "" && count($savedstyle) >= 0){					
							foreach($savedstyle as $order)
							{	
							 
						?>
						<tr>
							<td><p><a href="#"><?php echo $order->id; ?></a></p>
							</td>
							<td><p><?php echo $order->added_date; ?></p></td>
							<td><p><?php echo $order->pname; ?></p></td>
 							<td><p> <table width="50%" border="1">
										<?php $arr3d = json_decode($order->details); 
									 // print_r($arr3d);die;
									  
									  ?>
										    <tr>
                                            <td height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            <td height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td></tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr>
											<?php } ?>

 											<tr><td height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td></tr>
 											<tr> <td height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td></tr>
										
											<tr><td height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr><td height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
											
											<!-- tr> <td height="20" align="left" valign="middle"><strong>pocket_right</strong></td> <td><?php echo $arr3d->pocket_right; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>pocket_fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr-->
											<!-- tr>  <td height="20" align="left" valign="middle"><strong>Fit</strong></td> <td><?php echo $arr3d->fit; ?></td></tr -->
                                            <!-- tr> <td height="20" align="left" valign="middle"><strong>monogram</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>monogram_text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>monogram_location</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>monogram_color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>base_fabric</strong></td> <td><?php echo $arr3d->base_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>inner_buttons_fabric</strong></td> <td><?php echo $arr3d->inner_buttons_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>collar_fabric</strong></td> <td><?php echo $arr3d->collar_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>inner_collar_fabric</strong></td> <td><?php echo $arr3d->inner_collar_fabric; ?></td></tr>
                                            <tr> <td height="20" align="left" valign="middle"><strong>cuffs_fabric</strong></td> <td><?php echo $arr3d->cuffs_fabric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>inner_cuffs_fabric</strong></td> <td><?php echo $arr3d->inner_cuffs_fabric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>cleric</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>resolution</strong></td> <td><?php echo $arr3d->resolution; ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>position</strong></td> <td><?php echo $arr3d->position; ?></td></tr-->
                                          </tr>
                                        
                                        </table></p></td> 
							<td><p><img src="<?php echo $http_host;?>upload/saveprofile/<?php echo $order->baseimage ; ?>"  height="100" width="100" /> </p></td> 
 											<td>
											 
											<p><span class="WebRupee"></span><a href="javascript:void(0);" onclick="cancelorder(<?php echo $order->id; ?>); ">DELETE</a></p>
											<script>
												function cancelorder(id){
													var t = confirm('Are you sure you want to delete the saved items? ');
													if(t){
														window.location.href = '<?php echo $base_url; ?>account/deletesaveditems/'+id;
													}
											    }
											</script>
											<p>
												<form action="<?php echo $http_host;?>3dshirt" method="post" id="<?php echo $order->id; ?>">
													<input type="hidden" name="details" value="<?php echo $order->details; ?>" />
													<a onclick="$('#<?php echo $order->id; ?>').submit();">Reorder</a>
												</form>
											</p>
											</td>
									 
						</tr>						
		 
						
						<?php }} else { ?>
						<tr><td colspan="7"><p align="center">No Any 3D Saved Style Found.</p></td></tr>
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