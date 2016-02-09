
 <?php
 
 
 $base_url_views = $this->config->item('base_url_views');
 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		

    </head>
    <body>
        <?php  $spat = $_POST['spat_id']; ?>
		 <?php  $tpat = $_POST['tpat_id']; ?>
       <script>
        
     
		
		</script>
   <div  id="right" class="canvasdiv col-sm-6" style="position:fixed; left:800px;" >
  

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

 <!-- placket style images-->
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_box.png" width="140"  height="140" class="pattern" id="base_placket" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_conceal.png" width="140"  height="140" class="pattern" id="base_placket1" style="padding:2px; display:none;">
 <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_french.png" width="140"  height="140" class="pattern" id="base_placket2" style="padding:2px; display:none;">
  <img src="<?php echo $base_url_views; ?>/images1/<?php echo $spat;?>/shirt/front/base_slim_narrow.png" width="140"  height="140" class="pattern" id="base_placket3" style="padding:2px; display:none;">
 
     
<div>
    
 <div style="display:none;">


<!-- trouser images front-->

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

 <!-- trouser images back-->
 
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

      
    </body>
</html>
