<?php
class Product_attribute extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }

		$this->load->model('product_attribute_model');
	}

	function add()
	{
		$form_field = $data = array(
			'price' => '',
			'quanity' => '',
		);/*
		echo '<pre>';
		print_r($form_field);
		echo '</pre>';
		exit; */

		if($this->input->post('action') == 'add_product_attribute') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['price'] = "trim|required";
			$rules['quanity'] = "trim|required";
			$this->validation->set_rules($rules);
			$fields['price'] = "Price";
			$fields['quanity'] = "Quanity";
			
			$this->validation->set_fields($fields);
			
			if($response = $this->product_attribute_model->add($data))
			{
				
				$this->session->set_flashdata('L_strErrorMessage','Product Attribute Added Succcessfully!!!!');
							redirect($this->config->item('base_url').'product_attribute/lists');
				
			}
			else 
			{
				echo "<script>alert('Product Attribute is not successfull')</sctipt>";
				$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
				redirect($this->config->item('base_url'));
			}
		}
		 
		
		$this->load->view('add_product_attribute',$data);
	}


	

	function edit($id)
	{		if(is_numeric($id)){
			$result = $this->product_attribute_model->get_product_attribute($id);
			$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'price' =>  $result[0]->price,
					    'quanity' => $result[0]->quanity,
						);
					
			if($this->input->post('action') == 'edit_product_attribute') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
			$this->load->library('validation');
			$rules['price']       = "trim|required";
			$rules['quanity'] = "trim|required";
			
			
			$this->validation->set_rules($rules);
			$fields['price']       = "Price Name";
		    $fields['quanity'] = "Quanity";
		
			$this->validation->set_fields($fields);
			if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;

				} else {
					
						if($response = $this->product_attribute_model->edit($id, $form_field)) {
						
				
							$this->session->set_flashdata('L_strErrorMessage','Product Attribute Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'product_attribute/lists');
						} else {
							$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
						}
				}
			}
 
			$data['allproduct_attribute'] = $this->product_attribute_model->allproduct_attribute();
			$this->load->view('edit_product_attribute',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'product_attribute/lists');
		}
	}
function lists()
	{
		
       	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product_attribute/lists/';
		$config['per_page'] = '4';
		$config['first_url']='0';
		$data['price'] = $this->input->post('price');
		$per_page = '1';
		$perpage = '3';
		$return = $this->product_attribute_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('product_attribute', $data);
	}
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
			foreach($_POST['selected'] as $selCheck) {
				if($this->product_attribute_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Product Attribute Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'product_attribute/lists');
	}


function ajaxlist_product_attribute()
{		
		//echo 11;die;
		$blog = "";
		$result = $this->product_attribute_model->product_attribute_list();
		for($i=0;$i<count($result);$i++)
		{
			$product .= $result[$i]->price.",";
		}
		echo $product = substr($product, 0, -1);
}
}
?>