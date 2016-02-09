<?php	class Coupan extends CI_Controller {	private $_data = array();
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
        }
		$this->load->model('coupan_model');
	}

	function add()
	{
		/**/$L_strErrorMessage='';
		$form_field = $data = array(  
			'coupanname' => '',
			'discount' => '',
			'price' => '',
			'percentage' => '',
			'startdate' => '',
			'enddate' => '',
			'description' => 'description'
		);
		
		if($this->input->post('action') == 'add_coupan') 
		{
			foreach($form_field as $key => $value)
			{	
				$data[$key]=$this->input->post($key);	
				
			}
			$this->load->library('validation');
			$rules['coupanname'] = "trim|required";
			$rules['discount'] = "trim|required";
			$rules['price'] = "trim|required";
			$rules['percentage'] = "trim|required";
			$rules['startdate'] = "trim|required";
			$rules['enddate'] = "trim|required";
			$rules['description'] = "trim|required";
			
			$this->validation->set_rules($rules);
			$fields['coupanname'] = "coupanname";
			$fields['discount'] = "discount";
			$fields['price'] = "price";
			$fields['percentage'] = "percentage";
			$fields['startdate'] = "startdate";
			$fields['enddate'] = "enddate";
			$fields['description'] = "description";
			
			$this->validation->set_fields($fields);
				
						 $this->coupan_model->add($data);
						$this->session->set_flashdata('L_strErrorMessage','Coupan Added Succcessfully!!!!');
						redirect($this->config->item('base_url').'coupan/lists');

						
					
					
					if ($this->validation->run() == FALSE){
				$data['L_strErrorMessage'] = $this->validation->error_string;
			} 

					
		}
		 /**/
		//$data['unique_no'] = $this->product_model->allattributes();
		$data = array();
		$this->load->view('add_coupan',$data);
	}
	
	
	function order_manage()
	{
	 	$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/order_manage/';
		$config['per_page'] = '15'; 
		$data['username'] = $this->input->post('username');
		$return = $this->product_model->order_manage($config['per_page'],$this->uri->segment(3), $data); 
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config); 
		$this->load->view('order',$data);   
	 	
	}
	
	function order_detail($id)  
	{
		$data['orderdetails'] = $this->product_model->order_detail($id); 
		$data['shippingdetails'] = $this->product_model->shippingdetails($id);
		$data['orderitems'] = $this->product_model->orderitems($id);
		$this->load->view('order_detail',$data);  
	}
 
	function editimage($id)
	{
	 	
		$data['L_strErrorMessage'] = '';
 

		if ($this->input->post('action') == 'edit' && is_numeric($id)) {	
 		 
		for($i = 0; $i < count($_FILES['attachment1']['name']); $i++)
		{
			 

			if($_FILES['attachment1']['name'][$i] != '') { 
				
				$tmp_name1 =  $_FILES['attachment1']['tmp_name'][$i];  //$_FILES['attachment'.$i]['tmp_name'];
		 		$rootpath1 =  $this->config->item('upload')."products/";
				//$logoname  =  $this->sprojects->upload_Classifile('attachment'.$i,$rootpath1);
				$logoname = time().$_FILES['attachment1']['name'][$i];
				move_uploaded_file( $tmp_name1 , $rootpath1.$logoname );
			
				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/medium/".$logoname; 
				
				$height=280;
				$width=200;
				
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

				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/large/".$logoname; 
				
				$height=520;
				$width=480;
				
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


				$tmp_path = $this->config->item('upload')."products/".$logoname;
				$image_thumb= $this->config->item('upload')."products/small/".$logoname; 
				
				$height=103;
				$width=93;
				
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
 
				$id222 = $this->product_model->add_product_image($newdata1);
			}
		}
		}
		//$data['pid'] = $id; 
		$data['result'] = $this->product_model->presult($id);
		$data['productimages'] = $this->product_model->productimages($id); 
		$this->load->view('editimage',$data);
		
		 
	}
	
    function edit($id)
	{	 
			if(is_numeric($id))
			{
				$result = $this->coupan_model->get_coupan($id);  

				$form_field = $data = array(
						'L_strErrorMessage' => '',
						'id'	=> $result[0]->id,
						'coupanname' =>  $result[0]->coupanname,
						'discount' =>  $result[0]->discount,
						'price' =>  $result[0]->price,
						'percentage' => $result[0]->percentage,
						'description' => $result[0]->description,
						'startdate' =>  $result[0]->startdate,
					    'enddate' => $result[0]->enddate,
						);  
					
				if($this->input->post('action') == 'edit_coupan') 
				{
					foreach($data as $key => $value) {  $form_field[$key]=$this->input->post($key);	}
					
					$this->load->library('validation');
					$rules['coupanname'] = "trim|required";
					$rules['discount'] = "trim|required";
					$rules['price']       = "trim|required";
					$rules['percentage'] = "trim|required";
					$rules['description']       = "trim|required";
					$rules['startdate'] = "trim|required";
					$rules['enddate']       = "trim|required";
					
					$this->validation->set_rules($rules);
					$fields['coupanname']   = "coupanname";
					$fields['discount'] = "discount";
					$fields['price']       = "price";
					$fields['percentage'] = "percentage";
					$fields['description']       = "description";
					$fields['startdate'] = "startdate";
					$fields['enddate']       = "enddate";
					 
				
					$this->validation->set_fields($fields);
					if ($this->validation->run() == FALSE) 
					{
							$data = $form_field;
							$data['L_strErrorMessage'] = $this->validation->error_string;
							$data['id'] = $id;
					} 
					else 
					{
							$this->coupan_model->edit($id, $form_field);
							$this->session->set_flashdata('L_strErrorMessage','Coupan Updated Succcessfully!!!!');
							redirect($this->config->item('base_url').'coupan/lists');
					}
				}
				
				$data['coupanattr'] = $this->coupan_model->coupanattr($id); 
						
				$this->load->view('edit_coupan',$data);
			} 
			else 
			{
				$this->session->set_flashdata('L_strErrorMessage','No Such Attribute !!!!');
				redirect($this->config->item('base_url').'coupan/lists');
			}
	}


	//first function calling after pressing coupan tab... 
	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		
		$config['base_url'] = $url_to_paging.'coupan/lists/';
		$config['per_page'] = '10';
		$config['first_url']='0';
		$data = array();
		//using for searching data...
		$data['coupanname'] = $this->input->post('coupanname');

		
		$per_page = '1';
		$perpage = '3';
		//below is used in all perpose
		$return = $this->coupan_model->lists($config['per_page'],$this->uri->segment(3), $data);
		
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		//echo "<pre>";print_r($data);break;
		$this->pagination->initialize($config);
		$this->load->view('coupan', $data);
	}
	
	
	function deletes()
	{
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				if($this->coupan_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Product Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
		}
		redirect($this->config->item('base_url').'coupan/lists');
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
	
	function product_murge()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/product_murge'; 
		$config['per_page'] = '10'; 
		$config['first_url']='0';
		$data['title'] = $this->input->post('title');
		$per_page = '1';
		$perpage = '3';
		$return = $this->product_model->product_murge($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		$this->load->view('product',$data);
		
	}
	
	 


function newadcatselect(){
		$id = $this->input->post('id');
		$result = $this->product_model->getsubcatlist($id);
		$html =' <select id="subsubid" name="subsubid" class="form-control" >
								<option value="">Select Subsub Category</option>';
				if($result != '' && count($result)){
					foreach($result as $res){
						$html .= "<option value='".$res->id."'>".$res->subname."</option>";
					}
				
				}				
		$html .= '</select>';						
		
		echo $html;
	}

	function setbaseimg($id,$pid)
	{
 
		$return = $this->product_model->setbaseimg($id,$pid);
		$this->session->set_flashdata('item', 'Base Image set Successfully');
		redirect($this->config->item('base_url').'product/editimage/'.$pid);
	}
	
	function removeimage($id,$pid)
	{
 
		$return = $this->product_model->removeimage($id);		$this->session->set_flashdata('item', 'Image deleted Successfully');		redirect($this->config->item('base_url').'product/editimage/'.$pid);	}}?>