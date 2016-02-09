<?php include ('includes/loginheader.php'); ?>
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

   <link href="<?php echo $base_url_views; ?>css/easy-responsive-tabs.css" rel="stylesheet">
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
      
      <div class="inner-page-content">
                      		<h1 class="page-title">Log In</h1>
                          	
                            <div class="checkout-wrapper">
                            
                            
                            	<div class="checkout-wrapper-contents">
                            	<!--responsive tabs to accordion-->
                                
               					<div class="horizontalTab">
            <ul class="resp-tabs-list">
                <li>New Customers</li>
                <li>Existing Customers</li>
               
                
            </ul>
            <!--resp-tabs-list ends-->
            
            <div class="resp-tabs-container">
                <div class="static-page-data">
                  	<div class="generic-form-wrapper">
                    	<form action="" method="post">
                        
                             <h3>Enter Email Id</h3>
                            <div class="form-row">
                                       	  <!--<label for="Email">Enter Email Id</label>-->
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="textfield" id="Email" class="text-field" placeholder="Enter Email Id" onFocus="this.placeholder=''" onBlur="this.placeholder='Enter Email Id'">
                                            </div>
                                          	
                                           <!-- <p class="confirmation">Confirmation of your order would be sent to this email</p> -->
                                        </div>
                                       
                                        
                                        
                                        
                                <!--<h3>Enter Email Id</h3>-->
                                 
                                	<p>Fast and easy check out. Easy access to your order history and status</p>
                                    
                                    <div class="form-row">
                                    	<div class="cart-calculation-row">
                                    	<a href="#" class="view-cart"><img src="<?php echo $base_url_views; ?>assets/images/fb-img.png"></a>&nbsp;&nbsp;
                                        <a href="#" class="view-cart"><img src="<?php echo $base_url_views; ?>assets/images/google+-img.png"></a>
                                    </div>
                                    
                                    </div>
                                	<!--form-row ends-->
                                    
                                    <div class="form-row">
                                        <input name="" type="submit" value="Continue" class="submit-button">
                                        
                                        
                            </div>
                        
                        
                        </form>
                    
                    
                    </div>
                    <!--generic-form-wrapper ends-->
                
                
              </div>
  <!--New Customers tab ends-->
                <div class="static-page-data">
               	 	<div class="generic-form-wrapper">
                                	<form action="" method="post">
                                    	
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Email *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="textfield" id="Email" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends-->
                                        
                                        <div class="form-row">
                                       	  <label for="Email">Password *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="password" name="textfield" id="Email" class="text-field">
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
                                    	<!--form row ends--> 
                                        
                                         <div class="form-row">
                                        	<a href="reset_password.html">Forgot Password?</a>
                                        
                                        
                                         </div>
                                   		<!--form-row ends-->                             
                                        
                                        
                                        
                                      <div class="form-row">
                                        <input name="" type="submit" value="Log in" class="submit-button">
                                        
                                        
                                      </div>
                                   		<!--form-row ends-->
                                    
                                    
                                    </form>
                                
                                
                                </div>
                        		<!--generic-form-wrapper ends-->
                    
              </div>
               
<!--Existing Customers tab ends-->
               
            </div>
            <!--resp-tabs-container ends-->
        </div>
      <!--horizontalTab ends-->
	  <!--responsive tabs to accordion ends-->
                            </div>
                            <!--checkout-wrapper-contents ends-->
                            <div class="order-summary">
                                	<div class="order-summary-content">
                                	<h3>Order Summary</h3>
                                    	<div class="cart-calculation-container">
                                        
                                        <div class="cart-calculation-row">
                                    	<div class="cart-calculation-col labels">
                                        	Items 
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col">
                                       			3
                                        
                                        
                                        </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                	<div class="cart-calculation-row total">
                                    	<div class="cart-calculation-col labels">
                                        	Total 
                                        
                                        </div>
                                        <!--cart-calculation-col labels ends-->
                                        
                                        <div class="cart-calculation-col total-rate">
                                        <span class="WebRupee">Rs </span> 000.00
                                        
                                        
                                        </div>
                                        <!--cart-calculation-col-->
                                
                                	</div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row total-excludes">
                                    	Total excludes shipping
                                    
                                    </div>
                                    <!--cart-calculation-row ends-->
                                    
                                    <div class="cart-calculation-row">
                                    	<a href="#" class="view-cart">View Cart</a>
                                    
                                    </div>
                                    
                                    </div>
                                    <!--cart-calculation-container ends-->
                                    
                                    
                                    </div>
                                    <!--order-summary-content ends-->
                                    
                                
                                </div>
                                <!--order-summary ends-->
                            
                            </div>
                            <!--checkout-wrapper ends-->
						</div>
      
    </div>
  </div>
</div>
 

<div class="trust hide-sm">
</div>


     <?php include ('includes/footer.php'); ?>
	
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->