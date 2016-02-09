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
<script src="<?php echo $base_url_views; ?>js/jquery-1.7.2.min.js"></script>
<style>
#selecttheme_ > img{width:590px;}
#my-account-nav li{width:14%;}
#selecttheme_{margin:20px 0 0px;}
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
.form-row .text-field{width:100%;margin-left:0%;background-color:#fff;}
.form-row .text-field-wrap{border:1px solid #aaa;width:50%;float:left;}
.form-row .text-field-wrap{margin-left:5%;float:left;}
.form-row label{float:left;margin-left:5%;}
input, button, select, textarea{margin-left:56%;margin-top:-5%;float:left;background-color:#051347;color:#fff;padding:0.8%;}
input,textarea{background-color:#fff;}
#gen{margin-left:56%;margin-top:-5%;float:left;}
.panel{border:none;}
#newemail{margin-top:0%;margin-left:-1%;}
@media only screen and (max-width : 480px){
#resm{width:100%;float:none;}
.form-row .text-field-wrap{border:1px solid #aaa;width:100%;float:left;}
input, button, select, textarea{margin-left:0%;margin-top:5%;float:left;}
#gen{margin-left:0%;margin-top:5%;float:left;}
#fitvid0{width:150%;height:1400px;margin-left:-30%;}
.image-container{float:none;}

}
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

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    <?php include ('includes/dashbord_header.php'); ?>
	<div class="inner-page-content" style="margin-top:1%;">
                      		<h1 class="page-title">Affiliate Tracking</h1>
                            <div class="account-form-content-wrap">
                            <p>
								<ul id="resm">
									<li style="border:1px solid #000;background-color:#000;text-align:center;color:#fff;"><a href="affiliate/affiliate_dash" style="color:#fff;">Home</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"><a  style="color:#fff;" href="<?php echo $base_url; ?>account/edit_users/">Edit Profile</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>affiliate/referrals">My Transactions</a></li>
									<li  style="border:1px solid #000;;background-color:#000;margin-top:2%;padding-left:2%;color:#fff;;text-align:center;"> <a style="color:#fff;" href="<?php echo $base_url; ?>affiliate/tracking">Affiliate tracking</a></li>
 								</ul>
							</p>
                          	 <div class="generic-form-wrapper" style="margin-top:-8%;">
							 	<form id="form1" class="form-horizontal form-groups-bordered" method="post" action="#" >
 									    <div class="form-row">
                                       	  <label for="Email">Your Unique Tracking Code *</label>
                                          	<div class="text-field-wrap">
                                        	<textarea type="text" name="uniquecode" id="uniquecode" class="validate[required] text-field" data-prompt-position="topRight:20" value="<?php echo $this->home_model->getaffiliatecode(); ?>"><?php echo $this->home_model->getaffiliatecode(); ?></textarea>
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Email">Paste link Of Any Stylior Page To Generate Unique Tracking Url *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="url" id="url" class="validate[required] text-field" data-prompt-position="topRight:20">
                                            
											</div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										  <button style="border: medium none; padding: 0px 10px; margin-top: -51px; line-height: 51px; width:90px;" type="button" name="Generate" onclick="javascript:trackurlfunc();" value="Generate" onlcick/> Generate </button>
                                    <div class="form-row">
                                       	  <!--<label for="Email">Your Tracking Code *</label>--> 
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="trackurl" id="trackurl" class="text-field" data-prompt-position="topRight:20" value="">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
											  <button style="border: medium none; padding: 0px 10px; margin-top: -51px; line-height: 51px; width:90px;" type="button" name="Generate" id="gen" onclick="javascript:trackurlfunc();" value="Generate" onlcick/> Copy </button>
                                        
                      
                    </form>
					 
					<table class="border_parts">
							<tbody>
							 
											<!--<div class="form-row">
                                       	  <label for="Email">Choose An Add And Share It Using URl, Embed Or Social Media.</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="socialurl" id="socialurl" class="text-field" data-prompt-position="topRight:20" value="">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div> 
										
										
								<tr>	
								 <?php  /*
										if($allafftheme != '' && count($allafftheme) > 0) {
										foreach($allafftheme as $afftheme)
										{ 
 								     ?>
									 	<!--<td colspan="1"  style="border:0px;margin:5px">
										<?php echo $afftheme->url; ?><img src="<?php echo $http_host;?>/upload/affiliate/medium/<?php echo $afftheme->image; ?>" onclick="javascript:socialurlfunc('<?php echo $afftheme->url; ?>');"  style="height: 202px; width: 100%;">
									</td>-->



										<?php }} */ ?>
									 
								</tr>
								
							</tbody>
						</table>
						
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

<!--iframe id="fitvid0" src="http://www.stylior.com/site/views/giftcard.htm" width="100%" height="669" style="border:none;margin-top:-4%" frameborder="0" scrolling="no" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe-->
<div class="fk-hidden fk-err-all unit size1of2" id="err-container_" style="color:red"></div>
	<div style="width: 95%; border: 1px solid #ccc; background:#e5e5e5; margin:0 auto; padding:0 10px 20px 10px; margin-bottom:40px;"><br>
		<input type="hidden" value="" class="myxvalue"/>
	<div>
		<div style="width:100%; float:left; font-size:15px; color:#000; font-weight:bold;">PROMOTE BELOW OFFERS</div>
		<div style="width:100%;float:left;">
			<div id="selecttheme_"></div>
			<div id="showaffliateurl_" style="width:50%;float:left;display:none;">
				<textarea readonly="readonly" style="width: 100%; margin:12px 0 20px 0; color:#000; border:solid 1px #999;" placeholder="Add a message" maxlength="140" class="fk-input" name="gifttheme_message" id="gifttheme_message"></textarea>
			</div>
		</div>
		<?php
		 foreach($affliatethemes as $pro) { ?>
		<label style="float:left; margin:0 20px 10px 0px;">
		<input style="margin:40px 4px 0 0px;" onchange="gift_theme_view(this.value, '<?php echo $pro->url; ?>');" type="radio" name="gift_theme_radio_" value="<?php echo $pro->image;?>"/> 
		<img width="200" height="100" src="<?php echo $front_base_url.'upload/affliliate/medium/'.$pro->image; ?>"/>
		</label>
		<?php } ?>
	</div>
		
        <div style="clear:both;"></div>
	</div>

 <?php include ('includes/footer.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<!-- link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/ -->
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine('');
		});
            
	</script>
	<script>
	function trackurlfunc()
	{
		var uniquecode = $("#uniquecode").val();
		var urlcode = $("#url").val();
		 
		if(uniquecode == '')
		{
			alert('You Do Not Have Your Unique Code.');
			return false;
		}
		
		if(urlcode == '')
		{
			alert('Please Enter Unique Tracking Url.');
			return false;
		}
		var myuniqueurl = urlcode += '/?tracking='+uniquecode;
		
		$("#trackurl").val(myuniqueurl);	
	 
	}
</script>
<script>
	function socialurlfunc(url)
	{
		var uniquecode = $("#uniquecode").val();
		var myuniqueurl1 = url += '/?tracking='+uniquecode;
		
		$("#socialurl").val(myuniqueurl1);	
	 
	}
	function gift_theme_view(image, imageUrl){
		var url = "<?php echo $front_base_url;?>upload/affliliate/medium/"+image;
		var imagetag = "<img src="+url+">";
		$("#selecttheme_").html(imagetag);
		$("#showaffliateurl_").show();
		var urlcode = $("#url").val();
		var uniquecode = $("#uniquecode").val();
		var myuniqueurl2 = imageUrl += '/?tracking='+uniquecode;		
		$("#gifttheme_message").val(myuniqueurl2);
	}
</script>

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->