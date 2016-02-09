<?php include('include/header.php');?>

<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit rent - <?php echo $name; ?></strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0" style="min-height: 200px;">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Edit rent - <?php echo $name; ?>
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>rent/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="$('#form').submit();">Submit</button>
                      </div>
 				</div>
 			</div>
 			<div class="panel-body">
				<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url."rent/edit/".$id; ?>" enctype="multipart/form-data" >
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_rent">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					        
                    </div> 
					 
					  <div class="form-group">
					  
					    <label class="col-sm-2 control-label" for="inputEmail">name:</label>
					    <div class="col-sm-5">
					      <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>">
					    </div>
					  </div>
					  </br></br>
					 <div class="clear"></div>
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control" ><img src="<?php echo $front_base_url;?>upload/medium/<?php echo $image; ?>" />
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
