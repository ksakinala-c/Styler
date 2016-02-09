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

<style>
.carousel{width:850px;}
.prev{width:20px; float:left; margin-top:17%; margin-right:-5%;}

@media only screen and (max-width : 480px){
.carousel{width:250px;}
#car{width:320px;}

.prev{width:20px; float:left; margin-top:50%; margin-right:-5%;}
#scar{margin-top:-50%;}

}


</style>
 <script>
    	function subfilters(){
			var measureid = $("#measureid").val();
			if(measureid == '')
			{
				alert('Please Enter E-mail.');
				return false;
			}
    		document.filters1.submit();
    	}
</script>
<main class="cd-main-content">
<div class="category-content">
	   
       <div class="category-grid-view">
        
	      <div class="container">
            <table width="90%" border="1" class="mesure">
            	<tr>
                <td height="80" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">
                  <strong>YOUR MEASUREMENT PROFILE</strong><br>                   
                   </span>   </td>
              </tr>
                <tr>
                  <td height="90" colspan="2" align="center" valign="bottom">
                  <p  id="mes">Using our instructional guides, please fill out your measurements profile. With the help of a friend, it will take 15 minutes. <br>
                    Wear a well-fitting shirt and pair of pants during the process.</p>
                  </td>
                </tr>
              <tr>
                <td colspan="2" align="center" valign="middle">
				<table width="100%" align="center" id="scar">
                  <tr>
                  <td width="2%" align="center">&nbsp;</td>
					<?php if($this->session->userdata('userid') !=""){
								$uid=$this->session->userdata('userid');
								$measureprofile = $this->home_model->allusermeasurements($uid);
							}
					?>
					<?php if($this->session->userdata('saveid') != '') { ?>			
						<form action="<?php echo $base_url; ?>cart/saveadd3d" method="post" id="filters1" name="filters1" >
					<?php } else { ?>
						<form action="<?php echo $base_url; ?>cart/add" method="post" id="filters1" name="filters1" >
					<?php } ?>
					<td width="55%" align="center" class="mesure1" id="mes1">
					
                    <!-- table width="100%" border="0" --> 
						<?php if($measureprofile != '' && count($measureprofile) > 0) { ?>
						<div class="custom-container bounceout">
						<a href="#" class="prev"><img src="<?php echo $base_url_views; ?>newheader/img/left-arrow.png" /></a>
						<div class="carousel" id="car" style="visibility:hidden; left:-5000px; border:#ccc solid 3px; padding:20px; 20px;box-shadow:3px 3px 3px 2px grey;">
						<ul>
						<?php 
							foreach($measureprofile as $mdetail)
							{
								 $i=0;
 							?>
							 
							<li style="width:50%; float:left; text-align:left; border-right:#ccc solid 1px; margin-left:10px; overflow:hidden; height:300px; "> 
							<table>
							
							<tr><td colspan="2" align="center">
							<b><label>
							<input type="radio" <?php if($i == "0") {?> checked <?php } ?> name="measureid" id="measureid" value="<?php echo $mdetail->id; ?>"></label> <br/> <b><?php echo $mdetail->userprofilename; ?></b> 
							</td></tr>
							
							<tr><td>

							<strong>Height</strong> </td><td style="padding-left:3%;">  <?php echo $mdetail->metricft; ?> feet <?php echo $mdetail->metricinch; ?> Inches 

							</td></tr>

							<tr><td>
							<strong>Weight</strong>  </td><td style="padding-left:3%;"> <?php echo $mdetail->metricweight; ?>   </td></tr>
							<!--<strong>Metric Inch</strong> : <?php echo $mdetail->metricinch; ?> IN <br>
							strong>Imp Height</strong> : <?php echo $mdetail->impheight; ?><br>
							<strong>Imp Weight</strong> : <?php echo $mdetail->impweight; ?> IN<br -->
							<tr><td>
							<strong>Posture</strong> </td><td style="padding-left:3%;">
							<?php 
									$post=$mdetail->posture; 
									if($post == "1") { echo "Average"; }
									if($post == "2") { echo "Forward Learning"; }
									if($post == "3") { echo "Straight"; }
								?>
							</td></tr>

							<tr><td>
							<strong>Shoulder Type</strong> </td><td style="padding-left:3%;">
							<?php 
									echo ucfirst($mdetail->shouldertype); 
 								?>
							</td></tr>
							<tr><td>
							<strong>Shoulder Angle</strong> </td><td style="padding-left:3%;">
							<?php 
									echo ucfirst($mdetail->shoulderangle); 
								?>
							</td></tr>
							<tr><td>
							<strong>Fit</strong> </td><td style="padding-left:3%;">
							<?php 
								 $post = $mdetail->fit; 
								if($post == "1") { echo "Regular"; }
								if($post == "2") { echo "Tailored"; }
								if($post == "3") { echo "Slim"; }	
								?>
							</td></tr>
							<tr><td>
							<strong><?php if($mdetail->type == '1') { echo "Standard Sizes"; } ?>
							<?php if($mdetail->type == '2') { echo "Shirt Measurement"; } ?>
							<?php if($mdetail->type == '3') { echo "Body Measurement"; } ?>
							 </strong> </td><td style="padding-left:3%;">
							<span><a href="javascript:void(0);" onclick="showhidefn('<?php echo $mdetail->id; ?>');">Read More</a></span>


 							<span id="<?php echo $mdetail->id; ?>" style="display:none; ">
							<?php
 							$uns = unserialize($mdetail->serializedata);
							 
							if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
								for($k='0';$k<count($array1);$k++){
									 echo $this->account_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
								} else {
									
									echo "Not available";
								}
							?> 
							</span>
							 </table>
						</li>
							<?php $i++; }  ?>
							</ul>
</div>
        <a href="#" class="next" style="width:20px; float:right; margin-top:-20%;"><img src="<?php echo $base_url_views; ?>newheader/img/right-arrow.png" /></a>
        <div class="clear"></div>
    </div>
                     							<div class="btn btn-primary btn-send-message-1" style="margin-top:2%;"><a onClick="javascript:subfilters();" href="javascript:void(0);" style="color:#fff;">PROCEED TO CART</a></div>
							  
							<?php } else { ?>
							<p>
								Oops! It seems you have not saved any sizes. Get yourself measured now!
							</p>
							<?php } ?>


                    </td>
					</form>
                    <td width="25%" align="center" class="mesure1" style="padding-left:20px;">
                    <table width="60%" align="left">                        
                        <tr>
                          <td height="30" align="center" valign="top"><strong>Create your New profile</strong></td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">
                         	 <div class="form-actions" id="bt">
                                    <button type="button" onclick="window.location.href = '<?php echo $base_url; ?>cart/mapping/<?php echo $productid; ?>'" class="btn btn-primary btn-send-message-2"  style="margin:5px; 0px 0px 5px;">START HERE</button>	
                            </div>                                </td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                      </table>
                    </td>                    
                  </tr>
                </table></td>
              </tr>                            
            </table>
            
	      </div><!--container-->
	   </div><!--category-grid-view-->


</div>
 
 <div class="trust hide-sm">
</div>
<script>
	function showhidefn(id){
		$("#"+id).toggle();
	}
</script>
  </main>


<?php include ('includes/footer.php'); 

?>
<script type="text/javascript">
        jQuery(function() {
            jQuery(".bounceout .carousel").jCarouselLite({
                btnNext: ".bounceout .next",
                btnPrev: ".bounceout .prev",
                easing: "easeOutBounce",
                speed: 1000,
			<?php if ($this->agent->is_mobile()) { ?>
				visible: 1
			<?php } else { ?>
				visible: 2
			<?php } ?>		
			
            });
        });
</script>
<link rel="stylesheet" media="all" type="text/css" href="<?php echo $base_url_views; ?>js/style-demo.css">
<script src="<?php echo $base_url_views; ?>js/jquery.easing-1.3.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.mousewheel-3.1.12.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.jcarousellite.js"></script>
 <!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->