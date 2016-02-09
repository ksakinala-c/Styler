<?php
	class Detailsd extends Controller
	{
 
	
	function details_temp()
	{
		$data = array(); 
		$data['L_strErrorMessage'] = "";
		$data['err_msg'] = ""; 
		$id1=$id;
		//echo $id1;die;
		//$data['prodetails'] = $this->home_model->productdetail($id1);
 		$data['productinfo'] = $this->home_model->productinfo($id1);
 		$data['grouppro'] = $this->home_model->getgroupro($id1);
		//print_r($data['grouppro']);die;
		$data['allcolour'] = $this->home_model->allcolour(); 
		$data['allfonts'] = $this->home_model->allfonts(); 
		$data['allplacement'] = $this->home_model->allplacement(); 
		$data['allcolour']=$this->home_model->allcolour($id1);
		$data['allnewfabric'] = $this->home_model->allnewfabric($id1);
		$data['alldesign'] = $this->home_model->alldesign($id1);
		if($this->session->userdata('userid') != ""){
			$data['saveditems'] = $this->home_model->getsaveditems(); 
		}
		//print_r($data['saveditems']);die;
		$data['title'] = $data['productinfo']->title;
		$data['keywords'] = $data['productinfo']->keyword;
		$data['description'] = $data['productinfo']->metadescription;
		$this->load->view('details2.php',$data);

	}
	
	
	
	
	}
	?>