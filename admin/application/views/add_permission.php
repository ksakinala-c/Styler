<?php include('include/header.php');?>

<script>
	function validate(){
	
		var cname = $("#cname").val();
		if(cname == ''){
			alert('Please Enter User Type And Select Permission.');
			return false;
		}
		
		/*var conition = document.getElementById('perm').checked;
        if(conition == ''){
            alert("Please Select Permission.");
            return false;
        } */
		
		
		$('#form').submit();
		
	}
	 
</script>

        <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add User Permission</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add User Permission
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>permission/list_permission'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>permission/add">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_permission">
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail"> User Type:</label>
					<div class="col-sm-5">
					  <input type="text" id="cname" name="cname" class="form-control" >
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
					  if($allpermission != '' && count($allpermission)>=0){
					  foreach($allpermission as $permission)
					  {   
					?>	
				  <tr>
					<td><label class="col-sm-2 control-label" for="select"> <?php echo $permission->pname; ?> :</label></td>
					<td>	<input type="checkbox" name="permission[]" id="perm" value="<?php echo $permission->id; ?>" multiple="multiple"></td>		
					<td><input type="checkbox" name="editperm[]" id="editperm" value="<?php echo $permission->id; ?>" multiple="multiple"></td>
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
