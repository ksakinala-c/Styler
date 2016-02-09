<?php include('include/header.php');?>

<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add rent</strong></li>
  </ol>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
			Add rent
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>rent/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="$('#form').submit();">Submit</button>
                      </div>
 				</div>
 			</div>
 			<div class="panel-body">
				<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>rent/add" enctype="multipart/form-data">
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_rent">
					 
					</div>

					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control">
					    </div>
					  </div>
					  
					   <div class="clear"></div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">name:</label>
					    <div class="col-sm-5">
					      <input type="text" id="name" name="name" class="form-control">
					    </div>
					  </div>
					
					 
 				</form>
 			</div>
 		</div>
 	</div>
</div>
 
 </div>
<script type="text/javascript">


<?php include('include/footer.php');?>
</body>
</html>
