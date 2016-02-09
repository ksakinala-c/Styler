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
<script>
	function showhidefn(id){
		$("#"+id).toggle();
	}
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
td{font-size:15px !important;}
th{font-size:15px !important;}
.action.submit-button.submit{display:none;}
.bewear-icons caption, th, td {vertical-align:top !important;}
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
 
<div class="panel panel-dark">


   <script>
	function cancelorder(){
		var t = confirm('Are you sure you want to delete the saved items? ');
		if(t){
			$("#deletesavestyle").submit();
			//window.location.href = '<?php echo $base_url; ?>account/deletesaveditems/'+id;
		}
	}
</script>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
 
   <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
 
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content" style="margin-top:0px;">
		<h1 class="page-title">My Saved Designs</h1>
		 
			 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			<div id="my-orders-table-wrap">
			<a class="btn btn-info" style="color:white; float:right; margin-bottom:5px;" href="javascript:void(0);" onclick="cancelorder(); ">DELETE</a>
			<form action="<?php echo $base_url; ?>account/deletesaveditems/" method="post" id="deletesavestyle" /> 
<table id="my-orders-table">
					<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Date</th>
						<th>Product Name</th>
 						<th>Details</th>
						<th>Image</th>
						<th>Delete / Reorder</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($savedstyle != "" && count($savedstyle) >= 0){					
							foreach($savedstyle as $order)
							{	
							 
						?>
						<tr>
							<td><p><input type="checkbox" value="<?php echo $order->id; ?>" name="deletesavestyle[]"/></p>
							</td>
							<td><p><?php echo $order->added_date; ?></p></td>
							<td><p><?php echo $order->pname; ?></p></td>
 							<td>
							<span><a href="javascript:void(0);" onclick="showhidefn('<?php echo $order->id; ?>');">Read More</a></span>
							<span id="<?php echo $order->id; ?>" style="display:none; "><p > <table width="50%" border="1">
										<?php $arr3d = json_decode($order->details); 
									 // print_r($arr3d);die;
									  
									  ?>
										    <tr>
                                            <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->base_fabric); ?></td></tr>
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

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->cart_model->fabricname($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
										
                                          </tr>
                                        
                                        </table>
                                    </p></span>
                                    </td> 
							<td><p><img src="<?php echo $http_host;?>upload/saveprofile/<?php echo $order->baseimage ; ?>"  height="100" width="100" /> </p></td> 
 											<td>
 											<p>
                                            	<!-- span class="WebRupee"></span><a class="btn btn-info" style="color:white" href="javascript:void(0);" onclick="cancelorder(<?php echo $order->id; ?>); ">DELETE</a>
 											<script>
												function cancelorder(id){
													var t = confirm('Are you sure you want to delete the saved items? ');
													if(t){
														window.location.href = '<?php echo $base_url; ?>account/deletesaveditems/'+id;
													}
											    }
											</script-->
 												<form action="<?php echo $http_host;?>3dshirt" method="post" id="<?php echo $order->id; ?>">
													<input type="hidden" name="details" value="<?php echo $order->details; ?>" />
													<a href="<?php echo $http_host;?>3dshirt" class="btn btn-info" style="color:white">REORDER</a>
												</form>
											</p>
											</td>
 
						</tr>						
 						<?php }} else { ?>
						<tr><td colspan="7"><p align="center">You have not created any designs yet <a href="<?php echo $base_url;?>3dshirt" style="font-weight:bold;">Start Now</a></p></td></tr>
					<?php } ?>
					</tbody>
				</table>
				</form>
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