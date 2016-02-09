<?php include('include/header.php');?>	
<script>
	function validate(){
	
		var cname = $("#cname").val();
		if(cname == ''){
			alert('Please Enter User Type ');
			return false;
		}
		
		/* var conition = document.getElementById('permission').checked;
        if(conition == ''){
            alert("Please Select Permission.");
            return false;
        } */
		
		if( $('input[name="permission[]"]:checked').length == 0 )
		  {
		   alert("You must check atleast one checkbox.");
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
		<li class="active"><strong>Edit Permission  <?php  $fontname; ?></strong></li>
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
					 Edit Permission 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>permission/list_permission'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>permission/edit/<?php echo $this->uri->segment(3);?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_permission">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $this->uri->segment(3);?>">
			
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">User Type:</label>
                    <div class="col-sm-6">
                       <input type="text" id="cname" name="cname" value="<?php echo $cname;?>" class="form-control">
                    </div>
                    </div> 
					
					
					
				
					<style>
						table, th, td {
							border: 1px solid black;
						}
					</style>
				<table class="table table-bordered table-striped datatable dataTable">
				  <tr>
					<th>Feature</th>
					<th>View</th>		
					<th>Edit</th>
				  </tr>
					<?php
					//print_r($editperm);die;
					$permvalue = explode(',',$permission);
					$editpermvalue = explode(',',$editperm);
					 
					if($allpermission != '' ){
					foreach($allpermission as $perm)
					{ 
					?>	
					
				  <tr>
					<td><label class="col-sm-2 control-label" for="select"> <?php echo $perm->pname; ?> :</label></td>
					<td><input type="checkbox" name="permission[]" id="permission" value="<?php echo $perm->id; ?>" <?php if (in_array($perm->id, $permvalue)) { ?> checked = 'checked' <?php } ?> multiple="multiple"></td>		
					<td><input type="checkbox" name="editperm[]" id="editperm" value="<?php echo $perm->id; ?>" <?php if (in_array($perm->id, $editpermvalue)) { ?> checked = 'checked' <?php } ?> multiple="multiple"></td>
				  </tr>
   <?php }} ?>
				</table>
				
					 
					
					
                      
 				</div>
 	
 </form>
 		</div>
 		</div>
	</div>
 </div>
<?php include('include/footer.php');?>
</body>
</html>
