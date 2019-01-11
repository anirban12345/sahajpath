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
		$this->db->join('section','student_class_map.class_id=section.section_id');				
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
		$this->db->join('student_class_map','student.scm_id=student_class_map.scm_id','left');		
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.class_id=section.section_id');				
		$this->db->join('caste','student.caste_id=caste.caste_id');		
		$this->db->join('religion','student.religion_id=religion.religion_id');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getstudent_by_join_regno()
	{
		$this->db->select('*');
		$this->db->from('student');		
		$this->db->join('student_class_map','student.reg_no=student_class_map.reg_no','left');
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.class_id=section.section_id');	
		$this->db->join('caste','student.caste_id=caste.caste_id');		
		$this->db->join('religion','student.religion_id=religion.religion_id');				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getstudenttoclass_by_regno($regno)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');		
		$this->db->join('class','student_class_map.class_id=class.class_id');
		$this->db->join('section','student_class_map.class_id=section.section_id');		
		$this->db->where('reg_no',$regno);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	
}

?>