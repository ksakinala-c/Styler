<?php include('include/header.php');?>	

 
<script>
	function validate(){
		var size = $("#size").val();
		if(size == ''){
			alert('Please Enter Size Name.');
			return false;
		}
 var fit = $("#fit").val();
		if(fit == '')
		{
			alert('Please Select Fit.');
			return false;
		}
	 
		 
		$('#form').submit();
	}
		function validate1(val, name)
	{
		
		var parts = val;
		if(parts == '')
		{
			alert('Please enter the	'+name);
			return false;
		}
		 
		
	//	$('#form').submit();
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Size  <?php  $size; ?></strong></li>
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
					 Edit Size  
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>size/lists/<?php echo $this->uri->segment(4); ?>'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."size/edit/".$id.'/'.$subcatid; ?>" enctype="multipart/form-data" >
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_size">
					 
					<div class="panel-body">
				 	<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Size :</label>
					<div class="col-sm-5">
					  <input type="text" id="size" name="size" class="form-control" value="<?php echo $size; ?>">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Fit:</label>
						<div class="col-sm-5">
						<select style="" id="fit" name="fit" class="form-control" >
								<option value="">Select Fit </option>
								 
										<option value="1" <?php if($fit == "1"){ echo "Selected"; } ?>>Regular</option>
										<option value="2" <?php if($fit == "2"){ echo "Selected"; } ?>>Tailored</option>
										<option value="3" <?php if($fit == "3"){ echo "Selected"; } ?>>Slim</option>
						
						   </select>
						   </div>
				</div>
				
				 <?php
					if($allparts != '' && count($allparts) > 0) {  
					foreach($allparts as $product)
					{
						//print_r($product);die;
						$updatedpartdata = $this->size_model->getpartsname($product->id,$id);
						//print_r($updatedpartdata);
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail"><?php echo $product->pname; ?>:</label>
							<div class="col-sm-5">
							  <input type="hidden" id="" name="partsdata[]" value="<?php echo $product->id; ?>" class="form-control" >
							  <input type="text" id="parts" onblur="validate1(this.value,'<?php echo $product->pname; ?>');" name="partsvalue[]" value="<?php echo $updatedpartdata->partvalue; ?>" class="form-control" >
							  <input type="hidden" id="" name="attrid[]" value="<?php echo $updatedpartdata->id; ?>" class="form-control" >
							</div>
						</div>
					<?php }} ?>
			 
			 
				
 				</div>
				</form>
 		</div>
 	</div>
	</div>
 </div>
   
<?php include('include/footer.php');?>
</body>
</html>