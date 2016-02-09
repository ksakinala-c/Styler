<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate(){
		/*var colourname = $("#colourname").val();
		if(colourname == ''){
			alert('Please Enter colour name');
			return false;
		}
		 var colourcode = $("#colourcode").val();
		if(colourcode == ''){
			alert('Please Enter colour code');
			return false;
		}*/
		$('#form').submit();
	}
	
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Color  <?php  $colourname; ?></strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
    <?php $msg = $this->session->flashdata('msg'); ?>
<?php if($msg !="") { ?><div class="warning" style="color:green;"><?php echo $msg; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					Add Email Template
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>template/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_template">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
			
					
						<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Register Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="regemailsub" name="regemailsub" value="<?php echo $regemailsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Customer Register Email:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="regemail" name="regemail" class="form-control" rows="10" cols="50"><?php echo $regemail;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Order Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="ordermailsub" name="ordermailsub" value="<?php echo $ordermailsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Order Email:</label>
                    <div class="col-sm-6">
                       
					    <textarea  type="text" id="ordermail" name="ordermail" class="form-control" rows="10" cols="50"><?php echo $ordermail;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Cancel Order Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="canemailsub" name="canemailsub" value="<?php echo $canemailsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Cancel Order Email:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="canemail" name="canemail" class="form-control" rows="10" cols="50"><?php echo $canemail;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Affiliate Register Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="affregsub" name="affregsub" value="<?php echo $affregsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Affiliate Register:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="affreg" name="affreg" class="form-control" rows="10" cols="50"><?php echo $affreg;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Insider Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="insregsub" name="insregsub" value="<?php echo $insregsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Insider Register:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="insreg" name="insreg" class="form-control" rows="10" cols="50"><?php echo $insreg;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">News Letter Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="subscribersub" name="subscribersub" value="<?php echo $subscribersub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">News Letter Subscriber:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="subscriber" name="subscriber" class="form-control" rows="10" cols="50"><?php echo $subscriber;?></textarea>
                    </div>
                    </div>
					
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Order Status Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="order_statussub" name="order_statussub" value="<?php echo $order_statussub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Order Status:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="order_status" name="order_status" class="form-control" rows="10" cols="50"><?php echo $order_status;?></textarea>
                    </div>
                    </div>
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Shipment Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="shipmen_sub" name="shipmen_sub" value="<?php echo $shipmen_sub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Shipment Email :</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="ship_order_status" name="ship_order_status" class="form-control" rows="10" cols="50"><?php echo $ship_order_status;?></textarea>
                    </div>
                    </div>
					
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Abandoned Cart Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="abandoned_cartsub" name="abandoned_cartsub" value="<?php echo $abandoned_cartsub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Abandoned Cart:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="abandoned_cart" name="abandoned_cart" class="form-control" rows="10" cols="50"><?php echo $abandoned_cart;?></textarea>
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Save Style Email Subject:</label>
                    <div class="col-sm-6">
                        
					    <input type="text" id="save_stylesub" name="save_stylesub" value="<?php echo $save_stylesub;?>" class="form-control" rows="10" cols="50">
                    </div>
                    </div>
					<div class="form-group">
                    <label class="col-sm-1 control-label" for="inputEmail">Save Style:</label>
                    <div class="col-sm-6">
                        
					    <textarea  type="text" id="save_style" name="save_style" class="form-control" rows="10" cols="50"><?php echo $save_style;?></textarea>
                    </div>
                    </div>
					 
                    
 				</div>
 	
 </form>
 		</div>
 		</div>
	</div>
 </div>
   <script>
CKEDITOR.replace('regemail',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
  <script>
CKEDITOR.replace('ordermail',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
  <script>
CKEDITOR.replace('canemail',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('affreg',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('insreg',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('subscriber',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('order_status',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('abandoned_cart',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('save_style',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<script>
CKEDITOR.replace('ship_order_status',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>

<?php include('include/footer.php');?>
</body>
</html>
