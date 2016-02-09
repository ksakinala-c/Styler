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
<main>
<style>
.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}


#shouldertype5{display:none;}
#shouldertype6{display:none;}
#shouldertype7{display:none;}

#p1{display:none;}
#p2{display:none;}
#p3{display:none;}

@media only screen and (max-width : 850px){

#shouldertype1{display:none;}
#shouldertype2{display:none;}
#shouldertype3{display:none;}


#shouldertype5{display:block;padding:5px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype6{display:block;padding:5px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype7{display:block;padding:5px;border-radius:20px;background:none;width:10px;height:10px;}

#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}

}

@media only screen and (max-width : 480px){
#shouldertype1{display:none;}
#shouldertype2{display:none;}
#shouldertype3{display:none;}


#shouldertype5{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype6{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}
#shouldertype7{display:block;padding:4px;border-radius:20px;background:none;width:10px;height:10px;}


#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}

}

</style>
     <div class="category-content">
       <div class="category-grid-view">
	      <div class="container">
            <ul class="breadcrumb pull-left">
				<li style="font-size:25px;">&nbsp;</li>
			</ul>
            <br> <br>
        <main class="container inner-bottom-xs">
		<article class="post post-single row wow fadeIn">

		 <div class="col-md-2 col-sm-2">
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="sr-only">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-previous">
						<a href="#" rel="prev">
							<!--<div class="lazy-load"><img src="assets/images/blank.gif" data-echo="assets/images/single-blog/pos.jpg" alt="Bewear Outdoor Fitness" width="170" height="120" class="post-image img-responsive"></div>-->
							<span class="sr-only">Previous post:</span> 
							<span class="post-title">Posture</span>
						</a>
					</div><!-- /.nav-previous -->
					<div class="nav-next">
						<a href="#" rel="next">
							<!--<div class="lazy-load"><img src="assets/images/blank.gif" data-echo="assets/images/single-blog/s1.jpg" alt="Bewear Outdoor Fitness" width="170" height="120" class="post-image img-responsive"></div>-->
							<span class="sr-only">Next post:</span> 
							<span class="post-title" style="color:#ee5e33;">Shoulder Types</span>
						</a>
					</div>
                    <div class="nav-next">
						<a href="#" rel="next">
							<!--<div class="lazy-load"><img src="assets/images/blank.gif" data-echo="assets/images/single-blog/s2.jpg" alt="Bewear Outdoor Fitness" width="170" height="120" class="post-image img-responsive"></div>-->
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shoulder Angle</span>
						</a>
					</div>
				</div><!-- /.nav-links -->
			</nav><!-- /.post-navigation -->
		</div>


    	<div class="col-md-10 col-sm-10">
			<div class="post-thumbnail">
				<span class="post-title">
                <table width="100%" border="1">
  <tr>
                        <td height="50" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;"><strong>Select Your Shoulder Type</strong></span></td>
              </tr>
			  <?php
					if($this->session->userdata('measuredid') !="") {
					$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
					} else
					{
						$mudata="";
					}
					//echo "hello";print_r($mudata);
					?>
                      <tr>
                        <td height="40" align="center" valign="middle" id="t1">Average</td>
                        <td align="center" valign="middle" id="t2">Straight</td>
                        <td align="center" valign="middle" id="t2">Sloping</td>
                      </tr>
                      <tr>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p1"><strong>Average</strong></p>
						
						
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img2.jpg" width="150" height="182" style="cursor:pointer;" onclick="document.getElementById('shouldertype1').checked=true;">
						
						
						<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype5" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Average") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p1"><strong>Straight</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img1.jpg" width="150" height="182" style="cursor:pointer;" onclick="document.getElementById('shouldertype2').checked=true;">
						
							<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype6" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Straight") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						
						
						
						
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						 <p id="p1"><strong>Sloping</strong></p>
						
						<img src="<?php echo $base_url_views; ?>assets/images/body-img3.jpg" width="150" height="182" style="cursor:pointer;" onclick="document.getElementById('shouldertype3').checked=true;">
						
						
						
							<p><label>
                              <input type="radio" name="shouldertype" id="shouldertype7" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Sloping") { echo "checked"; } ?> <?php if($mudata==""){ echo "Checked"; } ?>>
                              </label></p>
						
						
						
						
						
						</td>
              </tr>
              <tr>
                        <td height="40" colspan="3" align="center" valign="middle">
						 <form action="<?php echo $base_url;?>cart/shoulderangle/<?php echo $this->uri->segment(3); ?>" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" >	
						 <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
						 <?php /*
							if($this->session->userdata('usermdata') !="") {
							$mudata = $this->home_model->getmdata($this->session->userdata('usermdata')); 
							//print_r($mudata);
							} else {
							$mudata="";	
							} */
							?>
                          <table width="100%" align="center">
                            <tr>
                              <td width="30%" align="center" valign="middle"><label>
                              <input type="radio" name="shouldertype" id="shouldertype1" value="Average" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Average") { echo "checked"; } ?> <?php if ($mudata == ""  OR $mudata->shouldertype == "0"){ echo "Checked"; } ?>>
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="shouldertype" id="shouldertype2" value="Straight" <?php if($mudata !="" && $mudata->shouldertype  !="" && $mudata->shouldertype  == "Straight") { echo "checked"; } ?>> 
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="shouldertype" id="shouldertype3" value="Sloping" <?php if($mudata !="" && $mudata->shouldertype  !="" &&  $mudata->shouldertype  == "Sloping") { echo "Checked"; } ?>>
                              </label></td>
                            </tr>
                          </table>
						  <tr>
			<td colspan="3" align="left" valign="bottom">
			<table width="100%" align="center">
					<tr>
                            <td align="center" valign="bottom">
                              <div class="">
								 <a href="<?php echo $base_url; ?>cart/bodymeasure/<?php echo $this->uri->segment(3); ?>" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>
                                <button type="submit" class="btn btn-info btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>                                 
			                    </div></td>
                    </tr>                          
			</table></td>
			</tr>
                        </form>
                        </td>
                      </tr>
                  </table>
                  <table width="100%" align="center" style="margin:15px 0px;">
			
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
</body>
</html>
