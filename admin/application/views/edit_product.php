<?php // print_r($featured_product);break;
include('include/header.php');?>	
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
	
</script>
<script>
	function singledelete(url)
	{
	if(confirm('Do you want to Delete?')){ 
		window.location.href = url;
	}
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
 
 <style>
 .ui-datepicker-trigger {
    margin: -29px 0 0 434px !important;
    position: absolute;
    z-index: 9;
}

 </style>
 <link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Product</strong></li>
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
					 Edit Product
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>product/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>product/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_product">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					
					  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Select Category:</label>
                    <div class="col-sm-5">
                   
                       <select id="categoryid" name="categoryid" class="form-control" onchange="selectsubcat(this.value);">
								<option value="">Select Category</option>
						<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
						<option value="<?php echo $pro->id; ?>"<?php if($pro->id == $categoryid){ ?> selected = 'selected' <?php } ?>><?php echo $pro->cname; ?></option>
						<?php  } }	 ?>
						  </select>     
                    </div>
                    </div>	
					
			<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Sub Category:</label>
                    <div class="col-sm-5">
                   <span id="prod2">
				   <?php $subcatarray = explode(',',$subcatid);?>
                       <select id="subcatid" name="subcatid[]" class="form-control" multiple="multiple" onchange="newaddcat(this.value);">
								<option value="">Select Subategory</option>
						<?php if($allcategory1 != '' && count($allcategory1) > 0)
								{ foreach($allcategory1 as $pro) { ?>
						<option value="<?php echo $pro->id; ?>"<?php if (in_array($pro->id, $subcatarray, true)) {
    ?> selected = 'selected' <?php } ?>><?php echo $pro->scname; ?></option>
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
										<option value="<?php echo $newfab->id; ?>" <?php if($newfab->id == $fabricid){ ?> selected = 'selected' <?php } ?>><?php echo $newfab->fname; ?></option>
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
										<option value="<?php echo $design->id; ?>" <?php if($design->id == $designid){ ?> selected = 'selected' <?php } ?>><?php echo $design->designname; ?></option>
								<?php  } }	 ?>
						   </select>
					</div>
				</div>
				 
					 
					 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Select Colour:</label>
                    <div class="col-sm-5">
                    <?php $clrarray = explode(',',$colour);?>
                       <select id="colour" name="colour[]" class="form-control" multiple="multiple">
								<option value="">Select Colour</option>
						<?php if($allcolour != '' && count($allcolour) > 0)
								{ foreach($allcolour as $procolour) { ?>
						<option value="<?php echo $procolour->id; ?>"<?php if (in_array($procolour->id, $clrarray, true)) {
    ?> selected = 'selected' <?php
} ?>"><?php echo $procolour->colourname; ?></option>
								<?php  } }	 ?>
						  </select> 
						  </span>    
                    </div>
                    </div>
					
					
				 
					 
				
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Product Name:</label>
                    	<div class="col-sm-5">
                       		<input type="text" id="pname" name="pname" 
					   		value="<?php echo $pname;?>" class="form-control">
                   	 	</div>
                    </div>
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Quantity:</label>  
					<div class="col-sm-5">
					  <input type="text" id="qty" name="qty" value="<?php echo $qty;?>" class="form-control" >
					</div>
				</div>
							<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Title:</label>
                    <div class="col-sm-5">
                       <input type="text" id="title" name="title" value="<?php echo $title;?>" class="form-control">
                    </div>
                    </div> 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Description:</label>
                    <div class="col-sm-5">
                       <textarea type="text" id="metadescription" name="metadescription" value="<?php echo $metadescription;?>" class="form-control"><?php echo $description;?></textarea>
                    </div>
                    </div> 
					 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pageurl" name="pageurl" value="<?php echo $pageurl;?>"  class="form-control">
                    </div>
                    </div> 
											
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Keywords:</label>
                    <div class="col-sm-5">
                       <input type="text" id="keyword" name="keyword" value="<?php echo $keyword;?>" class="form-control"> ( Comma Separated Values )
                    </div>
                    </div> 
				 	 
					
				<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Itemcode:</label>
                    	<div class="col-sm-5">
                       		<input type="text" id="itemcode" name="itemcode" 
					   		value="<?php echo $itemcode;?>" class="form-control">
                   	 	</div>
                    </div> 
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Weight:</label>
                    	<div class="col-sm-5">
                       		<input type="text" id="weight" name="weight" 
					   		value="<?php echo $weight;?>" class="form-control">
                   	 	</div>
                    </div> 
                    <input type="hidden" id="shortcode" name="shortcode" 
					   		value="<?php echo $shortcode;?>" class="form-control">
				   <!-- div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Short Desc:</label>
                    	<div class="col-sm-5">
                       		<input type="text" id="shortcode" name="shortcode" 
					   		value="<?php echo $shortcode;?>" class="form-control">
                   	 	</div>
                    </div-->
					
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Price:</label>
					<div class="col-sm-5">
					  <input type="text" id="price" name="price" class="form-control" value="<?php echo $price;?>" onkeypress="return numbersonly(event)">
					</div>
				</div> 
				 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Discount:</label>
                    	<div class="col-sm-5">
                       		<input type="text" id="discount" name="discount" 
					   		value="<?php echo $discount;?>" class="form-control">
                   	 	</div>
                    </div>
					
					<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Start date :</label>
					<div class="col-sm-5">
					  <input type="text" id="startdate" name="startdate" value="<?php echo $startdate;?>" class="form-control" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">End date:</label>
					<div class="col-sm-5">
					  <input type="text" id="enddate" name="enddate" value="<?php echo $enddate;?>" class="form-control" >
					</div>
				</div>
					
					<!--div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Select as featured product:</label>
					<div class="col-sm-5">
                       		<input type="checkbox" id="featured_product" name="featured_product"
							<?php /* if($featured_product) {$ch = 'checked'; $val=1;}else{$ch = ''; $val=0;} */ ?> 
					   		value=1  <?php /* echo $ch; */?> class="form-control">		
                   	 	</div>
                    </div-->
					
					<!--size-->
					 <!--div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Select Size:</label>
                    <div class="col-sm-5">
                    <?php $attrarray = explode(',',$size);?>
                       <select id="size" name="size[]" class="form-control" multiple="multiple">
								<option value="">Select Size</option>
						<?php if($allattributes != '' && count($allattributes) > 0)
								{ foreach($allattributes as $attribute) { ?>
						<option value="<?php echo $attribute->id; ?>"<?php if (in_array($attribute->id, $attrarray, true)) {
    ?> selected = 'selected' <?php
} ?>"><?php echo $attribute->attribute; ?></option>
								<?php  } }	 ?>
						  </select> 
						  </span>    
                    </div>
                    </div-->
					<!--size-->
					
					  
							
				 	 
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Description :</label>
                    <div class="col-sm-5">
                        <textarea  type="text" id="description" name="description" class="form-control" rows="10" cols="50"><?php echo $description;?></textarea>
                    </div>
                    </div>
					
					  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" value="<?php echo $pageurl;?>" id="pageurl" name="pageurl" class="form-control">
                    </div>
                    </div> 
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail">Is Trail Shirt:</label>
						<div class="col-sm-5">
						<select id="is_trail_shirt" name="is_trail_shirt" class="form-control" >						
							<option value="0" <?php if($is_trail_shirt==0){ echo "selected='selected'"; } ?> >No </option>
							<option value="1" <?php if($is_trail_shirt==1){ echo "selected='selected'"; } ?>>Yes </option>						
									
						</select>
						</div>
					</div>
					
				<input style="width: 140px; color: rgb(255, 255, 255); border: medium none; margin:2px 0 9px 18px;" type="button" id="add_field_button"  value="Add More Style"  name="add_field_button" class="form-control">
                <div style="width:100%; float:left; margin:0 0 10px 0px;"></div>
				<?php if($pro_style >0)
							{ ?>
				    <p><span style="font-size:15px;margin-left:15px;color:#000;">Style Name :</span>
					<span style="margin-left:100px;color:#000;">MRP :</span> 
					<span style="margin-left:150px;color:#000;">Selling Price : </span>
					
					<!--span style="margin-left:105px;color:#000;">Quantity :</span></p-->
					<div class="col-sm-12">
                    
						</br>
						<?php
							
							for($i=0;$i<count($pro_style);$i++)
								{
									//print_r($ci_orderdata);
							?>
							
						  <select style="width:170px;height:29px;float:left;" id="style_id<?php echo $i;?>" name="style_id1[]" class="form-control">
								<option value="">Select Category</option>
								<?php if($allstyle != '' && count($allstyle) > 0)
								{ foreach($allstyle as $style1) { ?>
										<option value="<?php echo $style1->id; ?>" <?php if($pro_style[$i]->style_id == $style1->id) { echo "Selected"; }?>><?php echo $style1->fabricsname; ?></option>
								<?php  } }	 ?>
						   </select>
					
				
				
                       		<input style="width:170px;height:29px;float:left;margin-left: 15px;" type="hidden" id="name<?php echo $i;?>" name="name1[]" 
					   		value="<?php echo $pro_style[$i]->name; ?>" class="form-control">
                   	 	
					
					
                       		<input style="width:170px;height:29px;float:left;margin-left:15px;" type="text" id="price<?php echo $i;?>" name="price1[]" 
					   		value="<?php echo $pro_style[$i]->price; ?>" class="form-control">
							
							<input style="width:170px;height:29px;float:left;margin-left:15px;" type="text" id="sellingprice<?php echo $i;?>" name="sellingprice1[]" 
					   		value="<?php echo $pro_style[$i]->sellingprice; ?>" class="form-control">
							
							
							<input TYPE="hidden" id="updateid[]" NAME="updateid[]" VALUE="<?php echo $pro_style[$i]->id; ?>"> 
						<a class="btn btn-scoend" style="color: rgb(255, 255, 255); margin:0 0 0 15px; height: 28px;" onclick="singledelete('<?php echo $base_url."product/remove/"; ?><?php echo $pro_style[$i]->id; ?>/<?php echo $pro_style[$i]->pid; ?>');" href="javascript:void(0);" class="remove_field">Remove</a>
						
						<a class="btn btn-scoend" style="color: rgb(255, 255, 255); margin:0 0 0 15px; height: 28px;" href="<?php echo $base_url."product/addimage/"; ?><?php echo $pro_style[$i]->id; ?>/<?php echo $pro_style[$i]->pid; ?>" class="remove_field">Add Image</a>
						
						
							<div class="col-sm-12" style="margin:20px 0 20px 0px; padding:0px;">
							<span style="margin: 0px 0px 10px; display: inline-block;">Product details : </span>
							<textarea style="" type="text" id="pro_detail<?php echo $i;?>" name="pro_detail1[]" 
					   		value="<?php echo $pro_style[$i]->pro_detail; ?>" class="form-control"><?php echo $pro_style[$i]->pro_detail; ?></textarea></div>
						
							
							
							<!--input style="width:170px;height:29px;float:left;margin-left:15px;" type="text" id="qty<?php echo $i;?>" name="qty1[]" 
					   		value="<?php echo $pro_style[$i]->qty; ?>" class="form-control"-->
							
							<script>
CKEDITOR.replace('pro_detail<?php echo $i;?>',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
                   	 
					
					
                        <div style="width:100%; margin:0 0 10px 0px;"></div>
						
					<?php } } 	else {
			  ?>
			  </br>
				<tr><td> <?php echo "No Data Found.!!"; ?></td> </tr>
			  <?php
		  } ?>
		  
		 
					
					<div style="padding:0px;" class="col-sm-12 input_fields_wrap">
					   
					</div>
				
		  
					</div>
					
					<div style="width:100%; float:left; margin:0 0 10px 0px;"></div>
					
					
					
					
					
					 
                    
					
 				</div>
 			</div>
 		</div>
	</div>
 </form>
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
            $(wrapper).append('<div><select id="style_id'+x+'" name="style_id[]" class="form-control" style="width:170px;height:29px;float:left;"><option value="">Select Style</option><?php foreach($allstyle as $style) { ?><option value="<?php echo $style->id;?>"><?php echo $style->fabricsname;?></option><?php }?> </select><input type="hidden" id="name'+x+'" name="name[]" class="form-control" placeholder="Style Name" style="width:170px;height:29px;float:left;margin-left: 15px;"><input type="text" id="price1'+x+'" name="price1[]" class="form-control" style="width:170px;height:29px;float:left;margin-left: 15px;" placeholder="MRP"/><input type="text" id="sellingprice'+x+'" name="sellingprice[]" class="form-control" style="width:170px;height:29px;float:left;margin-left: 15px;" placeholder="Selling Price"/>&nbsp;&nbsp;<a class="remove_field btn btn-scoend" style="color: rgb(255, 255, 255); margin:0px 0 5px 9px; height: 28px;" href="#" >Remove</a><div style="width:100%; float:left; margin:0 0 10px 0px;"></div></div>');
        }
    });
     $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
</body>
</html>
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
 <script>
CKEDITOR.replace('pro_detail',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>