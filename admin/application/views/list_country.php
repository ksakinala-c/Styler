<?php include('include/header.php');?>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/auto.css">
<script src="<?php echo $base_url_views; ?>js/auto.js"></script>
<script src="<?php echo $base_url_views; ?>js/jquery.ui.js"></script>
<script>
function deletecountry(){
	var checked = $("#form input:checked").length > 0;
    if (!checked)
	{
        alert("Please select at least one record to delete");
        return false;
    }
	else
	{
		alert(" Do you want to delete?");
	}
	 $('#form').submit(); 
    }
</script>
<script type="text/javascript">
	$(document).ready(function($){
		$('#reset').click(function(){
			var base_url = '<?php echo $base_url.'country/lists'; ?>';
			window.location = base_url;
		});
		
		$("#sbutton").click(function(){
			var cname = $("#cname").val();
			
			if(cname=='')
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
		   url:'<?php echo $base_url; ?>country/ajaxlist_country',
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
</script>
<div class="main-content theme">
  <ol class="breadcrumb bc-3">
    <li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
    <li class="active"><strong>Country</strong></li>
  </ol>
<? if(isset($_POST))
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
<a href="<?php echo $base_url;?>country/lists"></a>
<?php
}
?>
 <a class="btn btn-third add" href="javascript:void('0');" onclick="deletecountry();"><i class="entypo-plus"></i>Delete</a>
<? if(isset($_POST))
{
	if(count($result)==0)
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>country/add/"><i class="entypo-plus"></i>Add Country</a>
	<?php
	}
	else
	{
	?>
	<a class="btn btn-primary add" href="<?php echo $base_url;?>country/add"><i class="entypo-plus"></i>Add Country</a>
	<?php
	}
}
else
{
?>
<a class="btn btn-primary add" href="<?php echo $base_url;?>country/add"><i class="entypo-plus"></i>Add Country</a>
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
 <div class="col-xs-12 col-sm-12"><h6 class="main-title">List Country</h6></div>
    <div class="col-6 col-sm-12 col-lg-12 action">
      <div class="end">
        <form action="<?php echo $base_url."country/lists/?";?>" method="get" enctype="multipart/form-data" id="form1"  class="pro">
          <div class="form-group mock">
            <label class="col-sm-1 control-label lavel" for="inputEmail">Country :</label>
            <div class="col-lg-3">
            <input type="text" id="cname" name="cname" value="<?php echo $cname; ?>" class="form-control jobtext" />
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

  <div class="row">
  <div class="col-xs-12 col-sm-12">
  <div role="grid" class="dataTables_wrapper form-inline" id="table-2_wrapper">
    <form action="<?php echo $base_url."country/deletes";?>" method="post" enctype="multipart/form-data" id="form">
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
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Country</th>
			<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;">Code</th>
 			
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
                  <input name="selected[]" id="selected[]" value="<?php echo $result[$i]->cid; ?>" type="checkbox">
                </label>
              </div></td>
           <td class=""><?php echo $result[$i]->cname; ?></td>
		    <td class=""><?php echo $result[$i]->code; ?></td>
			
 			<td class="">
				<a class="btn btn-default btn-sm btn-icon icon-left" title="Edit" href="<?php echo $base_url."country/edit/"; ?><?php echo $result[$i]->cid; ?>">
					<i class="entypo-pencil"></i>
 				</a>
			</td>
          </tr>
          <?php
                  }
                  } else {
                  ?>
          <tr>
            <td class="left" colspan="4" align="center"><?php echo 'No Country Found'; ?></td>
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