<?php
class Parts extends CI_Controller {

	private $_data = array();

	function __construct() {

		parent::__construct();

		if($this->session->userdata('adminId') == ''){

			redirect($this->config->item('base_url'));

		}

		

		parse_str($_SERVER['QUERY_STRING'],$_GET);

		$this->load->model('parts_model');	

	}



	function add($pid)

	{
		 
		
			$form_field = $data = array(
			'L_strErrorMessage' => '',

		        'subcatid'      => '',
			    'pname'      => '',
				'desc'      => '',
				'youtubeurl'      => '',

		);



		if(!isPageRefresh() || $this->input->post('action') == 'add_parts') {

			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}

			$this->load->library('validation');

			$rules['pname']       = "trim|required";
			
			$this->validation->set_rules($rules);

			$fields['pname']       = "Parts Name";

			$this->validation->set_fields($fields);

			if ($this->validation->run() == FALSE){

				$data['L_strErrorMessage'] = $this->validation->error_string;

			} else {
					 
					//print_r($data);die();

					if(!$this->parts_model->is_parts_already_exist_add($this->input->post('pname')))

					{
					 
						if($response = $this->parts_model->add($data,$pid))
					
						{

							$this->session->set_flashdata('L_strErrorMessage','Parts Added Succcessfully!!!!');

							redirect($this->config->item('base_url').'parts/lists/'.$pid.' ');



						}

						else 

						{

							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';

						}

					}	

					else

					{

						$data['L_strErrorMessage'] = 'Parts already exist!';

					}

			}

		}
		$this->load->view('add_parts',$data);
 }

	function lists($id)
	{
		 
 		$page= $this->input->get('per_page') ? $this->input->get('per_page') : 0;
		$this->load->library('session');
		$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');
		 
		$config['base_url'] = $url_to_paging.'parts/lists/?per_page='.$page.'&name=';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['partid'] = $id;
		$data['pname'] = $this->input->post('pname');
		$return = $this->parts_model->lists($config['per_page'],$page,$data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$config['page_query_string'] = TRUE;

		$this->pagination->initialize($config);
		//$data['allbiketype']=$this->bikeadd_model->allbike();
		$this->load->view('list_parts', $data);
		
	}


	function edit($id ,$partid)
	{		
			//echo $partid;die;
			
			if(is_numeric($id)){
			$result = $this->parts_model->get_parts($id);  
			 $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'subcatid' => $result[0]->subcatid,
						'pname' => $result[0]->pname,
						'desc' => $result[0]->desc,
						'youtubeurl' => $result[0]->youtubeurl,

						
						);  
				
			if($this->input->post('action') == 'edit_parts') {
			
				foreach($data as $key => $value) {  $data[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['pname'] = "trim|required";
			 
			//$rules['discount']       = "trim|required";
			
			$this->validation->set_rules($rules);
			$fields['pname']   = "Part Name";
		    
			//$fields['discount']       = "discount";
		     
		
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE) {
				 
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
			} else {
					/*if($response =) { */
					$subcatid = $this->input->post('subcatid');
					$this->parts_model->edit($id, $data);
					
					$this->session->set_flashdata('L_strErrorMessage','Parts Updated Succcessfully!!!!');
					redirect($this->config->item('base_url').'parts/lists/'.$subcatid);
						/*} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}*/
						
				}
			}
	 		$data['partid']= $partid;
 			$this->load->view('edit_parts',$data);
		} else {
		 
			redirect($this->config->item('base_url').'parts/lists/');
		}
	}


	function deletes($id)

	{

		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {

	

		foreach($_POST['selected'] as $selCheck) {

			   if($this->parts_model->deletes($selCheck)) {

					$this->session->set_flashdata('flashError','Part Deleted Succcessfully!!!!');

				}  

				else 

				{

						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');

						break;

				}

		}

		}

		redirect($this->config->item('base_url').'parts/lists/'.$id);

  

	}



	function ajaxlist_parts()

	{

		//echo 11;die;

		$parts = "";

		$result = $this->parts_model->parts_list();

		//print_r($result['result']);die;

		for($i=0;$i<count($result);$i++)

		{

			//echo $result[$i]->fname;	

			$parts .= $result[$i]->pname.",";

		}

		echo $parts = substr($parts, 0, -1);

	}
	function editimage($id)
	{
	 	
		$data['L_strErrorMessage'] = '';
 

		if ($this->input->post('action') == 'edit' && is_numeric($id)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."parts/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."parts/".$logoname;
				$image_thumb= $this->config->item('upload')."parts/medium/".$logoname; 
				
				$height=400;
				$width=400;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

				$tmp_path = $this->config->item('upload')."parts/".$logoname;
				$image_thumb= $this->config->item('upload')."parts/large/".$logoname; 
				
				$height=500;
				$width=500;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();


				$tmp_path = $this->config->item('upload')."parts/".$logoname;
				$image_thumb= $this->config->item('upload')."parts/small/".$logoname; 
				
				$height=100;
				$width=150;
				
				$this->load->library('image_lib');

				// CONFIGURE IMAGE LIBRARY
				$config['image_library']    = 'gd2';
				$config['source_image']     = $tmp_path;
				$config['new_image']        = $image_thumb;
				$config['maintain_ratio']   = false;
				$config['height']           = $height;
				$config['width']            = $width;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

			
				$newdata1 = array(
					'pid'   => $id,
					'image'	=> $logoname,
				);
 
				$id222 = $this->parts_model->add_product_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->parts_model->presult($id);
		$data['productimages'] = $this->parts_model->productimages($id); 
		$this->load->view('parteditimage',$data);
		
		 
	}
	function updateorder($val,$id,$pid){
		$return = $this->parts_model->updateorder($id,$val);
		$this->session->set_flashdata('item', 'Parts Image Updates Successfully');
		redirect($this->config->item('base_url').'parts/editimage/'.$pid);
		
	}
	function setbaseimg($id,$pid)
	{
 
		$return = $this->parts_model->setbaseimg($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'parts/editimage/'.$pid);
	}
	function removeimage($id,$pid)
	{
 
		$return = $this->parts_model->removeimage($id);
		$this->session->set_flashdata('item', 'Image deleted Successfully');
		redirect($this->config->item('base_url').'parts/editimage/'.$pid);
	}



 

}