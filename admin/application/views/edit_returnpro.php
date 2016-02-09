<?php include('include/header.php');?>	

<script>
	function validate()
	{
		var status = $("#status").val();
		if(status == '')
		{
			alert('Please Enter Status Name');
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
		<li class="active"><strong>Edit Return Reason Status  <?php  $status; ?></strong></li>
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
					 Edit Return Reason Status  
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>returnpro/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."returnpro/edit/".$id; ?>" enctype="multipart/form-data" >
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_status">
					 
					<div class="panel-body">
				 	<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Status Name: </label>
					<div class="col-sm-5">
					  <input type="text" id="status" name="status" class="form-control" value="<?php echo $status; ?>">
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