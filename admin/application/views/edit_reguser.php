<?php include('include/header.php');?>	
<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>
	   
<script>
	function validate()
	{
			var firstname=$("#firstname").val();
			if(firstname=="")
			{
				alert("Please Enter First Name:");
				return false;
			}
			var lastname=$("#lastname").val();
			if(lastname=="")
			{
				alert("Please Enter Last Name:");
				return false;
			}
			 
			var email=$("#email").val();
			if(email=="")
			{
				alert("Please enter the Email");
				return false;
			}
			var em = document.getElementById('email');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(em.value)) {
					alert('Please provide a valid email address');
					em.focus;
					return false;
			}
			
			var username=$("#username").val();
			if(username=="")
			{
				alert("Please Enter Username:");
				return false;
			}
			var password=$("#password").val();
			if(password=="")
			{
				alert("Please Enter Password:");
				return false;
			}
			$("#form").submit();
			 
	}
	 
function pro_styles_check(val){
		
	if(val == 'Cheque' ){	
		document.getElementById("cheque_div").style.display = "block";
		document.getElementById("PayPal_div").style.display = "none";
		document.getElementById("Bank_Transfer_div").style.display = "none";
	}else if(val == 'PayPal' ){	
		document.getElementById("PayPal_div").style.display = "block";
		document.getElementById("cheque_div").style.display = "none";
		document.getElementById("Bank_Transfer_div").style.display = "none";
	}else if(val == 'Bank Transfer' ) {		
		document.getElementById("Bank_Transfer_div").style.display = "block";
		document.getElementById("cheque_div").style.display = "none";
		document.getElementById("PayPal_div").style.display = "none";
	}
}
 
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Users  <?php $firstname; ?></strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
					 Edit Users 
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>reguser/lists'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" name="edit_product"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
          
			<form  class="form-horizontal form-groups-bordered" role="form" id="form" method="post" action="<?php echo $base_url;?>reguser/edit/<?php echo $id; ?>" enctype="multipart/form-data" >
 			<div class="panel-body">
				
					<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
					<INPUT TYPE="hidden" NAME="action" VALUE="edit_reguser">
					<INPUT TYPE="hidden" NAME="hiddenaction" VALUE="<?php echo $id;?>">
					
					<INPUT TYPE="hidden" NAME="affiliate" VALUE="<?php echo $affiliate;?>">
					<INPUT TYPE="hidden" NAME="insider" VALUE="<?php echo $insider;?>">
                     
                   	<div class="form-group" >
                    <label class="col-sm-2 control-label" for="labname">User Name  :</label>
                    <div class="col-sm-5">
                       <input type="text" id="username" name="username" value="<?php echo $username;?>" class="form-control">
                    </div>
                    </div>
					
					<div class="form-group" >
                    <label class="col-sm-2 control-label" for="labname">Email  :</label>
                    <div class="col-sm-5">
                       <input type="text" id="email" name="email" value="<?php echo $email;?>" class="form-control">
                    </div>
                    </div>
					
				
					 <div class="form-group" >
                    <label class="col-sm-2 control-label" for="labname">Password  :</label>
                    <div class="col-sm-5">
                       <input type="password" id="password" name="password" value="<?php echo $password;?>" class="form-control">
                    </div>
                    </div>
					<!-- New -->
		 
					 <?php if($affiliate == '1') { ?>
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Company: :</label>
						<div class="col-sm-5">
					    <input type="text" id="company" name="company" class="form-control" value="<?php echo $company;?>">
					    </div>
					 </div>
					 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Website: :</label>
						<div class="col-sm-5">
					    <input type="text" id="website" name="website" class="form-control" value="<?php echo $website;?>">
					    </div>
					 </div>
					<?php } ?>
                     <div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Country :</label>
						<div class="col-sm-5">
						  <select id="cid" name="cid" class="form-control">
								<option value="">Select Country </option>
								<?php if($allcountry != '' && count($allcountry) > 0)
								{ foreach($allcountry as $country) { ?>
										<option value="<?php echo $country->cid; ?>" <?php if($country->cid == $cid) {echo "Selected"; }?>><?php echo $country->cname; ?></option>
								<?php  } }	 ?>
						   </select>
						</div>
					</div>
                     
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">State: :</label>
						<div class="col-sm-5">
					    <input type="text" id="state" name="state" class="form-control" value="<?php echo $state;?>">
					    </div>
					 </div>
					 
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">City: :</label>
						<div class="col-sm-5">
					    <input type="text" id="city" name="city" class="form-control" value="<?php echo $city;?>">
					    </div>
					 </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Address: :</label>
						<div class="col-sm-5">
					    <input type="text" id="address" name="address" class="form-control" value="<?php echo $address;?>">
					    </div>
					 </div>
					   <div class="form-group">
						<label class="col-sm-2 control-label" for="select"> Country Code* Mobile Number:</label>
						 
						<div class="col-sm-2">
										<select class="form-control" name="ccode" id="ccode" value="<?php echo $ccode;?>" >		
												<option value="">Select</option>											  
                                              
												<?php if($allcountry != "" && count($allcountry) >= 0) {

												foreach($allcountry as $countrycode) { ?>
                                              
                                                <option value="<?php echo $countrycode->code; ?>" <?php if($countrycode->code == $ccode){ echo "Selected"; }?>><?php echo $countrycode->code; ?></option>
                                                
												<?PHP }}?>
                                              </select>
											    
						</div>
							<div class="col-sm-3">
								<input style="float:left;"  onkeypress="return numbersonly(event)" type="text" id="phone" name="phone" class="form-control" value="<?php echo $phone;?>">
							</div>
					</div>
					<style>
					.ui-datepicker-trigger
					{
					position: absolute;
					right: 22px;
					top: 0;
					} 
					</style>
					
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Date Of Birth :</label>
						<div class="col-sm-5">
					    <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $dob; ?>">
					    </div>
					 </div>
                       <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Gender:<?php echo $gender; ?></label>
						<div class="col-sm-3">
						Male &nbsp;<input type="radio" id="gender" <?php if($gender == "male"){ echo "Checked"; }?> name="gender" class="" value="male">  
						Female &nbsp;<input type="radio" id="gender" <?php if($gender == "female"){ echo "Checked"; }?> name="gender" class="" value="female">
					    </div>
					 </div> 
					 <?php if($affiliate == '1') { ?>
					 <div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Payment Method:</label>
						<div class="col-sm-3">
						Cheque &nbsp;<input type="radio" checked id="paymentmethod" onclick="pro_styles_check(this.value)"  name="paymentmethod" <?php if($paymentmethod == "Cheque"){ echo "Checked"; } ?>class="" value="Cheque">  
						PayPal &nbsp;<input type="radio" id="paymentmethod"  <?php if($paymentmethod == "PayPal"){ echo "Checked"; } ?> onclick="pro_styles_check(this.value)"  name="paymentmethod" class="" value="PayPal">
						Bank Transfer &nbsp;<input type="radio" <?php if($paymentmethod == "Bank Transfer"){ echo "Checked"; } ?>  id="paymentmethod" onclick="pro_styles_check(this.value)" name="paymentmethod" class="" value="Bank Transfer">
					    </div>
					 </div>
					
					 <div class="form-group" id="cheque_div">
					    <label class="col-sm-2 control-label" for="inputEmail">Cheque Payee Name :</label>
						<div class="col-sm-5">
					    <input type="date" id="chq_payee_name" name="chq_payee_name" class="form-control" value="<?php echo $chq_payee_name; ?>">
					    </div>
					 </div>
					 <?php } ?>
					 
					  <div class="form-group" id="PayPal_div" style="display:none;">
					    <label class="col-sm-2 control-label" for="inputEmail">PayPal Payee Name :</label>
						<div class="col-sm-5">
					    <input type="date" id="paypal_payee_name" name="paypal_payee_name" class="form-control" value="<?php echo $paypal_payee_name; ?>">
					    </div>
					 </div>
					 
					 <div id="Bank_Transfer_div" style="display:none;">
					 <div class="form-group" id="">
					    <label class="col-sm-2 control-label" for="inputEmail">Bank Name :</label>
						<div class="col-sm-5">
					    <input type="date" id="bank_name" name="bank_name" class="form-control" value="<?php echo $bank_name; ?>">
					    </div>
					 </div>
					 
					  <div class="form-group" id="">
					    <label class="col-sm-2 control-label" for="inputEmail">ABA/BSB number (Branch Number) :</label>
						<div class="col-sm-5">
					    <input type="date" id="abs_bsb_number" name="abs_bsb_number" class="form-control" value="<?php echo $abs_bsb_number; ?>">
					    </div>
					 </div>
					 
					  <div class="form-group" id="">
					    <label class="col-sm-2 control-label" for="inputEmail">SWIFT Code :</label>
						<div class="col-sm-5">
					    <input type="date" id="swift_code" name="swift_code" class="form-control" value="<?php echo $swift_code; ?>">
					    </div>
					 </div>
					 
					  <div class="form-group" id="">
					    <label class="col-sm-2 control-label" for="inputEmail">Account Name:</label>
						<div class="col-sm-5">
					    <input type="date" id="account_name" name="account_name" class="form-control" value="<?php echo $account_name; ?>">
					    </div>
					 </div>
					 
					 <div class="form-group" id="">
					    <label class="col-sm-2 control-label" for="inputEmail">Account Number:</label>
						<div class="col-sm-5">
					    <input type="date" id="account_number" name="account_number" class="form-control" value="<?php echo $account_number; ?>">
					    </div>
					 </div>
					 
					 </div>
					<!-- End-->
                    
                     
                      
                    </div>
 				</div>
 	
 </form>
 		</div>
 		</div>
	</div>
 </div>
    
<?php include('include/footer.php');?>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js"></script>
<link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script type="text/javascript">
	var jq = $.noConflict();jq(document).ready(function(){	
 
	jq( "#dob" ).datepicker({
		showOn: "both",
		buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",	
		dateFormat: 'yy-mm-dd',	
		buttonImageOnly: true	
		});
		});	
</script>
  
</body>
</html>
