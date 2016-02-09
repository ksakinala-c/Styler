<?php   include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
	$(document).ready(function($) {
	
		$('#reset').click(function(){
				var base_url = '<?php echo $base_url.'product/lists'; ?>';
				window.location = base_url;
		});
			$("#sbutton").click(function(){
				var name = $("#proname").val();
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
			url:'<?php echo $base_url; ?>product/ajaxlist_product',
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
	
</script>


<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Product</strong></li>
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
<a href="<?php echo $base_url;?>Product/lists"></a>
<?php
}
?>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>product/add/"><i class="entypo-plus"></i>Add product</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>product/add"><i class="entypo-plus"></i>Add product</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>product/add"><i class="entypo-plus"></i>Add product</a>
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
  

 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List product</h6></div>

    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."product/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">
          
          
          <div class="form-group mock">
          	<label style="width:117px;" class="col-sm-1 control-label lavel" for="inputEmail">Product Name :</label>
            <div class="col-lg-2"> 
				<input type="text" id="proname" value="<?php echo $pname; ?>" name="pname" class="form-control jobtext"/>
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
			
			<label style="width:112px;" class="col-sm-1 control-label lavel" for="inputEmail">Sub Category :</label>
            <div class="col-lg-2"> 
						<select style="width:100%;" id="subcatid" name="subcatid" class="form-control" >
								<option value="">Select Sub Category </option>
								<?php if($subcategory != '' && count($subcategory) > 0)
								{ foreach($subcategory as $pros) { ?>
										<option value="<?php echo $pros->id; ?>" <?php if($pros->id==$subcatid) { echo "Selected"; } ?>><?php echo $pros->scname; ?></option>
								<?php  } }	 ?>
						   </select>
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
    <form action="<?php echo $base_url."product/deletes";?>" method="post" enctype="multipart/form-data" id="form">
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
			
			
				 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Category</th>
				 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Sub Category</th>
                 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Product Name</th>
				 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Price</th>
                 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Item Code</th>
                 <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Discount</th>
			     <th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th>
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
            <!--<td class=" "><?php echo $results['id']; ?></td>-->  
					 <td class=""><?php echo $this->product_model->catname($results['categoryid']) ; ?></td>
                     <td class=""><?php 
					 
					 echo $this->product_model->subcatname($results['subcatid']) ; ?></td>
                     <td class=""><?php echo $results['pname'] ?></td>
					 <td class=""><?php echo $results['price'] ?></td>
                     <td class=""><?php echo $results['itemcode'] ?></td>
                     <td class=""><?php echo $results['discount'] ?></td>
					 
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
			<?php if(in_array('3',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."product/edit/"; ?><?php echo $results['id']; ?>">
					<i class="entypo-pencil"></i>
 				</a>
			<?php } else { ?>
			<td class=" ">
			<a class="" >
					Access Denied.</i>
 				</a>
					<?php }} ?>
					 
					 
                     &nbsp; <a class="btn btn-default btn-sm btn-icon icon-left" title="Add Image" href="<?php echo $base_url."product/editimage/".$results['id']; ?>" >
                     <i>Add Image</i>
                     </a> 
					  <a class="btn btn-default btn-sm btn-icon icon-left" title="Add Image" href="<?php echo $base_url."product/groupproduct/".$results['id']; ?>" >
                     <i>Group Product</i>
                     </a>
					 <!--a class="btn btn-default btn-sm btn-icon icon-left" title="Add Image" href="<?php echo $base_url."product/inventory/".$results['id']; ?>" >
                     <i>Add Stock</i>
                     </a-->
				 
					 </td>
          </tr>		
          			
                    
          <?php
                  }
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No Product Found'; ?></td>
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