<?php
class Exammodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function updatesectiondata($table,$filterarray,$data)
	{
	   $this->db->where($filterarray);
	   $this->db->update($table,$data);	   
	}
	
	public function get_all_class_exam()
	{
		$this->db->select('*');
		$this->db->from('class_examterm');		
		$this->db->join('class_section','class_examterm.cet_class_id=class_section.cs_id');				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_all_class_exam_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class_term');		
		$this->db->join('class','class_term.cterm_classid=class.class_id');						
		$this->db->where('class_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_all_createdexam($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('exam');	
		
		$this->db->join('class','exam.e_classid=class.class_id');	
		
		$this->db->join('class_section','exam.e_sectionid=class_section.csec_id');
		
		$this->db->join('class_subject','exam.e_subjectid=class_subject.csub_id');
		
		$this->db->join('class_term','exam.e_termid=class_term.cterm_id');
		
		$this->db->where('e_session',$session);
		$this->db->where('e_classid',$classid);
		$this->db->where('e_sectionid',$sectionid);
		//$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_all_createdexam_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('exam');				
		$this->db->join('class','exam.e_classid=class.class_id');		
		$this->db->join('class_section','exam.e_sectionid=class_section.csec_id');		
		$this->db->join('class_subject','exam.e_subjectid=class_subject.csub_id');	
		$this->db->join('class_term','exam.e_termid=class_term.cterm_id');	
		$this->db->where('e_session',date('Y'));
		$this->db->where('e_id',$id);
		$this->db->order_by('e_date','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_student_class_section($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');
		$this->db->join('class','student_class_map.scm_classid=class.class_id');		
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');				
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->where('scm_session',$session);
		$this->db->where('csec_id',$sectionid);		
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_student_class_section_by_regno($session,$classid,$sectionid,$regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');						
		$this->db->join('class_section','student_class_map.classsection_id=class_section.cs_id');		
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->where('scm_session',$session);		
		$this->db->where('cs_id',$sectionid);
		$this->db->where('student.reg_no',$regno);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_student_exam_marks($session,$classid,$sectionid)
	{
		$this->db->select('*');		
		$this->db->from('exam');						
		$this->db->join('class','exam.e_classid=class.class_id');				
		$this->db->join('class_section','exam.e_sectionid=class_section.csec_id');				
		$this->db->join('class_subject','exam.e_subjectid=class_subject.csub_id');	
		$this->db->join('class_term','exam.e_termid=class_term.cterm_id');	
		$this->db->join('report','report.r_e_id=exam.e_id');
		$this->db->join('student','student.reg_no=report.r_reg_no');		
		$this->db->where('e_session',$session);
		$this->db->where('e_classid',$classid);
		$this->db->where('e_sectionid',$sectionid);		
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	public function get_student_exam_marks_withallsection($session)
	{
		$this->db->select('*');		
		$this->db->from('exam');						
		$this->db->join('class','exam.e_classid=class.class_id');
		$this->db->join('class_section','exam.e_sectionid=class_section.csec_id');		
		$this->db->join('class_subject','exam.e_subjectid=class_subject.csub_id');				
		$this->db->join('class_term','exam.e_termid=class_term.cterm_id');				
		$this->db->join('report','report.r_e_id=exam.e_id');
		$this->db->join('student','student.reg_no=report.r_reg_no');		
		$this->db->where('e_session',$session);
		//$this->db->where('e_classid',$classid);		
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	public function get_student_exam_marks_by_regno($session,$classid,$sectionid,$regno)
	{
		$this->db->select('*');		
		$this->db->from('exam');						
		$this->db->join('class_section','exam.e_sectionid=class_section.cs_id');		
		$this->db->join('subject','exam.e_subjectid=subject.sub_id');		
		$this->db->join('examterm','exam.e_termid=examterm.et_id');			
		$this->db->join('report','report.r_e_id=exam.e_id');
		$this->db->join('student','student.reg_no=report.r_reg_no');		
		$this->db->where('e_session',$session);
		$this->db->where('e_classid',$classid);
		$this->db->where('e_sectionid',$sectionid);
		$this->db->where('student.reg_no',$regno);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_unassigned_student($session,$classid)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');						
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		//$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->where('scm_session',$session);
		$this->db->where('scm_classid',$classid);
		$this->db->where('scm_sectionid','0');
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_report_by_exam($id)
	{
		$this->db->select('*');
		$this->db->from('exam');						
		$this->db->join('report','exam.e_id=report.r_e_id');
		$this->db->where('e_id',$id);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>