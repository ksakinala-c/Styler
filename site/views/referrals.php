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

<link href="<?php echo $base_url_views; ?>css/common_o2.1-b1479bb5c5303159d1392e5538a68644.css" media="all" rel="stylesheet" type="text/css">
<style>
#my-orders-table-wrap{width:80%;margin-left:20%;margin-top:-9%;}
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
#my-orders-table-wrap{width:100%;margin-left:0%;margin-top:0%;}
}
</style>
	 
<div class="panel panel-dark">

  <div id="discovery-container">
     

    
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">






   <link href="<?php echo $base_url_views; ?>css/responsive_table.css" rel="stylesheet">

 
      
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content"  style="margin-top:0px;margin-bottom:-20px;">
		<h1 class="page-title">My Referral Users</h1>
		 <div class="account-form-content-wrap">
                            <p>
									<ul id="resm">
									<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>insider/insider_dash" style="color:#fff;">Home</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>insider/referrals">My Referrals</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>insider/invite">Invites</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a style="color:#fff;" href="<?php echo $base_url; ?>insider/topic">Messages</a></li>
								</ul>
							</p>
			 
			  
			<div id="my-orders-table-wrap">
<table id="my-orders-table">
					<thead>
					<tr>
						 
						<th>Join Date</th>
						<th>Username</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Status</th>
						
					</tr>
					</thead>
					<tbody>
					<?php 			
							if($allinviters != "" && count($allinviters) >= 0){					
							foreach($allinviters as $refuser)
							{	
							 
						?>
						<tr>
							 
							<td><p><?php echo $refuser->joindate; ?></p></td>
							<td><p><?php echo $refuser->username; ?></p></td>
							<td><p><?php echo $refuser->email; ?></p></td>  
							<td><p><?php echo $refuser->phone; ?></p></td>
							<td><p><?php echo $refuser->enable; ?></p></td>	
							
											 
											
											 
						</tr>						
					 
						
						<?php }} else { ?>
						<tr><td colspan="5"><p align="center">No Referrals User Found.</p></td></tr>
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