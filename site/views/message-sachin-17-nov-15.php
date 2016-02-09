
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
.action.submit-button.submit{display:none;}	
</style>
	 
<div class="panel panel-dark">
 
  <div id="discovery-container">
  
    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    <?php include ('includes/dashbord_header.php'); ?>
	<div class="inner-page-content" >
                      		 
                            
                            <div class="account-form-content-wrap">
                            
                          	 <div class="generic-form-wrapper">
                   	<form id="form1" class="form-horizontal form-groups-bordered" method="post" action="<?php echo $base_url."insider/message/".$this->uri->segment(3)." "; ?>" >
						<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
						<INPUT TYPE="hidden" NAME="action" VALUE="add_message">
						 
                   		<h3>Write Your Message Here </h3>
									 <?php
										if($L_strErrorMessage != ""){	?>
										<div class="alert alert-danger" style="color:white;"><?php echo $L_strErrorMessage; ?></div>
									<?php  } 	?>
									<?php 
										if($this->session->flashdata('msg_name') != ""){	?>
										<div class="" style="color:green;"><?php echo $this->session->flashdata('msg_name'); ?></div>
									<?php  }  ?>
 
						<!--view-account-details ends-->
						 
					 
						           
						<div class="form-row">
						  <label for="Email">Message *</label>
							<div class="text-field-wrap">
							<textarea name="message" type="text" class="text-field" id="message" 
							value="" ></textarea>
							</div>
						 
						</div>
                                   
                                        
                        <div class="form-row">
                            <input type="submit" value="Send" class="submit-button" >
                        </div>
                        <!--form-row ends-->
                    </form>
                </div>
                          	<!--generic-form-wrapper ends-->  
                            
                            </div>
                            <!--account-content-wrap-addexlcude ends-->
                        </div>
      
    </div>
  </div>
</div>
 
<div class="inner-page-content">
		<h1 class="page-title">Conversations : </h1>
			<!--div class="account-dashboad-intro">Create topics and share your views with us.</div-->
			 
			<div id="my-orders-table-wrap">
				<table id="my-orders-table">
					<thead>
					<tr>
						<th>Added Date</th>
						<th>Topic Name</th>
						<th>Send Message</th>
						<th>Admin Reply</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 		
							if($allmessage != "" && count($allmessage) >= 0){					
							foreach($allmessage as $message)
							{	
							 
						?>
						<tr>
							<td><?php echo $message->addeddate; ?></td>
							<td><?php echo $this->insider_model->gettopic($message->topicid); ?></td>
							<td><?php echo $message->message; ?></td>
							<td><?php if($message->adminmessage !="") { echo $message->adminmessage; } else { echo "Not Replied."; 	} ?></td>
							 
						</tr>						
							<?php }} else { ?>
						<tr><td colspan="4"><p align="center">No Message Found.</p></td></tr>
					 <?php } ?>
					</tbody>
				</table>
			</div>  
</div>

 
    <?php include ('includes/footer.php'); ?>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->