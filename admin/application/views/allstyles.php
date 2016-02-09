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
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Product Name</th>
			<th><b>Details</b></th>
           </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
		 <?php
		if($allstyles != '' && count($allstyles) > 0) {  
		foreach($allstyles as $measure)
		{
			// echo "<pre>";print_r($measure);
		 ?>
		<tr class="odd">
 			
			  <td> <?php echo $measure->pname; ?></td>
			 
			  <td>  <table width="50%" border="1">
										<?php $arr3d = json_decode($measure->details); 
									 // print_r($arr3d);die;
									  
									  ?>
										    <tr>
                                            <td height="20" align="left" valign="middle"><strong>Shirt Fabric </strong></td> <td><?php echo $this->users_model->fabricname($arr3d->base_fabric); ?></td></tr>
                                            <tr>
                                            <td height="20" align="left" valign="middle"><strong>Sleeves</strong></td> <td><?php echo ucfirst($arr3d->sleeves); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Collar Type</strong></td> <td><?php echo ucfirst($arr3d->collar); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Cuff Type</strong></td> <td><?php echo ucfirst($arr3d->cuffs); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket</strong></td> <td><?php if($arr3d->pocket_left == '0'){ echo "None"; } else { echo "Yes"; } ?></td></tr>
											<?php if($arr3d->pocket_left == '1'){ ?>
											<tr><td height="20" align="left" valign="middle"><strong>Pocket Fabric</strong></td> <td><?php echo $arr3d->pocket_fabric; ?></td></tr>
											<?php } ?>

 											<tr><td height="20" align="left" valign="middle"><strong>Shirt Back</strong></td> <td><?php echo ucfirst($arr3d->pleat); ?></td></tr>
 											<tr> <td height="20" align="left" valign="middle"><strong>Bottom Style</strong></td> <td><?php echo ucfirst($arr3d->hem); ?></td></tr>
                                            <tr><td height="20" align="left" valign="middle"><strong>Button</strong></td> <td><?php echo ucfirst($arr3d->buttons); ?></td></tr>
										
											<tr><td height="20" align="left" valign="middle"><strong>Outer Contrast</strong></td> <td><?php echo $arr3d->cleric; ?></td></tr>
											
											<?php if($arr3d->cleric != '') { ?>

											<tr><td height="20" align="left" valign="middle"><strong>Outer Collar Fabric</strong></td> <td><?php echo $this->users_model->fabricname($arr3d->collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Outer Cuffs Fabric</strong></td> <td><?php echo $this->users_model->fabricname($arr3d->cuffs_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Placket Fabric</strong></td> <td><?php echo $this->users_model->fabricname($arr3d->inner_buttons_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Collar Fabric</strong></td> <td><?php echo $this->users_model->fabricname($arr3d->inner_collar_fabric); ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Inner Cuffs Fabric</strong></td> <td><?php echo $this->users_model->fabricname($arr3d->inner_cuffs_fabric); ?></td></tr>

											<?php } ?> 

											<tr><td height="20" align="left" valign="middle"><strong>Signature</strong></td> <td><?php echo $arr3d->monogram; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Text</strong></td> <td><?php echo $arr3d->monogram_text; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Placement</strong></td> <td><?php echo $arr3d->monogram_location; ?></td></tr>
											<tr><td height="20" align="left" valign="middle"><strong>Signature Color</strong></td> <td><?php echo $arr3d->monogram_color; ?></td></tr>
										 
                                          </tr>
                                        
                                        </table>
 </td>			
			 
		</tr>
		<?php }} else { ?>
			<td class="" colspan="10" align="center">No Styles Added</td>
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
