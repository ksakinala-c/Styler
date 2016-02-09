<?php include('include/header.php');?>
<script>
	function validate(){
		var category = $("#category").val()
		if(category == ''){
			alert('Please Select Product.');
			return false;
		}
		
		var title = $("#title").val();
		if(title == ''){
			alert("Please Enter The title");
			return false;
		}
		
		var review = $("#review").val();
		if(review == ''){
			alert("Please Enter The review");
			return false;
		}
		

	
		$('#form').submit();
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Review</strong></li>
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
					 Add Review
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>review/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>review/add">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_review">
		
		
				<div class="form-group">
						<label class="col-sm-2 control-label" for="select">Product :</label>
						<div class="col-sm-5">
						  <span id='prod2'>
                          
                           <select id="category" name="product_id" class="form-control">
								<option value="">Select Product</option>
								<?php for($i=0;$i<count($product_list);$i++)
					{
					?>
										<option value='<?php echo $product_list[$i]->id; ?>' >
					<?php echo $product_list[$i]->pname; ?>
					</option>
								<?php  }  ?>
						   </select>
                           
						</span>
						</div>
					</div>
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Your rating for this item *:</label>
                    <div class="col-sm-5">
                      <p>
							<div class="ratings input-box"  style="float:left;margin:-2% 0% 0% 2%;">
								<input type="radio" name="ratings" class="" value="1" />
								<input type="radio" name="ratings" class="" value="2" />
								<input type="radio" name="ratings" class="" value="3" />
								<input type="radio" name="ratings" class="" value="4" />
								<input type="radio" name="ratings" class="" value="5" />
							</div>
							</p>
							<input type="hidden" name="ratings" id="ratings" class="required-entry">
                    </div>
                    </div> 
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Title:</label>
                    <div class="col-sm-5">
                       <input type="text" rows="6" name="title" id="title" class="form-control">
                    </div>
                    </div> 
					
					<div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail">Your review:</label>
                    <div class="col-sm-5">
                      <textarea rows="6" name="review" id="review" class="form-control"></textarea>
                    </div>
                    </div> 
			
			</div>
		 </form>
 		</div>
 	</div>
</div>

 </div>
<?php include('include/footer.php');?>
<script>
			$(document).ready(function() {
			$('.ratings').rating();
				$(".ratings .stars .star").click(function(){
				var count_elements = $('.ratings .stars .fullStar').length;
				$("#ratings").val(count_elements);
			});
			
});
			</script>
			<script type="text/javascript" src="<?php echo $base_url_views; ?>js/rating.js"></script>
		<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/rating.css" type="text/css" media="screen" title="Rating CSS">
        
</body>
</html>
