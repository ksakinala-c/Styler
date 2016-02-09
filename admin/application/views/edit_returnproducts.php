<?php include('include/header.php');?>	
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>

<script>
	function validate(){
		
		
		$('#form').submit();
	}
	
</script>
<script>
	function newvalidate(){
		var adminmessage = $("#adminmessage").val();
		if(adminmessage == '')
		{
			alert('Please Enter Message.');
			return false;
		}
		
		$('#newform').submit();
	}

</script>
<script>
function deleteattribute(){
	var checked = $("#delform input:checked").length > 0;
	//alert(checked);
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#delform').submit(); }
}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
	<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong> Edit Product Return <?php  $cname; ?></strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
   <?php if($this->session->flashdata('msg') !="") { ?><div class="success"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?>
    <?php if($this->session->flashdata('flashError') !="") { ?><div class="" style="color:red" align="center"><?php echo $this->session->flashdata('flashError'); ?></div> <?php } ?>


  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9"> Order Information 
					</div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
						<button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>product/order_detail/<?php echo $this->uri->segment(3); ?>'">Cancel</button>
						<button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
					</div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>return_product/editreturnproducts/<?php echo $order_id; ?>" enctype="multipart/form-data" >
<div class="panel-body">
				
<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
<INPUT TYPE="hidden" NAME="action" VALUE="edit_category">
<INPUT TYPE="hidden" NAME="return_id" VALUE="<?php echo $return_id; ?>">
<INPUT TYPE="hidden" NAME="user_id" VALUE="<?php echo $user_id; ?>">
<INPUT TYPE="hidden" NAME="product_id" VALUE="<?php echo $product_id; ?>">
						
			
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail">Order ID:</label>
						<div class="col-sm-5">
						   <input type="text" id="order_id" name="order_id" value="<?php echo $order_id;?>" class="form-control" readonly >
						</div>
                    </div> 

					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Order Date:</label>	
						<div class="col-sm-5">		
							<input type="text" id="cdate" name="cdate" class="form-control" value="<?php echo $cdate;?>" readonly >				
						</div>			
					</div> 
					
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Customer:</label>	
						<div class="col-sm-5">		
							<input type="text" id="customer" name="customer" class="form-control" value="<?php echo $username;?>" readonly >				
						</div>			
					</div> 
					
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">E-Mail:</label>	
						<div class="col-sm-5">		
							<input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>" readonly >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Telephone:</label>	
						<div class="col-sm-5">		
							<input type="text" id="phone" name="phone" class="form-control" value="<?php echo $phone;?>" readonly >				
						</div>			
					</div> 
				</div>
			<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-9">
						Product Information & Reason for Return
					</div>
 				</div>
 			</div>
				<div class="panel-body">
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Product:</label>	
						<div class="col-sm-5">		
							<input type="text" id="order_item_name" name="order_item_name" class="form-control" value="<?php echo $order_item_name;?>" readonly >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Quantity:</label>	
						<div class="col-sm-5">		
							<input type="text" id="product_quantity" name="product_quantity" class="form-control" value="<?php echo $product_quantity;?>" readonly >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Reason:</label>	
						<div class="col-sm-5">		
						<?php /*
							<select name="returnreason" class="form-control jobtext">
								<option   value="Dead On Arrival" <?php if($returnreason=="Dead On Arrival") { echo "Selected"; } ?>>Dead On Arrival </option>
								<option value="Faulty,Please Supply  details" <?php if($returnreason=="Faulty,Please Supply  details") { echo "Selected"; } ?>>Faulty,Please Supply  details</option>
								<option value="Order Error" <?php if($returnreason=="Order Error") { echo "Selected"; } ?>>Order Error</option>
								<option value="Other ,Please Supply  details" <?php if($returnreason=="Other ,Please Supply  details") { echo "Selected"; } ?>>Other ,Please Supply  details</option>
								<option value="Received Wrong Item" <?php if($returnreason=="Received Wrong Item") { echo "Selected"; } ?>>Received Wrong Item</option>
							</select>	
							*/ ?>
								<select name="returnreason" class="form-control jobtext">
								<?php if($allreturnreason != '' && count($allreturnreason) > 0)
								{ foreach($allreturnreason as $reason) { ?>
										<option value="<?php echo $reason->status; ?>" <?php if($reason->status == $returnreason){ echo "Selected"; } ?>><?php echo $reason->status; ?></option>
								<?php  } }	 ?>
							</select>	
							
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Opened:</label>	
						<div class="col-sm-5">		
							<select name="opened" class="form-control jobtext">
								<option <?php if($opened=="Opened") { echo "Selected"; } ?> value="Opened">Opened </option>
								<option value="Unopened" <?php if($opened=="Unopened") { echo "Selected"; } ?>>Unopened</option>
							</select>				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Comment:</label>	
						<div class="col-sm-5">		
							<textarea type="text" id="comment" name="comment" class="form-control" > <?php echo $comment; ?></textarea>				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Action:</label>	
						<div class="col-sm-5">	
						<?php /*
							<select name="returnaction" class="form-control jobtext">
								<option value=""> </option>
								<option  value="Credit Issued" <?php if($returnaction=="Credit Issued") { echo "Selected"; } ?>>Credit Issued </option>
								<option value="Refunded" <?php if($returnaction=="Refunded") { echo "Selected"; } ?>>Refunded</option>
								<option value="Replacement Sent" <?php if($returnaction=="Replacement Sent") { echo "Selected"; } ?>>Replacement Sent</option>
							</select>		
						*/ ?>
							<select name="returnaction" class="form-control jobtext">
								<?php if($allreturnaction != '' && count($allreturnaction) > 0)
								{ foreach($allreturnaction as $action) { ?>
										<option value="<?php echo $action->status; ?>" <?php if($action->status == $returnaction){ echo "Selected"; } ?>> <?php echo $action->status; ?></option>
								<?php  } }	 ?>
							</select>	
							
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Status:</label>	
						<div class="col-sm-5">	
						<?php /*
							<select name="returnstatus" class="form-control jobtext">
								<option  value="Awaiting Products" <?php if($returnstatus=="Awaiting Products") { echo "Selected"; } ?>>Awaiting Products </option>
								<option value="Complete" <?php if($returnstatus=="Complete") { echo "Selected"; } ?>>Complete</option>
								<option value="Pending" <?php if($returnstatus=="Pending") { echo "Selected"; } ?>>Pending</option>
							</select>	
						*/ ?>
							<select name="returnstatus" class="form-control jobtext">
									<?php if($allreturnstatus != '' && count($allreturnstatus) > 0)
								{ foreach($allreturnstatus as $sts) { ?>
										<option value="<?php echo $sts->status; ?>" <?php if($sts->status == $returnstatus){ echo "Selected"; } ?>><?php echo $sts->status; ?></option>
								<?php  } }	 ?>
							</select>	
						</div>			
					</div> 
				</div> 
 	
 </form>
 		</div>
 		</div>
	</div>
 </div>
							<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
								<!--stat popup -->
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="panel-body">
											<form class="form-horizontal form-groups-bordered" id="form1" name="form1" method="post">
													 <img src="<?php echo $front_base_url;?>upload/return_product/<?php echo $image; ?>">
												<div class="modal-footer" style="padding:10px;">
													<button type="button" class="btn btn-lg btn-red" data-dismiss="modal" style="background:#36b0c8; color:#fff; padding:3px 8px 4px 8px; font-size:17px;">Close</button>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<!--start-->
							<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2"> Message </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
						<a class="btn btn-third add" href="javascript:void('0');" onclick="deleteattribute();"><i class="entypo-plus"></i>Delete</a>
						<button class="btn btn-primary add" type="submit" onclick="javascript:newvalidate();return false;">Submit</button>
					</div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="newform" id="newform"  method="post" action="<?php echo $base_url;?>return_product/add_message/<?php echo $this->uri->segment(3); ?>" enctype="multipart/form-data">
 			<div class="panel-body">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
			<INPUT TYPE="hidden" NAME="userid" VALUE="<?php echo $user_id; ?>">
			<INPUT TYPE="hidden" NAME="action" VALUE="insertmessage">
			
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Message :</label>
					<div class="col-sm-5">
						<input type="text" id="adminmessage" name="adminmessage" class="form-control" value="">
					</div>
				</div>
			</form>
 			</div>
 		</div>
		<form action="<?php echo $base_url."return_product/deletes/".$this->uri->segment(3)."";?>" method="post" enctype="multipart/form-data" id="delform">
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
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;"> Added Date </th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;"> message</th>
					<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Sender</th>
			</tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
           <?php 
		/*	 if($umdata !="" && count($umdata)>0){
			 foreach ($umdata as $udata) {*/ ?>
				 
				  <?php
                  if($umdata){
                          // for($i=0;$i<count($result);$i++){
                  for($i=0;$i<count($umdata);$i++){
				?>
			 
			<tr class="odd">
			<td class="sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $umdata[$i]->id; ?>" type="checkbox">
                </label>
              </div></td>
             
			<td class=""><?php echo $umdata[$i]->addeddate; ?></td>
			<?php if($umdata[$i]->adminreply =="1"){ ?>
			<td class="" style="color:darkblue;"><?php echo $umdata[$i]->message; ?></td>
 			<?php } else { ?>
				<td class="" style="color:green;"><?php echo $umdata[$i]->message; ?></td>
			<?php } ?>
			
				<td class="" style=""><?php if($umdata[$i]->adminreply == "1"){ echo "Admin"; } else { echo "User"; } ?></td>
			 
			</tr>
			 
          <?php }  } else { ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No Message Found'; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
	  </form>
		</div>
							<!--end-->
<?php include('include/footer.php');?>
</body>
</html>
