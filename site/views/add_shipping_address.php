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
	<script>
function checkemail(email)
{
	//alert(email);
	if(document.getElementById('country').value == '1'){
			var url = '<?php echo $base_url ?>/account/checkemail/';
			$.ajax({
			url:url,
			type:'post',
			data:'email='+email,
			success:function(msg)
			{
			 
				if(msg!=""){
					alert(msg);
					$("#Zip").val('');
				} else  { 
						return false;
						}	
			}
			});
		}
}
</script>

<!-- /header -->
<main class="cd-main-content">


<div class="panel panel-dark">


   

    <div class="discovery-section page-container-responsive row-space-6" id="discover-recommendations">
      
    

				<ul class="breadcrumb">
                        	<li><a href="account_address_book.html">Address Book</a></li>
                        	<li><a href="#" class="selected">Add Shipping Address</a></li>
                        
                        </ul>
						
<?php 
			if($L_strErrorMessage != ""){	?>
				<div class="alert alert-danger"><?php echo $L_strErrorMessage; ?></div>
			<?php } ?>
			<br><br><br><br>
			<?php include ('includes/dashbord_header.php'); ?>
			<div class="inner-page-content">
				<h1 class="page-title">Add Shipping Address</h1>
                    <div class="account-form-content-wrap">
                        <div class="generic-form-wrapper">
                        <form role="form" name="form" id="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo $base_url."account/add_shipping_address/"; ?>">
							<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
							<INPUT TYPE="hidden" NAME="action" VALUE="add_shipping_address">
							
							<div class="form-row">
								<label>
								<input type="checkbox" id="checkbox" name="Status" value="1">
								Use As Billing Details.
								</label>
                            </div>	
							
							<div class="form-row">
                                <label for="Email">Name *</label>
                                   	<div class="text-field-wrap">
                                       	<input name="Name" type="text" class="validate[required] text-field" data-prompt-position="topRight:20" id="Name" value="<?php if(isset($_POST['Name'])){ echo $_POST['Name'];  } ?>">
                                    </div>
                                          	<!--text-field-wrap ends--> 
                            </div>
                                        <!--form-row ends-->
									
                            <div class="form-row">
								<label for="Email">Address Line 1 *</label>
                                   	<div class="text-field-wrap">
                                      	<input name="Address1" type="text" class="validate[required] text-field" data-prompt-position="topRight:20" id="Address1" value="<?php if(isset($_POST['Address1'])){ echo $_POST['Address1'];  } ?>">
                                    </div>
                                          	<!--text-field-wrap ends--> 
                            </div>
                                        <!--form-row ends-->  
                                        
                            <div class="form-row">
								<label for="Email">Address Line 2 </label>
                                    <div class="text-field-wrap">
										<input name="Address2" type="text" class="text-field" id="Address2" value="<?php if(isset($_POST['Address2'])){ echo $_POST['Address2'];  } ?>">
                                    </div>
                                          	<!--text-field-wrap ends--> 
                            </div>
                                        <!--form-row ends-->    
                                        
                            <div class="form-row">
								<label for="Email">Landmark </label>
                                   	<div class="text-field-wrap">
                                      	<input name="Landmark" type="text" class="text-field" id="Landmark" value="<?php if(isset($_POST['Landmark'])){ echo $_POST['Landmark'];  } ?>">
                                    </div>
                                          	<!--text-field-wrap ends--> 
                            </div>
                                        <!--form-row ends-->
                            <div class="form-row">
                                <label for="Email">City *</label>
                                    <div class="text-field-wrap">
                                        <input name="City" type="text" class="validate[required] text-field" data-prompt-position="topRight:20" id="City" value="<?php if(isset($_POST['City'])){ echo $_POST['City'];  } ?>">
                                    </div>
                                          	<!--text-field-wrap ends--> 
                            </div>
                                        <!--form-row ends-->  
                             
                                        <!--form-row ends--> 
										
										 <div class="form-row">
                                <label for="Email">Country *</label>
                                <select class="select-box" name="country" id="country">
                                    
									<option value="">Select Country</option>
									<?php 
									if($allcountry !="" && count($allcountry)>0){
									foreach ($allcountry as $country) 
									{
									?>
									<option value="<?php echo $country->cid; ?>"><?php echo $country->cname; ?></option>
									<?php } } ?>
								 
									 
								</select>
								</div>
								<div class="form-row">
                                       	  <label for="Email">State *</label>
                                          	<div class="text-field-wrap">
                                        	<input type="text" name="State" id="State" class="validate[required] text-field" data-prompt-position="topRight:20" >
                                            </div>
                                          	<!--text-field-wrap ends--> 
                                           
                                        </div>
                                        <!--form-row ends--> 
                                        
							<div class="form-row">
							  <label for="Zip">Zip *</label>
								<div class="text-field-wrap">
								<input name="Zip" class="validate[required] text-field" data-prompt-position="topRight:20" type="text" id="Zip" Onchange="checkemail(this.value);" value="<?php if(isset($_POST['Zip'])){ echo $_POST['Zip'];  } ?>">
								</div>
								<!--text-field-wrap ends--> 
							</div>
                                        <!--form-row ends-->   
                                        
							<div class="form-row">
							  <label for="Zip">Phone *</label>
								<div class="text-field-wrap">
								<input name="Phone" type="text" class="validate[required] text-field" data-prompt-position="topRight:20" onkeypress="return numbersonly(event)" id="Phone" value="<?php if(isset($_POST['Phone'])){ echo $_POST['Phone'];  } ?>">
								</div>
								<!--text-field-wrap ends--> 
							</div>
                                        <!--form-row ends-->    
                                    
							<div class="form-row">
								<input name="submit" type="submit" value="Save Changes" class="submit-button">
							</div>
                        </form>
						</div>
                          	<!--generic-form-wrapper ends-->  
                    </div>
                            <!--account-content-wrap-addexlcude ends-->
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
	 <script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>
  </body>
</html>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->