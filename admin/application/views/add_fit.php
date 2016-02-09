<?php include('include/header.php');?>



<script>
	function validate(){
		
		var brandid = $("#brandid").val();
		if(brandid == ''){
			alert('Please Select Brand Name.');
			return false;
		}

		var fitname = $("#fitname").val();
		if(fitname == ''){
			alert('Please Enter Fit Name.');
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
		<li class="active"><strong>Add Fit</strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Fit
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>fit/lists'">Cancel</button>

                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>fit/add" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_fit">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Brand :</label>
						<div class="col-sm-5">
						  <select id="brandid" name="brandid" class="form-control" >
								<option value="">Select Brand </option>
								<?php if($allbrand != '' && count($allbrand) > 0)
								{ foreach($allbrand as $brand) { ?>
										<option value="<?php echo $brand->id; ?>"><?php echo $brand->bname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Fit Name :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="fitname" name="fitname" class="form-control" >
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
