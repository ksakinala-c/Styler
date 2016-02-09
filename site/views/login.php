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
@media only screen and (max-width : 480px){
#fb{width:50%;margin:0 auto;float:none;padding-bottom:5px;}
#cartro{width:100%;}
}
</style>
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
		 
		/* var email = $("#email").val();
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
		} */
		 		
		$('#form').submit();
	}	
	
	 </script>


<style>
.action.submit-button.linkified.submit{display:none;}
</style>
<div class="panel panel-dark">


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
                                Don't have an account?<a href="<?php echo $base_url; ?>registration">Create one</a>.
                                </p>
								
								<div class="cart-calculation-row" id="cartro">
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
 
                                    	<a class="view-cart" href="https://www.facebook.com/dialog/oauth?client_id=<?php echo $config['App_ID']; ?>&redirect_uri=<?php echo $config['callback_url']; ?>&scope=public_profile,email"><img src="<?php echo $base_url_views; ?>assets/images/fb-img.png" id="fb"></a>

                                        <a class="view-cart" href="<?php echo $authUrl; ?>"><img src="<?php echo $base_url_views; ?>assets/images/google+-img.png" id="fb"></a>
                                    </div>
									
                                <div class="generic-form-wrapper">
                                	<form method="post" class="login" id="form" name="form" action="<?php echo $base_url;?>user/login">
									<input type="hidden" name="tabname" id="tabname" value="Login_Details" />
									<input type="hidden" name="action" value="login"/>
									<input type="hidden" name="returnurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
									<input type="hidden" name="uexisting" value="0">
									<div id="errorlogincheckout" style="color:red;margin-bottom:5px;"><?php echo $L_strErrorMessage;?> </div>
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="email" id="email" class="validate[required,custom[email]] text-field" data-prompt-position="topRight:20" value="<?php echo $email; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="password" id="password" class="validate[required] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends--> 
                                        
                                        <div class="form-row">
                                        	<a href="<?php echo $base_url; ?>reset-password">Forgot Password?</a>
                                        </div>
                                   		<!--form-row ends-->                             
                                        
                                      <div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Login" class="submit-button"> 
                                      </div>
                                   		<!--form-row ends-->
                                    </form>
                                </div>
                        		<!--generic-form-wrapper ends-->
                        	</div>
    </div>
  </div>
</div>
 
<div class="trust hide-sm">
</div>


     <?php include ('includes/footer.php'); ?>

   
    <link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form").validationEngine('');
		});
            
	</script>
    


 
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->