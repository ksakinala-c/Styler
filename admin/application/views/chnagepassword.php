<?php include('include/header.php');?>
<script>
	$(document).ready(function(){
		$('#reset').click(function(){
			var base_url = '<?php echo $base_url.'employee/lists'; ?>';
			window.location = base_url;
		});
		
		$("#sbutton").click(function(){
			var cname = $("#cname").val();
			var email = $("#email").val();
			var cid = $("#cid").val();
			var sid = $("#sid").val();
			var city_id= $("#city_id").val();
			
			if(cname=='' && email=='' && cid=='' && sid=='' && city_id=='')
			{
				alert("Please Enter atleast one search condition.");
				return false;
			}

			else
			{
				return true;
			}
		});
	});
	function get_city(sid)
	{
	    //alert(sid);                                                                   
		//country id
		var url = '<?php echo $base_url ?>/employee/show_city/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'sid='+sid,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('prod2').innerHTML = msg ;
		}
		});
	}
		
		function get_state(cid)
	{
	   //alert(cid);                                                                                                                                                                                      
		//country id
		var url = '<?php echo $base_url ?>/employee/show_state/';
		//window.location = url;
		$.ajax({
		url:url,
		type:'post',
		data:'cid='+cid,
		success:function(msg)
		{
			//alert(msg);
			document.getElementById('prod1').innerHTML = msg ;
		}
		});
	}
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
<div class="main-content">
<ol class="breadcrumb bc-3">
	<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
	<li class="active"><strong>Manage Employer</strong></li>
</ol>
<? if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a  href="<?php echo $base_url;?>employee/lists<?php echo $_POST['cname']; ?>"></a>
	<?php
	}
	else
	{
	?>
	<a  href="<?php echo $base_url;?>employee/lists<?php echo $_POST['email'];?>"></a>
	<?php
	}
}
else
{
?>
<a href="<?php echo $base_url;?>employee/lists"></a>
<?php
}
?>
<? if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>employee/add/<?php echo $_POST['cname']; ?>"><i class="entypo-plus"></i>Add Employer</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>employee/add"><i class="entypo-plus"></i>Add Employer</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>employee/add"><i class="entypo-plus"></i>Add Employer</a>
<?php
}
?>
<a class="btn btn-third add" href="javascript:void('0');" onclick="deletes();"><i class="entypo-plus"></i>Delete</a>
          <div class="checker" id="uniform-titleCheck"><span><input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;"></span></div>
          </span>
          <h6>List Employer</h6>
		  
        </div>
<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<div class="col-6 col-sm-12 col-lg-12 action">
<div class="end">
<form action="<?php echo $base_url."employee/lists";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro">
<div class="form-group mock">
		<label class="col-sm-3 control-label lavel" for="inputEmail">Title:</label>
		<div class="col-sm-8"><input type="text" id="cname" name="cname" class="form-control"/>
		</div>
</div>
<div class="form-group mock">
		<label class="col-sm-3 control-label lavel" for="inputEmail">Email:</label>
		<div class="col-sm-8"><input type="text" id="email" name="email" class="form-control"/>
		</div>
</div>
<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Select Country:</label>
						<div class="form-group mock">	
					    <div class="col-sm-5">
					      <select name='cid' id="cid" Onchange="get_state(this.value);">
				<option value=''>Select Country</option>
				<?php for($i=0;$i<count($country_list);$i++)
				{
				?>
				<option value='<?php echo $country_list[$i]->cid; ?>'>
				<?php echo $country_list[$i]->cname; ?>
				</option>
				<?php
				}
				?>
				</select>
				</div>
				</div>
 				</div>
				
				<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Select State:</label>
						<div class="form-group mock">	
					    <div class="col-sm-5">
						<span id='prod1'>
					      <select name='sid' id="sid" Onchange="get_city(this.value);">
				<option value=''>Select State</option>
				<?php for($i=0;$i<count($state_list);$i++)
				{
				?>
				<option value='<?php echo $state_list[$i]->sid; ?>'>
				<?php echo $state_list[$i]->sname; ?>
				</option>
				<?php
				}
				?>
				</select>
				</span>
				</div>
				</div>
 				</div>
				
				<div class="form-group">
					    <label class="col-sm-2 control-label" for="inputEmail">Select City:</label>
						<div class="form-group mock">	
					    <div class="col-sm-5">
						<span id='prod2'>
					      <select name='city_id' id="city_id">
				<option value=''>Select City</option>
				<?php for($i=0;$i<count($city_list);$i++)
				{
				?>
				<option value='<?php echo $city_list[$i]->city_id; ?>'>
				<?php echo $city_list[$i]->city_name; ?>
				</option>
				<?php
				}
				?>
				</select>
				</span>
				</div>
				</div>
 				</div>
<div class="form-group mock">
<label class="col-sm-3 control-label lavel" for="inputEmail"></label>
<div class="col-sm-8">
<div class="set">
	<input type="submit" value="Search" id="sbutton" name="sbutton" style="background-image:none;" class="btn btn-default btn-four" />
	<input type="button" value="Reset" id="reset" style="background-image:none;" class="btn btn-scoend btn-four" />
</div>
</div>
</div>	
</form>
</div>
</div>	
<?php
if($this->pagination->create_links()!='')
{
?>		
<div class="pagination">
<?php echo $this->pagination->create_links(); ?>
</div>
<?php
}
?>
<?php if($this->session->flashdata('L_strErrorMessage')) { ?><div class="success"><?php echo $this->session->flashdata('L_strErrorMessage'); ?></div><?php } ?>

<div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
<form action="<?php echo $base_url."employee/deletes";?>" method="post" enctype="multipart/form-data" id="form">
      <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
 
<table id="table-2" class="table table-bordered table-striped datatable dataTable" aria-describedby="table-2_info" style="float:left;">
	<thead>
		<tr role="row" class="bg">
			<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 25px;" aria-label="">
			<div class="checkbox checkbox-replace neon-cb-replacement">
				<label class="cb-wrapper"><input onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" type="checkbox" >
				</label>
			</div>
			</th>
			<!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Id</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Name</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Email</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Password</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Country</th>	
			<!--<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Password</th>-->
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">State</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">City</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Location</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">address</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">ContactPerson</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Mobile</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Phone</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Details</th>	
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Action</th></tr>
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
			<td class="  sorting_1">
				<div class="checkbox checkbox-replace neon-cb-replacement">
					<label class="cb-wrapper"><input name="selected[]" id="selected[]" value="<?php echo $results['id']; ?>" type="checkbox">
					</label>
				</div>
			</td>
			<!--<td class=" "><?php echo $results['id']; ?></td>-->
			<td class=" "><?php echo $results['cname'] ?></td>
			<td class=" "><?php echo $results['email'] ?></td>
			<td class=" "><?php echo $results['password'] ?></td>
			<td class="">
				<?php
					$sql =mysql_query("select * from country where cid=".$results['cid']);
					$res=mysql_fetch_array($sql);
					echo $res['cname'];
				?>
			</td>
			<td class="">
				<?php
					$sql =mysql_query("select * from state where sid=".$results['sid']);
					$res=mysql_fetch_array($sql);
					echo $res['sname'];
				?>
			</td>
			<td class="">
				<?php
					$sql =mysql_query("select * from city where city_id=".$results['city_id']);
					$res=mysql_fetch_array($sql);
					echo $res['city_name'];
				?>
			</td>
			<td class=" "><?php echo $results['location'] ?></td>
			<td class=" "><?php echo $results['address'] ?></td>
			<td class=" "><?php echo $results['contactperson'] ?></td>
			<td class=" "><?php echo $results['mobile'] ?></td>
			<td class=" "><?php echo $results['phone'] ?></td>
			<td class=" "><?php echo $results['details'] ?></td>
			<td class=" ">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."employee/edit/"; ?><?php echo $results['id']; ?>">
					<i class="entypo-pencil"></i>
 				</a>
		
			<!--<td class=""><?php echo md5($results['password']) ?></td>-->
		</tr>
		<?php
                }
            } else {
            ?>
            <tr>
                <td class="left" colspan="4" align="center"><?php echo 'No Users Found'; ?></td>
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