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

function get_fit(bid)
	{
	   //alert(cid);                                                                                                                                                                                      
		//country id
		var url = '<?php echo $base_url ?>cart/show_fit/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'bid='+bid,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('prod1').innerHTML = msg ;
		}
		});
	}
	function get_size(fitid)
	{
	   // alert(fitid);                                                                   
		//country id
		var url = '<?php echo $base_url ?>cart/show_size/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'fitid='+fitid,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('prod2').innerHTML = msg ;
		}
		});
	}
</script>
<!-- /header -->
<main class="cd-main-content">

<style>
@media only screen and (max-width : 480px){
#fb{width:50%;margin:0 auto;float:none;padding-bottom:5px;}
#cartro{width:100%;}
}
</style>
 

<style>
.action.submit-button.linkified.submit{display:none;}
</style>
<div class="panel panel-dark">


  

   
    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
      <div class="category-grid-view" style="margin-top:50px;">
        
	      <div class="container" >
		   
            <main class="container inner-bottom-xs">
				<article class="post post-single fadeIn" style="width:70%;">
	  <?php
	 
										if($this->session->userdata('measuredid') !="") {
											$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
										} else
										{
											$mudata="";
										}
									
										?>
                                	<p>
										<a href="<?php echo $base_url; ?>cart/measure">STANDARD SIZES</a>&nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>cart/brand/" ><b style="color:blue;">BRAND SIZES</b></a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/measured">SHIRT MEASUREMENT</a>  &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/bmeasured" >BODY MEASUREMENT</a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/customerassist" >CUSTOMER ASSIST</a>
									</p>

                                <p>Do you have a favourite fit? Let us know. </p>		
                                	
                                <div class="generic-form-wrapper">
                                	<form method="post" class="login" id="form" name="form" action="<?php echo $base_url;?>cart/mvalue">
									<input type="hidden" name="bid" id="bid"  value="<?php echo $this->uri->segment(3); ?>">
									<input type="hidden" value="4" name="type"/>
								       <div class="form-row">
										<label for="Email">Brand *</label>
											<select class="validate[required] select-box" data-prompt-position="topRight:5" name="brandid" id="brandid" Onchange="get_fit(this.value);" >
												
												<option value="">Select Brand</option>
												<?php 
												if($allbrand !="" && count($allbrand)>0){
												foreach ($allbrand as $brand) 
												{
												?>
												<option value="<?php echo $brand->id; ?>" <?php if($mudata !="" && $mudata->brandid == $brand->id) { echo "Selected"; } ?>><?php echo $brand->bname; ?></option>
												<?php } } ?>
											 
												 
											</select>
										</div>
										
										<div class="form-row">
										<label for="Email">Fit *</label>
										<span id='prod1'>
											<select class="validate[required] select-box" data-prompt-position="topRight:5" name="fitid" id="fitid" Onchange="get_size(this.value);" >
												<option value="">Select Fit</option>
												<?php 
												if($allfit !="" && count($allfit)>0){
												foreach ($allfit as $fit) 
												{
												?>
												<option value="<?php echo $fit->id; ?>" <?php if($mudata !="" && $mudata->fitid == $fit->id) { echo "Selected"; } ?>><?php echo $fit->fitname; ?></option>
												<?php } } ?>
											</select>
										</span>
										</div>
										
										<div class="form-row">
										<label for="Email">Size *</label>
											<span id='prod2'>
											<select class="validate[required] select-box" data-prompt-position="topRight:5" name="sizeid" id="sizeid">
												
												<option value="">Select Size</option>
												<?php 
												if($allsize !="" && count($allsize)>0){
												foreach ($allsize as $size) 
												{
												?>
												<option value="<?php echo $size->id; ?>" <?php echo $fit->id; ?>" <?php if($mudata !="" && $mudata->sizeid == $size->id) { echo "Selected"; } ?>><?php echo $size->size; ?></option>
												<?php } } ?>
											</select>
											</span>
										</div>
                                        <div class="form-row">
										<label for="message">Profile Name:</label>
											<span id='prod2'>
											 <input type="text"  name="profilename" id="profilename" value="<?php echo $mudata->userprofilename; ?>" class="validate[required]" />
											</span>
										</div> 
                                        <div class="form-row">
										<label for="message">Comments:</label>
											<span id='prod2'>
											<textarea name="comments" style="width:100%; border:1px solid #000;" placeholder="<?php if($mudata !="" && $mudata->userprofilename != '') { echo $mudata->userprofilename; } else { ?>Tell us More <?php } ?> "  cols="" rows=""></textarea>
											</span>
										</div>
                                    	<!--form row ends--> 
                                        
                                       
                                   		<!--form-row ends-->                             
                                        
                                      <div class="form-row">
                                        <a href="<?php echo $base_url; ?>cart/fitNew/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px; color:white;">Back</a>
                                        <input class="btn btn-info btn-send-message-2b" name="login" type="submit" value="Submit"> 
                                        <!-- span style="float:right;"><a href="<?php echo $base_url;?>cart/measure">Skip this page</a></span -->
                                      </div>
                                   		<!--form-row ends-->
                                    </form>
                                </div>
                        		<!--generic-form-wrapper ends-->
								</article>
                        	</div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


     <?php include ('includes/footer.php'); ?>

   
    <link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form").validationEngine('');
		});
            
	</script>
    


 
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->