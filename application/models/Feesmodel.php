<?php
class Feesmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function getfees_from_all($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');		
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');
		$this->db->join('class_fees','class.class_id=class_fees.cfees_classid');			
		$this->db->order_by('class.class_id','asc');	
		$this->db->where('scm_session',$session);
		$this->db->where('scm_classid',$classid);
		$this->db->where('scm_sectionid',$sectionid);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	
	public function getfees_status($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('student_class_map');		
		$this->db->join('class','student_class_map.scm_classid=class.class_id');
		$this->db->join('class_section','student_class_map.scm_sectionid=class_section.csec_id');
		$this->db->join('student','student.reg_no=student_class_map.reg_no');			
		$this->db->join('student_fee','student_fee.sf_reg_no=student_class_map.reg_no','left');			
		$this->db->order_by('class.class_id','asc');	
		$this->db->where('scm_session',$session);
		$this->db->where('scm_classid',$classid);
		$this->db->where('scm_sectionid',$sectionid);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>