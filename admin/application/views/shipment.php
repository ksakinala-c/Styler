<?php   include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
			<script>
				$(document).ready(function($){
					$('#reset').click(function(){
						var base_url = '<?php echo $base_url.'product/shipment/'.$this->uri->segment(3).''; ?>';
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
						url:'<?php echo $base_url; ?>coupan/ajaxlist_coupan',
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
							alert("Please select at least one product.");
							return false;
						}
						
							var status = document.getElementById("status").value;
							if(status == '')
							{
								alert('Please Select Delivery Status.');
								return false;
							}
							
							var courier = document.getElementById("courier").value;
							if(courier == '')
							{
								alert('Please Select Courier.');
								return false;
							} 
								
							
					$('#form').submit(); 
					}
				function approve(url){
					var t = confirm('Are you sure you want to approve Coupon?');
					if(t){
						window.location.href = url;
					} else {
						return false; 
					}

				}

				function disapprove(url){
					var t = confirm('Are you sure you want to Disapprove Coupon?');
					if(t){
						window.location.href = url;
					} else {
						return false; 
					}

				}

					</script>


	<div class="main-content theme">
			  <ol class="breadcrumb bc-3">
				<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
				<li class="active"><strong>Shipment </strong></li>
			  </ol>


						<?php /* if(isset($_POST))
						{
							if(count($result)==0)
							{
							?>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add/"><i class="entypo-plus"></i>Add Coupon </a>
							<?php
							}
							else
							{
							?>
							<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add"><i class="entypo-plus"></i>Add Coupon </a>
							<?php
							}
						}
						else
						{
						?>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add"><i class="entypo-plus"></i>Add Coupon </a>
						<?php
						} */
						?>
						<a class="btn btn-primary add" href="<?php echo $base_url;?>product/shipment_list/<?php echo $this->uri->segment(3); ?>">Back </a>
			<div class="checker" id="uniform-titleCheck">
			<span>
				<input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
				</span>
			</div>
	  </span>
	</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
  <div class="row">
 <div class="col-xs-12 col-sm-12"><h6 class="main-title">Shipment Orders</h6></div>
    <div class="col-6 col-sm-12 col-lg-12 action"></br>
      <!--div class="end">
        <form action="<?php echo $base_url;?>product/shipment/<?php echo $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">
          <div class="form-group mock">
          	 
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Start date :</label>
            <div class="col-lg-2"> 
				<input type="text" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">End date :</label>
            <div class="col-lg-2"> 
				<input type="text" id="enddate" value="<?php echo $enddate; ?>" name="enddate" class="form-control jobtext"/>
			</div>


            <div class="col-lg-2">
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
			 
					<div class="success">
					<?php echo $this->session->flashdata('flashError'); ?>
					</div>
			 
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
				<form action="<?php echo $base_url;?>product/cust_shipment/<?php echo $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" id="form">
				  <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
				  <div class="table-responsive">
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
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Date</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order No</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Prduct Name</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Customer Name</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Item Price</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order Status</th>
						 
					  </tr>
						</tr>
					</thead>
					<tbody role="alert" aria-live="polite" aria-relevant="all">
					  <?php
                         

						if($result)
						{
 							for($i=0;$i<count($result);$i++)
							{
 							?>
								<tr class="odd">
									<td class="  sorting_1">
										<div class="checkbox checkbox-replace neon-cb-replacement">
										<label class="cb-wrapper">
										<input name="selected[]" id="selected[]" value="<?php echo  $result[$i]->order_item_id; ?>" type="checkbox">
										</label>
										</div>
									</td>
									<td class=" "><?php echo $result[$i]->cdate; ?></td>
									<td class=" "><?php echo $result[$i]->order_id; ?></td>
									<?php if($result[$i]->save3d == '1') { ?>
					<td class=" "> 
Product Name: <?php echo $result[$i]->order_item_name;?>
				</td>
			<?php } else { ?>
				<td class=" ">Style Name: <?php echo $this->product_model->stylename($result[$i]->product_id);?> <br /> 
Product Name: <?php echo $this->product_model->fabricname($result[$i]->fabricid);?>
				</td>
			<?php } ?>
									<td class=" "><?php 
									echo $this->product_model->getusername($result[$i]->user_info_id); ?></td>
									<td class=" "><?php echo $result[$i]->product_item_price; ?></td>
									<td class=" "><?php echo $result[$i]->order_status; ?></td>
 								</tr>		
 								<?php
							}
						} 
						else 
						{
							?>
							<tr>
							<td class="left" colspan="6" align="center"><?php echo 'No Data Found.!!'; ?></td>
							</tr>
							<?php
						}
							?>
							
								<tr>
									<td colspan="6">Total</td>
										<td><?php echo $this->product_model->gettotal($this->uri->segment(3)); ?></td>
								</tr>
					
					 
							<tr>
								<td class="" colspan="7" align="center">
									<label class="col-sm-1 control-label lavel" for="inputEmail">Note :</label>
									<div class="col-lg-3"> 
										<textarea type="text" id="message" name="message" class="form-control jobtext"/></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td class="" colspan="7" align="center">
									 
										<label class="col-sm-1 control-label lavel" for="select">Delivery Status :</label>
										<div class="col-lg-3">
											<select id="status" name="status" class="form-control col-lg-4">
												<option value="" selected='selected'>Select Status</option>
												<?php if($allstatus != '' && count($allstatus) > 0)
												{ foreach($allstatus as $sta) { ?>
														<option value="<?php echo $sta->id; ?>"><?php echo $sta->status; ?></option>
												<?php  } }	 ?>
										   </select>
										   
										</div>
									 
								</td>
							</tr>
							
							<tr>
								<td class="" colspan="7" align="center">
									 
										<label class="col-sm-1 control-label lavel" for="select">Courier :</label>
										<div class="col-lg-3">
											<select id="courier" name="courier" class="form-control col-lg-4">
												<option value="" selected='selected'>Select Courier</option>
												<?php if($allcourier != '' && count($allcourier) > 0)
												{ foreach($allcourier as $cour) { ?>
														<option value="<?php echo $cour->id; ?>"><?php echo $cour->cname; ?></option>
												<?php  } }	 ?>
										   </select>
										   
										</div>
									 
								</td>
							</tr>
								<tr>
								<td class="left" colspan="6" align="center">
							  <div class="col-lg-2">
							  <div class="set1">
								<input type="submit" value="Submit" id="button" onclick="return deletes();" name="button" style="background-image:none;" class="btn btn-default btn-four" />
								 
							  </div>
							</div>
							</td>
						</tr>	
</tbody>						
				  </table>
				
				  </div>
				   
						
					 
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