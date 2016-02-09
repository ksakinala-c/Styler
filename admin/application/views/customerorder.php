<?php 
	$front_base_url = $this->config->item('front_base_url');
	$base_url 		= $this->config->item('base_url');
	$http_host 		= $this->config->item('http_host');
	$base_url_views = $this->config->item('base_url_views');
	$base_upload = $this->config->item('upload');
?>
 
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Order Detail</title>
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="<?php echo $base_url_views;?>favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $base_url_views;?>favicon.ico" type="image/x-icon" />
    <meta property="og:url"  content="#"/>
    <meta property="og:title"  content="Emphasis Home Page"/>
    <meta property="og:image"  content="<?php echo $base_url_views;?>images/logo.gif"/>
    <meta property="og:locale" content="en_us" /> 
    <meta property="og:description" content="Default Description" /> 
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = '#';
    var BLANK_IMG = 'images/spacer.gif';
//]]>
</script>
<![endif]-->
<link href="<?php echo $base_url_views;?>style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_url_views;?>jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/3a57829dcb2c3feb6c633d79e8661a88.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/d31062e587471f9624a5964f2070928a.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/dc2143a91c892b975f4882b30d5b0acd.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/0e17a40b63a9bec132b76d4fad559863.css" media="print" />
<script type="text/javascript" src="<?php echo $base_url_views;?>js/be56170b1a7f960ebe16add484eb49aa.js"></script>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/aa5c43295e927bea2a2624501bbf4058.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php echo $base_url_views;?>js/9819bec4e8fb29fd01ff8a904b9e2a2f.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/emphasis/livepreview';
Mage.Cookies.domain   = '#';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
<link href='http://fonts.googleapis.com/css?family=Overlock:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Volkhov:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
background-image:url(file:///D|/xampp/htdocs/ollo/site/views/images/45degreee_fabric.png); background-color:#8F8F8F; background-repeat:repeat; background-position:center top; background-attachment:scroll; background-size:auto; }

 
.minimal-price-link .label,.minimal-price-link .price,.product-view .product-shop .add-to-links a i,.info-set .data-table .product-name,.multiple-checkout .data-table .product-name,.email-friend i,.price,.special-price .price { color:#c72732; font-size:14px; font-weight:bold; }
::-moz-::selection, ::selection { background-color:#19060C; color:#fff; }
.section-container.tabs > section.active > .content,.section-container.tabs > .section.active > .content, header .top-cart .block-content, header .form-search .search-autocomplete { border-top:4px solid #19060C !important }
a:hover, a:focus,.block-layered-nav .block-title { color:#19060C }
/* Background Color */
.category-title h1, #top-header,.sorter .view-mode a.grid:hover,.sorter .view-mode a.list:hover, header .top-cart .block-title i, header .form-search button.button,.category-description,.label-new,.products-grid li.item button,.bx-wrapper .bx-controls-direction a:hover,.prefooter .social a:hover,.opc .active .step-title,.top-cart.full .block-title:hover, button,.button, header .top-cart.full i,.section-container > section > .title,.section-container > .section > .title,.section-container.tabs > section,.section-container.tabs > .section, footer, header.dark,.home-message,#slides .caption-title,#slides .caption-subtitle,.color2 { background-color: #E84179 }
.products-grid li.item .product-image span,.sorter .view-mode .grid,.sorter .view-mode .list,.sorter .view-mode span,.nav-container,.block-left-menu ul li.active span,.icons-round:hover span,.slidesjs-pagination li a.active,.slidesjs-pagination li a:hover.active,.prefooter .social a,  .btt, header .top-cart.full .block-title,header .top-cart .block-title:hover i,.label-sale, button:hover, button:focus,.button:hover,.button:focus,.section-container > section.active > .title,.section-container > .section.active > .title,.section-container > section.active > .title:hover , #top-header a:hover,.caption-button:hover,.home-message i,.home-message span.icon,.std span[class^="icon-"],.std span[class*=" icon-"],.color1,.section-container > section.active > .title a,.section-container > .section.active > .title a,#slides .caption-button { background-color:#19060C; color: #fff; }

body { font-family:  'Overlock'; }
h1,h2,h3,h4,h5,h6,#slides .slide .button,header .logo,.category-description,.nav-container a,.cart .totals tfoot th strong,.cart .totals tfoot td strong,.home-message h3,.nav-container .menu-mobile em,.tp-simpleresponsive .caption-title,header .form-search input,.label-new,.label-sale,.button,button,.caption-button,.block .block-title { font-family:  'Volkhov'; /* font-weight: normal !important; */ }

</style>
<!-- PANEL -->
<style>
body.panel-layout-boxed { padding:20px 0; }
body.panel-layout-boxed .wrapper { background:#FFFFFF; box-shadow: 0 0 5px rgba(0, 0, 0, 0.23);margin: 0 auto;max-width: 1050px; display:block; overflow:hidden; }
</style>
<link rel="stylesheet" href="<?php echo $base_url_views;?>css/themepanel.css" type="text/css" />
<script type="text/javascript" src="<?php echo $base_url_views;?>js/jquery.fontselect.js"></script>
<script type="text/javascript" src="<?php echo $base_url_views;?>js/jquery.minicolors.min.js"></script>
<script>
jQuery(document).ready(function() {
	
	
	jQuery('#themePanel').delay(500).animate({ left: -300, }, 500 );
	
	jQuery("body").delegate(".theme-toggle.closed", "click", function() {
		jQuery('#themePanel').animate({ left: 0, }, 500 );
		jQuery('body').animate({ marginLeft: 300, }, 500 );
		jQuery(this).removeClass('closed').addClass('opened');
	});
	jQuery("body").delegate(".theme-toggle.opened", "click", function() {
		jQuery('#themePanel').animate({ left: -300, }, 500 );
		jQuery('body').animate({ marginLeft: -300, }, 500 );
		jQuery(this).removeClass('opened').addClass('closed');
	});
	
	jQuery('#layout_type').change(function(){
		
 	if(jQuery(this).val() == '0'){ 
		
		jQuery('.wrapper').removeClass('layout_boxed');
		jQuery('.opt-hidden').hide();
	
	} else if (jQuery(this).val() == '1'){ 
		
		jQuery('.wrapper').addClass('layout_boxed');
		jQuery('.opt-hidden').show();
	} 
	
	});
	jQuery('#header_type').change(function(){
 	if(jQuery(this).val() == '1'){ 
		jQuery('header').addClass('dark');
		jQuery('.logo img').attr('src','<?php echo $base_url_views;?>images/logo-footer.png');
	
	} else if (jQuery(this).val() == '0'){ 
		jQuery('header').removeClass('dark');
		jQuery('.logo img').attr('src','<?php echo $base_url_views;?>images/logo.png');
	} 
	
	});
	jQuery('#font1').fontselect().change(function(){
        
          // replace + signs with spaces for css
          var font = jQuery(this).val().replace(/\+/g, ' ');
          
          // split font into family and weight
          font = font.split(':');
          
          // set family on paragraphs 
          jQuery('body').css('font-family', font[0]);
     });
		
	jQuery('#font2').fontselect().change(function(){
	
	  // replace + signs with spaces for css
	  var font = jQuery(this).val().replace(/\+/g, ' ');
	  
	  // split font into family and weight
	  font = font.split(':');
	  
	  // set family on paragraphs 
	  jQuery('h1,h2,h3,h4,h5,h6,#slides .slide .button,header .logo,.category-description,.nav-container a,.cart .totals tfoot th strong,.cart .totals tfoot td strong,.home-message h3,.nav-container .menu-mobile em,.tp-simpleresponsive .caption-title,header .form-search input,.label-new,.label-sale,.button,button,.caption-button,.block .block-title').css('font-family', font[0]);
	});
	
	jQuery('#color1').minicolors({
	change: function(hex, opacity) {
	jQuery('.products-grid li.item .product-image span,.sorter .view-mode .grid,.sorter .view-mode .list,.sorter .view-mode span,.nav-container,.block-left-menu ul li.active span,.icons-round:hover span,.slidesjs-pagination li a.active,.slidesjs-pagination li a:hover.active,.prefooter .social a,  .btt, header .top-cart.full .block-title,header .top-cart .block-title:hover i,.label-sale, button:hover, button:focus,.button:hover,.button:focus,.section-container > section.active > .title,.section-container > .section.active > .title,.section-container > section.active > .title:hover , #top-header a:hover,.caption-button:hover,.home-message i,.home-message span.icon,.std span[class^="icon-"],.std span[class*=" icon-"],.color1,.section-container > section.active > .title a,.section-container > .section.active > .title a,#slides .caption-button').css('background-color',hex);				
	}
	});
	
	jQuery('#color2').minicolors({
	change: function(hex, opacity) {
	jQuery('.category-title h1, #top-header,.sorter .view-mode a.grid:hover,.sorter .view-mode a.list:hover, header .top-cart .block-title i, header .form-search button.button,.category-description,.label-new,.products-grid li.item button,.bx-wrapper .bx-controls-direction a:hover,.prefooter .social a:hover,.opc .active .step-title,.top-cart.full .block-title:hover, button,.button, header .top-cart.full i,.section-container > section > .title,.section-container > .section > .title,.section-container.tabs > section,.section-container.tabs > .section, footer, header.dark,.home-message,#slides .caption-title,#slides .caption-subtitle,.color2').css('background-color',hex);				
	}
	});
	
	jQuery('#bgcolor').minicolors({
	change: function(hex, opacity) {
	jQuery('body').css('background-color',hex);				
	}
	});
	
	var patternfolder = "http://demo.moomoothemes.com/themepanel/pattern/"
	jQuery('input:radio').click(function(){
		var pattern = jQuery(this).val();
		var path = patternfolder + pattern + ".png";
		// alert(path);
		jQuery('body').css('background-image', 'url(' + path + ')');
    });	

});
</script>

<div id="themePanel" class="hide-for-small">
  <div class="panel_content">
  
   <div class="panel-option">
      <div class="opt-title">Preset Demo</div>
      <div class="opt-content">
      
      </div>
    </div>
    
    <div class="panel-option">
      <div class="opt-title">Layout theme</div>
      <div class="opt-content">
        <select id="layout_type" name="layout">
          <option value="0" selected>Wide</option>
          <option value="1" >Boxed</option>
        </select>
      </div>
    </div>
    <div class="panel-option opt-hidden">
      <div class="opt-title">Background Color</div>
      <div class="opt-content">
        <input type="text" id="bgcolor" class="demo" value="#8F8F8F" >
      </div>
    </div>
    
    <div class="panel-option  opt-hidden">
      <div class="opt-title">Backgrounds</div>
      <div class="opt-content">
      <div class="patterns-row"><div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/no.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternno"  value="no"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/45degreee_fabric.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_pattern45degreee_fabric" value="45degreee_fabric"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/60degree_gray.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_pattern60degree_gray" value="60degree_gray"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/always_grey.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternalways_grey" value="always_grey"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/batthern.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" checked="checked" id="themeadmin_general_bg_patternbatthern" value="batthern"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/beige_paper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbeige_paper" value="beige_paper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/bgnoise_lg.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbgnoise_lg" value="bgnoise_lg"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/black_linen_v2.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblack_linen_v2" value="black_linen_v2"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/black_paper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblack_paper" value="black_paper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/black_scales.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblack_scales" value="black_scales"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/black_thread.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblack_thread" value="black_thread"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/black-Linen.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblack-Linen" value="black-Linen"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/blackmamba.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternblackmamba" value="blackmamba"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/bright_squares.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbright_squares" value="bright_squares"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/broken_noise.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbroken_noise" value="broken_noise"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/brushed_alu_dark.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbrushed_alu_dark" value="brushed_alu_dark"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/brushed_alu.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternbrushed_alu" value="brushed_alu"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/candyhole.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncandyhole" value="candyhole"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/carbon_fibre_big.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncarbon_fibre_big" value="carbon_fibre_big"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/carbon_fibre_v2.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncarbon_fibre_v2" value="carbon_fibre_v2"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/carbon_fibre.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncarbon_fibre" value="carbon_fibre"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/cardboard.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncardboard" value="cardboard"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/checkered_pattern.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncheckered_pattern" value="checkered_pattern"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/circles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncircles" value="circles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/classy_fabric.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternclassy_fabric" value="classy_fabric"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/concrete_wall_2.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternconcrete_wall_2" value="concrete_wall_2"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/concrete_wall_3.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternconcrete_wall_3" value="concrete_wall_3"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/concrete_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternconcrete_wall" value="concrete_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/connect.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternconnect" value="connect"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/cork_1.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncork_1" value="cork_1"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/crissXcross.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncrissXcross" value="crissXcross"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/crossed_stripes.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncrossed_stripes" value="crossed_stripes"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/crosses.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncrosses" value="crosses"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/cubes.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterncubes" value="cubes"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_brick_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_brick_wall" value="dark_brick_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_circles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_circles" value="dark_circles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_leather.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_leather" value="dark_leather"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_matter.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_matter" value="dark_matter"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_mosaic.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_mosaic" value="dark_mosaic"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_stripes.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_stripes" value="dark_stripes"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dark_wood.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndark_wood" value="dark_wood"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/darkdenim3.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndarkdenim3" value="darkdenim3"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/darth_stripe.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndarth_stripe" value="darth_stripe"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/denim.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndenim" value="denim"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/diagmonds.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndiagmonds" value="diagmonds"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/diagonal-noise.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndiagonal-noise" value="diagonal-noise"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/diamonds.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndiamonds" value="diamonds"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/double_lined.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndouble_lined" value="double_lined"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/dvsup.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterndvsup" value="dvsup"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/elastoplast.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternelastoplast" value="elastoplast"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/elegant_grid.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternelegant_grid" value="elegant_grid"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/exclusive_paper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternexclusive_paper" value="exclusive_paper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/fabric_1.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfabric_1" value="fabric_1"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/fabric_plaid.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfabric_plaid" value="fabric_plaid"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/fake_brick.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfake_brick" value="fake_brick"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/fancy_deboss.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfancy_deboss" value="fancy_deboss"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/felt.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfelt" value="felt"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/flowers.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternflowers" value="flowers"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/foggy_birds.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfoggy_birds" value="foggy_birds"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/foil.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternfoil" value="foil"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/gold_scale.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngold_scale" value="gold_scale"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/graphy.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngraphy" value="graphy"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/gray_sand.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngray_sand" value="gray_sand"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/green_dust_scratch.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngreen_dust_scratch" value="green_dust_scratch"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/green_gobbler.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngreen_gobbler" value="green_gobbler"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/green-fibers.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngreen-fibers" value="green-fibers"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/gridme.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngridme" value="gridme"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/grilled.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngrilled" value="grilled"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/groovepaper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngroovepaper" value="groovepaper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/grunge_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngrunge_wall" value="grunge_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/gun_metal.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterngun_metal" value="gun_metal"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/handmadepaper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternhandmadepaper" value="handmadepaper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/hixs_pattern_evolution.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternhixs_pattern_evolution" value="hixs_pattern_evolution"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/inflicted.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterninflicted" value="inflicted"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/irongrip.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternirongrip" value="irongrip"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/knitted-netting.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternknitted-netting" value="knitted-netting"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/leather_1.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternleather_1" value="leather_1"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/light_alu.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlight_alu" value="light_alu"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/light_checkered_tiles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlight_checkered_tiles" value="light_checkered_tiles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/light_grey_floral_motif.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlight_grey_floral_motif" value="light_grey_floral_motif"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/light_honeycomb.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlight_honeycomb" value="light_honeycomb"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/lined_paper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlined_paper" value="lined_paper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/little_pluses.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlittle_pluses" value="little_pluses"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/littleknobs.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternlittleknobs" value="littleknobs"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/merely_cubed.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternmerely_cubed" value="merely_cubed"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/micro_carbon.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternmicro_carbon" value="micro_carbon"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/mirrored_squares.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternmirrored_squares" value="mirrored_squares"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/nami.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternnami" value="nami"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/noise_pattern_with_crosslines.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternnoise_pattern_with_crosslines" value="noise_pattern_with_crosslines"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/noisy.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternnoisy" value="noisy"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/old_mathematics.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternold_mathematics" value="old_mathematics"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/old_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternold_wall" value="old_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/padded.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpadded" value="padded"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/paper_1.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpaper_1" value="paper_1"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/paper_2.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpaper_2" value="paper_2"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/paper_3.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpaper_3" value="paper_3"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/paven.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpaven" value="paven"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/pineapplecut.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpineapplecut" value="pineapplecut"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/pinstripe.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpinstripe" value="pinstripe"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/plaid.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternplaid" value="plaid"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/polaroid.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpolaroid" value="polaroid"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/polonez_car.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpolonez_car" value="polonez_car"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/pool_table.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpool_table" value="pool_table"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/project_papper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternproject_papper" value="project_papper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/px_by_Gre3g.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternpx_by_Gre3g" value="px_by_Gre3g"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/random_grey_variations.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternrandom_grey_variations" value="random_grey_variations"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/ravenna.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternravenna" value="ravenna"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/real_cf.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternreal_cf" value="real_cf"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/ricepaper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternricepaper" value="ricepaper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/ricepaper2.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternricepaper2" value="ricepaper2"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/rip_jobs.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternrip_jobs" value="rip_jobs"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/robots.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternrobots" value="robots"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/rockywall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternrockywall" value="rockywall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/roughcloth.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternroughcloth" value="roughcloth"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/rubber_grip.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternrubber_grip" value="rubber_grip"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/silver_scales.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsilver_scales" value="silver_scales"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/small_tiles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsmall_tiles" value="small_tiles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/small-crackle-bright.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsmall-crackle-bright" value="small-crackle-bright"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/smooth_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsmooth_wall" value="smooth_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/soft_circle_scales.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsoft_circle_scales" value="soft_circle_scales"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/soft_pad.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsoft_pad" value="soft_pad"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/soft_wallpaper.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsoft_wallpaper" value="soft_wallpaper"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/square_bg.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsquare_bg" value="square_bg"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/squares.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsquares" value="squares"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/starring.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternstarring" value="starring"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/struckaxiom.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternstruckaxiom" value="struckaxiom"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/stucco.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternstucco" value="stucco"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/subtle_freckles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsubtle_freckles" value="subtle_freckles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/subtle_orange_emboss.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternsubtle_orange_emboss" value="subtle_orange_emboss"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/tactile_noise.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterntactile_noise" value="tactile_noise"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/texturetastic_gray.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterntexturetastic_gray" value="texturetastic_gray"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/triangles.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterntriangles" value="triangles"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/type.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patterntype" value="type"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/vertical_cloth.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternvertical_cloth" value="vertical_cloth"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/vichy.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternvichy" value="vichy"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/washi.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwashi" value="washi"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/wavecut.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwavecut" value="wavecut"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_brick_wall.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_brick_wall" value="white_brick_wall"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_carbon.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_carbon" value="white_carbon"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_paperboard.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_paperboard" value="white_paperboard"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_plaster.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_plaster" value="white_plaster"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_sand.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_sand" value="white_sand"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/white_texture.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhite_texture" value="white_texture"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/whitediamond.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhitediamond" value="whitediamond"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/whitey.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwhitey" value="whitey"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/wood_1.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwood_1" value="wood_1"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/wood_pattern.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwood_pattern" value="wood_pattern"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/woven.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternwoven" value="woven"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/xv.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternxv" value="xv"></div>
<div class="left a-center as-radio"><div style="background:url(file:///D|/xampp/htdocs/ollo/site/views/images/zigzag.png) 0 0 repeat;" class="as-thumb"></div><input name="patt" type="radio" id="themeadmin_general_bg_patternzigzag" value="zigzag"></div>
</div>
</div>
    </div>
    
    
    
     <div class="panel-option">
      <div class="opt-title">Header Style</div>
      <div class="opt-content">
        <select id="header_type" name="layout">
          <option value="0" >Light</option>
          <option value="1" >Dark</option>
        </select>
      </div>
    </div>
    
    
    <div class="panel-option">
      <div class="opt-title">Color 1</div>
      <div class="opt-content">
        <input type="text" id="color1" class="demo" value="##19060C">
      </div>
    </div>
    <div class="panel-option">
      <div class="opt-title">Color 2</div>
      <div class="opt-content">
        <input type="text" id="color2" class="demo" value="##E84179">
      </div>
    </div>
     <div class="panel-option">
      <div class="opt-title">Headings Font</div>
      <div class="opt-content">
        <input id="font2" type="text" />
      </div>
    </div>
    <div class="panel-option">
      <div class="opt-title">Body & Content Font</div>
      <div class="opt-content">
        <input id="font1" type="text" />
      </div>
    </div>
    
    <hr />
    
    <p><a class="button" href="#">Buy theme &raquo;</a></p>
    
  </div>

</div>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><script type="text/javascript">jQuery.noConflict();</script>
</head>

<body class=" cms-index-index cms-home">
<!-- BEGIN GOOGLE ANALYTICS CODEs -->
<script type="text/javascript">
//<![CDATA[
    var _gaq = _gaq || [];
    
_gaq.push(['_setAccount', 'UA-5786912-25']);
_gaq.push(['_trackPageview']);
    
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

//]]>
</script>
<!-- END GOOGLE ANALYTICS CODE -->
<div class="wrapper ">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
            </div>
        </div>
    </noscript>
    <div class="page">
        <!--  #top-header -->
<?php include ('includes/topheader.php');?>
<!-- // #top-header -->
<?php include ('includes/header.php');?>

 


        
        <div id="as_after_header" class="as_reference">
        <div class="breadcrumbs">
    <div class="row">
    <div class="large-12 columns">
        <ul>
                            <li class="home">
                                    <a href="#" title="Go to Home Page">Home</a>
                                                    <span>/ </span>
                                </li>
                            <li class="category20">
                                    <a href="#" title="">Lingerie</a>
                                                    <span>/ </span>
                                </li>
                            <li class="product">
                                    <strong>Black Lingerie </strong>
                                                </li>
                    </ul>
    </div>
    </div>
</div>
        </div>
      	
        <!-- Main Container -->
        <div class="main-container col1-layout">
            <div class="row">
                <div class="main">
                   <div class="col-main">
                   
                   <div class="inner-page-content">
                      		<div class="item small-12" style="font-size:14px;">
                               
                                
                              
      <?php include("includes/dashbord_header.php"); ?>
      <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
          <tr class="bg" role="row">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Order No:</th>
            <th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Name:</th>
            <th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Mobile No:</th>
             
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Address</th>
          </tr>
            
          
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">

			  
               <?php
				 
				if($shippingdetails != '' && count($shippingdetails) > 0) {  
				//print_r($shippingdetails);
    			$k = '0'; 
				?>      
          
		  <tr class="odd">
            
            <td class=" "><?php echo $this->uri->segment(3); ?></td>
			<td class=" "><?php echo $this->session->userdata('username')?></td>
			<td class=" "><?php echo $shippingdetails->smobno; ?></td>
			 
			<td class=" "><?php echo $shippingdetails->address; ?></td>
           </tr>
		  
      
          
            
          
        </tbody>
		
      </table>
	  <br>
	  <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
          <tr class="bg" role="row">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Billing Address:</th>
            
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Shipping Address</th>
          </tr>
            
          
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">

			  
                  
          
		 <tr class="odd">
            
            <td class=" "><?php echo $shippingdetails->address.",".$shippingdetails->address1.",".$shippingdetails->city.",".$shippingdetails->county.",".$shippingdetails->postcode; ?></td>
		<td class=" "><?php echo $shippingdetails->saddress.",".$shippingdetails->saddress1.",".$shippingdetails->scity.",".$shippingdetails->scounty.",".$shippingdetails->spostcode; ?></td>
			
           </tr>
     
          
             
          
        </tbody>
		
      </table>
	  <br>
	  <table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
        <thead>
        <tr class="bg" role="row">
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Product Name:</th>
            <th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Quantity</th>
			<th style="width: auto; color:#e84179; font-size:15px; font-weight:bold;" aria-controls="table-2" role="columnheader" class="sorting">Price:</th>
        </tr>
         
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">
		<?php if($orderitems != '' && count($orderitems) > 0)
				{ foreach($orderitems as $orderitems) { 
			//print_r($orderitems);
			?>
		<tr class="odd">
		<td class=" "><?php echo $orderitems->order_item_name;?></td>
			<td class=" "><?php echo $orderitems->product_quantity; ?></td>
			 <td class=" "><?php echo number_format($orderitems->product_item_price); ?></td>
		</tr>
		<?php }} ?>
		<?php 
	 	$ordercost=$this->home_model->ordercost($orderitems->order_id);
		 if($ordercost != '' && count($ordercost) > 0)
				{ foreach($ordercost as $ordercost) { 
		?>	
		<?php if($ordercost->shippingcost !="" && $ordercost->shippingcost>0){ ?>
		<tr><td colspan="2">Shipping Cost</td>
			<td><?php echo $orderdetails->shippingcost; ?></td>
		</tr>
		<?php } ?>
		
		<?php if($ordercost->is_gift !="" && $ordercost->is_gift>0){ ?>
		<tr>
			<td colspan="2">Gift Cost</td>
			<td><?php echo $orderdetails->is_gift; ?></td>
		</tr>
		<?php } ?>
		
		<?php }} ?>
		 <tr>
			<td colspan="2">Total</td>
			<td><?php echo $orderdetails->order_total; ?></td>
		 </tr>
		  <?php
			 $k++;}
			 ?>
          
		
	    </tbody>
		
      </table>
  
                         
                                
                            
                                
                        		<!--generic-form-wrapper ends-->
                        	</div>
                          	<!--sign-in-register ends-->  
                        </div>
                   
                   </div>
                </div>
            </div>
              </div>
              
<?php include ('includes/prefooter.php');?>
 
<?php include ('includes/footer.php');?>

<script>
// jQuery(document).foundation();
jQuery(document).foundation(function (response) {});
</script>        
    </div><!-- END PAGE -->
		
        </div>

<script type="text/javascript" src="<?php echo $base_url_views;?>js/modernizr_svg/modernizr.custom.08606.js"></script>

<script type="text/javascript" src="<?php echo $base_url_views;?>js/clear_text_field.js"></script>
<script type="text/javascript" src="<?php echo $base_url_views;?>js/anchor_top.js"></script>

 
</body>
</html>
