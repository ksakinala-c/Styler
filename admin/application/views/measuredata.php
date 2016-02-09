<?php
include('include/header.php');?>

<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Users</a></li>
    <li class="active"><strong>Measure Data</strong></li>
  </ol>
  
  
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title">Measure Data Details
  <button class="btn btn-default" style="float:right;" onclick="javascript:window.location.href='<?php echo $base_url;?>reguser/lists'">Cancel</button>
</h6>


</div>

     <div class="col-6 col-sm-12 col-lg-12 action">
	 
      <div class="success">
		<?php echo $this->session->flashdata('msg'); ?>
      </div>
	  
    </div>
	
  </div>
  
 

  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
   
      
	  <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
			<th>
              <h4>Item</h4>
            </th>
			 
            <th>
              <h4>Height/Weight</h4>
            </th>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Fit</h4>
            </th>
			            <th>
              <h4>Measurements</h4>
            </th>
            <th>
              <h4>3d Parameters</h4>
            </th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
             
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
		 <?php
		if($allmeasuredata != '' && count($allmeasuredata) > 0) {  
		foreach($allmeasuredata as $measure)
		{
			// echo "<pre>";print_r($measure);
		 ?>
		<tr class="odd">
			<!-- td class=""><?php echo $this->users_model->getstylename($measure->style_id); ?></td>
			<td class=""><?php echo $this->users_model->getproname($measure->pid); ?></td-->
			<?php if($ord1->save3d == '1') { ?>
				<td class=" "> 
						Product Name: <?php echo $measure->order_item_name;?>
				</td>
			<?php } else { ?>
				<td class=" ">Style Name: <?php //echo $this->product_model->stylename($measure->product_id);?> <br /> 
					Product Name: <?php //echo $this->product_model->fabricname($measure->fabricid);?>
				</td>
			<?php } ?>
			
			 <td>Height: <?php echo $measure->metricft; ?> feet <?php echo $measure->metricinch; ?> Inches <br/>
				 Weight: <?php echo $measure->metricweight; ?></td>
				 
				<td>Body Type: <?php 
								$post = $measure->posture; 
								if($post == "1") { echo "Broad"; }
								if($post == "2") { echo "Column"; }
								if($post == "3") { echo "Oval"; }
							?><br />
							Shoulder Type:  <?php 
									echo ucfirst($measure->shouldertype); 
 								?> <br /> Shoulder Angle: <?php 
									echo ucfirst($measure->shoulderangle); 
								?></td>
				<td> <?php 
								 $post = $measure->fit; 
								if($post == "1") { echo "Regular"; }
								if($post == "2") { echo "Tailored"; }
								if($post == "3") { echo "Slim"; }	
								?></td>
			 
			 <td> <?php 
						if($measure->type == '1') { echo "Standard Sizes"; }
						if($measure->type == '2') { echo "Shirt Measurement"; }
						if($measure->type == '3') { echo "Body Measurement"; } 
						if($measure->type == '4') { echo "Brand Sizes"; }
						?> <br/> 
						
						<?php
							if($measure->type != '4') {
 						$serdata = $measure->serializedata;
						$uns = unserialize($serdata);
								if($uns != '') {
							  	$array1 = explode(',', $uns[0]);
								$array2 = explode(',', $uns[1]);  
							
								for($k='0';$k<count($array1);$k++){
									 echo $this->product_model->bodypartname($array1[$k])." => ".$array2[$k]." <br/>";  
								}
						}
						 } else { ?>
						Brand:  <?php echo $this->product_model->brandsize($measure->brandid); ?> <br/> 	
						Fit: <?php echo $this->product_model->fitmeasure($measure->fitid); ?><br/> 	
						Size: <?php echo $this->product_model->sizemeasure($measure->sizeid); ?><br/> 	
 
						<?php }
			 ?>
						
						 </td>
						<td><?php if($ord1->save3d == '1') {
 					?>
					 
					<p>3D Parameter:<table   border="1">
										<?php
  					$arr3d = json_decode($ord1->details3d);   ?>
										    <tr>
                                            <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td></tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr>
											<?php } ?>

 											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td></tr>
 											<tr> <td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td></tr>
                                            <tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td></tr>
										
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->product_model->getfabricname1($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
										    <tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Placket</strong></td> <td><?php echo $arr3d->placket; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo $arr3d->hem; ?></td></tr>
											<tr><td style="color:#50b1d1;" height="20" align="left" valign="middle"><strong>Back Style</strong></td> <td><?php echo $arr3d->pleat; ?></td></tr>

                                          </tr>
                                        
                                        </table>
                                    </p>
                                   
						 
					 
				<?php } ?></td>
						<td class=" ">
				<a href="<?php echo $base_url; ?>reguser/medit/<?php echo $measure->id; ?>/<?php echo $this->uri->segment(3); ?>" title="Edit" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
		</tr>
		<?php }} else { ?>
			<td class="" colspan="10" align="center"> Measure Data Not Available.!! </td>
		<?php } ?>
				
		</tbody>
		
      </table>
    </form>
  </div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>
