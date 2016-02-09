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
  <!-- /.catalog-header -->

  

  <style>
 input,select{width:56.9%;}
@media only screen and (max-width : 853px){
#foot{font-size:10px;}
#inch{margin-left:-5%;font-size:10px;}
#weight{margin-top:6%;margin-left:0%;}

.wei{width:10% important!}
 input,select{width:70%;margin-left:-1%;}


}

@media only screen and (max-width : 480px){
#foot{font-size:10px;width:100%;padding-left:20%;float:left}
#inch{margin-left:-5%;font-size:10px;float:left}
#weight{margin-top:6%;margin-left:0%;}
#impheight{width:50%;margin-top:6%;margin-left:10%;}
#impweight{width:50%;margin-top:6%;margin-left:10%;}

input{width:70%;margin-left:-1%;}
select{width:100%;}
table{width:100%;}

}




  </style>
  
<main class="cd-main-content">    
<div class="category-content">
	   
        <div class="category-grid-view">
        
	      <div class="container">
            
            <ul class="breadcrumb pull-left">
				<li style="font-size: 22px; margin: 10px 0px 15px;">Body Weight & Height</li>
			</ul>           
            <table width="100%" border="1">
            	<tr>
                <td height="80" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">
                  <strong style="font-size:20px">The Basics</strong><br>                   
                    Enter your height and weight.</span>                  
                </td>
              </tr>
              <tr>
                <td height="200" colspan="2" align="center" valign="middle"> 
              <form action="<?php echo $base_url;?>cart/bodymeasure/<?php echo $style_id; ?>" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" >	
			 
                	<table width="60%">
                      <tr>
                        <td height="40" colspan="2" align="left" valign="middle">
                        <div id="product-simple-tab">
						<div class="tabs">
							<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">For Imperial</a></li>
								<li><a data-toggle="tab" href="#reviews">For Metric</a></li>
							</ul>

							<div class="tab-content bewear-tab-content">
								<div id="description" class="tab-pane in active">
						
					<table width="100%" style="margin-top:15px;">
					<?php
					if($this->session->userdata('measuredid') !="") {
					$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
					} else
					{
						$mudata="";
					}
					//echo "hello";print_r($mudata);
					?>
						<tr>
							<td width="10%" height="40" align="left" valign="middle">HEIGHT</td>
							<td width="30%" align="center" valign="middle">
								<select name="foot" id="foot"  class="validate[required]" data-prompt-position="topRight:5"  size="1" style="width:30%; float:left; padding:10px 10px; margin-right:30px; margin-bottom:10px;">
										 
										<option value="">Select FT</option>	
										<option value="4ft" <?php if($mudata !="" && $mudata->metricft == "4ft") { echo "Selected"; } ?>>4 FT</option>
										<option value="5ft" <?php if($mudata !="" && $mudata->metricft == "5ft") { echo "Selected"; } ?>>5 FT</option>
										<option value="6ft" <?php if($mudata !="" && $mudata->metricft == "6ft") { echo "Selected"; } ?>>6 FT</option>
										<option value="7ft" <?php if($mudata !="" && $mudata->metricft == "7ft") { echo "Selected"; } ?>>7 FT</option>
										<option value="8ft" <?php if($mudata !="" && $mudata->metricft == "8ft") { echo "Selected"; } ?>>8 FT</option>
								</select> 
				  
								  <select name="inch" id="inch" class="validate[required]" data-prompt-position="topRight:5" size="1" style="width:30%; float:left; padding:10px 10px;">
								  	<option value="">Select Inch</option>
									<option value="0" <?php if($mudata !="" && $mudata->metricinch == "0") { echo "Selected"; } ?> >0 IN</option>
									<option value="1" <?php if($mudata !="" && $mudata->metricinch == "1") { echo "Selected"; } ?>>1 IN</option>
									<option value="2" <?php if($mudata !="" && $mudata->metricinch == "2") { echo "Selected"; } ?>>2 IN</option>
									<option value="3" <?php if($mudata !="" && $mudata->metricinch == "3") { echo "Selected"; } ?>>3 IN</option>
									<option value="4" <?php if($mudata !="" && $mudata->metricinch == "4") { echo "Selected"; } ?>>4 IN</option>
									<option value="5" <?php if($mudata !="" && $mudata->metricinch == "5") { echo "Selected"; } ?>>5 IN</option>
									<option value="6" <?php if($mudata !="" && $mudata->metricinch == "6") { echo "Selected"; } ?>>6 IN</option>
									<option value="7" <?php if($mudata !="" && $mudata->metricinch == "7") { echo "Selected"; } ?>>7 IN</option>
									<option value="8" <?php if($mudata !="" && $mudata->metricinch == "8") { echo "Selected"; } ?>>8 IN</option>
									<option value="9" <?php if($mudata !="" && $mudata->metricinch == "9") { echo "Selected"; } ?>>9 IN</option>
									<option value="10" <?php if($mudata !="" && $mudata->metricinch == "10") { echo "Selected"; } ?>>10 IN</option>
									<option value="11" <?php if($mudata !="" && $mudata->metricinch == "11") { echo "Selected"; } ?>>11 IN</option>
								  </select>          
						  </td>
						</tr>
						  <tr>
							<td height="40" align="left" valign="middle">WEIGHT </td>
							<td align="left" valign="middle"><label>
							  <input style="background-color:#fff;" name="weight" type="text" id="weight" class="validate[required] wei" onkeypress="return numbersonly(event)" size="35" <?php if($mudata !="" && $mudata->metricweight !="" && $mudata->metricweight > 0){ ?> value="<?php echo $mudata->metricweight;?>" <?php } ?>>&nbsp; KGS
							</label></td>
						  </tr>
					
                    </table>
					
					</div>								
								<div id="reviews" class="tab-pane">
									<table width="100%" style="margin-top:15px;">
                      <tr>
                        <td height="40" align="left" valign="middle">HEIGHT</td>
                        <td align="left" valign="middle"><label>
                          <input style="background-color:#fff;" type="text" name="impheight" type="text" onkeypress="return numbersonly(event)" id="impheight" <?php if($mudata !="" && $mudata->impheight !=""){ ?> value="<?php echo $mudata->impheight; ?>" <?php } ?>  size="35">&nbsp; CM
                        </label></td>
                      </tr>
                      <tr>
                        <td height="40" align="left" valign="middle">WEIGHT</td>
                        <td align="left" valign="middle"><label>
                          <input style="background-color:#fff;" name="impweight" type="text" onkeypress="return numbersonly(event)" id="impweight" size="35" <?php if($mudata !="" && $mudata->impweight !=""){ ?> value="<?php echo $mudata->impweight; ?>" <?php } ?>>&nbsp; LBS
                        </label></td>
                      </tr>
                      
                    </table>
								</div>
							</div>
						</div>
					</div>
                        </td>
                      </tr>     

	<tr>
							<td height="40" align="left" valign="middle">&nbsp;</td>
								<td align="center" valign="middle">
									<div class="form-actions">
										<button type="submit" class="btn btn-info btn-send-message-2" style="margin:5px; 0px 0px 5px;">Submit</button>	
									</div>
							</td>
						</tr>					  
                    </table>

                </form>
                </td>
              </tr>                            
            </table>
            
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>


 
<!-- /footer -->        <!-- Modal -->
  

<?php include ('includes/cartdetail.php'); ?>
<?php include ('includes/footer.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
 
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#product_addtocart_form").validationEngine('');
		});
            
	</script>
	<script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>
</body>
</html>
