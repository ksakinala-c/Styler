<?php include('include/header.php');?>	
 
<script>
	function validate()
	{

		 
		$('#form').submit();
	}

	
</script>
 <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Popup</strong></li>
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
					 Edit Popup
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>popup/edit/<?php echo $id; ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" id="action" VALUE="edit_popup" >
				 
				 
				 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Active:</label>
                    <div class="col-sm-5">
                       <input type="checkbox" id="active" <?php if($active == "1"){ echo "Checked"; } ?> name="active" value="1" class="form-control">  
                    </div>
                    </div> 
					
				 <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Header Text:</label>  
					<div class="col-sm-5">
					  <textarea type="text" id="text" name="text" class="form-control" value="<?php echo $text ; ?>"><?php echo $text ; ?></textarea>
					</div>
				</div>

					
				 <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Footer Text:</label>  
					<div class="col-sm-5">
					  <textarea type="text" id="footertext" name="footertext" class="form-control" value="<?php echo $footertext ; ?>"><?php echo $text ; ?></textarea>
					</div>
				</div>
				
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Image:</label>	
						<div class="col-sm-5">		
						<input type="file" id="image" name="image" class="form-control">
						<img src="<?php echo $front_base_url;?>/upload/<?php echo $image; ?>" height="100px" width="100px" />	
						 							
						</div>			
					</div> 
					
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Display Subscription form:</label>
                    <div class="col-sm-5">
                       <input type="checkbox" id="display" <?php if($display == "1"){ echo "Checked"; } ?> name="display" value="1" class="form-control">  
                    </div>
                    </div> 
               
			 
			</div>
		 </form>
 </div>
  <script>
CKEDITOR.replace('text',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<script>
CKEDITOR.replace('footertext',
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
