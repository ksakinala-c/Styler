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
<script>
function checkdata(sizeid , fit)
{
		var url = '<?php echo $base_url ?>cart/showdata/';
		$.ajax({
		url:url,
		type:'post',
		data:'sizeid='+sizeid+'&fit='+fit,
		success:function(msg)
			{
				document.getElementById('post-title').innerHTML = msg ;
			}
		});
}
</script>
<!-- /header --><main>
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
td{font-size:15px !important;}
th{font-size:15px !important;}
.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}

#sizeid{width:20%;padding:0px 10px;margin-left:20px;background-color:#fff;}
#bpart{margin-top:-9%;}
#bpreg {color:#fff; font-size:15px;}
@media only screen and (max-width : 853px){
#sizeid{width:20%;padding:0px 10px;margin-left:20px;background-color:#fff;}
#bpreg {color:#fff; font-size:15px;}
#bpart{margin-top:-40%;}
} 

@media only screen and (max-width : 480px){

#bpart{margin-top:-88%;}

#bpreg {color:#fff; font-size:15px;}

#sizeid{width:20%;padding:0px 12px;margin-left:20px;background-color:#fff;}

}
@media only screen and (max-width : 360px){
#bpart{margin-top:-125%;}
} 
@media only screen and (max-width: 768px){
.mobile-view-table	{width:100%;}
}
@media only screen and (min-width: 769px){
.mobile-view-table	{width:55%;}
}
</style>
 
    <div class="category-content" style="margin-top:150px;">
         <div class="category-grid-view" id="bpart">
 	      <div class="container">
             <ul class="breadcrumb pull-left">
				<!--li style="font-size:25px;">Measurement</li -->
			</ul>
             <br> <br>
             <main class="container inner-bottom-xs">
	<article class="post post-single row fadeIn">
    
    <div class="col-md-2 col-sm-2">
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="sr-only">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-previous">
 							<span class="sr-only">Previous post:</span> 
							<span class="post-title" style="color:#ee5e33;">Standard Sizes </span>
						 
					</div><!-- /.nav-previous -->
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>cart/brand/" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Brand Size</span>
						</a>
					</div>
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>home/measured/<?php echo $subcat; ?>" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shirt Measurement</span>
						</a>
					</div>
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>home/bmeasured/" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Body Measurement</span>
						</a>
					</div>
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>home/customerassist" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Customer Assist</span>
						</a>
					</div>
                    <!--div class="nav-next">
						<a href="#" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shirt Measurement</span>
						</a>
					</div-->
				</div><!-- /.nav-links -->
			</nav><!-- /.post-navigation -->
		</div>
    
		<div class="col-md-10 col-sm-10">
	    <!-- form class="cart" action="<?php echo $base_url;?>cart/add" method="post" id="product_addtocart_form" name="product_addtocart_form" -->	
			<form class="cart" action="<?php echo $base_url;?>cart/mvalue/" method="post" id="product_addtocart_form" name="product_addtocart_form" >	
			<input type="hidden" value="1" name="type"/>
			<div class="post-thumbnail">
		
				<span class="post-title">
                <?php $sizedata=$this->cart_model->sizedata($subcat, $fit); ?>
                <strong style="float:left;">Select Your Size </strong>
                <select name="sizeid" id="sizeid" size="1" Onchange="checkdata(this.value,'<?php echo $fit; ?>');" >
					<?php
						if($sizedata != '' && count($sizedata) > 0) {  
						$i = 0;
						foreach($sizedata as $sizedata)
						{
 							$proparts = $this->home_model->prodparts($sizedata->id); 
 					?>
						<option <?php if($i == '0' ) { ?> selected <?php } ?> value="<?php echo $sizedata->id; ?>" style="font-weight:bold; padding:5px 0px 5px 5px;"><?php echo $sizedata->size; ?></option>
					<?php } $i++; } ?>	
				</select>
			
				<span style="float:right">
				<input type="checkbox" <?php if($this->session->userdata('defaultmeasurement') == '0') { ?> checked data-on="INCH" data-off="CM" <?php } else { ?> data-on="INCH" data-off="CM" <?php } ?> data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" value="<?php if($this->session->userdata('defaultmeasurement') == '0') { ?>1<?php } else { ?>0<?php }  ?>" onchange="cminches_converter(this.value);" id="cminches"  style="background-color:#fff;">

				<!-- a href="#"><span style="font-size:20px;">CM</span> &nbsp;<img src="<?php echo $base_url_views; ?>assets/images/circle-img.png" width="50" border="0">&nbsp; <span style="font-size:20px;">INCH</span></a -->
				<!-- input type="checkbox" name="my-checkbox" checked -->
				<script>
				//$("[name='my-checkbox']").bootstrapSwitch();
				</script>
				</span>    
                  
               </span>
			
				<br> <br>
           
				<span class="post-title" id="post-title" style="">
				
				<?php
										if($this->session->userdata('measuredid') !="") {
										$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
										} else
										{
											$mudata="";
										}
									//print_r($mudata);
										?>
                <table class="mobile-view-table" border="1">
				 <tr>
                        <td style="font-size:15px;" width="35%" height="50" align="center" valign="middle" bgcolor="#1ab7ea">
						<span id="bpreg"><strong>Body Parts ( <?php 
								//echo $mdetail->fit; 
								if($fit == "1") { echo "Regular"; }
								if($fit == "2") { echo "Tailored"; }
								if($fit == "3") { echo "Slim"; }	
								?> )</strong></span></td>
						<td style="font-size:20px;" width="20%" height="50" align="center" valign="middle" bgcolor="#1ab7ea">
						<span style="color:#fff;"><strong><?php echo $sizedata->size; ?></strong></span></td>
						<input type="hidden" value="<?php echo count($proparts);?>" id="measurecount" style="background-color:#fff;"/>
                    </tr>
					
						<?php
						//print_r($proparts);die;
						if($proparts != '' && count($proparts) > 0) {  
						$i = 0;
						foreach($proparts as $parts)
						{ $i++;
 					?>
					 <?//if($i == '0'){?>
                    <tr style="">
                        <td style="font-size:20px;" width="35%" height="50" align="left" valign="middle"><?php echo $this->cart_model->getpartname($parts->partid); ?></td>
                        <td style="font-weight:20px;" align="center" valign="middle">

							<?php if($this->session->userdata('defaultmeasurement') == '0') { $ptvalue = $parts->partvalue;  } else { $ptvalue = ($parts->partvalue * 2.54); } ?>	

							<input style="width:auto;" name="bodypartvalue[]" onkeypress="return numbersonly(event)" required type="text" id="no_<?php echo $i;?>" value="<?php echo $ptvalue; ?>"  size="13" style="text-align:center;"  style="background-color:#fff;">
                            <input name="bodypartid[]" type="hidden" id="measurevalue" value="<?php echo $parts->partid; ?>" size="20"  style="background-color:#fff;"><span class="textinch"><?php if($this->session->userdata('defaultmeasurement') == '1') { ?> Cms <?php } else { ?> In <?php } ?></span>
							  <!-- input name="bodypartvalue[]" type="text" value="" id="measurevalue" size="20" -->
 						  </td>
                    </tr>
					 <?php //} ?>
						<?php  }  } else { ?>
						<div>Sorry, Size Not Found.!!</div>
						<?php }  ?>
					
					 
					 <tr style="">
                        <td style="font-size:15px;" width="35%" height="50" align="center" valign="middle">Profile Name</td>
                        <td style="font-weight:15px;"   align="center" valign="middle">
							<input type="text" value="<?php if($mudata !="" && $mudata->userprofilename !=""){ echo $mudata->userprofilename; } ?>" name="profilename" id="profilename" style="background-color:#fff;" /> 
							 <p id="error" style="color:red;"></p>
                        </td>
						
                    </tr>
					
                    <tr>
                        <td style="font-size:20px;" height="40" colspan="2" align="center" valign="middle">
                          <div class="">
						  

							 	<a href="<?php echo $base_url; ?>cart/fitNew/<?php echo $mudata->pid; ?>" class="btn btn-info btn-send-message-2" style="margin:5px; 0px 0px 5px;">Back</a>	
                            <button type="submit" class="btn btn-info btn-send-message-2" style="margin:5px; 0px 0px 5px;" onclick ="return formsubmitcart();">Submit</button>	                                
							 
			                </div>
							    
						</td>
                    </tr>
									
                  </table>       <br><br>  
				
                </span>
				<?php /* }} else { ?>
				  <strong>No Data Found.!!</strong>
				<?php } */?>
			</div>
			</form>
			<?php /* }} */ ?>
		</div>
	</article>
</main>
            
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>
<link href="<?php echo $base_url_views; ?>css/bootstrap-toggle.css" rel="stylesheet">
<script src="<?php echo $base_url_views; ?>css/bootstrap-toggle.js"></script>
<script>
						function formsubmitcart() {
 							var sizeid = document.getElementById('sizeid').value;  
							if(sizeid == "" )
							{
								alert('Please Select Your Size.'); 
								return false;
							}
							
							var profilename = document.getElementById('profilename').value;  
							if(profilename == "" )
							{
								//alert('Please Enter profile name.'); 
								document.getElementById('error').innerHTML = ('Please Enter profile name.');
								return false;
							}
							//window.location.href=url;
							
						}
						function cminches_converter(val){
							if(val == '1'){ //cms
							 
								var measurecount = document.getElementById('measurecount').value;
								for (i = 1; i <= measurecount; i++) { 
									var csl = document.getElementById('no_'+i).value;	
									document.getElementById('no_'+i).value = roundit(csl*2.54);
								}
								document.getElementById('cminches').value = '0';
								$('.textinch').html('Cms');

								 

							} else { 
								 
								var measurecount = document.getElementById('measurecount').value;
								for (i = 1; i <= measurecount; i++) { 
									var csl = document.getElementById('no_'+i).value;
									document.getElementById('no_'+i).value = roundit(csl/2.54);
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
										// alert(msg);
									}
								});

							
						}
						function roundit(which){
							return Math.round(which*100)/100;
						}						
						
						
					
</script>					
</body>
</html>
