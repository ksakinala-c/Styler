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
	  
	  
	  
/* input,select{width:56.9%;}*/
 .post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}
	  .radio{background-color:#ccc;}
	  
	  
@media only screen and (max-width : 853px){
#foot{font-size:10px;}
#inch{margin-left:-5%;font-size:10px;}
#weight{margin-top:6%;margin-left:0%;}

.wei{width:10% important!}
 /*input,select{width:70%;margin-left:-1%;}*/


}

@media only screen and (max-width : 480px){
#foot{font-size:10px;width:100%;padding-left:20%;float:left}
#inch{margin-left:-5%;font-size:10px;float:left}
#weight{margin-top:6%;margin-left:0%;}
#impheight{width:60px;}
#impweight{width:50px;}

input{width:70%;margin-left:-1%;}
select{width:100%;}
table{width:100%;}

}
.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}


#shoulderangle5{display:none;}
#shoulderangle6{display:none;}
#shoulderangle7{display:none;}

	  
#shouldertype5{display:none;}
#shouldertype6{display:none;}
#shouldertype7{display:none;}
	  
#measure5{display:none;}
#measure6{display:none;}
#measure7{display:none;}


#p1{display:none;}
#p2{display:none;}
#p3{display:none;}

@media only screen and (max-width : 850px){

#shoulderangle1{display:none;}
#shoulderangle2{display:none;}
#shoulderangle3{display:none;}
	
#sholdertype-radio{display:none;}
#measuretype-radio{display:none;}
#shoulderangle-radio{display:none;}	
	
	
#shoulderangle5{display:block;padding:5px;border-radius:20px;}
#shoulderangle6{display:block;padding:5px;border-radius:20px;}
#shoulderangle7{display:block;padding:5px;border-radius:20px;}

#shouldertype1{display:none;}
#shouldertype2{display:none;}
#shouldertype3{display:none;}


#shouldertype5{display:block;padding:5px;border-radius:20px;}
#shouldertype6{display:block;padding:5px;border-radius:20px;}
#shouldertype7{display:block;padding:5px;border-radius:20px;}

#measure1{display:none;}
#measure2{display:none;}
#measure3{display:none;}

#measure5{display:block;padding:5px;border-radius:20px;}
#measure6{display:block;padding:5px;border-radius:20px;}
#measure7{display:block;padding:5px;border-radius:20px;}

	#measure-td-height{height:100px;}
	#measure-table-in{margin:0px;}

}

@media only screen and (max-width : 480px){
#shoulderangle1{display:none;}
#shoulderangle2{display:none;}
#shoulderangle3{display:none;}
	
	#sholdertype-radio{display:none;}
	#measuretype-radio{display:none;}
	#shoulderangle-radio{display:none;}
	
#shoulderangle5{display:block;padding:4px;border-radius:20px;}
#shoulderangle6{display:block;padding:4px;border-radius:20px;}
#shoulderangle7{display:block;padding:4px;border-radius:20px;}

#shouldertype1{display:none;}
#shouldertype2{display:none;}
#shouldertype3{display:none;}


#shouldertype5{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype6{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype7{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}




#measure5{display:block;padding:4px;border-radius:20px;}
#measure6{display:block;padding:4px;border-radius:20px;}
#measure7{display:block;padding:4px;border-radius:20px;}

#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}
	
#measure-td-height{height:100px;}
	#measure-table-in{margin:0px;}

}



.measuretype label,.shouldertype label,.shoulderangletype label{

display:block !important;
}
	  @media only screen and (max-width : 850px){
		  
		  
		  
	  }
	  #impheight{
	  background-color:#fff;border:0;width:100px;text-align:right;padding:0px 5px 0px 0px;
	  }
	  #impweight{
	  background-color:#fff;width:90px;border:0;text-align:right;padding:0px 5px 0px 0px;
	  }

  </style>
  
<main class="cd-main-content">    
<div class="category-content">
	   
        <div class="category-grid-view">
        
	      <div class="container" style="margin-top:-80px;">
             <div class="skip-measurement">	
												<!---<a href="<?php echo $base_url; ?>cart/shouldertype/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>--->
												<table class="table" width="100%" cellpadding="0" cellspacing="0" style="border:none;">
												<tr><td style="border:none">
												<button onclick="location.href='http://www.stylior.com/cart/fitnew/';" class="btn btn-info btn-send-message-2b" style="padding:0.5% 8% 0.5% 8%;font-size:18px;">BACK</button> 
											    </td><td align="right" style="border:none">
												<button onclick="location.href='http://www.stylior.com/cart/measure/';" class="btn btn-info btn-send-message-2b" style="padding:0.5% 8% 0.5% 8%;font-size:18px;">SKIP THIS STEP</button> 		
												</td>
												</tr></table>
												</div>
            <!---<ul class="breadcrumb pull-left">
				<li style="font-size: 22px; margin: 10px 0px 15px;">Body Weight & Height</li>
			</ul>--->  
<form action="<?php echo $base_url;?>cart/measure/<?php //echo $this->uri->segment(3); ?>" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" style="margin-top:-20px;">				  			
            <table width="100%" border="1">
            	<tr>
                <td height="40" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">
                  <!----<strong style="font-size:20px">The Basics</strong><br>---->                   
                    Enter your height and weight.</span>                  
                </td>
              </tr>
              <tr>
                <td id="measure-td-height" height="200" colspan="2" align="center" valign="middle"> 
              <?php /* <form action="<?php echo $base_url;?>cart/bodymeasure/<?php echo $style_id; ?>" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" > */ ?>

			 
                	<table id="table-height-weight" width="70%" style="margin-top:0px;">
                      <tr>
                        <td height="40" colspan="2" align="left" valign="middle">
                        <div id="product-simple-tab">
						<div class="tabs">
							<!---<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">For Imperial</a></li>
								<li><a data-toggle="tab" href="#reviews">For Metric</a></li>
							</ul>---->

							<div class="tab-content bewear-tab-content">
								<div id="description" class="tab-pane in active" style="padding:0px;">
						
					<table class="table table-condensed" id="measure-table-in" width="100%" style="">
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
							<td width="10%" height="40"  valign="middle" style="padding-top:20px;border:none">HEIGHT</td>
							<td width="30%" align="center" valign="middle" style="border:none">
								<select name="foot" id="foot"  class="validate[required] cms-conv-cls" data-prompt-position="topRight:5"  size="1" style="width:40%; float:left; padding:10px 10px; margin-right:10px; margin-bottom:10px;">
										 
										<option value="">Select FT</option>	
										<option value="4ft" <?php if($mudata !="" && $mudata->metricft == "4ft") { echo "Selected"; } ?>>4 FT</option>
										<option value="5ft" <?php if($mudata !="" && $mudata->metricft == "5ft") { echo "Selected"; } ?>>5 FT</option>
										<option value="6ft" <?php if($mudata !="" && $mudata->metricft == "6ft") { echo "Selected"; } ?>>6 FT</option>
										<option value="7ft" <?php if($mudata !="" && $mudata->metricft == "7ft") { echo "Selected"; } ?>>7 FT</option>
										<option value="8ft" <?php if($mudata !="" && $mudata->metricft == "8ft") { echo "Selected"; } ?>>8 FT</option>
								</select> 
				  
								  <select name="inch" id="inch" class="validate[required] cms-conv-cls" data-prompt-position="topRight:5" size="1" style="width:40%; float:left; padding:10px 10px;">
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
							<td align="right" valign="right" style="padding-top:20px;border:none;">
							<label>
                          <input disabled="disabled" style="" type="text" name="impheight" type="text" onkeypress="return numbersonly(event)" id="impheight" <?php if($mudata !="" && $mudata->impheight !=""){ ?> value="<?php echo $mudata->impheight; ?>" <?php } ?> > CM
                        </label>
							</td>
						</tr>
						  <tr>
							<td height="40" align="left" valign="middle" style="padding-top:10px;border:none;">WEIGHT </td>
							<td align="left" valign="middle" style="border:none"><label>
							  <input style="background-color:#fff;width:60%;padding:0px;" name="weight" type="text" id="weight" class="validate[required] wei lbs-conv-cls" onkeypress="return numbersonly(event)" maxlength="3"  <?php if($mudata !="" && $mudata->metricweight !="" && $mudata->metricweight > 0){ ?> value="<?php echo $mudata->metricweight;?>" <?php } ?>>KGS
							</label></td>
							<td  align="right" valign="right" style="border:none"><label>
                          <input disabled="disabled" style="" name="impweight" type="text" onkeypress="return numbersonly(event)" id="impweight" <?php if($mudata !="" && $mudata->impweight !=""){ ?> value="<?php echo $mudata->impweight; ?>" <?php } ?>> LBS
                        </label></td>
						  </tr>
					
                    </table>
					
					</div>								
								<div id="reviews" class="tab-pane">
									<table width="100%" style="margin-top:15px;">
                      <tr>
                        <td height="40" align="left" valign="middle">HEIGHT</td>
                        <td align="left" valign="middle"><label>
                          <input style="background-color:#fff;border:0;width:20%" type="text" name="impheight" type="text" onkeypress="return numbersonly(event)" id="impheight" <?php if($mudata !="" && $mudata->impheight !=""){ ?> value="<?php echo $mudata->impheight; ?>" <?php } ?>  size="35">&nbsp; CM
                        </label></td>
                      </tr>
                      <tr>
                        <td height="40" align="left" valign="middle">WEIGHT</td>
                        <td align="left" valign="middle"><label>
                          <input style="background-color:#fff;border:0;width:20%" name="impweight" type="text" onkeypress="return numbersonly(event)" id="impweight" <?php if($mudata !="" && $mudata->impweight !=""){ ?> value="<?php echo $mudata->impweight; ?>" <?php } ?>>&nbsp; LBS
                        </label></td>
                      </tr>
                      
                    </table>
								</div>
							</div>
						</div>
					</div>
                        </td>
                      </tr>     

	<tr style="display:none;">
							<td height="40" align="left" valign="middle">&nbsp;</td>
								<td align="center" valign="middle">
									<div class="form-actions">
										<!---<button type="submit" class="btn btn-info btn-send-message-2" style="margin:5px; 0px 0px 5px;">Submit</button>	--->
									</div>
							</td>
						</tr>					  
                    </table>

               
                </td>
              </tr>                            
            </table>
			
			<!---- Posture start ----->
            <div style="position:relative;top:-20px;">
			<div class="post-thumbnail1" >
				<span class="post-title">
                <table width="100%" border="1">
  <tr>
                        <td height="40" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;" id="pos">Select Your Body Type</span></td>
              </tr>
                      <tr>
                        <td height="40" align="center" valign="middle" id="t1">Broad</td>
                        <td align="center" valign="middle" id="t2">Column</td>
                        <td align="center" valign="middle" id="t2">Oval</td>
                      </tr>
                     <tr>
                        <td align="center"  width="30%"  valign="middle" id="tpic">
						
						
			      <p id="p1"><strong>Broad</strong></p>
			      <img onclick="document.getElementById('measure1').checked=true;" src="<?php echo $base_url_views; ?>images/broad.png" width="30%" style="cursor:pointer; width:60%; height:auto;" >		
			      <p style="width:0%;margin:20px;">
                              <input type="radio" style="float:none; " name="measure" id="measure5"  value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                               </p>
			</td>
			
			
                        <td width="30%" align="center" valign="middle" id="tpic">
			<p id="p2"><strong>Column</strong></p>
			<img onclick="document.getElementById('measure2').checked=true;" src="<?php echo $base_url_views; ?>images/column.png" width="30%" style="cursor:pointer;width:60%; height:auto;" >
			<p style="width:0%;margin:20px;">
                         <input type="radio" style="float:none;" name="measure" id="measure6" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                        </p>
			</td>
			
                        <td width="30%" align="center" valign="middle" id="tpic">
			<p id="p3"><strong>Oval</strong></p>
			<img onclick="document.getElementById('measure3').checked=true;" src="<?php echo $base_url_views; ?>images/oval.png" width="30%" style="cursor:pointer;width:60%; height:auto;" >
			<p style="width:0%;margin:20px;">
                        <input type="radio" style="float:none;" name="measure" id="measure7" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                        </p>
			</td>
              </tr>
			
			  
              <tr id="measuretype-radio" style="position:relative;top:-15px;">
                        <td height="40" colspan="3" align="center" valign="middle">						
						 <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
					
                          <table width="100%"  class="measuretype" align="center">
                            <tr>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
								<input type="radio" name="measure" style="" id="measure1" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "Checked"; } ?> <?php if ($mudata =="" OR $mudata->posture == "0"){ echo "Checked"; } ?>>	
		
							  </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="measure" id="measure2" value="2" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "2") { echo "Checked"; } ?>> 
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="measure" id="measure3" value="3" <?php if($mudata !="" && $mudata->posture  !="" &&  $mudata->posture  == "3") { echo "Checked"; } ?>>
                              </label></td>
                            </tr>
                          </table>
						<!--  <tr>
			<td colspan="3" align="left" valign="bottom">-->
			<!---<table width="100%" align="center">
					<tr>
                            <td align="center" valign="bottom">
                              <div class="">
								 <a href="<?php echo $base_url; ?>cart/mapping/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>	
                                 <button type="submit" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>
			                    </div></td>
                    </tr>                          
			</table>----><!--</td>
			</tr>-->
					
                        </td>
                      </tr>
                  </table>
                 <!-- <table width="100%" align="center" style="margin:15px 0px;">
			
                        </table>-->
                </span>
			</div><!-- .post-thumbnail -->
		</div>
		<!---- Posture end ----->
		<!---- shoulder type start ----->
		<div style="position:relative;top:-40px;">
			<div class="post-thumbnail1" >
				<span class="post-title">
                <table width="100%" border="1">
  <tr>
                        <td height="40" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">Select Your Shoulder Type</span></td>
              </tr>
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
                        <td height="40" align="center" valign="middle" id="t1">Average</td>
                        <td align="center" valign="middle" id="t2">Straight</td>
                        <td align="center" valign="middle" id="t2">Sloping</td>
                      </tr>
                      <tr>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p1"><strong>Average</strong></p>
						
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img2.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shouldertype1').checked=true;">
						
						
						<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype5" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Average") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p1"><strong>Straight</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img1.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shouldertype2').checked=true;">
						
							<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype6" style="" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Straight") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						 <p id="p1"><strong>Sloping</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img3.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shouldertype3').checked=true;">
						
						
						
							<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype7" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Sloping") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						
						
						</td>
              </tr>
              <tr id="sholdertype-radio" style="position:relative;top:-25px">
                        <td height="40" colspan="3" align="center" valign="middle" >
						
						 <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
						 <?php /*
							if($this->session->userdata('usermdata') !="") {
							$mudata = $this->home_model->getmdata($this->session->userdata('usermdata')); 
							//print_r($mudata);
							} else {
							$mudata="";	
							} */
							?>
                          <table width="100%" class="shouldertype" align="center">
                            <tr>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                              <input type="radio" name="shouldertype" id="shouldertype1" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Average") { echo "checked"; } ?> <?php if ($mudata == ""  OR $mudata->shouldertype == "0"){ echo "Checked"; } ?>>
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="shouldertype" id="shouldertype2" value="Straight" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Straight") { echo "checked"; } ?>> 
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="shouldertype" id="shouldertype3" value="Sloping" <?php if($mudata !="" && $mudata->shouldertype  !="" &&  $mudata->shouldertype  == "Sloping") { echo "Checked"; } ?>>
								  </label></td>
                            </tr>
							</table>
					<!---	  <tr>
			<td colspan="3" align="left" valign="bottom">
			<table width="100%" align="center">
					<tr>
                            <td align="center" valign="bottom">
                              <div class="">
								 <a href="<?php echo $base_url; ?>cart/bodymeasure/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>
                                <button type="submit" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>                                 
			                    </div></td>
                    </tr>                          
			</table>---->
                        </td></tr>
				<!--	
                  <tr><td>
                  <table width="100%" align="center" style="margin:15px 0px;">
			
					  </table></td></tr>-->
					</table>
                </span>
			</div><!-- .post-thumbnail -->
		</div>
		<!---- shoulder type end --->
		
		<!---- shoulder angle start ----->
			<div style="position:relative;top:-65px;"> 
			<div class="post-thumbnail1" >
				<span class="post-title">
                <table width="100%" border="1">
				<tr>
                        <td height="40" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">Select Your Shoulder Angle</span></td>
				 </tr>
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
                        <td height="40" align="center" valign="middle" id="t1">Even</td>
                        <td align="center" valign="middle" id="t2">Lower Right</td>
                        <td align="center" valign="middle" id="t2">Lower Left</td>
                      </tr>
                      <tr>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						   <p id="p1"><strong>Average</strong></p>
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-should1.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shoulderangle1').checked=true;">
						
						<p><label>
                              <input type="radio" name="shoulderangle" id="shoulderangle5" value="Even" <?php if($mudata !="" && $mudata->shoulderangle  !="" && $mudata->shoulderangle  == "Even") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						
		</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						
						 <p id="p1"><strong>Straight</strong></p>
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-should2.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shoulderangle2').checked=true;">
						
						
						<p><label>
                              <input type="radio" name="shoulderangle" id="shoulderangle6" value="Lower Light" <?php if($mudata !="" && $mudata->shoulderangle  !="" && $mudata->shoulderangle  == "Lower Light") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						 <p id="p1"><strong>Sloping</strong></p>
						
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-should3.jpg" width="60%" height="auto" style="cursor:pointer;" onclick="document.getElementById('shoulderangle3').checked=true;">

						<p><label>
                              <input type="radio" name="shoulderangle" id="shoulderangle7" value="Lower Left" <?php if($mudata !="" && $mudata->shoulderangle  !="" && $mudata->shoulderangle  == "Lower Left") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						</td>
              </tr>
              <tr id="shoulderangle-radio" style="position:relative;top:-25px;">
                        <td height="40" colspan="3" align="center" valign="middle" >
					
						 <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
						 <?php /*
							if($this->session->userdata('usermdata') !="") {
							$mudata = $this->home_model->getmdata($this->session->userdata('usermdata')); 
							//print_r($mudata);
							} else {
							$mudata="";	
							} */
							?>
                          <table width="100%" class="shoulderangletype" align="center">
                            <tr>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                              <input type="radio" name="shoulderangle" id="shoulderangle1" value="Even" <?php if($mudata !="" && $mudata->shoulderangle  !="" && $mudata->shoulderangle  == "Even") { echo "checked"; } ?> <?php if($mudata=="" OR $mudata->shoulderangle =="0"){ echo "Checked"; } ?>>
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="shoulderangle" id="shoulderangle2" value="Lower Right" <?php if($mudata !="" && $mudata->shoulderangle  !="" && $mudata->shoulderangle  == "Lower Right") { echo "checked"; } ?>> 
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label style="width:0%;">
                                <input type="radio" name="shoulderangle" id="shoulderangle3" value="Lower Left" <?php if($mudata !="" && $mudata->shoulderangle  !="" &&  $mudata->shoulderangle  == "Lower Left") { echo "checked"; } ?>>
                              </label></td>
                            </tr>
                          </table>
						  <tr style="position:relative;top:-15px;">
							<td colspan="3" align="left" valign="bottom">
							<table width="100%" align="center">
									<tr>
											<td align="center" valign="bottom">
											  <div class="">	
												<!---<a href="<?php echo $base_url; ?>cart/shouldertype/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>--->
												
												<button type="submit" class="btn btn-info btn-send-message-2b" style="padding:0.5% 10% 0.5% 10%;font-size:18px">SUBMIT</button>                  
																	
												</div></td>
									</tr>                          
							</table></td>
			</tr>
                        </form>
                        </td>
                      </tr>
                  </table>
                  <table width="100%" align="center" style="margin:15px 0px;">
			
                        </table>
                </span>
			</div><!-- .post-thumbnail -->
		</div>
		<!---- shoulder angle end ----->
		</form>
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

/*
 * script for converting the height into cms
 * @Author MSYS009
*/
jQuery(".cms-conv-cls").change(function(){
	var footValue=jQuery("#foot").val();
	var inchValue=jQuery("#inch").val();
	if(footValue && inchValue)
	{
		footValue=footValue.replace("ft","");		
		var cmValue=(footValue*30.48)+(inchValue*2.54);
		jQuery("#impheight").val(cmValue.toFixed(1));
	}else if(footValue){
		footValue=footValue.replace("ft","");
		var cmValue=parseFloat(footValue*30.48);		
		jQuery("#impheight").val(cmValue.toFixed(1));
	}else if(inchValue){	
		var cmValue=parseFloat(inchValue*2.54);
		jQuery("#impheight").val(cmValue.toFixed(1));
	}else{
		jQuery("#impheight").val('');
	}
	
});
/*
 * script for converting the weight into lbs
 * @Author MSYS009
*/
jQuery(".lbs-conv-cls").blur(function(){
	var weightValue=$(this).val();
	if(weightValue){	
		var lbsValue=parseFloat(weightValue*2.20462);
		jQuery("#impweight").val(lbsValue.toFixed(1));
	}else{
		jQuery("#impweight").val('');
	}
});
</script>
</body>
</html>
