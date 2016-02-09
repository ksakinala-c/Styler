<?php include('include/header.php');?>
<script>
	function validate()
	{
		
		var themename = $("#themename").val();
		if(themename == '')
		{
			alert('Please Add themename.');
			return false;
		}
		var url = $("#url").val();
		if(url == '')
		{
			alert('Please Add url.');
			return false;
		}
		var image = $("#image").val();
		if(image == '')
		{
			alert('Please Add Image.');
			return false;
		}
		
		/* var homepage = $("#homepage").val();
		var first_row = $("#first_row").val();
		var second_row = $("#second_row").val();
		var third_row = $("#third_row").val();
		if(homepage == '' && homepage == '' && first_row == ''  && second_row == '' && third_row = '')
		{
			alert('Please Select Checkbox.');
			return false;
		} */
		
		$('#form').submit();
	}
</script>

<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Affiliate Themes</strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					Add Affiliate Themes
                </div>
                     
                    <div class="col-6 col-sm-4 col-lg-2 firm">
					 <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>affliliate/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>affliliate/add" enctype="multipart/form-data">
				<div class="panel-body">
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_affliliatetheme">
					 
					
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Themes Name:</label>
					    <div class="col-sm-5">
					      <input type="text" id="themename" name="themename" class="form-control">
					    </div>
					  </div>
					  
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control">
					    </div>
					  </div>
					 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Url:</label>
					    <div class="col-sm-5">
					      <input type="text" id="url" name="url" class="form-control">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Order:</label>
					    <div class="col-sm-5">
					      <input type="text" id="order" name="order" class="form-control" >
					    </div>
					  </div>
					 
 				</form>
 		 
 	</div>
</div>
 
 </div>
<script type="text/javascript">


<?php include('include/footer.php');?>
</body>
</html>
