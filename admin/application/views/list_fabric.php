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
				var base_url = '<?php echo $base_url.'fabric/lists'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#fabricsname").val();
				var catid = $("#catid").val();
				var subcatid = $("#subcatid").val();
				
				if(name=='' && catid=='' && subcatid=='')
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
			url:'<?php echo $base_url; ?>fabric/ajaxlist_fabric',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#fabricsname" ).autocomplete({
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
    <li class="active"><strong>Style</strong></li>
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
<a href="<?php echo $base_url;?>fabric/lists"></a>
<?php
}
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletecategory();"><i class="entypo-plus"></i>Delete</a>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>fabric/add/"><i class="entypo-plus"></i>Add Style </a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>fabric/add"><i class="entypo-plus"></i>Add Style </a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>fabric/add"><i class="entypo-plus"></i>Add Style </a>
<?php
}
?>
 <div class="checker" id="uniform-titleCheck"><span>
    <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    </span></div>
  </span>
</div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<div class="col-xs-12 col-sm-12"><h6 class="main-title">List Style</h6></div>
     <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."fabric/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Style :</label>
            <div class="col-lg-2">
           <input type="text" id="fabricsname" name="fabricsname"  value="<?php echo $fabricsname; ?>" class="form-control jobtext from-dainn"   />
            </div>
			<label class="col-sm-1 control-label lavel" for="inputEmail">Category :</label>
            <div class="col-lg-2"> 
						<select style="width:100%;" id="catid" name="catid" class="form-control" >
								<option value="">Select Category </option>
								<?php if($allcategory != '' && count($allcategory) > 0)
								{ foreach($allcategory as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id==$catid) { echo "Selected"; } ?>><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
						   </select>
			</div>
			
			<label class="col-sm-1 control-label lavel" for="inputEmail">Sub Category :</label>
            <div class="col-lg-2"> 
						<select style="width:100%;" id="subcatid" name="subcatid" class="form-control" >
								<option value="">Select Sub Category </option>
								<?php if($allsubcategory != '' && count($allsubcategory) > 0)
								{ foreach($allsubcategory as $subcat) { ?>
										<option value="<?php echo $subcat->id; ?>" <?php if($subcat->id==$subcatid) { echo "Selected"; } ?>><?php echo $subcat->scname; ?></option>
								<?php  } }	 ?>
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
    <form action="<?php echo $base_url."fabric/deletes";?>" method="post" enctype="multipart/form-data" id="form">
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
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Category</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Subcategory</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Style Name</th>
			<!-- th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Add Image</th -->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">View</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
                  if($result){
                          // for($i=0;$i<count($result);$i++){
                  for($i=0;$i<count($result);$i++){
				?>
                  
                  
          <tr class="odd">
            <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $result[$i]->id; ?>" type="checkbox">
                </label>
              </div>
			  </td>
			  <td class=" "><?php echo $result[$i]->order; ?></td>
			<td class=" "><?php echo $this->fabric_model->getcatname($result[$i]->catid); ?></td>
			<td class=" "><?php echo $this->fabric_model->getsubcatname($result[$i]->subcatid); ?></td>
           
           <td class=""><?php echo $result[$i]->fabricsname; ?></td>
 			<!-- td class="">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Add Image" href="<?php echo $base_url."fabric/editimage/".$result[$i]->id; ?>" >
                     <i>Add Image</i>
                     </a> 
			</td -->
			
			<td class="">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" target="_blank" href="<?php echo $live_base_url."style/"; ?><?php echo $result[$i]->pageurl; ?>">
					Live View</i>
 				</a>
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
			<?php if(in_array('13',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."fabric/edit/"; ?><?php echo $result[$i]->id; ?>">
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
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No Data Found.!!'; ?></td>
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