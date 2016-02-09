
<?php include('include/header.php');?>
<script type="text/javascript">
	$(document).ready(function($) {
	
	$("#sbutton").click(function(){
				var name = $("#themename").val();
				
				if(name=='')
				{
					alert("Please Enter themename in search condition.");
					return false;
				}
				else
				{
					return true;
				}
		});
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'affliliate/lists'; ?>';
				window.location = base_url;
		});
			});
</script>
<div class="main-content">
<ol class="breadcrumb bc-3">
	<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
	<li class="active"><strong>Affliliate</strong></li>
</ol>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="row">
<a class="btn btn-third add" href="javascript:void('0');" onclick="if(confirm('Do you want to Delete?')){ $('#form').submit(); }"><i class="entypo-plus"></i>Delete</a>
<a class="btn btn-primary add" href="<?php echo $base_url;?>affliliate/add"><i class="entypo-plus"></i>Add Affiliate Themes</a>
</div>
<div class="row"><br/></div>
<div class="row">
<div class=""><h6 class="main-title">List Affiliate Themes</h6></div>
     <div class="">
      <div class="end">
        <form action="<?php echo $base_url."affliliate/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Themes Name:</label>
            <div class="col-lg-3">
           <input type="text" id="themename" name="themename"  value="<?php echo $themename; ?>" class="form-control jobtext from-dainn"   />
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


<form action="<?php echo $base_url."affliliate/deletes/";?>" method="post" enctype="multipart/form-data" id="form">
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
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Theme Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Image</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Url</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Order</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
			</tr>
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
			<td class=" "><?php echo $result[$i]->themename; ?></td>
			<td class=""><img src="<?php echo $front_base_url;?>upload/affliliate/small/<?php echo $result[$i]->image;?>" /></td>
			<td class=" "><?php echo $result[$i]->url; ?></td>
			<td class=" "><?php if($result[$i]->order !="" && $result[$i]->order >0){ echo $result[$i]->order; } else { echo "Not Updated"; } ?></td>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."affliliate/edit/"; ?><?php echo $result[$i]->id; ?>">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
		</tr>
		<?php
                }
            } else {
            ?>
            <tr>
                <td class="left" colspan="8" align="center"><?php echo 'No Affliliatetheme Found'; ?></td>
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
