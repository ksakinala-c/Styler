<?php include('include/header.php');?>
<style>
/* will be red only in google chrome */
#test3{
    color:green;
    (-bracket-:hack;
        color:red;
    );
}
.tile-stats.tile-red .icon {background:#1e91cf !important; color:#fff !important; padding:4px 10px;}
.num{color:#67bce9 !important;}
.num:hover{color:#fff !important;}
</style>
<div class="main-content">
<ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url; ?>"></i>Home</a></li>
		<li class="active"><strong>Dashboard</strong></li>
</ol>
<div class="row">
<div class="col-sm-12">
<div class="head">
<h2>Dashboard</h2>
</div>
</div>
	 
	<div class="col-sm-3">
		<div class="tile-stats tile-red">
			<div class="icon"><i style="font-size:21px;" class="entypo-users"></i></div>
				<div style="padding:10px;" data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totaluser();?>
				</div>			
			<h3 style="background: rgb(61, 169, 227) none repeat scroll 0% 0%; padding: 8px 10px 8px 10px; font-size: 16px;"><a style="color:#fff;" href="<?php echo $base_url;?>reguser/lists/">Users</a></h3>
 		</div>		
	</div>
		
	<div class="col-sm-3">
		<div class="tile-stats tile-red">
			<div class="icon"><i style="font-size:21px;" class="entypo-users"></i></div>
				<div style="padding:10px;" data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totalproducts();?>
				</div>			
			<h3 style="background: rgb(61, 169, 227) none repeat scroll 0% 0%; padding: 8px 10px 8px 10px; font-size: 16px;"><a style="color:#fff;" href="<?php echo $base_url;?>product/lists">Products</a></h3>
 		</div>		
	</div>
	
	<div class="col-sm-3">
		<div class="tile-stats tile-red">
			<div class="icon"><i style="font-size:21px;" class="entypo-users"></i></div>
				<div style="padding:10px;" data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totalorder();?>
				</div>			
			<h3 style="background: rgb(61, 169, 227) none repeat scroll 0% 0%; padding: 8px 10px 8px 10px; font-size: 16px;"><a style="color:#fff;" href="<?php echo $base_url;?>product/order_manage">Orders</a></h3>
 		</div>		
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12 col-sx-12"><div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-calendar"></i> Recent Activity</h3>
  </div>
  <ul class="list-group">
		<?php $currentdate = date('Y-m-d');
		$currentuser = $this->admin->currentuser($currentdate);
		?>
	 
		<table style="float:left;" aria-describedby="table-2_info" class="table table-bordered table-striped datatable dataTable" id="table-2">
		<?php if($currentuser != '' && count($currentuser) > 0) { ?>
        <thead>
          <tr class="bg" role="row">
            <th style="width: auto;" aria-controls="table-2" role="columnheader" class="sorting">Name</th>
			<th style="width: auto;" aria-controls="table-2" role="columnheader" class="sorting">Email</th>
			<th style="width: auto;" aria-controls="table-2" role="columnheader" class="sorting">Join date</th>
			<th style="width: auto;" aria-controls="table-2" role="columnheader" class="sorting">Phone No</th>
		 </tr>
        </thead>
        <tbody aria-relevant="all" aria-live="polite" role="alert">         
		<?php foreach($currentuser as $pro) { ?> 
          <tr class="odd">
			<td class=" "><?php echo $pro->username; ?></td>
			<td class=" "><?php echo $pro->email; ?></td>
			<td class=" "><?php echo $pro->joindate; ?></td>
			<td class=" "><?php if($pro->phone !="") { echo $pro->phone; } else { echo "Not Available"; } ?></td>
		</tr>
		<?php } ?>
        </tbody>
		<?php } else {
			?><li class="list-group-item text-center">No Recent Activity.!!</li><?php
		}
		?>
      </table>
      </ul>
</div></div>
	<script type="text/javascript" src="<?php echo $base_url_views; ?>js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "theme1",//theme2
		title:{
			text: "Order Graph"              
		},
		animationEnabled: true,   // change to false
		data: [              
		{
 			type: "column",// Change type to "bar", "splineArea", "area", "spline", "pie",etc.
			dataPoints: [
				<?php  
			for($i = '1'; $i < 31; $i++) {
				if($i<10){
					$m = '0'.$i;
				} else {
					$m = $i;
				}
				$date = date('Y-m-'.$m);
				$currentuser = $this->admin->todayorders($date);
				?>
				{ label: "<?php echo $i; ?>",  y: <?php echo $currentuser; ?>  } <?php if($i != '30') { ?> , <?php } ?>
			<?php } ?>
			]
		}
		]
	});
	chart.render();
}
</script>
<div  class="col-sm-3" id="chartContainer" style="height: 300px; width: 50%;"></div>	 
		<div class="col-sm-3">	
	</div>
	 
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>