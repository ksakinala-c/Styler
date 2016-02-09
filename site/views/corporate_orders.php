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
.titalbarmainuss{ left: 50%;
    margin-right: -50%;
    position: absolute;
    text-align: center;
    top: 50%;
    transform: translate(-50%, -50%);}
	
.titalbarmainuss h1	{ color: #000;
    font-size: 48px;
    font-weight: 400;
    letter-spacing: 0.01em;
    line-height: 48px;
    margin-bottom: 0;}
	
	
.titalbarmainuss span{color: #999;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    letter-spacing: 0.025em;
    line-height: 37px;}	
	
</style>
 
<!-- /header --><main>
     
    <div class="category-content" style="margin-top:130px;">
         <div class="category-grid-view" style="padding:0px;">
 	      <div class="container">
             <ul class="breadcrumb pull-left">
				<li style="font-size:25px;">Corporate Orders</li>
			</ul><br>
			 
 			   <div id="errorlogincheckout" style="color:green;margin-bottom:5px;"><?php echo $this->session->flashdata('item');?> </div>
           
            <section class="container contact-form contact-form-2 fadeIn">
	<form class="row" action="<?php echo $base_url; ?>home/corporate" method="post" id="form"  name="form" onSubmit="return validate()">	
						<input type="hidden" name="action" value="corporate">  
		<div class="col-md-6">
			<div class="form-group" >
				<label for="name">Name</label>
				<input type="text" name="name"  class="validate[required] form-control" data-prompt-position="topRight:20" id="name">
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" class="validate[required] form-control" data-prompt-position="topRight:20" id="email">
			</div>
			<!-- div class="form-group">
				<label for="email">Product Type</label></br>
				Shirts : <input type="radio" name="protype" id="protype" value="Shirts" class="" >
				jackets : <input type="radio" name="protype" id="protype" value="jackets" class="" >
				Trousers : <input type="radio" name="protype" id="protype" value="Trousers" class="" >
				Top & Bottoms : <input type="radio" name="protype" id="protype" value="Top & Bottoms" class="" >
				Suits : <input type="radio" name="protype" id="protype" value="Suits" class="" >
			</div -->
			
			<div class="form-group">
				<label for="email">Address</label>
				<input type="text" name="streetadd" class="validate[required] form-control" data-prompt-position="topRight:20" id="streetadd">
			</div>
			
			<!-- div class="form-group">
				<label for="email">City</label>
				<input type="text" name="city" class="validate[required] form-control" data-prompt-position="topRight:20" id="city">
			</div>
			
				<div class="form-group">
				<label for="email">Postal/Zipcode</label>
				<input type="text" name="zip" class="validate[required] form-control" data-prompt-position="topRight:20" id="zip">
			</div-->
			
				<div class="form-group">
				<label for="email">State Requirement In Detail</label>
				<textarea type="text" name="req" class="validate[required] form-control" data-prompt-position="topRight:20" id="req"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="email">Last Name</label>
				<input type="text" name="text" class="validate[required] form-control" data-prompt-position="topRight:20" id="email">
			</div>
										<div class="form-group" >
                                       	  <label for="phone">Country Code* Mobile Number.</label>
                                          	<div class="text-field-wrap" style="border:none;">
                                        	<select style="width: 74px; float: left; border-color:#000; height: 40px;" name="ccode" id="ccode"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												<option value="">Select</option>											  
                                               <!-- <option value="">Choose Another Address</option>-->
												<?php if($countrycode != "" && count($countrycode) >= 0) {

												foreach($countrycode as $add) { ?>
                                               <!-- <option>Default</option>-->
                                                <option value="<?php echo $add->code; ?>"><?php echo $add->code; ?></option>
                                                
												<?PHP }}?>
                                              </select>
											  
											  <input style="float:left;width:85%; margin:0 0 10px 10px; height:40px;" id="mobile" type="text" onkeypress="return numbersonly(event)" name="mobno" id="mobno"  class="validate[required] select-box" data-prompt-position="topRight:5" id="selectbox" >
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div>
										<br>
										 <div class="form-row" style="padding-top:0px;">
                                       	  <label for="phone">Qty * Delivery Date</label>
                                          	<div class="text-field-wrap" style="border:none;">
                                        	<input type="text" style="width: 74px; float: left; border-color:#000; height: 40px;" name="qty" id="qty"   class="validate[required] select-box" data-prompt-position="topRight:5" >		
												 
											  
											  <input style="float:left;width:85%; margin:0 0 10px 10px; height:40px;" type="text" name="deldate" id="deldate"  class="validate[required] select-box" data-prompt-position="topRight:5" >
                                            </div>
                                          	<!--text-field-wrap ends-->  
                                        </div> 
										<!-- div class="form-group" style="margin-top:30px;">
											<label for="email">Street Address Line-2</label>
											<input type="text" name="streetaddl" class="validate[required] form-control" data-prompt-position="topRight:20" id="streetaddl">
										</div> 
										
										<div class="form-group">
											<label for="email">Region</label>
											<input type="text" name="region" class="validate[required] form-control" data-prompt-position="topRight:20"  id="region">
										</div--> 
										<div class="form-group">
											<label for="email">Country</label>
											<input type="text" name="country" class="validate[required] form-control" data-prompt-position="topRight:20" id="country">
										</div></br>
										
			<div class="form-group">
				<button type="submit" class="linkified" >Send your message</button>	
			</div>
		</div>
	</form>
</section>
	      </div>
	      <!--container-->
	   </div><!--category-grid-view-->
    </div><!--category-content-->
    
    <!--section class="map contact-2 wow fadeIn">
	<address class="text-center light-bg">
		<span class="address-title">Stylior Co.</span>
		Lorem Ipsum, Lorem, Lorem Ipsum, Lorem,<br>
        Lorem Ipsum, Lorem, Lorem Ipsum, Lorem,<br>
		Phone: +1234567890
	</address>
</section-->

</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/validationEngine.jquery.css" type="text/css"/>
<!-- link rel="stylesheet" href="<?php echo $base_url_views; ?>css/template.css" type="text/css"/ -->
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
