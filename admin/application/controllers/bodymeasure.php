<?php
class Bodymeasure extends CI_Controller {
	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('bodymeasure_model');
	}

	function add()
	{
	 
		$L_strErrorMessage='';
		$form_field = $data = array(
			'pname' => '',
			'desc' => '',
			'youtubeurl' => '',
			
			
		);

		if($this->input->post('action') == 'add_bodymeasure') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
			}
			$this->load->library('validation');
			$rules['pname'] = "trim|required";
		 
			
			$this->validation->set_rules($rules);
			$fields['pname'] = "Parts Name";
		 
			$this->validation->set_fields($fields);
			
			/*if(!$this->bodymeasure_model->is_bodymeasure_already_exist_add($this->input->post('pname')))
			{
				*/	if($response = $this->bodymeasure_model->add($data))
					{
						$this->session->set_flashdata('L_strErrorMessage','Body Measure Added Succcessfully!!!!');
									redirect($this->config->item('base_url').'bodymeasure/lists');

 					}
					else 
					{
						//echo "<script>alert('Cms is not successfull')</sctipt>";
						$data['L_strErrorMessage'] = 'Some Errors prevented from adding data,please try later.';
						redirect($this->config->item('base_url'));
					}
			/*}
			else
			{	
					$data['L_strErrorMessage'] = 'Body Measure already exist!';
			}*/
		}
		 
		
		$this->load->view('add_bodymeasure',$data);
	}


    function edit($id)
	{	


if(is_numeric($id)) {
			$result = $this->bodymeasure_model->get_bodymeasure($id);
					$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'pname' => $result[0]->pname,
						'desc'   => $result[0]->desc,
						'youtubeurl'   => $result[0]->youtubeurl,
						'displayorder'   => $result[0]->order,
			
 					);

			if($this->input->post('action') == 'edit_bodymeasure') {
				foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
				
				$this->load->library('validation');
				$rules['pname']       = "trim|required";
				 
				$this->validation->set_rules($rules);
				$fields['pname']       = "Parts Name";
				 

				$this->validation->set_fields($fields);

				if ($this->validation->run() == FALSE) {
					$data = $form_field;
					$data['L_strErrorMessage'] = $this->validation->error_string;
					$data['id'] = $id;
				} 
				else 
				{

					
					//if(!$this->bodymeasure_model->is_bodymeasure_already_exist($this->input->post('pname'),$id))
					//{
								if($response = $this->bodymeasure_model->edit($id, $form_field)) 
								{
									$this->session->set_flashdata('L_strErrorMessage','Bodymeasure Updated Succcessfully!!!!');
									redirect($this->config->item('base_url').'bodymeasure/lists');

								}
								else 
								{
									$data['L_strErrorMessage'] = 'Some Errors prevented from update data,please try again later.';
								}
					/*}
					else
					{
						$data['L_strErrorMessage'] = 'Parts already exist!';
					}*/

				}
			}
			$data['allbodymeasure'] = $this->bodymeasure_model->allbodymeasure();
			$this->load->view('edit_bodymeasure',$data);
		} else {
			$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
			redirect($this->config->item('base_url').'bodymeasure/lists');
		}

 
	}



	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'bodymeasure/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data['pname'] = $this->input->post('pname');
		$per_page = '1';
		$perpage = '3';
		$return = $this->bodymeasure_model->lists($config['per_page'],$this->uri->segment(3), $data);
		//print_r($return);die;
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('list_bodymeasure', $data);
	}
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->bodymeasure_model->deletes($selCheck)) 
				{
					$this->session->set_flashdata('flashError','Parts Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'bodymeasure/lists');
	}

	function ajaxlist_bodymeasure()
	{
		//echo 11;die;
		$pname = "";
		$result = $this->bodymeasure_model->bodymeasure_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$pname .= $result[$i]->pname.",";
		}
		echo $pname = substr($pname, 0, -1);
	}
}