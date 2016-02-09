<?php
class Subcategory extends CI_Controller {

	private $_data = array();

	function __construct() {

		parent::__construct();

		if($this->session->userdata('adminId') == ''){

			redirect($this->config->item('base_url'));

		}

		

		parse_str($_SERVER['QUERY_STRING'],$_GET);

		$this->load->model('subcategory_model');	

	}



	function add()

	{

		$form_field = $data = array(

			'L_strErrorMessage' => '',

		        'scname'      => '',
			    'catid'      => '',
				'image'      => '',
				'title'      => '',
				'description'      => '',
				'keyword'      => '',

		);



		if(!isPageRefresh() || $this->input->post('action') == 'add_subcategory') {

			foreach($form_field as $key => $value)	{	$data[$key]=$this->input->post($key);	}

			$this->load->library('validation');

			$rules['catid']       = "trim|required";

			$rules['scname']      = "trim|required";



			$this->validation->set_rules($rules);

			$fields['catid']       = "Category";

			$fields['scname']      = "Subcategory";



			$this->validation->set_fields($fields);



			if ($this->validation->run() == FALSE){

				$data['L_strErrorMessage'] = $this->validation->error_string;

			} else {
					if($_FILES['image']['name'] != ''){
						
							$tmp_name1 =  $_FILES['image']['tmp_name'];
					 		$rootpath1 =  $this->config->item('upload');
							$logoname = $_FILES['image']['name'];
							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
							
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."small/".$logoname; 
				
							$height=50;
							$width=50;
				
							$this->load->library('image_lib');
							// CONFIGURE IMAGE LIBRARY
							$config['image_library']    = 'gd2';
							$config['source_image']     = $tmp_path;
							$config['new_image']        = $image_thumb;
							$config['maintain_ratio']   = true;
							$config['height']           = $height;
							$config['width']            = $width;
				
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear();
							$tmp_path = $this->config->item('upload')."".$logoname;
							$image_thumb= $this->config->item('upload')."medium/".$logoname; 
							$height=283;
							$width=278;
				
							$this->load->library('image_lib');
							// CONFIGURE IMAGE LIBRARY
							$config['image_library']    = 'gd2';
							$config['source_image']     = $tmp_path;
							$config['new_image']        = $image_thumb;
							$config['maintain_ratio']   = true;
							$config['height']           = $height;
							$config['width']            = $width;
				
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear();
							 
							$data['image'] = $logoname;
						} else {
							$data['image'] = '';
						}
					//print_r($data);die();

					if(!$this->subcategory_model->is_subcategory_already_exist_add($this->input->post('scname')))

					{

						if($response = $this->subcategory_model->add($data))

						{

							$this->session->set_flashdata('L_strErrorMessage','Subcategory Added Succcessfully!!!!');

							redirect($this->config->item('base_url').'subcategory/lists');



						}

						else 

						{

							$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';

						}

					}	

					else

					{

						$data['L_strErrorMessage'] = 'Subcategory already exist!';

					}

			}

		}

		$data['allcategory'] = $this->subcategory_model->allcategory();

		$this->load->view('add_subcategory',$data);

		 

	}

	function lists()

	{	$this->load->library('pagination');

		$url_to_paging = $this->config->item('base_url');

		$config['base_url'] = $url_to_paging.'subcategory/lists/';

		$config['per_page'] = '10';

		$config['first_url']='0';

		$data['scname'] = $this->input->post('scname');

		$data['cname'] = $this->input->post('cname');

		$per_page = '1';

		$perpage = '3';

		$return = $this->subcategory_model->lists($config['per_page'],$this->uri->segment(3), $data);

		$data['result'] = $return['result'];

		$config['total_rows'] = $return['count'];

		$this->pagination->initialize($config);

		$this->load->view('list_subcategory', $data);

	}

	function edit($id)

	{

		



		if(is_numeric($id)) {

			$result = $this->subcategory_model->get($id);

					$form_field = $data = array(

						'L_strErrorMessage' => '',

						'id'	=> $result[0]->id,

						'scname' => $result[0]->scname,

						'catid' => $result[0]->catid,
						'image' => $result[0]->image,
						'title' => $result[0]->title,
						'description' => $result[0]->description,
						'keyword' => $result[0]->keyword,

					);



			if($this->input->post('action') == 'edit_subcategory') {

				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}

				//print_r($form_field);die;

				$this->load->library('validation');

				$rules['catid']       = "trim|required";

				$rules['scname']      = "trim|required";



				$this->validation->set_rules($rules);

				$fields['catid']       = "Category";

				$fields['scname']      = "Subcategory";



				$this->validation->set_fields($fields);



				if ($this->validation->run() == FALSE) {

					$data = $form_field;

					$data['L_strErrorMessage'] = $this->validation->error_string;

					$data['id'] = $id;

					$data['catid'] = $catid;



				} else {
					if($_FILES['image']['name'] != ''){

						

							$tmp_name1 =  $_FILES['image']['tmp_name'];

					 		$rootpath1 =  $this->config->item('upload');

							$logoname = $_FILES['image']['name'];

							move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );

							

							$tmp_path = $this->config->item('upload')."".$logoname;

							$image_thumb= $this->config->item('upload')."small/".$logoname; 

				

							$height=50;

							$width=50;

				

							$this->load->library('image_lib');



							// CONFIGURE IMAGE LIBRARY

							$config['image_library']    = 'gd2';

							$config['source_image']     = $tmp_path;

							$config['new_image']        = $image_thumb;

							$config['maintain_ratio']   = true;

							$config['height']           = $height;

							$config['width']            = $width;

				

							$this->image_lib->initialize($config);

							$this->image_lib->resize();

							$this->image_lib->clear();



							$tmp_path = $this->config->item('upload')."".$logoname;

							$image_thumb= $this->config->item('upload')."medium/".$logoname; 

							$height=50;

							$width=50;

				

							$this->load->library('image_lib');

							// CONFIGURE IMAGE LIBRARY

							$config['image_library']    = 'gd2';

							$config['source_image']     = $tmp_path;

							$config['new_image']        = $image_thumb;

							$config['maintain_ratio']   = true;

							$config['height']           = $height;

							$config['width']            = $width;

				

							$this->image_lib->initialize($config);

							$this->image_lib->resize();

							$this->image_lib->clear();

							 

							$form_field['image'] = $logoname;

						} else {

							$form_field['image'] = '';

						}


						 $stid=$form_field['catid'];

						if(!$this->subcategory_model->is_subcategory_already_exist($this->input->post('scname'),$this->input->post('catid'),$id))

					    {

									if($response = $this->subcategory_model->edit($id, $form_field)) {

										$this->session->set_flashdata('L_strErrorMessage','SubCategory Updated Succcessfully!!!!');

										redirect($this->config->item('base_url').'subcategory/lists');



									} else {

										$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';

									}

						}

						else

						{

							$data['L_strErrorMessage'] = 'Subcategory already exist!';

						

						}

				}

			}

 

			$data['allcategory'] = $this->subcategory_model->allcategory();

			$this->load->view('edit_subcategory',$data);



		} else {

			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');

			redirect($this->config->item('base_url').'subcategory/lists');

		}

	}




	function deletes()

	{

		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {

	

		foreach($_POST['selected'] as $selCheck) {

			   if($this->subcategory_model->deletes($selCheck)) {

					$this->session->set_flashdata('flashError','SubCategory Deleted Succcessfully!!!!');

				}  

				else 

				{

						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');

						break;

				}

		}

		}

		redirect($this->config->item('base_url').'subcategory/lists');

  

	}



	function ajaxlist_subcategory()

	{

		//echo 11;die;

		$subcategory = "";

		$result = $this->subcategory_model->subcategory_list();

		//print_r($result['result']);die;

		for($i=0;$i<count($result);$i++)

		{

			//echo $result[$i]->fname;	

			$subcategory .= $result[$i]->scname.",";

		}

		echo $subcategory = substr($subcategory, 0, -1);

	}



 

}