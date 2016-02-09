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


@media only screen and (max-width : 480px){

#resm{width:100%;}

}
#resm > li {
    font: 15px arial;
    padding: 9px;
}
.form-row {float:left; width:100%;}
</style>
 
<div class="panel panel-dark">
    <div id="discovery-container">
     
 

    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    <?php include ('includes/dashbord_header.php'); ?>
	<div class="inner-page-content" style="margin-top:0px; margin-bottom:-50px;">
                      		<h1 class="page-title">Upgrade Your Account Section</h1>
                            
                            <div class="account-form-content-wrap">

							 <p>
							
										<ul id="resm" style="float:left;">
										
								<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="<?php echo $base_url; ?>account/edit_users" style="color:#fff;">Profile</a></li>

									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>account/mywallet">My Wallet Balance</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>account/myvoucher">My Gift Vouchers</a></li>
								 
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>user/make">Upgrade Account Section</a></li>
								 
								</ul>
							</p>
								<?php $data = $this->home_model->makeincont(); 
									//print_r($data);
								?>
                          	 <div class="generic-form-wrapper">
							 <h3><?php echo $data->title;?></h3>
							  <div>
								<?php echo $data->content;?>
								</div>
                   		<form method="post" class="login" id="form" name="form" action="<?php echo $base_url;?>user/own" onSubmit="return validate()">
									 
									<input type="hidden" name="action" value="login_own"/>
								 

								 
                                        <div class="form-row">
                                       	  
                                          		<span style="float:left;">
												<input type="radio" name="ownmake" checked id="ownmake"  value="1" class="validate[required] radio text-field"  style="width:25px;"> </span> 
												<span style="float:left;"> Insider </span> 
												
												
                                          	<!--text-field-wrap ends-->  
                                        </div>
										   <div class="form-row">
                                       	  
                                          		<span style="float:left;">
												<input type="radio" name="ownmake" id="ownmake"  value="2" class="validate[required] radio text-field"  style="width:25px;"> </span> 
												<span style="float:left;">Affiliate </span> 
												
												
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                    
                                    	<!--form row ends--> 
                                        
                                        
                                   		<!--form-row ends-->                             
                                        
                                      <div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Continue" class="submit-button" onclick="javascript:validate(); return false;"> 
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