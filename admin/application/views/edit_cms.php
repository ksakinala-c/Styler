<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate(){
		var title = $("#title").val();
		if(title == ''){
			alert('Please Enter  Title');
			return false;
		}
		
		var content = $("#content").val();
		if(content == ''){
			alert('Please Enter Description');
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
		<li class="active"><strong>Edit Cms</strong></li>
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
					 Edit Cms 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>cms/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>cms/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_content">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
			
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Title:</label>
                    <div class="col-sm-5">
                       <input type="text" id="title" name="title" 
					   value="<?php echo $title;?>" class="form-control">
                    </div>
                    </div> 

					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Content :</label>
                    <div class="col-sm-5">
                        <textarea  type="text" id="content" name="content" class="form-control" rows="10" cols="50"><?php echo $content;?></textarea>
                    </div>
                    </div> 
		
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Page Url:</label>
					<div class="col-sm-5">
					  <input type="text" id="pageurl" value="<?php echo $pageurl;?>" name="pageurl" class="form-control" >
					</div>
				</div>
                    
					
 				</div>
 			</div>
 		</div>
	</div>
 </form>
 </div>
  <script>
CKEDITOR.replace('content',
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