<?php include('include/header.php');?>	


<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>


<script>


		function validate()
	{
		var promotionname = $("#promotionname").val();
		if(promotionname == '')
		{
			alert('Please Enter Coupon Promotion Name');
			return false;
		}
		
		var title = $("#coupanname").val();
		if(title == '')
		{
			alert('Please Enter Coupon Name');
			return false;
		}
		
		var discount = $("#discount").val();
		if(discount == '')
		{
			alert('Please Enter Coupon Discount');
			return false;
		}
		
		$('#form').submit();
	}

</script>

<script>
	function validate()
	{
		var title = $("#coupanname").val();
		if(title == '')
		{
			alert('Please Enter Coupon Name');
			return false;
		}
		$('#form').submit();
	}
	function selectsubcat(id)
			{
		//alert(id);
		  var url = '<?php echo $base_url ?>/coupan/getsubsubcat/';
				$.ajax({
				url:url,
				type:'post',
				data:'id='+id,
				success:function(msg)
				{
					document.getElementById('prod2').innerHTML = msg ;  
				}
			});
	}
	function newaddcat(id)
			{
				//alert(id);
				var url = '<?php echo $base_url ?>/coupan/newadcatselect1/';
				$.ajax({
				url:url,
				type:'post',
				data:'id='+id,
				success:function(msg)
				{
					document.getElementById('prod3').innerHTML = msg ;  
				}
			});
	}
</script>
 <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
 <style>
 .ui-datepicker-trigger {
    margin: -29px 0 0 434px !important;
    position: absolute;
    z-index: 9;
}
 </style>


<div class="main-content">


<div class="row">


<div class="col-xs-12 col-sm-12">


  <ol class="breadcrumb bc-3">


		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>


		<li class="active"><strong>Edit Coupon</strong></li>


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


					 Edit Coupon


                     </div>


                    <div class="col-6 col-sm-4 col-lg-2 firm">


                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>coupan/lists'">Cancel</button>


                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>


                      </div>


 				</div>


 			</div>


			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>coupan/edit/<?php echo $id; ?>">


		 <div class="panel-body">


		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">


		<INPUT TYPE="hidden" NAME="action" VALUE="edit_coupan" >

				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Promotion Name:</label>  
					<div class="col-sm-5">
					  <input type="text" id="promotionname" value="<?php echo $promotionname;?>" name="promotionname" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">


					<label class="col-sm-2 control-label" for="inputEmail">Coupon Name:</label>  


					<div class="col-sm-5">


					  <input type="text" id="coupanname" name="coupanname" class="form-control" value="<?php echo $coupanname;?>">


					</div>


				</div>


                <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Discount:</label>  
					<div class="col-sm-5">
					  <input type="text" id="discount" name="discount" class="form-control" value="<?php echo $discount;?>">
					</div>
				</div>
				 <div class="form-group">
					    	<label class="col-sm-2 control-label" for="inputEmail">Coupon Value:</label>  
							<div class="col-sm-5">
							<input type="radio" <?php if($coupanvalue==1) { ?> checked="checked" <?php } ?> value="1" name="coupanvalue" id="coupanvalue" class="">&nbsp; Price &nbsp;&nbsp;
							<input type="radio" <?php if($coupanvalue==0) { ?> checked="checked" <?php } ?>  value="0" name="coupanvalue" id="coupanvalue" class="">&nbsp; Percentage &nbsp;&nbsp;
							 </div>
					</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Start date:</label>  
					<div class="col-sm-5">
					  <input type="text" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control"  >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">End date:</label>  
					<div class="col-sm-5">


					  <input type="text" id="enddate" name="enddate" class="form-control" value="<?php echo $enddate;?>">


					</div>


				</div>


				
			
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						  <select id="catid" name="catid" class="form-control" onchange="selectsubcat(this.value);">
								<option value="">Select Category</option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro1) { 
								 
								?>
										<option value="<?php echo $pro1->id; ?>"
										<?php if($pro1->id==$catid) { echo "Selected"; } ?>><?php echo $pro1->cname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
					</div>
					 
					 
					 <div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Sub Category :</label>
						<div class="col-sm-5">
						  <span id='prod2'>
                          
                           <select id="subcatid" name="subcatid" class="form-control" onchange="newaddcat(this.value);">
								<option value="">Select Sub Category</option>
								<?php if($allsubcategory != '' && count($allsubcategory) > 0)
								{ foreach($allsubcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id==$subcatid) { echo "Selected"; } ?>><?php echo $pro->scname; ?></option>
								<?php  } }	 ?>
						   </select>
                           
						</span>
						</div>
					</div>
					
					 <div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Style :</label>
						<div class="col-sm-5">
						  <span id='prod3'>
                          
                           <select id="product_id" name="product_id" class="form-control">
								<option value="">Select Style</option>
								<?php if($allstyle != '' && count($allstyle) > 0)
								{ foreach($allstyle as $pros) { ?>
										<option value="<?php echo $pros->id; ?>" <?php if($pros->id==$product_id) { echo "Selected"; } ?>><?php echo $pros->pname; ?></option>
								<?php  } }	 ?>
						   </select>
                           
						</span>
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">No. Of Coupon:</label>  
					<div class="col-sm-5">
					  <input type="text" id="no_of_coupan" name="no_of_coupan" value="<?php echo $no_of_coupan; ?>" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Per User Coupon:</label>  
					<div class="col-sm-5">
					  <input type="text" id="coupan_per_user" name="coupan_per_user" value="<?php echo $coupan_per_user; ?>" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Min. Amount:</label>  
					<div class="col-sm-5">
					  <input type="text" id="mini_amount" name="mini_amount" value="<?php echo $mini_amount; ?>" class="form-control" >
					</div>
				</div>

				





               	<!--div class="form-group">


					<label class="col-sm-2 control-label" for="inputEmail">Description :</label>


					<div class="col-sm-5">


					 	 <textarea  type="text" id="des" name="description" class="form-control" rows="10" cols="50"><?php //echo $description;?></textarea>


					</div>


				</div-->


				


				


			</div>


		 </form>


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
  <!--script>


CKEDITOR.replace('description',


	{


			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',


			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',


			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',


			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',


			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',


			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'


	});


</script-->


<?php include('include/footer.php');?>


</body>


</html>


