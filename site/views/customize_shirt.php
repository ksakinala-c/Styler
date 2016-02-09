


 <?php
 
  include ('includes/header.php');
 $base_url_views = $this->config->item('base_url_views');
 
 
  if(isset($_GET['spat_id']['tpat_id']))
 {
	$spat=$_GET['spat_id'];
	$tpat=$_GET['tpat_id'];
 }
 else
 {
	$spat=200;
	$tpat=201;
 }
 ?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stylior 3D customize</title>
  <meta charset="utf-8">
  
      <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base_url_views; ?>/css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
	
	
	<script src="<?php echo $base_url_views; ?>/js1/jquery-1.12.0.min.js"></script>
	<script src="http://code.jquery.com/jquery.min.js"></script>

 <script src="<?php echo $base_url_views; ?>/js1/custom1.js"></script>
	 <!-- jQuery -->
    <script src="<?php echo $base_url_views; ?>/js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
   
    
   <link rel="stylesheet" href="<?php echo $base_url_views; ?>/css1/bootstrap.css" />
   <link rel="stylesheet" href="<?php echo $base_url_views; ?>/css1/custom.css" /> 
   
   
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="<?php echo $base_url_views; ?>/js1/main.js"></script>

<link rel="stylesheet" href="<?php echo $base_url_views; ?>/css1/style.css" >

</head>
<body>
<div id="header"><img src="http://1373411880.rsc.cdn77.org/site/views/newheader/img/foot-logo-img.png"></div>

<div id="top_line"></div>

<div id="customdiv" style="float:left; width:66%" >
<div class="row" style="padding-left:3%;">

<div class="btn-group" id="myCarousel1">

 <button type="button" class="btn btn-primary uppercase" id="customize_button"><b> &nbsp;&nbsp; Start Customize &nbsp;&nbsp;</b> &nbsp;
 <span>
<i class="fa fa-caret-right"></i>
</span>
 </button>
 <button type="button" id="ho2" class="btn btn-primary uppercase " id="customize_button"><b> &nbsp;&nbsp;shirts &nbsp;&nbsp;</b> &nbsp;
 
 </button>
  <button type="button" id="ho3" class="btn btn-primary uppercase" id="customize_button"><b> &nbsp;&nbsp;Trousers &nbsp;&nbsp;</b> &nbsp;
 
 </button>
   <button type="button" id="ho4" class="btn btn-primary uppercase" id="customize_button"><b> &nbsp;&nbsp;Waist Coat &nbsp;&nbsp;</b> &nbsp;
 
 </button>
 
    <button type="button" id="ho5" class="btn btn-primary uppercase" id="customize_button"><b>&nbsp; &nbsp;Blazer &nbsp;&nbsp;</b> &nbsp;
 
 </button>
</div>


   <div id="myCarousel12" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" style="  padding-top: 0%;
    padding-bottom: 0;" >
    <!-- Indicators -->
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" style="padding-left:18%;">
 <button type="button" id="" class="btn btn-primary uppercase fabric1" id="customize_button"><b> &nbsp;&nbsp;shirts &nbsp;&nbsp;</b> &nbsp;
 
 </button>
  
  </div>

	
      <div class="item"  style="padding-left:18%;">
  <button type="button" id="ho3" class="btn btn-primary uppercase fabric2" id="customize_button"><b> &nbsp;&nbsp;Trousers &nbsp;&nbsp;</b> &nbsp;
 
 </button>

  </div>
    
     

      <div class="item"  style="padding-left:18%;">
 <button type="button" id="ho4" class="btn btn-primary uppercase" id="customize_button"><b> &nbsp;&nbsp;Waist Coat &nbsp;&nbsp;</b> &nbsp;
 
 </button>
  </div>
  
    <div class="item"  style="padding-left:18% ;">
     <button type="button" id="ho5" class="btn btn-primary uppercase" id="customize_button"><b>&nbsp; &nbsp;Blazer &nbsp;&nbsp;</b> &nbsp;
 
 </button>
  </div>
  
  
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
  
    </div>
 </div>
 
  </div>









</div>
<div class="container-fluid">
   <script>
  
 $(window).resize( function() {

/*window.location.href = window.location.href;*/
	 var w = window.innerWidth;
    var h = window.innerHeight;

   var divslider011101 = document.getElementById("mytrouser");
		  
		 var divslider11001 = document.getElementById("trousercontent");
		 
		   var divslider = document.getElementById("myCarouse");
		  
		   var divslider01110 = document.getElementById("myCarousel12");
		  
		 var divslider1100 = document.getElementById("myCarousel1");
		 
		  
		 var divslider0111 = document.getElementById("myCarousel122");
		  
		 var divslider110 = document.getElementById("shirtcontent");
		  
    if (w<=420) {
//alert('hii');
	divslider11001.style.display = "none";	
		divslider011101.style.display = "block";
divslider.style.display = "none";

			divslider1100.style.display = "none";	
		divslider01110.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "none";
		
		
    }
	else if (w<=780) {
//alert('hii');
	divslider11001.style.display = "none";	
		divslider011101.style.display = "none";


			divslider1100.style.display = "none";	
		divslider.style.display = "block";
		
		divslider01110.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "none";
		
		
    }
	
	
	
    else {
		
		divslider.style.display = "none";
        divslider11001.style.display = "block";
		divslider011101.style.display = "none";
		
	    divslider1100.style.display = "block";
		divslider01110.style.display = "none";
		
	    divslider110.style.display = "block";
		divslider0111.style.display = "none";
		 
	
	}
     

});

 window.onload = function() {

  /*window.location.href = window.location.href;*/
		 var w = window.innerWidth;
    var h = window.innerHeight;

   var divslider011101 = document.getElementById("mytrouser");
		  
		 var divslider11001 = document.getElementById("trousercontent");
		 
		   var divslider = document.getElementById("myCarouse");
		  
		   var divslider01110 = document.getElementById("myCarousel12");
		  
		 var divslider1100 = document.getElementById("myCarousel1");
		 
		  
		 var divslider0111 = document.getElementById("myCarousel122");
		  
		 var divslider110 = document.getElementById("shirtcontent");
		  
    if (w<=420) {
//alert('hii');
	divslider11001.style.display = "none";	
		divslider011101.style.display = "block";
divslider.style.display = "none";

			divslider1100.style.display = "none";	
		divslider01110.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "none";
		
		
    }
	else if (w<=780) {
//alert('hii');
	divslider11001.style.display = "none";	
		divslider011101.style.display = "none";


			divslider1100.style.display = "none";	
		divslider.style.display = "block";
		
		divslider01110.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "none";
		
		
    }
	
	
	
    else {
		
		divslider.style.display = "none";
        divslider11001.style.display = "block";
		divslider011101.style.display = "none";
		
	    divslider1100.style.display = "block";
		divslider01110.style.display = "none";
		
	    divslider110.style.display = "block";
		divslider0111.style.display = "none";
		 
	
	}
     }
	 
	 $(".fabric1").mouseenter(function(){ 

//alert('hii');
$("#myCarousel122").show();
$("#mytrouser").hide();

})

 $(".fabric2").mouseenter(function(){ 

//alert('hii');
$("#myCarousel122").hide();

$("#mytrouser").show();
})
	 
  </script>
  <div class="row">
    
	 <ul class="list-inline hid">
	     <li class="im2" id="img1"><img src="<?php echo $base_url_views; ?>/images1/shirt.png" height="170" width="140" alt="" /></li>
		 <li class="im2" id="img2" > <img src="<?php echo $base_url_views; ?>/images1/pant.png" height="170" width="140" alt="" class="im3"/></li>
		   <li class="im2" id="img3"  > <img src="<?php echo $base_url_views; ?>/images1/waist.png" height="170" width="140" alt="" class="im4"/></li>
		    <li class="im2" id="img4"><img src="<?php echo $base_url_views; ?>/images1/suit.png" height="170" width="140" alt="" class="im5"/></li>
		 </ul>
		 
	
  </div>
  
  
 
  
</div>


<div id="shirtcontent" style="display:none; padding-left:2%;"> 
  <div id="shirtcontent1" style="display:;" >
	 
  <button type="button" class="btn btn-default fabric"><a href="#">FABRIC </a></button>
  <button type="button" class="btn btn-default sleeve">SLEEVE</button>
  <button type="button" class="btn btn-default collar">COLLAR</button>
  <button type="button" class="btn btn-default cuffs">CUFF</button>
  <button type="button" class="btn btn-default button">BUTTON</button>
  <button type="button" class="btn btn-default pocket">POCKET</button>
  <button type="button" class="btn btn-default placket">PLACKET</button>
  <button type="button" class="btn btn-default back">BACK</button>
  <button type="button" class="btn btn-default bottom">BOTTOM</button>
  <button type="button" class="btn btn-default signature">SIGNATURE</button>
  <button type="button" class="btn btn-default outers">OUTER</button>
  <button type="button" class="btn btn-default inner">INNER</button>
 
 </div>
 
 
 
 
 
 
  </div>
  
     <div id="myCarousel122" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" style="  padding-top: 0%;
    padding-bottom: 0;" >
    <!-- Indicators -->
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" style="padding-left:17%;">
	  <button type="button" class="btn btn-default fabric1"><a href="#">FABRIC </a></button>
  <button type="button" class="btn btn-default sleeve">SLEEVE</button>
  </div>

	
      <div class="item"  style="padding-left:17%;">
 <button type="button" class="btn btn-default collar">COLLAR</button>
  <button type="button" class="btn btn-default cuffs">CUFF</button>
  

  </div>
    
     

      <div class="item"  style="padding-left:17%;">
 <button type="button" class="btn btn-default button">BUTTON</button>
  <button type="button" class="btn btn-default pocket">POCKET</button>
  </div>
  
    <div class="item"  style="padding-left:17% ;">
  <button type="button" class="btn btn-default placket">PLACKET</button>
  <button type="button" class="btn btn-default back">BACK</button>
  </div>
  
  
    <div class="item"  style="padding-left:17% ;">
   <button type="button" class="btn btn-default bottom">BOTTOM</button>
  <button type="button" class="btn btn-default signature">SIGNATURE</button>
  </div>
  
 <div class="item"  style="padding-left:17% ;">
  <button type="button" class="btn btn-default outers">OUTER</button>
  <button type="button" class="btn btn-default inner">INNER</button>
  </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
  
    </div>
 </div>
 
  </div>
 

<div id="myCarouse" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" style="  padding-top: 0%;
    padding-bottom: 0;" >
    <!-- Indicators -->
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" style="padding-left:17%;">
	  <button type="button" class="btn btn-default fabric1"><a href="#">FABRIC </a></button>
  <button type="button" class="btn btn-default sleeve">SLEEVE</button>
   <button type="button" class="btn btn-default collar">COLLAR</button>
  </div>

	
      <div class="item"  style="padding-left:17%;">
 <button type="button" class="btn btn-default button">BUTTON</button>
  <button type="button" class="btn btn-default pocket">POCKET</button>
  <button type="button" class="btn btn-default cuffs">CUFF</button>
  

  </div>
    
     

  
    <div class="item"  style="padding-left:17% ;">
  <button type="button" class="btn btn-default placket">PLACKET</button>
  <button type="button" class="btn btn-default back">BACK</button>
    <button type="button" class="btn btn-default bottom">BOTTOM</button>
  </div>
  
  
 
  
 <div class="item"  style="padding-left:17% ;">
  <button type="button" class="btn btn-default signature">SIGNATURE</button>
  <button type="button" class="btn btn-default outers">OUTER</button>
  <button type="button" class="btn btn-default inner">INNER</button>
  </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
  
    </div>
 </div>
 
  </div>
  
  
  
  
     <div id="trousercontent" style="display:none;  padding-left:2%;"> 
 
	  <div class="btn-group">
  <button type="button" class="btn btn-default pantfabric"><a href="#">FABRIC </a></div></button>
  <button type="button" class="btn btn-default belt">BELT</button>
  <button type="button" class="btn btn-default frontpleat">FRONT PLEATS</button>
  <button type="button" class="btn btn-default sidepocket">SIDE POCKET</button>
  <button type="button" class="btn btn-default sidebutton">SIDE BUTTON</button>
  <button type="button" class="btn btn-default backpocket">BACK POCKET</button>
  <button type="button" class="btn btn-default backpleakt">BACK PLEATS</button>

 
  </div>
  
      <div id="mytrouser" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" style="  padding-top: 0%;
    padding-bottom: 0;" >
    <!-- Indicators -->
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	
      <div class="item active" style="padding-left:17%;">
	<button type="button" class="btn btn-default pantfabric"><a href="#">FABRIC </a></button>
  <button type="button" class="btn btn-default belt">BELT</button>
  </div>

	
      <div class="item"  style="padding-left:17%;">
 <button type="button" class="btn btn-default frontpleat">FRONT PLEATS</button>

  

  </div>
    
         <div class="item"  style="padding-left:17%;">

  <button type="button" class="btn btn-default sidepocket">SIDE POCKET</button>
  

  </div>

      <div class="item"  style="padding-left:17%;">

 <button type="button" class="btn btn-default sidebutton">SIDE BUTTON</button>
  

  </div>
  
      <div class="item"  style="padding-left:17%;">

  <button type="button" class="btn btn-default backpocket">BACK POCKET</button>
  </div>
  
    <div class="item"  style="padding-left:17% ;">
  <button type="button" class="btn btn-default backpleakt">BACK PLEATS</button>
  </div>
  
  
  
 
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
  
    </div>
 </div>
 
  
   </div>
  
	
	   
	    
		<img src=" http://1373411880.rsc.cdn77.org/3dshirt/images/tick.png" id="stick" style="display:none"/>
	   
	   <hr / style="width:70%">
	   <div id="shirt">
	   <div class="row hiddenfabric" width="90%"> 
	   
	   <div class="col-md-2 col-sm-3 ">  
	   
	 
	   
	   
	   
	   
	   <button  id="shirt1" onclick="upfab(this.value);add()"  value="200"  title="white Stripes" data-toggle="tooltip" data-placement="top" class="icon-size tick"  style="background-image:url('shirt/fab/white.jpg');width:80px;height:80px;"></button>
	   
	   	 
	 
	   <span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>
	   
	   </div>
	   <div class="col-md-2"> 
	    <button  id="shirt2" onclick="upfab(this.value);add()"  value="201"  title="white Stripes" data-toggle="tooltip" data-placement="top" class="icon-size tick"  style="background-image:url('shirt/fab/white.jpg');width:100px;height:100px;"></button>
 
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					
Bluetex Blue					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1999</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>

	   </div>
	   <div class="col-md-2">
	    <button  id="shirt3" onclick="upfab(this.value);add()"  value="202"  title="Stripes" data-toggle="tooltip" data-placement="top" class="icon-size"  style="background-image:url('shirt/fab/strips.jpg');width:100px;height:100px;"></button>

<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div>
					<script>
					
					</script>
	   <div class="col-md-2"><div class="img4 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span> </div>
	   <div class="col-md-2"><div class="img5 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span> </div>
	   <div class="col-md-2"><div class="img6 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span> </div>
	   <div class="col-md-2"> <div class="img7 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span></div>
	   <div class="col-md-2">
<div class="img8 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img9 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img10 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img11 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img12 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img13 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> <div class="col-md-2">
<div class="img14 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div> 
					
					<div class="col-md-2">
<div class="img15 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div><div class="col-md-2">
<div class="img16 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div><div class="col-md-2">
<div class="img17 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div><div class="col-md-2">
<div class="img18 tick"> </div>
<span style="margin-top:100px;font-family:Didact Gothic;color:#5B5B5B;font-size:12px;height:45px;">
					<table border="0" style="line-height:13px;width:100px;top:-3px;position:relative;">
					<tbody><tr><td colspan="2" style="height:27px;width:100px;">
					<a rel="gallery" onmouseover="this.title='';" class="pirobox_gall first item" title="" id="sencher" href="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015001/700X400.jpg" rev="0">
					<div style="background: url(http://1373411880.rsc.cdn77.org/3dshirt/images/icons/zoom_fabric.png) no-repeat;height:17px;width:100px;"></div>
					</a>
					</td></tr>
					<tr><td style="text-align:left;"><input type="hidden" class="fab_name_val" id="STY2015001" value="Seaside Pavillion">
					Ozo Oxford					
					</td><td style="text-align:right;vertical-align:top;"><b style="font-size:10px;">INR</b> <b style="color:#000000">1799</b><input type="hidden" name="cur_de" id="cur_de" value="1799"></td></tr>
					
					</tbody></table></span>	   </div>
	   
	   </div>  <!--- <div class="row hiddenfabric"> -->
	   
	  <div class="sleevescontent" width="90%"> 
	  
	    <div class="row">  
<div class="col-md-5"  id="fullhands" onclick="upjson(this.id)"   title="Full hands" data-toggle="tooltip" data-placement="top">  

		<div class="slvimg tick"> 
		
		
		
		</div></div>		
	<div class="col-md-5"> 	<div class="slvimg1 tick" id="halfhands" onclick="upjson(this.id)"   title="Half hands" data-toggle="tooltip" data-placement="top"> 
		
		
		
		</div></div></div>
	  
	  
	  
	  </div> 
	   
	  
	  
	  <div class="collarcontent" width="90%"> 
	  <div class="row"> 
	    <div class="col-md-9">

<div  id="collar5" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_regular.png$images/<?php echo $spat;?>/shirt/back/collar_regular.png$regular" title="regular" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/regular.png');width:100px;height:100px; float:left; padding:1% auto; margin:1%;"></div>
 <div  id="collar1" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_big_round.png$images/<?php echo $spat;?>/shirt/back/collar_big_round.png$Biground" title="Big round" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/big_round.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></"></div>
    <div  id="collar2" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_cut_away.png$images/<?php echo $spat;?>/shirt/back/collar_cut_away.png$CutWay" title="Cut Way" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/cut_way.png');width:100px;height:100px; float:left; padding:1% auto; margin:1%;"></div>
     <div  id="collar3" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_dual_button.png$images/<?php echo $spat;?>/shirt/back/collar_dual_button.png$Double button" title="Double button" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/dual_buttons.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></div>
     <div  id="collar4" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_low_semi_wide.png$images/<?php echo $spat;?>/shirt/back/collar_low_semi_wide.png$low semi wide" title="low semi wide" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/low_semi_spread.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></div>
   <div  id="collar6" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_short_button_down.png$images/<?php echo $spat;?>/shirt/back/collar_short_button_down.png$shortbuttondown" title="short button down" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/button_down.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></div>
   <div  id="collar7" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_stand.png$images/<?php echo $spat;?>/shirt/back/collar_stand.png$stand" title="stand" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/stand.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></div>
   <div  id="collar8" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_wide_spread.png$images/<?php echo $spat;?>/shirt/back/collar_wide_spread.png$widespread" title="wide spread" data-toggle="tooltip" data-placement="top" class="icon-size fcollar tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/collar/collar_wide_spread.png');width:100px;height:100px;  float:left; padding:1% auto; margin:1%;"></div>
   
	
		
		</div> 
	 
	 
		</div> 
		 
		
	  </div>
	  
    
<div class="cuffscontent" width="55%"  > 
	  <div class="row"> 
	  	 
		  	 <div  id="cuff" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_angle_slim.png$images/<?php echo $spat;?>/shirt/back/cuffs_angle_slim.png$angle" title="angle" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/angle.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
     <div  id="cuff1" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_big_angle_slim.png$images/<?php echo $spat;?>/shirt/back/cuffs_big_angle_slim.png$Bigangle" title="Big angle" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/big_angle.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
     <div  id="cuff2" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_big_round_slim.png$images/<?php echo $spat;?>/shirt/back/cuffs_big_round_slim.png$Biground" title="Big round" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/big_round.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
      
	  <div  id="cuff3" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_french.png$images/<?php echo $spat;?>/shirt/back/cuffs_french.png$French" title="french" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/french.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
     <div  id="cuff4" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_round_slim.png$images/<?php echo $spat;?>/shirt/back/cuffs_round_slim.png$round" title="round" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/round.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
     <div  id="cuff5" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_square_slim.png$images/<?php echo $spat;?>/shirt/back/cuffs_square_slim.png$square" title="square" data-toggle="tooltip" data-placement="top" class="icon-size fcuffs tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/square.jpg');width:200px;height:200px; float:left; padding:1% auto;"></div>
  
		
		</div> 
	    
		</div> 
		 
		 
	    
	 
	 <div class="buttonscontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:4%">
	   
	   
	   
	   <button  id="btn1" value="<?php echo $base_url_views; ?>/buttons/01/front/buttons_base_slim.png;buttons/01/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/01.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn2" value="<?php echo $base_url_views; ?>/buttons/02/front/buttons_base_slim.png;buttons/02/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/02.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn3" value="<?php echo $base_url_views; ?>/buttons/03/front/buttons_base_slim.png;buttons/03/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/03.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
      <button  id="btn4" value="<?php echo $base_url_views; ?>/buttons/04/front/buttons_base_slim.png;buttons/04/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/04.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
	   <button  id="btn5" value="<?php echo $base_url_views; ?>/buttons/05/front/buttons_base_slim.png;buttons/05/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/05.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn6" value="<?php echo $base_url_views; ?>/buttons/06/front/buttons_base_slim.png;buttons/06/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/06.png');width:100px;height:100px; float:left; padding:1% auto;"></button>    
	   <button  id="btn7" value="<?php echo $base_url_views; ?>/buttons/white/front/buttons_base_slim.png;buttons/white/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/white.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
       <button  id="btn8" value="<?php echo $base_url_views; ?>/buttons/08/front/buttons_base_slim.png;buttons/08/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/08.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
	   <button  id="btn9" value="<?php echo $base_url_views; ?>/buttons/09/front/buttons_base_slim.png;buttons/09/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/09.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
       <button  id="btn10" value="<?php echo $base_url_views; ?>/buttons/10/front/buttons_base_slim.png;buttons/10/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/10.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
      
	  <button  id="btn11" value="<?php echo $base_url_views; ?>/buttons/11/front/buttons_base_slim.png;buttons/11/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/11.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn12" value="<?php echo $base_url_views; ?>/buttons/12/front/buttons_base_slim.png;buttons/12/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/12.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn13" value="<?php echo $base_url_views; ?>/buttons/13/front/buttons_base_slim.png;buttons/13/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/13.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
      <button  id="btn14" value="<?php echo $base_url_views; ?>/buttons/14/front/buttons_base_slim.png;buttons/14/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/14.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
	   <button  id="btn15" value="<?php echo $base_url_views; ?>/buttons/15/front/buttons_base_slim.png;buttons/15/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/15.png');width:100px;height:100px; float:left; padding:1% auto;"></button>
       <button  id="btn16" value="<?php echo $base_url_views; ?>/buttons/16/front/buttons_base_slim.png;buttons/16/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/16.png');width:100px;height:100px; float:left; padding:1% auto;"></button>    
	   <button  id="btn17" value="<?php echo $base_url_views; ?>/buttons/17/front/buttons_base_slim.png;buttons/17/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/17.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
       <button  id="btn18" value="<?php echo $base_url_views; ?>/buttons/18/front/buttons_base_slim.png;buttons/18/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/18.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
	   <button  id="btn19" value="<?php echo $base_url_views; ?>/buttons/19/front/buttons_base_slim.png;buttons/19/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/19.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
       <button  id="btn20" value="<?php echo $base_url_views; ?>/buttons/20/front/buttons_base_slim.png;buttons/20/front/buttons_collar_one_button.png" title="shirtbutton" data-toggle="tooltip" data-placement="top" class="icon-size shirtbtn tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/20.png');width:100px;height:100px; float:left; padding:1% auto;"></button>  
      
	
		</div> 
		
	    </div>
		</div> 
		 
		 
	  
	   <div class="pocketcontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	  		
			 <div  id="shirtpocket" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/pocket_left_slim.png" title="Side button" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/pocket.png');width:220px;height:150px; float:left; padding:1% auto;"></div> 
         <div  id="shirtpocket1" value="No" title="No side button" data-toggle="tooltip" data-placement="top" class="icon-size  tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/no_pocket.png');width:220px;height:150px; float:left; padding:1% auto;"></div> 
       
		
	    </div>
		</div> 
		 
		 
	  
	  </div>
	  
	   <div class="placketcontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
		
  <div class="col-md-9" > 

	<div class="plckt tick" style="float:left; margin:7% 3% 3% 3%;" id="noshirtplacket"  onclick="upjson(this.id)">
		
		
		</div> 
		
     <div  id="shirtplacket" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box.png" title="Box placket" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket2.png');width:60px;height:100px; float:left; padding:1% auto; margin:2%;"></div>  
     <div  id="shirtplacket1" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal.png" title="Concealed Placket " data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket4.png');width:60px;height:100px; float:left; padding:1% auto;  margin:2%;"></div> 
	  <div  id="shirtplacket2" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french.png" title="French placket" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket3.png');width:60px;height:100px; float:left; padding:1% auto;  margin:2%;"></div> 
	   <div  id="shirtplacket3" value="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow.png" title="Narrow placket" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket2.png');width:60px;height:100px; float:left; padding:1% auto;  margin:2%;"></div> 
     
		
		
		
		

 </div>
		
	   
	  </div>
	  		
		</div> 
		 		 
	  </div>
	  
	  
	  
	 <div class="backcontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
		
  <div class="col-md-9" > 

    
  
	<div class="back11 tick" onclick="upjson(this.id)" id="nobackstyle" style="float:left;  margin:8% 3% 3% 3%;"> 
		
		
		</div> 
     
	   
 
 <button  id="backside" value="" title="side pleat" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/side.png');width:100px;height:100px;"></button>   
     
	 <button  id="backbox" value="" title="Box pleat" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/box.png');width:100px;height:100px;"></button>  

	 <button  id="backdart" value="" title="Dart pleat" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/dart.png');width:100px;height:100px;"></button>  
        
      
  
    
  




		</div>
	   
	  </div>
	  		
		</div> 
		 		 
	  </div>
	  
	    
	  	 <div class="bottamcontent" style="display:none; width:80%;"> 
	  <div class="row"> 
	  <div style="padding:2%">
		


  <div class="col-md-9" > 
<div class="btm tick"  id="nobottamstyle" style="float:left; margin:8% 3% 3% 3%;"> 
		
		
		</div> 
  
  	   	    <button  id="midbottamstyle" value="" title="Mid tail " data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM1.png');width:100px;height:100px;"></button> 
       <button  id="highbottamstyle" value="" title="Haigh tail " data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM3.png');width:100px;height:100px;"></button>    
    <button  id="strightbottamstyle" value="" title="Staright tail" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM2.png');width:100px;height:100px;"></button>    
   
  
  
	



		</div>




	   
	  </div>
	  		
		</div> 
		 		 
	  </div>

	  
	  
	  	 <div class="signaturecontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:2%">
		

 <div class="col-md-9" > 

	<div class="sign tick" style="float:left; margin:3% ;" id="nonesignature"> 
		
		
		</div> 
			<div class="sign1 tick" style="float:left; margin:3% ;" id="intialsignature"> 
		
		
		</div> 
			<div class="sign2 tick" style="float:left; margin:3% ;"  id="namesignature"> 
		
		
		</div>
	
		



		</div>


	  
	  </div>
	  		
		</div> 
		
		  <div class="row"> 
	  <div style="padding:3%; display:none;" id="intial">
		
  <div class="col-md-9 " > 


			<div class="intialfont tick1" style="float:left;"> 
		
		
		</div> 
			<div class="intialfont1 tick1" style="float:left;"> 
		
		
		</div>
	<div class="intialfont2 tick1" style="float:left;"> 
		
		
		</div>

<div class="intialfont3 tick1" style="float:left;"> 
		
		
		</div>

<div>
 <div class="col-md-9 " > 
		
			<div class="intialclr tick11" style="float:left;"> 
		
		
		</div> 
			<div class="intialclr1 tick11" style="float:left;"> 
		
		
		</div>
	<div class="intialclr2 tick11" style="float:left;"> 
		
		
		</div>

<div class="intialclr3 tick11" style="float:left;"> 
		
		
		</div>


<div class="intialclr4 tick11" style="float:left;"> 
		
		
		</div>

<div class="intialclr5 tick11" style="float:left;"> 
		
		
		</div>
<div class="intialclr6 tick11" style="float:left;"> 
		
		
		</div>
<div class="intialclr7 tick11" style="float:left;"> 
		
		
		</div>
</div>
	
<div>		 
<input  type="text" name="monogram" maxlength="3" style="margin-top: 3px; height: 40px; line-height: 40px; font-weight: 400; font-size: 20px; width:150px;padding-left:5px; margin-left: 10px; color:#000;" placeholder="Enter monogram text here"  onblur="this.placeholder = 'Enter monogram text here'" required> &nbsp; ( Max 3 letters)
		
<h3>Monogram Location<h3>



<div class="intialmngrm tick12" style="float:left;"> 
		
		
		</div>


<div class="intialmngrm1 tick12" style="float:left;"> 
		
		
		</div>

<div class="intialmngrm2 tick12" style="float:left;"> 
		
		
		</div>
<div class="intialmngrm3 tick12" style="float:left;"> 
		
		
		</div>
<div class="intialmngrm4 tick12" style="float:left;"> 
		
		
		</div>


</div>
	 
		</div>
	   
	  </div> </div>
	  
	  		<div style="padding:3%; display:none;" id="name">
		
		
		<div class="col-md-9 " > 


			<div class="intialfont tick1" style="float:left;"> 
		
		
		</div> 
			<div class="intialfont1 tick1" style="float:left;"> 
		
		
		</div>
	<div class="intialfont2 tick1" style="float:left;"> 
		
		
		</div>

<div class="intialfont3 tick1" style="float:left;"> 
		
		
		</div>

<div>
 <div class="col-md-9 " > 
		
			<div class="intialclr tick11" style="float:left;"> 
		
		
		</div> 
			<div class="intialclr1 tick11" style="float:left;"> 
		
		
		</div>
	<div class="intialclr2 tick11" style="float:left;"> 
		
		
		</div>

<div class="intialclr3 tick11" style="float:left;"> 
		
		
		</div>


<div class="intialclr4 tick11" style="float:left;"> 
		
		
		</div>

<div class="intialclr5 tick11" style="float:left;"> 
		
		
		</div>
<div class="intialclr6 tick11" style="float:left;"> 
		
		
		</div>
<div class="intialclr7 tick11" style="float:left;"> 
		
		
		</div>
</div>
	
<div>		 
<input  type="text" name="monogram" maxlength="10" style="margin-top: 3px; height: 40px; line-height: 40px; font-weight: 400; font-size: 20px; width:150px;padding-left:5px; margin-left: 10px; color:#000;" placeholder="Enter monogram text here"  onblur="this.placeholder = 'Enter monogram text here'" required> &nbsp; ( Max 10 letters)
		
<h3>Monogram Location<h3>



<div class="namemngrm tick12" style="float:left;"> 
		
		
		</div>


<div class="namemngrm1 tick12" style="float:left;"> 
		
		
		</div>


		
		
		</div>


</div>
	 
		</div>
	   
	  </div>
		
		
	   
	  </div>
		</div>
		
		

		 
	

	  
	  
	   <div class="outercontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	  
	   <div class="col-md-9" > 

	   
	   
	   
	       <button  id="noneall" value="" title="No style" data-toggle="tooltip" data-placement="top" class="icon-size tick " onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/no_pocket.png');width:220px;height:140px; float:left; display:inline-block;"></button>  
	 <button  id="collarandcuff" value="" title="collar & cuffs" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/collar_cuff.png');width:220px;height:140px;  float:left; display:inline-block;"></button>  
	 
       <button  id="collaronly" value="" title="collar" data-toggle="tooltip" data-placement="top" class="icon-size tick" onclick="upjson(this.id)" style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/icons/collar.png');width:220px;height:140px;  float:left; display:inline-block;"></button>  
	
           
		</div>
	  
	
	
		 
	    </div>
		</div>

		  <div class="row"> 
		  
		  
	  <div style="padding:3%; display:none;" id="outerdiv">
		
  <div class="col-md-9" > 
  
  
  	<button  id="outerfabric1" value="STY2015111" title="collar tick11" data-toggle="tooltip" data-placement="top" class="icon-size outerfab"  style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg');width:60px;height:60px;"></button>  
    <button  id="outerfabric2" value="STY2015112" title="collar tick11" data-toggle="tooltip" data-placement="top" class="icon-size outerfab"  style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg');width:60px;height:60px;"></button>  	
	
  
  		<div class="outerfabric1 tick11" style="float:left; margin: 2%;"> 
		
		
		</div> 
			<div class="outerfabric2 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>
	<!--<div class="outerfab3 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>

<div class="outerfab4 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>


<div class="outerfab5 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>

<div class="outerfab6 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>
<div class="outerfab7 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>
<div class="outerfab8 tick11" style="float:left; margin: 2%;"> 
		
		
		</div>-->
  
  
  
	
		</div>
	   
	  </div>
	  
	  		<div style="padding:3%; display:none;" id="innerdiv1">
		
		
  <div class="col-md-9" > 
  
  	<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
  
  
  
  		<!---<div class="outerfab1 tick12" style="float:left; margin: 2%;"> 
		
		
		</div> 
			<div class="outerfab2 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>
	<div class="outerfab3 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>

<div class="outerfab4 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>


<div class="outerfab5 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>

<div class="outerfab6 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>
<div class="outerfab7 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>
<div class="outerfab8 tick12" style="float:left; margin: 2%;"> 
		
		
		</div>-->
  
  
  
	
		</div>
		
		
	   
	  </div>
		</div>
		 
		 
	  
	  </div>

	 
		  
	   <div class="innercontent" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	   <div class="col-md-6" > 
	  
	  
	  	   

	 
	  
	  	<div class="innerimg tick" style="float:left; margin:3% ;" id="inneryes" onclick="upjson(this.id)"> 
		
		
		</div> 
			<div class="innerimg1 tick" style="float:left; margin:3% ;" id="innerno" onclick="upjson(this.id)"> 
		
		
		</div> 
	  
	  </div>
	 

	   <div class="col-md-7" > 
	  
	  	<div class="innerimg2 tick13" style="float:left; margin:3% ;" id="innercollar" onclick="upjson(this.id)"> 
		
		
		</div> 
			<div class="innerimg3 tick13" style="float:left; margin:3% ;" id="innercuffs" onclick="upjson(this.id)"> 
		
		
		</div> 
	  	<div class="innerimg3 tick13" style="float:left; margin:3% ;" id="innerplacket" onclick="upjson(this.id)"> 
		
		
		</div> 
	  </div>
	
		
	    </div>
		</div>

		  <div class="row"> 
	  <div style="padding:3%; display:none;" id="innerdiv">
		
  <div class="col-md-9" > 
  
  
  <button  id="innerfabric" value="STY2015111" title="collar" data-toggle="tooltip" data-placement="top" class="icon-size innerfab"  style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg');width:60px;height:60px;"></button>  
		<button  id="innerfabric1"  value="STY2015112" title="collar" data-toggle="tooltip" data-placement="top" class="icon-size innerfab"  style="background-image:url('http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg');width:60px;height:60px;"></button>  
      
	  
  
	
		</div>
	   
	  </div>
	  
	  		<div style="padding:3%; display:none;" id="innerdiv1">
		
<div class="col-md-9" > 
  
  
  		
	
		</div>
	   
	  </div>
		</div>
		 
		 
	  
	  </div>
	
	
	
	</div>
	
	<div id="trouser">
	
	 <div class="trouserfabric" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	  
	  <div class="col-md-9" > 
  
  
      <button  id="frnt1" onclick="uptfab(this.value);add()"  value="200"  title="Navy With Purple Stripes ($489)" data-toggle="tooltip" data-placement="top" class="icon-size "  style="background-image:url('<?php echo $base_url_views; ?>/images1/fab/BaseBackfabric.png');width:80px;height:80px;"></button>
     <button  id="frnt2" onclick="uptfab(this.value);add()"  value="201"  title="Navy With Purple Stripes ($489)" data-toggle="tooltip" data-placement="top" class="icon-size "  style="background-image:url('<?php echo $base_url_views; ?>/images1/fab/BaseBackfabric1.png');width:80px;height:80px;"></button>
  
  
  	


  
  
  
	
		</div>
	  
	  
	  
	  
	
	    </div>
		</div> 
		 
	  </div>
	  
	  
	  <div class="pantbelt" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	  
	  
	    <div class="col-md-9" > 
      
  
  		<div class="belt11 tick" style="float:left; margin: 2%;" onclick="uptrjson(this.id);" id="db1"> 
		
		
		</div> 
			<div class="belt1 tick" style="float:left; margin: 2%;" id="sb" onclick="uptrjson(this.id);"> 
		
		
		</div>
	<div class="belt2 tick" style="float:left;margin: 2%;" id="db" onclick="uptrjson(this.id);"> 
		
		
		</div>
	  
	  </div>
	  
	  

	    </div>
		</div> 
		 
	  </div>
	  
	  
	  
	   <div class="pantfrontpleat" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	  
	  
    <div class="col-md-9" > 
  
  
  		<div class="tpleat tick" style="float:left; margin: 2%;"id="nopleat" onclick="uptrjson(this.id);"> 
		
		
		</div> 
			<div class="tpleat1 tick" style="float:left;margin: 2%;"  id="spleat" class="icon-size" onclick="uptrjson(this.id);"> 
		
		
		</div>
	<div class="tpleat2 tick" style="float:left; margin: 2%;" id="nopleat" class="icon-size" onclick="uptrjson(this.id);"> 
		
		
		</div>
	  
	  </div>
	    </div>
		</div> 
		 
	  </div>
	  
	  
	    <div class="pantsidepocket" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	 
	 <div class="col-md-9" > 
  
  
  
  
  		<div class="tpckt tick" style="float:left; margin: 2%;" id="pantpckt" onclick="uptrjson(this.id);" class="icon-size"> 
		
		
		</div> 
			<div class="tpckt1 tick" style="float:left; margin: 2%;" id="pantpckt1" onclick="uptrjson(this.id);"> 
		
		
		</div>

	  
	  </div>
	    </div>
		</div> 
		 
	  </div>
	  
	  
	   <div class="pantsidebutton" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	 
			 <div class="col-md-9" > 
  
  

  
  		<div class="tsidebtn tick" style="float:left; margin: 2%;" id="nosidebutton" onclick="uptrjson(this.id);" > 
		
		
		</div> 
			<div class="tsidebtn1 tick" style="float:left; margin: 2%;" id="sidebutton" onclick="uptrjson(this.id);" > 
		
		
		</div>

	  
	  </div>
	    </div>
		</div> 
		 
	  </div>
	  
	  
	  <div class="pantbackpocket" style="display:none; width:90%; margin: 2%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	 
		 <div class="col-md-9" > 
  
  
   <div class="col-sm-8">
       
  
  		<div class="tbackpckt tick" style="float:left; margin: 2%;" id="bpsb1" onclick="uptrjson(this.id);"> 
		
		
		</div> 
			<div class="tbackpckt1 tick" style="float:left; margin: 2%;" id="bpsb2" onclick="uptrjson(this.id);"> 
		
		
		</div>

  		<div class="tbackpckt2 tick" style="float:left; margin: 2%;" id="bpdb1" onclick="uptrjson(this.id);"> 
		
		
		</div> 
			<div class="tbackpckt3 tick" style="float:left; margin: 2%;"  id="bpdb2" onclick="uptrjson(this.id);"> 
		
		
		</div>
	  
	  
	  
  		<div class="tbackpckt6 tick" style="float:left; margin: 2%;" id="np"  onclick="uptrjson(this.id);"> 
		
		
		</div> 
		
		
		
	  </div>		  
	    </div>
		</div> 
		 
	  </div>
	  
	    </div>
	  	  <div class="pantbackpleat" style="display:none; width:90%;"> 
	  <div class="row"> 
	  <div style="padding:5%">
	 
		
<div class="col-md-9" > 

  		<div class="tbackpleat tick" style="float:left; margin: 2%;"   id="backpleats2" onclick="uptrjson(this.id);" > 
		
		
		</div> 
			<div class="tbackpleat1 tick" style="float:left; margin: 2%;" id="backpleats" onclick="uptrjson(this.id);" > 
		
		
		</div>

  		<div class="tbackpleat2 tick" style="float:left; margin: 2%; margin: 2%;"  id="backpleats1" onclick="uptrjson(this.id);"> 
		
		
		</div> 		  
	    </div>
		</div> 
		 
	  </div>
	  </div>
	
	 
 </div>
	 </div>
	 </div> 
	 
</div>

<div id="right" class="canvasdiv col-sm-6" style="float:right; width:33%" >

 <canvas id="canvas" width="600" height="900" style="position:absolute; z-index:-4; "></canvas>
 <canvas id="canvas1"  width="600" height="900" style="position:absolute;z-index:-3; "></canvas> 
 <canvas id="canvas2"  width="600" height="900" style="position:absolute;z-index: -2; "></canvas>
 <canvas id="canvas3"  width="600" height="900" style="position:absolute;z-index: -2; "></canvas>
<canvas id="canvas4"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 <canvas id="canvas51"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
  <canvas id="canvas52"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 
 <canvas id="canvas5"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 
 <canvas id="canvas6"  width="600" height="900" style="position:absolute;z-index: -1; "></canvas>
  <canvas id="canvas61"  width="600" height="900" style="position:absolute;z-index: -1; "></canvas>
<canvas id="canvas7"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
<canvas id="canvas71"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
   <canvas id="canvas8"  width="600" height="900" style="position:absolute; z-index: -1;" ></canvas>
   <canvas id="canvas81"  width="600" height="900" style="position:absolute; z-index: -1;" ></canvas>
<canvas id="canvas9"  width="600" height="900" style="position:absolute; z-index: -1;"  ></canvas>
  
 <canvas id="canvas10"  width="600" height="900" style="position:absolute; z-index: -1;" ></canvas>
<canvas id="canvas11"  width="600" height="900" style="position:absolute; z-index: -1;"  ></canvas>
<canvas id="canvas12"  width="600" height="900" style="position:absolute; z-index: -1;"  ></canvas>
  
 <canvas id="canvas13"  width="600" height="900" style="position:absolute; z-index: -1;" ></canvas>
<canvas id="canvas14"  width="600" height="900" style="position:absolute; z-index: -1;"  ></canvas>

<canvas id="canvas15"  width="600" height="900"   ></canvas>


</div>

<div style="display:none;">


<!-- shirt images-->

<img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim.png" width="140"  height="140" class="pattern" id="shirt_base" style="padding:2px; display:none;">
 
 <!-- shirt slvees images-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/sleeves_long_slim.png" width="140"  height="140" class="pattern" id="base_hands" style="padding:2px; display:none;">
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/sleeves_short_slim.png" width="140"  height="140" class="pattern" id="hands_short" style="padding:2px; display:none;">
 
 
  <!-- shirt collar images-->
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_big_round.png" width="140"  height="140" class="pattern" id="base_collar1" style="padding:2px; display:none;">
   <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_cut_away.png" width="140"  height="140" class="pattern" id="base_collar2" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_dual_button.png" width="140"  height="140" class="pattern" id="base_collar3" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="base_collar4" style="padding:2px; display:none;">
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_regular.png" width="140"  height="140" class="pattern" id="base_collar" style="padding:2px; display:none;">
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_short_button_down.png" width="140"  height="140" class="pattern" id="base_collar5" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_stand.png" width="140"  height="140" class="pattern" id="base_collar6" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/collar_wide_spread.png" width="140"  height="140" class="pattern" id="base_collar7" style="padding:2px; display:none;">

 


 <!-- shirt cuffs images-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="base_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="base_cuffs1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="base_cuffs2" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_french.png" width="140"  height="140" class="pattern" id="base_cuffs3" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="base_cuffs4" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="base_cuffs5" style="padding:2px; display:none;">
 
 <!-- shirt buttons images-->
<img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collar_dblbuttons" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/01/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collar_dowenbtn" style="padding:2px; display:none;">
 
 
 
 
 
<img src="<?php echo $base_url_views; ?>/buttons/02/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/02/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons1" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/02/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons1" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/02/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons1" style="padding:2px; display:none;">
 
 <img src="<?php echo $base_url_views; ?>/buttons/03/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons2" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/03/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons2" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/03/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons2" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/03/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons2" style="padding:2px; display:none;">
 
 
 
<img src="<?php echo $base_url_views; ?>/buttons/06/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons3" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/buttons/06/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons3" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/06/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons3" style="padding:2px; display:none;">
 
<img src="<?php echo $base_url_views; ?>/buttons/06/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons3" style="padding:2px; display:none;">
 
<!-- pocket images-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/pocket_left_slim.png" width="140"  height="140" class="pattern" id="base_pocket" style="padding:2px; display:none;">
 
 
 <!-- placket style images-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box.png" width="140"  height="140" class="pattern" id="base_placket" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal.png" width="140"  height="140" class="pattern" id="base_placket1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french.png" width="140"  height="140" class="pattern" id="base_placket2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow.png" width="140"  height="140" class="pattern" id="base_placket3" style="padding:2px; display:none;">
 
  <!-- outer contrast images-->
 
 

 
 
  <!-- bottam style images-->
  
  
     <!-- NONE WITH OUT PLACKET -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_high.png" width="140"  height="140" class="pattern" id="base_bottam" style="padding:2px; display:;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_mid.png" width="140"  height="140" class="pattern" id="base_bottam1" style="padding:2px; display:;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_straight.png" width="140"  height="140" class="pattern" id="base_bottam2" style="padding:2px; display:;">
 
    <!-- NONE WITH PLACKET -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box.png" width="140"  height="140" class="pattern" id="base_bottamplacket" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal.png" width="140"  height="140" class="pattern" id="base_bottamplacket1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french.png" width="140"  height="140" class="pattern" id="base_bottamplacket2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow.png" width="140"  height="140" class="pattern" id="base_bottamplacket3" style="padding:2px; display:none;">
 
  <!-- MID TAIL -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box_mid.png" width="140"  height="140" class="pattern" id="base_bottammid" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal_mid.png" width="140"  height="140" class="pattern" id="base_bottammid1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french_mid.png" width="140"  height="140" class="pattern" id="base_bottammid2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow_mid.png" width="140"  height="140" class="pattern" id="base_bottammid3" style="padding:2px; display:none;">
 
 
   <!-- HIGH TAIL -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh3" style="padding:2px; display:none;">
 

    <!-- STRIGHT TAIL -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright3" style="padding:2px; display:none;">
 
  <!-- back styles -->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/base_slim.png" width="140"  height="140" class="pattern" id="back_base" style="padding:2px; display:none;">
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/pleats_side_slim.png" width="140"  height="140" class="pattern" id="back_side" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/pleats_box_slim.png" width="140"  height="140" class="pattern" id="back_box" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/pleats_dart_slim.png" width="140"  height="140" class="pattern" id="back_dart" style="padding:2px; display:none;">
 
 <!-- back hands  -->
  
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/sleeves_long_slim.png" width="140"  height="140" class="pattern" id="back_fullhands" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/sleeves_short_slim.png" width="140"  height="140" class="pattern" id="back_halfhands" style="padding:2px; display:none;">
 
 <!-- back  cuffs -->
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs2" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_french.png" width="140"  height="140" class="pattern" id="back_cuffs3" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs4" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="back_cuffs5" style="padding:2px; display:none;">

 <!-- back  collar -->
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_big_round.png" width="140"  height="140" class="pattern" id="back_collar" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_dual_button.png" width="140"  height="140" class="pattern" id="back_collar1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="back_collar2" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_regular.png" width="140"  height="140" class="pattern" id="back_collar3" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_short_button_down.png" width="140"  height="140" class="pattern" id="back_collar4" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_short_point.png" width="140"  height="140" class="pattern" id="back_collar5" style="padding:2px; display:none;">

 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_stand.png" width="140"  height="140" class="pattern" id="back_collar6" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/collar_wide_spread.png" width="140"  height="140" class="pattern" id="back_collar7" style="padding:2px; display:none;">

 
 <!-- back  cuffs -->
 
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs2" style="padding:2px; display:none;">
  
 <!-- inner  cuffs -->
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_round_inner.png" width="140"  height="140" class="pattern" id="inner_roundcuff" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_angle_inner.png" width="140"  height="140" class="pattern" id="inner_angelcuff" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_big_round_inner.png" width="140"  height="140" class="pattern" id="inner_bigroundcuff" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_big_angle_inner.png" width="140"  height="140" class="pattern" id="inner_bigangelcuff" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_square_inner.png" width="140"  height="140" class="pattern" id="inner_squarecuff" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_french_inner.png" width="140"  height="140" class="pattern" id="inner_frenchcuff" style="padding:2px; display:none;">
 
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_round_inner.png" width="140"  height="140" class="pattern" id="inner_roundcuff1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_angle_inner.png" width="140"  height="140" class="pattern" id="inner_angelcuff1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_big_round_inner.png" width="140"  height="140" class="pattern" id="inner_bigroundcuff1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_big_angle_inner.png" width="140"  height="140" class="pattern" id="inner_bigangelcuff1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_square_inner.png" width="140"  height="140" class="pattern" id="inner_squarecuff1" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_french_inner.png" width="140"  height="140" class="pattern" id="inner_frenchcuff1" style="padding:2px; display:none;">
 
  <!-- inner  collar -->
 
 <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/collar_stand_inner.png" width="140"  height="140" class="pattern" id="inner_collar" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/collar_stand_inner.png" width="140"  height="140" class="pattern" id="inner_collar1" style="padding:2px; display:none;">
 
 <!-- inner  placket -->
 
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/pink/base_placket_inner_slim.png" width="140"  height="140" class="pattern" id="inner_pinkplacket" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/shirt/inner_cuffs/black/base_placket_inner_slim.png" width="140"  height="140" class="pattern" id="inner_blackplacket" style="padding:2px; display:none;">
 
 
</div>
    
 <div style="display:none;">


<!-- trouser <?php echo $base_url_views; ?>/images1 front-->

 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/BaseFront.png" width="140"  height="140" class="pattern" id="trouser_base" style="padding:2px; display:none;">
 

 <!-- trouser belt-->
 
<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontBeltLoopSlim.png" width="140"  height="140" class="pattern" id="trouser_belt" style="padding:2px; display:none;">
<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontBeltLoopThick.png" width="140"  height="140" class="pattern" id="trouser_belt1" style="padding:2px; display:none;">

 <!-- trouser pleat-->

<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontDoublePleat.png" width="140"  height="140" class="pattern" id="trouser_pleat" style="padding:2px; display:none;">
<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontSinglePleat.png" width="140"  height="140" class="pattern" id="trouser_pleat1" style="padding:2px; display:none;">
 
 <!-- trouser pockets-->

<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontSlantPcoket.png" width="140"  height="140" class="pattern" id="trouser_pocket" style="padding:2px; display:none;">
<img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontStraightPocket.png" width="140"  height="140" class="pattern" id="trouser_pocket1" style="padding:2px; display:none;">

 <!-- trouser sidebutton-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Front/FrontNoLoopSideTab.png" width="140"  height="140" class="pattern" id="trouser_sidebtn" style="padding:2px; display:none;">

 <!-- trouser images1 back-->
 
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/BaseBack.png" width="140"  height="140" class="pattern" id="trouser_base1" style="padding:2px; display:none;">

  <!-- trouser belt-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/SlimBeltLoop.png" width="140"  height="140" class="pattern" id="trouser_backslim" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/ThickBeltLoop.png" width="140"  height="140" class="pattern" id="trouser_backthick" style="padding:2px; display:none;">

 <!-- trouser pockets-->

 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/Back1PocketDougleBone.png" width="140"  height="140" class="pattern" id="trouser_back1dblbone" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/Back2PocketDoubleBone.png" width="140"  height="140" class="pattern" id="trouser_back2dblbone" style="padding:2px; display:none;">

  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/Back1PocketSingleBone.png" width="140"  height="140" class="pattern" id="trouser_back1sngbone" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/Back2PocketSingleBone.png" width="140"  height="140" class="pattern" id="trouser_back2sngbone" style="padding:2px; display:none;">

 <!-- trouser pleat-->

 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/SingleDart.png" width="140"  height="140" class="pattern" id="trouser_sngdart" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $tpat;?>/Trouser/Back/DoubleDart.png" width="140"  height="140" class="pattern" id="trouser_dbldart" style="padding:2px; display:none;">

 
<div>  









<script>



//999
var shirtjson={"fabid":"200","view":"front","shirtstyle":"fullhands","collarstyle":"regular",
"cuffstyle":"angle","shirtsidepocket":"no","shirtbtn":"btn4","shirtplacket":"noshirtplacket",
"splacket":"noshirtplacket","shirtbottmstyle":"nobottamstyle","shirtbakstyle":"nobackstyle",
"outercontrast":"nostyle","outercontrastcolor":"none","innercontrast":"no","innerclrstat":"no",
"innercontrastcolor":"no","innercuffstat":"no","innerplacketstat":"no","monogramstyle":"none","monogramfontstyle":"",
"monogramclr":"","monotext":"","monlocation":""}

var Trjson={"fabid":"200","view":"front","beltstyle":"db1","beltstyle_s":"nobelt",
"pleatstyle":"nopleat","fpocketstyle":"pantpckt1","fpocketstyle_s":"slant","sidebuttonstat":"nosidebutton",
"pntbakpocktstyle":"np","pntbakpocktstyle_s":"nopocket","bakpleatstyle":"backpleats2","bakpleatstyle_s":"nopleat"}



	
      function upjson(id)
	  {
		
		//Front view shirt
		  
		  // shirt style
		   if(id==="fullhands")
		   {
			  shirtjson.shirtstyle=id; 
			  shirtjson.view=="front"
		   }
		   else if(id=="halfhands")
		   {
			   shirtjson.shirtstyle=id; 
			   shirtjson.view=="front"
		   }
		  
		  
		   // cuff style
		  if(id==="cuff")
		  {
			 
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_angle_slim.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_angle_slim.png$angle";
			 var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];
			 shirtjson.view="front";
		  }
		  else if(id==="cuff1")
		  {
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_big_angle_slim.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_big_angle_slim.png$Bigangle";
			 var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="cuff2")
		  {
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_big_round_slim.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_big_round_slim.png$Biground";
			  var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];shirtjson.view="front";
		  }
		    else if(id==="cuff3")
		  {
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_french.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_french.png$French";
			  var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];shirtjson.view="front";
		  }
		    else if(id==="cuff4")
		  {
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_round_slim.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_round_slim.png$Round";
			   var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="cuff5")
		  {
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_square_slim.png$images/"+shirtjson.fabid+"/shirt/back/cuffs_square_slim.png$Square";
			  var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.cuffstyle=res[2];shirtjson.view="front";
		  }
		  	
		 

		
		    // collar style
		   if(id==="collar5")
		  {
			 
			 document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_regular.png$images/"+shirtjson.fabid+"/shirt/back/collar_regular.png$regular";
			 var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  
		  }
		   else if(id==="collar1")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_big_round.png$images/"+shirtjson.fabid+"/shirt/back/collar_big_round.png$Big_round";
			   var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="collar2")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_cut_away.png$images/"+shirtjson.fabid+"/shirt/back/collar_cut_away.png$cut_way";
			  var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="collar3")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_dual_button.png$images/"+shirtjson.fabid+"/shirt/back/collar_dual_button.png$Double_button";
		      var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		  else if(id==="collar4")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_low_semi_wide.png$images/"+shirtjson.fabid+"/shirt/back/collar_low_semi_wide.png$low_semi_wide";
			   var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="collar6")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_short_button_down.png$images/"+shirtjson.fabid+"/shirt/back/collar_short_button_down.png$short_button_down";
	         var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="collar7")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_stand.png$images/"+shirtjson.fabid+"/shirt/back/collar_stand.png$stand";
		       var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		   else if(id==="collar8")
		  {
			  document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_wide_spread.png$images/"+shirtjson.fabid+"/shirt/back/collar_wide_spread.png$wide_spread";
		      var str = document.getElementById(id).value;
             var res = str.split("$");
		     shirtjson.collarstyle=res[2];shirtjson.view="front";
		  }
		  
		  //shirt side poocket
		   if(id=="shirtpocket")
		   {
			  //alert(shirtjson.fabid);
			   document.getElementById(id).value="images/"+shirtjson.fabid+"/shirt/front/pocket_left_slim.png"
			
		     shirtjson.shirtsidepocket="yes";shirtjson.view="front";
						 
		   }
		   else if(id=="shirtpocket1")
		   {
			   shirtjson.shirtsidepocket="No";shirtjson.view="front";
		   }
		  
			//shirt placket
			
			
			if(id=="noshirtplacket")
			{
				shirtjson.shirtplacket=id;
				shirtjson.splacket=id;
				document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim.png";
				shirtjson.view="front";
			
		        
			}
			if(id=="shirtplacket")
			{
				
				shirtjson.shirtplacket="Boxplacket";
				shirtjson.splacket=id;
				document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box.png";
				shirtjson.view="front";
			}
			if(id=="shirtplacket1")
			{
				shirtjson.shirtplacket="Concealed placket";
				shirtjson.splacket=id;
				document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal.png";
				shirtjson.view="front";
			}
			if(id=="shirtplacket2")
			{
				shirtjson.shirtplacket="French placket";
				shirtjson.splacket=id;
				document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french.png";
				shirtjson.view="front";
			}
			if(id=="shirtplacket3")
			{
				shirtjson.shirtplacket="Narrow placket";
				shirtjson.splacket=id;
				document.getElementById(id).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow.png";
				shirtjson.view="front";
			}
			
			//shirt bottom style
			
			if(id=="nobottamstyle")
			{
				shirtjson.shirtbottmstyle=id;
				shirtjson.view="front";
			}
			if(id=="midbottamstyle")
			{
				shirtjson.shirtbottmstyle=id;
				shirtjson.view="front";
			}
			if(id=="highbottamstyle")
			{
				shirtjson.shirtbottmstyle=id;
				shirtjson.view="front";
			}
			if(id=="strightbottamstyle")
			{
				shirtjson.shirtbottmstyle=id;
				shirtjson.view="front";
			}
			
			//outer contrast
			if(id=="noneall")
			{
				shirtjson.view="front";
				 shirtjson.outercontrast=id;
				  $("#outerdiv").hide();
				
			}
			if(id=="collarandcuff")
			{
				shirtjson.view="front";
				shirtjson.outercontrast=id;
				 $("#outerdiv").show();
			}
			if(id=="collaronly")
			{
				shirtjson.view="front";
				shirtjson.outercontrast=id;
				 $("#outerdiv").show();
			}
			
			
			
			
			//innercontrase 
			
			if(id=="inneryes")
			{
				shirtjson.innercontrast="yes";
				 $("#innerdiv").show();
			
			}
			if(id=="innerno")
			{
				shirtjson.innercontrast="no";
				 $("#innerdiv").hide();
			}
			
	
			
			if(id=="innercollar")
			{
				
             if(shirtjson.innercontrast=="no")
			 {
				 //alert("select yes ");
			 }
			 else if(shirtjson.innercontrast=="yes")
			 {
				
				 if(shirtjson.innerclrstat=="no")
				 {
					shirtjson.innerclrstat="yes"; 
				 }
				 else if(shirtjson.innerclrstat=="yes")
				 {
					shirtjson.innerclrstat="no"; 
				 }
			 
			 }
			
			 
			}
			
			//inner cuffs
			if(id=="innercuffs")
			{
				
             if(shirtjson.innercontrast=="no")
			 {
				 //alert("select yes ");
			 }
			  else if(shirtjson.innercontrast=="yes")
			 {
				
				 if(shirtjson.innercuffstat=="no")
				 {
					shirtjson.innercuffstat="yes"; 
				 }
				 else if(shirtjson.innercuffstat=="yes")
				 {
					shirtjson.innercuffstat="no"; 
				 }
			 
			 }
			
			 
			}
			
			//inner placket
		    if(id=="innerplacket")
			{
				
             if(shirtjson.innercontrast=="no")
			 {
				 //alert("select yes ");
			 }
			 else if(shirtjson.innercontrast=="yes")
			 {
				
				 if(shirtjson.innerplacketstat=="no")
				 {
					shirtjson.innerplacketstat="yes"; 
				 }
				 else if(shirtjson.innerplacketstat=="yes")
				 {
					shirtjson.innerplacketstat="no"; 
				 }
			 
			 }
			
			 
			}
			
			
			//shirt back
			
			if(id=="nobackstyle")
			{
				shirtjson.view="back";
				
				shirtjson.shirtbakstyle=id;
			}	
              if(id=="backside")
			{
				shirtjson.view="back";
				shirtjson.shirtbakstyle=id;
			}				
			  if(id=="backbox")
			{
				shirtjson.view="back";
				shirtjson.shirtbakstyle=id;
			}	
            if(id=="backdart")
			{
				shirtjson.view="back";
				shirtjson.shirtbakstyle=id;
			}	
			
			
			
			
			if(shirtjson.view=="front")
			{
				 fdrawImage();
				 ftdrawImage();
			
				
			}
			
			if(shirtjson.view=="back")
			{
				drawImage();
				btdrawImage();
			}
			
			//mongram
			if(id=="none")
			{
				shirtjson.monogramstyle=id;
			}
			if(id=="intial")
			{
				shirtjson.monogramstyle=id;
			}
			if(id=="name")
			{
				shirtjson.monogramstyle=id;
			}
			
			
		  
			
		    
	
		 
	  }

        function add()
        {
          
            var spat_id = shirtjson.fabid;
            var tpat_id = Trjson.fabid;
                   
          // alert(spat_id+":::"+tpat_id)
			
			
            $.ajax({
                url: 'http://localhost/newshirt/canvas.php',
                type: 'POST',
                data: {"spat_id": spat_id,"tpat_id": tpat_id},
                success: function (data)
                {

                    $('#right').html(data);
					setTimeout(function(){
					  parseshirtobj();
					}, 1000);
					


                }

            });
        }

function parseshirtobj()
{
	
	//upjson();
	if(shirtjson.view=="front")
	{
		fdrawImage();
		ftdrawImage();
	}
	else if(shirtjson.view=="back")
	{
		drawImage();
		btdrawImage();
	}
	//ftdrawImage();
}

//pant functions
function uptrjson(pid)
{
	//alert("idd==="+pid);
	if(pid=="sb")
	{
		Trjson.beltstyle=pid;
		Trjson.beltstyle_s="Frontbelt loop slim";
		 Trjson.view="front";
		
	}
	if(pid=="db")
	{
		Trjson.beltstyle=pid;
		Trjson.beltstyle_s="Frontbelt loop Thick";
		 Trjson.view="front";
		
	}
	if(pid=="db1")
	{
		Trjson.beltstyle=pid;
		Trjson.beltstyle_s="No Belt";
		 Trjson.view="front";
		
	}
	//pleat style
	if(pid=="spleat")
	{
	  Trjson.pleatstyle=pid;
	  Trjson.view="front";
	}
	
	if(pid=="dpleat")
	{
	  Trjson.pleatstyle=pid;
	    Trjson.view="front";
	}
	if(pid=="nopleat")
	{
	  Trjson.pleatstyle=pid;
	    Trjson.view="front";
	}
	//pocket style
	if(pid=="pantpckt")
	{
	  Trjson.fpocketstyle=pid;
	   Trjson.fpocketstyle_s="slant";
	     Trjson.view="front";
	}
	
	if(pid=="pantpckt1")
	{
	  Trjson.fpocketstyle=pid;
	   Trjson.fpocketstyle_s="straight";
	     Trjson.view="front";
	}
	//side button
	if(pid=="sidebutton")
	{
	  Trjson.sidebuttonstat=pid;
	    Trjson.view="front";
	 
	}
	if(pid=="nosidebutton")
	{
	  Trjson.sidebuttonstat=pid;  Trjson.view="front";
	 
	}
	
	//Fant back pocket 
	
	if(pid=="bpsb1")
	{
	  Trjson.pntbakpocktstyle=pid;
	  Trjson.pntbakpocktstyle_s="single pocket Bone";
	  Trjson.view="back";
	}
	if(pid=="bpsb2")
	{
	  Trjson.pntbakpocktstyle=pid;
	  Trjson.pntbakpocktstyle_s="Double pocket singel Bone"; Trjson.view="back";

	  
	}
	if(pid=="bpdb1")
	{
	  Trjson.pntbakpocktstyle=pid;
	  Trjson.pntbakpocktstyle_s="single pocket Double Bone"; Trjson.view="back";
	}
	
	if(pid=="bpdb2")
	{
	  Trjson.pntbakpocktstyle=pid;
	  Trjson.pntbakpocktstyle_s="Double pocket Double Bone"; 
	  Trjson.view="back";
	}
	
	if(pid=="np")
	{
	  Trjson.pntbakpocktstyle=pid;
	  Trjson.pntbakpocktstyle_s="No Pockets"; Trjson.view="back";
	}
	
	if(pid=="backpleats")
	{
		Trjson.bakpleatstyle=pid;
		Trjson.bakpleatstyle_s="single Dart"; Trjson.view="back";
	}
	if(pid=="backpleats1")
	{
		Trjson.bakpleatstyle=pid;
		Trjson.bakpleatstyle_s="Double Dart"; Trjson.view="back";
		
	}
	if(pid=="backpleats2")
	{
		Trjson.bakpleatstyle=pid;
		Trjson.bakpleatstyle_s="No Pleats"; Trjson.view="back";
		
	}
	
	if(Trjson.view=="front")
	{
		
		fdrawImage();
		ftdrawImage();
	}
	if(Trjson.view=="back")
	{
		
		drawImage();
		btdrawImage();
	}
	
	
	
	
}

 $(".shirtbtn").click(function()
 {
	   
    shirtjson.shirtbtn=this.id;
   shirtjson.view="front";
    ftdrawImage();
});
 
 $("#none").click(function(){
    $("#namediv").hide();
	 $("#intialdiv").hide();
});
 
 $("#intial").click(function(){
    $("#namediv").hide();
	 $("#intialdiv").show();
});
 $("#name").click(function(){
    $("#intialdiv").hide();
	 $("#namediv").show();
});
 
  
 //buttons changing event

$('.fstyle').click(function()
{

    shirtjson.monogramfontstyle=this.id;

});

$('.mcol').click(function()
{

    shirtjson.monogramclr=this.id;

});
$('.moloc').click(function()
{

    shirtjson.monlocation=this.id;
	shirtjson.monotext=document.getElementById("montext").value;

});

$('.innerfab').click(function()
{

 shirtjson.view="front";
 shirtjson.innercontrastcolor=document.getElementById(this.id).value;
 fdrawImage();
 ftdrawImage();

});

$('.outerfab').click(function()
{

shirtjson.view="front";
shirtjson.outercontrastcolor=document.getElementById(this.id).value;
//alert(shirtjson.outercontrastcolor);
 fdrawImage();
 ftdrawImage(); 

});


function upfab(id)
{
	
	 shirtjson.fabid=id;
	 
	// alert("test"+shirtjson.splacket);
	 if(shirtjson.view=="front")
	 {
		   if(shirtjson.splacket=="noshirtplacket")
			{
				
				 document.getElementById(shirtjson.splacket).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim.png";shirtjson.view="front";
		
		        
			}
			if(shirtjson.splacket=="shirtplacket")
			{
				
				document.getElementById(shirtjson.splacket).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box.png";shirtjson.view="front";
			}
			if(shirtjson.splacket=="shirtplacket1")
			{
				
				document.getElementById(shirtjson.splacket).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal.png";shirtjson.view="front";
			}
			if(shirtjson.splacket=="shirtplacket2")
			{
				
				document.getElementById(shirtjson.splacket).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french.png";shirtjson.view="front";
			}
			if(shirtjson.splacket=="shirtplacket3")
			{
				
				document.getElementById(shirtjson.splacket).value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow.png";shirtjson.view="front";
			}
	 
		
		 	fdrawImage();

	 } 
	 else if(shirtjson.view=="back")
	 {
		
		  drawImage();
		 
	 }
	 
	
}



function uptfab(id)
{
	
	 Trjson.fabid=id;
	 
		if(Trjson.view=="front") 
		{
			fdrawImage();
		 ftdrawImage();	
		}
		if(Trjson.view=="back")
		{
			drawImage();
		  btdrawImage();	
		}
	
	
}

var btArray = {belt:0, pocket:0, pleat:0};
var ftArray = {belt:0, pocket:0, pleat:0, sidebutton:0};



	window.onload = function() 
	{
		
		loadall();
		
   }

  function loadall()
  {
	  //front view functions
	fdrawImage();
    ftdrawImage();	  
  }


	
</script>


</div>
   
</body>

<script>
(function($) {

	var tabs =  $(".tabs li a");
  
	tabs.click(function() {
		var panels = this.hash.replace('/','');
		tabs.removeClass("active");
		$(this).addClass("active");
    $("#panels").find('.tab-accordian').hide();
    $(panels).fadeIn(200);
    
	});

})(jQuery);
</script>

<script type="text/javascript">

</script>


</html>