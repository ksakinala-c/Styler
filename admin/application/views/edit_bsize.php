<?php include('include/header.php');?>	
<script>
	function validate(){
		
		var brandid = $("#brandid").val();
		if(brandid == ''){
			alert('Please Select Brand Name.');
			return false;
		}
		var fitid = $("#fitid").val();
		if(fitid == ''){
			alert('Please Select  Fit.');
			return false;
		}
			var size = $("#size").val();
		if(size == ''){
			alert('Please Enter Size.');
			return false;
		}

	 $('#form').submit();
	}
function get_fit(bid)
	{
	   //alert(cid);                                                                                                                                                                                      
		//country id
		var url = '<?php echo $base_url ?>bsize/show_fit/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'bid='+bid,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('prod1').innerHTML = msg ;
		}
		});
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Size > <?php echo $size; ?></strong></li>
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
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>bsize/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>bsize/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_bsize">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Brand :</label>
						<div class="col-sm-5">
						  <select id="brandid" name="brandid" class="form-control" Onchange="get_fit(this.value);">
								<option value="">Select Brand </option>
								<?php if($allbrand != '' && count($allbrand) > 0)
								{ foreach($allbrand as $brand) { ?>
										<option value="<?php echo $brand->id; ?>" <?php if($brand->id == $brandid) { echo "Selected"; }?>><?php echo $brand->bname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Fit :</label>
						<div class="col-sm-5">
						<span id="prod1">
						  <select id="fitid" name="fitid" class="form-control" >
								<option value="">Select Fit </option>
								<?php if($allfit != '' && count($allfit) > 0)
								{ foreach($allfit as $fit) { ?>
										<option value="<?php echo $fit->id; ?>" <?php if($fit->id == $fitid) { echo "Selected"; }?>><?php echo $fit->fitname; ?></option>
								<?php  } }	 ?>
						   </select>
						   </span>
					</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Size :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="size" name="size" value="<?php echo $size; ?>" class="form-control" >
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
