<?php include('include/header.php');?>	
 
<script>
	function validate(){
		$('#form').submit();
	}
	
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Measure Data</strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					Edit Measure Data
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>reguser/view/<?php echo $this->uri->segment(4); ?>'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>reguser/medit/<?php echo $id; ?>/<?php echo $this->uri->segment(4); ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_measurement">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
			
				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
					Profile Name:
					</div>
 				</div>
				</div>
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Profile Name:</label>
                    <div class="col-sm-5">
                       <input type="text" id="userprofilename" name="userprofilename" 
					   value="<?php echo $userprofilename;?>" class="form-control">
                    </div>
                </div> 
			<!--div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
					Product:
					</div>
 				</div>
				</div>
					
				<div class="form-group" style="display:none;">
                    <label class="col-sm-2 control-label" for="inputEmail">Order Id:</label>
                    <div class="col-sm-5">
                       <input type="text" id="orderid" name="orderid" 
					   value="<?php echo $orderid;?>" readonly class="form-control">
                    </div>
                </div> 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Product Name:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pid" name="pid" 
					   value="<?php echo $this->reguser_model->getproname($pid); ?>" readonly class="form-control">
                    </div>
                </div> 
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Style Name:</label>
                    <div class="col-sm-5">
                       <input type="text" id="style_id" name="style_id" 
					   value="<?php echo $this->reguser_model->getstylename($style_id); ?>" readonly class="form-control">
                    </div>
                </div--> 
				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						For Matric :
					</div>
 				</div>
				</div>
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Height in FT:</label>
                    <div class="col-sm-5">
					    <select id="metricft" name="metricft" class="form-control">
										<option value="">Select FT </option>
										<option value="4ft" <?php if($metricft == "4ft"){ echo "Selected"; } ?> >4 FT</option>
										<option value="5ft" <?php if($metricft == "5ft"){ echo "Selected"; } ?> >5 FT</option>
										<option value="6ft" <?php if($metricft == "6ft"){ echo "Selected"; } ?> >6 FT</option>
										<option value="7ft" <?php if($metricft == "7ft"){ echo "Selected"; } ?> >7 FT</option>
										<option value="8ft" <?php if($metricft == "8ft"){ echo "Selected"; } ?> >8 FT</option>
						</select>
                    </div>
                </div> 
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Height Inc:</label>
                    <div class="col-sm-5">
                        
					   <select id="metricinch" name="metricinch" class="form-control">
										<option value="">Select INCH </option>
										<option value="0" <?php if($metricinch == "0"){ echo "Selected"; } ?> >0 IN </option>
										<option value="1" <?php if($metricinch == "1"){ echo "Selected"; } ?> >1 IN</option>
										<option value="2" <?php if($metricinch == "2"){ echo "Selected"; } ?> >2 IN</option>
										<option value="3" <?php if($metricinch == "3"){ echo "Selected"; } ?> >3 IN</option>
										<option value="4" <?php if($metricinch == "4"){ echo "Selected"; } ?> >4 IN</option>
										<option value="5" <?php if($metricinch == "5"){ echo "Selected"; } ?> >5 IN </option>
										<option value="6" <?php if($metricinch == "6"){ echo "Selected"; } ?> >6 IN</option>
										<option value="7" <?php if($metricinch == "7"){ echo "Selected"; } ?> >7 IN</option>
										<option value="8" <?php if($metricinch == "8"){ echo "Selected"; } ?> >8 IN</option>
										<option value="9" <?php if($metricinch == "9"){ echo "Selected"; } ?> >9 IN</option>
										<option value="10" <?php if($metricinch == "10"){ echo "Selected"; } ?> >10 IN </option>
										<option value="11" <?php if($metricinch == "11"){ echo "Selected"; } ?> >11 IN</option>
										 
										 
						</select>
                    </div>
                </div> 
				
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Weight [POUNDS]:</label>
                    <div class="col-sm-5">
                       <input type="text" id="metricweight" name="metricweight" 
					   value="<?php echo $metricweight;?>" class="form-control">
                    </div>
                </div> 
				
				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						For Imperial :
					</div>
 				</div>
				</div>
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Height in CM:</label>
                    <div class="col-sm-5">
                       <input type="text" id="impheight" name="impheight" 
					   value="<?php echo $impheight;?>" class="form-control">
                    </div>
                </div> 
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Weight in KGS:</label>
                    <div class="col-sm-5">
                       <input type="text" id="impweight" name="impweight" 
					   value="<?php echo $impweight;?>" class="form-control">
                    </div>
                </div> 
				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Select Your Posture :
					</div>
 				</div>
				</div>
				
				 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Posture:</label>
                    <div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/posture-img1.jpg" />
							&nbsp;<br><br>&nbsp;
							Average:&nbsp;&nbsp;&nbsp;<input type="radio" name="posture" id="posture" <?php if($posture == "1") { echo "Checked"; } ?> value="1"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/posture-img1.jpg" />
							&nbsp;<br><br>&nbsp;
							Forward Learning:&nbsp;&nbsp;&nbsp;<input type="radio" name="posture" id="posture" <?php if($posture == "2") { echo "Checked"; } ?> value="2"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/posture-img1.jpg" />
							&nbsp;<br><br>&nbsp;
							Straight:&nbsp;&nbsp;&nbsp;<input type="radio" name="posture" id="posture" <?php if($posture == "3") { echo "Checked"; } ?> value="3"/>
							
					</div>
                </div> 
				
				

				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Select Your Shoulder Type :
					</div>
 				</div>
				</div>
				
				 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Shoulder type:</label>
                    <div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-img1.jpg" />
							&nbsp;<br><br>&nbsp;
							Average:&nbsp;&nbsp;&nbsp;<input type="radio" name="shouldertype" id="shouldertype" <?php if($shouldertype == "Average") { echo "Checked"; } ?> value="Average"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-img2.jpg" />
							&nbsp;<br><br>&nbsp;
							Straight:&nbsp;&nbsp;&nbsp;<input type="radio" name="shouldertype" id="shouldertype" <?php if($shouldertype == "Straight") { echo "Checked"; } ?> value="Straight"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-img3.jpg" />
							&nbsp;<br><br>&nbsp;
							Sloping:&nbsp;&nbsp;&nbsp;<input type="radio" name="shouldertype" id="shouldertype" <?php if($shouldertype == "Sloping") { echo "Checked"; } ?> value="Sloping"/>
							
					</div>
                </div> 
				
				
				<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Select Your Shoulder Angle :
					</div>
 				</div>
				</div>
				
				 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Shoulder Angle:</label>
                    <div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-should1.jpg" />
							&nbsp;<br><br>&nbsp;
							Even:&nbsp;&nbsp;&nbsp;<input type="radio" name="shoulderangle" id="shoulderangle" <?php if($shoulderangle == "Even") { echo "Checked"; } ?> value="Even"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-should2.jpg" />
							&nbsp;<br><br>&nbsp;
							Lower Light:&nbsp;&nbsp;&nbsp;<input type="radio" name="shoulderangle" id="shoulderangle" <?php if($shoulderangle == "Lower Light") { echo "Checked"; } ?> value="Lower Light"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-should3.jpg" />
							&nbsp;<br><br>&nbsp;
							Lower Left:&nbsp;&nbsp;&nbsp;<input type="radio" name="shoulderangle" id="shoulderangle" <?php if($shoulderangle == "Lower Left") { echo "Checked"; } ?> value="Lower Left"/>
							
					</div>
                </div> 
				 
				
			 	 <div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Select Your Fit :
					</div>
 				</div>
				</div>
				
				 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Shoulder Fit:</label>
                    <div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-fit2.jpg" />
							&nbsp;<br><br>&nbsp;
							Regular:&nbsp;&nbsp;&nbsp;<input type="radio" name="fit" id="fit" <?php if($fit == "1") { echo "Checked"; } ?> value="1"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-fit1.jpg" />
							&nbsp;<br><br>&nbsp;
							Tailored:&nbsp;&nbsp;&nbsp;<input type="radio" name="fit" id="fit" <?php if($fit == "2") { echo "Checked"; } ?> value="2"/>
							
					</div>
					<div class="col-sm-2">
							 
							<img style="height: 150px; width:100px;" src="<?php echo $base_url_views; ?>images/body-fit3.jpg" />
							&nbsp;<br><br>&nbsp;
							Slim:&nbsp;&nbsp;&nbsp;<input type="radio" name="fit" id="fit" <?php if($fit == "3") { echo "Checked"; } ?> value="3"/>
							
					</div>
                </div> 
				 
				 <?php if($serializedata !=""){ ?>
				 <div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Shirt Measurement:
					</div>
 				</div>
				</div>
						<?php 
								$uns = unserialize($serializedata);
								 //PRINT_R($uns);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 //echo $this->product_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
						?>
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail"><?php echo $this->product_model->bodypartname($array1[$k]); ?>:</label>
							<div class="col-sm-5">
							<input name="bodypartid[]" type="hidden" id="measurevalue" value="<?php echo $array1[$k]; ?>" size="20" >
							   <input type="text" id="measurevalue1" name="bodypartvalue[]" 
							   value="<?php echo $array2[$k];?>" class="form-control">
							</div>
						</div> 
				
					<?php } } ?> 
						<?PHP } ?>
			 
					 
		
		
                    
					
 				</div>
 			</div>
 		</div>
	</div>
 </form>
 </div>
   
<?php include('include/footer.php');?>
</body>
</html>