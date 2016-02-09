<?php include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
	$(document).ready(function($){
		$('#reset').click(function(){
			var base_url = '<?php echo $base_url.'users/list_user'; ?>';
			window.location = base_url;
		});
		
		$("#sbutton").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();
			var ucategory = $("#ucategory").val();
			
			if(name=='' && email=='' && ucategory=='')
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
			url:'<?php echo $base_url; ?>users/ajaxlist_users',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#name" ).autocomplete({
					source: c
				});
			}
		});
		});

		$(function() {
		$.ajax({
			url:'<?php echo $base_url; ?>email/ajaxlist_email',
			type:'POST',
			data:'',
			success:function(msg)
			{
				//alert(msg);
				var  c = msg.split(",");
				var availableTags = [msg];	
				$( "#email" ).autocomplete({
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
    <li class="active"><strong>Admin Users</strong></li>
  </ol>
  
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a  href="<?php echo $base_url;?>users/list_user<?php echo $_POST['name']; ?>"></a>
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
<a href="<?php echo $base_url;?>users/list_user"></a>
<?php
}
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
<?php if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>users/add/<?php echo $_POST['name']; ?>"><i class="entypo-plus"></i>Add Users</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>users/add"><i class="entypo-plus"></i>Add User</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>users/add"><i class="entypo-plus"></i>Add User</a>
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
  

 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List Users</h6></div>

    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."users/list_user";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">

          <div class="form-group mock">
            <label class="col-lg-1 control-label lavel" for="inputEmail">Name :</label>
            <div class="col-lg-2">
           <input type="text" id="name" name="name" value="<?php echo $name; ?>"  class="form-control jobtext"/>
            </div>
          
          <label class="col-lg-1 control-label lavel" for="inputEmail">Email :</label>
            <div class="col-lg-2"> 
			<input type="text" id="email" value="<?php echo $email; ?>"  name="email" class="form-control jobtext"/>
			</div>
			
			<label style="width:119px;" class="col-sm-1 control-label lavel" for="inputEmail">User Category :</label>
            <div class="col-lg-2"> 
						<select style="width:100%;" id="ucategory" name="ucategory" class="form-control" >
								<option value="">Select Category </option>
								<?php if($utype_list != '' && count($utype_list) > 0)
								{ foreach($utype_list as $pro) { ?>
										<option value="<?php echo $pro->id; ?>" <?php if($pro->id==$ucategory) { echo "Selected"; } ?>><?php echo $pro->cname; ?></option>
								<?php  } }	 ?>
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
    <form action="<?php echo $base_url."users/deletes";?>" method="post" enctype="multipart/form-data" id="form">
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
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Uesr Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Email</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Created By</th>	
			<!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Password</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Created Date</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Enabled</th>	
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
           <td class=" "><?php echo $results['name'] ?></td>
		   <td class=" "><?php echo $results['login'] ?></td>
			<td class=" "><?php echo $results['email'] ?></td>

			<td class=" ">
					<?php 
						echo $results['created_by'];
					?>
					
				
			</td>
			<td class=" ">
				<?php 
				 $adate=$results['created_date'];
				 $rr=date("d-m-Y",strtotime($adate)); 
				 echo $rr;
				?>
			
			</td>
			<td class=" ">

				<?php if($results['enabled']=='1')
				{ 
						echo "Active";
				}
				else
				{ 
						echo "Inactive";
				}?>
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
			<?php if(in_array('2',$permission1)){ ?>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."users/edit/"; ?><?php echo $results['id']; ?>">
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
            <td class="left" colspan="9" align="center"><?php echo 'No Users Found'; ?></td>
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