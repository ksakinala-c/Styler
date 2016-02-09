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
		
		function udpaterecors(val,id,pid){
			var t = confirm('Are you sure you want to set update order of image');
			if(t)
			{
				var url = '<?php echo $this->config->item("base_url"); ?>fabric/updateorder/'+val+'/'+id+'/'+pid;
				window.location.href=url;
			}
			else
			{
				
			}
			
		}

		function setbaseimg(id,pid,image_index)
		{
			var t = confirm('Are you sure you want to set these image as baseimage');
			if(t)
			{
				var url = '<?php echo $this->config->item("base_url"); ?>fabric/setbaseimg/'+id+'/'+pid+'/'+image_index;
				window.location.href=url;
			}
			else
			{
				
			}
		}
	</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Style Images</strong></li>
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
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>fabric/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>fabric/editimage/<?php echo $this->uri->segment(3); ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $this->uri->segment(3); ?>">
			
					<div class="form-group">
					    <label class="col-sm-1 control-label" for="inputEmail">Upload Image:</label>
					    <div class="col-sm-6">
					       <input type="file" id="attachment1" name="attachment1[]" multiple class="form-control">
					    </div>
					    </div> 
							 <!--div class="col-6 col-sm-4 col-lg-9" style="color:green;font-size:15px;">
								Kindly upload product images 269*404 size for proper resolution.
							</div-->
                    
 		    
			<table>
				<?php if($productimages != '' && count($productimages) > 0) {
					$i=1;
					foreach($productimages as $images)
					{
					?>
				<tr>
					<td colspan="2">
 							<input type="radio" name="baseimage" value="<?php echo $images->fid; ?>" <?php if($images->baseimage == '1') { echo "checked='checked'"; } ?>  onclick="setbaseimg('<?php echo $images->id; ?>','<?php echo $images->fid; ?>','<?php echo $i;	?>');" />
					
							&nbsp;&nbsp;&nbsp;
							<img src="<?php echo $this->config->item('front_base_url')."upload/style/small/".$images->image; ?>" />
							&nbsp;&nbsp;&nbsp;
							<input type="text" name="image_index" value="<?php echo $images->image_index;	?>" id="image_index" onblur="udpaterecors(this.value,'<?php echo $images->id;?>','<?php echo $images->fid; ?>');">
							<a onclick="removeimage('<?php echo $this->config->item('base_url')."fabric/removeimage/".$images->id."/".$images->fid ;?>');"
							href="#">Remove</a>
					
					</td>
				</tr>
				<?php
				$i++;
					}
					} ?>
				
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
