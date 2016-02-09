<?php include('include/header.php');?>	

<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate(){
		var pname = $("#pname").val();
		if(pname == ''){
			alert('Please Enter Part Name.');
			return false;
		}
 
		var youtubeurl = $("#youtubeurl").val();
		if(youtubeurl == ''){
			alert('Please Enter URL');
			return false;
		}
		 
		$('#form').submit();
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Parts  <?php  $pname; ?></strong></li>
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
					 Edit Parts  
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>bodymeasure/lists/<?php echo $this->uri->segment(3); ?>'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."bodymeasure/edit/".$id; ?>" enctype="multipart/form-data" w>
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_bodymeasure">
					<INPUT TYPE="hidden" NAME="tblid" VALUE="<?php echo $id;?>">
					 
					 
					<div class="panel-body">
				 	<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Parts Name :</label>
					<div class="col-sm-5">
					  <input type="text" id="pname" name="pname" class="form-control" value="<?php echo $pname; ?>">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Description :</label>
					<div class="col-sm-5">
					 	 <textarea  type="text" id="desc" name="desc" class="form-control" rows="10" cols="50"><?php echo $desc; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">URL:</label>
					<div class="col-sm-5">
					  <input type="text" id="youtubeurl" name="youtubeurl" class="form-control" value="<?php echo $youtubeurl; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Display Order:</label>
					<div class="col-sm-5">
					  <input type="text" id="displayorder" name="displayorder" class="form-control" value="<?php echo $displayorder; ?>">
					</div>
				</div>	
				
 				</div>
				</form>
 		</div>
 	</div>
	</div>
 </div>
  <script>
CKEDITOR.replace('desc',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<?php include('include/footer.php');?>
</body>
</html>