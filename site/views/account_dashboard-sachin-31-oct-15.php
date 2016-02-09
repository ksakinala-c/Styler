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


#cate{margin-top:0px; margin-bottom:-50px;}

@media only screen and (max-width : 850px){
#cate{margin-top:-50%;}


@media only screen and (max-width : 480px){
#cate{margin-top:-95%;}
</style>
<a href="<?php echo $http_host;?>3dshirt/"><section class="category-header">
		<div class="titalbarmainuss">
			  <!--<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>-->
		</div>
</section></a>

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
      
      <div class="inner-page-content" id="cate">
                      		<h1 class="page-title">Account Dashboard 
								<?php if($this->session->flashdata('msg1') !=""){ ?>
							<p  style="float:right;color:green;"><?php echo $this->session->flashdata('msg1'); ?></p>
							<?php } ?>
							<?php if($this->session->flashdata('accountitem') !=""){ ?>
							<p  style="float:right;color:green;"><?php echo $this->session->flashdata('accountitem'); ?></p>
							<?php } ?>
							</h1> 
                          	
                            <div class="account-dashboad-intro">
                            Manage your personal information and track your orders by clicking the sections below. Your Order items are not the same as your cart items (link at the top of this page). The cart is the set of items that have been readied for purchase but have not been paid for.
                            
                            </div>
                            <!--account-dashboad-intro ends-->
                            
                            <ul id="dashboard-links">
                            	<li>
                                <a href="<?php echo $base_url; ?>account/edit_users">
                                	<p class="link-name">Account Details <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/user.png" /></p>
                                	
                                
                                
                                </a>
                                <p class="link-desc">View and Edit your account information such as the account name, email, password, date of birth</p>
                                </li>
                            	<li>
                                <a href="<?php echo $base_url; ?>account/account_address_book">
                                	<p class="link-name">Address Book <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/address_book.png" /></p>
                                	
                                
                                
                                </a>
                                <p class="link-desc">View and Edit your Shipping and Billing addresses</p>
                                </li>
                                <li>
                                <a href="<?php echo $base_url; ?>account/account_my_orders">
                                	<p class="link-name">My Orders <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/orders_icon.svg" /></p>

                                
                                
                                </a>
                                                                	<p class="link-desc">View and track your purchases. This is not the same as your cart (link at the top of this page). The cart is the set of items that have been readied for purchase but have not been paid for.</p>
                                </li>
                            
                            </ul>


							<ul id="dashboard-links">
                            	<li>
                                <a href="<?php echo $base_url; ?>account/mywishlist">
                                	<p class="link-name">My Wishlist <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/wishlist.png" /></p>
                                	
                                
                                
                                </a>
                                <p class="link-desc">View and Edit your account information such as the account name, email, password, date of birth</p>
                                </li>
                            	<li>
                                <a href="<?php echo $base_url; ?>account/measure">
                                	<p class="link-name">View Measure <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/measure.png" /></p>
                                	
                                
                                
                                </a>
                                <p class="link-desc">View and Edit your Shipping and Billing addresses</p>
                                </li>
                                <li>
                                <a href="<?php echo $base_url; ?>account/savedata">
                                	<p class="link-name">Save Style <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/style.png" /></p>

                                
                                
                                </a>
                                                                	<p class="link-desc">View and track your purchases. This is not the same as your cart (link at the top of this page). The cart is the set of items that have been readied for purchase but have not been paid for.</p>
                                </li>
                            
                            </ul>
						  <?php if($result->insider == '1') { ?>
							<ul id="dashboard-links">
                            	<li>
                                <a href="<?php echo $base_url; ?>insider/insider_dash">
                                	<p class="link-name">Insider <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/insider-img.png" /></p>
                                </a>
                                <p class="link-desc">View Your Referral, Send Invites & Messages.</p>
                                </li>
                            </ul>
							<?php } ?>
							
							 <?php if($result->affiliate == '1') { ?>
							<ul id="dashboard-links">
                            	<li>
                                <a href="<?php echo $base_url; ?>affiliate/affiliate_dash">
                                	<p class="link-name">Affiliate <span class="arrow">&rsaquo;</span></p>
                                    <p class="image-banner"><img src="<?php echo $base_url_views; ?>images/insider-img.png" /></p>
                                </a>
                                <!--p class="link-desc">View Your Referral, Send Invites & Messages.</p-->
                                </li>
                            </ul>
							<?php } ?>
							
							 
                             <!--dashboard-links ends-->
                            <div style="clear:both;"></div> 
                        </div>
     </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>
<?php include ('includes/footer.php'); ?>
  </body>
</html>