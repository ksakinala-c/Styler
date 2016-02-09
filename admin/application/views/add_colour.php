<?php include('include/header.php');?>



<script>
	function validate(){
		var colourname = $("#colourname").val();
		if(colourname == ''){
			alert('Please Enter Colour Name ');
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
		<li class="active"><strong>Add Color</strong></li>
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
					 Add Color
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>colour/lists'">Cancel</button>

                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>colour/add" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_colour">
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Color Name :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="colourname" name="colourname" class="form-control" value="<?php echo $colourname;?>">
					    </div>
						
						
					
 				</div>
				
				
				<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Color Code:</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="colourcode" name="colourcode" class="form-control" value="<?php echo $colourcode;?>">
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
