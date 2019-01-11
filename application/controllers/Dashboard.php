<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
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
		$username=$this->session->userdata('username');		
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);		
		$data['countuser']=$this->Loginmodel->countuser();
		$data['countstudent']=$this->Globalmodel->countdata('student');		
		$data['setup']=$this->Globalmodel->getdata('setup');
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('dashboard/index',$data);
		$this->load->view('dashboard/footer');
	}
		
	
}
