<?php include('include/header.php');?>	
<script>
	function validate(){
		var attribute = $("#attribute").val();
		if(attribute == ''){
			alert('Please Enter Size');
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
		<li class="active"><strong>Edit Size  <?php  $cname; ?></strong></li>
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
					 Edit Size 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>attribute/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>attribute/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_attribute">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
			
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Size:</label>
                    <div class="col-sm-6">
                       <input type="text" id="attribute" name="attribute" value="<?php echo $attribute;?>" class="form-control">
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
