
<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');

 ?>
 <?php
 
 if(isset($_GET['pat_id']))
 {
	$pat=$_GET['pat_id'];
 }
 else
 {
	$pat=200;
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shirt & Trouser</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo  $base_url_views; ?>/css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo  $base_url_views; ?>/css1/blog-home.css" rel="stylesheet">

   
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery.min.js"></script>

 <script src="<?php echo  $base_url_views; ?>/js1/custom.js"></script>
	 <!-- jQuery -->
    <script src="<?php echo  $base_url_views; ?>/js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo  $base_url_views; ?>/js1/bootstrap.min.js"></script>
    
   <link rel="stylesheet" href="<?php echo  $base_url_views; ?>/css1/bootstrap.css" />
   <link rel="stylesheet" href="<?php echo  $base_url_views; ?>/css1/custom.css" /> 
   
	

<style>

#shirtdiv{
	padding-top:100px;
}
.canvasdiv 
{
		padding-top:100px;
}
ul, ol{
	margin-bottom: -10px;
}

.icon-size{
	//height:80px;
	width:75px;
	padding:5px;
	border:1px solid #FFF;
	margin-bottom:5px;
	background-color:#fff;
}

.btn1 {
 // background: #fff;
 
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #000;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  cursor:pointer;
}
.widt2{
	height:140px;
overflow-y: scroll;	
//width:65%;
}

.widt1{
	
	height:700px;
overflow-y: scroll;	
width:55%;
}


</style>	
	

	
</head>

<body style="background-color:#e6e6e6;">

<div height=";">
<!--<strong class="btn1"> START CUSTOMIZE<strong>&emsp;<b class="btn1" id="whiteshirt"> Shirt</b> &emsp;<b class="btn1" id="whitepant">Trouser</b> -->
</div>

<div class="container">

<div class="wrap col-sm-6 widt1" id="shirtdiv" >
  <ul class="tabs group">
    <li id="frnt"><a class="active" href="#/one">Shirt </a></li>
    <li id="frnt12"><a href="#/two">Trouser</a></li>
    <li id="lining"><a href="#/three">Suit</a></li>
	
  </ul>
  <div id="panels">
    <div id="one" class="tab-accordian">
     <br />
      <!-- image gallery start -->
     
    <div class="img-gallery">
     <img src="<?php echo  $base_url_views; ?>/shirt/fab/white.jpg" class="images"   id="shirt1" data-toggle="tooltip" data-placement="top" title="white Stripes" />
   
   


      </div>          
      <!-- image gallery end -->

	  <div class="col-sm-4"> Sleeves : </div>
    <div class="col-sm-8" style="background-color">
      <img src="<?php echo  $base_url_views; ?>/icons/long.png" id="fullhands" class="icon-size" data-toggle="tooltip" data-placement="top" title="Full hands"/>
      <img src="<?php echo  $base_url_views; ?>/icons/short.png" id="halfhands" class="icon-size" data-toggle="tooltip" data-placement="top" title="Half hands"/>
   

   <br />
    </div> 
    
    <div class="col-sm-4 ">Collars : </div>
    <div class="col-sm-8 widt" >
      
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/regular.png" id="collar5" class="icon-size" data-toggle="tooltip" data-placement="top" title="regular"/>
     <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/big_round.png" id="collar1" class="icon-size" data-toggle="tooltip" data-placement="top" title="Big round"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/cut_way.png" id="collar2" class="icon-size" data-toggle="tooltip" data-placement="top" title="Cut way"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/dual_buttons.png" id="collar3" class="icon-size" data-toggle="tooltip" data-placement="top" title="double button"/>
  
<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/low_semi_spread.png" id="collar4" class="icon-size" data-toggle="tooltip" data-placement="top" title="low semi wide"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/button_down.png" id="collar6" class="icon-size" data-toggle="tooltip" data-placement="top" title="button down"/>
  
  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/stand.png" id="collar7" class="icon-size" data-toggle="tooltip" data-placement="top" title="stand"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/collar/collar_wide_spread.png" id="collar8" class="icon-size" data-toggle="tooltip" data-placement="top" title="wide spread"/>
    
  <br />
    </div>
<div id="halfhandscuffs">
  <div class="col-sm-4">Cuffs : </div>
    <div class="col-sm-8 widt">
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/round.jpg" id="cuff" class="icon-size" data-toggle="tooltip" data-placement="top" title="round"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/angle.jpg" id="cuff1" class="icon-size" data-toggle="tooltip" data-placement="top" title="angle"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/big_round.jpg" id="cuff2" class="icon-size" data-toggle="tooltip" data-placement="top" title="Big round"/>
  
<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/big_angle.jpg" id="cuff3" class="icon-size" data-toggle="tooltip" data-placement="top" title="Big angle"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/square.jpg" id="cuff4" class="icon-size" data-toggle="tooltip" data-placement="top" title="square"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/cuffs/french.jpg" id="cuff5" class="icon-size" data-toggle="tooltip" data-placement="top" title="french"/>
  

  <br />
    </div></div>

	
    <div class="col-sm-4"> buttons: </div>
    <div class="col-sm-8 ">
      <div id="btndiv" style=""> 
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/01.png" id="btn1" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/02.png" id="btn2" class="icon-size1" width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/03.png" id="btn3" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/04.png" id="btn4" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/05.png" id="btn5" class="icon-size1"  width="40px"data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/06.png" id="btn6" class="icon-size1"  width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/white.png" id="btn7" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/08.png" id="btn8" class="icon-size1" width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/09.png" id="btn9" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/10.png" id="btn10" class="icon-size1" width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/11.png" id="btn11" class="icon-size1"  width="40px" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/12.png" id="btn12" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/13.png" id="btn13" class="icon-size1"  width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/14.png" id="btn14" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/15.png" id="btn15" class="icon-size1"  width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/16.png" id="btn16" class="icon-size1" width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/17.png" id="btn17" class="icon-size1"  width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/18.png" id="btn18" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/19.png" id="btn19" class="icon-size1"  width="40px"  data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/buttons/20.png" id="btn20" class="icon-size1" width="40px" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  
	  
	  
	  </div> 
    
      <div id="btndiv1" style="display:none"> 
      <img src="images/<?php echo $pat;?>/Front/FrontStraightPocket.png" id="btn4" class="icon-size" data-toggle="tooltip" data-placement="top" title="2 Buttons"/>
       </div>
    
    </div> 
   
        <div class="col-sm-4">pocket: </div>
       <div class="col-sm-8 ">
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/pocket.png" id="shirtpocket" class="icon-size" data-toggle="tooltip" data-placement="top" title="Side button" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/no_pocket.png" id="shirtpocket1" class="icon-size" data-toggle="tooltip" data-placement="top" title="No side button" />
        
		  
		
        </div>
    
	  <div class="col-sm-4">placket: </div>
       <div class="col-sm-8 widt">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket2.png" id="noshirtplacket" class="icon-size" data-toggle="tooltip" data-placement="top" title="No placket" />
         
	   
        <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket2.png" id="shirtplacket" class="icon-size" data-toggle="tooltip" data-placement="top" title="box placket" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket4.png" id="shirtplacket1" class="icon-size" data-toggle="tooltip" data-placement="top" title="concealed placket " />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket3.png" id="shirtplacket2" class="icon-size" data-toggle="tooltip" data-placement="top" title="freanch placket" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/placket2.png" id="shirtplacket3" class="icon-size" data-toggle="tooltip" data-placement="top" title="narrow placket" />
        
		  
		
        </div>
	
	  <div class="col-sm-4">Bottom  style: </div>
       <div class="col-sm-8 ">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM2.png" id="nobottamstyle" class="icon-size" data-toggle="tooltip" data-placement="top" title="No style" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM1.png" id="midbottamstyle" class="icon-size" data-toggle="tooltip" data-placement="top" title="mid tail " />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM3.png" id="highbottamstyle" class="icon-size" data-toggle="tooltip" data-placement="top" title="haigh tail" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/HEM2.png" id="strightbottamstyle" class="icon-size" data-toggle="tooltip" data-placement="top" title="staright tail " />
        
		  
		
        </div>
	
	<div class="col-sm-4">Back style: </div>
       <div class="col-sm-8 ">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/side.png" id="nobackstyle" class="icon-size" data-toggle="tooltip" data-placement="top" title="No style" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/side.png" id="backside" class="icon-size" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/box.png" id="backbox" class="icon-size" data-toggle="tooltip" data-placement="top" title="box pleat " />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/dart.png" id="backdart" class="icon-size" data-toggle="tooltip" data-placement="top" title="dart pleat" />
            
		  
		
        </div>
	
		
    	<div class="col-sm-4">Out Contrast</div>
       <div class="col-sm-8">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/no_pocket.png" id="noneall" class="icon-size" data-toggle="tooltip" data-placement="top" title="No style" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/collar_cuff.png" id="collarandcuff" class="icon-size" data-toggle="tooltip" data-placement="top" title="collar & cuffs" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/icons/collar.png" id="collaronly" class="icon-size" data-toggle="tooltip" data-placement="top" title="collar"  style="display:"/>
            
		  
		
        </div>
	
	
		<div class="col-sm-4"> </div>
       <div class="col-sm-8 " id="" style="display:;">
	   
		     <div class="col-sm-8 " id="outerdiv" style="display:none;">
	 
		
		<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
	  
	   </div>
		
        </div>
		<div class="col-sm-4"> </div>
       <div class="col-sm-8 " id="" style="display:;">
	  
		     <div class="col-sm-8 " id="innerdiv1" style="display:none;">
	 
		
		<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg" id="outerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
	  
	   </div>
		
        </div>
	
	
	
	
	
		<div class="col-sm-4">Inner Contrast</div>
       <div class="col-sm-8">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/inner-contrast/yes.png" id="inneryes" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/inner-contrast/no.png" id="innerno" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
         
		
        </div>
		
		<div class="col-sm-4"> </div>
       <div class="col-sm-8 " id="" style="display:;">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/inner-contrast/inner-collar.png" id="innercollar" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/inner-contrast/inner-cuff.png" id="innercuffs" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/inner-contrast/inner-placket.png" id="innerplacket" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
            
		     <div class="col-sm-8 " id="innerdiv" style="display:none;">
	 
		
		<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015052/100X100.jpg" id="innerfabric" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fabric/STY2015005/100X100.jpg" id="innerfabric1" class="icon-size" data-toggle="tooltip" data-placement="top" title="" />
       
	  
	   </div>
		
        </div>
		
    
	     
	<div class="col-sm-4">Signature: </div>
       <div class="col-sm-8 ">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/signature_inner/none.png" id="none" class="icon-size" data-toggle="tooltip" data-placement="top" title="No style" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/signature_inner/initail.png" id="intial" class="icon-size" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/signature_inner/name.png" id="name" class="icon-size" data-toggle="tooltip" data-placement="top" title="dart pleat" />
            
		  
		
        </div>
		
		
		
		
		
		<div class="col-sm-4"> </div>
		 <div class="col-sm-8 " id="intialdiv" style="display:none;">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/archibald.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/bodoni.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/caviar.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          <img src="http://www.stylior.com/3dshirt/images/fonts/cylburn.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
             
		 <br> 
		<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/black.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/blood_red.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/grey.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/navy.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          
	<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/plum_maroon.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/royal_blue.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/white.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
         
<div>		 
<input  type="text" name="monogram" maxlength="3" style="margin-top: 3px; height: 40px; line-height: 40px; font-weight: 400; font-size: 20px; width:150px;padding-left:5px; margin-left: 10px; color:#000;" placeholder="Enter monogram text here"  onblur="this.placeholder = 'Enter monogram text here'" required> &nbsp; ( Max 3 letters)
		
<h3>Monogram Location<h3>
<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/cuff-name-horizontal.png" id="" width="70px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/pocket_embroidery_normal.png" id="" width="70px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/sleeve_placket_top_embroidery_normal.png" id="" width="70px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/top_cuff_embroidery_normal.png" id="" width="70px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          

</div>
	
        </div>
		
		 <div class="col-sm-8 " id="namediv" style="display:none;">
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/archibald.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       
	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/bodoni.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/fonts/caviar.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          <img src="http://www.stylior.com/3dshirt/images/fonts/cylburn.png?v=3" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
             
		 <br> 
		<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/black.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/blood_red.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/grey.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/navy.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
          
	<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/plum_maroon.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/royal_blue.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="side pleat" />
         <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/colors/white.png" id="" width="40px" class="icon-size1" data-toggle="tooltip" data-placement="top" title="dart pleat" />
         
<div>		 
<input  type="text" name="monogram" maxlength="10" style="margin-top: 3px; height: 40px; line-height: 40px; font-weight: 400; font-size: 20px; width:150px;padding-left:5px; margin-left: 10px; color:#000;" placeholder="Enter monogram text here"  onblur="this.placeholder = 'Enter monogram text here'" required> &nbsp; ( Max 10 letters)
		
<h3>Monogram Location<h3>
<img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/left-bottom-seam.png" id="" width="" class="icon-size" data-toggle="tooltip" data-placement="top" title="No style" />
       	   <img src="http://1373411880.rsc.cdn77.org/3dshirt/images/placements/top_button_placket_embroidery_normal.png" id="" width="" class="icon-size" data-toggle="tooltip" data-placement="top" title="side pleat" />
        

</div>
	
        </div>
		
	
		
		
    <div class="col-sm-8">
     <!-- <img src="design-images/icons/sleevsbuttons0.jpg" id="pckt1" class="icon-size" data-toggle="tooltip" data-placement="top" title="No Buttons"/>-->
      
    </div>
	
	

          
      
         <p style="visibility:hidden;"> Aenean dapibus eleifend venenatis. Integer et suscipit dui. Nam tellus diam, mattis in ultrices et, feugiat ac libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>   
    
    </div><!-- id="two" end -->
    
    
    


<div id="two" class="tab-accordian">
    
   
   <div class="img-gallery">
     <img src="<?php echo  $base_url_views; ?>/images1/fab/BaseBackfabric.png" class="images"   id="frnt1" data-toggle="tooltip" data-placement="top" title="Navy With Purple Stripes ($489)" />
   
    
  
      </div> <br>
    
    

  <div class="col-sm-4"> Belt : </div>
    <div class="col-sm-8">
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant3.gif" id="sb" class="icon-size" data-toggle="tooltip" data-placement="top" title="FrontBeltLoopSlim"/>
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant3.gif" id="db" class="icon-size" data-toggle="tooltip" data-placement="top" title="FrontBeltLoopThick"/>
    <img src="<?php echo  $base_url_views; ?>/images1/icons/pant3.gif" id="db1" class="icon-size" data-toggle="tooltip" data-placement="top" title="no belt"/>
   

   <br />
    </div> 

	
      <div class="col-sm-4">Pleats : </div>
    <div class="col-sm-8">
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="clsfit" class="icon-size" data-toggle="tooltip" data-placement="top" title="single pleat"/>
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="slmfit" class="icon-size" data-toggle="tooltip" data-placement="top" title="double pleat"/>
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="slmfit1" class="icon-size" data-toggle="tooltip" data-placement="top" title="no pleat"/>
  

  <br />
    </div>

	
	  <div class="col-sm-4"> Pockets: </div>
    <div class="col-sm-8">
      <div id="btndiv" style=""> 
       <img src="<?php echo  $base_url_views; ?>/images1/icons/pant1.png" id="pantpckt" class="icon-size" data-toggle="tooltip" data-placement="top" title="FrontSlantPcoket"/>
       <img src="<?php echo  $base_url_views; ?>/images1/icons/pant1.png" id="pantpckt1" class="icon-size" data-toggle="tooltip" data-placement="top" title="FrontStraightPocket"/>
      
	  </div> 
    
      <div id="btndiv1" style="display:none"> 
      </div>
    
    </div>
	
	
	
	
	  <div class="col-sm-4">Side button : </div>
       <div class="col-sm-8">
         <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="sidebutton" class="icon-size" data-toggle="tooltip" data-placement="top" title="Side button" />
         <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="nosidebutton" class="icon-size" data-toggle="tooltip" data-placement="top" title="No side button" />
        
		
        </div>
	
	
 <div class="col-sm-4">Back pockets : </div>
       <div class="col-sm-8">
         <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="bpsb1" class="icon-size" data-toggle="tooltip" data-placement="top" title="Back1PocketSingleBone" />
         <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="bpsb2" class="icon-size" data-toggle="tooltip" data-placement="top" title="Back2PocketSingleBone" />
        
		  <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="bpdb1" class="icon-size" data-toggle="tooltip" data-placement="top" title="Back1PocketDougleBone" />
         <img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="bpdb2" class="icon-size" data-toggle="tooltip" data-placement="top" title="Back2PocketDoubleBone" />
        
		<img src="<?php echo  $base_url_views; ?>/images1/icons/pant.jpg" id="np" class="icon-size" data-toggle="tooltip" data-placement="top" title="No pocket" />
        
		
        </div>
	
	
	
       <div class="col-sm-4">Back Pleats : </div>
       <div class="col-sm-8">
        <img src="<?php echo  $base_url_views; ?>/images1/icons/pant4.png" id="backpleats" class="icon-size" data-toggle="tooltip" data-placement="top" title="SingleDart"/>
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant4.png" id="backpleats1" class="icon-size" data-toggle="tooltip" data-placement="top" title="DoubleDart"/>
      <img src="<?php echo  $base_url_views; ?>/images1/icons/pant4.png" id="backpleats2" class="icon-size" data-toggle="tooltip" data-placement="top" title="no pleat"/>
  
  
 
        </div>
	
	
	
	
	
	
	
	
    <div class="col-sm-8">
     <!-- <img src="design-images1/icons/sleevsbuttons0.jpg" id="pckt1" class="icon-size" data-toggle="tooltip" data-placement="top" title="No Buttons"/>-->
      
    </div>
    
          
      
         <p style="visibility:hidden;"> Aenean dapibus eleifend venenatis. Integer et suscipit dui. Nam tellus diam, mattis in ultrices et, feugiat ac libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>   
    
    </div><!-- id="two" end -->
    
    
    
    <div id="three" class="tab-accordian"> 
       <h3  id="three1"class="style-heading">CUSTOM SHIRT  <strong> </strong></h3> 
       <h3 class="style-heading" style="border-bottom:1px dotted #ddd;">  Back  </h3>
       
     
		
 
  
      
       <p style="visibility:hidden;"> Aenean dapibus eleifend venenatis. Integer et suscipit dui. Nam tellus diam, mattis in ultrices et, feugiat ac libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p> 
    </div><!-- id="three" end -->
    
	
	
	
  </div>
</div>




  
  
<div class="canvasdiv col-sm-6" style="position:fixed; left:800px;" >
  

 <canvas id="canvas" width="600" height="900" style="position:absolute; z-index:-4; "></canvas>
 <canvas id="canvas1"  width="600" height="900" style="position:absolute;z-index:-3; "></canvas> 
 <canvas id="canvas2"  width="600" height="900" style="position:absolute;z-index: -2; "></canvas>
 <canvas id="canvas3"  width="600" height="900" style="position:absolute;z-index: -2; "></canvas>
<canvas id="canvas4"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 <canvas id="canvas51"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 
 
 <canvas id="canvas5"  width="600" height="900"style="position:absolute; z-index: -1;" ></canvas>
 
 <canvas id="canvas6"  width="600" height="900" style="position:absolute;z-index: -1; "></canvas>
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

<img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim.png" width="140"  height="140" class="pattern" id="shirt_base" style="padding:2px; display:none;">
 
 <!-- shirt slvees images-->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/sleeves_long_slim.png" width="140"  height="140" class="pattern" id="base_hands" style="padding:2px; display:none;">
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/sleeves_short_slim.png" width="140"  height="140" class="pattern" id="hands_short" style="padding:2px; display:none;">
 
 
  <!-- shirt collar images-->
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_big_round.png" width="140"  height="140" class="pattern" id="base_collar1" style="padding:2px; display:none;">
   <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_cut_away.png" width="140"  height="140" class="pattern" id="base_collar2" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_dual_button.png" width="140"  height="140" class="pattern" id="base_collar3" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="base_collar4" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_regular.png" width="140"  height="140" class="pattern" id="base_collar" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_short_button_down.png" width="140"  height="140" class="pattern" id="base_collar5" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_stand.png" width="140"  height="140" class="pattern" id="base_collar6" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/collar_wide_spread.png" width="140"  height="140" class="pattern" id="base_collar7" style="padding:2px; display:none;">

 


 <!-- shirt cuffs images-->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="base_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="base_cuffs1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="base_cuffs2" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_french.png" width="140"  height="140" class="pattern" id="base_cuffs3" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="base_cuffs4" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="base_cuffs5" style="padding:2px; display:none;">
 
 <!-- shirt buttons images-->
<img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collar_dblbuttons" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/01/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collar_dowenbtn" style="padding:2px; display:none;">
 
 
<img src="<?php echo  $base_url_views; ?>/buttons/02/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/02/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons1" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/02/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons1" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/02/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons1" style="padding:2px; display:none;">
 
 <img src="<?php echo  $base_url_views; ?>/buttons/03/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons2" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/03/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons2" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/03/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons2" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/03/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons2" style="padding:2px; display:none;">
 
 
 
<img src="<?php echo  $base_url_views; ?>/buttons/06/front/buttons_base_slim.png" width="140"  height="140" class="pattern" id="base_buttons3" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/buttons/06/front/buttons_collar_one_button.png" width="140"  height="140" class="pattern" id="collar_buttons3" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/06/front/buttons_collar_dual_button.png" width="140"  height="140" class="pattern" id="collardbl_buttons3" style="padding:2px; display:none;">
 
<img src="<?php echo  $base_url_views; ?>/buttons/06/front/buttons_collar_short_button_down.png" width="140"  height="140" class="pattern" id="collartrpl_buttons3" style="padding:2px; display:none;">
 
<!-- pocket images-->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/pocket_left_slim.png" width="140"  height="140" class="pattern" id="base_pocket" style="padding:2px; display:none;">
 
 
 <!-- placket style images-->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_box.png" width="140"  height="140" class="pattern" id="base_placket" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_conceal.png" width="140"  height="140" class="pattern" id="base_placket1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_french.png" width="140"  height="140" class="pattern" id="base_placket2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_narrow.png" width="140"  height="140" class="pattern" id="base_placket3" style="padding:2px; display:none;">
 
  <!-- outer contrast images-->
 
 
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_big_round.png" width="140"  height="140" class="pattern" id="outer_collar1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_cut_away.png" width="140"  height="140" class="pattern" id="outer_collar2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_dual_button.png" width="140"  height="140" class="pattern" id="outer_collar3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="outer_collar4" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_regular.png" width="140"  height="140" class="pattern" id="outer_collar" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_short_button_down.png" width="140"  height="140" class="pattern" id="outer_collar5" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_stand.png" width="140"  height="140" class="pattern" id="outer_collar6" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_wide_spread.png" width="140"  height="140" class="pattern" id="outer_collar7" style="padding:2px; display:none;">
 
   <!-- outer cuffs images-->
   
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="outer_cuffs" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="outer_cuffs1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="outer_cuffs2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="outer_cuffs3" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="outer_cuffs4" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/cuffs_french.png" width="140"  height="140" class="pattern" id="outer_cuffs5" style="padding:2px; display:none;">
 
   
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/collar_regular.png" width="140"  height="140" class="pattern" id="outer_backcollar" style="padding:2px; display:none;">
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="outer_backcuffs" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="outer_backcuffs1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="outer_backcuffs2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="outer_backcuffs3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="outer_backcuffs4" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/cuffs_french.png" width="140"  height="140" class="pattern" id="outer_backcuffs5" style="padding:2px; display:none;">
 
 
 
    <!-- pink outer contrast images-->
 
 
  <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs3" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs4" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercuffs/pink/cuffs_french.png" width="140"  height="140" class="pattern" id="outer_pinkcuffs5" style="padding:2px; display:none;">
 
   

 <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs4" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/outercollar/pink-back/cuffs_french.png" width="140"  height="140" class="pattern" id="outer_pinkbackcuffs5" style="padding:2px; display:none;">
 
 
   <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_big_round.png" width="140"  height="140" class="pattern" id="outer_pinkcollar1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_cut_away.png" width="140"  height="140" class="pattern" id="outer_pinkcollar2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_dual_button.png" width="140"  height="140" class="pattern" id="outer_pinkcollar3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="outer_pinkcollar4" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_regular.png" width="140"  height="140" class="pattern" id="outer_pinkcollar" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_short_button_down.png" width="140"  height="140" class="pattern" id="outer_pinkcollar5" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_stand.png" width="140"  height="140" class="pattern" id="outer_pinkcollar6" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab2/front/collar_wide_spread.png" width="140"  height="140" class="pattern" id="outer_pinkcollar7" style="padding:2px; display:none;">
 
  <img src="<?php echo  $base_url_views; ?>/shirt/fab2/back/collar_regular.png" width="140"  height="140" class="pattern" id="outer_pinkbackcollar" style="padding:2px; display:none;">

 
 
  <!-- bottam style images-->
  
  
     <!-- NONE WITH OUT PLACKET -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_high.png" width="140"  height="140" class="pattern" id="base_bottam" style="padding:2px; display:;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_mid.png" width="140"  height="140" class="pattern" id="base_bottam1" style="padding:2px; display:;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_straight.png" width="140"  height="140" class="pattern" id="base_bottam2" style="padding:2px; display:;">
 
    <!-- NONE WITH PLACKET -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_box.png" width="140"  height="140" class="pattern" id="base_bottamplacket" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_conceal.png" width="140"  height="140" class="pattern" id="base_bottamplacket1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_french.png" width="140"  height="140" class="pattern" id="base_bottamplacket2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_narrow.png" width="140"  height="140" class="pattern" id="base_bottamplacket3" style="padding:2px; display:none;">
 
  <!-- MID TAIL -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_box_mid.png" width="140"  height="140" class="pattern" id="base_bottammid" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_conceal_mid.png" width="140"  height="140" class="pattern" id="base_bottammid1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_french_mid.png" width="140"  height="140" class="pattern" id="base_bottammid2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_narrow_mid.png" width="140"  height="140" class="pattern" id="base_bottammid3" style="padding:2px; display:none;">
 
 
   <!-- HIGH TAIL -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_box_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_conceal_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_french_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_narrow_high.png" width="140"  height="140" class="pattern" id="base_bottamhigh3" style="padding:2px; display:none;">
 

    <!-- STRIGHT TAIL -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_box_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_conceal_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_french_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright2" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/front/base_slim_narrow_straight.png" width="140"  height="140" class="pattern" id="base_bottamstright3" style="padding:2px; display:none;">
 
  <!-- back styles -->
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/base_slim.png" width="140"  height="140" class="pattern" id="back_base" style="padding:2px; display:none;">
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/pleats_side_slim.png" width="140"  height="140" class="pattern" id="back_side" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/pleats_box_slim.png" width="140"  height="140" class="pattern" id="back_box" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/pleats_dart_slim.png" width="140"  height="140" class="pattern" id="back_dart" style="padding:2px; display:none;">
 
 <!-- back hands  -->
  
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/sleeves_long_slim.png" width="140"  height="140" class="pattern" id="back_fullhands" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/sleeves_short_slim.png" width="140"  height="140" class="pattern" id="back_halfhands" style="padding:2px; display:none;">
 
 <!-- back  cuffs -->
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs2" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_french.png" width="140"  height="140" class="pattern" id="back_cuffs3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs4" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_square_slim.png" width="140"  height="140" class="pattern" id="back_cuffs5" style="padding:2px; display:none;">

 <!-- back  collar -->
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_big_round.png" width="140"  height="140" class="pattern" id="back_collar" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_dual_button.png" width="140"  height="140" class="pattern" id="back_collar1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_low_semi_wide.png" width="140"  height="140" class="pattern" id="back_collar2" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_regular.png" width="140"  height="140" class="pattern" id="back_collar3" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_short_button_down.png" width="140"  height="140" class="pattern" id="back_collar4" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_short_point.png" width="140"  height="140" class="pattern" id="back_collar5" style="padding:2px; display:none;">

 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_stand.png" width="140"  height="140" class="pattern" id="back_collar6" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/collar_wide_spread.png" width="140"  height="140" class="pattern" id="back_collar7" style="padding:2px; display:none;">

 
 <!-- back  cuffs -->
 
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_big_angle_slim.png" width="140"  height="140" class="pattern" id="back_cuffs1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/fab1/back/cuffs_big_round_slim.png" width="140"  height="140" class="pattern" id="back_cuffs2" style="padding:2px; display:none;">
  
 <!-- inner  cuffs -->
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_round_inner.png" width="140"  height="140" class="pattern" id="inner_roundcuff" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_angle_inner.png" width="140"  height="140" class="pattern" id="inner_angelcuff" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_big_round_inner.png" width="140"  height="140" class="pattern" id="inner_bigroundcuff" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_big_angle_inner.png" width="140"  height="140" class="pattern" id="inner_bigangelcuff" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_square_inner.png" width="140"  height="140" class="pattern" id="inner_squarecuff" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/cuffs_french_inner.png" width="140"  height="140" class="pattern" id="inner_frenchcuff" style="padding:2px; display:none;">
 
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_round_inner.png" width="140"  height="140" class="pattern" id="inner_roundcuff1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_angle_inner.png" width="140"  height="140" class="pattern" id="inner_angelcuff1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_big_round_inner.png" width="140"  height="140" class="pattern" id="inner_bigroundcuff1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_big_angle_inner.png" width="140"  height="140" class="pattern" id="inner_bigangelcuff1" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_square_inner.png" width="140"  height="140" class="pattern" id="inner_squarecuff1" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/cuffs_french_inner.png" width="140"  height="140" class="pattern" id="inner_frenchcuff1" style="padding:2px; display:none;">
 
  <!-- inner  collar -->
 
 <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/collar_stand_inner.png" width="140"  height="140" class="pattern" id="inner_collar" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/collar_stand_inner.png" width="140"  height="140" class="pattern" id="inner_collar1" style="padding:2px; display:none;">
 
 <!-- inner  placket -->
 
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/pink/base_placket_inner_slim.png" width="140"  height="140" class="pattern" id="inner_pinkplacket" style="padding:2px; display:none;">
  <img src="<?php echo  $base_url_views; ?>/shirt/inner_cuffs/black/base_placket_inner_slim.png" width="140"  height="140" class="pattern" id="inner_blackplacket" style="padding:2px; display:none;">
 
 
<div>
    
 <div style="display:none;">


<!-- trouser images front-->

 <img src="<?php echo  $base_url_views; ?>/pant/200/Front/BaseFront.png" width="140"  height="140" class="pattern" id="trouser_base" style="padding:2px; display:none;">
 

 <!-- trouser belt-->
 
<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontBeltLoopSlim.png" width="140"  height="140" class="pattern" id="trouser_belt" style="padding:2px; display:none;">
<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontBeltLoopThick.png" width="140"  height="140" class="pattern" id="trouser_belt1" style="padding:2px; display:none;">

 <!-- trouser pleat-->

<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontDoublePleat.png" width="140"  height="140" class="pattern" id="trouser_pleat" style="padding:2px; display:none;">
<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontSinglePleat.png" width="140"  height="140" class="pattern" id="trouser_pleat1" style="padding:2px; display:none;">
 
 <!-- trouser pockets-->

<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontSlantPcoket.png" width="140"  height="140" class="pattern" id="trouser_pocket" style="padding:2px; display:none;">
<img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontStraightPocket.png" width="140"  height="140" class="pattern" id="trouser_pocket1" style="padding:2px; display:none;">

 <!-- trouser sidebutton-->
 <img src="<?php echo  $base_url_views; ?>/pant/200/Front/FrontNoLoopSideTab.png" width="140"  height="140" class="pattern" id="trouser_sidebtn" style="padding:2px; display:none;">

 <!-- trouser images back-->
 
  <img src="<?php echo  $base_url_views; ?>/pant/200/Back/BaseBack.png" width="140"  height="140" class="pattern" id="trouser_base1" style="padding:2px; display:none;">

  <!-- trouser belt-->
 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/SlimBeltLoop.png" width="140"  height="140" class="pattern" id="trouser_backslim" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/ThickBeltLoop.png" width="140"  height="140" class="pattern" id="trouser_backthick" style="padding:2px; display:none;">

 <!-- trouser pockets-->

 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/Back1PocketDougleBone.png" width="140"  height="140" class="pattern" id="trouser_back1dblbone" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/Back2PocketDoubleBone.png" width="140"  height="140" class="pattern" id="trouser_back2dblbone" style="padding:2px; display:none;">

  <img src="<?php echo  $base_url_views; ?>/pant/200/Back/Back1PocketSingleBone.png" width="140"  height="140" class="pattern" id="trouser_back1sngbone" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/Back2PocketSingleBone.png" width="140"  height="140" class="pattern" id="trouser_back2sngbone" style="padding:2px; display:none;">

 <!-- trouser pleat-->

 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/SingleDart.png" width="140"  height="140" class="pattern" id="trouser_sngdart" style="padding:2px; display:none;">
 <img src="<?php echo  $base_url_views; ?>/pant/200/Back/DoubleDart.png" width="140"  height="140" class="pattern" id="trouser_dbldart" style="padding:2px; display:none;">

 
<div>

   



</div>
  
</body>
<script>


	
	
	function add(a)
{
	window.location.href='index.php?pat_id='+a;
}


$("#noshirtplacket").on('click',function(){
 
 	fArray["shirtplacket"] = 0;
	fdrawImage();		
	ftdrawImage();
});
 $("#shirtplacket").on('click',function(){
 
 	fArray["shirtplacket"] = 1;
	fdrawImage();		
	ftdrawImage();
}); $("#shirtplacket1").on('click',function(){
 
 	fArray["shirtplacket"] = 2;
	fdrawImage();	
	ftdrawImage();
	
}); $("#shirtplacket2").on('click',function(){
 
 	fArray["shirtplacket"] = 3;
	fdrawImage();		
	ftdrawImage();
});
 $("#shirtplacket3").on('click',function(){
 
 	fArray["shirtplacket"] = 4;
	fdrawImage();		
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
 
   $("#inneryes").click(function(){
	   
    //alert('hiii');
	 $("#innerdiv").show();
});


   $("#collarandcuff").click(function(){
    //alert('hiii');
	 $("#outerdiv").show();
});

   $("#collaronly").click(function(){
    //alert('hiii');
	 $("#outerdiv1").show();
});
	
   $("#innerno").click(function(){
	   maincanvas = document.getElementById("canvas13");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	  maincanvas = document.getElementById("canvas14");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	  maincanvas = document.getElementById("canvas15");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
     $("#innerdiv").hide();
	 
});
	



$("#nobottamstyle").on('click',function(){
//alert('array');
	fArray["bottam"] = 0;
bArray["bottam"] = 0;
	fdrawImage();
	ftdrawImage();		
});
$("#midbottamstyle").on('click',function(){
 //alert('array');
	fArray["bottam"] = 1;
bArray["bottam"] = 1;
	fdrawImage();
	ftdrawImage();		
});
$("#highbottamstyle").on('click',function(){
//alert('array');
	fArray["bottam"] = 2;
bArray["bottam"] = 2;
	fdrawImage();
	ftdrawImage();		
});
$("#strightbottamstyle").on('click',function(){
 //alert('array');
	fArray["bottam"] = 3;
bArray["bottam"] = 3;
	fdrawImage();
	ftdrawImage();		
});



$("#fullhands").on('click',function(){
 //alert('array');
	fArray["hands"] = 0;
bArray["hands"] = 0;
	fdrawImage();
		ftdrawImage();	
});

$("#halfhands").on('click',function(){
	
	
	
 //alert('array');
	fArray["hands"] = 1;
	bArray["hands"] = 1;
	
	
	
	fdrawImage();
	ftdrawImage();		

	maincanvas = document.getElementById("canvas8");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
		maincanvas = document.getElementById("canvas81");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	});





$("#collar1").on('click',function(){
 //alert('array');
	fArray["collar"] = 1;
		bArray["collar"] = 1;
	fdrawImage();
	ftdrawImage();
	
	

});


$("#collar2").on('click',function(){
 //alert('array');
	fArray["collar"] = 2;
	bArray["collar"] = 2;
	fdrawImage();
	ftdrawImage();	

	
});
$("#collar3").on('click',function(){
 //alert('array');
	fArray["collar"] = 3;
	bArray["collar"] = 3;
	fdrawImage();
	ftdrawImage();		
});
$("#collar4").on('click',function(){
 //alert('array');
	fArray["collar"] = 4;
	bArray["collar"] = 4;
	fdrawImage();
	ftdrawImage();		
});
$("#collar5").on('click',function(){
 //alert('array');
	fArray["collar"] = 0;
	bArray["collar"] = 0;
	fdrawImage();
	ftdrawImage();		
});
$("#collar6").on('click',function(){
 //alert('array');
	fArray["collar"] = 5;
	bArray["collar"] = 5;
	fdrawImage();
	ftdrawImage();		
});
$("#collar7").on('click',function(){
 //alert('array');
	fArray["collar"] = 6;
	bArray["collar"] = 6;
	fdrawImage();
	ftdrawImage();		
});

$("#collar8").on('click',function(){
 //alert('array');
	fArray["collar"] = 7;
	bArray["collar"] = 7;
	fdrawImage();
	ftdrawImage();		
});


 $("#cuff").on('click',function(){
 
 	fArray["cuffs"] = 0;
	bArray["cuffs"] = 0;
	fdrawImage();		
	ftdrawImage();
});

 $("#cuff1").on('click',function(){
 
 	fArray["cuffs"] = 1;
	bArray["cuffs"] = 1;
	fdrawImage();		
	ftdrawImage();
});

 $("#cuff2").on('click',function(){
 
 	fArray["cuffs"] = 2;
	bArray["cuffs"] = 2;
	fdrawImage();		
	ftdrawImage();
});

 $("#cuff3").on('click',function(){
 
 	fArray["cuffs"] = 3;
	bArray["cuffs"] = 3;
	fdrawImage();		
	ftdrawImage();
}); 
$("#cuff4").on('click',function(){
 
 	fArray["cuffs"] = 4;
	bArray["cuffs"] = 4;
	fdrawImage();		
	ftdrawImage();
});
 $("#cuff5").on('click',function(){
 
 	fArray["cuffs"] = 5;
	bArray["cuffs"] = 5;
	fdrawImage();		
	ftdrawImage();
});


 $("#btn1").on('click',function(){
 
 	fArray["buttons"] = 0;
	
	fdrawImage();		
	ftdrawImage();
});

 $("#btn2").on('click',function(){
 
 	fArray["buttons"] = 1;

	fdrawImage();		
	ftdrawImage();
});
 $("#btn3").on('click',function(){
 
 	fArray["buttons"] = 2;
	
	fdrawImage();		
	ftdrawImage();
});

 $("#btn4").on('click',function(){
 
 	fArray["buttons"] = 3;
	fdrawImage();		
	ftdrawImage();
});
 $("#shirtpocket").on('click',function(){
 
 	fArray["pocket"] = 1;
	fdrawImage();		
	ftdrawImage();
});
 $("#shirtpocket1").on('click',function(){
 
 	fArray["pocket"] = 0;
	fdrawImage();		
	ftdrawImage();
});


 $("#noneall").on('click',function(){
 
 	fArray["outer"] = 0;
	bArray["outer"] = 0;
	fdrawImage();		
	ftdrawImage();
});

 $("#collarandcuff").on('click',function(){
 
 	fArray["outer"] = 1;
	bArray["outer"] = 1;
	fdrawImage();		
	ftdrawImage();
});

 $("#collaronly").on('click',function(){
 
 	fArray["outer"] = 2;
	bArray["outer"] = 2;
	fdrawImage();		
	ftdrawImage();
});




 $("#innercollar").on('click',function(){
 
 	fArray["innercollar"] = 1;
	bArray["innercollar"] = 1;
	fdrawImage();		
	ftdrawImage();
});

 $("#innercuffs").on('click',function(){
 //lert('innercuffs');
 	fArray["innercuffs"] = 1;
	bArray["innercuffs"] = 1;
	fdrawImage();		
	ftdrawImage();
});

$("#innerplacket").on('click',function(){
 
 	fArray["innerplacket"] = 1;
	bArray["innerplacket"] = 1;
	fdrawImage();		
	ftdrawImage();
});



var bArray = {hands:0, backbase:0, cuffs:0,collar:0,bottam:0,outer:0};
var fArray = {collar:0, cuffs:0, hands:0, buttons:0,pocket:0,shirtplacket:0,bottam:0,outer:0,innercollar:0,innercuffs:0,innerplacket:0};














 $("#nobackstyle").on('click',function(){
 
 bArray["backbase"] =0;
  	 
	drawImage();
	btdrawImage();
});


 $("#backside").on('click',function(){
 
 bArray["backbase"] =1;
  	 
	drawImage();
btdrawImage();	
});

 $("#backbox").on('click',function(){
 
 bArray["backbase"] =2;
  	 
	drawImage();
btdrawImage();	
});
 $("#backdart").on('click',function(){
 
 bArray["backbase"] =3;
  	
	drawImage();
 btdrawImage();	
});








$('#sb').click(function(){
	
	ftArray["belt"] = 0;
	btArray["belt"] = 0;
	fdrawImage();
	ftdrawImage();

});


$('#db').click(function(){

	ftArray["belt"] = 1;
	btArray["belt"] = 1
	fdrawImage();
ftdrawImage();
	
	

});


$('#db1').click(function(){

	ftArray["belt"] = 2;
	btArray["belt"] = 2;
	fdrawImage();
ftdrawImage();

});

$('#clsfit').click(function(){
	
	ftArray["pleat"] = 1;
	btArray["pleat"] = 1;
	fdrawImage();
	ftdrawImage();

});


$('#slmfit').click(function(){

	ftArray["pleat"] = 0;
	btArray["pleat"] = 0;
	fdrawImage();
ftdrawImage();
	
	

});


$('#slmfit1').click(function(){

	ftArray["pleat"] = 2;
	btArray["pleat"] = 2;
	fdrawImage();
ftdrawImage();

});



$('#pantpckt').click(function(){

	ftArray["pocket"] = 0;
	btArray["pocket"] = 0;
	fdrawImage();
ftdrawImage();
	
	

});


$('#pantpckt1').click(function(){

	ftArray["pocket"] = 1;
	btArray["pocket"] = 1;
	fdrawImage();
ftdrawImage();

});

$('#sidebutton').click(function(){

	ftArray["sidebutton"] = 0;
	btArray["sidebutton"] = 0;
	fdrawImage();
ftdrawImage();
	
	

});


$('#nosidebutton').click(function(){

	ftArray["sidebutton"] = 1;
	btArray["sidebutton"] = 1;
	fdrawImage();
ftdrawImage();

});

$('#backpleats').click(function(){

	ftArray["pleat"] = 0;
	btArray["pleat"] = 0;
	drawImage();
btdrawImage();

});

$('#backpleats1').click(function(){

	ftArray["pleat"] = 1;
	btArray["pleat"] = 1;
	drawImage();
btdrawImage();

});


$('#backpleats2').click(function(){

	ftArray["pleat"] = 2;
	btArray["pleat"] = 2;
	drawImage();
btdrawImage();

});

$('#bpsb1').click(function(){

	ftArray["pocket"] = 0;
	btArray["pocket"] = 0;
	drawImage();
btdrawImage();

});

$('#bpsb2').click(function(){

	ftArray["pocket"] = 1;
	btArray["pocket"] = 1;
	drawImage();
btdrawImage();

});


$('#bpdb1').click(function(){

	ftArray["pocket"] = 2;
	btArray["pocket"] = 2;
	drawImage();
btdrawImage();

});

$('#bpdb2').click(function(){

	ftArray["pocket"] = 3;
	btArray["pocket"] = 3;
	drawImage();
btdrawImage();

});

$('#np').click(function(){

	ftArray["pocket"] = 4;
	btArray["pocket"] = 4;
	drawImage();
btdrawImage();

});







var btArray = {belt:0, pocket:0, pleat:0};
var ftArray = {belt:0, pocket:0, pleat:0, sidebutton:0};



	window.onload = function() {
	fdrawImage();

ftdrawImage();	
	
}


	
</script>
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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
 
</html>