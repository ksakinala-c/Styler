<?php include('include/header.php');?>	

<script>
	function validate()
	{
		var catid = $("#catid").val();
		if(catid == '')
		{
			alert('Please Select Category ');
			return false;
		}
		
		var subcatid = $("#subcatid").val();
		if(subcatid == '')
		{
			alert('Please Select SubCategory');
			return false;
		}
		
		var subname = $("#subname").val();
		if(subname == ''){
			alert('Please Enter SubsubCategory');
			return false;
		}
		
		var pa=document.getElementById('subname');
		var p = /[a-zA-Z\s-, ]+$/; 
		if(!p.test(pa.value))
			{
				alert("Please Enter Valid SubsubCategory ");
				return false;
			}
			
		
		$('#form').submit();
		
	}
	
	function selectsubcat(id)
	{
		  var url = '<?php echo $base_url ?>/subsubcategory/getsubsubcat/';
				$.ajax(
				{
				url:url,
				type:'post',
				data:'id='+id,
				success:function(msg)
						{
							document.getElementById('prod2').innerHTML = msg ;  
						}
				});
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit SubsubCategory  <?php  $subname; ?></strong></li>
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
					 Edit SubCategory  
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>subsubcategory/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."subsubcategory/edit/".$id; ?>">
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_subsubcategory">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					<INPUT TYPE="hidden" NAME="hiddenaction1" VALUE="<?php echo $catid;?>">
					<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						    <select id="catid" name="catid" class="form-control"  onchange="selectsubcat(this.value);">
								<option value="">Select Category</option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id == $catid){ ?> selected = 'selected' <?php } ?>><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
						</div>
					</div>
					
				 <div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select SubCategory :</label>
						<div class="col-sm-5">
						 <span id='prod2'>
						    <select id="subcatid" name="subcatid" class="form-control">
								<option value="">Select Sub Category</option>
								<?php 
								if($allsubcategory != '' && count($allsubcategory) > 0)
								{ 
								foreach($allsubcategory as $pro) 
									{
								?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id == $subcatid){ ?> selected = 'selected' <?php } ?>><?php echo $pro->scname; ?></option>
								<?php  } }	 ?>
						   </select>
						   </span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail">SubsubCategory :</label>
						<div class="col-sm-5">
						  <input type="text" id="subname" name="subname" value="<?php echo $subname;?>" class="form-control">
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