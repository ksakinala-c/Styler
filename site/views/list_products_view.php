<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript">
(function(doc) {

    var addEvent = 'addEventListener',
        type = 'gesturestart',
        qsa = 'querySelectorAll',
        scales = [1, 1],
        meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

    function fix() {
        meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
        doc.removeEventListener(type, fix, true);
    }

    if ((meta = meta[meta.length - 1]) && addEvent in doc) {
        fix();
        scales = [.25, 1.6];
        doc[addEvent](type, fix, true);
    }

}(document));
</script>
 
<script type="text/javascript">
(function(doc) {

	var addEvent = 'addEventListener',
	    type = 'gesturestart',
	    qsa = 'querySelectorAll',
	    scales = [1, 1],
	    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

	function fix() {
		meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
		doc.removeEventListener(type, fix, true);
	}

	if ((meta = meta[meta.length - 1]) && addEvent in doc) {
		fix();
		scales = [.25, 1.6];
		doc[addEvent](type, fix, true);
	}

}(document));
</script>
			
     <!-- /header -->
<main class="cd-main-content">
  <!-- /.catalog-header -->

  

  <style>
.listProduct{display:none;}
  </style>
  
<main class="cd-main-content">    
<div class="category-content">
	   
        <div class="category-grid-view">
        <?php //echo "<pre>";echo "hi";print_r($productListData); ?>	
	      <div class="container">
					 <ul class="breadcrumb pull-left">
						<li style="font-size:25px;">&nbsp;</li>
					</ul>
					<br> <br>
				<main class="container inner-bottom-xs">
				<article class="post post-single row wow fadeIn">

				<div class="col-md-10 col-sm-10">
					<div class="post-thumbnail">
						<span class="post-title">
						<table width="100%" border="1">
		 
					  <?php
							/*if($this->session->userdata('measuredid') !="") {
							$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
							} else
							{
								$mudata="";
							}*/
							//echo "hello";print_r($mudata);
							$i=0;
							foreach($productListData as $productInfo){
								$productInfo=(array)$productInfo;
							//print_r($productInfo);
							$image=$productInfo['image'];
							?>							 
							  <?php if($i%3==0){  ?>
							  <tr>
							 <?php }  ?>
								<td width="30%" align="center" valign="middle" id="tpic">

								<img src="<?php echo $front_base_url;?>upload/hmlistpage/medium/<?php echo $image; ?>" width="150" height="182" style="cursor:pointer;" onclick="document.getElementById('shouldertype1').checked=true;">
								
								
								<p><label>
									  <input class="listProduct" type="radio" name="shouldertype" id="shouldertype<?php echo $productInfo['id']; ?>" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Average") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
									  </label></p>
								
								</td>
										
					  <?php $i++; if($i%3==0){ ?>
							  </tr>
							 <?php } ?>
					  <?php  } // end of foreach ?>					 
					</table>
						</span>
					</div><!-- .post-thumbnail -->
				</div>
			</article>
		</main>         
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>


 
<!-- /footer -->        <!-- Modal -->
  

<?php include ('includes/cartdetail.php'); ?>
<?php include ('includes/footer.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
 
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#product_addtocart_form").validationEngine('');
		});
            
	</script>
	<script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}

/*
 * script for converting the height into cms
 * @Author MSYS009
*/
jQuery(".cms-conv-cls").change(function(){
	var footValue=jQuery("#foot").val();
	var inchValue=jQuery("#inch").val();
	if(footValue && inchValue)
	{
		footValue=footValue.replace("ft","");		
		var cmValue=(footValue*30.48)+(inchValue*2.54);
		jQuery("#impheight").val(cmValue);
	}else if(footValue){
		footValue=footValue.replace("ft","");
		var cmValue=parseFloat(footValue*30.48);		
		jQuery("#impheight").val(cmValue);
	}else if(inchValue){	
		var cmValue=parseFloat(inchValue*2.54);
		jQuery("#impheight").val(cmValue);
	}else{
		jQuery("#impheight").val('');
	}
	
});
/*
 * script for converting the weight into lbs
 * @Author MSYS009
*/
jQuery(".lbs-conv-cls").blur(function(){
	var weightValue=$(this).val();
	if(weightValue){	
		var lbsValue=parseFloat(weightValue*2.20462);
		jQuery("#impweight").val(lbsValue);
	}else{
		jQuery("#impweight").val('');
	}
});
</script>
</body>
</html>
