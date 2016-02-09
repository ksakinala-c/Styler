<?php include('include/header.php');?>	
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>

<script>
	function validate(){
		
		
		$('#form').submit();
	}
	
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
	<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Product Return  <?php  $cname; ?></strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

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
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>return_product/returnproducts/<?php echo $order_id; ?>" enctype="multipart/form-data" >
				<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_category">
					<INPUT TYPE="hidden" NAME="user_id" VALUE="<?php echo $order_id;?>">
					<INPUT TYPE="hidden" NAME="product_id" VALUE="<?php echo $product_id;?>">
					
			
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail">Order ID:</label>
						<div class="col-sm-5">
						   <input type="text" id="order_id" name="order_id" value="<?php echo $order_id;?>" class="form-control" disabled >
						</div>
                    </div> 

					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Order Date:</label>	
						<div class="col-sm-5">		
							<input type="text" id="cdate" name="cdate" class="form-control" value="<?php echo $cdate;?>" disabled >				
						</div>			
					</div> 
					
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Customer:</label>	
						<div class="col-sm-5">		
							<input type="text" id="customer" name="customer" class="form-control" value="<?php echo $username;?>" disabled >				
						</div>			
					</div> 
					
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">E-Mail:</label>	
						<div class="col-sm-5">		
							<input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>" disabled >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Telephone:</label>	
						<div class="col-sm-5">		
							<input type="text" id="phone" name="phone" class="form-control" value="<?php echo $phone;?>" disabled >				
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
							<input type="text" id="product" name="product" class="form-control" value="<?php echo $order_item_name;?>" disabled >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Quantity:</label>	
						<div class="col-sm-5">		
							<input type="text" id="quantity" name="quantity" class="form-control" value="<?php echo $product_quantity;?>" disabled >				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Reason:</label>	
						<div class="col-sm-5">		
						
							<select name="returnreason" class="form-control jobtext">
								<?php if($allreturnreason != '' && count($allreturnreason) > 0)
								{ foreach($allreturnreason as $reason) { ?>
										<option value="<?php echo $reason->status; ?>"><?php echo $reason->status; ?></option>
								<?php  } }	 ?>
							</select>			
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Opened:</label>	
						<div class="col-sm-5">		
							<select name="opened" class="form-control jobtext">
								<option selected="selected" value="Opened">Opened </option>
								<option value="Unopened">Unopened</option>
							</select>				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Comment:</label>	
						<div class="col-sm-5">		
							<textarea type="text" id="comment" name="comment" class="form-control" > </textarea>				
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Action:</label>	
						<div class="col-sm-5">	
							<select name="returnaction" class="form-control jobtext">
								<?php if($allreturnaction != '' && count($allreturnaction) > 0)
								{ foreach($allreturnaction as $action) { ?>
										<option value="<?php echo $action->status; ?>"><?php echo $action->status; ?></option>
								<?php  } }	 ?>
							</select>							
						</div>			
					</div> 
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="inputEmail">Return Status:</label>	
						<div class="col-sm-5">	
							<select name="returnstatus" class="form-control jobtext">
									<?php if($allreturnstatus != '' && count($allreturnstatus) > 0)
								{ foreach($allreturnstatus as $sts) { ?>
										<option value="<?php echo $sts->status; ?>"><?php echo $sts->status; ?></option>
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
<?php include('include/footer.php');?>
</body>
</html>
