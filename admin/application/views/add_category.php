<?php include('include/header.php');?>
<script>
	function validate(){
		var cname = $("#cname").val();
		if(cname == ''){
			alert('Please Enter Category.');
			return false;
		}
		var pa=document.getElementById('cname');
		var p = /[a-zA-Z\s-, ]+$/; 
		if(!p.test(pa.value))
			{
				alert("Please Enter Valid Category.");
				return false;
			}
			
		/*var title = $("#title").val();
		if(title == ''){
			alert('Please Enter Title. ');
			return false;
		}

		var description = $("#description").val();
		if(description == ''){
			alert('Please Enter Description.');
			return false;
		}
		
		var keyword = $("#keyword").val();
		if(keyword == ''){
			alert('Please Enter Keyword. ');
			return false;
		}*/
		
		/*var image = $("#image").val();
		if(image == ''){
			alert('Please Add Image. ');
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
		<li class="active"><strong>Add Category</strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
					<div class="col-6 col-sm-4 col-lg-2">
					 Add Category
						</div>
						<div class="col-6 col-sm-4 col-lg-2 firm">
						<button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>category/lists'">Cancel</button>
						<button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
						</div> 
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>category/add" enctype="multipart/form-data">
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="add_category">
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Category :</label>
						
					    <div class="col-sm-5">
					      <input type="text" id="cname" name="cname" class="form-control" value="<?php echo $cname;?>">
					    </div>
					</div>

					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Image:</label>
					    <div class="col-sm-5">
					      <input type="file" id="image" name="image" class="form-control">
						  <label class="col-sm control-label" for="" style="color:green;">Image Dimension : 1500*278</label>			
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
                       <textarea type="text" id="description" name="description" class="form-control"></textarea>
                    </div>
                    </div> 

					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Meta Keywords:</label>
                    <div class="col-sm-5">
                       <input type="text" id="keyword" name="keyword"  class="form-control"> ( Comma Separated Keywords )
                    </div>
                    </div> 
					
					 <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Page Url:</label>
                    <div class="col-sm-5">
                       <input type="text" id="pageurl" name="pageurl" class="form-control">
                    </div>
                    </div> 
					
			  
					 <!--div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail">Set Home Page:</label>
							 <div class="col-sm-5">
							<input name="flag" id="flag" value="1" type="checkbox">
							
							 </div>
						</div-->
					 
						
				</form>
 			</div>
 		</div>
</div>
 
 </div>
<?php include('include/footer.php');?>
</body>
</html>