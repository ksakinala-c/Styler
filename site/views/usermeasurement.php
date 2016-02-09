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
/*#scar{margin-top:-50%;}*/
}
</style>
 <style type="text/css">
        .cbp-fwslider {
			position: relative;
			margin: 0 0 10px;
			overflow: hidden;
			padding: 40px 0 60px;
		}
		
		.cbp-fwslider ul {
			margin: 0;
			padding: 0;
			white-space: nowrap;
			list-style-type: none;
		}
		
		.cbp-fwslider ul li {
			-webkit-transform: translateZ(0);
			-moz-transform: translateZ(0);
			transform: translateZ(0);
			float: left;
			display: block;
			margin: 0;
			padding: 0;
		}
		
		.cbp-fwslider ul li > a,
		.cbp-fwslider ul li > div {
			display: block;
			text-align: center;
			outline: none;
		}
		
		.cbp-fwslider ul li > a img {
			border: none;
			display: block;
			margin: 0 auto;
			max-width: 75%;
		}
		
		.cbp-fwslider nav span {
			position: absolute;
			top: 50%;
			width: 50px;
			height: 100px;
			color: #333;
			font-size: 50px;
			text-align: center;
			margin-top: -50px;
			line-height: 100px;
			cursor: pointer;
			font-weight: normal;
		}
		
		.cbp-fwslider nav span:hover {
			color: #000;
		}
		
		.cbp-fwslider nav span.cbp-fwnext {
			right: 0px;
		}
		
		.cbp-fwslider nav span.cbp-fwprev {
			left: 0px;
		}
		
		.cbp-fwdots {
			position: absolute;
			bottom: 0px;
			white-space: nowrap;
			text-align: center;
			width: 100%;
			display:none;
		}
		
		.cbp-fwdots span {
			display: inline-block;
			width: 18px;
			height: 18px;
			background: #ddd;
			margin: 4px;
			border-radius: 50%;
			cursor: pointer;
		}
		
		.cbp-fwdots span:hover {
			background: #999;
		}
		
		.cbp-fwdots span.cbp-fwcurrent {
			background: #47a3da;
			box-shadow: 0 0 0 2px #47a3da;
			-webkit-transition: box-shadow 0.2s ease-in-out;
			-moz-transition: box-shadow 0.2s ease-in-out;
			transition: box-shadow 0.2s ease-in-out;
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
	   <?php if($this->session->userdata('userid') !=""){
								$uid=$this->session->userdata('userid');
								$measureprofile = $this->home_model->allusermeasurements($uid);
							}
					?>
					
       <div class="category-grid-view">
			<div class="container">	
			<?php if($this->session->userdata('saveid') != '') { ?>			
						<form action="<?php echo $base_url; ?>cart/saveadd3d" method="post" id="filters1" name="filters1" >
					<?php } else { ?>
						<form action="<?php echo $base_url; ?>cart/add_direct" method="post" id="filters1" name="filters1" >
					<?php } ?>
			<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
				<?php if($measureprofile != '' && count($measureprofile) > 0) { ?>
				<?php $i=0;
							foreach($measureprofile as $mdetail)
							{
								 
 							?>
					<li>
                    	<div class="table-responsive">
                            <table align="center" class="table table-bordered table-hover">
                              <tbody>
							  <tr><td colspan="2" align="center">
								<b><label>
								<input type="radio" <?php if($i == "0") {?> checked='checked' <?php } ?> name="measureid" id="measureid" value="<?php echo $mdetail->id; ?>"></label> <br/> <b><?php echo $mdetail->userprofilename; ?></b> 
								</td></tr>
                               <tr><td>
 								<strong>Height</strong> </td><td >  <?php echo $mdetail->metricft; ?> feet <?php echo $mdetail->metricinch; ?> Inches 

								</td></tr>
                               <tr><td>
							<strong>Weight</strong>  </td><td style="padding-left:3%;"> <?php echo $mdetail->metricweight; ?>   </td></tr>
						 
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
							<?php if($mdetail->type == '4') { echo "Brand Sizes"; } ?>
							 </strong> </td><td style="padding-left:3%;">
							<span><a href="javascript:void(0);" onclick="showhidefn('<?php echo $mdetail->id; ?>');">Read More</a></span>


 							<span id="<?php echo $mdetail->id; ?>" style="display:none; ">
							<br/>
							<?php 
								if($mdetail->type == '4') { ?>
										Brand - <?php echo $this->home_model->mbrandname($mdetail->brandid); ?><br />	
										Fit - <?php echo $this->home_model->mfitname($mdetail->fitid); ?><br />	
										Size - <?php echo $this->home_model->msizename($mdetail->sizeid); ?><br />	
							    <?php } else {
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
							}
							?> 
							</span>
                              </tbody>
                            </table>
                        </div><!--end of .table-responsive-->
                    </li>
					 	<?php $i++; }  ?>
						<?php } else { ?>
							<p>
								Oops! It seems you have not saved any sizes. Get yourself measured now!
							</p>
							<?php } ?>
				</ul>
			</div>
         </form>   
            <div class="col-lg-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:10px;"><button onclick="window.location.href = '<?php echo $base_url; ?>cart/fitNew/<?php echo $productid; ?>'" class="btn btn-info btn-block">CREATE NEW PROFILE</button></div>
			<?php if($measureprofile != '' && count($measureprofile) > 0) { ?>	
			   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:10px;"><button onClick="javascript:subfilters();" href="javascript:void(0);" class="btn btn-info btn-block">PROCEED TO CART</button></div>       
            <?php } ?>
			</div>
	   
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
<script src="<?php echo $base_url_views; ?>js/jquery.cbpFWSlider.min.js"></script>
<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>
<!-- script type="text/javascript">
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
<script src="<?php echo $base_url_views; ?>js/jquery.jcarousellite.js"></script -->
 <!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->