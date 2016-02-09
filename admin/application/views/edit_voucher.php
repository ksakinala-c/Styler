<?php include('include/header.php');?>	
 
<script>
	function validate()
	{
		var value = $("#value").val();
		if(value == '')
		{
			alert('Please Select Gift Voucher Value.');
			return false;
		}
 
		var vouchername = $("#vouchername").val();
		if(vouchername == '')
		{
			alert('Please Enter Gift Voucher Name.');
			return false;
		}
		var price = $("#price").val();
		if(price == '')
		{
			alert('Please Enter Gift Voucher Price.');
			return false;
		}
		
		var qty = $("#qty").val();
		if(qty == '')
		{
			alert('Please Enter Gift Voucher Qty.');
			return false;
		}
		$('#form').submit();
	}
</script>
  
<script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>

<div class="main-content">


<div class="row">


<div class="col-xs-12 col-sm-12">


  <ol class="breadcrumb bc-3">


		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>


		<li class="active"><strong>Edit Gift Voucher</strong></li>


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


					 Edit Gift Voucher


                     </div>


                    <div class="col-6 col-sm-4 col-lg-2 firm">


                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>coupan/lists_voucher'">Cancel</button>


                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>


                      </div>


 				</div>


 			</div>


			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>coupan/edit_voucher/<?php echo $id; ?>">


		 <div class="panel-body">


		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">


		<INPUT TYPE="hidden" NAME="action" VALUE="edit_voucher" >

				 

				 <div class="form-group">
							<label class="col-sm-2 control-label" for="select">Select Voucher :</label>
							<div class="col-sm-5">
								<select id="value" name="value" class="form-control" >
									<option value="">Select Voucher Value </option>
										<option value="free" <?php if($value == "free"){ echo "Selected"; } ?>>Free</option>
										<option value="paid" <?php if($value == "paid"){ echo "Selected"; } ?>>Paid</option>
								</select>
						</div>
					</div>
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Gift Voucher Name:</label>
					    <div class="col-sm-5">
					      <input type="text" id="vouchername" name="vouchername" class="form-control" value="<?php echo $vouchername;  ?>">
					    </div>
					  </div>	
					  
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Price:</label>
					    <div class="col-sm-5">
					      <input type="text" id="price" name="price" onkeypress="return numbersonly(event)" class="form-control" value="<?php echo $price;  ?>">
					    </div>
					  </div>	
					  
					   <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Quantity:</label>
					    <div class="col-sm-5">
					      <input type="text" id="qty" name="qty" class="form-control" readonly value="<?php echo $qty;  ?>">
					    </div>
					  </div>	

			</div>


		 </form>


 </div>
 


<?php include('include/footer.php');?>


</body>


</html>


