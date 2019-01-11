<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller 
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
	
	public function teacherList()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);		
		//$data['allrec']=$this->Globalmodel->getdata_join('users','levelid','user_level','id');
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['allrec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Title','Teaching Staff');
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);		
		$this->load->view('teacher/userlist',$data);
		$this->load->view('teacher/footer');
	}
	
	public function addTeacher()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['alltype']=$this->Globalmodel->getdata_by_field_array('user_level',array('ut_flag'=>'1','Title'=>'Teaching Staff'));;			
		$this->load->view('header',$data);		
		$this->load->view('teacher/adduser',$data);
		$this->load->view('teacher/footer');		
	}
	
	public function addTeacherPhoto($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['regno']=$regno;
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/upload_student_image',$data);
		$this->load->view('student/footer');
	}
	
	public function addTeacherDocs($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['regno']=$regno;
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/upload_student_docs',$data);
		$this->load->view('student/footer');
	}
	
	public function viewTeacher($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata_by_field('student','reg_no',$regno);		
		$data['studoc']=$this->Globalmodel->getdata_by_field('student_docs','reg_no',$regno);				
		$data['stuclass']=$this->Studentmodel->getstudenttoclass_by_regno($regno);
		$data['religion']=$this->Globalmodel->getdata_by_field_join('student','religion_id','religion','religion_id','reg_no',$regno);		
		$data['caste']=$this->Globalmodel->getdata_by_field_join('student','caste_id','caste','caste_id','reg_no',$regno);		
		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/viewstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function editTeacher($id)
	{
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','users.id',$id);		
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['alltype']=$this->Globalmodel->getdata_by_field_array('user_level',array('Title'=>'Teaching Staff','ut_flag'=>'1'));			
		$this->load->view('header',$data);		
		$this->load->view('teacher/edituser',$data);
		$this->load->view('teacher/footer');	
	}
	
	public function updateTeacher($id)
	{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$address=$this->input->post('address');
		$phoneno=$this->input->post('phoneno');
		$username=$this->input->post('username');		
		$level=$this->input->post('level');
		$userid=$this->session->userdata('userid');
		
		$user=array(
					'Firstname'=>$firstname,
					'Lastname'=>$lastname,
					'Address'=>$address,
					'Phoneno'=>$phoneno,
					'Username'=>$username,					
					'Image'=>'abc.jpg', 
					'Levelid'=>$level,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('users','id',$id,$user);
		$this->session->set_flashdata('successmsg','User Successfully Updated');
		redirect('Teacher/teacherList');
	}	
		
	public function searchTeacher()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/searchstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function searchTeacherListClass()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');	
		$data['allrec']=$this->Studentmodel->getstudent_class_caste_religion();		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/studentlistclass',$data);
		$this->load->view('student/footer');
		
	}
	
	public function activateTeacher($id)
	{
			$this->Globalmodel->activate('users','id',$id,'Uflag');	
			$this->session->set_flashdata('successmsg','Teacher Successfully Saved');
			redirect('Teacher/teacherList', 'refresh');	
	}
	
	public function saveTeacherDtls()
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
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('users',$user);
		$this->session->set_flashdata('successmsg','User Successfully Saved');
		redirect('Teacher/teacherList');	
	}
	
	public function updateStudentDtls($id)
	{
		$sname=$this->input->post('sname');					
		$fathersname=$this->input->post('fathersname');	
		$mothersname=$this->input->post('mothersname');	
		$address=$this->input->post('address');			
		$state=$this->input->post('state');	
		$district=$this->input->post('district');	
		$pincode=$this->input->post('pincode');	
		$dob=$this->input->post('dob');		
	    $gender=$this->input->post('gender');		
		$nationality=$this->input->post('nationality');	
		$religion=$this->input->post('religion');
		$caste=$this->input->post('caste');
		$physicallychalleged=$this->input->post('physicallychalleged');	
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'stuname'=>$sname, 										
					'fathersname'=>$fathersname, 
					'mothersname'=>$mothersname,
					'address'=>$address,
					'state'=>$state,
					'district'=>$district,
					'pincode'=>$pincode,
					'dob'=>date("Y-m-d",strtotime($dob)),
					'gender'=>$gender,
					'nationality'=>$nationality,
					'religion_id'=>$religion,
					'caste_id'=>$caste,
					'physicallychalleged'=>$physicallychalleged,
					'phoneno'=>$phoneno,															 
					'stu_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('student','stu_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Student Successfully Saved');
		redirect('Student/studentlist');
	}
	
	public function do_upload($regno)
    {
			    $config['upload_path']     = './uploads/stuimg/';
				$config['file_name']       = $regno.'.jpg';				
                $config['allowed_types']   = 'gif|jpg|png';
                $config['max_size']        = 0;
                $config['max_width']       = 1024;
                $config['max_height']      = 768;
				$config['overwrite'] 	   = TRUE;
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                if (!$this->upload->do_upload('Image_Scan'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('errmsg', $error->error);
                    redirect('Student/viewStudent/'.$regno);
                }
                else
                {   
					$dtls=array('image'=>$regno.'.jpg');
					$this->Globalmodel->updatedata('student','reg_no',$regno,$dtls);	
					
                    $data = array('upload_data' => $this->upload->data());
					$this->session->set_flashdata('successmsg', 'Image Successfully Added');
                    redirect('Student/viewStudent/'.$regno);
                }
    }
	
	public function do_upload2($regno,$time)
    {
			    $config['upload_path']     = './uploads/studocs/';
				$config['file_name']       = $time.'.jpg';				
                $config['allowed_types']   = 'gif|jpg|png';
                $config['max_size']        = 0;
                $config['max_width']       = 1024;
                $config['max_height']      = 768;
				$config['overwrite'] 	   = TRUE;
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                if (!$this->upload->do_upload('Image_Scan'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('errmsg', $error->error);
                    redirect('Student/viewStudent/'.$regno);
                }
                else
                {   
					$regno=$regno;
					$description=$this->input->post('description');
					$filename=$time.'.jpg';
					$userid=$this->session->userdata('userid');
					
					$dtls=array(
								'reg_no'=>$regno,
								'description'=>$description,
								'filename'=>$filename,
								'sd_date'=>date('Y-m-d'),
								'sd_time'=>date('H:i:s'),
								'sd_flag'=>1,
								'user_id'=>$userid
								);
					$this->Globalmodel->savedata('student_docs',$dtls);	
					
                    $data = array('upload_data' => $this->upload->data());
					$this->session->set_flashdata('successmsg', 'Image Successfully Added');
                    redirect('Student/viewStudent/'.$regno);
                }
    }
	
	public function addStudenttoClass($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('student');
		$data['class']=$this->Globalmodel->getdata('class');
		$data['section']=$this->Globalmodel->getdata('section');
		$data['regno']=$regno;
		
		$this->load->view('header',$data);
		$this->load->view('student/addstudenttoclass',$data);
		$this->load->view('student/footer');	
	}
	
	public function isStudentExisttoClass($sessionyear,$regno)
	{
		$filterdata=array('scm_session'=>$sessionyear,'reg_no'=>$regno);
		$data['allrec']=$this->Globalmodel->getdata_by_field_array('student_class_map',$filterdata);
		$c=0;		
		foreach($data['allrec'] as $r)
		{
			$c++;
		}
		return $c;
	}
	
}
