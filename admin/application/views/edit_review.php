<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate()
	{
		$('#form').submit();
	}
</script>
<style>
.ui-datepicker-trigger {
    margin: -29px 0 0 434px !important;
    position: absolute;
    z-index: 9;
}
</style>
<link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Review</strong></li>
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
					 Edit Review
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button onclick="javascript:window.location.href='<?php echo $base_url; ?>review/lists'" class="btn btn-default">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>review/edit/<?php echo $id; ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" id="action" VALUE="edit_review" >
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">User Name:</label>  
					<div class="col-sm-5">
					  <input type="text" id="userid" name="userid" class="form-control" 
					  value="<?php echo $this->review_model->getuname($userid); ?>" readonly>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Product Name:</label>  
					<div class="col-sm-5">
					  <input type="text" id="product_id" name="product_id" class="form-control" 
					  value="<?php echo $this->review_model->getproname($product_id); ?>" readonly >
					</div>
				</div>
		
				  <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Title:</label>  
					<div class="col-sm-5">
					  <input type="text" id="title" name="title" class="form-control" value="<?php echo $title;?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Review:</label>  
					<div class="col-sm-5">
					  <textarea type="text" id="review" name="review" class="form-control" value=""><?php echo $review;?></textarea>
					</div>
				</div>	
                
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Rattings:</label>
						<div class="col-sm-5">
						<select style="" id="ratings" name="ratings" class="form-control" >
								<option value="">Select Rating </option>
								 
										<option value="1" <?php if($ratings == '1') { echo "Selected"; }?>>1 Star</option>
										<option value="2" <?php if($ratings == '2') { echo "Selected"; }?>>2 Star</option>
										<option value="3" <?php if($ratings == '3') { echo "Selected"; }?>>3 Star</option>
										<option value="4" <?php if($ratings == '4') { echo "Selected"; }?>>4 Star</option>
										<option value="5" <?php if($ratings == '5') { echo "Selected"; }?>>5 Star</option>
						
						   </select>
						   </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Date:</label>  
					<div class="col-sm-5">
					  <input type="text" id="date" name="date" class="form-control" value="<?php echo $date;?>">
					</div>
				</div>		
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Status:</label>  
					<div class="col-sm-1">
					  <input type="checkbox" id="enable" name="enable" class="form-control" value="1" <?php if($enable == '1'){ echo "Checked"; }?> >
					</div>
				</div>		
				 
			</div>
		 </form>
 </div>
    
<?php include('include/footer.php');?>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js"></script>
<link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script type="text/javascript">
	var jq = $.noConflict();
		jq(document).ready(function(){
		jq( "#date" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
		 
	});
	
	</script>
	 <script>
CKEDITOR.replace('review',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

</body>
</html>
