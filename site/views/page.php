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
<!-- /header --><main>
<!-- <div class="category-content" style="margin-top:3.5%;"> -->
	 <div>
	    <div class="category-grid-view">
		 <div class="con" style="" >
          <div class="container" style="">
		  
            <ul class="section-subtitle" id="head">
				<span style="font-size:27px; color:#000; margin-left:0.5%; float:left; width:100%; padding-bottom:15px; border-bottom:solid 1px #333;"><?php echo $allcontent->title; ?></span>
			</ul>

			<span class="breadcrumb pull-left" id="para">
				<p id="contp" class"par" style="text-align:justify;">
					<?php echo $allcontent->content; ?>
				</p>
			</span>
			

	      </div>
	      <!--container-->
		  </div>
	   </div><!--category-grid-view-->
    </div><!--category-content-->
 
</main>

<?php include ('includes/footer.php'); ?>

<!-- /footer -->        <!-- Modal -->
<?php include ('includes/cartdetail.php'); ?>
<style>
.con{width:1175px;margin:80px auto 0;border:13px solid #eae5df;}
.container{width:1150px; padding-bottom:5px;border:2px solid #dad5d0;margin-top:-80px;background-color:#fff;}
#contp{margin:0px 100px 0px 80px;}
.breadcrumb{width:1070px;padding-left:50px;}
@media only screen and (max-width : 480px){
.container{width:100%; padding-bottom:5px;border:2px solid #dad5d0;margin-top:10px;background-color:#fff;}
.con{width:100%;margin:0px auto 0;border:13px solid #eae5df;}
#contp{display:none;}
.par{display:none;}
.breadcrumb{width:95%;padding-left:0px;margin:0 auto;}
#head{margin-top:4%;}
}

</style>
</body>
</html>
