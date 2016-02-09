<?php
class Image extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }

		$this->load->model('image_model');
	}
	

		
	function add()
	{
		
		$L_strErrorMessage='';
		$form_field = $data = array(
			'imagename' => '',
		);

		if($this->input->post('action') == 'add_image') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['imagename'] = "trim|required";
			
			$this->validation->set_rules($rules);
			$fields['imagename'] = "imagename";
				
			
			
			$this->validation->set_fields($fields);
		/*
			if(!$this->product_model->is_product_already_exist_add($this->input->post('pname')))
			{*/

					if($response = $this->image_model->add($data))
					{
						$this->session->set_flashdata('L_strErrorMessage','Images Added Succcessfully!!!!');
									redirect($this->config->item('base_url').'image/lists');

						
					}
					else 
					{
						echo "<script>alert('Image is not successfull')</sctipt>";
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						redirect($this->config->item('base_url'));
					}
			/*}*/
		}
		 
			
		$this->load->view('add_image',$data);
	}


    function edit($id)
	{		if(is_numeric($id)){
			$result = $this->image_model->get_image($id);
			$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'imagename' =>  $result[0]->imagename,
					    );
					
			if($this->input->post('action') == 'edit_image') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['imagename']       = "trim|required";
			$this->validation->set_rules($rules);
			$fields['imagename']="imagename";
		     
		
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
			} else {
					if($response = $this->image_model->edit($id, $form_field)) {
					$this->session->set_flashdata('L_strErrorMessage','Image Product Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'image/lists');
						} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}
				}
			}
 			$data['allimage'] = $this->image_model->allimage();
			$this->load->view('edit_image',$data);
		} 	else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'image/lists');
		}
	}


	 
	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'image/lists/';
		$config['per_page'] = '4';
		$config['first_url']='0';
		$data['imagename'] = $this->input->post('imagename');
		$per_page = '1';
		$perpage = '3';
		$return = $this->image_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('image', $data);
	}
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->product_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Product Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'product/lists');
	}

	function ajaxlist_product()
	{
		//echo 11;exit;
		$news = "";
		$result = $this->product_model->product_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$news .= $result[$i]->title.",";
		}
		echo $news = substr($news, 0, -1);
	}
}
?>