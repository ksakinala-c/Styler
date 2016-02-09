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
			url: '<?php echo $base_url;?>affiliate/mailsentactivate/'+id,  
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

<!-- /header -->
<main class="cd-main-content">

<style>
.action.submit-button.linkified.submit{display:none;}
.title {
    font-size: 1.5em !important;
    font-weight: 600 !important!important;
    color: #4a4a4a !important;
    text-transform: uppercase !important;
}
.mb2x {
    margin-bottom: 2em !important;
}
</style>
<div class="panel panel-dark">


  <div id="discovery-container">
    

   
        <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
      <div class="sign-in-register">
                                <h5 class="align-center mb2x title">Your Basic Information</h5>
 
                                <div class="generic-form-wrapper">
                                	<form method="post" class="login" id="form" name="form" action="<?php echo $base_url;?>affiliate/login">
									<input type="hidden" name="tabname" id="tabname" value="Login_Details" />
									<input type="hidden" name="action" value="login"/>
									<input type="hidden" name="returnurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
									<input type="hidden" name="uexisting" value="0">
									<div id="errorlogincheckout" style="color:red;margin-bottom:5px;"><?php echo $L_strErrorMessage;?> </div>
                                        <div class="form-row">
                                       	  <label for="Email">Profile Name *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="profile_name" id="profile_name" class="validate[required] text-field" data-prompt-position="topRight:20" value="<?php echo $profile_name; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="email" id="email" class="validate[required,custom[email]] text-field" data-prompt-position="topRight:20" value="<?php echo $email; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Email">Age *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="age" id="age" class="validate[required] text-field" data-prompt-position="topRight:20" value="<?php echo $age; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Email">Height *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="height" id="height" class="validate[required] text-field" data-prompt-position="topRight:20" value="<?php echo $height; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<div class="form-row">
                                       	  <label for="Email">Weight *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="weight" id="weight" class="validate[required] text-field" data-prompt-position="topRight:20" value="<?php echo $weight; ?>">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="password" id="password" class="validate[required] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends--> 
 
                                   		<!--form-row ends-->                             
                                        
                                      <div class="form-row">
                                        <input class="submit-button linkified" name="login" type="submit" value="Next" class="submit-button"> 
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