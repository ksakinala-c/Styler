<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
<main class="single-page productextended-page">
	<div class="breadcrumb-holder">
		<div class="container">
			<ul class="breadcrumb pull-left">
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="#">Men</a></li>
				<li class='active'><a href="#">New Arrivals</a></li>
			</ul>
			 
		</div><!--container-->
	</div><!--breadcrumb-holder-->
	<div id="single-product" class="inner-top-50 fadeIn">
	<div class="container">
		&nbsp;
	</div>
</div>

<div class="single-product-tab">

</div><!-- /.single-product-tab -->
 <div class="lookbook-slider">
  
	  <?php
		if($prostyle != '' && count($prostyle) > 0) {  
		foreach($prostyle as $product)
		{
			//print_r($product);
			 
		?>
	<div class="item">
		<a href="<?php echo $base_url; ?>home/details/<?php echo $product->proid; ?>/<?php echo $product->id; ?>" class="single-look">
			<span class="shop-this-look"><?php echo $product->pname; ?></span>
            <img src="<?php echo $http_host;?>/upload/allstyle/<?php echo $product->image; ?>" alt="" title="Select This Style">
           
		   <span class="shop-this-look">
		       
				<?php if($this->session->userdata('currencycode') == 'INR') { ?>
				  Rs <?php echo $product->sellingprice; ?> <?php } else { echo $this->session->userdata('currencycode');   
				echo roundUpToAny(( $product->sellingprice / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) ));  } ?> 
			 
		   </span>
		</a> 
	</div>
		<?php }} else { ?>
			<div class="item" align="center" style="color:blue"> NO PRODUCT FOUND !!</div>
		<?php } ?>
	 
</div>
 
 

</main>


 <?php include('includes/footer.php'); ?> 
 <!--iframe width="" height="" scrolling="no"><?php /* include('includes/footer.php'); */ ?></iframe-->

     <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
</body>
</html>
