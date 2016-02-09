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
		<li class="active"><strong>Add Appointment Time</strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
			Add Appointment Time
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>appointment_time/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>appointment_time/add" enctype="multipart/form-data">
				<div class="panel-body">
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_appointmentTime">
					 
				 
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Time of Day:</label>
					    <div class="col-sm-5">
					      <select id="time_of_day" name="time_of_day" class="form-control">
						  <option value="">---Please Select---</option>
						<?php						
						foreach($dayTimes as $keys=>$dayTime){ ?>
					     <option value="<?php echo $keys; ?>"><?php echo $dayTime; ?></option>
						<?php } ?>
						</select>
					    </div>
					  </div>					   
					  
					   <div class="clear"></div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Time:</label>
					    <div class="col-sm-5">
						<select id="start_time" name="start_time" class="form-control">
						<option value="">---Please Select---</option>
						<?php foreach($hoursRange as $key=>$hourTime){ ?>
					     <option value="<?php echo $key; ?>"><?php echo $hourTime; ?></option>
						<?php } ?>
						</select>
					    </div>
					  </div>
<!---<div class="form-group">
					    <label class="col-sm-2 control-label" for="slider_header">End Time:</label>
					    <div class="col-sm-5">
					        <input type="text" id="fabric_name" name="fabric_name" class="form-control" >
					    </div>
					  </div>---->					  
 				</form>
 		 
 	</div>
</div>
 
 </div>
<script type="text/javascript">

</script>
<?php include('include/footer.php');?>
</body>
</html>
