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
@media 
only screen and (max-width: 800px)
{
#my-orders-table td:nth-of-type(1):before { content: "Profile Name"; }
#my-orders-table td:nth-of-type(2):before { content: "Height"; }
#my-orders-table td:nth-of-type(3):before { content: "Weight"; }
#my-orders-table td:nth-of-type(4):before { content: "Posture"; }
#my-orders-table td:nth-of-type(5):before { content: "Fit"; }	
#my-orders-table td:nth-of-type(6):before { content: "Shoulder Type"; }	
#my-orders-table td:nth-of-type(7):before { content: "Shoulder Angle"; }	
#my-orders-table td:nth-of-type(8):before { content: "Measurement"; }	
#my-orders-table td:nth-of-type(9):before { content: "Delete"; }
}
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
<a href="http://www.stylior.com/3dshirt/">	
    <section class="category-header">
		<div class="titalbarmainuss">
		 <!--<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>-->
		</div>
	</section>
</a>
<div class="panel panel-dark">
  <div id="discovery-container">
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
    <?php include ('includes/dashbord_header.php'); ?>
<div class="inner-page-content" style="margin-top:0px; margin-bottom:-50px;">
	 
		<h1 class="page-title">My Measurement</h1>
						 
					 <span style="color:red;float:left;padding-right:65px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('flashError')!=""){ echo $this->session->flashdata('flashError'); } ?></b></span>
					 
			<div id="my-orders-table-wrap">
				<table id="my-orders-table">
					<thead>
					<tr>
							<th>Profile Name</th>
 							<th>Height</th>
							<th>Weight</th>
							<th>Posture</th>
							<th>Fit</th>
							<th>Shoulder Type</th>
							<th>Shoulder Angle</th>
							<th>Measurement</th>
							<th>Delete</th>
  					</tr>
					</thead>
					<tbody>
						
						<?php 
 						if($allusermeasure != "" && count($allusermeasure) >= 0){
 						foreach($allusermeasure as $orderitems)
						{
  						?>
						<tr class="odd">
							<td class=""><?php echo $orderitems->userprofilename;   //echo $this->account_model->getstylename($orderitems->style_id);?></td>
							<!-- td class=""><?php echo $this->account_model->getproname($orderitems->pid);?></td -->
							<td class=""><?php echo $orderitems->metricft; ?> feet <?php echo $orderitems->metricinch; ?> Inches</td>
 							<td class=""><?php echo $orderitems->metricweight; ?></td>
 							<td class="">
 									<?php $post = $orderitems->posture;
									if($post == "1") { echo "Average"; }
									if($post == "2") { echo "Forward Learning"; }
									if($post == "3") { echo "Straight"; }
									?>
							</td>
							<td class=""><?php $post = $orderitems->fit; 
								if($post == "1") { echo "Regular"; }
								if($post == "2") { echo "Tailored"; }
								if($post == "3") { echo "Slim"; }
							 ?></td>
							<td class=" "><?php echo ucfirst($orderitems->shouldertype);  ?></td>
							<td class=" "><?php echo ucfirst($orderitems->shoulderangle);  ?></td>
							<td class="">
								<?php if($orderitems->type == '1') { echo "Standard Sizes"; } ?>
								<?php if($orderitems->type == '2') { echo "Shirt Measurement"; } ?>
								<?php if($orderitems->type == '3') { echo "Body Measurement"; } ?>
								<br />	
								<?php 
								$serdata = $orderitems->serializedata;
								$uns     = unserialize($serdata);
 								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
 								$array2 = explode(',', $uns[1]);  
 								for($k='0';$k<count($array1);$k++){
									 echo $this->account_model->bodypartname($array1[$k])." - ".$array2[$k]." <br/>";  
								}
								} else {
									
									echo "-";
								}
							?>
							</td>
							<td colspan="">
							 	<a class="" title="Delete" href="<?php echo $base_url;?>cart/mapping/<?php echo $orderitems->pid; ?>/<?php echo $orderitems->id; ?>" style="color:red" >Edit</a>&nbsp;/&nbsp;<a class="" title="Delete" onclick="disapprove('<?php echo $base_url."account/deletedata/"; ?><?php echo $orderitems->id; ?>');" href="javascript:void(0)" style="color:red" >Delete</a>
							</td>
						</tr>					
					 
						
						<?php 	
							 
							} } else { ?>
						<tr><td colspan="11"><p>Measurement data no available.</p></td></tr>
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
<script>
function disapprove(url){
 var t = confirm('Are you sure you want to delete?');
 if(t){
  window.location.href = url;
 } else {
  return false; 
 }

}
</script>
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->