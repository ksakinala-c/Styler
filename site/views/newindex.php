<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');
 ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title>Stylior</title>
<meta content='no-cache' http-equiv='Cache-Control'/>
<meta content='no-cache' http-equiv='Pragma'/>
<meta content='INDEX,FOLLOW' name='Robots'/>
<meta content='all' name='Audience'/>
<meta content='1 days' name='revisit-after'/>

<script type="text/javascript" src="<?php echo  $base_url_views; ?>js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="<?php echo  $base_url_views; ?>js/jssor_4.js"></script>
  <script type="text/javascript">
(function(doc) 
{

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
 <style>
      
@font-face {
    font-family: "tradegothic-bold";
    src: url("/fonts/tradegothic/TradeGothicLTStd-BdCn20?#iefix") format("embedded-opentype"), url("/fonts/tradegothic/TradeGothicLTStd-BdCn20.woff") format("woff"), url("/fonts/tradegothic/TradeGothicLTStd-BdCn20.ttf") format("truetype");
}
@font-face {
    font-family: "AbrilDisplay-Bold";
    src: url("/fonts/webfonts/abril/abril?#iefix") format("embedded-opentype"), url("/fonts/webfonts/abril/abril.woff2") format("woff2"), url("/fonts/webfonts/abril/abril.woff") format("woff"), url("/fonts/webfonts/abril/abril.ttf") format("truetype");
}
@font-face {
    font-family: "circular-bold";
    src: url("/fonts/circular/CircularStd-Bold?#iefix") format("embedded-opentype"),  url("/fonts/circular/CircularStd-Bold.woff") format("woff"), url("/fonts/circular/CircularStd-Bold.ttf") format("truetype");
}

        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('<?php echo  $base_url_views; ?>img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
    </style>

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
<main class="cd-main-content">

<style>

#ban{margin-top:7%;}

@media only screen and (max-width : 853px){

#ban{margin-top:18%;}
#how{margin-top:25%;}

}

@media only screen and (max-width : 480px){
#ban{margin-top:35%;}

#how{margin-top:30%;}


}

.r_caption > h2 {
    color: #73bba1;
    font-family: monospace;
    line-height: 31px;
    text-shadow: 0 0 5px #00bbff;
}
.r_caption > p {
    color: #fff;
    font-size: 16px;
}


.r_caption {
    color: #fff;
    left: 50%;
    margin-left: -30%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px 4px #000;
    top: 50%;
    width: 60%;
}
a.button.center-fill.hollow, button.button.center-fill.hollow {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
    border-color: #fff;
    color: #fff;
    margin: 0;
    min-width: 116px;
    padding: 5px;
    width: auto;
	border-radius: 0px;
}
a.button.center-fill:active::before, a.button.center-fill:focus::before, a.button.center-fill:hover::before, button.button.center-fill:active::before, button.button.center-fill:focus::before, button.button.center-fill:hover::before
{
transform:scale(1)
}

a.button.center-fill::before, button.button.center-fill::before {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scale(0);
    transition-duration: 0.2s;
    transition-property: transform;
    transition-timing-function: ease-out;
    z-index: -1;
}
a.button.center-fill, button.button.center-fill {
    backface-visibility: hidden;
    background: #fff none repeat scroll 0 0;
    border: 2px solid #000;
    box-shadow: 0 0 1px transparent;
    color: #000;
    display: inline-block;
    font-family: "Gotham A","Gotham B";
    font-size: 1.3rem;
    font-style: normal;
    font-weight: 500;
    padding: 20px 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    transform: translateZ(0px);
    transition-duration: 0.2s;
    transition-property: color;
    vertical-align: middle;
    width: 200px;
}

.main-slider{
margin-top:90px;
width:100%;
}
.online-process .process .details {
    font-family: "circular-bold",Arial,sans-serif;
    font-size: 13px;
    letter-spacing: 0.35px;
    line-height: 23px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 1px rgba(2, 2, 2, 0.75);
    transition: all 0.25s ease-in-out 0s;
	color:white;
}
.process .info .heading {
   
    font-size: 40px;
    letter-spacing: 7.2px;
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
}
.process .info .intro {
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
}
.online-process .process .details, .online-process .process .cta
{
 opacity: 0;
}
.process .hoverele  .details, .process .hoverele .cta
{
 opacity: 1;
}
.row.col-sm-12.online-process {
    margin: 0;
    padding: 0;
}
.process .hoverele .info
{
 top: 0 !important;
}

.row.col-sm-12.online-process,.process-header{


}

</style>


<main class="cd-main-content" id="head"> 



<div class="main-slider" id="mainsliders">
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
       
		<!-- <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php //echo $base_url_views; ?>img/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="<?php //echo $base_url_views; ?>img/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="<?php //echo $base_url_views; ?>img/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="<?php //echo $base_url_views; ?>img/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="<?php //echo $base_url_views; ?>img/c-slide-3.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="<?php //echo $base_url_views; ?>img/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="<?php //echo $base_url_views; ?>img/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div>
            </div>           
        </div>-->

			
		
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<?php
		 $homeadd = $this->footer->homeadd1();		 
		
		 if($homeadd != '' && count($homeadd) > 0) {
			 foreach($homeadd as $homeimage)
			 {
			
			 ?>
			 
				<div data-p="225.00" style="display: none;">
						<img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" data-u="image" style="width:100%; height:120%" alt="Stylior Fashion Store Online"> 		
					
					<div style="font-size: 25px; margin-top: -101px;" class="r_caption">
					<h2><?php echo $homeimage->slider_header; ?></h2>
					<p><?php echo $homeimage->slider_content; ?></p>
					<?php /*?>
					<a class="button center-fill medium hollow ember-view<?php echo $homeimage->id; ?>" title="<?php echo $homeimage->button_label; ?>" href="<?php echo $homeimage->links; ?>" id="ember861"><?php echo $homeimage->button_label; ?></a>
					<?php */?>
				  </div>
					<style>
					a.ember-view<?php echo $homeimage->id; ?>.button.center-fill::before{
						background:#<?php echo ($homeimage->button_bgcolor)?$homeimage->button_bgcolor:000; ?> none repeat scroll 0 0;
						
						border-radius:0px;
					}
					</style>
				</div>
				
			<?php 
			}
			
		} ?>
                    
        </div>
               <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>

    </div>
<div style="display:none;" id="maindivimg">

<img src="<?php echo $http_host;?>/upload/banner/<?php echo $homeimage->image; ?>" data-u="image" style="width:100%; height:250px;" alt="Stylior Fashion Store Online"> 		
</div>
	
	
	
	
	
	
	
	
</div>
<style>
/*.tab {
    background: rgba(200, 200, 200, 1) none repeat scroll 0 0;
    border: 1px solid #00bbff;
    border-radius: 5px;
    box-shadow: 0 0 10px #00bbff;
    margin-top: -80px;
}*/
	#head{overflow:hidden;}
	@media only screen and (max-width: 360px) {
	
	#myCarousel11 #myCarousel .carousel-inner > .item > a > img {
      width: 100%;
	  height:400px !important;
      margin:5% auto;
	 
  }
	}
	@media only screen and (min-width: 361px) and (max-width:450px) {
	
	#myCarousel11 #myCarousel .carousel-inner > .item > a > img {
      width: 100%;
	  height:500px !important;
      margin:5% auto;
	 
  }
	}
	@media only screen and (min-width: 451px) and (max-width:500px) {
	
	#myCarousel11 #myCarousel .carousel-inner > .item > a > img {
      width: 100%;
	  height:550px !important;
      margin:5% auto;
	 
  }
	}
	@media only screen and (min-width: 501px) and (max-width:576px) {
	
	#myCarousel11 #myCarousel .carousel-inner > .item > a > img {
      width: 100%;
	  height:650px !important;
      margin:5% auto;
	 
  }
	}
@media only screen and (max-width: 486px) {
	.info .intro{margin:0px;}
	.carousel-inner .item a:hover,.carousel-inner .item a:focus{text-decoration:none !important;}
	#tab-browse{width:50% !important;}
	#flexslider-responsve{width:50% !important;}
	
	
	#zindex{font-size:7px;letter-spacing:0px;}
	#myCarousel{padding-top:0%;}
	.stylior1{
	  margin-top:-150%;
	  
  }
	.cd-main-content{overflow:hidden;}
	.margin-top30{margin-left:0px;}
	#head{margin-left:0px;margin-right:0px;margin-bottom:5%;overflow:hidden;}
	#mainsliders{
	height:250px;
	
}
#jssor_1{
display:none;	
	
}
#maindivimg{
display:block;	
height:250px;	
}

#sidehead111{
	font-size: 16px;
	
}

p.details{
	font-size: 10px;
	word-spacing:-3px;
	color:#000;
}
	p.details1{
	line-height:20px;
	
}
.callout .tab {
    margin-top: 0;
}
.container {
    padding-right: 5%;
    padding-left:  5%;
    margin-right: auto;
    margin-left: auto;
}



#slideimg{
display:none;	
	
}


#slideimg1{
display:none;	
	
}

#myCarousel1{
display:block;	
	
}

.impossible .row .process {
    //font-family: 'tradegothic-bold',Arial,sans-serif;
    text-transform: uppercase;
    color: #ba1a1a;
    letter-spacing: 1.8px;
    margin: 10px 0 0 0;
	
}

.impossible .row .heading {
    margin: 10px 0;
    //font-family: AbrilDisplay-Bold,Arial,sans-serif;
    font-size: 40px;
    line-height: 38px;
    letter-spacing: 2px;
    color: #2c3644;
    max-width: 375px;
}
.impossible .row .details {
    //font-family: 'circular',Arial,sans-serif;
    font-size: 12px;
    color: #798689;
    line-height: 22px;
	padding:1% auto;
	text-align:justify;

}

.callout .tab .heading {
    color: #2c3644;
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1.05px;
    margin: 5px 0;
    transition: all 0.25s ease-in-out 0s;
}
p {
    font-size: 14px;
    line-height: 24px;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 10px;
}
.callout .tab .cta {
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    font-size:7px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    height: 30px;
    padding: 0 0 12px 15px;
    margin-right: -30px;
   /* float: right;*/
    z-index: 5;
    position: relative;
    border: none;
}

.callout .tab {
    padding-top: 30px;
    padding-bottom: 195px;

	
}
	.callout .tab .cta::after {
    background-color: #891620;
    background-position: center center;
    background-size: 20% auto;
    height: 30px;
    position: relative;
    transition: all 0.25s ease-in-out 0s;
    width: 15px !important;
    z-index: 5;
}
.btn::after {
    background-image: url("/home/images/arrow-right.png");
    background-position: center top;
    background-repeat: no-repeat;
    content: "";
    display: inline-block;
    height: 14px;
    margin-left: 2px !important;
    vertical-align: middle;
    
}



#exdiv{
	display:none;
	
}
#middiv{
padding-left: 8px;
}
#myCarousel122, #middiv{
    margin: 1% 20%;
	//padding:5% auto;
   // text-align: center;
}
h1{
	font-size:22px;
	
}


#divback11{
	    height: 230px;
    background-color: #000000;
    background-position: -310px 14%;
	
	
	
}
#divback1{
	margin-left:2%;
	margin-right:2%;
	float:right;
	width:100% !important;
}
	
		

#divback1 h4{
	    font-size: 11px !important;
	
}#divback1 h1{
    font-size: 16px !important;
}

#divback1 p{
    font-size: 10px !important;
    line-height: 17px !important;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 5px;
	padding:0% 4%;
	
}
	#divback1 p:nth-child(3){display:none;}
/*#divback1 p strong{
   display:none;
	
}*/

#3rdslider{
    /* transform: skew(0deg, 0deg); */
    margin-top:0px;
}
	#myCarousel{height:10% !important;}
	.carousel-inner{height:1}
	#stylelounge h2 strong {position:relative;top:-5px;}
	#myCarousel11 #myCarousel{width:80%;margin:0% 10%;}
	.bg:hover, .bg:focus
	{ 
		filter: none !important;
        -webkit-filter: none !important;
	}
}
	
	
@media only screen and (min-device-width:487px) and (max-width: 576px) {
	.carousel-inner .item a:hover,.carousel-inner .item a:focus{text-decoration:none !important;}
	#tab-browse{width:50% !important;}
	#flexslider-responsve{width:50% !important;}
	.bg:hover, .bg:focus
	{ 
		filter: none !important;
        -webkit-filter: none !important;
	}
	#myCarousel{padding-top:0%;}
	#mainsliders{
	height:250px;
	
}
#jssor_1{
display:none;	
	
}
#maindivimg{
display:block;	
height:250px;	
}

#sidehead111{
	font-size: 16px;
	
}

p.details{
	font-size: 11px;
	word-spacing:-3px;
	color:#000;
}
.callout .tab {
    margin-top: 0;
}
.container {
    padding-right: 5%;
    padding-left:  5%;
    margin-right: auto;
    margin-left: auto;
}



#slideimg{
display:none;	
	
}


#slideimg1{
display:none;	
	
}

#myCarousel1{
display:block;	
	
}

.impossible .row .process {
    //font-family: 'tradegothic-bold',Arial,sans-serif;
    text-transform: uppercase;
    color: #ba1a1a;
    letter-spacing: 1.8px;
    margin: 10px 0 0 0;
	
}

.impossible .row .heading {
    margin: 10px 0;
    //font-family: AbrilDisplay-Bold,Arial,sans-serif;
    font-size: 40px;
    line-height: 38px;
    letter-spacing: 2px;
    color: #2c3644;
    max-width: 375px;
}
.impossible .row .details {
    //font-family: 'circular',Arial,sans-serif;
    font-size: 12px;
    color: #798689;
    line-height: 22px;
	padding:1% auto;
	text-align:justify;

}

.callout .tab .heading {
    color: #2c3644;
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1.05px;
    margin: 5px 0;
    transition: all 0.25s ease-in-out 0s;
}
p {
    font-size: 14px;
    line-height: 24px;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 10px;
}
.callout .tab .cta {
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    font-size:7px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    height: 30px;
    padding: 0 0 12px 15px;
    margin-right: -30px;
    /*float: right;*/
    z-index: 5;
    position: relative;
    border: none;
}

.callout .tab {
    padding-top: 30px;
    padding-bottom: 195px;

	
}



#exdiv{
	display:none;
	
}
#middiv{
padding-left: 8px;
}
#myCarousel122, #middiv{
    margin: 1% 20%;
	//padding:5% auto;
   // text-align: center;
}
h1{
	font-size:22px;
	
}


#divback11{
	    height: 230px;
    background-color: #000000;
    background-position: -310px 14%;
	
	
	
}
#divback1{
	margin-left:2%;
	margin-right:2%;
	float:right;
	width:100% !important;
}
	
		

#divback1 h4{
	    font-size: 12px !important;
	
}#divback1 h1{
    font-size: 16px !important;
}

#divback1 p{
    font-size: 11px !important;
    line-height: 17px !important;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 5px;
	padding:0% 4%;
	
}
/*#divback1 p strong{
   display:none;
	
}*/

#3rdslider{
    /* transform: skew(0deg, 0deg); */
    margin-top:0px;
}
	#myCarousel{height:10%;}
	.carousel-inner{height:1}
	#stylelounge h2 strong {position:relative;top:-5px;}
	#myCarousel11 #myCarousel{width:80%;margin:0% 10%;}
 /*.browse-custom-collection{margin-left:60%;}
	.browse-custom-collection #zindex {margin-top:-17%;}*/

	
}
@media only screen and (min-device-width:577px) and (max-width: 767px) {
	#zindex{font-size:8px;letter-spacing:0px;}
	#mainsliders{
	height:100%;
	
}
#jssor_1{
display:none;	
	
}
#maindivimg{
display:block;	
height:250px;	
}

#sidehead111{
	font-size: 16px;
	
}

p.details{
	font-size: 12px;
	word-spacing:-3px;
	color:#000;
}
.callout .tab {
    margin-top: 0;
}
.container {
    padding-right: 5%;
    padding-left:  5%;
    margin-right: auto;
    margin-left: auto;
}



#slideimg{
display:block;	
	
}
#myCarousel1{
display:none;	
	
}

#slideimg1{
display:block;	
	
}



.impossible .row .process {
    //font-family: 'tradegothic-bold',Arial,sans-serif;
    text-transform: uppercase;
    color: #ba1a1a;
    letter-spacing: 1.8px;
    margin: 10px 0 0 0;
	
}

.impossible .row .heading {
    margin: 10px 0;
    //font-family: AbrilDisplay-Bold,Arial,sans-serif;
    font-size: 40px;
    line-height: 38px;
    letter-spacing: 2px;
    color: #2c3644;
    max-width: 375px;
}
.impossible .row .details {
    //font-family: 'circular',Arial,sans-serif;
    font-size: 12px;
    color: #798689;
    line-height: 22px;
	padding:1% auto;
	text-align:justify;

}

.callout .tab .heading {
    color: #2c3644;
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1.05px;
    margin: 5px 0;
    transition: all 0.25s ease-in-out 0s;
}
p {
    font-size: 14px;
    line-height: 24px;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 10px;
}
.callout .tab .cta {
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    font-size:7px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    height: 30px;
    padding: 0 0 12px 15px;
    margin-right: -30px;
    /*float: right;*/
    z-index: 5;
    position: relative;
    border: none;
}

.callout .tab {
    padding-top: 30px;
    padding-bottom: 195px;
	

	
}
	.callout .container .row .tab{
	margin-top:0%;
	
	}
	#tab-browse{width:30%;}
	#flexslider-responsve{width:70%;}
	
	#slideimg2{width:100%;}	
	.slideimg2-responsive{float:left;width:33.3%;}
	#slideimg2 .slideimg2-responsive a img{width:90%;}
/*	
	#slideimg1 .flexslider ul li a{float:left;width:30%;}
	#slideimg1{margin:10%;transform:skew(0deg, 0deg);}
	#slideimg1 .flexslider .info {transform:skew(0deg, 0deg);width:13%;display:none;}
	
	.bg:hover, .bg:focus{display:none;}*/
	#slideimg1 .flexslider .slides .sliders{float:left;width:33.3%;}
	#slideimg1 .flexslider .slides .sliders a img{width:100%;}
	#slideimg1{transform:skew(0deg, 0deg);padding:10% 10% !important;}
	#slideimg1 .flexslider .info {transform:skew(0deg, 0deg);}
	
	#middiv .btn{margin-top:20px;}
	
	.process .info .heading {
   
    font-size: 30px;
    letter-spacing: 7.2px;
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
}
.process .info .intro {
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
	font-size:15px;
	font-weight:600;
}
	.online-process .process .details {
    font-family: "circular-bold",Arial,sans-serif;
    font-size: 13px;
    letter-spacing: 0.35px;
    line-height: 18px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 1px rgba(2, 2, 2, 0.75);
    transition: all 0.25s ease-in-out 0s;
	color:white;
}
	
	/*.browse-custom-collection{margin-left:40%;}
	.browse-custom-collection #zindex {margin-top:-17%;}*/
	.callout .container{width:100%;}
	
#exdiv{
	display:none;
	
}
#middiv{
padding-left: 8px;
}
#myCarousel122, #middiv{
   /* margin: 1% 20%;*/
	//padding:5% auto;
   // text-align: center;
}
h1{
	font-size:22px;
	
}


#divback11{
	    height: 230px;
    background-color: #000000;
    background-position: -310px 14%;
	
	
	
}
#divback1{
	margin-left:2%;
	margin-right:2%;
	float:right;
	width:100% !important;
}
	
		

#divback1 h4{
	    font-size: 12px !important;
	
}#divback1 h1{
    font-size: 16px !important;
}

#divback1 p{
    font-size: 11px !important;
    line-height: 17px !important;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 5px;
	padding:0% 4%;
	
}
/*#divback1 p strong{
   display:none;
	
}*/

 


#3rdslider{
    /* transform: skew(0deg, 0deg); */
    margin-top:0px;
}
	#myCarousel{height:10%;margin:0% 20%;}
	.carousel-inner{height:1}
	#myCarousel11 #myCarousel{width:80%;margin:0% 10%;}
	
}
@media only screen and (min-width:768px) and (max-width: 1024px) {
		#mainsliders{
	height:100%;
	width:100%;
	
}
	
#jssor_1{
display:none;	
	
}
#maindivimg{
display:block;	
height:250px;	
}

#sidehead111{
	font-size: 16px;
	
}

p.details{
	font-size: 12px;
	word-spacing:-3px;
	color:#000;
}
.callout .tab {
    margin-top: 0;
}
.container {
    padding-right: 5%;
    padding-left:  5%;
    margin-right: auto;
    margin-left: auto;
}



#slideimg{
display:block;	
	
}
#myCarousel1{
display:none;	
	
}

#slideimg1{
display:block;	
	padding-left:0px;
	margin-top:-5px;
	
}
	#slideimg1 .flexslider .slides .sliders{padding-right:0px;}
	#slideimg1 .flexslider{padding-right:10px;}



.impossible .row .process {
    //font-family: 'tradegothic-bold',Arial,sans-serif;
    text-transform: uppercase;
    color: #ba1a1a;
    letter-spacing: 1.8px;
    margin: 10px 0 0 0;
	
}

.impossible .row .heading {
    margin: 5px 0;
    //font-family: AbrilDisplay-Bold,Arial,sans-serif;
    font-size: 20px;
    line-height: 19px;
    letter-spacing: 1px;
    color: #2c3644;
    max-width: 375px;
}
.impossible .row .details {
    //font-family: 'circular',Arial,sans-serif;
    font-size: 12px;
    color: #798689;
    line-height: 22px;
	padding:1% auto;
	text-align:justify;

}

.callout .tab .heading {
    color: #2c3644;
    font-size: 18px;
    font-weight: bold;
    /*letter-spacing: 1.05px;*/
    /*margin: 5px 0;*/
   /* transition: all 0.25s ease-in-out 0s;*/
}
p {
    font-size: 14px;
    line-height: 24px;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 10px;
}
.callout .tab .cta {
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    font-size:7px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    height: 30px;
    padding: 0 0 12px 15px;
    margin-right: -30px;
   /* float: right;*/
    z-index: 5;
    position: relative;
    border: none;
}

.callout .tab {
    padding-top: 30px;
    padding-bottom: 195px;

	
}
	
	.callout .container .row .tab{
	margin-top:0%;
	}
	#tab-browse{width:30%;}
	#flexslider-responsve{width:70%;}
	
	#slideimg2{width:100%;}
	/*#slideimg1{margin:10%;transform:skew(0deg, 0deg);}
	#slideimg1 .flexslider .info{display:none;}
	#slideimg1 .flexslider ul li a{float:left;width:30%;}*/
	.slideimg2-responsive{float:left;width:33.3%;}
	#slideimg2 .slideimg2-responsive a img{width:90%;}
	.slides .sliders{}
	
	/*.browse-custom-collection{margin-left:64%;}
	.browse-custom-collection #zindex {margin-top:-17%;}*/
	.callout .container{width:100%;}
	
	.process .info .heading {
   
    font-size: 30px;
    letter-spacing: 7.2px;
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
}
.process .info .intro {
    transition: all 0.25s ease-in-out 0s;
	text-transform: uppercase;
	font-size:15px;
	font-weight:600;
}
	
	.online-process .process .details {
    font-family: "circular-bold",Arial,sans-serif;
    font-size: 13px;
    letter-spacing: 0.35px;
    line-height: 18px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 1px rgba(2, 2, 2, 0.75);
    transition: all 0.25s ease-in-out 0s;
	color:white;
}
	.process .info .cta{position:relative;left:-50%}
	.slides .sliders .bg{height:300px;}
	#slideimg1 .flexslider{position:relative;top:-25px;}
#exdiv{
	display:none;
	
}
#middiv{
padding-left: 8px;
}
#myCarousel122, #middiv{
   /* margin: 1% 20%;*/
	//padding:5% auto;
   // text-align: center;
}
h1{
	font-size:22px;
	
}



	 #divback11{
	 
		 max-height:280px;
	 min-height:220px;
	  background-size:100% auto;
 }
#divback1{
	margin-left:2%;
	margin-right:2%;
	float:right;
	width:60%;
}
	
		

#divback1 h4{
	    font-size: 14px;
	
}#divback1 h1{
    font-size: 16px;
}

#divback1 p{
    font-size: 12px;
    line-height: 17px;
    color: #727272;
    letter-spacing: .01em;
    margin-bottom: 5px;
	padding:0% 4%;
	
}
/*#divback1 p strong{
   display:none;
	
}*/

 


#3rdslider{
    /* transform: skew(0deg, 0deg); */
    margin-top:0px;
}
	#myCarousel{height:10%;margin:0% 20%;}
	.carousel-inner{height:1}
	#myCarousel11 #myCarousel{width:80%;margin:0% 10%;}
	

	
}
@media only screen and (min-device-width:1024px) and (max-width: 1368px) {
		
		
}
@media only screen and (min-device-width:1368px) and (max-width: 1800px) {
		
		
}
@media only screen and (min-device-width: 1800px) {
	
	
}
#stylelounge{
	top:17%;color:#000;position: absolute;width: 100%;
}

.callout .tab {
    background-color:#E8E8E8 ;
    padding-bottom: 24%;
    padding-top: 24%;
    transition: all 0.25s ease-in-out 0s;
}
.dates {
    color: #c31a21;
    font-family: AbrilDisplay-Bold,Arial,sans-serif;
    font-size: 13px;
    font-weight: bold;
    padding: 10px;
}
.tab-inner {
    padding: 0 10px;
}
.slide {
    float: left;
	padding-top:12%;
	padding-bottom: 3%;

}
.item 
{
	 text-align: center;
}
.item a .img-responsive
{
	margin: 5px auto;
}
.callout .tab {
    margin-top: -20%;
}
/*
@media only screen and (min-device-width:300px) and (max-width: 800px) {

}*/

.callout .tab {
	padding-top:30px;
    padding-bottom: 10px;
	
}




p.details{text-align: justify;
word-spacing:-3px;
    line-height: 1.7;
 }

 .container {
    padding-right: 3%;
    padding-left:  3%;
    margin-right: auto;
    margin-left: auto;
}


.callout .flexslider .slide {
    width: 33%;
    //float: left;
}


</style>
<?php

	 $homecontent = $this->footer->getHomepageContent();	
?>
<section class="callout">
	<div class="container">
	

		<div class="row">		 
			<div class="col-xs-6 col-md-3" id="tab-browse">
				<div class="tab">
					<div class="tab-inner">
						<div class="dates" >
						<?php echo  $homecontent["content_title"] ?>
						</div>
						<div class="wrap">
						<h2 class="heading" id="sidehead111"><?php  echo $homecontent["content_header"] ?></h2>
						<p class="details"><?php  echo $homecontent["content_text"] ?>
					
						</p>
					
				</div>
					</div>
					<br>
					<div class="browse-custom-collection">
					<a  id="zindex" href="<?php  echo $homecontent["content_link_url"] ?>" class="cta btn"><?php  echo $homecontent["content_link_label"] ?></a>										
					
					</div>
				</div>
			</div>
			
<?php

$cate_list = unserialize($homecontent['category']);

 ?>
 
 
 
 <script>
$(window).resize( function() {

/*window.location.href = window.location.href;*/
	 var w = window.innerWidth;
    var h = window.innerHeight;

	var slider = document.getElementById("jssor_1");
          var slider1 = document.getElementById("maindivimg");
	
	var divslider = document.getElementById("myCarousel1");
          var divslider1 = document.getElementById("slideimg");
		  
		  var divslider0111 = document.getElementById("myCarousel122");
		  	var divslider01 = document.getElementById("myCarousel11");
          var divslider11 = document.getElementById("slideimg1");
		   var divslider110 = document.getElementById("slideimg2");
		  
    if (w<=576) {
		divslider1.style.display = "none";
		divslider.style.display = "block";
    
        divslider11.style.display = "none";
		divslider01.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "block";
		
		slider.style.display = "none";	
		slider1.style.display = "block";
		
    }
	
    else {
    
		divslider11.style.display = "block";
		divslider01.style.display = "none";		
		
		divslider1.style.display = "block";
		divslider.style.display = "none";
		
	    divslider110.style.display = "block";
		divslider0111.style.display = "none";
		 
		slider.style.display = "block";	
		slider1.style.display = "none";
	}
     

});


 window.onload = function() {
	 var w = window.innerWidth;
    var h = window.innerHeight;

	var slider = document.getElementById("jssor_1");
          var slider1 = document.getElementById("maindivimg");
	
	var divslider = document.getElementById("myCarousel1");
          var divslider1 = document.getElementById("slideimg");
		  
		  var divslider0111 = document.getElementById("myCarousel122");
		  	var divslider01 = document.getElementById("myCarousel11");
          var divslider11 = document.getElementById("slideimg1");
		   var divslider110 = document.getElementById("slideimg2");
		  
    if (w<=576) {
		divslider1.style.display = "none";
		divslider.style.display = "block";
    
        divslider11.style.display = "none";
		divslider01.style.display = "block";
		
		divslider110.style.display = "none";	
		divslider0111.style.display = "block";
		
		slider.style.display = "none";	
		slider1.style.display = "block";
		
    }
	
    else {
    
		divslider11.style.display = "block";
		divslider01.style.display = "none";		
		
		divslider1.style.display = "block";
		divslider.style.display = "none";
		
	    divslider110.style.display = "block";
		divslider0111.style.display = "none";
		 
		slider.style.display = "block";	
		slider1.style.display = "none";
	}
     
	
	
	
}
</script>
			<div class="col-xs-6 col-md-9" id="flexslider-responsve">
<div class=" flexslider-container">

<!-- slider div -->
<div id="myCarousel1" style="display:none;"style="  padding-top: 0%;
    padding-bottom:0;"  >
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
 

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
<a href="<?php echo $cate_list[0]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[0]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[0]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[0]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[0]["cate_link"]; ?>" class="start">
<?php echo $cate_list[0]["cate_link_label"]; ?>
</a>
 
 </div>

      <div class="item">
   <a href="<?php echo $cate_list[1]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[1]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[1]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[1]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[1]["cate_link"]; ?>" class="start">
<?php echo $cate_list[1]["cate_link_label"]; ?>
</a>
</div>
    
     

      <div class="item">
      <a href="<?php echo $cate_list[2]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[2]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[2]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[2]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[2]["cate_link"]; ?>" class="start">
<?php echo $cate_list[2]["cate_link_label"]; ?>

</a>
  
  </div>
    </div>
 </div>
  </div>



<div class="row flexslider" id="slideimg" style="">
<ul class="slides">
<li class="slide">
 
<div class="item">
<a href="<?php echo $cate_list[0]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[0]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[0]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[0]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[0]["cate_link"]; ?>" class="start">
<?php echo $cate_list[0]["cate_link_label"]; ?>
</a>
</div>
</li>

<li class="slide">
 
<div class="item">
<a href="<?php echo $cate_list[1]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[1]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[1]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[1]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[1]["cate_link"]; ?>" class="start">
<?php echo $cate_list[1]["cate_link_label"]; ?>
</a>
</div>
</li>

<li class="slide">
 
<div class="item">
<?php /* <a href="<?php echo $cate_list[2]["cate_link"]; ?>"><img style="max-height:227px;" src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[2]["cate_prev_img"]; ?>" class="img-responsive"></a> */ ?>
<a href="<?php echo $cate_list[2]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[2]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[2]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[2]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[2]["cate_link"]; ?>" class="start">
<?php echo $cate_list[2]["cate_link_label"]; ?>

</a>
</div>
 
<?php /*
<div class="item">
<a href="<?php echo $cate_list[3]["cate_link"]; ?>"><img src="<?php echo  $front_base_url."upload/hm_category_images/".$cate_list[3]["cate_prev_img"]; ?>" class="img-responsive"></a>
<p class="title"><?php echo $cate_list[3]["cate_title"]; ?></p>
<p class="description"><?php echo $cate_list[3]["cate_desc"]; ?></p>
 
<a href="<?php echo $cate_list[3]["cate_link"]; ?>" class="start">
<?php echo $cate_list[3]["cate_link_label"]; ?>

</a>
</div> */ ?>
</li>
 

 
 
</ul>
</div>


 <style>
  .carousel-inner > .item > img
	 {
      width: 100%;
	  height:120%;
      margin:5% auto;
	 
  }
  #myCarousel11 #myCarousel .carousel-inner > .item > a > img {
      width: 100%;
	 
      margin:5% auto;
	 
  }
  
  
  </style>

  
  
  
  
  <!-- slider div -->








</div>
</div>
		</div>
	</div>
</section>

<?php

$appointment_list = unserialize($homecontent['appointment']);


 ?>
 <style>
 
 @media screen and (min-width: 300px) and (max-width: 768px){
   #divback11{
	 
		 max-height:220px;
	 min-height:220px;
	  background-size:100% auto;
 }
 /*
 .bg:hover, .bg:focus {
    filter: url;
    -webkit-filter: url;
	color:#000;
}*/


#3rdslider{
    /* transform: skew(0deg, 0deg); */
    margin-top:0px;
}








}
 #divback11{
	 

	 min-height:220px;
	  background-size:100% auto;
 }
 </style>
 
<div id="divback11" class="divback" style=" height:350px;background-color:#000000; background-position: 0 12%;background-repeat:no-repeat;background-image: url('<?php echo  $front_base_url."upload/hm_category_images/".$appointment_list["imagefile"]; ?>')" height="350px">

<div style="float:right;padding-right:2%;color:#ffffff;" id="divback1">
<div style="text-align:center;width:100%;padding-top:5%;">
<?php echo $appointment_list["content"]; ?>
</div>
</div>
</div>


<div align="center">
<div>

<?php

$block3_list = unserialize($homecontent['block3']);
 ?>
<h1><?php echo $block3_list["header"] ?></h1>
<h4><?php echo $block3_list["content"] ?></h4>
</div>

<div align="center" id="slideimg2">
	<div class="col-xs-12 col-md-4 slideimg2-responsive">
	<a href="<?php echo $block3_list["link1"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image1"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image1_content"] ?>
	</a>
	</div>
	<div class="col-xs-12 col-md-4 slideimg2-responsive">
	<a href="<?php echo $block3_list["link2"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image2"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image2_content"] ?>
	</a>
	</div>
	<div class="col-xs-12 col-md-4 slideimg2-responsive">
	<a href="<?php echo $block3_list["link3"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image3"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image3_content"] ?>
	</a>
	</div>
</div>
<style>
    padding-top: 0%;
    padding-bottom: -2%;

	</style>
 <div id="myCarousel122" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" style="  padding-top: 0%;
    padding-bottom: 0;" >
    <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	<a href="<?php echo $block3_list["link1"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image1"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image1_content"] ?>
	</a></div>

	
      <div class="item">
	<a href="<?php echo $block3_list["link2"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image2"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image2_content"] ?>
	</a></div>
    
     

      <div class="item">
	<a href="<?php echo $block3_list["link3"]; ?>">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$block3_list["image3"]; ?>" width="70%">
	<br>
	<?php echo $block3_list["image3_content"] ?>
	</a> </div>
    </div>
 </div>

</div>










</div>

<style>
.impossible-wrap {
    background: transparent none repeat scroll 0 0;
    min-height: 350px;
}
.process .sliders .info {
    pointer-events: none;
    top: 150px;
    transform: skew(0deg, 15deg);
}
.process .sliders .info {
    color: white;
    left: 10%;
    position: absolute;
    text-align: center;
    top: 13%;
   transform: skew(0deg, 15deg);
    width: 80%;
}
.process .sliders img {
    margin: 0;
    transform: scale(1.25);
    transition: all 0.25s ease-in-out 0s;
}
.process
{
 transform:skew(0deg, -13deg);
 margin-top:12px;

}
.impossible .heading {
    font-size: 60px;
    font-weight: bold;
    line-height: 78px;
}
.online-process
{
min-height:450px;

}
.build-wardrobe {
    margin: 20px auto;
    text-align: center;
}
	
.bg:hover, .bg:focus {
    filter: url("<?php echo  $front_base_url."upload/hm_category_images/blur.svg#blur";?>");
    -webkit-filter: url("<?php echo  $front_base_url."upload/hm_category_images/blur.svg#blur";?>");
}
	

.process-header{
    color: #ba1a1a;
    font-family: "tradegothic-bold",Arial,sans-serif;
    letter-spacing: 1.8px;
    margin: 10px 0 0;
    text-transform: uppercase;
}
.columns-grp {
    float: left;
    margin: 0;
    width: 100%;
}
.callout .tab .tab-inner {
    padding: 0 5%;
}
.callout .tab .heading {
    color: #2c3644;

    font-size: 22px;
	font-weight:bold;
    letter-spacing: 1.05px;
    margin: 5px 0;
    transition: all 0.25s ease-in-out 0s;
}
.callout .tab .heading {
    font-size: 20px; 
	
}
body {
    margin: 0 auto;
    max-width: 1920px;
    overflow-x: hidden;
    position: relative;
    width: 100%;
}
.callout .tab .cta::after {
    background-color: #891620;
    background-position: center center;
    background-size: 20% auto;
    height: 30px;
    position: relative;
    transition: all 0.25s ease-in-out 0s;
    width: 30px;
    z-index: 5;
}
.btn::after {
    background-image: url("/home/images/arrow-right.png");
    background-position: center top;
    background-repeat: no-repeat;
    content: "";
    display: inline-block;
    height: 14px;
    margin-left: 10px;
    vertical-align: middle;
    width: 6px;
}

*::before, *::after {
    box-sizing: border-box;
}
.callout .tab .cta::after {
    height: 45px;
}
.callout .tab .cta::after {
    height: 42.5px;
}
.callout .tab .cta::after {
    height: 40px;
}
.callout .tab .cta::after {
    height: 37.5px;
}
.callout .tab .cta::after {
    height: 35px;
}
.callout .tab .cta::after {
    height: 32.5px;
}
.callout .tab .cta::after {
    height: 30px;
}
.callout .tab .cta::after {
    background-color: #891620;
    background-position: center center;
    background-size: 20% auto;
    height: 30px;
    position: relative;
    transition: all 0.25s ease-in-out 0s;
    width: 30px;
    z-index: 5;
}
.btn::after {
    background-image: url("/home/images/arrow-right.png");
    background-position: center top;
    background-repeat: no-repeat;
    content: "";
    display: inline-block;
    height: 14px;
    margin-left: 10px;
    vertical-align: middle;
    width: 6px;
}
*::before, *::after {
    box-sizing: border-box;
}
.callout .tab .cta {
    height: 45px;
}
.callout .tab .cta {
    height: 42.5px;
}
.callout .tab .cta {
    height: 40px;
}
.callout .tab .cta {
    height: 37.5px;
}
.callout .tab .cta {
    height: 35px;
}
.callout .tab .cta {
    height: 32.5px;
}
.callout .tab .cta {
    height: 30px;
}
.callout .tab .cta {
    font-size: 15px;
}
.callout .tab .cta {
    font-size: 14.1667px;
}
.callout .tab .cta {
    font-size: 13.3333px;
}
.callout .tab .cta {
    font-size: 12.5px;
}
.callout .tab .cta {
    font-size: 11.6667px;
}
.callout .tab .cta {
    font-size: 10.8333px;
}
.callout .tab .cta {
    font-size: 10px;
}
.callout .tab .cta {
    border: medium none;
    //float:right;
    font-size: 9px;
    height: 30px;
    margin-right:-30%;
    padding: 0 0 6px 5px;
    position: relative;
    transition: all 0.25s ease-in-out 0s;
    z-index: 5;
}
.btn, .btn:hover, .btn:active, .btn:visited, .btn:focus {
    color: #ffffff;
    text-decoration: none;
}
.btn {
    background-color: #ba1a1a;
    border-radius: 0;
    font-family: "tradegothic",Arial,sans-serif;
    font-size: 12px;
    line-height: 0;
    padding: 15px 15px 12px;
    text-transform: uppercase;
    vertical-align: middle;
}
.hr-div{
background-color:#fff;
}
.margin-top30 {
    margin-top: 0;
}
</style>

<div class="row col-sm-12 build-wardrobe" id="middiv">

<input type="button"  style="font-weight:bold" class=" btn btn-info btn-md" onclick="location.href='http://www.stylior.com/3dshirt';" value="BUILD YOUR WARDROBE" />

</div>

<?php $online_process_list = unserialize($homecontent['online_process']); ?>

<div class="columns-grp" style="padding-bottom:10px;"></div>
<div class="row col-sm-12 online-process">

<h3><div  class="process-header" ><?php echo $online_process_list['header']; ?></div></h3>
<div class="col-sm-6">
 
<div class="impossible">
<div class="containr">
 
 <style>
 .col-xs-12 h1.heading{
	 
 }
 
 
 .col-xs-12 p.details{
	 text-align:justify
 }
 </style>
 
 
<div class="row">
<div class="col-xs-12">
<h1 class="heading"><?php echo $online_process_list['header_content']; ?></h1>
<p class="details"><?php echo $online_process_list['header_desc']; ?></p>
</div>
</div>
</div>
</div>
</div>
<?php $online_process_right_list = unserialize($homecontent['online_process_right']);

 ?>
<div class="col-sm-6" id="3rdslider">

 
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  height:100%
      margin:5% auto;
	 
  }
  
  .stylior1{
	  margin-top:-150%;
	  
  }
  
  
  </style>
 

 
 
 <div id="myCarousel11" style="display:none; ">
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
   <ol class="carousel-indicators" style=" margin-bottom:10px;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	
      <div class="item active">
 <a href="<?php echo $online_process_right_list["block1"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block1"]['bg']; ?>" class="img-responsive bg">
 
<div class="info stylior1">
<h4 class="intro" style="color:#fff;"><?php echo $online_process_right_list["block1"]['intro']; ?></h4>
<h2 class="heading" style="color:#fff;"><?php echo $online_process_right_list["block1"]['heading']; ?></h2>
<p class="details1" style="color:#fff;"><?php echo $online_process_right_list["block1"]['content']; ?></p>
<span class="btn cta"><?php echo $online_process_right_list["block1"]['btn_label']; ?></span>
</div>
</a>


</div>

      <div class="item">
<a href="<?php echo $online_process_right_list["block2"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block2"]['bg']; ?>" class="img-responsive bg">
 
<div class="info stylior1">
<h4 class="intro" style="color:#fff;"><?php echo $online_process_right_list["block2"]['intro']; ?></h4>
<h2 class="heading" style="color:#fff;"><?php echo $online_process_right_list["block2"]['heading']; ?></h2>
<p class="details1" style="color:#fff;"><?php echo $online_process_right_list["block2"]['content']; ?></p>
<span class="btn cta" ><?php echo $online_process_right_list["block2"]['btn_label']; ?></span>
</div>
</a></div>
    
     

      <div class="item">
<a href="<?php echo $online_process_right_list["block3"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block3"]['bg']; ?>" class="img-responsive bg">
 
<div class="info stylior1">
<h4 class="intro" style="color:#fff;"><?php echo $online_process_right_list["block3"]['intro']; ?></h4>
<h2 class="heading" style="color:#fff;"><?php echo $online_process_right_list["block3"]['heading']; ?></h2>
<p class="details1" style="color:#fff;"><?php echo $online_process_right_list["block3"]['content']; ?></p>
<span class="btn cta" style="color:#fff;"><?php echo $online_process_right_list["block3"]['btn_label']; ?></span>
</div>
</a> </div>
    </div>
 </div>

</div>
 
 
 <div class="container-fluid flexslider-container process" id="slideimg1">
 

<div class="row flexslider" style="display:; " >
 
<ul class="slides">
<li class="col-sm-4 fit sliders">
<a href="<?php echo $online_process_right_list["block1"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block1"]['bg']; ?>" class="img-responsive bg">
 
<div class="info">
<h4 class="intro"><?php echo $online_process_right_list["block1"]['intro']; ?></h4>
<h2 class="heading"><?php echo $online_process_right_list["block1"]['heading']; ?></h2>
<p class="details"><?php echo $online_process_right_list["block1"]['content']; ?></p>
<span class="btn cta"><?php echo $online_process_right_list["block1"]['btn_label']; ?></span>
</div>
</a>
</li>
<li class="col-sm-4 fabric sliders">
<a href="<?php echo $online_process_right_list["block2"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block2"]['bg']; ?>" class="img-responsive bg">
 
<div class="info">
<h4 class="intro"><?php echo $online_process_right_list["block2"]['intro']; ?></h4>
<h2 class="heading"><?php echo $online_process_right_list["block2"]['heading']; ?></h2>
<p class="details"><?php echo $online_process_right_list["block2"]['content']; ?></p>
<span class="btn cta"><?php echo $online_process_right_list["block2"]['btn_label']; ?></span>
</div>
</a>
</li>
<li class="col-sm-4 finish sliders">
<a href="<?php echo $online_process_right_list["block3"]['btn_link']; ?>">
 
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$online_process_right_list["block3"]['bg']; ?>" class="img-responsive bg">
 
<div class="info">
<h4 class="intro"><?php echo $online_process_right_list["block3"]['intro']; ?></h4>
<h2 class="heading"><?php echo $online_process_right_list["block3"]['heading']; ?></h2>
<p class="details"><?php echo $online_process_right_list["block3"]['content']; ?></p>
<span class="btn cta"><?php echo $online_process_right_list["block3"]['btn_label']; ?></span>
</div>
</a>
</li>
</ul>


</div>








</div>


</div>

</div>
<?php $news_block_list = unserialize($homecontent['news_block']); ?>

<div class="columns-grp" style="padding-bottom:20px;">

<div align="center">

<div style="padding:40px;" id="exdiv">

<div style="margin: 0 auto;background-color:#fff;height:10px;width:100%;width: 100vw;">&nbsp;&nbsp;</div>
<h4><div  class="process-header" ><?php echo $news_block_list["header"] ?></div></h4>

<h4><?php echo $news_block_list["content"] ?></h4>
</div>
<div align="center">


<?php
ksort($news_block_list["image"]);
$news_block_list["image"] = array_slice($news_block_list["image"], 0, 4);
foreach($news_block_list["image"] as $index=>$image)
{
?>
	<div class="col-xs-12 col-md-3">
	<div style="height:50px;">
	<img src="<?php echo  $front_base_url."upload/hm_category_images/".$image; ?>">
	</div>
	<br>
	<?php
	echo $news_block_list["image_content"][$index];
	
	?>
	</div>
	
<?php
}
?>
	
</div>
</div>
<style>
@media screen and (min-width: 300px) and (max-width: 768px){
	#btmmbnr{
		height:160px;
		width:100%
		
	}
	
	#btmmbnr #btmmbnr1{
		height:170px;
		width:100%
		
	}
	
	#btmmbnr #btmmbnr1 img{
		height:180px;
		width:100%
		
	}
	.margin-top30 {
    margin-top: 0;
    margin-left: 0%;
}

#btmmbnr1 h2{
	font-size:22px;
	
}
#3rdslider .process {
    /* transform: skew(0deg, -13deg); */
    margin-top: 12px;
}
#myCarousel11 .stylior1 h4,h2,p{
	//color:#fff;
//font-weight:600;
//padding-bottom:50px;	
}
	#myCarousel11 .stylior1 span{

padding-bottom:30px;
font-size:12px;	
}
}




<!-- landscape -->
@media only screen 
  and (min-device-width: 480px) 
  and (max-device-width: 768px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {


.callout .tab .cta {
  
}


}



</style>
<?php $blog_list = unserialize($homecontent['blog_list']); ?>
<div class="columns-grp" style="padding:20px 0 0 0;" id="btmmbnr">
<div style="width:100%;text-align:center;position: relative;" id="btmmbnr1">
<img src="<?php echo  $front_base_url."upload/hm_category_images/".$blog_list["imagefile"]; ?>" />
<div id="stylelounge" style="">
<?php echo $blog_list["content"]; ?>
</div>
</div>
</div>


</main>

<script>

	
$(document).ready(function(){

$(".sliders").mouseover(function() {

	$(this).addClass("hoverele");

 }).mouseout(function() {
 
	$(this).removeClass("hoverele");
}) 
});
</script>
<?php include ('includes/footer.php'); ?>
 </body>
</html>