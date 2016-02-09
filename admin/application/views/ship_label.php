<?php
$front_base_url = $this->config->item('front_base_url');
$base_url 		= $this->config->item('base_url');
$http_host 		= $this->config->item('http_host');
$base_url_views = $this->config->item('base_url_views');
$base_upload = $this->config->item('upload');
$live_base_url = $this->config->item('live_base_url');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>stylior Shipping Label</title>
<link href="<?php echo $base_url_views; ?>css/shiplabel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<script>
function myFunction()
{
    window.print();
}
</script> 

<main>
<button style="background: none repeat scroll 0 0 #000;    border: medium none;    color: 
#fff;    float: right;    font-size: 13px;       line-height: 20px;    margin:0 0px 7px 3px;    padding:5px 15px;}" onclick="myFunction()">Print</button>
   
<a href="<?php echo $base_url; ?>product/shipment_list/<?php echo $this->uri->segment(4); ?>" style="background: none repeat scroll 0 0 #000;    border: medium none;    color: 
#fff;    float: right;    font-size: 13px;       line-height: 20px;    margin:0 0px 7px 3px;    padding:6px 15px;}" >Back</a>  
<div class="toppartmain">

<div class="toppartmain-left">
<h1><b>Packing Slip</b><p>ID: <?php echo $order__id;?></p></h1>
<?php // echo "<pre>";print_r($shippingdetails); ?>
<div class="logoparts">
<img src="<?php echo $base_url_views; ?>images/logo.png" alt="" />
<p><b>Order Date:</b> <?php echo $orderdetails->cdate; ?><br />
<b>Ship via:</b> <?php echo $this->product_model->getcouriername($shipmentdetails->courier); ?><br />
<b>Payment Method:</b> <?php if($orderdetails->paymentmode == "0") { echo "Online Payment"; }?>
</p>
<h2>Ship From:</h2>
<p style="margin-top:0px;">
201, Akshar Blue Chip IT Park, <br/>
Turbe , <br/>
Navi Mumbai-400705 <br/>
Customer Care: +91 8055-670-670
</p>
</div>
</div>

<div class="topright-partmain">
<div class="blankbox"></div>
<h3>Ship To:</h3>
<p><?php echo $shippingdetails->sname; ?><br />
<?php echo $shippingdetails->saddress; ?><br />
<?php echo $shippingdetails->scity; ?><br />
<?php echo $shippingdetails->scounty; ?><br />
<?php echo $shippingdetails->spostcode; ?>.<br />
<?php echo $shippingdetails->smobno; ?>
</p>
</div>
</div>
<table class="table">
<thead>
<tr>
<th>Item No</th>
<th>Product name</th>
<th>Quantity</th>
<th>Price</th>


</tr>
	</thead>
		<tbody>
		 <?php $ci_items =  $shipmentdetails->ci_order_item ;
				$newcitems = explode (',',$ci_items);
 				foreach($newcitems as $items){
				$ciitemdetail = $this->product_model->getproductdetail($items);
 		 ?>
 				<tr>
				<td><?php echo $ciitemdetail->order_item_code;?></td>
				<td><?php echo $ciitemdetail->order_item_name ;?></td>
				<td style="text-align:center"><?php echo $ciitemdetail-> product_quantity  ;?></td>
				<td style="text-align:center;"><?php echo number_format($ciitemdetail-> product_item_price,'2','.','');?></td>
				</tr>
				<?php } ?>
		 
		</tbody>
	</table>
<p style="color: rgb(0, 0, 0); text-align: right; float: right; margin: 7px 60px 0px 0px;">Total:  <?php echo $orderdetails->order_total; ?></p>
<div class="lastparts">
<p>Order Currency: <?php echo $orderdetails->order_currency ; ?><br /><br />
 <br />
</p>
<b>** Thank you for shopping with us Visit us again **</b>
</div>
<div class="clear"></div>
</main>
</body>
</html>
