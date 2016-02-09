<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletecolour(){
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<script type="text/javascript">
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'coupan/free_card'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#vouchername").val();
				var code = $("#code").val();
				
				if(name=='' && code == '')
				{
					alert("Please Enter atleast one search condition.");
					return false;
				}
				else
				{
					return true;
				}
		});


		/*$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>coupan/ajaxlist_voucher',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#topicname" ).autocomplete({
					source: c
				});
			}
		});
		}); */
});
</script>
<script>
function deletes()
{
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
    <li class="active"><strong>Gift Card</strong></li>
  </ol>
<?php  if(isset($_POST))
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
<a href="<?php echo $base_url;?>coupan/lists_voucher"></a>
<?php
} 
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletecolour();"><i class="entypo-plus"></i>Delete</a>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher/"><i class="entypo-plus"></i>Add Gift Voucher</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher"><i class="entypo-plus"></i>Add Gift Voucher</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher"><i class="entypo-plus"></i>Add Gift Voucher</a>
<?php
} ?>
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title">Free Gift Card 
<?php /* if($value!=''){
	$value=$value;
}else{
	$value='null';
} if($vouchername!=''){
	$vouchername=$vouchername;
}else{
	$vouchername='null';
} 
	?>
 <a href="<?php echo $base_url."coupan/download/".$value."/".$vouchername;?>" style="float:right;color:white;" >Download</a>
*/ ?>
 </h6></div
 
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."coupan/free_card";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Gift Voucher Name :</label>
            <div class="col-lg-3">
				<input type="text" id="vouchername" name="vouchername"  value="<?php if($vouchername!='null'){ echo $vouchername; } ?>" class="form-control jobtext from-dainn"   />
            </div>
			 
            <label class="col-sm-1 control-label lavel" for="inputEmail">Code :</label>
            <div class="col-lg-2">
				<input type="text" id="code" name="code"  value="<?php if($code!='null'){ echo $code; } ?>" class="form-control jobtext from-dainn"   />
            </div>
			 
			<div class="col-lg-5">
			<div class="set1">
                <input type="submit" value="Search" id="sbutton" name="sbutton" style="background-image:none;" class="btn btn-default btn-four" />
                <input type="button" value="Reset" id="reset" style="background-image:none;" class="btn btn-scoend btn-four" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> 
  </div>
  <?php
      if($this->pagination->create_links()!='')
      {
      ?>
  <div class="pagination"> <?php echo $this->pagination->create_links(); ?> </div>
  <?php
      }
      ?>

<?php if($this->session->flashdata('L_strErrorMessage')) { ?>
		  <div class="success">
		  <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
		  </div>
<?php }else { ?>
	<div class="warning">
		<?php echo $this->session->flashdata('flashError'); ?>
	</div>
<?php }  ?>
 <?php if($this->session->flashdata('msg') !="") { ?><div class="success"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?>
  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."coupan/deletes_voucher";?>" method="post" enctype="multipart/form-data" id="form">
	<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
	<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
			<tr role="row" class="bg">
				<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> 
					<div class="checkbox checkbox-replace neon-cb-replacement">
						<label class="cb-wrapper">
						  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
						</label>
					</div>
				</th>
				<!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Gift Voucher Name</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Voucher Status</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Code</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Price</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Qty</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Added Date</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
			</tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php
				if($result){
					for($i=0;$i<count($result);$i++){
					 //echo $result[$i]['vouchername'];
					?>  
			<tr class="odd">
				<td class="  sorting_1">
					<div class="checkbox checkbox-replace neon-cb-replacement">
						<label class="cb-wrapper">
							<input name="selected[]" id="selected[]" value="<?php echo $result[$i]['id']; ?>" type="checkbox">
						</label>
					</div>
				</td>
		
				<td class=""><?php echo $result[$i]['vouchername']; ?></td>
				 		 <td class=""><?php echo $result[$i]['value']; ?></td>
				<td class=""><?php  echo $result[$i]['code']; ?></td>
					<td class=""><?php  echo $result[$i]['price']; ?></td>
						<td class=""><?php  echo $result[$i]['qty']; ?></td>
				<td class=""><?php  echo $result[$i]['added_date']; ?></td>
				  <td class=" ">
				<a href="<?php echo $base_url; ?>coupan/edit_voucher/<?php echo $result[$i]['id']; ?>" title="Edit" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
			</tr>
		
			<?php }  } else { ?>
			<tr>
				<td class="left" colspan="2" align="center"><?php echo 'No Gift Voucher Found.!!'; ?></td>
			</tr>
			<?php    }  ?>
        </tbody>
	</table>
    </form>
  </div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>
