<?php
 	
	class Return_product extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }
		$this->load->library('pagination');
		$this->load->model('returnproduct_model');
 
	}
	
	
	function returnproducts($id)
	{
		//echo $id;die;
		if(is_numeric($id)) {
			$result = $this->returnproduct_model->get($id);
			//echo "<pre>";print_r($result);die;
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'order_id'	=> $result[0]->order_id,
						'user_id' => $result[0]->user_id,
						'cdate' => $result[0]->cdate,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'phone' => $result[0]->phone,
						'user_info_id' => $result[0]->user_info_id,
						'order_item_name' => $result[0]->order_item_name,
						'product_quantity' => $result[0]->product_quantity,
						'product_id' => $result[0]->product_id,
					);
			if($this->input->post('action') == 'edit_category') {
				foreach($form_field as $key => $value) {  $data[$key]=$this->input->post($key);	}
				
				$form_field['opened'] = $this->input->post('opened');
				$form_field['comment'] = $this->input->post('comment');
				$form_field['returnaction'] = $this->input->post('returnaction');
				$form_field['returnstatus'] = $this->input->post('returnstatus');
				$form_field['returnreason'] = $this->input->post('returnreason');
				
				if($response = $this->returnproduct_model->add($id, $form_field)) {
					$this->returnproduct_model->updateorderstatus($form_field['order_id']);
					$this->session->set_flashdata('L_strErrorMessage','Product Return Successfully!!!!');
					redirect($this->config->item('base_url').'product/order_detail/'.$id);
				} 
				else 
				{
					$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
				} 
			}
			//$data['umdata'] = $this->returnproduct_model->getusermessage($result[0]->user_id);
			//print_r($data['umdata']);die;
			$data['allreturnreason'] = $this->returnproduct_model->returnreason();
			$data['allreturnaction'] = $this->returnproduct_model->returnaction();
			$data['allreturnstatus'] = $this->returnproduct_model->returnstatus();
			$this->load->view('returnproduct',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'category/lists');
		}
	}
		 
	function lists()
	{
		$this->load->model('returnproduct_model');
		$this->load->library();
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'return_product/lists/';
		$config['per_page'] = '15';
		$config['first_url']='0';
		$data['email'] = $this->input->post('email');
		 
		$per_page = '1';
		$perpage = '3';
		$return = $this->returnproduct_model->lists($config['per_page'],$this->uri->segment(3), $data);
		//print_r($return);die;
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		//print_r($config['total_rows']);die;
		$this->pagination->initialize($config);
		 $this->load->library('pagination');
		$this->load->view('list_returnproduct', $data);
	}
	
	function add_message($id)
	{
	if($this->input->post('action')=="insertmessage") {
			$data['adminmessage']=$this->input->post('adminmessage');
			$data['userid']=$this->input->post('userid');
			if($response = $this->returnproduct_model->addmessage($data,$id)) {
			
				$this->session->set_flashdata('msg','Message Added Successfully!!!');
				redirect($this->config->item('base_url').'return_product/editreturnproducts/'.$id);
			}
		}
	}	
	function editreturnproducts($id)
	{
		//echo $id;die;
		if(is_numeric($id)) {
			$rerurnid =$this->returnproduct_model->getreturnid($id);
			//echo $rerurnid;die;
			$result = $this->returnproduct_model->getreturndata($rerurnid);
			//print_r($result);die;
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'return_id' => $result[0]->return_id,
						'order_id'	=> $result[0]->order_id,
						'user_id' => $result[0]->user_id,
						'cdate' => $result[0]->cdate,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'phone' => $result[0]->phone, 
						'order_item_name' => $result[0]->product_name,
						'product_quantity' => $result[0]->product_quantity,
						'product_id' => $result[0]->product_id,
						'opened' => $result[0]->opened,
						'comment' => $result[0]->comment,
						'returnaction' => $result[0]->returnaction,
						'returnstatus' => $result[0]->returnstatus,
						'returnreason' => $result[0]->returnreason,
					);
			if($this->input->post('action') == 'edit_category') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				//print_r($form_field);die;
				if($response = $this->returnproduct_model->edit($id, $form_field)) {
					$this->session->set_flashdata('L_strErrorMessage','Product Return Successfully!!!!');
					redirect($this->config->item('base_url').'product/order_detail/'.$id);
				} 
				else 
				{
					$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
				} 
			}
			$data['umdata'] = $this->returnproduct_model->getusermessage($result[0]->user_id);
			$data['allreturnreason'] = $this->returnproduct_model->returnreason();
			$data['allreturnaction'] = $this->returnproduct_model->returnaction();
			$data['allreturnstatus'] = $this->returnproduct_model->returnstatus();
			$this->load->view('edit_returnproducts',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'category/lists');
		}
	}
	function deletes($id)
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->returnproduct_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Message Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'return_product/editreturnproducts/'.$id.'');
  
	}
	
		function deletes1()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
		foreach($_POST['selected'] as $selCheck) {
			    if($this->returnproduct_model->deletes2($selCheck)) {
					$this->session->set_flashdata('flashError','Return Product Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
		}
		}
		redirect($this->config->item('base_url').'return_product/lists/');
  
	}
	function ajaxlist_cms()
	{
		//echo 11;die;
		$email = "";
		$result = $this->returnproduct_model->product_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$email .= $result[$i]->email.",";
		}
		echo $email = substr($email, 0, -1);
	}
}
?>