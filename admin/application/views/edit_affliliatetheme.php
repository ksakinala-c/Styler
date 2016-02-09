<?php include('include/header.php');?>

<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Affiliate Themes - <?php echo $themename; ?></strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0" style="min-height: 200px;">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Edit Affiliate Themes - <?php echo $themename; ?>
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>affliliate/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="$('#form').submit();">Submit</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."affliliate/edit/".$id; ?>" enctype="multipart/form-data" >
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_affliliatetheme">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					   <div class="panel-body">     
                
					
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Themes Name:</label>
					    <div class="col-sm-5">
					      <input type="text" id="themename" name="themename" class="form-control" value="<?php echo $themename; ?>">
					    </div>
					  </div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control"><img src="<?php echo $front_base_url;?>upload/affliliate/small/<?php echo $image; ?>" />
						  <a class="" title="cancel order" href="#" data-toggle="modal" data-target="#basicModal1">  
						<!--<i class="">Preview</i></a>	-->
					    </div>
						
					  </div>
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Url:</label>
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
					  
					   
				</form>
 			</div>
 		</div>
 	</div>
</div>

 </div>
 <?php /*<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
								<!--stat popup -->
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="panel-body">
											<form class="form-horizontal form-groups-bordered" id="form1" name="form1" method="post">
													 <img src="<?php echo $front_base_url;?>upload/theme/<?php echo $image; ?>">
												<div class="modal-footer" style="padding:10px;">
													<button type="button" class="btn btn-lg btn-red" data-dismiss="modal" style="background:#36b0c8; color:#fff; padding:3px 8px 4px 8px; font-size:17px;">Close</button>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>*/?>
<?php include('include/footer.php');?>
</body>
</html>
