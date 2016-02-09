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
	function formsubmit()
	{
	/*	 
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
		 */	
		$('#form').submit();
	}	
	
	 </script>

<div class="panel panel-dark">

<!-- /header -->
<main class="cd-main-content">

<style>
.sign-in-register {
    margin: 0 auto;
    max-width: 700px;
    padding: 0 20px;
}

h1.page-title {
    border-bottom: 1px solid #111;
    color: #50b1d1;
    font-family: "Didact Gothic",sans-serif;
    font-size: 30px;
    line-height: 46px;
    padding: 15px 0;
    text-transform: uppercase;
}
.inner-intro {
    color: #505353;
    font-size: 18px;
    line-height: 26px;
    padding: 15px 0;
}

.generic-form-wrapper {
    display: block;
}
.form-row label {
    color: #444;
    display: block;
    margin-bottom: 4px;
}

.form-row .text-field-wrap {
    border: 1px solid #aaa;
    margin: 0;
}
.text-field {
    background: #edebe3 none repeat scroll 0 0;
    border: 0 none;
    box-sizing: border-box;
    color: #111;
    display: block;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 13px;
    line-height: 20px;
    margin: 0;
    padding: 10px;
    transition: background 0.3s ease-in-out 0s;
    width: 100%;
}
.form-row {
    font-size: 16px;
    line-height: 24px;
    padding-top: 15px;
}
.submit-button {
    background: #50b1d1 none repeat scroll 0 0;
    border: 0 none;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: block;
    font-family: "Didact Gothic",sans-serif;
    font-size: 24px;
    padding: 10px 25px;
    text-align: center;
    transition: background 0.3s ease-in-out 0s;
    width: 100%;
}
.loinbtnssssss{background: #50b1d1 none repeat scroll 0 0;
    border: 0 none;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: block;
    font-family: "Didact Gothic",sans-serif;
    font-size: 24px;
    padding: 10px 25px;
    text-align: center;
    transition: background 0.3s ease-in-out 0s;
    width: 100%;}
.submit-button:hover {
    background: #2d97ba none repeat scroll 0 0;
}
.form-row .text-field:focus {
    background: #fff none repeat scroll 0 0;
}

</style>

  <div id="discovery-container">
     <br><br><br><br><br>
    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
     <div class="sign-in-register">
								
                                <h1 class="page-title">Reset Password</h1>
								<p style="margin-bottom:0px;" class="inner-intro"> 
                               Reset Your Password & <a href="<?php echo $base_url; ?>sign-in" class="trademark-style">Log in</a> to continue.
                                </p>
								<?php if($this->session->flashdata('L_strErrorMessage') != "")
								{
									?><span id="email_error" class="last" style="color:red;"><?php echo $this->session->flashdata('L_strErrorMessage'); ?></span><?php
								} ?>
									 
									 <?php if($msg != "")
								{
									?><span id="email_error" class="last" style="color:green;"><?php echo $msg; ?></span><?php
								} ?>
							 
                            
                                <div class="generic-form-wrapper">
                                	<form method="post" action="<?php echo $base_url;?>home/resetpassword/<?php echo $this->uri->segment(3); ?>"  onSubmit="return formsubmit()" name="form" id="form">
										 
										<input type="hidden" name="action" value="resetpwd"/>
                                    	
                                        
                                        <!--div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="email" id="email" class="validate[required,custom[email]] text-field" data-prompt-position="topRight:20" >
                                            
                                            </div>
											 <span id="email_error" style="color:red;"></span>
                                          	 
                                        </div-->
										
										  <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="upwd" id="upwd" class="validate[required] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										 <div class="form-row">
                                       	  <label for="Email">Confirm Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="reg_password2" id="reg_password2"  class="validate[required,equals[upwd]] text-field" data-prompt-position="topRight:20">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                                                         
                                                                    
                                        
                                        
                                        
                                      <div class="form-row" style="margin-bottom:20px">
                                        <input name="submit" type="submit" value="Submit" class="submit-button">
                                        
                                        
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

  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->