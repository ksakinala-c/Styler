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

$(document).ready(function(){
$( ".lazy-load" ).mouseenter(function() {
$(this).find(".product_image").hide();
$(this).find(".product_fimage").show();
  })
  .mouseleave(function() {
  
$(this).find(".product_image").show();
$(this).find(".product_fimage").hide();

  });
  
$( "#clickme11" ).click(function() {
$( "#ck-button11" ).toggle();
$(this).text($(this).text() == '- COLOR' ? '+ COLOR' : '- COLOR');
});
  
$( "#clickme12" ).click(function() {
$( "#ck-button12" ).toggle();
$(this).text($(this).text() == '- PATTERN' ? '+ PATTERN' : '- PATTERN');
});
  
$( "#clickme13" ).click(function() {
$( "#ck-button13" ).toggle();
$(this).text($(this).text() == '- FABRIC' ? '+ FABRIC' : '- FABRIC');
 
});
$( "#hide_while" ).click(function() {
$(this).text($(this).text() == 'CLOSE X' ? 'FILTERS' : 'CLOSE X');
$( "#filters" ).toggle();

});

})


</script>




<style>
.product_fimage{

display:none;
}

</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
 <script>
    	function subfilters(){
    		document.filters.submit();
    	}
    </script>  
	<script>
  $(function() {
	  
	  var myvalues=[ <?php if($this->session->userdata('currencycode') == 'INR') { echo "1799"; } else { echo roundUpToAny(( "1799" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?>, <?php if($this->session->userdata('currencycode') == 'INR') { echo "3599"; } else { echo roundUpToAny(( "3599" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?> ]
	  var sPrice="<?php echo $_GET['s_price']; ?>";
	  var ePrice="<?php echo $_GET['e_price']; ?>";
	  if(sPrice && ePrice)
	  {
		  myvalues=[sPrice,ePrice];
	  }
	  
    $( "#slider-range" ).slider({
      range: true,
      min: <?php if($this->session->userdata('currencycode') == 'INR') { echo "1500"; } else { echo roundUpToAny(( "1500" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?>,
      max: <?php if($this->session->userdata('currencycode') == 'INR') { echo "4000"; } else { echo roundUpToAny(( "4000" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?>,
      values: myvalues,
      slide: function( event, ui ) {
        $( "#amount" ).html( " <?php if($this->session->userdata('currencycode') == 'INR') { echo "Rs. "; } else { echo $this->session->userdata('currencycode')." "; }?>" + ui.values[ 0 ] + " - <?php if($this->session->userdata('currencycode') == 'INR') { echo "Rs. "; } else { echo $this->session->userdata('currencycode')." "; }?>" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
		$( "#s_price" ).val(ui.values[ 0 ]);
		$( "#e_price" ).val(ui.values[ 1 ]);
		$( "#slider-range").slider( "option", "values", myvalues );
		//formSubmitData();		//submit the current form
      }
    });
    $( "#amount" ).html( " <?php if($this->session->userdata('currencycode') == 'INR') { echo "Rs. "; } else { echo $this->session->userdata('currencycode')." "; }?>" + $( "#slider-range" ).slider( "values", 0 ) +
    " - <?php if($this->session->userdata('currencycode') == 'INR') { echo "Rs. "; } else { echo $this->session->userdata('currencycode')." "; }?>" + $( "#slider-range" ).slider( "values", 1 ) );

	$( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
	$( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
	$( "#s_price" ).val($( "#slider-range" ).slider( "values", 0 ));
	$( "#e_price" ).val($( "#slider-range" ).slider( "values", 1 ));
	
  });
  /*function filterSystem(minPrice, maxPrice) {
$("#computers div.system").hide().filter(function() {
    var price = parseInt($(this).data("price"), 10);
    return price >= minPrice && price <= maxPrice;
}).show();
}*/

 function formSubmitData()
 {
	 $('#filters').submit();
	

 }
</script>
<style>
	#head {
    margin-left: 0px;
    margin-right: 0px;
    }
	.vertical-filters
	{
		float:left;
		width:250px;
		height:100%;
		padding-bottom:30px;
	}
	.brick-show{
	float:left;width:78%;
	}
   
@media screen and (max-width:360px) {
	
	.brick{width:50%;float:left;text-align:center;}
	.brick-show{width:100%;text-align:center;}
	
    .category-header {
	top:28px;
	left:0px;
    position: relative;
    height: 150px;
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
}
.product_fimage.patterns
{
	width:100%;height:100%;position:relative;
    
}
.patterns {
 text-align:center;
    display: none;
    height: 120px;
    left: 0;
    overflow: hidden;
    position: relative;
    top: 0;
    width: 40%;
	
}
.ptn-btn {
    position: relative;
    left: 20%;
    text-align: center;
    top: 100px;
    vertical-align: middle;
	width:100px;
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
	margin:4px;
	padding:2px 5px 2px 5px;
    transition: background-color 1.5s ease 0s;

}


.product_fimage.patterns > img {
   width:100%;
   height:100%;
	position:absolute;
	left:-1px;
	text-align: center;
}

 .category-grid-view{
  padding-top: 0;
  }


.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 200px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
	/*
.brick
			{
			float:left;
			width:150px;
			height:240px;
			}
*/



}
    
    @media screen and (min-width: 361px) and (max-width: 479px) {
    .brick{width:50%;float:left;text-align:center;}
	.brick-show{width:100%;text-align:center;}
        .vertical-filters{position:relative;top:20px;}
    .category-header {
	top:30px;
	left:0px;        
    position: relative;
    height: 170px;
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
}
.product_fimage.patterns
{
	width:100%;height:100%;position:relative;

    
}
.patterns {
 text-align:center;
    display: none;
    height: 160px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 40%;
	
}
.ptn-btn {
    position: relative;
    left: 20%;
    text-align: center;
    top: 100px;
    vertical-align: middle;
	width:100px;
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
	margin:4px;
	padding:2px 5px 2px 5px;
    transition: background-color 1.5s ease 0s;

}

.product_fimage.patterns > img {
   width:100%;
   height:100%;
	position:absolute;
	left:-1px;
	text-align: center;
}

 .category-grid-view{
  padding-top: 0;
  }


.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 200px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
	/*
.brick
			{
			float:left;
			width:150px;
			height:240px;
			}
*/



}

@media screen and (min-width: 480px) and (max-width: 576px) {

	.brick{width:33.3%;float:left;}
	.brick-show{width:100%;text-align:center;}
    .category-header {
	top:12px;
	left:0px;
    position: relative;
    height: 220px;
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
}
.product_fimage.patterns
{
	width:100%;height:100%;position:relative;
}
.patterns {
 text-align:center;
    display: none;
    height: 160px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 40%;
	
}
.ptn-btn {
    position: relative;
    left: 20%;
    text-align: center;
    top: 100px;
    vertical-align: middle;
	width:100px;
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
	margin:4px;
	padding:2px 5px 2px 5px;
    transition: background-color 1.5s ease 0s;

}

.product_fimage.patterns > img {
   width:100%;
   height:100%;
	position:absolute;
	left:-1px;
	text-align: center;
}

 .category-grid-view{
  padding-top: 0;
  }


.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 200px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
/*.brick
			{
			float:left;
			width:150px;
			height:240px;
			}*/




}
	@media screen and (min-width: 577px) and (max-width: 767px) {
    .brick-show{width:100%;text-align:center;}
	.brick{width:33.3%;float:left;}
	 .category-header {
		 
	top:12px;
    position: relative;
    height: 270px;
    background-image: url(../images/banner-img.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
}
.brick-show{width:100%;text-align:center;}

.product_fimage.patterns
{
	width:100%;height:100%;position:relative;
}
.patterns {
 text-align:center;
    display: none;
    height: 120px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 80%;
	
}
.ptn-btn {
    position: relative;
    left: 20%;
    text-align: center;
    top: 100px;
    vertical-align: middle;
	width:100px;
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
	margin:4px;
	padding:2px 5px 2px 5px;
    transition: background-color 1.5s ease 0s;

}

.product_fimage.patterns > img {
   width:100%;
   height:100%;
	position:absolute;
	left:-1px;
	text-align: center;
}

 .category-grid-view{
  padding-top: 0;
  }


.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 240px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
/*.brick
			{
			float:left;
			width:200px;
			height:260px;
			}*/
			


}
@media screen and (min-width: 768px) and (max-width: 1024px) {
    .brick-show{width:78%;text-align:center;} 
	.hide_while
	{
		display:none;
		
	}
	.category-header {
	top:12px;
    position: relative;
	height: 340px;
    background-image: url(../images/banner-img.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
	
		
	}

	

.product_fimage.patterns
{
	width:100%;height:100%;position:relative;

}
.patterns {
 text-align:center;
    display: none;
    height: 120px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 40%;
	
}
.ptn-btn {
    position: relative;
    left: 20%;
    text-align: center;
    top: 100px;
    vertical-align: middle;
	width:100px;
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
	margin:4px;
	padding:2px 5px 2px 5px;
    transition: background-color 1.5s ease 0s;

}

.product_fimage.patterns > img {
   width:100%;
   height:100%;
	position:absolute;
	left: -1px;
	text-align: center;
}

 .category-grid-view{
  padding-top: 0;
  }


.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 250px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
.brick
			{
			float:left;
			width:33.3%;
			}
			
	.vertical-filters
	{
		float:left;
		width:22%;
		height:100%;
		padding-bottom:30px;
	}
	


}
@media screen and (min-width: 1025px) {
	
    .hide_while
	{
		display:none;
		
	}
	.product_fimage.patterns
	{
		width:340px;height:380px;position:relative;
	}
.product_fimage.patterns > img {
    height: 100%;
    width: 100%;
	text-align: center;
	box-shadow:0 -3px 30px rgba(50, 50, 50, 0.7);
}
.ptn-btn {
    left: 0;
    margin: 50% auto;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    vertical-align: middle;
    margin: 50% 12%;
	float:left;
}
 .category-grid-view{
  padding-top: 0;
  }
.patterns {
 text-align:center;
    display: none;
    height: 300px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
	
}
.patterns .ptn-btn a {
    background-color: #e4e4e4;
    border-radius: 6px;
    color: #000;
    font-weight: 600;
    margin: 0 3px;
    padding: 5px 10px;
    transition: background-color 1.5s ease 0s;
}

.product_image {
    height: 100%;
}

.lazy-load {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 380px;
    margin: 0 auto;
    position: unset;
    width: 100%;
}
.brick
			{
			float:left;
			width:33.3%;
			
			}
	.vertical-filters{
	display:block;
	}
}
	
@media screen and (max-width: 767px) {
	
	.vertical-filters
	{
	width:100%;
	}	
	.brick-show{width:100%;text-align:center;}
	.filters
	{
		display:none;
	}
    .category-header {
	    
	
    position: relative;
    
    background-image: url(../images/banner-img.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    z-index: -1;
}

	
#ck-button11
{	
	
	display:none;
}	
#ck-button12
{
	display:none;
}
#ck-button13
{
	display:none;
}
	
	
}

label {
    max-width: 100%;
    margin-bottom: 0px;
    font-weight: normal;
	padding-left:7px;
}


#ck-button .lab{
    overflow:auto;
    float:left;
	font-weight:normal;
}

#ck-button .lab:hover {
    font-weight:bold;
}

#ck-button .lab {
    float:left;
	padding-left:7px;
}


#ck-button .lab input {
    position:relative;
    top:-20px;
}

#ck-button input:checked + span {
    font-weight:bold;
}




#total_items
{
	margin:0px auto;
	padding:0px;
	text-align:center;
	color:#0B173B;
	margin-top:50px;
	border:2px dashed #013ADF;
	font-size:20px;
	width:200px;
	height:50px;
	line-height:50px;
	font-weight:bold;
}
h1
{
margin-top:50px;
color:#0B173B;
}
h1 p
{
	font-size:18px;
	margin:0px;
	text-decoration:underline;
	color:black;
}
#amount
{
	color:#DF7401;
	font-size:18px;
	font-weight:bold;
}
#slider-range
{
	margin:10px 0 10px 0;
	padding:0px;
	text-align:center;
	width:500px;
}  
input[type="submit"]
{
	margin-top:20px;
	width:120px;
	height:50px;
	background:none;
	border:1px solid #0B0B3B;
	color:#0B0B61;
	font-size:20px;
	font-weight:bold;
}

</style>
	<br><br><br><br>

<!-- /header -->
<main class="cd-main-content" id="head">
<?php /*
<div class="breadcrumb-holder">
    <div class="container">
        <ul class="breadcrumb pull-left">
            <li><a href="<?php echo $base_url; ?>">Home</a></li>
            <li><a href="<?php echo $base_url; ?>home/lists/?sub_cat=<?php echo $_GET['sub_cat']; ?>"><?php echo $subcatimage->scname; ?></a></li>
        </ul>
    </div><!--container-->
</div><!--breadcrumb-holder-->
*/ ?>

<?php /* if($subcatimage->banner != '') { ?>
 	<section class="category-header" <?php if($subcatimage->banner != '') {?>  style="background-image: url(<?php echo $http_host; ?>/upload/subcategory/<?php echo $subcatimage->banner; ?>);" <?php } ?> >
		<!-- div class="titalbarmainuss">
			<h1 class="category-title"><?php echo $subcatimage->scname; ?></h1>
 		</div -->
	</section>
<?php } */ ?>
<?php if($subcatimage->banner == '') { ?>
 	<div class="category-header" <?php if($subcatimage->banner == '') {?>  style="background-image: url(<?php echo $http_host; ?>/site/views/images/category-banner.jpg)" <?php } ?> >
		<!-- div class="titalbarmainuss">
			<h1 class="category-title"><?php echo $subcatimage->scname; ?></h1>
 		</div -->
	</div>
<?php } ?>
     <div>
         <div>
        
		    <div>
			<!-- for price slider -->
			 
			<!-- end of price slider -->


				<div style="padding-top:20px;padding-bottom:20px;">
					<div class="vertical-filters">
						<div id="hide_while" class="hide_while" style="text-align:center;color:#3eabb8;border-bottom:1px solid #CBD4D6;" >
						FILTERS
						</div>
					<div id="filters" class="filters">
<form method="get" action="<?php echo $base_url; ?>home/mensshirts/" id="filters" name="filters" style="width:100%; padding-left:30px;">
<input type="hidden" id="s_price" name="s_price" value="<?php if($this->session->userdata('currencycode') == 'INR') { echo "1500"; } else { echo roundUpToAny(( "1500" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?>" />
<input type="hidden" id="e_price" name="e_price" value="<?php if($this->session->userdata('currencycode') == 'INR') { echo "4000"; } else { echo roundUpToAny(( "4000" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); }?>" />
<div style="padding-top:20px;border-bottom:1px solid #CBD4D6;">
		<strong>Price </strong> 	
		<table style="margin:0"><tr><td style="width:100%">
<div id="slider-range" style="width:70%" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" id="handle" ></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div></td><td valign="top" align="left" style="position:relative;right:20%;"><input type="submit" style="background:url('<?php echo $base_url; ?>site/views/img/apply.png') no-repeat;height:25px;width:25px;border:1px solid #E0E0E0" value="" /></td></tr></table>
<p id="amount" style="color:#000000;font-size:14px;font-weight:normal"><?php if($this->session->userdata('currencycode') == 'INR') { ?>Rs <?php echo "1799"; } else { echo $this->session->userdata('currencycode')." ";  echo roundUpToAny(( "1799" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); } ?> - <?php if($this->session->userdata('currencycode') == 'INR') { ?>Rs <?php echo "3599"; } else { echo $this->session->userdata('currencycode')." ";  echo roundUpToAny(( "3599" / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); } ?></p>
<input type="hidden" id="amount1" name="amount1" value="100">
<input type="hidden" id="amount2" name="amount2" value="300">
<br/>
			</div>
		<div style="font-weight:bold;border-bottom:1px solid #CBD4D6;padding:10px 0px" id="clickme11">+ COLOR</div></td>
	
		<div id="ck-button11">

		                <?php
						//echo "<pre>";
						//print_r($color);exit;
							if($allcolour != '' && count($allcolour) > 0) {  
							foreach($allcolour as $colour)
							{
						?>
					    <div><table style="border:0;cellpadding:0;cellspacing:0;border-collapse:collapse;height:20px;margin:0;"><tr><td> <div style="width:18px;height:18px;border:1px solid #C8C8C8;border-curve:1px;background:url('<?php echo $http_host;?>site/views/img/filter-icons/colors/<?php echo $colour->icon;?>')"></div></td><td style="padding-top:5px;">
						<?php if(in_array($colour->id,$color)) { ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" checked="checked" value="<?php echo $colour->id; ?>" name="color[]" onclick="this.form.submit();" /><span><?php echo $colour->colourname; ?></span>
   </label>
</div>
						<?php }else{ ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" value="<?php echo $colour->id; ?>" name="color[]" onclick="this.form.submit();" /><span><?php echo $colour->colourname; ?></span>
   </label>
</div>
						<?php }
						?>
						</td></tr></table></div>
						<?php }
						} ?>
		</div>
		<div style="font-weight:bold;border-bottom:1px solid #CBD4D6;padding:10px 0px" id="clickme12">+ PATTERN</div>
		<div id="ck-button12">		
		
						<?php
							if($alldesign != '' && count($alldesign) > 0) {  
							foreach($alldesign as $design)
							{
						?>
							<div><table style="border:0;cellpadding:0;cellspacing:0;border-collapse:collapse;height:20px;margin:0;"><tr><td> <div style="width:18px;height:18px;border:1px solid #C8C8C8;border-curve:1px;background:url('<?php echo $http_host;?>site/views/img/filter-icons/patterns/<?php echo $design->icon;?>')"></div></td><td style="padding-top:5px;">
							
						<?php if(in_array($design->id,$designid)) { ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" checked="checked" value="<?php echo $design->id; ?>" name="designid[]" onclick="this.form.submit();" /><span><?php echo $design->designname; ?></span>
   </label>
</div>
						<?php }else{ ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" value="<?php echo $design->id; ?>" name="designid[]" onclick="this.form.submit();" /><span><?php echo $design->designname; ?></span>
   </label>
</div>
						<?php }
						?>
							</tr></table></div>
						<?php }} ?>
			</div>
		<div style="font-weight:bold;border-bottom:1px solid #CBD4D6;padding:10px 0px" id="clickme13">+ FABRIC</div>		
		
		<div id="ck-button13">				
						
						<?php
							if($allnewfabric != '' && count($allnewfabric) > 0) {  
							foreach($allnewfabric as $fabric)
							{
						?>
						  <div><table style="border:0;cellpadding:0;cellspacing:0;border-collapse:collapse;height:20px;margin:0;"><tr><td> <div style="width:18px;height:18px;border:1px solid #C8C8C8;border-curve:1px;background:url('<?php echo $http_host;?>site/views/img/filter-icons/fabric/<?php echo $fabric->icon;?>')"></div></td><td style="padding-top:5px;">
						  
						  <?php if(in_array($fabric->id,$fabricid)) { ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" checked="checked" value="<?php echo $fabric->id; ?>" name="fabricid[]" onclick="this.form.submit();" /><span><?php echo $fabric->fname; ?></span>
   </label>
</div>
						<?php }else{ ?>
<div id="ck-button" style="padding-left:10px;">
   <label class="lab">
      <input type="checkbox" style="display:none;" value="<?php echo $fabric->id; ?>" name="fabricid[]" onclick="this.form.submit();" /><span><?php echo $fabric->fname; ?></span>
   </label>
</div>
						<?php }
						?>
						  </td></tr></table></div>
						<?php }} ?>
	</div>
	</form>
	</div>
		</div>
<div class="brick-show" style="">
			 <?php
			if($allproducts != '' && count($allproducts) > 0) {  
			foreach($allproducts as $product)
			{
				// $lowestpricestyle = $this->home_model->minpricestyleproduct($product->id);
 			?>

			<div class="brick" style="">
			
				<div class="lazy-load">
				<img class="product_image" src="<?php echo $http_host;?>/upload/products/large/<?php echo $images[$product->id][0]; ?>" name="Image21<?php echo $product->id; ?>" border="0" style="width:330px;"></a>			
				<div class="product_fimage patterns">
					<img   src="<?php echo $http_host;?>upload/products/large/<?php echo $images[$product->id][1]; ?>" name="Image21<?php echo $product->id; ?>" border="0">
					
					<div class="bt">
						<div class="ptn-btn">
							<a href="<?php echo $base_url; ?>home/details/<?php echo $product->id; ?>" class="details">DETAILS</a>
							<a href="<?php echo $base_url; ?>3dshirt/index.php?fab_id=STY<?php echo $product->id; ?>" class="details">CUSTOMIZE</a>					
						</div>
					</div>
					
				</div>
				
				
				</a>
				</div>
				
				<h4 class="feature-title1" style="text-align:center;color:#3eabb8;font-size:16px;"><b><?php echo $product->pname; ?></b></h4>
				<h4 class="feature-title1" style="text-align:center;font-size:16px;"> 
				
				<?php if($this->session->userdata('currencycode') == 'INR') { ?>
				  Rs <?php echo $product->price; } else { 
									echo $this->session->userdata('currencycode')." "; 
									echo roundUpToAny(( $product->price / ( $this->session->userdata('currencyvalue') * ($this->session->userdata('multiplier')/100)) )); 
								}
				?>  
 				</h4>
			</div>
			<?php }}else{ echo "No results found"; } ?>
		   <!--row-->
		   </div>
		    </div><!--container-->
	 </div>  </div><!--category-grid-view-->
    </div><!--category-content-->
  
</main>

<?php include ('includes/footer.php'); ?>
<!-- /footer -->        <!-- Modal -->
<?php //include ('includes/cartdetail.php'); ?>
</body>
</html>