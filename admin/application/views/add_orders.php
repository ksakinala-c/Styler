<?php include('include/header.php');?>

<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
 
 function validate()
	{
			var pname=$("#pname").val();
			if(pname=="")
			{
				alert("Please Enter First Product Name:");
				return false;
			}
			var pdesc=$("#pdesc").val();
			if(pdesc=="")
			{
				alert("Please Enter Last Product Desc.:");
				return false;
			}
			 jq(function() 
	{
		jq("#from_date").datepicker();
	});
		/*	var email=$("#email").val();
			if(email=="")
			{
				alert("Please enter the Email");
				return false;
			}
			var em = document.getElementById('email');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(em.value)) {
					alert('Please provide a valid email address');
					em.focus;
					return false;
			}
			
			var username=$("#username").val();
			if(username=="")
			{
				alert("Please Enter Username:");
				return false;
			}
			var password=$("#password").val();
			if(password=="")
			{
				alert("Please Enter Password:");
				return false;
			}*/
			$("#form").submit();
			 
	}
 
 
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Users</strong></li>
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
					 Add Users
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                                         <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>orders/lists'">Cancel</button>

 
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>orders/add_orders" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_orders">
                 
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Product Name: :</label>
						<div class="col-sm-5">
					    <input type="text" id="pname" name="pname" class="form-control" value="">
					    </div>
					 </div>
					 
				    <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Product Desc: :</label>
						<div class="col-sm-5">
					    <input type="text" id="pdesc" name="pdesc" class="form-control" value="">
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
