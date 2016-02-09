<?php include('include/header.php');?>
<script>
	function validate()
	{
		
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
		<li class="active"><strong>Add Banner</strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
			Add Banner
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>banner/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>banner/add" enctype="multipart/form-data">
				<div class="panel-body">
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_banner">
					 
				 
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control">
					    </div>
					  </div>					   
					  
					   <div class="clear"></div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Caption:</label>
					    <div class="col-sm-5">
					      <input type="text" id="caption" name="caption" class="form-control">
					    </div>
					  </div>
<div class="form-group">
					    <label class="col-sm-2 control-label" for="slider_header">Slider Header:</label>
					    <div class="col-sm-5">
					        <input type="text" id="slider_header" name="slider_header" class="form-control" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="slider_content">Slider Content:</label>
					    <div class="col-sm-5">
					      <textarea id="slider_content" name="slider_content" class="form-control"></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="button_label">Button Label:</label>
					    <div class="col-sm-5">
					       <input type="text" id="button_label" name="button_label" class="form-control" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="button_bgcolor">Button bgcolor:</label>
					    <div class="col-sm-5">
					       <input type="text" id="button_bgcolor" name="button_bgcolor" class="form-control jscolor" >
					    </div>
					  </div>					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">URL:</label>
					    <div class="col-sm-5">
					      <input type="text" id="url" name="url" class="form-control" value="<?php echo $url; ?>">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Order:</label>
					    <div class="col-sm-5">
					      <input type="text" id="order" name="order" class="form-control" >
					    </div>
					  </div>
					    <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Homepage Image:</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="homepage" value="1" name="homepage" class="form-control">
					    </div>
					  </div>
					  
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">First Row :</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="first_row" value="1" name="first_row" class="form-control">
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Second Row :</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="second_row" value="1" name="second_row" class="form-control">
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Third Row:</label>
					    <div class="col-sm-5">
					      <input type="checkbox" id="third_row" value="1" name="third_row" class="form-control">
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
