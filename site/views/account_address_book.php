<?php  include ('includes/header.php'); ?>
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
}	
</style>
<!-- a href="<?php echo $http_host;?>3dshirt/"><section class="category-header">
		<div class="titalbarmainuss">
		 
		</div>
</section></a -->

<div class="panel panel-dark">


  <div id="discovery-container">
    
 
    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
     <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content"  style="margin-top:0px;margin-bottom:-50px;">
                      		<h1 class="page-title">Address Book</h1>
                            
                            <div class="account-form-content-wrap full-width">				
					<div class="generic-form-wrapper">
						<form action="" method="post">
							<div class="step-chunk">
								<h3 style="float: left; width: 100%;">Billing Address</h3>
								<p>Add or edit billing and shipping addresses. You can have one Billing address and upto 3 shipping addresses</p>
							</div>
								<!--step-chunk ends-->
								
								
								<div class="step-chunk">
                                   	<div class="account-address-wrap">
                                   		<div class="account-address-wrap-col">									<?php if($one_address != "") { ?>
											<p class="name"><?php echo $one_address->Name; ?></p>
                                            <p><?php echo $one_address->Address1; ?>, <?php if($one_address->Address2 != "") { echo $one_address->Address2; } ?></p>
                                            <p><?php echo $one_address->Landmark; ?>,<?php echo $one_address->City; ?></p>
                                            <p><?php if($one_address->State != "") { echo $one_address->State; } ?> - <?php echo $one_address->Zip; ?></p>
											<p><?php echo $one_address->Phone; ?></p>
                                            <p><a class="btn btn-info" style="color:white" href="<?php echo $base_url; ?>account/edit_shipping_address/<?php echo $one_address->id; ?>">Edit Address</a></p>
											<?php } else { ?>	Please add atleast One Address.
											<?php } ?>
                                        </div>
                                                <!--account-address-wrap-col ends-->
                                    </div>
                                            <!--account-address-wrap ends-->
                                </div>
								<!--step-chunk ends-->
								
								
								<div class="step-chunk">
									<h3>Shipping Address</h3>
									<p>Select a default shipping address by choosing the appropriate radio button</p>
									<p><a class="btn btn-info" style="color:white" href="<?php echo $base_url; ?>account/add_shipping_address">Add new Shipping address</a></p>
								</div>
								<!--step-chunk ends-->
								
								<div class="step-chunk">
									<div class="account-address-wrap">
										<div class="step-chunk">
                                        	<div class="account-address-wrap">
												<?php if($all_address != "" && count($all_address) >= 0) {
												foreach($all_address as $add) { ?>
												<div class="account-address-wrap-col">
                                        			<p class="name"><?php echo $add->Name; ?></p>
                                                    <p><?php echo $add->Address1; ?>, <?php if($add->Address2 != "") { echo $add->Address2; } ?></p>
                                                    <p><?php echo $add->Landmark; ?>,<?php echo $add->City; ?></p>
                                                    <p><?php if($add->State != "") { echo $add->State; } ?> - <?php echo $add->Zip; ?></p>
													<p><?php echo $add->Phone; ?></p>
                                                    <p><a class="btn btn-info" style="color:white" href="<?php echo $base_url; ?>account/edit_shipping_address/<?php echo $add->id; ?>">Edit Address</a></p>
													<p><label><input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="radio" checked="checked">Default address</label></p>
                                        		</div>
                                                <!--account-address-wrap-col ends-->
                                               <?php  }} else { ?>
													Please add a preferred address for a faster checkout
											   <?php }	?>
                                        	</div>
                                            <!--account-address-wrap ends-->
                                        </div>
										<!--account-address-wrap-col ends-->
										<!--account-address-wrap-col ends-->
										<!--account-address-wrap-col ends-->
									</div>
									<!--account-address-wrap ends-->
								</div>
								<!--step-chunk ends-->
						</form>
					
					</div>
					<!--generic-form-wrapper ends-->  
				</div>
                            <!--account-content-wrap-addexlcude ends-->
                        </div>
      
    </div>
  </div>
</div>

   
<div class="trust hide-sm">
</div>


  <?php include('includes/footer.php'); ?>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->