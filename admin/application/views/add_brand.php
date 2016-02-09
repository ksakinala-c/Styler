<?php include('include/header.php');?>



<script>
	function validate(){
		var bname = $("#bname").val();
		if(bname == ''){
			alert('Please Enter Brand Name ');
			return false;
		}

	 
		/*var colourcode = $("#colourcode").val();
		if(colourcode == ''){
			alert('Please Enter Colour Code ');
			return false;
		}*/

		 

		$('#form').submit();
	}

</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Brand</strong></li>
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
					 Add Brand
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>brand/lists'">Cancel</button>

                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>brand/add" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_brand">
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Color Name :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="bname" name="bname" class="form-control" value="<?php echo $bname;?>">
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
