<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate()
	{
		/*var free = document.getElementById('free').checked;
		var flatrate = document.getElementById('flatrate').checked;
		var weightbase = document.getElementById('weightbase').checked;
		if(free == "" && flatrate =="" && weightbase == ""){
            alert("Please Select Shipping Type.");
            return false;
        }  
        if(free != '' && flatrate !=""){
            alert("Please Select Only One Shipping Type.");
            return false;
        }  
		if(flatrate != '' && weightbase !=""){
            alert("Please Select Only One Shipping Type.");
            return false;
        }  
		if(free != '' && weightbase !=""){
            alert("Please Select Only One Shipping Type.");
            return false;
        }  */
		$('#form').submit();
	}
</script>

<link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Insider Data</strong></li>
  </ol>
  </div>
  </div>
  <?php if($this->session->flashdata('msg') !="") { ?><div class="success"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
	
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
				Edit Insider Data
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>wallet/insider/<?php echo $id; ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" id="action" VALUE="edit_insider" >
				 
				  
                <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Insider Content:</label>  
					<div class="col-sm-5">
				 	  <textarea id="insider" name="insider" class="form-control"><?php echo $insider;?></textarea>
					</div>
				</div>
				
			 
				
				 <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">1 Referral Amount:</label>  
					<div class="col-sm-5">
				 	  <input type="text" id="referral_amount" name="referral_amount" class="form-control" value="<?php echo $referral_amount;?> ">
					</div>
				</div>
				 
			</div>
		 </form>
 </div>
  <script>
CKEDITOR.replace('insider',
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
