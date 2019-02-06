<?php
class Teachermodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function getteacher_from_all($session,$classid,$sectionid)
	{
		$this->db->select('*');
		$this->db->from('teacher_class_map');		
		$this->db->join('class','teacher_class_map.tcm_classid=class.class_id');
		$this->db->join('class_section','teacher_class_map.tcm_sectionid=class_section.csec_id');
		$this->db->join('class_subject','teacher_class_map.tcm_subid=class_subject.csub_id');	
		$this->db->join('users','teacher_class_map.tcm_userid=users.id');
		$this->db->order_by('class.class_id','asc');	
		$this->db->where('tcm_session',$session);
		$this->db->where('tcm_classid',$classid);
		$this->db->where('tcm_sectionid',$sectionid);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getteacher_from_all_byfilter($array)
	{
		$this->db->select('*');
		$this->db->from('teacher_class_map');		
		$this->db->join('class','teacher_class_map.tcm_classid=class.class_id');
		$this->db->join('class_section','teacher_class_map.tcm_sectionid=class_section.csec_id');
		$this->db->join('class_subject','teacher_class_map.tcm_subid=class_subject.csub_id');	
		$this->db->join('users','teacher_class_map.tcm_userid=users.id');				
		$this->db->where($array);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	
}

?>