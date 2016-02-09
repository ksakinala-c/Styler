<?php include('include/header.php');?>

<script src="<?php echo $front_base_url; ?>admin/ckeditor/ckeditor.js"></script>

<script>
	function validate(){
		
		$('#form').submit();
	}

</script>
<script>
function deleteparts(){
	
	var checked = $("#form1 input:checked").length > 0;
    //alert(checked);
	if (!checked){
        alert("Please select at least one record to delete");
        return false;
    }
	if(confirm('Do you want to Delete?')){ $('#form1').submit(); }
}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Message</strong></li>
		
  </ol>
  </div>
  </div>
 
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2"> Message </div>
				<?php if($this->session->flashdata('msg') !="") { ?><p class="danger" style="color:red;" align="center"><?php echo $this->session->flashdata('msg'); ?></p><?php } ?>
				<?php if($this->session->flashdata('new') !="") { ?><p class="success" align="center"><?php echo $this->session->flashdata('new'); ?></p><?php } ?>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
						
						<button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>topics/lists'">Cancel</button>
						<button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
						
					</div>									   
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" role="form" id="form"  method="post" action="<?php echo $base_url;?>topics/list_message/<?php echo $this->session->userdata('topicid'); ?>" enctype="multipart/form-data">
 			<div class="panel-body">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
			<INPUT TYPE="hidden" NAME="action" VALUE="insertmessage">
			<INPUT TYPE="hidden" NAME="userid" VALUE="<?php if($topicmessagelist) { echo $topicmessagelist[0]->userid; } ?>">
			
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputEmail">Message :</label>
					<div class="col-sm-5">
						<textarea id="adminmessage" name="adminmessage" class="form-control" value=""></textarea>
					</div>
				</div>
			</form>
 			</div>
			
 		</div>
		<a onclick="deleteparts();" href="javascript:void('0');" class="btn btn-third add"><i class="entypo-plus"></i>Delete</a>
		<form action="<?php echo $base_url."topics/mdeletes/".$this->uri->segment(3)."";?>" method="post" enctype="multipart/form-data" id="form1"  class="pro"  autocomplete="on">
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
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;"> Added Date </th>
				<th class="sorting" role="columnheader" aria-controls="table-2" style="width: auto;"> message</th>
			</tr>
        </thead>
		
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php
				if($topicmessagelist){
					for($i=0;$i<count($topicmessagelist);$i++) { ?>
			<tr class="odd">
             <td class="  sorting_1"><div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper">
                  <input name="selected[]" id="selected[]" value="<?php echo $topicmessagelist[$i]->id; ?>" type="checkbox">
                </label>
              </div></td>
			<td class=""><?php echo $topicmessagelist[$i]->addeddate; ?></td>
 			<td class=""><?php echo $topicmessagelist[$i]->message; ?></td>
		
			</td>
			</tr>
          <?php }  } else { ?>
          <tr>
            <td class="left" colspan="10" align="center"><?php echo 'No Message Found'; ?></td>
          </tr>
          <?php } ?>
        </tbody>
		
      </table>
		</form>
</div>
 
 </div>
   <script>
CKEDITOR.replace('adminmessage',
	{
			filebrowserBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo $http_host; ?>ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<?php include('include/footer.php');?>
</body>
</html>
