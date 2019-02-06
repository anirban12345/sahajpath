<?php
class Studentmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function getstudenttoclass()
	{
		$this->db->select('*');
		$this->db->from('student');		
		$this->db->join('student_class_map','student.scm_id=student_class_map.scm_id','left');		
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.section_id=section.section_id');				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getstudenttocasteandreligion()
	{
		$this->db->select('*');
		$this->db->from('student');		
		$this->db->join('caste','student.caste_id=caste.caste_id');		
		$this->db->join('religion','student.religion_id=religion.religion_id');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getstudent_class_caste_religion()
	{
		$this->db->select('*');
		$this->db->from('student');		
		$this->db->join('student_class_map','student.scm_id=student_class_map.scm_id');		
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.section_id=section.section_id');				
		$this->db->join('caste','student.caste_id=caste.caste_id');		
		$this->db->join('religion','student.religion_id=religion.religion_id');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getstudent_by_join_regno()
	{
		$this->db->select('*');
		$this->db->from('student');
		$this->db->join('student_class_map','student.scm_id=student_class_map.scm_id');
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');	
		$this->db->join('caste','student.caste_id=caste.caste_id');		
		$this->db->join('religion','student.religion_id=religion.religion_id');				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function class_countstudent()
	{
		$this->db->select('name as classname,count(stuname) as countstudent');
		$this->db->from('student');		
		$this->db->join('student_class_map','student.scm_id=student_class_map.scm_id');		
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.section_id=section.section_id');				
		$this->db->where('scm_session',date("Y"));
		$this->db->group_by('student_class_map.class_id');
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	/* used in fees controller*/
	public function getstudenttoclass_by_regno($regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');		
		$this->db->join('class','student_class_map.scm_classid=class.class_id');		
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');				
		$this->db->where('reg_no',$regno);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	/* used in fees controller*/
	/* used in fees adn student controller*/
	public function get_student_class_section($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');						
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');		
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->where('scm_session',$session);		
		$this->db->where('scm_classid',$classid);
		$this->db->where('scm_sectionid',$sectionid);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function get_student_class_section_by_regno($session,$classid,$regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');						
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');		
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->where('scm_session',$session);		
		$this->db->where('scm_classid',$classid);
		$this->db->where('student.reg_no',$regno);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  	
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function get_student_class_fees_by_regno($session,$classid,$regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');								
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->join('class_fees','student_class_map.scm_classid=class_fees.cfees_classid');		
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');				
		$this->db->where('scm_session',$session);		
		$this->db->where('scm_classid',$classid);
		$this->db->where('student.reg_no',$regno);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  	
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function get_student_paid_fees_by_regno($session,$classid,$regno)
	{
		$this->db->select('*');
		$this->db->from('student_fee');								
		$this->db->join('class','student_fee.sf_classid=class.class_id');
		$this->db->join('student','student_fee.sf_reg_no=student.reg_no');
		$this->db->where('sf_year',$session);		
		$this->db->where('sf_classid',$classid);
		$this->db->where('sf_reg_no',$regno);
		$this->db->order_by('sf_date','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  	
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function get_student_fees_by_regno($regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');										
		$this->db->join('class','student_class_map.scm_classid=class.class_id');		
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');						
		$this->db->join('student','student_class_map.reg_no=student.reg_no');		
		$this->db->where('student.reg_no',$regno);
		$this->db->order_by('scm_session','asc');				
		$this->query=$this->db->get();		
		return $this->query->result();  	
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function is_paid_fees($session,$classid,$month,$regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');								
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');				
		$this->db->join('student','student_class_map.reg_no=student.reg_no');
		$this->db->join('student_fee','student_class_map.scm_classid=student_fee.sf_classid');				
		$this->db->where('sf_year',$session);		
		$this->db->where('sf_classid',$classid);
		$this->db->where('sf_month',$month);
		$this->db->where('sf_reg_no',$regno);
		$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->num_rows();		
	}
	/* used in fees controller*/
	/* used in fees controller*/
	public function get_paidbill($billno)
	{
		$this->db->select('*');				
		$this->db->from('student');						
		$this->db->join('student_fee','student.reg_no=student_fee.sf_reg_no');						
		$this->db->join('student_fee_bill','student_fee.sf_billno=student_fee_bill.sfb_billno');
		$this->db->join('class_fees','student_fee_bill.sfb_feesid=class_fees.cfees_id');		
		$this->db->join('users','student_fee.user_id=users.id');		
		$this->db->where('sf_billno',$billno);
		//$this->db->order_by('stuname','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  	
	}
	/* used in fees controller*/
}
?>