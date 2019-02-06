<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller 
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
	
	public function userList()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);		
		$data['allrec']=$this->Globalmodel->getdata_join('users','levelid','user_level','id');
		$data['setup']=$this->Globalmodel->getdata('setup');
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);		
		$this->load->view('admin/userlist',$data);
		$this->load->view('admin/footer');			
	}
	
	public function userLog()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);		
		$data['allrec']=$this->Globalmodel->getdata_join_twotable('users','levelid','user_level','id','users_log','User_Id','Log_Date,Log_Time','desc');
		$data['setup']=$this->Globalmodel->getdata('setup');
		$this->load->view('header',$data);		
		$this->load->view('admin/userlog',$data);
		$this->load->view('admin/footer');			
	}
	
	public function addUser()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['alltype']=$this->Globalmodel->getdata_by_field('user_level','ut_flag','1');			
		$this->load->view('header',$data);		
		$this->load->view('admin/adduser',$data);
		$this->load->view('admin/footer');			
	}
	
	public function editUser($id)
	{
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','users.id',$id);		
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['alltype']=$this->Globalmodel->getdata_by_field('user_level','ut_flag','1');			
		$this->load->view('header',$data);		
		$this->load->view('admin/edituser',$data);
		$this->load->view('admin/footer');			
	}
	
	public function addUsertype()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);							
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['alltype']=$this->Globalmodel->getdata('user_level');			
		$this->load->view('header',$data);		
		$this->load->view('admin/addusertype',$data);
		$this->load->view('admin/footer');			
	}
	
	public function editUsertype($id)
	{
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','users.id',$id);		
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['allrec']=$this->Globalmodel->getdata_by_field('user_level','ID',$id);	
		$this->load->view('header',$data);		
		$this->load->view('admin/addusertype_edit',$data);
		$this->load->view('admin/footer');			
	}
	
	public function saveUsertype()
	{
	    $usertype=$this->input->post('usertype');
		$userid=$this->session->userdata('userid');
		
		$user=array(
					'Title'=>$usertype,	
					'ut_date'=>date('Y-m-d'), 
					'ut_time'=>date('H:i:s'), 
					'ut_flag'=>0,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('user_level',$user);
		$this->session->set_flashdata('successmsg','User Type Successfully Saved');
		redirect('Administration/addUsertype');
	}
	
	public function updateUsertype($id)
	{
	    $usertype=$this->input->post('usertype');
		$userid=$this->session->userdata('userid');
		
		$user=array(
					'Title'=>$usertype,	
					'ut_date'=>date('Y-m-d'), 
					'ut_time'=>date('H:i:s'), 
					'ut_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('user_level','Id',$id,$user);
		$this->session->set_flashdata('successmsg','Usertype Successfully Updated');
		redirect('Administration/addUsertype');
	}
	
	public function saveUser()
	{
	    $firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$address=$this->input->post('address');
		$phoneno=$this->input->post('phoneno');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$userid=$this->session->userdata('userid');
		
		$user=array(
					'Firstname'=>$firstname,
					'Lastname'=>$lastname,
					'Address'=>$address,
					'Phoneno'=>$phoneno,
					'Username'=>$username,
					'Password'=>md5($password),
					'Image'=>'abc.jpg', 
					'Levelid'=>$level, 
					'Udate'=>date('Y-m-d'), 
					'Utime'=>date('H:i:s'), 
					'Uflag'=>0,
					'user_id=>$userid'
					);
		$this->Globalmodel->savedata('users',$user);
		$this->session->set_flashdata('successmsg','User Successfully Saved');
		redirect('Administration/userList');
	}
	
	public function updateUser($id)
	{
	    $firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$address=$this->input->post('address');
		$phoneno=$this->input->post('phoneno');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$userid=$this->session->userdata('userid');
		
		$user=array(
					'Firstname'=>$firstname,
					'Lastname'=>$lastname,
					'Address'=>$address,
					'Phoneno'=>$phoneno,
					'Username'=>$username,
					'Password'=>md5($password),
					'Image'=>'abc.jpg', 
					'Levelid'=>$level,
					'user_id=>$userid'
					);
		$this->Globalmodel->updatedata('users','id',$id,$user);
		$this->session->set_flashdata('successmsg','User Successfully Updated');
		redirect('Administration/userList');
	}
	
	public function activateUsertype($id)
	{
		$this->Globalmodel->activate('user_level','Id',$id,'ut_flag');
		$this->session->set_flashdata('successmsg','Usertype Successfully Updated');
		redirect('Administration/addusertype', 'refresh');
	}
	
	public function activateUser($id)
	{
		$this->Globalmodel->activate('users','id',$id,'Uflag');
		$this->session->set_flashdata('successmsg','User Successfully Updated');
		redirect('Administration/userList', 'refresh');
	}	
}
