<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
 
<script type="text/javascript">
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'order/reports'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var username = $("#username").val();
				var startdate = $("#startdate").val();
				var enddate = $("#enddate").val();
				var groupby = $("#groupby").val();
				
				if(username=='' && startdate=='' && enddate=='' && groupby=='')
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
			url:'<?php echo $base_url; ?>order/ajaxlist_category',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#cname" ).autocomplete({
					source: c
				});
			}
		});
		});
});
</script>
 
<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Sales Report</strong></li>
  </ol>

 
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title"> Sales Report 
 <a href="<?php echo $base_url; ?>order/download" style="float:right;color:white;" >Download</a>
 </h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."order/reports/";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <!-- label class="col-sm-1 control-label lavel" for="inputEmail">Search :</label>
            <div class="col-lg-2">
           <input type="text" id="username" name="username"  value="<?php echo $username; ?>" class="form-control jobtext from-dainn"   />
            </div -->
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Start date :</label>
            <div class="col-lg-2"> 
				<input type="date" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">End date :</label>
            <div class="col-lg-2"> 
				<input type="date" id="enddate" value="<?php echo $enddate; ?>" name="enddate" class="form-control jobtext"/>
			</div>
			<label class="col-lg-1 control-label lavel" for="inputEmail">Group By:</label>
            <div class="col-lg-2">
				 
						<select id='groupby' name='groupby' class="form-control jobtext" >
 							<option value='weeks' <?php if($groupby == "weeks"){ echo "Selected"; } ?>>WEEKS</option>
							<option value='months' <?php if($groupby == "months"){ echo "Selected"; } ?>>MONTHS</option>
							<option value='years' <?php if($groupby == "years"){ echo "Selected"; } ?>>YEARS</option>
							<!-- option value='days' <?php if($groupby == "days"){ echo "Selected"; } ?>>DAYS</option -->
						</select>
            </div>
            
			<div class="col-lg-3">
			<div class="set1">
                <input type="submit" value="Search" id="sbutton" name="sbutton" style="background-image:none;" class="btn btn-default btn-four" />
                <input type="button" value="Reset" id="reset" style="background-image:none;" class="btn btn-scoend btn-four" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 
<?php
      if($this->pagination->create_links() != '')
      {
      ?>
  <div class="pagination"> <?php echo $this->pagination->create_links(); ?> </div>
  <?php
      }
      ?>

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
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."product/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>--> 
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Start Date</th>		
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">End Date</th>
<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">No of Orders</th>
 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">No of Products</th>
 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Total Amount</th>
			 
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          
               <?php
			   /*	$date1=date_create($startdate);
				$date2=date_create($enddate);
				$diff=date_diff($date1,$date2);
				$diffday = $diff->days;
				 
				   if($groupby == "weeks")
							{ 
								$tomorrow =$startdate;
								for($i=0;$i<$week;$i++)
								{
									$date = $tomorrow;
									$date1 = str_replace('-', '/', $date);
									$tomorrow = date('m-d-Y',strtotime($date1 . "+7 days"));
									echo $tomorrow; echo "</br>";
								}
								if($startdate < $enddate){
									echo $startdate; die;
									/*While($startdate <= $enddate) 
									{
										 $enddate1 = date('m-d-Y',strtotime($enddate . "+7 days"));
									}
									$startdate = $enddate1;
								}
								//echo $enddate ;
							}*/
			$total = '0';
		  if( isset($_POST['startdate']) && $_POST['startdate'] != '') { 	
		   while(strtotime($startdate) <= strtotime($enddate)){

				if($_POST['groupby'] == 'weeks') {
					$enddate1 = date('Y-m-d', strtotime($startdate." +7 days")); 
				}
				if($_POST['groupby'] == 'months') {
					$enddate1 = date('Y-m-d', strtotime($startdate." +30 days")); 
				}
				if($_POST['groupby'] == 'years') {
					$enddate1 = date('Y-m-d', strtotime($startdate." +365 days")); 
				}
				
				$result = $this->order_model->order_manage($startdate, $enddate); 
			?>    
			<tr class="odd">
			<td class=""><?php echo $startdate; ?></td>
			<td class=" "><?php echo $enddate; ?></td>
			<td class=""><?php echo $result->totalorders;  ?></td>
			<td class=""><?php echo $result->totalorders;  ?></td>
			<td class=""><?php echo $result->totalorderamount;  ?></td>
          </tr>
		    <?php  $total = $total + $result->totalorderamount;
			$startdate = $enddate1;
			} } ?>
			 <tr>
				<td colspan="3">Total</td>
				<td><?php echo $total; ?>/-</td>
			</tr>
					 
						
        </tbody>
      </table>
    </form>
  </div>
  </div>
</div>
</div>
<script src="<?php echo $base_url_views; ?>js/jquery-1.10.2.min.js"></script>
<link href="<?php echo $base_url_views; ?>css/date.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script type="text/javascript">
	var jq = $.noConflict();
	jq(document).ready(function(){
		jq( "#startdate" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
		jq( "#enddate" ).datepicker({
			showOn: "both",
			buttonImage: "<?php echo $base_url_views; ?>images/calendar.png",
			dateFormat: 'yy-mm-dd',
			buttonImageOnly: true
		});
	});
	
	</script>
<?php include('include/footer.php');?>
</body>
</html>

