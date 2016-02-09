<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!---<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/date.css">--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
  
<script language="javascript">

</script>
<!-- /header -->
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
#apt-submit
{		
    background-color: #b91a1a;
    border: 1px solid #b91a1a;
    color: #fff;
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
	padding:0%;
}
	
	
@media only screen and (max-width:769px){
	.form-group {width:100%;position:relative;top:-100px;z-index:-10; !important;}
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

</style>
 
<?php 
//print_r($this->cart->contents());
?>
<main class="cd-main-content">
<div class="panel panel-dark">
  <div id="discovery-container">
         <div class="inner-page-content schedule">
			  <div class="row">
				<div class="col-sm-10 col-sm-offset-1 center">
					<h1>We are on yours schedule.</h1>
					<h2>In just one hour, we’ll help you craft a suit that commands your style, and the room. <br>Select a time below to step up to the Private Collection.</h2>
					<br><br>
				</div>
			</div> 
			<div class="row">
				<label>Appointment Location : </label>
				<select name="appointmenet-location">
				  <option value="Dubai">Dubai</option>
				  <option value="US">US</option>
				</select>
			</div>             
			<form method="POST" id="form_schedule" name="schedule" action="<?php echo $this->config->item('base_url');?>appointment/saveAppointment" >
				<div class="row" style="padding:0% 2%;">
				<div class="col-sm-4">
				<h3><span>1. Choose a Date</span></h3>
	<div class="container">
	
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
            $('#datepickers').datepicker({
				 todayHighlight: true,
				  autoclose: false,
				  show:true,
			      orientation: 'bottom auto',
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

	$(document).on("submit", "#form_schedule", function() {
		$('#validate_appointment').attr('disabled', 'disabled');
		$('#validate_appointment').val('Please Wait...');
		var q = $('#form_schedule').serializeArray();
		$.ajax({
			type: "POST",
			url: '<?php echo $base_url; ?>appointment/appointmentTimes',
			data: { 				
				q: q,
			}
		})
		.done(function(ret) {
			if(ret.failure) {
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
				<h3><span>2. Select time of day</span></h3>
				
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
				<h3><span>3. Appointment Time</span></h3>
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
				<input type="button" class="submit fake_submit" value="Book Appointment" id="apt-submit">
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
				
				<div class="form-group">
				<label for="country">select country</label>
				<select class="form-control" name="country">
				<option value="no answer">----- Please Select -----</option>
				<option value="+91">India</option>
				<option value="+971">UAE</option>
				</select>
				</div>
			
				<div class="form-group">
				<label for="phone">Phone</label>
				<input type="tel" placeholder="555-123-1234" name="phone_number" id="phone" class="form-control" required="required">
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
 </main>

     <?php include ('includes/footer.php'); ?>
  <script type='text/javascript' src="http://www.stylior.com/site/views/js/datepicker.js"></script>
  <?php
  date_default_timezone_set("UTC");
  ?>
<!-- ver. 96889fb0bcd348517861d9bd119b4a86c65cc81f -->