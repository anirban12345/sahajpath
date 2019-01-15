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
	
	
	public function addAttendance()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['user']=$this->Globalmodel->getdata_join('users','levelid','user_level','id');				
		$this->load->view('header',$data);		
		$this->load->view('attendance/entry',$data);
		$this->load->view('attendance/footer');	
	}
	
	public function saveAttendanceDtls()
	{
		$entrydate=$this->input->post('entrydate');		
		$entrytime=$this->input->post('entrytime');
		$exittime=$this->input->post('exittime');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'entrydate'=>$entrydate,																				
					'entrytime'=>$entrytime,
					'exittime'=>$exittime
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('user_attendance',$dtls);
		$this->session->set_flashdata('successmsg','Attendance Successfully Saved');
		redirect('Attendance/addAttendance');	
	}
}
