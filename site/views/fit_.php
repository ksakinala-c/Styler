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
<style>
.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}


#fit5{display:none;}
#fit6{display:none;}
#fit7{display:none;}

#p1{display:none;}
#p2{display:none;}
#p3{display:none;}

@media only screen and (max-width : 850px){

#fit1{display:none;}
#fit2{display:none;}
#fit3{display:none;}


#fit5{display:block;padding:5px;border-radius:20px;background-color:#ccc;}
#fit6{display:block;padding:5px;border-radius:20px;background-color:#ccc;}
#fit7{display:block;padding:5px;border-radius:20px;background-color:#ccc;}

#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}

}

@media only screen and (max-width : 480px){
#fit1{display:none;}
#fit2{display:none;}
#fit3{display:none;}


#fit5{display:block;padding:4px;border-radius:20px;background-color:#ccc;}
#fit6{display:block;padding:4px;border-radius:20px;background-color:#ccc;}
#fit7{display:block;padding:4px;border-radius:20px;background-color:#ccc;}


#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}

}
 </style>
<!-- /header --><main>
	<!--<section class="category-header">
		<header>
			<h1 class="category-title">Be Unique</h1>
			<span class="category-subtitle">Explore Our Collections</span>		</header>
	</section>-->
    
    <div class="category-content">
	   
        <div class="category-grid-view">
        
	      <div class="container">
            
            <ul class="breadcrumb pull-left">
				<li style="font-size:25px;">&nbsp;</li>
			</ul>
            
            <br> <br>
  <form action="<?php echo $base_url;?>cart/measure" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" >
	 <input type="hidden" name="pid" id="pid"  value="<?php echo $style_id; ?>">
	  <input type="hidden" name="bid" id="bid"  value="<?php echo $this->uri->segment(3); ?>">
            
			<main class="container inner-bottom-xs">
			
	<article class="post post-single row wow fadeIn">
   
    <table width="100%" border="1">
  <tr>
                        <td height="50" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;"><strong>Select Your Fit</strong></span></td>
              </tr>
                      <tr>
                        <td height="40" align="center" valign="middle" id="t1">Regular</td>
                        <td align="center" valign="middle" id="t2">Tailored</td>
                        <td align="center" valign="middle" id="t2">Slim</td>
                      </tr>
					 
                      <tr>
                        
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						
							<p id="p1"><strong>Regular</strong></p>
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-fit1.jpg" width="150" height="230" style="cursor:pointer;" onclick="document.getElementById('fit1').checked=true;">
						
						<p><label>
                              <input type="radio" name="fit" id="fit5" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "1") { echo "checked"; }else { echo "Checked"; } ?> value="1" >
                              </label></p>
						
						
						</td>
						<td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p1"><strong>Tailored</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-fit2.jpg" width="150" height="230" style="cursor:pointer;" onclick="document.getElementById('fit2').checked=true;">

						<p><label>
                              <input type="radio" name="fit" id="fit6" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "1") { echo "checked"; }else { echo "Checked"; } ?> value="1" >
                              </label></p>
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
							<p id="p1"><strong>Slim</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-fit3.jpg" width="150" height="230" style="cursor:pointer;" onclick="document.getElementById('fit3').checked=true;">
						
						<p><label>
                              <input type="radio" name="fit" id="fit7" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "1") { echo "checked"; }else { echo "Checked"; } ?> value="1" >
                              </label></					
						</td>
              </tr>
				<tr>
                        <td height="40" colspan="3" align="center" valign="middle">
						 
                          <table width="100%" align="center">
						   <?php
							if($this->session->userdata('usermdata') !="") {
							$mudata = $this->home_model->getmdata($this->session->userdata('usermdata')); 
							//print_r($mudata);
							} else {
								$mudata="";
							}
							?>
                            <tr>
                              <td width="30%" align="center" valign="middle"><label>
                              <input type="radio" name="fit" id="fit1" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "1") { echo "checked"; }else { echo "Checked"; } ?> value="1" >
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="fit" id="fit2" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "2") { echo "checked"; } ?> value="2">
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="fit" id="fit3" <?php if($mudata !="" && $mudata->fit  !="" && $mudata->fit  == "3") { echo "checked"; } ?> value="3">
                              </label></td>
                            </tr>
                          </table>
                       
						 
                        </td>
                      </tr>
					   <table width="100%" align="center" style="margin:15px 0px;">
					<tr>
					  <td colspan="2" align="left" valign="bottom"><table width="100%" align="center">
						<tr>
							<td align="center" valign="bottom">
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>	
								<a href="<?php echo $base_url; ?>cart/shoulderangle/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>
								</div>
							</td>
						</tr>                          
					  </table></td>
					</tr>
                </table>
                  </table>
                  
               
    		
		</main>
		</form>
	      </div>
	      <!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>

<?php include ('includes/cartdetail.php'); ?>
<?php include ('includes/footer.php'); ?>
</body>
</html>
