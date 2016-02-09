<?php include('include/header.php');?>
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
	function validate()
	{
		var title = $("#coupanname").val();
		if(title == '')
		{
			alert('Please Enter Coupan Name');
			return false;
		}
		
		$('#form').submit();
	}
	
	
	//  Jquery Code
/*	
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><select id="attr" name="attr[]" class="form-control" style="width:150px;display:inline;"><option value="">Select Attribute</option><?php foreach($allattributes as $attribute) {?><option value="<?php echo $attribute->id;?>"><?php echo $attribute->attribute;?></option><?php }?></select><input type="text" id="discount" name="price[]"  class="form-control" style="width:75px;display:inline;"><input type="text" id="quanity" name="quanity[]"  class="form-control"  style="width:75px;display:inline;"><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
*/
	
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Coupan</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Coupan
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>coupan/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate(); return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>coupan/add">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_coupan" NAME="add_coupan">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Coupan Name:</label>  
					<div class="col-sm-5">
					  <input type="text" id="coupanname" name="coupanname" class="form-control" >
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Discount:</label>  
					<div class="col-sm-5">
					  <input type="text" id="discount" name="discount" class="form-control" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Price:</label>  
					<div class="col-sm-5">
					  <input type="text" id="price" name="price" class="form-control" >
					</div>
				</div><div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">percentage:</label>  
					<div class="col-sm-5">
					  <input type="text" id="percentage" name="percentage" class="form-control" >
					</div>
				</div>
				<div class="form-group">					<label class="col-sm-2 control-label" for="date">Start date:</label>  					<div class="col-sm-5">					  <input type="date" id="startdate" name="startdate" class="form-control">					</div>				</div>
				<div class="form-group">					<label class="col-sm-2 control-label" for="date">End date:</label>  					<div class="col-sm-5">					  <input type="date" id="enddate" name="enddate" class="form-control" >					</div>				</div>								 
               	<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Description :</label>
					<div class="col-sm-5">
					 	 <textarea  type="text" id="des" name="description" class="form-control" rows="10" cols="50"></textarea>
					</div>
				</div>
				
				
			</div>
		 </form>
 		</div>
		
 	</div>
</div>

 </div><script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js"></script><link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" /><script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script><script type="text/javascript">	var jq = $.noConflict();jq(document).ready(function(){		jq( "#startdate" ).datepicker({			showOn: "both",			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",			dateFormat: 'yy-mm-dd',			buttonImageOnly: true		});		jq( "#enddate" ).datepicker({			showOn: "both",			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",			dateFormat: 'yy-mm-dd',			buttonImageOnly: true		});	});		</script>
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
