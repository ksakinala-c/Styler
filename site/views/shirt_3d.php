
<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');

 ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Stylior 3D Customization</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <script src="<?php echo  $base_url_views; ?>/js1/main.js"></script>

<link rel="stylesheet" href="<?php echo  $base_url_views; ?>/css1/style.css" >

</head>
<body>
<div id="header"><img src="http://1373411880.rsc.cdn77.org/site/views/newheader/img/foot-logo-img.png"></div>
<div id="top_line"></div>
<div class="container">
 <button type="button" class="btn btn-primary uppercase" id="customize_button"><b>Start Customize</b> &nbsp;
 <span>
<i class="fa fa-caret-right"></i>
</span>
 </button>

</div>

<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3" ><a href="<?php echo  $base_url; ?>testd/shirt_custom"><img src="<?php echo  $base_url_views; ?>/images1/shirt.png" height="440" width="300"></a></div>
    <div class="col-sm-3" ><a href="<?php echo  $base_url; ?>testd/shirt_custom"><img src="<?php echo  $base_url_views; ?>/images1/waist.png" height="440" width="300"></a></div>
    <div class="col-sm-3" ><a href="<?php echo  $base_url; ?>testd/shirt_custom"><img src="<?php echo  $base_url_views; ?>/images1/suit.png" height="440" width="300"></a></div>
	<div class="col-sm-3" ><a href="<?php echo  $base_url; ?>testd/shirt_custom"><img src="<?php echo  $base_url_views; ?>/images1/pant.png" height="440" width="300"></a></div>
	
  </div>
</div>
<div style="height:60px;"></div>
<div id="footer">
<?php include ('includes/footer.php'); ?>
</div>
</body>
</html>
