<?php include('include/header.php');?>
<script>
	function validate(){
		var cname = $("#cname").val();
		if(cname == ''){
			alert('Please Enter Country ');
			return false;
		}

		var pa=document.getElementById('cname');
		var p = /[a-zA-Z\s-, ]+$/; 
		if(!p.test(pa.value))
			{
				alert("Please Enter Valid Country ");
				return false;
			}
			var code = $("#code").val();
		if(code == ''){
			alert('Please Add Country Code.');
			return false;
		}
		$('#form').submit();
	}
		
	
	function onlyalphabets(evt) 
{
	var charCode = (evt.which) ? evt.which : event.keycode
	if((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 123) && charCode != 32 && charCode != 8)
	return false;
	return true;
} 
	
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Country</strong></li>
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
					 Add Country
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>country/lists'">Cancel</button>

                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>country/add" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_country">
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Country :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="cname" name="cname" onkeypress="return onlyalphabets(event);"
						  class="form-control">
					    </div>
						
				
 				</div>
				<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Code :</label>
				<div class="col-sm-5">
					      <input type="text" id="code" name="code" class="form-control">
					    </div>
				</div>
				<div class="form-group">
                    
                    <div class="col-sm-5">
                       
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
