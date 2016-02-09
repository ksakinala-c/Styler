<?php
class Email extends CI_Controller {
	private $_data = array();
	function __construct() {
		parent::__construct();
		if($this->session->userdata('adminId') == ''){
			redirect($this->config->item('base_url'));
		}
		
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->model('email_model');	
	}
	
	function sendemail()
	{
		$data = array();
		$data['ucategory'] = $this->email_model->ucategory();
		$this->load->view('adminemail.php',$data);
	}
	
	 function sendemail1()
	 {
		if($this->input->post('action') == 'send_email') 
		{
			$ucatid=$this->input->post('ucategory');
			$subject1=$this->input->post('subject');
			$description=$this->input->post('content');
			//echo $description;die;
			$udata=$this->email_model->emaildata($ucatid);
		 
			$message1 = '';
			$i=1;
			$message1 .= "<table cellpadding='5' style='border-top:2px solid #000;width: 600px;text-align: left;'>";
			
			if($udata != '' && count($udata) > 0)
			{   
				foreach($udata as $userdata)
				{
		 
			 
			$message1 .= '<div style="width:600px; height:auto; margin:0 auto;" >
							<a href="'.$this->config->item('base_url').'"><img style="width:150px; height:120px;" title="" alt="" src="'.$this->config->item('base_url_views').'images/foot-logo-img.png" class="img-responsive"></a>
							<p>Hello '.$userdata->name.',</p>
							<p>Subject :- '.$subject1.'</p>
							<p>Description:- '.$description.'</p>
							</div>
						';
			 
						//	echo $message1	;die;
						$to = $userdata->email; 
						 
						$subject  = 'New mail from stylior.com';  
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: stylior.com <info@stylior.com>' . "\r\n" .
									'Reply-To: info@stylior.com' . "\r\n" .
									'X-Mailer: PHP/' . phpversion();
						$headers .= 'Cc: info@stylior.com' . "\r\n";
						mail($to, $subject, $message1, $headers);
						//mail('info@ollobra.com', $subject, $message1, $headers);	
						mail('amvisolution@gmail.com', $subject, $message1, $headers);
						//user sms---	
	   
			} 
		}
		//echo $message1; die;
		}
			$this->session->set_flashdata('item','Mail Sent Successfully.!!');
			redirect($this->config->item('base_url').'email/sendemail/'.$order_id.'');
	}
	 
}