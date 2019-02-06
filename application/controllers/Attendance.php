<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct(); 
		$this->load->helper(array('url','html','form','download')); 
		ini_set('post_max_size', '64M');
		ini_set('upload_max_filesize', '500M');
		date_default_timezone_set('Asia/Kolkata');		
    }
	
	public function index()
	{	
		
	}
	
	public function addStaffAttendance()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['user']=$this->Globalmodel->getdata_join('users','levelid','user_level','id');				
		$this->load->view('header',$data);		
		$this->load->view('attendance/entry',$data);
		$this->load->view('attendance/footer');	
	}
	
	public function addStdentAttendance()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$this->load->view('header',$data);		
		$this->load->view('attendance/searchstudent',$data);
		$this->load->view('attendance/footer');	
	}
	
	public function saveAttendanceDtls()
	{
		$staffid=$this->input->post('staffid');
		$entrydate=$this->input->post('entrydate');	
		$entrydate=date("Y-m-d",strtotime($entrydate));		
		$entrytime=$this->input->post('entrytime');		
		$userid=$this->session->userdata('userid');
		
		$data['adata']=$this->Globalmodel->getdata_by_field_array('user_attendance',array('a_user_id'=>$staffid,'entrydate'=>$entrydate));
		
		//print_r($data['adata'][0]->a_id);
		
		if(count($data['adata'])==0)
		{
			$dtls=array(
					'a_user_id'=>$staffid,
					'entrydate'=>$entrydate,																				
					'entrytime'=>date("H:i:s a",strtotime($entrytime)),
					'exittime'=>date('H:i:s'),
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);
			$this->Globalmodel->savedata('user_attendance',$dtls);
		}
		else
		{
			$dtls=array(
					'exittime'=>date("H:i:s a",strtotime($entrytime)),
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);
			$this->Globalmodel->updatedata('user_attendance','a_id',$data['adata'][0]->a_id,$dtls);	
		}		
		$this->session->set_flashdata('successmsg','Attendance Successfully Saved');
		redirect('Attendance/addAttendance');	
		
	}
	
	public function updateAttendanceDtls()
	{
		$staffid=$this->input->post('staffid');
		$entrydate=$this->input->post('entrydate');		
		$entrytime=$this->input->post('entrytime');
		$exittime=$this->input->post('exittime');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'a_user_id'=>$staffid,
					'entrydate'=>date("Y-m-d",strtotime($entrydate)),																				
					'entrytime'=>date("H:i:s a",strtotime($entrytime)),
					'exittime'=>date('H:i:s'),
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('user_attendance',$dtls);
		$this->session->set_flashdata('successmsg','Attendance Successfully Saved');
		redirect('Attendance/addAttendance');	
	}
}
