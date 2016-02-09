<?php include('include/header.php');?>	
<script>
	function validate(){
		//alert("hello");
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
		<li class="active"><strong>Add Weight Base</strong></li>
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
					 Add Weight Base ( In Grams )
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>country/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>weightbase/edit" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_weightbase">
					<!--INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>"-->
				 
					<div class="form-group">
					<?php  
						if($allcountry){
						for($i=0;$i<count($allcountry);$i++){   
						//echo "<pre>";print_r($allcountry);die;
						?>
                    <label class="col-sm-1 control-label" for="inputEmail"><p style="font-variant: small-caps;font-size: 13px;color:black;">
					<?php echo $allcountry[$i]->cname; ?></p></label>
                  
						
						<label class="col-sm-1 control-label" for="inputEmail">0-500 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>zero_five[]" 
						value="<?php echo $allcountry[$i]->zero_five; ?>" class="form-control jobtext">
						
						<label class="col-sm-1 control-label" for="inputEmail">501-1000 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>six_ten[]" 
						value="<?php echo $allcountry[$i]->six_ten; ?>" class="form-control jobtext">
						
						
						<label class="col-sm-1 control-label" for="inputEmail">1001-1500 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>eleven_fifteen[]" 
						value="<?php echo $allcountry[$i]->eleven_fifteen; ?>" class="form-control jobtext">
						
						
						<label class="col-sm-1 control-label" for="inputEmail">1501-2000 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>sixteen_twenty[]" 
						value="<?php echo $allcountry[$i]->sixteen_twenty; ?>" class="form-control jobtext">
						
						<label class="col-sm-1 control-label" for="inputEmail">2001-2500 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>twentyone_twentyfive[]" 
						value="<?php echo $allcountry[$i]->twentyone_twentyfive; ?>" class="form-control jobtext">
						
						<label class="col-sm-1 control-label" for="inputEmail">2501-3000 :</label>
						<input style="float: left; width: 75px;" type="text" name="<?php echo $allcountry[$i]->cid; ?>twentysix_threethousand[]" 
						value="<?php echo $allcountry[$i]->twentysix_threethousand; ?>" class="form-control jobtext">
					   
					   <br><br><br>
					   
						  <?php }} ?>
					   
					  
                    
					 
					 
                    </div> 
					
					
						  <?php // }} ?>
		
                    </div> 
			
 </form>
 		
 				</div>
 			</div>
 		</div>
	</div>

<?php include('include/footer.php');?>
</body>
</html>
