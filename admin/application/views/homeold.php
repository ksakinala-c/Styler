<?php include('include/header.php');?>
<style>
/* will be red only in google chrome */
#test3{
    color:green;
    (-bracket-:hack;
        color:red;
    );
}
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
			<div class="icon"><i class="entypo-users"></i></div>
				<div data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totaluser();?>
				</div>			
			<h3><a style="color:#fff;" href="<?php echo $base_url;?>reguser/lists/">Users</a></h3>
 		</div>		
	</div>
		
	<div class="col-sm-3">
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
				<div data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totalproducts();?>
				</div>			
			<h3><a style="color:#fff;" href="<?php echo $base_url;?>product/lists">Products</a></h3>
 		</div>		
	</div>
	
	<div class="col-sm-3">
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
				<div data-delay="600" data-duration="1500" data-postfix="" data-end="135" data-start="0" class="num">
				<?php echo  $this->admin->list_totalorder();?>
				</div>			
			<h3><a style="color:#fff;" href="<?php echo $base_url;?>product/order_manage">Orders</a></h3>
 		</div>		
	</div>
	
	<!--script type="text/javascript" src="<?php // echo // $base_url_views; ?>js/canvasjs.min.js"></script>
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
				{ label: "1",  y: 10  },
				{ label: "2", y: 15  },
				{ label: "3", y: 25  },
				{ label: "4",  y: 30  },
				{ label: "5",  y: 28  },
				{ label: "6",  y: 10  },
				{ label: "7", y: 15  },
				{ label: "8", y: 25  },
				{ label: "9",  y: 30  },
				{ label: "10",  y: 28  },
				{ label: "11",  y: 10  },
				{ label: "12", y: 15  },
				{ label: "13", y: 25  },
				{ label: "14",  y: 30  },
				{ label: "15",  y: 28  },
				{ label: "16",  y: 10  },
				{ label: "17", y: 15  },
				{ label: "18", y: 25  },
				{ label: "19",  y: 30  },
				{ label: "20",  y: 28  },
				{ label: "21",  y: 10  },
				{ label: "22", y: 15  },
				{ label: "23", y: 25  },
				{ label: "24",  y: 30  },
				{ label: "25",  y: 28  },
				{ label: "26", y: 15  },
				{ label: "27", y: 25  },
				{ label: "28",  y: 30  },
				{ label: "29",  y: 28  },
				{ label: "30",  y: 28  }
		 
			]
		}
		]
	});
	chart.render();
}
</script-->
 
<!--div  class="col-sm-3" id="chartContainer" style="height: 300px; width: 50%;"></div-->
	
	 
	 
		<div class="col-sm-3">	
	</div>
	 
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>