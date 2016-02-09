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

#sizeid{width:20%;padding:0px 10px;margin-left:20px;background-color:#fff;}

#bpart{margin-top:-9%;}

#bpreg {color:#fff; font-size:20px;}

@media only screen and (max-width : 853px){

#sizeid{width:20%;padding:0px 10px;margin-left:20px;background-color:#fff;}

#bpreg {color:#fff; font-size:20px;}

#bpart{margin-top:-50%;}

} 

@media only screen and (max-width : 480px){

#bpart{margin-top:-110%;}

#bpreg {color:#fff; font-size:15px;}

#sizeid{width:20%;padding:0px 12px;margin-left:20px;background-color:#fff;}

} 
	
</style>
	<section class="category-header">
		<div class="titalbarmainuss">
	
		</div>
	</section>
    <div class="category-content" style="margin-top:0px;">
         <div class="category-grid-view" id="bpart">
 	      <div class="container">
              <ul class="breadcrumb pull-left">
				<!--li style="font-size:25px;">Customer Assist</li-->
			</ul>
              <br> <br>
              <main class="container inner-bottom-xs">
	<article class="post post-single row fadeIn">
    
    <div class="col-md-2 col-sm-2">
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="sr-only">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-next">
 						<a href="<?php echo $base_url; ?>cart/measure/" rel="next">	
							<span class="sr-only">Previous post:</span> 
							<span class="post-title">Standard Sizes </span>
						</a>
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
					<div class="nav-previous">
 							<span class="sr-only">Next post:</span> 
							<span class="post-title" style="color:#ee5e33;">Customer Assist</span>
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
			<div class="post-thumbnail">
				<span class="post-title">
                <table width="100%" border="1">
  <tr>
                        <td height="50" colspan="3" align="center" valign="middle">
						<span><strong>Having difficulties adding measurements ? We're here to help..!</strong></span><br/>
						<span style="font-size:17px;">Download step by step guide to understand and take accurate measurments. <br/>
							As this is one time task you can save your profile and reuse it for all your orders ! <br/>
							If the problem persists, feel free to contact us and our stylists will be happy to help.</span>
							<p style="color:#fff;">fgfdfdgfgf</p>
						</td>

              </tr>			  

				<tr>
					<td></td>
				</tr>

                      
                      <tr style="border-top:solid 2px #000;">
                        <td width="50%" align="center" valign="middle" id="tpic" style="padding-top:20px;">

						
						<p><img src="<?php echo $base_url_views; ?>assets/images/phone-img.png" width="35" height="30"> &nbsp; <span><strong>+91 8055 - 670 -670 </strong></span> </p>

						<p><img src="<?php echo $base_url_views; ?>assets/images/email-img.png" width="35" height="30"> &nbsp; <span><strong><a href="<?php echo $base_url; ?>#<?php echo $subcat; ?>" rel="next" style="color:#727272;">support@stylior.com </a></strong></span> </p>

						<p><img src="<?php echo $base_url_views; ?>assets/images/user-img.png" width="35" height="30"> &nbsp; <span><strong> Chat With Us <span style="color:#fff;">bfbfbg</span></strong></span> </p>
						
						</td>


                        <td width="50%" align="center" valign="middle" id="tpic">

						<p style="color:#fff;">fgfdfdgfgf</p>
						
						<p> <span style="color:#fff; background-color:#ccc; padding:10px 20px;"><strong> Download Measurement Guide </strong></span> </p>
						
						<p><a href="<?php echo $base_url; ?>#<?php echo $subcat; ?>" rel="next"><img src="<?php echo $base_url_views; ?>assets/images/pdf-img.png" width="100" height="90"> </a> </p>

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

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>
<link href="<?php echo $base_url_views; ?>css/bootstrap-toggle.css" rel="stylesheet">
<script src="<?php echo $base_url_views; ?>css/bootstrap-toggle.js"></script>
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
								//alert('Please Enter profile name.'); 
								document.getElementById('error').innerHTML = ('Please Enter profile name.');
								return false;
							}
							//window.location.href=url;
							
						}
						function cminches_converter(val){
							if(val == '1'){//cms
								var measurecount = document.getElementById('measurecount').value;
								for (i = 1; i <= measurecount; i++) { 
									var csl = document.getElementById('no_'+i).value;	
									document.getElementById('no_'+i).value = roundit(csl*2.54);
								}
								document.getElementById('cminches').value = '0';
								$('.textinch').html('Cms');
							}else{//inches
								var measurecount = document.getElementById('measurecount').value;
								for (i = 1; i <= measurecount; i++) { 
									var csl = document.getElementById('no_'+i).value;
									document.getElementById('no_'+i).value = roundit(csl/2.54);
								}
								document.getElementById('cminches').value = '1';
								$('.textinch').html('Inches');
							}
						}
						function roundit(which){
							return Math.round(which*100)/100;
						}						
						
						
					
</script>					
</body>
</html>
