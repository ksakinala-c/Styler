
<?php include('include/header.php');?>
<div class="main-content">
<ol class="breadcrumb bc-3">
	<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
	<li class="active"><strong>List Products</strong></li>
</ol>
<a class="btn btn-primary add" href="<?php echo $base_url;?>hmlistpage/add"><i class="entypo-plus"></i>Add List Product</a>
<a class="btn btn-third add" href="javascript:void('0');" onclick="if(confirm('Do you want to Delete?')){ $('#form').submit(); }"><i class="entypo-plus"></i>Delete</a>
<div class="title"><span class="titleIcon">
          <div class="checker" id="uniform-titleCheck"><span><input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;"></span></div>
          </span>
          <h6>Lists Products</h6>
		  
        </div>
<?php if($this->session->flashdata('L_strErrorMessage')) { ?><div class="success"><?php echo $this->session->flashdata('L_strErrorMessage'); ?></div><?php } ?>


		
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<form action="<?php echo $base_url."hmlistpage/deletes/";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
	 
 
<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info">
	<thead>
		<tr role="row" class="bg">
			<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label="">
			<div class="checkbox checkbox-replace neon-cb-replacement">
				<label class="cb-wrapper"><input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
				</label>
			</div>
			</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Image</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Fabric Id</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Fabric Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">price</th>
 			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th></tr>
	</thead>
	
	
	<tbody role="alert" aria-live="polite" aria-relevant="all">
		 <?php
			if($result){
                for($i=0;$i<count($result);$i++){
				?>
		<tr class="odd">
			<td class="  sorting_1">
				<div class="checkbox checkbox-replace neon-cb-replacement">
					<label class="cb-wrapper"><input name="selected[]" id="selected[]" value="<?php echo $result[$i]->id; ?>" type="checkbox">
					</label>
				</div>
			</td>
			 <td class=""><img src="<?php echo $front_base_url;?>upload/hmlistpage/small/<?php echo $result[$i]->image;?>" /></td>
			<td class=" "><?php echo $result[$i]->fabric_id; ?></td>
			<td class=" "><?php echo $result[$i]->fabric_name; ?></td>
 			<td class=" "><?php echo $result[$i]->price; ?></td>
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
			<?php if(in_array('21',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."hmlistpage/edit/"; ?><?php echo $result[$i]->id; ?>">
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
                <td class="left" colspan="8" align="center"><?php echo 'No Data Found'; ?></td>
            </tr>
            <?php
            }
            ?>
		
		
		</tbody></table>
</form>		
</div>

</div>
<?php include('include/footer.php');?>
</body>
</html>
