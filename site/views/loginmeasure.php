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
     function mailsentactivate(id){
		jQuery.ajax({  
			type: 'POST', 
			url: '<?php echo $base_url;?>user/mailsentactivate/'+id,  
			data: "val="+id,  
			success:
				function(result)
				{	
					alert('Mail Sent Successfully');
					return false;
					//window.location.reload();  
				}    
			}); 
	}
 
	function validate()
	{
 		var email = $("#email").val();
		if(email == '')
		{
			alert('Please Enter E-mail.');
			return false;
		}
        var em = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em.value)) {
            alert('Please Enter Valid Email Address.');
            em.focus;
            return false;
        }
		var password = $("#password").val();
		if(password == '')
		{
			alert('Please Enter Password.');
			return false;
		}
		 		
		$('#form').submit();
	}	
	 </script>

	 <!-- /header -->
<main class="cd-main-content">
<style>
.action.submit-button.linkified.submit{display:none;}
#exis{width:60%;}
#newc{width:40%;}

@media only screen and (max-width : 480px){
#exis{width:100%;float:none;}
#newc{width:100%;float:none;display:none;}
}
</style>

<div class="category-content">
	   
        <div class="category-grid-view">
        
	      <div class="container">
            
            
           
            <table width="100%" border="1">
            	<tr>
                <td height="80" colspan="2" align="center" valign="middle" bgcolor="#1ab7ea"><span style="color:#fff;">
                  <strong>YOUR MEASUREMENT PROFILE</strong><br>                   
                   </span>                  </td>
              </tr>
                <tr>
                  <td height="90" colspan="2" align="center" valign="bottom">
                  <p>Using our instructional guides, please fill out your measurements profile. With the help of a friend, it will take 15 minutes. <br>
                    Wear a well-fitting shirt and pair of pants during the process.</p>
                  </td>
                </tr>
              <tr>
			 
                <td colspan="2" align="center" valign="middle"><table width="80%" align="center">
				<div id="errorlogincheckout" style="color:red;margin-bottom:5px;"><?php echo $L_strErrorMessage;?> <?php echo $this->session->flashdata('item');?> </div>
				 <?php if($this->session->flashdata('newmsg') !="") { ?>
				   
					<div id="errorlogincheckout" style="color:red;margin-bottom:5px;"><?php echo $this->session->flashdata('newmsg'); ?> </div>
			  <?php } ?>
                  <tr>
                    <td align="center">
					
					<form method="post"   id="form" name="form" action="<?php echo $base_url;?>user/login" onSubmit="return validate()">
						 <input type="hidden" name="tabname" id="tabname" value="Login_Details" />
						 <input type="hidden" name="action" value="login"/>
						 <input type="hidden" name="productid" value="<?php echo $productid; ?>"/>
						 <input type="hidden" name="returnurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
						  <input type="hidden" name="uexisting" value="1">
                      
					  
					  <table align="center"  id="exis">
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="30" width="100" align="center" valign="top"><strong>Existing Customers</strong></td>
                        </tr>                        
                        <tr>
                          <td height="10" align="center"></td>
                        </tr>
                        <tr>
                          <td height="50" align="center">
                       		  <div class="form-row">
                                <div class="text-field-wrap">
                                        <input name="email" id="email" type="text" class="text-field" placeholder="Email"   size="30">
                                </div>
                                 </div>                          </td>
                        </tr>
                        <tr>
                          <td align="center">
                         	 <div class="form-row">
                                  <div class="text-field-wrap">
                                       <input type="password" name="password" id="password" placeholder="Password" class="text-field"  size="30">
                                </div>
                             </div>                          </td>
                        </tr>
                        <tr>
                          <td align="center">
                           		<div class="form-row">
                                     <a href="<?php echo $base_url; ?>home/reset_password"><span style="font-size:14px;">Forgot Password?</span></a>                                 </div>                          </td>
                        </tr>
						 <tr>
                          <td align="center"> <input class="submit-button linkified" name="login" type="submit" value="Login" class="submit-button" onclick="javascript:validate(); return false;"> </td>
                        </tr>
                        <tr>
                          <td align="center">or sign in with</td>
                        </tr>
                        <tr>
                          <td height="10" align="center"></td>
                        </tr>
                        <tr>
                          <td align="center">
                          <div class="form-row">
                                    	<div class="cart-calculation-row">


										<?php
									//echo getcwd(); die;
										require 'site/views/config.php';
										require 'site/views/facebook.php';
										
										// Create our Application instance (replace this with your appId and secret).
										$facebook = new Facebook(array(
										  'appId'  => $config['App_ID'],
										  'secret' => $config['App_Secret'],
										  'cookie' => true
										));
										if(isset($_GET['logout']))       
										{
											$url = 'https://www.facebook.com/logout.php?next=' . urlencode('http://www.stylior.com/facebook/') .
											  '&access_token='.$_GET['tocken'];
											session_destroy();
											header('Location: '.$url);
										}
									?>
 
                                    	<a class="view-cart" href="https://www.facebook.com/dialog/oauth?client_id=<?php echo $config['App_ID']; ?>&redirect_uri=<?php echo $config['callback_url']; ?>&scope=email,user_likes"><img src="<?php echo $base_url_views; ?>assets/images/fb-img.png" width="130"></a>&nbsp;&nbsp;
                                        <a class="view-cart" href="<?php echo $authUrl; ?>"><img src="<?php echo $base_url_views; ?>assets/images/google+-img.png" width="130"></a>

    
										
										
										</div>                          </td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                    <td align="center">
                    <table align="center"  id="newc">
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="30" width="100" align="center" valign="top"><strong>New Customers</strong></td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">
                         	 <div class="form-actions">
                                    <button onclick="window.location.href='<?php echo $base_url; ?>/registration/<?php echo $productid; ?>'" type="button" class="btn btn-primary btn-send-message-2" style="margin:5px; 0px 0px 5px;">START HERE</button>
                            </div>                                </td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table></td>
              </tr>                            
            </table>
            
	      </div><!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->


<!-- div class="panel panel-dark">
  <div id="discovery-container">
    <div class="discovery-section hide page-container-responsive" id="upcoming-trips">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Your Upcoming Trip
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="discovery-saved-searches">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1 strong">
          Start Your Next Adventure
        </h2>
      </div>
      <div class="discovery-tiles">
        <div class="homepage-module"></div>
      </div>
    </div>

    <div class="discovery-section hide page-container-responsive" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
      <div class="sign-in-register">
                                <h1 class="page-title">LogIn</h1>
                                <p class="inner-intro">
                                Don't have an account?  <a href="<?php echo $base_url; ?>home/registration">Create one</a>.
                                </p>
                            
                                <div class="generic-form-wrapper">
                                	<form method="post" class="login" id="form" name="form" action="<?php echo $base_url;?>user/login" onSubmit="return validate()">
									<input type="hidden" name="tabname" id="tabname" value="Login_Details" />
									<input type="hidden" name="action" value="login"/>
									<input type="hidden" name="returnurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

									<div id="errorlogincheckout" style="color:red;margin-bottom:5px;"><?php echo $L_strErrorMessage;?> <?php echo $this->session->flashdata('item');?> </div>
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="email" id="email" class="text-field">
                                            </div>
                                          
                                        </div>
                                    	 
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="password" id="password" class="text-field">
                                            </div>
                                           
                                        </div>
                                     
                                        
                                        <div class="form-row">
                                        	<a href="<?php echo $base_url; ?>home/reset_password">Forgot Password?</a>
                                        </div>
                                        
                                      <div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Login" class="submit-button" onclick="javascript:validate(); return false;"> 
                                      </div>
                                     </form>
                                </div>
                        	</div>
    </div>
  </div -->
</div>
 
 <div class="trust hide-sm">
</div>
 
<?php include ('includes/footer.php'); ?>
 <!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->