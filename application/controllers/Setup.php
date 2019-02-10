<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct(); 
		$this->load->helper(array('url','html','form','download')); 
		ini_set('post_max_size', '1000M');
		ini_set('upload_max_filesize', '1000M');
		date_default_timezone_set('Asia/Kolkata');		
    }
	
	public function index()
	{	
		
	}
	/*   School Start  */
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
	/*   School End  */
	/*   Class Start  */
	public function classDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('class');				
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
		$this->load->view('header',$data);
		$this->load->view('setup/classdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveClassDtls()
	{
		$classname=$this->input->post('classname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_name'=>$classname,						
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
		$classname=$this->input->post('classname');				
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_name'=>$classname,						
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
	/*   Class End  */
	/*   Religion Start  */
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
	/*   Religion End  */
	/*   Caste  Start */
	public function casteDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('caste');				
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
	/*   Caste End  */	
	
	/*   Section  Start */
	public function sectionDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		
		$data['class']=$this->Globalmodel->getdata('class');						
		
		$this->load->view('header',$data);
		$this->load->view('setup/sectiondtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editSectionDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['classsection']=$this->Setupmodel->get_all_class_section_by_id($id);		
		$this->load->view('header',$data);
		$this->load->view('setup/sectiondtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveSectionDtls()
	{
	    $classid=$this->input->post('classname');		
		$sectionname=$this->input->post('sectionname');		
		$userid=$this->session->userdata('userid');
		$dtls=array(
					'csec_classid'=>$classid,
					'csec_name'=>$sectionname,
					'csec_parentid'=>0,
					'csec_date'=>date('Y-m-d'), 
					'csec_time'=>date('H:i:s'), 
					'csec_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_section',$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/sectionDtls','refresh');	
	}
	
	public function updateSectionDtls($id)
	{
		$classid=$this->input->post('classname');		
		$sectioname=$this->input->post('sectioname');		
		$userid=$this->session->userdata('userid');
		$dtls=array(
					'csec_classid'=>$classid,
					'csec_name'=>$sectioname,
					'csec_parentid'=>0,
					'csec_date'=>date('Y-m-d'), 
					'csec_time'=>date('H:i:s'), 
					'csec_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_section','csec_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/sectionDtls');	
	}
	
	public function activateSection($id)
	{
		$this->Globalmodel->activate('class_section','csec_id',$id,'csub_flag');
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/sectionDtls', 'refresh');	
	}
	/*   Section End  */	
	/*   Subject  Start */
	public function subjectDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		
		$data['class']=$this->Globalmodel->getdata('class');						
		
		$this->load->view('header',$data);
		$this->load->view('setup/subjectdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editSubjectDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['classsubject']=$this->Setupmodel->get_all_class_subject_by_id($id);		
		$this->load->view('header',$data);
		$this->load->view('setup/subjectdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveSubjectDtls()
	{
	    $classid=$this->input->post('classname');		
		$subjectname=$this->input->post('subjectname');		
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'csub_classid'=>$classid,
					'csub_name'=>$subjectname,
					'csub_parentid'=>0,
					'csub_date'=>date('Y-m-d'), 
					'csub_time'=>date('H:i:s'), 
					'csub_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_subject',$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls','refresh');	
	}
	
	public function updateSubjectDtls($id)
	{
		$classid=$this->input->post('classname');		
		$subjectname=$this->input->post('subjectname');		
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'csub_classid'=>$classid,
					'csub_name'=>$subjectname,
					'csub_parentid'=>0,
					'csub_date'=>date('Y-m-d'), 
					'csub_time'=>date('H:i:s'), 
					'csub_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_subject','csub_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls');	
	}
	
	public function activateSubject($id)
	{
		$this->Globalmodel->activate('class_subject','csub_id',$id,'csub_flag');
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls', 'refresh');	
	}
	/*   Subject End  */	
	
	
	/*   Chapter  Start */
	public function chapterDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		
		$data['class']=$this->Globalmodel->getdata('class');						
		
		$this->load->view('header',$data);
		$this->load->view('setup/chapterdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function addChapterDtls()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$classid=$this->input->post('classname');
		$subject=$this->input->post('subject');
		
		$filterarray=array('csub_classid'=>$classid,'csub_id'=>$subject);
		$data['chapter']=$this->Globalmodel->getdata_by_field_join_array('class_subject','csub_id','class_subject_chapter','chap_subjectid',$filterarray);	
		
		$data['class']=$this->Globalmodel->getdata_by_field('class','class_id',$classid);
		$data['subject']=$this->Globalmodel->getdata_by_field('class_subject','csub_id',$subject);
		
		$this->load->view('header',$data);
		$this->load->view('setup/chapterdtls_add',$data);
		$this->load->view('setup/footer');
	}
	
	public function editChapterDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['classsubject']=$this->Setupmodel->get_all_class_subject_by_id($id);		
		$this->load->view('header',$data);
		$this->load->view('setup/subjectdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveChapterDtls($time,$subid)
	{
				$config['upload_path']     = './uploads/lesson/';
				$config['file_name']       = $time.'.pdf';				
                $config['allowed_types']   = 'pdf';
                $config['max_size']        = 0;                
				$config['overwrite'] 	   = TRUE;
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                if (!$this->upload->do_upload('pdfscan'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('errmsg', $error->error);
                    redirect('Setup/chapterDtls');
                }
                else
                { 
					$chapter=$this->input->post('chaptername');
					$userid=$this->session->userdata('userid');
		
					$dtls=array(
								'chap_subjectid'=>$subid,
								'chap_name'=>$chapter,
								'chap_filename'=>$time.'.pdf',								
								'chap_date'=>date('Y-m-d'), 
								'chap_time'=>date('H:i:s'), 
								'chap_flag'=>1,
								'user_id'=>$userid
								);
					$this->Globalmodel->savedata('class_subject_chapter',$dtls);					
                    $data = array('upload_data' => $this->upload->data());					
					$this->session->set_flashdata('successmsg','Chapter Successfully Saved');
					redirect('Setup/chapterDtls');	
                }		
	}
	
	public function updateChapterDtls($id)
	{
		$classid=$this->input->post('classname');		
		$subjectname=$this->input->post('subjectname');		
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'csub_classid'=>$classid,
					'csub_name'=>$subjectname,
					'csub_parentid'=>0,
					'csub_date'=>date('Y-m-d'), 
					'csub_time'=>date('H:i:s'), 
					'csub_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_subject','csub_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls');	
	}
	
	public function viewChapter($chapterid)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		
		$data['chapter']=$this->Globalmodel->getdata_by_field('class_subject_chapter','chap_id',$chapterid);						
		
		$this->load->view('header',$data);
		$this->load->view('setup/chapterdtls_view',$data);
		$this->load->view('setup/footer');	
	}
	
	public function activateChapter($id)
	{
		$this->Globalmodel->activate('class_subject','csub_id',$id,'csub_flag');
		$this->session->set_flashdata('successmsg','Subject Successfully Saved');
		redirect('Setup/subjectDtls', 'refresh');	
	}
	/*   Chapter End  */
	
	/*   Fees Start */
	public function feesDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		$data['class']=$this->Globalmodel->getdata('class');								
		$this->load->view('header',$data);
		$this->load->view('setup/feesdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editFeesDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		$data['classfees']=$this->Setupmodel->get_all_class_fees_by_id($id);					
		$this->load->view('header',$data);
		$this->load->view('setup/feesdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveFeesDtls()
	{
		$classid=$this->input->post('classname');	
		$fhead=$this->input->post('fhead');	
		$frs=$this->input->post('frs');	
		$userid=$this->session->userdata('userid');
		$dtls=array(
					'cfees_classid'=>$classid,
					'cfees_name'=>$fhead,
					'cfees_fees'=>$frs,
					'cfees_parentid'=>0,
					'cfees_date'=>date('Y-m-d'), 
					'cfees_time'=>date('H:i:s'), 
					'cfees_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_fees',$dtls);
		$this->session->set_flashdata('successmsg','fees Successfully Saved');
		redirect('Setup/feesDtls');	
	}
	
	public function updateFeesDtls($id)
	{
		$classid=$this->input->post('classname');	
		$fhead=$this->input->post('fhead');	
		$frs=$this->input->post('frs');	
		$userid=$this->session->userdata('userid');
		$dtls=array(
					'cfees_classid'=>$classid,
					'cfees_name'=>$fhead,
					'cfees_fees'=>$frs,
					'cfees_parentid'=>0,
					'cfees_date'=>date('Y-m-d'), 
					'cfees_time'=>date('H:i:s'), 
					'cfees_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_fees','cfees_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Fees Successfully Saved');
		redirect('Setup/feesDtls');	
	}
	
	public function activateFees($id)
	{
		$this->Globalmodel->activate('class_fees','cfees_id',$id,'cfees_flag');	
			
		$this->session->set_flashdata('successmsg','Fees Successfully Saved');
		redirect('Setup/feesDtls', 'refresh');	
	}
	/*   Fees End  */	
	/* Exam Term Start*/	
	public function termDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata('class');				
		$this->load->view('header',$data);
		$this->load->view('setup/termdtls',$data);
		$this->load->view('setup/footer');	
	}
	
	public function editTermDtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['classterm']=$this->Setupmodel->get_all_class_term_by_id($id);				
		$this->load->view('header',$data);
		$this->load->view('setup/termdtls_edit',$data);
		$this->load->view('setup/footer');	
	}
	
	public function saveTermDtls()
	{
		$classid=$this->input->post('classname');	
		$termname=$this->input->post('termname');		
		$totalmarks=$this->input->post('totalmarks');	
		$passmarks=$this->input->post('passmarks');	
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'cterm_classid'=>$classid,
					'cterm_name'=>$termname,
					'cterm_totalmarks'=>$totalmarks,
					'cterm_passmarks'=>$passmarks,
					'cterm_parentid'=>0,
					'cterm_date'=>date('Y-m-d'), 
					'cterm_time'=>date('H:i:s'), 
					'cterm_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_term',$dtls);
		$this->session->set_flashdata('successmsg','Exam Term Successfully Saved');
		redirect('Setup/termDtls');	
	}
	
	public function updateTermDtls($id)
	{
		$classid=$this->input->post('classname');	
		$termname=$this->input->post('termname');		
		$totalmarks=$this->input->post('totalmarks');	
		$passmarks=$this->input->post('passmarks');	
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'cterm_classid'=>$classid,
					'cterm_name'=>$termname,
					'cterm_totalmarks'=>$totalmarks,
					'cterm_passmarks'=>$passmarks,
					'cterm_parentid'=>0,
					'cterm_date'=>date('Y-m-d'), 
					'cterm_time'=>date('H:i:s'), 
					'cterm_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_term','cterm_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Exam Term Successfully Saved');
		redirect('Setup/termDtls');	
	}
	
	public function activateTerm($id)
	{
		$this->Globalmodel->activate('class_term','cterm_id',$id,'cterm_flag');	
			
		$this->session->set_flashdata('successmsg','Exam Term Successfully Saved');
		redirect('Setup/termDtls', 'refresh');	
	}
	/* Exam Term End */	
}
