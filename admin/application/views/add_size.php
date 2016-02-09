<?php include('include/header.php');?>
 

<script>
	function validate()
	{
		var title = $("#size").val();
		if(title == '')
		{
			alert('Please Enter Size');
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
 
        <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Size</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Size
                     </div>
                     <div class="col-6 col-sm-4 col-lg-3 firm"  style="float:right;">
					 
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>size/lists/<?php echo $this->uri->segment(3); ?>'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
					   <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>subcategory/lists/'">Back</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>size/add/<?php echo $this->uri->segment(3); ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_size">
		
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Size:</label>
					<div class="col-sm-5">
					  <input type="text" id="size" name="size" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Fit:</label>
						<div class="col-sm-5">
						<select style="" id="fit" name="fit" class="form-control" >
								<option value="">Select Fit </option>
								<option value="1">Regular</option>
								<option value="2">Tailored</option>
								<option value="3">Slim</option>
 						</select>
						</div>
				</div>
				
				 <?php
					if($allparts != '' && count($allparts) > 0) {  
					foreach($allparts as $product)
					{
						//print_r($product);
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail"><?php echo $product->pname; ?>:</label>
							<div class="col-sm-5">
							  <input type="hidden" id="" name="partsdata[]" value="<?php echo $product->id; ?>" class="form-control" >
							  <input type="text" id="parts" name="partsvalue[]" onblur="validate1(this.value,'<?php echo $product->pname; ?>');" class="form-control" >
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
