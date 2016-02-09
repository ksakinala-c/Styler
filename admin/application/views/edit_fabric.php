<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
	function validate(){
	 
		
		 var catid = $("#catid").val();
		if(catid == '')
		{
			alert('Please select Category ');
			return false;
		}
		$subcatids=document.getElementById('subcatid').options[0].selected;	
		if($subcatids==true){	
		alert('Please Select  At least One Sub Category.');		
		return false;		
		}
		 
		var fabricsname = $("#fabricsname").val();
		if(fabricsname == ''){
			alert('Please Enter Style Name ');
			return false;
		}
 
		$('#form').submit();
	}
	function selectsubcat(catid)
	{
 
		var url = '<?php echo $base_url ?>/fabric/show_category/';
			
		$.ajax({
		url:url,
		type:'post',
		data:'catid='+catid,
		success:function(msg)
		{
				
			document.getElementById('prod2').innerHTML = msg ;
		}
		});
}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Style  <?php  $cname; ?></strong></li>
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
					 Edit Style 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>fabric/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>fabric/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
				<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_fabric">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					
					 
					<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						  <select id="catid" name="catid" class="form-control" onchange="selectsubcat(this.value);">
								<option value="">Select Category</option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id==$catid) { echo "Selected"; } ?>><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
					</div>
					
					 <div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Sub Category :</label>
						<div class="col-sm-5">
						  <span id='prod2'>
                           <?php $subcatarray = explode(',',$subcatid);?>
                           <select id="subcatid" name="subcatid[]" class="form-control"  multiple="multiple" >
								<option value="">Select Sub Category</option>
								<?php if($allsubcategory != '' && count($allsubcategory) > 0)
								{ foreach($allsubcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if (in_array($pro->id, $subcatarray, true)) {
    ?> selected = 'selected' <?php } ?>><?php echo $pro->scname; ?></option>
								<?php  } }	 ?>
						   </select>
                           
						</span>
						</div>
					</div>
				 
					<!-- div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Product :</label>
						<div class="col-sm-5">
						  <select id="pid" name="pid" class="form-control">
								<option value="">Select Product</option>
								<?php if($allproduct != '' && count($allproduct) > 0)
								{ foreach($allproduct as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id==$pid) { echo "Selected"; } ?>><?php echo $pro->pname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
					</div -->
					 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Style name:</label>
                    <div class="col-sm-5">
                       <input type="text" id="fabricsname" name="fabricsname" value="<?php echo $fabricsname;?>" class="form-control">
                    </div>
                    </div> 
					
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail"> Description:</label>
                    <div class="col-sm-5">
                       <textarea type="text" id="description" name="description" class="form-control"><?php echo $description;?></textarea>
                    </div>
                    </div> 



					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Title:</label>
                    <div class="col-sm-5">
                       <input type="text" id="metatitle" name="metatitle" value="<?php echo $metatitle;?>" class="form-control">
                    </div>
                    </div> 
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Keywords:</label>
                    <div class="col-sm-5">
                       <input type="text" id="keyword" name="keyword" value="<?php echo $keyword;?>" class="form-control">( Comma Separated Keywords )
                    </div>
                    </div> 

					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Description:</label>
                    <div class="col-sm-5">
                       <textarea id="metadescription" name="metadescription" class="form-control"><?php echo $metadescription;?></textarea>
                    </div>
                    </div> 
                     <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pageurl" name="pageurl" value="<?php echo $pageurl;?>"  class="form-control">
                    </div>
                    </div> 
						<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Order:</label>
                    <div class="col-sm-5">
                       <input type="text" id="order" name="order"  value="<?php echo $order;?>" class="form-control">
                    </div>
                    </div> 
 				</div>
		 
 	
 </form>
 		</div>
 		</div>
	</div>
 </div>
 <script>
CKEDITOR.replace('description',
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
