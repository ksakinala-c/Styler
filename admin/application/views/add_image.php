<?php include('include/header.php');?>
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
	function validate()
	{
		var imagename = $("#imagename").val();
		if(imagename == '')
		{
			alert('Please Enter imagename');
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
		<li class="active"><strong>Add Image</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Images
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>image/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered"  enctype="multipart/form-data"  role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>image/editimage">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_product">
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Imagename:</label>
					<div class="col-sm-5">
					  <input type="file" name="imagename" id="imagename"  >
                       
					</div>
				</div>
                		
          	</div>
		 </form>
 		</div>
		
 	</div>
</div>

 </div>

<?php include('include/footer.php');?>
</body>
</html>
