<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller 
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
	
	public function schoolDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);
		$data['setup']=$this->Globalmodel->getdata('setup');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/schooldtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveSchoolDtls()
	{
		$schoolname=$this->input->post('schoolname');		
		$address=$this->input->post('address');		
		$email=$this->input->post('email');
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'name'=>$schoolname,					
					'address'=>$address,
					'emailid'=>$email,
					'phoneno'=>$phoneno,										
					'setup_date'=>date('Y-m-d'), 
					'setup_time'=>date('H:i:s'), 
					'setup_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('setup',$dtls);
		$this->session->set_flashdata('successmsg','School Details Successfully Saved');
		redirect('Setup/schoolDtls');	
	}
	
	public function updateSchoolDtls($id)
	{
		$schoolname=$this->input->post('schoolname');		
		$address=$this->input->post('address');		
		$email=$this->input->post('email');
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'name'=>$schoolname,					
					'address'=>$address,
					'emailid'=>$email,
					'phoneno'=>$phoneno,										
					'setup_date'=>date('Y-m-d'), 
					'setup_time'=>date('H:i:s'), 
					'setup_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('setup','setup_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','School Details Successfully Saved');
		redirect('Setup/schoolDtls');	
	}
	
	public function classDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('class');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/classdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editClassDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata_by_field('class','class_id',$id);		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/classdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveClassDtls()
	{
		$schoolname=$this->input->post('schoolname');		
		$address=$this->input->post('address');		
		$email=$this->input->post('email');
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'name'=>$schoolname,																				
					'class_date'=>date('Y-m-d'), 
					'class_time'=>date('H:i:s'), 
					'class_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class',$dtls);
		$this->session->set_flashdata('successmsg','Class Successfully Saved');
		redirect('Setup/classDtls');	
	}
	
	public function updateClassDtls($id)
	{
		$schoolname=$this->input->post('schoolname');		
		$address=$this->input->post('address');		
		$email=$this->input->post('email');
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'name'=>$schoolname,																				
					'class_date'=>date('Y-m-d'), 
					'class_time'=>date('H:i:s'), 
					'class_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class','class_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Class Successfully Saved');
		redirect('Setup/classDtls');	
	}
	
	public function activateClass($id)
	{
		$this->Globalmodel->activate('class','class_id',$id,'class_flag');	
			
		$this->session->set_flashdata('successmsg','Class Successfully Saved');
		redirect('Setup/classDtls', 'refresh');	
	}
	
	public function sectionDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata('class');
		$data['allrec']=$this->Globalmodel->getdata_join('class','class_id','section','class_id');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/sectiondtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editSectionDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['classsection']=$this->Globalmodel->getdata_by_field_join('class','class_id','section','class_id','section_id',$id);
			
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/sectiondtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveSectionDtls()
	{
		$classname=$this->input->post('classname');		
		$sectionname=$this->input->post('sectionname');		
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_id'=>$classname,																				
					'sname'=>$sectionname,
					'section_date'=>date('Y-m-d'), 
					'section_time'=>date('H:i:s'), 
					'section_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('section',$dtls);
		$this->session->set_flashdata('successmsg','Section Successfully Saved');
		redirect('Setup/sectionDtls');	
	}
	
	public function updateSectionDtls($id)
	{
		$sectioname=$this->input->post('sectioname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'sname'=>$sectioname,																									
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('section','section_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Section Successfully Saved');
		redirect('Setup/sectionDtls');	
	}
	
	public function activateSection($id)
	{
		$this->Globalmodel->activate('section','section_id',$id,'section_flag');
		$this->session->set_flashdata('successmsg','Section Successfully Saved');
		redirect('Setup/sectionDtls', 'refresh');	
	}
	
	public function religionDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('religion');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/religiondtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editReligionDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata_by_field('religion','religion_id',$id);		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/religiondtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveRelgiionDtls()
	{
		$religionname=$this->input->post('religionname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'rname'=>$religionname,																				
					'religion_date'=>date('Y-m-d'), 
					'religion_time'=>date('H:i:s'), 
					'religion_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('religion',$dtls);
		$this->session->set_flashdata('successmsg','Religion Successfully Saved');
		redirect('Setup/religionDtls');	
	}
	
	public function updateReligionDtls($id)
	{
		$religionname=$this->input->post('religionname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'rname'=>$religionname,																				
					'religion_date'=>date('Y-m-d'), 
					'religion_time'=>date('H:i:s'), 
					'religion_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('religion','religion_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Religion Successfully Saved');
		redirect('Setup/religionDtls');	
	}
	
	public function activateReligion($id)
	{
		$this->Globalmodel->activate('religion','religion_id',$id,'religion_flag');
		$this->session->set_flashdata('successmsg','Religion Successfully Saved');
		redirect('Setup/religionDtls', 'refresh');	
	}
	
	public function casteDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('caste');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/castedtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editCasteDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata_by_field('caste','caste_id',$id);		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/castedtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveCasteDtls()
	{
		$castename=$this->input->post('castename');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'cname'=>$castename,																				
					'caste_date'=>date('Y-m-d'), 
					'caste_time'=>date('H:i:s'), 
					'caste_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('caste',$dtls);
		$this->session->set_flashdata('successmsg','Caste Successfully Saved');
		redirect('Setup/casteDtls');	
	}
	
	public function updateCasteDtls($id)
	{
		$castename=$this->input->post('castename');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'cname'=>$castename,																				
					'caste_date'=>date('Y-m-d'), 
					'caste_time'=>date('H:i:s'), 
					'caste_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('caste','caste_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Caste Successfully Saved');
		redirect('Setup/casteDtls');	
	}
	
	public function activateCaste($id)
	{
		$this->Globalmodel->activate('caste','caste_id',$id,'caste_flag');	
			
		$this->session->set_flashdata('successmsg','Caste Successfully Saved');
		redirect('Setup/casteDtls', 'refresh');	
	}
	
	
	public function subjectDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata('class');		
		$data['allrec']=$this->Globalmodel->getdata_join('class','class_id','subject','class_id');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/subjectdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editSubjectDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['classsubject']=$this->Globalmodel->getdata_by_field_join('class','class_id','subject','class_id','sub_id',$id);
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('setup/subjectdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveSubjectDtls()
	{
		$classname=$this->input->post('classname');		
		$subjectname=$this->input->post('subjectname');		
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_id'=>$classname,																				
					'subname'=>$subjectname,
					'sub_date'=>date('Y-m-d'), 
					'sub_time'=>date('H:i:s'), 
					'sub_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('subject',$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls');	
	}
	
	public function updateSubjectDtls($id)
	{
		$subjectname=$this->input->post('subjectname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'subname'=>$subjectname,																									
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('subject','sub_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls');	
	}
	
	public function activateSubject($id)
	{
		$this->Globalmodel->activate('subject','sub_id',$id,'sub_flag');
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls', 'refresh');	
	}
	
	
}
