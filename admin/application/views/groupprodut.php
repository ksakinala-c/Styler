<?php include('include/header.php');?>
 
<script>
	function validate()
	{
		var product = $("#productid").val();
		if(product == '')
		{
			alert('Please Enter Product to search');
			return false;
		}
		
		$('#form').submit();
	}
		
	
	function addproducttogroup(addid, pid){
		var t = confirm('Are you sure you want to add product to group');
		if(t){
			window.location.href = '<?php echo $base_url; ?>product/addtogroup/'+addid+'/'+pid; 
		} else {
			return false;
		}
	}
	
	function removeproducttogroup(addid, pid){
		var t = confirm('Are you sure you want to remove product to group');
		if(t){
			window.location.href = '<?php echo $base_url; ?>product/removeproducttogroup/'+addid+'/'+pid; 
		} else {
			return false;
		}
	}
	
</script>
 <style>
 #ui-id-1{z-index:9999999999999; width:410px !important; background:#7a7979; }
 .ui-menu-item{color:#fff !important; list-style:none !important; margin:0 0 7px 0px; font-size:15px; padding:3px 10px 3px 10px !important;}
  .ui-menu-item:hover{color:#000 !important; background:#ddd;}
 </style>
<link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Group Product</strong></li>
  </ol>
</div>
</div>

  <?php if($this->session->flashdata('L_strErrorMessage')) 
  { ?>
		  <div class="success">
		  <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
		  </div>
  <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Group Product
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>product/lists'">Cancel</button>
                    
                      </div>
 				</div>
 			</div>
	<form class="form-horizontal form-groups-bordered"  enctype="multipart/form-data"  role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>product/groupproduct/<?php echo $groupid; ?>">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_product">
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Search product to Add:</label>
					<div class="col-sm-5">
					  <input style="width:410px; float:left;" type="text" name="product" id="productid" value="<?php echo $this->input->post('product'); ?>" class="form-control jobtext from-dainn"  >   
					  <button style="float:right;" class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                  	</div>
				</div>
           </div>
		 </form>
 		</div>
		<?php if($this->input->post('product') != '') { ?>
		<div class="col-md-12">
			<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
				<thead>
				<tr role="row" class="bg"><th>Name</th> <th>Remove</th></tr> </thead>
				<?php 
					if($searchproducts != '' && count($searchproducts) > 0){
					foreach($searchproducts as $prts) { 
				?>
					<tr><td><?php echo $prts->pname;?></td> <td><a onclick="addproducttogroup('<?php echo $prts->id; ?>', '<?php echo $groupid; ?>');">Add</a></td></tr>
				<?php   } } else { ?>
					<tr><td colspan="2">No Products Found </td></tr>
				<?php } ?>
			</table>
		</div>
		<?php } ?>
		
		<div class="col-md-12">
			<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
				<thead>
				<tr role="row" class="bg"><th>Name</th> <th>Remove</th></tr> </thead>
				<?php $groupedproduct = $result[0]->groupedprod; 
				$grouparray = explode(',',$groupedproduct);
				$k = '0';
				for($j='0';$j<count($grouparray);$j++){
				if($grouparray[$j] != '') {
				?>
					<tr><td><?php echo $this->product_model->pname($grouparray[$j]);?></td> <td><a onclick="removeproducttogroup('<?php echo $grouparray[$j]; ?>', '<?php echo $groupid; ?>');">Remove</a></td></tr>
				<?php $k++; } } ?>
				
				<?php if($k == 0){ ?>
					<tr><td colspan="2">No Products Added in Group</td></tr>
				<?php } ?>
			</table>
		</div>
		
 	</div>
  </div>

 </div>

<?php include('include/footer.php');?>
<script src="<?php echo $base_url_views; ?>css/auto.css"></script>
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
 
<script>
$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>product/ajaxlist_search',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$("#productid").autocomplete({
					source: c
				});
			}
		});
		});
</script>
</body>
</html>
