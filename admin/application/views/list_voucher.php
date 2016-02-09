<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletecolour(){
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<script type="text/javascript">
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'coupan/lists_voucher'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#vouchername").val();
				var value = $("#value").val();
				
				if(name=='' && value == '')
				{
					alert("Please Enter atleast one search condition.");
					return false;
				}
				else
				{
					return true;
				}
		});
 
		$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>coupan/ajaxlist_voucher',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#topicname" ).autocomplete({
					source: c
				});
			}
		});
		});
});
</script>
<script>
function deletes()
{
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Gift Voucher</strong></li>
  </ol>
<?php if(isset($_POST))
{
if(count($result)==0)
{
?>
<?php
}
else
{
?>
<?php
}
}
else
{
?>
<a href="<?php echo $base_url;?>coupan/lists_voucher"></a>
<?php
}
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletecolour();"><i class="entypo-plus"></i>Delete</a>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher/"><i class="entypo-plus"></i>Add Gift Voucher</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher"><i class="entypo-plus"></i>Add Gift Voucher</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add_voucher"><i class="entypo-plus"></i>Add Gift Voucher</a>
<?php
} ?>
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<?php if($this->session->flashdata('L_strErrorMessage')) 
  { ?>
		  <div class="success">
		  <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
		  </div>
  <?php }else { ?>

		<div class="warning">
		<?php echo $this->session->flashdata('flashError'); ?>
		</div>
<?php }  ?>
<div class="row">
 
     <div class="col-6 col-sm-12 col-lg-12 action">
      
    </div>
  </div>
  <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."coupan/lists_voucher";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Gift Voucher Name :</label>
            <div class="col-lg-3">
				<input type="text" id="vouchername" name="vouchername"  value="<?php if($vouchername!='null'){ echo $vouchername; } ?>" class="form-control jobtext from-dainn"   />
            </div>
			<label class="col-sm-1 control-label lavel" for="inputEmail">Paid/Free :</label>
            <div class="col-lg-2"> 
						<select style="width:100%;" id="value" name="value" class="form-control" >
								<option value="">Select Value </option>
								<option value="free" <?php if($value=="free") { echo "Selected"; } ?>>Free</option>
								<option value="paid" <?php if($value=="paid") { echo "Selected"; } ?>>Paid</option>
							 
								</select>
			</div>
			<div class="col-lg-5">
			<div class="set1">
                <input type="submit" value="Search" id="sbutton" name="sbutton" style="background-image:none;" class="btn btn-default btn-four" />
                <input type="button" value="Reset" id="reset" style="background-image:none;" class="btn btn-scoend btn-four" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div class="demo tabelformatesss">       
<div id="verticalTab">
<ul class="resp-tabs-list">
<a style=" background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>coupan/lists_voucher">All Gift Cards</a>
<a style=" background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>coupan/paid_card" target="_blank">Paid Gift Cards</a>
<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>coupan/free_card" target="_blank">Free Gift Cards</a>
<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>giftcard/lists" target="_blank">Add Themes</a>
<a style="background: #00719d none repeat scroll 0 0; border-bottom: 1px dashed #fff; color: #fff; cursor: pointer; display: block; float: none; font-weight: normal; margin: 0;
    padding: 9px !important; text-decoration:none;" href="<?php echo $base_url; ?>giftcard/currency" target="_blank">Currency</a>
<li style="display:none;">Credit Memos</li>

</ul>
<div class="resp-tabs-container">
<div>
		<style>
		.tbtformatstylesss{width:49%; border:solid 1px #ccc; font-size:13px; float:left;}
		.tbtformatstylesss td{padding:3px;}
		.tbtformatstylesss th{background:#00a7e8; color:#fff; padding:3px;}

		.tbtformatstylesssto{width:49%; border:solid 1px #ccc; font-size:13px; float:right;}
		.tbtformatstylesssto td{padding:3px;}
		.tbtformatstylesssto th{background:#00a7e8; color:#fff; padding:3px;}
		.fullpartssss td{border-right:solid 1px #ccc;}
		</style>
<div class="joshi_informationmain">

		 
			<div style="clear:both; margin-top:15px; width:100%; float:left;"></div>
		<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."coupan/deletes_voucher";?>" method="post" enctype="multipart/form-data" id="form">
	<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
	<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
			<tr role="row" class="bg">
				<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> 
					<div class="checkbox checkbox-replace neon-cb-replacement">
						<label class="cb-wrapper">
						  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
						</label>
					</div>
				</th>
				<!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Gift Voucher Name</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Currency</th>
 				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Price</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Qty</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Type</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Added Date</th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
			</tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php
				if($result){
					for($i=0;$i<count($result);$i++){
					 //echo $result[$i]['vouchername'];
					?>  
			<tr class="odd">
				<td class="  sorting_1">
					<div class="checkbox checkbox-replace neon-cb-replacement">
						<label class="cb-wrapper">
							<input name="selected[]" id="selected[]" value="<?php echo $result[$i]['id']; ?>" type="checkbox">
						</label>
					</div>
				</td>
		
				<td class=""><?php echo $result[$i]['giftname']; ?></td>
				<td class=""><?php echo $result[$i]['currency']; ?></td>
 				<td class=""><?php  echo $result[$i]['giftvalue']; ?></td>
				<td class=""><?php  echo $result[$i]['qty']; ?></td>
				<td class=""><?php  echo $result[$i]['type']; ?></td>
				<td class=""><?php  echo $result[$i]['added_date']; ?></td>
				<td class="">
				  <a href="<?php echo $base_url; ?>coupan/downloadcode/<?php echo $result[$i]['id']; ?>">Download</a>
				<!-- a href="<?php echo $base_url; ?>coupan/edit_voucher/<?php echo $result[$i]['id']; ?>" title="Edit" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
 				</a-->
			</td>
			</tr>
		
			<?php }  } else { ?>
			<tr>
				<td class="left" colspan="2" align="center"><?php echo 'No Gift Voucher Found.!!'; ?></td>
			</tr>
			<?php    }  ?>
        </tbody>
	</table>
    </form>
  </div>
			<div style="clear:both; margin-top:15px; width:100%; float:left;"></div>

				 

			 

</div>

</div>
  
<div class="spesalartival">

<table class="tbtformatstylesss">
<thead>
<tr>
<th colspan="2">Shipping & Handling Information</th>
</tr>
</thead>
<tbody>
<tr>
<td>Flat Rate - Fixed</td>
<td><b>$0.00</b></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<br />
<div style="height: 30px; clear: both"></div>
</div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>


<!--tav css start-->
<link rel="stylesheet" href="<?php echo $base_url_views; ?>left-tab-css/responsive-tab.css" type="text/css" media="screen" />
<script charset="utf-8" class="lazyload" src="<?php echo $base_url_views; ?>left-tab-js/jquery-1.js"></script>
<script src="<?php echo $base_url_views; ?>left-tab-js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--Tab css done-->
</body>
</html>