<?php include('include/header.php');?>
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
	function validate()
	{
		var subject = $("#subject").val();
		if(subject == '')
		{
			alert('Please Enter Subject.');
			return false;
		}
		
		$('#form').submit();
	}
</script>
 <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Send Email</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Send Email
                     </div>
					 <p style="color:green;"><?php echo $this->session->flashdata('item'); ?></p>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>email/sendemail1">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="send_email">
		
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						  <select id="ucategory" name="ucategory" class="form-control">
								<option value="">Select Category</option>
								<?php if($ucategory != '' && count($ucategory) > 0)
								{ foreach($ucategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>"><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Subject:</label>
					<div class="col-sm-5">
					  <input type="text" id="subject" name="subject" class="form-control" >
					</div>
				</div>
				
		      <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Description :</label>
					<div class="col-sm-5">
					 	 <textarea  type="text" id="content" name="content" class="form-control" rows="10" cols="50"></textarea>
					</div>
				</div>

			</div>
		 </form>
 		</div>
		
 	</div>
</div>

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
