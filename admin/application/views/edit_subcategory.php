<?php include('include/header.php');?>	

<script>
	function validate(){
		var catid = $("#catid").val();
		if(catid == ''){
			alert('Please select Category ');
			return false;
		}
		var scname = $("#scname").val();
		if(scname == ''){
			alert('Please Enter Sub Category');
			return false;
		}
		var pa=document.getElementById('scname');
		var p = /[a-zA-Z\s-, ]+$/; 
		if(!p.test(pa.value))
			{
				alert("Please Enter Valid Sub Category ");
				return false;
			}
		 /*var title = $("#title").val();
		if(title == ''){
			alert('Please Enter Title. ');
			return false;
		}

		var description = $("#description").val();
		if(description == ''){
			alert('Please Enter Description.');
			return false;
		}
		
		var keyword = $("#keyword").val();
		if(keyword == ''){
			alert('Please Enter Keyword. ');
			return false;
		}*/
		
		/* var image = $("#image").val();
		if(image == ''){
			alert('Please Add Image. ');
			return false;
		} */
		$('#form').submit();
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit SubCategory  <?php  $scname; ?></strong></li>
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
					 Edit SubCategory  
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>subcategory/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."subcategory/edit/".$id; ?>" enctype="multipart/form-data" w>
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_subcategory">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					<INPUT TYPE="hidden" NAME="hiddenaction1" VALUE="<?php echo $catid;?>">
					<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						    <select id="catid" name="catid" class="form-control">
								<option value="">Select Category</option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id == $catid){ ?> selected = 'selected' <?php } ?>><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
						</div>
					</div>
				 
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail">Subcategory Name:</label>
						<div class="col-sm-5">
						  <input type="text" id="scname" name="scname" value="<?php echo $scname;?>" class="form-control">
						</div>
                    </div> 	
							
					
					
					<div class="form-group">		
					<label class="col-sm-2 control-label" for="inputEmail">Image:</label>	
				    <div class="col-sm-5">		
					<input type="file" id="image" name="image" class="form-control"><img src="<?php echo $front_base_url;?>upload/subcategory/small/<?php echo $image; ?>" />
					<label class="col-sm control-label" for="" style="color:green;">Image Dimension : 1500*278</label>
					<a class="" title="cancel order" href="#" data-toggle="modal" data-target="#basicModal1">  
						<i class="">Preview</i></a>								
					</div>				
					</div>
					<div class="form-group">		
					<label class="col-sm-2 control-label" for="inputEmail">Banner:</label>	
				    <div class="col-sm-5">		
					<input type="file" id="banner" name="banner" class="form-control"><img src="<?php echo $front_base_url;?>upload/subcategory/small/<?php echo $banner; ?>" />
					<label class="col-sm control-label" for="" style="color:green;"></label>
					<a class="" title="cancel order" href="#" data-toggle="modal" data-target="#basicModal1">  
						</a>								
					</div>				
					</div>

					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Title:</label>
                    <div class="col-sm-5">
                       <input type="text" id="title" name="title" value="<?php echo $title;?>" class="form-control">
                    </div>
                    </div> 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Description:</label>
                    <div class="col-sm-5">
                       <textarea type="text" id="description" name="description" value="<?php echo $description;?>" class="form-control"><?php echo $description;?></textarea>
                    </div>
                    </div> 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Keywords:</label>
                    <div class="col-sm-5">
                       <input type="text" id="keyword" name="keyword" value="<?php echo $keyword;?>" class="form-control"> ( Comma Separated Keywords )
                    </div>
                    </div> 

					
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Homepage Image:</label>
					    <div class="col-sm-5">
					      <input style="width:auto;" type="checkbox" id="homepage" name="homepage" value="1" <?php if($homepage == '1') { echo "Checked";  } ?> class="form-control">
					    </div>
					  </div>
					 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pageurl" name="pageurl" value="<?php echo $pageurl;?>"  class="form-control">
                    </div>
                    </div> 
 				</div>
				</form>
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
													 <img src="<?php echo $front_base_url;?>upload/subcategory/<?php echo $image; ?>">
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