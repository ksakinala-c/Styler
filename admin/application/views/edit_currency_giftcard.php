<?php include('include/header.php');?>	
<script>
	function validate()
	{
		$('#form').submit();
	}
</script>

<link rel="stylesheet" href="<?php base_url(); ?>style/format.css">
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Edit Currency Giftcard</strong></li>
  </ol>
  </div>
  </div>
  <?php if($this->session->flashdata('msg') !="") { ?><div class="success"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
	
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-9">
				Edit Currency Giftcard
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>giftcard/currency">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" id="action" VALUE="edit_insider" >
			<div class="form-group">
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Currrency</b></label> 					 
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Incremental Value</b></label>
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Default Value</b></label>
			</div>
				<?php foreach($result as $re){ ?>  
                <div class="form-group">	
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><?php echo $re->currency_code;?></label>
					
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->incremental_val;?>" />
					</div>
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->default_value;?>" />
					</div>
					<input type="hidden" id="currency_id" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->id;?>" />
				</div>
				<?php  }?>
			</div>
		 </form>
 </div>

 
<?php include('include/footer.php');?>
</body>
</html>
