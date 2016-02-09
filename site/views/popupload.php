<?php include ('includes/header.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>

<script src="<?php echo $base_url_views; ?>/popup/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $base_url_views; ?>/popup/style.css">


    
    	<!--dummy content-->
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
        <!--dummy content-->


<?php include ('includes/footer.php'); ?>
	<?php $homepage = $this->footer->homepagepopup(); 
	if($homepage->active == '1') {
	?>
	<script>
	function validatesub()
	{
		var fname = $("#fname").val();
		if(fname == '')
		{
			//alert('Please Enter Name.');
			$("#suberror").html('Please Enter Name.');
			return false;
		}
		
 		var newemail = $("#emailsub").val();
		if(newemail == '')
		{
			//alert('Please Enter E-mail.');
			$("#suberror").html('Please Enter E-mail.');
			return false;
		}
        var ema = document.getElementById('emailsub');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(ema.value)) {
            //alert('Please Enter Valid Email Address.');
			$("#suberror").html('Please Enter Valid Email Address.');
            ema.focus;
            return false;
        }
		var url = '<?php echo $base_url ?>home/esubscribe/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'newemail='+newemail+'&name='+fname,
		success:function(msg)
		{
			alert(msg);
			$("#fname").val('');
			$("#emailsub").val('');
			return false
		} 
		});
	}	
</script>
	
	<!--<div class="homepagepopup" style="display:none;">
 		<img src="<?php echo $base_url_views; ?>newheader/img/promo-x@2x.png" class="close-list">
 		<?php echo $homepage->text; ?>
		<?php if($homepage->display == '1') { ?>
			<p>
			<span id="suberror" style="color:red;"></span>
			<form action="#" method="post"> 
                                                                  		
                                    	<div class="form-row">
                                       	  <label for="Name">Name *</label>
                                       	  <div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="fname" value="">
                                          </div>
                                          
                                        </div>
                                    	
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input name="textfield" type="text" class="text-field" id="emailsub" value="">
                                            </div>
                                          
                                        </div>
                                
                                        
                                        
                              <div class="form-row">
                                        <input type="button" onClick="validatesub();" value="Subscribe to Stylior.com" class="submit-button">
                                        
                                        
                                      </div>
                                   	
                                    
                                    
                                    </form>
		</p>
		<?php } else { ?>
			<p><img src="<?php echo $http_host; ?>/upload/<?php echo $homepage->image; ?>" height="400" width="550" ></p>
		<?php } ?>
 	</div>-->



 		<div class='popup'>
    <div class='cnt223'>
        <span class='x' id='x'>X</span>
        <div class="col-lg-12 padding-left-none pull-left">
        	<section class="popup1-heading">Get it NOW! Increase more than 700% of Email subscribers!</section>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-left-none margin-ver-10">
                <div class="form-container curl-effect2">
                	<section class="popup1-sub-heading">Subscribe and GET your Bonus!</section>
                    <div class="form-group">
                        <div class="left-inner-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            <input type="text" class="form-control border-radius" placeholder="Enter Your Name" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="left-inner-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <input type="text" class="form-control border-radius" placeholder="Enter Your Email" />
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="left-inner-addon">
                            <i class="glyphicon glyphicon-phone-alt"></i>
                            <input type="text" class="form-control border-radius" placeholder="Enter Your Phone" />
                        </div>
                    </div>
                    
                    <button class="btn btn-block btn-action border-radius">SUBSCRIBE NOW FOR FREE</button>
                    
                    <section class="popup1-btm-text">
                    	<i class="glyphicon glyphicon-lock" style="color:#fbe300;"></i> Your information will never be shared with any third party
                    </section>

                </div>
            </div>
            
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-ver-10">
            	<section class="popup1-heading2 text-center">Dear Friends</section>
                <section>
                Ninja popups it is the most powerful popup syetem for Wordpress on the market. It combines a professionally designed welcome window for small mailing 
                </section>
                <div class="row popup1-points">
                	<ul class="list-unstyled">
                    	<li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 1</li>
                        <li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 2</li>
                        <li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 3</li>
                        <li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 4</li>
                        <li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 5</li>
                        <li><i class="glyphicon glyphicon-ok-sign" style="color:#2e9ba9;"></i> Text 6</li>
                    </ul>
                </div>
            </div>            
            <section class="footer-text">Dont show this window again</section>
        </div>
        
    </div>
</div>
	<?php 
	} ?>



<script type="text/javascript">
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.footer-text').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>