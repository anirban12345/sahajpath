<?php
class Setupmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_all_class_section_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class');		
		$this->db->join('class_section','class_section.csec_classid=class.class_id');				
		$this->db->where('csec_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();
	}
	
	public function get_all_class_subject_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class');		
		$this->db->join('class_subject','class_subject.csub_classid=class.class_id');				
		$this->db->where('csub_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();
	}
	
	public function get_all_class_fees_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class');		
		$this->db->join('class_fees','class_fees.cfees_classid=class.class_id');				
		$this->db->where('cfees_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();
	}
	
	public function get_all_class_term_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class');		
		$this->db->join('class_term','class_term.cterm_classid=class.class_id');				
		$this->db->where('cterm_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();
	}
}

?>