<?php include('include/header.php');?>

<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Banner - <?php echo $image; ?></strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0" style="min-height: 200px;">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Edit Banner - <?php echo $caption; ?>
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>banner/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="$('#form').submit();">Submit</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."banner/edit/".$id; ?>" enctype="multipart/form-data" >
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_banner">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					   <div class="panel-body">     
                
					
					
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control"><img src="<?php echo $front_base_url;?>upload/banner/small/<?php echo $image; ?>" />
						  <a class="" title="cancel order" href="#" data-toggle="modal" data-target="#basicModal1">  
						<i class="">Preview</i></a>	
					    </div>
						
					  </div>
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Caption:</label>
					    <div class="col-sm-5">
					      <input type="text" id="caption" name="caption" class="form-control" value="<?php echo $caption; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="slider_header">Slider Header:</label>
					    <div class="col-sm-5">
					        <input type="text" id="slider_header" name="slider_header" class="form-control" value="<?php echo $slider_header; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="slider_content">Slider Content:</label>
					    <div class="col-sm-5">
					      <textarea id="slider_content" name="slider_content" class="form-control"><?php echo $slider_content; ?></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="button_label">Button Label:</label>
					    <div class="col-sm-5">
					       <input type="text" id="button_label" name="button_label" class="form-control" value="<?php echo $button_label; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="button_bgcolor">Button bgcolor:</label>
					    <div class="col-sm-5">
					       <input type="text" id="button_bgcolor" name="button_bgcolor" class="form-control jscolor" value="<?php echo $button_bgcolor; ?>">
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">URL:</label>
					    <div class="col-sm-5">
					      <input type="text" id="url" name="url" class="form-control" value="<?php echo $url; ?>">
					    </div>
					  </div>
					    <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Order:</label>
					    <div class="col-sm-5">
					      <input type="text" id="order" name="order" class="form-control" value="<?php echo $order; ?>">
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Homepage Image:</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="homepage" name="homepage" value="1" <?php if($homepage == '1') { echo "Checked";  } ?> class="form-control">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">First Row :</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="first_row" value="1" name="first_row" value="1" <?php if($first_row == '1') { echo "Checked";  } ?> class="form-control">
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Second Row :</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="second_row" value="1" name="second_row" value="1" <?php if($second_row == '1') { echo "Checked";  } ?> class="form-control">
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Third Row:</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="third_row" value="1" name="third_row" value="1" <?php if($third_row == '1') { echo "Checked";  } ?> class="form-control">
					    </div>
					  </div>
				</form>
 			</div>
 		</div>
 	</div>
</div>

 </div>
 <div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
								<!--stat popup -->
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="panel-body">
											<form class="form-horizontal form-groups-bordered" id="form1" name="form1" method="post">
													 <img src="<?php echo $front_base_url;?>upload/banner/<?php echo $image; ?>">
												<div class="modal-footer" style="padding:10px;">
													<button type="button" class="btn btn-lg btn-red" data-dismiss="modal" style="background:#36b0c8; color:#fff; padding:3px 8px 4px 8px; font-size:17px;">Close</button>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
<?php include('include/footer.php');?>
</body>
</html>
