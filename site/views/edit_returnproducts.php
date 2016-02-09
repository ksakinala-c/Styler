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

<script>
    

	function validate()
	{
		$('#form').submit();
	}	
	
	 </script>
<!-- /header -->
<main class="cd-main-content">

<style>
.action.submit-button.linkified.submit{display:none;}
</style>
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
  <?php include ('includes/dashbord_header.php'); ?>
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
      <div class="sign-in-register">
                                <h1 class="page-title">Edit Return Products</h1>
                                
                            
                                <div class="generic-form-wrapper">
                                	<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>account/editreturnproducts/<?php echo $order_id; ?>" enctype="multipart/form-data" >
										 <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
										<INPUT TYPE="hidden" NAME="action" VALUE="edit_category">
										<INPUT TYPE="hidden" NAME="return_id" VALUE="<?php echo $return_id; ?>">
										<INPUT TYPE="hidden" NAME="user_id" VALUE="<?php echo $user_id; ?>">
										<INPUT TYPE="hidden" NAME="product_id" VALUE="<?php echo $product_id; ?>">
                                      
										<div class="form-row">
                                       	  <label for="Email">Order Id </label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="order_id" id="order_id" value="<?php echo $order_id;?>" readonly class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
										<div class="form-row">
                                       	  <label for="Email">Order Date</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="cdate" id="cdate" value="<?php echo $cdate;?>" readonly class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
											<div class="form-row">
                                       	  <label for="Email">Customer</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="customer" id="customer" value="<?php echo $username;?>" readonly class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
											<div class="form-row">
                                       	  <label for="Email">Email</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="email" id="email" value="<?php echo $email;?>" readonly class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
											<div class="form-row">
                                       	  <label for="Email">Telephone</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="phone" id="phone" value="<?php echo $phone;?>" readonly class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
										<div class="form-row">
                                       	 <p> Product Information & Reason for Return </p>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										
											<div class="form-row">
												<label for="Email">Product</label>
												<div class="text-field-wrap">
												<input type="text" name="order_item_name" readonly id="order_item_name" value="<?php echo $order_item_name;?>" class="text-field">
												</div>
											</div>
											
											<div class="form-row">
												<label for="Email">Quantity</label>
												<div class="text-field-wrap">
												<input type="text" name="product_quantity" id="product_quantity" value="<?php echo $product_quantity;?>" class="text-field">
												</div>
											</div>
											
											<div class="form-row">
											<label for="Email">Return Reason </label>
											<select class="select-box" name="returnreason" id="returnreason">
											<?php if($allreturnprostatus != '' && count($allreturnprostatus) > 0)
												{ foreach($allreturnprostatus as $reason) { ?>
														<option value="<?php echo $reason->status; ?>" <?php if($reason->status == $returnreason){ echo "Selected"; }?>><?php echo $reason->status; ?></option>
												<?php  } }	 ?>
											</select>
											</div>
											
											<div class="form-row">
											<label for="Email">Opened</label>
											<select class="select-box" name="opened" id="opened">
											<option <?php if($opened=="Opened") { echo "Selected"; } ?> value="Opened">Opened </option>
											<option value="Unopened" <?php if($opened=="Unopened") { echo "Selected"; } ?>>Unopened</option>
											</select>
											</div>
											
											
											<div class="form-row">
												<label for="Email">Comment</label>
												<div class="text-field-wrap">
												<input type="text" name="comment" id="comment" value="<?php echo $comment;?>" class="text-field">
												</div>
											</div>
											
											<div class="form-row" style="display:none;">
											<label for="Email">Return Action:</label>
											<select class="select-box" name="returnaction" id="returnaction">
											<?php if($allreturnaction != '' && count($allreturnaction) > 0)
												{ foreach($allreturnaction as $reasonact) { ?>
														<option value="<?php echo $reasonact->status; ?>" <?php if($reasonact->status == $returnaction){ echo "Selected"; }?>><?php echo $reasonact->status; ?></option>
												<?php  } }	 ?>
											</select>
											</div>
											
											
											<div class="form-row" style="display:none;">
											<label for="Email">Return Status:</label>
											<select class="select-box" name="returnstatus" id="returnstatus">
											<?php if($allreturnstatus != '' && count($allreturnstatus) > 0)
												{ foreach($allreturnstatus as $status) { ?>
														<option value="<?php echo $status->status; ?>" <?php if($status->status == $returnstatus){ echo "Selected"; }?>><?php echo $status->status; ?></option>
												<?php  } }	 ?>
											</select>
											</div>
											
											
											 
                                   		<!--form-row ends-->                             
                                        
                                      <div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Continue" class="submit-button" onclick="javascript:validate(); return false;"> 
                                      </div>
                                   		<!--form-row ends-->
                                    </form>
                                </div>
                        		<!--generic-form-wrapper ends-->
                        	</div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


     <?php include ('includes/footer.php'); ?>

   
    
    


 
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->