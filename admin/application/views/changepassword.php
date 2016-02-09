<?php include('include/header.php');?>
<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Admin Users - <?php echo $name; ?></strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
  <?php if($this->session->flashdata('L_strErrorMessage')) { ?><div class="success"><?php echo $this->session->flashdata('L_strErrorMessage'); ?></div><?php } ?>
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Edit Admin Users - <?php echo $name; ?>
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>user/list_admin_user'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="$('#form').submit();">Submit</button>
                      </div>
 				</div>
 			</div>
 			<div class="panel-body">
				<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."user/edit_admin_user/".$id; ?>">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_admin_user">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
			
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Name:</label>
                    <div class="col-sm-5">
                      <input type="text" id="name" name="name" value="<?php echo $name;?>" class="form-control">
                    </div>
                  </div>
				   <div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category:</label>
						<div class="col-sm-5">
						  <select id="category" name="category" class="form-control">
								<option value="">Select Category</option>
								<?php if($allusercategory != '' && count($allusercategory) > 0)
								{ foreach($allusercategory as $loc) { ?>
										<option value="<?php echo $loc->id; ?>" <?php if($category == $loc->id){ ?> selected = 'selected' <?php }?>  ><?php echo $loc->cname; ?></option>
								<?php  } }	 ?>
						  </select>
						 </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Email ID:</label>
                    <div class="col-sm-5">
                      <input type="text" id="email" name="email" value="<?php echo $email;?>" class="form-control">
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Username:</label>
                    <div class="col-sm-5">
                      <input type="text" id="login" name="login" value="<?php echo $login;?>" class="form-control">
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Password:</label>
                    <div class="col-sm-5">
                      <input type="password" id="password" name="password" value="<?php echo $password;?>" class="form-control">
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Confirm Password:</label>
                    <div class="col-sm-5">
                      <input type="password" id="cpassword" name="cpassword" value="<?php echo $password;?>" class="form-control">
                    </div>
                  </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Status:</label>
						<div class="col-sm-5">
						  <select id="enabled" name="enabled" class="form-control">
 								<option value="0" <?php if($enabled==0){ echo "selected";}?>>Inactive</option>
								<option value="1" <?php if($enabled==1){ echo "selected";}?>>Active</option> 
						   </select>
						 </div>
                    </div>
 				</form>
 			</div>
 		</div>
 	</div>
</div>
 
 </div>
<?php include('include/footer.php');?>
</body>
</html>