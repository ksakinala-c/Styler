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



<!-- /header -->
<main class="cd-main-content">

<style>
#measurevalue1{  padding-left: 23px;
    margin-left: 5%;}
#profilename{margin-left:13.5%;}

.active{color:#051347; background-color:#000;}

@media only screen and (max-width : 480px){

#measurevalue1{  padding-left: 23px;
    margin-left: 0%;}
#profilename{margin-left:0%;}


}



</style>
 
    <main class="cd-main-content">
    <div class="category-content">
	   

        <div class="category-grid-view">
        
	      <div class="container">
		 
            
            <main class="container inner-bottom-xs">
				<article class="post post-single row fadeIn">
				<p>
					<a href="<?php echo $base_url; ?>cart/measure">STANDARD SIZES</a>&nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>cart/brand/" >BRAND SIZES</a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/measured">SHIRT MEASUREMENT</a>  &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/bmeasured" ><b style="color:blue;">BODY MEASUREMENT</b></a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/customerassist" >CUSTOMER ASSIST</a>
				</p>
				<div id="product-simple-tab">
				<div class="tabs">
					<div class="col-md-2 col-sm-2">
					<nav class="navigation post-navigation" role="navigation">
						<h2 class="sr-only">Post navigation</h2>
						<div class="nav-links">
							<?php
								if($sizedata != '' && count($sizedata) > 0) {  
								for($i=0;$i<count($sizedata);$i++)
								{
							?>
							<div class="nav-previous" >
								<a  rel="prev" data-toggle="tab" href="#description<?php echo $i; ?>">
								 
									<span class="sr-only">Previous post:</span> 
									<span class="post-title" style="" ><?php echo $sizedata[$i]->pname; ?></span>
								</a>
							</div>
							<?php }} ?>
						</div><!-- /.nav-links -->
					</nav><!-- /.post-navigation -->
					</div>
					
				<div class="col-md-10 col-sm-10">
					
				
					<form action="<?php echo $base_url;?>cart/mvalue/" class="" method="post" id="newsletter-validate-detail" name="product_addtocart_form" onSubmit="return validate()">	
					<input type="hidden" value="3" name="type"/>
					<input type="hidden" value="<?php echo count($sizedata);?>" id="measurecount"/>
					<div class="tab-content bewear-tab-content">
					<?php
					//echo  count($sizedata);
							if($sizedata != '' && count($sizedata) > 0) {  
								for($i=0;$i<count($sizedata);$i++){ 
								 
								?>
					<div id="description<?php echo $i; ?>" <?php if($i==0) { ?> class="tab-pane in active"<?php } else { ?> class="tab-pane" <?php } ?>>
						<div class="post-thumbnail" >
								<span class="post-title">
                                <span style="float:right">
								<input type="checkbox" <?php if($this->session->userdata('defaultmeasurement') == '0') { ?> checked data-on="INCH" data-off="CM" <?php } else { ?> data-on="INCH" data-off="CM" <?php } ?> data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" value="<?php if($this->session->userdata('defaultmeasurement') == '0') { ?>1<?php } else { ?>0<?php }  ?>" onchange="cminches_converter(this.value);" id="cminches"  style="background-color:#fff;">

								<!-- span style="float:right"><a href="#"><span style="font-size:20px;">CM</span> &nbsp;<img src="<?php echo $base_url_views; ?>assets/images/circle-img.png" width="117" height="30" border="0">&nbsp; <span style="font-size:20px;">INCH</span></a></span>-->
								</span>
                                <br><br>
								<table width="100%" border="1">
									<tr>
										<td height="50" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;"><strong>How to measure</strong></span></td>
									</tr>
									<tr>
 										<td width="100%" align="center" valign="middle">
										<?php if($sizedata[$i]->youtubeurl !="") { ?>
											<!-- iframe width="100%" height="225" src="<?php echo $sizedata[$i]->youtubeurl; ?>" frameborder="0" allowfullscreen></iframe-->
												<video style="border:1px solid #333;" width="100%" controls preload="none">
													  <source src="<?php echo $http_host."/".$sizedata[$i]->youtubeurl; ?>" type="video/mp4">
													  <source src="<?php echo $http_host."/".$sizedata[$i]->youtubeurl; ?>" type="video/ogg">
													  Your browser does not support HTML5 video.
													</video>
										<?php } else { ?>
										<img src="<?php  echo $base_url_views; ?>assets/images/video-img.png" width="100%" height="180">
										<?php } ?>
										</td>
									</tr>
								</table>
							  
								<table id="for" width="100%" align="center"  style="text-align:center;width:100%;">
								<tr>
								  <td colspan="2" align="center" valign="bottom" width="100%"  style="text-align:center;width:100%;">
								  <table width="100%" align="center"  style="text-align:center;">

									<?php if($i == 0) { ?>
 											<tr>
                                            <td>
											<!--input name="profilename" type="text" id="profilename" style="text-align:center;">	
												<label>
													&nbsp;&nbsp; PROFILE NAME 
												 </label-->
										 </td>
                                         </tr>
											<?php } ?>
 									 <tr>
 									 <td align="center" valign="bottom" width="100%"  style="text-align:center;width:100%;">
									
											<label>
 												<input name="bodypartid[]" type="hidden" id="measurevalue" value="<?php echo $sizedata[$i]->id; ?>" size="20" style="background-color:#fff;">
												<input name="bodypartvalue[]" type="text" id="bodymeasurement_<?php echo $i; ?>" size="20"  onkeypress="return numbersonly(event)" style="background-color:#fff;">
											</label>
										                         
									 </td>
									 </tr>
									 <tr>

									 <td colspan="2" align="center" valign="top" style="width:100%;"><span style="font-size:13px;text-align:center;width:100%;">Enter Your <b><?php echo $sizedata[$i]->pname;?></b> &nbsp;Measurement (<span class="textinch"><?php if($this->session->userdata('defaultmeasurement') == '1') { ?> Cms <?php } else { ?> In <?php } ?></span>)</span></td>
 								
									</tr>

									<tr>
											 <td align="left" valign="middle" style="text-align:center;width:100%;">
											<div class="form-actions">
												<!-- <?php if(count($sizedata)-1 != $i){ ?>
												<button  data-toggle="tab" href="#description<?php echo $i+1; ?>" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>	
												<?php } else { ?>
												<button type="submit" onclick="javascript:validate(); return false;" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Submit</button>
												<?php } ?> -->


												<?php if(count($sizedata)-1 != $i){ ?>
													<button  data-toggle="tab" href="#description<?php echo $i+1; ?>" type="button" class="btn btn-info btn-send-message-2b" onclick="nextvalidate('<?php echo $i; ?>');">Next</button>
													<?php if($i > 0) { ?>
														<button  data-toggle="tab" href="#description<?php echo $i-1; ?>" type="button" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</button>
													<?php } ?>
												<?php } else { ?>
													<button type="submit" onclick="javascript:validate(); return false;" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Submit</button>
													<button  data-toggle="tab" href="#description<?php echo $i-1; ?>" type="button" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</button>
												<?php } ?>


											</div>                           
										</td>
									</tr>
								  </table>
								  </td>
								</tr>
								</table>
							</span>
						</div>
					</div>
						 <?php }} ?>
					 </div>
					</form> 
				
			
					
				</div>
				</div>
				</div>
				
			</article>
	
	
	
	

            
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>


<?php include ('includes/footer.php'); ?>
<!-- /footer -->        <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
<link href="<?php echo $base_url_views; ?>css/bootstrap-toggle.css" rel="stylesheet">
<script src="<?php echo $base_url_views; ?>css/bootstrap-toggle.js"></script>
<script>
	function nextvalidate(id){
		
		var profilename = $("#profilename").val();
		 
		if(profilename == '')
		{
			alert('Please Enter Your Profile Name.');
			return false;
		}

		var d = $("#"+id).val();
		if(d == ''){
			alert('Please Enter Measurement');
			//$('#toggle-demo').bootstrapToggle('off')
			//$("#"+id).off('data-toggle');
			return false;
		}
	}

	function validate()
	{
		var profilename = $("#profilename").val();
		 
		if(profilename == '')
		{
			alert('Please Enter Your Profile Name.');
			return false;
		}
		/*var measurevalue = $("#measurevalue1").val();
		if(measurevalue == '')
		{
			alert('Please Enter Your Measure Value.');
			return false;
		}*/
		
		$('#newsletter-validate-detail').submit();
	}	
	
		function cminches_converter(val){//alert(val);
			if(val == '1'){ 
				var measurecount = document.getElementById('measurecount').value;
				for (i = 0; i < measurecount; i++) { 
					var csl = document.getElementById('bodymeasurement_'+i).value;
					document.getElementById('bodymeasurement_'+i).value = roundit(csl*2.54);
				}
				document.getElementById('cminches').value = '0';
			}else{ 
				
				var measurecount = document.getElementById('measurecount').value;
				
				for (i = 0; i < measurecount; i++) { 
					var csl = document.getElementById('bodymeasurement_'+i).value;
					document.getElementById('bodymeasurement_'+i).value = roundit(csl/2.54);
				}
				document.getElementById('cminches').value = '1';
			}

			var url = '<?php echo $base_url ?>home/cminches_converter/';
					$.ajax({
					url:url,
					type:'post',
					data:'id='+val,
					success:function(msg)
					{
						 //alert(msg);
					}
			});
		}
		function roundit(which){
			return Math.round(which*100)/100;
		}			
	 </script>
</html>
