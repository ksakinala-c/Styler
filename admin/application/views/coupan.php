<?php   include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
			<script>
				$(document).ready(function($){
					$('#reset').click(function(){
						var base_url = '<?php echo $base_url.'coupan/lists'; ?>';
						window.location = base_url;
					});

					$(function() {
					$.ajax({
						url:'<?php echo $base_url; ?>coupan/ajaxlist_coupan',
						type:'POST',
						data:'',
						success:function(msg)
						{
							//alert(msg);
							var  c = msg.split(",");
							var availableTags = [msg];	
							$( "#title" ).autocomplete({
								source: c
							});
						}
					});
					});
				});


			</script>
					<script>
					function deletes(){
						var checked = $("#form input:checked").length > 0;
						if (!checked){
							alert("Please select at least one record to delete");
							return false;
						}
						if(confirm('Do you want to Delete?')){ $('#form').submit(); }
					}
				function approve(url){
					var t = confirm('Are you sure you want to approve Coupon?');
					if(t){
						window.location.href = url;
					} else {
						return false; 
					}

				}

				function disapprove(url){
					var t = confirm('Are you sure you want to Disapprove Coupon?');
					if(t){
						window.location.href = url;
					} else {
						return false; 
					}

				}

					</script>


	<div class="main-content theme">
			  <ol class="breadcrumb bc-3">
				<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
				<li class="active"><strong>Coupon </strong></li>
			  </ol>


						<?php if(isset($_POST))
						{
							if(count($result)==0)
							{
							?>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add/"><i class="entypo-plus"></i>Add Coupon </a>
							<?php
							}
							else
							{
							?>
							<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add"><i class="entypo-plus"></i>Add Coupon </a>
							<?php
							}
						}
						else
						{
						?>
							<a class="btn btn-primary add" href="<?php echo $base_url;?>coupan/add"><i class="entypo-plus"></i>Add Coupon </a>
						<?php
						}
						?>
			<div class="checker" id="uniform-titleCheck">
			<span>
				<input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
				</span>
			</div>
	  </span>
	</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
  <div class="row">
 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List Coupon </h6></div>
    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."coupan/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">
          <div class="form-group mock">
          	<label class="col-sm-1 control-label lavel" for="inputEmail" style="width:111px;">Coupon Name :</label>
            <div class="col-lg-2"> 
				<input type="text" id="coupanname" value="<?php echo $coupanname; ?>" name="coupanname" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Start date :</label>
            <div class="col-lg-2"> 
				<input type="date" id="startdate" value="<?php echo $startdate; ?>" name="startdate" class="form-control jobtext"/>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">End date :</label>
            <div class="col-lg-2"> 
				<input type="date" id="enddate" value="<?php echo $enddate; ?>" name="enddate" class="form-control jobtext"/>
			</div>


            <div class="col-lg-2">
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


      if($this->pagination->create_links()!='')
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
				<form action="<?php echo $base_url."coupan/deletes";?>" method="post" enctype="multipart/form-data" id="form">
				  <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
				  <div class="table-responsive">
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
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Coupon name</th>
							<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Coupon Value</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Discount</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Description</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Start date</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">End date</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Active/Deactive</th>
						<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
					  </tr>
						</tr>
					</thead>
					<tbody role="alert" aria-live="polite" aria-relevant="all">
					  <?php
						if($result)
						{
								// for($i=0;$i<count($result);$i++){
							foreach($result as $results)
							{
							?>
								<tr class="odd">
									<td class="  sorting_1">
										<div class="checkbox checkbox-replace neon-cb-replacement">
										<label class="cb-wrapper">
										<input name="selected[]" id="selected[]" value="<?php echo $results['id']; ?>" type="checkbox">
										</label>
										</div>
									</td>
									<td class=" "><?php echo $results['coupanname'] ?></td>
									<td class=" "><?php 
									if($results['coupanvalue']==1){
										echo "Price";
									} else{
										echo "Percentage";
									}
									 ?></td>
									<td class=" "><?php echo $results['discount'] ?></td>
									<td class=" "><?php echo $results['description'] ?></td>
									<td class=" "><?php echo $results['startdate'] ?></td>
									<td class=" "><?php echo $results['enddate'] ?></td>
									
									 <td>
									<?php if($results['enabled']=='0')
										{ 
										?>
												<a class="" title="Approved" onclick="approve('<?php echo $base_url."coupan/userstatus/"; ?><?php echo $results['id']; ?>');" href="javascript:void(0);">
											<i>Active</i>
										</a>
										<?php
										}
										else
										{ 
										?>
												<a class="" title="Disapproved" onclick="disapprove('<?php echo $base_url."coupan/userstatus/"; ?><?php echo $results['id']; ?>');" href="javascript:void(0)" >
											<i>De-Active</i>
										</a>
										<?php
										} ?>
									</td>
						
									<?php
					if($this->session->userdata('adminId') !='')
					{
					$uid = $this->session->userdata('adminId');
					$getuser['data'] = $this->footer->getuser($uid);
					$category = $getuser['data'][0]->ucategory;
					$usercategory = $this->footer->usercategory($category);
					$permission1=$usercategory[0]->editperm;
					$permission1 = explode(',',$permission1);
				?>
			<?php if(in_array('6',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."coupan/edit/"; ?><?php echo $results['id']; ?>">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
			 <?php } else { ?>
			 <td class=" ">
				Access Denied.
			</td>
			
			 <?php } } ?>
								</tr>		
								<?php
							}
						} 
						else 
						{
							?>
							<tr>
							<td class="left" colspan="4" align="center"><?php echo 'No Coupon Found'; ?></td>
							</tr>
							<?php
						}
							?>
					</tbody>
				  </table>
				  </div>
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