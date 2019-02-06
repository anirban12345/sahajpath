<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
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
	    $data['setup']=$this->Globalmodel->getdata('setup');
		$this->load->view('login',$data);
	}
	public function checklogin()
	{		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$loginflag=$this->Loginmodel->checklogin($username,md5($password));
		
		//print_r($loginflag);
		
		if($loginflag>0)
		{
		    $data['userflag']=$this->Globalmodel->getdata_by_field('users','Username',$username);
			
			//1print_r($data['userflag'][0]->id);			
			
			if($data['userflag'][0]->Uflag==1)
			{
				$this->session->set_userdata('name',$data['userflag'][0]->Firstname.' '.$data['userflag'][0]->Lastname);
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('userid',$data['userflag'][0]->id);
				$username=$this->session->userdata('username');			
				$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
				$userlog=array('User_Id'=>$data['rec'][0]->id, 'Log_Date'=>date('Y-m-d'), 'Log_Time'=>date('H:i:s'));		
				$this->Globalmodel->savedata('users_log',$userlog);			
				redirect('Dashboard');	
			}
			else
			{
				$this->session->set_flashdata('errmsg','Account temporarily deactivated! Please contact to Adminsitrator');
				redirect('Login');
			}
		}
		else
		{
			$this->session->set_flashdata('errmsg','Wrong Username or Password');
			redirect('Login');
		}
	}	
}
