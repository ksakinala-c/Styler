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

/*.cd-main-header {
    position: relative;
    top: 0;
}*/

.category-header {
    margin-top: 0;
}
.view-all{background-color:#051347;width:10%;float:right;margin-right:3px;padding:10px;display:none;position:relative;margin-top:-44px;}
.view-all:hover{background-color:#ec5f32;width:40%;float:right;margin-right:3px;padding:10px;display:block;}
#ban5{ background-size:100%;height:500px;margin-top:7%;}
@media only screen and (max-width : 480px){
#ban5{ background-size:100%;height:140px;margin-top:30%;}
#cat{margin-top:-150%;}

.view-all{background-color:#051347;width:10%;float:right;padding:10px;display:none;}

.view-all:hover{background-color:#ec5f32;width:60%;float:right;padding:10px;display:block;}

@media (max-width:853px){
	#ab{margin-top:200ox;}
}
}
	
</style>
	<section class="category-header" id="ban5" style="background-image: url(<?php echo $http_host; ?>/upload/category/<?php echo $catdata->image; ?>); background-repeat:no-repeat;">
		<div class="titalbarmainuss">
			<!-- h1 class="category-title"><?php echo $catdata->cname; ?></h1 -->
 		</div>
	</section><!-- /.catalog-header -->
	<div class="breadcrumb-holder" id="ab">
		<div class="container">
			<ul class="breadcrumb pull-left">
				<li><a href="<?php echo $base_url; ?>">Home</a></li>
				<li><a href="<?php echo $base_url; ?>category/<?php echo $catdata->pageurl; ?>"><?php echo $catdata->cname; ?></a></li>
 			</ul>
 		</div><!--container-->
    </div><!--breadcrumb-holder-->

     <div class="category-content" id="cat" style="margin-top:0px !important;">
         <div class="category-grid-view" style="padding-top:0px;padding-bottom:10px;margin-top:0%;">
 		    <div class="container">
 				<div class="row">
				<?php  	
					if($homepro != '' && count($homepro) > 0) {   
					foreach($homepro as $homeprod) {
 				?> 
				<div class="col-md-6 col-sm-6 col-lg-4 fadeIn">
						<div class="category text-center" style="min-height:auto !important;">
							<div class="header">
								<h2 class="category-name"></h2>
								<!--<p class="starting-price">Start from <span>$49</span></p>-->
							</div>
							<div class="section">
								<div class="">
									<a onclick="callpopup('<?php echo $homeprod->id; ?>');" href="javascript:void(0);"  ><img src="<?php echo $http_host;?>/upload/subcategory/<?php echo $homeprod->image; ?>" data-echo="<?php echo $http_host;?>/upload/subcategory/<?php echo $homeprod->image; ?>" alt="<?php echo $homeprod->scname; ?>"></a>
								</div>
							</div>
							<div class="footer">
					 
								<a href="<?php echo $base_url; ?>home/lists/?sub_cat=<?php echo $homeprod->id; ?>" class="view-all" style="color:#fff;font-size:18px;">&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Discover</span></a>
							</div>
						</div>
					</div>
 					<?php }} ?> 
 			    </div><!--row-->
		    </div>
 	   </div><!--category-grid-view-->
    </div><!--category-content-->

</main>
<?php include('includes/footer.php'); ?> 

<?php //include ('includes/cartdetail.php'); ?>
</body>
</html>