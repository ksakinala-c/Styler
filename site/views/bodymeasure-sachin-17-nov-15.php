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
iframe {margin-top:21px;}
.post-title input{width: 166px;}
.post-single{padding-bottom:0px;}
#profilename{
    margin-left: 1%;}
	
#blue{width:100%;}
#for{width:100%;}

@media only screen and (max-width : 850px){
#navl{width:20%;float:left;margin-left:-5%;}
#blue{width:75%;float:left;margin-left:10%;}
#for{width:60%;float:left;margin-left:17%;margin-top:10%;}
}

@media only screen and (max-width : 480px){
#navl{width:20%;float:left;margin-left:-5%;}
#blue{width:75%;float:left;margin-left:10%;}
#for{width:60%;float:left;margin-left:30%;margin-top:0%;}
}



 </style>
    
    <div class="category-content">
	   

        <div class="category-grid-view">
        
	      <div class="container">
		   
            <main class="container inner-bottom-xs">
				<article class="post post-single row fadeIn">
				<p>
					<a href="<?php echo $base_url; ?>cart/measure">STANDARD SIZES</a>&nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>cart/brand/" >BRAND SIZES</a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/measured"><b style="color:blue;">SHIRT MEASUREMENT</b></a>  &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/bmeasured" >BODY MEASUREMENT</a> &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="<?php echo $base_url; ?>home/customerassist" >CUSTOMER ASSIST</a>
				</p>
				<div id="product-simple-tab">
				<div class="tabs">
					<div class="col-md-2 col-sm-3 col-xs-12">
					<nav class="navigation post-navigation" role="navigation">
						<h2 class="sr-only">Post navigation</h2>
						<div class="nav-links" id="navl"> 
							<?php
								if($sizedata != '' && count($sizedata) > 0) {  
								for($i=0;$i<count($sizedata);$i++)
								{
							?>
							<div class="nav-previous" >
								<a  rel="prev" data-toggle="tab" href="#description<?php echo $i; ?>">
								 
									<span class="sr-only">Previous post:</span> 
									<span class="post-title" style="" ><?php echo $sizedata[$i]->pname; ?> </span>
								</a>
							</div>
							<?php } } ?>
						</div><!-- /.nav-links -->
					</nav><!-- /.post-navigation -->
					</div>
					
				<div class="col-md-10 col-sm-9 col-xs-12">
 
					<form action="<?php echo $base_url;?>cart/mvalue/" class="" method="post" id="newsletter-validate-detail" name="product_addtocart_form" onSubmit="return validate()">
					<input type="hidden" value="2" name="type"/>
					<input type="hidden" value="<?php echo count($sizedata);?>" id="measurecount"/>
					<div class="tab-content bewear-tab-content">
					<?php
						if($sizedata != '' && count($sizedata) > 0) {  
							for($i=0;$i<count($sizedata);$i++) { 
 							?>
					<div id="description<?php echo $i; ?>" <?php if($i==0) { ?> class="tab-pane in active"<?php } else { ?> class="tab-pane" <?php } ?>>
						<div class="post-thumbnail" >
								<span class="post-title">
								<span style="float:right">
									
							<input type="checkbox" <?php if($this->session->userdata('defaultmeasurement') == '0') { ?> checked data-on="INCH" data-off="CM" <?php } else { ?> data-on="INCH" data-off="CM" <?php } ?> data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" value="<?php if($this->session->userdata('defaultmeasurement') == '0') { ?>1<?php } else { ?>0<?php }  ?>" onchange="cminches_converter(this.value);" id="cminches"  style="background-color:#fff;">
									<!-- div class="checkbox">
									  <label>
										<input type="checkbox" checked data-toggle="toggle">
 									  </label>
									</div -->

								<!-- a href="#"><span style="font-size:20px;">CM</span> &nbsp;<img src="<?php echo $base_url_views; ?>assets/images/circle-img.png" width="117" height="30" border="0">&nbsp; <span style="font-size:20px;">INCH</span></a -->
								</span>
								<br><br>
								<table border="1" id="blue">
									<tr>
										<td height="50" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;"><strong>How to measure</strong></span></td>
									</tr>
									<tr>
 										<td width="50%" height="50%" align="center" valign="middle">
											<?php if($sizedata[$i]->youtubeurl !="") { ?>
										<iframe width="250" height="255" src="<?php echo $sizedata[$i]->youtubeurl; ?>" frameborder="0" allowfullscreen></iframe>
										<?php } else { 
										$image = $this->cart_model->getpartimage($sizedata[$i]->id);
										//echo "hello".$image;die;
										?>
										<img src="<?php echo $http_host;?>upload/parts/<?php echo $image; ?>" width="250px" height="250px" >
										<?php } ?>
										</td>
									</tr>
								</table>
 								<table id="for" align="center">
								<tr>
								  <td colspan="2" align="center" valign="bottom" style="text-align:center;width:100%;">
								  <table width="100%" align="center">
									 <tr>
 											<label>
											<?php if($i == 0) { ?>
 												 <label>
													* All fields are required.
												 </label>
                                                 <br>
											<!--input name="profilename" required type="text" id="profilename"  size="20" style="text-align:center;background-color:#fff;">	
												<label>
													PROFILE NAME 
												 </label-->
										 
											<?php } ?>
											<td align="center" valign="bottom"  style="text-align:center;width:100%;">
												<input name="bodypartid[]" type="hidden" id="" value="<?php echo $sizedata[$i]->id; ?>" size="20" style="text-align:center;background-color:#fff;">
												<input name="bodypartvalue[]" type="text"  onkeypress="return numbersonly1(event,'<?php echo $i; ?>');" required id="shirtmeaure_<?php echo $i; ?>" size="20" style="background-color:#fff;">
											</label>
										                         
											</td>
									</tr>
										<tr>
										<td colspan="2" align="center" valign="top"><span style="font-size:13px;text-align:center;">Enter Your <?php echo $sizedata[$i]->pname;?> &nbsp;Measurement (<span class="textinch"><?php if($this->session->userdata('defaultmeasurement') == '1') { ?> Cms <?php } else { ?> In <?php } ?></span>)</span></td>
									</tr>
									<tr>
									 
										<td align="center" valign="middle"  style="text-align:center;width:100%;">
											<div class="form-actions" style="width:100%;">
												<?php if(count($sizedata)-1 != $i){ ?>
													<button  data-toggle="tab" href="#description<?php echo $i+1; ?>" type="button" class="btn btn-info btn-send-message-2b"  onclick="nextvalidate('<?php echo $i; ?>');">Next</button>
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
						 <?php } } ?>
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


<!-- /footer -->        <!-- Modal -->
<?php  include ('includes/cartdetail.php');?>
<link href="<?php echo $base_url_views; ?>css/bootstrap-toggle.css" rel="stylesheet">
<script src="<?php echo $base_url_views; ?>css/bootstrap-toggle.js"></script>

<script>
	
	function numbersonly1(evt, id)
	{
 				

		var charCode = (evt.which) ? evt.which : evt.keycode
		if(charCode > 31 && (charCode < 45 || charCode > 57)) {
			return false;
		} else {
 			/*var d = $("#shirtmeaure_"+id).val();
			if(d != ''){
				  //document.getElementById(").disabled = false;
				  $('#shirtmeaure_'+id).removeAttr('disabled');
			} else {
				  $('#shirtmeaure_'+id).attr('disabled','disabled');
			}	*/

			return true;
		}
	}

	function getvalidate(id){
		var d = $("#shirtmeaure_"+id).val();
		if(d != ''){
			  //document.getElementById(").disabled = false;
			  $('#shirtmeaure_'+id).removeAttr('disabled');
		} else {
			  $('#shirtmeaure_'+id).attr('disabled','disabled');
		}
	}
	function nextvalidate(id){
		/*var profilename = $("#profilename").val();
		if(profilename == '')
		{
			alert('Please Enter Your Profile Name.');
			return false;
		}*/
 		var d = $("#shirtmeaure_"+id).val();
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

 		/* var profilename = $("#profilename").val();
 		if(profilename == '')
		{
			alert('Please Enter Your Profile Name.');
			return false;
		}
		var measurevalue = $("#measurevalue1").val();
 		if(measurevalue == '')
		{
			alert('Please Enter Your Measure Value.');
			return false;
		} */
 		$('#newsletter-validate-detail').submit();
	}	
	
	
						function cminches_converter(val){//alert(val);
							if(val == '1'){//cms
								var measurecount = document.getElementById('measurecount').value;
								for (i = 0; i < measurecount; i++) { 
									var csl = document.getElementById('shirtmeaure_'+i).value;
									document.getElementById('shirtmeaure_'+i).value = roundit(csl*2.54);
								}
								
								document.getElementById('cminches').value = '0';
								$('.textinch').html('Cms');
							}else{//cms
								var measurecount = document.getElementById('measurecount').value;
								
								for (i = 0; i < measurecount; i++) { 
									var csl = document.getElementById('shirtmeaure_'+i).value;
									document.getElementById('shirtmeaure_'+i).value = roundit(csl/2.54);
								}
								document.getElementById('cminches').value = '1';
								$('.textinch').html('Inches');
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
