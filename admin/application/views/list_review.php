<?php
include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletecategory(){
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
				var base_url = '<?php echo $base_url.'review/lists'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#cname").val();
				
				if(name=='')
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
			url:'<?php echo $base_url; ?>review/ajaxlist_category',
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

function approve(url){
	var t = confirm('Are you sure you want to approve user review?');
	if(t){
		window.location.href = url;
	} else {
		return false; 
	}

}

function disapprove(url){
	var t = confirm('Are you sure you want to Disapprove user review?');
	if(t){
		window.location.href = url;
	} else {
		return false; 
	}

}

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
    <li class="active"><strong>Review</strong></li>
  </ol>


<a class="btn btn-third add" href="javascript:void('0');" onclick="deletecategory();"><i class="entypo-plus"></i>Delete</a>
<a class="btn btn-primary add" href="<?php echo $base_url;?>review/add"><i class="entypo-plus"></i>Add Review</a>
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<?/*<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title">List Category</h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."category/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Title :</label>
            <div class="col-lg-3">
           <input type="text" id="title" name="title"  value="<?php echo $title; ?>" class="form-control jobtext from-dainn"   />
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
  </div>*/?>
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
    <form action="<?php echo $base_url."review/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
		<tr role="row" class="bg">
            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
                </label>
              </div>
            </th>
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Title</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Product Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">User Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Ratting</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Review</th	>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Added Date</th	>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Status</th	>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th	>
			
			
		</tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
                  if($result){	
                  for($i=0;$i<count($result);$i++){
					// echo "<pre>"; print_r($result);
				?>
                  
                  
          <tr class="odd">
            <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $result[$i]->id; ?>" type="checkbox">
                </label>
              </div></td>
			<td class=""> <?php echo $result[$i]->title; ?></td>
			<td class=""> <?php echo $this->review_model->getproduct_name($result[$i]->product_id); ?></td>
			<td class=""> <?php echo $this->review_model->getuser_name($result[$i]->userid); ?></td>
		   <td class=""><?php echo $result[$i]->ratings; ?></td>
			<td class=""><?php echo $result[$i]->review; ?></td>
			<td class=""><?php echo $result[$i]->date; ?></td>
 			
			<td>
			<?php if($result[$i]->enable=='0')
				{ 
				?>
						<a class="" title="Approved" onclick="approve('<?php echo $base_url."review/userstatus/"; ?><?php echo $result[$i]->id; ?>');" href="javascript:void(0);">
					<i>Active</i>
 				</a>
				<?php
				}
				else
				{ 
				?>
						<a class="" title="Disapproved" onclick="disapprove('<?php echo $base_url."review/userstatus/"; ?><?php echo $result[$i]->id; ?>');" href="javascript:void(0)" >
					<i>De-Active</i>
 				</a>
				<?php
				} ?>
			</td>
			<td class=" ">
				<a href="<?php echo $base_url; ?>review/edit/<?php echo $result[$i]->id; ?>" title="Edit" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
          </tr>
          <?php
                  }
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="9" align="center"><?php echo 'No Review Found'; ?></td>
          </tr>
          <?php
                  }
                  ?>
        </tbody>
      </table>
    </form>
  </div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>