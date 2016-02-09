<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');
?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!---<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/date.css">--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
  
<script language="javascript">

</script>
<!--<link type="text/css" rel="stylesheet" href="<?php echo $base_url_views; ?>/css/global.css">-->
<!-- /header -->
<style>
.pic-circle{border-radius:50%}.tailors .col1{float:left;width:50%;background:transparent url("/private-assets/images/tailored/default-1.jpg") center top no-repeat;background-size:cover;border-right:1px solid #fff}.tailors .col2{float:right;width:50%;background:transparent url("/private-assets/images/tailored/default-2.jpg") left top no-repeat;background-size:cover;border-left:1px solid #b8c0c2}.tailors .open-box{position:absolute;bottom:30px;left:0;width:100%;text-align:center}.tailors .box{background-color:rgba(0,0,0,0.8);padding:25% 4% 25% 15%;visibility:hidden;width:100%;height:100%}@media screen and (max-width: 767px){.tailors .box{padding:80px 50px}}.tailors .box .close{background-color:transparent;border:none;position:absolute;top:30px;right:30px;width:40px;height:40px;font-family:'AbrilDisplay-Regular';font-size:40px;z-index:9}.tailors .box.visible{visibility:visible}.tailors .col{position:relative}@media screen and (max-width: 767px){.tailors .col{float:none;width:100%;height:460px}}.tailors h2{color:#b8c0c2;font-family:'AbrilDisplay-ExtraBold';font-size:26px;letter-spacing:5px;margin-bottom:60px;text-transform:uppercase;font-weight:400}@media screen and (max-width: 767px){.tailors h2{font-size:18px;margin-bottom:20px}}@media screen and (max-width: 479px){.tailors h2{font-size:14px;letter-spacing:3px}}.tailors h3{color:#b8c0c2;font-weight:400;font-family:'AbrilDisplay-SemiBold';font-size:14px;line-height:1;text-transform:uppercase;letter-spacing:3px;margin-bottom:10px}@media screen and (max-width: 767px){.tailors h3{font-size:8px;margin-bottom:5px}}@media screen and (max-width: 479px){.tailors h3{letter-spacing:2px}}.tailors h4{color:#fff;font-weight:400;font-family:'AbrilDisplay-ExtraBold';font-size:20px;line-height:1;letter-spacing:4px;text-transform:uppercase;margin-bottom:30px}@media screen and (max-width: 767px){.tailors h4{font-size:14px;margin-bottom:20px}}@media screen and (max-width: 479px){.tailors h4{font-size:9px;letter-spacing:2px}}

</style>
<main class="cd-main-content">
<style>
/*h1 {
  color: #000;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
}*/
.schedule h1 {
    color: #2d3645;
    font-family: "AbrilDisplay-Bold";
    font-size: 28px;
    font-weight: 600;
    text-align: center;
    margin-top: 80px;
}
.schedule h2 {
    font-family: "AbrilDisplay-Regular";
    font-size: 20px;
    font-weight: 400;
    line-height: 28px;
	text-align: center;
	color: #747b7d;
}
.schedule h3 {
    color: #b91a1a;
    font-family: "tradegothic-bold",sans-serif;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
    position: relative;
    text-transform: uppercase;
}
.schedule h3::after {
    border-top: 1px solid #b8c0c2;
    content: "";
    left: 0;
    position: absolute;
    top: 57%;
    width: 100%;
}
.schedule h3 span {
    background-color: #fff;
    padding: 0 15px 0 0;
    position: relative;
    z-index: 14;
}
.btn-default {
	background-image:none;
	border: 1px solid #b8c0c2;
    color: #1a1f23;
	font-weight:600;
    display: block;
    font-family: "AbrilDisplay-ExtraBold";
    font-size: 15px;
    letter-spacing: 4px;
    line-height: 60px;
    margin-bottom: 10px;
    text-align: center;
    text-transform: uppercase;
    transition: all 0.2s ease-out 0s;    
    width: 100%;
}
.btn-default:hover,.btn-default.active:hover
{
	background-color:#1a1f23;
	color:#fff;	
}
.btn-default.active,.btn-default:active {
    background-color: #1a1f23;
	color:#fff;
   
}
.submit
{		
    background-color: #b91a1a;
    border: 1px solid #b91a1a;
    color: #fff;
	font-weight:600;
    display: block;
    font-family: "AbrilDisplay-ExtraBold";
    font-size: 15px;
    letter-spacing: 2px;
    line-height: 60px;
    margin-bottom: 10px;
    text-align: center;
    text-transform: uppercase;
    transition: all 0.2s ease-out 0s;
    width: 100%;
	
}
	
	

@media only screen and (max-width:769px){
	.btn-city {margin-left:10px !important;}
	.submit{width:110%;}
	
}	
	

/*h1 a {
  color: #c12c42;
  font-size: 16px;
}*/

.accordion {
  width: 100%;
  margin: 10px auto 10px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #333;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #b63b4d; }

.accordion li.open i { color: #b63b4d; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
/*.submenu {
  display: none;
  border:#666666 solid 1px;
  padding:10px 20px;
  font-size: 14px;
}*/

/*.submenu li { border-bottom: 1px solid #4b4a5e; }
*/
.submenu a {
  display: block;
  text-decoration: none;
  color: #d9d9d9;
  padding: 12px;
  padding-left: 42px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.submenu a:hover {
  background: #b63b4d;
  color: #FFF;
}
.cart-calculation-col:first-child {
	margin-right:0 !important;
}
hr {
	border-color: #333 -moz-use-text-color -moz-use-text-color !important;
    border-style: dashed none none !important;
    border-width: 1px 0 0 !important;
    margin: 5px 0 !important;
}
@media only screen and (max-width:768px){
	.review-summary-responsive {width:100% !important;}
}
@media only screen and (min-width:769px){
	.review-summary-responsive {width:50% !important;}
}
.modal-dialog {
    margin: 175px auto 30px !important;
    width: 662px !important;
}

.cart-calculation-col {
    float: left;
    text-align: left;
    width: 48%;
}
.cart-calculation-col .redeem-button {
   
    margin: 0 60px;    
    width: 30%;
}
.cart-calculation-col .text-field-wrap {    
    margin: 0 30px;
    width: 40%;
}
.cart-calculation-row.buttons {		
    
    float: left;
    padding-right: 10px;
}
.cart-calculation-row.buttons a {
    background: #ff6500 none repeat scroll 0 0;    
    height: 40px;
    padding: 8px;
    text-align: center;
}		


.cart-calculation-row.buttons a.checkout {
    background: #ff6500 none repeat scroll 0 0;
}	
.cart-calculation-row total
{
	float:right;
	background-color:silver;
	border:1px solid #a3a3c2;
}
.cart-calculation-labels
{
	font-size:20px;
	font-weight:900px;
	color:black;
}

/* new css added by MSYS009 */
ul {
    list-style: outside none none;
}
.schedule .select-time {
    margin-bottom: 30px;
}

/* new css END MSYS009 */

.stylists span {
    background-color: #fff;
    padding: 0 15px 0 0;
    position: relative;
    z-index: 14;
	font-family: "tradegothic-bold",sans-serif;
    font-size: 16px;color: #b91a1a;
    font-weight: 400;
    letter-spacing: 2px;
	
    text-transform: uppercase;
}

.stylists .circle {
    border-radius: 50%;
    display: block;
    margin-bottom: 10px;
}
img {
    border: 0 none;
    height: auto;
    max-width: 100%;
}


.stylists li {
    cursor: pointer;
    float: left;
    margin-bottom: 40px;
    padding: 0 15px;
    text-align: center;
    width: 16.6667%;
}
.btn22 {
    background-color: #b91a1a;
    border-radius: 0;
    color: #ffffff;
    font-family: "tradegothic-bold",sans-serif;
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 0;
    padding: 15px 15px 12px;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: middle;
}
.tailors .open-box {
    bottom: 30px;
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}
.modal.in .modal-dialog {
    transform: translate(0px, 0px);
}
#showroom .review p {
    color: #2d3645;
    font-family: "AbrilDisplay-Bold";
    font-size: 40px;
    letter-spacing: 2px;
    line-height: 56px;
}
#showroom .review span {
    color: #b91a1a;
    font-family: "tradegothic-bold",sans-serif;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 3px;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.modal.fade .modal-dialog {
    transform: translate(0px, -25%);
    transition: transform 0.3s ease-out 0s;
}
.modal-dialog {
    margin: 30px auto;
    width: 600px;
}
.modal-dialog {
    margin: 10px;
    position: relative;
    width: auto;
}
.stylists .modal-content {
    border-radius: 0;
}
.modal-content {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}
.modal-content {
    background-clip: padding-box;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 6px;
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    outline: 0 none;
    position: relative;
}
.stylists .modal-header {
    border: medium none;
    padding: 0;
    position: relative;
}
.modal-header {
    border-bottom: 1px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
.fullimg img, .full, .size-full {
    display: block;
    width: 100%;
}
img {
    border: 0 none;
    height: auto;
    max-width: 100%;
}
.stylists .close {
    background-color: transparent;
    border: medium none;
    font-family: "AbrilDisplay-Regular";
    font-size: 40px;
    height: 40px;
    position: absolute;
    right: 15px;
    top: 15px;
    width: 40px;
    z-index: 9;
}
.modal-header .close {
    margin-top: -2px;
}
</style>
 
<?php 
//print_r($this->cart->contents());
?>
<main class="cd-main-content">
<div class="panel panel-dark">
  <div id="discovery-container">	  
         <div class="inner-page-content schedule">
			 
			  
				  
			  <div class="row" style=" height:350px;background-color:#000000;margin-top:-1px; background-position: 0 12%;background-repeat:no-repeat;background-image: url('http://www.stylior.com/upload/hm_category_images/private-bg.jpg')" >
				<div class="col-sm-10 col-sm-offset-1 center">
					<h1 style="color:#fff;">We are on your schedule.</h1>
					<h2>In just one hour, we will help you craft a suit that commands your style, and the room. <br>Select a time below to step up to the Private Collection.</h2>
					<br><br>
				</div>
			</div> 
			 <!--
			<div class="row">
				<label>Appointment Location : </label>
				<select name="appointmenet-location">
				  <option value="Dubai">Dubai</option>
				  <option value="US">US</option>
				</select>
			</div> -->            
			<form method="POST" id="form_schedule" name="schedule" action="<?php echo $this->config->item('base_url');?>appointment/saveAppointment" >
				
				<div class="row">
				
					<div class="col-sm-4" style="width:100%;text-align:center;">
				<h3><span>1. Select Prefered Location</span></h3>
						<!--
					<div class="" style="width:100%;position:relative;top:-20px;">	
						<div style="width:200px;display:inline-block">
							<label class="btn btn-default">Mumbai,India</label></div>
						<div style="width:240px;display:inline-block"><label class="btn btn-default"  >Bangalore,India</label></div>
						<div style="width:200px;display:inline-block"><label class="btn btn-default"  >Pune,India</label></div>
						<div style="width:200px;display:inline-block"><label class="btn btn-default"  >Dubai,UAE</label></div>
						<div style="display:inline-block;width:300px;position:relative;top:20px;"><p style="display:inline-block">Dont see your location? Please send us an email with your requirements at <span style="color:#12ADE0;">bookappointment@stylior.com</span></p></div>
					</div>
-->
							
            <div class="btn-group btn-city" data-toggle="buttons" style="position:relative;top:-20px;">
				<label class="btn btn-default active" style="width:220px;display:inline-block;margin-right:10px;letter-spacing:0">
                    <input checked="checked" type="radio" id="" name="appointment_location" value="Mumbai" /> Mumbai, India
                </label> 
                <label class="btn btn-default" style="width:220px;display:inline-block;margin-right:10px;letter-spacing:0">
                    <input type="radio" id="" name="appointment_location" value="Bangalore" /> Bangalore, India
                </label> 
                <label class="btn btn-default" style="width:220px;display:inline-block;margin-right:10px;letter-spacing:0">
                    <input type="radio" id="" name="appointment_location" value="Pune" /> Pune, India
                </label> 
                <label class="btn btn-default" style="width:220px;display:inline-block;margin-right:10px;letter-spacing:0">
                    <input type="radio" id="" name="appointment_location" value="Dubai" /> Dubai, UAE
                </label> 
                
                
			</div>
						<div style="display:inline-block;width:300px;"><p style="display:inline-block">Dont see your location? Please send us an email with your requirements at <span style="color:#12ADE0;">bookappointment@stylior.com</span></p></div>
							
				</div>
			</div> 
					
				<div class="row" style="padding:0% 2%;">
				<div class="col-sm-4">
				<h3><span>2. Choose a Date</span></h3>
	<div class="container" style="height:300px;width:300px ; overflow:auto;">
	
		<div class='col-md-1'>
			<div class="form-group">
				<div class='input-group date' id='datepickers'>
	
                <input type='hidden' value="" class="form-control date-field" name="appointment_date" />
                <span class="input-group-addon col-md-2" style="display:none">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
					</div>
			</div>
		</div>    
	
    <script type="text/javascript">
        $(function () {
			var dateToday = new Date(); 
            $('#datepickers').datepicker({
				 todayHighlight: true,
				  autoclose: false,
				  show:true,
			      orientation: 'bottom auto',
				  startDate: dateToday,
				  //defaultDate: new Date(),
				  //dateFormat: 'd-m-yy'
            }).on('changeDate', function(ev){
               getAppointmentTime()
            });
			$('#datepickers').data('datepicker').hide = function () {};
			$('#datepickers').datepicker('show');
			$("#datepickers").datepicker("setDate",new Date()); 
        });
    </script>
	<script language="javascript">
$(document).ready(function(){


	$('.radio-grp-apt-label').attr('style','display:none');
	$('.apt-lbl-cls1').attr('style','');
	$('.daytime-radio-lbl').on('click',function(){
		$('.daytime-radio').removeAttr('checked');
		var selectedValue=$('.daytime-radio',this).val();
		$('.daytime-radio',this).attr('checked','checked');
		$('.radio-grp-apt-label').removeClass('active');		
		$('.radio-grp-apt-label').attr('style','display:none');
		var targetCls='apt-lbl-cls'+selectedValue;
		//$('.'+targetCls).addClass('active');
		$('.'+targetCls).attr('style','');
		
	});
	
	$('.radio-grp-apt-label').on('click',function(){
		$('.radio-grp-apt').removeAttr('checked');
		var selectedValue=$('.radio-grp-apt',this).val();
		$('.radio-grp-apt',this).attr('checked','checked');
	});
	
	$(document).on("click", ".fake_submit", function() {
		var selectedTimeOfDay=$('.select-apt-time input:radio:checked').val();
		if(selectedTimeOfDay) {
			$('.hidden_form').slideDown();
		}else{
			alert('Please pick up a time first');
		}
	});

	$('#q3').change(function()
	{
     if($(this).attr('checked'))
	 {
	    //alert("yes");
          $(this).val('YES');
     }else{
          $(this).val('NO');
		  // alert("yes");
     }
});
	
	$(document).on("submit", "#form_schedule", function()
	{
	   
	
		$('#validate_appointment').attr('disabled', 'disabled');
		$('#validate_appointment').val('Please Wait...');
		var q = $('#form_schedule').serializeArray();
		//alert("test");
		$.ajax({
			type: "POST",
			url: '<?php echo $base_url; ?>appointment/appointmentTimes',
			data: { 				
				q: q,
			}
		})
		
		.done(function(ret) 
		{
			console.log(ret.errorMessage);
			if(ret.failure) 
			{
				alert(ret.errorMessage);
				$('#validate_appointment').removeAttr('disabled');
				$('#validate_appointment').val('Validate your Appointment');
			}else{
				/*ret=$.parseJSON(ret);
				var str_date 	= moment.utc(ret.appointment_date).zone(sr_data.time_offset).format("dddd, MMMM Do YYYY, h:mm a");*/
				var str = "<br/><h1>Appointment confirmed</h1><br/>You'll receive a confirmation email shortly.";
				$('.hidden_form > div').html(str);
				$('html, body').animate({ scrollTop: $('.hidden_form').offset().top - 300 }, 'slow');
				$('.fake_submit').hide();
				if (typeof _gaTracker !== 'undefined') {
					_gaTracker('send', 'event', 'Appointment', 'Scheduled', ret);
				}
				if (typeof _gaq !== 'undefined') {
					_gaq.push(['_trackEvent', 'Appointment', 'Scheduled', ret]);
				}
			}
		});
		return false;
	});	 
});
function getAppointmentTime() 
	{
	var selectedDate=$("#datepickers").find("input").val();
	var selectedTimeOfDay=$('.select-time input:radio:checked').val();
		 jQuery.ajax(
		 {
			 type: 'POST',
			 url: '<?php echo $base_url; ?>appointment/getappointmentTimes',
			 data: {selectedDate:selectedDate,selectedTimeOfDay:selectedTimeOfDay},
			// dataType: "html",
			 success: function(result)
				{

				  /* if(result == '0'){ //Invalid						 
						 $("#errorcart").html('Invalid Discount code.');
						 return false;
					 }else if(result == '1'){//free one time used
						  $("#errorcart").html('Your Discount code is Alread Used.');						 
						 return false;
					 } else {*/
					 
					if($('.apt-time-apnd-div').html($(result).filter('.apt-time-apnd-div').html())){
						//$('.radio-grp-apt-label').attr('style','display:none');
						//$('.apt-lbl-cls1').attr('style','');
						$('#q1').trigger('click');
					 }
					// }
				}
		});
	
	}

</script>
    </div>
						
				</div>
				<div class="col-sm-4">
				<h3><span>3. Select time of day</span></h3>
				
            <div class="btn-group select-time" data-toggle="buttons">
				<?php foreach($dayTimes as $key=>$daytime) { ?>
                
					<?php if($key==1){ ?>
					<label class="btn btn-default active daytime-radio-lbl" >
					<input class="radio-grp daytime-radio" checked="checked" type="radio" id="q<?php echo $key; ?>" name="appoint_time_of_day" value="<?php echo $key; ?>" /> <?php echo $daytime; ?>
					</label> 					
					<?php } else { ?>
					<label class="btn btn-default daytime-radio-lbl">
                    <input class="radio-grp daytime-radio" type="radio" id="q<?php echo $key; ?>" name="appoint_time_of_day" value="<?php echo $key; ?>" /> <?php echo $daytime; ?>
					</label> 
					<?php } ?>
                
				<?php } ?>
            </div>
            
         </div>
    
				<div class="col-sm-4">
				<h3><span>4. Appointment Time</span></h3>
				<ul class="select-time2 row">
				<!--<li class="sorry"><span>We're sorry, there are no time slots available for this time of day.</span></li>-->
				<div class="apt-time-apnd-div">
					<div class="btn-group select-apt-time" data-toggle="buttons">
					<?php foreach($getTimeInfo as $timeInfos) { 
						$keyId=$timeInfos->time_of_day;
						$timeInfo=$timeInfos->start_time;
					?>
						<label class="btn btn-default radio-grp-apt-label apt-lbl-cls<?php echo $keyId; ?>">
						<input class="radio-grp-apt apt-cls<?php echo $keyId; ?>" type="radio" id="apt<?php echo $keyId; ?>" name="start_time" value="<?php echo $timeInfo; ?>" /> <?php echo $hoursRange[$timeInfo]; ?>
						</label> 
					<?php } ?>
					</div>
				</div>
				</ul>
				</div>
				</div>
				<div class="row">
				<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
				<input type="hidden" value="2016-01-09" id="the-date">
				<input type="hidden" value="morning" id="the-time1">
				<input type="hidden" value="" name="at" id="the-time2">
				<input type="button" class="submit fake_submit" value="Book Appointment">
				</div>
				</div>
				<div class="row hidden_form" style="display:none">
				<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
				<div class="form-group">
				<label for="first_name">First Name</label>
				<input type="text" placeholder="First Name" name="first_name" id="first_name" class="form-control" required="required">
				</div>
				<div class="form-group">
				<label for="last_name">Last Name</label>
				<input type="text" placeholder="Last Name" name="last_name" id="last_name" class="form-control" required="required">
				</div>
				<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" placeholder="Email" name="email" id="email" class="form-control" required="required">
				</div>
				
				<!--<div class="form-group">
				<label for="country">Select Country</label>
				<select class="form-control" name="country">
				<option value="no answer">----- Please Select -----</option>
				<option value="+91">India</option>
				<option value="+971">UAE</option>
				</select>
				</div>-->
					
				<div class="form-group">
				<label for="phone">Country Code* Mobile Number.</label>
                                          	<div class="text-field-wrap" style="border:none;">
                                        	<select style="width: 74px; float: left; border-color: rgb(170, 170, 170); height: 32px;" name="country" id="ccode"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												<option value="">Select</option>											  
                                               <!-- <option value="">Choose Another Address</option>-->
												<?php if($countrycode != "" && count($countrycode) >= 0) {

												foreach($countrycode as $add) { ?>
                                               <!-- <option>Default</option>-->
                                                <option value="<?php echo $add->code; ?>"><?php echo $add->code; ?></option>
                                                
												<?PHP }}?>
                                              </select><input style="float:right; border-color:#aaa;width:80%;height:32px" id="mobile" type="text" onkeypress="return numbersonly(event)" name="phone_number" id="reg_mobileno"  class="validate[required] select-box" data-prompt-position="topRight:5" id="selectbox" >
                                            </div>
                                          	<!--text-field-wrap ends--> 
				</div>
					<div class="form-group">
				<label for="address">Address</label>
				<textarea placeholder="" name="address" id="address" class="form-control" required="required"></textarea>
				</div>
				<hr>
				<div class="form-group">
				<label for="q1">Have you ever made a custom suit before? </label>
				<select class="form-control" name="q1">
				<option value="no answer">----- Please Select -----</option>
				<option value="Yes">Yes</option>
				<option value="Not In the Past Few Years">Not In the Past Few Years</option>
				<option value="Never">Never</option>
				</select>
				</div>
				<div class="form-group">
				<label for="q2">Are you looking for something particular from your visit today?</label>
				 
				<textarea class="form-control" id="q2" name="q2"></textarea>
				</div>
				<div class="checkbox">
				<label>
				<input type="checkbox" id="q3" name="q3" value="Yes">&nbsp;Will this be a fitting for a previous order?
				</label>
				</div>
					
				<input type="submit" class="submit" id="validate_appointment" value="Validate your Appointment" name="submit">
				</div>
				</div>
				</form>
        </div>							
       </div>
    </div>
	<section class="stylists">
             <div class="container-fluid">
<span >Meet our stylists</span>
<ul class="row">
<li data-toggle="modal" data-target="#stylists-nimit">
<img src="<?php echo $base_url_views; ?>/images/nimit.jpg" alt="Nimit" class="circle">
<h2>Nimit</h2>
<span class="bio">Biography <span class="icon-arrow-right"></span></span>
</li>
<li data-toggle="modal" data-target="#stylists-taylor">
<img src="<?php echo $base_url_views; ?>/images/taylor.jpg" alt="Taylor" class="circle">
<h2>Taylor</h2>
<span class="bio">Biography <span class="icon-arrow-right"></span></span>
</li>
<li data-toggle="modal" data-target="#stylists-nick">
<img src="<?php echo $base_url_views; ?>/images/nick.jpg" alt="Nick" class="circle">
<h2>Nick</h2>
<span class="bio">Biography <span class="icon-arrow-right"></span></span>
</li>
</ul>
</div>
<div style="display: none;" class="modal fade" id="stylists-nimit" tabindex="-1" role="dialog" aria-labelledby="Nimit Mehta">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<img src="<?php echo $base_url_views; ?>images/full-bio-nimit.jpg" alt="Nimit Mehta" class="full">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="text">
<div class="vcenter">
<div class="content">
<h4>Nimit</h4>
<h5>Washington DC Showroom</h5>
</div>
</div>
</div>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-1.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>EMPHASIS</h6>
<p>Confidence. The way someone is dressed directly correlates with the 
way they feel--I'm a firm believer in the "look good, feel good" mantra.
 A well fitted outfit easily turns eyes and brings on the right 
attention every man loves to get.</p>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-2.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>PREFERENCE</h6>
<p>Italian Mills. The way Italian fabrics bring out effortless elegance is something I'm mesmerized by.</p>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-3.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>RECREATION</h6>
<p>I love spending time by the water, be it on the beach or the marina. 
It's just such a relaxing feeling. White pants and all included, of 
course!</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="stylist-taylor" tabindex="-1" role="dialog" aria-labelledby="Taylor Couch">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<img src="<?php echo $base_url_views; ?>images/full-bio-taylor.jpg" alt="Taylor Couch" class="full">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="text">
<div class="vcenter">
<div class="content">
<h4>Taylor</h4>
<h5>Washington DC Showroom</h5>
</div>
</div>
</div>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-1.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>EMPHASIS</h6>
<p>The key to building the perfect wardrobe is to treat your clothing 
like a long-term investment.&nbsp; As you discover the “sweet spot” 
between quality and design - be it tastefully bold or classically subtle
 - your clothes won’t just collect dust on a shelf; you’ll be wearing <strong>and</strong> enjoying them.</p>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-2.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>DETAILS</h6>
<p>They are what separate and define the man.&nbsp; Play with micro 
patterns and textures and, I assure you, you won’t be just another guy 
in navy.&nbsp; </p>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-3.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>RECREATION</h6>
<p>I love the arts; whether it’s catching a late show at Blues Alley or 
heading up to New York for a weekend of Broadway musicals and comedy 
clubs.&nbsp; Can’t be all work all the time, right?<br>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="stylist-nick" tabindex="-1" role="dialog" aria-labelledby="Nick Jerome">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<img src="<?php echo $base_url_views; ?>images/full-bio-nick.jpg" alt="Nick Jerome" class="full">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="text">
<div class="vcenter">
<div class="content">
<h4>Nick</h4>
<h5>Washington DC Showroom</h5>
</div>
</div>
</div>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-1.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>EMPHASIS</h6>
<p>Personality. Through an open dialogue I like to ensure that every 
part of your garment aligns with your preferences, creating a garment 
that is an extension of you down to the smallest details.</p></div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-2.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>PREFERENCE</h6>
<p>Reinvented classics. The time-honored classics add a layer of 
versatility to your closet, but a few modern tweaks will set you over 
the edge.</p></div>
</div>
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $base_url_views; ?>images/modal-circle-3.jpg" alt="" class="circle">
</div>
<div class="col-sm-8">
<h6>RECREATION</h6>
<p>A carefully curated selection of jackets and trousers can make the transition from office to happy hour that much easier.<br>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="review" style="background-color: #f5f7f6;
    padding: 90px 70px;
    text-align: center;">
<span style=" color: #b91a1a;
    font-family: 'tradegothic-bold',sans-serif;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 3px;
    margin-bottom: 30px;
    text-transform: uppercase;">
	Customer Review
	</span>
<p style="color: #2d3645;
    font-family: 'AbrilDisplay-Bold';
    font-size: 40px;
    letter-spacing: 2px;
    line-height: 56px;">“Really sharp&nbsp;customer&nbsp;service. I am very pleased DC finally has a place like this for men.”</p>
</section>
<section class="tailors clearfix">
<div class="col col1" style="background-image: url('<?php echo $base_url_views; ?>images/dc-1.jpg')">
<div class="box">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h2>Created in DC</h2>
<h3>suit:</h3>
<h4>100% linen, by Holland &amp; Sherry</h4>
<h3>shirt:</h3>
<h4>100% Cotton Blue Pinstripe Shirt</h4>
<h3>accessories:</h3>
<h4>Hand-Picked White Cotton Pocket Square</h4>
<h3>stylist comments:</h3>
<h4>Linen and summer go hand in hand, and this blue herringbone design adds a little more panache to that plain linen blazer.</h4>
</div>
<p class="open-box"><a href="#" class="submit fake_submit">About this look</a></p>
</div>
<div class="col col2" style="background-image: url('<?php echo $base_url_views; ?>images/dc-2.jpg')">
<div class="box">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h2>Created in DC</h2>
<h3>suit:</h3>
<h4>100% Worsted Wool, Holland &amp; Sherry</h4>
<h3>shirt:</h3>
<h4>100% Cotton Light Blue Shirt</h4>
<h3>accessories:</h3>
<h4>Knot Standard Classic Navy Blue Silk Tie</h4>
<h3>stylist comments:</h3>
<h4>This grey glen plaid design makes a bold statement in the office, 
and the four-seasons fabric makes the suit wearable all year round.</h4>
</div>
<p class="open-box"><a href="#" class="submit fake_submit">About this look</a></p>
</div>
</section>
 </main>
 



     <?php include ('includes/footer.php'); ?>
  <script type='text/javascript' src="http://www.stylior.com/site/views/js/datepicker.js"></script>
  <?php
  date_default_timezone_set("UTC");
  ?>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->