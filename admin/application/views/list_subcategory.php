<?php include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletesubcategory(){
	var checked = $("#form input:checked").length > 0;
    if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form').submit(); }
}
</script>
<script type="text/javascript">

	$(document).ready(function($)
	{
		
		$('#reset').click(function(){
			var base_url = '<?php echo $base_url.'subcategory/lists'; ?>';
			window.location = base_url;
		});
		
		$("#sbutton").click(function(){
			var cname = $("#cname").val();
			var scname = $("#scname").val();
			
			if(cname=='' && scname=="")
			{
				alert("Please Enter atleast one search condition.");
				return false;
			}
			else
			{
				return true;
			}
		});


		$.ajax({
			url:'<?php echo $base_url; ?>subcategory/ajaxlist_subcategory',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#scname" ).autocomplete({
					source: c
				});
			}
		});
	});

</script>
<div class="main-content theme">
<ol class="breadcrumb bc-3">
<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
<li class="active"><strong>SubCategory</strong></li>
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
<a href="<?php echo $base_url;?>subcategory/lists"></a>
<?php
}
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletesubcategory();"><i class="entypo-plus"></i>Delete</a>
<?php if(isset($_POST))
{
if(count($result)==0)
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>subcategory/add"><i class="entypo-plus"></i>Add SubCategory</a>
<?php
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>subcategory/add"><i class="entypo-plus"></i>Add SubCategory</a>
<?php
}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>subcategory/add"><i class="entypo-plus"></i>Add SubCategory</a>
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
  

 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List SubCategory</h6></div>

    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."subcategory/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">

		<div class="form-group mock">

            <label class="col-lg-1 control-label lavel" for="inputEmail">SubCategory:</label>
            <div class="col-lg-3">
            <input type="text" id="scname" name="scname" value="<?php echo $scname;?>" class="form-control jobtext"/>
            </div>

            <label class="col-lg-1 control-label lavel" for="inputEmail">Category:</label>
            <div class="col-lg-3">
				  <?php
					$data = $this->subcategory_model->allcategory();
					?>
						<select id='cname' name='cname' class="form-control jobtext" >
						<option value=''>Select Category</option>
						<?php
						for($j=0;$j<count($data);$j++)
						{
						?>
							<option value='<?php echo $data[$j]->id; ?>'  <?php if($cname == $data[$j]->id) { ?> selected='selected' <?php } ?> ><?php echo $data[$j]->cname ?></option>
						<?php
						}
						?>
						</select>
            </div>
            
             <div class="col-lg-51">
              <div class="set1">
                <input type="submit" value="Search" id="sbutton" name="sbutton"		 style="background-image:none; margin-left:10px;" class="btn btn-default btn-four" />
                <input type="button" value="Reset" id="reset" style="background-image:none; " class="btn btn-scoend btn-four" />
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
    <form action="<?php echo $base_url."subcategory/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
      <div class="table-responsive">
      <table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
        <thead>
          <tr role="row" class="bg">
            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label=""> <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
                </label>
              </div>
            </th>
            <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Image</th>
			 
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">SubCategory</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Category</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Sort Order</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Add Parts</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Add Size</th>
 			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
          </tr>
            </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
           if($result)
			{
               for($i=0;$i<count($result);$i++){
			?>
          <tr class="odd">
            <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $result[$i]->id; ?>" type="checkbox">
                </label>
              </div></td>	
			  
			  <td class=""><img src="<?php echo $front_base_url;?>upload/subcategory/<?php echo $result[$i]->image;?>" height="30px" width="50px"/></td>
			 
			<td class=" "><?php echo $result[$i]->scname; ?></td> 
			<td class=" "><?php echo $this->subcategory_model->getcatname($result[$i]->catid); ?></td>
		 <td class=" "><?php echo $result[$i]->id; ?></td> 
		 <td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."parts/lists/"; ?><?php echo $result[$i]->id; ?>">
					<i class="">Add Parts </i>
 				</a>
				
			</td>
			 <td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."size/lists/"; ?><?php echo $result[$i]->id; ?>">
					<i class="">Add Sizes </i>
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
			<?php if(in_array('11',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."subcategory/edit/"; ?><?php echo $result[$i]->id; ?>">
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
			else {
            ?>
          <tr>
            <td class="left" colspan="4" align="center"> <?php echo 'No SubCategory Found'; ?></td>
          </tr>
         
        </tbody>
      </table>
      </div>
	 
	  <?php
         }
       ?>
    </form>
  </div>
  </div>
</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>