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
#resm{width:15%;}
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
	<div class="inner-page-content" style="margin-top:0px; margin-bottom:-50px;">
                      		<h1 class="page-title">Account Details</h1>
                            
                            <div class="account-form-content-wrap">

							 <p>
										<ul id="resm">
								<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>account/edit_users" style="color:#fff;">Profile</a></li>

									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>account/mywallet">My Wallet Balance</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>account/myvoucher">My Gift Vouchers</a></li>
									<?php if($userget->insider == '0' && $userget->affiliate == '0') {  ?>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>user/make">Upgrade Account Section</a></li>
									<?php } ?>
								</ul>
							</p>
                            
                          	 <div class="generic-form-wrapper" style="margin-top:-8%;}>
                   	<form id="form1" class="form-horizontal form-groups-bordered" method="post" action="<?php echo $base_url."account/edit_users/".$id; ?>" >
						<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
						<INPUT TYPE="hidden" NAME="action" VALUE="edit_users">
						<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id; ?>">
                   		<h3 style="float: left; width: 100%;">Edit Profile</h3>
									<?php
										if($L_strErrorMessage != ""){	?>
										<div class="alert alert-danger" style="color:red;"><?php echo $L_strErrorMessage; ?></div>
									<?php  } 	?>
									<?php
										if($this->session->flashdata('msg_name') != ""){	?>
										<div class="alert alert-danger" style="color:white;"><?php echo $this->session->flashdata('msg_name'); ?></div>
									<?php  } 	?>
                        <div class="view-account-details">
							<div class="view-account-details-row">
								<div class="view-account-details-col">
								Name:                                                
								</div>                                                
								<div class="view-account-details-col">
								<?php echo $username; ?>                                              
								</div>                                          
							</div>

							<!--view-account-details-row ends-->							
							<div class="view-account-details-row">
								<div class="view-account-details-col">
								Email:                                                
								</div>                                                
								<div class="view-account-details-col">
								<?php echo $email; ?> 
								</div>       
							</div>
							<!--view-account-details-row ends-->
							<div class="view-account-details-row">
								<div class="view-account-details-col">
								Mobile Number:                                                
								</div>                                                
								<div class="view-account-details-col">
								<?php echo $phone; ?>                                     
								</div>                                          
							</div>
							<!--view-account-details-row ends-->              
                        </div>
						<!--view-account-details ends-->
						<h3>Edit Account details</h3>
						<div class="form-row">
						  <label for="Name">Name *</label>
						  <div class="text-field-wrap">
							<input name="username" type="text" class="validate[required] text-field" data-prompt-position="topRight:20" data-prompt-position="topRight:20" id="name"
							value="<?php echo $username; ?>" >
						  </div>
						<!--text-field-wrap ends-->  
						</div>
                        
						<!--form row ends-->          
						<div class="form-row" >
						  <label for="Email">Email *</label>
							<div class="text-field-wrap">
							<input name="email" type="text" readonly class="validate[required,custom[email]] text-field" data-prompt-position="topRight:20" id="Email" 
							value="<?php echo $email; ?>" >
							</div>
							<!--text-field-wrap ends-->  
						</div>
                                    	<!--form row ends-->
                                        
						<div class="form-row">
						  <label for="Email">Password *</label>
							<div class="text-field-wrap">
							<input type="password" name="password" id="Password" class="validate[required] text-field" data-prompt-position="topRight:20" data-prompt-position="topRight:20" value="<?php echo $password; ?>">
							</div>
							<!--text-field-wrap ends-->  
						</div>
						<!--form row ends-->
						
						<div class="form-row">
						  <label for="Email">Repeat Password *</label>
							<div class="text-field-wrap">
							<input type="password" id="Repassword" class="validate[required,equals[Password]] text-field" data-prompt-position="topRight:20" name="repassword">
							</div>
							<!--text-field-wrap ends-->  
						</div>
                                    	<!--form row ends-->
                                        
						<div class="form-row">
						  <label for="phone">Mobile number*</label>
							<div class="text-field-wrap">
							<input name="phone" type="text"  class="validate[required] text-field" data-prompt-position="topRight:20" data-prompt-position="topRight:20" onkeypress="return numbersonly(event)" id="phone" value="<?php echo $phone; ?>">
							</div>
							<!--text-field-wrap ends-->  
						</div>
						<!--form row ends-->
                                        
                        <div class="form-row">
                            <input type="submit" value="Save Changes" class="submit-button" >
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
 
<div class="trust hide-sm">
</div>


    <?php include ('includes/footer.php'); ?>
 <script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine('');
		});
            
	</script>
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->