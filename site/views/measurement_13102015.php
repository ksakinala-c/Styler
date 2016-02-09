<?php include ('includes/header.php'); ?>
<script>
function checkdata(sizeid)
{
		var url = '<?php echo $base_url ?>cart/showdata/';
		$.ajax({
		url:url,
		type:'post',
		data:'sizeid='+sizeid,
		success:function(msg)
			{
				document.getElementById('post-title').innerHTML = msg ;
			}
		});
}
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
<!-- /header --><main>
	<style>
.titalbarmainuss{ left: 50%;
    margin-right: -50%;
    position: absolute;
    text-align: center;
    top: 50%;
    transform: translate(-50%, -50%);}
	
.titalbarmainuss h1	{ color: #000;
    font-size: 48px;
    font-weight: 400;
    letter-spacing: 0.01em;
    line-height: 48px;
    margin-bottom: 0;}
	
	
.titalbarmainuss span{color: #999;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    letter-spacing: 0.025em;
    line-height: 37px;}	
.form-actions a{display:none !important;}	
td{font-size:20px !important;}

.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}
 
	
</style>
	<section class="category-header">
		<div class="titalbarmainuss">
			<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>
		</div>
	</section>
    <div class="category-content">
	 
        <div class="category-grid-view" style="margin-top:-5%;">
        
	      <div class="container">
            
            <ul class="breadcrumb pull-left">
				<li style="font-size:25px;">Measurement</li>
			</ul>
            
            <br> <br>
           
            <main class="container inner-bottom-xs">
	<article class="post post-single row fadeIn">
    
    <div class="col-md-2 col-sm-2">
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="sr-only">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-previous">
					 
							 
							<span class="sr-only">Previous post:</span> 
							<span class="post-title" style="color:#ee5e33;">Standard Sizes </span>
						 
					</div><!-- /.nav-previous -->
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>home/measured/<?php echo $subcat; ?>" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shirt Measurement</span>
						</a>
					</div>
					<div class="nav-next">
						<a href="<?php echo $base_url; ?>home/bmeasured/" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Body Measurement</span>
						</a>
					</div>
                    <!--div class="nav-next">
						<a href="#" rel="next">
							 
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shirt Measurement</span>
						</a>
					</div-->
				</div><!-- /.nav-links -->
			</nav><!-- /.post-navigation -->
		</div>
    
		<div class="col-md-10 col-sm-10">
		 
			 <!-- form class="cart" action="<?php echo $base_url;?>cart/add" method="post" id="product_addtocart_form" name="product_addtocart_form" -->	
			<form class="cart" action="<?php echo $base_url;?>cart/mvalue/" method="post" id="product_addtocart_form" name="product_addtocart_form" >	
			<input type="hidden" value="1" name="type"/>
			<div class="post-thumbnail">
		
				<span class="post-title">
                
                  <strong style="float:left;">Select Your Size</strong>
               	
				<select name="sizeid" id="sizeid" size="1" style="width:20%;  padding:10px 10px; margin-left:20px;" Onchange="checkdata(this.value);" >
					 
					 <?php
						$sizedata=$this->cart_model->sizedata($subcat , $fit); //sizetable
						 

						if($sizedata != '' && count($sizedata) > 0) {  
						$i = 0;
						foreach($sizedata as $sizedata)
						{
 							$proparts = $this->home_model->prodparts($sizedata->id); 
 					?>
					<option <?php if($i == '0' ) { ?> selected <?php } ?> value="<?php echo $sizedata->id; ?>" style="font-weight:bold; padding:5px 0px 5px 5px;"><?php echo $sizedata->size; ?></option>
						
 						<?php } $i++; } ?>	
				</select>
				
				<span style="float:right">
				
				<!-- a href="#"><span style="font-size:20px;">CM</span> &nbsp;<img src="<?php echo $base_url_views; ?>assets/images/circle-img.png" width="50" border="0">&nbsp; <span style="font-size:20px;">INCH</span></a -->
				<!-- input type="checkbox" name="my-checkbox" checked -->
				<script>
					//$("[name='my-checkbox']").bootstrapSwitch();
				</script>
				</span>    
                  
               </span>
			
				<br> <br>
           
				<span class="post-title" id="post-title" style="">
				
			
                <table width="55%" border="1">
				 <tr>
                        <td style="font-size:20px;" width="35%" height="50" align="center" valign="middle" bgcolor="#1ab7ea">
						<span style="color:#fff; font-size:20px;"><strong>Body Parts ( <?php 
								//echo $mdetail->fit; 
								if($fit == "1") { echo "Regular"; }
								if($fit == "2") { echo "Tailored"; }
								if($fit == "3") { echo "Slim"; }	
								?> )</strong></span></td>
						<td style="font-size:20px;" width="20%" height="50" align="center" valign="middle" bgcolor="#1ab7ea">
						<span style="color:#fff;"><strong><?php echo $sizedata->size; ?></strong></span></td>
                    </tr>
					
						<?php
						if($proparts != '' && count($proparts) > 0) {  
						$i = '0';
						foreach($proparts as $parts)
						{ 
 					?>
					 <?if($i == '0'){?>
                    <tr style="">
                        <td style="font-size:20px;" width="35%" height="50" align="center" valign="middle"><?php echo $this->cart_model->getpartname($parts->partid); ?></td>
                        <td style="font-weight:20px;" align="center" valign="middle">
							<input style="width:auto;" name="bodypartvalue[]" required type="text" id="no." value="<?php echo $parts->partvalue; ?>"  size="20" style="text-align:center;">
                            <input name="bodypartid[]" type="hidden" id="measurevalue" value="<?php echo $parts->partid; ?>" size="20" >
							  <!-- input name="bodypartvalue[]" type="text" value="" id="measurevalue" size="20" -->
 						  </td>
                    </tr>
					 <?php } ?>
						<?php  }  $i++ ;} else { ?>
						<div>Sorry, Size Not Found.!!</div>
						<?php }  ?>
					
					 
					 <tr style="">
                        <td style="font-size:20px;" width="35%" height="50" align="center" valign="middle">Profile Name</td>
                        <td style="font-weight:20px;"   align="center" valign="middle">
							<input type="text" value="" name="profilename" id="profilename" /> 
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:20px;" height="40" colspan="2" align="center" valign="middle">
                          <div class="">
						  
                            <button type="submit" class="btn btn-primary btn-send-message-2" style="margin:5px; 0px 0px 5px;" onclick ="return formsubmitcart();">Submit</button>	
							 	<a href="<?php echo $base_url; ?>cart/fit/<?php echo $bid; ?>" class="btn btn-primary btn-send-message-2" style="margin:5px; 0px 0px 5px;">Back</a>	
							 
			                </div>
							    
						</td>
                    </tr>
									
                  </table>       <br><br>  
				
                </span>
				<?php /* }} else { ?>
				  <strong>No Data Found.!!</strong>
				<?php } */?>
			</div>
			</form>
			<?php /* }} */ ?>
		</div>
	</article>
</main>
            
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
<script>
						function formsubmitcart() {
 							var sizeid = document.getElementById('sizeid').value;  
							if(sizeid == "" )
							{
								alert('Please Select Your Size.'); 
								return false;
							}
							
							var profilename = document.getElementById('profilename').value;  
							if(profilename == "" )
							{
								alert('Please Enter profile name.'); 
								return false;
							}
							//window.location.href=url;
							
						}
						
						
					
</script>					
</body>
</html>
