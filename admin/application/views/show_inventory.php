<?php   include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
    function  updatedata(color,size,pid,val){
		var t = confirm('Are you sure you want to update inventory?');
		if(t){
			window.location.href = '<?php echo $base_url; ?>product/updatedata/'+color+'/'+size+'/'+pid+'/'+val;
		} else {
			return false;
		}
	}

	$(document).ready(function($){
		$('#reset').click(function(){
			var base_url = '<?php echo $base_url.'product/lists'; ?>';
			window.location = base_url;
		});
		
		$("#sbutton").click(function(){
			var title = $("#pname").val();
			
			
			if(pname=='' )
			{
				alert("Please Enter atleast one search condition.");
				return false;
			}
			else
			{
				return true;
			}
		});

		$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>product/ajaxlist_product',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#title" ).autocomplete({
					source: c
				});
			}
		});
		});
	});
</script>
<script>
function deletes(){
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
	
</script>


<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Product</strong></li>
  </ol>
  
<?php if(isset($_POST))
{
		
	if(count($result)==0)
	{
	?>
	
	<?php   
	}
	else
	{
	?>
	
	<?php
	}
}
else
{
?>
<a href="<?php echo $base_url;?>Product/lists"></a>
<?php
}
?>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
		<a class="btn btn-primary add" href="<?php echo $base_url;?>product/add/"><i class="entypo-plus"></i>Add product</a>
	<?php
	}
	else
	{
	?>
		<button onclick="javascript:window.location.href='<?php echo $base_url; ?>product/lists'" class="btn btn-default">Cancel</button>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>product/add"><i class="entypo-plus"></i>Add product</a>
<?php
}
?>

 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
 </span>
  
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
  <div class="row">
  <div class="col-xs-12 col-sm-12"><h6 class="main-title">Add Stock</h6></div>
  </div>
  		  <?php if($this->session->flashdata('L_strErrorMessage')) 
			  { ?>
					  <div class="success">
					  <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
					  </div>
			  <?php }else { ?>

					<div class="warning">
					<?php echo $this->session->flashdata('flashError'); ?>
					</div>
			 <?php }  ?>  
<div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."product/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <div class="table-responsive">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
         
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
                  if($result){
                     $colorarray = explode(',',$result[0]->colour);      
                     $sizearray = explode(',',$result[0]->size); ?>
					 
				  <tr><td>Colour</td>   <?php  
				  for($i = '0'; $i<count($sizearray);$i++) {
                  ?> <td> <?php echo $this->product_model->getsizename($sizearray[$i]); ?></td>
				  <?php } ?>
				  <tr>
				  
				  <?php  
				  for($i = '0'; $i<count($colorarray);$i++) {
                  ?>
					  <tr class="odd">
							<td> <?php echo  $this->product_model->getcolorname($colorarray[$i]); ?></td>
							<?php  for($j = '0'; $j<count($sizearray);$j++) { 
							$stockvalue = $this->product_model->stockvalue($colorarray[$i],$sizearray[$j],$result[0]->id);
							?>
							<td> <input type="text" value="<?php echo $stockvalue; ?>" onblur="updatedata('<?php echo $colorarray[$i]; ?>' ,'<?php echo $sizearray[$j];?>' ,'<?php echo $result[0]->id;?>' ,this.value );" /> </td>
							<?php } ?>
					  </tr>		
          			<?php } ?>
                    
          <?php
                   
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No product Found'; ?></td>
          </tr>
          <?php
                  }
                  ?>
        </tbody>
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