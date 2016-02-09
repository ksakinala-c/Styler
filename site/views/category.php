<?php include ('includes/header.php');
function roundUpToAny($n,$x=5) {
    return (round($n)%$x === 0) ? round($n) : round(($n+$x/2)/$x)*$x;
}
?>
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

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
 <script>
    	function subfilters(){
    		document.filters.submit();
    	}
    </script>
	<br><br><br><br>

<!-- /header -->
<main class="cd-main-content" id="head">
<div class="breadcrumb-holder">
		<div class="container">
			<ul class="breadcrumb pull-left">
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="<?php echo $base_url; ?>home/lists/?sub_cat=<?php echo $_GET['sub_cat']; ?>"><?php echo $subcatimage->scname; ?></a></li>
 			</ul>
 		</div><!--container-->
	</div><!--breadcrumb-holder-->

<?php if($subcatimage->banner != '') { ?>
 	<section class="category-header" style="margin-top:0px;" <?php if($subcatimage->banner != '') {?>  style="background-image: url(<?php echo $http_host; ?>/upload/subcategory/<?php echo $subcatimage->banner; ?>);" <?php } ?> >
		<!-- div class="titalbarmainuss">
			<h1 class="category-title"><?php echo $subcatimage->scname; ?></h1>
 		</div -->
	</section>
<?php } ?>
     <div class="category-content" style="margin-top:0px;">
         <div class="category-grid-view">
        
		    <div class="container">
            <div>
			<form method="get" action="<?php echo $base_url; ?>home/lists/" id="filters" name="filters" style="width:100%; margin-left:30px;">
				  <input type="hidden" value="<?php echo $_GET['sub_cat']; ?>" name="sub_cat" />	
				  <select name="color" id="color" class="tab"  onChange="subfilters();" <?php if($this->input->get('color')!='') { ?> style="width:22%; float:left; height:30px;" <?php } else { ?>style="width:22%; float:left; height:30px; color:#000; font-weight:bold; margin:0 5px 0 0px;" <?php } ?> >
					<option value="" style="color:#000; font-weight:bold;">All Color</option>
						<?php
							if($allcolour != '' && count($allcolour) > 0) {  
							foreach($allcolour as $colour)
							{
						?>
					<option style="color:#000; font-weight:normal;" value="<?php echo $colour->id; ?>" <?php if($this->input->get('color') == $colour->id) { ?> selected="selected" <?php } ?>><?php echo $colour->colourname; ?></option>
							<?php }} ?>
					</select>
					
					 <select name="fabricid" id="fabricid" class="tab" onChange="subfilters();" <?php if($this->input->get('fabricid')!='') { ?> style="width:22%; float:left; height:30px;" <?php } else { ?>style="width:22%; float:left; height:30px; color:#000; font-weight:bold; margin:0 5px 0 0px;" <?php } ?>>
					<option value="" style="color:#000; font-weight:bold;">All Fabric</option>
						<?php
							if($allnewfabric != '' && count($allnewfabric) > 0) {  
							foreach($allnewfabric as $fabric)
							{
						?>
					<option value="<?php echo $fabric->id; ?>" style="color:#000; font-weight:normal;" <?php if($this->input->get('fabricid') == $fabric->id) { ?> selected="selected" <?php } ?>><?php echo $fabric->fname; ?></option>
							<?php }} ?>
					</select>
					
					 <select name="designid" id="designid" class="tab"  onChange="subfilters();" <?php if($this->input->get('designid')!='') { ?> style="width:22%; float:left; height:30px;" <?php } else { ?>style="width:22%; float:left; height:30px; color:#000; font-weight:bold; margin:0 5px 0 0px;" <?php } ?>>
					<option value="" style="color:#000; font-weight:bold;">All Patterns</option>
						<?php
							if($alldesign != '' && count($alldesign) > 0) {  
							foreach($alldesign as $design)
							{
						?>
					<option value="<?php echo $design->id; ?>" style="color:#000; font-weight:normal;" <?php if($this->input->get('designid') == $design->id) { ?> selected="selected" <?php } ?>><?php echo $design->designname; ?></option>
							<?php }} ?>
					</select>


					<select name="price" id="price" class="tab"  onChange="subfilters();" <?php if($this->input->get('designid')!='') { ?> style="width:22%; float:left; height:30px;" <?php } else { ?>style="width:22%; float:left; height:30px; color:#000; font-weight:bold; margin:0 5px 0 0px;" <?php } ?>>
					<option value="" style="color:#000; font-weight:bold;">Price</option>
					  <option value="500" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '500') { ?> selected="selected" <?php } ?>>300 to 500</option>
					  <option value="700" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '700') { ?> selected="selected" <?php } ?>>500 to 700</option>
					  <option value="1000" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '1000') { ?> selected="selected" <?php } ?>>700 to 1000</option>
					  <option value="1500" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '1500') { ?> selected="selected" <?php } ?>>1000 to 1500</option>
					   <option value="2000" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '2000') { ?> selected="selected" <?php } ?>>1500 to 2000</option>
					   <option value="2500" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '2500') { ?> selected="selected" <?php } ?>>2000 to 2500</option>
					   <option value="3000" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '3000') { ?> selected="selected" <?php } ?>>2500 to 3000</option>
					   <option value="3500" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '3500') { ?> selected="selected" <?php } ?>>3000 to 3500</option>
							 
					</select>
               
				<!--<select name="price" id="price" onchange="subfilters();" class="tab"  <?php if($this->input->get('price')!='') { ?> style="width:22%; float:left; height:30px;" <?php } else { ?>style="width:22%; float:left; height:30px; color:#000; font-weight:bold;" <?php } ?>>
				  <option value="" style="color:#000; font-weight:bold;">Price</option>
				  <option value="500" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '500') { ?> selected="selected" <?php } ?>>300 to 500</option>
				  <option value="700" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '700') { ?> selected="selected" <?php } ?>>500 to 700</option>
				  <option value="1000" style="color:#000; font-weight:normal;" <?php if($this->input->get('price') == '1000') { ?> selected="selected" <?php } ?>>700 to 1000</option>
				</select>-->
            </form>
            </div>
            <br><br><br>
            
        <section class="container about-features">	
		
		<div class="row fadeInUp">
			 <?php
			if($allproducts != '' && count($allproducts) > 0) {  
			foreach($allproducts as $product)
			{
				 $lowestpricestyle = $this->home_model->minpricestyleproduct($product->id);
 			?>
			<div class="col-md-4a col-sm-4 feature">
				<div class="lazy-load"><a href="<?php echo $base_url; ?>home/product/<?php echo $product->id; ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image21<?php echo $product->id; ?>','','<?php echo $http_host;?>/upload/products/medium/<?php if($this->home_model->getimage($product->id) !=""){ echo $this->home_model->getimage($product->id); } else {?>nopreview.png<?php } ?>',1)">
				<img src="<?php echo $http_host;?>/upload/products/medium/<?php echo $product->image; ?>" name="Image21<?php echo $product->id; ?>" width="300" height="290" border="0">
				</a></div>
				<h4 class="feature-title1" style="text-align:center;"><b><?php echo $product->pname; ?></b></h4>
				<h4 class="feature-title1" style="text-align:center;"> 
				
				<?php
				if($this->session->userdata('currencycode') == 'INR')
				{ ?>
						Rs.<?php echo $lowestpricestyle->sellingprice;?> 
				<?php } else { 
						echo $this->session->userdata('currencycode')." "; 
 						echo roundUpToAny(( $lowestpricestyle->sellingprice / ( $this->session->userdata('currencyvalue') * 0.9) )); 
				} ?>
 				</h4>
			</div>
			<?php }} ?>
		</div>
	 
		</section>
 
            <!--row-->
		    </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->
  
</main>
<?php include ('includes/footer.php'); ?>
<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>
</body>
</html>