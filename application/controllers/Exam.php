<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct(); 
		$this->load->helper(array('url','html','form','download')); 
		ini_set('post_max_size', '64M');
		ini_set('memory_limit', '256M');
		ini_set('upload_max_filesize', '500M');
		date_default_timezone_set('Asia/Kolkata');		
    }
	
	public function index()
	{	
		
	}
	
	/*
	public function addExam()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata_by_field('class_section','cs_parentid',0);
		$data['examterm']=$this->Globalmodel->getdata_by_field('examterm','et_flag','1');
		$this->load->view('header',$data);		
		$this->load->view('exam/addexam',$data);
		$this->load->view('exam/footer');	
	}
	
	public function editExamdtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['allrec']=$this->Exammodel->get_all_class_exam_by_id($id);	
		
		//print_r($data['allrec']);
		
		$data['examterm']=$this->Globalmodel->getdata_by_field('examterm','et_flag','1');
		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('exam/examdtls_edit',$data);
		$this->load->view('exam/footer');			
	}	
		
	public function examDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');	
		
		$data['allrec']=$this->Exammodel->get_all_class_exam();
		
		for($i=0; $i<count($data['allrec']); $i++) 
		{
			$sub_id = explode(",",$data['allrec'][$i]->cet_et_id);
			$c_fee = "";
			for($j=0; $j<count($sub_id); $j++) 
			{
				$ur = $this->Globalmodel->getdata_by_field('examterm','et_id',$sub_id[$j]);
				
				//print_r($ur);
				
				if($j == count($sub_id)-1)
					$c_fee .= $ur[0]->termname;
				else
					$c_fee .= $ur[0]->termname . ",<br>";
			}
			$data['allrec'][$i]->c_fee = $c_fee;
		}
		
		$this->load->view('header',$data);
		$this->load->view('exam/examdtls',$data);
		$this->load->view('exam/footer');	
	}
	
	public function issexistsExamDtls($class_id)
	{
		$data['rec']=$this->Globalmodel->getdata_by_field('class_examterm','cet_class_id',$class_id);
		return count($data['rec'][0]);
	}
	
	public function saveExamDtls()
	{
		$classid=$this->input->post('classid');				
		$examterm=implode(",", $this->input->post('examterm'));
		$userid=$this->session->userdata('userid');
		
		$c=$this->issexistsExamDtls($classid);
		
		//print_r($c);
		
		
		if($c==0)
		{
			$dtls=array(
						'cet_class_id'=>$classid,
						'cet_et_id'=>$examterm,
						'cet_date'=>date('Y-m-d'), 
						'cet_time'=>date('H:i:s'), 
						'cet_flag'=>1,
						'user_id'=>$userid
						);
			$this->Globalmodel->savedata('class_examterm',$dtls);
			$this->session->set_flashdata('successmsg','Examination Successfully Saved');
			redirect('Exam/examDtls');		
		}
		else
		{
			$this->session->set_flashdata('errmsg','Fees Already Added! Please Edit Fees Respect to Class');
			redirect('Exam/examDtls');
		}
	}
	
	public function updateExamDtls($id)
	{
		$classid=$this->input->post('classid');				
		$examterm=implode(",", $this->input->post('examterm'));
		$userid=$this->session->userdata('userid');
		
		
			$dtls=array(
						'cet_class_id'=>$classid,
						'cet_et_id'=>$examterm,
						'cet_date'=>date('Y-m-d'), 
						'cet_time'=>date('H:i:s'), 
						'cet_flag'=>1,
						'user_id'=>$userid
						);
		$this->Globalmodel->updatedata('class_examterm','cet_id',$id,$dtls);
		
		$this->session->set_flashdata('successmsg','Examination Successfully Saved');
		redirect('Exam/examDtls');			
	}
	*/
	
	public function createExam()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');			
		$data['class']=$this->Globalmodel->getdata('class');		
		$this->load->view('header',$data);
		$this->load->view('exam/createexam',$data);
		$this->load->view('exam/footer');
	}
	
	public function searchExam()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('exam/searchexam',$data);
		$this->load->view('exam/footer');
	}
	
	public function createExamDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		
		//print_r($session.$classid.$sectionid);
		
		$data['allrec']=$this->Exammodel->get_all_createdexam($session,$classid,$sectionid);
		
		//print_r($data['allrec']);
		
		$this->load->view('header',$data);
		$this->load->view('exam/createexamdtls',$data);
		$this->load->view('exam/footer');
	}
	
	public function saveCreateExam()
	{
		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$section=$this->input->post('sectionid');
		$subject=$this->input->post('subjectid');
		$examterm=$this->input->post('termid');
		$edate=date('Y-m-d',strtotime($this->input->post('edate')));
		$desc=$this->input->post('desc');
		$userid=$this->session->userdata('userid');
		
		//print_r($classid.'-'.$section.'-'.$subject.'-'.$examterm);
		
		$dtls=array(
						'e_session'=>$session,
						'e_classid'=>$classid,
						'e_sectionid'=>$section,
						'e_subjectid'=>$subject,
						'e_termid'=>$examterm,
						'e_date'=>$edate,
						'e_desc'=>$desc,
						'e_crt_date'=>date('Y-m-d'), 
						'e_crt_time'=>date('H:i:s'), 
						'e_crt_flag'=>1,
						'user_id'=>$userid
					);
		$this->Globalmodel->savedata('exam',$dtls);
		$this->session->set_flashdata('successmsg','Examination Successfully Created');
		redirect('Exam/searchExam');
	}
	
	public function searchMarks()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('exam/searchmarks',$data);
		$this->load->view('exam/footer');
	}
	
	public function createMarksDtls()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		$session=$this->input->post('session');
		
		$data['sturec']=$this->Exammodel->get_all_createdexam($session,$classid,$sectionid);
		
		$this->load->view('header',$data);
		$this->load->view('exam/createmarksdtls',$data);
		$this->load->view('exam/footer');
	}
	
	public function createMarksEntry($id)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['allrec']=$this->Exammodel->get_all_createdexam_by_id($id);
		
		//print_r($data['allrec'][0]->e_sectionid);		
		$classid=$data['allrec'][0]->e_classid;
		$sectionid=$data['allrec'][0]->e_sectionid;
		$session=$data['allrec'][0]->e_session;
		
		$data['sturec']=$this->Exammodel->get_student_class_section($session,$classid,$sectionid);
		
		$data['examrec']=$this->Exammodel->get_report_by_exam($id);
		//print_r(count($data['examrec']));
		
		if(count($data['examrec'])>0)
		{
			$this->load->view('header',$data);
			$this->load->view('exam/createmarksedit',$data);
			$this->load->view('exam/footer');
		}
		else
		{
			$this->load->view('header',$data);
			$this->load->view('exam/createmarksentry',$data);
			$this->load->view('exam/footer');	
		}
	}
	
	public function saveMarksDtls()
	{
		$examid=$this->input->post('examid');
		$regno=$this->input->post('regno');
		$marks=$this->input->post('marks');
		$userid=$this->session->userdata('userid');
		
		//print_r($examid);
		//print_r($regno);
		//print_r($marks);
		
		for($i=0;$i<count($regno);$i++)
		{
		$dtls=array(
						'r_e_id'=>$examid,
						'r_reg_no'=>$regno[$i],
						'r_marks'=>$marks[$i],
						'r_date'=>date('Y-m-d'), 
						'r_time'=>date('H:i:s'), 
						'r_flag'=>1,
						'user_id'=>$userid
					);
		$this->Globalmodel->savedata('report',$dtls);
		}		
		$this->session->set_flashdata('successmsg','Marks Successfully Created');		
		redirect('Exam/searchMarks');
	}
	
	public function updateMarksDtls($id)
	{
		//print_r($id);
		$examid=$this->input->post('examid');
		$regno=$this->input->post('regno');
		$reportid=$this->input->post('reportid');
		$marks=$this->input->post('marks');
		$userid=$this->session->userdata('userid');
		
		for($i=0;$i<count($regno);$i++)
		{
			$dtls=array(
						'r_e_id'=>$examid,
						'r_reg_no'=>$regno[$i],
						'r_marks'=>$marks[$i],
						'r_date'=>date('Y-m-d'), 
						'r_time'=>date('H:i:s'), 
						'r_flag'=>1,
						'user_id'=>$userid
					);
					
			$this->Globalmodel->updatedata('report','report_id',$reportid[$i],$dtls);
		}		
		$this->session->set_flashdata('successmsg','Marks Successfully Created');		
		redirect('Exam/searchMarks');
	}
	
	public function searchPromotion()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');			
		$data['class']=$this->Globalmodel->getdata('class');		
		$this->load->view('header',$data);
		$this->load->view('exam/searchpromotion',$data);
		$this->load->view('exam/footer');
	}
	
	public function createPromotionDtls()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');

		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		$session=$this->input->post('session');
		
		//$data['sturec']=$this->Exammodel->get_student_class_section($session,$classid,$sectionid);
		
		$data['class']=$this->Globalmodel->getdata('class');		
		
		$data['sturec']=$this->Exammodel->get_student_class_section($session,$classid,$sectionid);
		
		$data['stumarks']=$this->Exammodel->get_student_exam_marks($session,$classid,$sectionid);	
		
		$this->load->view('header',$data);
		$this->load->view('exam/createpromotiondtls',$data);
		$this->load->view('exam/footer');
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
	
	public function savePromotion()
	{ 
		$session=$this->input->post('session');		
		$classid=$this->input->post('classid');		
		//$sectionid=$this->input->post('section');
		$userid=$this->session->userdata('userid');
		$regno=$this->input->post('regno');
		
		//print_r($session.'-'.$classid.'-'.$userid);		
		
		for($i=0;$i<count($regno);$i++)
		{
			$flag=$this->isStudentExisttoClass($session,$regno[$i]);
			
				if($flag>0)
				{
					$this->session->set_flashdata('errmsg','Student Already Exists to Class');
					redirect('Exam/searchPromotion');
				}
				else
				{
					$dtls=array(
								'reg_no'=>$regno[$i], 
								'scm_session'=>$session,
								'scm_classid'=>$classid, 
								'scm_sectionid'=>0,
								'scm_date'=>date('Y-m-d'), 
								'scm_time'=>date('H:i:s'), 
								'scm_flag'=>1,
								'user_id'=>$userid
								);			
					$this->Globalmodel->savedata('student_class_map',$dtls);
					//print_r($scmid);
					
					$data['student']=$this->Globalmodel->getdata_by_field_array('student_class_map',array('scm_session'=>$session,'reg_no'=>$regno[$i]));
					
					foreach($data['student'] as $r)
					{
						$dtls2=array('scm_id'=>$r->scm_id);					
						$this->Globalmodel->updatedata('student','reg_no',$regno[$i],$dtls2);							
					}
					
				}		
		}
		$this->session->set_flashdata('successmsg','Student Successfully Promoted to Class');
		redirect('Exam/searchPromotion');
	}
	
	public function searchStudent()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');			
		
		$data['class']=$this->Globalmodel->getdata('class');		
		
		$this->load->view('header',$data);
		$this->load->view('exam/searchstudent',$data);
		$this->load->view('exam/footer');
	}
	
	public function assignStudenttoSection()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$session=$this->input->post('session');
		$classid=$this->input->post('classname');		
		
		$data['section']=$this->Globalmodel->getdata_by_field('class_section','csec_classid',$classid);		
		
		//print_r($session.'-'.$classid);
		
		$data['sturec']=$this->Exammodel->get_unassigned_student($session,$classid);		
		
		$data['stumarks']=$this->Exammodel->get_student_exam_marks_withallsection($session-1);	
		
		//print_r($data['sturec']);
		
		$this->load->view('header',$data);
		$this->load->view('exam/assignstudenttosection',$data);
		$this->load->view('exam/footer');
		
	}
	
	public function saveStudenttoSection()
	{
		$regno=$this->input->post('regno');
		$session=$this->input->post('session');
		$classid=$this->input->post('classid');
		$sectionid=$this->input->post('sectionid');		
		$selsec=$this->input->post('selsec');
		
		//print_r($regno);
		//print_r($selsec);
		//print_r($session.'-'.$classid.'-'.$sectionid);
		
		
		$data=array(
					'scm_sectionid'=>$sectionid
					);
		
		for($i=0;$i<count($selsec);$i++)
		{
			$filterarray=array('scm_session'=>$session,'reg_no'=>$regno[$i]);	
			$this->Exammodel->updatesectiondata('student_class_map',$filterarray,$data);
		
		}
		$this->session->set_flashdata('successmsg','Student Successfully Added to Section');
		redirect('Exam/searchStudent');		
	}
	
	public function searchReport()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata('class');		
		$this->load->view('header',$data);
		$this->load->view('exam/searchreport',$data);
		$this->load->view('exam/footer');
	}
	
	public function createReportDtls()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');

		
			$classid=$this->input->post('classname');
			$sectionid=$this->input->post('section');
			$session=$this->input->post('session');
			$this->session->set_userdata('classid',$classid);
			$this->session->set_userdata('sectionid',$sectionid);
			$this->session->set_userdata('session',$session);
		
		$data['stuexam']=$this->Exammodel->get_student_exam_marks($session,$classid,$sectionid);
		
		$data['sturec']=$this->Exammodel->get_student_class_section($session,$classid,$sectionid);
		
		//$data['stuexam']=$this->Exammodel->get_all_createdexam($session,$classid,$sectionid);
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('exam/createreportdtls',$data);
		$this->load->view('exam/footer');
	}
	
	public function viewReportCard($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$classid=$this->session->userdata('classid');
		$sectionid=$this->session->userdata('sectionid');
		$session=$this->session->userdata('session');
		
		$data['stuexam']=$this->Exammodel->get_student_exam_marks_by_regno($session,$classid,$sectionid,$regno);		
		$data['sturec']=$this->Exammodel->get_student_class_section_by_regno($session,$classid,$sectionid,$regno);
		
		for($i=0;$i<count($data['sturec']);$i++)
		{
			$data['sturec'][$i]->classname=$this->Globalmodel->getdata_by_field('class_section','cs_id',$data['sturec'][$i]->cs_parentid);				
		}
		
		$this->load->view('header',$data);
		$this->load->view('exam/viewreportcard',$data);
		$this->load->view('exam/footer');
	}
	
	public function get_student_class_section_ajax()
	{
		$classid=$this->input->post('class');
		$sectionid=$this->input->post('section');
		$session=$this->input->post('session');
		
		$data['sturec']=$this->Exammodel->get_student_class_section($session,$classid,$sectionid);
		
		if(count($data['sturec'])>0) { echo "1"; }		
		else{ echo "0";}		
	}
	
	public function getSubject()
	{
	    $classid=$this->input->post('classid');
		$data['subject']=$this->Subjectmodel->get_all_class_subject_by_id($classid);
		foreach($data['subject'] as $r)
		{
			$str.='<option value="'.$r->csub_id.'">'.$r->csub_name.'</option>';
		}
		echo $str;
	}
	
	public function getTerm()
	{
	    $classid=$this->input->post('classid');
		$data['examterm']=$this->Exammodel->get_all_class_exam_by_id($classid);
		foreach($data['examterm'] as $r)
		{
			$str.='<option value="'.$r->cterm_id.'">'.$r->cterm_name.'</option>';
		}
		echo $str;
	}
	
}
