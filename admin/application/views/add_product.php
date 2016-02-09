<?php include('include/header.php');?>
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
<script>
	function validate()
	{
		var categoryid = $("#categoryid").val();
		if(categoryid == '')	
			{		
		alert('Please Select Category.');		
		return false;
		}	
		$subcatids=document.getElementById('subcatid').options[0].selected;	
		if($subcatids==true){	
		alert('Please Select  At least One Sub Category.');		
		return false;		
		}
		var fabricid = $("#fabricid").val();
		if(fabricid == '')	
			{		
		alert('Please Select Fabric.');		
		return false;
		}	
		
		var designid = $("#designid").val();
		if(designid == '')	
			{		
		alert('Please Select Design.');		
		return false;
		}	
		var pname = $("#pname").val();
		if(pname == '')
		{
			alert('Please Enter Product Name.');
			return false;
		}
		$colour=document.getElementById('colour').options[0].selected;
		if($colour==true){
			alert('Please Select At least One Colour.');
			return false; 
		}
		
		/*$size=document.getElementById('size').options[0].selected;
		if($size==true){
			alert('Please Select At least One Size.');
			return false; 
		}*/
		
		var itemcode = $("#itemcode").val();
		if(itemcode == '')
		{
			alert('Please Enter itemcode.');
			return false;
		}
		var weight = $("#weight").val();
		if(weight == '')
		{
			alert('Please Enter Item Weight.');
			return false;
		}
		/* var shortcode = $("#shortcode").val();
		if(shortcode == '')
		{
			alert('Please Enter shortcode.');
			return false;
		} */
		var price = $("#price").val();
		if(price == '')
		{
			alert('Please Enter price.');
			return false;
		} 
		
		var em = document.getElementById('price');
			var filter = /^[0-9]+$/;
			if (!filter.test(em.value)) {
			   alert('Enter Numeric Value in Price');
			   em.focus;
			   return false;
			  }
		
		var discount = $("#discount").val();
		if(discount == '')
		{
			alert('Please Enter discount.');
			return false;
		}
		 var em = document.getElementById('discount');
			  var filter = /^[0-9]+$/;
			  if (!filter.test(em.value)) {
			   alert('Enter Numeric Value in Discount');
			   em.focus;
			   return false;
			  }
			  
		
		
		$('#form').submit();
	}
	function selectsubcat(id)
			{
		//alert(id);
		  var url = '<?php echo $base_url ?>/product/getsubsubcat/';
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
		  var url = '<?php echo $base_url ?>/product/newadcatselect/';
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
	
	
	//  Jquery Code
 
	
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
		<li class="active"><strong>Add Product</strong></li>
  </ol>
  </div>
  </div>
  
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Product
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>product/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate(); return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>product/add">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_product">
		
      
        
        
        	<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Category :</label>
						<div class="col-sm-5">
						  <select id="categoryid" name="categoryid" class="form-control" onchange="selectsubcat(this.value);"  >
								<option value="">Select Category </option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>"><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
			
        	<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select SubCategory :</label>
						<div class="col-sm-5">
						 <span id='prod2'> 
                           
		  <select id="subcatid" name="subcatid[]" class="form-control" onchange="newaddcat(this.value);" multiple="multiple">
								<option value="" selected='selected'>Select SubCategory</option>
								<?php if($allcategory1 != '' && count($allcategory1) > 0)
								{ foreach($allcategory1 as $pro) { ?>
										<option value="<?php echo $pro->id; ?>"><?php echo $pro->scname; ?></option>
								<?php  } }	 ?>
						   </select>
						   </span>
					</div>
				</div>
				
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Fabrics :</label>
						<div class="col-sm-5">
						  <select id="fabricid" name="fabricid" class="form-control" >
								<option value="">Select Fabrics </option>
								<?php if($allnewfabric != '' && count($allnewfabric) > 0)
								{ foreach($allnewfabric as $newfab) { ?>
										<option value="<?php echo $newfab->id; ?>"><?php echo $newfab->fname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
				
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Designs :</label>
						<div class="col-sm-5">
						  <select id="designid" name="designid" class="form-control" >
								<option value="">Select Designs </option>
								<?php if($alldesign != '' && count($alldesign) > 0)
								{ foreach($alldesign as $design) { ?>
										<option value="<?php echo $design->id; ?>"><?php echo $design->designname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Product Name:</label>  
					<div class="col-sm-5">
					  <input type="text" id="pname" name="pname" class="form-control" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Quantity:</label>  
					<div class="col-sm-5">
					  <input type="text" id="qty" name="qty" class="form-control" >
					</div>
				</div>
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Title:</label>
                    <div class="col-sm-5">
                       <input type="text" id="title" name="title" class="form-control">
                    </div>
                    </div> 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Description:</label>
                    <div class="col-sm-5">
                       <textarea type="text" id="metadescription" name="metadescription" class="form-control"></textarea>
                    </div>
                    </div> 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Keywords:</label>
                    <div class="col-sm-5">
                       <input type="text" id="keyword" name="keyword"  class="form-control"> ( Comma Separated Values )
                    </div>
                    </div> 

				<!--colour-->
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Select Colour :</label>
						<div class="col-sm-5">
						   
                           
								<select id="colour" name="colour[]" class="form-control" multiple="multiple">
								<option value="" selected='selected'>Select Colour</option>
								<?php if($allcolour != '' && count($allcolour) > 0) 
								{ foreach($allcolour as $procolour) { ?>
										<option value="<?php echo $procolour->id; ?>"><?php echo $procolour->colourname; ?></option>
								<?php  } }	 ?>
						   </select>
						   </span>
					</div>
				</div>
				<!--colour-->
				
				<!--div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Size:</label>
					<div class="col-sm-5">
								<select id="size" name="size[]" class="form-control" style="width:150px;display:inline;" multiple="multiple">
								<option value="" selected='selected'>Select Size</option>
								<?php foreach($allattributes as $attribute) { ?>
										<option value="<?php echo $attribute->id; ?>"><?php echo $attribute->attribute; ?></option>
								<?php  } 	 ?>
						</select>
						 
    
						</div>
				</div-->				

	 
					
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Itemcode:</label>
					<div class="col-sm-5">
					  <input type="text" id="itemcode" name="itemcode" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Weight:</label>
					<div class="col-sm-5">
					  <input type="text" id="weight" name="weight" class="form-control" >
					</div>
				</div>
				<input type="hidden" id="shortcode" name="shortcode" class="form-control" >
				<!-- div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">ShortDescription:</label>
					<div class="col-sm-5">
					  <input type="text" id="shortcode" name="shortcode" class="form-control" >
					</div>
				</div -->
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Price:</label>
					<div class="col-sm-5">
					  <input type="text" id="price" name="price" class="form-control" onkeypress="return numbersonly(event)">
					</div>
				</div>
				
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Discount:</label>
					<div class="col-sm-5">
					  <input type="text" id="discount" name="discount" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Start date :</label>
					<div class="col-sm-5">
					  <input type="text" id="startdate" name="startdate" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">End date:</label>
					<div class="col-sm-5">
					  <input type="text" id="enddate" name="enddate" class="form-control" >
					</div>
				</div>
				
	 
 
			
				  <div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Description :</label>
					<div class="col-sm-5">
					 	 <textarea  type="text" id="description" name="description" class="form-control" rows="10" cols="50"></textarea>
					</div>
				</div>
				
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pageurl" name="pageurl" class="form-control">
                    </div>
                    </div> 
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Is Trail Shirt:</label>
					<div class="col-sm-5">
                    <select id="is_trail_shirt" name="is_trail_shirt" class="form-control" >						
						<option value="0">No </option>
						<option value="1">Yes </option>						
								
					</select>
                    </div>
				</div>					
				
				
				<div class="form-group">
					<?php /*?><label class="col-sm-2 control-label" for="inputEmail"></label><?php */?>
					<div class="col-sm-12 input_fields_wrap">
					  <input style="width: 140px; margin: 0px 0px 9px; color: rgb(255, 255, 255);" type="button" id="add_field_button"  value="Add More Style"  name="add_field_button" class="form-control"> 
					</div>
				</div>
					 
                
			 </div>
			 
			 
			 	
				 
				
				
			</div>
		 </form>
 		</div>
		
 	</div>
</div>

 </div>
  

<?php include('include/footer.php');?>
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
<script src="<?php echo $base_url_views; ?>js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
	
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
   
    var x = 0; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><select id="style_id'+x+'" name="style_id[]" class="form-control" style="width:190px;height:29px;float:left; margin-top:8px;"><option value="">Select Style</option><?php foreach($allstyle as $style) { ?><option value="<?php echo $style->id;?>"><?php echo $style->fabricsname;?></option><?php }?> </select><input type="hidden" id="name'+x+'" name="name[]" class="form-control" placeholder="Style Name" style="width:190px;height:29px;display:inline;margin-left: 20px;"><input type="text" id="price1'+x+'" name="price1[]" class="form-control" style="width:190px;height:29px;display:inline;margin-left:15px;" placeholder="MRP"/><input type="text" id="sellingprice'+x+'" name="sellingprice[]" class="form-control" style="width:190px;height:29px;display:inline;margin-left:15px;" placeholder="Selling Price"/>&nbsp;&nbsp;<a style="color: rgb(255, 255, 255); margin-bottom: 10px; margin-top: 8px; height: 29px;" class="remove_field btn btn-scoend" href="#" >Remove</a></div>');
        }
    });
     $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
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

</body>
</html>
