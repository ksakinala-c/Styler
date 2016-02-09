<?php
   class Xlsdata extends CI_Controller {
	function __construct() {
    parent::__construct();
    $this->load->model('xls_model');
    $this->load->library('csvimport');
	
		//authenticate();
	}
     
    function index() {
    $data['addressbook'] = $this->xls_model->get_addressbook();
    
    }
     
    function addxls() {
	$data['error'] = '';  
	//$area=$_POST['area_id'];
	//$city=$_POST['city_id'];
	$file_path = $_FILES['csv']['tmp_name'];
	$file_type = $_FILES['csv']['type'];
	$this->load->library('PHPExcel');
	if($file_type == 'text/csv')
	{
		 
		$objReader = new PHPExcel_Reader_CSV();
		$PHPExcel = $objReader->load($file_path);
	}
	else
	{
		//echo "bye";die();
		$PHPExcel = PHPExcel_IOFactory::load($file_path);		
	}			

	$objWorksheet = $PHPExcel->getActiveSheet();			
	
	$highestrow = $objWorksheet->getHighestRow();
	//echo $highestrow;die();
	for($i=2;$i<= $highestrow;$i++)
	{
		$obj_insData = array(
		'State'=> addslashes($PHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue()) );
			//$saveddata = $this->xls_model->getdata($obj_insData['Code']);
			if($obj_insData == '' && count($obj_insData) == '0')
			{
				continue;
			} 
			else
			{
			//echo "hello"; die();
			mysql_query("INSERT INTO  addessdata (state,city,pincode) VALUES
					(
						
			'".addslashes($PHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue())."',
			'".addslashes($PHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue())."',
			'".addslashes($PHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue())."'
			 
			 
			 
					)
				");
				

			}
			 
	}	
			$this->session->set_flashdata('message','Your Data File Uploaded Succcessfully.!!');
			redirect($this->config->item('base_url').'xlsdata/lists');
	}
	
	function lists()
	{
		$this->load->library('pagination');
		$url_to_paging = $this->config->item('base_url');
		$config['base_url'] = $url_to_paging.'product/lists/';
		$config['per_page'] = '15';
		$config['first_url']='0';
		$data['pincode'] = $this->input->post('pincode');
		//echo $data['pincode'];die;
		$data['city'] = $this->input->post('city');
		$per_page = '1';
		$perpage = '3';
		$return = $this->xls_model->lists($config['per_page'],$this->uri->segment(3), $data);
		$data['result'] = $return['result'];
		$config['total_rows'] = $return['count'];
		$this->pagination->initialize($config);
		//$data['allcategory'] = $this->product_model->allcategory();
		//$data['subcategory'] = $this->product_model->allcategory1();
		$this->load->view('address_data.php', $data);
	}
	
	function dataupload()
		{
			$L_strErrorMessage='';
			$data['err_msg']='';
			$this->load->view('xlsdata',$data);
		}
  
   function ajaxlist_product()
	{
		//echo 11;exit;
		$city = "";
		$result = $this->xls_model->product_list();
		//print_r($result['result']);die;
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]->fname;	
			$city .= $result[$i]->city.",";
		}
		echo $city = substr($city, 0, -1);
	}
	function deletes()
	{
		//echo "hello";die;
		if(isset($_POST['selected']) && count($_POST['selected']) > 0) {
	
			foreach($_POST['selected'] as $selCheck) {
				 //echo $selCheck;die;
				if($this->xls_model->deletes($selCheck)) {
					$this->session->set_flashdata('flashError','Data Deleted Succcessfully!!!!');
				}  
				else 
				{
						$this->session->set_flashdata('flashError','Some Errors prevented from Deleting!!!!');
						break;
				}
			}
			redirect($this->config->item('base_url').'xlsdata/lists');
		}
		
	}
   }
	
   /*
		mysql_query( "update price set a = ".addslashes($PHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue())."  where code = ".$codedata." ");
   */
 
?>