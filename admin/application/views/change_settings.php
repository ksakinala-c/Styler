<?php include('include/header.php');?>
<script type="text/javascript" src="<?php echo $base_url_views; ?>js/tiny_mce/tinymce.min.js"></script>
<style>
legend {
    font-size: 15px;
}
.form-horizontal .control-label {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    text-align: right;
}
</style>
<script>
$(document).ready(function(){





$(".save-form").on("click",function(){

$('#form').submit();

})

})

</script>
<div class="main-content">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Change Home page Content</strong></li>
  </ol>
  <?php

  if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>

  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-3">
						Change Home page Content
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>hmpage/settings'">Cancel</button>
                      <button class="btn btn-scoend save-form" type="submit">Save</button>
                      </div>
 				</div>
 			</div>
 			
				<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>hmpage/settings" enctype="multipart/form-data">
						<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
				<div class="panel-body">
					<fieldset>
						<legend>
							Banner Content
						<legend>
						<div class="form-group">
					    <label class="col-sm-2 control-label" for="content_title">Title:</label>
					    <div class="col-sm-5">
					      <input type="text" id="content_title" name="content_title" class="form-control" value="<?php echo$content["content_title"];  ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="content_header">Header:</label>
					    <div class="col-sm-5">
					      <input type="text" id="content_header" name="content_header" value="<?php echo$content["content_header"];  ?>" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="content_text">Content:</label>
					    <div class="col-sm-5">
					      <input type="text" id="content_text" name="content_text" value="<?php echo$content["content_text"];  ?>" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="content_link_label">Link label:</label>
					    <div class="col-sm-5">
					      <input type="text" id="content_link_label" name="content_link_label" value="<?php echo$content["content_link_label"];  ?>" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="content_link_url">Url:</label>
					    <div class="col-sm-5">
					      <input type="text" id="content_link_url" name="content_link_url" value="<?php echo$content["content_link_url"];  ?>" class="form-control">
					    </div>
					  </div>
					</fieldset>	
					<fieldset>
					
						<?php
						
						
						$cate_list = unserialize($content['category']);
						foreach($cate_list  as $i=>$category)
						{
						
						?>
							<legend>
								Category <?php echo $i+1; ?>
							<legend>							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="category[<?php echo $i; ?>][cate_title]">Name:</label>
								<div class="col-sm-5">
								  <input type="text" id="cate_title" name="category[<?php echo $i; ?>][cate_title]" class="form-control" value="<?php echo $category["cate_title"];  ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="category[<?php echo $i; ?>][cate_desc]">Description:</label>
								<div class="col-sm-5">
								  <input type="text" id="cate_desc" name="category[<?php echo $i; ?>][cate_desc]" value="<?php echo $category["cate_desc"];  ?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="category[<?php echo $i; ?>][cate_img]">Image:</label>
								<div class="col-sm-5">
								  <input type="file" id="content_header" name="category[<?php echo $i; ?>][cate_img]" class="form-control">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$category["cate_prev_img"];  ?>" width="250" />
								    <input type="hidden" id="content_header" name="category[<?php echo $i; ?>][cate_prev_img]" class="form-control" value="<?php echo $category["cate_prev_img"];  ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="category[<?php echo $i; ?>][cate_link_label]">Link Label:</label>
								<div class="col-sm-5">
								  <input type="text" id="cate_link_label" name="category[<?php echo $i; ?>][cate_link_label]" value="<?php echo $category["cate_link_label"];  ?>" class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="category[<?php echo $i; ?>][cate_link]">Link:</label>
								<div class="col-sm-5">
								  <input type="text" id="cate_link" name="category[<?php echo $i; ?>][cate_link]" value="<?php echo $category["cate_link"];  ?>" class="form-control">
								</div>
							</div>
							
						<?php
						}
						?>
						
						
						
					</fieldset>
					<fieldset>						
					<legend>
						Appointment Block
					</legend>
					<?php $appointment_list = unserialize($content['appointment']);	?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="appointment[image_file]">Background Image:</label>
								<div class="col-sm-5">
								  <input type="file" id="appointment_image_file" name="appointment[image_file]" class="form-control">
								  <input type="hidden"  name="appointment[imagefile]" class="form-control" value="<?php echo $appointment_list['imagefile'];  ?>">
								   <img src="<?php echo $front_base_url."upload/hm_category_images/".$appointment_list['imagefile'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="appointment[content]">content:</label>
								<div class="col-sm-8">
								  <textarea  id="appointment_content" name="appointment[content]" class="form-control"> 
								  <?php echo $appointment_list['content']; ?>
								  </textarea>
								</div>
							</div>
					</fieldset>	
					<fieldset>						
					<legend>
						How Stylior works
					</legend>
					<?php $block3_list = unserialize($content['block3']);				?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[header]">Header:</label>
								<div class="col-sm-5">
								  <input type="text" id="block3_header" name="block3[header]" value="<?php echo $block3_list["header"];  ?>" class="form-control">
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[content]">content:</label>
								<div class="col-sm-5">
								  <input  id="block3_content" name="block3[content]" class="form-control" value="<?php echo $block3_list["content"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image1]">Image 1:</label>
								<div class="col-sm-5">
								  <input type="file" id="block3_image1" name="block3[image1]" class="form-control">
								  <input type="hidden"  name="block3[image1]" class="form-control" value="<?php echo $block3_list['image1'];  ?>">
								   <img src="<?php echo $front_base_url."upload/hm_category_images/".$block3_list['image1'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[link1]">Link 1:</label>
								<div class="col-sm-5">
								  <input  id="block3_link1" name="block3[link1]" class="form-control" value="<?php echo $block3_list["link1"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image1_content]">Image1 description:</label>
								<div class="col-sm-5">
								  <input  id="block3_image1_content" name="block3[image1_content]" class="form-control" value="<?php echo $block3_list["image1_content"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image2]">Image 2:</label>
								<div class="col-sm-5">
								  <input type="file" id="appointment_image_file" name="block3[image2]" class="form-control">
								  <input type="hidden"  name="block3[image2]" class="form-control" value="<?php echo $block3_list['image2'];  ?>">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$block3_list['image2']?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[link2]">Link 2:</label>
								<div class="col-sm-5">
								  <input  id="block3_link2" name="block3[link2]" class="form-control" value="<?php echo $block3_list["link2"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image2_content]">Image2 description:</label>
								<div class="col-sm-5">
								  <input  id="block3_image2_content" name="block3[image2_content]" class="form-control" value="<?php echo $block3_list["image2_content"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image3]">Image 3:</label>
								<div class="col-sm-5">
								  <input type="file" id="appointment_image_file" name="block3[image3]" class="form-control">
								  <input type="hidden"  name="block3[image3]" class="form-control" value="<?php echo $block3_list['image3'];  ?>">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$block3_list['image3'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[link3]">Link 3:</label>
								<div class="col-sm-5">
								  <input  id="block3_link3" name="block3[link3]" class="form-control" value="<?php echo $block3_list["link3"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="block3[image3_content]">Image3 description:</label>
								<div class="col-sm-5">
								  <input  id="block3_image3_content" name="block3[image3_content]" class="form-control" value="<?php echo $block3_list["image3_content"];  ?>"/> 
								</div>
							</div>
					</fieldset>	
					<fieldset>
					<legend>
						OUR ONLINE PROCESS:
					</legend>
					<?php $online_process = unserialize($content['online_process']);				?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process[header]">Main Header:</label>
								<div class="col-sm-5">
								  <input  id="online_process_header" name="online_process[header]" class="form-control" value="<?php echo $online_process["header"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process[header_content]">Header Content:</label>
								<div class="col-sm-5">
								  <input  id="online_process_header_content" name="online_process[header_content]" class="form-control" value="<?php echo $online_process["header_content"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process[header_desc]">Header Description:</label>
								<div class="col-sm-8">
									<textarea  id="online_process_header_desc" name="online_process[header_desc]" class="form-control"> 
										<?php echo $online_process["header_desc"];  ?>
									</textarea>
								
								</div>
							</div>
							
							
							
						<?php $online_process_right = unserialize($content['online_process_right']);	

//echo "<pre>";
								//print_r($online_process_right);die;
						?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][bg]">Background Image1</label>
								<div class="col-sm-5">
								  <input type="file" id="online_process_right_file1" name="online_process_right[block1][bg]" class="form-control">
								  <input type="hidden"  name="online_process_right[block1][bg]" class="form-control" value="<?php echo $online_process_right["block1"]['bg'];  ?>">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$online_process_right["block1"]['bg'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][intro]">Block1 Introduction:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_intro" name="online_process_right[block1][intro]" class="form-control" value="<?php echo $online_process_right["block1"]["intro"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][heading]">Block1 
								Heading:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_heading" name="online_process_right[block1][heading]" class="form-control" value="<?php echo $online_process_right["block1"]["heading"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][content]">Block1 
								Content:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block1][content]" class="form-control" value="<?php echo $online_process_right["block1"]["content"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][btn_label]">Block1 
								Button label:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block1][btn_label]" class="form-control" value="<?php echo $online_process_right["block1"]["btn_label"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block1][btn_link]">Block1 
								Button link:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_btn_link" name="online_process_right[block1][btn_link]" class="form-control" value="<?php echo $online_process_right["block1"]["btn_link"];  ?>"/> 
								</div>
							</div>
							
							
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][bg]">Background Image2</label>
								<div class="col-sm-5">
								  <input type="file" id="online_process_right_file1" name="online_process_right[block2][bg]" class="form-control">
								  <input type="hidden"  name="online_process_right[block2][bg]" class="form-control" value="<?php echo $online_process_right["block2"]['bg'];  ?>">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$online_process_right["block2"]['bg'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][intro]">Block2 Introduction:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_intro" name="online_process_right[block2][intro]" class="form-control" value="<?php echo $online_process_right["block2"]["intro"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][heading]">Block2 
								Heading:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_heading" name="online_process_right[block2][heading]" class="form-control" value="<?php echo $online_process_right["block2"]["heading"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][content]">Block2 
								Content:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block2][content]" class="form-control" value="<?php echo $online_process_right["block2"]["content"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][btn_label]">Block2 
								Button label:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block2][btn_label]" class="form-control" value="<?php echo $online_process_right["block2"]["btn_label"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block2][btn_link]">Block2 
								Button link:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_btn_link" name="online_process_right[block2][btn_link]" class="form-control" value="<?php echo $online_process_right["block2"]["btn_link"];  ?>"/> 
								</div>
							</div>
							
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][bg]">Background Image3</label>
								<div class="col-sm-5">
								  <input type="file" id="online_process_right_file1" name="online_process_right[block3][bg]" class="form-control">
								  <input type="hidden"  name="online_process_right[block3][bg]" class="form-control" value="<?php echo $online_process_right["block3"]['bg'];  ?>">
								  <img src="<?php echo $front_base_url."upload/hm_category_images/".$online_process_right["block3"]['bg'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][intro]">Block3 Introduction:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_intro" name="online_process_right[block3][intro]" class="form-control" value="<?php echo $online_process_right["block3"]["intro"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][heading]">Block3 
								Heading:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_heading" name="online_process_right[block3][heading]" class="form-control" value="<?php echo $online_process_right["block3"]["heading"];  ?>"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][content]">Block3 
								Content:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block3][content]" class="form-control" value="<?php echo $online_process_right["block3"]["content"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][btn_label]">Block3 
								Button label:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_content" name="online_process_right[block3][btn_label]" class="form-control" value="<?php echo $online_process_right["block3"]["btn_label"];  ?>"/> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="online_process_right[block3][btn_link]">Block3 
								Button link:</label>
								<div class="col-sm-5">
								  <input  id="online_process_right_header1_btn_link" name="online_process_right[block3][btn_link]" class="form-control" value="<?php echo $online_process_right["block3"]["btn_link"];  ?>"/> 
								</div>
							</div>
					</fieldset>
					
					
					<fieldset>						
					<legend>
						News Block
					</legend>
					<?php $news_block = unserialize($content['news_block']);				?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="news_block[header]">Header:</label>
								<div class="col-sm-5">
								  <input type="text" id="news_block_header" name="news_block[header]" value="<?php echo $news_block["header"];  ?>" class="form-control">
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="news_block[content]">content:</label>
								<div class="col-sm-5">
								  <input  id="news_block_content" name="news_block[content]" class="form-control" value="<?php echo $news_block["content"];  ?>"/> 
								</div>
							</div>
							<?php 
							$block_index=count($news_block["image"]);
							
							?>
							<legend>
								News <?php echo ($block_index+1).":"; ?>
							</legend>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="news_block[image][<?php echo $block_index;  ?>]">Image:</label>
								<div class="col-sm-5">
								  <input type="file" id="block3_image1" name="news_block[image][<?php echo $block_index;  ?>]" class="form-control">
								  <input type="hidden"  name="news_block[image][<?php echo $block_index;  ?>]" class="form-control" >								
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="news_block[image_content][<?php echo $block_index;  ?>]">Description:</label>
								<div class="col-sm-5">
								  <input  id="news_block" name="news_block[image_content][<?php echo $block_index;  ?>]" class="form-control" value=""/> 
								</div>
							</div>
							
							
							<?php 
							
							foreach($news_block["image"] as $key=>$image)
							{
							?>
							<div class="news_block<?php echo $key; ?>"> 
								<legend>
									News <?php echo ($key+1).":"; ?>
								</legend>								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="news_block[image][ <?php echo $key; ?>]">Image:</label>
									<a onclick="if(confirm('Do you want to Delete?')){ $('.news_block<?php echo $key; ?>').remove() }" href="javascript:;" class="btn btn-third add"><i class="entypo-cancel-circled"></i></a>
									<div class="col-sm-5">
									  <input type="file" id="block3_image1" name="news_block[image][<?php echo $key; ?>]" class="form-control">
									  <input type="hidden"  name="news_block[image][<?php echo $key; ?>]" class="form-control" value="<?php echo $news_block['image'][$key];  ?>">
									   <img src="<?php echo $front_base_url."upload/hm_category_images/".$news_block['image'][$key];  ?>" width="100" height="100" />
									  
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="news_block[image_content][ <?php echo $key; ?>]">Description:</label>
									<div class="col-sm-5">
									  <input  id="news_block" name="news_block[image_content][<?php echo $key; ?>]" class="form-control" value="<?php echo $news_block["image_content"][$key];  ?>"/> 
									</div>
								</div>
								</div>
						<?php
						
							}
						?>
							
							
					</fieldset>	
					<fieldset>						
					<legend>
						Blog Block
					</legend>
					<?php $blog_list = unserialize($content['blog_list']);	?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="blog_list[image_file]">Background Image:</label>
								<div class="col-sm-5">
								  <input type="file" id="blog_image_file" name="blog_list[image_file]" class="form-control">
								  <input type="hidden"  name="blog_list[imagefile]" class="form-control" value="<?php echo $blog_list['imagefile'];  ?>">
								   <img src="<?php echo $front_base_url."upload/hm_category_images/".$blog_list['imagefile'];  ?>" width="250" height="250" />
								  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="blog_list[content]">content:</label>
								<div class="col-sm-8">
								  <textarea  id="blog_image_content" name="blog_list[content]" class="form-control"> 
								  <?php echo $blog_list['content']; ?>
								  </textarea>
								</div>
							</div>
					</fieldset>	
					
					
 				</form>
 		 
 	</div>
</div>
 
 </div>


 <script>


$(document).ready(function(){
tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 
 
 });
 </script>

<?php include('include/footer.php');?>
</body>
</html>
