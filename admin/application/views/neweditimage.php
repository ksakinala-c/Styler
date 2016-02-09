<?php include('include/header.php');?>	
<script>
	function validate()
	{
		var attachment1 = $("#attachment1").val();
		if(attachment1 == '')
		{
			alert('Please Add Image.');
			return false;
		}
		$('#form').submit();
	}
</script>
<script>
		function removeimage(url)
		{
			var t = confirm('Are you sure you want to remove the image');
			if(t)
			{
				window.location.href=url;
			}
			else
			{
				
			}
		}
		
		function udpaterecors(val,id,pid,stid){
			//alert(stid);
			var t = confirm('Are you sure you want to set update order of image');
			if(t)
			{
				var url = '<?php echo $this->config->item("base_url"); ?>product/updateorder1/'+val+'/'+id+'/'+pid+'/'+stid;
				window.location.href=url;
			}
			else
			{
				
			}
			
		}

		function setbaseimg(id,pid,stid,image_index)
		{
			var t = confirm('Are you sure you want to set these image as baseimage');
			if(t)
			{
				var url = '<?php echo $this->config->item("base_url"); ?>product/setbaseimg1/'+id+'/'+pid+'/'+stid+'/'+image_index;
				window.location.href=url;
			}
			else
			{
				
			}
		}
	</script>
	<style>
.border_parts tr td{border:1px solid #ccc; padding:6px 6px 0px 6px; width:413px; float:left; border-collapse:collapse; border-spacing:0px;}
</style>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Style Images - <?php  echo $result->name; ?></strong></li>
		 
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
					 Upload Style Images 
                     </div>
					
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>product/edit/<?php echo $this->uri->segment(4); ?>'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>product/addimage/<?php echo $result->id; ?>/<?php echo $this->uri->segment(4); ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $result->id;?>">
			
					<div class="form-group">
					    <label class="col-sm-1 control-label" for="inputEmail">Upload Image:</label>
					    <div class="col-sm-6">
					       <input type="file" id="attachment1" name="attachment1[]" multiple class="form-control">
					    </div>
					    </div> 
							 
                    
 		    
			<table class="border_parts">
				
				<tr>
				<?php if($productimages != '' && count($productimages) > 0) {
					$i=1;
					foreach($productimages as $images)
					{
						//echo "<pre>";print_r($images);
					?>
					<td colspan="2">
							&nbsp;&nbsp;&nbsp;
							<img style="height: 202px; width: 100%;" src="<?php echo $this->config->item('front_base_url')."upload/allstyle/medium/".$images->image; ?>" />
							&nbsp;<br><br>
							<label style="font-size:15px;" class="" for="inputEmail">Set Base Image </label>&nbsp;
 							<input type="radio" name="baseimage" value="<?php echo $images->pid; ?>" <?php if($images->baseimage == '1') { echo "checked='checked'"; } ?>  onclick="setbaseimg('<?php echo $images->id; ?>','<?php echo $images->pid; ?>','<?php echo $images->style_id; ?>','<?php echo $i;	?>');" />
							&nbsp;&nbsp;&nbsp; <label style="font-size:15px;" class="" for="inputEmail">Set Order </label>&nbsp;&nbsp;&nbsp;
							<input style="border: 1px solid rgb(204, 204, 204); padding: 0px 4px 0px 4px; text-align: center; height: 37px; width: 35px; margin-left:-4px;" type="text" name="image_index" value="<?php echo $images->image_index;	?>" id="image_index" onblur="udpaterecors(this.value,'<?php echo $images->id;?>','<?php echo $images->pid; ?>','<?php echo $images->style_id; ?>');">
							&nbsp;&nbsp;&nbsp;
							<a style="margin-bottom:3px;" class="btn btn-default" onclick="removeimage('<?php echo $this->config->item('base_url')."product/removeimage1/".$images->id."/".$images->pid."/".$images->style_id ;?>');"
							href="#">Remove</a>
					
					</td>
					<?php
				$i++;
					}
					} ?>
					
				</tr>
				
				
			</table>
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
