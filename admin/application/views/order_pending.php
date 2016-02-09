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
				var base_url = '<?php echo $base_url.'product/order_manage'; ?>';
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
    <li class="active"><strong>Order Management</strong></li>
  </ol>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete Order</a>
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
   
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title"> Orders <a href="<?php echo $base_url; ?>product/download" style="float:right;color:white;">Download</a></h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."product/order_manage/";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
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
			<label class="col-sm-1 control-label lavel" for="inputEmail">Delivery Status :</label>
            <div class="col-lg-3">
				<select name="status" class="form-control jobtext">
				<option value="">Select Status</option>
				<?php if($allstatus != '' && count($allstatus) > 0)
								{
									 
									foreach($allstatus as $nstatus) { ?>
					<option <?php if($nstatus->id == $status) { echo "Selected"; } ?> value="<?php echo $nstatus->id; ?>"><?php echo $nstatus->status; ?></option>
					<!--option value="1">Packed</option>
					<option value="2">Dispatched</option-->
					<?php   } }	 ?>
				</select>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Order Status :</label>
            <div class="col-lg-3">
				<select name="order_status" class="form-control jobtext">
				<option value="">Select Status</option>
					<option value="C" <?php if($order_status=="C"){echo "selected='selected'"; } ?> >Confirmed</option>
					<option value="P" <?php if($order_status=="P"){echo "selected='selected'"; } ?>>Pending</option-->					
				</select>
			</div>
			 
				
			<label class="col-sm-1 control-label lavel" for="inputEmail">Cancel Order :</label>
			  <div class="col-lg-3">
				<select name="cancel" class="form-control jobtext">
					<option value="">Select Value</option>
					<option value="1" <?php if($cancel == '1') { echo "Selected"; } ?>>Cancel Order</option>
					 
				</select>
			</div>
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
    <form action="<?php echo $base_url."product/deletes1";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
                </label>
              </div>
            </th>
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>--> 
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Date:</th>		
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order No:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Customer Name:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Last Track Update:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Currency:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Total Amount:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order Status:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Delivery Status:</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Is Affiliate:</th>
             <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Cancel Order</th>
			 <!--th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Return</th-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
          </tr>
            
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          
               <?php
                  if($result){ 
					//print_r($result);
                  for($i=0;$i<count($result);$i++){ 
				?>    
			<tr class="odd">
			 <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php  echo $result[$i]->order_id; ?>" type="checkbox">
                </label>
              </div></td>
			<td class=""><?php echo $result[$i]->cdate; ?></td>
			<td class=" "><?php echo $result[$i]->order_id; ?></td>
			<td class=""><?php echo $this->product_model->getusername($result[$i]->user_info_id); ?></td>
            <td class=""><?php if ($result[$i]->trackadd !="") { echo $result[$i]->trackadd; } else { echo "Not Updated."; } ?></td>
            <td class=""><?php echo  $result[$i]->order_currency; ?> &nbsp;</td>
            <td class=""><?php echo $result[$i]->order_total; ?></td>
			   
			<td>
											<?php
											if($result[$i]->order_status=="C"){	?>
												<p style="color:green">Confirmed.</p>
											<?php	} else  
												if($result[$i]->order_status == "P") { ?>
												<p class="pending-delivery">Pending</p> 
											<?php }	
												 ?>
											</td>
											
			 
			<td class="">
				<?php echo $this->product_model->getdeliverstatus($result[$i]->deliver);
				
							/*if($result[$i]->deliver == '0'){ echo "Pending"; }
								if($result[$i]->deliver == '1'){ echo "Packed"; }
								if($result[$i]->deliver == '2'){ echo "Delivered"; }*/
							?>
			</td>
			<td class=""><?php if($result[$i]->tracking_id !="" && $result[$i]->tracking_id !="0"){ ?>
			<a href="<?php echo $base_url; ?>affliliate/thistory/<?php echo $result[$i]->tracking_id; ?>"><?php 	 
			echo $this->product_model->getaffname($result[$i]->tracking_id);?>
			</a>
			<?php 
			} else {
				echo "No";
			}
				
			
			?></td>
							</form>	
 			<td class="">
			<!--
				<a class="btn btn-default btn-sm btn-icon icon-left" title="cancel order" href="#" onclick="cancelorder('<?php echo $result[$i]->order_id; ?>');" data-toggle="modal" data-target="#basicModal1">  
						<i class="">Cancel</i>
 				</a>-->
						<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
								<!--stat popup -->
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header" style="padding:0px;">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									</div>
 							
							 <div class="panel-body">
							<form class="form-horizontal form-groups-bordered" id="form1" name="form1" method="post" action="<?php echo $base_url;?>product/cancelorder/<?php echo $result[$i]->order_id; ?>">
								<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
								<INPUT TYPE="hidden" NAME="action" VALUE="cancelorder">
								<INPUT TYPE="hidden" NAME="id" VALUE="<?php echo $result[$i]->order_id; ?>">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="inputEmail">Cancel Reason:</label>  
									<div class="col-sm-5">
									  <textarea id="cancel_resone" name="cancel_resone" class="form-control" value="" required></textarea>
									</div>
								</div>
								<div class="modal-footer" style="padding:10px;">
									<input type="submit" name="submit" value="submit" id="submit" class="btn btn-lg btn-red">
							<button type="button" class="btn btn-lg btn-red" data-dismiss="modal" style="background:#36b0c8; color:#fff; padding:3px 8px 4px 8px; font-size:17px;">Close</button>	
							</div>
							</form>
							</div>
						  </div>
						</div>
						</div>
				<a class="btn btn-default btn-sm btn-icon icon-left" title="cancel order" href="#" data-toggle="modal" data-target="#basicModal1">  
						<i class="">Cancel</i>
 				</a>
			</td>
			<?php /*
			<td class="">
				<?php if($result[$i]->order_status =='R'){?>
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit Return Product" href="<?php echo $base_url; ?>return_product/editreturnproducts/<?php echo $result[$i]->order_id; ?>"> <i class="entypo-pencil"></i>Edit Return Product
 				</a>
				<?php }else{ ?>
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Product Return" href="<?php echo $base_url; ?>return_product/returnproducts/<?php echo $result[$i]->order_id; ?>"> <i class="">Product Return</i>
				<?php } ?>
			</td>
			*/ ?>
			<td class="">
	<a class="btn btn-default btn-sm btn-icon icon-left" title="View" href="<?php echo $base_url;?>product/order_detail/<?php echo $result[$i]->order_id; ?>">  
	
					<i class="">View</i>
 				</a>
			</td>
          </tr>
        
						  <?php } } ?>
         
        </tbody>
      </table>
    </form>
  </div>
  </div>
</div>
</div>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js"></script>
<link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script type="text/javascript">
	var jq = $.noConflict();
	jq(document).ready(function(){
		jq( "#startdate" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
		jq( "#enddate" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
	});
	
	</script>
<?php include('include/footer.php');?>
</body>
</html>

