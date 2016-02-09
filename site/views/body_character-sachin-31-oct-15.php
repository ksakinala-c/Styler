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


 <style>
.post-single{padding-bottom:0px;}
.inner-bottom-xs{padding-bottom:0px;}
#measure5{display:none;}
#measure6{display:none;}
#measure7{display:none;}

#p1{display:none;}
#p2{display:none;}
#p3{display:none;}

@media only screen and (max-width : 850px){

#measure1{display:none;}
#measure2{display:none;}
#measure3{display:none;}


#measure5{display:block;padding:5px;border-radius:20px;background-color:#ccc;}
#measure6{display:block;padding:5px;border-radius:20px;background-color:#ccc;}
#measure7{display:block;padding:5px;border-radius:20px;background-color:#ccc;}

#t1{display:none;}
#t2{display:none;}
#t3{display:none;}

#p1{display:block;}
#p2{display:block;}
#p3{display:block;}

}

@media only screen and (max-width : 480px){
#measure1{display:none;}
#measure2{display:none;}
#measure3{display:none;}


#measure5{display:block;padding:4px;border-radius:20px;background-color:#ccc;}
#measure6{display:block;padding:4px;border-radius:20px;background-color:#ccc;}
#measure7{display:block;padding:4px;border-radius:20px;background-color:#ccc;}


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
							<span class="post-title" style="color:#ee5e33;">Posture</span>
						</a>
					</div><!-- /.nav-previous -->
					<div class="nav-next">
						<a href="#" rel="next">
							<!--<div class="lazy-load"><img src="assets/images/blank.gif" data-echo="assets/images/single-blog/s1.jpg" alt="Bewear Outdoor Fitness" width="170" height="120" class="post-image img-responsive"></div>-->
							<span class="sr-only">Next post:</span> 
							<span class="post-title">Shoulder Types</span>
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

	<?php
					if($this->session->userdata('measuredid') !="") {
					$mudata = $this->home_model->getmdata($this->session->userdata('measuredid')); 
					} else
					{
						$mudata="";
					}
					//echo "hello";print_r($mudata);
					?>
    	<div class="col-md-10 col-sm-10">
			<div class="post-thumbnail">
				<span class="post-title">
                <table width="100%" border="1">
  <tr>
                        <td height="50" colspan="3" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;" id="pos"><strong>Select Your Posture</strong></span></td>
              </tr>
                      <tr>
                        <td height="40" align="center" valign="middle" id="t1">Average</td>
                        <td align="center" valign="middle" id="t2">Forward Leaning</td>
                        <td align="center" valign="middle" id="t2">Straight</td>
                      </tr>
                     
					 <tr>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						
						    <p id="p1"><strong>Average<strong></p>
						
						<img onclick="document.getElementById('measure1').checked=true;" src="<?php echo $base_url_views; ?>images/posture-img3.jpg" width="150" style="cursor:pointer;" >
						
						<p><label>
                              <input type="radio" style="float:none;" name="measure" id="measure5" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                              </label></p>
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						<p id="p2"><strong>Forward Leaning</strong></p>
						
						
						<img onclick="document.getElementById('measure2').checked=true;" src="<?php echo $base_url_views; ?>images/posture-img1.jpg" width="150" style="cursor:pointer;" >
						
						<p><label>
                              <input type="radio" style="float:none;" name="measure" id="measure6" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                              </label></p>
						
						</td>
                        <td width="30%" align="center" valign="middle" id="tpic">
						
						<p id="p3"><strong>Straight</strong></p>
						
						<img onclick="document.getElementById('measure3').checked=true;" src="<?php echo $base_url_views; ?>images/posture-img2.jpg" width="150" style="cursor:pointer;" >
						
						<p><label>
                              <input type="radio" style="float:none;" name="measure" id="measure7" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "checked"; } ?> >
                              </label></p>
						
						
						
						</td>
              </tr>
			  
              <tr>
                        <td height="40" colspan="3" align="center" valign="middle">
						 <form action="<?php echo $base_url;?>cart/shouldertype/<?php echo $this->uri->segment(3); ?>" class="cart" method="post" id="product_addtocart_form" name="product_addtocart_form" >	
						 <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
					
                          <table width="100%" align="center">
                            <tr>
                              <td width="30%" align="center" valign="middle"><label>
                              <input type="radio" name="measure" id="measure1" value="1" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "1") { echo "Checked"; } ?> <?php if ($mudata =="" OR $mudata->posture == "0"){ echo "Checked"; } ?>>
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="measure" id="measure2" value="2" <?php if($mudata !="" && $mudata->posture  !="" && $mudata->posture  == "2") { echo "Checked"; } ?>> 
                              </label></td>
                              <td width="30%" align="center" valign="middle"><label>
                                <input type="radio" name="measure" id="measure3" value="3" <?php if($mudata !="" && $mudata->posture  !="" &&  $mudata->posture  == "3") { echo "Checked"; } ?>>
                              </label></td>
                            </tr>
                          </table>
						  <tr>
			<td colspan="3" align="left" valign="bottom">
			<table width="100%" align="center">
					<tr>
                            <td align="center" valign="bottom">
                              <div class="">
                                <button type="submit" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Next</button>	
								 <a href="<?php echo $base_url; ?>cart/mapping/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary btn-send-message-2b" style="margin:5px; 0px 0px 3px;">Back</a>	
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
