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
	<div class="inner-page-content" style="margin-top:1%;">
                      		<h1 class="page-title">Affiliate Dashboard</h1>
                            <div class="account-form-content-wrap">
                            <p>
								<ul id="resm">
									<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>affiliate/affiliate_dash" style="color:#fff;">Home</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>account/edit_users/">Edit Profile</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>affiliate/referrals">My Transactions</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>affiliate/tracking">Affiliate tracking</a></li>
 								</ul>
							</p>
                          	 <div class="generic-form-wrapper" style="margin-top:-8%;">
							 	<form id="form1" class="form-horizontal form-groups-bordered" method="post" action="#" >
						 
						            
								<div class="form-row">
						  
						  <?php
						 
						  echo $this->home_model->affiliatecontent(); ?>
						 
						</div>
                                   
                                        
                      
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


    <?php include ('includes/footer.php'); ?>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->