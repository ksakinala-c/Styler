<?php include('include/header.php');?>
 

<script>
	function validate()
	{
		var fname = $("#fname").val();
		if(fname == '')
		{
			alert('Please Enter Fabric Name');
			return false;
		}
		
		$('#form').submit();
	}
</script>
 
        <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Material</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Material
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>newfabric/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>newfabric/add/<?php echo $this->uri->segment(3); ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_newfabric">
		
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> Material Name:</label>
					<div class="col-sm-5">
					  <input type="text" id="fname" name="fname" class="form-control" >
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
