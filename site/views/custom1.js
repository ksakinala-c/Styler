
// shirt front


function clearcanvas()
{
	maincanvas = document.getElementById("canvas");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas1");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas2");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas3");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas4");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas5");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas6");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas61");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);

		
	maincanvas = document.getElementById("canvas7");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas8");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas9");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas10");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas11");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
    
    maincanvas = document.getElementById("canvas12");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	   maincanvas = document.getElementById("canvas51");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	  maincanvas = document.getElementById("canvas52");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	  maincanvas = document.getElementById("canvas13");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
    maincanvas = document.getElementById("canvas14");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	  maincanvas = document.getElementById("canvas15");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas81");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	
}

   
	function fdrawImage()
	{
	//alert("drawimage"+JSON.stringify(shirtjson));
	 
	clearcanvas();

    //alert(shirtjson.shirtstyle);
	
	//collars loading
	 drawcollarsfront();
	
	//shirt loading
	if(shirtjson.shirtstyle=="fullhands")
	{
	  
		  $("#innercuffs").css("display", "block");
		  $("#halfhandscuffs").css("display", "block");
		   $("#collarandcuff").css("display", "block");
		 
	     var mycanvas2 = document.getElementById("canvas6");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("base_hands");
		 
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/sleeves_long_slim.png";
	
		 
		 //alert(img101);

		  ctx10.drawImage(img101,49,0, 300, 400);
		  //cuffs loading
		  drawcuffsfront();
		   
		
	}
	else if(shirtjson.shirtstyle=="halfhands")
	{
		$("#innercuffs").css("display", "none");
		 $("#halfhandscuffs").css("display", "none");
		 $("#collarandcuff").css("display", "none");
		 		
		 
		  maincanvas = document.getElementById("canvas8");
          ctx6 = maincanvas.getContext("2d");
          ctx6.clearRect(0, 0, 700, 900);
	
	
		 var mycanvas2 = document.getElementById("canvas6");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("hands_short");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/sleeves_short_slim.png";

		  ctx10.drawImage(img101,49,0, 300, 400);
		
	}
	
	
   //shirt pockets
  
	 loadshirtpocket();

	
	//button loading
	
          drawbuttons();
	
	
	//shirt placket loading
	   
        drawshirtplacket();
	
	//shirt bottom
	
		
     switch(shirtjson.shirtbottmstyle)
     {
		 
	     case "nobottamstyle":
		
	      break;
	     case "midbottamstyle":
		
	
	  fdrawbottam();
		 
	    
	    	break; 
	  
  case "highbottamstyle":
  
    fdrawbottam1();
  
	  		 
	    	break;

  case "strightbottamstyle":
      fdrawbottam2();
   
	    	break;


	  
     }
	 
	 
	 //outer contrast
	 
	 if(shirtjson.outercontrast=="noneall")
	 {
		 
	 }
	 else if(shirtjson.outercontrast=="collarandcuff")
	 {
		 if(shirtjson.view=="front")
		 {
		     drawcollarsfront();
			  drawcuffsfront();
		 }
		 
		 
	 }
	  else if(shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.view=="front")
		 {
			drawcollarsfront();
			 
		 }
	 }
	 
	 
	 //inner contrast
	 if(shirtjson.innercontrast=="yes")
	 {
		 
		  
     
	  if(shirtjson.innerclrstat=="yes")
	  {
		 //alert(shirtjson.innercontrastcolor);
      var mycanvas2 = document.getElementById("canvas14");
      var ctx10 = mycanvas2.getContext("2d");
 
	  var img101 = document.getElementById("inner_collar");
	   img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/collar_stand_inner.png"
	
       ctx10.drawImage(img101,49,0, 300, 400);
	  }
	   if(shirtjson.innerplacketstat=="yes")
	  {
		
    
	     var mycanvas2 = document.getElementById("canvas15");
        var ctx10 = mycanvas2.getContext("2d");
  	    var img101 = document.getElementById("inner_pinkplacket");
		img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/base_placket_inner_slim.png"
	      
	  
         ctx10.drawImage(img101,49,0, 300, 400);
	   
	   
	  }
	   if(shirtjson.innercuffstat=="yes")
	  {
		 
		  if(shirtjson.view=="front")
	      {
			   var mycanvas2 = document.getElementById("canvas13");
               var ctx10 = mycanvas2.getContext("2d");
			  
			  if(shirtjson.cuffstyle=="angle")
	          {
				  var img101 = document.getElementById("inner_angelcuff");
				  img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_angle_inner.png"
				 
	             
			  }
			  else if(shirtjson.cuffstyle=="Bigangle")
			  {
				
	            var img101 = document.getElementById("inner_bigangelcuff");
				 img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_big_angle_inner.png"
	         
	             			  
			  }
			  else if(shirtjson.cuffstyle=="Biground")
	          {
				
	            var img101 = document.getElementById("inner_bigroundcuff");
	          
			   img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_big_round_inner.png"
	  
			  }
			   else if(shirtjson.cuffstyle=="French")
	          {
				
	            var img101 = document.getElementById("inner_frenchcuff");
				img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_french_inner.png"
	           
	  
			  }
			   else if(shirtjson.cuffstyle=="Round")
	          {
				
	            var img101 = document.getElementById("inner_roundcuff");
				img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_round_inner.png"
	          
	  
			  }
			   else if(shirtjson.cuffstyle=="Square")
	          {
				
	            var img101 = document.getElementById("inner_squarecuff");
				img101.src="<?php echo $base_url_views; ?>/images1/innercontrast/"+shirtjson.innercontrastcolor+"/front/cuffs_square_inner.png"
	         
	  
			  }
			
			   ctx10.drawImage(img101,49,0, 300, 400); 
			  
		  }
		 
		
		 
	  }

	  
	 
      }
	  
	  
	  
	 }
	



///////////vfun
function loadshirtpocket()
{
	//alert(shirtjson.fabid);
	if(shirtjson.shirtsidepocket=="No")
	{
    maincanvas = document.getElementById("canvas12");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	}
	else if(shirtjson.shirtsidepocket=="yes")
	{
		 var mycanvas2 = document.getElementById("canvas12");
		 var ctx10 = mycanvas2.getContext("2d");
		var img101 = document.getElementById("base_pocket");
		  document.getElementById("base_pocket").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/pocket_left_slim.png"
       img101.src=document.getElementById("base_pocket").value;
	 
    	ctx10.drawImage(img101,49,0, 300, 400);
		
	}
	
}

//draw cuffs front
function drawcuffsfront()
{
		
		
	if(shirtjson.cuffstyle=="angle")
	{
	 var img101 = document.getElementById("base_cuffs");
	 
	  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_angle_slim.png";
	  
	  if(shirtjson.outercontrast=="collarandcuff")
	 {
		 if(shirtjson.outercontrastcolor!="none")
		 {
			 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_angle_slim.png"; 
		 }
		
	
	 }
	}
	else if(shirtjson.cuffstyle=="Bigangle")
	{
		 var img101 = document.getElementById("base_cuffs1");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_big_angle_slim.png";
		 if(shirtjson.outercontrast=="collarandcuff")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_big_angle_slim.png";
	     }
	 }
	}
	else if(shirtjson.cuffstyle=="Biground")
	{
		 var img101 = document.getElementById("base_cuffs2");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_big_round_slim.png";
		   if(shirtjson.outercontrast=="collarandcuff")
	 {  
          if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_big_round_slim.png";
		 }
	 }
	}
	else if(shirtjson.cuffstyle=="French")
	{
		 var img101 = document.getElementById("base_cuffs3");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_french.png";
		     if(shirtjson.outercontrast=="collarandcuff")
	 {
		 
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_french.png";
	     }
	 }
	}
	else if(shirtjson.cuffstyle=="Round")
	{
		 var img101 = document.getElementById("base_cuffs4");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_round_slim.png";
		    if(shirtjson.outercontrast=="collarandcuff")
	 {
		 if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_round_slim.png";
	     }
	 }
	}
	else if(shirtjson.cuffstyle=="Square")
	{
		 var img101 = document.getElementById("base_cuffs5");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/cuffs_square_slim.png";
		   if(shirtjson.outercontrast=="collarandcuff")
	 {  
          if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/cuffs_square_slim.png";
		 }
	 }
	}
	
	var mycanvas2 = document.getElementById("canvas8");
    var ctx10 = mycanvas2.getContext("2d");
		
	ctx10.drawImage(img101,49,0, 300, 400);
	
}
	//draw cuffs back
	
	function drawcuffsback()
	{
		
	if(shirtjson.cuffstyle=="angle")
	{
	 var img101 = document.getElementById("back_cuffs");
	 
	  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_angle_slim.png";
	}
	
	else if(shirtjson.cuffstyle=="Bigangle")
	{
		 var img101 = document.getElementById("back_cuffs1");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_big_angle_slim.png";
	}
	else if(shirtjson.cuffstyle=="Biground")
	{
		 var img101 = document.getElementById("back_cuffs2");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_big_round_slim.png";
	}
	else if(shirtjson.cuffstyle=="French")
	{
		 var img101 = document.getElementById("back_cuffs3");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_french.png";
	}
	else if(shirtjson.cuffstyle=="Round")
	{
		 var img101 = document.getElementById("back_cuffs4");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_round_slim.png";
	}
	else if(shirtjson.cuffstyle=="Square")
	{
		 var img101 = document.getElementById("back_cuffs5");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/cuffs_square_slim.png";
	}
	
	var mycanvas2 = document.getElementById("canvas8");
    var ctx10 = mycanvas2.getContext("2d");
	//alert(shirtjson.fabid); 
	
	ctx10.drawImage(img101,49,0, 300, 400);
	
	
		
	}
	
	//shirt plackets function
	function drawshirtplacket()
	{
		
			var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("shirt_base");
	
    ctx10.drawImage(img101,49,0, 300, 400);
		
	maincanvas = document.getElementById("canvas5");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	if(shirtjson.view=="front")
	{
		
	 if(shirtjson.splacket=="noshirtplacket")
	{ 
     var img101 = document.getElementById("shirt_base");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim.png";
	 
	}
	else if(shirtjson.splacket=="shirtplacket")
	{
		 var img101 = document.getElementById("base_placket");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box.png";
	
	}
	else if(shirtjson.splacket=="shirtplacket1")
	{
	maincanvas = document.getElementById("canvas10");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
  
		 var img101 = document.getElementById("base_placket1");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal.png";
	}
	else if(shirtjson.splacket=="shirtplacket2")
	{
		 var img101 = document.getElementById("base_placket2");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french.png";
	}
	else if(shirtjson.splacket=="shirtplacket3")
	{
		 var img101 = document.getElementById("base_placket3");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow.png";
	}
	
    //alert("drawshirtplacket"+img101.src);
	//img101.src=document.getElementById(shirtjson.splacket).value;
	var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	
	 ctx10.drawImage(img101,49,0, 300, 400);
	 
	 
	}
	}
	
		
	
	
   //shirt buttons function	
	function drawbuttons()
	{
	 var str = document.getElementById(shirtjson.shirtbtn).value;
    var res = str.split(";");
		
	 var mycanvas2 = document.getElementById("canvas10");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_buttons");
	img101.src=res[0];
    ctx10.drawImage(img101,49,0, 300, 400);
	 
	var mycanvas2 = document.getElementById("canvas11");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("collar_buttons");
	img101.src=res[1];
    ctx10.drawImage(img101,49,0, 300, 400);
	}
	
	
	//collars function front
	function drawcollarsfront()
	{
		
	

		//alert(shirtjson.fabid);
	if(shirtjson.collarstyle=="regular")
	{ 




     var img101 = document.getElementById("base_collar");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_regular.png";
	 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 { 
         if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_regular.png";
		 }
	
	 }
	}
	else if(shirtjson.collarstyle=="Big_round")
	{
		 var img101 = document.getElementById("base_collar1");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_big_round.png";
	  if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_big_round.png";
		 }
	
	 }
	}
	else if(shirtjson.collarstyle=="cut_way")
	{
		 var img101 = document.getElementById("base_collar2");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_cut_away.png";
     if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_cut_away.png";
		 }
	
	 }
	}
		else if(shirtjson.collarstyle=="Double_button")
	{
		 var img101 = document.getElementById("base_collar3");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_dual_button.png";
		   if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_dual_button.png";
		 }
	
	 }
	}
	else if(shirtjson.collarstyle=="low_semi_wide")
	{
		 var img101 = document.getElementById("base_collar4");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_low_semi_wide.png";
		   if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_low_semi_wide.png";
		 }
	
	 }
		  
	}
	else if(shirtjson.collarstyle=="short_button_down")
	{
		 var img101 = document.getElementById("base_collar5");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_short_button_down.png";
		  if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		  if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_short_button_down.png";
		 }
	 }
	}
	else if(shirtjson.collarstyle=="stand")
	{
		 var img101 = document.getElementById("base_collar6");
		   img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_stand.png";
		   if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {  
      if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_stand.png";
		 }
	 }
	}
	else if(shirtjson.collarstyle=="wide_spread")
	{
		 var img101 = document.getElementById("base_collar7");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/collar_wide_spread.png";
	 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {  
       if(shirtjson.outercontrastcolor!="none")
		 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/front/collar_wide_spread.png";
		 }
	 }
	}
		
		
	var mycanvas2 = document.getElementById("canvas7");
    var ctx10 = mycanvas2.getContext("2d");
	//alert(shirtjson.fabid); 
	
    ctx10.drawImage(img101,49,0, 300, 400);
	}
		
		//collars back side
		
		function drawcollarsbackside()
		{
			
			//back of collar
	 if(shirtjson.collarstyle=="regular")
	{ 
     var img101 = document.getElementById("back_collar");
	
	 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_big_round.png";
	  if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_big_round.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="Big_round")
	{
		 var img101 = document.getElementById("back_collar1");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_dual_button.png";
		  if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_dual_button.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="cut_way")
	{
		 var img101 = document.getElementById("back_collar2");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_low_semi_wide.png";
		   if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_low_semi_wide.png";
	
	 }
	}
		else if(shirtjson.collarstyle=="Double_button")
	{
		 var img101 = document.getElementById("back_collar3");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_regular.png";
		 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_regular.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="low_semi_wide")
	{
		 var img101 = document.getElementById("back_collar4");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_short_button_down.png";
		 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_short_button_down.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="short_button_down")
	{
		 var img101 = document.getElementById("back_collar5");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_short_point.png";
		 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_short_point.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="stand")
	{
		 var img101 = document.getElementById("back_collar6");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_stand.png";
		 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_stand.png";
	
	 }
	}
	else if(shirtjson.collarstyle=="wide_spread")
	{
		 var img101 = document.getElementById("back_collar6");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/collar_wide_spread.png";
		 if(shirtjson.outercontrast=="collarandcuff"||shirtjson.outercontrast=="collaronly")
	 {
		 img101.src="<?php echo $base_url_views; ?>/images1/outercontrast/"+shirtjson.outercontrastcolor+"/back/collar_wide_spread.png";
	
	 }
	}
	
	var mycanvas2 = document.getElementById("canvas7");
    var ctx10 = mycanvas2.getContext("2d");
	
	// alert(img101.src);
	 ctx10.drawImage(img101,49,0, 300, 400); 
			
		}
	
		
		
	

//shirt back


function drawImage()
{
	
	clearcanvas();

 	
    switch(shirtjson.shirtbakstyle)
    
    {
		
	    case "nobackstyle":
	   
	  var mycanvas2 = document.getElementById("canvas5");
      var ctx10 = mycanvas2.getContext("2d");
 
 	 var img101 = document.getElementById("back_base");
	 
	  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/base_slim.png";
	
        ctx10.drawImage(img101,49,0, 300, 400);
		break;
		
		 case "backside":
			
		
		var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("back_side");

	  img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/pleats_side_slim.png";
		//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400);
		break;
		
		 case "backbox":
		 
			var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("back_box");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/pleats_box_slim.png";
		//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400);
		break;
		
		 case "backdart":
		
			var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("back_dart");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/pleats_dart_slim.png";
	 	//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400);
		
		break;
		
		

	    
    }
    
    
       drawcollarsbackside();
	
	  if(shirtjson.shirtstyle=="fullhands")
	  {
		  drawcuffsback();
			
		var mycanvas2 = document.getElementById("canvas6");
		 var ctx10 = mycanvas2.getContext("2d");
		 
		 var img101 = document.getElementById("back_fullhands");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/sleeves_long_slim.png"
	    
		  ctx10.drawImage(img101,49,0, 300, 400);
	  }
	  else if(shirtjson.shirtstyle=="halfhands")
	  {
		
		 maincanvas = document.getElementById("canvas8");
         ctx6 = maincanvas.getContext("2d");
	    ctx6.clearRect(0, 0, 700, 900);
	
	
		 var mycanvas2 = document.getElementById("canvas6");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("back_halfhands");
           img101.src="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/back/sleeves_short_slim.png"
		  ctx10.drawImage(img101,49,0, 300, 400);
		  
	  }
	
		

}


// front pant

function ftdrawImage()
{
	//alert('hii');
		
	var mycanvas2 = document.getElementById("canvas4");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("trouser_base");
	img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/BaseFront.png";

    ctx10.drawImage(img101,59,320, 360, 420);
	
	
	 switch(Trjson.beltstyle)
    {
		
		
	   case "sb":
	
		  
	     var mycanvas2 = document.getElementById("canvas51");
        var ctx10 = mycanvas2.getContext("2d");
     	var img101 = document.getElementById("trouser_belt");
	   img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontBeltLoopSlim.png";
	    ctx10.drawImage(img101,59,320, 360, 420);
		
		 break;
		 
		 case "db":
		
		 var mycanvas2 = document.getElementById("canvas51");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("trouser_belt1");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontBeltLoopThick.png";

		 ctx10.drawImage(img101,59,320, 360, 420);
		 break;
		  case "db1":
		    maincanvas = document.getElementById("canvas51");
          ctx6 = maincanvas.getContext("2d");
             ctx6.clearRect(0, 0, 700, 880);
		  
		  break;


    }
	
	  switch(Trjson.pleatstyle)
    {
	   case "spleat":
		
		  
	     var mycanvas2 = document.getElementById("canvas52");
        var ctx10 = mycanvas2.getContext("2d");
	   var img101 = document.getElementById("trouser_pleat");
	    img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontSinglePleat.png";
	   //alert(img101.src);
	   ctx10.drawImage(img101,59,320, 360, 420);
		
		  
		 break;
		 
		 case "dpleat":
		 var mycanvas2 = document.getElementById("canvas52");
		 var ctx10 = mycanvas2.getContext("2d");
		 var img101 = document.getElementById("trouser_pleat1");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontDoublePleat.png";
		   // alert(img101.src);
		 ctx10.drawImage(img101,59,320, 360, 420);
		 break;
		  case "nopleat":
		  	maincanvas = document.getElementById("canvas52");
           ctx6 = maincanvas.getContext("2d");
           ctx6.clearRect(0, 0, 700, 880);
		  
		  break;


    }
	

	
     switch(Trjson.fpocketstyle)
    {
	
	
	   case "pantpckt":
	   
	   maincanvas = document.getElementById("canvas61");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
		 
	     var mycanvas2 = document.getElementById("canvas61");
         var ctx10 = mycanvas2.getContext("2d");
	
	    img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontSlantPcoket.png";
	
       ctx10.drawImage(img101,59,320, 360, 420);
		  
		  
		  
		  
		 break;
		 
		 case "pantpckt1":
		   maincanvas = document.getElementById("canvas61");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
		
		 var mycanvas2 = document.getElementById("canvas61");
		 var ctx10 = mycanvas2.getContext("2d");

	
         img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontStraightPocket.png";
		 ctx10.drawImage(img101,59,320, 360, 420);
		 break;
		


    }	
	
	
	switch(Trjson.sidebuttonstat)
	{
		case "sidebutton":
		 
	     var mycanvas2 = document.getElementById("canvas51");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("trouser_sidebtn");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Front/FrontNoLoopSideTab.png";
    ctx10.drawImage(img101,59,322, 360, 420);
		  
		  
		  
		 break;
		 
		 case "nosidebutton":
		
	
		 break;
		
		
		
		
	}
		
		
	
}
	
	
	
	


// back pant
function btdrawImage()
{
	
	clearpantcanvas();
	var mycanvas2 = document.getElementById("canvas4");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("trouser_base1");
	img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/BaseBack.png";
    ctx10.drawImage(img101,20,305, 340, 420);
	
	
	
	 switch(Trjson.beltstyle)
    {
		
		
	   case "sb":
	 

	     var mycanvas2 = document.getElementById("canvas51");
        var ctx10 = mycanvas2.getContext("2d");
     	var img101 = document.getElementById("trouser_backslim");
	   img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/SlimBeltLoop.png";
	  
		 ctx10.drawImage(img101,20,305, 340, 420);
		
		 break;
		 
		 case "db":
		
		 var mycanvas2 = document.getElementById("canvas51");
        var ctx10 = mycanvas2.getContext("2d");
     	var img101 = document.getElementById("trouser_backthick");
	   img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/ThickBeltLoop.png";
	  
		 ctx10.drawImage(img101,20,305, 340, 420);
	 	 break;
		   case "db1":
		    maincanvas = document.getElementById("canvas51");
          ctx6 = maincanvas.getContext("2d");
             ctx6.clearRect(0, 0, 700, 880);
		  
		  break;


    }
	  
	
	  switch(Trjson.bakpleatstyle)
    {
	   case "backpleats":
		 
	     var mycanvas2 = document.getElementById("canvas52");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("trouser_sngdart");
	img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/SingleDart.png";
	
    ctx10.drawImage(img101,20,305, 340, 420);
		  
	
		 break;
		 
		 case "backpleats1":
		
		 var mycanvas2 = document.getElementById("canvas52");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("trouser_dbldart");
		 img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/DoubleDart.png";

		   ctx10.drawImage(img101,20,305, 340, 420);
		 break;
		 
		  case "backpleats2":
		  
		  break;


    }
	
    switch(Trjson.pntbakpocktstyle)
    {
	   case "bpsb1":
		 
	     var mycanvas2 = document.getElementById("canvas61");
    var ctx10 = mycanvas2.getContext("2d");

	var img101 = document.getElementById("trouser_back1dblbone");
	 img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/Back1PocketDougleBone.png";
	   ctx10.drawImage(img101,20,305, 340, 420);
		  
		  
		  
		 break;
		 
		 case "bpsb2":
		
		 var mycanvas2 = document.getElementById("canvas61");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("trouser_back2dblbone");
		  img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/Back2PocketDoubleBone.png";

		   ctx10.drawImage(img101,20,305, 340, 420);
		 break;
		  case "bpdb1":
		  
		  var mycanvas2 = document.getElementById("canvas61");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("trouser_back1sngbone");
        img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/Back1PocketSingleBone.png";
	   ctx10.drawImage(img101,20,305, 340, 420);
		  
		  
		  
		  break;

  case "bpdb2":
		  
		  var mycanvas2 = document.getElementById("canvas61");
		 var ctx10 = mycanvas2.getContext("2d");

		 var img101 = document.getElementById("trouser_back2sngbone");
          img101.src="<?php echo $base_url_views; ?>/images1/"+Trjson.fabid+"/Trouser/Back/Back2PocketSingleBone.png";
		   ctx10.drawImage(img101,20,305, 340, 420);
		  
		  
		  
		  break;
		   case "np":
		  
		   break;
    }	
	
	
	
}


function clearpantcanvas()
{
	
	
	maincanvas = document.getElementById("canvas4");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	maincanvas = document.getElementById("canvas51");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
	
	maincanvas = document.getElementById("canvas52");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);
	
		
	maincanvas = document.getElementById("canvas61");
    ctx6 = maincanvas.getContext("2d");
    ctx6.clearRect(0, 0, 700, 880);

	
}



//wihte collar

function fdrawbottam1()
{
	
if(shirtjson.splacket == "shirtplacket")
{
	  //alert('collar0');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamhigh");
	 document.getElementById("base_bottamhigh").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box_high.png";
	
	img101.src= document.getElementById("base_bottamhigh").value;

	//alert(img101.src);
	
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
 else if(shirtjson.splacket == "shirtplacket1")
  {
	 // alert('collar1');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamhigh1");
	 document.getElementById("base_bottamhigh1").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal_high.png";
	
	img101.src= document.getElementById("base_bottamhigh1").value;

		//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
    else if(shirtjson.splacket == "shirtplacket2")
	{
	 // alert('collar2');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamhigh2");
	 document.getElementById("base_bottamhigh2").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french_high.png";
	
	img101.src= document.getElementById("base_bottamhigh2").value;

	//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
  
	   else if(shirtjson.splacket == "shirtplacket3")
	   {
	 // alert('collar3');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamhigh3");
     document.getElementById("base_bottamhigh3").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow_high.png";
	
	img101.src= document.getElementById("base_bottamhigh3").value;
	//alert(img101.src);
	
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }	 	

	  
   }
//dd
function fdrawbottam()
{
	
	 
	 if(shirtjson.splacket == "shirtplacket")
	 {
	//  alert('collar0');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottammid");
     document.getElementById("base_bottammid").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box_mid.png";
	
	img101.src= document.getElementById("base_bottammid").value;
	
	   ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
 else if(shirtjson.splacket == "shirtplacket1")
  {
	 // alert('collar1');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottammid1");
    document.getElementById("base_bottammid1").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal_mid.png";
	
	img101.src= document.getElementById("base_bottammid1").value;

    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
    else if(shirtjson.splacket == "shirtplacket2")
	{
	 // alert('collar2');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottammid2");
   document.getElementById("base_bottammid2").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french_mid.png";
	
	img101.src= document.getElementById("base_bottammid2").value;
	
	
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
   }
  
	   else if(shirtjson.splacket == "shirtplacket3")
	   {
	// alert('collar3');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottammid3");
  document.getElementById("base_bottammid3").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow_mid.png";
	
	img101.src= document.getElementById("base_bottammid3").value;
	
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }	 	

	
  
   }

//nn	
function fdrawbottam2()
{

	
	  if(shirtjson.splacket == "shirtplacket")
	 {
	  //alert('collar0');
	    var mycanvas2 = document.getElementById("canvas5");
      var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamstright");
      document.getElementById("base_bottamstright").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_box_straight.png";
	
	img101.src= document.getElementById("base_bottamstright").value;
	//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
 else if(shirtjson.splacket == "shirtplacket1")
  {
	 // alert('collar1');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamstright1");
  document.getElementById("base_bottamstright1").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_conceal_straight.png";
	
	
	img101.src= document.getElementById("base_bottamstright1").value;
	//alert(img101.src);
	
	
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
   else if(shirtjson.splacket == "shirtplacket2")
	{
	 // alert('collar2');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamstright2");
	 document.getElementById("base_bottamstright2").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_french_straight.png";
	
	
	img101.src= document.getElementById("base_bottamstright2").value;
	//alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }
  
	   else if(shirtjson.splacket == "shirtplacket3")
	   {
	 // alert('collar3');
	    var mycanvas2 = document.getElementById("canvas5");
    var ctx10 = mycanvas2.getContext("2d");
	var img101 = document.getElementById("base_bottamstright3");
	 document.getElementById("base_bottamstright3").value="<?php echo $base_url_views; ?>/images1/"+shirtjson.fabid+"/shirt/front/base_slim_narrow_straight.png";
	
	
	img101.src= document.getElementById("base_bottamstright3").value;
      //alert(img101.src);
    ctx10.drawImage(img101,49,0, 300, 400); 
	  
  }	 	

	     
	 

  
   }

