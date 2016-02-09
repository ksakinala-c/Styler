<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletefonts(){
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
				var base_url = '<?php echo $base_url.'product/shipment_list/'.$this->uri->segment(3).''; ?>';
				window.location = base_url;
		});
		$("#sbutton").click(function(){
				var startdate = $("#startdate").val();
				var enddate = $("#enddate").val();
				
				if(startdate=='' && enddate =='')
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
			url:'<?php echo $base_url; ?>fonts/ajaxlist_fonts',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#fontname" ).autocomplete({
					source: c
				});
			}
		});
		});
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
    <li class="active"><strong>Shipment Lists</strong></li>
  </ol>
 
<a class="btn btn-primary add" href="<?php echo $base_url;?>product/order_detail/<?php echo $this->uri->segment(3); ?>">Back</a>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>product/shipment/<?php echo $this->uri->segment(3); ?>"><i class="entypo-plus"></i>Add Shipmnet</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>product/shipment/<?php echo $this->uri->segment(3); ?>"><i class="entypo-plus"></i>Add Shipmnet</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>product/shipment/<?php echo $this->uri->segment(3); ?>"><i class="entypo-plus"></i>Add Shipmnet</a>
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
<div class="col-xs-12 col-sm-12"><h6 class="main-title">Shipment Lists</h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action"></br>
      <!--div class="end">
        <form action="<?php echo $base_url; ?>product/shipment_list/<?php echo $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
           	<label class="col-sm-1 control-label lavel" for="inputEmail">Start date :</label>
            <div class="col-lg-2"> 
				<input type="text" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">End date :</label>
            <div class="col-lg-2"> 
				<input type="text" id="enddate" value="<?php echo $enddate; ?>" name="enddate" class="form-control jobtext"/>
			</div>

			<div class="col-lg-5">
			<div class="set1">
                <input type="submit" value="Search" id="sbutton" name="sbutton" style="background-image:none;" class="btn btn-default btn-four" />
                <input type="button" value="Reset" id="reset" style="background-image:none;" class="btn btn-scoend btn-four" />
              </div>
            </div>
          </div>
        </form>
      </div-->
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
    <form action="<?php echo $base_url."fonts/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            <!--th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
                </label>
              </div>
            </th-->
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Date</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order_id 	</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order Item name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Courier</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Status</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Message</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Print</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Print</th>
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
                  if($result){
                          // for($i=0;$i<count($result);$i++){
                  for($i=0;$i<count($result);$i++){
				?>
                  
                  
          <tr class="odd">
            <!--td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $result[$i]->id; ?>" type="checkbox">
                </label>
              </div></td-->
            <!--<td class=" "><?php //echo $results['id']; ?></td>-->
           <td class=""><?php echo $result[$i]->date; ?></td>
		     <td class=""><?php echo $result[$i]->order_id ; ?></td>
			   <td class=""><?php $item = $result[$i]->ci_order_item ; 
									$newitem = explode(',',$item );
									//print_r($newitem);
									for($q=0;$q<count($newitem);$q++) { 
						$fabricid= $this->product_model->getfabricid($newitem[$q]);	
						echo $this->product_model->getfabricname($fabricid).'&nbsp;|&nbsp;';
						 				
						 }
						
			   ?></td>
			   <td class=""><?php  echo $this->product_model->getcouriername($result[$i]->courier); ?></td>
			   <td class=""><?php echo $this->product_model->getstatusname($result[$i]->status); ?></td>
			    <td class=""><?php echo $result[$i]->message; ?></td>
				<td class=""><a href="<?php echo $base_url; ?>product/ship_label/<?php echo $result[$i]->id;?>/<?php echo $result[$i]->order_id;?>"  target="_blank">Shipment Print</a></td>
				<td class=""><a href="<?php echo $base_url; ?>product/ship_invoice/<?php echo $result[$i]->id;?>/<?php echo $result[$i]-> 	ci_order_item;?>" target="_blank">Shipment Print Invoice</a></td>
 			 
          </tr>
          <?php
                  }
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="7" align="center"><?php echo 'No Data Found.!!'; ?></td>
          </tr>
          <?php
                  }
                  ?>
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
