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
		$this->db->join('class_section','student_class_map.tcm_sectionid=class_section.csec_id');
		$this->db->join('class_fees','student_class_map.tcm_subid=class_fees.cfees_id');			
		$this->db->order_by('class.class_id','asc');	
		$this->db->where('tcm_session',$session);
		$this->db->where('tcm_classid',$classid);
		$this->db->where('tcm_sectionid',$sectionid);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>