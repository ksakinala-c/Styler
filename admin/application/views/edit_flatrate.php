<?php include('include/header.php');?>	
<script>
	function validate(){
		/* var cname = $("#cname").val();
		if(cname == ''){
			alert('Please Enter Country ');
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
		<li class="active"><strong>Add Flatrate </strong></li>
  </ol>
  </div>
  </div>
  <?php if($this->session->flashdata('msg') !="") { ?><div class="success"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Add Flatrate 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>country/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>flatrate/edit" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_country">
					<!--INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>"-->
					<?php
                  if($allcountry){
                          // for($i=0;$i<count($result);$i++){
                  for($i=0;$i<count($allcountry);$i++){
				?>
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail"><?php echo $allcountry[$i]->cname; ?> :</label>
                    <div class="col-sm-5">
                       <input type="text" id="flatrate" name="<?php echo $allcountry[$i]->cid; ?>flatrate[]" 
					   value="<?php echo $allcountry[$i]->flatrate; ?>" class="form-control jobtext">
                    </div>
                    </div> 
						  <?php }} ?>
		
                    </div> 
			
 </form>
 		
 				</div>
 			</div>
 		</div>
	</div>

<?php include('include/footer.php');?>
</body>
</html>
