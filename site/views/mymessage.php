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
<script>
	function validate()
	{
		 
		var adminmessage = $("#adminmessage").val();
		if(adminmessage == '')
		{
			alert('Please Enter Message.');
			return false;
		}
		
		 
        
		 		
		$('#dataform').submit();
	}	
	
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
	<section class="category-header">
		<div class="titalbarmainuss">
			<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>
		</div>
	</section>
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
		<h1 class="page-title">Chat Message</h1>
			 
			 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			 
			 
			<div id="my-orders-table-wrap">
			
			<form class="form-horizontal form-groups-bordered" role="dataform" id="dataform"  method="post" action="<?php echo $base_url;?>account/add_message/<?php echo $this->uri->segment(3); ?>" enctype="multipart/form-data" onsubmit="javascript:validate(); return false;">
 			<div class="panel-body">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
			<INPUT TYPE="hidden" NAME="userid" VALUE="<?php echo $this->session->userdata('userid'); ?>">
			<INPUT TYPE="hidden" NAME="action" VALUE="insertmessage">
			
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Message :</label>
					<div class="col-sm-5">
						<input type="text" id="adminmessage" name="adminmessage" class="form-control" value="">
					</div>
				</div>
				 
				<input class="btn btn-primary btn-send-message-1" name="submit" type="submit" value="Submit" class="submit-button" > 
                                   
			</form>
<table id="my-orders-table">
					<thead>
					<tr>
					 
						<th>Date</th>
						<th>Message</th>
						 
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($allmessage != "" && count($allmessage) >= 0){					
							foreach($allmessage as $order)
							{	
							 
						?>
						<tr>
							 
							<td><p><?php echo $order->addeddate; ?></p></td>
							<?php if($order->adminreply =='0'){ ?>
							<td><p style="color:green;"><?php echo $order->message; ?></p></td>
							 <?php } else { ?>
								<td><p style="color:blue;"><?php echo $order->message; ?></p></td> 
							 <?php } ?>
						</tr>						
					 
						
						<?php }} else { ?>
						<tr><td colspan="2"><p align="center">No Any Message Found.</p></td></tr>
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