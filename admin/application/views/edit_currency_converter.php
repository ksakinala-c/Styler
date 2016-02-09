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
		<li class="active"><strong>Edit Currency Converter</strong></li>
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
				Edit Currency Converter
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      
                      <button class="btn btn-scoend" type="submit"  onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
			<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>currency/insider">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" id="action" VALUE="edit_insider" >
			<div class="form-group">
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Currrent ROC</b></label> 
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Stylior ROC</b></label> 
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>ROC Buffer</b></label> 
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Multiplier</b></label> 
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><b>Ceiling</b></label> 
			</div>
				<?php foreach($result as $re){ ?>  
                <div class="form-group">
					<label style="text-align:center" class="col-sm-2 control-label" for="inputEmail"><?php echo $re->currency_code;?>:<span style="color:#2F8228;"><b>
					<?php 
						$to = $re->currency_code;						
						$from = 'INR';					
						$amount = '1';
						$url  = "https://www.google.com/finance/converter?a=$amount&from=$to&to=$from";
						$data = file_get_contents($url);						
						preg_match("/<span class=bld>(.*)<\/span>/",$data, $converter);
						//print_r($converter);die;
						$converted = preg_replace("/[^0-9.]/", "", $converter[1]);
						
						if($re->currency_code == "INR"){
							echo '1.00';
						}else{
							echo $rate = (float) $converted;
						}
					?></b></span>
					</label>  
					
					
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->stylior_roc;?>" />
					</div>
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->roc_buffer;?>" />
					</div>
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->multiplier;?>" />
					</div>
					<div class="col-sm-2">
				 	  <input type="text" id="insider" name="<?php echo $re->currency_code;?>[]" class="form-control" value="<?php echo $re->ceiling;?>" />
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
