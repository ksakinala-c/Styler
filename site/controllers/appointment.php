<?php
class Appointment extends Controller
{ 

	function Appointment() 
	{
		parent::Controller();
		$this->load->model('appointment_time_model');	
        $this->load->model('user_model');			
	}
	
	function schedule_appointment()
	{
		//echo "<pre>";
		//print_r($_SESSION);exit;
		//echo "Today is " . date_default_timezone_get() . "<br>";exit;
		//$this->session->unset_userdata('measuredid');
		
 		$data = array();
 		$data['err_msg'] = '';
			$data['title'] = 'Stylior.com';
			$data['keywords'] = '';
			$data['description'] = '';
		$data['hoursRange']=$this->appointment_time_model->hoursRange();
		$data['dayTimes']=$this->appointment_time_model->getDayTimes();
		$data['getTimeInfo']=$this->appointment_time_model->getTimeInfo();
		$data['countrycode'] = $this->user_model->getccode();
			//echo "<pre>";
			//print_r($data);exit;
 		$this->load->view('appointment_schedule',$data);
	}
	
	function getappointmentTimes()
	{
		$dataInfo['time_of_day'] = $this->input->post("selectedTimeOfDay");
		$dataInfo['selectedDate'] = $this->input->post("selectedDate");
		$new_date_format = date('Y-m-d', strtotime($dataInfo['selectedDate']));
		$dataInfo['appointment_date'] =$new_date_format;
		$response = $this->appointment_time_model->getUserAppointmentTimes($dataInfo);
		$data=array();
		$data['responseData']=$response;
		foreach($data['responseData'] as $resData)
		{
			$resInfo[$resData->start_time]=$resData->start_time;
		}
		
		$data['hoursRange']=$this->appointment_time_model->hoursRange();
		$data['dayTimes']=$this->appointment_time_model->getDayTimes();
		$data['getTimeInfo']=$this->appointment_time_model->getTimeInfo();
		$string.="<div class='apt-time-apnd-div'>";
		$string.="<div class='btn-group select-apt-time' data-toggle='buttons'>";
		foreach($data['getTimeInfo'] as $timeInfos) { 
		$keyId=$timeInfos->time_of_day;
		$timeInfo=$timeInfos->start_time;
		
		if($resInfo[$timeInfo]){			
			$string.="<label class='disabled btn btn-default radio-grp-apt-label apt-lbl-cls".$keyId."'>";
		}else{
			$string.="<label class='btn btn-default radio-grp-apt-label apt-lbl-cls".$keyId."'>";
		}
		$string.="<input class='radio-grp-apt apt-cls".$keyId."' type='radio' id='apt".$keyId."' name='start_time' value='".$timeInfo."' />".$data['hoursRange'][$timeInfo];
		$string.="</label>";
		}
		$string.='</div></div>';
		echo $string;
		//echo $this->load->view('appointment_schedule_time',$data,true);		
		
	}
	
	function appointmentTimes()
	{
		$selectedData = $this->input->post("q"); 
		
		$sql = "SELECT p.*  FROM  mycart p WHERE p.id = '".$cartId."'"; 
		//$selectedTimeOfDay = $this->input->post("selectedTimeOfDay"); 
		$data=$dataInfo=array();
		foreach($selectedData as $info){
			$dataInfo[$info['name']]=$info['value'];
		}		
		$new_date_format = date('Y-m-d', strtotime($dataInfo['appointment_date']));
		$data['appointment_date'] =$new_date_format;
		$data['appointment_location'] =$dataInfo['appointment_location'];		
		$data['start_time'] =$dataInfo['start_time'];
		$data['first_name'] =$dataInfo['first_name'];
		$data['last_name'] =$dataInfo['last_name'];
		$data['email'] =$dataInfo['email'];
		$data['country'] =$dataInfo['country'];
		$data['phone_number'] =$dataInfo['phone_number'];
		$data['q1'] =$dataInfo['q1'];
		$data['q2'] =$dataInfo['q2'];
		$data['q3'] =$dataInfo['q3'];
		$data['status'] =1;
		if($response = $this->appointment_time_model->addUserAppointment($data)) {
			 
			$message='Hi '.$dataInfo['first_name'].',<br><br> Your request for appointment on '.$data['appointment_date'].':'.$dataInfo['start_time'].' has been confirmed. <br><br> Thanks';				
				$to=$dataInfo['email'];
				//echo $to;die();
				$subject  = 'Stylir : Appointment Scheduled';  
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: Stylior <bookappointment@stylior.com>' . "\r\n" .
							'Reply-To: bookappointment@stylior.com' . "\r\n" .
							'X-Mailer: PHP/' . phpversion();				
				mail($to, $subject, $message, $headers);

						return json_encode($data);

					} else {
						return false;
					}
	}
	
	

				 
				
}
?>