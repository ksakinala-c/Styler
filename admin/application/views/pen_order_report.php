<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function cancelorder(id){
	 
	if(confirm('Do you want to Cancel Order?')){
		 window.location.href = '<?php echo $base_url;?>product/cancelorder/'+id;
	 } 
}
</script>
<script type="text/javascript">
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'order/pen_order_reports'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#pname").val();
				
				if(name=='')
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
			url:'<?php echo $base_url; ?>product/ajaxlist_category',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#cname" ).autocomplete({
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
    <li class="active"><strong>Pending Order Reports</strong></li>
  </ol>

 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title"> Pending Order Reports </h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."order/can_order_reports/";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
            <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Search :</label>
            <div class="col-lg-3">
           <input type="text" id="username" name="username"  value="<?php echo $username; ?>" class="form-control jobtext from-dainn"   />
            </div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Start date :</label>
            <div class="col-lg-3"> 
				<input type="date" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">End date :</label>
            <div class="col-lg-3"> 
				<input type="date" id="enddate" value="<?php echo $enddate; ?>" name="enddate" class="form-control jobtext"/>
			</div>
            <div style="width:100%; float:left; margin:15px 0 0 0px;"></div>
			<!--label class="col-sm-1 control-label lavel" for="inputEmail">Delivery Status :</label>
            <div class="col-lg-3">
				<select name="status" class="form-control jobtext">
				<option value="">Select Status</option>
				<?php /* if($allstatus != '' && count($allstatus) > 0)
								{
									 
									foreach($allstatus as $nstatus) { ?>
					<option <?php if($nstatus->id == $status) { echo "Selected"; } ?> value="<?php echo $nstatus->id; ?>"><?php echo $nstatus->status; ?></option>
					<!--option value="1">Packed</option>
					<option value="2">Dispatched</option-->
					<?php   } }	*/ ?>
				</select>
			</div-->
			
			 
				
			<!--label class="col-sm-1 control-label lavel" for="inputEmail">Cancel Order :</label>
			  <div class="col-lg-3">
				<select name="cancel" class="form-control jobtext">
					<option value="">Select Value</option>
					<option value="1" <?php if($cancel == '1') { echo "Selected"; } ?>>Cancel Order</option>
					 
				</select>
			</div-->
			<div class="col-lg-3">
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
      if($this->pagination->create_links() != '')
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
    <form action="<?php echo $base_url."product/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>--> 
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Date:</th>		
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order No:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Customer Name:</th>
 
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Total Amount:</th>
 
 
             <!--th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Cancel Reason</th-->
			<!--th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th-->
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          
               <?php
                  if($result){ 
				  
                  for($i=0;$i<count($result);$i++){ 
				?>    
          <tr class="odd">
		  <td class=""><?php echo $result[$i]->cdate; ?></td>
		  <td class=" "><?php echo $result[$i]->order_id; ?></td>
           <td class=""><?php echo $result[$i]->username; ?></td>
            
            <td class=""><?php echo $result[$i]->order_total; ?></td>
			 <!--td class=""><?php// echo $result[$i]->cancel_reson; ?></td-->
			 
				 
 			 
			<!--td class="">
	<a class="btn btn-default btn-sm btn-icon icon-left" title="View" href="<?php echo $base_url;?>product/deleteorder/<?php echo $result[$i]->order_id; ?>">  
	
					<i class="">Delete</i>
 				</a>
			</td-->
          </tr>
        
						  <?php } } else { ?>
						    <td class="" colspan="4">No data found.!!</td>
						  <?php } ?>
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

