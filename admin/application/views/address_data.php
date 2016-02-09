<?php   include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'xlsdata/lists'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var pincode = $("#pincode").val();
				var city = $("#city").val();
				 
				
				if(pincode=='' && city=='')
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
			url:'<?php echo $base_url; ?>xlsdata/ajaxlist_product',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#city" ).autocomplete({
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
	
</script>


<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Xls Data </strong></li>
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
<a href="<?php echo $base_url;?>xlsdata/lists"></a>
<?php
}
?>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>xlsdata/dataupload/"><i class="entypo-plus"></i>Upload Xls Data</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>xlsdata/dataupload/"><i class="entypo-plus"></i>Upload Xls Data</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>xlsdata/dataupload/"><i class="entypo-plus"></i>Upload Xls Data</a>
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
  

 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List Xls Data</h6></div>

    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."xlsdata/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">
          
          
          <div class="form-group mock">
          	<label style="width:117px;" class="col-sm-1 control-label lavel" for="inputEmail">City :</label>
            <div class="col-lg-2"> 
				<input type="text" id="city" value="<?php echo $city; ?>" name="city" class="form-control jobtext"/>
			</div>
			<label style="width:117px;" class="col-sm-1 control-label lavel" for="inputEmail">Pincode :</label>
            <div class="col-lg-2"> 
				<input type="text" id="pincode" value="<?php echo $pincode; ?>" name="pincode" class="form-control jobtext"/>
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
			  <span style="color:green;float:left;padding-left:14px;font-size:18px;"><b><?php if(isset($err_msg)){ echo $err_msg; } ?> <?php if($this->session->flashdata('message')!=""){ echo $this->session->flashdata('message'); } ?></b></span>
			 
<div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."xlsdata/deletes";?>" method="post" enctype="multipart/form-data" id="form">
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
            <!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			
			
				 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">State </th>
				 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">City</th>
                 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Pincode</th>
				 
			    
          </tr>
            </tr>
          
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
                  if($result){
                          // for($i=0;$i<count($result);$i++){
                  foreach($result as $results)
                  {
                  
                  ?>
				  
          <tr class="odd">
            <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $results['id']; ?>" type="checkbox">
                </label>
              </div></td>
           
					  
                     <td class=""><?php echo $results['state'] ?></td>
					 <td class=""><?php echo $results['city'] ?></td>
                     <td class=""><?php echo $results['pincode'] ?></td>
                      
					 
                    <?php
					/*if($this->session->userdata('adminId') !='')
					{
					$uid = $this->session->userdata('adminId');
					$getuser['data'] = $this->footer->getuser($uid);
					$category = $getuser['data'][0]->ucategory;
					$usercategory = $this->footer->usercategory($category);
					$permission1=$usercategory[0]->editperm;
					$permission1 = explode(',',$permission1);
				?>
			<?php if(in_array('3',$permission1)){ */?>
			 
          </tr>		
          			
                    
          <?php
                  }
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No Data Found'; ?></td>
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
<?php include('include/footer.php');?>
</body>
</html>