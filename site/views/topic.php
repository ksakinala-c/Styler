
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
 <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">
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
#resm{width:15%;}
@media only screen and (max-width : 480px){
#resm{width:100%;float:none;}
}
</style>
 <div class="panel panel-dark">
 
  <div id="discovery-container">
      
   

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    <?php include ('includes/dashbord_header.php'); ?>
	<div class="inner-page-content" style="margin-top:5px;">
	 <div class="account-form-content-wrap">
                            <p>
								 <ul id="resm">
									<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>insider/insider_dash" style="color:#fff;">Home</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>insider/referrals">My Referrals</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>insider/invite">Invites</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a style="color:#fff;" href="<?php echo $base_url; ?>insider/topic">Messages</a></li>
								</ul>
							</p>
                      		 
                            
                            <div class="account-form-content-wrap">
                            
                          	 <div class="generic-form-wrapper" style="margin-top:-10%;">
                   	<form id="form1" class="form-horizontal form-groups-bordered" method="post" action="<?php echo $base_url."insider/topic/"; ?>" >
						<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
						<INPUT TYPE="hidden" NAME="action" VALUE="add_topic">
						 
                   		<h3>Create Topic</h3>
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
						  <label for="Email">Topic Name *</label>
							<div class="text-field-wrap">
							<input name="topicname" type="text" class="text-field" id="topicname" 
							value="" >
							</div>
						 
						</div>
                                   
                                        
                        <div class="form-row">
                            <input type="submit" value="Create" class="submit-button" >
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

<div class="inner-page-content"  style="margin-top:-25px;">
		<h1 class="page-title">Topics List</h1>

			<div class="account-dashboad-intro">Create topics and share your views with us.</div>
			 
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						<th>Topic Name</th>
						<th>Added Date</th>
						<th>Message</th>
						 
						
					</tr>
					</thead>
					<tbody>
					<?php 		
							if($alltopic != "" && count($alltopic) >= 0){					
							foreach($alltopic as $topics)
							{	
							 
						?>
						<tr>
							<td><?php echo $topics->topicname; ?></td>
							<td><?php echo $topics->added_date; ?></td>
							<td> 
							<p><a href="<?php echo $base_url; ?>insider/message/<?php echo $topics->id; ?>" class="copy-order">Message</a></p></td>
						</tr>						
							<?php }} else { ?>
						
						 
						<tr><td colspan="3"><p align="center">No Topic Found.</p></td></tr>
					 <?php } ?>
					</tbody>
				</table>
			</div>  
 
 
</div>


    <?php include ('includes/footer.php'); ?>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->